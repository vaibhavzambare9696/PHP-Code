<?php
session_start();
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mit";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['newUsername']) && isset($_POST['newPassword'])){
    $newUsername = $_POST['newUsername'];
    $newPassword = $_POST['newPassword'];

    // SQL Injection prevention
    $newUsername = mysqli_real_escape_string($conn, $newUsername);
    $newPassword = mysqli_real_escape_string($conn, $newPassword);

    // Insert new user into database
    $sql = "INSERT INTO user (username, password) VALUES ('$newUsername', '$newPassword')";
    if ($conn->query($sql) === TRUE) {
        echo "New user created successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
