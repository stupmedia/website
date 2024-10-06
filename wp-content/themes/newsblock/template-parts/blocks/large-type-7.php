<?php
/**
 * Block Large Type 7
 *
 * @var        $attributes - block attributes
 * @var        $options - layout options
 * @var        $posts - all available posts
 *
 * @package Newsblock
 */

// Check if there're enough posts in the query.
if ( $posts->have_posts() ) {

	$posts->the_post();
	?>
	<div class="<?php echo esc_attr( $attributes['className'] ); ?>">
		<div class="cnvs-block-posts-inner">
			<div class="cs-layout-large__wrap cs-overlay-ratio">
				<div class="cs-overlay-background">
					<?php cnvs_block_post_overlay_thumbnail( $options, $attributes, 'large' ); ?>
				</div>

				<a href="<?php echo esc_url( get_permalink() ); ?>" class="cs-overlay-link"></a>

				<div class="cs-layout-large__inner cs-container" data-scheme="inverse">
					<div class="cs-layout-large__row">
						<div class="cs-layout-large__col">
							<article <?php post_class(); ?>>
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
							</article>
						</div>
						<div class="cs-layout-large__col">
							<?php
							while ( $posts->have_posts() ) {
								$posts->the_post();

								$options['video'] = false;
								?>
								<article <?php post_class(); ?>>
									<div class="cs-entry__outer">
										<div class="cs-entry__wrapper cs-entry__inner">
											<?php cnvs_block_post_thumbnail( $options, $attributes, 'small' ); ?>

											<div class="cs-entry__inner cs-entry__content ">
													<?php cnvs_block_post_title( $options, 'small' ); ?>

												<?php
													cnvs_block_post_meta( array_merge( $options, array(
														'meta-settings' => array(
															'prefix' => 'small',
														),
													) ), array( 'category', 'author', 'date', 'views', 'shares', 'reading_time', 'comments' ) );
												?>
											</div>
										</div>
									</div>
								</article>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	wp_reset_postdata();
} else {
	cnvs_alert_warning( esc_html__( 'There aren\'t enough posts that match the filter criteria.', 'newsblock' ) );
}
