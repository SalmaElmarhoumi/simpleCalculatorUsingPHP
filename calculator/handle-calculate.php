<?php

function calc(int|float $x, int|float $y, string $op) : int|float
{
    switch ($op) {
        case 'add':
            return $x + $y;
        case 'subtract':
            return $x - $y; 
        case 'multiply':
            return $x * $y;
        case 'divide':
            return $x / $y;
    }
}
if (isset($_GET['submit'])){

    $x = $_GET['x'];
    $y = $_GET['y'];
    $operation = $_GET['operation'];
    
    //validation

    //calculation
    $result = calc($x, $y, $operation);
    header("Location: calculate.php?result=$result");

} else {
    header("Location: calculate.php");
}
?>