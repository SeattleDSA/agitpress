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
				<?php dynamic_sidebar( 'homepage_featured_text' ); ?>
			</div>

			<?php if ( get_edit_post_link() ) : ?>
		</div>
	</div>

	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
