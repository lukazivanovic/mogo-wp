<?php
/*
	Template Name: Home Page
*/

get_header();
?>

<!-- Story About Us
================================================== -->
<?php
$storysubheading = get_field('storysubheading');
$storysubheading2 = get_field('storysubheading2');
$storysectiondesc = get_field('storysectiondesc');
?>

<section id="story">
	<div class="container">
		<h2 class="sectionHeading">
			<span class="subHeading"><?php echo $storysubheading ?></span>
			<?php echo $storysubheading2 ?>
		</h2>
		<p class="sectionDesc"><?php echo $storysectiondesc ?></p>
		<div class="sectionContent">
		<?php
			$storysectioncontent = get_field('storysectioncontent');
			if( $storysectioncontent ) { 
		?>
			<div class="row hoverEffect">
			<?php foreach( $storysectioncontent as $row ) {?>
				<div class="col-md-4 col-sm-4">
					<div class="item">
						<a class="overlay" href="#">
							<span class="content">
								<i class="mdi <?php echo $row['material_design_icon']; ?> icon"></i>
								<?php echo $row['text']; ?>
							</span>
							<img src="<?php echo $row['image']['url']; ?>" alt="">
						</a>
					</div>
				</div>
			<?php } ?>
			</div>
		<?php } ?>
		</div>
	</div>		
</section><!--/#story-->

<!-- Counting
================================================== -->
<section id="counting">
	<div class="container">
		<?php
			$counting_section_repeater = get_field('counting_section_repeater');
			if( $counting_section_repeater ) { 
		?>
		<div layout="row" class="verticalStretch">
		<?php foreach( $counting_section_repeater as $row ) {?>
			<div class="item">
				<div class="number"><?php echo $row['counting_item_number']; ?></div>
				<div class="text"><?php echo $row['counting_item_text']; ?></div>
			</div>
		<?php } ?>
		</div>
	<?php } ?>
	</div>
</section><!--/#counting-->

<!-- Services
================================================== -->
<section id="services">
	<div class="container">
		<h2 class="sectionHeading">
			<span class="subHeading">We work with</span>
			Amazing Services
		</h2>
		<div class="sectionContent">			
			<div class="fw" layout="row">
				<div class="col-md-4 col-sm-6 item ">
					<div layout="row">
						<i class="mdi mdi-apple-keyboard-command icon fsr"></i>
						<div>
							<h4 class="serviceTitle">Photography</h4>
							<p>Photography is the science, art and practice of creating durable images by recording light or other electromagnetic radiation</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 item ">
					<div layout="row">
						<i class="mdi mdi-blender icon fsr"></i>
						<div>
							<h4 class="serviceTitle">Web Design</h4>
							<p>Web design encompasses many different skills and disciplines in the production and maintenance of websites.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 item ">
					<div layout="row">
						<i class="mdi mdi-bookmark-plus-outline icon fsr"></i>
						<div>
							<h4 class="serviceTitle">Creativity</h4>
							<p>Creativity is a phenomenon whereby something new and somehow valuable is formed. The created item may be intangible or a physical object.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 item ">
					<div layout="row">
						<i class="mdi mdi-buffer icon fsr"></i>
						<div>
							<h4 class="serviceTitle">seo</h4>
							<p>Search engine optimization (SEO) is the process of affecting the visibility of a website or a web page in a web search engine's unpaid results.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 item ">
					<div layout="row">
						<i class="mdi mdi-desktop-mac icon fsr"></i>
						<div>
							<h4 class="serviceTitle">Css/Html</h4>
							<p>HyperText Markup Language, commonly abbreviated as HTML, is the standard markup language used to create web pages. </p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 item ">
					<div layout="row">
						<i class="mdi mdi-diamond icon fsr"></i>
						<div>
							<h4 class="serviceTitle">digital</h4>
							<p>With digital signals, system noise, provided it is not too great, will not change the quantification whereas with signals handled using analog processing.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section><!--/#services-->

<!-- Unique Design
================================================== -->
<section id="uniqueDesign">
	<div class="container">
		<h2 class="sectionHeading">
			<span class="subHeading">For all devices</span>
			Unique design
		</h2>
		<div class="sectionContent">
			<div class="devices">
				<img class="tablet" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/unique-design/img-1.png" alt="">
				<img class="mobile" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/unique-design/img-2.png" alt="">
			</div>
		</div>
	</div>
</section><!--/#uniqueDesign-->

<!-- What We Do
================================================== -->
<section id="whatWeDo">
	<div class="container">
		<h2 class="sectionHeading">
			<span class="subHeading">Service</span>
			what we do
		</h2>
		<p class="sectionDesc">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
		</p>
		<div class="sectionContent">
			<div class="row">
				<div class="col-md-6">
					<div class="text-center">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/what-we-do/img-1.jpg" alt="">
					</div>
				</div>
				<div class="col-md-6">
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingOne">
								<h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										<i class="mdi mdi-chevron-up icon arrow"></i>
										<i class="mdi mdi-camera icon"></i> 
										Photography
									</a>
								</h4>
							</div>
							<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
								<div class="panel-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingTwo">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										<i class="mdi mdi-chevron-up icon arrow"></i>
										<i class="mdi mdi-owl icon"></i> 
										creativity
									</a>
								</h4>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
								<div class="panel-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingThree">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
										<i class="mdi mdi-chevron-up icon arrow"></i>
										<i class="mdi mdi-laptop-mac icon"></i> 
										web design
									</a>
								</h4>
							</div>
							<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
								<div class="panel-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section><!--/#whatWeDo-->

<!-- Testimonial
================================================== -->
<section class="testimonial">
	<div class="container">
		<div class="testimonialSlider">
			<ul>
				<li>
					<div layout="row">
						<div class="symbol fsr">
							<i class="mdi mdi-comment-multiple-outline icon"></i>
						</div>
						<div>
							<p class="quote">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation."</p>
							<span class="name">Jon Doe</span>
						</div>
					</div>
				</li>
				<li>
					<div layout="row">
						<div class="symbol fsr">
							<i class="mdi mdi-wechat icon"></i>	
						</div>
						<div>
							<p class="quote">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation."</p>
							<span class="name">Jon Doe</span>
						</div>
					</div>
				</li>
				<li>
					<div layout="row">
						<div class="symbol fsr">
							<i class="mdi mdi-message-text-outline icon"></i>
						</div>
						<div>
							<p class="quote">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation."</p>
							<span class="name">Jon Doe</span>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
</section><!--/#testimonial-->

<!-- Our Team
================================================== -->
<section id="ourTeam">
	<div class="container">
		<h2 class="sectionHeading">
			<span class="subHeading">Who we are</span>
			Meet our team
		</h2>
		<p class="sectionDesc">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
		</p>
		<div class="sectionContent">
			<div class="row hoverEffect">
				<div class="col-md-4 col-sm-4">
					<div class="item">
						<div class="overlay" href="#">
							<div class="content">
								<a href="#" class="icon"><i class="mdi mdi-facebook"></i></a>
								<a href="#" class="icon"><i class="mdi mdi-twitter"></i></a>
								<a href="#" class="icon"><i class="mdi mdi-pinterest"></i></a>
								<a href="#" class="icon"><i class="mdi mdi-instagram"></i></a>
							</div>
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/our-team/img-1.jpg" alt="">
						</div>
					</div>
					<div class="info">
						<h4 class="name">Matthew Dix</h4>
						<span class="regency">Graphic Design</span>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="item">
						<div class="overlay" href="#">
							<div class="content">
								<a href="#" class="icon"><i class="mdi mdi-facebook"></i></a>
								<a href="#" class="icon"><i class="mdi mdi-twitter"></i></a>
								<a href="#" class="icon"><i class="mdi mdi-pinterest"></i></a>
								<a href="#" class="icon"><i class="mdi mdi-instagram"></i></a>
							</div>
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/our-team/img-2.jpg" alt="">
						</div>
					</div>
					<div class="info">
						<h4 class="name">Christopher Campbell</h4>
						<span class="regency">Branding/UX design</span>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="item">
						<div class="overlay" href="#">
							<div class="content">
								<a href="#" class="icon"><i class="mdi mdi-facebook"></i></a>
								<a href="#" class="icon"><i class="mdi mdi-twitter"></i></a>
								<a href="#" class="icon"><i class="mdi mdi-pinterest"></i></a>
								<a href="#" class="icon"><i class="mdi mdi-instagram"></i></a>
							</div>
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/our-team/img-3.jpg" alt="">
						</div>
					</div>
					<div class="info">
						<h4 class="name">Michael Fertig </h4>
						<span class="regency">Developer</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section><!--/#ourTeam-->

<!-- Brand
================================================== -->
<section id="brand">
	<div class="container">
		<div class="verticalCenter fw" layout="row">
			<div class="col-md-2 col-sm-4 col-xs-6"><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/brand/img-1.png" alt=""></a></div>
			<div class="col-md-2 col-sm-4 col-xs-6"><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/brand/img-2.png" alt=""></a></div>
			<div class="col-md-2 col-sm-4 col-xs-6"><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/brand/img-3.png" alt=""></a></div>
			<div class="col-md-2 col-sm-4 col-xs-6"><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/brand/img-4.png" alt=""></a></div>
			<div class="col-md-2 col-sm-4 col-xs-6"><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/brand/img-5.png" alt=""></a></div>
			<div class="col-md-2 col-sm-4 col-xs-6"><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/brand/img-6.png" alt=""></a></div>
		</div>
	</div>
</section><!--/#brand-->

<!-- Portfolio
================================================== -->
<section id="portfolio">
	<div class="container">
		<h2 class="sectionHeading">
			<span class="subHeading">What we do</span>
			some of our work
		</h2>
		<p class="sectionDesc">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
		</p>
	</div>
	<div class="sectionContent">
		<ul class="portfolioItems">
			<li class="item">
				<a class="prettyPhoto" rel="prettyPhoto[gallery1]" title="Development Mobile" href="images/our-work/img-1.jpg">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/our-work/img-1.jpg" />
					<div class="overlay">
						<div class="content">
							<i class="mdi mdi-crown icon"></i>
							<h4 class="title">creatively designed</h4>
							<span class="desc">Lorem ipsum dolor sit</span>
						</div>
					</div>
				</a>
			</li>
			<li class="item">
				<a class="prettyPhoto" rel="prettyPhoto[gallery1]" title="Development Mobile" href="images/our-work/img-2.jpg">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/our-work/img-2.jpg" />
					<div class="overlay">
						<div class="content">
							<i class="mdi mdi-cube-outline icon"></i>
							<h4 class="title">creatively designed</h4>
							<span class="desc">Lorem ipsum dolor sit</span>
						</div>
					</div>
				</a>
			</li>
			<li class="item">
				<a class="prettyPhoto" rel="prettyPhoto[gallery1]" title="Development Mobile" href="images/our-work/img-3.jpg">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/our-work/img-3.jpg" />
					<div class="overlay">
						<div class="content">
							<i class="mdi mdi-desktop-mac icon"></i>
							<h4 class="title">creatively designed</h4>
							<span class="desc">Lorem ipsum dolor sit</span>
						</div>
					</div>
				</a>
			</li>
			<li class="item">
				<a class="prettyPhoto" rel="prettyPhoto[gallery1]" title="Development Mobile" href="images/our-work/img-4.jpg">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/our-work/img-4.jpg" />
					<div class="overlay">
						<div class="content">
							<i class="mdi mdi-flower icon"></i>
							<h4 class="title">creatively designed</h4>
							<span class="desc">Lorem ipsum dolor sit</span>
						</div>
					</div>
				</a>
			</li>
			<li class="item">
				<a class="prettyPhoto" rel="prettyPhoto[gallery1]" title="Development Mobile" href="images/our-work/img-5.jpg">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/our-work/img-5.jpg" />
					<div class="overlay">
						<div class="content">
							<i class="mdi mdi-gamepad-variant icon"></i>
							<h4 class="title">creatively designed</h4>
							<span class="desc">Lorem ipsum dolor sit</span>
						</div>
					</div>
				</a>
			</li>
			<li class="item">
				<a class="prettyPhoto" rel="prettyPhoto[gallery1]" title="Development Mobile" href="images/our-work/img-6.jpg">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/our-work/img-6.jpg" />
					<div class="overlay">
						<div class="content">
							<i class="mdi mdi-gnome icon"></i>
							<h4 class="title">creatively designed</h4>
							<span class="desc">Lorem ipsum dolor sit</span>
						</div>
					</div>
				</a>
			</li>
			<li class="item">
				<a class="prettyPhoto" rel="prettyPhoto[gallery1]" title="Development Mobile" href="images/our-work/img-7.jpg">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/our-work/img-7.jpg" />
					<div class="overlay">
						<div class="content">
							<i class="mdi mdi-guitar-electric icon"></i>
							<h4 class="title">creatively designed</h4>
							<span class="desc">Lorem ipsum dolor sit</span>
						</div>
					</div>
				</a>
			</li>
		</ul>
	</div>
</section><!--/#portfolio-->

<!-- Testimonial
================================================== -->
<section class="testimonial bg-white">
	<div class="container">
		<div class="testimonialSlider">
			<ul>
				<li>
					<div layout="row" class="verticalCenter">
						<div class="avatar fsr">
							<img class="img-circle img-thumbnail" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/testimonial/img-1.jpg" alt="">
						</div>
						<div>
							<p class="quote">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation."</p>
							<span class="name">Joshua Earle</span>
						</div>
					</div>
				</li>
				<li>
					<div layout="row" class="verticalCenter">
						<div class="avatar fsr">
							<img class="img-circle img-thumbnail" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/testimonial/img-2.jpg" alt="">
						</div>
						<div>
							<p class="quote">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation."</p>
							<span class="name">Jon Doe</span>
						</div>
					</div>
				</li>
				<li>
					<div layout="row" class="verticalCenter">
						<div class="avatar fsr">
							<img class="img-circle img-thumbnail" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/testimonial/img-3.jpg" alt="">
						</div>
						<div>
							<p class="quote">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation."</p>
							<span class="name">Jon Doe</span>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
</section><!--/#testimonial-->

<!-- Happy Client
================================================== -->
<section id="happyClient">
	<div class="container">
		<h2 class="sectionHeading">
			<span class="subHeading">Happy Clients</span>
			What people say
		</h2>
		<div class="sectionContent">
			<div class="row">
				<div class="col-md-6">
					<div layout="row" class="item">
						<div class="avatar fsr">
							<img class="img-circle" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/happy-client/img-1.jpg" alt="">
						</div>
						<div class="info">
							<h4 class="name">Matthew Dix</h4>
							<span class="regency">Graphic Design</span>
							<p class="desc">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo illo cupiditate temporibus sapiente, sint, voluptatibus tempora esse. Consectetur voluptate nihil quo nulla voluptatem dolorem harum nostrum
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div layout="row" class="item">
						<div class="avatar fsr">
							<img class="img-circle" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/happy-client/img-2.jpg" alt="">
						</div>
						<div class="info">
							<h4 class="name">Nick Karvounis</h4>
							<span class="regency">Graphic Design</span>
							<p class="desc">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo illo cupiditate temporibus sapiente, sint, voluptatibus tempora esse. Consectetur voluptate nihil quo nulla voluptatem dolorem harum nostrum
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div layout="row" class="item">
						<div class="avatar fsr">
							<img class="img-circle" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/happy-client/img-3.jpg" alt="">
						</div>
						<div class="info">
							<h4 class="name">Jaelynn Castillo</h4>
							<span class="regency">Graphic Design</span>
							<p class="desc">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo illo cupiditate temporibus sapiente, sint, voluptatibus tempora esse. Consectetur voluptate nihil quo nulla voluptatem dolorem harum nostrum
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div layout="row" class="item">
						<div class="avatar fsr">
							<img class="img-circle" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/happy-client/img-4.jpg" alt="">
						</div>
						<div class="info">
							<h4 class="name">Mike Petrucci</h4>
							<span class="regency">Graphic Design</span>
							<p class="desc">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo illo cupiditate temporibus sapiente, sint, voluptatibus tempora esse. Consectetur voluptate nihil quo nulla voluptatem dolorem harum nostrum
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section><!--/#happyClient-->

<!-- Latest Blog
================================================== -->
<section id="latestBlog">
	<div class="container">
		<h2 class="sectionHeading">
			<span class="subHeading">Our stories</span>
			Latest Blog
		</h2>
		<div class="sectionContent">
			<div class="row">
				<div class="col-md-4 col-sm-4">
					<article>
						<div class="articleThumb">
							<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/our-blog/img-1.jpg" alt=""></a>
							<div class="date">
								<span class="number">15</span>
								<span class="text">Jan</span>
							</div>
						</div>
						<h3 class="articleTitle"><a href="">Lorem ipsum dolor sit amet</a></h3>
						<p class="articleDesc">
							Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						</p>
						<div class="articleMeta">
							<a href="#"><i class="mdi mdi-eye icon"></i> 543</a>
							<a href="#"><i class="mdi mdi-comment-multiple-outline icon"></i> 15</a>
						</div>
					</article>
				</div>
				<div class="col-md-4 col-sm-4">
					<article>
						<div class="articleThumb">
							<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/our-blog/img-2.jpg" alt=""></a>
							<div class="date">
								<span class="number">14</span>
								<span class="text">Jan</span>
							</div>
						</div>
						<h3 class="articleTitle"><a href="">sed do eiusmod tempor</a></h3>
						<p class="articleDesc">
							Adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						</p>
						<div class="articleMeta">
							<a href="#"><i class="mdi mdi-eye icon"></i> 995</a>
							<a href="#"><i class="mdi mdi-comment-multiple-outline icon"></i> 42</a>
						</div>
					</article>
				</div>
				<div class="col-md-4 col-sm-4">
					<article>
						<div class="articleThumb">
							<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/our-blog/img-3.jpg" alt=""></a>
							<div class="date">
								<span class="number">12</span>
								<span class="text">Jan</span>
							</div>
						</div>
						<h3 class="articleTitle"><a href="">incididunt ut labore et dolore</a></h3>
						<p class="articleDesc">
							Elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						</p>
						<div class="articleMeta">
							<a href="#"><i class="mdi mdi-eye icon"></i> 1264</a>
							<a href="#"><i class="mdi mdi-comment-multiple-outline icon"></i> 69</a>
						</div>
					</article>
				</div>
			</div>
		</div>
	</div>
</section><!--/#latestBlog-->

<!-- Map
================================================== -->
<section id="map">
	<div class="container">
		<h2 class="sectionHeading">
			<i class="mdi mdi-map-marker icon"></i>
			<span class="text">Open map</span>
			<span class="text" style="display: none;">Close map</span>
		</h2>
		<div class="mapWrap">
			<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d79466.26604960626!2d-0.19779784176715043!3d51.50733004537892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!3m2!1d51.5073509!2d-0.1277583!5e0!3m2!1sen!2s!4v1469206441744" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
</section><!--/#map-->

<?php
get_footer();
?>