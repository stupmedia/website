<?php
/**
 * Archive Settings
 *
 * @package Newsblock
 */

CSCO_Kirki::add_section(
	'archive_settings',
	array(
		'title'    => esc_html__( 'Archive Settings', 'newsblock' ),
		'priority' => 50,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'radio',
		'settings' => 'archive_layout',
		'label'    => esc_html__( 'Layout', 'newsblock' ),
		'section'  => 'archive_settings',
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
		'settings' => 'archive_sidebar',
		'label'    => esc_html__( 'Sidebar', 'newsblock' ),
		'section'  => 'archive_settings',
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
		'settings'        => 'archive_columns_desktop',
		'label'           => esc_html__( 'Number of Columns Desktop', 'newsblock' ),
		'section'         => 'archive_settings',
		'default'         => 2,
		'choices'         => array(
			'min'  => 1,
			'max'  => 6,
			'step' => 1,
		),
		'priority'        => 10,
		'output'          => array(
			array(
				'element'  => '.cs-posts-area__archive.cs-posts-area__grid',
				'property' => '--cs-posts-area-grid-columns',
				'suffix'   => '!important',
			),
		),
		'active_callback' => array(
			array(
				'setting'  => 'archive_layout',
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
		'settings'        => 'archive_columns_tablet',
		'label'           => esc_html__( 'Number of Columns Tablet', 'newsblock' ),
		'section'         => 'archive_settings',
		'default'         => 2,
		'choices'         => array(
			'min'  => 1,
			'max'  => 6,
			'step' => 1,
		),
		'priority'        => 10,
		'output'          => array(
			array(
				'element'     => '.cs-posts-area__archive.cs-posts-area__grid',
				'property'    => '--cs-posts-area-grid-columns',
				'media_query' => '@media (max-width: 1019px)',
				'suffix'      => '!important',
			),
		),
		'active_callback' => array(
			array(
				'setting'  => 'archive_layout',
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
		'settings'        => 'archive_columns_mobile',
		'label'           => esc_html__( 'Number of Columns Mobile', 'newsblock' ),
		'section'         => 'archive_settings',
		'default'         => 1,
		'choices'         => array(
			'min'  => 1,
			'max'  => 6,
			'step' => 1,
		),
		'priority'        => 10,
		'output'          => array(
			array(
				'element'     => '.cs-posts-area__archive.cs-posts-area__grid',
				'property'    => '--cs-posts-area-grid-columns',
				'media_query' => '@media (max-width: 599px)',
				'suffix'      => '!important',
			),
		),
		'active_callback' => array(
			array(
				'setting'  => 'archive_layout',
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
		'settings' => 'archive_borders_between_posts',
		'label'    => esc_html__( 'Display borders between posts', 'newsblock' ),
		'section'  => 'archive_settings',
		'default'  => true,
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'select',
		'settings'        => 'archive_image_orientation',
		'label'           => esc_html__( 'Image Orientation', 'newsblock' ),
		'section'         => 'archive_settings',
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
				'setting'  => 'archive_layout',
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
		'settings'        => 'archive_image_size',
		'label'           => esc_html__( 'Image Size', 'newsblock' ),
		'section'         => 'archive_settings',
		'default'         => 'csco-thumbnail',
		'choices'         => csco_get_list_available_image_sizes(),
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'archive_layout',
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
		'settings'        => 'archive_image_width',
		'label'           => esc_html__( 'Image Width', 'newsblock' ),
		'section'         => 'archive_settings',
		'default'         => 'half',
		'choices'         => array(
			'one-third' => esc_html__( 'One Third', 'newsblock' ),
			'half'      => esc_html__( 'Half', 'newsblock' ),
		),
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'archive_layout',
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
		'settings' => 'archive_post_meta',
		'label'    => esc_html__( 'Post Meta', 'newsblock' ),
		'section'  => 'archive_settings',
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
		'settings'        => 'archive_media_preview',
		'label'           => esc_html__( 'Post Preview Image Size', 'newsblock' ),
		'section'         => 'archive_settings',
		'default'         => 'cropped',
		'priority'        => 10,
		'choices'         => array(
			'cropped'   => esc_html__( 'Display Cropped Image', 'newsblock' ),
			'uncropped' => esc_html__( 'Display Preview in Original Ratio', 'newsblock' ),
		),
		'active_callback' => array(
			array(
				'setting'  => 'archive_layout',
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
		'settings'        => 'archive_summary',
		'label'           => esc_html__( 'Full Post Summary', 'newsblock' ),
		'section'         => 'archive_settings',
		'default'         => 'summary',
		'priority'        => 10,
		'choices'         => array(
			'summary' => esc_html__( 'Use Excerpts', 'newsblock' ),
			'content' => esc_html__( 'Use Read More Tag', 'newsblock' ),
		),
		'active_callback' => array(
			array(
				array(
					'setting'  => 'archive_layout',
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
		'settings'        => 'archive_more_button',
		'label'           => esc_html__( 'Display read more button', 'newsblock' ),
		'section'         => 'archive_settings',
		'default'         => true,
		'priority'        => 10,
		'active_callback' => array(
			array(
				array(
					'setting'  => 'archive_layout',
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
		'settings'        => 'archive_view_link',
		'label'           => esc_html__( 'Display view link', 'newsblock' ),
		'section'         => 'archive_settings',
		'default'         => true,
		'priority'        => 10,
		'active_callback' => array(
			array(
				array(
					'setting'  => 'archive_layout',
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
		'settings' => 'archive_pagination_type',
		'label'    => esc_html__( 'Pagination', 'newsblock' ),
		'section'  => 'archive_settings',
		'default'  => 'load-more',
		'priority' => 10,
		'choices'  => array(
			'standard'  => esc_html__( 'Standard', 'newsblock' ),
			'load-more' => esc_html__( 'Load More Button', 'newsblock' ),
			'infinite'  => esc_html__( 'Infinite Load', 'newsblock' ),
		),
	)
);
