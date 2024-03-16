<?php

function addTodoList(string $todo) {
    global $todoList;

    $newIndex = sizeof($todoList);

    $todoList[$newIndex] = $todo;

}