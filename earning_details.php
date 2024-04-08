<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["basic"] = $_POST["basic"];
    $_SESSION["da"] = $_POST["da"];
    $_SESSION["hra"] = $_POST["hra"];
    header("Location: employee_info.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Earning Details</title>
</head>
<body>
    <h2>Earning Details</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Basic: <input type="text" name="basic"><br>
        DA: <input type="text" name="da"><br>
        HRA: <input type="text" name="hra"><br>
        <input type="submit" value="Next">
    </form>
</body>
</html>
