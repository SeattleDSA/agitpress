<?php
/*
Template Name: Hompage 2017
*/
?>

<?php get_header(); ?>

		<article class="grid grid-container grid-wide">
		    <div class="large-12">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php get_template_part( 'template-parts/content', 'homepage' ); ?> 
				<?php endwhile; endif; ?>	
			</div>
		</article><!-- end article -->
	
		<aside class="grid grid-container grid-wide">
			<div id="dsa-events" class="large-8 events-list">
				<?php get_template_part( 'template-parts/content', 'events' ); ?> <!-- see /template-parts/content-events.php -->
			</div>

			<div id="dsa-posts" class="large-4 posts-list">
				<?php get_template_part( 'template-parts/content', 'dispatches' ); ?> <!-- see /template-parts/content-dispatches.php -->
			</div>
		</aside>

<?php get_footer(); ?>
