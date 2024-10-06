<?php
/**
 * Helpers Gutenberg.
 *
 * @package Newsblock
 */

/**
 * Get hide fields array for posts
 */
function csco_get_gutenberg_posts_hide_fields() {
	return array(
		'imageSize',
		'postsCount',
		'showPagination',
		'showMetaCategory',
		'showMetaAuthor',
		'showMetaDate',
		'showMetaComments',
		'showMetaViews',
		'showMetaReadingTime',
		'showMetaShares',
		'showExcerpt',
		'showViewPostButton',
		'colorText',
		'colorHeading',
		'colorHeadingHover',
		'colorText',
		'colorMeta',
		'colorMetaHover',
		'colorMetaLinks',
		'colorMetaLinksHover',
	);
}

/**
 * Get fields array for pagination
 */
function csco_get_gutenberg_pagination_fields() {
	// Set fields.
	$fields = array(
		array(
			'key'             => 'paginationType',
			'label'           => esc_html__( 'Pagination type', 'newsblock' ),
			'section'         => 'general',
			'type'            => 'select',
			'multiple'        => false,
			'choices'         => array(
				'none'     => esc_html__( 'None', 'newsblock' ),
				'standard' => esc_html__( 'Standard', 'newsblock' ),
				'ajax'     => esc_html__( 'Load More', 'newsblock' ),
				'infinite' => esc_html__( 'Infinite Load', 'newsblock' ),
			),
			'default'         => 'none',
			'active_callback' => array(
				array(
					'field'    => 'relatedPosts',
					'operator' => '==',
					'value'    => false,
				),
				array(
					array(
						array(
							'field'    => 'query.categories',
							'operator' => '===',
							'value'    => '',
						),
						array(
							'field'    => 'query.tags',
							'operator' => '===',
							'value'    => '',
						),
						array(
							'field'    => 'query.orderby',
							'operator' => '===',
							'value'    => 'date',
						),
						array(
							'field'    => 'query.order',
							'operator' => '===',
							'value'    => 'DESC',
						),
						array(
							'field'    => 'query.posts_type',
							'operator' => '===',
							'value'    => 'post',
						),
						array(
							'field'    => 'query.formats',
							'operator' => '===',
							'value'    => '',
						),
						array(
							'field'    => 'query.posts',
							'operator' => '===',
							'value'    => '',
						),
						array(
							'field'    => 'query.offset',
							'operator' => '===',
							'value'    => '',
						),
						array(
							'field'    => 'avoidDuplicatePosts',
							'operator' => '===',
							'value'    => false,
						),
					),
					array(
						array(
							'field'    => 'query.categories',
							'operator' => '!==',
							'value'    => '',
						),
						array(
							'field'    => 'query.categories',
							'count'    => ',',
							'operator' => '==',
							'value'    => 0,
						),
						array(
							'field'    => 'query.tags',
							'operator' => '===',
							'value'    => '',
						),
						array(
							'field'    => 'query.orderby',
							'operator' => '===',
							'value'    => 'date',
						),
						array(
							'field'    => 'query.order',
							'operator' => '===',
							'value'    => 'DESC',
						),
						array(
							'field'    => 'query.posts_type',
							'operator' => '===',
							'value'    => 'post',
						),
						array(
							'field'    => 'query.formats',
							'operator' => '===',
							'value'    => '',
						),
						array(
							'field'    => 'query.posts',
							'operator' => '===',
							'value'    => '',
						),
						array(
							'field'    => 'query.offset',
							'operator' => '===',
							'value'    => '',
						),
						array(
							'field'    => 'avoidDuplicatePosts',
							'operator' => '===',
							'value'    => false,
						),
					),
					array(
						array(
							'field'    => 'query.tags',
							'count'    => ',',
							'operator' => '==',
							'value'    => 0,
						),
						array(
							'field'    => 'query.categories',
							'operator' => '===',
							'value'    => '',
						),
						array(
							'field'    => 'query.orderby',
							'operator' => '===',
							'value'    => 'date',
						),
						array(
							'field'    => 'query.order',
							'operator' => '===',
							'value'    => 'DESC',
						),
						array(
							'field'    => 'query.posts_type',
							'operator' => '===',
							'value'    => 'post',
						),
						array(
							'field'    => 'query.formats',
							'operator' => '===',
							'value'    => '',
						),
						array(
							'field'    => 'query.posts',
							'operator' => '===',
							'value'    => '',
						),
						array(
							'field'    => 'query.offset',
							'operator' => '===',
							'value'    => '',
						),
						array(
							'field'    => 'avoidDuplicatePosts',
							'operator' => '===',
							'value'    => false,
						),
					),
				),
			),
		),
		array(
			'key'             => 'paginationTypeAlt',
			'label'           => esc_html__( 'Pagination type', 'newsblock' ),
			'section'         => 'general',
			'type'            => 'select',
			'multiple'        => false,
			'choices'         => array(
				'none'     => esc_html__( 'None', 'newsblock' ),
				'ajax'     => esc_html__( 'Load More', 'newsblock' ),
				'infinite' => esc_html__( 'Infinite Load', 'newsblock' ),
			),
			'default'         => 'none',
			'active_callback' => array(
				array(
					'field'    => 'relatedPosts',
					'operator' => '==',
					'value'    => false,
				),
				array(
					array(
						'field'    => 'query.orderby',
						'operator' => '!==',
						'value'    => 'date',
					),
					array(
						'field'    => 'query.order',
						'operator' => '!==',
						'value'    => 'DESC',
					),
					array(
						'field'    => 'query.posts_type',
						'operator' => '!==',
						'value'    => 'post',
					),
					array(
						'field'    => 'query.formats',
						'operator' => '!==',
						'value'    => '',
					),
					array(
						'field'    => 'query.posts',
						'operator' => '!==',
						'value'    => '',
					),
					array(
						'field'    => 'query.offset',
						'operator' => '!==',
						'value'    => '',
					),
					array(
						'field'    => 'avoidDuplicatePosts',
						'operator' => '!==',
						'value'    => false,
					),
					array(
						array(
							'field'    => 'query.categories',
							'operator' => '!==',
							'value'    => '',
						),
						array(
							'field'    => 'query.tags',
							'operator' => '!==',
							'value'    => '',
						),
					),
					array(
						array(
							'field'    => 'query.categories',
							'operator' => '!==',
							'value'    => '',
						),
						array(
							'field'    => 'query.categories',
							'count'    => ',',
							'operator' => '>=',
							'value'    => 1,
						),
					),
					array(
						array(
							'field'    => 'query.tags',
							'operator' => '!==',
							'value'    => '',
						),
						array(
							'field'    => 'query.tags',
							'count'    => ',',
							'operator' => '>=',
							'value'    => 1,
						),
					),
				),
			),
		),
		array(
			'key'             => 'areaPostsCount',
			'label'           => esc_html__( 'Posts Count', 'newsblock' ),
			'section'         => 'general',
			'type'            => 'number',
			'default'         => 1,
			'min'             => 1,
			'max'             => 100,
			'active_callback' => array(
				array(
					array(
						array(
							'field'    => '$#paginationType',
							'operator' => '!=',
							'value'    => 'standard',
						),
						array(
							'field'    => 'query.categories',
							'operator' => '===',
							'value'    => '',
						),
						array(
							'field'    => 'query.tags',
							'operator' => '===',
							'value'    => '',
						),
						array(
							'field'    => 'query.orderby',
							'operator' => '===',
							'value'    => 'date',
						),
						array(
							'field'    => 'query.order',
							'operator' => '===',
							'value'    => 'DESC',
						),
						array(
							'field'    => 'query.posts_type',
							'operator' => '===',
							'value'    => 'post',
						),
						array(
							'field'    => 'query.formats',
							'operator' => '===',
							'value'    => '',
						),
						array(
							'field'    => 'query.posts',
							'operator' => '===',
							'value'    => '',
						),
						array(
							'field'    => 'query.offset',
							'operator' => '===',
							'value'    => '',
						),
						array(
							'field'    => 'avoidDuplicatePosts',
							'operator' => '===',
							'value'    => false,
						),
					),
					array(
						array(
							'field'    => '$#paginationType',
							'operator' => '!=',
							'value'    => 'standard',
						),
						array(
							'field'    => 'query.categories',
							'operator' => '!==',
							'value'    => '',
						),
						array(
							'field'    => 'query.categories',
							'count'    => ',',
							'operator' => '==',
							'value'    => 0,
						),
						array(
							'field'    => 'query.tags',
							'operator' => '===',
							'value'    => '',
						),
						array(
							'field'    => 'query.orderby',
							'operator' => '===',
							'value'    => 'date',
						),
						array(
							'field'    => 'query.order',
							'operator' => '===',
							'value'    => 'DESC',
						),
						array(
							'field'    => 'query.posts_type',
							'operator' => '===',
							'value'    => 'post',
						),
						array(
							'field'    => 'query.formats',
							'operator' => '===',
							'value'    => '',
						),
						array(
							'field'    => 'query.posts',
							'operator' => '===',
							'value'    => '',
						),
						array(
							'field'    => 'query.offset',
							'operator' => '===',
							'value'    => '',
						),
						array(
							'field'    => 'avoidDuplicatePosts',
							'operator' => '===',
							'value'    => false,
						),
					),
					array(
						array(
							'field'    => '$#paginationType',
							'operator' => '!=',
							'value'    => 'standard',
						),
						array(
							'field'    => 'query.tags',
							'count'    => ',',
							'operator' => '==',
							'value'    => 0,
						),
						array(
							'field'    => 'query.categories',
							'operator' => '===',
							'value'    => '',
						),
						array(
							'field'    => 'query.orderby',
							'operator' => '===',
							'value'    => 'date',
						),
						array(
							'field'    => 'query.order',
							'operator' => '===',
							'value'    => 'DESC',
						),
						array(
							'field'    => 'query.posts_type',
							'operator' => '===',
							'value'    => 'post',
						),
						array(
							'field'    => 'query.formats',
							'operator' => '===',
							'value'    => '',
						),
						array(
							'field'    => 'query.posts',
							'operator' => '===',
							'value'    => '',
						),
						array(
							'field'    => 'query.offset',
							'operator' => '===',
							'value'    => '',
						),
						array(
							'field'    => 'avoidDuplicatePosts',
							'operator' => '===',
							'value'    => false,
						),
					),
					array(
						'field'    => 'query.orderby',
						'operator' => '!==',
						'value'    => 'date',
					),
					array(
						'field'    => 'query.order',
						'operator' => '!==',
						'value'    => 'DESC',
					),
					array(
						'field'    => 'query.posts_type',
						'operator' => '!==',
						'value'    => 'post',
					),
					array(
						'field'    => 'query.formats',
						'operator' => '!==',
						'value'    => '',
					),
					array(
						'field'    => 'query.posts',
						'operator' => '!==',
						'value'    => '',
					),
					array(
						'field'    => 'query.offset',
						'operator' => '!==',
						'value'    => '',
					),
					array(
						'field'    => 'avoidDuplicatePosts',
						'operator' => '!==',
						'value'    => false,
					),
					array(
						array(
							'field'    => 'query.categories',
							'operator' => '!==',
							'value'    => '',
						),
						array(
							'field'    => 'query.tags',
							'operator' => '!==',
							'value'    => '',
						),
					),
					array(
						array(
							'field'    => 'query.categories',
							'operator' => '!==',
							'value'    => '',
						),
						array(
							'field'    => 'query.categories',
							'count'    => ',',
							'operator' => '>=',
							'value'    => 1,
						),
					),
					array(
						array(
							'field'    => 'query.tags',
							'operator' => '!==',
							'value'    => '',
						),
						array(
							'field'    => 'query.tags',
							'count'    => ',',
							'operator' => '>=',
							'value'    => 1,
						),
					),
				),
			),
		),
	);

	return $fields;
}

/**
 * Get fields array for Meta
 *
 * @param array $settings The settings.
 */
function csco_get_gutenberg_meta_fields( $settings ) {

	$settings = array_merge( array(
		'field_prefix'    => '',
		'section_name'    => '',
		'active_callback' => array(),
	), $settings );

	$settings['field_prefix'] = $settings['field_prefix'] ? sprintf( '%s_', $settings['field_prefix'] ) : null;

	// Set fields.
	$fields = array(
		array(
			'key'             => $settings['field_prefix'] . 'showMetaCategory',
			'label'           => esc_html__( 'Category', 'newsblock' ),
			'section'         => $settings['section_name'],
			'type'            => 'toggle',
			'default'         => true,
			'active_callback' => $settings['active_callback'],
		),
		array(
			'key'             => $settings['field_prefix'] . 'showMetaAuthor',
			'label'           => esc_html__( 'Author', 'newsblock' ),
			'section'         => $settings['section_name'],
			'type'            => 'toggle',
			'default'         => true,
			'active_callback' => $settings['active_callback'],
		),
		array(
			'key'             => $settings['field_prefix'] . 'showMetaDate',
			'label'           => esc_html__( 'Date', 'newsblock' ),
			'section'         => $settings['section_name'],
			'type'            => 'toggle',
			'default'         => true,
			'active_callback' => $settings['active_callback'],
		),
		array(
			'key'             => $settings['field_prefix'] . 'showMetaComments',
			'label'           => esc_html__( 'Comments', 'newsblock' ),
			'section'         => $settings['section_name'],
			'type'            => 'toggle',
			'default'         => false,
			'active_callback' => $settings['active_callback'],
		),
		csco_post_views_enabled() ? array(
			'key'             => $settings['field_prefix'] . 'showMetaViews',
			'label'           => esc_html__( 'Views', 'newsblock' ),
			'section'         => $settings['section_name'],
			'type'            => 'toggle',
			'default'         => false,
			'active_callback' => $settings['active_callback'],
		) : array(),
		csco_powerkit_module_enabled( 'reading_time' ) ? array(
			'key'             => $settings['field_prefix'] . 'showMetaReadingTime',
			'label'           => esc_html__( 'Reading Time', 'newsblock' ),
			'section'         => $settings['section_name'],
			'type'            => 'toggle',
			'default'         => false,
			'active_callback' => $settings['active_callback'],
		) : array(),
		function_exists( 'powerkit_share_buttons_exists' ) && powerkit_share_buttons_exists( 'block-posts' ) ? array(
			'key'             => $settings['field_prefix'] . 'showMetaShares',
			'label'           => esc_html__( 'Shares', 'newsblock' ),
			'section'         => $settings['section_name'],
			'type'            => 'toggle',
			'default'         => false,
			'active_callback' => $settings['active_callback'],
		) : array(),
		array(
			'key'             => uniqid(),
			'section'         => $settings['section_name'],
			'type'            => 'separator',
			'active_callback' => $settings['active_callback'],
		),
		array(
			'key'             => $settings['field_prefix'] . 'metaCompact',
			'label'           => esc_html__( 'Display compact post meta', 'newsblock' ),
			'section'         => $settings['section_name'],
			'type'            => 'toggle',
			'default'         => false,
			'active_callback' => $settings['active_callback'],
		),
	);

	return $fields;
}

/**
 * Get fields array for Excerpt
 *
 * @param array $settings The settings.
 */
function csco_get_gutenberg_excerpt_fields( $settings ) {

	$settings = array_merge( array(
		'field_prefix'    => '',
		'section_name'    => '',
		'active_callback' => array(),
		'sep'             => true,
		'default'         => false,
	), $settings );

	$settings['field_prefix'] = $settings['field_prefix'] ? sprintf( '%s_', $settings['field_prefix'] ) : null;

	// Set fields.
	$fields = array(
		$settings['sep'] ? array(
			'key'             => uniqid(),
			'section'         => $settings['section_name'],
			'type'            => 'separator',
			'active_callback' => $settings['active_callback'],
		) : array(),
		array(
			'key'             => $settings['field_prefix'] . 'showExcerpt',
			'label'           => esc_html__( 'Display post excerpt', 'newsblock' ),
			'section'         => $settings['section_name'],
			'type'            => 'toggle',
			'default'         => $settings['default'],
			'active_callback' => $settings['active_callback'],
		),
		array(
			'key'             => $settings['field_prefix'] . 'metaExcerptLength',
			'label'           => esc_html__( 'Excerpt length', 'newsblock' ),
			'section'         => $settings['section_name'],
			'type'            => 'toggle',
			'type'            => 'number',
			'step'            => 1,
			'min'             => 1,
			'max'             => 1000,
			'default'         => 100,
			'active_callback' => array_merge(
				array(
					array(
						'field'    => '$#' . $settings['field_prefix'] . 'showExcerpt',
						'operator' => '==',
						'value'    => true,
					),
				),
				$settings['active_callback']
			),
		),
	);

	return $fields;
}

/**
 * Get fields array for View Link
 *
 * @param array $settings The settings.
 */
function csco_get_gutenberg_view_link_fields( $settings ) {

	$settings = array_merge( array(
		'field_prefix'    => '',
		'section_name'    => '',
		'active_callback' => array(),
		'sep'             => true,
		'default'         => false,
	), $settings );

	$settings['field_prefix'] = $settings['field_prefix'] ? sprintf( '%s_', $settings['field_prefix'] ) : null;

	// Set fields.
	$fields = array(
		$settings['sep'] ? array(
			'key'             => uniqid(),
			'section'         => $settings['section_name'],
			'type'            => 'separator',
			'active_callback' => $settings['active_callback'],
		) : array(),
		array(
			'key'             => $settings['field_prefix'] . 'showViewPostLink',
			'label'           => esc_html__( 'Display view post link', 'newsblock' ),
			'section'         => $settings['section_name'],
			'type'            => 'toggle',
			'default'         => $settings['default'],
			'active_callback' => $settings['active_callback'],
		),
		array(
			'key'             => $settings['field_prefix'] . 'viewPostLabel',
			'label'           => esc_html__( 'View Post Link Label', 'newsblock' ),
			'section'         => $settings['section_name'],
			'type'            => 'text',
			'default'         => '',
			'active_callback' => array_merge(
				array(
					array(
						'field'    => '$#' . $settings['field_prefix'] . 'showViewPostLink',
						'operator' => '==',
						'value'    => true,
					),
				),
				$settings['active_callback']
			),
		),
	);

	return $fields;
}

/**
 * Get fields array for More Button
 *
 * @param array $settings The settings.
 */
function csco_get_gutenberg_more_button_fields( $settings ) {

	$settings = array_merge( array(
		'field_prefix'    => '',
		'section_name'    => '',
		'active_callback' => array(),
		'sep'             => true,
		'default'         => false,
	), $settings );

	$settings['field_prefix'] = $settings['field_prefix'] ? sprintf( '%s_', $settings['field_prefix'] ) : null;

	// Set fields.
	$fields = array(
		$settings['sep'] ? array(
			'key'             => uniqid(),
			'section'         => $settings['section_name'],
			'type'            => 'separator',
			'active_callback' => $settings['active_callback'],
		) : array(),
		array(
			'key'             => $settings['field_prefix'] . 'moreButton',
			'label'           => esc_html__( 'Display read more button', 'newsblock' ),
			'section'         => $settings['section_name'],
			'type'            => 'toggle',
			'default'         => $settings['default'],
			'active_callback' => $settings['active_callback'],
		),
		array(
			'key'             => $settings['field_prefix'] . 'moreButtonLabel',
			'label'           => esc_html__( 'More Button Label', 'newsblock' ),
			'section'         => $settings['section_name'],
			'type'            => 'text',
			'default'         => '',
			'active_callback' => array_merge(
				array(
					array(
						'field'    => '$#' . $settings['field_prefix'] . 'newsblock',
						'operator' => '==',
						'value'    => true,
					),
				),
				$settings['active_callback']
			),
		),
	);

	return $fields;
}

/**
 * Output post thumbnail of layout.
 *
 * @param array  $options    The options.
 * @param array  $attributes The attributes.
 * @param string $prefix     The field prefix.
 * @param array  $meta       The meta.
 */
function cnvs_block_post_thumbnail( $options, $attributes, $prefix = null, $meta = array() ) {

	$prefix = $prefix ? sprintf( '%s_', $prefix ) : null;

	if ( has_post_thumbnail() ) {
		$options['thumbnail_content'] = isset( $options['thumbnail_content'] ) ? $options['thumbnail_content'] : false;
		$options['video_template']    = isset( $options['video_template'] ) ? $options['video_template'] : 'default';
		$options['video_contrlos']    = isset( $options['video_contrlos'] ) ? $options['video_contrlos'] : false;

		$image_orientation = isset( $options[ $prefix . 'imageOrientation' ] ) ? sprintf( 'cs-overlay-ratio cs-ratio-%s', $options[ $prefix . 'imageOrientation' ] ) : false;

		$show_thumbnail_link = isset( $options['showViewPostLink'] ) && $options['showViewPostLink'];

		$show_thumbnail_meta = cnvs_block_post_meta( $options, $meta, false );

		if ( $show_thumbnail_link || $show_thumbnail_meta ) {
			?>
			<div class="cs-entry__inner cs-entry__thumbnail cs-entry__overlay <?php echo esc_attr( $image_orientation ); ?>" data-scheme="inverse">
				<div class="cs-overlay-background">
					<?php the_post_thumbnail( $options[ $prefix . 'imageSize' ] ); ?>

					<?php
					if ( isset( $options['video'] ) && $options['video'] ) {
						csco_get_video_background( null, null, $options['video_template'], $options['video_contrlos'], $options['video_contrlos'] );
					}
					?>

					<?php
					if ( isset( $options['post_format'] ) && $options['post_format'] ) {
						csco_the_post_format_icon();
					}
					?>
				</div>

				<div class="cs-overlay-content">
					<?php if ( $show_thumbnail_link ) { ?>
						<span class="cs-entry__read-more">
							<?php echo esc_html( apply_filters( 'csco_filter_label_more', $options[ $prefix . 'viewPostLabel' ] ) ); ?>
						</span>
					<?php } ?>

					<?php cnvs_block_post_meta( $options, $meta ); ?>
				</div>

				<a class="cs-overlay-link" href="<?php echo esc_url( get_permalink() ); ?>"></a>
			</div>
		<?php } else { ?>
			<div class="cs-entry__inner cs-entry__thumbnail cs-entry__overlay <?php echo esc_attr( $image_orientation ); ?>">
				<div class="cs-overlay-background <?php echo esc_attr( $options['thumbnail_content'] ? null : 'cs-overlay-transparent' ); ?>">
					<?php the_post_thumbnail( $options[ $prefix . 'imageSize' ] ); ?>

					<?php
					if ( isset( $options['video'] ) && $options['video'] ) {
						csco_get_video_background( null, null, $options['video_template'], $options['video_contrlos'], $options['video_contrlos'] );
					}
					?>

					<?php
					if ( isset( $options['post_format'] ) && $options['post_format'] ) {
						csco_the_post_format_icon();
					}
					?>
				</div>
				<a class="cs-overlay-link" href="<?php echo esc_url( get_permalink() ); ?>"></a>
			</div>
			<?php
		}
	}
}

/**
 * Output post overlay thumbnail of layout.
 *
 * @param array  $options    The options.
 * @param array  $attributes The attributes.
 * @param string $prefix     The field prefix.
 */
function cnvs_block_post_overlay_thumbnail( $options, $attributes, $prefix = null ) {

	$prefix = $prefix ? sprintf( '%s_', $prefix ) : null;

	if ( has_post_thumbnail() ) {
		$options['video_template'] = isset( $options['video_template'] ) ? $options['video_template'] : 'default';
		$options['video_contrlos'] = isset( $options['video_contrlos'] ) ? $options['video_contrlos'] : false;
		?>
		<div class="cs-overlay-background">
			<?php the_post_thumbnail( $options[ $prefix . 'imageSize' ] ); ?>

			<?php
			if ( isset( $options['video'] ) && $options['video'] ) {
				csco_get_video_background( null, null, $options['video_template'], $options['video_contrlos'], $options['video_contrlos'] );
			}
			?>
		</div>
		<?php
	}
}

/**
 * Output post title of layout.
 *
 * @param array  $options The options.
 * @param string $prefix  The field prefix.
 * @param string $class   The title class.
 */
function cnvs_block_post_title( $options, $prefix = null, $class = '' ) {

	$prefix = $prefix ? sprintf( '%s_', $prefix ) : null;

	$tag = isset( $options[ $prefix . 'typographyHeadingTag' ] ) ? $options[ $prefix . 'typographyHeadingTag' ] : 'h2';
	?>
	<<?php echo esc_html( $tag ); ?> class="cs-entry__title <?php echo esc_html( $class ); ?>">
		<?php if ( isset( $options['withoutLink'] ) && $options['withoutLink'] ) { ?>
			<span><?php the_title(); ?></span>
		<?php } else { ?>
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		<?php } ?>
	</<?php echo esc_html( $tag ); ?>>
	<?php
}

/**
 * Output post excerpt of layout.
 *
 * @param array  $options The options.
 * @param string $prefix  The field prefix.
 */
function cnvs_block_post_excerpt( $options, $prefix = null ) {

	$prefix = $prefix ? sprintf( '%s_', $prefix ) : null;

	if ( isset( $options[ $prefix . 'showExcerpt' ] ) && $options[ $prefix . 'showExcerpt' ] ) {

		$content = csco_get_the_excerpt( (int) $options[ $prefix . 'metaExcerptLength' ] );

		if ( $content ) {
			?>
			<div class="cs-entry__excerpt">
				<?php echo esc_html( $content ); ?>
			</div>
			<?php
		}
	}
}
