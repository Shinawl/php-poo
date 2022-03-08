<?php

use Cours\src\Todo\TodoList;

/*class Cli
{
    public function run(): void
    {
        $this->$user = $this->createUser();
    }

    private function createUser(): User
    {
        $userName = $this->ask('Username ?');

        $email = $this->ask('Email ?');

        return new User($userName, $email);
    }

    private function ask(string $question, bool $required = true): string
    {
        $requiredStar = $required ? '*' : '';

        $answer ask(<<<HTML
            <span class=""mr-1>{$question}{$requiredStar}</span>
        HTML);

        if (!$answer && $required) {
            return $this->ask($question, $required);
        }

        return $answer;
    }

    private function askForNewTodo()
    {
        if ($this->ask('new todo ? [Y/n]') !== 'n', required: false) === 'n' {
            return;
        }

        $title = $this->ask('Title ?');
        $description = $this->ask('Description ?', required: false);

        $this->todoListnew->addTodo(new Todo(title: $title, description: $description)) ;

        $this->askForNewTodo();
    }

    private function renderSummary()
    {
        $result = '<ul>';

        $items = [
            'Votre username' => $this->user->userName,
            'Votre email' => $this->user->email,
        ];

        foreach ($this->user->todoList->todos as $key => $todo) {
            $items["Todo n" . ($key + 1)] = "{$todo->title} ($todo->description)";
        }

        foreach ($items as $item) {
            $result =$result . "<li>{label}: $value</li>";
        }

        $result = $result . '</ul>';

        render("userName");
    }

    private function prepareItemForRender(string $label, string $value): string
    {
        return "<li>{$label}: $value</li>li>";
    }
}