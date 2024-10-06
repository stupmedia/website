<?php
/**
 * Block Tile Type 1
 *
 * @var        $attributes - block attributes
 * @var        $options - layout options
 * @var        $posts - all available posts
 *
 * @package Newsblock
 */

$show_content_excerpt = isset( $options['showExcerpt'] ) ? $options['showExcerpt'] : false;
$show_content_meta    = cnvs_block_post_meta( $options, array( 'author', 'date', 'views', 'shares', 'reading_time', 'comments' ), false );

if ( $show_content_excerpt || $show_content_meta ) {
	$options['post_class'] .= ' cs-overlay-gradient';
}
?>
<article <?php post_class( $options['post_class'] ); ?>>
	<div class="cs-entry__outer cs-entry__overlay cs-overlay-ratio cs-ratio-<?php echo esc_attr( $options['imageOrientation'] ); ?>" data-scheme="inverse">
		<?php if ( has_post_thumbnail() ) { ?>
			<div class="cs-entry__inner cs-entry__thumbnail">
				<?php cnvs_block_post_overlay_thumbnail( $options, $attributes ); ?>
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
