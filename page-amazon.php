<?php
/*
Template Name: AgitProp (Amazon)
*/
get_header();
?>
			
	<div id="content" class="grid grid-container grid-wide">
	
		
			
		<nav aria-label="You are here:" role="navigation" class="top-bar mobile-12 desktop-12">
			<?php if (function_exists('the_breadcrumb')) the_breadcrumb(); ?>
		</nav>

		<div id="inner-content" class="mobile-12 desktop-12">
		    <div id="primary">
				<main id="main">

				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

				</main><!-- #main -->
			</div><!-- #primary -->
		    
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php
get_footer();