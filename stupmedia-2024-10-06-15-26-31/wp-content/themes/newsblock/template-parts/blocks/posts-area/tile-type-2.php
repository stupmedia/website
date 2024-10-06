<?php
/**
 * Block Tile Type 2
 *
 * @var        $attributes - block attributes
 * @var        $options - layout options
 * @var        $posts - all available posts
 *
 * @package Newsblock
 */

$options['withoutLink'] = true;

?>
<article <?php post_class( $options['post_class'] ); ?>>
	<div class="cs-entry__outer cs-entry__overlay cs-overlay-ratio">
		<div class="cs-entry__wrapper">
			<?php if ( has_post_thumbnail() ) { ?>
				<div class="cs-entry__inner cs-entry__thumbnail">
					<?php cnvs_block_post_overlay_thumbnail( $options, $attributes ); ?>
				</div>
			<?php } ?>

			<div class="cs-entry__inner cs-entry__content cs-overlay-content">
				<?php cnvs_block_post_title( $options ); ?>

				<?php cnvs_block_post_excerpt( $options ); ?>

				<?php cnvs_block_post_meta( $options, array( 'category', 'author', 'date', 'views', 'shares', 'reading_time', 'comments' ) ); ?>
			</div>

			<a href="<?php echo esc_url( get_permalink() ); ?>" class="cs-overlay-link"></a>
		</div>
	</div>
</article>
