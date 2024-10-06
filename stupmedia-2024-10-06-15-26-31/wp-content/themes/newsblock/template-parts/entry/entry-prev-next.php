<?php
/**
 * The template part for displaying post prev next section.
 *
 * @package Newsblock
 */

$options = array(
	'image_orientation' => get_theme_mod( 'post_prev_next_image_orientation', 'square' ),
	'image_size'        => get_theme_mod( 'post_prev_next_image_size', 'csco-small' ),
);

$prev_post = get_previous_post();
$next_post = get_next_post();

if ( $prev_post || $next_post ) {
	$layout = get_theme_mod( 'post_prev_next_layout', 'type-1' );

	switch ( $layout ) {
		case 'type-1':
			$title_class = 'cs-entry__title';
			break;
		case 'type-2':
			$title_class = 'cs-entry__title cs-entry__title-line';
			break;
	}
	?>
	<div class="cs-entry__prev-next cs-entry__prev-next-<?php echo esc_attr( $layout ); ?>">
		<?php
		// Prev post.
		if ( $prev_post ) {
			$post = $prev_post;

			setup_postdata( $post );
			?>
			<div class="cs-entry__prev-next-item cs-entry__prev">
				<a class="cs-entry__prev-next-link" href="<?php the_permalink(); ?>"></a>

				<div class="cs-entry__prev-next-label">
					<span class="cs-entry__prev-next-arrow">
						<i class="cs-icon cs-icon-chevron-left"></i>
					</span>
					<span class="cs-entry__prev-next-text">
						<?php esc_html_e( 'Previous Article', 'newsblock' ); ?>
					</span>
				</div>

				<div class="cs-entry">
					<div class="cs-entry__outer">
						<?php if ( has_post_thumbnail() ) { ?>
							<div class="cs-entry__thumbnail cs-entry__inner cs-overlay-ratio cs-ratio-<?php echo esc_attr( $options['image_orientation'] ); ?>">
								<div class="cs-overlay-background cs-overlay-transparent">
									<?php the_post_thumbnail( $options['image_size'] ); ?>
								</div>
							</div>
						<?php } ?>

						<div class="cs-entry__inner cs-entry__content ">
							<h2 class="<?php echo esc_attr( $title_class ); ?>">
								<span><?php echo esc_attr( $prev_post->post_title ); ?></span>
							</h2>

							<?php
								csco_get_post_meta( array( 'category', 'author', 'date', 'views', 'shares', 'reading_time', 'comments' ), false, true, 'post_prev_next_meta', array(
									'author_avatar' => get_theme_mod( 'post_prev_next_meta_author_avatar', true ),
								) );
							?>
						</div>
					</div>
				</div>
			</div>
			<?php
			wp_reset_postdata();
		}

		// Next post.
		if ( $next_post ) {
			$post = $next_post;

			setup_postdata( $post );
			?>
			<div class="cs-entry__prev-next-item cs-entry__next">
				<a class="cs-entry__prev-next-link" href="<?php the_permalink(); ?>"></a>

				<div class="cs-entry__prev-next-label">
					<span class="cs-entry__prev-next-arrow">
						<i class="cs-icon cs-icon-chevron-left"></i>
					</span>
					<span class="cs-entry__prev-next-text">
						<?php esc_html_e( 'Next Article', 'newsblock' ); ?>
					</span>
				</div>

				<div class="cs-entry">
					<div class="cs-entry__outer">
						<?php if ( has_post_thumbnail() ) { ?>
							<div class="cs-entry__thumbnail cs-entry__inner cs-overlay-ratio cs-ratio-<?php echo esc_attr( $options['image_orientation'] ); ?>">
								<div class="cs-overlay-background cs-overlay-transparent">
									<?php the_post_thumbnail( $options['image_size'] ); ?>
								</div>
							</div>
						<?php } ?>

						<div class="cs-entry__inner cs-entry__content ">
							<h2 class="<?php echo esc_attr( $title_class ); ?>">
								<span><?php echo esc_attr( $next_post->post_title ); ?></span>
							</h2>

							<?php
								csco_get_post_meta( array( 'category', 'author', 'date', 'views', 'shares', 'reading_time', 'comments' ), false, true, 'post_prev_next_meta', array(
									'author_avatar' => get_theme_mod( 'post_prev_next_meta_author_avatar', true ),
								) );
							?>
						</div>
					</div>
				</div>
			</div>
			<?php
			wp_reset_postdata();
		}
		?>
	</div>
	<?php
}
