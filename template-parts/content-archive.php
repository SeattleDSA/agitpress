<?php
/**
 * Template part for displaying post archives content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Agitpress
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('grid'); ?>>
	<div class="mobile-6 desktop-3 archive-post-thumbnail">
		<a href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title_attribute(); ?>"><?php agitpress_wp_post_thumbnail(); ?></a>
	</div>
	<header class="desktop-9 mobile-12">
		<?php
		if ( is_singular() ) :
			the_title( '<h1>', '</h1>' );
		else :
			the_title( '<h2><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				agitpress_wp_posted_on();
				agitpress_wp_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header>

	
	
</article><!-- #post-<?php the_ID(); ?> -->
