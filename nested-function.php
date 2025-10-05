<?php

// Works Fine
test();
apple();


function test(){
    echo "Test Function <br/>";

    
    // apple(); Nested Function always need to be called after parent is called
    function  apple(){
        echo "Apple Function <br/>";
    }
}

// test()

// Works Fine
// test(); // Will saycannot redeclare apple
apple();

?>