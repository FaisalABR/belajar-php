<?php
echo 'Nama : ';
var_dump('s');

// double quote bisa menambahkan escape sequence
echo "Nama : ";
echo "\nFaisal \nAbu \nBakar \nRiza";

// multiline string
// Heredoc -> kyk double quote
echo <<<EKO
\nini adalah contoh string 
yang membuat atau bisa multiline 
manual, "bisa quote" juga
EKO;

// Nowdoc -> kyk single quote
echo <<<'EKO'
ini adalah contoh string 
yang membuat atau bisa multiline 
manual, "bisa quote" juga
EKO;

//bedanya gak bisa parsing aja kalo heredoc bisa