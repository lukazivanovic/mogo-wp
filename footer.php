<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MogoWP
 */

?>

<?php wp_footer(); ?>

<!-- Footer
================================================== -->
<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="colInfo">
					<div class="footerLogo">
						<a href="#" >MoGo</a>	
					</div>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					</p>
					<div class="followUs">
						<div class="totalFollow"><span>15k</span> followers</div>
						<div class="socialNetwork">
							<span class="text">Follow Us: </span>
							<a href="" class="icon"><i class="mdi mdi-facebook"></i></a>
							<a href="" class="icon"><i class="mdi mdi-twitter"></i></a>
							<a href="" class="icon"><i class="mdi mdi-instagram"></i></a>
							<a href="" class="icon"><i class="mdi mdi-pinterest"></i></a>
							<a href="" class="icon"><i class="mdi mdi-google-plus"></i></a>
							<a href="" class="icon"><i class="mdi mdi-youtube-play"></i></a>
							<a href="" class="icon"><i class="mdi mdi-dribbble"></i></a>
							<a href="" class="icon"><i class="mdi mdi-tumblr"></i></a>
						</div>
					</div>
					<form action="" class="subscribeForm">
						<div class="input-group input-group-lg">
							<input type="email" class="form-control" placeholder="Your Email" required>
							<span class="input-group-btn">
								<button class="btn btn-success" type="submit">Subscribe</button>
							</span>
						</div>
					</form>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="colInfo">
					<h3 class="colHeading">Blogs</h3>
					<ul class="listArticles">
						<li layout="row" class="verticalCenter">
							<a class="articleThumb fsr" href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/our-blog/img-4.jpg" alt=""></a>
							<div class="info">
								<h3 class="articleTitle"><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing</a></h3>
								<div class="date">Jan 9, 2016</div>
							</div>
						</li>
						<li layout="row" class="verticalCenter">
							<a class="articleThumb fsr" href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/our-blog/img-5.jpg" alt=""></a>
							<div class="info">
								<h3 class="articleTitle"><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing</a></h3>
								<div class="date">Jan 9, 2016</div>
							</div>
						</li>
						<li layout="row" class="verticalCenter">
							<a class="articleThumb fsr" href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/our-blog/img-6.jpg" alt=""></a>
							<div class="info">
								<h3 class="articleTitle"><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing</a></h3>
								<div class="date">Jan 9, 2016</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="colInfo">
					<h3 class="colHeading">instagram</h3>
					<div class="instagramImages clearfix">
						<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/instagram/img-1.jpg" alt=""></a>
						<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/instagram/img-2.jpg" alt=""></a>
						<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/instagram/img-3.jpg" alt=""></a>
						<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/instagram/img-4.jpg" alt=""></a>
						<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/instagram/img-5.jpg" alt=""></a>
						<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/instagram/img-6.jpg" alt=""></a>
						<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/instagram/img-7.jpg" alt=""></a>
						<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/instagram/img-8.jpg" alt=""></a>
						<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/instagram/img-9.jpg" alt=""></a>
						<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/instagram/img-3.jpg" alt=""></a>
						<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/instagram/img-4.jpg" alt=""></a>
						<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/instagram/img-5.jpg" alt=""></a>
					</div>
					<a href="#" class="morePhoto">View more photos</a>
				</div>
			</div>
		</div>
		<div class="copyright">Copyright &copy; 2020 <a target="_blank" href="http://" title="something.com">Something.com</a> 
			<br/> by <a href="https://">Luka Zivanovic</a></div>
	</div>
</footer><!--/#footer-->

<!-- Search Form - Display when click magnify icon in menu
================================================== -->
<form action="" id="searchForm">
	<input type="text" placeholder="Search..." class="form-control searchInput">
	<i class="mdi mdi-close close"></i>
</form><!--/#searchForm-->

<!-- Scroll to top
================================================== -->
<a href="#" id="scrollToTop">Go to Top</a>

<!-- javascript -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.min.js"></script>	
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.hoverdir.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/modernizr.custom.97074.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/unslider-min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/template.js"></script>

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!-- css3-mediaqueries.js for IE less than 9 -->
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->

</body>
</html>
