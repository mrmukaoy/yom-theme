<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package yom-theme
 */

get_header();

$addclass = '';
if ( is_active_sidebar( 'sidebar' ) ) {
	$addclass = 'w-sidebar';
}
?>

<main id="main" class="site-main">
	<section id="primary" class="content-area <?php echo $addclass; ?>">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( '_inc/partials/content', 'page' );

			if ( comments_open() || get_comments_number() ) {
				echo '<hr/>';
				comments_template();
			} // endif;

		endwhile; // End of the loop.
		?>

	</section><!-- #primary -->

	<?php get_sidebar(); ?>

</main><!-- #main -->

<?php
get_footer();
