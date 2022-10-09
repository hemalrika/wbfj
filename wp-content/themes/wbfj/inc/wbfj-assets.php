<?php

/**
 * Theme Css and Js
 */
function wbfj_scripts() {
	// all css files
//	wp_enqueue_style( 'wbfj-fonts', wbfj_fonts_url(), array(), '1.0.1' );
	wp_enqueue_style( 'animate', WBFJ_THEME_CSS_DIR . 'animate.css', array() );
	wp_enqueue_style( 'fontawesome', WBFJ_THEME_CSS_DIR . 'fontawesome.min.css', array() );
	wp_enqueue_style( 'bootstrap', WBFJ_THEME_CSS_DIR . 'bootstrap.min.css', array() );
	wp_enqueue_style( 'wbfj-spacing', WBFJ_THEME_CSS_DIR . 'spacing.css', array() );
//	wp_enqueue_style( 'swiper', WBFJ_THEME_CSS_DIR . 'swiper.min.css', array() );
//	wp_enqueue_style( 'aos', WBFJ_THEME_CSS_DIR . 'aos.css', array() );
//	wp_enqueue_style( 'meanmenu', WBFJ_THEME_CSS_DIR . 'meanmenu.css', array() );
//	wp_enqueue_style( 'nice-select', WBFJ_THEME_CSS_DIR . 'nice-select.css', array() );
//	wp_enqueue_style( 'venobox', WBFJ_THEME_CSS_DIR . 'venobox.min.css', array() );
	wp_enqueue_style( 'wbfj-main', WBFJ_THEME_CSS_DIR . 'main.css', array() );
	wp_enqueue_style( 'wbfj-style', get_stylesheet_uri() );

	// all js files
	wp_enqueue_script( 'popper', WBFJ_THEME_JS_DIR . 'popper.min.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'bootstrap', WBFJ_THEME_JS_DIR . 'bootstrap.min.js', array( 'jquery' ), '', true );
//	wp_enqueue_script( 'swiper', WBFJ_THEME_JS_DIR . 'swiper.min.js', array( 'jquery' ), '', true );
//	wp_enqueue_script( 'meanmenu', WBFJ_THEME_JS_DIR . 'jquery.meanmenu.min.js', array( 'jquery' ), '', true );
//	wp_enqueue_script( 'nice-select', WBFJ_THEME_JS_DIR . 'jquery.nice-select.min.js', array( 'jquery' ), '', true );
//	wp_enqueue_script( 'venobox', WBFJ_THEME_JS_DIR . 'venobox.min.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'aos', WBFJ_THEME_JS_DIR . 'aos.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'marquee', WBFJ_THEME_JS_DIR . 'marquee.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'wbfj-main', WBFJ_THEME_JS_DIR . 'script.js', array( 'jquery' ), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'wbfj_scripts' );


/**
 * Register Google Fonts
 * @return string
 */
function wbfj_fonts_url() {
	$font_url = '';

	/*
	Translators: If there are characters in your language that are not supported
	by chosen font(s), translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Google font: on or off', 'wbfj' ) ) {
		$font_url = '//fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Roboto+Mono:wght@300;400;500;600;700&display=swap';
	}

	return $font_url;
}