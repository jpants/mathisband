<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mathisband
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<!-- <div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'mathisband' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'mathisband' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'mathisband' ), 'mathisband', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?> -->
		<!-- </div> --><!-- .site-info -->

		<div class="toTopButtonWrap">
			<a href="#page" id="toTopButton">Back to top</a>
			<p id="bandLocation">Mathis, Forsyth, MO, USA</p>
		</div>

		<div id="socMedWrap">
			<a href="https://twitter.com/mathis_band" target="_blank"><div id="socMedTwit" class="socMedBut"></div></a>
			<a href="https://www.instagram.com/mathis_band/" target="_blank"><div id="socMedInsta" class="socMedBut"></div></a>
			<a href="https://www.facebook.com/wearemathis/" target="_blank"><div id="socMedFB" class="socMedBut"></div></a>
			<a href="https://soundcloud.com/kelsie-stuck-elfrink" target="_blank"><div id="socMedSC" class="socMedBut"></div></a>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
