<?php 
/**
* Footer
*/ 
?>

</main>

<footer>

	<section class="three-column row no-pad">

		<div class="col-sm-12">

			<div class="row">

				<div class="col-sm-4">

					<div class="cards">

						<img src="<?php the_field('hero', 597 ); ?>" alt="creditcards">

						<p>Sorry, no checks</p>

					</div><!-- end cards -->

				</div><!-- end col-sm-4 -->

				<div class="copyright">

					<div class="pappys-logo">

						<div class="col-sm-4">

							<img src="<?php the_field('hero', 600 ); ?>" alt="Pappys Logo">

							<p>&copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?></p>

						</div><!-- end col-sm-4 -->

					</div><!-- end pappys-logo -->

				</div><!-- end copyright -->

				<div class="right">

					<div class="col-sm-4">

						<p></p>

					</div><!-- end col-sm-4 -->

				</div><!-- end right -->

			</div><!-- end row -->

		</div><!-- end col-sm-12 -->

	</section><!-- end two-column -->

</footer>

	<?php wp_footer(); ?>

	</body>

</html>