<?php
session_start();
// print_r($_SESSION);
// echo "<br/>";
// echo $_SESSION['name'];
// echo "<br/>";
// print_r($_SESSION['age']);




if(isset($_SESSION['name'])){
    print_r($_SESSION);
echo "<br/>";
echo $_SESSION['name'];
echo "<br/>";
print_r($_SESSION['age']);
}

?>