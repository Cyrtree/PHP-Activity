<?php

$users = [
    [
        "name" => "Rajj",
        "age" => "59",
        "role" => "Gamer"
    ],
    [
        "name" => "Obet",
        "age" => "22",
        "role" => "Student"
    ],
    [
        "name" => "Jake",
        "age" => "32",
        "role" => "Programmer"
    ],
    [
        "name" => "Steven",
        "age" => "43",
        "role" => "Teacher"
    ],
    [
        "name" => "Naomi",
        "age" => "32",
        "role" => "Instructor"
    ],
    [
        "name" => "Ruth",
        "age" => "22",
        "role" => "President"
    ],
    [
        "name" => "Joyce",
        "age" => "63",
        "role" => "Student"
    ],
    [
        "name" => "Jan4",
        "age" => "33",
        "role" => "I.T"
    ],
];

foreach ($users as $user) {
    echo "Name: " . $user["name"]. ",\t";
    echo "Age: " .  $user["age"]. ",\t";
    echo "Role: " .  $user["role"]. ",\t";
    echo "\n";
}

?>