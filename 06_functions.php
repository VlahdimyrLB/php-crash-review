<?php
/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }

  - Functions have their own local scope as opposed to global scope
*/

function registerUser($email)
{
    echo "$email registered <br>";
}
registerUser("vlahd@gmail.com");


// with return || the equal means a default value
function sum($n1 = 1, $n2 = 2)
{
    return $n1 + $n2;
}
echo sum(5, 5) . '<br>';

// anonymoues function
$subtract = function ($n1, $n2) {
    return $n1 - $n2;
};

echo $subtract(10, 5) . '<br>';

// arrow functions
$multiply = fn ($n1, $n2) => $n1 * $n2;
