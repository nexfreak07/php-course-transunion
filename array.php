 <?php
 
 $users = ["Akash","Anil", "Raksh", 10, 20.2, true];


 print_r($users);
 print_r($users[0]);
 
echo "</br>Print Array";
 for($i=0; $i < count($users); $i++){
    echo "</br>$users[$i]</br>";
 }


//  For Each Loop

echo "<br/>For Each 1st way</br>";
foreach($users as $u){

        if($u === "Raksh"){
            continue;
        }
     echo "<h1> $u </h1>";
}

echo "<br/>For Each 2nd way</br>";

foreach($users as $u):
if($u === "Raksh"){
            break;
};
echo "<h1> $u </h1>";

endforeach;

 ?>