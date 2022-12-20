<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File upload</title>
</head>
<body>

    <?php
    if(isset($_POST["upload_btn"])){
        echo "<pre>";
        print_r($_FILES);
        print_r($_FILES['file']['name']);
        echo "<br/>";
        print_r($_FILES['file']['type']);
        echo "</pre>";
    }
    ?>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data"> <?php // multipart/form-data is most for file ?>
            <input type="file" name="file">
            <button name="upload_btn">Upload</button>
        </form>
</body>
</html>