
<?php
/*
Part:	Dispatches Feed
Use:	Grid-container with two most recent posts
*/
?>
	<div class="grid grid-container">
		<div class="desktop-12 mobile-12">
				<a href="<?php echo site_url(); ?>/?post_type=post" class="button-icon icon-typewriter" aria-label="Read all blog posts"></a>
				<h2 class="dsa-section-title cell">Dispatches</h2>
		</div>
	
		<div class="desktop-12 mobile-12 archives-latest-section grid"> 
			<?php
				$how_many_last_posts = intval(get_post_meta($post->ID, 'archived-posts-no', true));

				/* Here, we're making sure that the number fetched is reasonable. In case it's higher than 200 or lower than 2, we're just resetting it to the default value of 15. */
				if($how_many_last_posts > 200 || $how_many_last_posts < 2) $how_many_last_posts = 4;

				$my_query = new WP_Query('post_type=post&nopaging=1');
				if($my_query->have_posts()) {
				  $counter = 1;
				  while($my_query->have_posts() && $counter <= $how_many_last_posts) {
				    $my_query->the_post(); 
				    ?>
				    <div class="slat mobile-12 desktop-6">
						<div class="grid">
							<?php if ( has_post_thumbnail() ) { ?>
							    <div class="mobile-6 desktop-4">
									<a href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title_attribute(); ?>"><?php agitpress_wp_post_thumbnail(); ?></a>
								</div>
								<div class="mobile-6 desktop-8">
									<strong>
										<a href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
									</strong>
									<p><?php the_time('F j, Y') ?></p>
								</div>
							<?php 
							}
							else {
							?>
								<div class="mobile-12 desktop-12">
									<strong>
										<a href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
									</strong>
									<p><?php the_time('F j, Y') ?></p>
								</div>
							<?php 
							}
							?>
						</div>
					</div>
				    <?php
				    $counter++;
				  }
				  wp_reset_postdata();
				}
				?>
		</div>
		
	<div class="mobile-12 desktop-12">
		<!-- Print a link to all posts -->
		<a href="<?php echo site_url(); ?>/?post_type=post" class="button" title="Dispatches">See All</a>
	</div>
	</div>