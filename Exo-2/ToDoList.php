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

    public function __construct(
        public string $todos,
    )
    {
    }

    public function showCompleted(): self
    {
        return $this;
    }

    public function showNotCompleted(): self
    {
        return $this;
    }

    public function setAllCompleted(): self
    {
        return $this;
    }

    public function addTodo(Todo $todo): self
    {
        return $this;
    }
}

$todo1 = new Todo(
    title: 'Ma todo',
    description: 'Ma description',
);

var_dump($todo1->isCompleted());

$todo1->setCompleted();

var_dump($todo1->isCompleted());



