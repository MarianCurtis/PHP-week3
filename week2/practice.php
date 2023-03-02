<?php
//  $mySkills = ["Woodworking", "HTML", "CSS", "PHP", "JavaScript"];

//         function newList($array) {
//             echo '<ul>';
//             foreach ($array as $value) {
//                 echo '<li>' . $value . '</li>';
//             }
//             echo '</ul>';
//         }


if (5 > 6) {
  echo 'Hello World!';
} else {
  echo 'Hola Mundo!';
}

$flavor = 'Apple';
$question = 'Banana';

echo '<br>';



if ($question == $flavor) {
  echo 'Your flavor is Apple!';
} elseif ($question == 'Banana') {
  echo 'Your flavor is Banana!';
} elseif ($question == 'Kiwi') {
  echo 'Your flavor is Kiwi';
} else {
  echo 'Your flavor does not exist!';
}

echo '<br>';

//Indexed Array
$myArray = ['red', 'green', 'blue'];
echo 'The array index of 1 is: ' . $myArray[1];

echo '<br>';

//Associative Arrays
$personArray = ['name' => 'Kevin', 'age' => '30', 'city' => 'Salt Lake City'];
echo $personArray['age'];

//Multidimensional Array
$employees = [
  ['name' => 'Tammy', 'level' => '9', 'position' => 'CEO'],
  ['name' => 'Marian', 'level' => '8', 'position' => 'CTO'],
  ['name' => 'Madan', 'level' => '4', 'position' => 'SWE'],
];

echo '<br>';


echo $employees[1]['position'];

echo '<br>';

//Loops
#ForLoop

for ($i = 0; $i < count($myArray); $i++) {
  //code block
  echo $myArray[$i] . '<br>';
}
echo '<br>';
echo '<br>';
echo '<hr>';

#ForEach
foreach ($personArray as $key => $value) {
  echo $key . ': ' . $value . '<br>';
}

echo '<br>';
echo '<br>';
echo '<hr>';

#While

$myNumbers = [1, 2, 3, 4, 5, 22, 34, 431, 89, 4, 5, 401];
$total = 0;
$k = 0;

while ($total < 1000) {
  $total += $myNumbers[$k];
  echo $myNumbers[$k] . ' was added to the total, which is now ' . $total . '<br>';
  $k++;
}

echo 'The total sum of the first ' . $k . ' numbers is ' . $total;

echo '<br>';
echo '<br>';
echo '<hr>';

foreach ($employees as $employee) {
  echo $employee['name'] . ', ' . $employee['level'] . ', ' . $employee['position'] . '<br>';
}


echo '<br>';
echo '<br>';
echo '<hr>';


#Functions

function helloWorld($name)
{
  echo 'Hello ' . $name;
}

helloWorld('Kevin');

echo '<br>';
echo '<br>';
echo '<hr>';

function calculate_total($subtotal, $tax_rate = 0.08)
{
  $total = $subtotal + ($subtotal * $tax_rate);
  return $total;
}

$total = calculate_total(20);
echo 'The price of the shirt, after taxes is:  ' . $total;