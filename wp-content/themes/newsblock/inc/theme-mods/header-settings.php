<?php
/**
 * Header Settings
 *
 * @package Newsblock
 */

CSCO_Kirki::add_section(
	'header',
	array(
		'title'    => esc_html__( 'Header Settings', 'newsblock' ),
		'priority' => 40,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'        => 'collapsible',
		'settings'    => 'header_collapsible_common',
		'section'     => 'header',
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
		'type'     => 'radio',
		'settings' => 'header_layout',
		'label'    => esc_html__( 'Layout', 'newsblock' ),
		'section'  => 'header',
		'default'  => 'cs-header-four',
		'priority' => 10,
		'choices'  => array(
			'cs-header-one'   => esc_html__( 'Header 1', 'newsblock' ),
			'cs-header-two'   => esc_html__( 'Header 2', 'newsblock' ),
			'cs-header-three' => esc_html__( 'Header 3', 'newsblock' ),
			'cs-header-four'  => esc_html__( 'Header 4', 'newsblock' ),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'dimension',
		'settings'        => 'header_topbar_height',
		'label'           => esc_html__( 'Topbar Height', 'newsblock' ),
		'section'         => 'header',
		'default'         => '90px',
		'priority'        => 10,
		'output'          => array(
			array(
				'element'  => ':root',
				'property' => '--cs-header-topbar-height',
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
		'type'            => 'dimension',
		'settings'        => 'header_initial_height',
		'label'           => esc_html__( 'Header Initial Height', 'newsblock' ),
		'section'         => 'header',
		'default'         => '100px',
		'priority'        => 10,
		'output'          => array(
			array(
				'element'  => ':root',
				'property' => '--cs-header-initial-height',
			),
		),
		'active_callback' => array(
			array(
				'setting'  => 'header_layout',
				'operator' => '==',
				'value'    => 'cs-header-four',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'dimension',
		'settings' => 'header_height',
		'label'    => esc_html__( 'Header Height', 'newsblock' ),
		'section'  => 'header',
		'default'  => '60px',
		'priority' => 10,
		'output'   => array(
			array(
				'element'  => ':root',
				'property' => '--cs-header-height',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'        => 'checkbox',
		'settings'    => 'navbar_sticky',
		'label'       => esc_html__( 'Make navigation bar sticky', 'newsblock' ),
		'description' => esc_html__( 'Enabling this option will make navigation bar visible when scrolling.', 'newsblock' ),
		'section'     => 'header',
		'default'     => true,
		'priority'    => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'checkbox',
		'settings'        => 'navbar_smart_sticky',
		'label'           => esc_html__( 'Enable the smart sticky feature', 'newsblock' ),
		'description'     => esc_html__( 'Enabling this option will reveal navigation bar when scrolling up and hide it when scrolling down.', 'newsblock' ),
		'section'         => 'header',
		'default'         => true,
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'navbar_sticky',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'              => 'textarea',
		'settings'          => 'header_textarea',
		'label'             => esc_html__( 'Header Text', 'newsblock' ),
		'section'           => 'header',
		'default'           => '',
		'priority'          => 10,
		'sanitize_callback' => 'wp_kses_post',
		'active_callback'   => array(
			array(
				'setting'  => 'header_layout',
				'operator' => '==',
				'value'    => 'cs-header-four',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'checkbox',
		'settings' => 'header_offcanvas',
		'label'    => esc_html__( 'Display offcanvas toggle button', 'newsblock' ),
		'section'  => 'header',
		'default'  => true,
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'checkbox',
		'settings' => 'header_navigation_menu',
		'label'    => esc_html__( 'Display navigation menu', 'newsblock' ),
		'section'  => 'header',
		'default'  => true,
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'collapsible',
		'settings' => 'header_collapsible_search',
		'section'  => 'header',
		'label'    => esc_html__( 'Search', 'newsblock' ),
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'checkbox',
		'settings' => 'header_search_button',
		'label'    => esc_html__( 'Display search button', 'newsblock' ),
		'section'  => 'header',
		'default'  => true,
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'checkbox',
		'settings'        => 'header_search_posts',
		'label'           => esc_html__( 'Display search posts', 'newsblock' ),
		'description'     => esc_html__( 'Display posts in popup search form.', 'newsblock' ),
		'section'         => 'header',
		'default'         => true,
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'header_search_button',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'text',
		'settings'        => 'header_search_posts_heading',
		'label'           => esc_html__( 'Heading of Posts', 'newsblock' ),
		'section'         => 'header',
		'default'         => esc_html__( 'The Latest', 'newsblock' ),
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'header_search_button',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'header_search_posts',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'select',
		'settings'        => 'header_search_image_orientation',
		'label'           => esc_html__( 'Image Orientation', 'newsblock' ),
		'section'         => 'header',
		'default'         => 'square',
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
				'setting'  => 'header_search_button',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'header_search_posts',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'select',
		'settings'        => 'header_search_image_size',
		'label'           => esc_html__( 'Image Size', 'newsblock' ),
		'section'         => 'header',
		'default'         => 'csco-small',
		'choices'         => csco_get_list_available_image_sizes(),
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'header_search_button',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'header_search_posts',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'dimension',
		'settings'        => 'header_search_image_border_radius',
		'label'           => esc_html__( 'Image Border Radius', 'newsblock' ),
		'section'         => 'header',
		'default'         => '50%',
		'priority'        => 10,
		'output'          => array(
			array(
				'element'  => '.cs-search__posts',
				'property' => '--cs-image-border-radius',
				'suffix'   => '!important',
			),
		),
		'active_callback' => array(
			array(
				'setting'  => 'header_search_button',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'header_search_posts',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'multicheck',
		'settings'        => 'header_search_posts_meta',
		'label'           => esc_html__( 'Post Meta', 'newsblock' ),
		'section'         => 'header',
		'default'         => array( 'views', 'shares' ),
		'priority'        => 10,
		'choices'         => apply_filters(
			'csco_post_meta_choices',
			array(
				'category'     => esc_html__( 'Category', 'newsblock' ),
				'date'         => esc_html__( 'Date', 'newsblock' ),
				'author'       => esc_html__( 'Author', 'newsblock' ),
				'views'        => esc_html__( 'Views', 'newsblock' ),
				'shares'       => esc_html__( 'Shares', 'newsblock' ),
				'comments'     => esc_html__( 'Comments', 'newsblock' ),
				'reading_time' => esc_html__( 'Reading Time', 'newsblock' ),
			)
		),
		'active_callback' => array(
			array(
				'setting'  => 'header_search_button',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'header_search_posts',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'radio',
		'settings'        => 'header_search_posts_orderby',
		'label'           => esc_html__( 'Order posts by', 'newsblock' ),
		'section'         => 'header',
		'default'         => 'date',
		'priority'        => 10,
		'choices'         => array(
			'date' => esc_html__( 'Date', 'newsblock' ),
			'rand' => esc_html__( 'Random', 'newsblock' ),
			'name' => esc_html__( 'Name', 'newsblock' ),
			'id'   => esc_html__( 'ID', 'newsblock' ),
		),
		'active_callback' => array(
			array(
				'setting'  => 'header_search_button',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'header_search_posts',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'radio',
		'settings'        => 'header_search_posts_order',
		'label'           => esc_html__( 'Order posts', 'newsblock' ),
		'section'         => 'header',
		'default'         => 'DESC',
		'priority'        => 10,
		'choices'         => array(
			'ASC'  => esc_html__( 'ASC', 'newsblock' ),
			'DESC' => esc_html__( 'DESC', 'newsblock' ),
		),
		'active_callback' => array(
			array(
				'setting'  => 'header_search_button',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'header_search_posts',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'checkbox',
		'settings'        => 'header_search_tags',
		'label'           => esc_html__( 'Display search tags', 'newsblock' ),
		'description'     => esc_html__( 'Display tags in popup search form.', 'newsblock' ),
		'section'         => 'header',
		'default'         => true,
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'header_search_button',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'number',
		'settings'        => 'header_search_tags_number',
		'label'           => esc_html__( 'Maximum Number of Tags', 'newsblock' ),
		'section'         => 'header',
		'default'         => 10,
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'header_search_button',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'header_search_tags',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'radio',
		'settings'        => 'header_search_tags_orderby',
		'label'           => esc_html__( 'Order tags by', 'newsblock' ),
		'section'         => 'header',
		'default'         => 'date',
		'priority'        => 10,
		'choices'         => array(
			'date'  => esc_html__( 'Date', 'newsblock' ),
			'count' => esc_html__( 'Count of Posts', 'newsblock' ),
			'name'  => esc_html__( 'Name', 'newsblock' ),
			'id'    => esc_html__( 'ID', 'newsblock' ),
		),
		'active_callback' => array(
			array(
				'setting'  => 'header_search_button',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'header_search_tags',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'radio',
		'settings'        => 'header_search_tags_order',
		'label'           => esc_html__( 'Order tags', 'newsblock' ),
		'section'         => 'header',
		'default'         => 'DESC',
		'priority'        => 10,
		'choices'         => array(
			'ASC'  => esc_html__( 'ASC', 'newsblock' ),
			'DESC' => esc_html__( 'DESC', 'newsblock' ),
		),
		'active_callback' => array(
			array(
				'setting'  => 'header_search_button',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'header_search_tags',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

if ( csco_powerkit_module_enabled( 'social_links' ) ) {
	CSCO_Kirki::add_field(
		'csco_theme_mod',
		array(
			'type'     => 'collapsible',
			'settings' => 'header_collapsible_social_links',
			'section'  => 'header',
			'label'    => esc_html__( 'Social Links', 'newsblock' ),
			'priority' => 10,
		)
	);

	CSCO_Kirki::add_field(
		'csco_theme_mod',
		array(
			'type'     => 'checkbox',
			'settings' => 'header_social_links',
			'label'    => esc_html__( 'Display social links', 'newsblock' ),
			'section'  => 'header',
			'default'  => false,
			'priority' => 10,
		)
	);

	CSCO_Kirki::add_field(
		'csco_theme_mod',
		array(
			'type'            => 'select',
			'settings'        => 'header_social_links_scheme',
			'label'           => esc_html__( 'Color scheme', 'newsblock' ),
			'section'         => 'header',
			'default'         => 'light',
			'priority'        => 10,
			'choices'         => array(
				'light' => esc_html__( 'Light', 'newsblock' ),
				'bold'  => esc_html__( 'Bold', 'newsblock' ),
			),
			'active_callback' => array(
				array(
					'setting'  => 'header_social_links',
					'operator' => '==',
					'value'    => true,
				),
			),
		)
	);

	CSCO_Kirki::add_field(
		'csco_theme_mod',
		array(
			'type'            => 'number',
			'settings'        => 'header_social_links_maximum',
			'label'           => esc_html__( 'Maximum Number of Social Links', 'newsblock' ),
			'section'         => 'header',
			'default'         => 3,
			'priority'        => 10,
			'active_callback' => array(
				array(
					'setting'  => 'header_social_links',
					'operator' => '==',
					'value'    => true,
				),
			),
		)
	);

	CSCO_Kirki::add_field(
		'csco_theme_mod',
		array(
			'type'            => 'checkbox',
			'settings'        => 'header_social_links_counts',
			'label'           => esc_html__( 'Display social counts', 'newsblock' ),
			'section'         => 'header',
			'default'         => true,
			'priority'        => 10,
			'active_callback' => array(
				array(
					'setting'  => 'header_social_links',
					'operator' => '==',
					'value'    => true,
				),
			),
		)
	);
}

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'collapsible',
		'settings' => 'header_collapsible_button',
		'section'  => 'header',
		'label'    => esc_html__( 'Custom Button', 'newsblock' ),
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'text',
		'settings' => 'header_button_link',
		'label'    => esc_html__( 'Button Link', 'newsblock' ),
		'section'  => 'header',
		'default'  => '',
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'              => 'text',
		'settings'          => 'header_button_label',
		'label'             => esc_html__( 'Button Label', 'newsblock' ),
		'section'           => 'header',
		'default'           => '<i class="cs-icon cs-icon-mail"></i>' . esc_html__( 'Newsletter', 'newsblock' ),
		'priority'          => 10,
		'sanitize_callback' => 'wp_kses_post',
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'collapsible',
		'settings' => 'header_collapsible_multi_column',
		'section'  => 'header',
		'label'    => esc_html__( 'Multi-Column Sub-Menu', 'newsblock' ),
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'checkbox',
		'settings' => 'header_multi_column_display',
		'label'    => esc_html__( 'Display multi-column sub-menu', 'newsblock' ),
		'section'  => 'header',
		'default'  => true,
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'collapsible',
		'settings' => 'header_collapsible_single_column',
		'section'  => 'header',
		'label'    => esc_html__( 'Single-Column Sub-Menu', 'newsblock' ),
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'checkbox',
		'settings' => 'header_single_column_display',
		'label'    => esc_html__( 'Display single-column sub-menu', 'newsblock' ),
		'section'  => 'header',
		'default'  => true,
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'text',
		'settings'        => 'header_single_column_title',
		'label'           => esc_html__( 'Dropdown Title', 'newsblock' ),
		'section'         => 'header',
		'default'         => esc_html__( 'Follow', 'newsblock' ),
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'header_single_column_display',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'            => 'image',
		'settings'        => 'header_single_column_image',
		'label'           => esc_html__( 'Background Image', 'newsblock' ),
		'section'         => 'header',
		'priority'        => 10,
		'choices'         => array(
			'save_as' => 'id',
		),
		'active_callback' => array(
			array(
				'setting'  => 'header_single_column_display',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'collapsible',
		'settings' => 'header_collapsible_mega_menu',
		'section'  => 'header',
		'label'    => esc_html__( 'Mega Menu', 'newsblock' ),
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'select',
		'settings' => 'mega_menu_image_orientation',
		'label'    => esc_html__( 'Image Orientation', 'newsblock' ),
		'section'  => 'header',
		'default'  => 'original',
		'choices'  => array(
			'original'       => esc_html__( 'Original', 'newsblock' ),
			'landscape'      => esc_html__( 'Landscape 4:3', 'newsblock' ),
			'landscape-3-2'  => esc_html__( 'Landscape 3:2', 'newsblock' ),
			'landscape-16-9' => esc_html__( 'Landscape 16:9', 'newsblock' ),
			'portrait'       => esc_html__( 'Portrait 3:4', 'newsblock' ),
			'portrait-2-3'   => esc_html__( 'Portrait 2:3', 'newsblock' ),
			'square'         => esc_html__( 'Square', 'newsblock' ),
		),
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'select',
		'settings' => 'mega_menu_image_size',
		'label'    => esc_html__( 'Image Size', 'newsblock' ),
		'section'  => 'header',
		'default'  => 'csco-intermediate',
		'choices'  => csco_get_list_available_image_sizes(),
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'multicheck',
		'settings' => 'mega_menu_post_meta',
		'label'    => esc_html__( 'Post Meta', 'newsblock' ),
		'section'  => 'header',
		'default'  => array( 'category', 'views', 'reading_time' ),
		'priority' => 10,
		'choices'  => apply_filters(
			'csco_post_meta_choices',
			array(
				'category'     => esc_html__( 'Category', 'newsblock' ),
				'date'         => esc_html__( 'Date', 'newsblock' ),
				'author'       => esc_html__( 'Author', 'newsblock' ),
				'views'        => esc_html__( 'Views', 'newsblock' ),
				'shares'       => esc_html__( 'Shares', 'newsblock' ),
				'comments'     => esc_html__( 'Comments', 'newsblock' ),
				'reading_time' => esc_html__( 'Reading Time', 'newsblock' ),
			)
		),
	)
);
