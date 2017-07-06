<?php
/* Timed Content Typography */
if ( ! empty( $settings->timed_msg_font ) && 'Default' != $settings->timed_msg_font['family'] ) : ?>
.fl-node-<?php echo $id; ?> .timed-content-message p {
	<?php FLBuilderFonts::font_css( $settings->timed_msg_font ); ?>
}
<?php endif; ?>

.fl-node-<?php echo $id; ?> .timed-content-message p {
	color: #<?php echo $settings->timed_msg_color; ?>;
	font-size: <?php echo $settings->timed_msg_size; ?>px;
	line-height: <?php echo $settings->timed_msg_line_height; ?>px;
	letter-spacing: <?php echo $settings->timed_msg_letter_spacing; ?>px;
}