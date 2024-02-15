<!DOCTYPE html>
<html>
<head>
    <title>Item Billing</title>
</head>
<body>
    <h2>Enter Item Details</h2>
    <form method="post">
        <?php for ($i = 1; $i <= 5; $i++): ?>
            <p>Item <?php echo $i; ?>:</p>
            <input type="text" name="item_details[]" placeholder="Item Code, Item Name, Unit, Sold, Rate" size="50" required><br><br>
        <?php endfor; ?>
        <input type="submit" name="submit" value="Generate Bill">
    </form>
    <br>

    <?php
    if (isset($_POST['submit'])) {
        $item_details = $_POST['item_details'];

        echo "<h2>Bill</h2>";
        echo "<table border='1'>";
        echo "<tr><th>Item Code</th><th>Item Name</th><th>Unit</th><th>Sold</th><th>Rate</th></tr>";

        foreach ($item_details as $item) {
            $item_info = explode(",", $item);
            if (count($item_info) == 5) {
                list($item_code, $item_name, $unit, $sold, $rate) = $item_info;
                echo "<tr><td>$item_code</td><td>$item_name</td><td>$unit</td><td>$sold</td><td>$rate</td></tr>";
            }
        }

        echo "</table>";
    }
    ?>

</body>
</html>
