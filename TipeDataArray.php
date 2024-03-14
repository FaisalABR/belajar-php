<?php

$values = array(1,2,3,4);
var_dump($values);

$names = ["Faisal", "Abu"];
var_dump($names);

// Akses array $array[index]
echo $names[0];

// Manipulating element array
$names[0] = "Bakar";
var_dump($names);

// Menambah nilai array
$names[] = "Faisal";
var_dump($names);

// Menghapus nilai array
unset($names[1]);
var_dump($names);

//Menghitung jumlah elemetns seperti array.length
echo "Panjang array : ";
echo count($names);

// Map mirip seperti object dan bisa array nested
$hero = array(
    "name" => "Pudge",
    "attack" => 100,
    "type" => "strengh",
);

$hewan = [
    "nama" => "mungil",
    "jenis" => "kucing",
    "umur" => 20,
    "address" => [
        "city" => "jakarta",
        "country" => "indonesia"
    ]
];

var_dump($hero);
var_dump($hewan);

echo $hero["name"];
echo "\n";
echo $hewan["nama"];
echo "\n";
echo $hewan["address"]["city"];



