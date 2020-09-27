<?php
/*
Template Name: Hompage 2017
*/
?>

<?php get_header(); ?>

		<article class="grid grid-container grid-wide">
		    

			<?php if ( is_active_sidebar( 'homepage_call_to_action' ) ) : ?>
					<aside class="small-12 medium-12 large-3 homepage-call-to-action container-alert widget-area" role="complementary">
						<?php dynamic_sidebar( 'homepage_call_to_action' ); ?>
					</aside>
					<div class="small-12 medium-12 large-9">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<?php get_template_part( 'template-parts/content', 'homepage' ); ?> 
						<?php endwhile; endif; ?>	
					</div>
			<?php else: ?>
				<div class="small-12 large-12">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php get_template_part( 'template-parts/content', 'homepage' ); ?> 
					<?php endwhile; endif; ?>	
				</div>
			<?php endif; ?>


		</article><!-- end article -->
	
		<aside class="grid grid-container grid-wide">
			<div id="dsa-events" class="small-12 medium-6 large-6 events-list">
				<?php get_template_part( 'template-parts/content', 'events' ); ?> <!-- see /template-parts/content-events.php -->
			</div>

			<div id="dsa-posts" class="small-12 medium-6 large-6 posts-list">
				<?php get_template_part( 'template-parts/content', 'dispatches' ); ?> <!-- see /template-parts/content-dispatches.php -->
			</div>
		</aside>

<?php get_footer(); ?>
