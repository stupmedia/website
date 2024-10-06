<?php
/**
 * Homepage Settings
 *
 * @package Newsblock
 */

/**
 * Removes default WordPress Static Front Page section
 * and re-adds it in our own panel with the same parameters.
 *
 * @param object $wp_customize Instance of the WP_Customize_Manager class.
 */
function csco_reorder_customizer_settings( $wp_customize ) {

	// Get current front page section parameters.
	$static_front_page = $wp_customize->get_section( 'static_front_page' );

	// Remove existing section, so that we can later re-add it to our panel.
	$wp_customize->remove_section( 'static_front_page' );

	// Re-add static front page section with a new name, but same description.
	$wp_customize->add_section(
		'static_front_page',
		array(
			'title'           => esc_html__( 'Static Front Page', 'newsblock' ),
			'priority'        => 20,
			'description'     => $static_front_page->description,
			'panel'           => 'home_panel',
			'active_callback' => $static_front_page->active_callback,
		)
	);
}
add_action( 'customize_register', 'csco_reorder_customizer_settings' );

CSCO_Kirki::add_panel(
	'home_panel',
	array(
		'title'    => esc_html__( 'Homepage Settings', 'newsblock' ),
		'priority' => 50,
	)
);

CSCO_Kirki::add_section(
	'home_settings',
	array(
		'title'    => esc_html__( 'Homepage Layout', 'newsblock' ),
		'priority' => 15,
		'panel'    => 'home_panel',
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'radio',
		'settings' => 'home_layout',
		'label'    => esc_html__( 'Layout', 'newsblock' ),
		'section'  => 'home_settings',
		'default'  => 'list',
		'priority' => 10,
		'choices'  => array(
			'full' => esc_html__( 'Full Post Layout', 'newsblock' ),
			'list' => esc_html__( 'List Layout', 'newsblock' ),
			'grid' => esc_html__( 'Grid Layout', 'newsblock' ),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'radio',
		'settings' => 'home_sidebar',
		'label'    => esc_html__( 'Sidebar', 'newsblock' ),
		'section'  => 'home_settings',
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
		'type'            => 'slider',
		'settings'        => 'home_columns_desktop',
		'label'           => esc_html__( 'Number of Columns Desktop', 'newsblock' ),
		'section'         => 'home_settings',
		'default'         => 2,
		'choices'         => array(
			'min'  => 1,
			'max'  => 6,
			'step' => 1,
		),
		'priority'        => 10,
		'output'          => array(
			array(
				'element'  => '.cs-posts-area__home.cs-posts-area__grid',
				'property' => '--cs-posts-area-grid-columns',
				'suffix'   => '!important',
			),
		),
		'active_callback' => array(
			array(
				'setting'  => 'home_layout',
				'operator' => '==',
				'value'    => 'grid',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'slider',
		'settings'        => 'home_columns_tablet',
		'label'           => esc_html__( 'Number of Columns Tablet', 'newsblock' ),
		'section'         => 'home_settings',
		'default'         => 2,
		'choices'         => array(
			'min'  => 1,
			'max'  => 6,
			'step' => 1,
		),
		'priority'        => 10,
		'output'          => array(
			array(
				'element'     => '.cs-posts-area__home.cs-posts-area__grid',
				'property'    => '--cs-posts-area-grid-columns',
				'media_query' => '@media (max-width: 1019px)',
				'suffix'      => '!important',
			),
		),
		'active_callback' => array(
			array(
				'setting'  => 'home_layout',
				'operator' => '==',
				'value'    => 'grid',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'slider',
		'settings'        => 'home_columns_mobile',
		'label'           => esc_html__( 'Number of Columns Mobile', 'newsblock' ),
		'section'         => 'home_settings',
		'default'         => 1,
		'choices'         => array(
			'min'  => 1,
			'max'  => 6,
			'step' => 1,
		),
		'priority'        => 10,
		'output'          => array(
			array(
				'element'     => '.cs-posts-area__home.cs-posts-area__grid',
				'property'    => '--cs-posts-area-grid-columns',
				'media_query' => '@media (max-width: 599px)',
				'suffix'      => '!important',
			),
		),
		'active_callback' => array(
			array(
				'setting'  => 'home_layout',
				'operator' => '==',
				'value'    => 'grid',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'checkbox',
		'settings' => 'home_borders_between_posts',
		'label'    => esc_html__( 'Display borders between posts', 'newsblock' ),
		'section'  => 'home_settings',
		'default'  => true,
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'select',
		'settings'        => 'home_image_orientation',
		'label'           => esc_html__( 'Image Orientation', 'newsblock' ),
		'section'         => 'home_settings',
		'default'         => 'original',
		'choices'         => array(
			'original'       => esc_html__( 'Original', 'newsblock' ),
			'landscape'      => esc_html__( 'Landscape 4:3', 'newsblock' ),
			'landscape-3-2'  => esc_html__( 'Landscape 3:2', 'newsblock' ),
			'landscape-16-9' => esc_html__( 'Landscape 16:9', 'newsblock' ),
			'portrait'       => esc_html__( 'Portrait 3:4', 'newsblock' ),
			'portrait-2-3'   => esc_html__( 'Portrait 2:3', 'newsblock' ),
			'square'         => esc_html__( 'Square', 'newsblock' ),
		),
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'home_layout',
				'operator' => '!=',
				'value'    => 'full',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'select',
		'settings'        => 'home_image_size',
		'label'           => esc_html__( 'Image Size', 'newsblock' ),
		'section'         => 'home_settings',
		'default'         => 'csco-thumbnail',
		'choices'         => csco_get_list_available_image_sizes(),
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'home_layout',
				'operator' => '!=',
				'value'    => 'full',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'select',
		'settings'        => 'home_image_width',
		'label'           => esc_html__( 'Image Width', 'newsblock' ),
		'section'         => 'home_settings',
		'default'         => 'half',
		'choices'         => array(
			'one-third' => esc_html__( 'One Third', 'newsblock' ),
			'half'      => esc_html__( 'Half', 'newsblock' ),
		),
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'home_layout',
				'operator' => '==',
				'value'    => 'list',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'multicheck',
		'settings' => 'home_post_meta',
		'label'    => esc_html__( 'Post Meta', 'newsblock' ),
		'section'  => 'home_settings',
		'default'  => array( 'category', 'author', 'date', 'views', 'reading_time' ),
		'priority' => 10,
		'choices'  => apply_filters(
			'csco_post_meta_choices',
			array(
				'category'     => esc_html__( 'Category', 'newsblock' ),
				'author'       => esc_html__( 'Author', 'newsblock' ),
				'date'         => esc_html__( 'Date', 'newsblock' ),
				'views'        => esc_html__( 'Views', 'newsblock' ),
				'shares'       => esc_html__( 'Shares', 'newsblock' ),
				'comments'     => esc_html__( 'Comments', 'newsblock' ),
				'reading_time' => esc_html__( 'Reading Time', 'newsblock' ),
			)
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'radio',
		'settings'        => 'home_media_preview',
		'label'           => esc_html__( 'Post Preview Image Size', 'newsblock' ),
		'section'         => 'home_settings',
		'default'         => 'cropped',
		'priority'        => 10,
		'choices'         => array(
			'cropped'   => esc_html__( 'Display Cropped Image', 'newsblock' ),
			'uncropped' => esc_html__( 'Display Preview in Original Ratio', 'newsblock' ),
		),
		'active_callback' => array(
			array(
				'setting'  => 'home_layout',
				'operator' => '==',
				'value'    => 'full',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'radio',
		'settings'        => 'home_summary',
		'label'           => esc_html__( 'Full Post Summary', 'newsblock' ),
		'section'         => 'home_settings',
		'default'         => 'summary',
		'priority'        => 10,
		'choices'         => array(
			'summary' => esc_html__( 'Use Excerpts', 'newsblock' ),
			'content' => esc_html__( 'Use Read More Tag', 'newsblock' ),
		),
		'active_callback' => array(
			array(
				array(
					'setting'  => 'home_layout',
					'operator' => '==',
					'value'    => 'full',
				),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'checkbox',
		'settings'        => 'home_more_button',
		'label'           => esc_html__( 'Display read more button', 'newsblock' ),
		'section'         => 'home_settings',
		'default'         => true,
		'priority'        => 10,
		'active_callback' => array(
			array(
				array(
					'setting'  => 'home_layout',
					'operator' => '==',
					'value'    => 'full',
				),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'checkbox',
		'settings'        => 'home_view_link',
		'label'           => esc_html__( 'Display view link', 'newsblock' ),
		'section'         => 'home_settings',
		'default'         => true,
		'priority'        => 10,
		'active_callback' => array(
			array(
				array(
					'setting'  => 'home_layout',
					'operator' => '!=',
					'value'    => 'full',
				),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'radio',
		'settings' => 'home_pagination_type',
		'label'    => esc_html__( 'Pagination', 'newsblock' ),
		'section'  => 'home_settings',
		'default'  => 'load-more',
		'priority' => 10,
		'choices'  => array(
			'standard'  => esc_html__( 'Standard', 'newsblock' ),
			'load-more' => esc_html__( 'Load More Button', 'newsblock' ),
			'infinite'  => esc_html__( 'Infinite Load', 'newsblock' ),
		),
	)
);
