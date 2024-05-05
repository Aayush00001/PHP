<!DOCTYPE html>
<html>
<head>
    <title>$_REQUEST Example</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST" || $_SERVER["REQUEST_METHOD"] === "GET") {
        $name = $_REQUEST["name"] ?? "";
        $email = $_REQUEST["email"] ?? "";

        if (!empty($name) && !empty($email)) {
            echo "Hello, $name! Your email is: $email";
        } else {
            echo "Please fill in both name and email.";
        }
    }
    ?>
    <form method="post">
        Name: <input type="text" name="name"><br>
        Email: <input type="text" name="email"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
