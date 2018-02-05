<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package yom-theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php /*
	<header class="entry-header">
		<?php
		if ( is_singular() ) {
			the_title( '<h1 class="entry-title">', '</h1>' );
		} else {
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		} // endif

		if ( 'post' === get_post_type() ) { ?>
		<div class="entry-meta">
			<?php yom_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		} // endif ?>
	</header><!-- .entry-header -->
*/ ?>
	<div class="status-note">
		<div class="entry-meta"><?php yom_posted_date(); ?></div><!-- .entry-meta -->

		<?php yom_post_thumbnail(); ?>

		<div class="entry-content">
			<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'yom' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			// list tags as hashtags
			yom_tags_list();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'yom' ),
				'after'  => '</div>',
			) );
			?>
		</div><!-- .entry-content -->
	</div><!-- .status-note -->

	<footer class="entry-footer">
		<?php yom_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post -->
