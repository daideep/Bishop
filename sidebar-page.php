<?php
/**
 * Template Name: Sidebar Template
 * Description: A Page Template that adds a sidebar to pages
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

		<div>
			
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php /*?><?php comments_template( '', true ); ?><?php */?>

				<?php endwhile; // end of the loop. ?>

		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>