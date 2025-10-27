<?php
include '../../config/config.php';

if (isset($_POST['id'])) {
    $id = intval($_POST['id']);

    // Get image path before deleting
    $stmt = $conn->prepare("SELECT image_path FROM projects WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $image_path = $row['image_path'];

        // Delete project from database
        $delete = $conn->prepare("DELETE FROM projects WHERE id = ?");
        $delete->bind_param("i", $id);
        if ($delete->execute()) {
            // Delete image file from uploads folder
            if (!empty($image_path) && file_exists($image_path)) {
                unlink($image_path);
            }
            echo "deleted";
        } else {
            echo "db_error";
        }
        $delete->close();
    } else {
        echo "not_found";
    }

    $stmt->close();
} else {
    echo "invalid";
}

$conn->close();
?>
