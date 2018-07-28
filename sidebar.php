<?php
/**
 * The Sidebar containing the main widget area.
 *
 * @package Bishopfox
 */
 

$options = bishopfox_get_theme_options();	
$current_layout = $options['theme_layout'];

if ( 'content' != $current_layout ) :
?>
		<div id="secondary" class="widget-area" role="complementary">
			<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
               
                <!--<aside id="searchform" class="widget">
                  <h3 class="widget-title"><strong><?php /*?><?php get_serch_form(); ?><?php */?></strong></h3>
                </aside>-->

				<aside id="archives" class="widget">
					<h3 class="widget-title"><strong><?php _e( 'Archives', 'bishopfox' ); ?></strong></h3>
					<ul>
						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					</ul>
				</aside>

				<aside id="meta" class="widget">
					<h3 class="widget-title"><strong><?php _e( 'Meta', 'bishopfox' ); ?></strong></h3>
					<ul>
						<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
						<?php wp_meta(); ?>
					</ul>
				</aside>

			<?php endif; // end sidebar widget area ?>
		</div><!-- #secondary .widget-area -->
<?php endif; ?>
