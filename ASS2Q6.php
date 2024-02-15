<!DOCTYPE html>
<html>
<head>
    <title>View Page Source</title>
</head>
<body>
    <h2>View Page Source</h2>
    <form method="post">
        <input type="text" name="url" placeholder="Enter URL" required>
        <input type="submit" name="submit" value="View Source">
    </form>

    <hr>

    <?php
    function displaySourceCode($url) {
        $content = file_get_contents($url);
        if ($content === false) {
            echo "Failed to fetch the webpage.";
            return;
        }
        $lines = explode("\n", $content);
        $lineNumber = 1;
        foreach ($lines as $line) {
            echo $lineNumber . " " . htmlspecialchars($line) . "<br>";
            $lineNumber++;
        }
    }

    if (isset($_POST['submit'])) {
        $url = $_POST['url'];
        echo "<h3>Source code of $url</h3>";
        displaySourceCode($url);
    }
    ?>
</body>
</html>
