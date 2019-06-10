<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 6/3/19
 * Time: 5:55 PM
 */

//strings are texts enclosed inside a double or single quote
// 1. Concatenation
//2. Concatenation assignment


// 1. Concatenation
$x = 'Hello';
$y = 'World';

$z = $x.$y;

echo $z;
echo '<br>';


// 2. Concatenation assignment
$x.=$y; //is same as $x = $x.$y

echo $x;
echo '<br>';



//Conditional statements
// Are used to perform actions based on different conditions
// 1. If...
// 2. If...else
// 3. If...elseif...else
// 4. Switch



// 1. If...
// Executes some code if one condition is true
//if (condition){code to be executed when that condition has been met}

$t = 10;
if ($t >= 10){
    echo 'Hello World';
}
echo '<br>';


$r = 8;
if ($r >= 10){
    echo 'Hello World';
}
echo '<br>';


$r = 112;
if ($r >= 10){
    echo 'Hello World';
}
echo '<br>';



// 2. If...else
//Executes the last code if the first one is not true
//if (condition){code to be executed}
//else {code to be executed}

$t = date('h');
echo $t;
echo '<br>';
//if...else

if ($t == '05'){echo 'Good Evening';}
else{echo'Good day';}
echo '<br>';



// 3. If...elseif...else
//Executes codes with more than two conditions
if ($t == '05'){echo 'Good evening';}
elseif ($t == '10'){echo 'Good morning';}
elseif ($t == '12'){echo 'Good afternoon';}
else {echo 'Have a good day!';}

echo '<br>';


// 4. Switch
//Switch statement
//Used to perform different actions based on different conditions


$favColor = 'Blue';
 switch ($favColor)

    {case 'Red':
     echo 'Red is not my favourite color';
     break;


    case 'Blue':
     echo 'Blue is my favourite color';
     break;


    case 'Green':
         echo 'Green is not my favourite color';
         break;

     default: echo 'My favourite color is none of the above';
 }

echo '<br>';





// While loop
//Allows execution a block of code when a certain condition is true
//1. While
//2. Do...while
//3. For
//4. Foreach





//1. While
//while (condition){code to execute}

$age_limit = 19;

while ($age_limit == 19){ echo 'You are allowed to drive';
    echo '<br>';
    $age_limit ++;

}
echo '<br>';





//2. Do...while
//Always execute the block of code once, it will then check the condition and repeat the loop while the specified condition is true
//do {code to execute;}
//while {the specified condition}

$a = 1;

do {echo 'The Kenya we want <br>'; $a++;}
while ($a <= 5);

//It will only run the true conditions
echo '<br>';


//QUIZ
//Write a program that prints the numbers from 1 - 100
//For multiples of three it should print Fizz and
//For multiples of five, it should print Buzz
//For multiples of three and five, it should print Fizzbuzz





//3. For
//loops through a block of code a specified number of times
/*
 for (initial counter,test counter,increment counter){code to be executed}
 */

for ($x = 5; $x <= 10; $x++) {echo 'Hello World <br>';}

//$x, start counting from 5, where $x should be less than 10





//4. Foreach
//used only in arrays and used to loop through each key/value
/*
 foreach($array as $value){echo "$value"}

 */

$cars = array('Toyota', 'BMW', 'Suzuki');

foreach($cars as $car){echo "$car <br>";}



























?>