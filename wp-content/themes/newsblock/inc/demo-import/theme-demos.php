<?php
/**
 * Theme Demos
 *
 * @package Newsblock
 */

/**
 * Theme Demos
 */
function csco_theme_demos() {
	$demos = array(
		// Theme mods imported with every demo.
		'common_mods' => array(),
		// Specific demos.
		'demos' => array( 'newsblock' => array(
			'name' => 'Newsblock.',
			'preview_image_url' => '/inc/demo-import/theme-demos/logo-newsblock.png',
			'preset' => 'newsblock',
			'mods' => array(
				'header_layout' => 'cs-header-four',
				'home_pagination_type' => 'load-more',
				'home_more_button' => true,
				'archive_pagination_type' => 'load-more',
				'archive_more_button' => true,
				'font_base' =>
				array(
					'font-family' => 'Inter',
					'variant' => 'regular',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '1rem',
					'letter-spacing' => 'normal',
					'line-height' => '1.5',
					'font-backup' => '',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'font_primary' =>
				array(
					'font-family' => 'Inter',
					'variant' => '600',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '0.875rem',
					'letter-spacing' => '-0.025em',
					'text-transform' => 'none',
					'font-backup' => '',
					'font-weight' => 600,
					'font-style' => 'normal',
				),
				'font_secondary' =>
				array(
					'font-family' => 'Inter',
					'variant' => 'regular',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '0.75rem',
					'letter-spacing' => 'normal',
					'text-transform' => 'none',
					'font-backup' => '',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'font_category' =>
				array(
					'font-family' => '-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif',
					'variant' => '700',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '0.625rem',
					'letter-spacing' => '',
					'text-transform' => 'uppercase',
					'font-backup' => '',
					'font-weight' => 700,
					'font-style' => 'normal',
				),
				'font_post_meta' =>
				array(
					'font-family' => '-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif',
					'variant' => 'regular',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '0.6255rem',
					'letter-spacing' => 'normal',
					'text-transform' => 'uppercase',
					'font-backup' => '',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'font_input' =>
				array(
					'font-family' => 'Inter',
					'variant' => 'regular',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '0.75rem',
					'letter-spacing' => 'normal',
					'text-transform' => 'none',
					'font-backup' => '',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'font_excerpt' =>
				array(
					'font-family' => 'Inter',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '0.875rem',
					'letter-spacing' => 'normal',
					'font-backup' => '',
					'variant' => 'regular',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'font_summary' =>
				array(
					'font-family' => 'Inter',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '1rem',
					'letter-spacing' => 'normal',
					'font-backup' => '',
					'variant' => 'regular',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'font_post_content' =>
				array(
					'font-family' => 'Inter',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '1rem',
					'letter-spacing' => 'normal',
					'font-backup' => '',
					'variant' => 'regular',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'font_main_logo' =>
				array(
					'font-family' => 'Inter',
					'font-size' => '1.5rem',
					'variant' => '700',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'letter-spacing' => '-0.075em',
					'text-transform' => 'none',
					'font-backup' => '',
					'font-weight' => 700,
					'font-style' => 'normal',
				),
				'font_footer_logo' =>
				array(
					'font-family' => 'Inter',
					'font-size' => '1.5rem',
					'variant' => '700',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'letter-spacing' => '-0.075em',
					'text-transform' => 'none',
					'font-backup' => '',
					'font-weight' => 700,
					'font-style' => 'normal',
				),
				'font_headings' =>
				array(
					'font-family' => 'Inter',
					'variant' => '700',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'letter-spacing' => '-0.0125em',
					'text-transform' => 'none',
					'line-height' => '1.25',
					'font-backup' => '',
					'font-weight' => 700,
					'font-style' => 'normal',
				),
				'font_decorate_headings' =>
				array(
					'font-family' => 'inter',
					'font-size' => '1.25rem',
					'variant' => '700',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'letter-spacing' => '-0.025em',
					'text-transform' => 'none',
					'line-height' => '1',
					'font-backup' => '',
					'font-weight' => 700,
					'font-style' => 'normal',
				),
				'section_heading_font' =>
				array(
					'font-family' => 'Inter',
					'variant' => '800',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '1rem',
					'letter-spacing' => '-0.025em',
					'text-transform' => 'none',
					'font-backup' => '',
					'font-weight' => 800,
					'font-style' => 'normal',
				),
				'font_menu' =>
				array(
					'font-family' => 'Inter',
					'variant' => '700',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '0.875rem',
					'letter-spacing' => '-0.0125em',
					'text-transform' => 'none',
					'font-backup' => '',
					'font-weight' => 700,
					'font-style' => 'normal',
				),
				'font_submenu' =>
				array(
					'font-family' => 'Inter',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'variant' => 'regular',
					'font-size' => '0.875rem',
					'letter-spacing' => '0px',
					'text-transform' => 'none',
					'font-backup' => '',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'color_accent' => '#0a0a0a',
				'color_button_contrast' => '#ffffff',
				'color_accent_dark' => '#0ee6b0',
				'design_primary_border_radius' => '0px',
				'footer_layout' => 'cs-footer-two',
				'color_header_background' => '#0a0a0a',
				'font_large_logo' =>
				array(
					'font-family' => 'Inter',
					'font-size' => '1.75rem',
					'variant' => '700',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'letter-spacing' => '-0.075em',
					'text-transform' => 'none',
					'font-backup' => '',
					'font-weight' => 700,
					'font-style' => 'normal',
				),
				'header_text' => '0',
				'section_heading' => 'style-3',
				'section_heading_submenu_default' => false,
				'section_heading_submenu_font' =>
				array(
					'font-family' => 'Inter',
					'variant' => '800',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '1.125rem',
					'letter-spacing' => '-0.025em',
					'text-transform' => 'none',
					'font-backup' => '',
					'font-weight' => 800,
					'font-style' => 'normal',
				),
				'color_search_background' => '#000000',
				'color_submenu_background' => '#ffffff',
				'footer_subscribe_name' => true,
				'footer_subscribe_heading' => '',
				'color_accent_contrast' => '#ffffff',
				'color_styled_heading' => '#0ee6b0',
				'color_styled_heading_contrast' => '#000000',
				'color_styled_heading_hover' => '#0ee6b0',
				'color_styled_heading_dark' => '#0ee6b0',
				'color_styled_heading_contrast_dark' => '#000000',
				'color_styled_heading_hover_dark' => '#0ee6b0',
				'header_textarea' => 'Meet Newsblock. The Next Generation WordPress News Theme.',
				'mega_menu_post_meta' =>
				array(
					0 => 'views',
					1 => 'reading_time',
				),
				'color_styled_category' => 'rgba(0,0,0,0.3)',
				'color_styled_category_contrast' => '#ffffff',
				'font_styled_heading' =>
				array(
					'line-height' => '1.3em',
					'font-backup' => '',
					'variant' => 'regular',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'font_decorated_heading' =>
				array(
					'font-family' => 'Inter',
					'font-size' => '1.25rem',
					'variant' => '700',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'letter-spacing' => 'normal',
					'text-transform' => 'none',
					'line-height' => '-0.025em',
					'font-backup' => '',
					'font-weight' => 700,
					'font-style' => 'normal',
				),
				'color_category_underline' => 'rgba(255,255,255,0)',
				'color_category' => '#03ae84',
				'header_search_image_border_radius' => '50%',
				'post_prev_next_image_border_radius' => '50%',
				'color_styled_category_hover_dark' => '#0ee6b0',
				'color_category_underline_dark' => 'rgba(255,255,255,0)',
				'color_category_dark' => '#0ee6b0',
				'color_category_hover' => '#000000',
				'section_heading_color_border' => '#e9ecef',
				'section_heading_align' => 'halignleft',
				'section_heading_color_border_dark' => '#49494b',
				'color_header_background_dark' => '#000000',
				'color_footer_background_dark' => '#000000',
				'section_heading_submenu' => 'style-3',
				'section_heading_submenu_color_border' => '#e9ecef',
				'section_heading_submenu_color_border_dark' => '#49494b',
				'post_prev_next' => false,
			),
			'mods_typekit' => array(),
		), 'mix' => array(
			'name' => 'Mix',
			'preview_image_url' => '/inc/demo-import/theme-demos/logo-mix.png',
			'preset' => 'mix',
			'mods' => array(
				'header_layout' => 'cs-header-one',
				'home_pagination_type' => 'load-more',
				'home_more_button' => true,
				'archive_pagination_type' => 'load-more',
				'archive_more_button' => true,
				'font_category' =>
				array(
					'font-family' => 'Inter',
					'variant' => '500',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '0.625rem',
					'letter-spacing' => '0.125em',
					'text-transform' => 'uppercase',
					'font-backup' => '',
					'font-weight' => 500,
					'font-style' => 'normal',
				),
				'design_primary_border_radius' => '50px',
				'design_secondary_border_radius' => '100%',
				'design_secondary_image_border_radius' => '100%',
				'font_styled_heading' =>
				array(
					'line-height' => '1.4em',
					'font-backup' => '',
					'variant' => 'regular',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'font_decorated_heading' =>
				array(
					'font-family' => 'Sriracha',
					'font-size' => '1.25rem',
					'variant' => 'regular',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'letter-spacing' => '-0.05em',
					'text-transform' => 'uppercase',
					'line-height' => '1',
					'font-backup' => '',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'design_common_border_radius' => '5px',
				'font_headings' =>
				array(
					'font-family' => 'Inter',
					'variant' => '800',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'letter-spacing' => '-0.025em',
					'text-transform' => 'none',
					'line-height' => '1.25',
					'font-backup' => '',
					'font-weight' => 800,
					'font-style' => 'normal',
				),
				'section_heading_font' =>
				array(
					'font-family' => 'Inter',
					'variant' => '800',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '1.25rem',
					'letter-spacing' => '-0.025em',
					'text-transform' => 'none',
					'font-backup' => '',
					'font-weight' => 800,
					'font-style' => 'normal',
				),
				'font_menu' =>
				array(
					'font-family' => 'Inter',
					'variant' => '800',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '0.875rem',
					'letter-spacing' => '-0.025em',
					'text-transform' => 'none',
					'font-backup' => '',
					'font-weight' => 800,
					'font-style' => 'normal',
				),
				'font_submenu' =>
				array(
					'font-family' => 'Inter',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'variant' => 'regular',
					'font-size' => '0.75rem',
					'letter-spacing' => '0px',
					'text-transform' => 'none',
					'font-backup' => '',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'font_base' =>
				array(
					'font-family' => 'Inter',
					'variant' => 'regular',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '1rem',
					'letter-spacing' => 'normal',
					'line-height' => '1.5',
					'font-backup' => '',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'font_primary' =>
				array(
					'font-family' => 'Inter',
					'variant' => '800',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '0.875rem',
					'letter-spacing' => '-0.025em',
					'text-transform' => 'none',
					'font-backup' => '',
					'font-weight' => 800,
					'font-style' => 'normal',
				),
				'header_search_image_border_radius' => '50%',
				'post_prev_next_image_border_radius' => '50%',
				'mega_menu_image_orientation' => 'landscape',
				'footer_layout' => 'cs-footer-one',
				'footer_subscribe_heading' => 'Newsletter',
				'color_search_background' => '#f8f9fa',
				'color_header_background' => '#ffffff',
				'color_accent' => '#daf400',
				'color_accent_contrast' => '#000000',
				'color_styled_heading' => '#000000',
				'color_styled_heading_hover' => '#daf400',
				'color_styled_heading_contrast' => '#ffffff',
				'color_styled_category' => '#daf400',
				'color_styled_category_contrast' => '#000000',
				'color_category' => '#000000',
				'color_category_underline' => '#daf400',
				'section_heading' => 'style-1',
				'color_accent_dark' => '#daf400',
				'color_category_underline_dark' => 'rgba(255,255,255,0)',
				'color_styled_category_hover_dark' => '#daf400',
				'color_category_dark' => '#ffffff',
				'color_styled_heading_dark' => '#000000',
				'color_styled_heading_contrast_dark' => '#ffffff',
				'color_styled_heading_hover_dark' => '#daf400',
				'misc_sticky_sidebar_method' => 'cs-stick-to-bottom',
				'section_heading_submenu_default' => true,
				'section_heading_submenu_color_border_dark' => 'rgba(0,0,0,0)',
				'section_heading_color_border' => '#ffffff',
				'post_author' => true,
				'section_heading_submenu' => 'style-1',
			),
			'mods_typekit' => array(),
		), 'relevant' => array(
			'name' => 'RelevΔnt',
			'preview_image_url' => '/inc/demo-import/theme-demos/logo-relevant.png',
			'preset' => 'relevant',
			'mods' => array(
				'header_layout' => 'cs-header-two',
				'home_pagination_type' => 'load-more',
				'home_more_button' => true,
				'archive_pagination_type' => 'load-more',
				'archive_more_button' => true,
				'font_base' =>
				array(
					'font-family' => 'Inter',
					'variant' => 'regular',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '1rem',
					'letter-spacing' => 'normal',
					'line-height' => '1.5',
					'font-backup' => '',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'font_primary' =>
				array(
					'font-family' => 'Inter',
					'variant' => '700',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '0.75rem',
					'letter-spacing' => '0.05em',
					'text-transform' => 'uppercase',
					'font-backup' => '',
					'font-weight' => 700,
					'font-style' => 'normal',
				),
				'font_secondary' =>
				array(
					'font-family' => 'Inter',
					'variant' => 'regular',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '0.75rem',
					'letter-spacing' => 'normal',
					'text-transform' => 'none',
					'font-backup' => '',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'font_category' =>
				array(
					'font-family' => 'inter',
					'variant' => '700',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '0.75rem',
					'letter-spacing' => '0px',
					'text-transform' => 'none',
					'font-backup' => '',
					'font-weight' => 700,
					'font-style' => 'normal',
				),
				'font_post_meta' =>
				array(
					'font-family' => 'Inter',
					'variant' => 'regular',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '0.75rem',
					'letter-spacing' => 'normal',
					'text-transform' => 'none',
					'font-backup' => '',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'font_input' =>
				array(
					'font-family' => 'Inter',
					'variant' => 'regular',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '0.75rem',
					'letter-spacing' => 'normal',
					'text-transform' => 'none',
					'font-backup' => '',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'font_excerpt' =>
				array(
					'font-family' => 'Inter',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '0.875rem',
					'letter-spacing' => 'normal',
					'font-backup' => '',
					'variant' => 'regular',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'font_summary' =>
				array(
					'font-family' => 'Inter',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '1rem',
					'letter-spacing' => 'normal',
					'font-backup' => '',
					'variant' => 'regular',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'font_post_content' =>
				array(
					'font-family' => 'Inter',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '1rem',
					'letter-spacing' => 'normal',
					'font-backup' => '',
					'variant' => 'regular',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'color_accent' => '#3360e4',
				'color_accent_dark' => '#1d45bd',
				'design_primary_border_radius' => '0px',
				'font_menu' =>
				array(
					'font-family' => 'Inter',
					'variant' => '600',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '0.9375rem',
					'letter-spacing' => '-0.025em',
					'text-transform' => 'none',
					'font-backup' => '',
					'font-weight' => 600,
					'font-style' => 'normal',
				),
				'font_submenu' =>
				array(
					'font-family' => 'Inter',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'variant' => 'regular',
					'font-size' => '0.875rem',
					'letter-spacing' => '0px',
					'text-transform' => 'none',
					'font-backup' => '',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'font_headings' =>
				array(
					'font-family' => 'Inter',
					'variant' => '600',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'letter-spacing' => 'normal',
					'text-transform' => 'none',
					'line-height' => '1.25',
					'font-backup' => '',
					'font-weight' => 600,
					'font-style' => 'normal',
				),
				'font_decorate_headings' =>
				array(
					'font-family' => 'inter',
					'font-size' => '1.6875rem',
					'variant' => 'regular',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'letter-spacing' => 'normal',
					'text-transform' => 'uppercase',
					'line-height' => '1',
					'font-backup' => '',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'section_heading_font' =>
				array(
					'font-family' => 'Inter',
					'variant' => '600',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '1.25rem',
					'letter-spacing' => 'normal',
					'text-transform' => 'none',
					'font-backup' => '',
					'font-weight' => 600,
					'font-style' => 'normal',
				),
				'header_height' => '60px',
				'header_topbar_height' => '120px',
				'header_single_column_title' => 'Follow',
				'section_heading_submenu_default' => true,
				'section_heading_submenu_font' =>
				array(
					'font-family' => 'Oswald',
					'variant' => '700',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '1.625rem',
					'letter-spacing' => 'normal',
					'text-transform' => 'none',
					'font-backup' => '',
					'font-weight' => 700,
					'font-style' => 'normal',
				),
				'color_site_background' => '#ffffff',
				'color_search_background' => '#f9fafa',
				'color_topbar_background' => '#ffffff',
				'color_header_background' => '#ffffff',
				'color_submenu_background' => '#f9fafa',
				'footer_layout' => 'cs-footer-two',
				'font_large_logo' =>
				array(
					'font-family' => 'Inter',
					'font-size' => '1.875rem',
					'variant' => '600',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'letter-spacing' => '0.05em',
					'text-transform' => 'uppercase',
					'font-backup' => '',
					'font-weight' => 600,
					'font-style' => 'normal',
				),
				'font_footer_logo' =>
				array(
					'font-family' => 'Inter',
					'font-size' => '1.5rem',
					'variant' => '500',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'letter-spacing' => 'normal',
					'text-transform' => 'none',
					'font-backup' => '',
					'font-weight' => 500,
					'font-style' => 'normal',
				),
				'font_main_logo' =>
				array(
					'font-family' => 'inter',
					'font-size' => '1.5rem',
					'variant' => '700',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'letter-spacing' => 'normal',
					'text-transform' => 'uppercase',
					'font-backup' => '',
					'font-weight' => 700,
					'font-style' => 'normal',
				),
				'post_sidebar' => 'disabled',
				'post_header_type' => 'large_overlay',
				'post_prev_next_layout' => 'type-1',
				'color_accent_contrast' => '#ffffff',
				'color_styled_heading' => '#ffffff',
				'color_styled_heading_contrast' => '#000000',
				'color_styled_heading_hover' => '#ffffff',
				'color_styled_heading_hover_contrast' => '#6d6d6d',
				'section_heading' => 'style-2',
				'color_styled_category' => 'rgba(10,10,10,0.5)',
				'color_styled_category_contrast' => '#ffffff',
				'color_category' => '#7a7a7a',
				'color_category_underline' => '#ffffff',
				'font_styled_heading' =>
				array(
					'line-height' => '1.2em',
					'font-backup' => '',
					'variant' => 'regular',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'font_decorated_heading' =>
				array(
					'font-family' => 'Inter',
					'font-size' => '1.25rem',
					'variant' => '600',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'letter-spacing' => 'normal',
					'text-transform' => 'none',
					'line-height' => '1',
					'font-backup' => '',
					'font-weight' => 600,
					'font-style' => 'normal',
				),
				'footer_subscribe_heading' => '',
				'footer_subscribe_name' => true,
				'color_footer_background' => '#f8f8f8',
				'header_search_image_border_radius' => '50%',
				'post_prev_next_image_border_radius' => '50%',
				'color_styled_heading_hover_dark' => '#ffffff',
				'color_styled_category_hover_dark' => '#ffffff',
				'color_category_underline_dark' => 'rgba(255,255,255,0)',
				'color_category_dark' => '#7a7a7a',
				'color_accent_contrast_dark' => '#ffffff',
				'color_styled_heading_dark' => '#ffffff',
				'color_styled_category_hover_contrast_dark' => '#000000',
				'color_styled_heading_hover_contrast_dark' => '#6d6d6d',
				'post_author' => true,
				'misc_sticky_sidebar_method' => 'cs-stick-to-bottom',
				'section_heading_submenu' => 'style-1',
			),
			'mods_typekit' => array(),
		), 'supernatural' => array(
			'name' => 'Superṅatural',
			'preview_image_url' => '/inc/demo-import/theme-demos/logo-supernatural.png',
			'preset' => 'supernatural',
			'mods' => array(
				'header_layout' => 'cs-header-two',
				'home_pagination_type' => 'load-more',
				'home_more_button' => true,
				'archive_pagination_type' => 'load-more',
				'archive_more_button' => true,
				'color_search_background' => '#2d2d2d',
				'color_submenu_background' => '#fabebc',
				'color_accent' => '#dffbfb',
				'color_accent_contrast' => '#000000',
				'color_button' => '#dffbfb',
				'color_overlay' => 'rgba(33,35,37,0.1)',
				'color_accent_dark' => '#fabebc',
				'color_accent_contrast_dark' => '#ffffff',
				'design_primary_border_radius' => '0',
				'font_decorate_headings' =>
				array(
					'font-family' => 'Shadows Into Light',
					'font-size' => '1.5rem',
					'variant' => 'regular',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'letter-spacing' => 'normal',
					'text-transform' => 'none',
					'line-height' => '1',
					'font-backup' => '',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'section_heading' => 'style-1',
				'header_topbar_height' => '90px',
				'header_height' => '90px',
				'section_heading_submenu_default' => false,
				'footer_layout' => 'cs-footer-one',
				'post_sidebar' => 'disabled',
				'post_header_type' => 'large_overlay',
				'post_prev_next_layout' => 'type-1',
				'navbar_sticky' => true,
				'color_styled_category' => 'rgba(0,0,0,0.15)',
				'font_styled_heading' =>
				array(
					'line-height' => '1.35em',
					'font-backup' => '',
					'variant' => 'regular',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'color_styled_category_contrast' => '#ffffff',
				'color_styled_heading_hover' => '#ffffff',
				'color_styled_heading_hover_contrast' => '#ff8988',
				'color_category_underline' => 'rgba(255,255,255,0)',
				'font_decorated_heading' =>
				array(
					'font-family' => 'Yellowtail',
					'font-size' => '1.6875rem',
					'variant' => 'regular',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'letter-spacing' => 'normal',
					'text-transform' => 'none',
					'line-height' => '1',
					'font-backup' => '',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'header_button_label' => '',
				'color_styled_heading' => '#ffffff',
				'color_styled_heading_contrast' => '#000000',
				'color_button_contrast' => '#000000',
				'header_single_column_display' => false,
				'color_footer_background' => '#f8f9fa',
				'post_meta' =>
				array(
					0 => 'category',
				),
				'color_category_hover' => '#ff8988',
				'header_search_image_border_radius' => '50%',
				'post_prev_next_image_border_radius' => '50%',
				'color_styled_heading_contrast_dark' => '#ffffff',
				'color_styled_heading_hover_dark' => '#ffffff',
				'color_styled_category_hover_dark' => '#000000',
				'color_category_underline_dark' => 'rgba(255,255,255,0)',
				'color_category_hover_dark' => 'rgba(255,255,255,0.8)',
				'color_search_background_dark' => '#333335',
				'color_styled_heading_dark' => '#1b1b1b',
				'color_styled_category_dark' => '#333335',
				'color_styled_category_hover_contrast_dark' => '#ffffff',
				'color_header_background' => '#ffffff',
				'color_category' => '#000000',
				'color_category_dark' => '#ffffff',
				'post_author' => true,
				'misc_sticky_sidebar_method' => 'cs-stick-to-bottom',
				'section_heading_submenu' => 'style-1',
			),
			'mods_typekit' => array(
				'font_primary' =>
				array(
					'font-family' => 'sofia-pro',
					'variant' => '600',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '0.75rem',
					'letter-spacing' => '0.075em',
					'text-transform' => 'uppercase',
					'font-backup' => '',
					'font-weight' => 600,
					'font-style' => 'normal',
				),
				'font_secondary' =>
				array(
					'font-family' => 'sofia-pro',
					'variant' => 'regular',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '0.75rem',
					'letter-spacing' => 'normal',
					'text-transform' => 'none',
					'font-backup' => '',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'font_category' =>
				array(
					'font-family' => 'sofia-pro',
					'variant' => '600',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '0.75rem',
					'letter-spacing' => 'normal',
					'text-transform' => 'none',
					'font-backup' => '',
					'font-weight' => 600,
					'font-style' => 'normal',
				),
				'font_post_meta' =>
				array(
					'font-family' => 'sofia-pro',
					'variant' => 'regular',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '0.75rem',
					'letter-spacing' => 'normal',
					'text-transform' => 'none',
					'font-backup' => '',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'font_main_logo' =>
				array(
					'font-family' => 'sofia-pro',
					'font-size' => '2rem',
					'variant' => '500',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'letter-spacing' => '-0.025em',
					'text-transform' => 'none',
					'font-backup' => '',
					'font-weight' => 500,
					'font-style' => 'normal',
				),
				'font_footer_logo' =>
				array(
					'font-family' => 'sofia-pro',
					'font-size' => '1.5rem',
					'variant' => '500',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'letter-spacing' => '-0.025em',
					'text-transform' => 'none',
					'font-backup' => '',
					'font-weight' => 500,
					'font-style' => 'normal',
				),
				'section_heading_font' =>
				array(
					'font-family' => 'sofia-pro',
					'variant' => '600',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '1.5rem',
					'letter-spacing' => '-0.025em',
					'text-transform' => 'none',
					'font-backup' => '',
					'font-weight' => 600,
					'font-style' => 'normal',
				),
				'font_menu' =>
				array(
					'font-family' => 'sofia-pro',
					'variant' => '600',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '1.25rem',
					'letter-spacing' => '-0.025em',
					'text-transform' => 'none',
					'font-backup' => '',
					'font-weight' => 600,
					'font-style' => 'normal',
				),
				'font_large_logo' =>
				array(
					'font-family' => 'sofia-pro',
					'font-size' => '2.25rem',
					'variant' => '500',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'letter-spacing' => '-0.025em',
					'text-transform' => 'none',
					'font-backup' => '',
					'font-weight' => 500,
					'font-style' => 'normal',
				),
				'font_base' =>
				array(
					'font-family' => 'futura-pt',
					'variant' => 'regular',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '1rem',
					'letter-spacing' => 'normal',
					'line-height' => '1.5',
					'font-backup' => '',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'font_input' =>
				array(
					'font-family' => 'futura-pt',
					'variant' => 'regular',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '1rem',
					'letter-spacing' => 'normal',
					'text-transform' => 'none',
					'font-backup' => '',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'font_excerpt' =>
				array(
					'font-family' => 'futura-pt',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '1rem',
					'letter-spacing' => 'normal',
					'font-backup' => '',
					'variant' => 'regular',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'font_summary' =>
				array(
					'font-family' => 'futura-pt',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '1rem',
					'letter-spacing' => 'normal',
					'font-backup' => '',
					'variant' => 'regular',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'font_post_content' =>
				array(
					'font-family' => 'futura-pt',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '1.125rem',
					'letter-spacing' => 'normal',
					'font-backup' => '',
					'variant' => 'regular',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'font_headings' =>
				array(
					'font-family' => 'futura-pt',
					'variant' => '600',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'letter-spacing' => '-0.025em',
					'text-transform' => 'none',
					'line-height' => '1.25',
					'font-backup' => '',
					'font-weight' => 600,
					'font-style' => 'normal',
				),
				'font_submenu' =>
				array(
					'font-family' => 'futura-pt',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'variant' => 'regular',
					'font-size' => '1rem',
					'letter-spacing' => '0px',
					'text-transform' => 'none',
					'font-backup' => '',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'section_heading_submenu_font' =>
				array(
					'font-family' => 'futura-pt',
					'variant' => '600',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '1.625rem',
					'letter-spacing' => 'normal',
					'text-transform' => 'none',
					'font-backup' => '',
					'font-weight' => 600,
					'font-style' => 'normal',
				),
			),
		), 'champs' => array(
			'name' => 'Champs',
			'preview_image_url' => '/inc/demo-import/theme-demos/logo-champs.png',
			'preset' => 'champs',
			'mods' => array(
				'header_layout' => 'cs-header-one',
				'home_pagination_type' => 'load-more',
				'home_more_button' => true,
				'archive_pagination_type' => 'load-more',
				'archive_more_button' => true,
				'font_headings' =>
				array(
					'font-family' => 'Barlow Semi Condensed',
					'variant' => '700',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'letter-spacing' => 'normal',
					'text-transform' => 'uppercase',
					'line-height' => '1.25',
					'font-backup' => '',
					'font-weight' => 700,
					'font-style' => 'normal',
				),
				'font_styled_heading' =>
				array(
					'line-height' => '1.3em',
					'font-backup' => '',
					'variant' => 'regular',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'font_decorated_heading' =>
				array(
					'font-family' => 'Inter',
					'font-size' => '1.25rem',
					'variant' => 'regular',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'letter-spacing' => 'normal',
					'text-transform' => 'none',
					'line-height' => '1',
					'font-backup' => '',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'header_navigation_menu' => true,
				'font_category' =>
				array(
					'font-family' => 'Barlow Semi Condensed',
					'variant' => '500',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '0.75rem',
					'letter-spacing' => '0.05em',
					'text-transform' => 'uppercase',
					'font-backup' => '',
					'font-weight' => 500,
					'font-style' => 'normal',
				),
				'color_search_background' => '#17191b',
				'color_header_background' => '#000000',
				'color_submenu_background' => '#17191b',
				'font_menu' =>
				array(
					'font-family' => 'Barlow Condensed',
					'variant' => '600',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '1rem',
					'letter-spacing' => '0px',
					'text-transform' => 'uppercase',
					'font-backup' => '',
					'font-weight' => 600,
					'font-style' => 'normal',
				),
				'font_primary' =>
				array(
					'font-family' => 'Barlow Semi Condensed',
					'variant' => '700',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '0.875rem',
					'letter-spacing' => '0.05em',
					'text-transform' => 'uppercase',
					'font-backup' => '',
					'font-weight' => 700,
					'font-style' => 'normal',
				),
				'color_accent' => '#5ae7ed',
				'color_category' => '#e53c3c',
				'color_category_underline' => 'rgba(255,255,255,0)',
				'color_styled_heading' => '#5ae7ed',
				'color_styled_heading_contrast' => '#000000',
				'color_styled_category' => 'rgba(10,10,10,0.5)',
				'color_styled_category_contrast' => '#ffffff',
				'color_styled_heading_hover' => '#5ae7ed',
				'section_heading_font' =>
				array(
					'font-family' => 'Barlow Condensed',
					'variant' => '700',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '1.625rem',
					'letter-spacing' => 'normal',
					'text-transform' => 'uppercase',
					'font-backup' => '',
					'font-weight' => 700,
					'font-style' => 'normal',
				),
				'section_heading' => 'style-5',
				'woocommerce_header_hide_icon' => true,
				'color_accent_dark' => '#5ae7ed',
				'color_styled_heading_dark' => '#5ae7ed',
				'color_styled_heading_contrast_dark' => '#000000',
				'color_styled_heading_hover_dark' => '#5ae7ed',
				'color_styled_category_dark' => 'rgba(0,0,0,0.5)',
				'color_styled_category_hover_dark' => '#ffffff',
				'color_category_hover_dark' => '#ffffff',
				'color_category_underline_dark' => 'rgba(0,0,0,0)',
				'color_category_dark' => '#e53c3c',
				'section_heading_submenu_default' => false,
				'section_heading_submenu_font' =>
				array(
					'font-family' => 'Barlow Condensed',
					'variant' => '700',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '1.25rem',
					'letter-spacing' => 'normal',
					'text-transform' => 'uppercase',
					'font-backup' => '',
					'font-weight' => 700,
					'font-style' => 'normal',
				),
				'section_heading_submenu' => 'style-3',
				'footer_layout' => 'cs-footer-one',
				'footer_subscribe_name' => true,
				'footer_subscribe_heading' => '',
				'design_primary_border_radius' => '0',
				'header_search_image_border_radius' => '50%',
				'post_prev_next_image_border_radius' => '50%',
				'post_author' => true,
				'misc_sticky_sidebar_method' => 'cs-stick-to-bottom',
			),
			'mods_typekit' => array(),
		), 'tonight' => array(
			'name' => 'Tonight',
			'preview_image_url' => '/inc/demo-import/theme-demos/logo-tonight.png',
			'preset' => 'tonight',
			'mods' => array(
				'font_decorate_headings' =>
				array(
					'font-family' => 'Playfair Display',
					'font-size' => '1.75rem',
					'variant' => 'regular',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'letter-spacing' => '0.05em',
					'text-transform' => 'uppercase',
					'line-height' => '1',
					'font-backup' => '',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'design_secondary_image_border_radius' => '0',
				'font_main_logo' =>
				array(
					'font-family' => 'Inter',
					'font-size' => '1.25rem',
					'variant' => '900',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'letter-spacing' => '-0.025em',
					'text-transform' => 'uppercase',
					'font-backup' => '',
					'font-weight' => 900,
					'font-style' => 'normal',
				),
				'font_footer_logo' =>
				array(
					'font-family' => 'Inter',
					'font-size' => '1.25rem',
					'variant' => '900',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'letter-spacing' => '-0.025em',
					'text-transform' => 'uppercase',
					'font-backup' => '',
					'font-weight' => 900,
					'font-style' => 'normal',
				),
				'font_headings' =>
				array(
					'font-family' => 'Inter',
					'variant' => '900',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'letter-spacing' => 'normal',
					'text-transform' => 'none',
					'line-height' => '1.25',
					'font-backup' => '',
					'font-weight' => 900,
					'font-style' => 'normal',
				),
				'font_decorated_heading' =>
				array(
					'font-family' => 'Inter',
					'font-size' => '1.25rem',
					'variant' => '900',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'letter-spacing' => 'normal',
					'text-transform' => 'none',
					'line-height' => '1',
					'font-backup' => '',
					'font-weight' => 900,
					'font-style' => 'normal',
				),
				'font_styled_heading' =>
				array(
					'line-height' => '1.3em',
					'font-backup' => '',
					'variant' => 'regular',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'color_accent' => '#f40000',
				'color_styled_heading_hover' => '#f40000',
				'color_styled_category' => '#f40000',
				'color_styled_category_contrast' => '#ffffff',
				'color_category_underline' => 'rgba(255,255,255,0)',
				'section_heading_font' =>
				array(
					'font-family' => 'Inter',
					'variant' => '900',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '1rem',
					'letter-spacing' => 'normal',
					'text-transform' => 'uppercase',
					'font-backup' => '',
					'font-weight' => 900,
					'font-style' => 'normal',
				),
				'font_category' =>
				array(
					'font-family' => 'Inter',
					'variant' => '900',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '0.875rem',
					'letter-spacing' => '-0.025em',
					'text-transform' => 'none',
					'font-backup' => '',
					'font-weight' => 900,
					'font-style' => 'normal',
				),
				'color_styled_heading_hover_contrast' => '#ffffff',
				'font_menu' =>
				array(
					'font-family' => 'Inter',
					'variant' => '700',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '0.875rem',
					'letter-spacing' => '0px',
					'text-transform' => 'none',
					'font-backup' => '',
					'font-weight' => 700,
					'font-style' => 'normal',
				),
				'font_submenu' =>
				array(
					'font-family' => 'Inter',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'variant' => 'regular',
					'font-size' => '0.875rem',
					'letter-spacing' => '0px',
					'text-transform' => 'none',
					'font-backup' => '',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'color_header_background' => '#000000',
				'color_accent_contrast' => '#ffffff',
				'color_accent_dark' => '#f40000',
				'color_accent_contrast_dark' => '#ffffff',
				'color_styled_heading_hover_dark' => '#f40000',
				'color_styled_category_hover_dark' => '#000000',
				'color_styled_category_dark' => '#f40000',
				'color_styled_category_hover_contrast_dark' => '#ffffff',
				'color_category_underline_dark' => 'rgba(255,255,255,0)',
				'color_styled_heading_hover_contrast_dark' => '#ffffff',
				'color_styled_heading' => '#000000',
				'color_styled_heading_contrast' => '#ffffff',
				'section_heading' => 'style-1',
				'color_category' => '#000000',
				'color_styled_heading_dark' => '#000000',
				'color_styled_heading_contrast_dark' => '#ffffff',
				'header_layout' => 'cs-header-one',
				'design_primary_border_radius' => '50px',
				'post_author' => true,
				'section_heading_submenu_default' => true,
				'misc_sticky_sidebar_method' => 'cs-stick-to-bottom',
			),
			'mods_typekit' => array(),
		), 'playback' => array(
			'name' => 'Playback',
			'preview_image_url' => '/inc/demo-import/theme-demos/logo-playback.png',
			'preset' => 'playback',
			'mods' => array(
				'header_layout' => 'cs-header-three',
				'home_pagination_type' => 'load-more',
				'home_more_button' => true,
				'archive_pagination_type' => 'load-more',
				'archive_more_button' => true,
				'font_decorate_headings' =>
				array(
					'font-family' => 'Covered By Your Grace',
					'font-size' => '2rem',
					'variant' => 'regular',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'letter-spacing' => 'normal',
					'text-transform' => 'uppercase',
					'line-height' => '1.5',
					'font-backup' => '',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'color_header_background' => '#ffffff',
				'color_submenu_background' => '#ffffff',
				'color_accent' => '#ff6763',
				'color_accent_contrast' => '#ffffff',
				'color_secondary' => '#5e5e5e',
				'color_overlay' => 'rgba(0,0,0,0.4)',
				'section_heading_submenu_default' => true,
				'color_search_background' => '#f8f9fa',
				'color_search_background_dark' => '#0a0a0a',
				'home_layout' => 'list',
				'color_styled_heading_hover' => '#ffffff',
				'color_styled_heading_hover_contrast' => '#ff6763',
				'color_styled_category' => 'rgba(0,0,0,0.25)',
				'color_styled_category_contrast' => '#ffffff',
				'color_category_underline' => 'rgba(255,255,255,0)',
				'color_button' => '#ff6763',
				'font_styled_heading' =>
				array(
					'line-height' => '1.2em',
					'font-backup' => '',
					'variant' => 'regular',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'color_styled_heading' => '#ffffff',
				'color_styled_heading_contrast' => '#000000',
				'section_heading' => 'style-4',
				'color_category_hover' => '#000000',
				'design_primary_border_radius' => '3px',
				'header_social_links_scheme' => 'bold',
				'color_category' => '#ff6763',
				'color_accent_dark' => '#ff6763',
				'color_category_dark' => '#ff6763',
				'color_category_underline_dark' => 'rgba(255,255,255,0)',
				'color_styled_heading_hover_dark' => '#000000',
				'color_styled_heading_hover_contrast_dark' => '#ffffff',
				'color_styled_category_hover_dark' => '#ff6763',
				'color_styled_category_hover_contrast_dark' => '#ffffff',
				'color_accent_contrast_dark' => '#ffffff',
				'footer_layout' => 'cs-footer-one',
				'misc_sticky_sidebar_method' => 'cs-stick-to-bottom',
				'post_author' => true,
			),
			'mods_typekit' => array(
				'font_main_logo' =>
				array(
					'font-family' => 'bely-display',
					'font-size' => '1.5rem',
					'variant' => 'regular',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'letter-spacing' => '-0.025em',
					'text-transform' => 'none',
					'font-backup' => '',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'font_footer_logo' =>
				array(
					'font-family' => 'bely-display',
					'font-size' => '1.5rem',
					'variant' => 'regular',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'letter-spacing' => '-0.025em',
					'text-transform' => 'none',
					'font-backup' => '',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'font_large_logo' =>
				array(
					'font-family' => 'bely-display',
					'font-size' => '3rem',
					'variant' => 'regular',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'letter-spacing' => '-0.025em',
					'text-transform' => 'none',
					'font-backup' => '',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'font_decorated_heading' =>
				array(
					'font-family' => 'bely-display',
					'font-size' => '1.5rem',
					'variant' => 'regular',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'letter-spacing' => '-0.025em',
					'text-transform' => 'none',
					'line-height' => '1',
					'font-backup' => '',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'font_base' =>
				array(
					'font-family' => 'neue-haas-grotesk-text',
					'variant' => 'regular',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '1rem',
					'letter-spacing' => 'normal',
					'line-height' => '1.5',
					'font-backup' => '',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'font_primary' =>
				array(
					'font-family' => 'neue-haas-grotesk-text',
					'variant' => '700',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '0.6875rem',
					'letter-spacing' => '0.05em',
					'text-transform' => 'uppercase',
					'font-backup' => '',
					'font-weight' => 700,
					'font-style' => 'normal',
				),
				'font_summary' =>
				array(
					'font-family' => 'neue-haas-grotesk-text',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '1rem',
					'letter-spacing' => 'normal',
					'font-backup' => '',
					'variant' => 'regular',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'font_secondary' =>
				array(
					'font-family' => 'neue-haas-grotesk-text',
					'variant' => 'regular',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '0.75rem',
					'letter-spacing' => 'normal',
					'text-transform' => 'none',
					'font-backup' => '',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'font_category' =>
				array(
					'font-family' => 'neue-haas-grotesk-text',
					'variant' => 'regular',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '0.6875rem',
					'letter-spacing' => '0.125em',
					'text-transform' => 'uppercase',
					'font-backup' => '',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'font_input' =>
				array(
					'font-family' => 'neue-haas-grotesk-text',
					'variant' => 'regular',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '0.875rem',
					'letter-spacing' => 'normal',
					'text-transform' => 'none',
					'font-backup' => '',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'font_post_meta' =>
				array(
					'font-family' => 'neue-haas-grotesk-text',
					'variant' => 'regular',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '0.75rem',
					'letter-spacing' => 'normal',
					'text-transform' => 'none',
					'font-backup' => '',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'font_post_content' =>
				array(
					'font-family' => 'neue-haas-grotesk-text',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '1rem',
					'letter-spacing' => 'normal',
					'font-backup' => '',
					'variant' => 'regular',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'font_excerpt' =>
				array(
					'font-family' => 'neue-haas-grotesk-text',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '0.875rem',
					'letter-spacing' => 'normal',
					'font-backup' => '',
					'variant' => 'regular',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'section_heading_font' =>
				array(
					'font-family' => 'neue-haas-grotesk-text',
					'variant' => '700',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '0.875rem',
					'letter-spacing' => '0.125em',
					'text-transform' => 'uppercase',
					'font-backup' => '',
					'font-weight' => 700,
					'font-style' => 'normal',
				),
				'font_menu' =>
				array(
					'font-family' => 'neue-haas-grotesk-text',
					'variant' => '700',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '0.6875rem',
					'letter-spacing' => '0.075em',
					'text-transform' => 'uppercase',
					'font-backup' => '',
					'font-weight' => 700,
					'font-style' => 'normal',
				),
				'font_submenu' =>
				array(
					'font-family' => 'neue-haas-grotesk-text',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'variant' => 'regular',
					'font-size' => '0.75rem',
					'letter-spacing' => '0px',
					'text-transform' => 'none',
					'font-backup' => '',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'font_headings' =>
				array(
					'font-family' => 'warnock-pro-display',
					'variant' => '600',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'letter-spacing' => 'normal',
					'text-transform' => 'none',
					'line-height' => '1.25',
					'font-backup' => '',
					'font-weight' => 600,
					'font-style' => 'normal',
				),
			),
		), 'motor' => array(
			'name' => 'Motor',
			'preview_image_url' => '/inc/demo-import/theme-demos/logo-motor.png',
			'preset' => 'motor',
			'mods' => array(
				'header_layout' => 'cs-header-two',
				'home_pagination_type' => 'load-more',
				'home_more_button' => true,
				'archive_pagination_type' => 'load-more',
				'archive_more_button' => true,
				'color_header_background' => '#ffffff',
				'font_menu' =>
				array(
					'font-family' => 'Roboto',
					'variant' => '700',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '0.75rem',
					'letter-spacing' => '0px',
					'text-transform' => 'uppercase',
					'font-backup' => '',
					'font-weight' => 700,
					'font-style' => 'normal',
				),
				'header_height' => '60px',
				'font_headings' =>
				array(
					'font-family' => 'Manrope',
					'variant' => '700',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'letter-spacing' => 'normal',
					'text-transform' => 'none',
					'line-height' => '1.25',
					'font-backup' => '',
					'font-weight' => 700,
					'font-style' => 'normal',
				),
				'font_styled_heading' =>
				array(
					'line-height' => '1.2em',
					'font-backup' => '',
					'variant' => 'regular',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'font_decorated_heading' =>
				array(
					'font-family' => 'Manrope',
					'font-size' => '0.75rem',
					'variant' => '700',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'letter-spacing' => 'normal',
					'text-transform' => 'uppercase',
					'line-height' => '1',
					'font-backup' => '',
					'font-weight' => 700,
					'font-style' => 'normal',
				),
				'section_heading_font' =>
				array(
					'font-family' => 'Manrope',
					'variant' => '800',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '0.625rem',
					'letter-spacing' => '0.05em',
					'text-transform' => 'uppercase',
					'font-backup' => '',
					'font-weight' => 800,
					'font-style' => 'normal',
				),
				'font_submenu' =>
				array(
					'font-family' => 'Manrope',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'variant' => 'regular',
					'font-size' => '0.875rem',
					'letter-spacing' => '0px',
					'text-transform' => 'none',
					'font-backup' => '',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'font_base' =>
				array(
					'font-family' => 'Roboto',
					'variant' => 'regular',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '1rem',
					'letter-spacing' => 'normal',
					'line-height' => '1.5',
					'font-backup' => '',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'font_primary' =>
				array(
					'font-family' => 'Manrope',
					'variant' => '700',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '0.75rem',
					'letter-spacing' => '0.05em',
					'text-transform' => 'uppercase',
					'font-backup' => '',
					'font-weight' => 700,
					'font-style' => 'normal',
				),
				'font_secondary' =>
				array(
					'font-family' => 'Manrope',
					'variant' => 'regular',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '0.75rem',
					'letter-spacing' => 'normal',
					'text-transform' => 'none',
					'font-backup' => '',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'font_category' =>
				array(
					'font-family' => 'Manrope',
					'variant' => '800',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '0.625rem',
					'letter-spacing' => '0.05em',
					'text-transform' => 'uppercase',
					'font-backup' => '',
					'font-weight' => 800,
					'font-style' => 'normal',
				),
				'font_post_meta' =>
				array(
					'font-family' => 'Manrope',
					'variant' => 'regular',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '0.75rem',
					'letter-spacing' => 'normal',
					'text-transform' => 'none',
					'font-backup' => '',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'font_input' =>
				array(
					'font-family' => 'Manrope',
					'variant' => 'regular',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '0.75rem',
					'letter-spacing' => 'normal',
					'text-transform' => 'none',
					'font-backup' => '',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'font_excerpt' =>
				array(
					'font-family' => 'Roboto',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '0.875rem',
					'letter-spacing' => 'normal',
					'font-backup' => '',
					'variant' => 'regular',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'font_summary' =>
				array(
					'font-family' => 'Roboto',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '1rem',
					'letter-spacing' => 'normal',
					'font-backup' => '',
					'variant' => 'regular',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'font_post_content' =>
				array(
					'font-family' => 'Roboto',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '1rem',
					'letter-spacing' => 'normal',
					'font-backup' => '',
					'variant' => 'regular',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'color_accent' => '#f7e411',
				'color_styled_category' => '#f7e411',
				'color_styled_category_contrast' => '#000000',
				'color_styled_heading' => '#000000',
				'color_styled_heading_hover' => '#f7e411',
				'section_heading' => 'style-1',
				'section_heading_color_border' => '#e0e0e0',
				'section_heading_color_text' => '',
				'color_styled_heading_contrast' => '#ffffff',
				'color_category_underline' => '#f7e411',
				'footer_subscribe_name' => true,
				'footer_subscribe_heading' => '',
				'font_main_logo' =>
				array(
					'font-family' => 'Manrope',
					'font-size' => '2rem',
					'variant' => '800',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'letter-spacing' => '-0.05em',
					'text-transform' => 'lowercase',
					'font-backup' => '',
					'font-weight' => 800,
					'font-style' => 'normal',
				),
				'font_footer_logo' =>
				array(
					'font-family' => 'Manrope',
					'font-size' => '2rem',
					'variant' => '800',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'letter-spacing' => '-0.05em',
					'text-transform' => 'lowercase',
					'font-backup' => '',
					'font-weight' => 800,
					'font-style' => 'normal',
				),
				'color_accent_dark' => '#f7e411',
				'color_styled_heading_hover_dark' => '#f7e411',
				'color_styled_category_hover_dark' => '#000000',
				'color_category_underline_dark' => '#f7e411',
				'color_styled_category_dark' => '#f7e411',
				'color_styled_category_contrast_dark' => '#000000',
				'color_styled_category_hover_contrast_dark' => '#ffffff',
				'color_search_background' => '#f8f9fa',
				'footer_layout' => 'cs-footer-one',
				'color_category' => '#000000',
				'color_category_dark' => '#ffffff',
				'color_styled_heading_dark' => '#000000',
				'color_styled_heading_contrast_dark' => '#ffffff',
				'color_accent_contrast' => '#000000',
				'design_primary_border_radius' => '50px',
				'section_heading_submenu' => 'style-1',
				'section_heading_submenu_default' => true,
				'post_author' => true,
				'misc_sticky_sidebar_method' => 'cs-stick-to-bottom',
			),
			'mods_typekit' => array(),
		), 'tech-rumors' => array(
			'name' => 'Tech Rumors',
			'preview_image_url' => '/inc/demo-import/theme-demos/logo-tech-rumors.png',
			'preset' => 'tech-rumors',
			'mods' => array(
				'header_layout' => 'cs-header-one',
				'home_pagination_type' => 'load-more',
				'home_more_button' => true,
				'archive_pagination_type' => 'load-more',
				'archive_more_button' => true,
				'font_menu' =>
				array(
					'font-family' => 'Barlow Semi Condensed',
					'variant' => '600',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '0.875rem',
					'letter-spacing' => '0.025em',
					'text-transform' => 'uppercase',
					'font-backup' => '',
					'font-weight' => 600,
					'font-style' => 'normal',
				),
				'font_headings' =>
				array(
					'font-family' => 'Manrope',
					'variant' => '600',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'letter-spacing' => 'normal',
					'text-transform' => 'none',
					'line-height' => '1.25',
					'font-backup' => '',
					'font-weight' => 600,
					'font-style' => 'normal',
				),
				'font_styled_heading' =>
				array(
					'line-height' => '1.5em',
					'font-backup' => '',
					'variant' => 'regular',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'font_decorated_heading' =>
				array(
					'font-family' => 'Manrope',
					'font-size' => '1rem',
					'variant' => '600',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'letter-spacing' => 'normal',
					'text-transform' => 'none',
					'line-height' => '1',
					'font-backup' => '',
					'font-weight' => 600,
					'font-style' => 'normal',
				),
				'section_heading_font' =>
				array(
					'font-family' => 'Barlow Condensed',
					'variant' => '600',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '1.25rem',
					'letter-spacing' => 'normal',
					'text-transform' => 'uppercase',
					'font-backup' => '',
					'font-weight' => 600,
					'font-style' => 'normal',
				),
				'font_base' =>
				array(
					'font-family' => 'Manrope',
					'variant' => 'regular',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '1rem',
					'letter-spacing' => 'normal',
					'line-height' => '1.5',
					'font-backup' => '',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'font_primary' =>
				array(
					'font-family' => 'Manrope',
					'variant' => '700',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '0.75rem',
					'letter-spacing' => '0.05em',
					'text-transform' => 'uppercase',
					'font-backup' => '',
					'font-weight' => 700,
					'font-style' => 'normal',
				),
				'font_secondary' =>
				array(
					'font-family' => 'Manrope',
					'variant' => 'regular',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '0.75rem',
					'letter-spacing' => 'normal',
					'text-transform' => 'none',
					'font-backup' => '',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'font_category' =>
				array(
					'font-family' => 'Manrope',
					'variant' => '700',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '0.6875rem',
					'letter-spacing' => '0.075em',
					'text-transform' => 'uppercase',
					'font-backup' => '',
					'font-weight' => 700,
					'font-style' => 'normal',
				),
				'font_submenu' =>
				array(
					'font-family' => 'Manrope',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'variant' => 'regular',
					'font-size' => '0.875rem',
					'letter-spacing' => '0px',
					'text-transform' => 'none',
					'font-backup' => '',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'font_post_meta' =>
				array(
					'font-family' => 'Manrope',
					'variant' => 'regular',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '0.75rem',
					'letter-spacing' => 'normal',
					'text-transform' => 'none',
					'font-backup' => '',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'font_input' =>
				array(
					'font-family' => 'Manrope',
					'variant' => 'regular',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '0.75rem',
					'letter-spacing' => 'normal',
					'text-transform' => 'none',
					'font-backup' => '',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'font_excerpt' =>
				array(
					'font-family' => 'Manrope',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '0.875rem',
					'letter-spacing' => 'normal',
					'font-backup' => '',
					'variant' => 'regular',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'font_summary' =>
				array(
					'font-family' => 'Manrope',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '1rem',
					'letter-spacing' => 'normal',
					'font-backup' => '',
					'variant' => 'regular',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'font_post_content' =>
				array(
					'font-family' => 'Manrope',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'font-size' => '1rem',
					'letter-spacing' => 'normal',
					'font-backup' => '',
					'variant' => 'regular',
					'font-weight' => 400,
					'font-style' => 'normal',
				),
				'section_heading' => 'style-1',
				'section_heading_color_border' => '#8224e3',
				'color_accent' => '#8224e3',
				'color_accent_contrast' => '#ffffff',
				'color_styled_heading_hover' => '#000000',
				'color_styled_heading_hover_contrast' => '#ffffff',
				'color_styled_category' => 'rgba(0,0,0,0.31)',
				'color_styled_category_contrast' => '#ffffff',
				'color_category_underline' => 'rgba(255,255,255,0)',
				'color_styled_heading' => 'rgba(0,0,0,0.5)',
				'color_styled_category_hover' => '#8224e3',
				'design_common_border_radius' => '4px',
				'design_primary_image_border_radius' => '4px',
				'design_primary_border_radius' => '4px',
				'color_category' => '#8224e3',
				'color_footer_background' => '#2d2832',
				'color_accent_dark' => '#8224e3',
				'color_accent_contrast_dark' => '#ffffff',
				'color_styled_heading_hover_dark' => '#8224e3',
				'color_styled_category_hover_dark' => '#8224e3',
				'color_category_underline_dark' => 'rgba(255,255,255,0)',
				'font_main_logo' =>
				array(
					'font-family' => 'Barlow Condensed',
					'font-size' => '1.5rem',
					'variant' => '600',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'letter-spacing' => 'normal',
					'text-transform' => 'uppercase',
					'font-backup' => '',
					'font-weight' => 600,
					'font-style' => 'normal',
				),
				'font_footer_logo' =>
				array(
					'font-family' => 'Barlow Condensed',
					'font-size' => '1.5rem',
					'variant' => '600',
					'subsets' =>
					array(
						0 => 'latin',
					),
					'letter-spacing' => 'normal',
					'text-transform' => 'uppercase',
					'font-backup' => '',
					'font-weight' => 600,
					'font-style' => 'normal',
				),
				'woocommerce_header_hide_icon' => true,
				'color_header_background' => '#2d2832',
				'color_search_background' => '#f8f9fa',
				'footer_layout' => 'cs-footer-one',
				'color_styled_heading_contrast' => '#ffffff',
				'color_styled_heading_dark' => '#000000',
				'color_styled_heading_contrast_dark' => '#ffffff',
				'color_category_dark' => '#8224e3',
				'color_styled_heading_hover_contrast_dark' => '#ffffff',
				'section_heading_submenu_default' => true,
				'post_author' => true,
				'misc_sticky_sidebar_method' => 'cs-stick-to-bottom',
			),
			'mods_typekit' => array(),
		)),
	);
	return $demos;
}
add_filter( 'csco_theme_demos', 'csco_theme_demos' );
