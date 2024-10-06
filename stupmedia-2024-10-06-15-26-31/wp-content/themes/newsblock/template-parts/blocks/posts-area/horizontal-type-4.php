<?php
/**
 * Block Horizontal Type 4
 *
 * @var        $attributes - block attributes
 * @var        $options - layout options
 * @var        $posts - all available posts
 *
 * @package Newsblock
 */

?>

<article <?php post_class(); ?>>
	<div class="cs-entry__outer">
		<?php cnvs_block_post_thumbnail( $options, $attributes ); ?>

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

			<?php cnvs_block_post_meta( $options, array( 'author', 'date', 'views', 'shares', 'reading_time', 'comments' ) ); ?>
		</div>
	</div>
</article>
