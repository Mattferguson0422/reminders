<?php
$page = "trump";
?>
@extends('layout/app')

@section('content')
<div class="frame">
  <h2>The Countdown till the next Presidential Election</h2>
  <div id="clock"></div>
</div>

@stop

@section('themeScripts')
<script type="text/javascript">

// Countdown Clock
  var deadline = '2020-11-03';

  function getTimeRemaining(endtime){
    var t = Date.parse(endtime) - Date.parse(new Date());
    var seconds = Math.floor( (t/1000) % 60 );
    var minutes = Math.floor( (t/1000/60) % 60 );
    var hours = Math.floor( (t/(1000*60*60)) % 24 );
    var days = Math.floor( t/(1000*60*60*24) );
    return {
      'total': t,
      'days': days,
      'hours': hours,
      'minutes': minutes,
      'seconds': seconds
    };
  }

  function initializeClock(id, endtime){
    var clock = document.getElementById(id);
    var timeinterval = setInterval(function(){
      var t = getTimeRemaining(endtime);
      clock.innerHTML = '<p><span>days: ' + t.days + ' </span>' +
                        '<span>hours: '+ t.hours + ' </span>' +
                        '<span>minutes: ' + t.minutes + ' </span>' +
                        '<span>seconds: ' + t.seconds; + '</span></p>'
      if(t.total<=0){
        clearInterval(timeinterval);
      }
    },1000);
  }

  initializeClock('clock', deadline);
</script>
@stop
