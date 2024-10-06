<?php
/**
 * Page Settings
 *
 * @package Newsblock
 */

CSCO_Kirki::add_section(
	'page_settings',
	array(
		'title'    => esc_html__( 'Page Settings', 'newsblock' ),
		'priority' => 50,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'radio',
		'settings' => 'page_sidebar',
		'label'    => esc_html__( 'Default Sidebar', 'newsblock' ),
		'section'  => 'page_settings',
		'default'  => 'right',
		'priority' => 10,
		'choices'  => array(
			'right'    => esc_html__( 'Right Sidebar', 'newsblock' ),
			'left'     => esc_html__( 'Left Sidebar', 'newsblock' ),
			'disabled' => esc_html__( 'No Sidebar', 'newsblock' ),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'radio',
		'settings' => 'page_header_type',
		'label'    => esc_html__( 'Page Header Type', 'newsblock' ),
		'section'  => 'page_settings',
		'default'  => 'simple',
		'priority' => 10,
		'choices'  => array(
			'simple'        => esc_html__( 'Simple', 'newsblock' ),
			'standard'      => esc_html__( 'Standard', 'newsblock' ),
			'overlay'       => esc_html__( 'Overlay', 'newsblock' ),
			'large'         => esc_html__( 'Large', 'newsblock' ),
			'large_overlay' => esc_html__( 'Large Overlay', 'newsblock' ),
			'title'         => esc_html__( 'Page Title Only', 'newsblock' ),
			'none'          => esc_html__( 'None', 'newsblock' ),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'radio',
		'settings'        => 'page_media_preview',
		'label'           => esc_html__( 'Standard Page Header Preview', 'newsblock' ),
		'section'         => 'page_settings',
		'default'         => 'cropped',
		'priority'        => 10,
		'choices'         => array(
			'cropped'   => esc_html__( 'Display Cropped Image', 'newsblock' ),
			'uncropped' => esc_html__( 'Display Preview in Original Ratio', 'newsblock' ),
		),
		'active_callback' => array(
			array(
				'setting'  => 'page_header_type',
				'operator' => '==',
				'value'    => 'standard',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'checkbox',
		'settings' => 'page_comments_simple',
		'label'    => esc_html__( 'Display comments without the View Comments button', 'newsblock' ),
		'section'  => 'page_settings',
		'default'  => false,
		'priority' => 10,
	)
);
