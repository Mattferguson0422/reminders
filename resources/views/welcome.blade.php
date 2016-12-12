<?php
$page = "home";
?>
@extends('layout/app')
<!-- Keep page for testing purposes -->
@section('content')
    <div class="welcome-area">
      @if(Session::has('status'))
      <h1>{{ Session::get('status') }}</h1>
      @endif
    </div>
@stop
