<?php
session_start();
$user_id = $_SESSION['user_id'];
if(isset($user_id)){
    echo "It been logged in successfully";
}else{
echo header('../login/login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <a href="logout.php">Logout</a>
</body>
</html>