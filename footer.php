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
                <strong>Hewlett OER Grantees Meeting 2012</strong>
                &nbsp;&middot;&nbsp;
                Grantees Meeting: April 10&#8211;12
                &nbsp;&middot;&nbsp;
                Hack Day: April 13
                &nbsp;&middot;&nbsp;
                Cambridge, MA
                <br /><br />
                <a href="http://www.hewlett.org/">William and Flora Hewlett Foundation</a>
                &nbsp;&nbsp;&middot;&nbsp;&nbsp;
                <a href="http://www.cyber.law.harvard.edy/">Berkman Center for Internet &amp; Society at Harvard University</a>
		<br /><br />
		<a href="http://creativecommons.org/licenses/by/3.0/" id="cc-logo"></a>
		Except where otherwise noted, content on this site is licensed under a <a href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attribution 3.0 License</a>.
            </p>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
