<?php
include '../../config/config.php';

// Fetch all projects — pinned ones first
$sql = "SELECT id, title, description, image_path, pinned 
        FROM projects 
        ORDER BY pinned DESC, id DESC";

$result = $conn->query($sql);

$projects = [];
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Make sure pinned is always an integer (0 or 1)
        $row['pinned'] = (int)$row['pinned'];
        $projects[] = $row;
    }
}

// Return JSON
header('Content-Type: application/json');

// Assign default image if missing
foreach ($projects as &$project) {
    if (empty($project['image_path'])) {
        $project['image_path'] = '../../images/default_project.png';
    }
}

echo json_encode($projects);

?>
