<?php
/**
 * Widgets Init
 *
 * Register sitebar locations for widgets.
 *
 * @package Newsblock
 */

if ( ! function_exists( 'csco_widgets_init' ) ) {
	/**
	 * Register sidebars
	 */
	function csco_widgets_init() {

		register_sidebar(
			array(
				'name'          => esc_html__( 'Default Sidebar', 'newsblock' ),
				'id'            => 'sidebar-main',
				'before_widget' => '<div class="widget %1$s %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => csco_section_heading( null, 'before', false, null ),
				'after_title'   => csco_section_heading( null, 'after', false, null ),
			)
		);

		register_sidebar(
			array(
				'name'          => esc_html__( 'Off-canvas', 'newsblock' ),
				'id'            => 'sidebar-offcanvas',
				'before_widget' => '<div class="widget %1$s %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => csco_section_heading( null, 'before', false, null ),
				'after_title'   => csco_section_heading( null, 'after', false, null ),
			)
		);

		register_sidebar(
			array(
				'name'          => esc_html__( 'Auto Loaded Sidebar', 'newsblock' ),
				'id'            => 'sidebar-loaded',
				'before_widget' => '<div class="widget %1$s %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => csco_section_heading( null, 'before', false, null ),
				'after_title'   => csco_section_heading( null, 'after', false, null ),
			)
		);

		register_sidebars(
			3, array(
				// Translators: Multi-Column Sidebar Number.
				'name'          => esc_html__( 'Multi-Column Sub-Menu %d', 'newsblock' ),
				'id'            => 'sidebar-multicolumn',
				'before_widget' => '<div class="widget %1$s %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => csco_section_heading( null, 'before', false, null, 'submenu' ),
				'after_title'   => csco_section_heading( null, 'after', false, null, 'submenu' ),
			)
		);

		register_sidebar(
			array(
				'name'          => esc_html__( 'Single-Column Sub-Menu', 'newsblock' ),
				'id'            => 'sidebar-singlecolumn',
				'before_widget' => '<div class="widget %1$s %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => csco_section_heading( null, 'before', false, null, 'submenu' ),
				'after_title'   => csco_section_heading( null, 'after', false, null, 'submenu' ),
			)
		);

	}
	add_action( 'widgets_init', 'csco_widgets_init' );
}
