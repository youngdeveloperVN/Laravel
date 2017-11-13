@extends('admin.dashboard')

@section('content')
<div class="col-xs-8 col-xs-offset-2" style="margin-top:50px;">
    <form class="form-horizontal form-row-seperated" action="{{ URL::action('PostController@update') }}"
          method="Post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="id" value="{{ old('id', $getPostById['id'])}}">
        <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" class="form-control"
                   value="{{ old('name', $getPostById['title'])}}" name="title">
        </div>
        
        <div class="form-group">
            <label for="">Content</label>
            <textarea type="text" class="form-control" name="content">
                 {{ old('content', $getPostById['content'])}}
            </textarea>
        </div>
        
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
@endsection