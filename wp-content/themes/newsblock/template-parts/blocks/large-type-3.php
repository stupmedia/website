<?php
/**
 * Block Large Type 3
 *
 * @var        $attributes - block attributes
 * @var        $options - layout options
 * @var        $posts - all available posts
 *
 * @package Newsblock
 */

// Check if there're enough posts in the query.
if ( $posts->have_posts() ) { ?>
	<div class="<?php echo esc_attr( $attributes['className'] ); ?>">
		<div class="cnvs-block-posts-inner">
		<?php
		while ( $posts->have_posts() ) {
			$posts->the_post();
			?>
			<article <?php post_class(); ?>>
				<div class="cs-entry__outer">
					<?php if ( has_post_thumbnail() ) { ?>
						<div class="cs-entry__inner cs-entry__thumbnail cs-overlay-ratio cs-ratio-wide">
							<div class="cs-overlay-background cs-overlay-transparent">
								<a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_post_thumbnail( $options['imageSize'] ); ?></a>

								<?php
								if ( isset( $options['video'] ) && $options['video'] ) {
									csco_get_video_background( null, null, 'large', true, true );
								}
								?>
							</div>
						</div>
					<?php } ?>

					<div class="cs-entry__inner cs-entry__content">
						<?php
							cnvs_block_post_meta( array_merge( $options, array(
								'meta-settings' => array(
									'category_type' => 'line',
									'author_avatar' => true,
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
		<?php } ?>
		</div>
	</div>
	<?php
} else {
	cnvs_alert_warning( esc_html__( 'There aren\'t enough posts that match the filter criteria.', 'newsblock' ) );
}
