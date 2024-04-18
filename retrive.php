<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "mit";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to retrieve data
$sql = "SELECT * FROM user_profiles";

// Execute query
$result = $conn->query($sql);

// Check if there are rows returned
if ($result->num_rows > 0) {
    // Output data in a table format
    echo "<table class='table table-bordered'>";
    echo "<thead><tr><th>ID</th><th>Profile Picture</th><th>First Name</th><th>Last Name</th><th>Date of Birth</th><th>Gender</th><th>Email</th><th>Designation</th><th>Institution</th></tr></thead>";
    echo "<tbody>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["id"]."</td>";
        echo "<td>".$row["profile_picture"]."</td>";
        echo "<td>".$row["first_name"]."</td>";
        echo "<td>".$row["last_name"]."</td>";
        echo "<td>".$row["date_of_birth"]."</td>";
        echo "<td>".$row["gender"]."</td>";
        echo "<td>".$row["email"]."</td>";
        echo "<td>".$row["designation"]."</td>";
        echo "<td>".$row["institution"]."</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
} else {
    echo "<p>No data found</p>";
}

// Close connection
$conn->close();
?>
