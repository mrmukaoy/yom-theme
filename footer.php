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
			<aside id="footer-widgets" class="footer-widget-area">
				<?php dynamic_sidebar( 'footer' ); ?>
			</aside><!-- #secondary -->
		<?php } ?>

		<?php /* */ ?>
		<div class="site-info">
			&copy; <?php echo date( 'Y' ); ?> Martin Yoakum
		</div><!-- .site-info -->
		<?php /* */ ?>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
