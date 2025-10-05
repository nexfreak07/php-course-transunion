<?php

$fruit = "apple";
setcookie("fruit", $fruit, time()+ (86400));
setcookie("color", "red", time()+ (86400));


if(isset($_COOKIE["fruit"])){
    echo "<pre>";
    print_r($_COOKIE);
    echo "<pre>";
}
else{
    die("No Cookie Found");
}


if(isset($_COOKIE["color"])){
    echo "<pre>";
    print_r($_COOKIE);
    echo "<pre>";
}
else{
    die("No Cookie Found");
}
?>