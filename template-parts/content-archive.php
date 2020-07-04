<?php
/**
 * Template part for displaying post archives content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Agitpress
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
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

	<?php agitpress_wp_post_thumbnail(); ?>

	<div>
		<?
		/**
		 * Filter the except length to 20 words.
		 *
		 * @param int $length Excerpt length.
		 * @return int (Maybe) modified excerpt length.
		 */
		function wpdocs_custom_excerpt_length( $length ) {
		    return 20;
		}
		add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
		?>

		<?php
		/**
		*	the_content( sprintf(
		*		wp_kses(
		*			translators: %s: Name of current post. Only visible to screen readers
		*			__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'agitpress' ),
		*			array(
		*				'span' => array(
		*					'class' => array(),
		*				),
		*			)
		*		),
		*		get_the_title()
		*	) );
		*
		*	wp_link_pages( array(
		*		'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'agitpress' ),
		*		'after'  => '</div>',
		*	) );
		*/
		?> 
	</div>
	
</article><!-- #post-<?php the_ID(); ?> -->
