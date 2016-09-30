<?php
/**
 * The template for displaying the homepage.
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

				<div class="entry-content">
					<?php
						the_content();
					?>
				</div><!-- .entry-content -->

			<?php endwhile; // End of the loop.?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();