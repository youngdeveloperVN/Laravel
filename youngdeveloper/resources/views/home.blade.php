@extends('index')

@section('content')
<!-- ============= Post Content Area Start ============= -->
<div class="col-12 col-lg-8">
	<div class="post-content-area mb-50">
		<!-- Catagory Area -->
		<div class="world-catagory-area">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="title">Don’t Miss</li>

				<li class="nav-item"><a class="nav-link" id="tab1"
					data-toggle="tab" href="#world-tab-1" role="tab"
					aria-controls="world-tab-1" aria-selected="false">All</a></li>
				
				<?php
				foreach (\App\Category::where('idCategoryParrent', '=', 0)->orderBy(
						'id', 'asc')->get() as $category) :
					
					$subcategories = \App\Category::where('idCategoryParrent',
							$category -> id)->orderBy('created_at', 'asc')->get();
					if (sizeof($subcategories) > 0) {
						// dropdown
						echo '<li class="nav-item dropdown"><a
							class="nav-link dropdown-toggle" data-toggle="dropdown"
							href="#" role="button" aria-haspopup="true"
							aria-expanded="false">';
						echo $category -> name;
						echo '</a>';
						echo '<div class="dropdown-menu" x-placement="top-start"
						style="position: absolute; transform: translate3d(0px, -15px, 0px); top: 0px; left: 0px; will-change: transform;">';
						
						foreach ($subcategories as $subcategory) :
							echo '<a class="nav-link" id="tab7" data-toggle="tab"
									href="#world-tab-7" role="tab" aria-controls="world-tab-7"
										aria-selected="false">';
							echo $subcategory -> name;
							echo '</a>';
						endforeach
						;
						echo '</div></li>';
					} else {
						
						echo '<li class="nav-item"><a class="nav-link" id="tab2"
							data-toggle="tab" href="#world-tab-2" role="tab"
							aria-controls="world-tab-2" aria-selected="false">';
						echo $category -> name;
						echo '</a></li>';
					}
				endforeach
				;
				?>
			</ul>

			<div class="tab-content" id="myTabContent">

				<div class="tab-pane fade" id="world-tab-1" role="tabpanel"
					aria-labelledby="tab1">
					<div class="row">
						<div class="col-12 col-md-6">
							<div
								class="world-catagory-slider owl-carousel wow fadeInUpBig owl-theme owl-loaded owl-hidden animated"
								data-wow-delay="0.1s"
								style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUpBig;">

								<!-- Single Blog Post -->


								<!-- Single Blog Post -->


								<!-- Single Blog Post -->

								<div class="owl-stage-outer">
									<div class="owl-stage"
										style="transform: translate3d(0px, 0px, 0px); transition: 2s; width: 0px;">
										<div class="owl-item cloned active"
											style="width: 0px; margin-right: 0px;">
											<div class="single-blog-post">
												<!-- Post Thumbnail -->
												<div class="post-thumbnail">
													<img src="img/blog-img/b2.jpg" alt="">
													<!-- Catagory -->
													<div class="post-cta">
														<a href="#">travel</a>
													</div>
												</div>
												<!-- Post Content -->
												<div class="post-content">
													<a href="#" class="headline">
														<h5>How Did van Gogh’s Turbulent Mind Depict One of
															the Most Complex Concepts in Physics?</h5>
													</a>
													<p>How Did van Gogh’s Turbulent Mind Depict One of the
														Most Complex Concepts in...</p>
													<!-- Post Meta -->
													<div class="post-meta">
														<p>
															<a href="#" class="post-author">Katy Liu</a> on <a
																href="#" class="post-date">Sep 29, 2017 at 9:48 am</a>
														</p>
													</div>
												</div>
											</div>
										</div>
										<div class="owl-item cloned"
											style="width: 0px; margin-right: 0px;">
											<div class="single-blog-post">
												<!-- Post Thumbnail -->
												<div class="post-thumbnail">
													<img src="img/blog-img/b3.jpg" alt="">
													<!-- Catagory -->
													<div class="post-cta">
														<a href="#">travel</a>
													</div>
												</div>
												<!-- Post Content -->
												<div class="post-content">
													<a href="#" class="headline">
														<h5>How Did van Gogh’s Turbulent Mind Depict One of
															the Most Complex Concepts in Physics?</h5>
													</a>
													<p>How Did van Gogh’s Turbulent Mind Depict One of the
														Most Complex Concepts in...</p>
													<!-- Post Meta -->
													<div class="post-meta">
														<p>
															<a href="#" class="post-author">Katy Liu</a> on <a
																href="#" class="post-date">Sep 29, 2017 at 9:48 am</a>
														</p>
													</div>
												</div>
											</div>
										</div>
										<div class="owl-item"
											style="width: 0px; margin-right: 0px;">
											<div class="single-blog-post">
												<!-- Post Thumbnail -->
												<div class="post-thumbnail">
													<img src="img/blog-img/b1.jpg" alt="">
													<!-- Catagory -->
													<div class="post-cta">
														<a href="#">travel</a>
													</div>
												</div>
												<!-- Post Content -->
												<div class="post-content">
													<a href="#" class="headline">
														<h5>How Did van Gogh’s Turbulent Mind Depict One of
															the Most Complex Concepts in Physics?</h5>
													</a>
													<p>How Did van Gogh’s Turbulent Mind Depict One of the
														Most Complex Concepts in...</p>
													<!-- Post Meta -->
													<div class="post-meta">
														<p>
															<a href="#" class="post-author">Katy Liu</a> on <a
																href="#" class="post-date">Sep 29, 2017 at 9:48 am</a>
														</p>
													</div>
												</div>
											</div>
										</div>
										<div class="owl-item"
											style="width: 0px; margin-right: 0px;">
											<div class="single-blog-post">
												<!-- Post Thumbnail -->
												<div class="post-thumbnail">
													<img src="img/blog-img/b2.jpg" alt="">
													<!-- Catagory -->
													<div class="post-cta">
														<a href="#">travel</a>
													</div>
												</div>
												<!-- Post Content -->
												<div class="post-content">
													<a href="#" class="headline">
														<h5>How Did van Gogh’s Turbulent Mind Depict One of
															the Most Complex Concepts in Physics?</h5>
													</a>
													<p>How Did van Gogh’s Turbulent Mind Depict One of the
														Most Complex Concepts in...</p>
													<!-- Post Meta -->
													<div class="post-meta">
														<p>
															<a href="#" class="post-author">Katy Liu</a> on <a
																href="#" class="post-date">Sep 29, 2017 at 9:48 am</a>
														</p>
													</div>
												</div>
											</div>
										</div>
										<div class="owl-item"
											style="width: 0px; margin-right: 0px;">
											<div class="single-blog-post">
												<!-- Post Thumbnail -->
												<div class="post-thumbnail">
													<img src="img/blog-img/b3.jpg" alt="">
													<!-- Catagory -->
													<div class="post-cta">
														<a href="#">travel</a>
													</div>
												</div>
												<!-- Post Content -->
												<div class="post-content">
													<a href="#" class="headline">
														<h5>How Did van Gogh’s Turbulent Mind Depict One of
															the Most Complex Concepts in Physics?</h5>
													</a>
													<p>How Did van Gogh’s Turbulent Mind Depict One of the
														Most Complex Concepts in...</p>
													<!-- Post Meta -->
													<div class="post-meta">
														<p>
															<a href="#" class="post-author">Katy Liu</a> on <a
																href="#" class="post-date">Sep 29, 2017 at 9:48 am</a>
														</p>
													</div>
												</div>
											</div>
										</div>
										<div class="owl-item cloned"
											style="width: 0px; margin-right: 0px;">
											<div class="single-blog-post">
												<!-- Post Thumbnail -->
												<div class="post-thumbnail">
													<img src="img/blog-img/b1.jpg" alt="">
													<!-- Catagory -->
													<div class="post-cta">
														<a href="#">travel</a>
													</div>
												</div>
												<!-- Post Content -->
												<div class="post-content">
													<a href="#" class="headline">
														<h5>How Did van Gogh’s Turbulent Mind Depict One of
															the Most Complex Concepts in Physics?</h5>
													</a>
													<p>How Did van Gogh’s Turbulent Mind Depict One of the
														Most Complex Concepts in...</p>
													<!-- Post Meta -->
													<div class="post-meta">
														<p>
															<a href="#" class="post-author">Katy Liu</a> on <a
																href="#" class="post-date">Sep 29, 2017 at 9:48 am</a>
														</p>
													</div>
												</div>
											</div>
										</div>
										<div class="owl-item cloned"
											style="width: 0px; margin-right: 0px;">
											<div class="single-blog-post">
												<!-- Post Thumbnail -->
												<div class="post-thumbnail">
													<img src="img/blog-img/b2.jpg" alt="">
													<!-- Catagory -->
													<div class="post-cta">
														<a href="#">travel</a>
													</div>
												</div>
												<!-- Post Content -->
												<div class="post-content">
													<a href="#" class="headline">
														<h5>How Did van Gogh’s Turbulent Mind Depict One of
															the Most Complex Concepts in Physics?</h5>
													</a>
													<p>How Did van Gogh’s Turbulent Mind Depict One of the
														Most Complex Concepts in...</p>
													<!-- Post Meta -->
													<div class="post-meta">
														<p>
															<a href="#" class="post-author">Katy Liu</a> on <a
																href="#" class="post-date">Sep 29, 2017 at 9:48 am</a>
														</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="owl-controls">
									<div class="owl-nav">
										<div class="owl-prev" style="">
											<i class="fa fa-angle-left"></i>
										</div>
										<div class="owl-next" style="">
											<i class="fa fa-angle-right"></i>
										</div>
									</div>
									<div class="owl-dots" style="display: none;"></div>
								</div>
							</div>
						</div>

						<div class="col-12 col-md-6">
							<!-- Single Blog Post -->
							<div
								class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig"
								data-wow-delay="0.2s"
								style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUpBig;">
								<!-- Post Thumbnail -->
								<div class="post-thumbnail">
									<img src="img/blog-img/b10.jpg" alt="">
								</div>
								<!-- Post Content -->
								<div class="post-content">
									<a href="#" class="headline">
										<h5>How Did van Gogh’s Turbulent Mind Depict One of the
											Most</h5>
									</a>
									<!-- Post Meta -->
									<div class="post-meta">
										<p>
											<a href="#" class="post-author">Katy Liu</a> on <a
												href="#" class="post-date">Sep 29, 2017 at 9:48 am</a>
										</p>
									</div>
								</div>
							</div>

							<!-- Single Blog Post -->
							<div
								class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig"
								data-wow-delay="0.3s"
								style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUpBig;">
								<!-- Post Thumbnail -->
								<div class="post-thumbnail">
									<img src="img/blog-img/b11.jpg" alt="">
								</div>
								<!-- Post Content -->
								<div class="post-content">
									<a href="#" class="headline">
										<h5>How Did van Gogh’s Turbulent Mind Depict One of the
											Most</h5>
									</a>
									<!-- Post Meta -->
									<div class="post-meta">
										<p>
											<a href="#" class="post-author">Katy Liu</a> on <a
												href="#" class="post-date">Sep 29, 2017 at 9:48 am</a>
										</p>
									</div>
								</div>
							</div>

							<!-- Single Blog Post -->
							<div
								class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig"
								data-wow-delay="0.4s"
								style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUpBig;">
								<!-- Post Thumbnail -->
								<div class="post-thumbnail">
									<img src="img/blog-img/b12.jpg" alt="">
								</div>
								<!-- Post Content -->
								<div class="post-content">
									<a href="#" class="headline">
										<h5>How Did van Gogh’s Turbulent Mind Depict One of the
											Most</h5>
									</a>
									<!-- Post Meta -->
									<div class="post-meta">
										<p>
											<a href="#" class="post-author">Katy Liu</a> on <a
												href="#" class="post-date">Sep 29, 2017 at 9:48 am</a>
										</p>
									</div>
								</div>
							</div>

							<!-- Single Blog Post -->
							<div
								class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig"
								data-wow-delay="0.5s"
								style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUpBig;">
								<!-- Post Thumbnail -->
								<div class="post-thumbnail">
									<img src="img/blog-img/b13.jpg" alt="">
								</div>
								<!-- Post Content -->
								<div class="post-content">
									<a href="#" class="headline">
										<h5>How Did van Gogh’s Turbulent Mind Depict One of the
											Most</h5>
									</a>
									<!-- Post Meta -->
									<div class="post-meta">
										<p>
											<a href="#" class="post-author">Katy Liu</a> on <a
												href="#" class="post-date">Sep 29, 2017 at 9:48 am</a>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="tab-pane fade" id="world-tab-2" role="tabpanel"
					aria-labelledby="tab2">
					<div class="row">
						<div class="col-12 col-md-6">
							<!-- Single Blog Post -->
							<div class="single-blog-post">
								<!-- Post Thumbnail -->
								<div class="post-thumbnail">
									<img src="img/blog-img/b1.jpg" alt="">
									<!-- Catagory -->
									<div class="post-cta">
										<a href="#">travel</a>
									</div>
								</div>
								<!-- Post Content -->
								<div class="post-content">
									<a href="#" class="headline">
										<h5>How Did van Gogh’s Turbulent Mind Depict One of the
											Most Complex Concepts in Physics?</h5>
									</a>
									<p>How Did van Gogh’s Turbulent Mind Depict One of the Most
										Complex Concepts in...</p>
									<!-- Post Meta -->
									<div class="post-meta">
										<p>
											<a href="#" class="post-author">Katy Liu</a> on <a
												href="#" class="post-date">Sep 29, 2017 at 9:48 am</a>
										</p>
									</div>
								</div>
							</div>
						</div>

						<div class="col-12 col-md-6">
							<!-- Single Blog Post -->
							<div
								class="single-blog-post post-style-2 d-flex align-items-center">
								<!-- Post Thumbnail -->
								<div class="post-thumbnail">
									<img src="img/blog-img/b10.jpg" alt="">
								</div>
								<!-- Post Content -->
								<div class="post-content">
									<a href="#" class="headline">
										<h5>How Did van Gogh’s Turbulent Mind Depict One of the
											Most</h5>
									</a>
									<!-- Post Meta -->
									<div class="post-meta">
										<p>
											<a href="#" class="post-author">Katy Liu</a> on <a
												href="#" class="post-date">Sep 29, 2017 at 9:48 am</a>
										</p>
									</div>
								</div>
							</div>

							<!-- Single Blog Post -->
							<div
								class="single-blog-post post-style-2 d-flex align-items-center">
								<!-- Post Thumbnail -->
								<div class="post-thumbnail">
									<img src="img/blog-img/b11.jpg" alt="">
								</div>
								<!-- Post Content -->
								<div class="post-content">
									<a href="#" class="headline">
										<h5>How Did van Gogh’s Turbulent Mind Depict One of the
											Most</h5>
									</a>
									<!-- Post Meta -->
									<div class="post-meta">
										<p>
											<a href="#" class="post-author">Katy Liu</a> on <a
												href="#" class="post-date">Sep 29, 2017 at 9:48 am</a>
										</p>
									</div>
								</div>
							</div>

							<!-- Single Blog Post -->
							<div
								class="single-blog-post post-style-2 d-flex align-items-center">
								<!-- Post Thumbnail -->
								<div class="post-thumbnail">
									<img src="img/blog-img/b12.jpg" alt="">
								</div>
								<!-- Post Content -->
								<div class="post-content">
									<a href="#" class="headline">
										<h5>How Did van Gogh’s Turbulent Mind Depict One of the
											Most</h5>
									</a>
									<!-- Post Meta -->
									<div class="post-meta">
										<p>
											<a href="#" class="post-author">Katy Liu</a> on <a
												href="#" class="post-date">Sep 29, 2017 at 9:48 am</a>
										</p>
									</div>
								</div>
							</div>

							<!-- Single Blog Post -->
							<div
								class="single-blog-post post-style-2 d-flex align-items-center">
								<!-- Post Thumbnail -->
								<div class="post-thumbnail">
									<img src="img/blog-img/b13.jpg" alt="">
								</div>
								<!-- Post Content -->
								<div class="post-content">
									<a href="#" class="headline">
										<h5>How Did van Gogh’s Turbulent Mind Depict One of the
											Most</h5>
									</a>
									<!-- Post Meta -->
									<div class="post-meta">
										<p>
											<a href="#" class="post-author">Katy Liu</a> on <a
												href="#" class="post-date">Sep 29, 2017 at 9:48 am</a>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="tab-pane fade" id="world-tab-3" role="tabpanel"
					aria-labelledby="tab3">
					<div class="row">
						<div class="col-12 col-md-6">
							<!-- Single Blog Post -->
							<div class="single-blog-post">
								<!-- Post Thumbnail -->
								<div class="post-thumbnail">
									<img src="img/blog-img/b1.jpg" alt="">
									<!-- Catagory -->
									<div class="post-cta">
										<a href="#">travel</a>
									</div>
								</div>
								<!-- Post Content -->
								<div class="post-content">
									<a href="#" class="headline">
										<h5>How Did van Gogh’s Turbulent Mind Depict One of the
											Most Complex Concepts in Physics?</h5>
									</a>
									<p>How Did van Gogh’s Turbulent Mind Depict One of the Most
										Complex Concepts in...</p>
									<!-- Post Meta -->
									<div class="post-meta">
										<p>
											<a href="#" class="post-author">Katy Liu</a> on <a
												href="#" class="post-date">Sep 29, 2017 at 9:48 am</a>
										</p>
									</div>
								</div>
							</div>
						</div>

						<div class="col-12 col-md-6">
							<!-- Single Blog Post -->
							<div
								class="single-blog-post post-style-2 d-flex align-items-center">
								<!-- Post Thumbnail -->
								<div class="post-thumbnail">
									<img src="img/blog-img/b10.jpg" alt="">
								</div>
								<!-- Post Content -->
								<div class="post-content">
									<a href="#" class="headline">
										<h5>How Did van Gogh’s Turbulent Mind Depict One of the
											Most</h5>
									</a>
									<!-- Post Meta -->
									<div class="post-meta">
										<p>
											<a href="#" class="post-author">Katy Liu</a> on <a
												href="#" class="post-date">Sep 29, 2017 at 9:48 am</a>
										</p>
									</div>
								</div>
							</div>

							<!-- Single Blog Post -->
							<div
								class="single-blog-post post-style-2 d-flex align-items-center">
								<!-- Post Thumbnail -->
								<div class="post-thumbnail">
									<img src="img/blog-img/b11.jpg" alt="">
								</div>
								<!-- Post Content -->
								<div class="post-content">
									<a href="#" class="headline">
										<h5>How Did van Gogh’s Turbulent Mind Depict One of the
											Most</h5>
									</a>
									<!-- Post Meta -->
									<div class="post-meta">
										<p>
											<a href="#" class="post-author">Katy Liu</a> on <a
												href="#" class="post-date">Sep 29, 2017 at 9:48 am</a>
										</p>
									</div>
								</div>
							</div>

							<!-- Single Blog Post -->
							<div
								class="single-blog-post post-style-2 d-flex align-items-center">
								<!-- Post Thumbnail -->
								<div class="post-thumbnail">
									<img src="img/blog-img/b12.jpg" alt="">
								</div>
								<!-- Post Content -->
								<div class="post-content">
									<a href="#" class="headline">
										<h5>How Did van Gogh’s Turbulent Mind Depict One of the
											Most</h5>
									</a>
									<!-- Post Meta -->
									<div class="post-meta">
										<p>
											<a href="#" class="post-author">Katy Liu</a> on <a
												href="#" class="post-date">Sep 29, 2017 at 9:48 am</a>
										</p>
									</div>
								</div>
							</div>

							<!-- Single Blog Post -->
							<div
								class="single-blog-post post-style-2 d-flex align-items-center">
								<!-- Post Thumbnail -->
								<div class="post-thumbnail">
									<img src="img/blog-img/b13.jpg" alt="">
								</div>
								<!-- Post Content -->
								<div class="post-content">
									<a href="#" class="headline">
										<h5>How Did van Gogh’s Turbulent Mind Depict One of the
											Most</h5>
									</a>
									<!-- Post Meta -->
									<div class="post-meta">
										<p>
											<a href="#" class="post-author">Katy Liu</a> on <a
												href="#" class="post-date">Sep 29, 2017 at 9:48 am</a>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="tab-pane fade" id="world-tab-4" role="tabpanel"
					aria-labelledby="tab4">
					<div class="row">
						<div class="col-12 col-md-6">
							<!-- Single Blog Post -->
							<div class="single-blog-post">
								<!-- Post Thumbnail -->
								<div class="post-thumbnail">
									<img src="img/blog-img/b1.jpg" alt="">
									<!-- Catagory -->
									<div class="post-cta">
										<a href="#">travel</a>
									</div>
								</div>
								<!-- Post Content -->
								<div class="post-content">
									<a href="#" class="headline">
										<h5>How Did van Gogh’s Turbulent Mind Depict One of the
											Most Complex Concepts in Physics?</h5>
									</a>
									<p>How Did van Gogh’s Turbulent Mind Depict One of the Most
										Complex Concepts in...</p>
									<!-- Post Meta -->
									<div class="post-meta">
										<p>
											<a href="#" class="post-author">Katy Liu</a> on <a
												href="#" class="post-date">Sep 29, 2017 at 9:48 am</a>
										</p>
									</div>
								</div>
							</div>
						</div>

						<div class="col-12 col-md-6">
							<!-- Single Blog Post -->
							<div
								class="single-blog-post post-style-2 d-flex align-items-center">
								<!-- Post Thumbnail -->
								<div class="post-thumbnail">
									<img src="img/blog-img/b10.jpg" alt="">
								</div>
								<!-- Post Content -->
								<div class="post-content">
									<a href="#" class="headline">
										<h5>How Did van Gogh’s Turbulent Mind Depict One of the
											Most</h5>
									</a>
									<!-- Post Meta -->
									<div class="post-meta">
										<p>
											<a href="#" class="post-author">Katy Liu</a> on <a
												href="#" class="post-date">Sep 29, 2017 at 9:48 am</a>
										</p>
									</div>
								</div>
							</div>

							<!-- Single Blog Post -->
							<div
								class="single-blog-post post-style-2 d-flex align-items-center">
								<!-- Post Thumbnail -->
								<div class="post-thumbnail">
									<img src="img/blog-img/b11.jpg" alt="">
								</div>
								<!-- Post Content -->
								<div class="post-content">
									<a href="#" class="headline">
										<h5>How Did van Gogh’s Turbulent Mind Depict One of the
											Most</h5>
									</a>
									<!-- Post Meta -->
									<div class="post-meta">
										<p>
											<a href="#" class="post-author">Katy Liu</a> on <a
												href="#" class="post-date">Sep 29, 2017 at 9:48 am</a>
										</p>
									</div>
								</div>
							</div>

							<!-- Single Blog Post -->
							<div
								class="single-blog-post post-style-2 d-flex align-items-center">
								<!-- Post Thumbnail -->
								<div class="post-thumbnail">
									<img src="img/blog-img/b12.jpg" alt="">
								</div>
								<!-- Post Content -->
								<div class="post-content">
									<a href="#" class="headline">
										<h5>How Did van Gogh’s Turbulent Mind Depict One of the
											Most</h5>
									</a>
									<!-- Post Meta -->
									<div class="post-meta">
										<p>
											<a href="#" class="post-author">Katy Liu</a> on <a
												href="#" class="post-date">Sep 29, 2017 at 9:48 am</a>
										</p>
									</div>
								</div>
							</div>

							<!-- Single Blog Post -->
							<div
								class="single-blog-post post-style-2 d-flex align-items-center">
								<!-- Post Thumbnail -->
								<div class="post-thumbnail">
									<img src="img/blog-img/b13.jpg" alt="">
								</div>
								<!-- Post Content -->
								<div class="post-content">
									<a href="#" class="headline">
										<h5>How Did van Gogh’s Turbulent Mind Depict One of the
											Most</h5>
									</a>
									<!-- Post Meta -->
									<div class="post-meta">
										<p>
											<a href="#" class="post-author">Katy Liu</a> on <a
												href="#" class="post-date">Sep 29, 2017 at 9:48 am</a>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="tab-pane fade" id="world-tab-5" role="tabpanel"
					aria-labelledby="tab5">
					<div class="row">
						<div class="col-12 col-md-6">
							<!-- Single Blog Post -->
							<div class="single-blog-post">
								<!-- Post Thumbnail -->
								<div class="post-thumbnail">
									<img src="img/blog-img/b1.jpg" alt="">
									<!-- Catagory -->
									<div class="post-cta">
										<a href="#">travel</a>
									</div>
								</div>
								<!-- Post Content -->
								<div class="post-content">
									<a href="#" class="headline">
										<h5>How Did van Gogh’s Turbulent Mind Depict One of the
											Most Complex Concepts in Physics?</h5>
									</a>
									<p>How Did van Gogh’s Turbulent Mind Depict One of the Most
										Complex Concepts in...</p>
									<!-- Post Meta -->
									<div class="post-meta">
										<p>
											<a href="#" class="post-author">Katy Liu</a> on <a
												href="#" class="post-date">Sep 29, 2017 at 9:48 am</a>
										</p>
									</div>
								</div>
							</div>
						</div>

						<div class="col-12 col-md-6">
							<!-- Single Blog Post -->
							<div
								class="single-blog-post post-style-2 d-flex align-items-center">
								<!-- Post Thumbnail -->
								<div class="post-thumbnail">
									<img src="img/blog-img/b10.jpg" alt="">
								</div>
								<!-- Post Content -->
								<div class="post-content">
									<a href="#" class="headline">
										<h5>How Did van Gogh’s Turbulent Mind Depict One of the
											Most</h5>
									</a>
									<!-- Post Meta -->
									<div class="post-meta">
										<p>
											<a href="#" class="post-author">Katy Liu</a> on <a
												href="#" class="post-date">Sep 29, 2017 at 9:48 am</a>
										</p>
									</div>
								</div>
							</div>

							<!-- Single Blog Post -->
							<div
								class="single-blog-post post-style-2 d-flex align-items-center">
								<!-- Post Thumbnail -->
								<div class="post-thumbnail">
									<img src="img/blog-img/b11.jpg" alt="">
								</div>
								<!-- Post Content -->
								<div class="post-content">
									<a href="#" class="headline">
										<h5>How Did van Gogh’s Turbulent Mind Depict One of the
											Most</h5>
									</a>
									<!-- Post Meta -->
									<div class="post-meta">
										<p>
											<a href="#" class="post-author">Katy Liu</a> on <a
												href="#" class="post-date">Sep 29, 2017 at 9:48 am</a>
										</p>
									</div>
								</div>
							</div>

							<!-- Single Blog Post -->
							<div
								class="single-blog-post post-style-2 d-flex align-items-center">
								<!-- Post Thumbnail -->
								<div class="post-thumbnail">
									<img src="img/blog-img/b12.jpg" alt="">
								</div>
								<!-- Post Content -->
								<div class="post-content">
									<a href="#" class="headline">
										<h5>How Did van Gogh’s Turbulent Mind Depict One of the
											Most</h5>
									</a>
									<!-- Post Meta -->
									<div class="post-meta">
										<p>
											<a href="#" class="post-author">Katy Liu</a> on <a
												href="#" class="post-date">Sep 29, 2017 at 9:48 am</a>
										</p>
									</div>
								</div>
							</div>

							<!-- Single Blog Post -->
							<div
								class="single-blog-post post-style-2 d-flex align-items-center">
								<!-- Post Thumbnail -->
								<div class="post-thumbnail">
									<img src="img/blog-img/b13.jpg" alt="">
								</div>
								<!-- Post Content -->
								<div class="post-content">
									<a href="#" class="headline">
										<h5>How Did van Gogh’s Turbulent Mind Depict One of the
											Most</h5>
									</a>
									<!-- Post Meta -->
									<div class="post-meta">
										<p>
											<a href="#" class="post-author">Katy Liu</a> on <a
												href="#" class="post-date">Sep 29, 2017 at 9:48 am</a>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="tab-pane fade active show" id="world-tab-6"
					role="tabpanel" aria-labelledby="tab6">
					<div class="row">
						<div class="col-12 col-md-6">
							<!-- Single Blog Post -->
							<div class="single-blog-post">
								<!-- Post Thumbnail -->
								<div class="post-thumbnail">
									<img src="img/blog-img/b1.jpg" alt="">
									<!-- Catagory -->
									<div class="post-cta">
										<a href="#">travel</a>
									</div>
								</div>
								<!-- Post Content -->
								<div class="post-content">
									<a href="#" class="headline">
										<h5>How Did van Gogh’s Turbulent Mind Depict One of the
											Most Complex Concepts in Physics?</h5>
									</a>
									<p>How Did van Gogh’s Turbulent Mind Depict One of the Most
										Complex Concepts in...</p>
									<!-- Post Meta -->
									<div class="post-meta">
										<p>
											<a href="#" class="post-author">Katy Liu</a> on <a
												href="#" class="post-date">Sep 29, 2017 at 9:48 am</a>
										</p>
									</div>
								</div>
							</div>
						</div>

						<div class="col-12 col-md-6">
							<!-- Single Blog Post -->
							<div
								class="single-blog-post post-style-2 d-flex align-items-center">
								<!-- Post Thumbnail -->
								<div class="post-thumbnail">
									<img src="img/blog-img/b10.jpg" alt="">
								</div>
								<!-- Post Content -->
								<div class="post-content">
									<a href="#" class="headline">
										<h5>How Did van Gogh’s Turbulent Mind Depict One of the
											Most</h5>
									</a>
									<!-- Post Meta -->
									<div class="post-meta">
										<p>
											<a href="#" class="post-author">Katy Liu</a> on <a
												href="#" class="post-date">Sep 29, 2017 at 9:48 am</a>
										</p>
									</div>
								</div>
							</div>

							<!-- Single Blog Post -->
							<div
								class="single-blog-post post-style-2 d-flex align-items-center">
								<!-- Post Thumbnail -->
								<div class="post-thumbnail">
									<img src="img/blog-img/b11.jpg" alt="">
								</div>
								<!-- Post Content -->
								<div class="post-content">
									<a href="#" class="headline">
										<h5>How Did van Gogh’s Turbulent Mind Depict One of the
											Most</h5>
									</a>
									<!-- Post Meta -->
									<div class="post-meta">
										<p>
											<a href="#" class="post-author">Katy Liu</a> on <a
												href="#" class="post-date">Sep 29, 2017 at 9:48 am</a>
										</p>
									</div>
								</div>
							</div>

							<!-- Single Blog Post -->
							<div
								class="single-blog-post post-style-2 d-flex align-items-center">
								<!-- Post Thumbnail -->
								<div class="post-thumbnail">
									<img src="img/blog-img/b12.jpg" alt="">
								</div>
								<!-- Post Content -->
								<div class="post-content">
									<a href="#" class="headline">
										<h5>How Did van Gogh’s Turbulent Mind Depict One of the
											Most</h5>
									</a>
									<!-- Post Meta -->
									<div class="post-meta">
										<p>
											<a href="#" class="post-author">Katy Liu</a> on <a
												href="#" class="post-date">Sep 29, 2017 at 9:48 am</a>
										</p>
									</div>
								</div>
							</div>

							<!-- Single Blog Post -->
							<div
								class="single-blog-post post-style-2 d-flex align-items-center">
								<!-- Post Thumbnail -->
								<div class="post-thumbnail">
									<img src="img/blog-img/b13.jpg" alt="">
								</div>
								<!-- Post Content -->
								<div class="post-content">
									<a href="#" class="headline">
										<h5>How Did van Gogh’s Turbulent Mind Depict One of the
											Most</h5>
									</a>
									<!-- Post Meta -->
									<div class="post-meta">
										<p>
											<a href="#" class="post-author">Katy Liu</a> on <a
												href="#" class="post-date">Sep 29, 2017 at 9:48 am</a>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="tab-pane fade" id="world-tab-7" role="tabpanel"
					aria-labelledby="tab7">
					<div class="row">
						<div class="col-12 col-md-6">
							<!-- Single Blog Post -->
							<div class="single-blog-post">
								<!-- Post Thumbnail -->
								<div class="post-thumbnail">
									<img src="img/blog-img/b1.jpg" alt="">
									<!-- Catagory -->
									<div class="post-cta">
										<a href="#">travel</a>
									</div>
								</div>
								<!-- Post Content -->
								<div class="post-content">
									<a href="#" class="headline">
										<h5>How Did van Gogh’s Turbulent Mind Depict One of the
											Most Complex Concepts in Physics?</h5>
									</a>
									<p>How Did van Gogh’s Turbulent Mind Depict One of the Most
										Complex Concepts in...</p>
									<!-- Post Meta -->
									<div class="post-meta">
										<p>
											<a href="#" class="post-author">Katy Liu</a> on <a
												href="#" class="post-date">Sep 29, 2017 at 9:48 am</a>
										</p>
									</div>
								</div>
							</div>
						</div>

						<div class="col-12 col-md-6">
							<!-- Single Blog Post -->
							<div
								class="single-blog-post post-style-2 d-flex align-items-center">
								<!-- Post Thumbnail -->
								<div class="post-thumbnail">
									<img src="img/blog-img/b10.jpg" alt="">
								</div>
								<!-- Post Content -->
								<div class="post-content">
									<a href="#" class="headline">
										<h5>How Did van Gogh’s Turbulent Mind Depict One of the
											Most</h5>
									</a>
									<!-- Post Meta -->
									<div class="post-meta">
										<p>
											<a href="#" class="post-author">Katy Liu</a> on <a
												href="#" class="post-date">Sep 29, 2017 at 9:48 am</a>
										</p>
									</div>
								</div>
							</div>

							<!-- Single Blog Post -->
							<div
								class="single-blog-post post-style-2 d-flex align-items-center">
								<!-- Post Thumbnail -->
								<div class="post-thumbnail">
									<img src="img/blog-img/b11.jpg" alt="">
								</div>
								<!-- Post Content -->
								<div class="post-content">
									<a href="#" class="headline">
										<h5>How Did van Gogh’s Turbulent Mind Depict One of the
											Most</h5>
									</a>
									<!-- Post Meta -->
									<div class="post-meta">
										<p>
											<a href="#" class="post-author">Katy Liu</a> on <a
												href="#" class="post-date">Sep 29, 2017 at 9:48 am</a>
										</p>
									</div>
								</div>
							</div>

							<!-- Single Blog Post -->
							<div
								class="single-blog-post post-style-2 d-flex align-items-center">
								<!-- Post Thumbnail -->
								<div class="post-thumbnail">
									<img src="img/blog-img/b12.jpg" alt="">
								</div>
								<!-- Post Content -->
								<div class="post-content">
									<a href="#" class="headline">
										<h5>How Did van Gogh’s Turbulent Mind Depict One of the
											Most</h5>
									</a>
									<!-- Post Meta -->
									<div class="post-meta">
										<p>
											<a href="#" class="post-author">Katy Liu</a> on <a
												href="#" class="post-date">Sep 29, 2017 at 9:48 am</a>
										</p>
									</div>
								</div>
							</div>

							<!-- Single Blog Post -->
							<div
								class="single-blog-post post-style-2 d-flex align-items-center">
								<!-- Post Thumbnail -->
								<div class="post-thumbnail">
									<img src="img/blog-img/b13.jpg" alt="">
								</div>
								<!-- Post Content -->
								<div class="post-content">
									<a href="#" class="headline">
										<h5>How Did van Gogh’s Turbulent Mind Depict One of the
											Most</h5>
									</a>
									<!-- Post Meta -->
									<div class="post-meta">
										<p>
											<a href="#" class="post-author">Katy Liu</a> on <a
												href="#" class="post-date">Sep 29, 2017 at 9:48 am</a>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="tab-pane fade" id="world-tab-8" role="tabpanel"
					aria-labelledby="tab8">
					<div class="row">
						<div class="col-12 col-md-6">
							<!-- Single Blog Post -->
							<div class="single-blog-post">
								<!-- Post Thumbnail -->
								<div class="post-thumbnail">
									<img src="img/blog-img/b1.jpg" alt="">
									<!-- Catagory -->
									<div class="post-cta">
										<a href="#">travel</a>
									</div>
								</div>
								<!-- Post Content -->
								<div class="post-content">
									<a href="#" class="headline">
										<h5>How Did van Gogh’s Turbulent Mind Depict One of the
											Most Complex Concepts in Physics?</h5>
									</a>
									<p>How Did van Gogh’s Turbulent Mind Depict One of the Most
										Complex Concepts in...</p>
									<!-- Post Meta -->
									<div class="post-meta">
										<p>
											<a href="#" class="post-author">Katy Liu</a> on <a
												href="#" class="post-date">Sep 29, 2017 at 9:48 am</a>
										</p>
									</div>
								</div>
							</div>
						</div>

						<div class="col-12 col-md-6">
							<!-- Single Blog Post -->
							<div
								class="single-blog-post post-style-2 d-flex align-items-center">
								<!-- Post Thumbnail -->
								<div class="post-thumbnail">
									<img src="img/blog-img/b10.jpg" alt="">
								</div>
								<!-- Post Content -->
								<div class="post-content">
									<a href="#" class="headline">
										<h5>How Did van Gogh’s Turbulent Mind Depict One of the
											Most</h5>
									</a>
									<!-- Post Meta -->
									<div class="post-meta">
										<p>
											<a href="#" class="post-author">Katy Liu</a> on <a
												href="#" class="post-date">Sep 29, 2017 at 9:48 am</a>
										</p>
									</div>
								</div>
							</div>

							<!-- Single Blog Post -->
							<div
								class="single-blog-post post-style-2 d-flex align-items-center">
								<!-- Post Thumbnail -->
								<div class="post-thumbnail">
									<img src="img/blog-img/b11.jpg" alt="">
								</div>
								<!-- Post Content -->
								<div class="post-content">
									<a href="#" class="headline">
										<h5>How Did van Gogh’s Turbulent Mind Depict One of the
											Most</h5>
									</a>
									<!-- Post Meta -->
									<div class="post-meta">
										<p>
											<a href="#" class="post-author">Katy Liu</a> on <a
												href="#" class="post-date">Sep 29, 2017 at 9:48 am</a>
										</p>
									</div>
								</div>
							</div>

							<!-- Single Blog Post -->
							<div
								class="single-blog-post post-style-2 d-flex align-items-center">
								<!-- Post Thumbnail -->
								<div class="post-thumbnail">
									<img src="img/blog-img/b12.jpg" alt="">
								</div>
								<!-- Post Content -->
								<div class="post-content">
									<a href="#" class="headline">
										<h5>How Did van Gogh’s Turbulent Mind Depict One of the
											Most</h5>
									</a>
									<!-- Post Meta -->
									<div class="post-meta">
										<p>
											<a href="#" class="post-author">Katy Liu</a> on <a
												href="#" class="post-date">Sep 29, 2017 at 9:48 am</a>
										</p>
									</div>
								</div>
							</div>

							<!-- Single Blog Post -->
							<div
								class="single-blog-post post-style-2 d-flex align-items-center">
								<!-- Post Thumbnail -->
								<div class="post-thumbnail">
									<img src="img/blog-img/b13.jpg" alt="">
								</div>
								<!-- Post Content -->
								<div class="post-content">
									<a href="#" class="headline">
										<h5>How Did van Gogh’s Turbulent Mind Depict One of the
											Most</h5>
									</a>
									<!-- Post Meta -->
									<div class="post-meta">
										<p>
											<a href="#" class="post-author">Katy Liu</a> on <a
												href="#" class="post-date">Sep 29, 2017 at 9:48 am</a>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="tab-pane fade" id="world-tab-9" role="tabpanel"
					aria-labelledby="tab9">
					<div class="row">
						<div class="col-12 col-md-6">
							<!-- Single Blog Post -->
							<div class="single-blog-post">
								<!-- Post Thumbnail -->
								<div class="post-thumbnail">
									<img src="img/blog-img/b1.jpg" alt="">
									<!-- Catagory -->
									<div class="post-cta">
										<a href="#">travel</a>
									</div>
								</div>
								<!-- Post Content -->
								<div class="post-content">
									<a href="#" class="headline">
										<h5>How Did van Gogh’s Turbulent Mind Depict One of the
											Most Complex Concepts in Physics?</h5>
									</a>
									<p>How Did van Gogh’s Turbulent Mind Depict One of the Most
										Complex Concepts in...</p>
									<!-- Post Meta -->
									<div class="post-meta">
										<p>
											<a href="#" class="post-author">Katy Liu</a> on <a
												href="#" class="post-date">Sep 29, 2017 at 9:48 am</a>
										</p>
									</div>
								</div>
							</div>
						</div>

						<div class="col-12 col-md-6">
							<!-- Single Blog Post -->
							<div
								class="single-blog-post post-style-2 d-flex align-items-center">
								<!-- Post Thumbnail -->
								<div class="post-thumbnail">
									<img src="img/blog-img/b10.jpg" alt="">
								</div>
								<!-- Post Content -->
								<div class="post-content">
									<a href="#" class="headline">
										<h5>How Did van Gogh’s Turbulent Mind Depict One of the
											Most</h5>
									</a>
									<!-- Post Meta -->
									<div class="post-meta">
										<p>
											<a href="#" class="post-author">Katy Liu</a> on <a
												href="#" class="post-date">Sep 29, 2017 at 9:48 am</a>
										</p>
									</div>
								</div>
							</div>

							<!-- Single Blog Post -->
							<div
								class="single-blog-post post-style-2 d-flex align-items-center">
								<!-- Post Thumbnail -->
								<div class="post-thumbnail">
									<img src="img/blog-img/b11.jpg" alt="">
								</div>
								<!-- Post Content -->
								<div class="post-content">
									<a href="#" class="headline">
										<h5>How Did van Gogh’s Turbulent Mind Depict One of the
											Most</h5>
									</a>
									<!-- Post Meta -->
									<div class="post-meta">
										<p>
											<a href="#" class="post-author">Katy Liu</a> on <a
												href="#" class="post-date">Sep 29, 2017 at 9:48 am</a>
										</p>
									</div>
								</div>
							</div>

							<!-- Single Blog Post -->
							<div
								class="single-blog-post post-style-2 d-flex align-items-center">
								<!-- Post Thumbnail -->
								<div class="post-thumbnail">
									<img src="img/blog-img/b12.jpg" alt="">
								</div>
								<!-- Post Content -->
								<div class="post-content">
									<a href="#" class="headline">
										<h5>How Did van Gogh’s Turbulent Mind Depict One of the
											Most</h5>
									</a>
									<!-- Post Meta -->
									<div class="post-meta">
										<p>
											<a href="#" class="post-author">Katy Liu</a> on <a
												href="#" class="post-date">Sep 29, 2017 at 9:48 am</a>
										</p>
									</div>
								</div>
							</div>

							<!-- Single Blog Post -->
							<div
								class="single-blog-post post-style-2 d-flex align-items-center">
								<!-- Post Thumbnail -->
								<div class="post-thumbnail">
									<img src="img/blog-img/b13.jpg" alt="">
								</div>
								<!-- Post Content -->
								<div class="post-content">
									<a href="#" class="headline">
										<h5>How Did van Gogh’s Turbulent Mind Depict One of the
											Most</h5>
									</a>
									<!-- Post Meta -->
									<div class="post-meta">
										<p>
											<a href="#" class="post-author">Katy Liu</a> on <a
												href="#" class="post-date">Sep 29, 2017 at 9:48 am</a>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Catagory Area End-->
	</div>

	<div class="post_list">
		<div class="title">
			<h5>Latest Articles</h5>
		</div>

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

</div>
<!-- ========== Post Content Area End  ========== -->
@endsection
