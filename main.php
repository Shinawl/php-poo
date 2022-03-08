<?php

use Tompe\Cours\Todo\Todo;
use function Termwind\{ask};

require 'vendor/autoload.php';



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


//$toDoList = new todoList();
//$result = $toDoList
//    ->addTodo($todo1)
//    ->addTodo($todo2)
//    ->setAllCompleted()
//    ->addTodo($todo3)
//   ->addTodo(new Todo('Ma todo 4', 'Ma description 4'))
//    ->searchedTodos('Ma description 4');
//dump($result);


$username = ask(<<<HTML
    <span class="mt-1 ml-2 mr-1 bg-green px-1 text-black">
        Salutations, quel est ton nom ?
    </span>
HTML
);



while (!$username) {
    $username = ask(<<<HTML
    <span class="mt-1 ml-2 mr-1 bg-green px-1 text-black">
        Salutations, quel est ton nom ?
    </span>
HTML
    );
}

$answer = ask(<<<HTML
    <span class="mt-1 ml-2 mr-1 bg-green px-1 text-black">
        Add a new Todo (Y/n)?
    </span>
HTML
);


while ($answer != 'n') {
    $answer = ask(<<<HTML
    <span class="mt-1 ml-2 mr-1 bg-green px-1 text-black">
        Title :
    </span>
    HTML
    );
    ask(<<<HTML
    <span class="mt-1 ml-2 mr-1 bg-green px-1 text-black">
        Description :
    </span>
    HTML
    );
    $answer = ask(<<<HTML
    <span class="mt-1 ml-2 mr-1 bg-green px-1 text-black">
        Add a new Todo (Y/n)
    </span>
    HTML
    );
}
dump($answer);
