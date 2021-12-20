<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package yom-theme
 */

get_header();

$addclass = '';
if ( is_active_sidebar( 'sidebar' ) ) {
	$addclass .= 'w-sidebar ';
}
if ( is_singular() && has_category( 'email' ) ) {
	$addclass .= 'category-email ';
}
?>

<main id="main" class="site-main">
	<section id="primary" class="content-area <?php echo $addclass; ?>">

	<?php
	while ( have_posts() ) : the_post();

		if ( 'post' == get_post_type() ) {

			if ( has_category( 'email' ) && '' != get_field('email_html_file') ) {
				get_template_part( '_inc/partials/content', 'email' );
			} else {
			get_template_part( '_inc/partials/content', get_post_format() );
			}

		} else {
			get_template_part( '_inc/partials/content', get_post_type() );
		}

		if ( 'post' == get_post_type() && ! has_post_format() && has_category( 'email' ) ) {
			get_template_part( '_inc/partials/email-demo' );
		}

		the_post_navigation();

		// If comments are open or we have at least one comment, load up the comment template.
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
