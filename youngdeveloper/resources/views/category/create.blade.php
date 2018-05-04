@extends('admin.dashboard') @section('content')
<div class="col-xs-8 col-xs-offset-2" style="margin-top: 50px;">

	<form class="form-horizontal form-row-seperated"
		action="{{ URL::action('CategoryController@store') }}" method="Post">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<div class="form-group">
			<label for="exampleInputEmail1">Category Name</label> <input
				type="text" class="form-control" placeholder="new category"
				name="name" required>
		</div>

		<div class="form-group">
			<label for="exampleInputEmail1">Description</label> <input
				type="text" class="form-control"
				placeholder="description of category" name="description" required>
		</div>

		<div class="form-group">
			<label for="selectpicker">Choose category parent</label>
			<div class="clearfix"></div>
			
			<select id="createParentCategory" class="form-control selectpicker">
					<option value="0">None</option>
				 <?php foreach($allCategories as $category):  ?>
                	<option value="<?php echo $category['id']?>"><?php echo $category['name']?></option>
              	<?php endforeach; ?>
            </select>
            <input type="hidden" 
				class="form-control" placeholder="new category"
				name="idCategoryParrent">
		</div>
		<button type="submit" class="btn btn-default">Create</button>
	</form>
<script>
	$('#createParentCategory').on('change', function() {
		$( "input[name='idCategoryParrent']" ).val(this.value);
	});
</script>
</div>
@endsection
