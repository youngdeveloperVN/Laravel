<div class="row" id="listComment">
	<!-- Contenedor Principal -->
	<div class="comments-container">
		<h1>
			Comments</a>
		</h1>

		<ul id="comments-list" class="comments-list">
			<?php
			foreach (\App\Comment::where('idPost', '=', $getPostById -> id)->where(
					'idParentComment', '=', 0)
				->orderBy('created_at', 'desc')
				->get() as $comment) :
				?>
			<li>
				<div class="comment-main-level">
					<!-- Avatar -->
					<div class="comment-avatar">
						<img
							src="http://i9.photobucket.com/albums/a88/creaticode/avatar_1_zps8e1c80cd.jpg"
							alt="">
					</div>
					<!-- Contenedor del Comentario -->
					<div class="comment-box">
						<div class="comment-head">
							<h6 class="comment-name by-author">
								<a href="http://creaticode.com/blog"><?php echo $comment -> name ?></a>
							</h6>
							<span><?php echo $comment -> created_at?></span> <i
								class="fa fa-reply"></i> <i class="fa fa-heart"></i>
						</div>
						<div class="comment-content"><?php echo $comment -> getContent();?></div>
					</div>
				</div>
				<ul class="comments-list reply-list">
					<!-- show list sub commetn -->
					<?php
					$subcomments = \App\Comment::where('idParentComment', $comment -> id)->where(
							'idPost', '=', $getPostById -> id)
							->orderBy('created_at', 'desc')
							->get();
							foreach ($subcomments as $subcomment) :
					?>
					<li>
						<!-- Avatar -->
						<div class="comment-avatar">
							<img
								src="http://i9.photobucket.com/albums/a88/creaticode/avatar_2_zps7de12f8b.jpg"
								alt="">
						</div> <!-- Contenedor del Comentario -->
						<div class="comment-box">
							<div class="comment-head">
								<h6 class="comment-name">
									<a href="http://creaticode.com/blog"><?php echo $subcomment -> name ?></a>
								</h6>
								<span><?php echo $subcomment -> created_at?></span> <i
									class="fa fa-reply"></i> <i class="fa fa-heart"></i>
							</div>
							<div class="comment-content">
								<?php echo $subcomment -> getContent();?>
								<!--input type="text" value="I like You mean"/-->
							</div>
						</div>
					</li>
					<?php endforeach; ?>
					<li>
						<!-- Avatar -->
						<div class="comment-avatar">
							<img
								src="http://i9.photobucket.com/albums/a88/creaticode/avatar_2_zps7de12f8b.jpg"
								alt="">
						</div> <!-- Contenedor del Comentario -->
						<div class="comment-box">
							<form class="subcomment">
								<div class="comment-head">
									<h6 class="comment-name">
										<input type="text" value="Annou"/>
									</h6>
									<span></span> <i
									class="fa fa-reply hide"></i> <i class="fa fa-heart hide"></i>
								</div>
								
								<div class="comment-content">
									<input type="text" placeholder="Comment..."/>
									<input type="submit"/>
								</div>
							</form>
						</div>
					</li>
				</ul>
			</li>
			<?php endforeach; ?>
		</ul>
	</div>
</div>