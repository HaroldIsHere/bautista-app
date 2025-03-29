<?php

namespace App\Services;

class TaskService {
    protected $tasks = [];

    public function add($add) {
        $this->tasks[] = $name;
    }

    public function getAllTasks() {
        return $this->tasks;
    }
}