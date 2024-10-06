<?php
/**
 * The template for displaying the header 3
 *
 * @package Newsblock
 */

$scheme = csco_color_scheme(
	get_theme_mod( 'color_topbar_background', '#FFFFFF' ),
	get_theme_mod( 'color_topbar_background_dark', '#1c1c1c' )
);
?>

<div class="cs-topbar" <?php echo wp_kses( $scheme, 'post' ); ?>>
	<div class="cs-container">
		<div class="cs-header__inner cs-inner-large-height">
			<div class="cs-header__col cs-col-left">
				<?php csco_component( 'header_offcanvas_toggle' ); ?>
			</div>
			<div class="cs-header__col cs-col-center">
				<?php csco_component( 'header_logo', true, array( 'variant' => 'large' ) ); ?>
			</div>
			<div class="cs-header__col cs-col-right">
				<?php csco_component( 'header_social_links' ); ?>
			</div>
		</div>
	</div>
</div>

<?php
$scheme = csco_color_scheme(
	get_theme_mod( 'color_header_background', '#0a0a0a' ),
	get_theme_mod( 'color_header_background_dark', '#1c1c1c' )
);
?>

<header class="cs-header cs-header-three" <?php echo wp_kses( $scheme, 'post' ); ?>>
	<div class="cs-container">
		<div class="cs-header__inner cs-header__inner-desktop">
			<div class="cs-header__col cs-col-left">
				<?php
					csco_component( 'wc_header_cart' );
					csco_component( 'header_search_toggle' );
					csco_component( 'header_scheme_toggle' );
				?>
				<span class="cs-separator"></span>
				<?php
					csco_component( 'header_logo', true, array( 'variant' => 'hide' ) );
				?>
			</div>
			<div class="cs-header__col cs-col-center">
				<?php
					csco_component( 'header_nav_menu' );
					csco_component( 'header_multi_column_widgets' );
				?>
			</div>
			<div class="cs-header__col cs-col-right">
				<?php
					csco_component( 'header_button' );
					csco_component( 'header_single_column_widgets' );
				?>
			</div>
		</div>

		<?php csco_site_nav_mobile(); ?>
	</div>

	<?php csco_site_search(); ?>
</header>
