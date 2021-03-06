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
	<header class="large-9 small-12 border-top">
		<?php
		if ( is_singular() ) :
			the_title( '<h1>', '</h1>' );
		else :
			the_title( '<h2><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta txt-meta">
				<?php
				agitpress_wp_posted_on();
				agitpress_wp_posted_by();
				?>
			</div><!-- .entry-meta -->
				<?php the_excerpt(); ?>
		<?php endif; ?>
	</header>
	<div class="small-6 large-3 archive-post-thumbnail">
		<a href="<?php the_permalink() ?>" rel="bookmark" title="Read '<?php the_title_attribute(); ?>'">
			<figure>
				<?php the_post_thumbnail('large'); ?>
				<figurecaption><?php the_post_thumbnail_caption(); ?></figurecaption>
			</figure>
		</a>
	</div>

	
	
</article><!-- #post-<?php the_ID(); ?> -->
