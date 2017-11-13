@extends('admin.dashboard')

@section('content')
<div class="col-xs-8 col-xs-offset-2" style="margin-top:50px;">
    <form class="form-horizontal form-row-seperated" action="{{ URL::action('UserController@store') }}"
    method="Post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="exampleInputEmail1">UserName</label>
            <input type="text" class="form-control" placeholder="User Name" name="username">
        </div>
        
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="text" class="form-control" placeholder="other@gmail.com" name="email">
        </div>
        
        <div class="form-group">
            <label for="exampleInputEmail1">Passworld</label>
            <input type="passworld" class="form-control" placeholder="......" name="passworld">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Role</label>
            <input type="text" class="form-control" placeholder="role" name="role">
        </div>
        

        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
@endsection