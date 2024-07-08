<?php
/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/

for ($x = 0; $x <= 5; $x++) {
    echo 'For Number: ' . $x . '<br>';
}

/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/

$x = 6;
while ($x <= 10) {
    echo 'While Number: ' . $x . '<br>';
    $x++;
}

/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);

do...while loop will always execute the block of code once, even if the condition is false.
*/

$y = 11;
do {
    echo 'Do-While Number: ' . $y . '<br>';
    $y++;
} while ($y <= 15);

/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/

// Loop through an array
$posts = ["Pow", "Grr", 'Gyatt', 'Skibidi'];

// forloop
for ($x = 0; $x < count($posts); $x++) {
    echo "$posts[$x] <br>";
}

// foreach
foreach ($posts as $index => $post) {
    echo "$index = $post <br>";
}

$person = [
    "first_name" => "Vlahd",
    "last_name" => "Bambs",
];

foreach ($person as $key => $value) {
    echo "$key = $value <br>";
}
