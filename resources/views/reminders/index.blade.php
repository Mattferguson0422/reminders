<?php
$page = "reminders";
?>
@extends('layout/app')

@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <h1>All Lists</h1>
      <ul class="list-group">
        @foreach ($reminders as $reminder)
          <li class="list-group-item"><a href="/reminders/{{ $reminder->id }}">{{ $reminder->name }}</a>
            <form action="/reminders/{{ $reminder->id }}" method="POST">
              {{ csrf_field() }}
              {{ method_field('DELETE') }}

              <button class="btn btn-primary">Delete</button>
            </form>
          </li>
        @endforeach
      </ul>

      <h3>Add a new List</h3>

      <form action="/reminders" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" name="button" class="btn btn-primary">Add</button>
        </div>
      </form>
      @if (count($errors))
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      @endif
      <p class="goback"><a href="/home">Go Back &#8629;</p>
    </div>

  </div>

@stop
