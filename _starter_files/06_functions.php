<?php
/* ------------ Functions ----------- */

/*
  Functions are reusable blocks of code that we can call to perform a specific task.
  We can pass values into functions to change their behavior. Functions have their own local scope as opposed to global scope


/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }
*/

function registerUser($email) {
//    global $y;
//    $y = 12;
//    $x = 10;
    echo $email . ' registered';
    echo 'User registered';
}

// will not work :: echo $x;

registerUser('Brad');

function sum($n1 = 4, $n2 = 5) {
    return $n1 + $n2;
}

echo sum(1,2);
$number = sum(1,2);
echo $number;
echo sum();

$subtract = function($n1, $n2) {
    return $n1 - $n2;
};

echo $subtract(10,5);

$multiply = fn($n1, $n2) => $n1 * $n2;

echo $multiply(10,5);