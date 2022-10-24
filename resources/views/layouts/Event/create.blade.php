@extends('layouts.Dashboard.admin')
@section('content')
<div class="card" style="margin-left:250px">
  <div class="card-header">Add Event</div>
  <div class="card-body ">
 
      <form action="{{ url('add') }}" method="post">
      @csrf
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control" >
        
        @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror</br>
        <div class="form-group">
                            <label for="address" class="col-md-4 control-label">Address</label>
                                <select name="address"  class="form-control">
                                    @foreach($addresss as $adress)
                                        <option value="{{ $adress->name}}">{{ $adress->name }}</option>
                                    @endforeach
                                </select>
                          
                        </div> 
        @error('address')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror</br>
        <label>Start Date</label></br>
        <input type="date" name="dateS" id="startdate" class="form-control">
        @error('dateS')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror</br>
        <label>End Date</label></br>
        <input type="date" name="dateE" id="enddate" class="form-control">
        @error('dateE')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror</br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop