<?php
/**
 * Block Standard Type 1
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
		<?php cnvs_block_post_thumbnail( $options, $attributes, null, array( 'reading_time' ) ); ?>

		<div class="cs-entry__inner cs-entry__content">
			<?php cnvs_block_post_meta( $options, array( 'category' ) ); ?>

			<?php cnvs_block_post_title( $options ); ?>

			<?php cnvs_block_post_excerpt( $options ); ?>

			<?php cnvs_block_post_meta( $options, array( 'author', 'date', 'views', 'shares', 'comments' ) ); ?>
		</div>
	</div>
</article>
