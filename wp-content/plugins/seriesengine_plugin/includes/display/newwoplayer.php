<!-- Single Message and Related Series Details -->
<h3 class="enmse-modern-message-meta"><?php if ( !empty($enmse_speaker) ) {echo stripslashes($enmse_speaker->first_name) . " " . stripslashes($enmse_speaker->last_name); } else { echo stripslashes($enmse_singlemessage->speaker); }; ?> - <?php echo date_i18n($enmse_dateformat, strtotime($enmse_singlemessage->date)); ?></h3>
<h2 class="enmse-modern-message-title"><?php echo stripslashes($enmse_singlemessage->title); ?></h2>
<!-- Display Audio or Video -->
<div class="enmse-player" <?php if ( $enmse_sim == 0 && ( !isset($_GET['enmse_sid']) && !isset($_GET['enmse_mid']) && !isset($_GET['enmse_tid']) && !isset($_GET['enmse_bid']) && !isset($_GET['enmse_spid']) && !isset($_GET['enmse_am']) ) ) {  echo 'style="display: none"'; } ?>>
    <div class="enmse-media-container modern">
		<div class="enmse-watch w<?php echo $enmse_randomval; ?>" <?php if ( (isset($_GET['enmse_av']) || isset($_GET['enmse_xv'])) || ($enmse_singlemessage->embed_code == '0' && ( $enmse_singlemessage->video_embed_url == '0' || $enmse_singlemessage->video_embed_url == NULL ) ) ) { echo 'style="display:none;"'; } ?>><?php if ( $enmse_singlemessage->embed_code != "0" )  { echo "<div class=\"enmse-vid-container\">" . stripslashes($enmse_singlemessage->embed_code) . "</div>"; if (preg_match('/(vimeo)+/i', $enmse_singlemessage->embed_code)) { $vimeocount = 1; ?><script type="text/javascript">jQuery(document).ready(function() {var vimeoframe = jQuery(".w<?php echo $enmse_randomval; ?> iframe");var player = new Vimeo.Player(vimeoframe);player.on('play', function() {var m = <?php echo $enmse_singlemessage->message_id; ?>;var newcount = <?php echo $enmse_singlemessage->video_count+1; ?>;var mtype = "video";var posturl = "<?php echo plugins_url() . "/seriesengine_plugin"; ?>/includes/viewcount.php";jQuery.post(posturl, { count: newcount, id: m, type: mtype });jQuery(this).unbind();});});</script><?php } else { $vimeocount = 0; }} elseif ( $enmse_singlemessage->video_embed_url != "0" && $enmse_singlemessage->video_embed_url != NULL ) { echo "<video src=\"" . $enmse_singlemessage->video_embed_url . "\" controls=\"controls\" class=\"enmse-video-player enmsevplayer\" rel=\"" . $enmse_singlemessage->video_count . "\" name=\"" . $enmse_singlemessage->message_id . "\" preload=\"metadata\">"; }; ?></div>
		<div class="enmse-listen" <?php if ( (isset($_GET['enmse_xv'])) || (!isset($_GET['enmse_av']) && !isset($_GET['enmse_xv']) && ($enmse_singlemessage->embed_code != '0' || ( $enmse_singlemessage->video_embed_url != '0' && $enmse_singlemessage->video_embed_url != NULL ) ) ) ) { echo 'style="display:none;"'; } ?>><?php if ( $enmse_singlemessage->audio_url != '0' ) { ?><?php if ( $enmse_singlemessage->message_thumbnail != null ) { ?><img src="<?php echo $enmse_singlemessage->message_thumbnail; ?>" alt="<?php echo $enmse_singlemessage->title; ?>" border="0" /><?php } elseif ( isset($enmse_singleseries) ) { if ( $enmse_singleseries->thumbnail_url != null ) { ?><img src="<?php echo $enmse_singleseries->thumbnail_url; ?>" alt="<?php echo $enmse_singleseries->s_title; ?>" border="0" /><?php }} elseif ( $enmse_singlemessage->series_image != null ) { ?><img src="<?php echo $enmse_singlemessage->series_image; ?>" alt="Image for <?php echo stripslashes($enmse_singlemessage->title); ?>" border="0" /><?php } ?><div class="enmse-modern-audio"><audio src="<?php echo stripslashes($enmse_singlemessage->audio_url); ?>" controls="controls" class="enmse-audio-player enmseaplayer" rel="<?php echo $enmse_singlemessage->audio_count; ?>" name="<?php echo $enmse_singlemessage->message_id; ?>" preload="metadata"></audio></div><?php } ?></div>
		<div class="enmse-alternate a<?php echo $enmse_randomval; ?>" <?php if ( (isset($_GET['enmse_av']) && !isset($_GET['enmse_xv'])) || (!isset($_GET['enmse_av']) && !isset($_GET['enmse_xv']) && ( ($enmse_singlemessage->embed_code != '0' || ( $enmse_singlemessage->video_embed_url != '0' && $enmse_singlemessage->video_embed_url != NULL ) ) || $enmse_singlemessage->audio_url != '0')) ) { echo 'style="display:none;"'; } ?>><?php if ( $enmse_singlemessage->alternate_embed != "0" )  { echo "<div class=\"enmse-vid-container\">" . stripslashes($enmse_singlemessage->alternate_embed) . "</div>"; if (preg_match('/(vimeo)+/i', $enmse_singlemessage->alternate_embed)) { ?><script type="text/javascript"> jQuery(document).ready(function() {var altvimeoframe = jQuery(".a<?php echo $enmse_randomval; ?> iframe");var altplayer = new Vimeo.Player(altvimeoframe);altplayer.on('play', function() {var m = <?php echo $enmse_singlemessage->message_id; ?>;var newcount = <?php echo $enmse_singlemessage->alternate_count+1; ?>;var mtype = "alternate";var posturl = "<?php echo plugins_url() . "/seriesengine_plugin"; ?>/includes/viewcount.php";jQuery.post(posturl, { count: newcount, id: m, type: mtype });jQuery(this).unbind();});});</script><?php }} elseif ( $enmse_singlemessage->additional_video_embed_url != "0" && $enmse_singlemessage->additional_video_embed_url != NULL ) { echo "<video src=\"" . $enmse_singlemessage->additional_video_embed_url . "\" controls=\"controls\" class=\"enmse-video-player enmseaplayer\" rel=\"" . $enmse_singlemessage->alternate_count . "\" name=\"" . $enmse_singlemessage->message_id . "\" preload=\"metadata\">"; }; ?></div>
	</div>
	<ul class="enmse-modern-player-tabs<?php if ( ( ($enmse_singlemessage->embed_code == '0' && ( $enmse_singlemessage->video_embed_url == '0' || $enmse_singlemessage->video_embed_url == NULL ) ) && $enmse_singlemessage->audio_url == '0' ) || ( ($enmse_singlemessage->embed_code == '0' && ( $enmse_singlemessage->video_embed_url == '0' || $enmse_singlemessage->video_embed_url == NULL ) ) &&  $enmse_singlemessage->alternate_toggle == "No" ) || ( $enmse_singlemessage->audio_url == '0' &&  $enmse_singlemessage->alternate_toggle == "No" ) ) { echo ' hidden'; } ?><?php if ( ( ($enmse_singlemessage->embed_code == '0' && ( $enmse_singlemessage->video_embed_url == '0' || $enmse_singlemessage->video_embed_url == NULL ) && $enmse_singlemessage->audio_url == '0' ) ) || ( ($enmse_singlemessage->embed_code == '0' && ( $enmse_singlemessage->video_embed_url == '0' || $enmse_singlemessage->video_embed_url == NULL ) &&  $enmse_singlemessage->alternate_toggle == "No" ) ) || ( $enmse_singlemessage->audio_url == '0' &&  $enmse_singlemessage->alternate_toggle == "No" ) ) { echo ' hidden'; } ?><?php if ( ( isset($_GET['enmse_xv']) || (($enmse_singlemessage->embed_code == '0' && ( $enmse_singlemessage->video_embed_url == '0' || $enmse_singlemessage->video_embed_url == NULL ) && $enmse_singlemessage->audio_url == '0') ) ) && ( ($enmse_singlemessage->embed_code == '0' && ( $enmse_singlemessage->video_embed_url == '0' || $enmse_singlemessage->video_embed_url == NULL ) && $enmse_singlemessage->audio_url == '0' ) ) ) { echo ' hidden'; } ?><?php if ( ( $enmse_singlemessage->embed_code != '0' || ( $enmse_singlemessage->video_embed_url != '0' && $enmse_singlemessage->video_embed_url != NULL ) ) && ( $enmse_singlemessage->audio_url != '0' ) && ( $enmse_singlemessage->alternate_toggle == "Yes" && ($enmse_singlemessage->alternate_embed != '0' || ($enmse_singlemessage->additional_video_embed_url != '0' && $enmse_singlemessage->additional_video_embed_url != null) ) ) ) { echo ' three'; } ?>">
		<?php if ( $enmse_singlemessage->embed_code != '0' || ( $enmse_singlemessage->video_embed_url != '0' && $enmse_singlemessage->video_embed_url != NULL ) ) { if ( (isset($_GET['enmse_tid']) && is_numeric($_GET['enmse_tid'])) || $enmse_dst > 0 ) { // Is a topic specified? ?><li class="enmse-watch-tab<?php if ( !isset($_GET['enmse_av']) && !isset($_GET['enmse_xv']) ) { echo ' enmse-tab-selected'; } ?>"<?php if ( ( $enmse_singlemessage->embed_code == '0' && ( $enmse_singlemessage->video_embed_url == '0' || $enmse_singlemessage->video_embed_url == NULL ) && $enmse_singlemessage->audio_url == '0' ) || ( $enmse_singlemessage->embed_code == '0' && ( $enmse_singlemessage->video_embed_url == '0' || $enmse_singlemessage->video_embed_url == NULL ) &&  $enmse_singlemessage->alternate_toggle == "No" ) || ( $enmse_singlemessage->audio_url == '0' &&  $enmse_singlemessage->alternate_toggle == "No" ) ) { echo ' style="display:none"'; } ?>><a href="<?php echo $enmse_thispage . '&amp;enmse_tid=' . $enmse_singletopic->topic_id . '&amp;enmse_mid=' . $enmse_singlemessage->message_id; ?>" <?php if ( ( !isset($_GET['enmse_av']) && !isset($_GET['enmse_xv']) ) && ( $enmse_singlemessage->audio_url == '0' &&  $enmse_singlemessage->alternate_toggle == "No" ) ) { echo 'style="display:none"'; } ?>><?php echo $enmse_videotablabel; ?></a></li><?php } elseif ( (isset($_GET['enmse_sid']) && is_numeric($_GET['enmse_sid'])) || $enmse_dss > 0 ) { // Is a series specified? ?><li class="enmse-watch-tab<?php if ( !isset($_GET['enmse_av']) && !isset($_GET['enmse_xv']) ) { echo ' enmse-tab-selected'; } ?>"<?php if ( ( $enmse_singlemessage->embed_code == '0' && ( $enmse_singlemessage->video_embed_url == '0' || $enmse_singlemessage->video_embed_url == NULL ) && $enmse_singlemessage->audio_url == '0' ) || ( $enmse_singlemessage->embed_code == '0' && ( $enmse_singlemessage->video_embed_url == '0' || $enmse_singlemessage->video_embed_url == NULL ) &&  $enmse_singlemessage->alternate_toggle == "No" ) || ( $enmse_singlemessage->audio_url == '0' &&  $enmse_singlemessage->alternate_toggle == "No" ) ) { echo ' style="display:none"'; } ?>><a href="<?php echo $enmse_thispage . '&amp;enmse_sid=' . $enmse_singleseries->series_id . '&amp;enmse_mid=' . $enmse_singlemessage->message_id; ?>" <?php if ( ( !isset($_GET['enmse_av']) && !isset($_GET['enmse_xv']) ) && ( $enmse_singlemessage->audio_url == '0' &&  $enmse_singlemessage->alternate_toggle == "No" ) ) { echo 'style="display:none"'; } ?>><?php echo $enmse_videotablabel; ?></a></li><?php } elseif ( (isset($_GET['enmse_spid']) && is_numeric($_GET['enmse_spid'])) || $enmse_dssp > 0 ) { // Is a speaker specified? ?><li class="enmse-watch-tab<?php if ( !isset($_GET['enmse_av']) && !isset($_GET['enmse_xv']) ) { echo ' enmse-tab-selected'; } ?>"<?php if ( ( $enmse_singlemessage->embed_code == '0' && ( $enmse_singlemessage->video_embed_url == '0' || $enmse_singlemessage->video_embed_url == NULL ) && $enmse_singlemessage->audio_url == '0' ) || ( $enmse_singlemessage->embed_code == '0' && ( $enmse_singlemessage->video_embed_url == '0' || $enmse_singlemessage->video_embed_url == NULL ) &&  $enmse_singlemessage->alternate_toggle == "No" ) || ( $enmse_singlemessage->audio_url == '0' &&  $enmse_singlemessage->alternate_toggle == "No" ) ) { echo ' style="display:none"'; } ?>><a href="<?php echo $enmse_thispage . '&amp;enmse_spid=' . $enmse_singlespeaker->speaker_id . '&amp;enmse_mid=' . $enmse_singlemessage->message_id; ?>" <?php if ( ( !isset($_GET['enmse_av']) && !isset($_GET['enmse_xv']) ) && ( $enmse_singlemessage->audio_url == '0' &&  $enmse_singlemessage->alternate_toggle == "No" ) ) { echo 'style="display:none"'; } ?>><?php echo $enmse_videotablabel; ?></a></li><?php } else { ?><li class="enmse-watch-tab<?php if ( !isset($_GET['enmse_av']) && !isset($_GET['enmse_xv']) ) { echo ' enmse-tab-selected'; } ?>"<?php if ( ( $enmse_singlemessage->embed_code == '0' && ( $enmse_singlemessage->video_embed_url == '0' || $enmse_singlemessage->video_embed_url == NULL ) && $enmse_singlemessage->audio_url == '0' ) || ( $enmse_singlemessage->embed_code == '0' && ( $enmse_singlemessage->video_embed_url == '0' || $enmse_singlemessage->video_embed_url == NULL ) &&  $enmse_singlemessage->alternate_toggle == "No" ) || ( $enmse_singlemessage->audio_url == '0' &&  $enmse_singlemessage->alternate_toggle == "No" ) ) { echo ' style="display:none"'; } ?>><a href="<?php echo $enmse_thispage . '&amp;enmse_mid=' . $enmse_singlemessage->message_id ?>" <?php if ( ( !isset($_GET['enmse_av']) && !isset($_GET['enmse_xv']) ) && ( $enmse_singlemessage->audio_url == '0' &&  $enmse_singlemessage->alternate_toggle == "No" ) ) { echo 'style="display:none"'; } ?>><?php echo $enmse_videotablabel; ?></a></li><?php }} ?>
		<?php if ( $enmse_singlemessage->audio_url != '0' ) { if ( (isset($_GET['enmse_tid']) && is_numeric($_GET['enmse_tid'])) || $enmse_dst > 0 ) { // Is a topic specified?  ?><li class="enmse-listen-tab<?php if ( $enmse_singlemessage->alternate_toggle == "No" ) { echo ' nm'; } ?><?php if ( isset($_GET['enmse_av']) || ($enmse_singlemessage->embed_code == '0' && ( $enmse_singlemessage->video_embed_url == '0' || $enmse_singlemessage->video_embed_url == NULL ) ) ) { echo ' enmse-tab-selected'; } ?>"<?php if ( ( $enmse_singlemessage->embed_code == '0' && ( $enmse_singlemessage->video_embed_url == '0' || $enmse_singlemessage->video_embed_url == NULL ) && $enmse_singlemessage->audio_url == '0' ) || ( $enmse_singlemessage->embed_code == '0' && ( $enmse_singlemessage->video_embed_url == '0' || $enmse_singlemessage->video_embed_url == NULL ) &&  $enmse_singlemessage->alternate_toggle == "No" ) || ( $enmse_singlemessage->audio_url == '0' &&  $enmse_singlemessage->alternate_toggle == "No" ) ) { echo ' style="display:none"'; } ?>><a href="<?php echo $enmse_thispage . '&amp;enmse_tid=' . $enmse_singletopic->topic_id . '&amp;enmse_mid=' . $enmse_singlemessage->message_id . "&amp;enmse_av=1"; ?>" <?php if ( ( isset($_GET['enmse_av']) || ($enmse_singlemessage->embed_code == '0' && ( $enmse_singlemessage->video_embed_url == '0' || $enmse_singlemessage->video_embed_url == NULL ) ) ) && ( $enmse_singlemessage->embed_code == '0' && ( $enmse_singlemessage->video_embed_url == '0' || $enmse_singlemessage->video_embed_url == NULL ) &&  $enmse_singlemessage->alternate_toggle == "No" ) ) { echo 'style="display:none"'; } ?>><?php echo $enmse_audiotablabel; ?></a></li><?php } elseif ( (isset($_GET['enmse_sid']) && is_numeric($_GET['enmse_sid'])) || $enmse_dss > 0 ) { // Is a series specified? ?><li class="enmse-listen-tab<?php if ( $enmse_singlemessage->alternate_toggle == "No" ) { echo ' nm'; } ?><?php if ( isset($_GET['enmse_av']) || ($enmse_singlemessage->embed_code == '0' && ( $enmse_singlemessage->video_embed_url == '0' || $enmse_singlemessage->video_embed_url == NULL ) ) ) { echo ' enmse-tab-selected'; } ?>"<?php if ( ( $enmse_singlemessage->embed_code == '0' && ( $enmse_singlemessage->video_embed_url == '0' || $enmse_singlemessage->video_embed_url == NULL ) && $enmse_singlemessage->audio_url == '0' ) || ( $enmse_singlemessage->embed_code == '0' && ( $enmse_singlemessage->video_embed_url == '0' || $enmse_singlemessage->video_embed_url == NULL ) &&  $enmse_singlemessage->alternate_toggle == "No" ) || ( $enmse_singlemessage->audio_url == '0' &&  $enmse_singlemessage->alternate_toggle == "No" ) ) { echo ' style="display:none"'; } ?>><a href="<?php echo $enmse_thispage . '&amp;enmse_sid=' . $enmse_singleseries->series_id . '&amp;enmse_mid=' . $enmse_singlemessage->message_id . "&amp;enmse_av=1"; ?>" <?php if ( ( isset($_GET['enmse_av']) || ($enmse_singlemessage->embed_code == '0' && ( $enmse_singlemessage->video_embed_url == '0' || $enmse_singlemessage->video_embed_url == NULL ) ) ) && ( $enmse_singlemessage->embed_code == '0' && ( $enmse_singlemessage->video_embed_url == '0' || $enmse_singlemessage->video_embed_url == NULL ) &&  $enmse_singlemessage->alternate_toggle == "No" ) ) { echo 'style="display:none"'; } ?>><?php echo $enmse_audiotablabel; ?></a></li><?php } elseif ( (isset($_GET['enmse_spid']) && is_numeric($_GET['enmse_spid'])) || $enmse_dssp > 0 ) { // Is a speaker specified? ?><li class="enmse-listen-tab<?php if ( $enmse_singlemessage->alternate_toggle == "No" ) { echo ' nm'; } ?><?php if ( isset($_GET['enmse_av']) || ($enmse_singlemessage->embed_code == '0' && ( $enmse_singlemessage->video_embed_url == '0' || $enmse_singlemessage->video_embed_url == NULL ) ) ) { echo ' enmse-tab-selected'; } ?>"<?php if ( ( $enmse_singlemessage->embed_code == '0' && ( $enmse_singlemessage->video_embed_url == '0' || $enmse_singlemessage->video_embed_url == NULL ) && $enmse_singlemessage->audio_url == '0' ) || ( $enmse_singlemessage->embed_code == '0' && ( $enmse_singlemessage->video_embed_url == '0' || $enmse_singlemessage->video_embed_url == NULL ) &&  $enmse_singlemessage->alternate_toggle == "No" ) || ( $enmse_singlemessage->audio_url == '0' &&  $enmse_singlemessage->alternate_toggle == "No" ) ) { echo ' style="display:none"'; } ?>><a href="<?php echo $enmse_thispage . '&amp;enmse_spid=' . $enmse_singlespeaker->speaker_id . '&amp;enmse_mid=' . $enmse_singlemessage->message_id . "&amp;enmse_av=1"; ?>" <?php if ( ( isset($_GET['enmse_av']) || ($enmse_singlemessage->embed_code == '0' && ( $enmse_singlemessage->video_embed_url == '0' || $enmse_singlemessage->video_embed_url == NULL ) ) ) && ( $enmse_singlemessage->embed_code == '0' && ( $enmse_singlemessage->video_embed_url == '0' || $enmse_singlemessage->video_embed_url == NULL ) &&  $enmse_singlemessage->alternate_toggle == "No" ) ) { echo 'style="display:none"'; } ?>><?php echo $enmse_audiotablabel; ?></a></li><?php } else { ?><li class="enmse-listen-tab<?php if ( $enmse_singlemessage->alternate_toggle == "No" ) { echo ' nm'; } ?><?php if ( isset($_GET['enmse_av']) || ($enmse_singlemessage->embed_code == '0' && ( $enmse_singlemessage->video_embed_url == '0' || $enmse_singlemessage->video_embed_url == NULL ) ) ) { echo ' enmse-tab-selected'; } ?>"<?php if ( ( $enmse_singlemessage->embed_code == '0' && ( $enmse_singlemessage->video_embed_url == '0' || $enmse_singlemessage->video_embed_url == NULL ) && $enmse_singlemessage->audio_url == '0' ) || ( $enmse_singlemessage->embed_code == '0' && ( $enmse_singlemessage->video_embed_url == '0' || $enmse_singlemessage->video_embed_url == NULL ) &&  $enmse_singlemessage->alternate_toggle == "No" ) || ( $enmse_singlemessage->audio_url == '0' &&  $enmse_singlemessage->alternate_toggle == "No" ) ) { echo ' style="display:none"'; } ?>><a href="<?php echo $enmse_thispage . '&amp;enmse_mid=' . $enmse_singlemessage->message_id . "&amp;enmse_av=1"; ?>" <?php if ( ( isset($_GET['enmse_av']) || ($enmse_singlemessage->embed_code == '0' && ( $enmse_singlemessage->video_embed_url == '0' || $enmse_singlemessage->video_embed_url == NULL ) ) ) && ( $enmse_singlemessage->embed_code == '0' && ( $enmse_singlemessage->video_embed_url == '0' || $enmse_singlemessage->video_embed_url == NULL ) &&  $enmse_singlemessage->alternate_toggle == "No" ) ) { echo 'style="display:none"'; } ?>><?php echo $enmse_audiotablabel; ?></a></li><?php }} ?>
		<?php if ( $enmse_singlemessage->alternate_toggle == "Yes" && ($enmse_singlemessage->alternate_embed != '0' || ($enmse_singlemessage->additional_video_embed_url != '0' && $enmse_singlemessage->additional_video_embed_url != null) ) ) { if ( (isset($_GET['enmse_tid']) && is_numeric($_GET['enmse_tid'])) || $enmse_dst > 0 ) { // Is a topic specified?  ?><li class="enmse-alternate-tab<?php if ( isset($_GET['enmse_xv']) || ($enmse_singlemessage->embed_code == '0' && ( $enmse_singlemessage->video_embed_url == '0' || $enmse_singlemessage->video_embed_url == NULL ) && $enmse_singlemessage->audio_url == '0') ) { echo ' enmse-tab-selected'; } ?>"<?php if ( ( $enmse_singlemessage->embed_code == '0' && ( $enmse_singlemessage->video_embed_url == '0' || $enmse_singlemessage->video_embed_url == NULL ) && $enmse_singlemessage->audio_url == '0' ) || ( $enmse_singlemessage->embed_code == '0' && ( $enmse_singlemessage->video_embed_url == '0' || $enmse_singlemessage->video_embed_url == NULL ) &&  $enmse_singlemessage->alternate_toggle == "No" ) || ( $enmse_singlemessage->audio_url == '0' &&  $enmse_singlemessage->alternate_toggle == "No" ) ) { echo ' style="display:none"'; } ?>><a href="<?php echo $enmse_thispage . '&amp;enmse_tid=' . $enmse_singletopic->topic_id . '&amp;enmse_mid=' . $enmse_singlemessage->message_id . "&amp;enmse_xv=1"; ?>" <?php if ( ( isset($_GET['enmse_xv']) || ($enmse_singlemessage->embed_code == '0' && ( $enmse_singlemessage->video_embed_url == '0' || $enmse_singlemessage->video_embed_url == NULL ) && $enmse_singlemessage->audio_url == '0') ) && ( $enmse_singlemessage->embed_code == '0' && ( $enmse_singlemessage->video_embed_url == '0' || $enmse_singlemessage->video_embed_url == NULL ) && $enmse_singlemessage->audio_url == '0' ) ) { echo 'style="display:none"'; } ?>><?php echo stripslashes($enmse_singlemessage->alternate_label); ?></a></li><?php } elseif ( (isset($_GET['enmse_sid']) && is_numeric($_GET['enmse_sid'])) || $enmse_dss > 0 ) { // Is a series specified? ?><li class="enmse-alternate-tab<?php if ( isset($_GET['enmse_xv']) || ($enmse_singlemessage->embed_code == '0' && ( $enmse_singlemessage->video_embed_url == '0' || $enmse_singlemessage->video_embed_url == NULL ) && $enmse_singlemessage->audio_url == '0') ) { echo ' enmse-tab-selected'; } ?>"<?php if ( ( $enmse_singlemessage->embed_code == '0' && ( $enmse_singlemessage->video_embed_url == '0' || $enmse_singlemessage->video_embed_url == NULL ) && $enmse_singlemessage->audio_url == '0' ) || ( $enmse_singlemessage->embed_code == '0' && ( $enmse_singlemessage->video_embed_url == '0' || $enmse_singlemessage->video_embed_url == NULL ) &&  $enmse_singlemessage->alternate_toggle == "No" ) || ( $enmse_singlemessage->audio_url == '0' &&  $enmse_singlemessage->alternate_toggle == "No" ) ) { echo ' style="display:none"'; } ?>><a href="<?php echo $enmse_thispage . '&amp;enmse_sid=' . $enmse_singleseries->series_id . '&amp;enmse_mid=' . $enmse_singlemessage->message_id . "&amp;enmse_xv=1"; ?>" <?php if ( ( isset($_GET['enmse_xv']) || ($enmse_singlemessage->embed_code == '0' && ( $enmse_singlemessage->video_embed_url == '0' || $enmse_singlemessage->video_embed_url == NULL ) && $enmse_singlemessage->audio_url == '0') ) && ( $enmse_singlemessage->embed_code == '0' && ( $enmse_singlemessage->video_embed_url == '0' || $enmse_singlemessage->video_embed_url == NULL ) && $enmse_singlemessage->audio_url == '0' ) ) { echo 'style="display:none"'; } ?>><?php echo stripslashes($enmse_singlemessage->alternate_label); ?></a></li><?php } elseif ( (isset($_GET['enmse_spid']) && is_numeric($_GET['enmse_spid'])) || $enmse_dssp > 0 ) { // Is a speaker specified? ?><li class="enmse-alternate-tab<?php if ( isset($_GET['enmse_xv']) || ($enmse_singlemessage->embed_code == '0' && ( $enmse_singlemessage->video_embed_url == '0' || $enmse_singlemessage->video_embed_url == NULL ) && $enmse_singlemessage->audio_url == '0') ) { echo ' enmse-tab-selected'; } ?>"<?php if ( ( $enmse_singlemessage->embed_code == '0' && ( $enmse_singlemessage->video_embed_url == '0' || $enmse_singlemessage->video_embed_url == NULL ) && $enmse_singlemessage->audio_url == '0' ) || ( $enmse_singlemessage->embed_code == '0' && ( $enmse_singlemessage->video_embed_url == '0' || $enmse_singlemessage->video_embed_url == NULL ) &&  $enmse_singlemessage->alternate_toggle == "No" ) || ( $enmse_singlemessage->audio_url == '0' &&  $enmse_singlemessage->alternate_toggle == "No" ) ) { echo ' style="display:none"'; } ?>><a href="<?php echo $enmse_thispage . '&amp;enmse_spid=' . $enmse_singlespeaker->speaker_id . '&amp;enmse_mid=' . $enmse_singlemessage->message_id . "&amp;enmse_xv=1"; ?>" <?php if ( ( isset($_GET['enmse_xv']) || ($enmse_singlemessage->embed_code == '0' && ( $enmse_singlemessage->video_embed_url == '0' || $enmse_singlemessage->video_embed_url == NULL ) && $enmse_singlemessage->audio_url == '0') ) && ( $enmse_singlemessage->embed_code == '0' && ( $enmse_singlemessage->video_embed_url == '0' || $enmse_singlemessage->video_embed_url == NULL ) && $enmse_singlemessage->audio_url == '0' ) ) { echo 'style="display:none"'; } ?>><?php echo stripslashes($enmse_singlemessage->alternate_label); ?></a></li><?php } else { ?><li class="enmse-alternate-tab<?php if ( isset($_GET['enmse_xv']) || ($enmse_singlemessage->embed_code == '0' && ( $enmse_singlemessage->video_embed_url == '0' || $enmse_singlemessage->video_embed_url == NULL ) && $enmse_singlemessage->audio_url == '0') ) { echo ' enmse-tab-selected'; } ?>"<?php if ( ( $enmse_singlemessage->embed_code == '0' && ( $enmse_singlemessage->video_embed_url == '0' || $enmse_singlemessage->video_embed_url == NULL ) && $enmse_singlemessage->audio_url == '0' ) || ( $enmse_singlemessage->embed_code == '0' && ( $enmse_singlemessage->video_embed_url == '0' || $enmse_singlemessage->video_embed_url == NULL ) &&  $enmse_singlemessage->alternate_toggle == "No" ) || ( $enmse_singlemessage->audio_url == '0' &&  $enmse_singlemessage->alternate_toggle == "No" ) ) { echo ' style="display:none"'; } ?>><a href="<?php echo $enmse_thispage . '&amp;enmse_mid=' . $enmse_singlemessage->message_id . "&amp;enmse_xv=1"; ?>" <?php if ( ( isset($_GET['enmse_xv']) || ($enmse_singlemessage->embed_code == '0' && ( $enmse_singlemessage->video_embed_url == '0' || $enmse_singlemessage->video_embed_url == NULL ) && $enmse_singlemessage->audio_url == '0') ) && ( $enmse_singlemessage->embed_code == '0' && ( $enmse_singlemessage->video_embed_url == '0' || $enmse_singlemessage->video_embed_url == NULL ) && $enmse_singlemessage->audio_url == '0' ) ) { echo 'style="display:none"'; } ?>><?php echo stripslashes($enmse_singlemessage->alternate_label); ?></a></li><?php }} ?>
	</ul>
	<div style="clear: both;"></div>
	<div class="enmse-modern-player-details">
		<?php if ( $enmse_singlemessage->description != NULL ) { ?><p class="enmse-message-description"><?php echo stripslashes($enmse_singlemessage->description); ?></p><?php } ?>
	   	<?php if ( $enmse_scriptures != NULL ) { ?><p class="enmse-modern-scripture"<?php if ( $enmse_singlemessage->description == NULL ) { ?> style="margin-top: 12px"<?php } ?>><strong><?php echo $enmse_reftext; ?>:</strong> <?php $enmse_sc_comma = 0; foreach ( $enmse_scriptures as $enmse_sc) { if ( $enmse_sc_comma == 0 ) { echo '<a href="' . $enmse_sc->link . '" target="_blank">' . stripslashes($enmse_sc->text) . '</a>'; $enmse_sc_comma = $enmse_sc_comma+1; } else { echo ', <a href="' . $enmse_sc->link . '" target="_blank">' . stripslashes($enmse_sc->text) . '</a>'; $enmse_sc_comma = $enmse_sc_comma+1; } } ?></p><?php } ?>
	   	<!-- Related Topics -->
	   	<?php if ( $enmse_scm == 1 ) { // SHOW COMPLIMENTARY MESSAGES? ?>
		<?php if ( (isset($_GET['enmse_tid']) && is_numeric($_GET['enmse_tid'])) || ($enmse_dst > 0 && !isset($_GET['enmse_sid']) && !isset($_GET['enmse_spid'])) ) { // Toggle Series/Topic info depending on which is specified ?>
		<p class="enmse-related-topics"<?php if ( $enmse_singlemessage->description == NULL && $enmse_scriptures == NULL ) { ?> style="margin-top: 12px"<?php } ?>><?php if ( $enmse_seriestitles != NULL ) { ?><strong><?php echo $enmse_fromseries; ?></strong> <?php $enmse_s_comma = 1; foreach ( $enmse_seriestitles as $enmse_st) { if ( $enmse_s_comma == 1 ) { echo '<a href="' . $enmse_thispage . '&amp;enmse_sid=' . $enmse_st->series_id . '" class="enmse-series-ajax" title="' . '&amp;enmse_sid=' . $enmse_st->series_id . '">' . stripslashes($enmse_st->s_title) . '<input type="hidden" name="enmse-series-info" value="&amp;enmse_sid=' . $enmse_st->series_id . '" class="enmse-series-info"></a>'; $enmse_s_comma = $enmse_s_comma+1; } else { echo ', <a href="' . $enmse_thispage . '&amp;enmse_sid=' . $enmse_st->series_id . '" class="enmse-series-ajax" title="' . '&amp;enmse_sid=' . $enmse_st->series_id . '">' . stripslashes($enmse_st->s_title) . '<input type="hidden" name="enmse-series-info" value="&amp;enmse_sid=' . $enmse_st->series_id . '" class="enmse-series-info"></a>'; $enmse_s_comma = $enmse_s_comma+1; } } ?> | <?php } ?><?php if ( !empty($enmse_speaker) ) { ?><a href="<?php echo $enmse_thispage . '&amp;enmse_spid=' . $enmse_speaker->speaker_id; ?>" class="enmse-speaker-ajax"><?php if ( $enmse_language == 5 || $enmse_language == 6 ) { echo stripslashes($enmse_speaker->first_name) . " " . stripslashes($enmse_speaker->last_name) . " " . $enmse_moremessagesfrom; } else { if ($enmse_langswitch == 0) { echo $enmse_moremessagesfrom . " " . stripslashes($enmse_speaker->first_name) . " " . stripslashes($enmse_speaker->last_name); } elseif ($enmse_langswitch == 2) { echo $enmse_moremessagesfrom . " " . stripslashes($enmse_speaker->last_name) . " " . stripslashes($enmse_speaker->first_name); } else { echo stripslashes($enmse_speaker->first_name) . " " . stripslashes($enmse_speaker->last_name) . " " . $enmse_moremessagesfrom; } } ?><input type="hidden" name="enmse-speaker-info" value="&amp;enmse_spid=<?php echo $enmse_speaker->speaker_id; ?>" class="enmse-speaker-info"></a><?php if ( $enmse_singlemessage->audio_url != null && $enmse_singlemessage->audio_url != '0' && $enmse_had == 0 ) { ?> | <a href="<?php echo stripslashes($enmse_singlemessage->audio_url); ?>" id="enmse-modern-download-audio" <?php if ( $enmse_force == 1 ) { ?>class="enmse-force"<?php } ?> download><?php echo $enmse_downloadaudio; ?></a><?php } ?></p><?php } ?>
		<?php  } else { ?>
		<p class="enmse-related-topics"<?php if ( $enmse_singlemessage->description == NULL && $enmse_scriptures == NULL ) { ?> style="margin-top: 12px"<?php } ?>><?php if ( $enmse_messagetopics != NULL ) { ?><strong><?php echo $enmse_relatedtopics; ?></strong> <?php $enmse_t_comma = 1; foreach ( $enmse_messagetopics as $enmse_mt) { if ( $enmse_t_comma == 1 ) { echo '<a href="' . $enmse_thispage . '&amp;enmse_tid=' . $enmse_mt->topic_id . '" class="enmse-topic-ajax">' . stripslashes($enmse_mt->name) . '<input type="hidden" name="enmse-topic-info" value="&amp;enmse_tid=' . $enmse_mt->topic_id . '" class="enmse-topic-info"></a>'; $enmse_t_comma = $enmse_t_comma+1; } else { echo ', <a href="' . $enmse_thispage . '&amp;enmse_tid=' . $enmse_mt->topic_id . '" class="enmse-topic-ajax">' . stripslashes($enmse_mt->name) . '<input type="hidden" name="enmse-topic-info" value="&amp;enmse_tid=' . $enmse_mt->topic_id . '" class="enmse-topic-info"></a>'; $enmse_t_comma = $enmse_t_comma+1; } } ?> | <?php } ?><?php if ( !empty($enmse_speaker) ) { ?><a href="<?php echo $enmse_thispage . '&amp;enmse_spid=' . $enmse_speaker->speaker_id; ?>" class="enmse-speaker-ajax"><?php if ( $enmse_language == 5 || $enmse_language == 6 ) { echo stripslashes($enmse_speaker->first_name) . " " . stripslashes($enmse_speaker->last_name) . " " . $enmse_moremessagesfrom; } else { if ($enmse_langswitch == 0) { echo $enmse_moremessagesfrom . " " . stripslashes($enmse_speaker->first_name) . " " . stripslashes($enmse_speaker->last_name); } elseif ($enmse_langswitch == 2) { echo $enmse_moremessagesfrom . " " . stripslashes($enmse_speaker->last_name) . " " . stripslashes($enmse_speaker->first_name); } else { echo stripslashes($enmse_speaker->first_name) . " " . stripslashes($enmse_speaker->last_name) . " " . $enmse_moremessagesfrom; } } ?><input type="hidden" name="enmse-speaker-info" value="&amp;enmse_spid=<?php echo $enmse_speaker->speaker_id; ?>" class="enmse-speaker-info"></a><?php if ( $enmse_singlemessage->audio_url != null && $enmse_singlemessage->audio_url != '0' && $enmse_had == 0 ) { ?> | <a href="<?php echo stripslashes($enmse_singlemessage->audio_url); ?>" id="enmse-modern-download-audio" <?php if ( $enmse_force == 1 ) { ?>class="enmse-force"<?php } ?> download><?php echo $enmse_downloadaudio; ?></a><?php } ?></p><?php } ?>
		<?php } ?>
		<?php } else { ?>
		<?php if ( $enmse_singlemessage->audio_url != null && $enmse_singlemessage->audio_url != '0' && $enmse_had == 0 ) { ?><p class="enmse-related-topics"<?php if ( $enmse_singlemessage->description == NULL && $enmse_scriptures == NULL ) { ?> style="margin-top: 12px"<?php } ?>><a href="<?php echo stripslashes($enmse_singlemessage->audio_url); ?>" id="enmse-modern-download-audio" <?php if ( $enmse_force == 1 ) { ?>class="enmse-force"<?php } ?> download><?php echo $enmse_downloadaudio; ?></a></p><?php } ?>
		<?php } ?>
		<?php if ( isset($enmse_singleseries) && $enmse_singleseries->s_title != NULL && $enmse_hs == 0  ) { ?><h3><?php echo $enmse_fromseries; ?> "<em><?php echo stripslashes($enmse_singleseries->s_title); ?></em>"</h3><?php } ?>
	    <?php if ( isset($enmse_singleseries) && $enmse_singleseries->s_description != NULL && $enmse_hs == 0  ) { ?><p><?php echo stripslashes($enmse_singleseries->s_description); ?></p><?php } ?>
		<?php if ( !empty($enmse_files) ) { ?><p class="enmse-downloads"><?php $enmse_f_comma = 1; foreach ( $enmse_files as $enmse_f) { if ( $enmse_f->file_new_window == 1 ) { $enmse_n = "target=\"_blank\""; } else { $enmse_n = ""; }; if (preg_match('/(\.pdf)+/i', $enmse_f->file_url)) { $enmse_icon = "enmse-pdf"; } elseif (preg_match('/(\.zip)+/i', $enmse_f->file_url)) { $enmse_icon = "enmse-zip"; } elseif (preg_match('/(\.doc|\.docx)+/i', $enmse_f->file_url)) { $enmse_icon = "enmse-word"; } elseif (preg_match('/(\.xls|\.xlsx)+/i', $enmse_f->file_url)) { $enmse_icon = "enmse-excel"; } elseif (preg_match('/(\.mp3|\.m4a|\.aac)+/i', $enmse_f->file_url)) { $enmse_icon = "enmse-afile"; } elseif (preg_match('/(\.mp4|\.m4v|\.mov|\.wmv)+/i', $enmse_f->file_url)) { $enmse_icon = "enmse-vfile"; } elseif (preg_match('/(\.ppt|\.pptx)+/i', $enmse_f->file_url)) { $enmse_icon = "enmse-ppoint"; } elseif (preg_match('/(\.xml|\.json)+/i', $enmse_f->file_url)) { $enmse_icon = "enmse-feed"; } elseif (preg_match('/(\.jpg|\.jpeg|\.png|\.gif)+/i', $enmse_f->file_url)) { $enmse_icon = "enmse-photo"; } else { $enmse_icon = "enmse-clip"; }; if ( $enmse_f_comma == 1 ) { echo '<a href="' . $enmse_f->file_url . '" ' . $enmse_n . ' class="' . $enmse_icon . '">' . stripslashes($enmse_f->file_name) . '</a>'; $enmse_f_comma = $enmse_f_comma+1; } else { echo ' &nbsp;&nbsp;&nbsp; <a href="' . $enmse_f->file_url . '" ' . $enmse_n . ' class="' . $enmse_icon . '">' . stripslashes($enmse_f->file_name) . '</a>'; $enmse_f_comma = $enmse_f_comma+1; } } ?></p><?php } ?>
	</div>
	<?php if ( $enmse_hsh == 0 ) { ?>
	<div class="enmse-share-details modern">
		<?php if ( $enmse_singlemessage->wp_post_id == null || $enmse_usepermalinks == 0 ) { if ( (isset($_GET['enmse_tid']) && is_numeric($_GET['enmse_tid'])) || ($enmse_dst > 0 && !isset($_GET['enmse_sid']) && !isset($_GET['enmse_spid'])) ) { $enmse_sharelink = urlencode($enmse_thispage . '&amp;enmse_tid=' . $enmse_singletopic->topic_id . '&amp;enmse_mid=' . $enmse_singlemessage->message_id); } elseif ( (isset($_GET['enmse_sid']) && is_numeric($_GET['enmse_sid'])) || ($enmse_dss > 0 && !isset($_GET['enmse_tid']) && !isset($_GET['enmse_spid'])) ) { $enmse_sharelink = $enmse_thispage . urlencode('&amp;enmse_sid=' . $enmse_singleseries->series_id . '&amp;enmse_mid=' . $enmse_singlemessage->message_id); } elseif ( (isset($_GET['enmse_spid']) && is_numeric($_GET['enmse_spid'])) || ($enmse_dssp > 0 && !isset($_GET['enmse_sid']) && !isset($_GET['enmse_tid'])) ) { $enmse_sharelink = $enmse_thispage . urlencode('&amp;enmse_spid=' . $enmse_singlespeaker->speaker_id . '&amp;enmse_mid=' . $enmse_singlemessage->message_id); } else { $enmse_sharelink = $enmse_thispage . urlencode('&amp;enmse_mid=' . $enmse_singlemessage->message_id); }; } else { $enmse_sharelink = get_permalink($enmse_singlemessage->wp_post_id); };?>
		<?php include('share.php'); /* Share Links */ ?>
	</div>
	<?php } else {
		echo "<p class=\"enmse-blank-p\">&nbsp;</p>";
	} ?>
</div>