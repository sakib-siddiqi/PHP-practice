<?php
    function evenOrOdd($n){
        return $n%2;
    }
    function factorial(int $n=1){
        if(gettype($n)!="integer") throw new Error('Invalid input.');
        if($n==1) return 1;
        return $n*factorial($n-1);
    }
    function sum(int ...$numbers):int{
        $result = 0;
        foreach ($numbers as $value) {
            $result += $value;
        }
        return $result;
    }
?>