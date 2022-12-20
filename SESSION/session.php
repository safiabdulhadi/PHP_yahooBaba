<?php
  session_start();
  $_SESSION['name'] = "Abdulhadi";
//   $_SESSION["last_name"] = "Safi";
//   $_SESSION["age"] = 25;

//   echo "<br/>";
//   print_r($_SESSION);



  session_unset();
  session_destroy();


?>