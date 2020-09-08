<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Baylys
 * @since Baylys 1.0
 */

get_header(); ?>

	<div id="main-wrap">
	<div id="content">

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php comments_template( '', true ); ?>

		<?php endwhile; // end of the loop. ?>

		<!-- Spelzenhof Mod: Nav removed -->

		</div><!-- end #content -->

		<?php get_sidebar(); ?>
	</div><!-- end #main-wrap -->
<?php get_footer(); ?>