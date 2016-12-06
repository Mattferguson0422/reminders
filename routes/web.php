<?php

// First Pages just messing around
Route::get('/', 'PagesController@home');
Route::get('about', 'PagesController@about');
Route::get('trump', 'PagesController@trump');

// Reminders and Lists Page
Route::get('reminders', 'RemindersController@index');
Route::post('reminders', 'RemindersController@store');
Route::delete('reminders/{id}', 'RemindersController@remove');

// Individual Reminder and Lists Page
Route::get('reminders/{reminder}', 'RemindersController@show');
Route::post('reminders/{reminder}/tasks', 'TasksController@store');
Route::delete('tasks/{id}', 'TasksController@remove');

// Edit Task
Route::get('tasks/{task}/edit', 'TasksController@edit');
Route::patch('tasks/{task}', 'TasksController@update');
