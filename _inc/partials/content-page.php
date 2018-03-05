<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package yom-theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php yom_post_thumbnail(); ?>

	<div class="entry-content">
		<div class="clearfix">
		<div class="glyph">
			<div class="clearfix">
				<svg class="icon icon-home3"><use xlink:href="<?php echo get_template_directory_uri() . '/_assets/img/symbol-defs.svg'; ?>#icon-home3"></use></svg><span class="name"> icon-home3</span>
			</div>
		</div>
		<div class="glyph">
			<div class="clearfix">
				<svg class="icon icon-faceb"><use xlink:href="<?php echo get_template_directory_uri() . '/_assets/img/symbol-defs.svg'; ?>#icon-faceb"></use></svg><span class="name"> icon-faceb</span>
			</div>
		</div>
		<div class="glyph">
			<div class="clearfix">
				<svg class="icon icon-mail2"><use xlink:href="<?php echo get_template_directory_uri() . '/_assets/img/symbol-defs.svg'; ?>#icon-mail2"></use></svg><span class="name"> icon-mail2</span>
			</div>
		</div>
		<div class="glyph">
			<div class="clearfix">
				<svg class="icon icon-twi"><use xlink:href="<?php echo get_template_directory_uri() . '/_assets/img/symbol-defs.svg'; ?>#icon-twi"></use></svg><span class="name"> icon-twi</span>
			</div>
		</div>
		<div class="glyph">
			<div class="clearfix">
				<svg class="icon icon-phone"><use xlink:href="<?php echo get_template_directory_uri() . '/_assets/img/symbol-defs.svg'; ?>#icon-phone"></use></svg><span class="name"> icon-phone</span>
			</div>
		</div>
		<div class="glyph">
			<div class="clearfix">
				<svg class="icon icon-codepen"><use xlink:href="<?php echo get_template_directory_uri() . '/_assets/img/symbol-defs.svg'; ?>#icon-codepen"></use></svg><span class="name"> icon-codepen</span>
			</div>
		</div>
		<div class="glyph">
			<div class="clearfix">
				<svg class="icon icon-git"><use xlink:href="<?php echo get_template_directory_uri() . '/_assets/img/symbol-defs.svg'; ?>#icon-git"></use></svg><span class="name"> icon-git</span>
			</div>
		</div>
		<div class="glyph">
			<div class="clearfix">
				<svg class="icon icon-deviantart"><use xlink:href="<?php echo get_template_directory_uri() . '/_assets/img/symbol-defs.svg'; ?>#icon-deviantart"></use></svg><span class="name"> icon-deviantart</span>
			</div>
		</div>
		<div class="glyph">
			<div class="clearfix">
				<svg class="icon icon-info"><use xlink:href="<?php echo get_template_directory_uri() . '/_assets/img/symbol-defs.svg'; ?>#icon-info"></use></svg><span class="name"> icon-info</span>
			</div>
		</div>
		<div class="glyph">
			<div class="clearfix">
				<svg class="icon icon-dropbox"><use xlink:href="<?php echo get_template_directory_uri() . '/_assets/img/symbol-defs.svg'; ?>#icon-dropbox"></use></svg><span class="name"> icon-dropbox</span>
			</div>
		</div>
		<div class="glyph">
			<div class="clearfix">
				<svg class="icon icon-question"><use xlink:href="<?php echo get_template_directory_uri() . '/_assets/img/symbol-defs.svg'; ?>#icon-question"></use></svg><span class="name"> icon-question</span>
			</div>
		</div>
		<div class="glyph">
			<div class="clearfix">
				<svg class="icon icon-gdrive"><use xlink:href="<?php echo get_template_directory_uri() . '/_assets/img/symbol-defs.svg'; ?>#icon-gdrive"></use></svg><span class="name"> icon-gdrive</span>
			</div>
		</div>
		<div class="glyph">
			<div class="clearfix">
				<svg class="icon icon-check"><use xlink:href="<?php echo get_template_directory_uri() . '/_assets/img/symbol-defs.svg'; ?>#icon-check"></use></svg><span class="name"> icon-check</span>
			</div>
		</div>
		<div class="glyph">
			<div class="clearfix">
				<svg class="icon icon-flickr2"><use xlink:href="<?php echo get_template_directory_uri() . '/_assets/img/symbol-defs.svg'; ?>#icon-flickr2"></use></svg><span class="name"> icon-flickr2</span>
			</div>
		</div>
		<div class="glyph">
			<div class="clearfix">
				<svg class="icon icon-notice"><use xlink:href="<?php echo get_template_directory_uri() . '/_assets/img/symbol-defs.svg'; ?>#icon-notice"></use></svg><span class="name"> icon-notice</span>
			</div>
		</div>
		<div class="glyph">
			<div class="clearfix">
				<svg class="icon icon-ghub"><use xlink:href="<?php echo get_template_directory_uri() . '/_assets/img/symbol-defs.svg'; ?>#icon-ghub"></use></svg><span class="name"> icon-ghub</span>
			</div>
		</div>
		<div class="glyph">
			<div class="clearfix">
				<svg class="icon icon-warning"><use xlink:href="<?php echo get_template_directory_uri() . '/_assets/img/symbol-defs.svg'; ?>#icon-warning"></use></svg><span class="name"> icon-warning</span>
			</div>
		</div>
		<div class="glyph">
			<div class="clearfix">
				<svg class="icon icon-wp"><use xlink:href="<?php echo get_template_directory_uri() . '/_assets/img/symbol-defs.svg'; ?>#icon-wp"></use></svg><span class="name"> icon-wp</span>
			</div>
		</div>
		<div class="glyph">
			<div class="clearfix">
				<svg class="icon icon-cancel-circle"><use xlink:href="<?php echo get_template_directory_uri() . '/_assets/img/symbol-defs.svg'; ?>#icon-cancel-circle"></use></svg><span class="name"> icon-cancel-circle</span>
			</div>
		</div>
		<div class="glyph">
			<div class="clearfix">
				<svg class="icon icon-lin"><use xlink:href="<?php echo get_template_directory_uri() . '/_assets/img/symbol-defs.svg'; ?>#icon-lin"></use></svg><span class="name"> icon-lin</span>
			</div>
		</div>
		<div class="glyph">
			<div class="clearfix">
				<svg class="icon icon-file-pdf"><use xlink:href="<?php echo get_template_directory_uri() . '/_assets/img/symbol-defs.svg'; ?>#icon-file-pdf"></use></svg><span class="name"> icon-file-pdf</span>
			</div>
		</div>
		<div class="glyph">
			<div class="clearfix">
				<svg class="icon icon-rss2"><use xlink:href="<?php echo get_template_directory_uri() . '/_assets/img/symbol-defs.svg'; ?>#icon-rss2"></use></svg><span class="name"> icon-rss2</span>
			</div>
		</div>
		<div class="glyph">
			<div class="clearfix">
				<svg class="icon icon-inst"><use xlink:href="<?php echo get_template_directory_uri() . '/_assets/img/symbol-defs.svg'; ?>#icon-inst"></use></svg><span class="name"> icon-inst</span>
			</div>
		</div>
		<div class="glyph">
			<div class="clearfix">
				<svg class="icon icon-ytube"><use xlink:href="<?php echo get_template_directory_uri() . '/_assets/img/symbol-defs.svg'; ?>#icon-ytube"></use></svg><span class="name"> icon-ytube</span>
			</div>
		</div>
		</div>
		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'yom' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<?php
	if ( get_edit_post_link() ) { ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'yom' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php
	} // endif ?>
</article><!-- #post -->
