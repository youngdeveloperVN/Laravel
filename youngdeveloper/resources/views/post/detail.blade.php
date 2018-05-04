@extends('index') @section('content')
<!-- the actual blog post: title/author/date/content -->
<h1><?php echo $getPostById['title'];?></h1>
<p class="lead">
	by <a href="/user/<?php echo $getPostById -> getIdUser() ?>/posts"><?php echo $getPostById -> getAuthor -> name ?></a>
</p>
<hr>
<p>
	<span class="glyphicon glyphicon-time"></span> Posted on
	{{Helper::ultilFormatDate($getPostById->created_at)}}
</p>
<hr>
<img src="<?php echo asset('images/'.$getPostById['thumbnail']);?>"
	class="img-responsive">
<hr>
<p class="lead">Science cuts two ways, of course; its products can be
	used for both good and evil. But there's no turning back from science.
	The early warnings about technological dangers also come from science.</p>
<p>You know, being a test pilot isn't always the healthiest business in
	the world.</p>
<div>
		<?php echo $getPostById['content']?>
	</div>
</p>
<ul>
	<li><a href="http://spaceipsum.com/">Space Ipsum</a></li>
	<li><a href="http://cupcakeipsum.com/">Cupcake Ipsum</a></li>
	<li><a href="http://tunaipsum.com/">Tuna Ipsum</a></li>
</ul>
<hr>
<!-- the comment box -->
<div class="well">

	<h4>Leave a Comment:</h4>
	<form id="formCreateComment" class="form-horizontal form-row-seperated" action="{{ URL::action('CommentController@store') }}" method="POST">
 		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="form-group" name="name">
			<label>Name</label><input name="name" class="form-control" rows="3" />
		</div>

		<div class="form-group" name="email">
			<label>Email</label> <input name="email" class="form-control" rows="3" />
		</div>
		<div class="form-group hide">
			<input name="idPost" class="form-control" rows="3" value="<?php echo $getPostById['id']?>"/>
		</div>
		<div class="form-group hide">
			<input name="idParentComment" class="form-control" rows="3" value="0"/>
		</div>
		
		<div class="form-group">
			<textarea name="content" class="form-control" rows="3"></textarea>
		</div>
		
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
<hr>

@include('post.comment')

@endsection

@section('path')
<a href="/">HOME </a>/
<a href="/category/<?php echo $getPostById -> getCategory['name']?>"><?php echo $getPostById -> getCategory['name'] ?> </a>/
<a href=""><?php echo $getPostById['title'];?></a>
@endsection
