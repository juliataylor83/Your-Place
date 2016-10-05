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

			<?php while ( have_posts() ) : the_post();

				$column_1_title = get_field('column_1_title');
				$column_1_text = get_field('column_1_text');
				$column_2_title = get_field('column_2_title');
				$column_2_text = get_field('column_2_text');
				$column_3_title = get_field('column_3_title');
				$column_3_text = get_field('column_3_text'); ?>

				<div class="entry-content">
					<div class="column1">
						<h2><?php echo $column_1_title; ?></h2>
						<i class="fa fa-thumbs-up fa-5x" aria-hidden="true"></i>
						<p><?php echo $column_1_text; ?></p>
						<a class="button" href="<?php echo home_url(); ?>/about">Meet the Team</a>
					</div>
					<div class="column2">
						<h2><?php echo $column_2_title; ?></h2>
						<i class="fa fa-users fa-5x" aria-hidden="true"></i>
						<p><?php echo $column_2_text; ?></p>
						<a class="button" href="<?php echo home_url(); ?>/activities">Get Involved</a>
					</div>
					<div class="column3">
						<h2><?php echo $column_3_title; ?></h2>
						<i class="fa fa-calendar fa-5x" aria-hidden="true"></i>
						<p><?php echo $column_3_text; ?></p>
						<a class="button" href="<?php echo home_url(); ?>/weekly">Find Out More</a>
					</div>
					
				</div><!-- .entry-content -->

			<?php endwhile; // End of the loop.?>
			<div class="header-logo">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo_big.png" alt="Logo Big" />
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();