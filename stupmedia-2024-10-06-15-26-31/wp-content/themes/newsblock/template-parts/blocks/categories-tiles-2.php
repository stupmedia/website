<?php
/**
 * Tiles Categories block template
 *
 * @package Newsblock
 */

$params = array(
	'layout'     => $attributes['layout'],
	'filter_ids' => $attributes['filter_ids'],
	'orderby'    => $attributes['orderby'],
	'order'      => $attributes['order'],
	'maximum'    => $attributes['maximum'],
);

echo '<div class="' . esc_attr( $attributes['className'] ) . '" ' . ( isset( $attributes['anchor'] ) ? ' id="' . esc_attr( $attributes['anchor'] ) . '"' : '' ) . '>';

// Convert filter ids.
if ( $params['filter_ids'] ) {

	$params['filter_ids'] = wp_parse_list( $params['filter_ids'] );

	foreach ( $params['filter_ids'] as $key => $slug ) {
		$term = get_term_by( 'slug', $slug, 'category' );

		if ( isset( $term->term_id ) ) {
			$params['filter_ids'][ $key ] = $term->term_id;
		}
	}
}

$params = array_merge( array(
	'title'      => '',
	'layout'     => 'tiles',
	'filter_ids' => '',
	'orderby'    => 'name',
	'order'      => 'ASC',
	'maximum'    => 0,
), $params );
?>
	<div class="cs-tiles-categories cs-tiles-categories-2">
		<div class="cs-tiles-categories__wrap">
			<?php
			$params['maximum'] = intval( $params['maximum'] );

			// Get terms.
			$categories = get_terms( array(
				'include'    => $params['filter_ids'],
				'orderby'    => $params['orderby'],
				'order'      => $params['order'],
				'number'     => $params['maximum'] > 0 ? $params['maximum'] : '',
				'taxonomy'   => 'category',
				'hide_empty' => true,
			) );

			foreach ( $categories as $category ) {
				$featured_image = get_term_meta( $category->term_id, 'powerkit_featured_image', true );

				$tag = isset( $options['typographyHeadingTag'] ) ? $options['typographyHeadingTag'] : 'h2';
				?>
					<div class="cs-tiles-categories__item">
						<div class="cs-tiles-categories__inner">
							<?php if ( $featured_image ) { ?>
								<div class="cs-tiles-categories__thumbnail cs-entry__overlay cs-entry__thumbnail cs-overlay-ratio cs-ratio-<?php echo esc_attr( $options['orientation'] ); ?>">
									<div class="cs-overlay-background cs-overlay-transparent">
										<?php echo wp_get_attachment_image( $featured_image, $options['imageSize'] ); ?>
									</div>
									<a href="<?php echo esc_url( get_term_link( $category->term_id ) ); ?>"></a>
								</div>
							<?php } ?>

							<div class="cs-tiles-categories__content">
								<<?php echo esc_html( $tag ); ?> class="cs-tiles-categories__title cs-entry__title-line">
									<a href="<?php echo esc_url( get_term_link( $category->term_id ) ); ?>">
										<?php echo esc_html( $category->name ); ?>
									</a>
								</<?php echo esc_html( $tag ); ?>>

								<?php if ( $options['descriptionLength'] && $category->description ) { ?>
									<div class="cs-tiles-categories__excerpt">
										<?php echo wp_kses( csco_str_truncate( $category->description, $options['descriptionLength'] ), 'post' ); ?>
									</div>
								<?php } ?>
							</div>
						</div>
					</div>
				<?php
			}
			?>
		</div>
	</div>
<?php

echo '</div>';
