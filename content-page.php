<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<!--<h1 class="entry-title"<?php /*?>><?php the_title(); ?><?php */?></h1>-->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'bishopfox' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
    
	<footer class="entry-meta">
		<?php /*?><?php edit_post_link( __( 'Edit', 'bishopfox' ), '<span class="edit-link">', '</span>' ); ?><?php */?>
	</footer><!-- .entry-meta -->
    
</article><!-- #post-<?php the_ID(); ?> -->