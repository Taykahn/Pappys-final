<?php
/**
 * Template Name: Front Page
 */

get_header() ?>


<?php 

	$args = array( 

		'post_type'      => 'featured_items', 
		'orderby'        => 'rand', 
		'posts_per_page' =>'1' 

	);

	$featured=new WP_Query( $args );

	$args = array(

		'post_type'     =>'specials', 
		'orderby'       =>'rand', 
		'posts_per_page'=>'1'

	);

	$specials=new WP_Query( $args );

?>


<section class="two-column row no-pad">

	<div class="col-sm-12">

		<div class="row">

			<div class="parallax" style="background-image: url( '<?php echo the_field( 'hero', 504 ) ?>' )">

				<h1>Featured Items &amp Weekly Specials</h1>

				<!-- Featured Items -->

				<div class="featured-items">

					<div class="col-sm-6">

						<?php while ( $featured->have_posts() ) : $featured->the_post(); ?>

							<h3><?php the_field('title'); ?></h3>

							<a href="<?php the_permalink(); ?>"><img src="<?php the_field('image'); ?>" /></a>

							<p><?php the_field('content'); ?></p>

						<?php endwhile; // end of the loop. ?>

					<?php wp_reset_postdata() ?>

					<?php get_post(); ?>

					</div><!-- end col-sm-6 -->

				</div><!-- end featured items -->

				<div class="specials">

					<div class="col-sm-6">

						<?php while ( $specials->have_posts() ) : $specials->the_post(); ?>

							<h3><?php the_field('title'); ?></h3>

							<a href="<?php the_permalink(); ?>"><img src="<?php the_field('image'); ?>" /></a>

							<p><?php the_field('text'); ?></p>

						<?php endwhile; // end of the loop. ?>

						<?php wp_reset_postdata() ?>

						<?php get_post(); ?>

					</div><!-- end col-sm-6 -->

				</div><!-- end speacials -->

			</div><!-- end parallax -->

		</div><!-- end row -->

	</div><!-- end col-md-12 -->

</section><!-- end two-column row no-max pad -->

<section class="two-column row no-pad">

	<div class="col-sm-12">

		<div class="row">

			<!-- Primary -->

			<div class="primary">

				<a id="about_section"><div class="col-sm-5"></a>

					<div class="about-img" style="background: url( '<?php echo the_field( 'hero', 513 ) ?>' ) 50%/cover no-repeat; height: 650px;">

						<p><?php the_field('content', 546 ); ?></p><!-- About Text -->

				</div><!-- col-sm-5 -->

			</div><!-- end primary -->

			<!-- Secondary -->

			<div class="secondary">

				<div class="col-sm-7">

					<div class="bar-img" style="background: url( '<?php echo the_field( 'hero', 516 ) ?>' ) 50%/cover no-repeat;">

							<h1><?php the_field('title', 558 ); ?></h1><!-- Bar Title -->

							<p><?php the_field('content', 558 ); ?></p><!-- Bar Text -->

						<?php wp_reset_postdata() ?>

						<?php get_post(); ?>

				</div><!-- col-sm-7 -->

			</div><!-- end secondary -->

		</div><!-- end row -->

	</div><!-- end col-sm-12 -->

</section><!-- two-column row no-pad -->

<section class="two-column row no-pad">

	<div class="col-sm-12">

		<div class="row">

			<div class="parallax" style="background-image: url( '<?php echo the_field( 'hero', 518 ) ?>' )">

				<div class="row">

					<!-- Primary 3 -->

					<div class="primary-3"><!-- Giftcard -->

						<div class="col-sm-4">

							<h1><?php the_field('title', 194 ); ?></h1>

							<p><?php the_field('content', 194 ); ?></p>

							<?php wp_reset_postdata() ?>

							<?php get_post(); ?>

						</div><!-- end col-sm-4 --> 

					</div><!-- end primary 3 -->

					<!-- Secondary 2 -->

					<div class="secondary-3"><!-- Rewards Program -->

						<div class="col-sm-4">

							<h1><?php the_field('title', 196 ); ?></h1>

							<p><?php the_field('content', 196 ); ?></p>

							<?php wp_reset_postdata() ?>

							<?php get_post(); ?>

						</div><!-- end col-sm-4 --> 

					</div><!-- end secondary 3 -->

					<!-- Tertiary 3 -->

					<div class="tertiary-3"><!-- Reservation -->

						<div class="col-sm-4">

							<h1><?php the_field('title', 198 ); ?></h1>

							<p><?php the_field('content', 198 ); ?></p>

							<?php wp_reset_postdata() ?>

							<?php get_post(); ?>

						</div><!-- end col-sm-4 --> 

					</div><!-- end tertiary 3 -->

				</div><!-- end row -->

			<div class="button">

				<a href="tel:8163909550"<button type="button" class="btn btn-primary">CALL TO BOOK A TABLE</button></a>

			</div><!-- end button -->

		</div><!-- end row -->

	</div><!-- end col-md-12 -->

</section><!-- end three-column row no-max pad -->

<section class="two-column row no-pad">

	<div class="col-sm-12">

		<a id="map_section"><div class="row"></a>

			<!-- Primary 2 -->

			<div class="primary-2">

				<div class="col-sm-7">

					<?php the_field('content', 69 ); ?><!-- map -->

				</div><!-- end col-sm-7 --> 

			</div><!-- end primary 2 -->

			<!-- Secondary 2 -->

			<div class="secondary-2">

				<div class="col-sm-5">

					<div class="location" style="background: url( '<?php echo the_field( 'hero', 525 ) ?>' ) 50%/cover no-repeat; height: 400px;">

						<?php the_field('content', 56 ); ?><!-- Location -->

				</div><!-- end col-sm-5 --> 

			</div><!-- end secondary 2 -->

		</div><!-- end row -->

	</div><!-- end col-md-12 -->

</section><!-- end two-column row no-max pad -->

<section class="one-column row no-pad">

	<div class="col-sm-12">

		<div class="row">

			<div class="slider">

				<?php the_field('content', 150 ); ?>

			</div><!-- end slider -->

		</div><!-- end row -->

	</div><!-- end col-sm-12 -->

</section><!-- one-column row no-pad -->

<?php get_footer() ?>
