<?php


/**
 * Register Widgets Area.
 */
function wbfj_widgets_init()
{
	// blog sidebar
	register_sidebar(array(
		'name' => esc_html__('Sidebar', 'wbfj'),
		'id' => 'blog-sidebar',
		'before_widget' => '<div id="%1$s" class="widget mb-30 %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<div class="widget_title"><h5>',
		'after_title' => '</h5></div>',

	));
	register_sidebar(array(
		'name' => esc_html__('Footer 1', 'wbfj'),
		'id' => 'footer-1',
		'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<div class="widget_title"><h5>',
		'after_title' => '</h5></div>',
	));
	register_sidebar(array(
		'name' => esc_html__('Footer 2', 'wbfj'),
		'id' => 'footer-2',
		'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<div class="widget_title"><h5>',
		'after_title' => '</h5></div>',
	));
	register_sidebar(array(
		'name' => esc_html__('Footer 3', 'wbfj'),
		'id' => 'footer-3',
		'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<div class="widget_title"><h5>',
		'after_title' => '</h5></div>',
	));
	register_sidebar(array(
		'name' => esc_html__('blogsmenu', 'wbfj'),
		'id' => 'blogsmenu',
		'before_widget' => '<div id="%1$s" class="blogsmenu-widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<div class="widget_title"><h5>',
		'after_title' => '</h5></div>',
	));
	register_sidebar(array(
		'name' => esc_html__('weather', 'wbfj'),
		'id' => 'weather',
		'before_widget' => '<div id="%1$s" class="weather-widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<div class="widget_title"><h5>',
		'after_title' => '</h5></div>',
	));
	register_sidebar(array(
		'name' => esc_html__('General Sidebar', 'wbfj'),
		'id' => 'general_sidebar',
		'before_widget' => '<div id="%1$s" class="general-widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<div class="widget_title"><h5>',
		'after_title' => '</h5></div>',
	));
	register_sidebar(array(
		'name' => esc_html__('CALENDAR EVENT', 'wbfj'),
		'id' => 'calendar_event',
		'before_widget' => '<div id="%1$s" class="calendar-widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<div class="widget_title"><h5>',
		'after_title' => '</h5></div>',
	));
}

add_action('widgets_init', 'wbfj_widgets_init');