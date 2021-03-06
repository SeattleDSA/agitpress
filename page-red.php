<?php
/**
	Template Name: AgitProp (Red)
 *	Add a red wash with white text
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Agitpress
 */

get_header();
?>

	<div id="primary" class="grid grid-container grid-wide">
		<main id="main" class="large-12">

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
