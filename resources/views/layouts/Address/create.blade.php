@extends('layouts.Dashboard.admin')
@section('content')
<div class="card" style="margin-left:250px">
  <div class="card-header">Add Address</div>
  <div class="card-body ">
 
      <form action="{{ url('addAddress') }}" method="post">
      @csrf
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control" >
        
        @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror</br>
       
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop