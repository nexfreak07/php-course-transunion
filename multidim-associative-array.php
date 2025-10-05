<?php
$employees = [
    "team1" => [
        [
            "id" => 1,
            "name" => "Akash Dasgupta",
            "role" => "Frontend Developer",
            "skills" => ["React", "JavaScript", "HTML", "CSS"]
        ],
        [
            "id" => 2,
            "name" => "Raksh Mehta",
            "role" => "Backend Developer",
            "skills" => ["PHP", "Laravel", "MySQL"]
        ]
    ],
    "team2" => [
        [
            "id" => 3,
            "name" => "Riya Sen",
            "role" => "UI/UX Designer",
            "skills" => ["Figma", "Adobe XD", "Photoshop"]
        ],
        [
            "id" => 4,
            "name" => "Mihir Patel",
            "role" => "Full Stack Developer",
            "skills" => ["Node.js", "React", "MongoDB"]
        ]
    ]
];


foreach($employees as $key => $emp){
     echo "<table border='1'>
    <thead>
        <tr>
            <td>S.no</td>
            <td>Name</td>
            <td>Email</td>
            <td>Role</td>
        </tr>
    </thead>";
    printArray($emp);
}



function printArray($arr){
    foreach($arr as $ar){
    if(is_array($ar)){
        printArray($ar);
    }
       else{
      
    echo "<tbody>
    <tr>";
           
            echo"<td> $ar </td>";
    echo "</tr>
    </tbody>
</table>";
       }
    }
}

?>