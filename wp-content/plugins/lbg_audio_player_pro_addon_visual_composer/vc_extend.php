<?php
/*
Plugin Name: Audio Player PRO - Addon For Visual Composer
Description: A Visual Composer Addon which will allow you to insert an advanced HTML5 Audio Player With Playlist, Categories and Search
Version: 1.8
Author: Lambert Group
Author URI: https://codecanyon.net/user/LambertGroup/portfolio?ref=LambertGroup
*/

ini_set('display_errors', 0);
//all the messages
$lbg_categories_messages = array(
		'data_saved' => 'Data Saved!',
		'empty_categ' => 'Category - required',
		'invalid_request' => 'Invalid Request!'
	);
$lbg_categories_path = trailingslashit(dirname(__FILE__));
$rand_id=rand(10,999999);

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}


function appro_addon_vc_map_dependencies() {
	if ( ! defined( 'WPB_VC_VERSION' ) ) {
		$plugin_data = get_plugin_data(__FILE__);
        echo '
        <div class="updated">
          <p>'.sprintf(__('<strong>%s</strong> requires <strong><a href="https://bit.ly/vcomposer" target="_blank">Visual Composer</a></strong> plugin to be installed and activated on your site.', 'vc_extend'), $plugin_data['Name']).'</p>
        </div>';
	}
}
add_action( 'admin_notices', 'appro_addon_vc_map_dependencies' );


function appro_addon_activate() {
	global $wpdb;

	//categories database
	include_once('categs/db.php');
}
register_activation_hook(__FILE__,"appro_addon_activate"); //activate plugin and create the database



function appro_addon_vc_map_init() {
	global $wpdb;
	global $rand_id;

	//categories database
	//include_once($univp_addon_path . 'categs/db.php');



	//get categories values	array for playlist checkbox start
	$categories_arr=array();
	$safe_sql="SELECT * FROM (".$wpdb->prefix ."lbg_categories) ORDER BY categ";
	$result = $wpdb->get_results($safe_sql,ARRAY_A);
	foreach ( $result as $row )
	{
		$row=lbg_unstrip_array($row);
		//$categories_arr[$row['categ']]=$row['categ'];
		$categories_arr[$row['categ']]=$row['id'];
	}
	//get categories values	array for playlist checkbox end


	//Create New Param Type 'attach_media'
	//if (is_admin() && !function_exists('attach_media_callback')) {//check if the categories menu already exists
			vc_add_shortcode_param( 'attach_media', 'attach_media_callback', plugins_url() . '/lbg_audio_player_pro_addon_visual_composer/assets/new_param_type/attach_media.js');
			function attach_media_callback( $settings, $value ) {
				return '<div class="my_param_block">'
				.'<input id="' . esc_attr( $settings['param_name'] ) . '" name="' . esc_attr( $settings['param_name'] ) . '" class="wpb_vc_param_value wpb-textinput ' . esc_attr( $settings['param_name'] ) . ' ' .              esc_attr( $settings['type'] ) . '_field" type="text" value="' . esc_attr( $value ) . '" style="width:70%;" />' .
				'<input name="upload_' . esc_attr( $settings['param_name'] ) . '_button" type="button" id="upload_' . esc_attr( $settings['param_name'] ) . '_button" value="Upload File" style="width:30%;" /> '.'</div>'; // This is html markup that will be outputted in content elements edit form
			}
	//}





	vc_map( array(
		'name' => __( 'Audio Player Pro', 'js_composer' ),
		'base' => 'audio_player_pro',
		"icon" => plugins_url('assets/images/audio_pro_icon.png', __FILE__), // or css class name which you can reffer in your css file later. Example: "vc_extend_my_class"
		"category" => __('LBG Multimedia Addons', 'js_composer'),
		"description" => __("Advanced HTML5 audio player", 'vc_extend'),
		'show_settings_on_create' => false,
		'is_container' => true,
		'admin_enqueue_js'        => preg_replace( '/\s/', '%20', plugins_url( 'assets/audio_player_pro.js', __FILE__ ) ),
		// This will load extra js file in backend (when you edit page with VC)
		// use preg replace to be sure that "space" will not break logic

		//'admin_enqueue_css'       => preg_replace( '/\s/', '%20', plugins_url( 'assets/admin_enqueue_css.css', __FILE__ ) ),
		'admin_enqueue_css'       => preg_replace( '/\s/', '%20', plugins_url( 'assets/audio_player_pro.css', __FILE__ ) ),
		// This will load extra css file in backend (when you edit page with VC)
		'params' => array(
			array(
				'group' => 'General Settings',
				'type' => 'textfield',
				'heading' => __( 'Player ID', 'js_composer' ),
				'param_name' => 'id',
				'value' => __( "".$rand_id."", "my-text-domain" ),
				'description' => __( "It is automaticaly generated and it has to be unique. You can leave it just like it is.", "js_composer" )
			),
			array(
				'group' => 'General Settings',
				'type' => 'dropdown',
				'heading' => __( 'Skin Name', 'js_composer' ),
				'param_name' => 'skin',
				'value'       => array(
					'whiteControllers'   => 'whiteControllers',
					'blackControllers'   => 'blackControllers'
				  ),
			),
			array(
				'group' => 'General Settings',
				'type' => 'textfield',
				'heading' => __( 'Player Width', 'js_composer' ),
				'param_name' => 'player_width', //playerWidth
				'value' => __( "500", "my-text-domain" )
			),
			array(
				'group' => 'General Settings',
				'type' => 'dropdown',
				'heading' => __( 'Responsive', 'js_composer' ),
				'param_name' => 'responsive',
				'value'       => array(
					'No'   => 'false',
					'Yes'   => 'true'
				  )
			),
			array(
				'group' => 'General Settings',
				'type' => 'dropdown',
				'heading' => __( 'Center Player', 'js_composer' ),
				'param_name' => 'center_plugin',
				'value'       => array(
					'Yes'   => 'true',
					'No'   => 'false'
				 ),
				'description' => __( "Center the player", "js_composer" )
			),
			array(
				'group' => 'General Settings',
				'type' => 'dropdown',
				'heading' => __( 'Loop', 'js_composer' ),
				'param_name' => 'loop',
				'value'       => array(
					'Yes'   => 'true',
					'No'   => 'false'

				  )
			),
			array(
				'group' => 'General Settings',
				'type' => 'dropdown',
				'heading' => __( 'Auto Play', 'js_composer' ),
				'param_name' => 'auto_play', //autoPlay
				'value'       => array(
					'Yes'   => 'true',
					'No'   => 'false'
				  )
			),
			array(
				'group' => 'General Settings',
				'type' => 'dropdown',
				'heading' => __( 'Shuffle', 'js_composer' ),
				'param_name' => 'shuffle',
				'value'       => array(
					'No'   => 'false',
					'Yes'   => 'true'
				  )
			),
			array(
				'group' => 'General Settings',
				'type' => 'textfield',
				'heading' => __( 'Initial Volume Value', 'js_composer' ),
				'param_name' => 'initial_volume', //initialVolume
				'value' => __( "100", "my-text-domain" ),
				'description' => __( "Values between 0-100", "js_composer" )
			),
			/*array(
				'group' => 'General Settings',
				'type' => 'dropdown',
				'heading' => __( 'Float', 'js_composer' ),
				'param_name' => 'float',
				'value'       => array(
					'none'   => 'none',
					'left'   => 'left',
					'right'   => 'right'
				  )
			),*/
			array(
				'group' => 'General Settings',
				'type' => 'colorpicker',
				'heading' => __( "Player Background", "js_composer" ),
				'param_name' => 'player_bg', //playerBg
				'value' => '#000000',
				'description' => __( "Choose player background color", "js_composer" )
			),
			array(
				'group' => 'General Settings',
				'type' => 'colorpicker',
				'heading' => __( "Empty Buffer Color", "js_composer" ),
				'param_name' => 'buffer_empty_color', //bufferEmptyColor
				'value' => '#929292',
				'description' => __( "Choose 'empty' buffer color", "js_composer" )
			),
			array(
				'group' => 'General Settings',
				'type' => 'colorpicker',
				'heading' => __( "Full Buffer Color", "js_composer" ),
				'param_name' => 'buffer_full_color', //bufferFullColor
				'value' => '#454545',
				'description' => __( "Choose 'full' buffer color", "js_composer" )
			),
			array(
				'group' => 'General Settings',
				'type' => 'colorpicker',
				'heading' => __( "SeekBar Color", "js_composer" ),
				'param_name' => 'seekbar_color', //seekbarColor
				'value' => '#FFFFFF',
				'description' => __( "Choose SeekBar color", "js_composer" )
			),
			array(
				'group' => 'General Settings',
				'type' => 'colorpicker',
				'heading' => __( "Volume Off State Color", "js_composer" ),
				'param_name' => 'volume_off_color', //volumeOffColor
				'value' => '#454545',
				'description' => __( "Choose volume OFF state color", "js_composer" )
			),
			array(
				'group' => 'General Settings',
				'type' => 'colorpicker',
				'heading' => __( "Volume On State Color", "js_composer" ),
				'param_name' => 'volume_on_color', //volumeOnColor
				'value' => '#FFFFFF',
				'description' => __( "Choose volume ON state color", "js_composer" )
			),
			array(
				'group' => 'General Settings',
				'type' => 'colorpicker',
				'heading' => __( "Timer Color", "js_composer" ),
				'param_name' => 'timer_color', //timerColor
				'value' => '#FFFFFF',
				'description' => __( "Choose timer color", "js_composer" )
			),
			array(
				'group' => 'General Settings',
				'type' => 'colorpicker',
				'heading' => __( "Song Title - Text Color", "js_composer" ),
				'param_name' => 'song_title_color', //songTitleColor
				'value' => '#a6a6a6',
				'description' => __( "Choose song title text color", "js_composer" )
			),
			array(
				'group' => 'General Settings',
				'type' => 'colorpicker',
				'heading' => __( "Song Author - Text Color", "js_composer" ),
				'param_name' => 'song_author_color', //songAuthorColor
				'value' => '#FFFFFF',
				'description' => __( "Choose song author text color", "js_composer" )
			),
			array(
				'group' => 'General Settings',
				'type' => 'colorpicker',
				'heading' => __( "Small buttons area (rewind, shuffle etc.) Borders Color", "js_composer" ),
				'param_name' => 'borders_div_color', //bordersDivColor
				'value' => '#333333',
				'description' => __( "Choose small buttons area (rewind, shuffle etc.) borders color", "js_composer" )
			),
			array(
				'group' => 'General Settings',
				'type' => 'dropdown',
				'heading' => __( 'Show Rewind Button', 'js_composer' ),
				'param_name' => 'show_rewind_but', //showRewindBut
				'value'       => array(
					'Yes'   => 'true',
					'No'   => 'false'
				  )
			),
			array(
				'group' => 'General Settings',
				'type' => 'dropdown',
				'heading' => __( 'Show Shuffle Button', 'js_composer' ),
				'param_name' => 'show_shuffle_but', //showShuffleBut
				'value'       => array(
					'Yes'   => 'true',
					'No'   => 'false'
				  )
			),
			array(
				'group' => 'General Settings',
				'type' => 'dropdown',
				'heading' => __( 'Show Download Button', 'js_composer' ),
				'param_name' => 'show_download_but', //showDownloadBut
				'value'       => array(
					'Yes'   => 'true',
					'No'   => 'false'
				  )
			),
			array(
				'group' => 'General Settings',
				'type' => 'dropdown',
				'heading' => __( 'Show Buy Button', 'js_composer' ),
				'param_name' => 'show_buy_but', //showBuyBut
				'value'       => array(
					'Yes'   => 'true',
					'No'   => 'false'
				  )
			),
			array(
				'group' => 'General Settings',
				'type' => 'textfield',
				'heading' => __( 'Buy Button Title', 'js_composer' ),
				'param_name' => 'buy_but_title', //buyButTitle
				'value' => __( 'Buy Now', 'my-text-domain' )
			),
			array(
				'group' => 'General Settings',
				'type' => 'textfield',
				'heading' => __( 'Buy Button Target Window', 'js_composer' ),
				'param_name' => 'buy_but_target', //buyButTarget
				'value' => __( '_blank', 'my-text-domain' )
			),
			array(
				'group' => 'General Settings',
				'type' => 'dropdown',
				'heading' => __( 'Show Lyrics Button', 'js_composer' ),
				'param_name' => 'show_lyrics_but', //showLyricsBut
				'value'       => array(
					'Yes'   => 'true',
					'No'   => 'false'
				  )
			),
			array(
				'group' => 'General Settings',
				'type' => 'textfield',
				'heading' => __( 'Lyrics Button Title', 'js_composer' ),
				'param_name' => 'lyrics_but_title', //lyricsButTitle
				'value' => __( 'Lyrics', 'my-text-domain' )
			),
			array(
				'group' => 'General Settings',
				'type' => 'textfield',
				'heading' => __( 'Buy Lyrics Target Window', 'js_composer' ),
				'param_name' => 'lyrics_but_target', //lyricsButTarget
				'value' => __( '_blank', 'my-text-domain' )
			),

			array(
				'group' => 'General Settings',
				'type' => 'dropdown',
				'heading' => __( 'Show Twitter Button', 'js_composer' ),
				'param_name' => 'show_twitter_but', //showTwitterBut
				'value'       => array(
					'Yes'   => 'true',
					'No'   => 'false'
				  )
			),
			array(
				'group' => 'General Settings',
				'type' => 'dropdown',
				'heading' => __( 'Show Author', 'js_composer' ),
				'param_name' => 'show_author', //showAuthor
				'value'       => array(
					'Yes'   => 'true',
					'No'   => 'false'
				  )
			),
			array(
				'group' => 'General Settings',
				'type' => 'dropdown',
				'heading' => __( 'Show Title', 'js_composer' ),
				'param_name' => 'show_title', //showTitle
				'value'       => array(
					'Yes'   => 'true',
					'No'   => 'false'
				  )
			),
			array(
				'group' => 'General Settings',
				'type' => 'dropdown',
				'heading' => __( 'Show FaceBook Button', 'js_composer' ),
				'param_name' => 'show_facebook_but', //showFacebookBut
				'value'       => array(
					'Yes'   => 'true',
					'No'   => 'false'
				  )
			),
			array(
				'group' => 'General Settings',
				'type' => 'textfield',
				'heading' => __( 'FaceBook AppID', 'js_composer' ),
				'param_name' => 'facebook_app_id', //facebookAppID
				'value' => __( '', 'my-text-domain' )
			),
			array(
				'group' => 'General Settings',
				'type' => 'textfield',
				'heading' => __( 'FaceBook Share Title', 'js_composer' ),
				'param_name' => 'facebook_share_title', //facebookShareTitle
				'value' => __( '', 'my-text-domain' )
			),
			array(
				'group' => 'General Settings',
				'type' => 'textarea',
				'heading' => __( 'FaceBook Share Description', 'js_composer' ),
				'param_name' => 'facebook_share_description', //facebookShareDescription
				'value' => __( '', 'my-text-domain' )
			),
			array(
				'group' => 'General Settings',
				'type' => 'dropdown',
				'heading' => __( 'Preload', 'js_composer' ),
				'param_name' => 'preload', //preload
				'value'       => array(
					'metadata'   => 'metadata',
					'auto'   => 'auto',
					'none'   => 'none'
				  )
			),
			array(
				'group' => 'General Settings',
				'type' => 'dropdown',
				'heading' => __( 'Activate Google Analytics Traking', 'js_composer' ),
				'param_name' => 'google_traking_on', //googleTrakingOn
				'value'       => array(
					'No'   => 'false',
					'Yes'   => 'true'
				  )
			),
			array(
				'group' => 'General Settings',
				'type' => 'textfield',
				'heading' => __( 'Your Google Analytics Traking Code', 'js_composer' ),
				'param_name' => 'google_traking_code', //googleTrakingCode
				'value' => __( '', 'my-text-domain' ),
				'description' => __( "Example of code: UA-3245593-1", "js_composer" )
			),



			array(
				'group' => 'Playlist Settings',
				'type' => 'dropdown',
				'heading' => __( 'Show Playlist On Init', 'js_composer' ),
				'param_name' => 'show_playlist_on_init', //showPlaylistOnInit
				'value'       => array(
					'Yes'   => 'true',
					'No'   => 'false'
				  )
			),
			array(
				'group' => 'Playlist Settings',
				'type' => 'dropdown',
				'heading' => __( 'Show Playlist Button', 'js_composer' ),
				'param_name' => 'show_playlist_but', //showPlaylistBut
				'value'       => array(
					'Yes'   => 'true',
					'No'   => 'false'
				  )
			),
			array(
				'group' => 'Playlist Settings',
				'type' => 'dropdown',
				'heading' => __( 'Show Playlist', 'js_composer' ),
				'param_name' => 'show_playlist', //showPlaylist
				'value'       => array(
					'Yes'   => 'true',
					'No'   => 'false'
				  )
			),
			array(
				'group' => 'Playlist Settings',
				'type' => 'dropdown',
				'heading' => __( 'Playlist Over Website Content', 'js_composer' ),
				'param_name' => 'playlist_over', //playlistOver
				'value'       => array(
					'No'   => 'false',
					'Yes'   => 'true'
				  )
			),
			array(
				'group' => 'Playlist Settings',
				'type' => 'textfield',
				'heading' => __( 'Playlist Top Position', 'js_composer' ),
				'param_name' => 'playlist_top_pos', //playlistTopPos
				'value' => __( "2", "my-text-domain" )
			),
			array(
				'group' => 'Playlist Settings',
				'type' => 'colorpicker',
				'heading' => __( "Playlist Background Color", "js_composer" ),
				'param_name' => 'playlist_bg_color', //playlistBgColor
				'value' => '#000000',
				'description' => __( "Choose playlist background color", "js_composer" )
			),
			array(
				'group' => 'Playlist Settings',
				'type' => 'colorpicker',
				'heading' => __( "Playlist Record Background Off Color", "js_composer" ),
				'param_name' => 'playlist_record_bg_off_color', //playlistRecordBgOffColor
				'value' => '#000000',
				'description' => __( "Choose playlist record background OFF state color", "js_composer" )
			),
			array(
				'group' => 'Playlist Settings',
				'type' => 'colorpicker',
				'heading' => __( "Playlist Record Background On Color", "js_composer" ),
				'param_name' => 'playlist_record_bg_on_color', //playlistRecordBgOnColor
				'value' => '#333333',
				'description' => __( "Choose playlist record background ON state color", "js_composer" )
			),
			array(
				'group' => 'Playlist Settings',
				'type' => 'colorpicker',
				'heading' => __( "Playlist Record Bottom Border Off Color", "js_composer" ),
				'param_name' => 'playlist_record_bottom_border_off_color', //playlistRecordBottomBorderOffColor
				'value' => '#333333',
				'description' => __( "Choose playlist record bottom border OFF state color", "js_composer" )
			),
			array(
				'group' => 'Playlist Settings',
				'type' => 'colorpicker',
				'heading' => __( "Playlist Record Bottom Border On Color", "js_composer" ),
				'param_name' => 'playlist_record_bottom_border_on_color', //playlistRecordBottomBorderOnColor
				'value' => '#FFFFFF',
				'description' => __( "Choose playlist record bottom border ON state color", "js_composer" )
			),
			array(
				'group' => 'Playlist Settings',
				'type' => 'colorpicker',
				'heading' => __( "Playlist Record Text Off Color", "js_composer" ),
				'param_name' => 'playlist_record_text_off_color', //playlistRecordTextOffColor
				'value' => '#777777',
				'description' => __( "Choose playlist record text OFF state color", "js_composer" )
			),
			array(
				'group' => 'Playlist Settings',
				'type' => 'colorpicker',
				'heading' => __( "Playlist Record Text On Color", "js_composer" ),
				'param_name' => 'playlist_record_text_on_color', //playlistRecordTextOnColor
				'value' => '#FFFFFF',
				'description' => __( "Choose playlist record text ON state color", "js_composer" )
			),
			array(
				'group' => 'Playlist Settings',
				'type' => 'textfield',
				'heading' => __( 'Number Of Items Per Screen', 'js_composer' ),
				'param_name' => 'number_of_thumbs_per_screen', //numberOfThumbsPerScreen
				'value' => __( "5", "my-text-domain" )
			),
			array(
				'group' => 'Playlist Settings',
				'type' => 'textfield',
				'heading' => __( 'Playlist Padding', 'js_composer' ),
				'param_name' => 'playlist_padding', //playlistPadding
				'value' => __( "18", "my-text-domain" )
			),
			array(
				'group' => 'Playlist Settings',
				'type' => 'dropdown',
				'heading' => __( 'Show Playlist Number', 'js_composer' ),
				'param_name' => 'show_playlist_number', //showPlaylistNumber
				'value'       => array(
					'Yes'   => 'true',
					'No'   => 'false'
				  )
			),



			array(
				'group' => 'Categories Settings',
				'type' => 'dropdown',
				'heading' => __( 'Show Categories', 'js_composer' ),
				'param_name' => 'show_categories', //showCategories
				'value'       => array(
					'Yes'   => 'true',
					'No'   => 'false'
				  )
			),
			array(
				'group' => 'Categories Settings',
				'type' => 'textfield',
				'heading' => __( 'First Category', 'js_composer' ),
				'param_name' => 'first_categ', //firstCateg
				'value' => __( '', 'my-text-domain' ),
				'description' => __( "Write the exact name of the category you want to be the first one. Leave it blank and the first one, in alphabetical order, will be displayed", "js_composer" )
			),
			array(
				'group' => 'Categories Settings',
				'type' => 'colorpicker',
				'heading' => __( "Category Record Background Off Color", "js_composer" ),
				'param_name' => 'category_record_bg_off_color', //categoryRecordBgOffColor
				'value' => '#191919',
				'description' => __( "Choose category record background OFF state color", "js_composer" )
			),
			array(
				'group' => 'Categories Settings',
				'type' => 'colorpicker',
				'heading' => __( "Category Record Background On Color", "js_composer" ),
				'param_name' => 'category_record_bg_on_color', //categoryRecordBgOnColor
				'value' => '#252525',
				'description' => __( "Choose category record background ON state color", "js_composer" )
			),
			array(
				'group' => 'Categories Settings',
				'type' => 'colorpicker',
				'heading' => __( "Category Record Bottom Border Off Color", "js_composer" ),
				'param_name' => 'category_record_bottom_border_off_color', //categoryRecordBottomBorderOffColor
				'value' => '#2f2f2f',
				'description' => __( "Choose category record bottom border OFF state color", "js_composer" )
			),
			array(
				'group' => 'Categories Settings',
				'type' => 'colorpicker',
				'heading' => __( "Category Record Bottom Border On Color", "js_composer" ),
				'param_name' => 'category_record_bottom_border_on_color', //categoryRecordBottomBorderOnColor
				'value' => '#2f2f2f',
				'description' => __( "Choose category record bottom border ON state color", "js_composer" )
			),
			array(
				'group' => 'Categories Settings',
				'type' => 'colorpicker',
				'heading' => __( "Category Record Text Off Color", "js_composer" ),
				'param_name' => 'category_record_text_off_color', //categoryRecordTextOffColor
				'value' => '#4c4c4c',
				'description' => __( "Choose category record text OFF state color", "js_composer" )
			),
			array(
				'group' => 'Categories Settings',
				'type' => 'colorpicker',
				'heading' => __( "Category Record Text On Color", "js_composer" ),
				'param_name' => 'category_record_text_on_color', //categoryRecordTextOnColor
				'value' => '#00b4f9',
				'description' => __( "Choose category record text ON state color", "js_composer" )
			),
			array(
				'group' => 'Categories Settings',
				'type' => 'colorpicker',
				'heading' => __( "Selected Category Background Color", "js_composer" ),
				'param_name' => 'selected_categ_bg', //selectedCategBg
				'value' => '#333333',
				'description' => __( "Choose selected categ background color", "js_composer" )
			),
			array(
				'group' => 'Categories Settings',
				'type' => 'colorpicker',
				'heading' => __( "Selected Category Off Color", "js_composer" ),
				'param_name' => 'selected_categ_off_color', //selectedCategOffColor
				'value' => '#FFFFFF',
				'description' => __( "Choose selected category OFF state color", "js_composer" )
			),
			array(
				'group' => 'Categories Settings',
				'type' => 'colorpicker',
				'heading' => __( "Selected Category On Color", "js_composer" ),
				'param_name' => 'selected_categ_on_color', //selectedCategOnColor
				'value' => '#FFFFFF',
				'description' => __( "Choose selected category ON state color", "js_composer" )
			),
			array(
				'group' => 'Categories Settings',
				'type' => 'textfield',
				'heading' => __( 'Selected Category Bottom Margin', 'js_composer' ),
				'param_name' => 'selected_categ_margin_bottom', //selectedCategMarginBottom
				'value' => __( "12", "my-text-domain" )
			),

			array(
				'group' => 'Search Area Settings',
				'type' => 'dropdown',
				'heading' => __( 'Show Search Area', 'js_composer' ),
				'param_name' => 'show_search_area', //showSearchArea
				'value'       => array(
					'Yes'   => 'true',
					'No'   => 'false'
				  )
			),
			array(
				'group' => 'Search Area Settings',
				'type' => 'colorpicker',
				'heading' => __( "Search Area Background Color", "js_composer" ),
				'param_name' => 'search_area_bg', //searchAreaBg
				'value' => '#333333',
				'description' => __( "Choose search area background color", "js_composer" )
			),
			array(
				'group' => 'Search Area Settings',
				'type' => 'textfield',
				'heading' => __( 'Search Input Text', 'js_composer' ),
				'param_name' => 'search_input_text', //searchInputText
				'value' => __( "search...", "my-text-domain" )
			),
			array(
				'group' => 'Search Area Settings',
				'type' => 'colorpicker',
				'heading' => __( "Search Input Background Color", "js_composer" ),
				'param_name' => 'search_input_bg', //searchInputBg
				'value' => '#FFFFFF',
				'description' => __( "Choose search input background color", "js_composer" )
			),
			array(
				'group' => 'Search Area Settings',
				'type' => 'colorpicker',
				'heading' => __( "Search Input Border Color", "js_composer" ),
				'param_name' => 'search_input_border_color', //searchInputBorderColor
				'value' => '#333333',
				'description' => __( "Choose search input border color", "js_composer" )
			),
			array(
				'group' => 'Search Area Settings',
				'type' => 'colorpicker',
				'heading' => __( "Search Input Text Color", "js_composer" ),
				'param_name' => 'search_input_text_color', //searchInputTextColor
				'value' => '#333333',
				'description' => __( "Choose search input text color", "js_composer" )
			),
			array(
				'group' => 'Search Area Settings',
				'type' => 'dropdown',
				'heading' => __( 'Search Inside Author Field', 'js_composer' ),
				'param_name' => 'search_author', //searchAuthor
				'value'       => array(
					'Yes'   => 'true',
					'No'   => 'false'
				  )
			),
		),
		'custom_markup' => '
	<div class="wpb_accordion_holder wpb_holder clearfix vc_container_for_children">
	%content%
	</div>
	<div class="tab_controls lbg_add_playlist_item">
		<a class="add_tab vc_add_playlist_item" title="' . __( 'Add Playlist Item', 'js_composer' ) . '"><span class="vc_playlist_item_vc_icon"></span>' . __( 'Add Playlist Item', 'js_composer' ) . '</a>
	</div>
	',
		'default_content' => '
		[audio_player_pro_playlist_item title="' . __( 'Playlist Item  1', 'js_composer' ) . '"][/audio_player_pro_playlist_item]
	',
		'js_view' => 'VcAudioPlayerProView'
	) );
	vc_map( array(
		'name' => __( 'Playlist Item', 'js_composer' ),
		'base' => 'audio_player_pro_playlist_item',
		'allowed_container_element' => 'vc_row',
		'is_container' => true,
		'content_element' => false,
		'admin_enqueue_js'        => preg_replace( '/\s/', '%20', plugins_url( 'assets/playlist_item.js', __FILE__ ) ),
		// This will load extra js file in backend (when you edit page with VC)
		// use preg replace to be sure that "space" will not break logic

		'admin_enqueue_css'       => preg_replace( '/\s/', '%20', plugins_url( 'assets/playlist_item.css', __FILE__ ) ),
		// This will load extra css file in backend (when you edit page with VC)
		'params' => array(
			array(
				'type' => 'textfield',
				'heading' => __( 'Song Title', 'js_composer' ),
				'param_name' => 'title'
			),
			array(
				'type' => 'textfield',
				'heading' => __( 'Song Author', 'js_composer' ),
				'param_name' => 'xauthor'
			),
			array(
				'type' => 'checkbox',
				'heading' => __( 'Category', 'js_composer' ),
				"value"       => $categories_arr,
				'param_name' => 'xcategory',
				'description' => __( 'Select at least one category', 'js_composer' )
			),
			array(
				'type' => 'attach_image',
				'heading' => __( 'Thumbnail', 'js_composer' ),
				'param_name' => 'ximage',
				'description' => __( 'Select an image from Media Library', 'js_composer' )

			),
			array(
				'type' => 'textfield',
				'heading' => __( 'Buy Link', 'js_composer' ),
				'param_name' => 'buylink'
			),
			array(
				'type' => 'textfield',
				'heading' => __( 'Lyrics Link', 'js_composer' ),
				'param_name' => 'lyricslink'
			),
			array(
				'type' => 'attach_media',
				'heading' => __( 'MP3 file (Chrome, IE, Safari)', 'js_composer' ),
				'param_name' => 'xsources_mp3',
				'description' => __( 'Select a MP3 file from Media Library', 'js_composer' )
			),
			array(
				'type' => 'attach_media',
				'heading' => __( 'OGG file (Opera) - not mandatory', 'js_composer' ),
				'param_name' => 'xsources_ogg',
				'description' => __( 'Select a OGG file from Media Library', 'js_composer' )
			),

		),
		'js_view' => 'VcPlaylistItemView'
	) );








	/*// Note that all keys=values in mapped shortcode can be used with javascript variable vc.map, and php shortcode settings variable.
	$settings = array(
		'name'                    => __( 'Test element', 'js_composer' ),
		// shortcode name

		'base'                    => 'test_element',
		// shortcode base [test_element]

		'category'                => __( 'Test elements', 'js_composer' ),
		// param category tab in add elements view

		'description'             => __( 'Test element description', 'js_composer' ),
		// element description in add elements view

		'show_settings_on_create' => false,
		// don't show params window after adding

		'weight'                  => - 5,
		// Depends on ordering in list, Higher weight first

		'html_template'           => dirname( __FILE__ ) . '/vc_templates/test_element.php',
		// if you extend VC within your theme then you don't need this, VC will look for shortcode template in "wp-content/themes/your_theme/vc_templates/test_element.php" automatically. In this example we are extending VC from plugin, so we rewrite template

		'admin_enqueue_js'        => preg_replace( '/\s/', '%20', plugins_url( 'assets/admin_enqueue_js.js', __FILE__ ) ),
		// This will load extra js file in backend (when you edit page with VC)
		// use preg replace to be sure that "space" will not break logic

		'admin_enqueue_css'       => preg_replace( '/\s/', '%20', plugins_url( 'assets/admin_enqueue_css.css', __FILE__ ) ),
		// This will load extra css file in backend (when you edit page with VC)

		'front_enqueue_js'        => preg_replace( '/\s/', '%20', plugins_url( 'assets/front_enqueue_js.js', __FILE__ ) ),
		// This will load extra js file in frontend editor (when you edit page with VC)

		'front_enqueue_css'       => preg_replace( '/\s/', '%20', plugins_url( 'assets/front_enqueue_css.css', __FILE__ ) ),
		// This will load extra css file in frontend editor (when you edit page with VC)

		'js_view'                 => 'ViewTestElement',
		// JS View name for backend. Can be used to override or add some logic for shortcodes in backend (cloning/rendering/deleting/editing).

		'params'                  => array(
			array(
				"type"        => "textfield",
				"heading"     => __( "Chart value(1-100)", "js_composer" ),
				"param_name"  => "value",
				"description" => __( "Chart value(number).", "js_composer" )
			),
			array(
				'type'        => 'textarea_html',
				'holder'      => 'div',
				'class'       => 'custom_class_for_element', //will be outputed in the backend editor
				'heading'     => __( 'Content', 'js_composer' ),
				'param_name'  => 'content', //param_name for textarea_html must be named "content"
				'value'       => __( '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo..</p>', 'js_composer' ),
				'description' => __( 'Dummy text for content element.', 'js_composer' )
			),
		)
	);
	vc_map( $settings );*/

	if ( class_exists( "WPBakeryShortCode" ) ) {
		$appro_addon_path = trailingslashit(dirname(__FILE__));
		include_once($appro_addon_path . 'vc_contentadmin/audio_player_pro-accordion.php');
		include_once($appro_addon_path . 'vc_contentadmin/audio_player_pro-accordion-tab.php');

		// Class Name should be WPBakeryShortCode_Your_Short_Code
		// See more in vc_composer/includes/classes/shortcodes/shortcodes.php
		/*class WPBakeryShortCode_Test_Element extends WPBakeryShortCode {

			public function __construct( $settings ) {
				parent::__construct( $settings ); // !Important to call parent constructor to active all logic for shortcode.
				$this->jsCssScripts();
			}

			public function vcLoadIframeJsCss() {
				wp_enqueue_style( 'test_element_iframe' );
			}

			public function contentInline( $atts, $content ) {
				$this->vcLoadIframeJsCss();
			}

			// Register scripts and styles there (for preview and frontend editor mode).
			public function jsCssScripts() {
				wp_register_script( 'test_element', plugins_url( 'assets/js/test_element.js', __FILE__ ), array( 'jquery' ), time(), false );
				wp_register_style( 'test_element_iframe', plugins_url( 'assets/front_enqueue_iframe_css.css', __FILE__ ) );
			}

			// Some custom helper function that can be used in content element template (vc_templates/test_element.php)
			// This function check some string if it matches "yes","true",1,"1" return TRUE if yes, false if NOT.
			public function checkBool( $in ) {
				if ( strlen( $in ) > 0 && in_array( strtolower( $in ), array(
					"yes",
					"true",
					"1",
					1
				) )
				) {
					return true;
				}
				return false;
			}

		}*/
	} // End Class

}


add_action('vc_after_init', 'appro_addon_vc_map_init');







if (!function_exists('lbg_unstrip_array')) {
	//stripslashes for an entire array
	function lbg_unstrip_array($array){
		if (is_array($array)) {
			foreach($array as &$val){
				if(is_array($val)){
					$val = unstrip_array($val);
				} else {
					$val = stripslashes($val);

				}
			}
		}
		return $array;
	}
}





function audio_player_pro_addon_enqueue_scripts_and_styles() {
	//if (!is_admin()) {
				wp_enqueue_style('audio2-html5_site_css', plugins_url('audio2_html5/audio2_html5.css', __FILE__));

				wp_enqueue_script('jquery');

				wp_enqueue_script('jquery-ui-core');
				/*wp_enqueue_script('jquery-ui-widget');
				wp_enqueue_script('jquery-ui-mouse');
				wp_enqueue_script('jquery-ui-accordion');
				wp_enqueue_script('jquery-ui-autocomplete');*/
				wp_enqueue_script('jquery-ui-slider');
				/*wp_enqueue_script('jquery-ui-tabs');
				wp_enqueue_script('jquery-ui-sortable');
				wp_enqueue_script('jquery-ui-draggable');
				wp_enqueue_script('jquery-ui-droppable');
				wp_enqueue_script('jquery-ui-selectable');
				wp_enqueue_script('jquery-ui-position');
				wp_enqueue_script('jquery-ui-datepicker');
				wp_enqueue_script('jquery-ui-resizable');
				wp_enqueue_script('jquery-ui-dialog');
				wp_enqueue_script('jquery-ui-button');

				wp_enqueue_script('jquery-form');
				wp_enqueue_script('jquery-color');
				wp_enqueue_script('jquery-masonry');*/
				wp_enqueue_script('jquery-ui-progressbar');
				/*wp_enqueue_script('jquery-ui-tooltip');*/

				wp_enqueue_script('jquery-effects-core');
				/*wp_enqueue_script('jquery-effects-blind');
				wp_enqueue_script('jquery-effects-bounce');
				wp_enqueue_script('jquery-effects-clip');
				wp_enqueue_script('jquery-effects-drop');
				wp_enqueue_script('jquery-effects-explode');
				wp_enqueue_script('jquery-effects-fade');
				wp_enqueue_script('jquery-effects-fold');
				wp_enqueue_script('jquery-effects-highlight');
				wp_enqueue_script('jquery-effects-pulsate');
				wp_enqueue_script('jquery-effects-scale');
				wp_enqueue_script('jquery-effects-shake');
				wp_enqueue_script('jquery-effects-slide');
				wp_enqueue_script('jquery-effects-transfer');*/


				wp_register_script('lbg-mousewheel', plugins_url('audio2_html5/js/jquery.mousewheel.min.js', __FILE__));
				wp_enqueue_script('lbg-mousewheel');

				wp_register_script('lbg-touchSwipe', plugins_url('audio2_html5/js/jquery.touchSwipe.min.js', __FILE__));
				wp_enqueue_script('lbg-touchSwipe');

				wp_register_script('lbg-audio2_html5', plugins_url('audio2_html5/js/audio2_html5.js', __FILE__));
				wp_enqueue_script('lbg-audio2_html5');

				wp_register_script('lbg-google_a', plugins_url('audio2_html5/js/google_a.js', __FILE__));
				wp_enqueue_script('lbg-google_a');
	//}
}
add_action( 'wp_enqueue_scripts', 'audio_player_pro_addon_enqueue_scripts_and_styles' );



function audio_player_pro_addon_enqueue_admin_scripts_and_styles() {
	//load scripts in admin
    //categories menu  start
	//if (is_admin() && !function_exists('audio_player_pro_menu')) {//check if the categories menu already exists
			wp_enqueue_script('jquery-effects-highlight');

			wp_register_script('lbg-admin-editinplace', plugins_url('assets/jquery.editinplace.js', __FILE__));
			wp_enqueue_script('lbg-admin-editinplace');
	//}
	//categories menu end
}
add_action( 'admin_enqueue_scripts', 'audio_player_pro_addon_enqueue_admin_scripts_and_styles' );




//categories menu  start
if (is_admin() && !function_exists('audio_player_pro_menu')) {//check if the categories menu already exists
		include_once('categs/categs_functions.php');
}
//categories menu end



//the shortcodes
add_shortcode( 'audio_player_pro_playlist_item', 'audio_player_pro_playlist_item_func' );
function audio_player_pro_playlist_item_func( $atts, $content = null ) { // New function parameter $content is added!
	global $wpdb;

	$safe_sql="SELECT * FROM (".$wpdb->prefix ."lbg_categories) ORDER BY categ";
	$result_categ = $wpdb->get_results($safe_sql,ARRAY_A);
	$categ_arr=array();
	foreach ( $result_categ as $row_categ ) {
		if (preg_match_all('/\b'.$row_categ["id"].'\b/', str_replace(',',';',$atts["xcategory"]), $matches)) {
			$categ_arr[]=$row_categ['categ'];
		}
	}


	$the_thumb=wp_get_attachment_image_src($atts["ximage"], "large");


	$aux_content='<ul>
			<li class="xtitle">'.$atts["title"].'</li>
			<li class="xauthor">'.$atts["xauthor"].'</li>
			<li class="ximage">'.$the_thumb[0].'</li>
			<li class="xcategory">'.implode(";",$categ_arr).'</li>
			<li class="xbuy">'.$atts["buylink"].'</li>
			<li class="xlyrics">'.$atts["lyricslink"].'</li>
			<li class="xsources_mp3">'.$atts["xsources_mp3"].'</li>
			<li class="xsources_ogg">'.$atts["xsources_ogg"].'</li>
		</ul>';
	return str_replace("\r\n", '', $aux_content);
}


add_shortcode( 'audio_player_pro', 'audio_player_pro_func' );
	function audio_player_pro_func( $atts, $content = null ) { // New function parameter $content is added!
		global $rand_id;
		$initial_vals_arr=array(
			'id' => $rand_id,
			'skin' => 'whiteControllers',
			'player_width' =>  500,
			'responsive' => 'false',
			'center_plugin' => 'true',
			'loop' => 'true',
			'auto_play' => 'true',
			'shuffle' => 'false',
			'initial_volume' => 100,
			'player_bg' => '#000000',
			'buffer_empty_color' => '#929292',
			'buffer_full_color' => '#454545',
			'seekbar_color' => '#FFFFFF',
			'volume_off_color' => '#454545',
			'volume_on_color' => '#FFFFFF',
			'timer_color' => '#FFFFFF',
			'song_title_color' => '#a6a6a6',
			'song_author_color' => '#FFFFFF',
			'borders_div_color' => '#333333',
			'show_rewind_but' => 'true',
			'show_shuffle_but' => 'true',
			'show_download_but' => 'true',
			'show_buy_but' => 'true',
			'buy_but_title' => 'Buy Now',
			'buy_but_target' => '_blank',
			'show_lyrics_but' => 'true',
			'lyrics_but_title' => 'Lyrics',
			'lyrics_but_target' => '_blank',
			'show_twitter_but' => 'true',
			'show_author' => 'true',
			'show_title' => 'true',
			'show_facebook_but' => 'true',
			'facebook_app_id' => '',
			'facebook_share_title' => '',
			'facebook_share_description' => '',
			'preload' => 'metadata',
			'google_traking_on' => 'false',
			'google_traking_code' => '',
			'show_playlist_on_init' => 'true',
			'show_playlist_but' => 'true',
			'show_playlist' => 'true',
			'playlist_over' => 'false',
			'playlist_top_pos' => 2,
			'playlist_bg_color' => '#000000',
			'playlist_record_bg_off_color' => '#000000',
			'playlist_record_bg_on_color' => '#333333',
			'playlist_record_bottom_border_off_color' => '#333333',
			'playlist_record_bottom_border_on_color' => '#FFFFFF',
			'playlist_record_text_off_color' => '#777777',
			'playlist_record_text_on_color' => '#FFFFFF',
			'number_of_thumbs_per_screen' => 5,
			'playlist_padding' => 18,
			'show_playlist_number' => 'true',
			'show_categories' => 'true',
			'first_categ' => '',
			'category_record_bg_off_color' => '#191919',
			'category_record_bg_on_color' => '#252525',
			'category_record_bottom_border_off_color' => '#2f2f2f',
			'category_record_bottom_border_on_color' => '#2f2f2f',
			'category_record_text_off_color' => '#4c4c4c',
			'category_record_text_on_color' => '#00b4f9',
			'selected_categ_bg' => '#333333',
			'selected_categ_off_color' => '#FFFFFF',
			'selected_categ_on_color' => '#FFFFFF',
			'selected_categ_margin_bottom' => 12,
			'show_search_area' => 'true',
			'search_area_bg' => '#333333',
			'search_input_text' => 'search...',
			'search_input_bg' => '#FFFFFF',
			'search_input_border_color' => '#333333',
			'search_input_text_color' => '#333333',
			'search_author' => 'true'
	   );

	   extract( shortcode_atts( $initial_vals_arr, $atts ) );
	   foreach ($initial_vals_arr as $key => $value) {
    		//echo "Key: $key; Value: $value<br />\n";
			if (!isset($atts[$key])) {
				$atts[$key]=$value;
			}
		}




	  /*
	   //$content = wpb_js_remove_wpautop($content, true); // fix unclosed/unwanted paragraph tags in $content*/

	//float
	$float_aux='';
	/*if ($atts["float"]!='none') {
		$float_aux='float:'.$atts["float"].';';
		if ($atts["float"]=='left')
			$float_aux.=' padding-top:5px;padding-right:20px;padding-bottom:0px;padding-left:0px;';
		else
			$float_aux.=' padding-top:5px;padding-right:0px;padding-bottom:0px;padding-left:20px;';
	}*/

	//preload
	$preload_aux='metadata';
	if ($atts["preload"]) {
		$preload_aux=$atts["preload"];
	}

	//download
	$pathToDownloadFile_aux= WP_PLUGIN_URL.'/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__)).'audio2_html5/';

	$playlist_str='';
	$playlist_str=do_shortcode( $content );


	$playlistOver_aux='';
	$player_height=0;
	$playlist_unit_height=31;
	$playlist_height=0;
	$numberOfThumbsPerScreen_aux=$atts["number_of_thumbs_per_screen"];
	$playlistPadding_aux=$atts["playlist_padding"];
	$playlistTopPos_aux=$atts["playlist_top_pos"];
	$selectedCategMarginBottom_aux=$atts["selected_categ_margin_bottom"];
	if ($atts["playlist_over"]=='false' && $atts["show_playlist"]=='true') {
		$player_height+=175;
	}

	if ($player_height) {
		$playlist_height=2*$playlistPadding_aux+$playlist_unit_height*$numberOfThumbsPerScreen_aux+25+24+2*$selectedCategMarginBottom_aux+$playlistTopPos_aux; //25 - audio2_html5_selectedCategDiv & 24 - audio2_html5_searchDiv
		if ($atts["show_categories"]=='false') {
			$playlist_height-=25;
		}
		if ($atts["show_search_area"]=='false') {
			$playlist_height-=24;
		}
		$playlistOver_aux="height:".($player_height+$playlist_height)."px;";
	}

	$aux_content='';
	$new_div_start='';
	$new_div_end='';
	if ($atts["center_plugin"]=='true') {
		$new_div_start='<div class="my_center_'.$atts["id"].'">';
		$new_div_end='</div>';
		$aux_content='<style>
		.my_center_'.$atts["id"].' {
			width:'.$atts["player_width"].'px;  margin:0px auto;
		}
		@media screen and (max-width:'.$atts["player_width"].'px) {
			.my_center_'.$atts["id"].' {
				width:100%;  margin:0px auto;
			}
		}
	</style>';

	}

	if ($float_aux || $playlistOver_aux) {
		$new_div_start.='<div style="'.$float_aux.''.$playlistOver_aux.'">';
		$new_div_end.='</div>';
	}



	$aux_content.='<p><script>
		jQuery(function() {
			jQuery("#lbg_audio2_html5_'.$atts["id"].'").audio2_html5({
				skin:"'.$atts["skin"].'",
				playerWidth:'.$atts["player_width"].',
				responsive:'.$atts["responsive"].',
				initialVolume:'.($atts["initial_volume"]/100).',
				autoPlay:'.$atts["auto_play"].',
				loop:'.$atts["loop"].',
				shuffle:'.$atts["shuffle"].',
				playerBg:"'.$atts["player_bg"].'",
				bufferEmptyColor:"'.$atts["buffer_empty_color"].'",
				bufferFullColor:"'.$atts["buffer_full_color"].'",
				seekbarColor:"'.$atts["seekbar_color"].'",
				volumeOffColor:"'.$atts["volume_off_color"].'",
				volumeOnColor:"'.$atts["volume_on_color"].'",
				timerColor:"'.$atts["timer_color"].'",
				songTitleColor:"'.$atts["song_title_color"].'",
				songAuthorColor:"'.$atts["song_author_color"].'",
				bordersDivColor:"'.$atts["borders_div_color"].'",
				googleTrakingOn:'.$atts["google_traking_on"].',
				googleTrakingCode:"'.$atts["google_traking_code"].'",
				showRewindBut:'.$atts["show_rewind_but"].',
				showShuffleBut:'.$atts["show_shuffle_but"].',
				showDownloadBut:'.$atts["show_download_but"].',
				showBuyBut:'.$atts["show_buy_but"].',
				showLyricsBut:'.$atts["show_lyrics_but"].',
				buyButTitle:"'.$atts["buy_but_title"].'",
				lyricsButTitle:"'.$atts["lyrics_but_title"].'",
				buyButTarget:"'.$atts["buy_but_target"].'",
				lyricsButTarget:"'.$atts["lyrics_but_target"].'",
				showFacebookBut:'.$atts["show_facebook_but"].',
				facebookAppID:"'.$atts["facebook_app_id"].'",
				facebookShareTitle:"'.$atts["facebook_share_title"].'",
				facebookShareDescription:"'.$atts["facebook_share_description"].'",
				showTwitterBut:'.$atts["show_twitter_but"].',
				showAuthor:'.$atts["show_author"].',
				showTitle:'.$atts["show_title"].',
				showPlaylistBut:'.$atts["show_playlist_but"].',
				showPlaylist:'.$atts["show_playlist"].',
				showPlaylistOnInit:'.$atts["show_playlist_on_init"].',
				playlistTopPos:'.$atts["playlist_top_pos"].',
				playlistBgColor:"'.$atts["playlist_bg_color"].'",
				playlistRecordBgOffColor:"'.$atts["playlist_record_bg_off_color"].'",
				playlistRecordBgOnColor:"'.$atts["playlist_record_bg_on_color"].'",
				playlistRecordBottomBorderOffColor:"'.$atts["playlist_record_bottom_border_off_color"].'",
				playlistRecordBottomBorderOnColor:"'.$atts["playlist_record_bottom_border_on_color"].'",
				playlistRecordTextOffColor:"'.$atts["playlist_record_text_off_color"].'",
				playlistRecordTextOnColor:"'.$atts["playlist_record_text_on_color"].'",
				categoryRecordBgOffColor:"'.$atts["category_record_bg_off_color"].'",
				categoryRecordBgOnColor:"'.$atts["category_record_bg_on_color"].'",
				categoryRecordBottomBorderOffColor:"'.$atts["category_record_bottom_border_off_color"].'",
				categoryRecordBottomBorderOnColor:"'.$atts["category_record_bottom_border_on_color"].'",
				categoryRecordTextOffColor:"'.$atts["category_record_text_off_color"].'",
				categoryRecordTextOnColor:"'.$atts["category_record_text_on_color"].'",
				numberOfThumbsPerScreen:'.$atts["number_of_thumbs_per_screen"].',
				playlistPadding:'.$atts["playlist_padding"].',
				showCategories:'.$atts["show_categories"].',
				firstCateg:"'.$atts["first_categ"].'",
				selectedCategBg:"'.$atts["selected_categ_bg"].'",
				selectedCategOffColor:"'.$atts["selected_categ_off_color"].'",
				selectedCategOnColor:"'.$atts["selected_categ_on_color"].'",
				selectedCategMarginBottom:'.$atts["selected_categ_margin_bottom"].',
				showSearchArea:'.$atts["show_search_area"].',
				searchAreaBg:"'.$atts["search_area_bg"].'",
				searchInputText:"'.$atts["search_input_text"].'",
				searchInputBg:"'.$atts["search_input_bg"].'",
				searchInputBorderColor:"'.$atts["search_input_border_color"].'",
			    searchInputTextColor:"'.$atts["search_input_text_color"].'",
				searchAuthor:'.$atts["search_author"].',
				showPlaylistNumber:'.$atts["show_playlist_number"].',
				pathToDownloadFile:"'.$pathToDownloadFile_aux.'"
			});
		});
	</script>
    '.$new_div_start.'<div class="audio2_html5">
            <audio id="lbg_audio2_html5_'.$atts["id"].'" preload="'.$preload_aux.'">
                  <div class="xaudioplaylist">'.$playlist_str.'</div>
              No HTML5 audio playback capabilities for this browser. Use <a href="https://www.google.com/intl/en/chrome/browser/">Chrome Browser!</a>
            </audio>
     </div>
	<br style="clear:both;">'.$new_div_end.'</p>';

	return str_replace("\r\n", '', $aux_content);

	}

?>
