<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Agitpress
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('large-12 small-12'); ?>>
	<header class="grid">
		
		
		<div class="large-9 medium-9 small-8 border-top">
			
			<?php
			if ( is_singular() ) :
				the_title( '<h1>', '</h1>' );
			else :
				the_title( '<h2><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;

			if ( 'post' === get_post_type() ) :
				?>
				<div class="entry-meta large-12 small-12">
					<?php agitpress_wp_posted_by(); ?><span class="post-divider"> 🌹 </span><?php agitpress_wp_post_readtime();?>
				</div><!-- .entry-meta -->
				<div class="content-excerpt"><?php the_excerpt(); ?></div>
			<?php endif; ?>

			<div class="grid">
				<div class="large-4 small-12 border-top"><?php agitpress_wp_posted_on(); ?></div><div class="large-8 small-12 border-top"><?php agitpress_wp_entry_tags(); ?></div>
			</div>
		</div>
		<div class="large-3 medium-3 small-4">
			<figure>
				<?php the_post_thumbnail('large'); ?>
				<figurecaption><?php the_post_thumbnail_caption(); ?></figurecaption>
			</figure>
		</div>
	</header>

	<div>
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'agitpress' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'agitpress' ),
			'after'  => '</div>',
		) );
		?>
	</div>

	<footer class="entry-footer">
		<?php if ( is_active_sidebar( 'blog_end_call_to_action' ) ) : ?>
				<aside class="blog-end-call-to-action widget-area container-alert" role="complementary">
						<?php dynamic_sidebar( 'blog_end_call_to_action' ); ?>
				</aside>
		<?php endif; ?>
	</footer>
</article><!-- #post-<?php the_ID(); ?> -->
