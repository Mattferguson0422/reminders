<?php
$page = "home2";
?>
@extends('layout/app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <ul>
                      <li><a href="/about">About Page</a></li>
                      <li><a href="/trump">Trump Clock</a></li>
                      <li><a href="/reminders">Reminders</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
