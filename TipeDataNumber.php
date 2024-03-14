<?php

// Integer, => decimal (base10), hexadecimal(base 16 ) dst
// float -> bilangan pecahan
// var_dump untuk melihat tipe data

//Integer overflow batasnya 2miliar jika > maka akan menjadi float -> sistem operasi 32 bit
// jika 64 bit 9 miliar
echo "Decimal : ";
var_dump(1234);

echo "Octal : ";
var_dump(01234);

echo "Hexa : ";
var_dump(0x1A);

echo "Binary : ";
var_dump(0b1111111);

echo "Underscore di number : ";
var_dump(1_123_323);

echo "Floating Point : ";
var_dump(1.123);

echo "Integer overflow : ";
var_dump(9223372036854775808);