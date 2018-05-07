<!-- ***** Footer Area Start ***** -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="footer-single-widget">
                        <h1><a href="/">YoungDeveloper</a></h1>
                        <div class="copywrite-text mt-30">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="footer-single-widget">
                        <ul class="footer-menu d-flex justify-content-between">
                            <li><a href="/">Home</a></li>
                            <?php
								foreach ( \App\Category::where ( 'idCategoryParrent', '=', 0 )->orderBy ( 'id', 'asc' )->get () as $category ) :
									
									$subcategories = \App\Category::where ( 'idCategoryParrent', $category->id )->orderBy ( 'created_at', 'asc' )->get ();
									if (sizeof ( $subcategories ) > 0) {
										echo '<li class="dropdown">';
										echo '<a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="true">';
										echo $category ['name'];
										echo '<span class="caret"></span></a></li>';
									} else {
										echo '<li><a href="#">';
										echo $category ['name'];
										echo '</a></li>';
									}
								endforeach;
							 ?>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="footer-single-widget">
                        <h5>Subscribe</h5>
                        <form action="#" method="post">
                            <input type="email" name="email" id="email" placeholder="Enter your mail">
                            <button type="button"><i class="fa fa-arrow-right"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<!-- ***** Footer Area End ***** -->