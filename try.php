<?php
session_start();
include "connect.php";

if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}
$email = $_SESSION['email'];

$query = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
$row = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <div style="text-align:center; padding:15%;">
        <p style="font-size:50px; font-weight:bold;">
            Hello <?php echo $row['firstName'] . " " . $row['lastName']; ?>!
        </p>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
