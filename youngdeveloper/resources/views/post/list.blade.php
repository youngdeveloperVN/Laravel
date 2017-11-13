@extends('index')
@section('content')
<div>

 	  <?php foreach($posts as $post):  ?>
				<!-- First Blog Post -->
	<h2>
		<div class="wrapper">
			<a class="first after" href="/post/<?php echo $post['id'];?>/detail"><?php echo $post['title'] ?></a>
		</div>
	</h2>
	<p class="pull-left lead">
		by <a href="/user/<?php echo $post-> getIdUser() ?>/posts"><?php echo $post -> getAuthor -> name ?></a>
		/ category: <a href="/category/<?php echo $post-> getIdCategory() ?>/posts"><?php echo $post -> getCategory-> name ?></a>
	</p>
	<p class="pull-right">
		<span class="glyphicon glyphicon-comment"></span> <?php
		echo count($post -> getAllComments); 
					?> comments /
  	<span class="glyphicon glyphicon-time"></span> Posted on {{Helper::ultilFormatDate($post->created_at)}}
	</p>

	<hr>

	<img style="with: 900px; height: 300px;" class="img-responsive"
		src="<?php echo asset('images/'.$post['thumbnail']);?>"
		alt="<?php echo $post['title'];?>">
	<hr>
	<p>
		<?php 
			echo Helper::getFisrtElementOfContentPost($post->content);
		?>
	</p>

<!-- 	<a class="btn btn-primary" -->
	<!--	href='post/echo $post['id'];?>/detail'> Read More<span-->
<!-- 		class="glyphicon glyphicon-chevron-right"></span></a> -->


	<hr>
	   <?php endforeach; ?>
	<ul class="pager">
		<?php echo $posts ->render(); ?>
	</ul>
</div>

@endsection

@section('path')
	<small>HOME > LEASTED</small>
@endsection