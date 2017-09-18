@extends('template-admin.template-admin')
@section('content')

<span id="clock" style="font-size:150px; margin-left:10%; margin-top:10%;"></span>
<h1 style="text-align:center;">Welcome {{ Auth::user()->name }}</h1>

<script type="text/javascript">
(function () {

  var clockElement = document.getElementById( "clock" );

  function updateClock ( clock ) {
    clock.innerHTML = new Date().toLocaleTimeString();
  }

  setInterval(function () {
      updateClock( clockElement );
  }, 1000);

}());
</script>

@stop
