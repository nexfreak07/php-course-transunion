<?php

$str = "Akash Dasgupta";
echo "</br>strlen() --> ". strlen($str);

$var = true;
echo "</br>var_dump() --> Check Datatype". var_dump($var);

echo "</br>date() --> ". date("d/m/y");
echo "</br>date() --> ". date("l");
echo "</br>date() --> ". date("M");


// echo "<br/> PHP Information".phpinfo();

echo "</br>is_string() --> ". is_string($str); // 1 if string nothing if not

echo "</br>date() --> ". date("d/m/y");

echo "</br>is_string() --> ". is_string($str); // 1 if string nothing if not

$int = 10;
echo "</br>is_int() --> ". is_int($int); // 1 if integter nothing if not

echo "</br>rand() --> ". rand(); // Random Number

// Die and ExitFor debugging

echo "Before Die";

// die();

echo "After"; // If die is on doesnt get print

echo "Before Exit";

// exit();

echo "After" ;// If exit is on doesnt get print


echo "</br>substr() --> ". substr($str, 1,7); // Substring -Chars after 1, till what ever leangth you want , 7

echo "</br>substr() --> ". substr($str, -1); // Last Charcter
?>