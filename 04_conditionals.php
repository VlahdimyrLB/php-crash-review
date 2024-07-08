<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

$age = 20;
if ($age >= 18) {
  echo "You are old enough to vote";
} else {
  echo "Sorry, you are not old enough to vote";
}

$t = date("H");


if ($t < 12) {
  echo "Good Morning";
} elseif ($t < 17) {
  echo "Good Afternoon";
} else {
  echo "Good Evening";
}

$posts = ['First Post'];

if (empty($posts)) {
  echo "No Posts";
} else {
  foreach ($posts as $post) {
    echo $post;
  }
}

// Ternary Operator - we can use null for else
// $first_post = !empty($posts) ? $posts[0] : "No Posts";

// nullish coalacion ??
$first_post = $posts[0] ?? null;

echo $first_post;

// Switch Case
$fav_color = 'Red';

switch ($fav_color) {
  case 'Red':
    echo "Your fave color is red";
    break;
  case 'Blue':
    echo "Your fave color is blue";
    break;
  case 'Green':
    echo "Your fave color is green";
    break;
  default:
    echo "Your fave color is not red, green or blue";
}
