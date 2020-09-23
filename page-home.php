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
			<span class="subHeading"><?php the_field('servicessubheading'); ?></span>
			<?php the_field('servicessubheading2'); ?>
		</h2>
		<div class="sectionContent">			
			<div class="fw" layout="row">
			<?php
				$service = get_field('service');
				if( $service ) { 
			?>
				<?php foreach( $service as $row ) {?>
					<div class="col-md-4 col-sm-6 item ">
					<div layout="row">
						<i class="mdi <?php echo $row['material_design_icon']; ?> icon fsr"></i>
						<div>
							<h4 class="serviceTitle"><?php echo $row['servicetitle']; ?></h4>
							<p><?php echo $row['servicetext']; ?></p>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
			<?php } ?>
		</div>
	</div>
</section><!--/#services-->

<!-- Unique Design
================================================== -->
<?php
$tabletimg = get_field('tabletimg');
$mobileimg = get_field('mobileimg');
$udimg = get_field('udimg');
?>
<section id="uniqueDesign" style="background: #e0e0e0 url('<?php echo $udimg['url']; ?>') no-repeat center center / cover;">
	<div class="container">
		<h2 class="sectionHeading">
			<span class="subHeading"><?php the_field('udsubheading'); ?></span>
			<?php the_field('udsubheading2'); ?>
		</h2>
		<div class="sectionContent">
			<div class="devices">
				<img class="tablet" src="<?php echo $tabletimg['url']; ?>" alt="">
				<img class="mobile" src="<?php echo $mobileimg['url']; ?>" alt="">
			</div>
		</div>
	</div>
</section><!--/#uniqueDesign-->

<!-- What We Do
================================================== -->
<section id="whatWeDo">
	<div class="container">
		<h2 class="sectionHeading">
			<span class="subHeading"><?php the_field('wwdsubheading'); ?></span>
			<?php the_field('wwdsubheading2'); ?>
		</h2>
		<p class="sectionDesc">
			<?php the_field('wwdsectiondesc'); ?>
		</p>
		<div class="sectionContent">
			<div class="row">
				<div class="col-md-6">
					<div class="text-center">
						<?php $wwdimg = get_field('wwdimg'); ?> 
						<img src="<?php echo $wwdimg['url']; ?>" alt="">
					</div>
				</div>
				<div class="col-md-6">
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					<?php
						$accordion = get_field('accordion');
						if( $accordion ) { 
							$acccounter = 1;
							foreach( $accordion as $row ) { 
								$acccount = $acccounter++;?>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="heading<?php echo $acccount; ?>">
								<h4 class="panel-title">
									<a class="<?php if($acccount==1) echo 'collapsed'; ?>" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $acccount; ?>" aria-expanded="<?php if($acccount==1) echo 'true'; else echo 'false'; ?>" aria-controls="collapse<?php echo $acccount; ?>">
										<i class="mdi mdi-chevron-up icon arrow"></i>
										<i class="mdi <?php echo $row['accordion_icon']; ?> icon"></i> 
										<?php echo $row['accordion_title']; ?>
									</a>
								</h4>
							</div>
							<div id="collapse<?php echo $acccount; ?>" class="panel-collapse collapse <?php if($acccount==1) echo 'in'; ?>" role="tabpanel" aria-labelledby="heading<?php echo $acccount; ?>">
								<div class="panel-body">
								<?php echo $row['accordion_body']; ?>
								</div>
							</div>
						<?php } ?>
						</div>
						<?php } ?>
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
		<?php
			$testimonial = get_field('testimonial');
			if( $testimonial ) { 
		?>
		<div class="testimonialSlider">
			<ul>
				<?php foreach( $testimonial as $row ) {?>
				<li>
					<div layout="row">
						<div class="symbol fsr">
							<i class="mdi <?php echo $row['mdi']; ?> icon"></i>
						</div>
						<div>
							<p class="quote">"<?php echo $row['quote']; ?>"</p>
							<span class="name"><?php echo $row['name']; ?></span>
						</div>
					</div>
				</li>
				<?php } ?>
			</ul>
			<?php } ?>
		</div>
	</div>
</section><!--/#testimonial-->

<!-- Our Team
================================================== -->
<section id="ourTeam">
	<div class="container">
		<h2 class="sectionHeading">
			<span class="subHeading"><?php the_field('otsubheading'); ?></span>
			<?php the_field('otsubheading2'); ?>
		</h2>
		<p class="sectionDesc">
			<?php the_field('otsectiondesc'); ?> 
		</p>
		<div class="sectionContent">
			<div class="row hoverEffect">
			<?php
				$ourteam = get_field('ourteam');
				if( $ourteam ) { 
					foreach( $ourteam as $row ) {
			?>
				<div class="col-md-4 col-sm-4">
					<div class="item">
						<div class="overlay" href="#">
							<div class="content">
								<?php if($row['icons']) { 
									foreach ($row['icons'] as $icon){ ?>
								<a href="<?php echo $icon['link']; ?>" class="icon"><i class="mdi <?php echo $icon	['mdi']; ?>"></i></a>
								<?php }} ?>
							</div>
							<img src="<?php echo $row['img']['url']; ?>" alt="">
						</div>
					</div>
					<div class="info">
						<h4 class="name"><?php echo $row['name']; ?></h4>
						<span class="regency"><?php echo $row['regency']; ?></span>
					</div>
				</div>
				<?php }} ?>
			</div>
		</div>
	</div>		
</section><!--/#ourTeam-->

<!-- Brand
================================================== -->
<section id="brand">
	<div class="container">
		<div class="verticalCenter fw" layout="row">
			<?php
			$brand = get_field('brand');
			if( $brand ) { 
				foreach( $brand as $row ) {
			?>
			<div class="col-md-2 col-sm-4 col-xs-6"><a href="<?php echo $row['link']; ?>"><img src="<?php echo $row['image']['url']; ?>" alt=""></a></div>
			<?php }} ?>
		</div>
	</div>
</section><!--/#brand-->

<!-- Portfolio
================================================== -->
<section id="portfolio">
	<div class="container">
		<h2 class="sectionHeading">
			<span class="subHeading"><?php the_field('portfoliosectionheading'); ?></span>
			<?php the_field('portfoliosectionheading2'); ?>
		</h2>
		<p class="sectionDesc">
			<?php the_field('portfoliosectiondesc'); ?>
		</p>
	</div>
	<div class="sectionContent">
		<ul class="portfolioItems">
			<?php
			$portfolio = get_field('portfolio');
			if( $portfolio ) { 
				foreach( $portfolio as $row ) {
			?>
			<li class="item">
				<a class="prettyPhoto" rel="prettyPhoto[gallery1]" title="Development Mobile" href="<?php echo $row['img']['url']; ?>">
					<img src="<?php echo $row['img']['url']; ?>" />
					<div class="overlay">
						<div class="content">
							<i class="mdi <?php echo $row['mdi']; ?> icon"></i>
							<h4 class="title"><?php echo $row['title']; ?></h4>
							<span class="desc"><?php echo $row['description']; ?></span>
						</div>
					</div>
				</a>
			</li>
			<?php }} ?>
		</ul>
	</div>
</section><!--/#portfolio-->

<!-- Testimonial
================================================== -->
<section class="testimonial bg-white">
	<div class="container">
		<div class="testimonialSlider">
			<ul>
			<?php
			$testimonial2 = get_field('testimonial2');
			if( $testimonial2 ) { 
				foreach( $testimonial2 as $row ) {
			?>
				<li>
					<div layout="row" class="verticalCenter">
						<div class="avatar fsr">
							<img class="img-circle img-thumbnail" src="<?php echo $row['image']['url']; ?>" alt="">
						</div>
						<div>
							<p class="quote">"<?php echo $row['quote']; ?>"</p>
							<span class="name"><?php echo $row['name']; ?></span>
						</div>
					</div>
				</li>
				<?php }} ?>
			</ul>
		</div>
	</div>
</section><!--/#testimonial-->

<!-- Happy Client
================================================== -->
<?php $hcbg_image = get_field('hcbg_image'); ?>
<section id="happyClient" style="background: url('<?php echo $hcbg_image['url']; ?>') no-repeat center center / cover;">
	<div class="container">
		<h2 class="sectionHeading">
			<span class="subHeading"><?php the_field('hcsubheading'); ?></span>
			<?php the_field('hcsubheading2'); ?>
		</h2>
		<div class="sectionContent">
			<div class="row">
			<?php $happy_client = get_field('happy_client');
			if( $happy_client ) { 
				foreach( $happy_client as $row ) {
			?>
				<div class="col-md-6">
					<div layout="row" class="item">
						<div class="avatar fsr">
							<img class="img-circle" src="<?php echo $row['image']['url']; ?>" alt="">
						</div>
						<div class="info">
							<h4 class="name"><?php echo $row['name']; ?></h4>
							<span class="regency"><?php echo $row['regency']; ?></span>
							<p class="desc">
							<?php echo $row['description']; ?>
							</p>
						</div>
					</div>
				</div>
			<?php }} ?>
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