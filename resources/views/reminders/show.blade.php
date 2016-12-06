<?php
$page = "reminder-tasks";
?>
@extends('layout/app')

@section('content')
<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <h1>{{ $reminder->name }}</h1>
    <ul class="list-group">
      @foreach ($reminder->tasks as $task)
        <li class="list-group-item">
          <p>{{ $task->name }}</p>


          <form action="/tasks/{{ $task->id }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}

            <button class="btn btn-primary">Delete</button>
          </form>
          <a href="/tasks/{{ $task->id }}/edit" class="btn">Edit</a>
        </li>
      @endforeach
    </ul>

    <h3>Add a new {{ $reminder->name }} item</h3>

    <form action="/reminders/{{ $reminder->id }}/tasks" method="POST">
      {{ csrf_field() }}
      <div class="form-group">
          <input type="text" name="name" class="form-control">
      </div>
      <div class="form-group">
          <button type="submit" name="button" class="btn btn-primary">Add</button>
      </div>
    </form>

    <p class="goback"><a href="/reminders">Go Back &#8629;</p>
  </div>
</div>
@stop
