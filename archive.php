<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package yom-theme
 */

get_header(); ?>

<main id="main" class="site-main">
	<section id="primary" class="content-area">

	<?php
	if ( have_posts() ) { ?>

		<header class="page-header">
			<?php
			the_archive_title( '<h1 class="page-title">', '</h1>' );
			the_archive_description( '<div class="archive-description">', '</div>' );
			?>
		</header><!-- .page-header -->

		<?php
		/* Start the Loop */
		while ( have_posts() ) : the_post();

			get_template_part( '_inc/partials/content', get_post_format() );

		endwhile;

		the_posts_navigation();

	} else {

		get_template_part( '_inc/partials/content', 'none' );

	} // endif
	?>

	</section><!-- #primary -->

	<?php get_sidebar(); ?>

</main><!-- #main -->

<?php
get_footer();
