@extends('index')
@section('content')
<div class="col-12 col-lg-8">
                    <div class="post-content-area mb-100">
                        <!-- Catagory Area -->
                        <div class="world-catagory-area">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="title">Các Bài Viết</li>

                                <li class="nav-item">
                                    <a class="nav-link active" id="tab1" data-toggle="tab" href="#world-tab-1" role="tab" aria-controls="world-tab-1" aria-selected="true">All</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="tab2" data-toggle="tab" href="#world-tab-2" role="tab" aria-controls="world-tab-2" aria-selected="false">Business</a>
                                </li>
                            </ul>

                            <div class="tab-content" id="myTabContent">

								
								<!-- Tab1 start -->
                                <div class="tab-pane fade show active" id="world-tab-1" role="tabpanel" aria-labelledby="tab1">
                                
                                	<?php foreach($posts as $post):  ?>
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-4 d-flex align-items-center">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="<?php echo asset('images/'.$post['thumbnail']);?>"
												alt="<?php echo $post['title'];?>">
                                        </div>
                                        
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="/post/<?php echo $post['id'];?>/detail" class="headline">
                                                <h5><?php echo $post['title'] ?></h5>
                                            </a>
                                            <p><?php 
												echo Helper::getFisrtElementOfContentPost($post->content);?>
											</p>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="/user/<?php echo $post-> getIdUser() ?>/posts" class="post-author"><?php echo $post -> getAuthor -> name ?></a> on <a href="#" class="post-date">{{Helper::ultilFormatDate($post->created_at)}}</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                    
                                </div>
                                <!-- Tab1 end -->

								 <!-- Tab2 start -->
                                <div class="tab-pane fade" id="world-tab-2" role="tabpanel" aria-labelledby="tab2">
                                
                                    <?php foreach($posts as $post):  ?>
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-4 d-flex align-items-center">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="<?php echo asset('images/'.$post['thumbnail']);?>"
												alt="<?php echo $post['title'];?>">
                                        </div>
                                        
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="/post/<?php echo $post['id'];?>/detail" class="headline">
                                                <h5><?php echo $post['title'] ?></h5>
                                            </a>
                                            <p><?php 
												echo Helper::getFisrtElementOfContentPost($post->content);?>
											</p>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="/user/<?php echo $post-> getIdUser() ?>/posts" class="post-author"><?php echo $post -> getAuthor -> name ?></a> on <a href="#" class="post-date">{{Helper::ultilFormatDate($post->created_at)}}</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                    
                                </div>
                                <!-- Tab2 end -->
                            </div>
                        </div>
                    </div>
                    
                     <ul class="pager">
						<?php echo $posts ->links('layouts.paginations')?>
					</ul>
					
                </div>
               

@endsection