<?php
/* ---------- File Handling --------- */

/* 
  File handling is the ability to read and write files on the server.
  PHP has built in functions for reading and writing files.
*/


$file = 'extras/users.txt';

if (file_exists($file)) {
    // echo readfile($file);

    $handle = fopen($file, 'r'); // pointer
    $contents = fread($handle, filesize($file)); // get contents
    fclose($handle); // close file

    echo $contents;
} else {
    $handle = fopen($file, 'w');
    $contents = 'Vlahd' . PHP_EOL . 'Shar' . PHP_EOL . 'Mizuki';
    fwrite($handle, $contents);
    fclose($handle);
}
