<?php
/**
 * Theme sections.
 *
 * @package Newsblock
 */

/**
 * Register section categories.
 */
function csco_canvas_section_categories() {
	return array(
		'posts'        => esc_html__( 'Posts Section', 'newsblock' ),
		'large-posts'  => esc_html__( 'Large Posts Section', 'newsblock' ),
		'subscription' => esc_html__( 'Subscription', 'newsblock' ),
	);
}
add_filter( 'canvas_register_layouts_categories', 'csco_canvas_section_categories' );

/**
 * Register section categories.
 */
function csco_canvas_sections() {
	return array(
		array(
			'title'     => esc_html__( 'Section 1', 'newsblock' ),
			'json'      => get_template_directory() . '/inc/demo-import/sections/section-1.json',
			'thumbnail' => get_template_directory_uri() . '/inc/demo-import/sections/section-1.jpg',
			'category'  => array( 'posts' ),
		),
		array(
			'title'     => esc_html__( 'Section 2', 'newsblock' ),
			'json'      => get_template_directory() . '/inc/demo-import/sections/section-2.json',
			'thumbnail' => get_template_directory_uri() . '/inc/demo-import/sections/section-2.jpg',
			'category'  => array( 'posts' ),
		),
		array(
			'title'     => esc_html__( 'Section 3', 'newsblock' ),
			'json'      => get_template_directory() . '/inc/demo-import/sections/section-3.json',
			'thumbnail' => get_template_directory_uri() . '/inc/demo-import/sections/section-3.jpg',
			'category'  => array( 'posts' ),
		),
		array(
			'title'     => esc_html__( 'Section 4', 'newsblock' ),
			'json'      => get_template_directory() . '/inc/demo-import/sections/section-4.json',
			'thumbnail' => get_template_directory_uri() . '/inc/demo-import/sections/section-4.jpg',
			'category'  => array( 'posts' ),
		),
		array(
			'title'     => esc_html__( 'Section 5', 'newsblock' ),
			'json'      => get_template_directory() . '/inc/demo-import/sections/section-5.json',
			'thumbnail' => get_template_directory_uri() . '/inc/demo-import/sections/section-5.jpg',
			'category'  => array( 'posts' ),
		),
		array(
			'title'     => esc_html__( 'Section 6', 'newsblock' ),
			'json'      => get_template_directory() . '/inc/demo-import/sections/section-6.json',
			'thumbnail' => get_template_directory_uri() . '/inc/demo-import/sections/section-6.jpg',
			'category'  => array( 'posts' ),
		),
		array(
			'title'     => esc_html__( 'Section 7', 'newsblock' ),
			'json'      => get_template_directory() . '/inc/demo-import/sections/section-7.json',
			'thumbnail' => get_template_directory_uri() . '/inc/demo-import/sections/section-7.jpg',
			'category'  => array( 'posts' ),
		),
		array(
			'title'     => esc_html__( 'Section 8', 'newsblock' ),
			'json'      => get_template_directory() . '/inc/demo-import/sections/section-8.json',
			'thumbnail' => get_template_directory_uri() . '/inc/demo-import/sections/section-8.jpg',
			'category'  => array( 'posts' ),
		),
		array(
			'title'     => esc_html__( 'Section 9', 'newsblock' ),
			'json'      => get_template_directory() . '/inc/demo-import/sections/section-9.json',
			'thumbnail' => get_template_directory_uri() . '/inc/demo-import/sections/section-9.jpg',
			'category'  => array( 'posts' ),
		),
		array(
			'title'     => esc_html__( 'Section 10', 'newsblock' ),
			'json'      => get_template_directory() . '/inc/demo-import/sections/section-10.json',
			'thumbnail' => get_template_directory_uri() . '/inc/demo-import/sections/section-10.jpg',
			'category'  => array( 'posts' ),
		),
		array(
			'title'     => esc_html__( 'Section 11', 'newsblock' ),
			'json'      => get_template_directory() . '/inc/demo-import/sections/section-11.json',
			'thumbnail' => get_template_directory_uri() . '/inc/demo-import/sections/section-11.jpg',
			'category'  => array( 'posts' ),
		),
		array(
			'title'     => esc_html__( 'Section 12', 'newsblock' ),
			'json'      => get_template_directory() . '/inc/demo-import/sections/section-12.json',
			'thumbnail' => get_template_directory_uri() . '/inc/demo-import/sections/section-12.jpg',
			'category'  => array( 'posts' ),
		),
		array(
			'title'     => esc_html__( 'Section 13', 'newsblock' ),
			'json'      => get_template_directory() . '/inc/demo-import/sections/section-13.json',
			'thumbnail' => get_template_directory_uri() . '/inc/demo-import/sections/section-13.jpg',
			'category'  => array( 'posts' ),
		),
		array(
			'title'     => esc_html__( 'Section 14', 'newsblock' ),
			'json'      => get_template_directory() . '/inc/demo-import/sections/section-14.json',
			'thumbnail' => get_template_directory_uri() . '/inc/demo-import/sections/section-14.jpg',
			'category'  => array( 'posts' ),
		),
		array(
			'title'     => esc_html__( 'Section 15', 'newsblock' ),
			'json'      => get_template_directory() . '/inc/demo-import/sections/section-15.json',
			'thumbnail' => get_template_directory_uri() . '/inc/demo-import/sections/section-15.jpg',
			'category'  => array( 'posts' ),
		),
		array(
			'title'     => esc_html__( 'Section 16', 'newsblock' ),
			'json'      => get_template_directory() . '/inc/demo-import/sections/section-16.json',
			'thumbnail' => get_template_directory_uri() . '/inc/demo-import/sections/section-16.jpg',
			'category'  => array( 'posts' ),
		),
		array(
			'title'     => esc_html__( 'Section 17', 'newsblock' ),
			'json'      => get_template_directory() . '/inc/demo-import/sections/section-17.json',
			'thumbnail' => get_template_directory_uri() . '/inc/demo-import/sections/section-17.jpg',
			'category'  => array( 'posts' ),
		),
		array(
			'title'     => esc_html__( 'Section 18', 'newsblock' ),
			'json'      => get_template_directory() . '/inc/demo-import/sections/section-18.json',
			'thumbnail' => get_template_directory_uri() . '/inc/demo-import/sections/section-18.jpg',
			'category'  => array( 'posts' ),
		),
		array(
			'title'     => esc_html__( 'Section 19', 'newsblock' ),
			'json'      => get_template_directory() . '/inc/demo-import/sections/section-19.json',
			'thumbnail' => get_template_directory_uri() . '/inc/demo-import/sections/section-19.jpg',
			'category'  => array( 'posts' ),
		),
		array(
			'title'     => esc_html__( 'Section 20', 'newsblock' ),
			'json'      => get_template_directory() . '/inc/demo-import/sections/section-20.json',
			'thumbnail' => get_template_directory_uri() . '/inc/demo-import/sections/section-20.jpg',
			'category'  => array( 'posts' ),
		),
		array(
			'title'     => esc_html__( 'Section 21', 'newsblock' ),
			'json'      => get_template_directory() . '/inc/demo-import/sections/section-21.json',
			'thumbnail' => get_template_directory_uri() . '/inc/demo-import/sections/section-21.jpg',
			'category'  => array( 'posts' ),
		),
		array(
			'title'     => esc_html__( 'Section 22', 'newsblock' ),
			'json'      => get_template_directory() . '/inc/demo-import/sections/section-22.json',
			'thumbnail' => get_template_directory_uri() . '/inc/demo-import/sections/section-22.jpg',
			'category'  => array( 'posts' ),
		),
		array(
			'title'     => esc_html__( 'Section 23', 'newsblock' ),
			'json'      => get_template_directory() . '/inc/demo-import/sections/section-23.json',
			'thumbnail' => get_template_directory_uri() . '/inc/demo-import/sections/section-23.jpg',
			'category'  => array( 'subscription' ),
		),
		array(
			'title'     => esc_html__( 'Section 24', 'newsblock' ),
			'json'      => get_template_directory() . '/inc/demo-import/sections/section-24.json',
			'thumbnail' => get_template_directory_uri() . '/inc/demo-import/sections/section-24.jpg',
			'category'  => array( 'subscription' ),
		),
		array(
			'title'     => esc_html__( 'Section 25', 'newsblock' ),
			'json'      => get_template_directory() . '/inc/demo-import/sections/section-25.json',
			'thumbnail' => get_template_directory_uri() . '/inc/demo-import/sections/section-25.jpg',
			'category'  => array( 'large-posts' ),
		),
		array(
			'title'     => esc_html__( 'Section 26', 'newsblock' ),
			'json'      => get_template_directory() . '/inc/demo-import/sections/section-26.json',
			'thumbnail' => get_template_directory_uri() . '/inc/demo-import/sections/section-26.jpg',
			'category'  => array( 'large-posts' ),
		),
		array(
			'title'     => esc_html__( 'Section 27', 'newsblock' ),
			'json'      => get_template_directory() . '/inc/demo-import/sections/section-27.json',
			'thumbnail' => get_template_directory_uri() . '/inc/demo-import/sections/section-27.jpg',
			'category'  => array( 'large-posts' ),
		),
		array(
			'title'     => esc_html__( 'Section 28', 'newsblock' ),
			'json'      => get_template_directory() . '/inc/demo-import/sections/section-28.json',
			'thumbnail' => get_template_directory_uri() . '/inc/demo-import/sections/section-28.jpg',
			'category'  => array( 'large-posts' ),
		),
		array(
			'title'     => esc_html__( 'Section 29', 'newsblock' ),
			'json'      => get_template_directory() . '/inc/demo-import/sections/section-29.json',
			'thumbnail' => get_template_directory_uri() . '/inc/demo-import/sections/section-29.jpg',
			'category'  => array( 'large-posts' ),
		),
		array(
			'title'     => esc_html__( 'Section 30', 'newsblock' ),
			'json'      => get_template_directory() . '/inc/demo-import/sections/section-30.json',
			'thumbnail' => get_template_directory_uri() . '/inc/demo-import/sections/section-30.jpg',
			'category'  => array( 'large-posts' ),
		),
		array(
			'title'     => esc_html__( 'Section 31', 'newsblock' ),
			'json'      => get_template_directory() . '/inc/demo-import/sections/section-31.json',
			'thumbnail' => get_template_directory_uri() . '/inc/demo-import/sections/section-31.jpg',
			'category'  => array( 'large-posts' ),
		),
		array(
			'title'     => esc_html__( 'Section 32', 'newsblock' ),
			'json'      => get_template_directory() . '/inc/demo-import/sections/section-32.json',
			'thumbnail' => get_template_directory_uri() . '/inc/demo-import/sections/section-32.jpg',
			'category'  => array( 'large-posts' ),
		),
		array(
			'title'     => esc_html__( 'Section 33', 'newsblock' ),
			'json'      => get_template_directory() . '/inc/demo-import/sections/section-33.json',
			'thumbnail' => get_template_directory_uri() . '/inc/demo-import/sections/section-33.jpg',
			'category'  => array( 'large-posts' ),
		),
	);
}
add_filter( 'canvas_register_layouts', 'csco_canvas_sections' );
