<?php

function showTodoList() {
    global $todoList;

    echo "TODO LIST : " . PHP_EOL;

    foreach($todoList as $key => $value) {
        echo "{$key}. $value" . PHP_EOL;
    }
}