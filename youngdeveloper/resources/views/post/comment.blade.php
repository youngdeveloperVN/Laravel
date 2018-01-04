<div class="row" id="listComment">
	<!-- Contenedor Principal -->
	<div class="comments-container">
		<h1>
			Comments</a>
		</h1>

		<ul id="comments-list" class="comments-list">
			<?php
			foreach ($getPostById -> getAllComments as $comment) :
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
			</li>
			<?php endforeach; ?>
		</ul>
	</div>
</div>