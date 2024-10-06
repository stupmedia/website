<?php
/**
 * Design
 *
 * @package Newsblock
 */

CSCO_Kirki::add_section(
	'design',
	array(
		'title'    => esc_html__( 'Design', 'newsblock' ),
		'priority' => 20,
	)
);

/**
 * -------------------------------------------------------------------------
 * Colors
 * -------------------------------------------------------------------------
 */

CSCO_Kirki::add_section(
	'design_base',
	array(
		'title'    => esc_html__( 'design', 'newsblock' ),
		'panel'    => 'design',
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'        => 'collapsible',
		'settings'    => 'design_collapsible_common',
		'section'     => 'design',
		'label'       => esc_html__( 'Common', 'newsblock' ),
		'priority'    => 10,
		'input_attrs' => array(
			'collapsed' => true,
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'color',
		'settings' => 'color_site_background',
		'label'    => esc_html__( 'Site Background', 'newsblock' ),
		'section'  => 'design',
		'priority' => 10,
		'default'  => '#FFFFFF',
		'choices'  => array(
			'alpha' => true,
		),
		'output'   => array(
			array(
				'element'  => ':root, [site-data-scheme="default"]',
				'property' => '--cs-color-site-background',
				'context'  => array( 'editor', 'front' ),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'color',
		'settings' => 'color_search_background',
		'label'    => esc_html__( 'Site Search Background', 'newsblock' ),
		'section'  => 'design',
		'priority' => 10,
		'default'  => '#000000',
		'choices'  => array(
			'alpha' => true,
		),
		'output'   => array(
			array(
				'element'  => ':root, [site-data-scheme="default"]',
				'property' => '--cs-color-search-background',
				'context'  => array( 'editor', 'front' ),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'color',
		'settings'        => 'color_topbar_background',
		'label'           => esc_html__( 'Topbar Background', 'newsblock' ),
		'section'         => 'design',
		'priority'        => 10,
		'default'         => '#FFFFFF',
		'choices'         => array(
			'alpha' => true,
		),
		'output'          => array(
			array(
				'element'  => ':root, [site-data-scheme="default"]',
				'property' => '--cs-color-topbar-background',
				'context'  => array( 'editor', 'front' ),
			),
		),
		'active_callback' => array(
			array(
				'setting'  => 'header_layout',
				'operator' => '==',
				'value'    => 'cs-header-three',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'color',
		'settings' => 'color_header_background',
		'label'    => esc_html__( 'Header Background', 'newsblock' ),
		'section'  => 'design',
		'priority' => 10,
		'default'  => '#0a0a0a',
		'choices'  => array(
			'alpha' => true,
		),
		'output'   => array(
			array(
				'element'  => ':root, [site-data-scheme="default"]',
				'property' => '--cs-color-header-background',
				'context'  => array( 'editor', 'front' ),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'color',
		'settings' => 'color_submenu_background',
		'label'    => esc_html__( 'Submenu Background', 'newsblock' ),
		'section'  => 'design',
		'priority' => 10,
		'default'  => '#FFFFFF',
		'choices'  => array(
			'alpha' => true,
		),
		'output'   => array(
			array(
				'element'  => ':root, [site-data-scheme="default"]',
				'property' => '--cs-color-submenu-background',
				'context'  => array( 'editor', 'front' ),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'color',
		'settings' => 'color_footer_background',
		'label'    => esc_html__( 'Footer Background', 'newsblock' ),
		'section'  => 'design',
		'priority' => 10,
		'default'  => '#111111',
		'choices'  => array(
			'alpha' => true,
		),
		'output'   => array(
			array(
				'element'  => ':root, [site-data-scheme="default"]',
				'property' => '--cs-color-footer-background',
				'context'  => array( 'editor', 'front' ),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'color',
		'settings' => 'color_accent',
		'label'    => esc_html__( 'Accent Color', 'newsblock' ),
		'section'  => 'design',
		'priority' => 10,
		'default'  => '#0a0a0a',
		'context'  => array( 'editor', 'front' ),
		'choices'  => array(
			'alpha' => true,
		),
		'output'   => array(
			array(
				'element'  => ':root, [data-scheme="default"]',
				'property' => '--cs-color-accent',
				'context'  => array( 'editor', 'front' ),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'color',
		'settings' => 'color_accent_contrast',
		'label'    => esc_html__( 'Accent Contrast Color', 'newsblock' ),
		'section'  => 'design',
		'priority' => 10,
		'default'  => '#FFFFFF',
		'choices'  => array(
			'alpha' => true,
		),
		'output'   => array(
			array(
				'element'  => ':root, [data-scheme="default"]',
				'property' => '--cs-color-accent-contrast',
				'context'  => array( 'editor', 'front' ),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'color',
		'settings' => 'color_secondary',
		'label'    => esc_html__( 'Secondary Color', 'newsblock' ),
		'section'  => 'design',
		'priority' => 10,
		'default'  => '#818181',
		'choices'  => array(
			'alpha' => true,
		),
		'output'   => array(
			array(
				'element'  => ':root, [data-scheme="default"]',
				'property' => '--cs-color-secondary',
				'context'  => array( 'editor', 'front' ),
			),
			array(
				'element'  => ':root, [data-scheme="default"]',
				'property' => '--cs-palette-color-secondary',
				'context'  => array( 'editor', 'front' ),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'color',
		'settings' => 'color_secondary_contrast',
		'label'    => esc_html__( 'Secondary Contrast Color', 'newsblock' ),
		'section'  => 'design',
		'priority' => 10,
		'default'  => '#000000',
		'choices'  => array(
			'alpha' => true,
		),
		'output'   => array(
			array(
				'element'  => ':root, [data-scheme="default"]',
				'property' => '--cs-color-secondary-contrast',
				'context'  => array( 'editor', 'front' ),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'color',
		'settings' => 'color_styled_heading',
		'label'    => esc_html__( 'Styled Heading Background', 'newsblock' ),
		'section'  => 'design',
		'priority' => 10,
		'default'  => '#0ee6b0',
		'choices'  => array(
			'alpha' => true,
		),
		'output'   => array(
			array(
				'element'  => ':root, [data-scheme="default"]',
				'property' => '--cs-color-styled-heading',
				'context'  => array( 'editor', 'front' ),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'color',
		'settings' => 'color_styled_heading_contrast',
		'label'    => esc_html__( 'Styled Heading Color', 'newsblock' ),
		'section'  => 'design',
		'priority' => 10,
		'default'  => '#000000',
		'choices'  => array(
			'alpha' => true,
		),
		'output'   => array(
			array(
				'element'  => ':root, [data-scheme="default"]',
				'property' => '--cs-color-styled-heading-contrast',
				'context'  => array( 'editor', 'front' ),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'color',
		'settings' => 'color_styled_heading_hover',
		'label'    => esc_html__( 'Styled Heading Hover Background', 'newsblock' ),
		'section'  => 'design',
		'priority' => 10,
		'default'  => '#0ee6b0',
		'choices'  => array(
			'alpha' => true,
		),
		'output'   => array(
			array(
				'element'  => ':root, [data-scheme="default"]',
				'property' => '--cs-color-styled-heading-hover',
				'context'  => array( 'editor', 'front' ),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'color',
		'settings' => 'color_styled_heading_hover_contrast',
		'label'    => esc_html__( 'Styled Heading Hover Color', 'newsblock' ),
		'section'  => 'design',
		'priority' => 10,
		'default'  => '#000000',
		'choices'  => array(
			'alpha' => true,
		),
		'output'   => array(
			array(
				'element'  => ':root, [data-scheme="default"]',
				'property' => '--cs-color-styled-heading-hover-contrast',
				'context'  => array( 'editor', 'front' ),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'color',
		'settings' => 'color_styled_category',
		'label'    => esc_html__( 'Styled Category Background', 'newsblock' ),
		'section'  => 'design',
		'priority' => 10,
		'default'  => 'rgba(0,0,0,0.3)',
		'choices'  => array(
			'alpha' => true,
		),
		'output'   => array(
			array(
				'element'  => ':root, [data-scheme="default"]',
				'property' => '--cs-color-styled-category',
				'context'  => array( 'editor', 'front' ),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'color',
		'settings' => 'color_styled_category_contrast',
		'label'    => esc_html__( 'Styled Category Color', 'newsblock' ),
		'section'  => 'design',
		'priority' => 10,
		'default'  => '#ffffff',
		'choices'  => array(
			'alpha' => true,
		),
		'output'   => array(
			array(
				'element'  => ':root, [data-scheme="default"]',
				'property' => '--cs-color-styled-category-contrast',
				'context'  => array( 'editor', 'front' ),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'color',
		'settings' => 'color_styled_category_hover',
		'label'    => esc_html__( 'Styled Category Hover Background', 'newsblock' ),
		'section'  => 'design',
		'priority' => 10,
		'default'  => '#000000',
		'choices'  => array(
			'alpha' => true,
		),
		'output'   => array(
			array(
				'element'  => ':root, [data-scheme="default"]',
				'property' => '--cs-color-styled-category-hover',
				'context'  => array( 'editor', 'front' ),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'color',
		'settings' => 'color_styled_category_hover_contrast',
		'label'    => esc_html__( 'Styled Category Hover Color', 'newsblock' ),
		'section'  => 'design',
		'priority' => 10,
		'default'  => '#FFFFFF',
		'choices'  => array(
			'alpha' => true,
		),
		'output'   => array(
			array(
				'element'  => ':root, [data-scheme="default"]',
				'property' => '--cs-color-styled-category-hover-contrast',
				'context'  => array( 'editor', 'front' ),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'color',
		'settings' => 'color_category',
		'label'    => esc_html__( 'Category Color', 'newsblock' ),
		'section'  => 'design',
		'priority' => 10,
		'default'  => '#04bc8e',
		'choices'  => array(
			'alpha' => true,
		),
		'output'   => array(
			array(
				'element'  => ':root, [data-scheme="default"]',
				'property' => '--cs-color-category',
				'context'  => array( 'editor', 'front' ),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'color',
		'settings' => 'color_category_hover',
		'label'    => esc_html__( 'Category Hover Color', 'newsblock' ),
		'section'  => 'design',
		'priority' => 10,
		'default'  => '#000000',
		'choices'  => array(
			'alpha' => true,
		),
		'output'   => array(
			array(
				'element'  => ':root, [data-scheme="default"]',
				'property' => '--cs-color-category-hover',
				'context'  => array( 'editor', 'front' ),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'color',
		'settings' => 'color_category_underline',
		'label'    => esc_html__( 'Category Underline Color', 'newsblock' ),
		'section'  => 'design',
		'priority' => 10,
		'default'  => 'rgba(255,255,255,0)',
		'choices'  => array(
			'alpha' => true,
		),
		'output'   => array(
			array(
				'element'  => ':root, [data-scheme="default"]',
				'property' => '--cs-color-category-underline',
				'context'  => array( 'editor', 'front' ),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'color',
		'settings' => 'color_button',
		'label'    => esc_html__( 'Button Background', 'newsblock' ),
		'section'  => 'design',
		'priority' => 10,
		'default'  => '#000000',
		'choices'  => array(
			'alpha' => true,
		),
		'output'   => array(
			array(
				'element'  => ':root, [data-scheme="default"]',
				'property' => '--cs-color-button',
				'context'  => array( 'editor', 'front' ),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'color',
		'settings' => 'color_button_contrast',
		'label'    => esc_html__( 'Button Color', 'newsblock' ),
		'section'  => 'design',
		'priority' => 10,
		'default'  => '#FFFFFF',
		'choices'  => array(
			'alpha' => true,
		),
		'output'   => array(
			array(
				'element'  => ':root, [data-scheme="default"]',
				'property' => '--cs-color-button-contrast',
				'context'  => array( 'editor', 'front' ),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'color',
		'settings' => 'color_button_hover',
		'label'    => esc_html__( 'Button Hover Background', 'newsblock' ),
		'section'  => 'design',
		'priority' => 10,
		'default'  => '#282828',
		'choices'  => array(
			'alpha' => true,
		),
		'output'   => array(
			array(
				'element'  => ':root, [data-scheme="default"]',
				'property' => '--cs-color-button-hover',
				'context'  => array( 'editor', 'front' ),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'color',
		'settings' => 'color_button_hover_contrast',
		'label'    => esc_html__( 'Button Hover Color', 'newsblock' ),
		'section'  => 'design',
		'priority' => 10,
		'default'  => '#FFFFFF',
		'choices'  => array(
			'alpha' => true,
		),
		'output'   => array(
			array(
				'element'  => ':root, [data-scheme="default"]',
				'property' => '--cs-color-button-hover-contrast',
				'context'  => array( 'editor', 'front' ),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'color',
		'settings' => 'color_overlay',
		'label'    => esc_html__( 'Overlay Color', 'newsblock' ),
		'section'  => 'design',
		'priority' => 10,
		'default'  => 'rgba(0,0,0,0.25)',
		'choices'  => array(
			'alpha' => true,
		),
		'output'   => array(
			array(
				'element'  => ':root, [data-scheme="default"]',
				'property' => '--cs-color-overlay-background',
				'context'  => array( 'editor', 'front' ),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'collapsible',
		'settings'        => 'design_collapsible_dark',
		'section'         => 'design',
		'label'           => esc_html__( 'Dark Scheme', 'newsblock' ),
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'misc_dark_mode',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'color',
		'settings'        => 'color_site_background_dark',
		'label'           => esc_html__( 'Site Background', 'newsblock' ),
		'section'         => 'design',
		'priority'        => 10,
		'default'         => '#1c1c1c',
		'choices'         => array(
			'alpha' => true,
		),
		'output'          => array(
			array(
				'element'  => '[site-data-scheme="dark"]',
				'property' => '--cs-color-site-background',
				'context'  => array( 'editor', 'front' ),
			),
		),
		'active_callback' => array(
			array(
				'setting'  => 'misc_dark_mode',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'color',
		'settings'        => 'color_search_background_dark',
		'label'           => esc_html__( 'Site Search Background', 'newsblock' ),
		'section'         => 'design',
		'priority'        => 10,
		'default'         => '#333335',
		'choices'         => array(
			'alpha' => true,
		),
		'output'          => array(
			array(
				'element'  => '[site-data-scheme="dark"]',
				'property' => '--cs-color-search-background',
				'context'  => array( 'editor', 'front' ),
			),
		),
		'active_callback' => array(
			array(
				'setting'  => 'misc_dark_mode',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'color',
		'settings'        => 'color_topbar_background_dark',
		'label'           => esc_html__( 'Topbar Background', 'newsblock' ),
		'section'         => 'design',
		'priority'        => 10,
		'default'         => '#1c1c1c',
		'choices'         => array(
			'alpha' => true,
		),
		'output'          => array(
			array(
				'element'  => '[site-data-scheme="dark"]',
				'property' => '--cs-color-topbar-background',
				'context'  => array( 'editor', 'front' ),
			),
		),
		'active_callback' => array(
			array(
				'setting'  => 'misc_dark_mode',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'header_layout',
				'operator' => '==',
				'value'    => 'cs-header-three',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'color',
		'settings'        => 'color_header_background_dark',
		'label'           => esc_html__( 'Header Background', 'newsblock' ),
		'section'         => 'design',
		'priority'        => 10,
		'default'         => '#1c1c1c',
		'choices'         => array(
			'alpha' => true,
		),
		'output'          => array(
			array(
				'element'  => '[site-data-scheme="dark"]',
				'property' => '--cs-color-header-background',
				'context'  => array( 'editor', 'front' ),
			),
		),
		'active_callback' => array(
			array(
				'setting'  => 'misc_dark_mode',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'color',
		'settings'        => 'color_submenu_background_dark',
		'label'           => esc_html__( 'Submenu Background', 'newsblock' ),
		'section'         => 'design',
		'priority'        => 10,
		'default'         => '#1c1c1c',
		'choices'         => array(
			'alpha' => true,
		),
		'output'          => array(
			array(
				'element'  => '[site-data-scheme="dark"]',
				'property' => '--cs-color-submenu-background',
				'context'  => array( 'editor', 'front' ),
			),
		),
		'active_callback' => array(
			array(
				'setting'  => 'misc_dark_mode',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'color',
		'settings'        => 'color_footer_background_dark',
		'label'           => esc_html__( 'Footer Background', 'newsblock' ),
		'section'         => 'design',
		'priority'        => 10,
		'default'         => '#1c1c1c',
		'choices'         => array(
			'alpha' => true,
		),
		'output'          => array(
			array(
				'element'  => '[site-data-scheme="dark"]',
				'property' => '--cs-color-footer-background',
				'context'  => array( 'editor', 'front' ),
			),
		),
		'active_callback' => array(
			array(
				'setting'  => 'misc_dark_mode',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'color',
		'settings'        => 'color_accent_dark',
		'label'           => esc_html__( 'Accent Color', 'newsblock' ),
		'section'         => 'design',
		'priority'        => 10,
		'default'         => '#0ee6b0',
		'choices'         => array(
			'alpha' => true,
		),
		'output'          => array(
			array(
				'element'  => '[data-scheme="dark"]',
				'property' => '--cs-color-accent',
				'context'  => array( 'editor', 'front' ),
			),
		),
		'active_callback' => array(
			array(
				'setting'  => 'misc_dark_mode',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'color',
		'settings'        => 'color_accent_contrast_dark',
		'label'           => esc_html__( 'Accent Contrast Color', 'newsblock' ),
		'section'         => 'design',
		'priority'        => 10,
		'default'         => '#000000',
		'choices'         => array(
			'alpha' => true,
		),
		'output'          => array(
			array(
				'element'  => '[data-scheme="dark"]',
				'property' => '--cs-color-accent-contrast',
				'context'  => array( 'editor', 'front' ),
			),
		),
		'active_callback' => array(
			array(
				'setting'  => 'misc_dark_mode',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'color',
		'settings'        => 'color_secondary_dark',
		'label'           => esc_html__( 'Secondary Color', 'newsblock' ),
		'section'         => 'design',
		'priority'        => 10,
		'default'         => '#858585',
		'choices'         => array(
			'alpha' => true,
		),
		'output'          => array(
			array(
				'element'  => '[data-scheme="dark"]',
				'property' => '--cs-color-secondary',
				'context'  => array( 'editor', 'front' ),
			),
			array(
				'element'  => '[data-scheme="dark"]',
				'property' => '--cs-palette-color-secondary',
				'context'  => array( 'editor', 'front' ),
			),
		),
		'active_callback' => array(
			array(
				'setting'  => 'misc_dark_mode',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'color',
		'settings'        => 'color_secondary_contrast_dark',
		'label'           => esc_html__( 'Secondary Contrast Color', 'newsblock' ),
		'section'         => 'design',
		'priority'        => 10,
		'default'         => '#000000',
		'choices'         => array(
			'alpha' => true,
		),
		'output'          => array(
			array(
				'element'  => '[data-scheme="dark"]',
				'property' => '--cs-color-secondary-contrast',
				'context'  => array( 'editor', 'front' ),
			),
		),
		'active_callback' => array(
			array(
				'setting'  => 'misc_dark_mode',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'color',
		'settings'        => 'color_styled_heading_dark',
		'label'           => esc_html__( 'Styled Heading Background', 'newsblock' ),
		'section'         => 'design',
		'priority'        => 10,
		'default'         => '#0ee6b0',
		'choices'         => array(
			'alpha' => true,
		),
		'output'          => array(
			array(
				'element'  => '[data-scheme="dark"]',
				'property' => '--cs-color-styled-heading',
				'context'  => array( 'editor', 'front' ),
			),
		),
		'active_callback' => array(
			array(
				'setting'  => 'misc_dark_mode',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'color',
		'settings'        => 'color_styled_heading_contrast_dark',
		'label'           => esc_html__( 'Styled Heading Color', 'newsblock' ),
		'section'         => 'design',
		'priority'        => 10,
		'default'         => '#000000',
		'choices'         => array(
			'alpha' => true,
		),
		'output'          => array(
			array(
				'element'  => '[data-scheme="dark"]',
				'property' => '--cs-color-styled-heading-contrast',
				'context'  => array( 'editor', 'front' ),
			),
		),
		'active_callback' => array(
			array(
				'setting'  => 'misc_dark_mode',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'color',
		'settings'        => 'color_styled_heading_hover_dark',
		'label'           => esc_html__( 'Styled Heading Hover Background', 'newsblock' ),
		'section'         => 'design',
		'priority'        => 10,
		'default'         => '#0ee6b0',
		'choices'         => array(
			'alpha' => true,
		),
		'output'          => array(
			array(
				'element'  => '[data-scheme="dark"]',
				'property' => '--cs-color-styled-heading-hover',
				'context'  => array( 'editor', 'front' ),
			),
		),
		'active_callback' => array(
			array(
				'setting'  => 'misc_dark_mode',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'color',
		'settings'        => 'color_styled_heading_hover_contrast_dark',
		'label'           => esc_html__( 'Styled Heading Hover Color', 'newsblock' ),
		'section'         => 'design',
		'priority'        => 10,
		'default'         => '#000000',
		'choices'         => array(
			'alpha' => true,
		),
		'output'          => array(
			array(
				'element'  => '[data-scheme="dark"]',
				'property' => '--cs-color-styled-heading-hover-contrast',
				'context'  => array( 'editor', 'front' ),
			),
		),
		'active_callback' => array(
			array(
				'setting'  => 'misc_dark_mode',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'color',
		'settings'        => 'color_styled_category_dark',
		'label'           => esc_html__( 'Styled Category Background', 'newsblock' ),
		'section'         => 'design',
		'priority'        => 10,
		'default'         => '#000000',
		'choices'         => array(
			'alpha' => true,
		),
		'output'          => array(
			array(
				'element'  => '[data-scheme="dark"]',
				'property' => '--cs-color-styled-category',
				'context'  => array( 'editor', 'front' ),
			),
		),
		'active_callback' => array(
			array(
				'setting'  => 'misc_dark_mode',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'color',
		'settings'        => 'color_styled_category_contrast_dark',
		'label'           => esc_html__( 'Styled Category Color', 'newsblock' ),
		'section'         => 'design',
		'priority'        => 10,
		'default'         => '#FFFFFF',
		'choices'         => array(
			'alpha' => true,
		),
		'output'          => array(
			array(
				'element'  => '[data-scheme="dark"]',
				'property' => '--cs-color-styled-category-contrast',
				'context'  => array( 'editor', 'front' ),
			),
		),
		'active_callback' => array(
			array(
				'setting'  => 'misc_dark_mode',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'color',
		'settings'        => 'color_styled_category_hover_dark',
		'label'           => esc_html__( 'Styled Category Hover Background', 'newsblock' ),
		'section'         => 'design',
		'priority'        => 10,
		'default'         => '#0ee6b0',
		'choices'         => array(
			'alpha' => true,
		),
		'output'          => array(
			array(
				'element'  => '[data-scheme="dark"]',
				'property' => '--cs-color-styled-category-hover',
				'context'  => array( 'editor', 'front' ),
			),
		),
		'active_callback' => array(
			array(
				'setting'  => 'misc_dark_mode',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'color',
		'settings'        => 'color_styled_category_hover_contrast_dark',
		'label'           => esc_html__( 'Styled Category Hover Color', 'newsblock' ),
		'section'         => 'design',
		'priority'        => 10,
		'default'         => '#000000',
		'choices'         => array(
			'alpha' => true,
		),
		'output'          => array(
			array(
				'element'  => '[data-scheme="dark"]',
				'property' => '--cs-color-styled-category-hover-contrast',
				'context'  => array( 'editor', 'front' ),
			),
		),
		'active_callback' => array(
			array(
				'setting'  => 'misc_dark_mode',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'color',
		'settings'        => 'color_category_dark',
		'label'           => esc_html__( 'Category Color', 'newsblock' ),
		'section'         => 'design',
		'priority'        => 10,
		'default'         => '#0ee6b0',
		'choices'         => array(
			'alpha' => true,
		),
		'output'          => array(
			array(
				'element'  => '[data-scheme="dark"]',
				'property' => '--cs-color-category',
				'context'  => array( 'editor', 'front' ),
			),
		),
		'active_callback' => array(
			array(
				'setting'  => 'misc_dark_mode',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'color',
		'settings'        => 'color_category_hover_dark',
		'label'           => esc_html__( 'Category Hover Color', 'newsblock' ),
		'section'         => 'design',
		'priority'        => 10,
		'default'         => '#FFFFFF',
		'choices'         => array(
			'alpha' => true,
		),
		'output'          => array(
			array(
				'element'  => '[data-scheme="dark"]',
				'property' => '--cs-color-category-hover',
				'context'  => array( 'editor', 'front' ),
			),
		),
		'active_callback' => array(
			array(
				'setting'  => 'misc_dark_mode',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'color',
		'settings'        => 'color_category_underline_dark',
		'label'           => esc_html__( 'Category Underline Color', 'newsblock' ),
		'section'         => 'design',
		'priority'        => 10,
		'default'         => 'rgba(255,255,255,0)',
		'choices'         => array(
			'alpha' => true,
		),
		'output'          => array(
			array(
				'element'  => '[data-scheme="dark"]',
				'property' => '--cs-color-category-underline',
				'context'  => array( 'editor', 'front' ),
			),
		),
		'active_callback' => array(
			array(
				'setting'  => 'misc_dark_mode',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'color',
		'settings'        => 'color_button_dark',
		'label'           => esc_html__( 'Button Background', 'newsblock' ),
		'section'         => 'design',
		'priority'        => 10,
		'default'         => '#3d3d3d',
		'choices'         => array(
			'alpha' => true,
		),
		'output'          => array(
			array(
				'element'  => '[data-scheme="dark"]',
				'property' => '--cs-color-button',
				'context'  => array( 'editor', 'front' ),
			),
		),
		'active_callback' => array(
			array(
				'setting'  => 'misc_dark_mode',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'color',
		'settings'        => 'color_button_contrast_dark',
		'label'           => esc_html__( 'Button Color', 'newsblock' ),
		'section'         => 'design',
		'priority'        => 10,
		'default'         => '#FFFFFF',
		'choices'         => array(
			'alpha' => true,
		),
		'output'          => array(
			array(
				'element'  => '[data-scheme="dark"]',
				'property' => '--cs-color-button-contrast',
				'context'  => array( 'editor', 'front' ),
			),
		),
		'active_callback' => array(
			array(
				'setting'  => 'misc_dark_mode',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'color',
		'settings'        => 'color_button_hover_dark',
		'label'           => esc_html__( 'Button Hover Background', 'newsblock' ),
		'section'         => 'design',
		'priority'        => 10,
		'default'         => '#242424',
		'choices'         => array(
			'alpha' => true,
		),
		'output'          => array(
			array(
				'element'  => '[data-scheme="dark"]',
				'property' => '--cs-color-button-hover',
				'context'  => array( 'editor', 'front' ),
			),
		),
		'active_callback' => array(
			array(
				'setting'  => 'misc_dark_mode',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'color',
		'settings'        => 'color_button_hover_contrast_dark',
		'label'           => esc_html__( 'Button Hover Color', 'newsblock' ),
		'section'         => 'design',
		'priority'        => 10,
		'default'         => '#FFFFFF',
		'choices'         => array(
			'alpha' => true,
		),
		'output'          => array(
			array(
				'element'  => '[data-scheme="dark"]',
				'property' => '--cs-color-button-hover-contrast',
				'context'  => array( 'editor', 'front' ),
			),
		),
		'active_callback' => array(
			array(
				'setting'  => 'misc_dark_mode',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'color',
		'settings' => 'color_overlay_dark',
		'label'    => esc_html__( 'Overlay Color', 'newsblock' ),
		'section'  => 'design',
		'priority' => 10,
		'default'  => 'rgba(0,0,0,0.25)',
		'choices'  => array(
			'alpha' => true,
		),
		'output'   => array(
			array(
				'element'  => '[data-scheme="dark"]',
				'property' => '--cs-color-overlay-background',
				'context'  => array( 'editor', 'front' ),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'collapsible',
		'settings' => 'design_collapsible_border_radius',
		'section'  => 'design',
		'label'    => esc_html__( 'Border Radius', 'newsblock' ),
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'              => 'dimension',
		'settings'          => 'design_common_border_radius',
		'label'             => esc_html__( 'Common Border Radius', 'newsblock' ),
		'description'       => esc_html__( 'Used on containers and layers. For example: 10px. If the input is empty, original value will be used.', 'newsblock' ),
		'section'           => 'design',
		'default'           => '0',
		'priority'          => 10,
		'sanitize_callback' => 'esc_html',
		'output'            => array(
			array(
				'element'  => ':root',
				'property' => '--cs-common-border-radius',
				'context'  => array( 'editor', 'front' ),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'              => 'dimension',
		'settings'          => 'design_primary_border_radius',
		'label'             => esc_html__( 'Primary Border Radius', 'newsblock' ),
		'description'       => esc_html__( 'Used on all primary elements. For example: 10px. If the input is empty, original value will be used.', 'newsblock' ),
		'section'           => 'design',
		'default'           => '0px',
		'priority'          => 10,
		'sanitize_callback' => 'esc_html',
		'output'            => array(
			array(
				'element'  => ':root',
				'property' => '--cs-primary-border-radius',
				'context'  => array( 'editor', 'front' ),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'              => 'dimension',
		'settings'          => 'design_secondary_border_radius',
		'label'             => esc_html__( 'Secondary Border Radius', 'newsblock' ),
		'description'       => esc_html__( 'Used on square elements. For example: 10px. If the input is empty, original value will be used.', 'newsblock' ),
		'section'           => 'design',
		'default'           => '50%',
		'priority'          => 10,
		'sanitize_callback' => 'esc_html',
		'output'            => array(
			array(
				'element'  => ':root',
				'property' => '--cs-secondary-border-radius',
				'context'  => array( 'editor', 'front' ),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'              => 'dimension',
		'settings'          => 'design_styled_category_border_radius',
		'label'             => esc_html__( 'Styled Category Border Radius', 'newsblock' ),
		'description'       => esc_html__( 'Used on styled categories. For example: 10px. If the input is empty, original value will be used.', 'newsblock' ),
		'section'           => 'design',
		'default'           => '0',
		'priority'          => 10,
		'sanitize_callback' => 'esc_html',
		'output'            => array(
			array(
				'element'  => ':root',
				'property' => '--cs-styled-category-border-radius',
				'context'  => array( 'editor', 'front' ),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'              => 'dimension',
		'settings'          => 'design_primary_image_border_radius',
		'label'             => esc_html__( 'Primary Image Border Radius', 'newsblock' ),
		'description'       => esc_html__( 'Used on post thumbnail. For example: 10px. If the input is empty, original value will be used.', 'newsblock' ),
		'section'           => 'design',
		'default'           => '0px',
		'priority'          => 10,
		'sanitize_callback' => 'esc_html',
		'output'            => array(
			array(
				'element'  => ':root',
				'property' => '--cs-image-border-radius',
				'context'  => array( 'editor', 'front' ),
			),
		),
	)
);
