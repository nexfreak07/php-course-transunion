<?php

// Returns the get data from the form in HTML
// print_r($_GET)

// Also works  for GET and POST
print_r($_REQUEST);
print_r($_REQUEST['username']);

print_r($_REQUEST['password']);

$_REQUEST["dummy"] = "dummy";
// How to loop
foreach($_REQUEST as $data){
    echo $data;
    echo "<br>";
}


?>