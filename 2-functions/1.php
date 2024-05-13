<?php
    include_once "./lib/functions.php";
    $value = evenOrOdd(1);
    echo boolval($value)?"FOO":"BAR";
    echo "\n";
    $fecto = factorial(10);
    echo "Factorial {$fecto}\n";

    $x = factorial(10);
    echo "Factorial {$x}\n";
    $s = sum(10,2);
    echo "SUM : {$s}\n";
?>