<?php
/**
 * The template for displaying the header 4
 *
 * @package Newsblock
 */

$scheme = csco_color_scheme(
	get_theme_mod( 'color_header_background', '#0a0a0a' ),
	get_theme_mod( 'color_header_background_dark', '#1c1c1c' )
);
?>

<header class="cs-header cs-header-stretch cs-header-four" <?php echo wp_kses( $scheme, 'post' ); ?>>
	<div class="cs-container">
		<div class="cs-header__inner-wrapper cs-header__inner-desktop">
			<div class="cs-header__col cs-col-left">
				<?php
					csco_component( 'header_offcanvas_toggle' );
					csco_component( 'header_logo', true, array( 'variant' => 'large' ) );
				?>
			</div>
			<div class="cs-header__col cs-col-column">
				<div class="cs-header__item">
					<div class="cs-header__inner">
						<?php
						$header_text = get_theme_mod( 'header_textarea', '' );
						?>
						<div class="cs-header__col cs-col-left <?php echo esc_attr( $header_text ? 'cs-col-large' : null ); ?>">
							<?php
							if ( $header_text ) {
								?>
								<div class="cs-header__info">
									<span><?php echo wp_kses_post( $header_text ); ?></span>
								</div>
								<?php
							}
							?>
						</div>
						<div class="cs-header__col cs-col-right">
							<?php
								csco_component( 'header_scheme_toggle' );
								csco_component( 'wc_header_cart' );
								csco_component( 'header_search_toggle' );
							?>
						</div>
					</div>
				</div>
				<div class="cs-header__item">
					<div class="cs-header__inner">
						<div class="cs-header__col cs-col-nav">
							<?php
								csco_component( 'header_nav_menu' );
								csco_component( 'header_multi_column_widgets' );
							?>
						</div>
						<div class="cs-header__col cs-col-right">
							<?php
								csco_component( 'header_social_links' );
								csco_component( 'header_button' );
								csco_component( 'header_single_column_widgets' );
							?>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php csco_site_nav_mobile(); ?>
	</div>

	<?php csco_site_search(); ?>
</header>
