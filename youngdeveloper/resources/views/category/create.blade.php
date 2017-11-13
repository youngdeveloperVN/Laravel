@extends('admin.dashboard')

@section('content')
	<div class="col-xs-8 col-xs-offset-2" style="margin-top: 50px;">
	
		<form class="form-horizontal form-row-seperated"
			action="{{ URL::action('CategoryController@store') }}" method="Post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			
			<div class="form-group">
				<label for="exampleInputEmail1">Category Name</label> <input
					type="text" class="form-control" placeholder="new category" name="name">
			</div>
			
			<div class="form-group">
				<label for="exampleInputEmail1">Description</label> <input
					type="text" class="form-control" placeholder="description of category" name="description">
			</div>

			<button type="submit" class="btn btn-default">Create</button>
		</form>
	</div>
@endsection