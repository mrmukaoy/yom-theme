<?php
/**
 * Template part for displaying email file in post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package yom-theme
 */

?>

<?php

$iframe_file = get_field( 'email_html_file' );

if ( '' != $iframe_file ) {
?>
	<div class="email-demo">

			<iframe src="<?php echo $iframe_file; ?>" style="height:706px; width:350px;" title="email window"></iframe>

			<img src="<?php echo get_template_directory_uri() . '/_assets/img/phone-frame/top-section.png'; ?>" class="frame top" style="height:84.10px; width:350px;" />

			<img src="<?php echo get_template_directory_uri() . '/_assets/img/phone-frame/left.png'; ?>" class="frame left" style="height:549.91px; width:18.11px;" />

			<img src="<?php echo get_template_directory_uri() . '/_assets/img/phone-frame/right.png'; ?>" class="frame right" style="height:549.91px; width:18.11px;" />

			<img src="<?php echo get_template_directory_uri() . '/_assets/img/phone-frame/bottom-section.png'; ?>" class="frame bottom" style="height:78.28px; width:350px;" />

	</div><!-- .email-demo -->

<?php
} ?>