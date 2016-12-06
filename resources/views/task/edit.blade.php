<?php
$page = "task";
?>
@extends('layout/app')

@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <h1>Edit Task</h1>

      <form action="/tasks/{{ $task->id }}" method="POST">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
        <div class="form-group">
            <input type="text" name="name" class="form-control" value="{{ $task->name }}">
        </div>
        <div class="form-group">
            <button type="submit" name="button" class="btn btn-primary">Update Task</button>
        </div>
      </form>

    </div>

  </div>

@stop
