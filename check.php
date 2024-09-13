<?php
include("database.php");
session_start(); // Start the session

$email = $_POST['email'];
$password = $_POST['pass'];

// Escape user input to prevent SQL injection
$email = mysqli_real_escape_string($conn, $email);
$password = mysqli_real_escape_string($conn, $password);

$sql = "SELECT id FROM users WHERE email='$email' AND pass='$password'";
$result = mysqli_query($conn, $sql);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION["userid"] = $row['id']; // Store user ID in session
    // Replace with your actual welcome  message or redirect
    header("Location: index.php");
    exit();
} else {
    echo "Incorrect email or password";
}

mysqli_close($conn);
?>
