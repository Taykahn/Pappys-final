<?php 
/**
* Header
*/
?>

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

	<div class="logo">

			<a href="http://localhost:3000/"><img src="<?php echo the_field( 'hero', 590 ) ?> "></a>

	</div>