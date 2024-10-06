<?php
/**
 * Template part entry header
 *
 * @package Newsblock
 */

$header_type = csco_get_page_header_type();

switch ( $header_type ) {
	case 'simple':
		$header_class = 'cs-entry__header-simple';
		break;
	case 'standard':
		$header_class = 'cs-entry__header-standard';
		break;
	case 'large':
		$header_class = 'cs-entry__header-large';
		break;
	case 'overlay':
		$header_class = 'cs-entry__header-overlay';
		break;
	case 'large_overlay':
		$header_class = 'cs-entry__header-large-overlay';
		break;
}

$thumbnail_size = 'csco-medium';

if ( 'disabled' === csco_get_page_sidebar() ) {
	$thumbnail_size = 'csco-large';
}

if ( 'uncropped' === csco_get_page_preview() || 'standard' === $header_type ) {
	$thumbnail_size = sprintf( '%s-uncropped', $thumbnail_size );
}

if ( 'large' === $header_type || 'large_overlay' === $header_type ) {
	$thumbnail_size = 'csco-extra-large';
}

if ( 'title' === $header_type ) {
	?>

	<?php csco_breadcrumbs(); ?>

	<div class="cs-entry__header cs-entry__header-simple">
		<div class="cs-entry__header-inner">
			<div class="cs-entry__header-info">
				<?php the_title( '<h1 class="cs-entry__title"><span>', '</span></h1>' ); ?>
			</div>
		</div>
	</div>

<?php } elseif ( 'simple' === $header_type ) { ?>

	<?php csco_breadcrumbs(); ?>

	<div class="cs-entry__header <?php echo esc_attr( $header_class ); ?> cs-video-wrap">
		<div class="cs-entry__header-inner">

			<div class="cs-entry__header-info">
				<?php
				if ( is_singular( 'post' ) ) {
					csco_get_post_meta( 'category', false, true, 'post_meta', array(
						'category_type' => 'line',
					) );
				}

				the_title( '<h1 class="cs-entry__title"><span>', '</span></h1>' );

				csco_post_subtitle();

				if ( is_singular( 'post' ) ) {
					csco_get_post_meta( array( 'author', 'date', 'views', 'shares', 'reading_time', 'comments' ), false, true, 'post_meta', array(
						'author_avatar' => get_theme_mod( 'post_meta_author_avatar', true ),
					) );
				}
				?>
			</div>

			<?php if ( has_post_thumbnail() ) { ?>
				<figure class="cs-entry__post-media post-media">
					<?php the_post_thumbnail( $thumbnail_size ); ?>
				</figure>

				<?php if ( get_the_post_thumbnail_caption() ) { ?>
					<figcaption class="cs-entry__caption-text wp-caption-text">
						<?php the_post_thumbnail_caption(); ?>
					</figcaption>
				<?php } ?>
			<?php } ?>

		</div>
	</div>
<?php } elseif ( 'standard' === $header_type ) { ?>

	<?php csco_breadcrumbs(); ?>

	<div class="cs-entry__header <?php echo esc_attr( $header_class ); ?> cs-video-wrap">
		<div class="cs-entry__header-inner">

			<?php if ( has_post_thumbnail() ) { ?>
				<figure class="cs-entry__post-media post-media">
					<?php the_post_thumbnail( $thumbnail_size ); ?>
				</figure>
			<?php } ?>

			<div class="cs-entry__header-info">
				<?php get_template_part( 'template-parts/entry/entry-header-info' ); ?>
			</div>
		</div>
	</div>
	<?php
} elseif ( 'large' === $header_type ) {

	ob_start();
		csco_breadcrumbs();
	$has_breadcrumbs = ob_get_clean();

	// Chech exist breadcrumbs.
	if ( $has_breadcrumbs ) {
		$header_class .= ' cs-breadcrumbs-gradient';
	}
	?>

	<div class="cs-entry__header <?php echo esc_attr( $header_class ); ?> cs-video-wrap">
		<div class="cs-entry__header-inner">

			<div class="cs-ratio-wide cs-entry__header-wrap" data-scheme="inverse">
				<?php csco_breadcrumbs(); ?>

				<?php if ( has_post_thumbnail() ) { ?>
					<figure class="cs-entry__overlay-bg cs-overlay-background">
						<?php the_post_thumbnail( $thumbnail_size ); ?>
					</figure>
				<?php } ?>

				<?php csco_get_video_background( 'large-header', null, 'large', true, true ); ?>
			</div>

			<div class="cs-entry__header-info">
				<?php get_template_part( 'template-parts/entry/entry-header-info' ); ?>
			</div>
		</div>
	</div>

	<?php
} else {

	ob_start();
		csco_breadcrumbs();
	$has_breadcrumbs = ob_get_clean();

	// Chech exist breadcrumbs.
	if ( $has_breadcrumbs ) {
		$header_class .= ' cs-breadcrumbs-gradient';
	}

	// Chech exist header meta.
	if ( is_singular( 'post' ) && csco_get_post_meta( array( 'author', 'date', 'views', 'shares', 'reading_time', 'comments' ), false, false, 'post_meta' ) ) {
		$header_class .= ' cs-overlay-gradient';
	}
	?>

	<div class="cs-entry__header <?php echo esc_attr( $header_class ); ?> cs-video-wrap">
		<div class="cs-entry__header-wrap cs-ratio-wide" data-scheme="inverse">

			<?php if ( has_post_thumbnail() ) { ?>
				<figure class="cs-entry__overlay-bg cs-overlay-background">
					<?php the_post_thumbnail( $thumbnail_size ); ?>
				</figure>
			<?php } ?>

			<div class="cs-entry__header-inner">

				<?php csco_breadcrumbs(); ?>

				<?php
				if ( 'large_overlay' === $header_type ) {
					csco_get_video_background( 'large-header', null, 'large', true, true );
				}
				?>

				<div class="cs-entry__header-info">
					<?php get_template_part( 'template-parts/entry/entry-header-info' ); ?>
				</div>
			</div>
		</div>
	</div>
<?php } ?>
