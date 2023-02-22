<?php
// array index
$animals = ["ayam", "bebek", "itik"];

//akses array
foreach ($animals as $animal){
    echo $animal . "<br>";
}

// array assosiatif
$student = [
    "name" => "azmi Muwaffaq",
    "major" => "informatika",
    "age" => 20
];

echo $student['name'];