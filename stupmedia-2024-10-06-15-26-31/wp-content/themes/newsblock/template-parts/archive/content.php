<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Newsblock
 */

$options = get_query_var( 'options' );
?>

<?php do_action( 'csco_archive_post_before' ); ?>

<article <?php post_class(); ?>>

	<div class="cs-entry__outer">
		<?php
		if ( has_post_thumbnail() ) {
			$options['thumbnail_meta'] = csco_get_post_meta( array( 'reading_time' ), false, false, $options['meta'] );

			?>
				<div class="cs-entry__inner cs-entry__thumbnail cs-entry__overlay cs-overlay-ratio cs-ratio-<?php echo esc_attr( $options['image_orientation'] ); ?>" data-scheme="inverse">

					<?php if ( $options['thumbnail_meta'] || $options['view_link'] ) { ?>
						<div class="cs-overlay-background">
							<?php the_post_thumbnail( $options['image_size'] ); ?>
						</div>

						<div class="cs-overlay-content">
							<?php if ( $options['view_link'] ) { ?>
								<span class="cs-entry__read-more"><?php echo esc_html( apply_filters( 'csco_filter_label_more', null ) ); ?></span>
							<?php } ?>

							<?php csco_get_post_meta( array( 'reading_time' ), false, true, $options['meta'] ); ?>
						</div>
					<?php } else { ?>
						<div class="cs-overlay-background cs-overlay-transparent">
							<?php the_post_thumbnail( $options['image_size'] ); ?>
						</div>
					<?php } ?>

					<?php csco_get_video_background( 'archive' ); ?>

					<?php csco_the_post_format_icon(); ?>

					<a href="<?php echo esc_url( get_permalink() ); ?>" class="cs-overlay-link"></a>
				</div>
			<?php

		}
		?>

		<div class="cs-entry__inner cs-entry__content">

			<?php csco_get_post_meta( array( 'category' ), false, true, $options['meta'] ); ?>

			<?php the_title( '<h2 class="cs-entry__title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' ); ?>

			<?php
			$post_excerpt = get_the_excerpt();

			if ( $post_excerpt ) {
				?>
				<div class="cs-entry__excerpt">
					<?php echo wp_kses( $post_excerpt, 'post' ); ?>
				</div>
			<?php } ?>

			<?php csco_get_post_meta( array( 'author', 'date', 'views', 'shares', 'comments' ), false, true, $options['meta'] ); ?>
		</div>
	</div>
</article>

<?php do_action( 'csco_archive_post_after' ); ?>