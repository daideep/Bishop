<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package bishopfox
 */

get_header(); ?>

       <div>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php /*?><?php comments_template( '', true ); ?><?php */?>

				<?php endwhile; // end of the loop. ?>

		</div> 


<?php /*?><?php get_sidebar(); ?><?php */?>
<?php get_footer(); ?>