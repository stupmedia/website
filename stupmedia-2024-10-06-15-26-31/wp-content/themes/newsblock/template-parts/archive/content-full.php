<?php
/**
 * Template part for displaying full posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Newsblock
 */

// Thumbnail size.
$thumbnail_size = 'csco-medium';

if ( 'disabled' === csco_get_page_sidebar() ) {
	$thumbnail_size = 'csco-large';
}

if ( 'uncropped' === csco_get_page_preview() ) {
	$thumbnail_size = sprintf( '%s-uncropped', $thumbnail_size );
}
?>

<?php do_action( 'csco_archive_post_before' ); ?>

<article <?php post_class(); ?>>
	<div class="cs-entry__header cs-entry__header-standard">
		<div class="cs-entry__header-inner">

			<?php if ( has_post_thumbnail() ) { ?>
				<figure class="cs-entry__post-media post-media">
					<a href="<?php echo esc_url( get_permalink() ); ?>">
						<?php the_post_thumbnail( $thumbnail_size ); ?>
					</a>
				</figure>
			<?php } ?>

			<div class="cs-entry__header-info">
				<?php
				csco_get_post_meta( 'category', false, true, $options['meta'], array(
					'category_type' => 'line',
				) );

				the_title( '<h2 class="cs-entry__title cs-entry__title-line"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );

				csco_get_post_meta( array( 'author', 'date', 'views', 'shares', 'reading_time', 'comments' ), false, true, $options['meta'], array(
					'author_avatar' => get_theme_mod( 'post_meta_author_avatar', true ),
				) );
				?>
			</div>
		</div>
	</div>

	<!-- ENTRY WRAP HTML -->
	<div class="cs-entry__wrap">
		<div class="cs-entry__container">
			<div class="cs-entry__content-wrap">
				<div class="entry-content cs-entry-type-<?php echo esc_attr( $options['summary_type'] ); ?> ">
					<?php
					if ( 'summary' === $options['summary_type'] ) {
						the_excerpt();
					} else {
						$more_link_text = false;

						if ( $options['more_button'] ) {
							$more_link_text = sprintf(
								/* translators: %s: Name of current post */
								__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'newsblock' ),
								get_the_title()
							);
						}

						the_content( $more_link_text );
					}
					?>
				</div>

				<?php
				if ( 'summary' === $options['summary_type'] && $options['more_button'] ) {
					?>
						<div class="cs-entry__read-more">
							<a class="cs-button" href="<?php echo esc_url( get_permalink() ); ?>">
								<?php echo esc_html( apply_filters( 'csco_filter_label_more', null ) ); ?>
							</a>
						</div>
					<?php
				}
				?>
			</div>
		</div>
	</div>
</article>

<?php do_action( 'csco_archive_post_after' ); ?>