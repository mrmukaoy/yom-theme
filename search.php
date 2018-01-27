<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
	if ( have_posts() ) { ?>

		<header class="page-header">
			<h1 class="page-title"><?php
				/* translators: %s: search query. */
				printf( esc_html__( 'Search Results for: %s', 'yom' ), '<span>' . get_search_query() . '</span>' );
			?></h1>
		</header><!-- .page-header -->

		<?php
		while ( have_posts() ) : the_post();
			get_template_part( '_inc/partials/content', 'search' );
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
