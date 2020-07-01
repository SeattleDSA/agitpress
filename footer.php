<?php
/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Susty
 */
?>

	</div>

	<footer id="colophon">
		<a href="<?php echo esc_url( __( 'https://wordpress.org', 'agitpress' ) ); ?>">
			<?php
			/* translators: %s: CMS name, i.e. WordPress. */
			printf( esc_html__( 'Proudly powered by %s', 'agitpress' ), 'WordPress' );
			?>
		</a>
		<span> | </span>
			<?php
			/* translators: 1: Theme name, 2: Theme author. */
			printf( esc_html__( 'Theme: Agitpress, a fork of SustyWP' ) );
			?>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
