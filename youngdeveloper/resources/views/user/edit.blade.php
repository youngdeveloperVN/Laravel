@extends('admin.dashboard')

@section('content')
<div class="col-xs-8 col-xs-offset-2" style="margin-top:50px;">
    <form class="form-horizontal form-row-seperated" action="{{ URL::action('UserController@update') }}"
          method="Post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="id" value="{{ old('id', $getUserById['id'])}}">
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control"
                   value="{{ old('name', $getUserById['name'])}}" name="name">
        </div>
        
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="text" class="form-control"
                   value="{{ old('email', $getUserById['email'])}}" name="email">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
@endsection