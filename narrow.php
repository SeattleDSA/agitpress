<?php
/**
* Template Name: Narrow
* @Part of the agitpress theme
* Widescreen container for complex editorial use and better support of Gutenberg columns and blocks.
*
*
* @package Agitpress
*/

get_header();
?>

	<div id="primary" class="grid grid-container grid-narrow">
		<main id="main" class="large-12 small-12">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
