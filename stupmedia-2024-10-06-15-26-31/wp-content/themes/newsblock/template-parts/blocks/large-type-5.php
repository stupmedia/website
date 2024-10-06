<?php
/**
 * Block Large Type 5
 *
 * @var        $attributes - block attributes
 * @var        $options - layout options
 * @var        $posts - all available posts
 *
 * @package Newsblock
 */

// Check if there're enough posts in the query.
if ( $posts->have_posts() ) {

	$show_content_excerpt = isset( $options['showExcerpt'] ) ? $options['showExcerpt'] : false;
	$show_content_meta    = cnvs_block_post_meta( $options, array( 'author', 'date', 'views', 'shares', 'reading_time', 'comments' ), false );

	if ( $show_content_excerpt || $show_content_meta ) {
		$attributes['className'] .= ' cs-overlay-gradient';
	}
	?>
	<div class="<?php echo esc_attr( $attributes['className'] ); ?>">
		<div class="cnvs-block-posts-inner">
			<div class="cs-layout-large__row" data-scheme="inverse">
				<?php
				while ( $posts->have_posts() ) {
					$posts->the_post();
					?>
					<div class="cs-layout-large__col">
						<article <?php post_class(); ?>>
							<div class="cs-entry__outer cs-entry__overlay cs-overlay-ratio" data-scheme="inverse">
								<?php if ( has_post_thumbnail() ) { ?>
									<div class="cs-entry__inner cs-entry__thumbnail">
										<div class="cs-overlay-background">
											<?php the_post_thumbnail( $options['imageSize'] ); ?>

											<?php
											if ( isset( $options['video'] ) && $options['video'] ) {
												csco_get_video_background( null, null, 'large', $options['video_contrlos'], $options['video_contrlos'] );
											}
											?>
										</div>
									</div>
								<?php } ?>

								<div class="cs-entry__inner cs-overlay-content cs-entry__content">
									<?php
										cnvs_block_post_meta( array_merge( $options, array(
											'meta-settings' => array(
												'category_type' => 'line',
											),
										) ), array( 'category' ) );
									?>

									<?php cnvs_block_post_title( $options, null, 'cs-entry__title-line' ); ?>

									<?php cnvs_block_post_excerpt( $options ); ?>

									<?php
										cnvs_block_post_meta( array_merge( $options, array(
											'meta-settings' => array(
												'author_avatar' => true,
											),
										) ), array( 'author', 'date', 'views', 'shares', 'reading_time', 'comments' ) );
									?>
								</div>

								<a href="<?php echo esc_url( get_permalink() ); ?>" class="cs-overlay-link"></a>
							</div>
						</article>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<?php
} else {
	cnvs_alert_warning( esc_html__( 'There aren\'t enough posts that match the filter criteria.', 'newsblock' ) );
}
