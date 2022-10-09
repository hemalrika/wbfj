<?php
/*
* This file handles the Nova Gallery options in the admin page and the uploading of files
*/

// First determine whether the page is opened to create a new gallery or edit an existing one.
// Depending on that choice all the form fields are filled up accordingly
$action = '';
if( isset( $_GET['action'] ) && $_GET['action'] == 'edit' ) {
    check_admin_referer( 'novagallery_edit_id'.$_GET['gallery_id'] );

    $action = 'edit';
    $novagallery_options = get_option( 'novagallery_options' );
    $formFields = $novagallery_options[ $_GET['gallery_id'] ];
}
else {
    $action = 'add';
    $formFields = get_option( 'novagallery_default' );
}



// Save the submitted form data
if( isset( $_POST['save'] ) ) {

    if( $_POST['enableSets'] === 'true' ) {
        foreach( $_POST['setsFields'] as $key => $val ) {
            if( isset( $val['itemsFields']['itemCaption'] ) ) {
                $val['itemsFields']['itemCaption'] = array_map( 'force_balance_tags', $val['itemsFields']['itemCaption'] );
            }
        }
    }
    else {
        if( isset( $_POST['itemCaption'] ) ) {
            $_POST['itemCaption'] = array_map( 'force_balance_tags', $_POST['itemCaption'] );
        }
    }

    $formFields = $_POST;


    if( $_POST['name'] === '' ) {
        $error = 'You must enter a name for the gallery';
    }
    else if( $_POST['flickr'] === 'true' && (!isset($_POST['flickrOptions']['apiKey']) || $_POST['flickrOptions']['apiKey'] === '') ) {
        $error = 'You must enter your Flickr API Key';
    }
    else {
        $new_id = 0;

        // prevent the creation of a new entry if the user again saves the displayed data of $_POST
        if( isset( $_POST['gallery_id'] ) && $_POST['gallery_id'] !== '' ) {
            $new_id = $_POST['gallery_id'];
        }
        else {
            if( $action == 'add' ) {
                $gallery_ids = array();
                $gallery_ids = get_option( 'novagallery_ids' );

                if( $gallery_ids ) {
                   foreach( $gallery_ids as $gallery_id ) {
                        if( $new_id < $gallery_id ) {
                            $new_id = $gallery_id;
                        }
                    }
                }

                $new_id = $new_id + 1;

                $gallery_ids[] = $new_id;
                update_option( 'novagallery_ids', $gallery_ids );
            }
            else {
                $new_id = $_GET['gallery_id'];
            }
        }

        $formFields['gallery_id'] = $new_id;

        $formData = $_POST;
        $formData['gallery_id'] = $new_id;
        $formData['modified'] = date('d M, Y');
        $formData['shortcode'] = '[novagallery id="'.$new_id.'"]';


        $novagallery_options = get_option( 'novagallery_options' );
        if( !$novagallery_options ) {
            $novagallery_options = array();
        }

        $created = $novagallery_options[ $new_id ]['created'];
        $novagallery_options[ $new_id ] = $formData;
        $novagallery_options[ $new_id ]['created'] = $action === 'add' ? date('d M, Y') : $created;
        update_option( 'novagallery_options', $novagallery_options );
    }
}
?>

<div class="wrap">
    <?php screen_icon( 'options-general' ); ?>
    <h2>Nova Gallery - Add/Edit Gallery</h2>

    <?php
        if( isset( $_POST['save'] ) ) {

            if( !$error ) {
                echo '<div class="updated" id="message"><p>Settings saved successfully. The gallery shortcode is <strong>'. $formData['shortcode'] .'</strong>.</p></div>';
            }
            else {
               echo '<div class="error" id="message"><p>'.$error.'</p></div>';
            }

        }
    ?>

    <style type="text/css">
        a.showhelp, a.manager-page {
            float: right;
            margin-bottom: 20px !important;
        }

        a.manager-page {
            margin-right: 10px !important;
        }

        #novagallery-settings {
            clear: both;
        }

        #nova-help {
            position: absolute;
            top: 100px;
            left: 50%;
            width: 860px;
            height: 1000px;
            margin-left: -400px;
            z-index: 1000;
            display: none;
            background: #fff;
            -moz-box-shadow: 10px 10px 50px rgba(0, 0, 0, 0.7);
            -webkit-box-shadow: 10px 10px 50px rgba(0, 0, 0, 0.7);
            box-shadow: 10px 10px 50px rgba(0, 0, 0, 0.7);
        }

        #nova-closehelp {
            position: absolute;
            top: -15px;
            right: -15px;
            width: 36px;
            height: 36px;
            cursor: pointer;
            background: url(<?php echo plugin_dir_url( __FILE__);?>/images/close.png);
        }
    </style>

    <script type="text/javascript">
        jQuery(function($){
            var $helpContainer = $('<div id="nova-help"/>').appendTo('body'),
                $helpIframe = $('<iframe width="100%" height="100%" frameborder="1" />').appendTo($helpContainer),
                $closehelp = $('<a id="nova-closehelp"/>').appendTo($helpContainer),
                helpurl = "<?php echo plugin_dir_url( __FILE__).'documentation/index.html' ;?>" ;

            $helpIframe[0].src = helpurl;

            $('a.showhelp').click(function(){
               $helpContainer.slideDown(600);
            });

            $closehelp.click(function(){
                $helpContainer.slideUp(600);
            });
        });
    </script>

    <a class="showhelp button-secondary">View Documentation</a>
    <a class="manager-page button-secondary" href="<?php echo esc_url( add_query_arg( array( 'page' => 'novagallery_manager' ), admin_url( 'admin.php' ) ) );?>">Player Manager</a>

    <form id="novagallery-settings" method="post" action="">
        <h3>Gallery Name</h3>

        <input type="hidden" name="gallery_id" value="<?php echo $formFields['gallery_id']; ?>" />

        <table class="form-table">
            <tr valign="top">
                <th scope="row"> <label for="name">Unique gallery name (required)</label> </th>
                <td> <input type="text" name="name" id="name" class="regular-text" value="<?php echo $formFields['name'] ; ?>" /> </td>
            </tr>

            <tr valign="top">
                <th scope="row"> <label for="description">Gallery description (optional)</label> </th>
                <td> <input type="text" name="description" id="description" class="regular-text" value="<?php echo $formFields['description'] ; ?>" /> </td>
            </tr>
        </table>



        <!-- Gallery Options -->
        <h3>Gallery Options</h3>

        <table class="form-table">
            <tr valign="top">
                <th scope="row"> <label for="colorScheme">Color Scheme</label> </th>
                <td>
                    <select name="colorScheme" id="colorScheme">
                        <option value="dark" <?php selected('dark', $formFields['colorScheme']); ?>>Dark</option>
                        <option value="light" <?php selected('light', $formFields['colorScheme']); ?>>Light</option>
                    </select>
                    <span class="description">Choose the color scheme for the gallery</span>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row"> <label for="startMode">Starting mode for the gallery</label> </th>
                <td>
                    <select name="startMode" id="startMode">
                        <option value="thumbnails" <?php selected('thumbnails', $formFields['startMode']); ?>>Thumbnail Grid</option>
                        <option value="fullwidth" <?php selected('fullwidth', $formFields['startMode']); ?>>Fullwidth mode</option>
                    </select>
                    <span class="description">Choose the mode which will be shown when the gallery loads</span>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row"> <label for="fullwidthResize">Resize to fit media in Fullwidth mode</label> </th>
                <td>
                    <input type="checkbox" name="fullwidthResize" id="fullwidthResize" value="true" <?php checked('true', $formFields['fullwidthResize']);?> />
                    <span class="description">If this is enabled then the photo/poster/video that is displayed in Fullwidth mode will be resized to entirely fit inside the gallery container, when the page first loads.</span>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row"> <label for="showFullwidthThumbs">Show thumbnails in Fullwidth mode</label> </th>
                <td>
                    <input type="checkbox" name="showFullwidthThumbs" id="showFullwidthThumbs" value="true" <?php checked('true', $formFields['showFullwidthThumbs']);?> />
                    <span class="description">You can choose to show or hide the thumbnails that are present in Fullwidth mode when the page first loads.</span>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row"> <label for="thumbnailsAppearAnimation">Appearing animation for Thumbnail Grid</label> </th>
                <td>
                    <select name="thumbnailsAppearAnimation" id="thumbnailsAppearAnimation">
                        <option value="fade" <?php selected('fade', $formFields['thumbnailsAppearAnimation']); ?>>Fade</option>
                        <option value="slide" <?php selected('slide', $formFields['thumbnailsAppearAnimation']); ?>>Slide</option>
                        <option value="fadeSeq" <?php selected('fadeSeq', $formFields['thumbnailsAppearAnimation']); ?>>Sequential Fading</option>
                        <option value="slideSeq" <?php selected('slideSeq', $formFields['thumbnailsAppearAnimation']); ?>>Sequential Sliding</option>
                        <option value="flipSeq" <?php selected('flipSeq', $formFields['thumbnailsAppearAnimation']); ?>>Sequential Flipping</option>
                    </select>
                    <span class="description">Choose the animation for making the thumbnails appear when the Thumbnail Grid loads for the first time.</span>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row"> <label for="thumbnailsCaptionAnimation">Animation for captions in Thumbnail Grid</label> </th>
                <td>
                    <select name="thumbnailsCaptionAnimation" id="thumbnailsCaptionAnimation">
                        <option value="flip" <?php selected('flip', $formFields['thumbnailsCaptionAnimation']); ?>>Flip</option>
                        <option value="fade" <?php selected('fade', $formFields['thumbnailsCaptionAnimation']); ?>>Fade</option>
                    </select>
                    <span class="description">Choose the animation for showing item captions in Thumbnail Grid mode.</span>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row"> <label for="alwaysShowThumbTitle">Always show item titles</label> </th>
                <td>
                    <input type="checkbox" name="alwaysShowThumbTitle" id="alwaysShowThumbTitle" value="true" <?php checked('true', $formFields['alwaysShowThumbTitle']);?> />
                    <span class="description">If this is enabled then the gallery item titles in Thumbnail Grid mode will always be visible, instead of only showing up on hover.</span>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row"> <label for="gutterWidth">Spacing between thumbnails</label> </th>
                <td>
                    <input type="text" name="gutterWidth" id="gutterWidth" class="small-text" value="<?php echo $formFields['gutterWidth'] ; ?>" />
                    <span class="description">If you want to have spacing between thumbnails in Thumbnail Grid mode then enter a value in px.</span>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row"> <label for="fullwidthItemTransition">Transition effect in Fullwidth mode</label> </th>
                <td>
                    <select name="fullwidthItemTransition" id="fullwidthItemTransition">
                        <option value="flip" <?php selected('flip', $formFields['fullwidthItemTransition']); ?>>Flip</option>
                        <option value="slide" <?php selected('slide', $formFields['fullwidthItemTransition']); ?>>Slide</option>
                        <option value="fade" <?php selected('fade', $formFields['fullwidthItemTransition']); ?>>Fade</option>
                    </select>
                    <span class="description">Choose the transition effect for switching between items in Fullwidth mode.</span>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row"> <label for="homescreenAnimation">Animation for Gallery Sets page</label> </th>
                <td>
                    <select name="homescreenAnimation" id="homescreenAnimation">
                        <option value="scale" <?php selected('scale', $formFields['homescreenAnimation']); ?>>Scale</option>
                        <option value="slide" <?php selected('slide', $formFields['homescreenAnimation']); ?>>Slide</option>
                        <option value="fade" <?php selected('fade', $formFields['homescreenAnimation']); ?>>Fade</option>
                    </select>
                    <span class="description">Choose the animated effect for the showing/hiding the page for Gallery Sets (only effective if you have enabled gallery sets).</span>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row"> <label for="displayType">Display type of the gallery</label> </th>
                <td>
                    <select name="displayType" id="displayType">
                        <option value="window" <?php selected('window', $formFields['displayType']); ?>>Window</option>
                        <option value="container" <?php selected('container', $formFields['displayType']); ?>>Container</option>
                    </select>
                    <span class="description">If the gallery needs to stretch across the browser window and is a body level element, then choose “window”, else if the gallery should only stretch across its parent container then choose “container”.</span>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row"> <label for="newWindowLinks">Open links in new windows</label> </th>
                <td>
                    <input type="checkbox" name="newWindowLinks" id="newWindowLinks" value="true" <?php checked('true', $formFields['newWindowLinks']);?> />
                    <span class="description">If this is enabled then thumbnail links will open in new windows.</span>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row"> <label for="useYoutubeThumbs">Generate thumbnails for Youtube videos</label> </th>
                <td>
                    <input type="checkbox" name="useYoutubeThumbs" id="useYoutubeThumbs" value="true" <?php checked('true', $formFields['useYoutubeThumbs']);?> />
                    <span class="description">If this is enabled then thumbnails for Youtube videos will be pulled from Youtube.</span>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row"> <label for="useVimeoThumbs">Generate thumbnails for Vimeo videos</label> </th>
                <td>
                    <input type="checkbox" name="useVimeoThumbs" id="useVimeoThumbs" value="true" <?php checked('true', $formFields['useVimeoThumbs']);?> />
                    <span class="description">If this is enabled then thumbnails for Vimeo videos will be pulled from Vimeo.</span>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row"> <label for="shuffleItems">Shuffle gallery items when the page loads/refreshes</label> </th>
                <td>
                    <input type="checkbox" name="shuffleItems" id="shuffleItems" value="true" <?php checked('true', $formFields['shuffleItems']);?> />
                    <span class="description">If this is enabled then gallery items will be randomly ordered when the page refreshes every time.</span>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row"> <label for="preloadNumber">Number of images to preload for Fullwidth mode</label> </th>
                <td>
                    <input type="text" name="preloadNumber" id="preloadNumber" class="small-text" value="<?php echo $formFields['preloadNumber'] ; ?>" />
                    <span class="description">Enter the number of items whose full-size images will be preloaded in the background for the Fullwidth mode.</span>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row"> <label for="slideshow">Enable slideshow for Fullwidth mode at start</label> </th>
                <td>
                    <input type="checkbox" name="slideshow" id="slideshow" value="true" <?php checked('true', $formFields['slideshow']);?> />
                    <span class="description">If this is enabled then the slideshow for the Fullwidth mode will start when the page loads.</span>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row"> <label for="pauseTime">Pause interval for Fullwidth mode slideshow</label> </th>
                <td>
                    <input type="text" name="pauseTime" id="pauseTime" class="small-text" value="<?php echo $formFields['pauseTime'] ; ?>" />
                    <span class="description">Enter the time interval in ms for which a gallery item will be visible during slideshow in Fullwidth mode.</span>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row"> <label for="stopSlideshowOnPageHide">Stop slideshow when page hidden</label> </th>
                <td>
                    <input type="checkbox" name="stopSlideshowOnPageHide" id="stopSlideshowOnPageHide" value="true" <?php checked('true', $formFields['stopSlideshowOnPageHide']);?> />
                    <span class="description">If this is enabled then the Fullwidth mode slideshow will be paused when the page loses focus, and will resume when the page gets back focus.</span>
                </td>
            </tr>


            <tr valign="top">
                <th scope="row"> <label for="detectMobile">Detect Mobile Devices</label> </th>
                <td>
                    <input type="checkbox" name="detectMobile" id="detectMobile" value="true" <?php checked('true', $formFields['detectMobile']);?> />
                    <span class="description">If this is enabled then separate low resolution videos will be served to mobile devices. You can upload those videos in the section below.</span>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row"> <label for="autoplay">Autoplay video and audio files</label> </th>
                <td>
                    <input type="checkbox" name="autoplay" id="autoplay" value="true" <?php checked('true', $formFields['autoplay']);?> />
                    <span class="description">If this is enabled then video, audio files and also Youtube/Vimeo videos will automatically start playing when the lightbox opens.</span>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row"> <label for="loop">Play video and audio files in a loop</label> </th>
                <td>
                    <input type="checkbox" name="loop" id="loop" value="true" <?php checked('true', $formFields['loop']);?> />
                    <span class="description">If this is enabled then video and audio files will go on playing in a loop. This setting does not affect Youtube/Vimeo videos</span>
                </td>
            </tr>

			<tr valign="top">
                <th scope="row"> <label for="storeVolume">Store Volume Level</label> </th>
                <td>
                    <input type="checkbox" name="storeVolume" id="storeVolume" value="true" <?php checked('true', $formFields['storeVolume']);?> />
                    <span class="description">If this is enabled then the volume level of the player will be retained when it is closed and will be set when it is opened again. This setting does not affect Youtube/Vimeo videos</span>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row"> <label for="categories">Custom Categories</label> </th>
                <td>
                    <input type="text" name="categories" id="categories" class="regular-text" value="<?php echo $formFields['categories'] ; ?>" />
                    <span class="description">If you want custom categories then enter a comma separated list of custom category names</span>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row"> <label for="showFileTypeButtons">Show File-Type Buttons</label> </th>
                <td>
                    <input type="checkbox" name="showFileTypeButtons" id="showFileTypeButtons" value="true" <?php checked('true', $formFields['showFileTypeButtons']);?> />
                    <span class="description">If you have custom categories then you may disable the showing of file-type buttons from the filter menu</span>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row"> <label for="hideMenu">Hide Gallery Menu</label> </th>
                <td>
                    <input type="checkbox" name="hideMenu" id="hideMenu" value="true" <?php checked('true', $formFields['hideMenu']);?> />
                    <span class="description">You can choose to hide the gallery menu completely</span>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row"> <label for="startCategory">Starting category for the gallery</label> </th>
                <td>
                    <select name="startCategory" id="startCategory">
                        <option value="all" <?php selected('all', $formFields['startCategory']); ?>>All</option>
                        <option class="filetype" value="photo" <?php selected('photo', $formFields['startCategory']); ?>>Photos</option>
                        <option class="filetype" value="audio" <?php selected('audio', $formFields['startCategory']); ?>>Audios</option>
                        <option class="filetype" value="video" <?php selected('video', $formFields['startCategory']); ?>>Videos</option>

                        <?php
                        $category_arr = array();
                        if( isset($formFields['categories']) && $formFields['categories'] !== '' ) {
                            $category_arr = explode(',', $formFields['categories']);
                            foreach( $category_arr as $cat ) {
                                $cat_name = strtolower( trim($cat) );?>
                                <option value="<?php echo $cat_name;?>" <?php selected($cat_name, $formFields['startCategory']); ?>><?php echo $cat;?></option>
                                <?php
                            }
                        }
                        ?>
                    </select>
                    <span class="description">Choose the category which will be shown when the gallery loads. By default all items from all categories are shown</span>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row"> <label for="hideThumbGrid">Hide Thumbnail Grid mode</label> </th>
                <td>
                    <input type="checkbox" name="hideThumbGrid" id="hideThumbGrid" value="true" <?php checked('true', $formFields['hideThumbGrid']);?> />
                    <span class="description">If this is enabled then the Thumbnail Grid section will be hidden alongwith the view mode buttons. Set Starting mode to Fullwidth.</span>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row"> <label for="hideThumbnails">Hide Fullwidth Mode</label> </th>
                <td>
                    <input type="checkbox" name="hideFullwidth" id="hideFullwidth" value="true" <?php checked('true', $formFields['hideFullwidth']);?> />
                    <span class="description">If this is enabled then the Fullwidth section will be hidden alongwith the view mode buttons. Set starting mode to Thumbnails.</span>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row"> <label for="enableCache">Enable cache for Flickr/Picasa API data</label> </th>
                <td>
                    <input type="checkbox" name="enableCache" id="enableCache" value="true" <?php checked('true', $formFields['enableCache']);?> />
                    <span class="description">Enable this to cache data from API queries when showing Flickr/Picasa photos.</span>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row"> <label for="cacheInterval">Time interval for caching Flickr/Picasa API data</label> </th>
                <td>
                    <input type="text" name="cacheInterval" id="cacheInterval" class="small-text" value="<?php echo $formFields['cacheInterval'] ; ?>" />
                    <span class="description">Enter the time interval in minutes for which the cached API data will be valid before a new API call is made.</span>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row"> <label for="flickr">Show Flickr photos</label> </th>
                <td>
                    <input type="checkbox" name="flickr" id="flickr" value="true" <?php checked('true', $formFields['flickr']);?> />
                    <span class="description">Enable this to show photos from Flickr.</span>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row"> <label for="picasa">Show Picasa photos</label> </th>
                <td>
                    <input type="checkbox" name="picasa" id="picasa" value="true" <?php checked('true', $formFields['picasa']);?> />
                    <span class="description">Enable this to show photos from Picasa.</span>
                </td>
            </tr>
        </table>



        <!-- Options for pulling photos from Flickr -->
        <div id="flickrOptions">
            <h3>Flickr Options</h3>

            <table class="form-table">
                <tr valign="top">
                    <th scope="row"> <label for="flickrOptions[apiKey]">Flickr API key</label> </th>
                    <td>
                        <input type="text" name="flickrOptions[apiKey]" id="flickrOptions[apiKey]" class="regular-text" value="<?php echo $formFields['flickrOptions']['apiKey'] ; ?>" />
                        <span class="description">Enter your Flickr API key, which is required for pulling data from Flickr API.</span>
                    </td>
                </tr>

                <tr valign="top">
                    <th scope="row"> <label for="flickrOptions[sourceType]">Source for pulling Flickr photos</label> </th>
                    <td>
                        <select name="flickrOptions[sourceType]" id="flickrOptions[sourceType]">
                            <option value="text" <?php selected('text', $formFields['flickrOptions']['sourceType']); ?>>Text Search</option>
                            <option value="tags" <?php selected('tags', $formFields['flickrOptions']['sourceType']); ?>>Tags</option>
                            <option value="user" <?php selected('user', $formFields['flickrOptions']['sourceType']); ?>>User</option>
                            <option value="set" <?php selected('set', $formFields['flickrOptions']['sourceType']); ?>>Set</option>
                            <option value="group" <?php selected('group', $formFields['flickrOptions']['sourceType']); ?>>Group</option>
                            <option value="collection" <?php selected('collection', $formFields['flickrOptions']['sourceType']); ?>>Collection</option>
                        </select>
                        <span class="description">Choose the type of source from which photos will be pulled.</span>
                    </td>
                </tr>

                <tr valign="top">
                    <th scope="row"> <label for="flickrOptions[sourceId]">The string/id of the source</label> </th>
                    <td>
                        <input type="text" name="flickrOptions[sourceId]" id="flickrOptions[sourceId]" class="regular-text" value="<?php echo $formFields['flickrOptions']['sourceId'] ; ?>" />
                        <span class="description">Enter text string if pulling photos from text search or tags, or enter the id for the user, set, group or collection.</span>
                    </td>
                </tr>

                <tr valign="top">
                    <th scope="row"> <label for="flickrOptions[userId]">Flickr user id for collection</label> </th>
                    <td>
                        <input type="text" name="flickrOptions[userId]" id="flickrOptions[userId]" class="regular-text" value="<?php echo $formFields['flickrOptions']['userId'] ; ?>" />
                        <span class="description">If you are pulling photos from a collection then enter the user id of the owner of the collection.</span>
                    </td>
                </tr>

                <tr valign="top">
                    <th scope="row"> <label for="flickrOptions[numberOfAlbums]">Number of albums to show</label> </th>
                    <td>
                        <input type="text" name="flickrOptions[numberOfAlbums]" id="flickrOptions[numberOfAlbums]" class="regular-text" value="<?php echo $formFields['flickrOptions']['numberOfAlbums'] ; ?>" />
                        <span class="description">If you are pulling photos from a collection then enter the number of albums to show from that collection. If left blank then all albums will be shown.</span>
                    </td>
                </tr>

                <tr valign="top">
                    <th scope="row"> <label for="flickrOptions[limit]">Number of Flickr photos</label> </th>
                    <td>
                        <input type="text" name="flickrOptions[limit]" id="flickrOptions[limit]" class="small-text" value="<?php echo $formFields['flickrOptions']['limit'] ; ?>" />
                        <span class="description">Enter the number of photos to pull from Flickr.</span>
                    </td>
                </tr>

                <tr valign="top">
                    <th scope="row"> <label for="flickrOptions[sort]">Sort order for Flickr photos</label> </th>
                    <td>
                        <select name="flickrOptions[sort]" id="flickrOptions[sort]">
                            <option value="date-posted-asc" <?php selected('date-posted-asc', $formFields['flickrOptions']['sort']); ?>>Date Posted (Ascending)</option>
                            <option value="date-posted-desc" <?php selected('date-posted-desc', $formFields['flickrOptions']['sort']); ?>>Date Posted (Descending)</option>
                            <option value="date-taken-asc" <?php selected('date-taken-asc', $formFields['flickrOptions']['sort']); ?>>Date Taken (Ascending)</option>
                            <option value="date-taken-desc" <?php selected('date-taken-desc', $formFields['flickrOptions']['sort']); ?>>Date Taken (Descending)</option>
                            <option value="interestingness-asc" <?php selected('interestingness-asc', $formFields['flickrOptions']['sort']); ?>>Interestingness (Ascending)</option>
                            <option value="interestingness-desc" <?php selected('interestingness-desc', $formFields['flickrOptions']['sort']); ?>>Interestingness (Descending)</option>
                            <option value="relevance" <?php selected('relevance', $formFields['flickrOptions']['sort']); ?>>Relevance</option>
                        </select>
                        <span class="description">Choose the type of source from which photos will be pulled.</span>
                    </td>
                </tr>

                <tr valign="top">
                    <th scope="row"> <label for="flickrOptions[thumbSize]">Flickr thumbnail size</label> </th>
                    <td>
                        <select name="flickrOptions[thumbSize]" id="flickrOptions[thumbSize]">
                            <option value="s" <?php selected('s', $formFields['flickrOptions']['thumbSize']); ?>>Small square 75x75</option>
                            <option value="q" <?php selected('q', $formFields['flickrOptions']['thumbSize']); ?>>Large square 150x150</option>
                            <option value="t" <?php selected('t', $formFields['flickrOptions']['thumbSize']); ?>>Thumbnail, 100 on longest side</option>
                        </select>
                        <span class="description">Choose the thumbnail size for Flickr photos.</span>
                    </td>
                </tr>

                <tr valign="top">
                    <th scope="row"> <label for="flickrOptions[imageSize]">Flickr large image size</label> </th>
                    <td>
                        <select name="flickrOptions[imageSize]" id="flickrOptions[imageSize]">
                            <option value="c" <?php selected('c', $formFields['flickrOptions']['imageSize']); ?>>Medium 800, 800 on longest side</option>
                            <option value="l" <?php selected('l', $formFields['flickrOptions']['imageSize']); ?>>Large, 1024 on longest side</option>
                            <option value="o" <?php selected('o', $formFields['flickrOptions']['imageSize']); ?>>Original image</option>
                        </select>
                        <span class="description">Choose the size for the large version of Flickr photos.</span>
                    </td>
                </tr>
            </table>
        </div>






        <!-- Options for pulling photos from Picasa -->
        <div id="picasaOptions">
            <h3>Picasa Options</h3>

            <table class="form-table">
                <tr valign="top">
                    <th scope="row"> <label for="picasaOptions[sourceType]">Source for pulling photos from Picasa</label> </th>
                    <td>
                        <select name="picasaOptions[sourceType]" id="picasaOptions[sourceType]">
                            <option value="search" <?php selected('search', $formFields['picasaOptions']['sourceType']); ?>>Text Search</option>
                            <option value="user" <?php selected('user', $formFields['picasaOptions']['sourceType']); ?>>User</option>
                            <option value="album" <?php selected('album', $formFields['picasaOptions']['sourceType']); ?>>Album</option>
                            <option value="collection" <?php selected('collection', $formFields['picasaOptions']['sourceType']); ?>>Collection</option>
                        </select>
                        <span class="description">Choose the type of source from which photos will be pulled.</span>
                    </td>
                </tr>

                <tr valign="top">
                    <th scope="row"> <label for="picasaOptions[username]">Picasa user name</label> </th>
                    <td>
                        <input type="text" name="picasaOptions[username]" id="picasaOptions[username]" class="regular-text" value="<?php echo $formFields['picasaOptions']['username'] ; ?>" />
                        <span class="description">This is required if you are pulling photos from a particular user/album/collection. In case of album/collection the username of the owner is required.</span>
                    </td>
                </tr>

                <tr valign="top">
                    <th scope="row"> <label for="picasaOptions[album]">Album ID</label> </th>
                    <td>
                        <input type="text" name="picasaOptions[album]" id="picasaOptions[album]" class="regular-text" value="<?php echo $formFields['picasaOptions']['album'] ; ?>" />
                        <span class="description">Enter album id if pulling photos from an album.</span>
                    </td>
                </tr>

                <tr valign="top">
                    <th scope="row"> <label for="picasaOptions[numberOfAlbums]">Number of albums to show</label> </th>
                    <td>
                        <input type="text" name="picasaOptions[numberOfAlbums]" id="picasaOptions[numberOfAlbums]" class="regular-text" value="<?php echo $formFields['picasaOptions']['numberOfAlbums'] ; ?>" />
                        <span class="description">If you are pulling photos from a collection then enter the number of albums to show from that collection. If left blank then all albums will be shown.</span>
                    </td>
                </tr>

                <tr valign="top">
                    <th scope="row"> <label for="picasaOptions[search]">Search text</label> </th>
                    <td>
                        <input type="text" name="picasaOptions[search]" id="picasaOptions[search]" class="regular-text" value="<?php echo $formFields['picasaOptions']['search'] ; ?>" />
                        <span class="description">Enter search string if pulling photos from Picasa based on text search.</span>
                    </td>
                </tr>

                <tr valign="top">
                    <th scope="row"> <label for="picasaOptions[limit]">Number of Picasa photos</label> </th>
                    <td>
                        <input type="text" name="picasaOptions[limit]" id="picasaOptions[limit]" class="small-text" value="<?php echo $formFields['picasaOptions']['limit'] ; ?>" />
                        <span class="description">Enter the number of photos to pull from Picasa.</span>
                    </td>
                </tr>

                <tr valign="top">
                    <th scope="row"> <label for="picasaOptions[thumbSize]">Picasa thumbnail size</label> </th>
                    <td>
                        <select name="picasaOptions[thumbSize]" id="picasaOptions[thumbSize">
                            <option value="72" <?php selected('72', $formFields['picasaOptions']['thumbSize']); ?>>72</option>
                            <option value="94" <?php selected('94', $formFields['picasaOptions']['thumbSize']); ?>>94</option>
                            <option value="104" <?php selected('104', $formFields['picasaOptions']['thumbSize']); ?>>104</option>
                            <option value="110" <?php selected('110', $formFields['picasaOptions']['thumbSize']); ?>>110</option>
                            <option value="128" <?php selected('128', $formFields['picasaOptions']['thumbSize']); ?>>128</option>
                            <option value="144" <?php selected('144', $formFields['picasaOptions']['thumbSize']); ?>>144</option>
                            <option value="150" <?php selected('150', $formFields['picasaOptions']['thumbSize']); ?>>150</option>
                            <option value="160" <?php selected('160', $formFields['picasaOptions']['thumbSize']); ?>>160</option>
                            <option value="200" <?php selected('200', $formFields['picasaOptions']['thumbSize']); ?>>200</option>
                            <option value="220" <?php selected('220', $formFields['picasaOptions']['thumbSize']); ?>>220</option>
                            <option value="288" <?php selected('288', $formFields['picasaOptions']['thumbSize']); ?>>288</option>
                        </select>
                        <span class="description">Choose the thumbnail size for Picasa photos.</span>
                    </td>
                </tr>

                <tr valign="top">
                    <th scope="row"> <label for="picasaOptions[imageSize]">Picasa large image size</label> </th>
                    <td>
                        <select name="picasaOptions[imageSize]" id="picasaOptions[imageSize]">
                            <option value="800" <?php selected('800', $formFields['picasaOptions']['imageSize']); ?>>800</option>
                            <option value="912" <?php selected('912', $formFields['picasaOptions']['imageSize']); ?>>912</option>
                            <option value="1024" <?php selected('1024', $formFields['picasaOptions']['imageSize']); ?>>1024</option>
                            <option value="1152" <?php selected('1152', $formFields['picasaOptions']['imageSize']); ?>>1152</option>
                            <option value="1280" <?php selected('1280', $formFields['picasaOptions']['imageSize']); ?>>1280</option>
                            <option value="1440" <?php selected('1440', $formFields['picasaOptions']['imageSize']); ?>>1440</option>
                            <option value="1600" <?php selected('1600', $formFields['picasaOptions']['imageSize']); ?>>1600</option>
                        </select>
                        <span class="description">Choose the size for the large version of Picasa photos.</span>
                    </td>
                </tr>
            </table>

        </div>



        <!-- Upload area for gallery files -->
        <h3>Upload Gallery Files</h3>

        <div id="upload-area">
            <div class="upload-section">
                <h4>Image Files</h4>
                <a id="image-upload" class="nova-upload button-secondary" data-upload-type="image">Upload Images</a>
            </div>

            <div class="upload-section">
                <h4>Audio Files</h4>
                <a id="audio-upload" class="nova-upload button-secondary" data-upload-type="audio">Upload Audio</a>
            </div>

            <div class="upload-section">
                <h4>Video Upload</h4>
                <a id="video-upload" class="nova-upload button-secondary" data-upload-type="video">Upload Video</a>
            </div>
        </div>



        <h3>Gallery Sets &amp; Items</h3>

        <table class="form-table">
            <tr valign="top">
                <th scope="row"> <label for="enableSets">Have sets in the gallery</label> </th>
                <td>
                    <input type="checkbox" name="enableSets" id="enableSets" value="true" <?php checked('true', $formFields['enableSets']);?> />
                    <span class="description">If you want to have set sets/albums in the gallery then enable this option.</span>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row"> <label for="imageCrop">Crop thumbnails</label> </th>
                <td>
                    <input type="checkbox" name="imageCrop" id="imageCrop" value="true" <?php checked('true', $formFields['imageCrop']);?> />
                    <span class="description">If this option is selected and you mention the dimensions of the thumbnails then the image will be cropped to the specified size, else it will be scaled maintaining aspect ratio.</span>
                </td>
            </tr>
        </table>


        <div id="gallerySets">
            <ul id="setsList">
            <?php
                $setnum = count( $formFields['sets'] );
                if( !isset( $setnum) || $setnum === 0 ) {
                    $setnum = 1;
                }

                for( $i = 0; $i < $setnum; $i++ ) {?>
                    <li>
                        <a class="delete no-hide" title="Delete this set"></a>
                        <a class="collapse no-hide" title="Collapse set details"></a>
                        <a class="expand no-hide" title="Expand set details"></a>

                        <img class="thumbnail no-hide" src="<?php echo esc_url( $formFields['setThumbs'][$i] ); ?>" alt="Set Thumbnail">

                        <input type="hidden" name="sets[]" value="set" />

                        <div class="set-details no-hide">
                            <label class="main no-hide">Set name:</label>
                            <input class="regular-text no-hide" type="text" name="setNames[]" value="<?php echo stripcslashes( esc_html( $formFields['setNames'][$i] ) ); ?>" />
                            <br class="no-hide"/>
                            <span class="description">The name of the gallery set. This will be displayed on page.</span>

                            <br/>
                            <label class="main">Thumbnail for Set (optional):</label>
                            <input class="regular-text" type="text" name="setThumbs[]" value="<?php echo esc_url( $formFields['setThumbs'][$i] ); ?>" />
                            <a class="select-file button-secondary" data-file-type="image">Select Image</a>
                            <span class="description">Select the image to be used as thumbnail for the set. If no image is chosen then the thumbnail for the first item of the set will be used.</span>
                        </div>

                        <h4>Items in this Set</h4>

                        <ul class="setItems items">
                            <?php
                            $itemnum = count( $formFields['setsFields'][$i]['itemsFields']['items'] );
                            if( !isset( $itemnum) || $itemnum === 0 ) {
                                $itemnum = 1;
                            }

                            gallery_items_html($itemnum, $formFields['setsFields'][$i]['itemsFields'], 'setsFields['.$i.'][itemsFields][', ']');
                            ?>
                        </ul>

                        <!--Button to add items to this set-->
                        <a class="add-item add-set-items button-secondary">Add Item</a>
                    </li>
                <?php } ?>
            </ul>


            <!--Button to add sets-->
            <a id="add-sets" class="add-set button-secondary">Add Gallery Set</a>
        </div>



        <div id="galleryItems">

            <ul id="itemsList" class="items">
            <?php
                $itemnum = count( $formFields['items'] );
                if( !isset( $itemnum) || $itemnum === 0 ) {
                    $itemnum = 1;
                }

                gallery_items_html($itemnum, $formFields, '', '');

            ?>
            </ul>

            <!--Button to add items-->
            <a id="add-item" class="add-item button-secondary">Add Gallery Item</a>
        </div>





        <?php
        function gallery_items_html( $itemnum, $fields, $itemNamePrefix, $itemNameSuffix ) {
            for( $i = 0; $i < $itemnum; $i++ ) { ?>
                <li>
                    <a class="delete no-hide" title="Delete this item"></a>
                    <a class="collapse no-hide" title="Collapse item details"></a>
                    <a class="expand no-hide" title="Expand item details"></a>

                    <img class="thumbnail no-hide" src="<?php echo esc_url( $fields['itemThumb'][$i] ); ?>" alt="Item Thumbnail">

                    <input type="hidden" name="<?php echo $itemNamePrefix;?>items<?php echo $itemNameSuffix;?>[]" value="item" />

                    <label class="main no-hide">File type:</label>

                    <?php if( !isset($fields['fileTypeVal'][$i]) ) {
                        $fields['fileTypeVal'][$i] = 'photo';
                    }
                    ?>
                    <label class="no-hide">Photo</label>
                    <input class="no-hide" type="radio" value="photo" name="<?php echo $itemNamePrefix;?>filetype<?php echo $itemNameSuffix.$i;?>" <?php checked( 'photo', $fields['fileTypeVal'][$i] ); ?> />

                    <label class="no-hide">Audio</label>
                    <input class="no-hide" type="radio" value="audio" name="<?php echo $itemNamePrefix;?>filetype<?php echo $itemNameSuffix.$i;?>" <?php checked( 'audio', $fields['fileTypeVal'][$i] ); ?> />

                    <label class="no-hide">Video</label>
                    <input class="no-hide" type="radio" value="video" name="<?php echo $itemNamePrefix;?>filetype<?php echo $itemNameSuffix.$i;?>" <?php checked( 'video', $fields['fileTypeVal'][$i] ); ?> />
                    <br/>
                    <span class="description no-hide">Choose what file type this item will be in the gallery</span>
                    <input type="hidden" name="<?php echo $itemNamePrefix;?>fileTypeVal<?php echo $itemNameSuffix;?>[]" value="<?php echo $fields['fileTypeVal'][$i];?>" />

                    <br class="no-hide"/>
                    <label class="main">Category:</label>
                    <input class="regular-text" type="text" name="<?php echo $itemNamePrefix;?>itemCategories<?php echo $itemNameSuffix;?>[]" value="<?php echo sanitize_text_field( $fields['itemCategories'][$i] ); ?>" />
                    <br />
                    <span class="description">Enter a comma separated list of category names to which this item belongs. The category names must be contained in the list of custom categories entered above.</span>

                    <br/>
                    <div class="imageUpload uploadFields">
                        <label class="main">Thumbnail:</label>
                        <input class="upload-val regular-text" type="text" name="<?php echo $itemNamePrefix;?>itemThumb<?php echo $itemNameSuffix;?>[]" value="<?php echo esc_url( $fields['itemThumb'][$i] ); ?>" />
                        <a class="select-file button-secondary" data-file-type="image">Select Image</a>
                        <br clear="all"/>
                        <span class="description">Select the image that will act as thumbnail in the Thumbnail Grid.</span>
                        <br/>

                        <label class="main">Thumbnail size (optional):</label>
                        <input class="small-text" type="text" name="<?php echo $itemNamePrefix;?>thumbWidth<?php echo $itemNameSuffix;?>[]" value="<?php echo $fields['thumbWidth'][$i] ; ?>" /> &times;
                        <input class="small-text" type="text" name="<?php echo $itemNamePrefix;?>thumbHeight<?php echo $itemNameSuffix;?>[]" value="<?php echo $fields['thumbHeight'][$i] ; ?>" />
                        <span class="description">If you select the same image to be used as thumbnail and also as the large version then mention the dimensions of the thumbnail here in px to be used in Thumbnail Grid mode.</span>
                        <br/>

                        <label class="main">Large image (or poster):</label>
                        <input class="upload-val regular-text" type="text" name="<?php echo $itemNamePrefix;?>itemLargeImg<?php echo $itemNameSuffix;?>[]" value="<?php echo esc_url( $fields['itemLargeImg'][$i] ); ?>" />
                        <a class="select-file button-secondary" data-file-type="image">Select Image</a>
                        <br/>
                        <span class="description">Select the image that will be shown as the large image in the gallery for "photo" file type. If file type is "audio" or "video" then this will be shown as the poster.</span>
                    </div>

                    <br/>
                    <div class="audioUpload uploadFields">
                        <label class="main">Audio Files:</label>
                        <input class="upload-val regular-text" type="text" name="<?php echo $itemNamePrefix;?>mp3file<?php echo $itemNameSuffix;?>[]" value="<?php echo esc_url( $fields['mp3file'][$i] ); ?>" />
                        <a class="select-file button-secondary" data-file-type="audio">Select Audio</a>
                        <br/>
                        <span class="description">Upload the mp3 format of the audio file</span>

                        <br/>
                        <input class="upload-val regular-text" type="text" name="<?php echo $itemNamePrefix;?>oggfile<?php echo $itemNameSuffix;?>[]" value="<?php echo esc_url( $fields['oggfile'][$i] ); ?>" />
                        <a class="select-file button-secondary" data-file-type="audio">Select Audio</a>
                        <br/>
                        <span class="description">Upload the ogg format of the audio file</span>
                    </div>

                    <br/>
                    <div class="videoUpload uploadFields">
                        <label class="main">Video Files:</label>
                        <input class="upload-val regular-text" type="text" name="<?php echo $itemNamePrefix;?>mp4file<?php echo $itemNameSuffix;?>[]" value="<?php echo esc_url( $fields['mp4file'][$i] ); ?>" />
                        <a class="select-file button-secondary" data-file-type="video">Select Video</a>
                        <br/>
                        <span class="description">Upload the mp4 format of the video file</span>

                        <br/>
                        <input class="upload-val regular-text" type="text" name="webmfile[]" value="<?php echo esc_url( $formFields['webmfile'][$i] ); ?>" />
                        <a class="select-file button-secondary" data-file-type="video">Select Video</a>
                        <br/>
                        <span class="description">Upload the webm format of the video file</span>

                        <br/>
                        <input class="upload-val regular-text" type="text" name="<?php echo $itemNamePrefix;?>ogvfile<?php echo $itemNameSuffix;?>[]" value="<?php echo esc_url( $fields['ogvfile'][$i] ); ?>" />
                        <a class="select-file button-secondary" data-file-type="video">Select Video</a>
                        <br/>
                        <span class="description">Upload the ogv format of the video file</span>

                        <div class="mobileVideo">
                            <input class="upload-val regular-text" type="text" name="<?php echo $itemNamePrefix;?>mp4mobile<?php echo $itemNameSuffix;?>[]" value="<?php echo esc_url( $fields['mp4mobile'][$i] ); ?>" />
                            <a class="select-file button-secondary" data-file-type="video">Select Video</a>
                            <br/>
                            <span class="description">Upload low resolution mp4 video file for mobile devices</span>
                        </div>

                        <label class="main">Youtube Video</label>
                        <input class="regular-text" type="text" name="<?php echo $itemNamePrefix;?>youtube<?php echo $itemNameSuffix;?>[]" value="<?php echo esc_url( $fields['youtube'][$i] );?>" />
                        <br/>
                        <span class="description">Enter url to Youtube video, for eg. http://www.youtube.com/watch?v=abcdefghijk</span>

                        <br/>
                        <label class="main">Vimeo Video</label>
                        <input class="regular-text" type="text" name="<?php echo $itemNamePrefix;?>vimeo<?php echo $itemNameSuffix;?>[]" value="<?php echo esc_url( $fields['vimeo'][$i] );?>" />
                        <br clear="all"/>
                        <span class="description">Enter url to Vimeo video, for eg. http://vimeo.com/12345678.</span>
                    </div>

                    <br/>
                    <label class="main no-hide">Title:</label>
                    <input class="regular-text no-hide" type="text" name="<?php echo $itemNamePrefix;?>itemTitle<?php echo $itemNameSuffix;?>[]" value="<?php echo stripcslashes( esc_html( $fields['itemTitle'][$i] ) ); ?>" />
                    <br class="no-hide"/>
                    <span class="description no-hide">Enter the title for the gallery item</span>

                    <br/>
                    <label class="main">Caption:</label>
                    <textarea name="<?php echo $itemNamePrefix;?>itemCaption<?php echo $itemNameSuffix;?>[]"><?php echo stripcslashes( esc_textarea( $fields['itemCaption'][$i] ) ); ?></textarea>
                    <br/>
                    <span class="description">The caption can contain HTML</span>

                    <br/>
                    <label class="main">Link:</label>
                    <input class="regular-text" type="text" name="<?php echo $itemNamePrefix;?>link<?php echo $itemNameSuffix;?>[]" value="<?php echo esc_url( $fields['link'][$i] ); ?>" />
                    <br/>
                    <span class="description last">Link which will open when item thumbnail is clicked. In this case the Lightbox won't show.</span>
                </li>
            <?php }
        }
        ?>




        <p id="formButtons">
            <input type="submit" name="save" value="Save Options" class="button-primary" />
        </p>

    </form>
</div>  <!-- end #wrap -->