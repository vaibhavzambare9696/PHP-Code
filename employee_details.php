<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["eno"] = $_POST["eno"];
    $_SESSION["ename"] = $_POST["ename"];
    $_SESSION["address"] = $_POST["address"];
    header("Location: earning_details.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Details</title>
</head>
<body>
    <h2>Employee Details</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Employee Number: <input type="text" name="eno"><br>
        Employee Name: <input type="text" name="ename"><br>
        Address: <input type="text" name="address"><br>
        <input type="submit" value="Next">
    </form>
</body>
</html>
