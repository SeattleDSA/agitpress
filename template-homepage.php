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
					
						<?php if ( is_active_sidebar( 'homepage_featured_text' ) ) : ?>
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								<div class="small-12 medium-12 large-9">
									<?php get_template_part( 'template-parts/content', 'homepageFeatured' ); ?> 
								</div>
							<?php endwhile; endif; ?>	
						<?php else: ?>
							<div class="small-12 medium-12 large-9 container-alert">
								<h1>Missing: Widget: Homepage Featured Text</h1>
							</div>
						<?php endif; ?>
					
			<?php else: ?>
				<div class="small-12 medium-12 large-12">
					<?php if ( is_active_sidebar( 'homepage_featured_text' ) ) : ?>
						<?php dynamic_sidebar( 'homepage_featured_text' ); ?>
					<?php else: ?>
						
					<?php endif; ?>
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

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', 'homepageContinued' ); ?> 
		<?php endwhile; endif; ?>	

<?php get_footer(); ?>
