<?php

function circle(int | float $radius): int | float
{
    return M_PI * $radius ** 2;
}


echo "Square of circle: " . circle(2) . PHP_EOL;

function square(int $number, int $degree) : int
{
    return $number ** $degree;
}
echo PHP_EOL  . "Power of number is: " . square(5,2) . PHP_EOL;

function giveChangedNumber(&$number, $multiply = 2)
{

   return $number *= $multiply;
}

$originalFirstNumber = 33;
echo PHP_EOL . "Original First Number: $originalFirstNumber" . PHP_EOL;
echo "New Number: " . giveChangedNumber($originalFirstNumber) . PHP_EOL;
echo "Updated Original First Number: $originalFirstNumber" . PHP_EOL;



function giveSameNumber($number, $multiply = 2)
{
    return $number *= $multiply;
}

$originalSecondNumber = 3;
echo PHP_EOL. "Original Second Number: $originalSecondNumber" . PHP_EOL;
echo "New Number: " . giveSameNumber($originalSecondNumber) . PHP_EOL;
echo "Original Second Number remains unchanged: $originalSecondNumber" . PHP_EOL;