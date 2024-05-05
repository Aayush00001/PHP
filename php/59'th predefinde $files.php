<!DOCTYPE html>
<html>
<head>
    <title>File Upload Example</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_FILES["file"])) {
        $file = $_FILES["file"];
        if ($file["error"] === 0 && move_uploaded_file($file["tmp_name"], "uploads/" . $file["name"])) {
            echo "File uploaded successfully!";
        } else {
            echo "Error during file upload.";
        }
    }
    ?>
    <form method="post" enctype="multipart/form-data">
        Select a file to upload: <input type="file" name="file">
        <input type="submit" value="Upload File">
    </form>
</body>
</html>
