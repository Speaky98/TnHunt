@extends("layouts.Dashboard.admin")
@section('content')
<div class="card"  style="margin-left:250px">
  <div class="card-header">Event</div>
  <div class="card-body">
  @csrf

        <div class="card-body">
        <h5 class="card-title">Name : {{ $events->name }}</h5><br><br>
        <p class="card-text">Address : {{ $events->address }}</p>
        <p class="card-text">Start Date : {{ $events->dateS }}</p>
        <p class="card-text">End Date : {{ $events->dateE }}</p>

    </div>
      
    </hr>
  
  </div>
</div>
@stop