<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Agitpress
 */

get_header();
?>

	<div id="primary" class="grid grid-container grid-wide">
		<main id="main" class="large-8">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
		
		<?php if ( is_active_sidebar( 'blog_sidebar_1' ) ) : ?>
			<aside class="sidebar large-3">
				<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
					<?php dynamic_sidebar( 'blog_sidebar_1' ); ?>
				</div><!-- #primary-sidebar -->
			</aside>
		<?php endif; ?>
		
	</div><!-- #primary -->

<?php
get_footer();
