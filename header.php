<!DOCTYPE html>

<html lang="en">

	<head>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/images/favicon.ico">

	<title>

		<?php wp_title( '|', true, 'right' ); ?>

		<?php bloginfo('name'); ?>

		</title>

<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Alegreya|Architects+Daughter|Shadows+Into+Light|Lato" rel="stylesheet">

	<?php wp_head() ?>

	<?php 

		global $post;

		global $cws_img_path;

		$post_slug = isset( $post->post_name ) ? $post->post_name : null;

		$page_slug = 'page-'.$post_slug;

		$post_id   = 'post-id-'.$post->ID;

		$fouc      = 'fouc';

		$classes   = array( $page_slug, $post_id );

	?>

	</head>

		<body <?php body_class( $classes ) ?>>

			<nav class="navbar navbar-inverse navbar-fixed-top">

				<div class="container">

					<div class="navbar-header">

						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

							<span class="sr-only">Toggle navigation</span>

							<span class="icon-bar"></span>

							<span class="icon-bar"></span>

							<span class="icon-bar"></span>

						</button><!-- end button -->

					</div><!-- end navbar-header -->

					<div id="navbar" class="navbar-collapse collapse">

						<?php 

							$args = array(

							'menu'          => 'header-menu',

							'menu_class'    => 'nav navbar-nav',

							'container'     => 'false'

							);

							wp_nav_menu( $args );

						?>

					</div><!--/.navbar-collapse -->

				</div><!-- end container -->

			</nav><!-- end navbar -->

	<?php 

		$banner_img = CWS_Theme::cws_get_img( 'background.png', 'Pappy\'s Grill &amp; Pub' ); 

		$pappys_img = CWS_Theme::cws_get_img( 'pappys-logo4.png', 'Pappy\'s Grill &amp; Pub' );

		$facebook_img = CWS_Theme::cws_get_img( 'facebook-wrap1.png'); 

		$map_marker_img = CWS_Theme::cws_get_img( 'map-marker.png'); 

		$phone_img = CWS_Theme::cws_get_img( 'phone-icon1.png');

		$hours = new WP_Query( 'page_id=200' );

	?>

	<header>

		<div class="container-fluid no-pad">

			<div class="banner no-pad" style="background: url( '<?php echo esc_html( $banner_img ) ?>' ) 50%/cover no-repeat;">

				<div class="wrapper">

					<div class="banner-img">

						<a href="#"><img src="<?php echo esc_url( $pappys_img ) ?> "></a>

					</div><!--end banner-img-->

					<div class="hours"> 

						<?php while ($hours-> have_posts()) : $hours-> the_post();  ?>

							<?php the_content(); ?>

						<?php endwhile; ?>

					</div> <!-- end hours -->

					<div class="address-phone">

						<ul class="social-icon-1">

							<li><a href="#map_section"><img src="<?php echo esc_url( $map_marker_img ) ?>" alt="facebook logo" class="social-icon"></a></li>

							<li><a href="https://www.facebook.com/Pappys-Grill-Pub-245352765500666/"><img src="<?php echo esc_url( $facebook_img ) ?>" alt="facebook logo" class="social-icon"></a></li>

							<li><a href="tel:816-390-9550"><img src="<?php echo esc_url( $phone_img ) ?>" alt="phone logo" class="social-icon"></a></li>

						</ul><!-- end social-icon -->

					</div><!-- end address-phone -->

				</div><!--end wrapper-->

			</div><!--.banner-->

		</div><!--end container-->

	</header><!-- end header -->

<main id="main" role="main">
