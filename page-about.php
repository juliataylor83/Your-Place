<?php
/**
 * The template for displaying the about page.
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Your_Place
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post();

				$image_1 = get_field('image_1');
				$image_2 = get_field('image_2');
				$image_3 = get_field('image_3');
				$image_4 = get_field('image_4');
				$image_5 = get_field('image_5');
				$size = "medium"; ?>

				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->

				<div class="about-text">
					<?php the_content(); ?>
				</div>

				<div class="entry-content">
					<div class="bios">
						<div class="bio1">
							<?php echo wp_get_attachment_image ( $image_1, $size ); ?>
						</div>
						<div class="bio2">
							<?php echo wp_get_attachment_image ( $image_2, $size ); ?>
						</div>
						<div class="bio3">
							<?php echo wp_get_attachment_image ( $image_3, $size ); ?>
						</div>
						<div class="bio4">
							<?php echo wp_get_attachment_image ( $image_4, $size ); ?>
						</div>
						<div class="bio5">
							<?php echo wp_get_attachment_image ( $image_5, $size ); ?>
						</div>
					</div>
				</div><!-- .entry-content -->

			<?php endwhile; // End of the loop.?>
			<div class="header-logo">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo_big.png" alt="Logo Big" />
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
