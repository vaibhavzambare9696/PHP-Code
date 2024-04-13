<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Check if all fields are set and not empty
    if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["message"]) && !empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["message"])) {
        // Sanitize user input to prevent SQL injection or other attacks
        $name = htmlspecialchars($_POST["name"]);
        $email = htmlspecialchars($_POST["email"]);
        $message = htmlspecialchars($_POST["message"]);

        // You can perform further validation here if needed

        // Assuming you have a database connection, you can insert the form data into your database
        // Example:
        // $servername = "localhost";
        // $username = "username";
        // $password = "password";
        // $dbname = "database_name";
        // $conn = new mysqli($servername, $username, $password, $dbname);

        // Example SQL query to insert form data into a table named "contact_messages"
        // $sql = "INSERT INTO contact_messages (name, email, message) VALUES ('$name', '$email', '$message')";
        // if ($conn->query($sql) === TRUE) {
        //     echo "New record created successfully";
        // } else {
        //     echo "Error: " . $sql . "<br>" . $conn->error;
        // }
        // $conn->close();

        // For this example, let's just send an email notification
        $to = "zambarevaibhav4@gmail.com"; // Change this to your email address
        $subject = "New Message from Contact Form";
        $email_body = "Name: $name\nEmail: $email\nMessage: $message";
        $headers = "From: $email";

        // Send email
        if (mail($to, $subject, $email_body, $headers)) {
            echo json_encode(["success" => true, "message" => "Your message has been sent successfully!"]);
        } else {
            echo json_encode(["success" => false, "message" => "Failed to send message. Please try again later."]);
        }
    } else {
        echo json_encode(["success" => false, "message" => "Please fill in all fields."]);
    }
} else {
    echo json_encode(["success" => false, "message" => "Method not allowed."]);
}
?>
