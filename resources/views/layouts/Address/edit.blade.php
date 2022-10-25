@extends("layouts.Dashboard.admin")
@section('content')
<div class="card"  style="margin-left:250px">
  <div class="card-header">Edit Address</div>
  <div class="card-body">
      
      <form action="{{ url('address/' .$addresss->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$addresss->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$addresss->name}}" class="form-control"></br>
        @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror</br>
        <input type="submit" value="Update" class="btn btn-success"></br>

    </form>
  
  </div>
</div>
@stop