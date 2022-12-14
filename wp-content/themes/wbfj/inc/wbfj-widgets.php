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
	register_sidebar(array(
		'name' => esc_html__('BIRTHDAY BUNDLE', 'wbfj'),
		'id' => 'birthday_bundle',
		'before_widget' => '<div id="%1$s" class="birthday-bundle-widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<div class="widget_title"><h5>',
		'after_title' => '</h5></div>',
	));
	register_sidebar(array(
		'name' => esc_html__('PIZZA PLEDGE', 'wbfj'),
		'id' => 'pizza_bundle',
		'before_widget' => '<div id="%1$s" class="pizza-bundle-widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<div class="widget_title"><h5>',
		'after_title' => '</h5></div>',
	));
	register_sidebar(array(
		'name' => esc_html__('Love Handles', 'wbfj'),
		'id' => 'love_bundle',
		'before_widget' => '<div id="%1$s" class="love-bundle-widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<div class="widget_title"><h5>',
		'after_title' => '</h5></div>',
	));
	register_sidebar(array(
		'name' => esc_html__('Contact', 'wbfj'),
		'id' => 'contact_bundle',
		'before_widget' => '<div id="%1$s" class="contact-bundle-widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<div class="widget_title"><h5>',
		'after_title' => '</h5></div>',
	));
	register_sidebar(array(
		'name' => esc_html__('Job Listing Register', 'wbfj'),
		'id' => 'job_listing_register',
		'before_widget' => '<div id="%1$s" class="job_listing_register-bundle-widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<div class="widget_title"><h5>',
		'after_title' => '</h5></div>',
	));
	register_sidebar(array(
		'name' => esc_html__('BE A WBFJ VOLUNTEER', 'wbfj'),
		'id' => 'be_a_wbfj_volunteer',
		'before_widget' => '<div id="%1$s" class="be_a_wbfj_volunteer-bundle-widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<div class="widget_title"><h5>',
		'after_title' => '</h5></div>',
	));
	register_sidebar(array(
		'name' => esc_html__('WBFJ???S LOCAL FLAVORS', 'wbfj'),
		'id' => 'wbfjs_local_favors',
		'before_widget' => '<div id="%1$s" class="wbfjs_local_favors-bundle-widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<div class="widget_title"><h5>',
		'after_title' => '</h5></div>',
	));
	register_sidebar(array(
		'name' => esc_html__('SUBMIT YOUR PHOTOS', 'wbfj'),
		'id' => 'submit_your_photos',
		'before_widget' => '<div id="%1$s" class="submit_your_photos-bundle-widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<div class="widget_title"><h5>',
		'after_title' => '</h5></div>',
	));
	register_sidebar(array(
		'name' => esc_html__('DRIVE-THRU DIFFERENCE', 'wbfj'),
		'id' => 'drive_thru_diffrence',
		'before_widget' => '<div id="%1$s" class="drive_thru_diffrence-bundle-widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<div class="widget_title"><h5>',
		'after_title' => '</h5></div>',
	));

}

add_action('widgets_init', 'wbfj_widgets_init');