<!DOCTYPE html>
<html>
<head>
    <title>Cookie Example</title>
</head>
<body>
    <?php
    // Check if a cookie named "user" is set
    if (isset($_COOKIE["user"])) {
        $username = $_COOKIE["user"];
        echo "Welcome back, $username!";
    } else {
        // If the cookie is not set, set it
        $username = "Guest";
        setcookie("user", $username, time() + 3600, "/");
        echo "Hello, $username! We've set a cookie for you.";
    }
    ?>

    <p>Refresh the page to see the cookie in action.</p>
</body>
</html>
