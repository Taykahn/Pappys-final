<?php
/**
 * Front Page
 */

get_header();

	## Try to load most of your images with custom fields using ACF 

	## https://www.advancedcustomfields.com/resources/image/

	$pappys_img = CWS_Theme::cws_get_img( 'pappys-logo4.png', 'Pappy\'s Grill &amp; Pub' );

	$about_img = CWS_Theme::cws_get_img( 'owners.png', 'Owners' );

	$bar_img = CWS_Theme::cws_get_img( 'from-the-bar.png', 'Bar' );

	$parallax_img = CWS_Theme::cws_get_img( 'pappys-menu.png', 'Menu' );

	$banner_img = CWS_Theme::cws_get_img( 'pappys-banner.png', 'Menu' );

	$server_img = CWS_Theme::cws_get_img( 'server.png', 'Sever' );

	$beer_img = CWS_Theme::cws_get_img( 'beer.png', 'Beer' );

	$whining_img = CWS_Theme::cws_get_img( 'whining.png', 'Whining Sign' );

	$bar_sign_img = CWS_Theme::cws_get_img( 'bar-sign.png', 'Bar Sign' );

	$store_front_img = CWS_Theme::cws_get_img( 'store-front.png', 'Store Front' );

	$args = array( 

		'post_type'      => 'featured_items', 

		'orderby'        => 'rand', 

		'posts_per_page' =>'1' 

	);

	## Way too many WP_Query objects. 

	## Again, leverage using ACF custom fields to store values. 

	## You don't have to build a page to get values, just create a custom field

	## https://www.advancedcustomfields.com/resources/code-examples/

	$featured_items = new WP_Query( $args );

	$args = array(

		'post_type'     =>'specials', 

		'orderby'       =>'rand', 

		'posts_per_page'=>'1'

	);

	$specials=new WP_Query( $args );

	$contact = new WP_Query( 'page_id=56' );

	$map = new WP_Query( 'page_id=69' );

	$slider = new WP_Query( 'page_id=150' );

	$giftcard = new WP_Query( 'page_id=194' );

	$rewards_program = new WP_Query( 'page_id=196' );

	$call_reserve = new WP_Query( 'page_id=198' );

	$book_a_table = new WP_Query( 'page_id=223' );

	$args = new WP_Query( 'page_id=9' );

	$bar_text = new WP_Query( 'page_id=36' );

?>


<section class="two-column row no-pad">

	<div class="col-sm-12">

		<div class="row">

			<div class="parallax" style="background-image: url( '<?php echo esc_html( $parallax_img ) ?>' )">

<br>

				<h1>Featured Items &amp Weekly Specials</h1>

				<!-- Featured Items -->

				<div class="featured-items">

					<div class="col-sm-6">

						<?php if ( $featured_items->have_posts() ) : ?>

							<?php while ( $featured_items->have_posts() ) : $featured_items->the_post(); ?>

								<h3><?php the_title(); ?></h3>

								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>

								<p><?php the_excerpt(); ?></p>

							<?php endwhile; ?>

						<?php endif ?>

					<?php wp_reset_postdata() ?>

					<?php get_post(); ?>

					</div><!-- end col-sm-6 -->

				</div><!-- end featured items -->

				<div class="specials">

					<div class="col-sm-6">

						<?php if ( $specials->have_posts() ) : ?>

							<?php while ( $specials->have_posts() ) : $specials->the_post(); ?>

								<h3><?php the_title(); ?></h3>

								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>

								<p><?php the_excerpt(); ?></p>

							<?php endwhile; ?>

						<?php endif ?>

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

				<div class="col-sm-5">

					<div class="about-img" style="background: url( '<?php echo esc_html( $about_img ) ?>' ) 50%/cover no-repeat; height: 650px;">

						<?php while ($args-> have_posts()) : $args-> the_post();  ?>

							<?php the_content(); ?></p>

						<?php endwhile;?>

						<?php wp_reset_postdata() ?>

						<?php get_post(); ?>

				</div><!-- col-sm-5 -->

			</div><!-- end primary -->

			<!-- Secondary -->

			<div class="secondary">

				<div class="col-sm-7">

					<div class="bar-img" style="background: url( '<?php echo esc_html( $bar_img ) ?>' ) 50%/cover no-repeat;">

						<?php while ($bar_text-> have_posts()) : $bar_text-> the_post();  ?>

							<?php the_content(); ?>

						<?php endwhile;?>

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

			<div class="parallax" style="background-image: url( '<?php echo esc_html( $banner_img ) ?>' )">

				<div class="row">

					<!-- Primary 3 -->

					<div class="primary-3">

						<div class="col-sm-4">

							<?php while ($giftcard-> have_posts()) : $giftcard-> the_post();  ?>

								<h1><?php the_title(); ?></h1>

								<p><?php the_content(); ?></p>

							<?php endwhile; ?>

						</div><!-- end col-sm-4 --> 

					</div><!-- end primary 3 -->

					<!-- Secondary 2 -->

					<div class="secondary-3">

						<div class="col-sm-4">

							<?php while ($rewards_program-> have_posts()) : $rewards_program-> the_post();  ?>

								<h1><?php the_title(); ?></h1>

								<p><?php the_content(); ?></p>

							<?php endwhile;?>

						</div><!-- end col-sm-4 --> 

					</div><!-- end secondary 3 -->

					<!-- Tertiary 3 -->

					<div class="tertiary-3">

						<div class="col-sm-4">

							<?php while ($call_reserve-> have_posts()) : $call_reserve-> the_post();  ?>

								<h1><?php the_title(); ?></h1>

								<?php the_content(); ?>

							<?php endwhile;?>

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

					<?php while ($map-> have_posts()) : $map-> the_post();  ?>

						<?php the_content(); ?>

					<?php endwhile; ?>

				</div><!-- end col-sm-7 --> 

			</div><!-- end primary 2 -->

			<!-- Secondary 2 -->

			<div class="secondary-2">

				<div class="col-sm-5">

					<div class="location" style="background: url( '<?php echo esc_html( $store_front_img ) ?>' ) 50%/cover no-repeat; height: 400px;">

						<?php while ($contact-> have_posts()) : $contact-> the_post();  ?>

							<?php the_content(); ?>

						<?php endwhile;?>

				</div><!-- end col-sm-5 --> 

			</div><!-- end secondary 2 -->

		</div><!-- end row -->

	</div><!-- end col-md-12 -->

</section><!-- end two-column row no-max pad -->

<section class="one-column row no-pad">

	<div class="col-sm-12">

		<div class="row">

			<div class="slider">

				<?php $args = new WP_Query( 'page_id=150' ); ?>

					<?php while ($args-> have_posts()) : $args-> the_post();  ?>

						<?php the_content(); ?>

					<?php endwhile;?>

			</div><!-- end slider -->

		</div><!-- end row -->

	</div><!-- end col-sm-12 -->

</section><!-- one-column row no-pad -->

<?php get_footer() ?>
