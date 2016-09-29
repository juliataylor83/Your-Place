<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Your_Place
 */

?>

			</div><!-- #content -->
		</div><!-- .main-page -->
	</div><!-- .main-content-area full -->


	<div class="footer-area full">
		<div class="main-page">
			<footer id="colophon" class="site-footer inner" role="contentinfo">
				<div class="site-info">
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'your-place' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'your-place' ), 'WordPress' ); ?></a>
					<span class="sep"> | </span>
					<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'your-place' ), 'your-place', '<a href="http://underscores.me/" rel="designer">Julia Taylor</a>' ); ?>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- .main-page -->
	</div><!-- .footer-area full -->


<?php wp_footer(); ?>

</body>
</html>
