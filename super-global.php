<?php

//GLOBAL - All info about global variable 


$a ="10";//Global
const data = 10; // Wont show as its constant
$data1 = 10; // Will show as Global
echo "<pre>";
print_r($GLOBALS);
echo "<pre>";


// SERVER - All info about server - APACHE

echo "<pre>";
print_r($_SERVER);
echo "<pre>";


//  $_REQUEST - GET } POST | $COOKIE all data in this

//  $_GET - GET TYPE DATA

echo "<pre>";
print_r($_GET);
echo "<pre>";


// POST TYPE DATA

echo "<pre>";
print_r($_POST);
echo "<pre>";
?>