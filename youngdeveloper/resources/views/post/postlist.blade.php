@extends('admin.dashboard') @section('content')
<div class="col-xs-8 col-xs-offset-2" style="margin-top: 50px;">
	<a class="btn btn-primary" href="post/create">+ Create New Post</a>

	<table class="table table-hover offset3">
		<tr>
			<td>Post Name</td>
			<td>Description</td>
			<td>Actions</td>
		</tr>
     <?php foreach($posts as $post):  ?>
        <tr>
			<td> <?php echo $post['title']; ?></td>
			<td> <?php echo $post['content']; ?></td>
			<td><a class="btn btn-primary"
				href='post/<?php echo $post['id'];?>/edit'> Edit</a> <a
				class="btn btn-danger"
				href='post/<?php echo $post['id'];?>/delete'> Delete</a></td>

		</tr>
      <?php endforeach; ?>
    </table>
</div>

@endsection
