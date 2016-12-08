<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reminder extends Model
{
    public function tasks()
    {
      return $this->hasMany(Task::class);
    }

    public function addTask(Task $task)
    {
      return $this->tasks()->save($task);
    }
}
