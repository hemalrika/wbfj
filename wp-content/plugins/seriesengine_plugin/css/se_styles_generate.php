<?php 

$enmse_options = $data;
$enmse_font = $enmse_options['font'];
$enmse_explorertitletext = $enmse_options['explorertitletext'];
$enmse_explorerbackground = $enmse_options['explorerbackground'];
$enmse_explorerselectborder = $enmse_options['explorerselectborder'];
$enmse_explorerselect = $enmse_options['explorerselect'];
$enmse_explorerselecttext = $enmse_options['explorerselecttext'];
$enmse_mstitletext = $enmse_options['mstitletext'];
$enmse_msdatetext = $enmse_options['msdatetext'];
$enmse_playerselectedtabbackground = $enmse_options['playerselectedtabbackground'];
if ( isset($enmse_options['playerbordercolor']) ) {
	$enmse_playerbordercolor = $enmse_options['playerbordercolor'];
} else {
	$enmse_playerbordercolor = $enmse_options['playerselectedtabbackground'];;
}
$enmse_playerselectedtabtext = $enmse_options['playerselectedtabtext'];
$enmse_playertabbackground = $enmse_options['playertabbackground'];
$enmse_playertabtext = $enmse_options['playertabtext'];
$enmse_playerdetailsbackground = $enmse_options['playerdetailsbackground'];
$enmse_playeroptions = $enmse_options['playeroptions'];
$enmse_detailstext = $enmse_options['detailstext'];
$enmse_detailstitletext = $enmse_options['detailstitletext'];
$enmse_detailsrelatedtext = $enmse_options['detailsrelatedtext'];
$enmse_detailslinks = $enmse_options['detailslinks'];
if ( isset($enmse_options['downloadsbg']) ) {
	$enmse_downloadsbg = $enmse_options['downloadsbg'];
} else {
	$enmse_downloadsbg = 'e6e6e6';
}
if ( isset($enmse_options['downloadlinks']) ) {
	$enmse_downloadlinks = $enmse_options['downloadlinks'];
} else {
	$enmse_downloadlinks = '486d7d';
}
$enmse_shareoptions = $enmse_options['shareoptions'];
$enmse_sharebuttonbackground = $enmse_options['sharebuttonbackground'];
$enmse_sharebuttontext = $enmse_options['sharebuttontext'];
$enmse_sharelinkbackground = $enmse_options['sharelinkbackground'];
$enmse_sharelinktext = $enmse_options['sharelinktext'];
$enmse_sharelinkbuttonbackground = $enmse_options['sharelinkbuttonbackground'];
$enmse_sharelinkbuttontext = $enmse_options['sharelinkbuttontext'];
$enmse_comptitletext = $enmse_options['comptitletext'];
$enmse_compoddrow = $enmse_options['compoddrow'];
$enmse_comprowtitletext = $enmse_options['comprowtitletext'];
if ( isset($enmse_options['compaltrowtitletext']) ) {
	$enmse_compaltrowtitletext = $enmse_options['compaltrowtitletext'];
} else {
	$enmse_compaltrowtitletext = '000000';
}
$enmse_comprowdatetext = $enmse_options['comprowdatetext'];
if ( isset($enmse_options['compaltrowdatetext']) ) {
	$enmse_compaltrowdatetext = $enmse_options['compaltrowdatetext'];
} else {
	$enmse_compaltrowdatetext = '000000';
}
$enmse_complinks = $enmse_options['complinks'];
$enmse_loadingbackground = $enmse_options['loadingbackground'];
$enmse_loadingtext = $enmse_options['loadingtext'];
$enmse_loadingicon = $enmse_options['loadingicon'];
$enmse_archiverow = $enmse_options['archiverow'];
$enmse_archiveseriestitle = $enmse_options['archiveseriestitle'];
$enmse_archivedatecount = $enmse_options['archivedatecount'];
$enmse_archivelinks = $enmse_options['archivelinks'];
$enmse_poweredby = $enmse_options['poweredby'];
$enmse_poweredbytext = $enmse_options['poweredbytext'];

if ( isset($enmse_options['pagebuttonbg']) ) {
	$enmse_pagebuttonbg = $enmse_options['pagebuttonbg'];
} else {
	$enmse_pagebuttonbg = '94B83D';
}

if ( isset($enmse_options['pagebuttontext']) ) {
	$enmse_pagebuttontext = $enmse_options['pagebuttontext'];
} else {
	$enmse_pagebuttontext = 'cee39a';
}

if ( isset($enmse_options['pagenumber']) ) {
	$enmse_pagenumber = $enmse_options['pagenumber'];
} else {
	$enmse_pagenumber = 'd4d4d4';
}

if ( isset($enmse_options['pagenumberselectedbg']) ) {
	$enmse_pagenumberselectedbg = $enmse_options['pagenumberselectedbg'];
} else {
	$enmse_pagenumberselectedbg = 'f1f1f1';
}

if ( isset($enmse_options['pagenumberselectedtext']) ) {
	$enmse_pagenumberselectedtext = $enmse_options['pagenumberselectedtext'];
} else {
	$enmse_pagenumberselectedtext = 'd4d4d4';
}

if ( isset($enmse_options['audiobg']) ) {
	$enmse_audiobg = $enmse_options['audiobg'];
} else {
	$enmse_audiobg = '000000';
}

if ( isset($enmse_options['audioprog']) ) {
	$enmse_audioprog = $enmse_options['audioprog'];
} else {
	$enmse_audioprog = 'cccccc';
}

if ( isset($enmse_options['responsivefull']) ) {
	$enmse_responsivefull = $enmse_options['responsivefull'];
} else {
	$enmse_responsivefull = '900';
}

if ( isset($enmse_options['responsivemobile']) ) {
	$enmse_responsivemobile = $enmse_options['responsivemobile'];
} else {
	$enmse_responsivemobile = '700';
}

if ( isset($enmse_options['responsivecondensed']) ) {
	$enmse_responsivecondensed = $enmse_options['responsivecondensed'];
} else {
	$enmse_responsivecondensed = '600';
}

if ( isset($enmse_options['imagearchivetext']) ) {
	$enmse_imagearchivetext = $enmse_options['imagearchivetext'];
} else {
	$enmse_imagearchivetext = '1';
}

if ( isset($enmse_options['gridrowbg']) ) {
	$enmse_gridrowbg = $enmse_options['gridrowbg'];
} else {
	$enmse_gridrowbg = 'f1f1f1';
}

if ( isset($enmse_options['gridrowtitle']) ) {
	$enmse_gridrowtitle = $enmse_options['gridrowtitle'];
} else {
	$enmse_gridrowtitle = '000000';
}

if ( isset($enmse_options['gridrowbible']) ) {
	$enmse_gridrowbible = $enmse_options['gridrowbible'];
} else {
	$enmse_gridrowbible = '000000';
}

if ( isset($enmse_options['gridrowfile']) ) {
	$enmse_gridrowfile = $enmse_options['gridrowfile'];
} else {
	$enmse_gridrowfile = '94B83D';
}

if ( isset($enmse_options['gridrowmediabg']) ) {
	$enmse_gridrowmediabg = $enmse_options['gridrowmediabg'];
} else {
	$enmse_gridrowmediabg = '94B83D';
}

if ( isset($enmse_options['gridrowmediatext']) ) {
	$enmse_gridrowmediatext = $enmse_options['gridrowmediatext'];
} else {
	$enmse_gridrowmediatext = 'ffffff';
}

if ( isset($enmse_options['maxwidth']) ) {
	$enmse_maxwidth = $enmse_options['maxwidth'];
} else {
	$enmse_maxwidth = '1000';
}

if ( isset($enmse_options['borderoption']) ) {
	$enmse_borderoption = $enmse_options['borderoption'];
} else {
	$enmse_borderoption = '1';
}

if ( isset($enmse_options['customfont']) ) {
	$enmse_customfont = $enmse_options['customfont'];
} else {
	$enmse_customfont = '';
}

if ( isset($enmse_options['language']) ) { // Find the Language
	$enmse_language = $enmse_options['language'];
} else {
	$enmse_language = 1;
}

?>
/* ----- Series Engine ----- */

#seriesengine {
	margin: 0 auto;
	padding: 0;
	width: 100%;
	position: relative;
}

#seriesengine * {
	-webkit-box-sizing: content-box !important;
	-moz-box-sizing: content-box !important;
	box-sizing: content-box !important;
}

#seriesengine h1, #seriesengine h2, #seriesengine h3, #seriesengine h4, #seriesengine h5, #seriesengine h6, #seriesengine p, #seriesengine form, #seriesengine ul, #seriesengine ol, #seriesengine li, #seriesengine ol li, #seriesengine ul li, #seriesengine blockquote, #seriesengine input, #seriesengine input[type="submit"], #seriesengine textarea, #seriesengine select, #seriesengine select:focus, #seriesengine label, #seriesengine table, #seriesengine table tr, #seriesengine table tr td, #seriesengine iframe, #seriesengine object, #seriesengine embed, #seriesengine img { /* resets most browser styles to enhance cross-browser compatibility */
	margin: 0;
	padding: 0;
	font-size: 16px !important;
	text-transform: none;
	letter-spacing: 0;
	line-height: 1;
	clear: none;
	font-weight: 300;
	<?php if ( $enmse_font == "arial" ) { 
		echo "font-family: Arial, Helvetica, sans-serif !important;";
	} elseif ( $enmse_font == "times" ) {
		echo "font-family: Times New Roman, Times New Roman, serif !important;";
	} elseif ( $enmse_font == "georgia" ) {
		echo "font-family: Georgia, Georgia, serif !important;";
	} elseif ( $enmse_font == "verdana" ) {
		echo "font-family: Verdana, Geneva, sans-serif !important;";
	} elseif ( $enmse_font == "lucida" ) {
		echo "font-family: Lucida Sans Unicode, Lucida Grande, sans-serif !important;";
	} elseif ( $enmse_font == "tahoma" ) {
		echo "font-family: Tahoma, Geneva, sans-serif !important;";
	} elseif ( $enmse_font == "trebuchet" ) {
		echo "font-family: Trebuchet MS, Trebuchet MS, sans-serif !important;";
	} elseif ( $enmse_font == "custom" ) {
		echo "font-family: " . $enmse_customfont . ";";
	} ?>
	font-variant: normal;
	float: none;
	border: none;
	-moz-border-radius: 0;
	-webkit-border-radius: 0;
	border-radius: 0;
	background: none;
	min-height: 0;
	text-align: left;
	max-width: 100%;
	text-indent: 0;
	box-shadow: none
}

#main #seriesengine table, #main #seriesengine table tr, #main #seriesengine table tr td {
	border: none;
	-moz-border-radius: 0;
	-webkit-border-radius: 0;
	border-radius: 0;
}

#seriesengine br {
	line-height: 0;
}

#seriesengine .enmse-watch .enmse-vid-container, #seriesengine .enmse-alternate .enmse-vid-container {
	position: relative;
	padding-bottom: 56.25%;
	/*padding-top: 30px;*/
	height: 0; 
	overflow: hidden;
}

#seriesengine iframe, #seriesengine object, #seriesengine embed, #seriesengine img {
	width: 100%;
}

#seriesengine iframe {
	position: absolute !important;
	top: 0 !important;
	left: 0 !important;
	height: 100% !important;
	background-color: #000;
}

.enmse-player .iframe-embed, .enmse-player .fluid-width-video-wrapper, .enmse-player .fluidvids {position:static;} /* Fix for Salient Theme and FitVids */

#seriesengine ul li:before {
	content: normal;
}

#seriesengine a {
	<?php if ( $enmse_font == "arial" ) { 
		echo "font-family: Arial, Helvetica, sans-serif !important;";
	} elseif ( $enmse_font == "times" ) {
		echo "font-family: Times New Roman, Times New Roman, serif !important;";
	} elseif ( $enmse_font == "georgia" ) {
		echo "font-family: Georgia, Georgia, serif !important;";
	} elseif ( $enmse_font == "verdana" ) {
		echo "font-family: Verdana, Geneva, sans-serif !important;";
	} elseif ( $enmse_font == "lucida" ) {
		echo "font-family: Lucida Sans Unicode, Lucida Grande, sans-serif !important;";
	} elseif ( $enmse_font == "tahoma" ) {
		echo "font-family: Tahoma, Geneva, sans-serif !important;";
	} elseif ( $enmse_font == "trebuchet" ) {
		echo "font-family: Trebuchet MS, Trebuchet MS, sans-serif !important;";
	} elseif ( $enmse_font == "custom" ) {
		echo "font-family: " . $enmse_customfont . ";";
	} ?>
	border: none !important;
}

#seriesengine a:link {color: #<?php echo $enmse_complinks; ?>; text-decoration: underline; font-weight: 300}
#seriesengine a:visited {color: #<?php echo $enmse_complinks; ?>; text-decoration: underline; font-weight: 300}
#seriesengine a:hover {color: #<?php echo $enmse_complinks; ?>; text-decoration: none; font-weight: 300}
#seriesengine a:active {color: #<?php echo $enmse_complinks; ?>; text-decoration: underline; font-weight: 300}

#seriesengine a:focus {
	outline: none !important;
}

#seriesengine .enmse-spacer {
	display: none;
}

#seriesengine {
	max-width: <?php echo $enmse_maxwidth; ?>px;
	margin: 0 auto;
}

/* ----- Series/Topic Selector ----- */

#seriesengine h4.enmse-more-messages-title {
	color: #<?php echo $enmse_explorertitletext; ?>;
	font-size: 16px !important;
	<?php if ( $enmse_font == "arial" ) { 
		echo "font-family: Arial, Helvetica, sans-serif !important;";
	} elseif ( $enmse_font == "times" ) {
		echo "font-family: Times New Roman, Times New Roman, serif !important;";
	} elseif ( $enmse_font == "georgia" ) {
		echo "font-family: Georgia, Georgia, serif !important;";
	} elseif ( $enmse_font == "verdana" ) {
		echo "font-family: Verdana, Geneva, sans-serif !important;";
	} elseif ( $enmse_font == "lucida" ) {
		echo "font-family: Lucida Sans Unicode, Lucida Grande, sans-serif !important;";
	} elseif ( $enmse_font == "tahoma" ) {
		echo "font-family: Tahoma, Geneva, sans-serif !important;";
	} elseif ( $enmse_font == "trebuchet" ) {
		echo "font-family: Trebuchet MS, Trebuchet MS, sans-serif !important;";
	} elseif ( $enmse_font == "custom" ) {
		echo "font-family: " . $enmse_customfont . ";";
	} ?>
	margin: 0 0 10px 0;
}

#seriesengine .enmse-selector {
	background-color: #<?php echo $enmse_explorerbackground; ?>;
	width: 100%;
	margin: 0 0 25px 0;
	text-align: center;
	padding: 12px 0 12px 0;
	line-height: 0;
}

#seriesengine .enmse-selector h4 {
	display: inline;
	font-size: 15px !important;
}

#seriesengine .enmse-selector.four select {
	border: 1px solid #<?php echo $enmse_explorerselectborder; ?> !important;
	background-color: #<?php echo $enmse_explorerselect; ?> !important;
	color: #<?php echo $enmse_explorerselecttext; ?> !important;
	width: 22% !important;
	font-size: 15px !important;
	vertical-align: middle;
	height: 20px;
	display: inline;
	background-image: none !important;
	-webkit-appearance: menulist !important; 
	appearance: menulist !important;
	margin: 0 !important;
}

#seriesengine .enmse-selector.three select {
	border: 1px solid #<?php echo $enmse_explorerselectborder; ?> !important;
	background-color: #<?php echo $enmse_explorerselect; ?> !important;
	color: #<?php echo $enmse_explorerselecttext; ?> !important;
	width: 30% !important;
	font-size: 15px !important;
	vertical-align: middle;
	height: 20px;
	display: inline;
	background-image: none !important;
	-webkit-appearance: menulist !important; 
	appearance: menulist !important;
	margin: 0 !important;
}

#seriesengine .enmse-selector.two select {
	border: 1px solid #<?php echo $enmse_explorerselectborder; ?> !important;
	background-color: #<?php echo $enmse_explorerselect; ?> !important;
	color: #<?php echo $enmse_explorerselecttext; ?> !important;
	width: 47% !important;
	font-size: 15px !important;
	vertical-align: middle;
	height: 20px;
	display: inline;
	background-image: none !important;
	-webkit-appearance: menulist !important; 
	appearance: menulist !important;
	margin: 0 !important;
}

#seriesengine .enmse-selector.one select {
	border: 1px solid #<?php echo $enmse_explorerselectborder; ?> !important;
	background-color: #<?php echo $enmse_explorerselect; ?> !important;
	color: #<?php echo $enmse_explorerselecttext; ?> !important;
	width: 95% !important;
	font-size: 15px !important;
	vertical-align: middle;
	height: 20px;
	display: inline;
	background-image: none !important;
	-webkit-appearance: menulist !important; 
	appearance: menulist !important;
	margin: 0 !important;
}

/* ----- Message Title/Speaker ----- */

#seriesengine h2.enmse-message-title {
	color: #<?php echo $enmse_mstitletext; ?>;
	font-size: 19px !important;
	font-weight: 700;
	margin: 0 0 12px 0;
}

#seriesengine h3.enmse-message-meta {
	color: #<?php echo $enmse_msdatetext; ?>;
	float: right;
	font-size: 15px !important;
	font-style: italic;
	margin: 4px 0 0 0;
	padding: 0 0 0 10px;
}

#seriesengine h2.enmse-modern-message-title {
	color: #<?php echo $enmse_mstitletext; ?>;
	font-size: 32px !important;
	font-weight: 700;
	margin: 0 0 18px 0;
	text-align: center;
}

#seriesengine h3.enmse-modern-message-meta {
	color: #<?php echo $enmse_msdatetext; ?>;
	font-size: 20px !important;
	font-style: italic;
	text-align: center;
	margin: 4px 0 6px 0;
	padding: 0;
}

/* ----- Media Section ----- */

#seriesengine .enmse-listen {
	padding: 0;
	line-height: 0;
}

#seriesengine .enmse-listen img {
	box-shadow: none;
}

#seriesengine .enmse-audio, #seriesengine .enmse-modern-audio  {
	background: none;
	background-color: #<?php echo $enmse_audiobg; ?>;
}

#seriesengine .enmse-audio audio {
}

#seriesengine .enmse-audio .mejs__container {
	background: none;
	width: 78% !important;
	box-sizing: border-box !important;
	padding: 0 !important;
}

#seriesengine .enmse-audio .mejs-container {
	background: none;
	width: 78% !important;
	box-sizing: border-box !important;
	padding: 0 !important;
	clear: none !important;
}

#seriesengine .enmse-audio .mejs-controls .mejs-time-rail .mejs-time-current, #seriesengine .enmse-modern-audio .mejs-controls .mejs-time-rail .mejs-time-current {
	background: #<?php echo $enmse_audioprog; ?>;
}

#seriesengine video {
	margin: 0;
	padding: 0;
}

#seriesengine .mejs__video .mejs__controls, #seriesengine .mejs-video .mejs-controls {
	/*background: none;*/
	width: 100% !important;
	box-sizing: border-box !important;
}

#seriesengine .enmse-audio .mejs__controls:not([style*="display: none"]), #seriesengine .enmse-audio .mejs-controls:not([style*="display: none"]), #seriesengine .enmse-modern-audio .mejs__controls:not([style*="display: none"]), #seriesengine .enmse-modern-audio .mejs-controls:not([style*="display: none"]) {
    background: #<?php echo $enmse_audiobg; ?> !important;
    -webkit-box-sizing: border-box !important;
	-moz-box-sizing: border-box !important;
	box-sizing: border-box !important;
}

#seriesengine .mejs__play > button:hover {
    background: transparent url("../js/mediaelement/build2/mejs-controls.svg");
    background-position: 0 0;
}

#seriesengine .mejs__pause > button:hover {
    background: transparent url("../js/mediaelement/build2/mejs-controls.svg");
    background-position: -20px 0;
}

#seriesengine .mejs__replay > button:hover {
    background: transparent url("../js/mediaelement/build2/mejs-controls.svg");
    background-position: -160px 0;
}

#seriesengine .mejs__mute > button:hover {
    background: transparent url("../js/mediaelement/build2/mejs-controls.svg");
    background-position: -60px 0;
}

#seriesengine .mejs__unmute > button:hover {
    background: transparent url("../js/mediaelement/build2/mejs-controls.svg");
    background-position: -40px 0;
}

#seriesengine .mejs__fullscreen-button > button {
    background: transparent url("../js/mediaelement/build2/mejs-controls.svg");
    background-position: -80px 0;
}

#seriesengine .mejs__unfullscreen > button {
    background: transparent url("../js/mediaelement/build2/mejs-controls.svg");
    background-position: -100px 0;
}

#seriesengine .enmse-player {
	background-color: #<?php echo $enmse_playerdetailsbackground; ?>;
	padding: 0 0 8px 0;
	margin: 0 0 15px 0;
	line-height: 0 !important;
	clear: both;
}

#seriesengine .enmse-media-container {
	background-color: #<?php echo $enmse_playerbordercolor; ?>;
	width: inherit;
	padding: 4px;	
	line-height: 0 !important;
}

#seriesengine .enmse-media-container.modern {
	<?php if ( $enmse_borderoption == 1 ) { ?>
	padding: 4px;
	<?php } else { ?>
	padding: 0;
	<?php } ?>
}

#seriesengine .fluid-width-video-wrapper { /* Fix for FitVid/Standard Theme */  
	margin: 0 !important;                          
}

#seriesengine .mejs-container {
	margin: 0 !important;
}

#seriesengine .enmse-audio a#enmse-download { /* MP3 Download Button */
	background-color: #fff;
	color: #<?php echo $enmse_audiobg; ?>;
	display: block;
	width: 63px;
	height: 16px;
	line-height: 16px;
	text-align: center;
	text-decoration: none;
	margin: 7px 10px 0 0;
	font-size: 11px !important;
	float: right;
	border-radius: 3px;
	-moz-border-radius: 3px;
}

/* ----- Tabs and Buttons ----- */

#seriesengine ul.enmse-player-tabs { /* Tabs */
	margin: 0 auto;
	text-align: left;
	padding: 0 0 0 15px;
	height: 26px;
	position: static;
}

#seriesengine ul.enmse-player-tabs li {
	display: inline-block;
	list-style-type: none;
	<?php if ( $enmse_font == "lucida" || $enmse_font == "trebuchet"|| $enmse_font == "verdana" ) { 
		echo "margin: 0 2px 0 0;";
	} else {
		echo "margin: 0 4px 0 0;";
	}; ?>
	width: 94px;
	height: 26px;
	font-size: 13px !important;
}

#seriesengine ul.enmse-player-tabs li a {
	background-color: #<?php echo $enmse_playertabbackground; ?>;
	color: #<?php echo $enmse_playertabtext; ?>;
	display: block;
	width: 94px;
	height: 26px;
	line-height: 26px;
	text-decoration: none;
	text-align: center;
}

#seriesengine ul.enmse-player-tabs li.enmse-tab-selected a {
	background-color: #<?php echo $enmse_playerselectedtabbackground; ?>;
	color: #<?php echo $enmse_playerselectedtabtext; ?>;
} 

#seriesengine ul.enmse-modern-player-tabs { /* Tabs */
	margin: 0 0 20px 0;
	text-align: center;
	padding: 12px 0 0 0;
	height: 34px;
	position: static;
}

#seriesengine ul.enmse-modern-player-tabs.hidden, #seriesengine ul.enmse-modern-player-tabs.hidden.hidden, #seriesengine ul.enmse-modern-player-tabs.hidden.hidden.hidden { 
	margin: 0;
	padding: 12px 0 0 0;
	height: 0;
}

#seriesengine ul.enmse-modern-player-tabs li {
	display: inline-block;
	list-style-type: none;
	min-width: 134px;
	height: 34px;
}

#seriesengine ul.enmse-modern-player-tabs li.enmse-watch-tab {
	margin: 0 4px 0 0;	
}

#seriesengine ul.enmse-modern-player-tabs li.enmse-listen-tab {
	margin: 0 4px 0 0;	
}

#seriesengine ul.enmse-modern-player-tabs li.enmse-listen-tab.nm {
	margin: 0;	
}


#seriesengine ul.enmse-modern-player-tabs li a {
	background-color: #<?php echo $enmse_playertabbackground; ?>;
	color: #<?php echo $enmse_playertabtext; ?>;
	display: inline-block;
	min-width: 114px;
	padding: 0 10px 0 10px;
	height: 34px;
	line-height: 34px;
	font-size: 15px !important;
	text-decoration: none;
	text-align: center; 
	margin: 0;   
	transition: 0.3s;
}

#seriesengine ul.enmse-modern-player-tabs li.enmse-watch-tab a:before, #seriesengine ul.enmse-modern-player-tabs li.enmse-alternate-tab a:before  {
	font-family: FontAwesome;
	content: "\f144  ";
}

#seriesengine ul.enmse-modern-player-tabs li.enmse-listen-tab a:before  {
	font-family: FontAwesome;
	content: "\f025  ";
}

#seriesengine ul.enmse-modern-player-tabs li.enmse-tab-selected a {
	background-color: #<?php echo $enmse_playerselectedtabbackground; ?>;
	color: #<?php echo $enmse_playerselectedtabtext; ?>;
	font-size: 15px !important;
} 

#seriesengine ul.enmse-player-options { /* Options */
	margin: -26px auto 0 auto;
	text-align: right;
	padding: 0;
	position: static;
}

#seriesengine ul.enmse-player-options li.enmse-details {
	display: inline-block;
	list-style-type: none;
	margin: 0 4px 0 0;
	width: 70px;
	height: 26px;
	<?php if ( $enmse_font == "lucida" || $enmse_font == "courier" || $enmse_font == "verdana" ) { 
		echo "font-size: 12px !important;";
	} else {
		echo "font-size: 13px !important;";
	}; ?>	
}

#seriesengine ul.enmse-player-options li.enmse-extras {
	display: inline-block;
	list-style-type: none;
	margin: 0 4px 0 0;
	width: 66px;
	height: 26px;
	<?php if ( $enmse_font == "lucida" || $enmse_font == "courier" || $enmse_font == "verdana" ) { 
		echo "font-size: 12px !important;";
	} else {
		echo "font-size: 13px !important;";
	}; ?>	
}

#seriesengine ul.enmse-player-options li.enmse-share-this {
	display: inline-block;
	list-style-type: none;
	width: 70px;
	height: 26px;
	<?php if ( $enmse_font == "lucida" || $enmse_font == "courier" || $enmse_font == "verdana" ) { 
		echo "font-size: 12px !important;";
	} else {
		echo "font-size: 13px !important;";
	}; ?>
	margin: 0;
}

#seriesengine ul.enmse-player-options li.enmse-details a {
	display: block;
	width: 70px;
	height: 30px;
	line-height: 30px;
	text-decoration: none;
	text-align: center;
}

#seriesengine ul.enmse-player-options li.enmse-details a.enmse-hide-details {
	<?php if ( $enmse_playeroptions == "dark" ) { ?>
	background: url('../images/interface/dark_up.png') no-repeat;
	background-position: 0 9px;		
	color: #4e4e4e;
	<?php } else { ?>
	background: url('../images/interface/light_up.png') no-repeat;
	background-position: 0 9px;
	color: #d9d9d9;
	<?php } ?>
}

#seriesengine ul.enmse-player-options li.enmse-details a.enmse-show-details {
	<?php if ( $enmse_playeroptions == "dark" ) { ?>
	background: url('../images/interface/dark_down.png') no-repeat;
	background-position: 0 9px;		
	color: #4e4e4e;
	<?php } else { ?>
	background: url('../images/interface/light_down.png') no-repeat;
	background-position: 0 9px;		
	color: #d9d9d9;
	<?php } ?>
}

#seriesengine ul.enmse-player-options li.enmse-extras a {
	display: block;
	width: 66px;
	height: 30px;
	line-height: 30px;
	text-decoration: none;
	text-align: center;
	<?php if ( $enmse_playeroptions == "dark" ) { ?>
	background: url('../images/interface/dark_download.png') no-repeat;
	background-position: 0 9px;		
	color: #4e4e4e;
	<?php } else { ?>
	background: url('../images/interface/light_download.png') no-repeat;
	background-position: 0 9px;
	color: #d9d9d9;
	<?php } ?>
}

#seriesengine ul.enmse-player-options li.enmse-share-this a, #seriesengine ul.enmse-player-options li.enmse-hide-share-this a {
	display: block;
	width: 70px;
	height: 30px;
	line-height: 30px;
	text-decoration: none;
	text-align: center;
	<?php if ( $enmse_playeroptions == "dark" ) { ?>
	color: #4e4e4e;
	background: url('../images/interface/dark_share.png') no-repeat;
	background-position: 0 9px;
	<?php } else { ?>
	color: #d9d9d9;
	background: url('../images/interface/light_share.png') no-repeat;
	background-position: 0 9px;	
	<?php } ?>
}

/* ----- Message Details ----- */

#seriesengine .enmse-player .enmse-player-details {
	margin: 0 14px 0 14px;
	line-height: 0;
}

#seriesengine .enmse-player .enmse-modern-player-details {
	margin: 0 20px 0 20px;
	line-height: 0;
}

#seriesengine .enmse-player .enmse-player-details h3 {
	color: #<?php echo $enmse_detailstitletext; ?>;
	font-weight: 700;
	font-size: 15px !important;
	margin: 12px 0 10px 0;
}

#seriesengine .enmse-player .enmse-modern-player-details h3 {
	color: #<?php echo $enmse_detailstitletext; ?>;
	font-weight: 700;
	font-size: 21px !important;
	text-align: center;
	margin: 20px 0 10px 0;
}

#seriesengine .enmse-player .enmse-player-details p {
	color: #<?php echo $enmse_detailstext; ?>;
	font-size: 13px !important;
	line-height: 120%;
	margin: 0;
}

#seriesengine .enmse-player .enmse-modern-player-details p {
	color: #<?php echo $enmse_detailstext; ?>;
	font-size: 15px !important;
	line-height: 120%;
	margin: 0;
}

#seriesengine .enmse-player .enmse-player-details p.enmse-message-description {
	font-size: 13px !important;
	line-height: 120%;
	margin: 12px 0 0 0;
}

#seriesengine .enmse-player .enmse-modern-player-details p.enmse-message-description {
	font-size: 15px !important;
	line-height: 120%;
	margin: 12px 0 12px 0;
}

#seriesengine .enmse-player .enmse-player-details p.enmse-related-topics {
	color: #<?php echo $enmse_detailsrelatedtext; ?>;
	font-size: 12px !important;
	margin: 12px 0 6px 0;
}

#seriesengine .enmse-player .enmse-modern-player-details p.enmse-related-topics {
	color: #<?php echo $enmse_detailsrelatedtext; ?>;
	text-align: center;
	font-size: 15px !important;
	margin: 0 0 6px 0;
}

#seriesengine .enmse-player .enmse-modern-player-details p.enmse-modern-scripture {
	color: #<?php echo $enmse_detailsrelatedtext; ?>;
	text-align: center;
	margin: 0 0 2px 0;
}

#seriesengine .enmse-player .enmse-player-details p.enmse-related-topics strong {
	color: #<?php echo $enmse_detailsrelatedtext; ?>;
	font-weight: 700;
}

#seriesengine .enmse-player .enmse-player-details p.enmse-related-topics a, #seriesengine .enmse-player .enmse-modern-player-details p.enmse-related-topics a, #seriesengine .enmse-player .enmse-modern-player-details p.enmse-modern-scripture a {
	color: #<?php echo $enmse_detailslinks; ?>;
}

#seriesengine .enmse-player .enmse-player-details p.enmse-downloads {
	text-align: center;
	font-size: 12px !important;
	margin: 10px 0 10px 0;
	padding: 8px 10px 8px 10px;
	background-color: #<?php echo $enmse_downloadsbg; ?>;
}

#seriesengine .enmse-player .enmse-player-extras p.enmse-downloads {
	text-align: center;
	font-size: 12px !important;
	margin: 10px 14px 4px 14px;
	padding: 8px 10px 8px 10px;
	background-color: #<?php echo $enmse_downloadsbg; ?>;
}

#seriesengine .enmse-player .enmse-modern-player-details p.enmse-related-topics a#enmse-modern-download-audio:before  {
	font-family: FontAwesome;
	content: "\f019  ";
	text-decoration: none !important;
}

#seriesengine .enmse-player .enmse-modern-player-details p.enmse-downloads {
	text-align: center;
	font-size: 15px !important;
	margin: 10px 0 10px 0;
	padding: 8px 10px 8px 10px;
	background-color: #<?php echo $enmse_downloadsbg; ?>;
}

#seriesengine .enmse-player .enmse-modern-player-details p.enmse-downloads a {
	color: #<?php echo $enmse_downloadlinks; ?>;
	text-decoration: none;
}

#seriesengine .enmse-player .enmse-modern-player-details p.enmse-downloads a.enmse-clip:before  {
	font-family: FontAwesome;
	content: "\f08e  ";
	opacity: 0.35;
}

#seriesengine .enmse-player .enmse-modern-player-details p.enmse-downloads a.enmse-pdf:before  {
	font-family: FontAwesome;
	content: "\f0f6  ";
	opacity: 0.35;
}

#seriesengine .enmse-player .enmse-modern-player-details p.enmse-downloads a.enmse-word:before  {
	font-family: FontAwesome;
	content: "\f1c2  ";
	opacity: 0.35;
}

#seriesengine .enmse-player .enmse-modern-player-details p.enmse-downloads a.enmse-excel:before  {
	font-family: FontAwesome;
	content: "\f1c3  ";
	opacity: 0.35;
}

#seriesengine .enmse-player .enmse-modern-player-details p.enmse-downloads a.enmse-afile:before  {
	font-family: FontAwesome;
	content: "\f1c7  ";
	opacity: 0.35;
}

#seriesengine .enmse-player .enmse-modern-player-details p.enmse-downloads a.enmse-vfile:before  {
	font-family: FontAwesome;
	content: "\f1c8  ";
	opacity: 0.35;
}

#seriesengine .enmse-player .enmse-modern-player-details p.enmse-downloads a.enmse-ppoint:before  {
	font-family: FontAwesome;
	content: "\f1c4  ";
	opacity: 0.35;
}

#seriesengine .enmse-player .enmse-modern-player-details p.enmse-downloads a.enmse-feed:before  {
	font-family: FontAwesome;
	content: "\f09e  ";
	opacity: 0.35;
}

#seriesengine .enmse-player .enmse-modern-player-details p.enmse-downloads a.enmse-photo:before  {
	font-family: FontAwesome;
	content: "\f1c5  ";
	opacity: 0.35;f1c6
}

#seriesengine .enmse-player .enmse-modern-player-details p.enmse-downloads a.enmse-zip:before  {
	font-family: FontAwesome;
	content: "\f1c6  ";
	opacity: 0.35;
}

#seriesengine .enmse-player .enmse-modern-player-details p.enmse-downloads a:hover:before {
	opacity: 1;
}

#seriesengine .enmse-player .enmse-player-details p.enmse-downloads a, #seriesengine .enmse-player .enmse-player-extras p.enmse-downloads a {
	color: #<?php echo $enmse_downloadlinks; ?>;
}

/* ----- Share Options ----- */

#seriesengine .enmse-share-details {
	padding: 0 8px 0 8px;
	margin: 0 14px 0 14px;
	height: 42px;
	line-height: 0;
}

#seriesengine .enmse-share-details.modern {
	padding: 0 8px 0 8px;
	margin: 0 14px 0 14px;
	height: 56px;
	line-height: 0;
}

#seriesengine .enmse-share-details ul {
	width: 430px;
	margin: 0 auto;
}

#seriesengine .enmse-share-details.modern ul {
	width: 100%;
	margin: 0 auto;
	text-align: center;
}

#seriesengine .enmse-share-details ul li {
	list-style-type: none;
	float: left;
	font-size: 12px !important;
	margin: 12px 10px 8px 0;
}

#seriesengine .enmse-share-details.modern ul li {
	list-style-type: none;
	display: inline-block;
	float: none;
	font-size: 14px !important;
	margin: 12px 2px 0 2px;
}

#seriesengine .enmse-share-details ul li.enmse-email {
	margin: 12px 0 8px 0;
}

#seriesengine .enmse-share-details.modern ul li.enmse-email {
	margin: 12px 0 0 2px;
}

#seriesengine .enmse-share-details ul li a {
	-webkit-box-sizing: content-box;
	-moz-box-sizing: content-box;
	box-sizing: content-box;
	text-decoration: none;
	text-align: left;
	display: block;
	<?php if ( $enmse_font == "verdana" ) { 
		echo "width: 68px;";
	} else {
		echo "width: 66px;";
	}; ?>
	height: 26px;
	line-height: 26px;
	<?php if ( $enmse_font == "verdana" ) { 
		echo "padding: 0 8px 0 24px;";
	} else {
		echo "padding: 0 8px 0 26px;";
	}; ?>
	border-radius: 13px;
	-moz-border-radius: 13px;
	color: #<?php echo $enmse_sharebuttontext; ?>;
}

#seriesengine .enmse-share-details.modern ul li a {
	-webkit-box-sizing: content-box;
	-moz-box-sizing: content-box;
	box-sizing: content-box;
	text-decoration: none;
	text-align: center;
	display: block;
	width: 38px;	
	height: 38px;
	line-height: 38px;
	padding: 0;	
	border-radius: 19px;
	font-size: 18px;
	-moz-border-radius: 19px;
	color: #<?php echo $enmse_sharebuttontext; ?>;
}

#seriesengine .enmse-share-details.modern ul li a span {
	display: none;
}

#seriesengine .enmse-share-details ul li.enmse-facebook a {
	<?php if ( $enmse_shareoptions == "light" ) { ?>
	background: url('../images/interface/se_facebook_light.png') no-repeat;
	<?php } else { ?>
	background: url('../images/interface/se_facebook_dark.png') no-repeat;
	<?php } ?>
	<?php if ( $enmse_font == "verdana" ) { 
		echo "background-position: 6px 6px;";
	} else {
		echo "background-position: 8px 6px;";
	}; ?>
	background-color: #<?php echo $enmse_sharebuttonbackground; ?>;
}

#seriesengine .enmse-share-details.modern ul li.enmse-facebook a {
		background-image: none;
		background-color: #<?php echo $enmse_sharebuttonbackground; ?>;
}

#seriesengine .enmse-share-details.modern ul li.enmse-facebook a:before {
		font-family: FontAwesome;
		content: "\f082";
		opacity: 0.5;
}

#seriesengine .enmse-share-details.modern ul li.enmse-facebook a:hover:before {
		font-family: FontAwesome;
		content: "\f082";
		opacity: 1;
}

#seriesengine .enmse-share-details ul li.enmse-twitter a {
	<?php if ( $enmse_shareoptions == "light" ) { ?>
	background: url('../images/interface/se_twitter_light.png') no-repeat;
	<?php } else { ?>
	background: url('../images/interface/se_twitter_dark.png') no-repeat;
	<?php } ?>
	<?php if ( $enmse_font == "verdana" ) { 
		echo "background-position: 6px 6px;";
	} else {
		echo "background-position: 8px 6px;";
	}; ?>
	background-color: #<?php echo $enmse_sharebuttonbackground; ?>;
}

#seriesengine .enmse-share-details.modern ul li.enmse-twitter a {
		background-image: none;
		background-color: #<?php echo $enmse_sharebuttonbackground; ?>;
}

#seriesengine .enmse-share-details.modern ul li.enmse-twitter a:before {
		font-family: FontAwesome;
		content: "\f099";
		opacity: 0.5;
}

#seriesengine .enmse-share-details.modern ul li.enmse-twitter a:hover:before {
		font-family: FontAwesome;
		content: "\f099";
		opacity: 1;
}

#seriesengine .enmse-share-details ul li.enmse-share-link a {
	<?php if ( $enmse_shareoptions == "light" ) { ?>
	background: url('../images/interface/se_link_light.png') no-repeat;
	<?php } else { ?>
	background: url('../images/interface/se_link_dark.png') no-repeat;
	<?php } ?>
	<?php if ( $enmse_font == "verdana" ) { 
		echo "background-position: 6px 6px;";
	} else {
		echo "background-position: 8px 6px;";
	}; ?>
	background-color: #<?php echo $enmse_sharebuttonbackground; ?>;
}

#seriesengine .enmse-share-details.modern ul li.enmse-share-link a {
		background-image: none;
		background-color: #<?php echo $enmse_sharebuttonbackground; ?>;
}

#seriesengine .enmse-share-details.modern ul li.enmse-share-link a:before {
		font-family: FontAwesome;
		content: "\f064";
		opacity: 0.5;
}

#seriesengine .enmse-share-details.modern ul li.enmse-share-link a:hover:before {
		font-family: FontAwesome;
		content: "\f064";
		opacity: 1;
}

#seriesengine .enmse-share-details ul li.enmse-email a {
	<?php if ( $enmse_shareoptions == "light" ) { ?>
	background: url('../images/interface/se_env_light.png') no-repeat;
	<?php } else { ?>
	background: url('../images/interface/se_env_dark.png') no-repeat;
	<?php } ?>
	<?php if ( $enmse_font == "verdana" ) { 
		echo "background-position: 6px 6px;";
	} else {
		echo "background-position: 8px 6px;";
	}; ?>
	background-color: #<?php echo $enmse_sharebuttonbackground; ?>;
}

#seriesengine .enmse-share-details.modern ul li.enmse-email a {
		background-image: none;
		background-color: #<?php echo $enmse_sharebuttonbackground; ?>;
}

#seriesengine .enmse-share-details.modern ul li.enmse-email a:before {
		font-family: FontAwesome;
		content: "\f0e0";
		opacity: 0.5;
}

#seriesengine .enmse-share-details.modern ul li.enmse-email a:hover:before {
		font-family: FontAwesome;
		content: "\f0e0";
		opacity: 1;
}

/* ----- Related Messages Section ----- */

#seriesengine h3.enmse-more-title {
	color: #<?php echo $enmse_comptitletext; ?>;
	font-size: 20px !important;
	padding: 15px 0 0 0;
}

#seriesengine table.enmse-more-messages {
	width: 100%;
	margin: 15px 0 0 0;
}

#seriesengine table.enmse-more-messages tr {
	border: 0;
	border-radius: 0;
}

#seriesengine table.enmse-more-messages tr.enmse-odd {
	background-color: #<?php echo $enmse_compoddrow; ?>;
}

#seriesengine table.enmse-more-messages td.enmse-title-cell {
	color: #<?php echo $enmse_comprowtitletext; ?>;
	font-size: 13px !important;
	font-weight: 700;
	text-align: left;
	padding: 7px 7px 7px 12px;
}

#seriesengine table.enmse-more-messages .enmse-odd td.enmse-title-cell {
	color: #<?php echo $enmse_compaltrowtitletext; ?>;
	font-size: 13px !important;
	font-weight: 700;
	text-align: left;
	padding: 7px 7px 7px 12px;
}

#seriesengine table.enmse-more-messages td.enmse-date-cell {
	color: #<?php echo $enmse_comprowdatetext; ?>;
	font-size: 13px !important;
	font-weight: 300;
	text-align: left;
	padding: 7px;
}

#seriesengine table.enmse-more-messages .enmse-odd td.enmse-date-cell {
	color: #<?php echo $enmse_compaltrowdatetext; ?>;
	font-size: 13px !important;
	font-weight: 300;
	text-align: left;
	padding: 7px;
}

#seriesengine table.enmse-more-messages td.enmse-alternate-cell, #seriesengine table.enmse-more-messages td.enmse-watch-cell {
	font-size: 13px !important;
	font-weight: 300;
	width: 53px;
	text-align: center;
	padding: 7px 7px 7px 0;
}

#seriesengine table.enmse-more-messages td.enmse-listen-cell {
	font-size: 13px !important;
	font-weight: 300;
	width: 48px;
	text-align: center;
	padding: 7px 12px 7px 0;
}

/* ----- Card Based Related Messages ----- */

#seriesengine .enmse-related-area.card-view {
	padding: 20px 0 0 1.5%;
	display: flex;
	flex-direction: row;
	flex-wrap: wrap;
}

#seriesengine .enmse-message-card {
	display: block; 
	width: 32%;
	padding: 0;
	margin: 0 0 10px 0;
	box-sizing: border-box !important;
	background-color: #<?php echo $enmse_gridrowbg; ?>;
}

#seriesengine .enmse-message-card.enmse-middlecard {
	margin: 0 10px 10px 10px;
}

#seriesengine .enmse-message-card img {
	padding: 0 !important;
	margin: 0 0 15px 0 !important;
	width: 100% !important;
	height: auto !important;
	border: 0 !important;
	/*box-shadow: 0 6px 5px -5px rgba(0, 0, 0, 0.6);*/
}

#seriesengine .enmse-message-card h6 {
	text-align: center !important;
	font-size: 16px !important;
	padding: 0 10px 4px 10px;
	color: #<?php echo $enmse_gridrowtitle; ?>;
}

#seriesengine .enmse-message-card h5 {
	text-align: center !important;
	font-weight: 700 !important;
	font-size: 18px !important;
	padding: 0 10px 6px 10px;
	color: #<?php echo $enmse_gridrowtitle; ?>;
}

#seriesengine .enmse-message-card p.enmse-speaker-name {
	text-align: center !important;
	font-size: 16px !important;
	padding: 0 10px 4px 10px;
	font-style: italic;
	color: #<?php echo $enmse_gridrowtitle; ?>;
}

#seriesengine .enmse-message-card div.enmse-alternate-cell, #seriesengine .enmse-message-card div.enmse-watch-cell {
	display: inline;
}

#seriesengine .enmse-message-card p.enmse-card-links {
	font-size: 15px !important;
	font-weight: 300;
	text-align: center;
	padding: 10px;
	margin: 5px 0 5px 0;
}

#seriesengine .enmse-message-card p.enmse-scripture-info {
	text-align: center;
	font-size: 12px !important;
	padding: 8px 15px 0 15px !important;
	color: #<?php echo $enmse_gridrowbible; ?>;
}

#seriesengine .enmse-message-card p.enmse-hero-extra {
	text-align: center;
	font-size: 12px !important;
	padding: 8px 15px 0 15px !important;
	color: #<?php echo $enmse_gridrowfile; ?>;
}

#seriesengine .enmse-message-card p.enmse-hero-extra a:link, #seriesengine .enmse-message-card p.enmse-hero-extra a:visited, #seriesengine .enmse-message-card p.enmse-hero-extra a:hover, #seriesengine .enmse-message-card p.enmse-hero-extra a:active {
	color: #<?php echo $enmse_gridrowfile; ?>;
}

#seriesengine .enmse-message-card div.enmse-listen-cell {
	display: inline;
}

#seriesengine .enmse-message-card .enmse-spacer {
	display: none;
}

#seriesengine .enmse-message-card .enmse-card-links a {
	display: inline-block;
	width: 66px;
	height: 25px;
	line-height: 25px;
	background-color: #<?php echo $enmse_gridrowmediabg; ?>;
	color: #<?php echo $enmse_gridrowmediatext; ?>;
	text-align: center;
	text-decoration: none !important;
	margin: 0 5px 5px 0;
	font-size: 12px !important;
}

#seriesengine .enmse-message-card .enmse-card-links .enmse-listen-cell a {
	margin: 0;
}

/* ----- Row Based Related Messages ----- */

#seriesengine .enmse-related-area.row-view {
	padding: 20px 0 0 0;
}

#seriesengine .enmse-related-area.row-view table {
	width: 100%;
}

#seriesengine .enmse-related-area.row-view tr.enmse-spacer-row {
	height: 10px;
}

#seriesengine tr.enmse-message-row {
	background-color: #<?php echo $enmse_gridrowbg; ?>;
}

#seriesengine tr.enmse-message-row td.enmse-image-cell {
	width: 20%;
	min-width: 190px;
}

#seriesengine tr.enmse-message-row td.enmse-image-cell img {
	width: 100%;
	height: auto;
	margin: 0 !important;
	padding: 0 !important;
	vertical-align: middle;
}

#seriesengine tr.enmse-message-row td.enmse-info-cell {
	width: 50%;
	vertical-align: middle !important;
	display: table-cell;
}

#seriesengine tr.enmse-message-row td.enmse-links-cell {
	width: 30%;
	min-width: 240px;
	vertical-align: middle !important;
}

#seriesengine tr.enmse-message-row td.enmse-links-cell p {
	text-align: right !important;
	padding: 0 10px 0 0;
}

#seriesengine .enmse-message-row .enmse-spacer {
	display: none;
}

#seriesengine tr.enmse-message-row td.enmse-links-cell a {
	display: inline-block;
	width: 70px;
	height: 25px;
	line-height: 25px;
	background-color: #<?php echo $enmse_gridrowmediabg; ?>;
	color: #<?php echo $enmse_gridrowmediatext; ?>;
	text-align: center;
	text-decoration: none !important;
	margin: 0 5px 0 0;
	font-size: 12px !important;
}

#seriesengine .enmse-message-row .enmse-card-links .enmse-listen-cell a {
	margin: 0;
}

#seriesengine td.enmse-info-cell h5 {
	text-align: left;
	font-weight: 700 !important;
	font-size: 16px !important;
	padding: 0 15px 4px 15px !important;
	color: #<?php echo $enmse_gridrowtitle; ?>;
}

#seriesengine td.enmse-info-cell h6 {
	text-align: left;
	font-size: 14px !important;
	margin: 0 !important;
	padding: 0 15px 0 15px !important;
	color: #<?php echo $enmse_gridrowtitle; ?>;
}

#seriesengine td.enmse-info-cell h6 span.enmse-speaker-style {
	font-style: italic;
}

#seriesengine td.enmse-info-cell p.enmse-scripture-info {
	text-align: left;
	font-size: 12px !important;
	padding: 8px 15px 0 15px !important;
	color: #<?php echo $enmse_gridrowbible; ?>;
}

#seriesengine td.enmse-info-cell p.enmse-hero-extra {
	text-align: left;
	font-size: 12px !important;
	padding: 8px 15px 0 15px !important;
}

#seriesengine td.enmse-info-cell p.enmse-hero-extra a:link, #seriesengine td.enmse-info-cell p.enmse-hero-extra a:visited, #seriesengine td.enmse-info-cell p.enmse-hero-extra a:hover, #seriesengine td.enmse-info-cell p.enmse-hero-extra a:active {
	color: #<?php echo $enmse_gridrowfile; ?>;
}

/* Medium */

#seriesengine.se-medium .enmse-related-area.row-view {
	padding: 20px 0 0 1.5%;
}

#seriesengine.se-medium .enmse-related-area.row-view table {
	width: 100%;
	display: flex;
	flex-direction: row;
	flex-wrap: wrap;
}

#seriesengine.se-medium .enmse-related-area.row-view tr.enmse-spacer-row {
	display: none;
}

#seriesengine.se-medium tr.enmse-message-row {
	display: inline-block;
	width: 48%;
	margin: 0 3px 10px 3px;
	padding: 0;
	vertical-align: top;
	height: inherit;
}

#seriesengine.se-medium tr.enmse-message-row td.enmse-image-cell {
	width: 100%;
	display: block;
}

#seriesengine.se-medium tr.enmse-message-row td.enmse-info-cell {
	width: 100% !important;
	display: block;
	vertical-align: none !important;
}

#seriesengine.se-medium tr.enmse-message-row td.enmse-links-cell {
	width: 100%;
	display: block;
	min-width: 0;
	vertical-align: none !important;
}

#seriesengine.se-medium tr.enmse-message-row td.enmse-links-cell p {
	text-align: center !important;
	margin: 15px 0 15px 0;
}

#seriesengine.se-medium td.enmse-info-cell h5 {
	text-align: center;
	padding: 15px 15px 0 15px !important;
}

#seriesengine.se-medium td.enmse-info-cell h6 {
	text-align: center;
	padding: 5px 15px 0 15px !important;
}

#seriesengine.se-medium td.enmse-info-cell p.enmse-scripture-info {
	text-align: center;
	padding: 8px 15px 0 15px !important;
}

#seriesengine.se-medium td.enmse-info-cell p.enmse-hero-extra {
	text-align: center;
	padding: 8px 15px 0 15px !important;
}

/* ----- Pagination ----- */

#seriesengine .se-pagination {
	text-align: center;
	padding: 10px 0 0 0;
	<?php if ( $enmse_font == "arial" ) { 
		echo "font-family: Arial, Helvetica, sans-serif !important;";
	} elseif ( $enmse_font == "times" ) {
		echo "font-family: Times New Roman, Times New Roman, serif !important;";
	} elseif ( $enmse_font == "georgia" ) {
		echo "font-family: Georgia, Georgia, serif !important;";
	} elseif ( $enmse_font == "verdana" ) {
		echo "font-family: Verdana, Geneva, sans-serif !important;";
	} elseif ( $enmse_font == "lucida" ) {
		echo "font-family: Lucida Sans Unicode, Lucida Grande, sans-serif !important;";
	} elseif ( $enmse_font == "tahoma" ) {
		echo "font-family: Tahoma, Geneva, sans-serif !important;";
	} elseif ( $enmse_font == "trebuchet" ) {
		echo "font-family: Trebuchet MS, Trebuchet MS, sans-serif !important;";
	} elseif ( $enmse_font == "custom" ) {
		echo "font-family: " . $enmse_customfont . ";";
	} ?>
	width: 100%;
}

#seriesengine .page-numbers.current {
	display: inline-block;
	width: 30px;
	height: 30px;
	line-height: 30px;
	text-align: center;
	background-color: #<?php echo $enmse_pagenumberselectedbg; ?>;
	text-decoration: none;
	color: #<?php echo $enmse_pagenumberselectedtext; ?>;
	border-radius: 15px;
	padding: 0;
	font-size: 14px !important;
}

#seriesengine a.page-numbers {
	display: inline-block;
	width: 30px;
	height: 30px;
	line-height: 30px;
	text-align: center;
	text-decoration: none;
	color: #<?php echo $enmse_pagenumber; ?>;
	border-radius: 15px;
	padding: 0;
	font-size: 14px !important;
}

#seriesengine a.page-numbers span {
	display: none;
}

#seriesengine a.page-numbers.wide {
	display: inline-block;
	width: 45px;
	height: 30px;
	line-height: 30px;
	text-align: center;
	text-decoration: none;
	color: #<?php echo $enmse_pagenumber; ?>;
	border-radius: 15px;
	padding: 0;
	font-size: 14px !important;
}

#seriesengine .displaying-num {
	display: none;
}

#seriesengine a.next.page-numbers, #seriesengine a.previous.page-numbers {
	display: inline-block;
	width: 30px;
	height: 30px;
	line-height: 30px;
	text-align: center;
	background-color: #<?php echo $enmse_pagebuttonbg; ?>;
	text-decoration: none;
	color: #<?php echo $enmse_pagebuttontext; ?>;
	border-radius: 15px;
	padding: 0;
	font-size: 14px !important;
}

#seriesengine .se-pagination.ge-small .page-numbers.current, #seriesengine .se-pagination.ge-small .page-numbers.number, #seriesengine .se-pagination.ge-small a.page-numbers.wide {
	display: none;
}

<?php if ( $enmse_language == 1 ) { ?>
#seriesengine .se-pagination.ge-small a.next.page-numbers, #seriesengine .se-pagination.ge-small a.previous.page-numbers {
	display: inline-block;
	width: 70px;
	height: 30px;
	line-height: 30px;
	text-align: center;
	text-decoration: none;
	border-radius: 15px;
	padding: 0;
	text-transform: uppercase;
}


#seriesengine .se-pagination.ge-small a.page-numbers span {
	display: inline;
}
<?php } ?>

/* ----- AJAX Loading Indicator ----- */

#seriesengine .enmse-content-container {
	z-index: 5; 
	line-height: 0;
}

#seriesengine .enmse-content-container.enmse-opaque, #seriesengine .enmse-related-area.enmse-opaque, #seriesengine .enmse-archive-container.enmse-opaque {
	opacity: 0.2; 
}

#seriesengine .enmse-loading-icon {
	width: 170px;
	height: 96px;
	position: absolute;
	background-color: #e1e1e1;
	z-index: 100;
	border-radius: 10px;
	<?php if ( $enmse_loadingicon == "light" ) { ?>
	background: url('../images/interface/light_load.png') no-repeat;
	<?php } else { ?>
	background: url('../images/interface/dark_load.png') no-repeat;
	<?php } ?>
	background-position: center 30px;
	background-color: #<?php echo $enmse_loadingbackground; ?>;
	color: #<?php echo $enmse_loadingtext; ?>;
	margin: 100px 0 0 -85px;
	left: 50%;
	line-height: 0;
}

#seriesengine .enmse-loading-icon p {
	-webkit-box-sizing: content-box;
	-moz-box-sizing: content-box;
	box-sizing: content-box;
	margin: 10px 0 0 0;
	width: 150px;
	padding: 0 10px 0 10px;
	font-size: 14px !important;
	text-align: center;
	word-wrap: break-word !important;
}

#seriesengine .enmse-loading-icon img {
	width: 54px;
	height: 55px;
	margin: 5px 0 0 58px;
	box-shadow: none;
}

/* ----- Share Link Box ----- */

#seriesengine .enmse-copy-link-box {
	background-color: #<?php echo $enmse_sharelinkbackground; ?>;
	position: absolute;
	margin: 0 0 0 -160px;
	width: 320px;
    left: 50%;
	padding: 10px 10px 14px 10px;
	border-radius: 10px;
	z-index: 100;
	line-height: 0;
}

#seriesengine .enmse-copy-link-box h4 {
	color: #<?php echo $enmse_sharelinktext; ?>;
	font-size: 15px !important;
	font-weight: 700;
	text-align: center;
	margin: 0 0 15px 0;
}

#seriesengine .enmse-copy-link-box p {
	color: #<?php echo $enmse_sharelinktext; ?>;
	font-size: 14px !important;
	text-align: center;
	margin: 0 0 20px 0;
}

#seriesengine .enmse-copy-link-box a.enmse-copy-link-done {
	background-color: #<?php echo $enmse_sharelinkbuttonbackground; ?>;
	color: #<?php echo $enmse_sharelinkbuttontext; ?>;
	text-decoration: none;
	text-align: center;
	font-size: 13px !important;
	display: block;
	width: 120px;
	height: 26px;
	line-height: 26px;
	border-radius: 13px;
	margin: 0 auto;
	text-transform: uppercase;
}

/* ----- Series Archives ----- */

#seriesengine table.enmse-archive-table {
	width: 100%;
	margin: 15px 0 0 0;
}

#seriesengine table.enmse-archive-table tr.enmse-archive-odd {
	background-color: #<?php echo $enmse_archiverow; ?>;
}

#seriesengine table.enmse-archive-table td.enmse-archive-title-cell {
	color: #<?php echo $enmse_archiveseriestitle; ?>;
	font-size: 13px !important;
	font-weight: 700;
	text-align: left;
	padding: 14px 7px 14px 12px;
}

#seriesengine table.enmse-archive-table td.enmse-archive-date-cell {
	color: #<?php echo $enmse_archivedatecount; ?>;
	font-size: 13px !important;
	font-weight: 300;
	text-align: left;
	padding: 14px 7px 14px 7px;
}

#seriesengine table.enmse-archive-table td.enmse-archive-count-cell {
	color: #<?php echo $enmse_archivedatecount; ?>;
	font-size: 13px !important;
	font-weight: 300;
	text-align: left;
	padding: 14px 7px 14px 7px;
}

#seriesengine table.enmse-archive-table td.enmse-explore-cell {
	color: #<?php echo $enmse_archivelinks; ?>;
	font-size: 13px !important;
	font-weight: 300;
	text-align: right;
	padding: 14px 12px 14px 7px;
}

#seriesengine #enmse-archive-thumbnails {
	width: 100%;
	margin: 20px 0 0 1.5%;
	display: flex;
	flex-direction: row;
	flex-wrap: wrap;
}

#seriesengine #enmse-archive-thumbnails .enmse-archive-thumb {
	display: inline-block; 
	vertical-align: top;
	width: 32%;
	padding: 0;
	margin: 0 0 10px 0;
	box-sizing: border-box !important;
	float: left;
	background-color: #<?php echo $enmse_archiverow; ?>;
}

#seriesengine #enmse-archive-thumbnails .enmse-archive-thumb.middle {
	margin: 0 10px 10px 10px;
}

#seriesengine #enmse-archive-thumbnails .enmse-archive-thumb img {
	padding: 0;
	margin: 0 0 15px 0;
	width: 100%;
	height: auto;
	border: 0;
	box-shadow: none;
}

#seriesengine #enmse-archive-thumbnails .enmse-archive-thumb h4 {
	text-align: center;
	font-size: 16px !important;
	padding: 0 10px 6px 10px;
	font-weight: 700;
	color: #<?php echo $enmse_archiveseriestitle; ?>;
}

#seriesengine #enmse-archive-thumbnails .enmse-archive-thumb h5 {
	text-align: center;
	font-size: 14px !important;
	padding: 0 0 4px 0;
	font-weight: 300;
	color: #<?php echo $enmse_archivedatecount; ?>;
}

#seriesengine #enmse-archive-thumbnails .enmse-archive-thumb p {
	text-align: center;
	font-size: 14px !important;
	font-weight: 300;
	font-style: italic;
	padding: 0 0 6px 0;
	color: #<?php echo $enmse_archivedatecount; ?>;
}

#seriesengine #enmse-archive-thumbnails .enmse-archive-thumb p.enmse-archive-link {
	text-align: center;
	font-size: 14px !important;
	font-weight: 300;
	font-style: normal;
	padding: 0 0 20px 0;
}

#seriesengine #enmse-archive-thumbnails .enmse-archive-thumb p.enmse-archive-link a {
	color: #<?php echo $enmse_archivelinks; ?>
}

/* ----- Powered By ----- */

#seriesengine h3.enmse-poweredby {
	<?php if ( $enmse_poweredby == "hide" ) { ?>display: none;<?php } ?>
	margin: 20px auto 0 auto !important;
	text-indent: -9000px;
	width: 148px;
	height: 40px;
	<?php if ( $enmse_poweredby == "light" ) { ?>
	background: url('../images/interface/se_light_poweredby.png') no-repeat;	
	<?php } elseif ( $enmse_poweredby == "dark" ) { ?>
	background: url('../images/interface/se_dark_poweredby.png') no-repeat;
	<?php } ?>
	float: right;
}

#seriesengine h3.enmse-poweredby a {
	display: block;
	<?php if ( $enmse_poweredby == "hide" ) { ?>display: none;<?php } ?>
	width: 148px;
	height: 40px;
}

#seriesengine p.enmse-poweredbytext {
	margin: 20px 0 20px 0;
	<?php if ( $enmse_poweredby == "hide" ) { ?>display: none;<?php } ?>
	text-align: right;
	font-size: 12px !important;
	color: #<?php echo $enmse_poweredbytext; ?>;
}

#seriesengine p.enmse-poweredbytext a {
<?php if ( $enmse_poweredby == "hide" ) { ?>display: none;<?php } ?>
	color: #<?php echo $enmse_poweredbytext; ?>;
}

@media 
(-webkit-min-device-pixel-ratio: 2) {

#seriesengine ul.enmse-player-options li.enmse-share-this a, #seriesengine ul.enmse-player-options li.enmse-hide-share-this a {
	<?php if ( $enmse_playeroptions == "dark" ) { ?>
	color: #4e4e4e;
	background: url('../images/interface/dark_share2x.png') no-repeat;
	background-size: 13px 12px;
	background-position: 0 9px;
	<?php } else { ?>
	color: #d9d9d9;
	background: url('../images/interface/light_share2x.png') no-repeat;
	background-size: 13px 12px;
	background-position: 0 9px;	
	<?php } ?>
}

#seriesengine ul.enmse-player-options li.enmse-extras a {
	<?php if ( $enmse_playeroptions == "dark" ) { ?>
	background: url('../images/interface/dark_download2x.png') no-repeat;
	background-size: 11px 11px;
	background-position: 0 9px;		
	color: #4e4e4e;
	<?php } else { ?>
	background: url('../images/interface/light_download2x.png') no-repeat;
	background-size: 11px 11px;
	background-position: 0 9px;
	color: #d9d9d9;
	<?php } ?>
}

#seriesengine ul.enmse-player-options li.enmse-details a.enmse-hide-details {
	<?php if ( $enmse_playeroptions == "dark" ) { ?>
	background: url('../images/interface/dark_up2x.png') no-repeat;
	background-size: 11px 11px;
	background-position: 0 9px;		
	color: #4e4e4e;
	<?php } else { ?>
	background: url('../images/interface/light_up2x.png') no-repeat;
	background-size: 11px 11px;
	background-position: 0 9px;
	color: #d9d9d9;
	<?php } ?>
}

#seriesengine ul.enmse-player-options li.enmse-details a.enmse-show-details {
	<?php if ( $enmse_playeroptions == "dark" ) { ?>
	background: url('../images/interface/dark_down2x.png') no-repeat;
	background-size: 11px 11px;
	background-position: 0 9px;		
	color: #4e4e4e;
	<?php } else { ?>
	background: url('../images/interface/light_down2x.png') no-repeat;
	background-size: 11px 11px;
	background-position: 0 9px;		
	color: #d9d9d9;
	<?php } ?>
}

#seriesengine .enmse-share-details ul li.enmse-email a {
	<?php if ( $enmse_shareoptions == "light" ) { ?>
	background: url('../images/interface/se_env_light2x.png') no-repeat;
	background-size: 13px 13px;
	<?php } else { ?>
	background: url('../images/interface/se_env_dark2x.png') no-repeat;
	background-size: 13px 13px;
	<?php } ?>
	<?php if ( $enmse_font == "verdana" ) { 
		echo "background-position: 6px 6px;";
	} else {
		echo "background-position: 8px 6px;";
	}; ?>
	background-color: #<?php echo $enmse_sharebuttonbackground; ?>;
}

#seriesengine .enmse-share-details ul li.enmse-share-link a {
	<?php if ( $enmse_shareoptions == "light" ) { ?>
	background: url('../images/interface/se_link_light2x.png') no-repeat;
	background-size: 13px 13px;
	<?php } else { ?>
	background: url('../images/interface/se_link_dark2x.png') no-repeat;
	background-size: 13px 13px;
	<?php } ?>
	<?php if ( $enmse_font == "verdana" ) { 
		echo "background-position: 6px 6px;";
	} else {
		echo "background-position: 8px 6px;";
	}; ?>
	background-color: #<?php echo $enmse_sharebuttonbackground; ?>;
}

#seriesengine .enmse-share-details ul li.enmse-twitter a {
	<?php if ( $enmse_shareoptions == "light" ) { ?>
	background: url('../images/interface/se_twitter_light2x.png') no-repeat;
	background-size: 13px 13px;
	<?php } else { ?>
	background: url('../images/interface/se_twitter_dark2x.png') no-repeat;
	background-size: 13px 13px;
	<?php } ?>
	<?php if ( $enmse_font == "verdana" ) { 
		echo "background-position: 6px 6px;";
	} else {
		echo "background-position: 8px 6px;";
	}; ?>
	background-color: #<?php echo $enmse_sharebuttonbackground; ?>;
}

#seriesengine .enmse-share-details ul li.enmse-facebook a {
	<?php if ( $enmse_shareoptions == "light" ) { ?>
	background: url('../images/interface/se_facebook_light2x.png') no-repeat;
	background-size: 13px 13px;
	<?php } else { ?>
	background: url('../images/interface/se_facebook_dark2x.png') no-repeat;
	background-size: 13px 13px;
	<?php } ?>
	<?php if ( $enmse_font == "verdana" ) { 
		echo "background-position: 6px 6px;";
	} else {
		echo "background-position: 8px 6px;";
	}; ?>
	background-color: #<?php echo $enmse_sharebuttonbackground; ?>;
}

#seriesengine h3.enmse-poweredby {
	<?php if ( $enmse_poweredby == "light" ) { ?>
	background: url('../images/interface/se_light_poweredby2x.png') no-repeat;
	background-size: 148px 40px;	
	<?php } elseif ( $enmse_poweredby == "dark" ) { ?>
	background: url('../images/interface/se_dark_poweredby2x.png') no-repeat;
	background-size: 148px 40px;
	<?php } ?>
}

#seriesengine .enmse-loading-icon {
	<?php if ( $enmse_loadingicon == "light" ) { ?>
	background: url('../images/interface/light_load2x.png') no-repeat;
	<?php } else { ?>
	background: url('../images/interface/dark_load2x.png') no-repeat;
	<?php } ?>
	background-size: 54px 55px;
	background-position: center 30px;
	background-color: #<?php echo $enmse_loadingbackground; ?>;
}
}

/* ----- For Large Device Views ----- */

@media (min-width: <?php echo $enmse_responsivefull; ?>px) {

	/* ----- Series/Topic Selector ----- */


	#seriesengine .enmse-selector select {
		font-size: 15px !important;
	}

	/* ----- Message Title/Speaker ----- */

	#seriesengine h2.enmse-message-title {
		font-size: 23px !important;
	}

	#seriesengine h3.enmse-message-meta {
		font-size: 18px !important;
	}

	/* ----- Tabs and Buttons ----- */

	#seriesengine ul.enmse-player-tabs { /* Tabs */
		height: 31px;
	}

	#seriesengine ul.enmse-player-tabs li {
		width: 104px;
		height: 31px;
		font-size: 16px !important;
	}

	#seriesengine ul.enmse-player-tabs li a {
		width: 104px;
		height: 31px;
		line-height: 31px;
	}

	#seriesengine ul.enmse-player-options li.enmse-details {
		width: 75px;
		font-size: 15px !important;	
	}

	#seriesengine ul.enmse-player-options li.enmse-extras {
		width: 71px;
		font-size: 15px !important;	
	}

	#seriesengine ul.enmse-player-options li.enmse-share-this {
		width: 75px;
		font-size: 15px !important;
	}

	#seriesengine ul.enmse-player-options li.enmse-details a {
		width: 75px;
	}

	#seriesengine ul.enmse-player-options li.enmse-extras a {
		width: 71px;
		}

	#seriesengine ul.enmse-player-options li.enmse-share-this a, #seriesengine ul.enmse-player-options li.enmse-hide-share-this a {
		width: 75px;
		}

	/* ----- Message Details ----- */

	#seriesengine .enmse-player .enmse-player-details h3 {
		font-size: 18px !important;
	}

	#seriesengine .enmse-player .enmse-modern-player-details h3 {
		font-size: 24px !important;
	}

	#seriesengine .enmse-player .enmse-player-details p {
		font-size: 15px !important;
	}

	#seriesengine .enmse-player .enmse-player-details p.enmse-message-description {
		font-size: 15px !important;
	}

	#seriesengine .enmse-player .enmse-player-details p.enmse-related-topics {
		font-size: 14px !important;
	}

	#seriesengine .enmse-player .enmse-modern-player-details p {
		font-size: 16px !important;
	}

	#seriesengine .enmse-player .enmse-modern-player-details p.enmse-message-description {
		font-size: 16px !important;
	}

	#seriesengine .enmse-player .enmse-modern-player-details p.enmse-related-topics {
		font-size: 16px !important;
	}

	#seriesengine .enmse-player .enmse-player-details p.enmse-downloads {
		font-size: 14px !important;
	}

	#seriesengine .enmse-player .enmse-player-extras p.enmse-downloads {
		font-size: 14px !important;
	}

	#seriesengine .enmse-player .enmse-modern-player-details p.enmse-downloads {
		font-size: 16px !important;
	}

	/* ----- Share Options ----- */

	#seriesengine .enmse-share-details ul {
		width: 470px;
	}

	#seriesengine .enmse-share-details ul li {
		font-size: 14px !important;
	}

	#seriesengine .enmse-share-details ul li a {
		width: 76px;	
	}

	/* ----- Related Messages Section ----- */

	#seriesengine h3.enmse-more-title {
		font-size: 20px !important;
	}

	#seriesengine table.enmse-more-messages td.enmse-title-cell {
		font-size: 15px !important;
	}

	#seriesengine table.enmse-more-messages .enmse-odd td.enmse-title-cell {
		font-size: 15px !important;
	}

	#seriesengine table.enmse-more-messages td.enmse-date-cell {
		font-size: 15px !important;
	}

	#seriesengine table.enmse-more-messages .enmse-odd td.enmse-date-cell {
		font-size: 15px !important;
	}

	#seriesengine table.enmse-more-messages td.enmse-alternate-cell, #seriesengine table.enmse-more-messages td.enmse-watch-cell {
		font-size: 15px !important;
		width: 56px;
	}

	#seriesengine table.enmse-more-messages td.enmse-listen-cell {
		font-size: 15px !important;
		width: 52px;
	}

	/* ----- Card Based Related Messages ----- */

	#seriesengine .enmse-message-card .enmse-card-links a {
		width: 76px;
		height: 27px;
		line-height: 27px;
		font-size: 13px !important;
	}

	/* ----- Row Based Related Messages ----- */

	#seriesengine tr.enmse-message-row td.enmse-image-cell {
		width: 20%;
	}

	#seriesengine tr.enmse-message-row td.enmse-info-cell {
		width: 45%;
	}

	#seriesengine tr.enmse-message-row td.enmse-links-cell {
		width: 35%;
	}

	#seriesengine tr.enmse-message-row td.enmse-links-cell a {
		width: 90px;
		height: 30px;
		line-height: 30px;
		font-size: 16px !important;
	}

	#seriesengine td.enmse-info-cell h5 {
		font-size: 18px !important;
	}

	#seriesengine td.enmse-info-cell h6 {
		font-size: 16px !important;
	}

	#seriesengine td.enmse-info-cell p.enmse-scripture-info {
		font-size: 12px !important;
	}

	/* ----- Pagination ----- */


	#seriesengine .page-numbers.current {
		font-size: 15px !important;
	}

	#seriesengine a.page-numbers {
		font-size: 15px !important;
	}

	#seriesengine a.page-numbers.wide {
		font-size: 15px !important;
	}

	#seriesengine a.next.page-numbers, #seriesengine a.previous.page-numbers {
		font-size: 15px !important;
	}

	/* ----- AJAX Loading Indicator ----- */

	#seriesengine .enmse-loading-icon p {
		font-size: 16px !important;
	}

	/* ----- Share Link Box ----- */

	#seriesengine .enmse-copy-link-box h4 {
		font-size: 17px !important;
	}

	#seriesengine .enmse-copy-link-box p {
		font-size: 16px !important;
	}

	#seriesengine .enmse-copy-link-box a.enmse-copy-link-done {
		font-size: 15px !important;
		width: 130px;
		height: 31px;
		line-height: 31px;
	}

	/* ----- Series Archives ----- */

	#seriesengine h3.enmse-archive-title {
		font-size: 23px !important;
	}

	#seriesengine table.enmse-archive-table td.enmse-archive-title-cell {
		font-size: 16px !important;
	}

	#seriesengine table.enmse-archive-table td.enmse-archive-date-cell {
		font-size: 15px !important;
	}

	#seriesengine table.enmse-archive-table td.enmse-archive-count-cell {
		font-size: 15px !important;
	}

	#seriesengine table.enmse-archive-table td.enmse-explore-cell {
		font-size: 16px !important;
	}

	#seriesengine #enmse-archive-thumbnails .enmse-archive-thumb h4 {
		font-size: 18px !important;
	}

	#seriesengine #enmse-archive-thumbnails .enmse-archive-thumb h5 {
		font-size: 15px !important;
	}

	#seriesengine #enmse-archive-thumbnails .enmse-archive-thumb p {
		font-size: 15px !important;
	}

	#seriesengine #enmse-archive-thumbnails .enmse-archive-thumb p.enmse-archive-link {
		font-size: 15px !important;
	}

}

/* ----- For Themes with Mobile Views ----- */

@media (max-width: <?php echo $enmse_responsivemobile; ?>px) {
	#seriesengine {
		margin: 0;
		padding: 0;
		width: inherit;
	}

	#seriesengine h4.enmse-more-messages-title {
		display: none;
	}

	#seriesengine .enmse-selector {
		text-align: center;
		padding: 8px 0 8px 0;
	}

	#seriesengine .enmse-selector.four select:first-child, #seriesengine .enmse-selector.three select:first-child, #seriesengine .enmse-selector.two select:first-child, #seriesengine .enmse-selector.one select:first-child {
		border: 1px solid #<?php echo $enmse_explorerselectborder; ?>;
		background-color: #<?php echo $enmse_explorerselect; ?>;
		color: #<?php echo $enmse_explorerselecttext; ?>;
		width: 90% !important;
		font-size: 16px !important;
		vertical-align: middle;
		height: 20px;
		display: inline-block;
		margin: 0;
	}

	#seriesengine .enmse-selector.four select, #seriesengine .enmse-selector.three select, #seriesengine .enmse-selector.two select, #seriesengine .enmse-selector.one select {
		border: 1px solid #<?php echo $enmse_explorerselectborder; ?>;
		background-color: #<?php echo $enmse_explorerselect; ?>;
		color: #<?php echo $enmse_explorerselecttext; ?>;
		width: 90% !important;
		font-size: 16px !important;
		vertical-align: middle;
		height: 20px;
		display: inline-block;
		margin: 6px 0 0 0;
	}
	
	#seriesengine h2.enmse-message-title {
		color: #<?php echo $enmse_mstitletext; ?>;
		font-size: inherit;
		font-weight: inherit;
		margin: 10px 0 10px 0;
		text-align: center;
	}

	#seriesengine h3.enmse-message-meta {
		color: #<?php echo $enmse_msdatetext; ?>;
		float: none;
		font-size: inherit;
		font-style: inherit;
		margin: 10px 0 10px 0;
		padding: 0;
		text-align: center;
	}
	
	#seriesengine h3.enmse-more-title {
		font-size: 19px !important;
		text-align: center;
		padding: 20px 0 10px 0;
	}
	
	#seriesengine .enmse-player {
		
		padding: 0;
		margin: 15px 0 15px 0;
		line-height: 0;
		clear: both;
	}
	
	#seriesengine ul.enmse-player-tabs { /* Tabs */
		
	}

	#seriesengine .enmse-copy-link-box {
		position: absolute;
		margin: 0 0 0 -115px;
		width: 230px;
	    left:46%;
		padding: 10px 10px 14px 10px;
		border-radius: 10px;
		z-index: 100;
		line-height: 0;
	}

	/* ----- Tabs and Buttons ----- */

	#seriesengine ul.enmse-player-tabs { /* Tabs */
		margin: 0 auto;
		text-align: center;
		padding: 0;
		height: 26px;
		position: static;
	}

	#seriesengine ul.enmse-player-tabs li:first-child {
		display: inline-block;
		list-style-type: none;
		margin: 0;
		width: 28%;
		height: 26px;
		font-size: 13px !important;
	}

	#seriesengine ul.enmse-player-tabs li {
		display: inline-block;
		list-style-type: none;
		<?php if ( $enmse_font == "lucida" || $enmse_font == "trebuchet"|| $enmse_font == "verdana" ) { 
			echo "margin: 0 0 0 2px;";
		} else {
			echo "margin: 0 0 0 4px;";
		}; ?>
		width: 28%;
		height: 26px;
		font-size: 13px !important;
	}

	#seriesengine ul.enmse-player-tabs li a {
		background-color: #<?php echo $enmse_playertabbackground; ?>;
		color: #<?php echo $enmse_playertabtext; ?>;
		display: block;
		width: 100%;
		height: 26px;
		line-height: 26px;
		text-decoration: none;
		text-align: center;
	}

	#seriesengine ul.enmse-player-tabs li.enmse-tab-selected a {
		background-color: #<?php echo $enmse_playerselectedtabbackground; ?>;
		color: #<?php echo $enmse_playerselectedtabtext; ?>;
	} 

	#seriesengine ul.enmse-player-options { /* Options */
		margin: 0;
		text-align: center;
		padding: 0;
		position: static;
		height: 35px;
		padding: 8px 0 0 7px;
	}

	#seriesengine ul.enmse-player-options li.enmse-details {
		display: inline-block;
		list-style-type: none;
		margin: 0 4px 0 0;
		width: 70px;
		height: 26px;
		<?php if ( $enmse_font == "lucida" || $enmse_font == "courier" || $enmse_font == "verdana" ) { 
			echo "font-size: 12px !important;";
		} else {
			echo "font-size: 13px !important;";
		}; ?>
	}

	#seriesengine ul.enmse-player-options li.enmse-extras {
		display: inline-block;
		list-style-type: none;
		margin: 0 4px 0 0;
		width: 66px;
		height: 26px;
		<?php if ( $enmse_font == "lucida" || $enmse_font == "courier" || $enmse_font == "verdana" ) { 
			echo "font-size: 12px !important;";
		} else {
			echo "font-size: 13px !important;";
		}; ?>	
	}

	#seriesengine ul.enmse-player-options li.enmse-share-this {
		display: inline-block;
		list-style-type: none;
		width: 60px;
		height: 26px;
		<?php if ( $enmse_font == "lucida" || $enmse_font == "courier" || $enmse_font == "verdana" ) { 
			echo "font-size: 12px !important;";
		} else {
			echo "font-size: 13px !important;";
		}; ?>
		margin: 0;
	}

	#seriesengine ul.enmse-player-options li.enmse-details a {
		display: block;
		width: 70px;
		height: 30px;
		line-height: 30px;
		text-decoration: none;
		text-align: center;
	}

	#seriesengine ul.enmse-player-options li.enmse-details a.enmse-hide-details {
		<?php if ( $enmse_playeroptions == "dark" ) { ?>
		background: url('../images/interface/dark_up.png') no-repeat;
		background-position: 0 9px;		
		color: #4e4e4e;
		<?php } else { ?>
		background: url('../images/interface/light_up.png') no-repeat;
		background-position: 0 9px;
		color: #d9d9d9;
		<?php } ?>
	}

	#seriesengine ul.enmse-player-options li.enmse-details a.enmse-show-details {
		<?php if ( $enmse_playeroptions == "dark" ) { ?>
		background: url('../images/interface/dark_down.png') no-repeat;
		background-position: 0 9px;		
		color: #4e4e4e;
		<?php } else { ?>
		background: url('../images/interface/light_down.png') no-repeat;
		background-position: 0 9px;		
		color: #d9d9d9;
		<?php } ?>
	}

	#seriesengine ul.enmse-player-options li.enmse-extras a {
		display: block;
		width: 66px;
		height: 30px;
		line-height: 30px;
		text-decoration: none;
		text-align: center;
		<?php if ( $enmse_playeroptions == "dark" ) { ?>
		background: url('../images/interface/dark_download.png') no-repeat;
		background-position: 0 9px;		
		color: #4e4e4e;
		<?php } else { ?>
		background: url('../images/interface/light_download.png') no-repeat;
		background-position: 0 9px;
		color: #d9d9d9;
		<?php } ?>
	}

	#seriesengine ul.enmse-player-options li.enmse-share-this a, #seriesengine ul.enmse-player-options li.enmse-hide-share-this a {
		display: block;
		width: 43px;
		height: 30px;
		line-height: 30px;
		text-decoration: none;
		text-align: left;
		padding: 0 0 0 17px;
		<?php if ( $enmse_playeroptions == "dark" ) { ?>
		color: #4e4e4e;
		background: url('../images/interface/dark_share.png') no-repeat;
		background-position: 0 9px;
		<?php } else { ?>
		color: #d9d9d9;
		background: url('../images/interface/light_share.png') no-repeat;
		background-position: 0 9px;	
		<?php } ?>
	}

	#seriesengine .enmse-player .enmse-player-details {
		padding: 0 0 10px 0;
	}

	#seriesengine .enmse-player .enmse-player-extras {
		padding: 0 0 10px 0;
	}

	/* ----- Share Options ----- */

	#seriesengine .enmse-share-details {
		padding: 0 8px 0 8px;
		margin: 0 14px 0 14px;
		height: 42px;
		line-height: 0;
		text-align: center;
	}

	#seriesengine .enmse-share-details.modern {
		padding: 0 8px 0 8px;
		margin: 0 14px 0 14px;
		height: 62px;
		line-height: 0;
	}

	#seriesengine .enmse-share-details ul {
		width: 186px;
		text-align: center;
		margin: 12px auto 8px auto;
	}

	#seriesengine .enmse-share-details ul li:first-child {
		list-style-type: none;
		display: inline-block;
		font-size: 12px !important;
		margin: 0;
		width: 39px;
		float: left;
	}

	#seriesengine .enmse-share-details.modern ul li:first-child {
		list-style-type: none;
		display: inline-block;
		float: none;
		font-size: 14px !important;
		margin: 12px 2px 0 2px;
		width: auto;
	}

	#seriesengine .enmse-share-details ul li {
		list-style-type: none;
		display: inline-block;
		font-size: 12px !important;
		margin: 0 0 0 10px;
		width: 39px;
		float: left;
	}

	#seriesengine .enmse-share-details ul li.enmse-email {
		margin: 0 0 0 10px;
	}

	#seriesengine .enmse-share-details.modern ul li.enmse-email {
		margin: 12px 0 0 0;
	}

	#seriesengine .enmse-share-details ul li a {
		width: 39px;
		height: 26px;
		line-height: 26px;
		padding: 0;
		border-radius: 13px;
		-moz-border-radius: 13px;
		color: #<?php echo $enmse_sharebuttontext; ?>;
	}

	#seriesengine .enmse-share-details ul li a span {
		display: none;
	}

	#seriesengine .enmse-share-details ul li.enmse-facebook a {
		<?php if ( $enmse_shareoptions == "light" ) { ?>
		background: url('../images/interface/se_facebook_light.png') no-repeat;
		<?php } else { ?>
		background: url('../images/interface/se_facebook_dark.png') no-repeat;
		<?php } ?>
		<?php if ( $enmse_font == "verdana" ) { 
			echo "background-position: 6px 6px;";
		} else {
			echo "background-position: 8px 6px;";
		}; ?>
		background-color: #<?php echo $enmse_sharebuttonbackground; ?>;
	}

	#seriesengine .enmse-share-details ul li.enmse-twitter a {
		<?php if ( $enmse_shareoptions == "light" ) { ?>
		background: url('../images/interface/se_twitter_light.png') no-repeat;
		<?php } else { ?>
		background: url('../images/interface/se_twitter_dark.png') no-repeat;
		<?php } ?>
		<?php if ( $enmse_font == "verdana" ) { 
			echo "background-position: 6px 6px;";
		} else {
			echo "background-position: 8px 6px;";
		}; ?>
		background-color: #<?php echo $enmse_sharebuttonbackground; ?>;
	}

	#seriesengine .enmse-share-details ul li.enmse-share-link a {
		<?php if ( $enmse_shareoptions == "light" ) { ?>
		background: url('../images/interface/se_link_light.png') no-repeat;
		<?php } else { ?>
		background: url('../images/interface/se_link_dark.png') no-repeat;
		<?php } ?>
		<?php if ( $enmse_font == "verdana" ) { 
			echo "background-position: 6px 6px;";
		} else {
			echo "background-position: 8px 6px;";
		}; ?>
		background-color: #<?php echo $enmse_sharebuttonbackground; ?>;
	}

	#seriesengine .enmse-share-details ul li.enmse-email a {
		<?php if ( $enmse_shareoptions == "light" ) { ?>
		background: url('../images/interface/se_env_light.png') no-repeat;
		<?php } else { ?>
		background: url('../images/interface/se_env_dark.png') no-repeat;
		<?php } ?>
		<?php if ( $enmse_font == "verdana" ) { 
			echo "background-position: 6px 6px;";
		} else {
			echo "background-position: 8px 6px;";
		}; ?>
		background-color: #<?php echo $enmse_sharebuttonbackground; ?>;
	}
	
	#seriesengine .enmse-media-container {
		width: inherit;
	}
	
	#seriesengine h3.enmse-poweredby {
		margin: 10px auto 10px auto;
		float: none;
	}
	
	#seriesengine p.enmse-poweredbytext {
		margin: 10px 0 10px 0;
		float: none;
	}
	
	#seriesengine h3.enmse-more-title {
		color: #<?php echo $enmse_comptitletext; ?>;
		padding: 20px 0 15px 0;
	}
	
	#seriesengine table.enmse-more-messages {
		width: 100%;
		margin: 10px 0 0 0;
	}
	
	#seriesengine table.enmse-more-messages td.enmse-title-cell {
		color: #<?php echo $enmse_comprowtitletext; ?>;
		font-size: 13px !important;
		font-weight: 700;
		text-align: left;
		padding: 7px 7px 7px 12px;
		word-wrap: break-word !important;
	}
	
	#seriesengine table.enmse-more-messages td.enmse-date-cell {
		display: none;
	}
	
	#seriesengine table.enmse-more-messages td.enmse-alternate-cell, #seriesengine table.enmse-more-messages td.enmse-watch-cell {
		font-size: 13px !important;
		font-weight: 300;
		width: auto;
		text-align: center;
		padding: 7px 7px 7px 0;
		word-wrap: break-word !important;
	}
	
	#seriesengine table.enmse-more-messages td.enmse-listen-cell {
		font-size: 13px !important;
		font-weight: 300;
		width: auto;
		text-align: center;
		padding: 7px 12px 7px 0;
		word-wrap: break-word !important;
	}

	#seriesengine #enmse-archive-thumbnails .enmse-archive-thumb {
		width: 48%;
	}

	#seriesengine #enmse-archive-thumbnails .enmse-archive-thumb.middle {
		margin: 0 0 10px 0;
	}

	#seriesengine #enmse-archive-thumbnails .enmse-archive-thumb.odd {
		margin: 0 10px 10px 0;
	}

	#seriesengine #enmse-archive-thumbnails .enmse-archive-thumb h4 {
		font-size: 16px !important;
	}

	#seriesengine #enmse-archive-thumbnails .enmse-archive-thumb h5 {
		font-size: 14px !important;
	}

	#seriesengine #enmse-archive-thumbnails .enmse-archive-thumb p {
		font-size: 14px !important;
	}

	#seriesengine #enmse-archive-thumbnails .enmse-archive-thumb p.enmse-archive-link {
		font-size: 14px !important;
	}

	#seriesengine .page-numbers.current, #seriesengine .page-numbers.number, #seriesengine a.page-numbers.wide {
		display: none;
	}

	<?php if ( $enmse_language == 1 ) { ?>
	#seriesengine a.next.page-numbers, #seriesengine a.previous.page-numbers {
		display: inline-block;
		width: 70px;
		height: 30px;
		line-height: 30px;
		text-align: center;
		text-decoration: none;
		border-radius: 15px;
		padding: 0;
		text-transform: uppercase;
	}

	#seriesengine a.page-numbers span {
		display: inline;
	}
	<?php } ?>

	#seriesengine .enmse-audio a#enmse-download {
		display: none;
	}

	#seriesengine .enmse-audio .mejs__container, #seriesengine .enmse-audio .mejs-container {
		width: 92% !important;
	}

	#seriesengine .mejs__video .mejs__controls {
		display: none;
	}

	/* ----- Card Based Related Messages ----- */

	#seriesengine .enmse-related-area.card-view {
		padding: 20px 0 0 2%;
	}

	#seriesengine .enmse-message-card {
		width: 48%;
		margin: 0 0 10px 0 !important;
	}

	#seriesengine .enmse-message-card.enmse-middlecard {
		margin: 0 0 10px 0 !important;
	}

	#seriesengine .enmse-message-card.enmse-oddcard {
		margin: 0 10px 10px 0 !important;
	}

	#seriesengine .enmse-message-card p.enmse-card-links {
		padding: 15px 10px 10px 10px;
	}

	#seriesengine .enmse-message-card .enmse-card-links a {
		width: 76px;
		height: 27px;
		line-height: 27px;
		margin: 0 5px 0 0;
		font-size: 13px !important;
	}

	/* ----- Row Based Related Messages ----- */

	#seriesengine .enmse-related-area.row-view {
		padding: 20px 0 0 1.5%;
	}

	#seriesengine .enmse-related-area.row-view table {
		width: 100%;
		display: flex;
		flex-direction: row;
		flex-wrap: wrap;
	}

	#seriesengine .enmse-related-area.row-view tr.enmse-spacer-row {
		display: none;
	}

	#seriesengine tr.enmse-message-row {
		display: inline-block;
		width: 48%;
		margin: 0 3px 10px 3px;
		padding: 0;
		vertical-align: top;
		height: inherit;
	}

	#seriesengine tr.enmse-message-row td.enmse-image-cell {
		width: 100%;
		display: block;
	}

	#seriesengine tr.enmse-message-row td.enmse-info-cell {
		width: 100% !important;
		display: block;
		vertical-align: none !important;
	}

	#seriesengine tr.enmse-message-row td.enmse-links-cell {
		width: 100%;
		display: block;
		min-width: 0;
		vertical-align: none !important;
	}

	#seriesengine tr.enmse-message-row td.enmse-links-cell p {
		text-align: center !important;
		margin: 15px 0 15px 0;
	}

	#seriesengine td.enmse-info-cell h5 {
		text-align: center;
		padding: 15px 15px 0 15px !important;
	}

	#seriesengine td.enmse-info-cell h6 {
		text-align: center;
		padding: 5px 15px 0 15px !important;
	}

	#seriesengine td.enmse-info-cell p.enmse-scripture-info {
		text-align: center;
		padding: 8px 15px 0 15px !important;
	}

	#seriesengine td.enmse-info-cell p.enmse-hero-extra {
		text-align: center;
		padding: 8px 15px 0 15px !important;
	}

	#seriesengine.se-medium .enmse-related-area.row-view {
		padding: 20px 0 0 0;
	}

	#seriesengine.se-medium tr.enmse-message-row {
		width: 100%;
		margin: 0 0 10px 0 !important;
	}

	#seriesengine.se-medium td.enmse-info-cell h5 {
		text-align: center;
	}

	#seriesengine.se-medium td.enmse-info-cell h6 {
		text-align: center;
	}

	#seriesengine.se-medium td.enmse-info-cell p.enmse-scripture-info {
		text-align: center;
	}

	#seriesengine.se-medium td.enmse-info-cell p.enmse-hero-extra {
		text-align: center;
	}
}

@media 
(-webkit-min-device-pixel-ratio: 2) and (max-width: <?php echo $enmse_responsivemobile; ?>px) {

	#seriesengine ul.enmse-player-options li.enmse-share-this a, #seriesengine ul.enmse-player-options li.enmse-hide-share-this a {
		<?php if ( $enmse_playeroptions == "dark" ) { ?>
		color: #4e4e4e;
		background: url('../images/interface/dark_share2x.png') no-repeat;
		background-size: 13px 12px;
		background-position: 0 9px;
		<?php } else { ?>
		color: #d9d9d9;
		background: url('../images/interface/light_share2x.png') no-repeat;
		background-size: 13px 12px;
		background-position: 0 9px;	
		<?php } ?>
	}

	#seriesengine ul.enmse-player-options li.enmse-extras a {
		<?php if ( $enmse_playeroptions == "dark" ) { ?>
		background: url('../images/interface/dark_download2x.png') no-repeat;
		background-size: 11px 11px;
		background-position: 0 9px;		
		color: #4e4e4e;
		<?php } else { ?>
		background: url('../images/interface/light_download2x.png') no-repeat;
		background-size: 11px 11px;
		background-position: 0 9px;
		color: #d9d9d9;
		<?php } ?>
	}

	#seriesengine ul.enmse-player-options li.enmse-details a.enmse-hide-details {
		<?php if ( $enmse_playeroptions == "dark" ) { ?>
		background: url('../images/interface/dark_up2x.png') no-repeat;
		background-size: 11px 11px;
		background-position: 0 9px;		
		color: #4e4e4e;
		<?php } else { ?>
		background: url('../images/interface/light_up2x.png') no-repeat;
		background-size: 11px 11px;
		background-position: 0 9px;
		color: #d9d9d9;
		<?php } ?>
	}

	#seriesengine ul.enmse-player-options li.enmse-details a.enmse-show-details {
		<?php if ( $enmse_playeroptions == "dark" ) { ?>
		background: url('../images/interface/dark_down2x.png') no-repeat;
		background-size: 11px 11px;
		background-position: 0 9px;		
		color: #4e4e4e;
		<?php } else { ?>
		background: url('../images/interface/light_down2x.png') no-repeat;
		background-size: 11px 11px;
		background-position: 0 9px;		
		color: #d9d9d9;
		<?php } ?>
	}

	#seriesengine .enmse-share-details ul li.enmse-email a {
		<?php if ( $enmse_shareoptions == "light" ) { ?>
		background: url('../images/interface/se_env_light2x.png') no-repeat;
		background-size: 13px 13px;
		<?php } else { ?>
		background: url('../images/interface/se_env_dark2x.png') no-repeat;
		background-size: 13px 13px;
		<?php } ?>
		background-position: center center;
		background-color: #<?php echo $enmse_sharebuttonbackground; ?>;
	}

	#seriesengine .enmse-share-details ul li.enmse-share-link a {
		<?php if ( $enmse_shareoptions == "light" ) { ?>
		background: url('../images/interface/se_link_light2x.png') no-repeat;
		background-size: 13px 13px;
		<?php } else { ?>
		background: url('../images/interface/se_link_dark2x.png') no-repeat;
		background-size: 13px 13px;
		<?php } ?>
		background-position: center center;
		background-color: #<?php echo $enmse_sharebuttonbackground; ?>;
	}

	#seriesengine .enmse-share-details ul li.enmse-twitter a {
		<?php if ( $enmse_shareoptions == "light" ) { ?>
		background: url('../images/interface/se_twitter_light2x.png') no-repeat;
		background-size: 13px 13px;
		<?php } else { ?>
		background: url('../images/interface/se_twitter_dark2x.png') no-repeat;
		background-size: 13px 13px;
		<?php } ?>
		background-position: center center;
		background-color: #<?php echo $enmse_sharebuttonbackground; ?>;
	}

	#seriesengine .enmse-share-details ul li.enmse-facebook a {
		<?php if ( $enmse_shareoptions == "light" ) { ?>
		background: url('../images/interface/se_facebook_light2x.png') no-repeat;
		background-size: 13px 13px;
		<?php } else { ?>
		background: url('../images/interface/se_facebook_dark2x.png') no-repeat;
		background-size: 13px 13px;
		<?php } ?>
		background-position: center center;
		background-color: #<?php echo $enmse_sharebuttonbackground; ?>;
	}

	#seriesengine h3.enmse-poweredby {
		<?php if ( $enmse_poweredby == "light" ) { ?>
		background: url('../images/interface/se_light_poweredby2x.png') no-repeat;
		background-size: 148px 40px;	
		<?php } elseif ( $enmse_poweredby == "dark" ) { ?>
		background: url('../images/interface/se_dark_poweredby2x.png') no-repeat;
		background-size: 148px 40px;
		<?php } ?>
	}

	#seriesengine .enmse-loading-icon {
		<?php if ( $enmse_loadingicon == "light" ) { ?>
		background: url('../images/interface/light_load2x.png') no-repeat;
		<?php } else { ?>
		background: url('../images/interface/dark_load2x.png') no-repeat;
		<?php } ?>
		background-size: 54px 55px;
		background-position: center 30px;
		background-color: #<?php echo $enmse_loadingbackground; ?>;
	}
}

/* Mobile Related Messages */

@media (max-width: <?php echo $enmse_responsivecondensed; ?>px) {

	#seriesengine ul.enmse-modern-player-tabs.three { /* Tabs */
		padding-left: 15px;
		padding-right: 15px;
	}

	#seriesengine table.enmse-archive-table td.enmse-archive-title-cell {
		display: block;
		font-size: 16px !important;
		text-align: center;
		padding: 14px 10px 6px 10px;
	}

	#seriesengine table.enmse-archive-table td.enmse-archive-date-cell {
		display: block;
		font-size: 14px !important;
		text-align: center;
		padding: 0 10px 4px 10px;
	}

	#seriesengine table.enmse-archive-table td.enmse-archive-count-cell {
		display: block;
		font-size: 14px !important;
		text-align: center;
		padding: 0 10px 6px 10px;
	}

	#seriesengine table.enmse-archive-table td.enmse-explore-cell {
		display: block;
		font-size: 14px !important;
		text-align: center;
		padding: 0 10px 14px 10px;
	}

	#seriesengine #enmse-archive-thumbnails {
		margin-left: 0;
	}

	#seriesengine #enmse-archive-thumbnails .enmse-archive-thumb {
		width: 100%;
	}

	#seriesengine #enmse-archive-thumbnails .enmse-archive-thumb.middle {
		margin: 0 0 10px 0;
	}

	#seriesengine #enmse-archive-thumbnails .enmse-archive-thumb.odd {
		margin: 0 0 10px 0;
	}

	#seriesengine .enmse-spacer {
		display: inline;
	}

	#seriesengine table.enmse-more-messages {
		width: 100%;
		margin: 10px 0 0 0;
	}

	#seriesengine table.enmse-more-messages tr.enmse-even, #seriesengine table.enmse-more-messages tr.enmse-odd {
		text-align: center;
		display: block;
		padding: 10px;
	}
	
	#seriesengine table.enmse-more-messages tr.enmse-even td.enmse-title-cell, #seriesengine table.enmse-more-messages tr.enmse-odd td.enmse-title-cell {
		display: block;
		color: #000000;
		font-size: 16px !important;
		font-weight: 700;
		text-align: center;
		padding: 0 7px 2px 12px;
		word-wrap: break-word !important;
	}
	
	#seriesengine table.enmse-more-messages tr.enmse-even td.enmse-date-cell, #seriesengine table.enmse-more-messages tr.enmse-odd td.enmse-date-cell  {
		display: block;
		text-align: center;
		padding: 0 0 5px 0;
		font-size: 13px !important;	
	}

	#seriesengine table.enmse-more-messages tr.enmse-even td.enmse-date-cell.enmse-speaker-cell, #seriesengine table.enmse-more-messages tr.enmse-odd td.enmse-date-cell.enmse-speaker-cell  {
		display: block;
		text-align: center;
		padding: 0 0 10px 0;
		font-size: 15px !important;	
	}
	
	#seriesengine table.enmse-more-messages td.enmse-alternate-cell, #seriesengine table.enmse-more-messages td.enmse-watch-cell {
		font-size: 15px !important;
		font-weight: 300;
		width: auto;
		text-align: center;
		padding: 7px 0 0 0;
		word-wrap: break-word !important;
		display: inline-block;
	}
	
	#seriesengine table.enmse-more-messages td.enmse-listen-cell {
		font-size: 15px !important;
		font-weight: 300;
		width: auto;
		text-align: center;
		padding: 7px 0 0 0;
		word-wrap: break-word !important;
		display: inline-block;
	}

	/* ----- Card Based Related Messages ----- */

	#seriesengine .enmse-related-area.card-view {
		padding: 20px 0 0 0;
	}

	#seriesengine .enmse-message-card {
		width: 100%;
		margin: 0 0 10px 0 !important;
	}

	#seriesengine .enmse-message-card.enmse-oddcard {
		margin: 0 0 10px 0 !important;
	}

	/* ----- Row Based Related Messages ----- */

	#seriesengine .enmse-related-area.row-view, #seriesengine.se-medium .enmse-related-area.row-view {
		padding: 20px 0 0 0;
	}

	#seriesengine tr.enmse-message-row, #seriesengine.se-medium tr.enmse-message-row {
		width: 100%;
		margin: 0 0 10px 0 !important;
	}

	#seriesengine td.enmse-info-cell h5, #seriesengine.se-medium td.enmse-info-cell h5 {
		text-align: center;
	}

	#seriesengine td.enmse-info-cell h6, #seriesengine.se-medium td.enmse-info-cell h6 {
		text-align: center;
	}

	#seriesengine td.enmse-info-cell p.enmse-scripture-info, #seriesengine.se-medium td.enmse-info-cell p.enmse-scripture-info {
		text-align: center;
	}

	#seriesengine td.enmse-info-cell p.enmse-hero-extra, #seriesengine.se-medium td.enmse-info-cell p.enmse-hero-extra {
		text-align: center;
	}
}

@media (max-width: 495px) {

	#seriesengine ul.enmse-modern-player-tabs.three { /* Tabs */
		min-height: 74px;
	}

	#seriesengine ul.enmse-modern-player-tabs li {
		height: 41px;
	}

	#seriesengine.se-small ul.enmse-modern-player-tabs {
		min-height: 74px;
	}

	#seriesengine.se-small ul.enmse-modern-player-tabs.three {
		min-height: 111px;
	}

	#seriesengine.se-small ul.enmse-modern-player-tabs li {
		height: 41px;
	}

}

@media (max-width: 370px) {

	#seriesengine ul.enmse-modern-player-tabs li {
		height: 41px;
		min-width: 114px;
	}

	#seriesengine ul.enmse-modern-player-tabs li a {
		min-width: 94px;
		font-size: 13px !important;
	}

	#seriesengine ul.enmse-modern-player-tabs li.enmse-tab-selected a {
		font-size: 13px !important;
	} 

}

<?php if ( $enmse_imagearchivetext == 0 ) { ?>
	#seriesengine #enmse-archive-thumbnails .enmse-archive-thumb h4, #seriesengine #enmse-archive-thumbnails .enmse-archive-thumb h5, #seriesengine #enmse-archive-thumbnails .enmse-archive-thumb p {
		display: none;
	}

	#seriesengine #enmse-archive-thumbnails .enmse-archive-thumb img {
		margin: 0;
	}

	#seriesengine #enmse-archive-thumbnails .enmse-archive-thumb {
		background: none;
	}
<?php } ?>