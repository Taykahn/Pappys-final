<?php 
/**
 * Featured Items
 */

include( 'partials/header.php' );

?>

	<?php

	$table_img = CWS_Theme::cws_get_img( 'table.png', 'Pappy\'s Grill &amp; Pub' );

	$args = array( 'post_type' => 'specials' );

	$query = new WP_Query( $args );

	?>

	<div class="container">

		<div class="row">

			<div class="col-md-12">

				<div class="featured-specials-banner  no-pad" style="background: url( '<?php echo esc_html( $table_img ) ?>' ) 50%/cover no-repeat; ">

					<h1>Weekly Specials</h1>

				<?php if ( $query->have_posts() ) : ?>

					<?php while ( $query->have_posts() ) : $query->the_post(); ?>

						<section class="col-md-6">

							<h2><?php the_title(); ?></h2>

							<div class="page-content">

								<p><?php the_content(); ?></p>

							</div><!-- end page-content -->

							<p><?php the_meta(); ?></p>

						</section><!-- end col-md-6 -->

						<section class="col-md-6">

							<div class="page-image">

								<?php the_post_thumbnail(); ?>

							<br>

							<?php wp_reset_postdata() ?>

							<?php get_post(); ?>

							</div><!-- end page-image -->

						</section><!-- end col-md-6 -->

					<?php endwhile; ?>

				<?php endif; ?>

			</div><!-- end col-md-12 -->

		</div><!-- end row -->

	</div><!-- end container -->

<?php get_footer(); ?>