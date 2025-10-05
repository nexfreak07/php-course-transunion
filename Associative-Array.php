<?php


//  Associative Array

$users = ["name" => "akash", "age" => 25, "city"=> "delhi", "isEngineer" => true];


foreach($users as $key => $data){
    echo $key  ." => ".$data;
    echo "<br>";
}
?> 