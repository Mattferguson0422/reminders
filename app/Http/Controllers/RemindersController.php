<?php

namespace App\Http\Controllers;

use App\Reminder;
use Illuminate\Http\Request;
//use App\App\Http\Controllers\Controller;

class RemindersController extends Controller
{
  //Show all Reminders
  public function index()
  {
    $reminders = Reminder::all();
    return view('reminders.index', compact('reminders'));
  }

  // Show a specific reminder
  public function show(Reminder $reminder)
  {
    return view('reminders.show', compact('reminder'));
  }

  // Post a Reminder
  public function store(Request $request)
  {
    $reminder = new Reminder;

    $reminder->name = $request->name;

    $reminder->save();

    return back();
  }
  // Delete Reminder
  public function remove($id) {

    Reminder::findOrFail($id)->delete();

    return back();
	}
}
