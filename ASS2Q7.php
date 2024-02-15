<!DOCTYPE html>
<html>
<head>
    <title>Number Comparison</title>
</head>
<body>
    <h2>Number Comparison</h2>
    <form method="post">
        <input type="number" name="number" placeholder="Enter a number" required>
        <input type="submit" name="submit" value="Check">
    </form>

    <hr>

    <?php
    if (isset($_POST['submit'])) {
        $number = $_POST['number'];

        $result = ($number > 30) ? "greater than 30" : (($number > 20) ? "greater than 20" : (($number > 10) ? "greater than 10" : "less than or equal to 10"));

        echo "The number $number is $result.";
    }
    ?>
</body>
</html>
