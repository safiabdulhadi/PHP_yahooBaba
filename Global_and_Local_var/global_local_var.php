<?php


// local variables scope
// function test(){
//     $x = 10;
// echo "Variable X inside Function : $x " ;
// }

// test();


//  Globale variables scope
// $x = 10;
// function test(){
//     global $x,
// echo "Variable X inside Function : $x <br/>" ;
// }
// test();
// echo "Variable X outside Function : $x " ;


$x = 10;
$y = 5;
function test(){
    global $x, $y;

    $x = $x + $y . "<br/>";
}

test();
echo $x;



?>
