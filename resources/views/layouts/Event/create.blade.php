@extends('layouts.Dashboard.admin')
@section('content')
<div class="card" style="margin-left:250px">
  <div class="card-header">Students Page</div>
  <div class="card-body ">
      
      <form action="{{ url('add') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <label>Start Date</label></br>
        <input type="date" name="startdate" id="startdate" class="form-control"></br>
        <label>End Date</label></br>
        <input type="date" name="enddate" id="enddate" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop