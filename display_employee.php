<!DOCTYPE html>
<html>
<head>
    <title>Employee Details</title>
    <style type="text/css">
        body{
            align-items: center;
        }
    </style>
</head>
<body>
    <h2>Employee Details</h2>
    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $salary = $_POST['salary'];
        $designation = $_POST['designation'];
        $address = $_POST['address'];

        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Salary:</strong> $salary</p>";
        echo "<p><strong>Designation:</strong> $designation</p>";
        echo "<p><strong>Address:</strong> $address</p>";
    }
    ?>
</body>
</html>
