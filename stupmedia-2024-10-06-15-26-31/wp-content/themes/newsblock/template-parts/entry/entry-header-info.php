<?php
/**
 * The template part for displaying header info.
 *
 * @package Newsblock
 */

// Category.
if ( is_singular( 'post' ) ) {
	csco_get_post_meta( 'category', false, true, 'post_meta', array(
		'category_type' => 'line',
	) );
}

// Title.
the_title( '<h1 class="cs-entry__title cs-entry__title-line"><span>', '</span></h1>' );

// Subtitle.
csco_post_subtitle();

// Post Meta.
if ( is_singular( 'post' ) ) {
	csco_get_post_meta( array( 'author', 'date', 'views', 'shares', 'reading_time', 'comments' ), false, true, 'post_meta', array(
		'author_avatar' => get_theme_mod( 'post_meta_author_avatar', true ),
	) );
}
