<?php
/**
 * The template for displaying the footer layout 1
 *
 * @package Newsblock
 */

$scheme = csco_color_scheme(
	get_theme_mod( 'color_footer_background', '#111111' ),
	get_theme_mod( 'color_footer_background_dark', '#1c1c1c' )
);
?>

<footer class="cs-footer cs-footer-one" <?php echo wp_kses( $scheme, 'post' ); ?>>
	<?php csco_component( 'footer_subscription_form' ); ?>

	<div class="cs-container">
		<div class="cs-footer__item">
			<div class="cs-footer__col cs-col-left">
				<div class="cs-footer__inner">
					<?php csco_component( 'footer_logo' ); ?>

					<?php csco_component( 'footer_description' ); ?>
				</div>
			</div>
			<div class="cs-footer__col cs-col-center">
				<?php csco_component( 'footer_nav_menu' ); ?>
			</div>
			<div class="cs-footer__col cs-col-right">
				<?php csco_component( 'footer_social_links' ); ?>
			</div>
		</div>
	</div>
</footer>
