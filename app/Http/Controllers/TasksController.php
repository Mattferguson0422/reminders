<?php

namespace App\Http\Controllers;

use App\Reminder;
use App\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    // Post a Task
    public function store(Request $request, Reminder $reminder)
    {
      $task = new Task;

      $task->name = $request->name;

      $reminder->tasks()->save($task);

      return back();
    }

    // Delete Task
    public function remove($id) {

      Task::findOrFail($id)->delete();

      return back();
  	}

    // Edit task
    public function edit(Task $task)
    {
        return view('task.edit', compact('task'));
    }

    // Update task
    public function update(Request $request, Task $task)
    {
        $task->update($request->all());

        return redirect("/reminders/$task->reminder_id");
    }
}
