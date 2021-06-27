<?php
get_header();
?>
	<div class="grid grid-container grid-wide">
		<nav id="site-navigation" class="main-navigation large-12">
			<h1 class=""><?php esc_html_e( 'Menu', 'agitpress' );?></h1>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</div>
<?php
get_footer();
