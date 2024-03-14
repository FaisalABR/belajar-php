<?php
$name = "eko";
$name = NULL;

$age = null;

echo $name;
// Mengecek sebuah data itu kosong atau null atau tidak
echo "Is name null: ";
echo var_dump(is_null($age));

// Untuk menghapus sebuah variable bisa menggunakan unset
$test = "test";
// unset($test);
echo $test;
echo "\n";

//untuk mengecek variable ini ada atau tidak kita bisa menggunakan isset
echo var_dump(isset($test));

