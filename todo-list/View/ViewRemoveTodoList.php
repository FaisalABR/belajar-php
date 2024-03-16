<?php
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/RemoveTodoList.php";


function viewRemoveTodoList() {
    echo "HAPUS TODOLIST " . PHP_EOL;

    $number = input("Masukkan number (x untuk batal)");

    if($number == 'x') {
        echo "Batal menghapus todo list " . PHP_EOL;
    } else {
        $success = removeTodoList($number);
        
        if($success) {
            echo "Berhasil menghapus list" . PHP_EOL;
        } else {
            echo "Gagal menghapus list" . PHP_EOL;
        }
    }
}