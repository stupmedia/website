<?php
/**
 * Register Large Type 9.
 *
 * @package Newsblock
 */

/**
 * Register New Layout
 *
 * @param array $layouts List of layouts.
 */
function csco_canvas_register_layout_large_type_9( $layouts = array() ) {

	$layout = 'large-type-9';

	// Add new layout.
	$layouts[ $layout ] = array(
		'location'    => array( 'section-full' ),
		'name'        => esc_html__( 'Large 9', 'newsblock' ),
		'template'    => get_theme_file_path( "/template-parts/blocks/{$layout}.php" ),
		'icon'        => '<svg height="44" viewBox="0 0 52 44" width="52" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd" stroke="#2d2d2d"><rect height="42" rx="3" stroke-width="1.5" width="50" x="1" y="1"/><path d="m4.5 21.5h7" stroke-linecap="round" stroke-linejoin="round"/><path d="m4.5 24.5h12" stroke-linecap="round" stroke-linejoin="round"/><path d="m4.5 27.5h8" stroke-linecap="round" stroke-linejoin="round"/><g stroke-width="1.5"><path d="m26.5 11.5v21" stroke-linecap="square"/><path d="m2.5 11.5h48" stroke-linecap="square"/><path d="m2 33h48" stroke-linecap="square"/></g><path d="m30 21.5h7" stroke-linecap="round" stroke-linejoin="round"/><path d="m30 24.5h12.5" stroke-linecap="round" stroke-linejoin="round"/><path d="m30 27.5h8" stroke-linecap="round" stroke-linejoin="round"/></g></svg>',
		'sections'    => array(
			'general'    => array(
				'title'    => esc_html__( 'Block Settings', 'newsblock' ),
				'priority' => 5,
				'open'     => true,
			),
			'post-meta'  => array(
				'title'    => esc_html__( 'Meta Settings', 'newsblock' ),
				'priority' => 10,
			),
			'typography' => array(
				'title'    => esc_html__( 'Typography Settings', 'newsblock' ),
				'priority' => 10,
			),
		),
		'hide_fields' => csco_get_gutenberg_posts_hide_fields(),
		'fields'      => array_merge(
			array(
				array(
					'key'     => 'video',
					'label'   => esc_html__( 'Enable video backgrounds', 'newsblock' ),
					'section' => 'general',
					'type'    => 'toggle',
					'default' => false,
				),
				array(
					'key'        => 'height',
					'label'      => esc_html__( 'Min Height', 'newsblock' ),
					'type'       => 'dimension',
					'default'    => 'initial',
					'section'    => 'general',
					'responsive' => true,
					'output'     => array(
						array(
							'element'  => '$ .cs-layout-large__row',
							'property' => 'min-height',
							'suffix'   => '!important',
						),
					),
				),
				array(
					'key'        => 'headingMaxWidth',
					'label'      => esc_html__( 'Large Heading Max Width', 'newsblock' ),
					'section'    => 'general',
					'type'       => 'dimension',
					'responsive' => true,
					'output'     => array(
						array(
							'element'  => '$',
							'property' => '--cs-entry-heading-large-width',
							'suffix'   => '!important',
						),
					),
				),
				// Thumbnail.
				array(
					'key'     => 'imageSize',
					'label'   => esc_html__( 'Images Size', 'newsblock' ),
					'section' => 'thumbnail',
					'type'    => 'select',
					'default' => 'medium_large',
					'choices' => csco_get_list_available_image_sizes(),
				),
				// Typography.
				array(
					'key'        => 'typographyHeading',
					'label'      => esc_html__( 'Heading Font Size', 'newsblock' ),
					'section'    => 'typography',
					'type'       => 'dimension',
					'default'    => '1.5rem',
					'responsive' => true,
					'output'     => array(
						array(
							'element'  => '$ .cs-entry__title a',
							'property' => 'font-size',
							'suffix'   => '!important',
						),
					),
				),
				array(
					'key'     => 'typographyHeadingTag',
					'label'   => esc_html__( 'Heading Tag', 'newsblock' ),
					'section' => 'typography',
					'type'    => 'select',
					'default' => 'h2',
					'choices' => array(
						'h1'  => esc_html__( 'H1', 'newsblock' ),
						'h2'  => esc_html__( 'H2', 'newsblock' ),
						'h3'  => esc_html__( 'H3', 'newsblock' ),
						'h4'  => esc_html__( 'H4', 'newsblock' ),
						'h5'  => esc_html__( 'H5', 'newsblock' ),
						'h6'  => esc_html__( 'H6', 'newsblock' ),
						'p'   => esc_html__( 'P', 'newsblock' ),
						'div' => esc_html__( 'DIV', 'newsblock' ),
					),
				),
				array(
					'key'             => 'typographyExcerpt',
					'label'           => esc_html__( 'Excerpt Font Size', 'newsblock' ),
					'section'         => 'typography',
					'type'            => 'dimension',
					'default'         => '0.875rem',
					'responsive'      => true,
					'output'          => array(
						array(
							'element'  => '$ .cs-entry__excerpt',
							'property' => 'font-size',
							'suffix'   => '!important',
						),
					),
					'active_callback' => array(
						array(
							'field'    => '$#showExcerpt',
							'operator' => '===',
							'value'    => true,
						),
					),
				),
				// Color Settings.
				array(
					'key'     => 'colorBasicHeadingBG',
					'label'   => esc_html__( 'Heading Background', 'newsblock' ),
					'section' => 'color',
					'type'    => 'color',
					'output'  => array(
						array(
							'element'  => '$ .cs-entry__title-line a',
							'property' => 'background-color',
							'suffix'   => '!important',
						),
					),
				),
				array(
					'key'     => 'colorBasicHeading',
					'label'   => esc_html__( 'Heading Color', 'newsblock' ),
					'section' => 'color',
					'type'    => 'color',
					'output'  => array(
						array(
							'element'  => '$ .cs-entry__title-line a',
							'property' => 'color',
							'suffix'   => '!important',
						),
					),
				),
				array(
					'key'     => 'colorBasicHeadingBGActive',
					'label'   => esc_html__( 'Heading Background Active', 'newsblock' ),
					'section' => 'color',
					'type'    => 'color',
					'output'  => array(
						array(
							'element'  => '$ .cs-layout-large__col.active .cs-entry__title-line a',
							'property' => 'background-color',
							'suffix'   => '!important',
						),
					),
				),
				array(
					'key'     => 'colorBasicHeadingActive',
					'label'   => esc_html__( 'Heading Color Active', 'newsblock' ),
					'section' => 'color',
					'type'    => 'color',
					'output'  => array(
						array(
							'element'  => '$ .cs-layout-large__col.active .cs-entry__title-line a',
							'property' => 'color',
							'suffix'   => '!important',
						),
					),
				),
				array(
					'key'     => 'colorBasicCategoriesBG',
					'label'   => esc_html__( 'Styled Category Background', 'newsblock' ),
					'section' => 'color',
					'type'    => 'color',
					'output'  => array(
						array(
							'element'  => '$',
							'property' => '--cs-color-styled-category',
							'suffix'   => '!important',
						),
					),
				),
				array(
					'key'     => 'colorBasicCategories',
					'label'   => esc_html__( 'Styled Category Color', 'newsblock' ),
					'section' => 'color',
					'type'    => 'color',
					'output'  => array(
						array(
							'element'  => '$',
							'property' => '--cs-color-styled-category-contrast',
							'suffix'   => '!important',
						),
					),
				),
				array(
					'key'     => 'colorBasicCategoriesBGHover',
					'label'   => esc_html__( 'Styled Category Background Hover', 'newsblock' ),
					'section' => 'color',
					'type'    => 'color',
					'output'  => array(
						array(
							'element'  => '$',
							'property' => '--cs-color-styled-category-hover',
							'suffix'   => '!important',
						),
					),
				),
				array(
					'key'     => 'colorBasicCategoriesHover',
					'label'   => esc_html__( 'Styled Category Color Hover', 'newsblock' ),
					'section' => 'color',
					'type'    => 'color',
					'output'  => array(
						array(
							'element'  => '$',
							'property' => '--cs-color-styled-category-hover-contrast',
							'suffix'   => '!important',
						),
					),
				),
			),
			// Primary Meta.
			csco_get_gutenberg_meta_fields(
				array(
					'section_name' => 'post-meta',
				)
			),
			csco_get_gutenberg_excerpt_fields(
				array(
					'section_name' => 'post-meta',
				)
			)
		),
	);

	return $layouts;
}
add_filter( 'canvas_block_layouts_canvas/posts', 'csco_canvas_register_layout_large_type_9' );

/**
 * Change post query
 *
 * @param array $args       Args for post query.
 * @param array $attributes Block attributes.
 * @param array $options    Block options.
 */
function csco_canvas_posts_query_args_large_type_9( $args, $attributes, $options ) {

	if ( 0 !== strpos( $attributes['layout'], 'large-type-9' ) ) {
		return $args;
	}

	$args['posts_per_page'] = 2;
	$args['min_limit']      = 2;

	return $args;
}
add_filter( 'canvas_block_posts_query_args', 'csco_canvas_posts_query_args_large_type_9', 10, 3 );
