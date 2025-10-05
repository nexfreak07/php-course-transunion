<?php


$users = [
    ["id" => 1, "name" => "Akash", "email" => "akash@example.com", "role" => "Admin"],
    ["id" => 2, "name" => "Raksh", "email" => "raksh@example.com", "role" => "Editor"],
    ["id" => 3, "name" => "Riya", "email" => "riya@example.com", "role" => "User"],
    ["id" => 4, "name" => "Mihir", "email" => "mihir@example.com", "role" => "User"]
];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array to Table in PHP</title>
</head>
<body>

<table border="1">
    <thead>
        <tr>
            <td>S.no</td>
            <td>Name</td>
            <td>Email</td>
            <td>Role</td>
        </tr>
    </thead>
    <tbody>
           
            <?php foreach($users as $u):?>

            <tr>
                <td><?= $u["id"] ?></td>
                <td><?= $u["name"] ?></td>
                <td><?= $u["email"] ?></td>
                <td><?= $u["role"] ?></td>

            </tr>
            <?php  endforeach;?>
    </tbody>
</table>
    
</body>
</html>



<!--  Anil Sidhus way -->

<?php
echo "<br>Anil Sidhus way: ";

echo "<table border='1'>";
echo("<thead>
        <tr>
            <td>S.no</td>
            <td>Name</td>
            <td>Email</td>
            <td>Role</td>
        </tr>
    </thead>");

foreach($users as $u){
    echo "<tbody>";
        echo "<tr>";
           echo"<td>" .$u['id']. "</td>";
           echo"<td>" .$u['name']. "</td>";
           echo"<td>" .$u['email']. "</td>";
           echo"<td>" .$u['role']. "</td>";
        echo "</tr>";

    echo "</tbody>";
}
echo "</table>";
?>