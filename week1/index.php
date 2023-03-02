<?php

#Variables
$firstName = 'Marian';
$lastName = 'Curtis';
echo $firstName . ' ' . $lastName;
echo '<br>';

#Constants

define('GREETING', 'Hello World');
echo GREETING;
echo '<br>';

#Arithmetic Operators
$numOne = 5;
$numTwo = 10;
$result = $numOne * $numTwo;
echo $result;
echo '<br>';

#Assignment Operators
$numThree = $result;

#Comparison Operators
$numOne == $numTwo; //false
$numTwo === 10; //true
$numOne != $numThree; //true
$numOne !== $numThree; //false
$numOne > $numTwo; // false
$numOne < $numTwo; //true
$numOne >= $numTwo; //false
$numOne <= $numTwo; //true

$age = 21;
$mariansAge = 31;

if($mariansAge > $age){
    echo 'Marian can drink beer!';
}


#Logical Operators
$numOne and $numTwo;
$numOne or $numTwo;
$numOne xor $numTwo;
$numOne && $numTwo;
$numOne || $numTwo;
!$numOne;

if($numOne == 100 and $numTwo == 50){
    echo 'We are great!';
}

?>
