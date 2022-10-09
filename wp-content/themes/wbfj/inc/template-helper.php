<?php

/**
 * favicon logo
 */
function wbfj_favicon() {
	$wbfj_favicon     = get_template_directory_uri() . '/assets/img/logo/favicon.png';
	$wbfj_favicon_url = get_theme_mod( 'favicon_url', $wbfj_favicon );
	
	?>
    <link rel="shortcut icon" type="image/x-icon" href="<?php print esc_url( $wbfj_favicon_url ); ?>">
	<?php
}

add_action( 'wp_head', 'wbfj_favicon' );

/**
 * header logo
 */
function wbfj_header_logo() {
	?>
	<?php
	$wbfj_logo_on    = function_exists( 'get_field' ) ? get_field( 'is_enable_sec_logo' ) : null;
	$wbfj_logo       = get_template_directory_uri() . '/assets/img/logo/logo.png';
	$wbfj_logo_white = get_template_directory_uri() . '/assets/img/logo/logo.png';

	$wbfj_customizer_logo = get_theme_mod( 'logo', $wbfj_logo );
	$wbfj_secondary_logo  = get_theme_mod( 'secondary_logo', $wbfj_logo_white );

	$wbfj_page_logo = function_exists( 'get_field' ) ? get_field( 'wbfj_page_logo' ) : '';
	$wbfj_site_logo = ! empty( $wbfj_page_logo['url'] ) ? $wbfj_page_logo['url'] : $wbfj_customizer_logo;
	?>

	<?php
	if ( has_custom_logo() ) {
		the_custom_logo();
	} else {

		if ( ! empty( $wbfj_logo_on ) ) { ?>
            <a class="standard-logo-white" href="<?php print esc_url( home_url( '/' ) ); ?>">
                <img src="<?php print esc_url( $wbfj_secondary_logo ); ?>"
                     alt="<?php print esc_attr( 'logo', 'wbfj' ); ?>"/>
            </a>
			<?php
		} else { ?>
            <a class="standard-logo" href="<?php print esc_url( home_url( '/' ) ); ?>">
                <img src="<?php print esc_url( $wbfj_site_logo ); ?>"
                     alt="<?php print esc_attr( 'logo', 'wbfj' ); ?>"/>
            </a>
			<?php
		}
	}
	?>
	<?php
}

/**
 * pagination
 */
if ( ! function_exists( 'wbfj_pagination' ) ) {

	function _wbfj_pagi_callback( $pagination ) {
		return $pagination;
	}

	//page navigation
	function wbfj_pagination( $prev, $next, $pages, $args ) {
		global $wp_query, $wp_rewrite;
		$menu = '';
		$wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;

		if ( $pages == '' ) {
			global $wp_query;
			$pages = $wp_query->max_num_pages;

			if ( ! $pages ) {
				$pages = 1;
			}
		}

		$pagination = array(
			'base'      => add_query_arg( 'paged', '%#%' ),
			'format'    => '',
			'total'     => $pages,
			'current'   => $current,
			'prev_text' => $prev,
			'next_text' => $next,
			'type'      => 'array'
		);

		//rewrite permalinks
		if ( $wp_rewrite->using_permalinks() ) {
			$pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );
		}

		if ( ! empty( $wp_query->query_vars['s'] ) ) {
			$pagination['add_args'] = array( 's' => get_query_var( 's' ) );
		}

		$pagi = '';
		if ( paginate_links( $pagination ) != '' ) {
			$paginations = paginate_links( $pagination );
			$pagi        .= '<ul>';
			foreach ( $paginations as $key => $pg ) {
				$pagi .= '<li>' . $pg . '</li>';
			}
			$pagi .= '</ul>';
		}

		print _wbfj_pagi_callback( $pagi );
	}
}


function wbfj_check_header() {
	wbfj_header_style();
}

add_action( 'wbfj_header_style', 'wbfj_check_header', 10 );

/**
 * header style
 */

function wbfj_header_style() {
	$wbfj_banner       = get_template_directory_uri() . '/assets/img/add/add-1.png';
	$wbfj_banner_image = get_theme_mod( 'logo', $wbfj_banner );
	$wbfj_header_marquee_label = get_theme_mod( 'wbfj_header_marquee_label', __("WHAT'S NEW", "wbfj") );
	$wbfj_header_marquee_repeater = get_theme_mod( 'wbfj_header_marquee_repeater', array() );
	$wbfj_header_facebook = get_theme_mod( 'wbfj_header_facebook', '' );
	$wbfj_header_instagram = get_theme_mod( 'wbfj_header_instagram', '' );
	$wbfj_header_twitter = get_theme_mod( 'wbfj_header_twitter', '' );
	$wbfj_header_youtube = get_theme_mod( 'wbfj_header_youtube', '' );
	?>
    <header class="header-area">
		<div class="wbfj-marquee-area">
			<div class="container">
				<div class="row">
					<div class="col-xxl-6">
						<?php if(!empty($wbfj_header_marquee_label)) : ?>
						<span class="wbfj-marquee-label"><?php echo esc_html($wbfj_header_marquee_label); ?></span>
						<?php endif; ?>
						<?php if(!empty($wbfj_header_marquee_repeater)) : ?>
						<div class="wbfj-marquee-wrap">
							<div class="marquee" id="mycrawler">
								<?php foreach($wbfj_header_marquee_repeater as $repeater) : ?>
									<div>
										<span class="ticker_dot"><i class="fa fa-chevron-right"></i></span><a target="<?php echo esc_attr($repeater['marquee_link_target']) ? esc_attr($repeater['marquee_link_target']): ''; ?>" class="ticker_title" href="<?php echo  esc_url_raw($repeater['marquee_url']) ? esc_url_raw($repeater['marquee_url']): ''; ?>"><?php echo esc_html($repeater['marquee_text']) ? esc_html($repeater['marquee_text']): ''; ?></a>
									</div>
								<?php endforeach; ?>
							</div>
						</div>
						<?php endif; ?>
					</div>
					<div class="col-xxl-6">
						<div class="text-end has-header-right-flex">
							<div class="wbfj-social-icons">
								<?php if(!empty($wbfj_header_facebook)) : ?>
								<a href="<?php echo esc_url_raw($wbfj_header_facebook); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/social/facebook.png" alt="<?php echo esc_attr__('image not found', 'wbfj'); ?>"></a>
								<?php endif; ?>
								<?php if(!empty($wbfj_header_instagram)) : ?>
								<a href="<?php echo esc_url_raw($wbfj_header_instagram); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/social/instagram.png" alt="<?php echo esc_attr__('image not found', 'wbfj'); ?>"></a>
								<?php endif; ?>
								<?php if(!empty($wbfj_header_twitter)) : ?>
								<a href="<?php echo esc_url_raw($wbfj_header_twitter); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/social/twitter.png" alt="<?php echo esc_attr__('image not found', 'wbfj'); ?>"></a>
								<?php endif; ?>
								<?php if(!empty($wbfj_header_youtube)) : ?>
								<a href="<?php echo esc_url_raw($wbfj_header_youtube); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/social/youtube.png" alt="<?php echo esc_attr__('image not found', 'wbfj'); ?>"></a>
								<?php endif; ?>
							</div>
							<div class="wbfj-header-search-form">
								<form action="<?php echo home_url( '/' ); ?>">
									<input type="text" value="<?php get_search_query(); ?>" class="search" name="s" placeholder="<?php echo esc_attr__('Search Here...', 'wbfj'); ?>" id="header_search_form">
									<button type="submit"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/search_form_icon_w.png" alt=""></button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-3 col-md-4 col-6">
                    <div class="logo">
						<?php wbfj_header_logo(); ?>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="header-banner">
                        <img src="<?php echo $wbfj_banner_image; ?>" alt="banner">
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="header-recent-blog">
                        <h3>recent played</h3>
                        <div class="recent-blog">
							<?php

							// WP_Query arguments
							$args = array(
								'post_type'           => array( 'post' ),
								'post_status'         => array( 'publish' ),
								'nopaging'            => false,
								'posts_per_page'      => '2',
								'ignore_sticky_posts' => false,
								'order'               => 'DESC',
							);

							// The Query
							$the_query = new WP_Query( $args );

							// The Loop
							if ( $the_query->have_posts() ) {
								while ( $the_query->have_posts() ) {
									$the_query->the_post();
									?>
                                    <div class="recent-blog-list">
										<?php if(!empty(get_the_post_thumbnail_url( get_the_ID(), 'full' ))) : ?>
                                        <div class="thumb">
                                            <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>"
                                                 alt="image">
                                        </div>
										<?php endif; ?>
                                        <div class="content">
                                            <h4>
                                                <a href="<?php echo get_the_permalink(); ?>">
													<?php echo the_title(); ?>
                                                </a>
                                            </h4>
                                            <p>
                                                By <?php echo get_the_author_meta( 'nicename', get_the_author_meta( get_the_ID() ) ); ?>
                                            </p>
                                        </div>
                                    </div>
									<?php
								}
							} else {
								// no posts found
							}
							/* Restore original Post Data */
							wp_reset_postdata();

							?>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-xl-12">
					<?php wbfj_header_menu(); ?>
                </div>
            </div>
        </div>
    </header>
	<?php
}


/**
 * wbfj_header_menu description
 */
function wbfj_header_menu() {
	$wbfj_menu = wp_nav_menu( array(
		'theme_location'  => 'main-menu',
		'menu_class'      => '',
		'container'       => 'div',
		'container_class' => 'main-menu d-none d-xl-block',
		'fallback_cb'     => 'Navwalker_Class::fallback',
		'walker'          => new Navwalker_Class,
		'depth'           => 2,
		'echo'            => false
	) );

//	$wbfj_menu = str_replace("menu-item-has-children", "menu-item-has-children", $wbfj_menu);

	echo wp_kses_post( $wbfj_menu );
}

/**
 * wbfj_mobile_menu description
 */
function wbfj_mobile_menu() {
	$wbfj_menu = wp_nav_menu( array(
		'theme_location'  => 'main-menu',
		'menu_id'         => 'mobile-menu-active',
		'container'       => 'nav',
		'container_class' => 'side-mobile-menu',
		'fallback_cb'     => 'Navwalker_Class::fallback',
		'walker'          => new Navwalker_Class,
		'depth'           => 2,
		'echo'            => false
	) );

//	$wbfj_menu = str_replace("menu-item-has-children", "menu-item-has-children", $wbfj_menu);

	echo wp_kses_post( $wbfj_menu );
}


/**
 * wbfj_breadcrumb_callback
 * @return string
 */
function wbfj_breadcrumb_callback() {
	$args       = array(
		'show_browse'   => false,
		'post_taxonomy' => array( 'product' => 'product_cat' )
	);
	$breadcrumb = new Breadcrumb_Class( $args );

	return $breadcrumb->trail();
}


/**
 * wbfj_breadcrumb_func
 */
function wbfj_breadcrumb_func() {

	$breadcrumb_class = '';
	$breadcrumb_show  = 1;

	if ( is_front_page() && is_home() ) {
		$title            = get_theme_mod( 'breadcrumb_blog_title', esc_html__( 'Blog', 'wbfj' ) );
		$breadcrumb_class = 'home_front_page';

	} elseif ( is_front_page() ) {
		$title = get_theme_mod( 'breadcrumb_blog_title', esc_html__( 'Blog', 'wbfj' ) );
//		$breadcrumb_show = 0;
	} elseif ( is_home() ) {
		if ( get_option( 'page_for_posts' ) ) {
			$title = get_the_title( get_option( 'page_for_posts' ) );
		}
	} elseif ( is_single() && 'post' == get_post_type() ) {
		$title = get_the_title();
	} elseif ( is_single() && 'product' == get_post_type() ) {
		$title = get_theme_mod( 'breadcrumb_product_details', esc_html__( 'Shop', 'wbfj' ) );
	} elseif ( is_single() && 'wbfj-department' == get_post_type() ) {
		if ( rtl_enable() ) {
			$title = get_theme_mod( 'breadcrumb_department_details_rtl', esc_html__( 'Department', 'wbfj' ) );
		} else {
			$title = get_theme_mod( 'breadcrumb_department_details', esc_html__( 'Department', 'wbfj' ) );
		}

	} elseif ( is_single() && 'wbfj-doctor' == get_post_type() ) {
		if ( rtl_enable() ) {
			$title = get_theme_mod( 'breadcrumb_doctor_details_rtl', esc_html__( 'Doctor', 'wbfj' ) );
		} else {
			$title = get_theme_mod( 'breadcrumb_doctor_details', esc_html__( 'Doctor', 'wbfj' ) );
		}

	} elseif ( is_single() && 'wbfj-case_study' == get_post_type() ) {
		if ( rtl_enable() ) {
			$title = get_theme_mod( 'breadcrumb_case_study_details_rtl', esc_html__( 'Gallery', 'wbfj' ) );
		} else {
			$title = get_theme_mod( 'breadcrumb_case_study_details', esc_html__( 'Gallery', 'wbfj' ) );
		}

	} elseif ( is_search() ) {
		$title = esc_html__( 'Search Results for : ', 'wbfj' ) . get_search_query();
	} elseif ( is_404() ) {
		$title = esc_html__( 'Page not Found', 'wbfj' );
	} elseif ( function_exists( 'is_woocommerce' ) && is_woocommerce() ) {
		$title = get_theme_mod( 'breadcrumb_shop', esc_html__( 'Shop', 'wbfj' ) );
	} elseif ( is_archive() ) {
		$title = get_the_archive_title();
	} else {
		$title = get_the_title();
	}

//	$is_breadcrumb  = function_exists( 'get_field' ) ? get_field( 'is_it_invisible_breadcrumb' ) : '';
	$is_breadcrumb = get_post_meta( get_the_ID(), '_breadcrumb_option', true );

	if ( $is_breadcrumb != 'yes' ) {
		$bg_img_from_page = function_exists( 'get_field' ) ? get_field( 'breadcrumb_background_image' ) : '';
		$hide_bg_img      = function_exists( 'get_field' ) ? get_field( 'hide_breadcrumb_background_image' ) : '';
		$back_title       = function_exists( 'get_field' ) ? get_field( 'breadcrumb_back_title' ) : '';

		// get_theme_mod
		$bg_img = get_theme_mod( 'breadcrumb_bg_img' );


		if ( $hide_bg_img ) {
			$bg_img = '';
		} else {
			$bg_img = ! empty( $bg_img_from_page ) ? $bg_img_from_page['url'] : $bg_img;
		}
		if ( ! empty( $bg_img ) ) {
			$breadcrumb_class .= ' page-title-overlay';
		}
		?>

        <div class="page-title-area breadcrumb-bg breadcrumb-spacings <?php print esc_attr( $breadcrumb_class ); ?>"
             data-background="<?php print esc_attr( $bg_img ); ?>">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="page-title-content">
                            <h3 class="title" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
								<?php echo wp_kses_post( $title ); ?>
                            </h3>
                            <div class="breadcrumb-menu">
								<?php // wbfj_breadcrumb_callback(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/shape-4.png" alt="shape">
            </div>
        </div>
		<?php
	}
}

//add_action( 'wbfj_before_main_content', 'wbfj_breadcrumb_func' );


/**
 * wbfj_check_footer
 */
function wbfj_check_footer() {
//	$footer_option = get_post_meta( get_the_ID(), '_footer_option', true );
	wbfj_footer_style();
//	if ( $footer_option == 'footer_2' ) {
//		wbfj_footer_style_2();
//	} else {
//		wbfj_footer_style();
//	}

}

add_action( 'wbfj_footer_style', 'wbfj_check_footer', 10 );

/**
 * footer  style 1
 */
function wbfj_footer_style() {?>
    <div class="footer-area">
    </div>
	<?php
}

/**
 * copyright text
 */
function wbfj_copyright_text() {
	print get_theme_mod( 'wbfj_copyright', esc_html__( '© Copyright 2022, All Rights Reserved', 'wbfj' ) );
}

/**
 * wbfj_footer_menu_1
 */
function wbfj_footer_menu() {
	$wbfj_menu = wp_nav_menu( array(
		'theme_location'  => 'footer-menu',
		'menu_class'      => '',
		'container'       => '',
		'container_class' => 'footer-menu',
		'fallback_cb'     => 'Navwalker_Class::fallback',
		'walker'          => new Navwalker_Class,
		'depth'           => 1,
		'echo'            => false
	) );
	echo wp_kses_post( $wbfj_menu );
}

/**
 * wbfj_footer_menu_1
 */
function wbfj_footer_menu_2() {
	$wbfj_menu = wp_nav_menu( array(
		'theme_location'  => 'footer-menu-2',
		'menu_class'      => '',
		'container'       => 'div',
		'container_class' => 'footer-menu-2',
		'fallback_cb'     => 'Navwalker_Class::fallback',
		'walker'          => new Navwalker_Class,
		'depth'           => 1,
		'echo'            => false
	) );
	echo wp_kses_post( $wbfj_menu );
}

/**
 * footer_social
 */
function footer_social() {
	$wbfj_fb_url        = get_theme_mod( 'wbfj_fb_url', '#' );
	$wbfj_instagram_url = get_theme_mod( 'wbfj_instagram_url', '#' );
	$wbfj_linkedin_url  = get_theme_mod( 'wbfj_linkedin_url', '#' );
	$wbfj_twitter_url   = get_theme_mod( 'wbfj_twitter_url', '' );
	$wbfj_youtube_url   = get_theme_mod( 'wbfj_youtube_url', '' );
	?>
    <div class="footer-social text-center text-lg-start">
		<?php if ( ! empty( $wbfj_fb_url ) ): ?>
            <a href="<?php echo esc_url( $wbfj_fb_url ); ?>" target="_blank">
                <i class="fa-brands fa-facebook-f"></i>
            </a>
		<?php endif; ?>
		<?php if ( ! empty( $wbfj_instagram_url ) ): ?>
            <a href="<?php echo esc_url( $wbfj_instagram_url ); ?>" target="_blank">
                <i class="fa-brands fa-instagram"></i>
            </a>
		<?php endif; ?>
		<?php if ( ! empty( $wbfj_linkedin_url ) ): ?>
            <a href="<?php echo esc_url( $wbfj_linkedin_url ); ?>" target="_blank">
                <i class="fa-brands fa-linkedin"></i>
            </a>
		<?php endif; ?>
		<?php if ( ! empty( $wbfj_twitter_url ) ): ?>
            <a href="<?php echo esc_url( $wbfj_twitter_url ); ?>" target="_blank">
                <i class="fa-brands fa-twitter"></i>
            </a>
		<?php endif; ?>
		<?php if ( ! empty( $wbfj_youtube_url ) ): ?>
            <a href="<?php echo esc_url( $wbfj_youtube_url ); ?>" target="_blank">
                <i class="fa-brands fa-youtube"></i>
            </a>
		<?php endif; ?>
    </div>
	<?php
}

/**
 * footer logo
 */
function wbfj_footer_logo() {
	$wbfj_logo        = get_template_directory_uri() . '/assets/img/logo/logo.png';
	$wbfj_footer_logo = get_theme_mod( 'wbfj_footer_logo', $wbfj_logo );
	?>
    <a href="<?php print esc_url( home_url( '/' ) ); ?>">
        <img src="<?php print esc_url( $wbfj_footer_logo ); ?>"
             alt="<?php print esc_attr( 'logo', 'wbfj' ); ?>"/>
    </a>
	<?php
}

/**
 * wbfj_get_tag
 */
function wbfj_get_tag() {
	$html = '';
	if ( has_tag() ) {
		$html .= '<div class="blog-post-tag"><span>' . esc_html__( 'Post Tags', 'gocart' ) . '</span>';
		$html .= get_the_tag_list( '', ' ', '' );
		$html .= '</div>';
	}

	return $html;
}