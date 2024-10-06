<?php
/**
 * Register Large Type 1.
 *
 * @package Newsblock
 */

/**
 * Register New Layout
 *
 * @param array $layouts List of layouts.
 */
function csco_canvas_register_layout_large_type_1( $layouts = array() ) {

	$layout = 'large-type-1';

	// Add new layout.
	$layouts[ $layout ] = array(
		'location'    => array( 'section-full' ),
		'name'        => esc_html__( 'Large 1', 'newsblock' ),
		'template'    => get_theme_file_path( "/template-parts/blocks/{$layout}.php" ),
		'icon'        => '<svg height="44" viewBox="0 0 52 44" width="52" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><g stroke="#2d2d2d"><rect height="42" rx="3" stroke-width="1.5" width="50" x="1" y="1"/><rect height="6" rx="1" stroke-width="1.5" width="11" x="36" y="10"/><rect height="6" rx="1" stroke-width="1.5" width="11" x="36" y="19"/><rect height="6" rx="1" stroke-width="1.5" width="11" x="36" y="28"/><path d="m2.5 5.5h48" stroke-linecap="square" stroke-width="1.5"/><path d="m2 39h48" stroke-linecap="square" stroke-width="1.5"/></g><path d="m5 21h25v10h-25z" fill="#2d2d2d"/><path d="m8.5 24.5h17" stroke="#fff" stroke-linecap="round" stroke-linejoin="round"/><path d="m8.5 27.5h13" stroke="#fff" stroke-linecap="round" stroke-linejoin="round"/><path d="m6 34h5" stroke="#2d2d2d" stroke-linecap="round" stroke-linejoin="round"/></g></svg>',
		'sections'    => array(
			'general'    => array(
				'title'    => esc_html__( 'Block Settings', 'newsblock' ),
				'priority' => 5,
				'open'     => true,
			),
			'large-meta' => array(
				'title'    => esc_html__( 'Large Post Meta Settings', 'newsblock' ),
				'priority' => 10,
			),
			'small-meta' => array(
				'title'    => esc_html__( 'Small Post Meta Settings', 'newsblock' ),
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
					'key'     => 'large_imageSize',
					'label'   => esc_html__( 'Large Post Image Size', 'newsblock' ),
					'section' => 'thumbnail',
					'type'    => 'select',
					'default' => 'large',
					'choices' => csco_get_list_available_image_sizes(),
				),
				array(
					'key'     => 'small_imageOrientation',
					'label'   => esc_html__( 'Small Image Orientation', 'newsblock' ),
					'section' => 'thumbnail',
					'type'    => 'select',
					'default' => 'original',
					'choices' => array(
						'original'       => esc_html__( 'Original', 'newsblock' ),
						'landscape'      => esc_html__( 'Landscape 4:3', 'newsblock' ),
						'landscape-3-2'  => esc_html__( 'Landscape 3:2', 'newsblock' ),
						'landscape-16-9' => esc_html__( 'Landscape 16:9', 'newsblock' ),
						'portrait'       => esc_html__( 'Portrait 3:4', 'newsblock' ),
						'portrait-2-3'   => esc_html__( 'Portrait 2:3', 'newsblock' ),
						'square'         => esc_html__( 'Square', 'newsblock' ),
					),
				),
				array(
					'key'     => 'small_imageSize',
					'label'   => esc_html__( 'Small Post Image Size', 'newsblock' ),
					'section' => 'thumbnail',
					'type'    => 'select',
					'default' => 'csco-thumbnail',
					'choices' => csco_get_list_available_image_sizes(),
				),
				array(
					'key'     => 'small_imageBorderRadius',
					'label'   => esc_html__( 'Small Post Image Border Radius', 'newsblock' ),
					'section' => 'thumbnail',
					'type'    => 'dimension',
					'output'  => array(
						array(
							'element'  => '$ .cs-layout-large__col:last-child',
							'property' => '--cs-image-border-radius',
						),
					),
				),
				// Typography.
				array(
					'key'        => 'typographyHeading',
					'label'      => esc_html__( 'Large Post Heading Font Size', 'newsblock' ),
					'section'    => 'typography',
					'type'       => 'dimension',
					'default'    => '3rem',
					'responsive' => true,
					'output'     => array(
						array(
							'element'  => '$ .cs-layout-large__col:first-child .cs-entry__title a',
							'property' => 'font-size',
							'suffix'   => '!important',
						),
					),
				),
				array(
					'key'     => 'typographyHeadingTag',
					'label'   => esc_html__( 'Large Post Heading Tag', 'newsblock' ),
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
					'label'           => esc_html__( 'Large Post Excerpt Font Size', 'newsblock' ),
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
				array(
					'key'        => 'small_typographyHeading',
					'label'      => esc_html__( 'Small Post Heading Font Size', 'newsblock' ),
					'section'    => 'typography',
					'type'       => 'dimension',
					'default'    => '1.25rem',
					'responsive' => true,
					'output'     => array(
						array(
							'element'  => '$ .cs-layout-large__col:last-child .cs-entry__title a',
							'property' => 'font-size',
							'suffix'   => '!important',
						),
					),
				),
				array(
					'key'     => 'small_typographyHeadingTag',
					'label'   => esc_html__( 'Small Post Heading Tag', 'newsblock' ),
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
					'key'     => 'colorBasicHeadingBGHover',
					'label'   => esc_html__( 'Heading Background Hover', 'newsblock' ),
					'section' => 'color',
					'type'    => 'color',
					'output'  => array(
						array(
							'element'  => '$ .cs-entry__title-line a:hover, $ .cs-entry__title-line a:focus',
							'property' => 'background-color',
							'suffix'   => '!important',
						),
					),
				),
				array(
					'key'     => 'colorBasicHeadingHover',
					'label'   => esc_html__( 'Heading Color Hover', 'newsblock' ),
					'section' => 'color',
					'type'    => 'color',
					'output'  => array(
						array(
							'element'  => '$ .cs-entry__title-line a:hover, $ .cs-entry__title-line a:focus',
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
					'section_name' => 'large-meta',
				)
			),
			csco_get_gutenberg_excerpt_fields(
				array(
					'section_name' => 'large-meta',
				)
			),
			// Small Meta.
			csco_get_gutenberg_meta_fields(
				array(
					'field_prefix' => 'small',
					'section_name' => 'small-meta',
				)
			)
		),
	);

	return $layouts;
}
add_filter( 'canvas_block_layouts_canvas/posts', 'csco_canvas_register_layout_large_type_1' );

/**
 * Change post query
 *
 * @param array $args       Args for post query.
 * @param array $attributes Block attributes.
 * @param array $options    Block options.
 */
function csco_canvas_posts_query_args_large_type_1( $args, $attributes, $options ) {

	if ( 0 !== strpos( $attributes['layout'], 'large-type-1' ) ) {
		return $args;
	}

	$args['posts_per_page'] = 4;
	$args['min_limit']      = 4;

	return $args;
}
add_filter( 'canvas_block_posts_query_args', 'csco_canvas_posts_query_args_large_type_1', 10, 3 );
