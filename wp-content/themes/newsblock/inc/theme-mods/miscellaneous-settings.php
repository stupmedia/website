<?php
/**
 * Miscellaneous Settings
 *
 * @package Newsblock
 */

CSCO_Kirki::add_section(
	'miscellaneous',
	array(
		'title'    => esc_html__( 'Miscellaneous Settings', 'newsblock' ),
		'priority' => 60,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'checkbox',
		'settings' => 'misc_dark_mode',
		'label'    => esc_html__( 'Enable Dark Mode', 'newsblock' ),
		'section'  => 'miscellaneous',
		'default'  => true,
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'checkbox',
		'settings' => 'misc_published_date',
		'label'    => esc_html__( 'Display published date instead of modified date', 'newsblock' ),
		'section'  => 'miscellaneous',
		'default'  => true,
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'text',
		'settings' => 'misc_search_placeholder',
		'label'    => esc_html__( 'Search Form Placeholder', 'newsblock' ),
		'section'  => 'miscellaneous',
		'default'  => esc_html__( 'Enter your search topic', 'newsblock' ),
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'text',
		'settings' => 'misc_label_more',
		'label'    => esc_html__( '"Read More" Link / Button Label', 'newsblock' ),
		'section'  => 'miscellaneous',
		'default'  => esc_html__( 'Read More', 'newsblock' ),
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'radio',
		'settings' => 'misc_classic_gallery_alignment',
		'label'    => esc_html__( 'Alignment of Galleries in Classic Block', 'newsblock' ),
		'section'  => 'miscellaneous',
		'default'  => 'default',
		'priority' => 10,
		'choices'  => array(
			'default' => esc_html__( 'Default', 'newsblock' ),
			'wide'    => esc_html__( 'Wide', 'newsblock' ),
			'large'   => esc_html__( 'Large', 'newsblock' ),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'checkbox',
		'settings' => 'misc_sticky_sidebar',
		'label'    => esc_html__( 'Sticky Sidebar', 'newsblock' ),
		'section'  => 'miscellaneous',
		'default'  => true,
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'radio',
		'settings'        => 'misc_sticky_sidebar_method',
		'label'           => esc_html__( 'Sticky Method', 'newsblock' ),
		'section'         => 'miscellaneous',
		'default'         => 'cs-stick-to-top',
		'priority'        => 10,
		'choices'         => array(
			'cs-stick-to-top'    => esc_html__( 'Sidebar top edge', 'newsblock' ),
			'cs-stick-to-bottom' => esc_html__( 'Sidebar bottom edge', 'newsblock' ),
			'cs-stick-last'      => esc_html__( 'Last widget top edge', 'newsblock' ),
		),
		'active_callback' => array(
			array(
				'setting'  => 'misc_sticky_sidebar',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'        => 'radio',
		'settings'    => 'webfonts_load_method',
		'label'       => esc_html__( 'Webfonts Load Method', 'newsblock' ),
		'description' => esc_html__( 'Please', 'newsblock' ) . ' <a href="' . add_query_arg( array( 'action' => 'kirki-reset-cache' ), get_site_url() ) . '" target="_blank">' . esc_html__( 'reset font cache', 'newsblock' ) . '</a> ' . esc_html__( 'after saving.', 'newsblock' ),
		'section'     => 'miscellaneous',
		'default'     => 'async',
		'priority'    => 10,
		'choices'     => array(
			'async' => esc_html__( 'Asynchronous', 'newsblock' ),
			'link'  => esc_html__( 'Render-Blocking', 'newsblock' ),
		),
	)
);
