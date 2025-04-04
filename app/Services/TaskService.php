<?php

namespace App\Services;

class TaskService {
    protected $tasks = [];

    public function add($task) {
        $this->tasks[] = $task; 
    }

    public function getAllTasks() {
        return $this->tasks;
    }
}