<?php
$a = 10;
$b = 10;
$c = "10";
$d=5;
$e = 100;
// var_dump($a==$c); // True
// var_dump($a===$c);  // False



// var_dump($a!=$d); // True
// var_dump($a!=$b); // False


// var_dump($a <> $b); // False
// var_dump($a <> $d); // True



// Not identical and not equal

// var_dump($a <> $c); // False
// var_dump($a !== $c); // True


// SpaceShip


var_dump($a <=> $b); // 0
var_dump($d <=> $a); // -1
var_dump($e <=> $a); // 1


?>