<?php
/**
 * Template Name: Pappys Menu
 */

include( 'partials/header.php' );

?>

	<?php 

		$args = array( 'post_type' => 'pappys_menu' );

		$query = new WP_Query( $args );

		$pappys_img = CWS_Theme::cws_get_img( 'pappys-logo4.png', 'Pappy\'s Grill &amp; Pub' );

	?>

	<div class="container">

		<div class="row">

			<section class="three-column row no-max pad">

				<div class="col-md-12">

					<div class="row">

						<div class="lunch-dinner">

							<?php if( $query->have_posts() ) : ?>

								<?php while( $query->have_posts() ) : $query->the_post(); ?>

									<h1><?php the_title(); ?></h1>

									<?php the_post_thumbnail(); ?>

								<?php endwhile; ?>

							<?php endif; ?>

						</div><!-- end lunch-dinner -->

					</div><!-- end row -->

				</div><!-- end col-md-12 -->

			</section><!-- end three-column row no-max pad -->

		</div><!-- end row -->

	</div><!-- end container --> 

<?php get_footer(); ?>