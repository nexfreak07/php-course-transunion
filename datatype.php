<?php

/*

String
Integer
Float
Boolean
Null
Array
Object
Recourse

var_dumpp() - Function returns the info about the variable
*/

// String

$str = "This is a string";
echo "<br/> $str ";
echo "<br/>";
echo var_dump($str);

// Integer

$integer = 12;
echo "<br/> $integer ";
echo "<br/>";
echo var_dump($integer);

//  Float

$float = 10.10;
echo "<br/> $float ";
echo "<br/>";
echo var_dump($float);

// Boolean

$bool = true;
echo "<br/> $bool ";
echo "<br/>";
echo var_dump($bool);

// Null

$NULL = null;
echo "<br/> $NULL ";
echo "<br/>";
echo var_dump($NULL);

// Array - Collection of Datatyoes


$arr = ["Akash", "DG", 10];
echo "<br/>";
print_r($arr);
echo "<br/>";
echo var_dump($arr);

$connection = ftp_connect("127.0.0.1") or die("Local Host not available");
echo var_dump($connection) ; 
?>