<?php
/**
 * Register Standard Type 2.
 *
 * @package Newsblock
 */

/**
 * Register New Layout
 *
 * @param array $layouts List of layouts.
 */
function csco_canvas_register_layout_standard_type_2( $layouts = array() ) {

	$layout = 'standard-type-2';

	// Add new layout.
	$layouts[ $layout ] = array(
		'location'    => array(),
		'name'        => esc_html__( 'Standard 2', 'newsblock' ),
		'template'    => get_template_directory() . '/template-parts/blocks/posts-area.php',
		'icon'        => '<svg height="44" viewBox="0 0 52 44" width="52" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><rect height="42" rx="3" stroke="#2d2d2d" stroke-width="1.5" width="50" x="1" y="1"/><rect height="20" rx="1" stroke="#2d2d2d" stroke-width="1.5" width="40" x="6" y="6"/><path d="m9.5 23h25v10h-25z" fill="#2d2d2d"/><g stroke-linecap="round" stroke-linejoin="round"><path d="m13 26.5h17" stroke="#fff"/><path d="m13 29.5h13" stroke="#fff"/><path d="m10.5 36h5" stroke="#2d2d2d"/></g></g></svg>',
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
				array(
					'key'     => 'video',
					'label'   => esc_html__( 'Enable video backgrounds', 'newsblock' ),
					'section' => 'general',
					'type'    => 'toggle',
					'default' => false,
				),
				array(
					'key'             => 'video_contrlos',
					'label'           => esc_html__( 'Enable video controls', 'newsblock' ),
					'section'         => 'general',
					'type'            => 'toggle',
					'default'         => false,
					'active_callback' => array(
						array(
							'field'    => '$#video',
							'operator' => '==',
							'value'    => true,
						),
					),
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
add_filter( 'canvas_block_layouts_canvas/posts', 'csco_canvas_register_layout_standard_type_2' );
