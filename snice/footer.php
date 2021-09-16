<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Snice
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<!-- <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'snice' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'snice' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'snice' ), 'snice', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
				-->
				<ul role="list" class="footer-list">
					<li class="list-item-footer">
						<div class="footer-link">© 2020 Brain Traffic</div>
					</li>
					<li class="list-item-footer"><a href="http://confabevents.com" class="footer-link">Confab Conference</a></li>
					<li class="list-item-footer"><a href="http://buttonconf.com" class="footer-link">Button Conference</a></li>
					<li class="list-item-footer"><a href="https://www.contentstrategy.com/podcast" class="footer-link">Content Strategy Podcast</a></li>
					<li class="list-item-footer"><a href="/contact" class="footer-link">Contact Us</a></li>
					<li class="list-item-footer"><a href="/mailing-list" class="footer-link">Newsletter</a></li>
					<li class="list-item-footer"><a href="http://twitter.com/braintraffic" class="footer-link">Twitter</a></li>
					<li class="list-item-footer last"><a href="https://www.linkedin.com/company/brain-traffic" class="footer-link">LinkedIn</a></li></ul>
				

		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
