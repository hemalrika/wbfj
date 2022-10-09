<?php
/**
 * Wbfj customizer
 *
 * @package wbfj
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/**
 * Added Panels & Sections
 */
function wbfj_customizer_panels_sections( $wp_customize ) {

	//Add panel
	$wp_customize->add_panel( 'wbfj_customizer', array(
		'priority' => 10,
		'title'    => esc_html__( 'Wbfj Customizer', 'wbfj' ),
	) );


	/**
	 * Customizer Section
	 */

	$wp_customize->add_section( 'section_header_logo', array(
		'title'       => esc_html__( 'Header Setting', 'wbfj' ),
		'description' => '',
		'priority'    => 12,
		'capability'  => 'edit_theme_options',
		'panel'       => 'wbfj_customizer',
	) );

//	$wp_customize->add_section('blog_setting', array(
//        'title'       => esc_html__( 'Blog Setting', 'wbfj' ),
//        'description' => '',
//        'priority'    => 13,
//        'capability'  => 'edit_theme_options',
//        'panel'       => 'wbfj_customizer',
//    ));
//
//    $wp_customize->add_section('header_side_setting', array(
//        'title'       => esc_html__( 'Side Info', 'wbfj' ),
//        'description' => '',
//        'priority'    => 14,
//        'capability'  => 'edit_theme_options',
//        'panel'       => 'wbfj_customizer',
//    ));

//    $wp_customize->add_section('breadcrumb_setting', array(
//        'title'       => esc_html__( 'Breadcrumb Setting', 'wbfj' ),
//        'description' => '',
//        'priority'    => 15,
//        'capability'  => 'edit_theme_options',
//        'panel'       => 'wbfj_customizer',
//    ));

//    $wp_customize->add_section('blog_setting', array(
//        'title'       => esc_html__( 'Blog Setting', 'wbfj' ),
//        'description' => '',
//        'priority'    => 16,
//        'capability'  => 'edit_theme_options',
//        'panel'       => 'wbfj_customizer',
//    ));

	$wp_customize->add_section('footer_social', array(
		'title'       => esc_html__( 'Footer Social', 'wbfj' ),
		'description' => '',
		'priority'    => 15,
		'capability'  => 'edit_theme_options',
		'panel'       => 'wbfj_customizer',
	));

	$wp_customize->add_section( 'footer_setting', array(
		'title'       => esc_html__( 'Footer Settings', 'wbfj' ),
		'description' => '',
		'priority'    => 16,
		'capability'  => 'edit_theme_options',
		'panel'       => 'wbfj_customizer',
	) );

//    $wp_customize->add_section('color_setting', array(
//        'title'       => esc_html__( 'Color Setting', 'wbfj' ),
//        'description' => '',
//        'priority'    => 17,
//        'capability'  => 'edit_theme_options',
//        'panel'       => 'wbfj_customizer',
//    ));
//
//    $wp_customize->add_section('404_page', array(
//        'title'       => esc_html__( '404 Page', 'wbfj' ),
//        'description' => '',
//        'priority'    => 18,
//        'capability'  => 'edit_theme_options',
//        'panel'       => 'wbfj_customizer',
//    ));
//
//    $wp_customize->add_section('rtl_setting', array(
//        'title'       => esc_html__( 'RTL Setting', 'wbfj' ),
//        'description' => '',
//        'priority'    => 18,
//        'capability'  => 'edit_theme_options',
//        'panel'       => 'wbfj_customizer',
//    ));

}

add_action( 'customize_register', 'wbfj_customizer_panels_sections' );


/*
Footer Social
 */
function _footer_social_fields( $fields ) {
	$fields[] = array(
		'type'     => 'text',
		'settings' => 'wbfj_fb_url',
		'label'    => esc_html__( 'Facebook Url', 'wbfj' ),
		'section'  => 'footer_social',
		'default'  => esc_html__( '#', 'wbfj' ),
		'priority' => 10,
	);

	$fields[] = array(
		'type'     => 'text',
		'settings' => 'wbfj_instagram_url',
		'label'    => esc_html__( 'Instagram Url', 'wbfj' ),
		'section'  => 'footer_social',
		'default'  => esc_html__( '#', 'wbfj' ),
		'priority' => 10,
	);

	$fields[] = array(
		'type'     => 'text',
		'settings' => 'wbfj_linkedin_url',
		'label'    => esc_html__( 'Linkedin Url', 'wbfj' ),
		'section'  => 'footer_social',
		'default'  => esc_html__( '#', 'wbfj' ),
		'priority' => 10,
	);



	$fields[] = array(
		'type'     => 'text',
		'settings' => 'wbfj_twitter_url',
		'label'    => esc_html__( 'Twitter Url', 'wbfj' ),
		'section'  => 'footer_social',
		'default'  => esc_html__( '', 'wbfj' ),
		'priority' => 10,
	);

	$fields[] = array(
		'type'     => 'text',
		'settings' => 'wbfj_youtube_url',
		'label'    => esc_html__( 'Youtube Url', 'wbfj' ),
		'section'  => 'footer_social',
		'default'  => esc_html__( '', 'wbfj' ),
		'priority' => 10,
	);

	return $fields;
}

add_filter( 'kirki/fields', '_footer_social_fields' );

/*
Header Settings
 */
function _header_header_fields( $fields ) {

	$fields[] = array(
		'type'        => 'image',
		'settings'    => 'logo',
		'label'       => esc_html__( 'Header Logo', 'wbfj' ),
		'description' => esc_html__( 'Upload Your Logo.', 'wbfj' ),
		'section'     => 'section_header_logo',
		'default'     => get_template_directory_uri() . '/assets/img/logo/logo.png'
	);

	$fields[] = array(
		'type'        => 'image',
		'settings'    => 'secondary_logo',
		'label'       => esc_html__( 'Header Second Logo', 'wbfj' ),
		'description' => esc_html__( 'Header Black Logo', 'wbfj' ),
		'section'     => 'section_header_logo',
		'default'     => get_template_directory_uri() . '/assets/img/logo/logo.png'
	);

	$fields[] = array(
		'type'        => 'image',
		'settings'    => 'favicon_url',
		'label'       => esc_html__( 'Favicon', 'wbfj' ),
		'description' => esc_html__( 'Favicon Icon', 'wbfj' ),
		'section'     => 'section_header_logo',
		'default'     => get_template_directory_uri() . '/assets/img/logo/favicon.png'
	);


	$fields[] = array(
		'type'     => 'switch',
		'settings' => 'wbfj_header_button',
		'label'    => esc_html__( 'Header Button On/Off', 'wbfj' ),
		'section'  => 'section_header_logo',
		'default'  => '1',
		'priority' => 10,
		'choices'  => [
			'on'  => esc_html__( 'Enable', 'wbfj' ),
			'off' => esc_html__( 'Disable', 'wbfj' ),
		],
	);

	$fields[] = array(
		'type'     => 'text',
		'settings' => 'wbfj_header_button_text',
		'label'    => esc_html__( 'Button Text', 'wbfj' ),
		'section'  => 'section_header_logo',
		'default'  => 'Get Started',
		'priority' => 10,
	);

	$fields[] = array(
		'type'     => 'text',
		'settings' => 'wbfj_header_button_link',
		'label'    => esc_html__( 'Button Link', 'wbfj' ),
		'section'  => 'section_header_logo',
		'default'  => '#',
		'priority' => 10,
	);
	
	$fields[] = array(
		'type'     => 'text',
		'settings' => 'wbfj_header_marquee_label',
		'label'    => esc_html__( 'Marquee Label', 'wbfj' ),
		'section'  => 'section_header_logo',
		'default'  => "WHAT'S NEW",
		'priority' => 10,
	);
	$fields[] = array(
		'type'     => 'repeater',
		'settings' => 'wbfj_header_marquee_repeater',
		'label'    => esc_html__( 'Marquee Repeater', 'wbfj' ),
		'section'  => 'section_header_logo',
		'default'  => "WHAT'S NEW",
		'priority' => 10,
		'fields'   => [
			'marquee_text'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Text', 'kirki' ),
				'description' => esc_html__( 'Description', 'kirki' ),
				'default'     => '',
			],
			'marquee_url'    => [
				'type'        => 'text',
				'label'       => esc_html__( 'URL', 'kirki' ),
				'description' => esc_html__( 'Description', 'kirki' ),
				'default'     => '',
			],
			'marquee_link_target' => [
				'type'        => 'select',
				'label'       => esc_html__( 'Link Target', 'kirki' ),
				'description' => esc_html__( 'Description', 'kirki' ),
				'default'     => '_self',
				'choices'     => [
					'_blank' => esc_html__( 'New Window', 'kirki' ),
					'_self'  => esc_html__( 'Same Frame', 'kirki' ),
				],
			],
		],
	);
	$fields[] = array(
		'type'     => 'switch',
		'settings' => 'wbfj_header_social_switch',
		'label'    => esc_html__( 'Header Social On/Off', 'wbfj' ),
		'section'  => 'section_header_logo',
		'default'  => '1',
		'priority' => 10,
		'choices'  => [
			'on'  => esc_html__( 'Enable', 'wbfj' ),
			'off' => esc_html__( 'Disable', 'wbfj' ),
		],
	);
	$fields[] = array(
		'type'     => 'url',
		'settings' => 'wbfj_header_facebook',
		'label'    => esc_html__( 'Facebook', 'wbfj' ),
		'section'  => 'section_header_logo',
		'priority' => 10,
		'active_callback' => [
			[
				'setting'  => 'wbfj_header_social_switch',
				'operator' => '==',
				'value'    => true,
			]
		],
	);
	$fields[] = array(
		'type'     => 'url',
		'settings' => 'wbfj_header_instagram',
		'label'    => esc_html__( 'Instagram', 'wbfj' ),
		'section'  => 'section_header_logo',
		'priority' => 10,
		'active_callback' => [
			[
				'setting'  => 'wbfj_header_social_switch',
				'operator' => '==',
				'value'    => true,
			]
		],
	);
	$fields[] = array(
		'type'     => 'url',
		'settings' => 'wbfj_header_twitter',
		'label'    => esc_html__( 'Twitter', 'wbfj' ),
		'section'  => 'section_header_logo',
		'priority' => 10,
		'active_callback' => [
			[
				'setting'  => 'wbfj_header_social_switch',
				'operator' => '==',
				'value'    => true,
			]
		],
	);
	$fields[] = array(
		'type'     => 'url',
		'settings' => 'wbfj_header_youtube',
		'label'    => esc_html__( 'Youtube', 'wbfj' ),
		'section'  => 'section_header_logo',
		'priority' => 10,
		'active_callback' => [
			[
				'setting'  => 'wbfj_header_social_switch',
				'operator' => '==',
				'value'    => true,
			]
		],
	);
	return $fields;
}

add_filter( 'kirki/fields', '_header_header_fields' );

/*
Header Side Info
 */
function _header_side_fields( $fields ) {
	// side info settings
	$fields[] = array(
		'type'     => 'switch',
		'settings' => 'wbfj_hamburger_hide',
		'label'    => esc_html__( 'Show Hamburger On/Off', 'wbfj' ),
		'section'  => 'header_side_setting',
		'default'  => '1',
		'priority' => 10,
		'choices'  => [
			'on'  => esc_html__( 'Enable', 'wbfj' ),
			'off' => esc_html__( 'Disable', 'wbfj' ),
		],
	);
	$fields[] = array(
		'type'        => 'image',
		'settings'    => 'wbfj_extra_info_logo',
		'label'       => esc_html__( 'Logo Side', 'wbfj' ),
		'description' => esc_html__( 'Logo Side', 'wbfj' ),
		'section'     => 'header_side_setting',
		'default'     => get_template_directory_uri() . '/assets/img/logo/logo-white.png'
	);
	$fields[] = array(
		'type'     => 'text',
		'settings' => 'wbfj_extra_about_title',
		'label'    => esc_html__( 'About Us Title', 'wbfj' ),
		'section'  => 'header_side_setting',
		'default'  => esc_html__( 'About Us Title', 'wbfj' ),
		'priority' => 10,
	);
	$fields[] = array(
		'type'     => 'textarea',
		'settings' => 'wbfj_extra_about_text',
		'label'    => esc_html__( 'About Us Desc..', 'wbfj' ),
		'section'  => 'header_side_setting',
		'default'  => esc_html__( 'About Us Desc...', 'wbfj' ),
		'priority' => 10,
	);
	$fields[] = array(
		'type'     => 'text',
		'settings' => 'wbfj_extra_button',
		'label'    => esc_html__( 'Button Text', 'wbfj' ),
		'section'  => 'header_side_setting',
		'default'  => esc_html__( 'Contact Us', 'wbfj' ),
		'priority' => 10,
	);
	$fields[] = array(
		'type'     => 'text',
		'settings' => 'wbfj_extra_button_url',
		'label'    => esc_html__( 'Button URL', 'wbfj' ),
		'section'  => 'header_side_setting',
		'default'  => esc_html__( '#', 'wbfj' ),
		'priority' => 10,
	);
	// contact
	$fields[] = array(
		'type'     => 'text',
		'settings' => 'wbfj_contact_title',
		'label'    => esc_html__( 'Contact Title', 'wbfj' ),
		'section'  => 'header_side_setting',
		'default'  => esc_html__( 'Contact Title', 'wbfj' ),
		'priority' => 10,
	);
	$fields[] = array(
		'type'     => 'text',
		'settings' => 'wbfj_extra_address',
		'label'    => esc_html__( 'Office Address', 'wbfj' ),
		'section'  => 'header_side_setting',
		'default'  => esc_html__( '123/A, Miranda City Likaoli Prikano, Dope United States', 'wbfj' ),
		'priority' => 10,
	);
	$fields[] = array(
		'type'     => 'text',
		'settings' => 'wbfj_extra_phone',
		'label'    => esc_html__( 'Phone Number', 'wbfj' ),
		'section'  => 'header_side_setting',
		'default'  => esc_html__( '+0989 7876 9865 9', 'wbfj' ),
		'priority' => 10,
	);

	$fields[] = array(
		'type'     => 'text',
		'settings' => 'wbfj_extra_email',
		'label'    => esc_html__( 'Email ID', 'wbfj' ),
		'section'  => 'header_side_setting',
		'default'  => esc_html__( 'info@basictheme.net', 'wbfj' ),
		'priority' => 10,
	);

	return $fields;
}

add_filter( 'kirki/fields', '_header_side_fields' );

/*
_header_page_title_fields
 */
function _header_page_title_fields( $fields ) {
	// Breadcrumb Setting
	$fields[] = array(
		'type'        => 'image',
		'settings'    => 'breadcrumb_bg_img',
		'label'       => esc_html__( 'Breadcrumb Background Image', 'wbfj' ),
		'description' => esc_html__( 'Breadcrumb Background Image', 'wbfj' ),
		'section'     => 'breadcrumb_setting',
		'default'     => get_template_directory_uri() . '/assets/img/bg/page-title-bg.jpg'
	);

	return $fields;
}

add_filter( 'kirki/fields', '_header_page_title_fields' );

/*
Header Social
 */
function _header_blog_fields( $fields ) {
// Blog Setting
	$fields[] = array(
		'type'     => 'switch',
		'settings' => 'wbfj_blog_btn_switch',
		'label'    => esc_html__( 'Blog BTN On/Off', 'wbfj' ),
		'section'  => 'blog_setting',
		'default'  => '1',
		'priority' => 10,
		'choices'  => [
			'on'  => esc_html__( 'Enable', 'wbfj' ),
			'off' => esc_html__( 'Disable', 'wbfj' ),
		],
	);
	$fields[] = array(
		'type'     => 'text',
		'settings' => 'wbfj_blog_btn',
		'label'    => esc_html__( 'Blog Button text', 'wbfj' ),
		'section'  => 'blog_setting',
		'default'  => esc_html__( 'Read More', 'wbfj' ),
		'priority' => 10,
	);
	$fields[] = array(
		'type'     => 'text',
		'settings' => 'wbfj_blog_btn_rtl',
		'label'    => esc_html__( 'Blog Button text rtl', 'wbfj' ),
		'section'  => 'blog_setting',
		'default'  => esc_html__( 'Read More', 'wbfj' ),
		'priority' => 10,
	);

	$fields[] = array(
		'type'     => 'text',
		'settings' => 'breadcrumb_blog_title',
		'label'    => esc_html__( 'Blog Title', 'wbfj' ),
		'section'  => 'blog_setting',
		'default'  => esc_html__( 'Blog', 'wbfj' ),
		'priority' => 10,
	);

	$fields[] = array(
		'type'     => 'text',
		'settings' => 'breadcrumb_blog_title_details',
		'label'    => esc_html__( 'Blog Details Title', 'wbfj' ),
		'section'  => 'blog_setting',
		'default'  => esc_html__( 'Blog Details', 'wbfj' ),
		'priority' => 10,
	);

	return $fields;
}

add_filter( 'kirki/fields', '_header_blog_fields' );

/*
Footer
 */
function _header_footer_fields( $fields ) {
	$fields[] = array(
		'type'        => 'image',
		'settings'    => 'wbfj_footer_logo',
		'label'       => esc_html__( 'Footer Logo', 'wbfj' ),
		'description' => esc_html__( 'Upload Your Logo.', 'wbfj' ),
		'section'     => 'footer_setting',
		'default'     => get_template_directory_uri() . '/assets/img/logo/logo.png'
	);

	$fields[] = array(
		'type'     => 'text',
		'settings' => 'wbfj_subscription_text',
		'label'    => esc_html__( 'Subscription Text', 'wbfj' ),
		'section'  => 'footer_setting',
		'default'  => esc_html__( 'Receive free resources and webinar invitation on wbfj management.', 'wbfj' ),
		'priority' => 10,
	);

	$fields[] = array(
		'type'     => 'text',
		'settings' => 'wbfj_subscription_shortcode',
		'label'    => esc_html__( 'Subscription Form Shortcode', 'wbfj' ),
		'section'  => 'footer_setting',
		'priority' => 10,
	);

	$fields[] = array(
		'type'     => 'text',
		'settings' => 'wbfj_privacy_policy_text',
		'label'    => esc_html__( 'Privacy Policy label', 'wbfj' ),
		'section'  => 'footer_setting',
		'default'  => esc_html__( 'Privacy Policy', 'wbfj' ),
		'priority' => 10,
	);

	$fields[] = array(
		'type'     => 'text',
		'settings' => 'wbfj_privacy_policy_url',
		'label'    => esc_html__( 'Privacy Policy Url', 'wbfj' ),
		'section'  => 'footer_setting',
		'default'  => esc_html__( '#', 'wbfj' ),
		'priority' => 10,
	);

	$fields[] = array(
		'type'     => 'text',
		'settings' => 'wbfj_cookies_text',
		'label'    => esc_html__( 'Cookies label', 'wbfj' ),
		'section'  => 'footer_setting',
		'default'  => esc_html__( 'Cookies', 'wbfj' ),
		'priority' => 10,
	);

	$fields[] = array(
		'type'     => 'text',
		'settings' => 'wbfj_cookies_url',
		'label'    => esc_html__( 'Cookies Url', 'wbfj' ),
		'section'  => 'footer_setting',
		'default'  => esc_html__( '#', 'wbfj' ),
		'priority' => 10,
	);

	$fields[] = array(
		'type'     => 'text',
		'settings' => 'wbfj_copyright',
		'label'    => esc_html__( 'Copy Right', 'wbfj' ),
		'section'  => 'footer_setting',
		'default'  => esc_html__( '© Copyright 2022, All Rights Reserved', 'wbfj' ),
		'priority' => 10,
	);

	return $fields;
}

add_filter( 'kirki/fields', '_header_footer_fields' );

// color
function wbfj_color_fields( $fields ) {
	// Color Settings
	$fields[] = array(
		'type'        => 'color',
		'settings'    => 'wbfj_color_option',
		'label'       => __( 'Theme Color', 'wbfj' ),
		'description' => esc_html__( 'This is a Theme color control.', 'wbfj' ),
		'section'     => 'color_setting',
		'default'     => '#ff5e14',
		'priority'    => 10,
	);
	$fields[] = array(
		'type'        => 'color',
		'settings'    => 'wbfj_header_bg_color',
		'label'       => __( 'THeader BG Color', 'wbfj' ),
		'description' => esc_html__( 'This is a Header bg color control.', 'wbfj' ),
		'section'     => 'color_setting',
		'default'     => '#00235A',
		'priority'    => 10,
	);

	return $fields;
}

add_filter( 'kirki/fields', 'wbfj_color_fields' );

// 404 
function wbfj_404_fields( $fields ) {
	// 404 settings
	$fields[] = array(
		'type'     => 'text',
		'settings' => 'wbfj_error_404_text',
		'label'    => esc_html__( '400 Text', 'wbfj' ),
		'section'  => '404_page',
		'default'  => esc_html__( '404', 'wbfj' ),
		'priority' => 10,
	);
	$fields[] = array(
		'type'     => 'text',
		'settings' => 'wbfj_error_title',
		'label'    => esc_html__( 'Not Found Title', 'wbfj' ),
		'section'  => '404_page',
		'default'  => esc_html__( 'Page not found', 'wbfj' ),
		'priority' => 10,
	);
	$fields[] = array(
		'type'     => 'textarea',
		'settings' => 'wbfj_error_desc',
		'label'    => esc_html__( '404 Description Text', 'wbfj' ),
		'section'  => '404_page',
		'default'  => esc_html__( 'Oops! The page you are looking for does not exist. It might have been moved or deleted', 'wbfj' ),
		'priority' => 10,
	);
	$fields[] = array(
		'type'     => 'text',
		'settings' => 'wbfj_error_link_text',
		'label'    => esc_html__( '404 Link Text', 'wbfj' ),
		'section'  => '404_page',
		'default'  => esc_html__( 'Back To Home', 'wbfj' ),
		'priority' => 10,
	);

	return $fields;

}

add_filter( 'kirki/fields', 'wbfj_404_fields' );

/**
 * Added Fields
 */
function wbfj_rtl_fields( $fields ) {
	// rtl settings
	$fields[] = array(
		'type'     => 'switch',
		'settings' => 'rtl_switch',
		'label'    => esc_html__( 'RTL On/Off', 'wbfj' ),
		'section'  => 'rtl_setting',
		'default'  => '0',
		'priority' => 10,
		'choices'  => [
			'on'  => esc_html__( 'Enable', 'wbfj' ),
			'off' => esc_html__( 'Disable', 'wbfj' ),
		],
	);

	return $fields;
}

add_filter( 'kirki/fields', 'wbfj_rtl_fields' );


/**
 * This is a short hand function for getting setting value from customizer
 *
 * @param string $name
 *
 * @return bool|string
 */
function wbfj_theme_option( $name ) {
	$value = '';
	if ( class_exists( 'wbfj' ) ) {
		$value = Kirki::get_option( wbfj_get_theme(), $name );
	}

	return apply_filters( 'wbfj_theme_option', $value, $name );
}

/**
 * Get config ID
 *
 * @return string
 */
function wbfj_get_theme() {
	return 'wbfj';
}