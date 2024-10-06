<?php
/**
 * Powerkit Filters
 *
 * @package Newsblock
 */

/**
 * Remove Default Styles
 */
add_action( 'wp_enqueue_scripts', function() {
	wp_dequeue_style( 'powerkit-widget-posts' );
} );

/**
 * New Share Buttons Locations
 *
 * @param array $locations List of Locations.
 */
function csco_powerkit_new_share_buttons_locations( $locations = array() ) {

	$locations['after-post'] = array(
		'shares'         => array( 'facebook', 'twitter', 'pinterest' ),
		'name'           => esc_html__( 'After Post Content', 'newsblock' ),
		'location'       => 'after-post',
		'mode'           => 'mixed',
		'before'         => '',
		'after'          => '',
		'display'        => true,
		'fields'         => array(
			'display_total'   => true,
			'display_count'   => true,
			'schemes'         => array( 'default', 'bold', 'bold-bg' ),
			'count_locations' => array( 'inside' ),
		),
		'scheme'         => 'bold-bg',
		'count_location' => 'inside',
	);

	$locations['metabar-post'] = array(
		'shares'         => array( 'facebook', 'twitter', 'pinterest' ),
		'name'           => esc_html__( 'Entry Metabar', 'newsblock' ),
		'location'       => 'metabar-post',
		'mode'           => 'mixed',
		'before'         => '',
		'after'          => '',
		'display'        => true,
		'meta'           => array(
			'icons'  => true,
			'titles' => false,
			'labels' => false,
		),
		// Display only the specified layouts and color schemes.
		'fields'         => array(
			'display_total'   => true,
			'display_count'   => true,
			'layouts'         => array( 'simple' ),
			'schemes'         => array( 'simple-light', 'bold-light' ),
			'count_locations' => array( 'inside' ),
		),
		'layout'         => 'simple',
		'scheme'         => 'simple-light',
		'count_location' => 'inside',
	);

	$locations['post-meta'] = array(
		'shares'         => array( 'facebook', 'twitter', 'pinterest' ),
		'name'           => esc_html__( 'Post Meta', 'newsblock' ),
		'location'       => 'post-meta',
		'mode'           => 'cached',
		'before'         => '',
		'after'          => '',
		'display'        => true,
		'meta'           => array(
			'icons'  => true,
			'titles' => false,
			'labels' => false,
		),
		// Display only the specified layouts and color schemes.
		'fields'         => array(
			'layouts'         => array( 'simple' ),
			'schemes'         => array( 'simple-light', 'bold-light' ),
			'count_locations' => array( 'inside' ),
		),
		'display_total'  => false,
		'layout'         => 'simple',
		'scheme'         => 'simple-light',
		'count_location' => 'inside',
	);

	return $locations;
}
add_filter( 'powerkit_share_buttons_locations', 'csco_powerkit_new_share_buttons_locations' );

/**
 * Change Share Buttons Locations
 *
 * @param array $locations List of Locations.
 */
function csco_powerkit_change_share_buttons_locations( $locations = array() ) {

	unset( $locations['before-content'] );
	unset( $locations['after-content'] );

	$locations['highlight-text'] = array(
		'shares'        => array( 'facebook', 'twitter', 'pinterest', 'mail' ),
		'name'          => '⚡ Highlight Text',
		'location'      => 'highlight-text',
		'mode'          => 'none',
		'before'        => '',
		'after'         => '',
		'meta'          => array(
			'icons'  => true,
			'titles' => false,
			'labels' => false,
		),
		'fields'        => array(
			'display_total'   => false,
			'display_count'   => false,
			'title_locations' => array(),
			'count_locations' => array(),
			'label_locations' => array(),
			'layouts'         => array( 'simple' ),
			'schemes'         => array( 'simple-light', 'bold-light' ),
		),
		'display_total' => false,
		'layout'        => 'simple',
		'scheme'        => 'simple-light',
		'attrs'         => 'data-scheme="default"',
	);

	$locations['blockquote'] = array(
		'shares'        => array( 'facebook', 'twitter' ),
		'name'          => '⭐ Blockquote',
		'location'      => 'blockquote',
		'mode'          => 'none',
		'before'        => '',
		'after'         => '',
		'meta'          => array(
			'icons'  => true,
			'titles' => false,
			'labels' => true,
		),
		'fields'        => array(
			'display_total'   => false,
			'display_count'   => false,
			'title_locations' => array(),
			'count_locations' => array(),
			'label_locations' => array(),
			'layouts'         => array( 'simple' ),
			'schemes'         => array( 'simple-light', 'bold-light' ),
		),
		'display_total' => false,
		'layout'        => 'simple',
		'scheme'        => 'simple-light',
	);

	$locations['mobile-share'] = array(
		'shares'   => array( 'facebook', 'pinterest', 'twitter', 'mail' ),
		'name'     => '📱 Mobile Share',
		'location' => 'mobile-share',
		'mode'     => 'none',
		'before'   => '',
		'after'    => '',
		'meta'     => array(
			'icons'  => true,
			'titles' => false,
			'labels' => false,
		),
		'fields'   => array(
			'display_total'   => false,
			'display_count'   => true,
			'title_locations' => array(),
			'count_locations' => array(),
			'label_locations' => array(),
			'schemes'         => array( 'default', 'simple-dark-back', 'bold-bg', 'bold' ),
			'layouts'         => array( 'horizontal', 'left-side', 'right-side', 'popup' ),
		),
		'layout'   => 'horizontal',
	);

	return $locations;
}
add_filter( 'powerkit_share_buttons_locations', 'csco_powerkit_change_share_buttons_locations', 9999 );

/**
 * Register Floated Share Buttons Location
 */
function csco_powerkit_widget_author_image_size() {
	return 'csco-thumbnail-uncropped';
}
add_filter( 'powerkit_widget_author_image_size', 'csco_powerkit_widget_author_image_size' );

/**
 * Change Contributors widget post author description length.
 */
function csco_powerkit_widget_contributors_description_length() {
	return 80;
}
add_filter( 'powerkit_widget_contributors_description_length', 'csco_powerkit_widget_contributors_description_length' );

/**
 * Change Default Template for featured posts
 *
 * @param array $templates The templates.
 */
function csco_powerkit_featured_posts_default( $templates = array() ) {

	unset( $templates['large'] );

	$templates['list']['func']     = 'csco_powerkit_featured_default_template';
	$templates['numbered']['func'] = 'csco_powerkit_featured_default_template';

	$templates['large-1'] = array(
		'name' => esc_html__( 'Large Type 1', 'newsblock' ),
		'func' => 'csco_powerkit_featured_default_template',
	);

	$templates['large-2'] = array(
		'name' => esc_html__( 'Large Type 2', 'newsblock' ),
		'func' => 'csco_powerkit_featured_default_template',
	);

	return $templates;
}
add_filter( 'powerkit_featured_posts_templates', 'csco_powerkit_featured_posts_default' );

/**
 * Add new settings to Widget Posts
 *
 * @param array $settings The settings.
 */
function csco_powerkit_widget_posts_settings( $settings ) {

	$settings = array_merge(
		$settings,
		array(
			'image_orientation'  => 'square',
			'image_size'         => 'csco-smaller',
			'image_radius'       => '',
			'post_meta'          => array( 'category', 'author' ),
			'post_meta_category' => true,
		)
	);

	return $settings;
}
add_filter( 'powerkit_widget_posts_settings', 'csco_powerkit_widget_posts_settings' );

/**
 * Add new field to Widget Posts
 *
 * @param object $context  The context.
 * @param array  $params   The params.
 * @param array  $instance Current settings.
 */
function csco_powerkit_widget_posts_form_after( $context, $params, $instance ) {
	$image_sizes = csco_get_list_available_image_sizes();
	?>
		<!-- Image Orientation -->
		<p>
			<label for="<?php echo esc_attr( $context->get_field_id( 'image_orientation' ) ); ?>"><?php esc_html_e( 'Image Orientation', 'newsblock' ); ?>:</label>
			<select name="<?php echo esc_attr( $context->get_field_name( 'image_orientation' ) ); ?>" id="<?php echo esc_attr( $context->get_field_id( 'image_orientation' ) ); ?>" class="widefat">
				<option value="original" <?php selected( $params['image_orientation'], 'original' ); ?>><?php esc_html_e( 'Original', 'newsblock' ); ?></option>
				<option value="landscape" <?php selected( $params['image_orientation'], 'landscape' ); ?>><?php esc_html_e( 'Landscape 4:3', 'newsblock' ); ?></option>
				<option value="landscape-3-2" <?php selected( $params['image_orientation'], 'landscape-3-2' ); ?>><?php esc_html_e( 'Landscape 3:2', 'newsblock' ); ?></option>
				<option value="landscape-16-9" <?php selected( $params['image_orientation'], 'landscape-16-9' ); ?>><?php esc_html_e( 'Landscape 16:9', 'newsblock' ); ?></option>
				<option value="portrait" <?php selected( $params['image_orientation'], 'portrait' ); ?>><?php esc_html_e( 'Portrait 3:4', 'newsblock' ); ?></option>
				<option value="portrait-2-3" <?php selected( $params['image_orientation'], 'portrait-2-3' ); ?>><?php esc_html_e( 'Portrait 2:3', 'newsblock' ); ?></option>
				<option value="square" <?php selected( $params['image_orientation'], 'square' ); ?>><?php esc_html_e( 'Square', 'newsblock' ); ?></option>
			</select>
		</p>

		<!-- Images Size -->
		<p>
			<label for="<?php echo esc_attr( $context->get_field_id( 'image_size' ) ); ?>"><?php esc_html_e( 'Images Size', 'newsblock' ); ?>:</label>
			<select name="<?php echo esc_attr( $context->get_field_name( 'image_size' ) ); ?>" id="<?php echo esc_attr( $context->get_field_id( 'image_size' ) ); ?>" class="widefat">
				<?php foreach ( $image_sizes as $key => $size ) { ?>
					<option value="<?php echo esc_attr( $key ); ?>" <?php selected( $params['image_size'], $key ); ?>><?php echo esc_html( $size ); ?></option>
				<?php } ?>
			</select>
		</p>

		<!-- Image Border Radius -->
		<p>
			<label for="<?php echo esc_attr( $context->get_field_id( 'image_radius' ) ); ?>"><?php esc_html_e( 'Image Border Radius', 'newsblock' ); ?>:</label>
			<input class="widefat" id="<?php echo esc_attr( $context->get_field_id( 'image_radius' ) ); ?>" class="checkbox" name="<?php echo esc_attr( $context->get_field_name( 'image_radius' ) ); ?>" type="text" value="<?php echo esc_attr( $params['image_radius'] ); ?>" />
		</p>
	<?php
}
add_action( 'powerkit_widget_posts_form_after', 'csco_powerkit_widget_posts_form_after', 10, 3 );

/**
 * Featured Default Template Callback
 *
 * @param  array $posts    Array of posts.
 * @param  array $params   Array of params.
 * @param  array $instance Widget instance.
 */
function csco_powerkit_featured_default_template( $posts, $params, $instance ) {

	$style = null;

	if ( $params['image_radius'] ) {
		$style = sprintf( '--cs-image-border-radius: %s;', $params['image_radius'] );
	}

	if ( 'list' === $params['template'] ) {
		?>
		<article <?php post_class(); ?> style="<?php echo esc_attr( $style ); ?>">
			<div class="cs-entry__outer">
				<?php if ( has_post_thumbnail() ) { ?>
					<div class="cs-entry__inner cs-entry__thumbnail cs-overlay-ratio cs-ratio-<?php echo esc_attr( $params['image_orientation'] ); ?>">
						<div class="cs-overlay-background cs-overlay-transparent">
							<?php the_post_thumbnail( $params['image_size'] ); ?>
						</div>

						<a class="cs-overlay-link" href="<?php echo esc_url( get_permalink() ); ?>"></a>
					</div>
				<?php } ?>

				<div class="cs-entry__inner cs-entry__content">
					<?php csco_get_post_meta( array( 'category' ), (bool) $params['post_meta_compact'], true, $params['post_meta'] ); ?>

					<h3 class="cs-entry__title">
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h3>

					<?php csco_get_post_meta( array( 'author', 'date', 'views', 'shares', 'reading_time', 'comments' ), (bool) $params['post_meta_compact'], true, $params['post_meta'] ); ?>
				</div>
			</div>
		</article>
		<?php

	} elseif ( 'numbered' === $params['template'] ) {
		?>
		<article <?php post_class(); ?> style="<?php echo esc_attr( $style ); ?>">
			<div class="cs-entry__outer">
				<?php if ( has_post_thumbnail() ) { ?>
					<div class="cs-entry__inner cs-entry__thumbnail cs-overlay-ratio cs-ratio-<?php echo esc_attr( $params['image_orientation'] ); ?>">
						<div class="cs-overlay-background">
							<?php the_post_thumbnail( $params['image_size'] ); ?>
						</div>

						<a class="cs-overlay-link" href="<?php echo esc_url( get_permalink() ); ?>"></a>
					</div>
				<?php } ?>

				<div class="cs-entry__inner cs-entry__content">
					<?php csco_get_post_meta( array( 'category' ), (bool) $params['post_meta_compact'], true, $params['post_meta'] ); ?>

					<h3 class="cs-entry__title">
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h3>

					<?php csco_get_post_meta( array( 'author', 'date', 'views', 'shares', 'reading_time', 'comments' ), (bool) $params['post_meta_compact'], true, $params['post_meta'] ); ?>
				</div>
			</div>
		</article>
		<?php
	} elseif ( 'large-1' === $params['template'] ) {
		?>
		<article <?php post_class(); ?> style="<?php echo esc_attr( $style ); ?>">
			<div class="cs-entry__outer">
				<?php if ( has_post_thumbnail() ) { ?>
					<div class="cs-entry__inner cs-entry__thumbnail cs-overlay-ratio cs-ratio-<?php echo esc_attr( $params['image_orientation'] ); ?>">
						<div class="cs-overlay-background cs-overlay-transparent">
							<?php the_post_thumbnail( $params['image_size'] ); ?>
						</div>

						<a class="cs-overlay-link" href="<?php echo esc_url( get_permalink() ); ?>"></a>
					</div>
				<?php } ?>

				<div class="cs-entry__inner cs-entry__content">
						<?php csco_get_post_meta( array( 'category', 'date' ), (bool) $params['post_meta_compact'], true, $params['post_meta'] ); ?>

						<h3 class="cs-entry__title">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h3>

						<?php csco_get_post_meta( array( 'author', 'views', 'shares', 'reading_time', 'comments' ), (bool) $params['post_meta_compact'], true, $params['post_meta'] ); ?>
				</div>
			</div>
		</article>
		<?php
	} elseif ( 'large-2' === $params['template'] ) {
		?>
		<article <?php post_class(); ?> style="<?php echo esc_attr( $style ); ?>">
			<div class="cs-entry__outer">
				<?php if ( has_post_thumbnail() ) { ?>
					<div class="cs-entry__inner cs-entry__thumbnail cs-overlay-ratio cs-ratio-<?php echo esc_attr( $params['image_orientation'] ); ?>">
						<div class="cs-overlay-background cs-overlay-transparent">
							<?php the_post_thumbnail( $params['image_size'] ); ?>
						</div>

						<a class="cs-overlay-link" href="<?php echo esc_url( get_permalink() ); ?>"></a>
					</div>
				<?php } ?>

				<div class="cs-entry__inner cs-entry__content">
					<?php csco_get_post_meta( array( 'category' ), (bool) $params['post_meta_compact'], true, $params['post_meta'], array( 'category_type' => 'line' ) ); ?>

					<h3 class="cs-entry__title cs-entry__title-line">
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h3>

					<?php csco_get_post_meta( array( 'author', 'date', 'views', 'shares', 'reading_time', 'comments' ), (bool) $params['post_meta_compact'], true, $params['post_meta'] ); ?>
				</div>
			</div>
		</article>
		<?php
	}
}

/**
 * Change tiles featured categories
 *
 * @param string $locations List locations.
 */
function csco_powerkit_featured_categories_locations( $locations ) {
	$image_sizes = csco_get_list_available_image_sizes();

	$locations['tiles'] = array(
		'name'        => esc_html__( 'Tiles Style 1', 'newsblock' ),
		'icon'        => '<svg width="52" height="44" xmlns="http://www.w3.org/2000/svg"><g transform="translate(1 1)" stroke="#2D2D2D" fill="none" fill-rule="evenodd"><rect stroke-width="1.5" width="50" height="42" rx="3"/><g transform="translate(7 9)"><rect stroke-width="1.5" width="36" height="24" rx="1"/><path d="M11 10.5h14m-11 3h9" stroke-linecap="round" stroke-linejoin="round"/></g></g></svg>',
		'location'    => array(),
		'template'    => get_template_directory() . '/template-parts/blocks/categories-tiles-1.php',
		'sections'    => array(
			'general'    => array(
				'title'    => esc_html__( 'Block Settings', 'newsblock' ),
				'priority' => 5,
				'open'     => true,
			),
			'typography' => array(
				'title'    => esc_html__( 'Typography Settings', 'newsblock' ),
				'priority' => 10,
			),
		),
		'hide_fields' => array(
			'number',
			'bgOverlay',
			'bgOpacityOverlay',
		),
		'fields'      => array(
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
						'element'  => '$ .cs-tiles-categories__wrap',
						'property' => '--cs-categories-grid-columns',
						'suffix'   => '!important',
					),
				),
			),
			array(
				'key'            => 'gap_posts',
				'label'          => esc_html__( 'Gap between Categories', 'newsblock' ),
				'type'           => 'dimension',
				'section'        => 'general',
				'responsive'     => true,
				'default'        => '40px',
				'default_tablet' => '40px',
				'default_mobile' => '40px',
				'output'         => array(
					array(
						'element'  => '$ .cs-tiles-categories__wrap',
						'property' => '--cs-categories-grid-gap',
						'suffix'   => '!important',
					),
				),
			),
			array(
				'key'     => 'descriptionLength',
				'label'   => esc_html__( 'Description length', 'newsblock' ),
				'section' => 'general',
				'type'    => 'number',
				'step'    => 1,
				'min'     => 0,
				'max'     => 1000,
				'default' => 100,
			),
			array(
				'key'      => 'orientation',
				'label'    => esc_html__( 'Image Orientation', 'newsblock' ),
				'section'  => 'general',
				'type'     => 'select',
				'multiple' => false,
				'choices'  => array(
					'landscape'      => esc_html__( 'Landscape 4:3', 'newsblock' ),
					'landscape-3-2'  => esc_html__( 'Landscape 3:2', 'newsblock' ),
					'landscape-16-9' => esc_html__( 'Landscape 16:9', 'newsblock' ),
					'portrait'       => esc_html__( 'Portrait 3:4', 'newsblock' ),
					'portrait-2-3'   => esc_html__( 'Portrait 2:3', 'newsblock' ),
					'square'         => esc_html__( 'Square', 'newsblock' ),
				),
				'default'  => 'landscape',
			),
			array(
				'key'     => 'imageSize',
				'label'   => esc_html__( 'Image Size', 'newsblock' ),
				'section' => 'general',
				'type'    => 'select',
				'default' => 'large',
				'choices' => $image_sizes,
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
						'element'  => '$ .cs-tiles-categories__name',
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
		),
	);

	$locations['tiles-2'] = array(
		'name'        => esc_html__( 'Tiles Style 2', 'newsblock' ),
		'icon'        => '<svg width="52" height="44" xmlns="http://www.w3.org/2000/svg"><g transform="translate(1 1)" stroke="#2D2D2D" fill="none" fill-rule="evenodd"><rect stroke-width="1.5" width="50" height="42" rx="3"/><g transform="translate(7 9)"><rect stroke-width="1.5" width="36" height="24" rx="1"/><path d="M11 10.5h14m-11 3h9" stroke-linecap="round" stroke-linejoin="round"/></g></g></svg>',
		'location'    => array(),
		'template'    => get_template_directory() . '/template-parts/blocks/categories-tiles-2.php',
		'sections'    => array(),
		'hide_fields' => array(
			'number',
			'bgOverlay',
			'bgOpacityOverlay',
		),
		'fields'      => array(
			array(
				'key'     => 'descriptionLength',
				'label'   => esc_html__( 'Description length', 'newsblock' ),
				'section' => 'general',
				'type'    => 'number',
				'step'    => 1,
				'min'     => 0,
				'max'     => 1000,
				'default' => 100,
			),
			array(
				'key'      => 'orientation',
				'label'    => esc_html__( 'Image Orientation', 'newsblock' ),
				'section'  => 'general',
				'type'     => 'select',
				'multiple' => false,
				'choices'  => array(
					'landscape'      => esc_html__( 'Landscape 4:3', 'newsblock' ),
					'landscape-3-2'  => esc_html__( 'Landscape 3:2', 'newsblock' ),
					'landscape-16-9' => esc_html__( 'Landscape 16:9', 'newsblock' ),
					'portrait'       => esc_html__( 'Portrait 3:4', 'newsblock' ),
					'portrait-2-3'   => esc_html__( 'Portrait 2:3', 'newsblock' ),
					'square'         => esc_html__( 'Square', 'newsblock' ),
				),
				'default'  => 'landscape',
			),
			array(
				'key'     => 'imageSize',
				'label'   => esc_html__( 'Image Size', 'newsblock' ),
				'section' => 'general',
				'type'    => 'select',
				'default' => 'large',
				'choices' => $image_sizes,
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
						'element'  => '$ .cs-tiles-categories__title',
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
		),
	);

	$locations['tiles-3'] = array(
		'name'        => esc_html__( 'Tiles Style 3', 'newsblock' ),
		'icon'        => '<svg width="52" height="44" xmlns="http://www.w3.org/2000/svg"><g transform="translate(1 1)" stroke="#2D2D2D" fill="none" fill-rule="evenodd"><rect stroke-width="1.5" width="50" height="42" rx="3"/><g transform="translate(7 9)"><rect stroke-width="1.5" width="36" height="24" rx="1"/><path d="M11 10.5h14m-11 3h9" stroke-linecap="round" stroke-linejoin="round"/></g></g></svg>',
		'location'    => array(),
		'template'    => get_template_directory() . '/template-parts/blocks/categories-tiles-3.php',
		'sections'    => array(),
		'hide_fields' => array(
			'number',
			'bgOverlay',
			'bgOpacityOverlay',
		),
		'fields'      => array(
			array(
				'key'      => 'orientation',
				'label'    => esc_html__( 'Image Orientation', 'newsblock' ),
				'section'  => 'general',
				'type'     => 'select',
				'multiple' => false,
				'choices'  => array(
					'landscape'      => esc_html__( 'Landscape 4:3', 'newsblock' ),
					'landscape-3-2'  => esc_html__( 'Landscape 3:2', 'newsblock' ),
					'landscape-16-9' => esc_html__( 'Landscape 16:9', 'newsblock' ),
					'portrait'       => esc_html__( 'Portrait 3:4', 'newsblock' ),
					'portrait-2-3'   => esc_html__( 'Portrait 2:3', 'newsblock' ),
					'square'         => esc_html__( 'Square', 'newsblock' ),
				),
				'default'  => 'landscape',
			),
			array(
				'key'     => 'imageSize',
				'label'   => esc_html__( 'Image Size', 'newsblock' ),
				'section' => 'general',
				'type'    => 'select',
				'default' => 'large',
				'choices' => $image_sizes,
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
						'element'  => '$ .cs-tiles-categories__name',
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
		),
	);

	ksort( $locations );

	return $locations;
}
add_filter( 'powerkit_featured_categories_locations', 'csco_powerkit_featured_categories_locations' );

/**
 * Change settings of opt-in-form
 *
 * @param array $blocks All registered blocks.
 */
function csco_change_settings_opt_in_form( $blocks ) {

	foreach ( $blocks as $key => $block ) {

		if ( 'canvas/opt-in-form' === $block['name'] ) {
			csco_smart_array_push( $blocks[ $key ]['fields'], array(
				'key'     => 'colorBasicButtonBG',
				'label'   => esc_html__( 'Button Background', 'newsblock' ),
				'section' => 'general',
				'type'    => 'color',
				'output'  => array(
					array(
						'element'  => '$',
						'property' => '--cs-color-button',
						'suffix'   => '!important',
					),
				),
			), false, true );
			csco_smart_array_push( $blocks[ $key ]['fields'], array(
				'key'     => 'colorBasicButton',
				'label'   => esc_html__( 'Button Color', 'newsblock' ),
				'section' => 'general',
				'type'    => 'color',
				'output'  => array(
					array(
						'element'  => '$',
						'property' => '--cs-color-button-contrast',
						'suffix'   => '!important',
					),
				),
			), false, true );
			csco_smart_array_push( $blocks[ $key ]['fields'], array(
				'key'     => 'colorBasicButtonBGHover',
				'label'   => esc_html__( 'Button Background Hover', 'newsblock' ),
				'section' => 'general',
				'type'    => 'color',
				'output'  => array(
					array(
						'element'  => '$',
						'property' => '--cs-color-button-hover',
						'suffix'   => '!important',
					),
				),
			), false, true );
			csco_smart_array_push( $blocks[ $key ]['fields'], array(
				'key'     => 'colorBasicButtonHover',
				'label'   => esc_html__( 'Button Color Hover', 'newsblock' ),
				'section' => 'general',
				'type'    => 'color',
				'output'  => array(
					array(
						'element'  => '$',
						'property' => '--cs-color-button-hover-contrast',
						'suffix'   => '!important',
					),
				),
			), false, true );
		}
	}

	return $blocks;
}
add_filter( 'canvas_register_block_type', 'csco_change_settings_opt_in_form', 999 );

/**
 * Simplify widget title
 *
 * @param string $widget_title Widget title.
 * @param string $title        Title.
 */
function csco_powerkit_simplify_widget_title( $widget_title, $title ) {
	$widget_title = sprintf( '<h5 class="pk-main-title">%s</h5>', $title );

	return $widget_title;
}
add_filter( 'powerkit_widget_about_title', 'csco_powerkit_simplify_widget_title', 10, 2 );
add_filter( 'powerkit_widget_author_title', 'csco_powerkit_simplify_widget_title', 10, 2 );

/**
 * Add exclude selectors of TOC
 *
 * @param string $list List selectors.
 */
function csco_powerkit_toc_exclude_selectors( $list ) {
	$list .= '|.cs-entry__title';

	return $list;
}
add_filter( 'pk_toc_exclude', 'csco_powerkit_toc_exclude_selectors' );

/**
 * Exclude Inline Posts posts from related posts block
 *
 * @param array $args Array of WP_Query args.
 */
function csco_related_posts_args( $args ) {
	global $powerkit_inline_posts;
	if ( ! $powerkit_inline_posts ) {
		return $args;
	}
	$post__not_in         = $args['post__not_in'];
	$post__not_in         = array_unique( array_merge( $post__not_in, $powerkit_inline_posts ) );
	$args['post__not_in'] = $post__not_in;
	return $args;
}
