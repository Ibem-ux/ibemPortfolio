<?php
include '../../config/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'] ?? '';
    $description = $_POST['content'] ?? '';

    // Check if fields are not empty
    if (empty($title) || empty($description)) {
        echo "missing_fields";
        exit;
    }

    // Create uploads folder if it doesn’t exist
    $upload_dir = "../../uploads/";
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }

    $image_path = "";

    // If image is uploaded
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $image_name = time() . "_" . basename($_FILES["image"]["name"]);
        $target_path = $upload_dir . $image_name;

        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_path)) {
            $image_path = $target_path;
        } else {
            echo "upload_failed";
            exit;
        }
    }

    // Save to database
    $stmt = $conn->prepare("INSERT INTO projects (title, description, image_path) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $title, $description, $image_path);

    if ($stmt->execute()) {
        echo "success";
    } else {
        echo "db_error";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "invalid_request";
}
?>
