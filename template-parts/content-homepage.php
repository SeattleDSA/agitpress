<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Agitpress
 */

?>

<?php $featured_img_url = get_the_post_thumbnail_url(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class('homepage-header'); ?> style="background-image: url('<?php echo $featured_img_url; ?>');">
	<div class="grid">
		<div class="large-4 medium-4 small-12">
		</div>
		<div class="card large-8 medium-8 small-12">
			<header class="screen-reader-text">
				<?php the_title( '<h1>', '</h1>' ); ?>
			</header><!-- .entry-header -->

			<div>
				<?php
					the_content();

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'agitpress' ),
						'after'  => '</div>',
					) );
				?>
			</div>

			<?php if ( get_edit_post_link() ) : ?>
		</div>
	</div>
	<footer>
		<?php
		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'agitpress' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			),
			'<span class="edit-link">',
			'</span>'
		);
		?>
	</footer>
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
