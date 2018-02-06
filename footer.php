<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package yom-theme
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<?php if ( is_active_sidebar( 'footer' ) ) { ?>
			<?php // establish classes based on how many widgets to display
			$count = get_widgets_count( 'footer' );
			$across = '';
			switch ( $count ) {
				case 1:
					$across = 'one-across';
					break;
				case 2:
					$across = 'two-across';
					break;
				case 3:
					$across = 'three-across';
					break;
				default:
					$across = 'four-across';
			}
			?>
			<aside id="footer-widgets" class="footer-widget-area<?php echo ' ' . $across; ?>">
				<?php dynamic_sidebar( 'footer' ); ?>
			</aside><!-- #secondary -->
		<?php } ?>

		<?php /*
		<div class="site-info">
			&copy; <?php echo date( 'Y' ); ?> Martin Yoakum
		</div><!-- .site-info -->
		*/ ?>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
