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

// Check captcha (placeholder)
if (isset($_POST['captcha']) && isset($_SESSION['captcha']) && $_POST['captcha'] != $_SESSION['captcha']) {
    die("Captcha is incorrect!");
}

// Get username and password from form
if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    // SQL Injection prevention
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    // Fetch user details from database
    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result === false) {
        // Error executing the query
        die("Error executing the query: " . $conn->error);
    }

    if ($result->num_rows > 0) {
        // User found, login successful
        echo "Login successful!";
    } else {
        // User not found, login failed
        echo "Login failed. Please check your username and password.";
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
	<title>welcome to our new project</title>
</head>
<body>
	<div>
		<H1>welcome to our new project</H1>
	</div>

</body>
</html>