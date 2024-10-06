<?php
/**
 * Footer Settings
 *
 * @package Newsblock
 */

CSCO_Kirki::add_section(
	'footer',
	array(
		'title'    => esc_html__( 'Footer Settings', 'newsblock' ),
		'priority' => 40,
	)
);


CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'        => 'collapsible',
		'settings'    => 'footer_collapsible_common',
		'label'       => esc_html__( 'Common', 'newsblock' ),
		'section'     => 'footer',
		'priority'    => 10,
		'input_attrs' => array(
			'collapsed' => true,
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'     => 'radio',
		'settings' => 'footer_layout',
		'label'    => esc_html__( 'Layout', 'newsblock' ),
		'section'  => 'footer',
		'default'  => 'cs-footer-two',
		'priority' => 10,
		'choices'  => array(
			'cs-footer-one' => esc_html__( 'Footer 1', 'newsblock' ),
			'cs-footer-two' => esc_html__( 'Footer 2', 'newsblock' ),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod',
	array(
		'type'              => 'textarea',
		'settings'          => 'footer_text',
		'label'             => esc_html__( 'Footer Text', 'newsblock' ),
		'section'           => 'footer',
		/* translators: %s: Author name. */
		'default'           => sprintf( esc_html__( 'Designed & Developed by %s', 'newsblock' ), '<a href="' . esc_url( csco_get_theme_data( 'AuthorURI' ) ) . '">Code Supply Co.</a>' ),
		'priority'          => 10,
		'sanitize_callback' => 'wp_kses_post',
	)
);

if ( csco_powerkit_module_enabled( 'opt_in_forms' ) ) {
	CSCO_Kirki::add_field(
		'csco_theme_mod',
		array(
			'type'     => 'collapsible',
			'settings' => 'footer_collapsible_subscription',
			'label'    => esc_html__( 'Subscription Form', 'newsblock' ),
			'section'  => 'footer',
			'priority' => 10,
		)
	);

	CSCO_Kirki::add_field(
		'csco_theme_mod',
		array(
			'type'     => 'checkbox',
			'settings' => 'footer_subscribe',
			'label'    => esc_html__( 'Display subscribe section', 'newsblock' ),
			'section'  => 'footer',
			'default'  => false,
			'priority' => 10,
		)
	);

	CSCO_Kirki::add_field(
		'csco_theme_mod',
		array(
			'type'            => 'checkbox',
			'settings'        => 'footer_subscribe_name',
			'label'           => esc_html__( 'Display first name field', 'newsblock' ),
			'section'         => 'footer',
			'default'         => false,
			'priority'        => 10,
			'active_callback' => array(
				array(
					'setting'  => 'footer_subscribe',
					'operator' => '==',
					'value'    => true,
				),
			),
		)
	);

	CSCO_Kirki::add_field(
		'csco_theme_mod',
		array(
			'type'              => 'text',
			'settings'          => 'footer_subscribe_heading',
			'label'             => esc_html__( 'Heading', 'newsblock' ),
			'section'           => 'footer',
			'default'           => '',
			'priority'          => 10,
			'sanitize_callback' => 'wp_kses_post',
			'active_callback'   => array(
				array(
					'setting'  => 'footer_subscribe',
					'operator' => '==',
					'value'    => true,
				),
			),
		)
	);

	CSCO_Kirki::add_field(
		'csco_theme_mod',
		array(
			'type'              => 'text',
			'settings'          => 'footer_subscribe_title',
			'label'             => esc_html__( 'Title', 'newsblock' ),
			'section'           => 'footer',
			'default'           => esc_html__( 'Subscribe to Our Newsletter', 'newsblock' ),
			'priority'          => 10,
			'sanitize_callback' => 'wp_kses_post',
			'active_callback'   => array(
				array(
					'setting'  => 'footer_subscribe',
					'operator' => '==',
					'value'    => true,
				),
			),
		)
	);

	CSCO_Kirki::add_field(
		'csco_theme_mod',
		array(
			'type'              => 'text',
			'settings'          => 'footer_subscribe_text',
			'label'             => esc_html__( 'Text', 'newsblock' ),
			'section'           => 'footer',
			'default'           => esc_html__( 'Get notified of the best deals on our WordPress themes.', 'newsblock' ),
			'priority'          => 10,
			'sanitize_callback' => 'wp_kses_post',
			'active_callback'   => array(
				array(
					'setting'  => 'footer_subscribe',
					'operator' => '==',
					'value'    => true,
				),
			),
		)
	);
}

if ( csco_powerkit_module_enabled( 'social_links' ) ) {
	CSCO_Kirki::add_field(
		'csco_theme_mod',
		array(
			'type'     => 'collapsible',
			'settings' => 'footer_collapsible_social',
			'label'    => esc_html__( 'Social Links', 'newsblock' ),
			'section'  => 'footer',
			'priority' => 10,
		)
	);

	CSCO_Kirki::add_field(
		'csco_theme_mod',
		array(
			'type'     => 'checkbox',
			'settings' => 'footer_social_links',
			'label'    => esc_html__( 'Display social links', 'newsblock' ),
			'section'  => 'footer',
			'default'  => false,
			'priority' => 10,
		)
	);

	CSCO_Kirki::add_field(
		'csco_theme_mod',
		array(
			'type'            => 'select',
			'settings'        => 'footer_social_links_scheme',
			'label'           => esc_html__( 'Color scheme', 'newsblock' ),
			'section'         => 'footer',
			'default'         => 'light',
			'priority'        => 10,
			'choices'         => array(
				'default' => esc_html__( 'Light', 'newsblock' ),
				'bold'    => esc_html__( 'Bold', 'newsblock' ),
			),
			'active_callback' => array(
				array(
					'setting'  => 'footer_social_links',
					'operator' => '==',
					'value'    => true,
				),
			),
		)
	);

	CSCO_Kirki::add_field(
		'csco_theme_mod',
		array(
			'type'            => 'number',
			'settings'        => 'footer_social_links_maximum',
			'label'           => esc_html__( 'Maximum Number of Social Links', 'newsblock' ),
			'section'         => 'footer',
			'default'         => 4,
			'priority'        => 10,
			'active_callback' => array(
				array(
					'setting'  => 'footer_social_links',
					'operator' => '==',
					'value'    => true,
				),
			),
		)
	);

	CSCO_Kirki::add_field(
		'csco_theme_mod',
		array(
			'type'            => 'checkbox',
			'settings'        => 'footer_social_links_counts',
			'label'           => esc_html__( 'Display counts', 'newsblock' ),
			'section'         => 'footer',
			'default'         => true,
			'priority'        => 10,
			'active_callback' => array(
				array(
					'setting'  => 'footer_social_links',
					'operator' => '==',
					'value'    => true,
				),
			),
		)
	);
}
