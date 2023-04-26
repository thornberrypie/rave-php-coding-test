<?php

namespace App;

class Project
{
    public $name;
    public $tasks = [];

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function addTask($id, $name){
        $task = new Task;
        $task->id = $id;
        $task->name = $name;
        $this->tasks[] = $task;
    }

    public function findTask($id): Task
    {
        return $this->tasks[$id];
    }

    public function deleteTask($id)
    {
        // not yet implemented
    }
}