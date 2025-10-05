<?php


function main($test){
    echo "Main Called";

    $test(); // CallBack Function
} 

$test = function (){
    echo "Test Function Called back later";
};

main($test)


?>