<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MogoWP
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- favicon -->
	<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/ico/favicon.jpg">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('stylesheet_directory'); ?>/assets/images/ico/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('stylesheet_directory'); ?>/assets/images/ico/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('stylesheet_directory'); ?>/assets/images/ico/favicon-16x16.png">
	<link rel="manifest" href="<?php bloginfo('stylesheet_directory'); ?>/assets/images/ico/site.webmanifest">
	
	<!-- css -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/materialdesignicons.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/jquery.mCustomScrollbar.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/prettyPhoto.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/unslider.css" />

	<?php wp_head(); ?>

	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!-- css3-mediaqueries.js for IE less than 9 -->
	<!--[if lt IE 9]>
	    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'mogowp' ); ?></a>

	<!--Advanced Custom Fields-->


	<!-- Header
	================================================== -->
	<?php
	$bg_image = get_field('bg_image');
	if (!empty($bg_image)) { ?>
	<header id="header" style="background-image:url('<?php echo $bg_image['url']; ?>'); background-size: cover;">
	<?php }?>
		<div id="headerInner">					
			<nav id="navbar" class="navbar navbar-default" role="navigation">
				<div class="container">

					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="homepage.html"><?php bloginfo('name'); ?></a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="menuItem pull-right">
						<div class="collapse navbar-collapse pull-left" id="navbar-collapse">
							<ul class="nav navbar-nav">
								<li class="active"><a href="#header">Home <span class="sr-only">(current)</span></a></li>
								<li><a href="#story">About</a></li>
								<li><a href="#services">Service</a></li>
								<li><a href="#ourTeam">Our Team</a></li>
								<li><a href="#portfolio">Work</a></li>
								<li><a href="#latestBlog">Blog</a></li>
							</ul>
						</div><!-- /.navbar-collapse -->
						<ul class="iconsGroup nav navbar-nav">
							<li><a href="#"><i class="mdi mdi-cart-outline icon"></i></a></li>
							<li><a href="#" class="search"><i class="mdi mdi-magnify icon"></i></a></li>
						</ul>
					</div>
				</div><!-- /.container-fluid -->
			</nav>

			<section id="slider" class="carousel slide container" data-ride="carousel">

				<!-- Wrapper for slides -->
				<?php
				$carousel = get_field('carousel');
				$carouselcount = 0;
				if( $carousel ) {
				echo '<div class="carousel-inner" role="listbox">';
				foreach( $carousel as $row ) {
					if($carouselcount == 0) echo '<div class="item active">';
					else echo '<div class="item">';
					$carouselcount++;
						echo '<h2 class="sectionHeading">';
							echo '<span class="subHeading">'. $row['subheading'] .'</span>'
							. $row['subheading2'] .
						'</h2>';
						echo '<a href="#" class="btn">'. $row['link_text'] .'</a>';
					echo '</div>';
				}
				echo '</div>';
				}
				?>

				<!-- Indicators -->
				<?php
				$carousel = get_field('carousel');
				if( $carousel ) {
				echo '<ol class="carousel-indicators clearfix">';
				$carouselcount = 0;
				foreach( $carousel as $row ) {
					echo '<li data-target="#slider" data-slide-to="'. $carouselcount .'" class="active">';
					$carouselcount++;
						echo '<div class="inner">';
							echo '<span class="number">'. $carouselcount .'</span> ' . $row['inner'];	
						echo '</div>';
					echo '</li>';
				}
				echo '</ol>';
				}
				?>
			</section>
		</div>
	</header><!--/#header-->