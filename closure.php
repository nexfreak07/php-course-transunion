<?php
echo "<br/> Closure <br/>";

function outer(){
    echo "Outer<br/>";
    return function (){
       echo "Inner<br/>";
    };
}


$innerFunc = outer();
$innerFunc();
?>