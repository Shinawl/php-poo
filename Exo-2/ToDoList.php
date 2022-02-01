<?php


class Todo {

    public ?DateTime $completed_at = null;

    public function __construct(
        public string $title,
        public string $description,
    )
    {
    }

    public function setCompleted(): self
    {
        $this->completed_at = new DateTime();

        return $this;
    }

    public function isCompleted(): bool
    {
        return $this->completed_at !== null;
    }
}

class ToDoList
{

}

$todo1 = new Todo(
    title: 'Ma todo',
    description: 'Ma description',
);

var_dump($todo1->isCompleted());

$todo1->setCompleted();

var_dump($todo1->isCompleted());



