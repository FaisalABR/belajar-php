<?php
require_once __DIR__ . '/../model/Todolist.php';
require_once __DIR__ . '/../Helper/Input.php';
require_once __DIR__ . '/../BusinessLogic/addTodoList.php';

function viewAddTodoList() {
    echo "TAMBAH TODOLIST " . PHP_EOL;

    $todo = input("Todo (x untuk batal) : ");

    if($todo == 'x') {
        echo 'Batal Menambahkan TodoList ' . PHP_EOL; 
    } else {
        addTodoList($todo);
    }
}