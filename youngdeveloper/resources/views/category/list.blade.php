@extends('admin.dashboard') @section('content')
<div class="col-xs-8 col-xs-offset-2" style="margin-top: 50px;">
	<a class="btn btn-primary" href="category/create">+ Create New Category</a>

	<table class="table table-hover offset3">
		<tr>
			<td>CategoryName</td>
			<td>Description</td>
			<td>Actions</td>
		</tr>
     <?php foreach($allCategories as $category):  ?>
        <tr>
			<td> <?php echo $category['name']; ?></td>
			<td> <?php echo $category['description']; ?></td>
			<td><a class="btn btn-primary"
				href='category/<?php echo $category['id'];?>/edit'> Edit</a> <a
				class="btn btn-danger"
				href='category/<?php echo $category['id'];?>/delete'> Delete</a></td>

		</tr>
      <?php endforeach; ?>
    </table>
</div>
@endsection
