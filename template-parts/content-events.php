
<?php
/*
Part:	Beliefs Carousel
Use:	Shares platform of beliefs, similar to Black Panther Program, as well as points to a Platform landing page at (your__url)/platform
*/
?>
	<div class="homepage-events grid">
		<div class="mobile-12 desktop-12">
				<h2>Upcoming Events</h2>
		</div>
		<div class="mobile-12 desktop-12 grid dsa-events-list">		
			<?php // Retrieve the next 2 upcoming events
				if(in_array('the-events-calendar/the-events-calendar.php', apply_filters('active_plugins', get_option('active_plugins')))){ 
					//plugin is activated


					$events = tribe_get_events( array(
					    'posts_per_page' => 4,
					    'start_date' => date( 'Y-m-d H:i:s', strtotime("-6 hours")),
					) );
					
					function empty_content($str) {
						    return trim(str_replace('&nbsp;','',strip_tags($str))) == '';
					}

					// Loop through the events, displaying the title
					// and content for each
					foreach ( $events as $event ) {
						$dsa_event_description = $event->post_content;
						?>

					    <div class="card mobile-12 desktop-6 dsa-events-item">
					    	<h4><?php echo tribe_get_event_link( $event->ID, $full_link=true); ?></h4>
					    	<hr>
					    	<div class="grid">
						    	<div class="mobile-12 desktop-12 dsa-events-description">
						    		<p><?php echo strip_tags(substr($dsa_event_description, 0, 300)) ?>...</p>
									<a href="<?php echo tribe_get_event_link ( $event->ID  ); ?>" class="button hollow">Find out more</a>
								</div>
					    		<div class="mobile-12 desktop-12 dsa-events-details">
						    		<div class="grid grid-middle">
							    		<div class="mobile-12 desktop-2">
					    					<a href="<?php echo tribe_get_event_link ( $event->ID  ); ?>" aria-label="View event details on calendar">
					    						📅
					    					</a>
					    			 	</div>
					    				<div class="mobile-12 desktop-10">
					    					<p><?php echo tribe_events_event_schedule_details( $event->ID ); ?></p>
					    				</div>
					    				<div class="mobile-12 desktop-2">
					    					<a href="<?php echo tribe_get_event_link ( $event->ID  ); ?>" aria-label="Details on event venue">
					    						📍
					    					</a>
					    				</div>
					    				<div class="mobile-12 desktop-10">
						    				<?php if ( tribe_has_venue( $event->ID ) ) {
												echo '<p>';
												echo tribe_get_venue( $event->ID ) . '<br>';
												echo tribe_get_city( $event->ID ) . ' ' . tribe_get_state( $event->ID );
												echo '</p>';
											} 
											else {
												echo '<p>TBD</p>'; 
											} ?>		
										</div>
									</div>
								</div>
							</div>
						</div>
						<br>
					<?php } ?>

						<div class="mobile-12 desktop-12">
							<a class="button" href="<?php echo home_url(); ?>/events/">See All</a>
						</div>
					<?php }
				else { 
					?><div class="mobile-12 desktop-12">This page template uses The Events Calendar plugin.</div>
					<?php 
				}
			?>
		</div>
	</div>