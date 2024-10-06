<?php
/**
 * Register Standard Type 4.
 *
 * @package Newsblock
 */

/**
 * Register New Layout
 *
 * @param array $layouts List of layouts.
 */
function csco_canvas_register_layout_standard_type_4( $layouts = array() ) {

	$layout = 'standard-type-4';

	// Add new layout.
	$layouts[ $layout ] = array(
		'location'    => array(),
		'name'        => esc_html__( 'Standard 4', 'newsblock' ),
		'template'    => get_template_directory() . '/template-parts/blocks/posts-area.php',
		'icon'        => '<svg height="44" viewBox="0 0 52 44" width="52" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd" transform="translate(1 1)"><path d="m26.5440341 19.1818182v-8.1818182h-2.0234375l-2.5205966 1.5958807v1.9090909l2.3316761-1.4616477h.0596591v6.1384943z" fill="#2d2d2d" fill-rule="nonzero"/><g stroke="#2d2d2d"><rect height="42" rx="3" stroke-width="1.5" width="50"/><rect height="14" rx="1" stroke-width="1.5" width="18" x="16" y="8"/><path d="m21.412325 28h7" stroke-linecap="round" stroke-linejoin="round"/><path d="m17 31h16" stroke-linecap="round" stroke-linejoin="round"/><path d="m19.5 34h11" stroke-linecap="round" stroke-linejoin="round"/></g></g></svg>',
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
			csco_get_gutenberg_pagination_fields(),

			array(
				array(
					'key'            => 'columns',
					'label'          => esc_html__( 'Number of Columns', 'newsblock' ),
					'section'        => 'general',
					'type'           => 'number',
					'min'            => 1,
					'max'            => 6,
					'default'        => 1,
					'default_tablet' => 1,
					'default_mobile' => 1,
					'responsive'     => true,
					'output'         => array(
						array(
							'element'  => '$ .cs-posts-area__main',
							'property' => '--cs-posts-area-grid-columns',
							'suffix'   => '!important',
						),
					),
				),
				array(
					'key'            => 'gap_posts',
					'label'          => esc_html__( 'Gap between Posts', 'newsblock' ),
					'type'           => 'dimension',
					'section'        => 'general',
					'responsive'     => true,
					'default'        => '40px',
					'default_tablet' => '40px',
					'default_mobile' => '40px',
					'output'         => array(
						array(
							'element'  => '$ .cs-posts-area__main',
							'property' => '--cs-posts-area-grid-gap',
							'suffix'   => '!important',
						),
					),
				),
				array(
					'key'     => 'bordersBetweenPosts',
					'label'   => esc_html__( 'Display borders between posts', 'newsblock' ),
					'section' => 'general',
					'type'    => 'toggle',
					'default' => false,
				),
				// Thumbnail.
				array(
					'key'     => 'imageOrientation',
					'label'   => esc_html__( 'Image Orientation', 'newsblock' ),
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
					'key'     => 'imageSize',
					'label'   => esc_html__( 'Images Size', 'newsblock' ),
					'section' => 'thumbnail',
					'type'    => 'select',
					'default' => 'medium_large',
					'choices' => csco_get_list_available_image_sizes(),
				),
				array(
					'key'     => 'imageBorderRadius',
					'label'   => esc_html__( 'Image Border Radius', 'newsblock' ),
					'section' => 'thumbnail',
					'type'    => 'dimension',
					'output'  => array(
						array(
							'element'  => '$',
							'property' => '--cs-image-border-radius',
						),
					),
				),
				// Typography.
				array(
					'key'        => 'typographyHeading',
					'label'      => esc_html__( 'Heading Font Size', 'newsblock' ),
					'section'    => 'typography',
					'type'       => 'dimension',
					'default'    => '1.25rem',
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
				array(
					'key'        => 'typographyNumber',
					'label'      => esc_html__( 'Number Font Size', 'newsblock' ),
					'section'    => 'typography',
					'type'       => 'dimension',
					'default'    => '2.5rem',
					'responsive' => true,
					'output'     => array(
						array(
							'element'  => '$ .cs-entry__thumbnail a:before',
							'property' => 'font-size',
							'suffix'   => '!important',
						),
					),
				),
				// Color Settings.
				array(
					'key'     => 'colorBasicHeading',
					'label'   => esc_html__( 'Heading', 'newsblock' ),
					'section' => 'color',
					'type'    => 'color',
					'output'  => array(
						array(
							'element'  => '$ .cs-entry__title a',
							'property' => 'color',
							'suffix'   => '!important',
						),
					),
				),
				array(
					'key'     => 'colorBasicHeadingHover',
					'label'   => esc_html__( 'Heading Hover', 'newsblock' ),
					'section' => 'color',
					'type'    => 'color',
					'output'  => array(
						array(
							'element'  => '$ .cs-entry__title a:hover, $ .cs-entry__title a:focus',
							'property' => 'color',
							'suffix'   => '!important',
						),
					),
				),
				array(
					'key'             => 'colorBasicExcerpt',
					'label'           => esc_html__( 'Excerpt', 'newsblock' ),
					'section'         => 'color',
					'type'            => 'color',
					'output'          => array(
						array(
							'element'  => '$ .cs-entry__excerpt',
							'property' => 'color',
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
					'key'     => 'colorBasicMeta',
					'label'   => esc_html__( 'Post Meta', 'newsblock' ),
					'section' => 'color',
					'type'    => 'color',
					'output'  => array(
						array(
							'element'  => '$ .cs-entry__content .cs-entry__post-meta',
							'property' => 'color',
							'suffix'   => '!important',
						),
					),
				),
				array(
					'key'     => 'colorBasicMetaLinks',
					'label'   => esc_html__( 'Post Meta Links', 'newsblock' ),
					'section' => 'color',
					'type'    => 'color',
					'output'  => array(
						array(
							'element'  => '$ .cs-entry__content .cs-entry__post-meta a',
							'property' => 'color',
							'suffix'   => '!important',
						),
					),
				),
				array(
					'key'     => 'colorBasicMetaLinksHover',
					'label'   => esc_html__( 'Post Meta Links Hover', 'newsblock' ),
					'section' => 'color',
					'type'    => 'color',
					'output'  => array(
						array(
							'element'  => '$ .cs-entry__content .cs-entry__post-meta a:hover, $ .cs-entry__content .cs-entry__post-meta a:focus',
							'property' => 'color',
							'suffix'   => '!important',
						),
					),
				),
				array(
					'key'     => 'colorBasicCategory',
					'label'   => esc_html__( 'Category Color', 'newsblock' ),
					'section' => 'color',
					'type'    => 'color',
					'output'  => array(
						array(
							'element'  => '$',
							'property' => '--cs-color-category',
							'suffix'   => '!important',
						),
					),
				),
				array(
					'key'     => 'colorBasicCategoryHover',
					'label'   => esc_html__( 'Category Hover Color', 'newsblock' ),
					'section' => 'color',
					'type'    => 'color',
					'output'  => array(
						array(
							'element'  => '$',
							'property' => '--cs-color-category-hover',
							'suffix'   => '!important',
						),
					),
				),
				array(
					'key'     => 'colorBasicCategoryUnderline',
					'label'   => esc_html__( 'Category Underline Color', 'newsblock' ),
					'section' => 'color',
					'type'    => 'color',
					'output'  => array(
						array(
							'element'  => '$',
							'property' => '--cs-color-category-underline',
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
add_filter( 'canvas_block_layouts_canvas/posts', 'csco_canvas_register_layout_standard_type_4' );
