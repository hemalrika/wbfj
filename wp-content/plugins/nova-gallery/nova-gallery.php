<?php
/*
Plugin Name: Nova Gallery WP
Plugin URI: http://codecanyon.net/user/cosmocoder
Description: Add Nova Gallery to your WP theme
Version: 1.4.2
Author: Nilok Bose (CosmoCoder)
Author URI: http://codecanyon.net/user/cosmocoder
*/



//check the WP version (should be version 3.3 or greater)
register_activation_hook( __FILE__, 'novagallery_install' );

function novagallery_install() {
    if ( version_compare( get_bloginfo( 'version' ), '3.3', '<' ) ) {
        deactivate_plugins( basename( __FILE__ ) ); // Deactivate nova gallery plugin
    }

    // create the default list of nova gallery options
    $default_params = array(
        'colorScheme' => 'dark',
		'showFileTypeButtons' => 'true',
		'hideMenu' => 'false',
		'hideThumbGrid' => 'false',
		'hideFullwidth' => 'false',
        'autoplay' => 'true',
		'startCategory' => 'all',
        'loop' => 'false',
		'storeVolume' => 'true',
        'startMode' => 'thumbnails',
        'fullwidthResize' => 'false',
        'showFullwidthThumbs' => 'true',
		'thumbnailsAppearAnimation' => 'fadeSeq',
		'thumbnailsCaptionAnimation' => 'flip',
		'alwaysShowThumbTitle' => 'false',
		'gutterWidth' => 0,
        'fullwidthItemTransition' => 'fade',
        'homescreenAnimation' => 'scale',
        'displayType' => 'window',
        'newWindowLinks' => 'true',
        'useYoutubeThumbs' => 'true',
        'useVimeoThumbs' => 'true',
        'shuffleItems' => 'true',
        'preloadNumber' => 5,
        'slideshow' => 'false',
        'pauseTime' => 5000,
        'stopSlideshowOnPageHide' => 'true',
        'detectMobile' => 'false',
        'enableCache' => 'true',
        'cacheInterval' => 10,
		'flickr' => 'false',
        'flickrOptions' => array(
            'apiKey' => '',
            'sourceType' => 'text',
            'sourceId' => '',
            'userId' => '',
            'limit' => 30,
            'sort' => 'relevance',
            'thumbSize' => 's',
            'imageSize' => 'l'
        ),
        'picasa' => 'false',
        'picasaOptions' => array(
            'sourceType' => 'search',
            'username' => '',
            'album' => '',
            'search' => '',
            'limit' => 30,
            'thumbSize' => 288,
            'imageSize' => 1280
        )
    );

    update_option( 'novagallery_default', $default_params );


    // insert missing values for options introduced in the new version for previously created galleries in older versions
    $gallery_ids = get_option( 'novagallery_ids' );
    $novagallery_options = get_option('novagallery_options' );

    if( $gallery_ids ) {
        foreach( $gallery_ids as $gallery_id ) {
            foreach( $default_params as $key => $val ) {
                if( is_array($val) ) {
					foreach( $val as $key2 => $val2 ) {
						if( !isset( $novagallery_options[ $gallery_id ][ $key ][ $key2 ] ) || $novagallery_options[ $gallery_id ][ $key ][ $key2 ] === '' ) {
							$novagallery_options[ $gallery_id ][ $key ][ $key2 ] = $val2;
						}
					}
				}
				else {
					if( !isset( $novagallery_options[ $gallery_id ][ $key ] ) || $novagallery_options[ $gallery_id ][ $key ] === '' ) {
						$novagallery_options[ $gallery_id ][ $key ] = $val;
					}
				}
            }
        }

        update_option( 'novagallery_options', $novagallery_options );
    }
}




// URL of plugin folder
define( 'novagallery_path', plugin_dir_url( __FILE__), true );

// URL of the /js directory of the plugin
define( 'novagallery_js_path', plugin_dir_url( __FILE__).'js', true );

// URL of the /css directory of the plugin
define( 'novagallery_css_path', plugin_dir_url( __FILE__).'css', true );



//create menus for novagallery in admin page
add_action( 'admin_menu', 'novagallery_create_menu' );

function novagallery_create_menu() {
    //create novagallery top level menu
    add_menu_page( 'Nova Gallery', 'Nova Gallery', 'manage_options', 'novagallery_manager', 'novagallery_manager_page' );

    //create sub-menu items
    $manager_page = add_submenu_page( 'novagallery_manager', 'Nova Gallery - Gallery Manager', 'Gallery Manager', 'manage_options', 'novagallery_manager', 'novagallery_manager_page' );
    $options_page = add_submenu_page( 'novagallery_manager', 'Nova Gallery - Add/Edit Gallery', 'Create New Gallery', 'manage_options', 'novagallery_options', 'novagallery_options_page' );

    // hook to load scripts in novagallery options page
    add_action( 'load-'.$options_page, 'novagallery_admin_scripts' );
}


//load the manager page
function novagallery_manager_page() {
    // Check that the user is allowed to update options
    if (!current_user_can('manage_options')) {
        wp_die('You do not have sufficient permissions to access this page.');
    }

    require_once('nova-gallery-manager.php');
}


//load the options page
function novagallery_options_page() {
    // Check that the user is allowed to update options
    if (!current_user_can('manage_options')) {
        wp_die('You do not have sufficient permissions to access this page.');
    }

    require_once('nova-gallery-options.php');
}



// load scripts in nova gallery options page
function novagallery_admin_scripts() {
    wp_enqueue_style( 'novagallery_admin_css', novagallery_css_path.'/admin.css', null, '1.4.1' );

    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'jquery-ui-sortable' );

	// enqueue the WP Media Uploader
	if( function_exists('wp_enqueue_media') ) {  // for WP 3.5+
		wp_enqueue_media();
	}
	else {
		wp_enqueue_script('media-upload');
        wp_enqueue_script('thickbox');
        wp_enqueue_style('thickbox');
	}

    wp_enqueue_script( 'novagallery_admin_js', novagallery_js_path.'/admin.js', array('jquery', 'jquery-ui-sortable'), '1.4.1' );

}




// shortcode for novagallery
add_shortcode('novagallery', 'novagallery_shortcode' );

function novagallery_shortcode( $attr ) {
    $gallery_id = $attr['id'];
    $novagallery_options = get_option( 'novagallery_options' );
    $gallery_options = $novagallery_options[ $gallery_id ];

    $protocol = isset( $_SERVER['HTTPS']) ? 'https://' : 'http://';
    $ajaxurl = admin_url( 'admin-ajax.php', $protocol );

    $galleryParams = array(
        'pluginUrl' => novagallery_path,
        'ajaxUrl' => $ajaxurl,
        'id' => $gallery_id,
        'autoplay' => $gallery_options['autoplay'] === 'true' ? true : false,
		'startCategory' => $gallery_options['startCategory'],
        'loop' => $gallery_options['loop'] === 'true' ? true : false,
		'storeVolume' => $gallery_options['storeVolume'] === 'true' ? true : false,
        'startMode' => $gallery_options['startMode'],
        'fullwidthResize' => $gallery_options['fullwidthResize'] === 'true' ? true : false,
        'showFullwidthThumbs' => $gallery_options['showFullwidthThumbs'] === 'true' ? true : false,
		'thumbnailsAppearAnimation' => $gallery_options['thumbnailsAppearAnimation'],
		'thumbnailsCaptionAnimation' => $gallery_options['thumbnailsCaptionAnimation'],
		'alwaysShowThumbTitle' => $gallery_options['thumbnailsCaptionAnimation'] === 'true' ? true : false,
        'fullwidthItemTransition' => $gallery_options['fullwidthItemTransition'],
        'homescreenAnimation' => $gallery_options['homescreenAnimation'],
        'displayType' => $gallery_options['displayType'],
        'newWindowLinks' => $gallery_options['newWindowLinks'] === 'true' ? true : false,
        'useYoutubeThumbs' => $gallery_options['useYoutubeThumbs'] === 'true' ? true : false,
        'useVimeoThumbs' => $gallery_options['useVimeoThumbs'] === 'true' ? true : false,
        'shuffleItems' => $gallery_options['shuffleItems'] === 'true' ? true : false,
        'preloadNumber' => $gallery_options['preloadNumber'],
        'slideshow' => $gallery_options['slideshow'] === 'true' ? true : false,
        'pauseTime' => $gallery_options['pauseTime'],
        'stopSlideshowOnPageHide' => $gallery_options['stopSlideshowOnPageHide'] === 'true' ? true : false,
        'detectMobile' => $gallery_options['detectMobile'] === 'true' ? true : false,
        'enableCache' => $gallery_options['enableCache'] === 'true' ? true : false,
        'cacheInterval' => $gallery_options['cacheInterval'],
		'flickr' => $gallery_options['flickr'] === 'true' ? true : false,
        'flickrOptions' => array(
            'apiKey' => $gallery_options['flickrOptions']['apiKey'],
            'sourceType' => $gallery_options['flickrOptions']['sourceType'],
            'sourceId' => $gallery_options['flickrOptions']['sourceId'],
            'userId' => $gallery_options['flickrOptions']['userId'],
            'limit' => $gallery_options['flickrOptions']['limit'],
            'numberOfAlbums' => $gallery_options['flickrOptions']['numberOfAlbums'],
            'sort' => $gallery_options['flickrOptions']['sort'],
            'thumbSize' => $gallery_options['flickrOptions']['thumbSize'],
            'imageSize' => $gallery_options['flickrOptions']['imageSize']
        ),
        'picasa' => $gallery_options['picasa'] === 'true' ? true : false,
        'picasaOptions' => array(
            'sourceType' => $gallery_options['picasaOptions']['sourceType'],
            'username' => $gallery_options['picasaOptions']['username'],
            'album' => $gallery_options['picasaOptions']['album'],
            'search' => $gallery_options['picasaOptions']['search'],
            'numberOfAlbums' => $gallery_options['picasaOptions']['numberOfAlbums'],
            'limit' => $gallery_options['picasaOptions']['limit'],
            'thumbSize' => $gallery_options['picasaOptions']['thumbSize'],
            'imageSize' => $gallery_options['picasaOptions']['imageSize']
        )
    );


	wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'modernizr', novagallery_js_path.'/modernizr.js', array('jquery'), '2.8.3', true );
    wp_enqueue_script( 'novagallery_transit', novagallery_js_path.'/jquery.transit.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'novagallery_masonry', novagallery_js_path.'/jquery.masonry.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'novagallery_mediaelement_js', novagallery_path.'/mediaelement/mediaelement-and-player.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'novagallery_js', novagallery_js_path.'/jquery.novagallery.min.js', array('jquery', 'modernizr', 'novagallery_transit', 'novagallery_mediaelement_js', 'novagallery_masonry'), '1.4.1', true );
	wp_enqueue_script( 'novagallery_init', novagallery_js_path.'/novagallery-init.js', array('novagallery_js' ), null, true );

    wp_localize_script( 'novagallery_init', 'novaGalleryParams', $galleryParams );


    $color_scheme = $gallery_options['colorScheme'];


    $gallery_html = '';

	if( is_numeric($gallery_options['gutterWidth']) ) {
		$gallery_html .= '<style>#novaThumbGrid li { margin: ' . $gallery_options['gutterWidth'] .'px; }</style>';
	}

    $gallery_html .= '<div id="novaGallery">';

	$gallery_html .= '<div id="novaGallerySets"><ul></ul></div>';

	$gallery_html .= '<div id="novaGalleryWrapper">';

	if( $gallery_options['hideMenu'] === 'true' ) {
		$gallery_html .= '<menu type="toolbar" style="display: none">';
	}
	else {
		$gallery_html .= '<menu type="toolbar">';
	}

	$gallery_html .= '<a id="showNGMenu" class="navButton"><span>&#9776;</span> Gallery Menu</a>';

	$gallery_html .= '<div id="mainNGMenu">';
	$gallery_html .= '<div class="buttonset"><a class="navButton" id="gotoSets">Back</a><a id="goFullscreen" class="navButton">Full Screen</a></div>';

	if( $gallery_options['hideThumbGrid'] !== 'true' && $gallery_options['hideFullwidth'] !== 'true' ) {
		$gallery_html .= '<div class="buttonset" id="displayButtons"><a class="navButton" data-mode="thumbnails">Thumbnails</a><a class="navButton" data-mode="fullwidth">Full Width</a></div>';
	}

	$gallery_html .= '<div class="buttonset" id="filterButtons">';
	$gallery_html .= '<a class="navButton top">Filter</a>';
	$gallery_html .= '<ul>';

	$start = $gallery_options['startCategory'] === 'all' ? 'class="startCategory"' : '';
	$gallery_html .= '<li><a '. $start .' data-type="all">All</a></li>';

	if( $gallery_options['showFileTypeButtons'] === 'true' ) {
        $start = $gallery_options['startCategory'] === 'photo' ? 'class="startCategory"' : '';
        $gallery_html .= '<li><a '. $start .' data-type="photo">Photo</a></li>';

        $start = $gallery_options['startCategory'] === 'audio' ? 'class="startCategory"' : '';
		$gallery_html .= '<li><a '. $start .' data-type="audio">Audio</a></li>';

        $start = $gallery_options['startCategory'] === 'video' ? 'class="startCategory"' : '';
		$gallery_html .= '<li><a '. $start .' data-type="video">Video</a></li>';
    }

	if( isset($gallery_options['categories']) && $gallery_options['categories'] !== '' ) {
        $category_arr = array();
        $category_arr = explode(',', $gallery_options['categories']);
        foreach( $category_arr as $cat ) {
            $cat_name = strtolower( trim($cat) );
            $start = $gallery_options['startCategory'] === $cat_name ? 'class="startCategory"' : '';
			$gallery_html .= '<li><a '. $start .' data-category="'. $cat_name .'">'. $cat .'</a></li>';
        }
    }

	$gallery_html .= '</ul></div></div></menu>';

    if( $gallery_options['hideThumbGrid'] !== 'true' ) {
		$gallery_html .= '<div id="novaThumbGrid" class="displayStyle" data-display="thumbnails">
							<ul></ul>
						</div>  <!-- end #novaThumbGrid -->';
	}

	if( $gallery_options['hideFullwidth'] !== 'true' ) {
		$gallery_html .= '<div id="novaFull" class="displayStyle" data-display="fullwidth">
						<div class="fwmedia"></div>

						<div class="fwBottom">
							<div class="thumbnails">
								<a class="slide-prev"></a>
								<ul></ul>
								<a class="slide-next"></a>
							</div>

							<div class="bottom-bar">
								<div class="progress"></div>
								<p class="slide-number"></p>
								<p class="title"></p>
								<div class="fw-controls">
									<a class="slideshow"></a>
									<a class="prev" title="Previous Item"></a>
									<a class="next" title="Next Item"></a>
									<a class="info"></a>
									<a class="resize"></a>
									<a class="showThumbs" title="Show/Hide Thumbnails"></a>
								</div>
							</div>
						</div>
					</div>  <!-- end #novaFull -->';
	}


	$gallery_html .= '</div></div> <!-- end #novaGallery -->';


    return $gallery_html;
}



// function to return xml data for gallery
add_action( 'wp_ajax_novagallery_xml', 'novagallery_xml' );
add_action( 'wp_ajax_nopriv_novagallery_xml', 'novagallery_xml' );

function novagallery_xml() {
    header('Content-Type: text/xml');

    require_once('includes/aq_resizer.php');

    echo '<?xml version="1.0" encoding="UTF-8"?>';
    echo '<novagallery>';

    $id = $_REQUEST['id'];
    $mobile = $_REQUEST['mobile'];
    $novagallery_options = get_option( 'novagallery_options' );
    $gallery_options = $novagallery_options[$id];

	if( $gallery_options['enableSets'] ) {
		$setnum = count( $gallery_options['sets'] );

		for( $i = 0; $i < $setnum; $i++ ) {
			if( $gallery_options['setThumbs'][$i] ) {
				$thumb = aq_resize( $gallery_options['setThumbs'][$i], 180, 130, false);

				if( !is_wp_error($thumb) ) {
					echo '<gallery thumbnail="'.$thumb.'" title="'. $gallery_options['setNames'][$i] .'">';
				}
				else {
					echo '<gallery title="'. $gallery_options['setNames'][$i] .'">';
				}
			}
			else {
				echo '<gallery title="'. $gallery_options['setNames'][$i] .'">';
			}

			gallery_items_xml( $gallery_options['setsFields'][$i]['itemsFields'], $mobile, $gallery_options['imageCrop'] );

			echo '</gallery>';
		}
	}
	else {
		gallery_items_xml( $gallery_options, $mobile, $gallery_options['imageCrop'] );
	}

    echo '</novagallery>';
    die();
}

function gallery_items_xml ($gallery_options, $mobile, $crop) {
    require_once('includes/aq_resizer.php');

	$itemnum = count( $gallery_options['items'] );

    for( $i = 0; $i < $itemnum; $i++ ) {
        $filetype = $gallery_options['fileTypeVal'][$i];
        echo '<file type="'.$filetype.'">';

        if( isset($gallery_options['itemCategories'][$i]) && $gallery_options['itemCategories'][$i] !== '' ) {
            $category_arr = array();
            $category_arr = explode(',', $gallery_options['itemCategories'][$i]);
            foreach( $category_arr as $cat ) {
                $cat_name = strtolower( trim($cat) );
                echo '<category><![CDATA['.$cat_name.']]></category>';
            }
        }

		if( is_numeric( $gallery_options['thumbWidth'][$i] ) && is_numeric( $gallery_options['thumbHeight'][$i] ) ) {
			$crop = $crop === 'true' ? true : false;
			$thumb = aq_resize( $gallery_options['itemThumb'][$i], $gallery_options['thumbWidth'][$i], $gallery_options['thumbHeight'][$i], $crop );
		}
		else {
			$thumb = $gallery_options['itemThumb'][$i];
		}

        if( !is_wp_error($thumb) ) {
            echo '<thumbnail>'.$thumb.'</thumbnail>';
        }

        if( $filetype === 'photo' ) {
            echo '<source>'.$gallery_options['itemLargeImg'][$i].'</source>';
        }
        else if( $filetype === 'audio' ) {
            echo '<poster>'.$gallery_options['itemLargeImg'][$i].'</poster>';

			if( isset($gallery_options['mp3file'][$i]) && $gallery_options['mp3file'][$i] !== '' ) {
                echo '<source>'.$gallery_options['mp3file'][$i].'</source>';
            }

            if( isset($gallery_options['oggfile'][$i]) && $gallery_options['oggfile'][$i] !== '' ) {
                echo '<source>'.$gallery_options['oggfile'][$i].'</source>';
            }
        }
        else if( $filetype === 'video' ) {
            echo '<poster>'.$gallery_options['itemLargeImg'][$i].'</poster>';

			if( $mobile === 'true' ) {
                echo '<source>'.$gallery_options['mp4mobile'][$i].'</source>';
            }
            else {
                if( isset($gallery_options['mp4file'][$i]) && $gallery_options['mp4file'][$i] !== '' ) {
                    echo '<source>'.$gallery_options['mp4file'][$i].'</source>';
                }

                if( isset($gallery_options['webmfile'][$i]) && $gallery_options['webmfile'][$i] !== '' ) {
                    echo '<source>'.$gallery_options['webmfile'][$i].'</source>';
                }

                if( isset($gallery_options['ogvfile'][$i]) && $gallery_options['ogvfile'][$i] !== '' ) {
                    echo '<source>'.$gallery_options['ogvfile'][$i].'</source>';
                }
            }

            if( isset($gallery_options['youtube'][$i]) && $gallery_options['youtube'][$i] !== '' ) {
                echo '<source>'.$gallery_options['youtube'][$i].'</source>';
            }

            if( isset($gallery_options['vimeo'][$i]) && $gallery_options['vimeo'][$i] !== '' ) {
                echo '<source>'.$gallery_options['vimeo'][$i].'</source>';
            }
        }

        echo '<title><![CDATA['.stripcslashes($gallery_options['itemTitle'][$i]).']]></title>';
        echo '<description><![CDATA['.stripcslashes($gallery_options['itemCaption'][$i]).']]></description>';
        echo '<link><![CDATA['.stripcslashes($gallery_options['link'][$i]).']]></link>';

        echo '</file>';
    }

}


// enqueue stylesheets only if shortcode is present
add_action( 'the_posts', 'novagallery_enqueue_css' );

function novagallery_enqueue_css( $posts ) {
    $found = false;
	$pattern = '/\[(\[?)novagallery(?![\w-])([^\]\/]*(?:\/(?!\])[^\]\/]*)*?)(?:(\/)\]|\](?:([^\[]*+(?:\[(?!\/\2\])[^\[]*+)*+)\[\/\2\])?)(\]?)/s';
	$matches = array();

    foreach ($posts as $post) {
        preg_match_all($pattern, $post->post_content, $matches);
		if ( !empty($matches[0]) ) {
            $found = true;
            break;
        }
    }

    if( $found ) {
        $id = array_pop( explode( '=', $matches[2][0] ) );
		$id = intval( preg_replace("/[^0-9]/", "", $id ) );
		$novagallery_options = get_option( 'novagallery_options' );
		$gallery_options = $novagallery_options[ $id ];
		wp_enqueue_style( 'novagallery_fonts', 'http://fonts.googleapis.com/css?family=Open+Sans|Open+Sans+Condensed:700,300|Oswald', null, null );
		wp_enqueue_style( 'novagallery_css', novagallery_css_path.'/novagallery-'. $gallery_options['colorScheme'] .'.css', array('novagallery_fonts'), null );
        wp_enqueue_style( 'novagallery_mediaelement_css', novagallery_path.'/mediaelement/mediaelementplayer.min.css', null, null );
    }

    return $posts;
}

add_action( 'template_include', 'novagallery_check_template' );

function novagallery_check_template( $template ) {
	$found = false;
	$pattern = '/\[(\[?)novagallery(?![\w-])([^\]\/]*(?:\/(?!\])[^\]\/]*)*?)(?:(\/)\]|\](?:([^\[]*+(?:\[(?!\/\2\])[^\[]*+)*+)\[\/\2\])?)(\]?)/s';
	$matches = array();
	$files = array( $template, get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'header.php', get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'footer.php' );

    foreach ($files as $file) {
        if( file_exists($file) ) {
			$contents = file_get_contents($file);
			preg_match_all($pattern, $contents, $matches);
			if ( !empty($matches[0]) ) {
				$found = true;
				break;
			}
		}
    }

    if( $found ) {
        $id = array_pop( explode( '=', $matches[2][0] ) );
		$id = intval( preg_replace("/[^0-9]/", "", $id ) );
		$novagallery_options = get_option( 'novagallery_options' );
		$gallery_options = $novagallery_options[ $id ];
		wp_enqueue_style( 'novagallery_fonts', 'http://fonts.googleapis.com/css?family=Open+Sans|Open+Sans+Condensed:700,300|Oswald', null, null );
		wp_enqueue_style( 'novagallery_css', novagallery_css_path.'/novagallery-'. $gallery_options['colorScheme'] .'.css', array('novagallery_fonts'), null );
        wp_enqueue_style( 'novagallery_mediaelement_css', novagallery_path.'/mediaelement/mediaelementplayer.min.css', null, null );
    }

    return $template;
}