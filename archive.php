<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Agitpress
 */

get_header();
?>

	<div id="primary" class="grid grid-container">
		<?php if ( is_active_sidebar( 'blog_end_call_to_action' ) ) : ?>
			<aside class="blog-end-call-to-action widget-area large-12 small-12 container-alert" role="complementary">
					<?php dynamic_sidebar( 'blog_end_call_to_action' ); ?>
			</aside>
		<?php endif; ?>

		<main id="main" class="small-12 large-8">

		<?php if ( have_posts() ) : ?>

			<header>
				<?php
				the_archive_title( '<h1>', '</h1>' );
				the_archive_description( '<div>', '</div>' );
				?>
			</header>

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 * get_post_type() 
				 */
				get_template_part( 'template-parts/content', 'archive');

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
		<footer class="entry-footer small-12 large-4">
			
		</footer>
	</div><!-- #primary -->

<?php
get_footer();
