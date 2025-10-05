<?php
$user = [
    ["anul", "delhi"],
    ["akash", "Pune"],
    ["rakesh", "UP"]
];

foreach($user as $u){
    // echo $u[0];
    // echo "<br>";
    foreach($u as $person){
        echo $person;
        echo "<br>";
    }
}


echo "<pre>"; 
 print_r($user);
echo "<pre>";


?>