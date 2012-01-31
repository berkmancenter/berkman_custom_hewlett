<?php
/**
 * The Sidebar containing the main widget area.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

$options = twentyeleven_get_theme_options();
$current_layout = $options['theme_layout'];

if ( 'content' != $current_layout ) :
?>
		<div id="secondary" class="widget-area" role="complementary">
			<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

                                <aside id="about" class="widget">
                                    <h3>About</h3>
                                    <p>The Hewlett Grantees Meeting is a lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin blandit dictum eleifend. <a href="">More...</a></p>
                                </aside>


			<?php endif; // end sidebar widget area ?>
		</div><!-- #secondary .widget-area -->
<?php endif; ?>
