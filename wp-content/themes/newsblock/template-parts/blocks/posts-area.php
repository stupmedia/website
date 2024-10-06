<?php
/**
 * Posts Area
 *
 * @package Newsblock
 */

// Check if there're posts in the query.
if ( $posts->have_posts() ) {

	$class_name = $attributes['className'];

	// Pagination type.
	$pagination_type = 'none';

	if ( isset( $options['paginationTypeAlt'] ) && $options['paginationTypeAlt'] ) {
		$pagination_type = $options['paginationTypeAlt'];
	}

	if ( isset( $options['paginationType'] ) && $options['paginationType'] ) {
		$pagination_type = $options['paginationType'];
	}

	// Load more data.
	$load_more_data = null;

	if ( 'ajax' === $pagination_type || 'infinite' === $pagination_type ) {

		if ( $posts->max_num_pages > 1 ) {

			if ( 'infinite' === $pagination_type ) {
				$posts->infinite = true;
			} else {
				$posts->infinite = false;
			}

			// Theme data.
			$data = array(
				'infinite_load' => $posts->infinite,
				'query_vars'    => $posts->query,
			);

			$args = csco_get_load_more_args( $data, $attributes, $options );

			// Set area count.
			$args['posts_per_page'] = $options['areaPostsCount'];

			$load_more_data = cnvs_encode_data( $args );
		}
	}

	// Min Height.
	$min_height = isset( $options['height'] ) ? trim( $options['height'] ) : null;

	// Posts Layout.
	$main_classes = 'cs-block-posts-layout-' . esc_attr( $attributes['layout'] );

	if ( isset( $options['columns'] ) && isset( $options['columns_tablet'] ) && isset( $options['columns_tablet'] ) &&
		$options['columns'] === $options['columns_tablet'] && $options['columns_tablet'] === $options['columns_mobile'] ) {

		$main_classes .= ' cs-display-column';
	}

	// Image Width.
	if ( isset( $options['image_width'] ) && $options['image_width'] ) {
		$main_classes .= ' cs-posts-area__image-width-' . $options['image_width'];
	}

	// Borders Between.
	if ( isset( $options['bordersBetweenPosts'] ) && $options['bordersBetweenPosts'] ) {
		$main_classes .= ' cs-display-borders-between-posts';
	}
	?>
	<div class="<?php echo esc_attr( $class_name ); ?>" data-layout="<?php echo esc_attr( $attributes['layout'] ); ?>" data-min-height="<?php echo esc_attr( $min_height ); ?>">
		<div class="cs-posts-area" data-posts-area="<?php echo esc_attr( $load_more_data ); ?>">
			<div class="cs-posts-area__outer">
				<div class="cs-posts-area__main <?php echo esc_attr( $main_classes ); ?>">
					<?php
					while ( $posts->have_posts() ) {
						$posts->the_post();

						// Set post class default.
						$options['post_class'] = null;

						set_query_var( 'attributes', $attributes );
						set_query_var( 'options', $options );

						get_template_part( 'template-parts/blocks/posts-area/' . $attributes['layout'] );
					}
					?>
				</div>
			</div>

			<?php
			if ( 'standard' === $pagination_type ) {

				if ( $posts->max_num_pages > 1 ) {

					echo '<div class="cs-posts-area__pagination">';

					$total_pages = $posts->max_num_pages;

					$current_page = max( 1, get_query_var( 'paged' ) );

					$base_url = cnvs_get_block_posts_page_url( $attributes );

					if ( $base_url ) {
						echo '<nav class="navigation pagination" role="navigation">';
							echo '<div class="nav-links">';
								echo cnvs_paginate_links(
									array(
										'base'             => $base_url,
										'format'           => '%#%',
										'current'          => $current_page,
										'total'            => $total_pages,
										'prev_text'        => esc_html__( 'Previous', 'newsblock' ),
										'next_text'        => esc_html__( 'Next', 'newsblock' ),
										'merge_query_vars' => false,
									)
								);
							echo '</div>';
						echo '</nav>';
					} else {
						cnvs_alert_warning( esc_html__( 'Please select a page for your blog posts in Settings &rarr; Reading to display pagination.', 'newsblock' ) );
					}

					echo '</div>';
				}
			}
			?>
		</div>
	</div>
	<?php
} else {
	cnvs_alert_warning( esc_html__( 'There aren\'t enough posts that match the filter criteria.', 'newsblock' ) );
}
