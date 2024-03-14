<?php
// Mirip kayak diagram venn dimtk tapi pake array
$a = [
    "name" => "Faisal",
    "age" => 10,
    "hobby" => "gaming",
];

$b = [
    "name" => "Faisal",
    "age" => 10,
    "gender" => "male",
];

var_dump($a + $b);
var_dump($a == $b);
var_dump($a === $b);
var_dump($a != $b);
var_dump($a !== $b);