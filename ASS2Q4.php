<!DOCTYPE html>
<html>
<head>
    <title>Customer Name Processing</title>
</head>
<body>
    <h2>Enter Customer Name</h2>
    <form method="post">
        <input type="text" name="customer_name" placeholder="Enter customer name" required><br><br>
        <input type="submit" name="submit" value="Process Name">
    </form>
    <br>

    <?php
    if (isset($_POST['submit'])) {
        $customer_name = $_POST['customer_name'];
        $customer_name_uppercase = strtoupper($customer_name);
        $customer_name_first_upper = ucfirst($customer_name);

        echo "<h2>Processed Customer Name</h2>";
        echo "<p>All Uppercase: $customer_name_uppercase</p>";
        echo "<p>First Character Uppercase: $customer_name_first_upper</p>";
    }
    ?>

</body>
</html>
