<?php

require 'Class/todo.php';
require 'Class/todoList.php';


$todo1 = new Todo(
    title: 'Ma todo 1',
    description: 'Ma description 1',
);

$todo2 = new Todo(
    title: 'Ma todo 2',
    description: 'Ma description 2',
);

$todo3 = new Todo(
    title: 'Ma todo 3',
    description: 'Ma description 3',
);


$toDoList = new todoList();

$result = $toDoList
    ->addTodo($todo1)
    ->addTodo($todo2)
    ->setAllCompleted()
    ->addTodo($todo3)
    ->addTodo(new Todo('Ma todo 4', 'Ma description 4'))
    ->searchedTodos('Ma description 4');

var_dump($result);





