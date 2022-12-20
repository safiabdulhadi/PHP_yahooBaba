<?php
session_start();
include('../db_config.php');
if(isset($_POST['submit'])){
$email = $_POST['email'];
$password = $_POST['password'];

echo $email;
echo "<br/>";
echo $password;

$query = "SELECT * FROM users WHERE `email` = '$email' AND `password` = '$password'";

$run = mysqli_query($conn, $query);

$row = mysqli_num_rows($run);

echo "<br/>";
echo $row; // it's give zero or one the result

echo "<br/>";

if($row > 0){
$data = mysqli_fetch_assoc($run);
$id = $data['id'];
$_SESSION['user_id'] = $id;
header("location:user/index.php");

}else{
    echo "data not match";
}



}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>

<body>
    <form action="" method="POST">
        <table>
            <tr>
                <td>User Email:</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td>Submit:</td>
                <td><input type="submit" name="submit"></td>
            </tr>
        </table>
    </form>
</body>

</html>