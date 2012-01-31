<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

<div class="mid-slideshow">
    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/slideshow/slideshow-1.jpg" width="725" height="200" />
    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/slideshow/slideshow-2.jpg" width="725" height="200" />
    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/slideshow/slideshow-3.jpg" width="725" height="200" />
</div>

<div id="home-boxes">
    <div>
        <h2>Updates</h2>
        <p>List of posts goes here.</p>
    </div>
    <div class="home-box-right">
        <h2>Agenda</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin blandit dictum eleifend. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sed tempus odio. Phasellus lobortis suscipit mattis. Nulla facilisi. In nisi turpis, tristique ut accumsan at, sagittis a orci. <a href="#">More...</a></p>
    </div>
    <div>
        <h2>Participate</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin blandit dictum eleifend. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sed tempus odio. Phasellus lobortis suscipit mattis. Nulla facilisi. In nisi turpis, tristique ut accumsan at, sagittis a orci. <a href="#">More...</a></p>
    </div>
    <div class="home-box-right">
        <h2>Past Meetings</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin blandit dictum eleifend. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sed tempus odio. Phasellus lobortis suscipit mattis. Nulla facilisi. In nisi turpis, tristique ut accumsan at, sagittis a orci. <a href="#">More...</a></p>
    </div>
</div><!--/#home-boxes-->

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
