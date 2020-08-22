<?php
/**
 * The template for displaying content of the portfolio category
 *
 * @package Baylys
 * @since Baylys 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('portfolio-element'); ?>>

	<div class="entry-content clearfix">
    
    <h2 class="entry-title"><?php the_title(); ?></h2>
    
		<?php if ( has_post_thumbnail() ): ?>
			<?php the_post_thumbnail('thumbnail'); ?>
		<?php endif; ?>

		
	
				<?php the_content(); ?>
	</div><!-- end .entry-content -->

</article><!-- end post -<?php the_ID(); ?> -->