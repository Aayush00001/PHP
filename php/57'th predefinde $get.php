<!DOCTYPE html>
<html>
<head>
    <title>$_GET Example</title>
</head>
<body>
    <?php
    // Check if the 'name' parameter is present in the URL
    if (isset($_GET['name'])) {
        $name = $_GET['name'];
        echo "Hello, $name!";
    } else {
        echo "Please provide a 'name' parameter in the URL.";
    }
    ?>
</body>
</html>
