<?php
/**
 * Block Horizontal Type 3
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
		<div class="cs-entry__wrapper">
			<div class="cs-entry__inner cs-entry__content ">
				<?php cnvs_block_post_meta( $options, array( 'category' ) ); ?>

				<?php cnvs_block_post_title( $options ); ?>
			</div>

			<?php cnvs_block_post_thumbnail( $options, $attributes ); ?>
		</div>

		<?php cnvs_block_post_excerpt( $options ); ?>

		<?php cnvs_block_post_meta( $options, array( 'author', 'date', 'views', 'shares', 'reading_time', 'comments' ) ); ?>
	</div>
</article>
