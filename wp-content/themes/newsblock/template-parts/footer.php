<?php
/**
 * The template for displaying the footer layout
 *
 * @package Newsblock
 */

switch ( get_theme_mod( 'footer_layout', 'cs-footer-two' ) ) {
	case 'cs-footer-one':
		get_template_part( 'template-parts/footers/footer-1' );
		break;
	case 'cs-footer-two':
		get_template_part( 'template-parts/footers/footer-2' );
		break;
}
