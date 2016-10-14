<?php
/**
 * The template for displaying the contact page.
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Your_Place
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->

				<div class="contact-text">
					<?php the_content(); ?>
				</div>

				<div class="entry-content">
					
					<section class="contact-details">
						<h2>Address</h2>
						<p>236 Wellington Street</p>
						<p>Great Grimsby</p>
						<p>North East Lincolnshire</p>
						<p>DN32 7JP</p>
						<h2>Telephone</h2>
						<p>01472 322 557</p>
						<h2>Opening Hours</h2>
						<p>Monday - Friday: 10.00am to 4.00pm</p>
					</section>

				</div><!-- .entry-content -->

			<?php endwhile; // End of the loop.?>
			<div class="header-logo">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo_big.png" alt="Logo Big" />
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();