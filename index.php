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
            echo "Prime: {$num} <br>";
           }else{
            echo "Not a Prime {$num} <br>";
           }
        }
    }
    class MobilePhone{
        public function brand($brandName){
            return $brandName;
        }
        public function model($model){
            return $model;
        }
        public function operatingSystem($system){
            return $system;
        }
        public function batteryCapacity($batteryCapapcity){
            return $batteryCapapcity;
        }

    }


    $operations = new BasicOperations();
    $operations->multiplicationTable(7);
    $operations->factorialOfGivenNum(10);
    $myArray = [2, 3, 5, 7, 11];
    $operations->sumOfArray($myArray);
    $operations->isPrime(33);
    // ------------------
    $xiomi = new MobilePhone();
    $brandName = $xiomi->brand("Xiomi");
    $modelName = $xiomi->model("Mi 11");
    $OS = $xiomi->operatingSystem("MIUI 12");
    $batteryCapa = $xiomi->batteryCapacity("4000mAh");

    echo "Brand: " . $brandName . "<br>";
    echo "Model: " . $modelName . "<br>";
    echo "Operating System: " . $OS . "<br>";
    echo "Battery Capacity: " . $batteryCapa;

?>