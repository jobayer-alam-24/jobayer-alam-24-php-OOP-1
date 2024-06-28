<?php

use function PHPSTORM_META\map;

    class BasicOperations{
        public function multiplicationTable($value){
            for($i= 1; $i <= 10; $i++){
                echo "{$value} X {$i} = " . ($value * $i) . "<br>";

            }
        }
        public function factorialOfGivenNum($num){
            $fact = 1;
            for($i= 1; $i <= $num; $i++){
                $fact *= $i;
            }
            echo "Factorial of {$num} is: " . $fact ."<br>";
        }
        public function sumOfArray($array){
            $sum = 0;
            foreach($array as $value){
                $sum += $value;
            }
            echo implode(" + ", $array). " = " . $sum . "<br>";
        }
        public function isPrime($num){
            $count = 0;
           for($i = 2; $i < $num; $i++){
            if($num % $i == 0){
                $count++;
                break;
            }
           }
           if($count == 0){
            echo "Prime: {$num}";
           }else{
            echo "Not a Prime {$num}";
           }
        }
    }
    $operations = new BasicOperations();
    $operations->multiplicationTable(7);
    $operations->factorialOfGivenNum(10);
    $myArray = [2, 3, 5, 7, 11];
    $operations->sumOfArray($myArray);
    $operations->isPrime(33);


?>