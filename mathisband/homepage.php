<?php /* Template Name: homepage */ ?>
<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package mathisband
 */

get_header(); ?>

	<div id="hp-primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php 
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'homepage' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.

			wd_form_maker(10);
			?>

			<div id="form-info-wrap">

				<h2>Get Updates</h2>
				
				<p>Sign up here for news and updates from Mathis. You'll be the first to know about events, new releases, and news from the band.</p>
				
			</div>

		</main><!-- #main -->
	</div><!-- #hp-primary -->

<?php
get_sidebar();
get_footer();
