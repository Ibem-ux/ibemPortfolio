<?php
session_start();
include 'connect.php';

// --- SIGN UP SECTION ---
if (isset($_POST['signup'])) {
    $firstName = trim($_POST['fName']);
    $lastName = trim($_POST['lName']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Encrypt password for security
    $hashedPassword = md5($password);

    // Check if email already exists
    $checkEmail = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $checkEmail);

    if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('Email already exists! Please use another.'); window.location.href='index.php';</script>";
        exit();
    } else {
        // Insert new user
        $insertQuery = "INSERT INTO users (firstName, lastName, email, password)
                        VALUES ('$firstName', '$lastName', '$email', '$hashedPassword')";
        if (mysqli_query($conn, $insertQuery)) {
            echo "<script>alert('Registration successful! You may now log in.'); window.location.href='index.php';</script>";
            exit();
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}

// --- SIGN IN SECTION ---
if (isset($_POST['signin'])) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $hashedPassword = md5($password);

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$hashedPassword'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);

        // ✅ Store user info into session
        $_SESSION['id'] = $row['id'];
        $_SESSION['fname'] = $row['firstName'];
        $_SESSION['lname'] = $row['lastName'];
        $_SESSION['email'] = $row['email'];

        // ✅ Redirect to your main page
        header("Location: mainPage.php");
        exit();
    } else {
        echo "<script>alert('Incorrect email or password!'); window.location.href='index.php';</script>";
        exit();
    }
}
?>
