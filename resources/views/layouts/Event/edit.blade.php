@extends("layouts.Dashboard.admin")
@section('content')
<div class="card"  style="margin-left:250px">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('event/' .$events->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$events->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$events->name}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$events->address}}" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" value="{{$events->dateS}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop