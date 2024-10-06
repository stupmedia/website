<?php
/**
 * Block Large Type 9
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
			<div class="cs-layout-large__wrap cs-overlay-ratio">
				<div class="cs-overlay-background__wrapper">
					<?php
					$counter = 0;
					foreach ( $posts->posts as $key => $item ) {
						$counter++;
						?>
						<div class="cs-overlay-background <?php echo 1 === $counter ? 'active' : ''; ?>">
							<?php echo get_the_post_thumbnail( $item->ID, $options['imageSize'] ); ?>

							<?php
							if ( isset( $options['video'] ) && $options['video'] ) {
								csco_get_video_background( null, $item->ID, 'default', false, false );
							}
							?>
						</div>
					<?php } ?>
				</div>
				<div class="cs-layout-large__inner" data-scheme="inverse">
					<div class="cs-layout-large__row">
						<?php
						$counter = 0;
						while ( $posts->have_posts() ) {
							$posts->the_post();

							$counter++;
							?>
							<div class="cs-layout-large__col <?php echo 1 === $counter ? 'active' : ''; ?>">
								<article class="cs-entry">
									<div class="cs-entry__outer">
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
									</div>
									<a href="<?php echo esc_url( get_permalink() ); ?>" class="cs-overlay-link"></a>
								</article>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
} else {
	cnvs_alert_warning( esc_html__( 'There aren\'t enough posts that match the filter criteria.', 'newsblock' ) );
}
