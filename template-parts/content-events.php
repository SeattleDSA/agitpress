
<?php
/*
Part:	Events List
Use:	List of Events using The Events Calendar Plugin
*/
?>
	<div class="homepage-events grid">
		<div class="small-12 large-12">
				<h2>Upcoming Events</h2>
		</div>
		<div class="small-12 large-12 grid dsa-events-list">		
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

					    <div class="slat small-12 large-12 dsa-events-item">
					    	<div class="grid grid-middle">
					    		<div class="small-12 large-5 dsa-event-title">
					    			<strong><?php echo tribe_get_event_link( $event->ID, $full_link=true); ?></strong>
					    		</div>
					    		<div class="small-12 large-4 dsa-events-date">
						    		<div class="grid grid-middle">
							    		<div class="small-2 large-2">
					    					<a href="<?php echo tribe_get_event_link ( $event->ID  ); ?>" aria-label="View event details on calendar" class="txt-1rem">📅</a>
					    			 	</div>
					    				<div class="small-10 large-10 txt-1rem">
					    					<?php echo tribe_events_event_schedule_details( $event->ID ); ?>
					    				</div>
					    				
					    			</div>
					    		</div>
					    		<div class="small-12 large-3 dsa-events-venue">
					    			<div class="grid grid-middle">
					    				<div class="small-2 large-2">
						    				<a href="<?php echo tribe_get_event_link ( $event->ID  ); ?>" aria-label="Details on event venue" class="txt-1rem">📍</a>
						    			</div>
						    			<div class="small-10 large-10 txt-1rem">
							    			<?php if ( tribe_has_venue( $event->ID ) ) {
												echo '';
												echo tribe_get_venue( $event->ID ) . '<br>';
												echo tribe_get_city( $event->ID ) . ' ' . tribe_get_state( $event->ID );
												echo '';
												} 
												else {
													echo 'TBD'; 
												}
											?>		
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php } ?>

						<div class="small-12 large-12">
							<a class="button" href="<?php echo home_url(); ?>/events/">See All</a>
						</div>
					<?php }
				else { 
					?><div class="small-12 large-12">This page template uses The Events Calendar plugin.</div>
					<?php 
				}
			?>
		</div>
	</div>