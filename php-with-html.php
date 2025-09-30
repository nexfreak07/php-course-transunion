<?php
$h2_color = "skyblue";


echo "<h1 style='color:green;'>PHP WITH HTML</h1>";
echo "<h3 style='color:blue;'>PHP WITH HTML</h3>";

?>


<?php


$name = "Akash Dasgupta";

echo "<h1 style='color:red'>My name is $name</h1>";

?>


<!-- How to use php inside html -->

<h1 style="color: pink">
    <?php
     echo $name; // Name declared above can work here also, with same value persist
    ?>
<h1>

<!-- H@ Tags with same color  -->

<h2 style="color: <?php echo $h2_color ?>">
    <?php
     echo "Naam toh suna hi hoga ".$name;
    ?>
<h2>


<h2 style="color: <?php echo $h2_color ?>">
    <?php
     echo "This is a H2 Tag"; 
    ?>
<h2>


<h2 style="color: <?php echo $h2_color ?>">
    <?php
     echo "H2 tag hai ye $name ne banaya"; 
    ?>
<h1>