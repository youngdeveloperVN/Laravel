@extends('admin.dashboard')
@section('content')
<div
	class="col-xs-8 col-xs-offset-2"
	style="margin-top: 50px;"
>
	<table class="table table-hover">
		<tr>
			<td>CategoryName</td>
			<td>Description</td>
			<td>Actions</td>
		</tr>
     <?php foreach($allCategories as $category):  ?>
        <tr>
			<td> <?php echo $category['name']; ?></td>
			<td> <?php echo $category['description']; ?></td>
			<td><a href='category/<?php echo $category['id'];?>/edit'> Edit</a> <a
				href='category/<?php echo $category['id'];?>/delete'
			> Delete</a></td>
		</tr>
      <?php endforeach; ?>
    </table>
</div>
@endsection
