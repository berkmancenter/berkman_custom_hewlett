<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>

            <p>
                <strong>Hewlett Grantees Meeting 2012</strong>
                &nbsp;&middot;&nbsp;
                April 10&#8211;13, 2012
                &nbsp;&middot;&nbsp;
                Cambridge, MA
                <br /><br />
                <a href="http://www.hewlett.org/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/hewlett-big.png" width="192" height="75" alt="Hewlett Foundation" style="border: none;"/></a>
                &nbsp;&nbsp;&nbsp;
                <a href="http://www.cyber.law.harvard.edy/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/berkman-big.png" width="364" height="75" alt="Berkman Center" style="border: none;"/></a>
            </p>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
