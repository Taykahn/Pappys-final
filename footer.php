<?php 
/**
* Footer
*/ 

$creditcard_img = CWS_Theme::cws_get_img( 'creditcards.png');

$pappysLogo_img = CWS_Theme::cws_get_img( 'pappys-face.png');

?>

</main>

<footer>

	<section class="three-column row no-pad">

		<div class="col-sm-12">

			<div class="row">

				<div class="col-sm-4">

					<div class="cards">

						<img src="<?php echo esc_url( $creditcard_img ) ?>" alt="creditcards">

						<p>Sorry, no checks</p>

					</div><!-- end cards -->

				</div><!-- end col-sm-4 -->

				<div class="copyright">

					<div class="pappys-logo">

						<div class="col-sm-4">

							<img src="<?php echo esc_url( $pappysLogo_img ) ?>" alt="Pappys Logo">

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

	<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>

	<script

	src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

	<script type="text/javascript" 

	src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

	<script type="text/javascript"

	src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

	<?php wp_footer(); ?>

	</body>

</html>