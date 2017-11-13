@extends('admin.dashboard')

@section('content')
	<div class="col-xs-8 col-xs-offset-2" style="margin-top: 50px;">
		<table class="table table-hover">
			<tr>
				<td>UserName</td>
				<td>Email</td>
				<td>Actions</td>
			</tr>
     <?php foreach($allUsers as $user):  ?>
        <tr>
				<td> <?php echo $user['name']; ?></td>
				<td> <?php echo $user['email']; ?></td>
				<td><a href='user/<?php echo $user['id'];?>/edit'> Edit</a> <a
					href='user/<?php echo $user['id'];?>/delete'> Delete</a></td>
		</tr>
      <?php endforeach; ?>
    </table>
	</div>
@endsection