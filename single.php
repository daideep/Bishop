<?php
/**
 * The Template for displaying all single posts.
 *
 * @package bishopfox
 */

get_header(); ?>

	<div>
		

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php /*?><?php bishopfox_post_nav(); ?><?php */?>

			<?php /*?><?php
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
			?><?php */?>

		<?php endwhile; // end of the loop. ?>

	</div><!-- #primary -->

<?php /*?><?php get_sidebar(); ?><?php */?>
<?php get_footer(); ?>