jQuery(document).ready(function() { /* ----- Series Engine ----- */

	function sescroll(bla){
	    var tag = jQuery("#enmse-top"+bla);
    	jQuery("html, body").animate({scrollTop: tag.offset().top}, 400, function() {
	    	jQuery("html, body").clearQueue();
	    });
	}

	function serscroll(bla){
	    var tag = jQuery("#enmse-related"+bla);
    	jQuery("html, body").animate({scrollTop: tag.offset().top}, 400, function() {
	    	jQuery("html, body").clearQueue();
	    });
	}

	function copyToClipboard(element) {
		var temp = jQuery("<input>");
		jQuery("body").append(temp);
		temp.val(jQuery(element).text()).select();
		document.execCommand("copy");
		temp.remove();
	}

	function ecompleteload(ajaxitem){
		jQuery(ajaxitem).parent().parent().removeClass("enmse-opaque");
		jQuery(ajaxitem).parent().parent().siblings(".enmse-loading-icon").hide();
		jQuery(ajaxitem).parent().parent().unbind("ajaxSend");
		jQuery(document).off('ajaxSend');
		jQuery(ajaxitem).parent().parent().off();
	};

	jQuery(document).on("change", ".enmse_series", function() {
		var ajaxvalues = jQuery(this).val();
		var ajaxitem = jQuery(this);
		var randval = jQuery(this).parent().parent().siblings(".enmse-random").val();
		if (ajaxvalues != 0) {
			var embedoptions = jQuery(this).parent().siblings(".enmse-embed-options").val();
			var permalinkurl = jQuery(this).parent().siblings(".enmse-permalink").val();

			if (embedoptions==null) {
				var embedoptions = jQuery(this).parent().siblings().children(".enmse-embed-options").val();
				var permalinkurl = jQuery(this).parent().siblings().children(".enmse-permalink").val();
			};	

			jQuery(document).ajaxSend(function(){
				jQuery(ajaxitem).parent().parent().addClass("enmse-opaque");
				sescroll(randval);
				jQuery(ajaxitem).parent().parent().siblings(".enmse-loading-icon").show();
			});

			jQuery.ajax({
		        url: seajax.ajaxurl, 
		        data: {
		            'action': 'seriesengine_ajaxlinks',
		            'ajaxvalues' : ajaxvalues,
		            'embedoptions' : embedoptions,
		            'enmse_permalink' : permalinkurl
		        },
		        success:function(data) {
		        	ecompleteload(ajaxitem);
					jQuery(ajaxitem).parent().parent().html(data);
		        },
		        error: function(errorThrown){
		            console.log(errorThrown);
		        }
		    });
		}
		return false;
	});

	jQuery(document).on("change", ".enmse_speakers", function() {
		var ajaxvalues = jQuery(this).val();
		var ajaxitem = jQuery(this);
		var randval = jQuery(this).parent().parent().siblings(".enmse-random").val();
		if (ajaxvalues != 0) {
			var embedoptions = jQuery(this).parent().siblings(".enmse-embed-options").val();
			var permalinkurl = jQuery(this).parent().siblings(".enmse-permalink").val();

			if (embedoptions==null) {
				var embedoptions = jQuery(this).parent().siblings().children(".enmse-embed-options").val();
				var permalinkurl = jQuery(this).parent().siblings().children(".enmse-permalink").val();
			};	

			jQuery(document).ajaxSend(function(){
				jQuery(ajaxitem).parent().parent().addClass("enmse-opaque");
				sescroll(randval);
				jQuery(ajaxitem).parent().parent().siblings(".enmse-loading-icon").show();
			});

			jQuery.ajax({
		        url: seajax.ajaxurl, 
		        data: {
		            'action': 'seriesengine_ajaxlinks',
		            'ajaxvalues' : ajaxvalues,
		            'embedoptions' : embedoptions,
		            'enmse_permalink' : permalinkurl
		        },
		        success:function(data) {
		        	ecompleteload(ajaxitem);
					jQuery(ajaxitem).parent().parent().html(data);
		        },
		        error: function(errorThrown){
		            console.log(errorThrown);
		        }
		    });
		}
		return false;
	});

	jQuery(document).on("change", ".enmse_books", function() {
		var ajaxvalues = jQuery(this).val();
		var ajaxitem = jQuery(this);
		var randval = jQuery(this).parent().parent().siblings(".enmse-random").val();
		if (ajaxvalues != 0) {
			var embedoptions = jQuery(this).parent().siblings(".enmse-embed-options").val();
			var permalinkurl = jQuery(this).parent().siblings(".enmse-permalink").val();

			if (embedoptions==null) {
				var embedoptions = jQuery(this).parent().siblings().children(".enmse-embed-options").val();
				var permalinkurl = jQuery(this).parent().siblings().children(".enmse-permalink").val();
			};	

			jQuery(document).ajaxSend(function(){
				jQuery(ajaxitem).parent().parent().addClass("enmse-opaque");
				sescroll(randval);
				jQuery(ajaxitem).parent().parent().siblings(".enmse-loading-icon").show();
			});

			jQuery.ajax({
		        url: seajax.ajaxurl, 
		        data: {
		            'action': 'seriesengine_ajaxlinks',
		            'ajaxvalues' : ajaxvalues,
		            'embedoptions' : embedoptions,
		            'enmse_permalink' : permalinkurl
		        },
		        success:function(data) {
		        	ecompleteload(ajaxitem);
					jQuery(ajaxitem).parent().parent().html(data);
		        },
		        error: function(errorThrown){
		            console.log(errorThrown);
		        }
		    });
		}
		return false;
	});

	jQuery(document).on("change", ".enmse_topics", function() {
		var ajaxvalues = jQuery(this).val();
		var ajaxitem = jQuery(this);
		var randval = jQuery(this).parent().parent().siblings(".enmse-random").val();
		if (ajaxvalues != 0) {
			var embedoptions = jQuery(this).parent().siblings(".enmse-embed-options").val();
			var permalinkurl = jQuery(this).parent().siblings(".enmse-permalink").val();

			if (embedoptions==null) {
				var embedoptions = jQuery(this).parent().siblings().children(".enmse-embed-options").val();
				var permalinkurl = jQuery(this).parent().siblings().children(".enmse-permalink").val();
			};	

			jQuery(document).ajaxSend(function(){
				jQuery(ajaxitem).parent().parent().addClass("enmse-opaque");
				sescroll(randval);
				jQuery(ajaxitem).parent().parent().siblings(".enmse-loading-icon").show();
			});

			jQuery.ajax({
		        url: seajax.ajaxurl, 
		        data: {
		            'action': 'seriesengine_ajaxlinks',
		            'ajaxvalues' : ajaxvalues,
		            'embedoptions' : embedoptions,
		            'enmse_permalink' : permalinkurl
		        },
		        success:function(data) {
		        	ecompleteload(ajaxitem);
					jQuery(ajaxitem).parent().parent().html(data);
		        },
		        error: function(errorThrown){
		            console.log(errorThrown);
		        }
		    });
		}
		return false;
	});
	
	// Show/Hide Details and Sharing
	jQuery(document).on("click", "a.enmse-hide-details", function() {
		jQuery(this).parent().parent().siblings('.enmse-player-details').slideUp(200);
		jQuery(this).removeClass('enmse-hide-details');
		jQuery(this).addClass('enmse-show-details');
		return false;
	});
	jQuery(document).on("click", "a.enmse-show-details", function() {
		var getthis = jQuery(this);
		jQuery(this).parent().parent().siblings('.enmse-share-details').slideUp(200, function() {
			jQuery(getthis).parent().parent().siblings('.enmse-player-extras').slideUp(200, function() {
				jQuery(getthis).parent().parent().siblings('.enmse-player-details').slideDown(200);
			});
		});
		jQuery(this).parent().siblings('.enmse-share-this').children('a').removeClass('enmse-hide-share')
		jQuery(this).parent().siblings('.enmse-share-this').children('a').addClass('enmse-show-share');
		jQuery(this).parent().siblings('.enmse-extras').children('a').removeClass('enmse-hide-extras');
		jQuery(this).parent().siblings('.enmse-extras').children('a').addClass('enmse-show-extras');
		jQuery(this).removeClass('enmse-show-details');
		jQuery(this).addClass('enmse-hide-details');
		return false;
	});
	jQuery(document).on("click", "a.enmse-hide-share", function() {
		jQuery(this).parent().parent().siblings('.enmse-share-details').slideUp(200);
		jQuery(this).removeClass('enmse-hide-share');
		jQuery(this).addClass('enmse-show-share');
		return false;
	});
	jQuery(document).on("click", "a.enmse-show-share", function() {
		var getthis = jQuery(this);
		jQuery(this).parent().parent().siblings('.enmse-player-details').slideUp(200, function() {
			jQuery(getthis).parent().parent().siblings('.enmse-player-extras').slideUp(200, function() {
				jQuery(getthis).parent().parent().siblings('.enmse-share-details').slideDown(200);
			});
		});
		jQuery(this).parent().siblings('.enmse-details').children('a').removeClass('enmse-hide-details');
		jQuery(this).parent().siblings('.enmse-details').children('a').addClass('enmse-show-details');
		jQuery(this).parent().siblings('.enmse-extras').children('a').removeClass('enmse-hide-extras');
		jQuery(this).parent().siblings('.enmse-extras').children('a').addClass('enmse-show-extras');
		jQuery(this).removeClass('enmse-show-share');
		jQuery(this).addClass('enmse-hide-share');
		return false;
	});
	jQuery(document).on("click", "a.enmse-hide-extras", function() {
		jQuery(this).parent().parent().siblings('.enmse-player-extras').slideUp(200);
		jQuery(this).removeClass('enmse-hide-extras');
		jQuery(this).addClass('enmse-show-extras');
		return false;
	});
	jQuery(document).on("click", "a.enmse-show-extras", function() {
		var getthis = jQuery(this);
		jQuery(this).parent().parent().siblings('.enmse-player-details').slideUp(200, function() {
			jQuery(getthis).parent().parent().siblings('.enmse-share-details').slideUp(200, function() {
				jQuery(getthis).parent().parent().siblings('.enmse-player-extras').slideDown(200);
			});
		});
		jQuery(this).parent().siblings('.enmse-details').children('a').removeClass('enmse-hide-details');
		jQuery(this).parent().siblings('.enmse-details').children('a').addClass('enmse-show-details');
		jQuery(this).parent().siblings('.enmse-share-this').children('a').removeClass('enmse-hide-share');
		jQuery(this).parent().siblings('.enmse-share-this').children('a').addClass('enmse-show-share');
		jQuery(this).removeClass('enmse-show-extras');
		jQuery(this).addClass('enmse-hide-extras');
		return false;
	});
	
	//Show and Hide Tabs
	jQuery(document).on("click", ".enmse-watch-tab a", function() {
		jQuery(this).parent().siblings('.enmse-listen-tab').removeClass('enmse-tab-selected');
		jQuery(this).parent().siblings('.enmse-alternate-tab').removeClass('enmse-tab-selected');
		jQuery(this).parent().addClass('enmse-tab-selected');
		jQuery(this).parent().parent().siblings(".enmse-media-container").children(".enmse-watch").show();
		jQuery(this).parent().parent().siblings(".enmse-media-container").children(".enmse-watch iframe").show();
		jQuery(this).parent().parent().siblings(".enmse-media-container").children(".enmse-listen").hide();
		jQuery(this).parent().parent().siblings(".enmse-media-container").children(".enmse-alternate").hide();
		return false;
	});
	
	jQuery(document).on("click", ".enmse-listen-tab a", function() {
		jQuery(this).parent().siblings('.enmse-watch-tab').removeClass('enmse-tab-selected');
		jQuery(this).parent().siblings('.enmse-alternate-tab').removeClass('enmse-tab-selected');
		jQuery(this).parent().addClass('enmse-tab-selected');
		jQuery('.enmse-listen .mejs-horizontal-volume-slider').show();
		jQuery('.enmse-listen .mejs-time-loaded').css('display', 'block');
		jQuery(this).parent().parent().siblings(".enmse-media-container").children(".enmse-watch").hide();
		jQuery(this).parent().parent().siblings(".enmse-media-container").children(".enmse-listen").show();
		jQuery(this).parent().parent().siblings(".enmse-media-container").children(".enmse-alternate").hide();
		return false;
	});
	
	jQuery(document).on("click", ".enmse-alternate-tab a", function() {
		jQuery(this).parent().siblings('.enmse-watch-tab').removeClass('enmse-tab-selected');
		jQuery(this).parent().siblings('.enmse-listen-tab').removeClass('enmse-tab-selected');
		jQuery(this).parent().addClass('enmse-tab-selected');
		jQuery(this).parent().parent().siblings(".enmse-media-container").children(".enmse-watch").hide();
		jQuery(this).parent().parent().siblings(".enmse-media-container").children(".enmse-listen").hide();
		jQuery(this).parent().parent().siblings(".enmse-media-container").children(".enmse-alternate").show();
		jQuery(this).parent().parent().siblings(".enmse-media-container").children(".enmse-alternate iframe").show();
		return false;
	});
	
	//Ajax loading of more SE content

	jQuery(document).on("click", "a.enmse-series-ajax", function() {
		var getthis = jQuery(this);
		var randval = jQuery(this).parent().parent().parent().parent().siblings(".enmse-random").val();
		var ajaxvalues = jQuery(this).children('.enmse-series-info').val();
		if (ajaxvalues != 0) {
			var embedoptions = jQuery(this).parent().parent().parent().siblings(".enmse-embed-options").val();
			var permalinkurl = jQuery(this).parent().parent().parent().siblings(".enmse-permalink").val();
			if (embedoptions==null) {
				var embedoptions = jQuery(this).parent().parent().parent().siblings().children(".enmse-embed-options").val();
				var permalinkurl = jQuery(this).parent().parent().parent().siblings().children(".enmse-permalink").val();
			};	

			jQuery(document).ajaxSend(function(){
				jQuery(getthis).parent().parent().parent().parent().addClass("enmse-opaque");
				sescroll(randval);
				jQuery(getthis).parent().parent().parent().parent().siblings(".enmse-loading-icon").show();
			});

			function completeload(){
				jQuery(getthis).parent().parent().parent().parent().removeClass("enmse-opaque");
				jQuery(getthis).parent().parent().parent().parent().siblings(".enmse-loading-icon").hide();
				jQuery(getthis).parent().parent().parent().parent().unbind("ajaxSend");
				jQuery(document).off('ajaxSend');
				jQuery(getthis).parent().parent().parent().parent().off();
			};

			jQuery.ajax({
		        url: seajax.ajaxurl, 
		        data: {
		            'action': 'seriesengine_ajaxlinks',
		            'ajaxvalues' : ajaxvalues,
		            'embedoptions' : embedoptions,
		            'enmse_permalink' : permalinkurl
		        },
		        success:function(data) {
		        	completeload();
					jQuery(getthis).parent().parent().parent().parent().html(data);
		        },
		        error: function(errorThrown){
		            console.log(errorThrown);
		        }
		    });
		};
		return false;
	});

	jQuery(document).on("click", "a.enmse-topic-ajax", function() {
		var getthis = jQuery(this);
		var randval = jQuery(this).parent().parent().parent().parent().siblings(".enmse-random").val();
		var ajaxvalues = jQuery(this).children('.enmse-topic-info').val();
		if (ajaxvalues != 0) {
			var embedoptions = jQuery(this).parent().parent().parent().siblings(".enmse-embed-options").val();
			var permalinkurl = jQuery(this).parent().parent().parent().siblings(".enmse-permalink").val();
			if (embedoptions==null) {
				var embedoptions = jQuery(this).parent().parent().parent().siblings().children(".enmse-embed-options").val();
				var permalinkurl = jQuery(this).parent().parent().parent().siblings().children(".enmse-permalink").val();
			};	

			jQuery(document).ajaxSend(function(){
				jQuery(getthis).parent().parent().parent().parent().addClass("enmse-opaque");
				sescroll(randval);
				jQuery(getthis).parent().parent().parent().parent().siblings(".enmse-loading-icon").show();
			});

			function completeload(){
				jQuery(getthis).parent().parent().parent().parent().removeClass("enmse-opaque");
				jQuery(getthis).parent().parent().parent().parent().siblings(".enmse-loading-icon").hide();
				jQuery(getthis).parent().parent().parent().parent().unbind("ajaxSend");
				jQuery(document).off('ajaxSend');
				jQuery(getthis).parent().parent().parent().parent().off();
			};

			jQuery.ajax({
		        url: seajax.ajaxurl, 
		        data: {
		            'action': 'seriesengine_ajaxlinks',
		            'ajaxvalues' : ajaxvalues,
		            'embedoptions' : embedoptions,
		            'enmse_permalink' : permalinkurl
		        },
		        success:function(data) {
		        	completeload();
					jQuery(getthis).parent().parent().parent().parent().html(data);
		        },
		        error: function(errorThrown){
		            console.log(errorThrown);
		        }
		    });
		};
		return false;
	});

	jQuery(document).on("click", "a.enmse-speaker-ajax", function() {
		var getthis = jQuery(this);
		var randval = jQuery(this).parent().parent().parent().parent().siblings(".enmse-random").val();
		var ajaxvalues = jQuery(this).children('.enmse-speaker-info').val();
		if (ajaxvalues != 0) {
			var embedoptions = jQuery(this).parent().parent().parent().siblings(".enmse-embed-options").val();
			var permalinkurl = jQuery(this).parent().parent().parent().siblings(".enmse-permalink").val();

			jQuery(document).ajaxSend(function(){
				jQuery(getthis).parent().parent().parent().parent().addClass("enmse-opaque");
				sescroll(randval);
				jQuery(getthis).parent().parent().parent().parent().siblings(".enmse-loading-icon").show();
			});

			function completeload(){
				jQuery(getthis).parent().parent().parent().parent().removeClass("enmse-opaque");
				jQuery(getthis).parent().parent().parent().parent().siblings(".enmse-loading-icon").hide();
				jQuery(getthis).parent().parent().parent().parent().unbind("ajaxSend");
				jQuery(document).off('ajaxSend');
				jQuery(getthis).parent().parent().parent().parent().off();
			};

			jQuery.ajax({
		        url: seajax.ajaxurl, 
		        data: {
		            'action': 'seriesengine_ajaxlinks',
		            'ajaxvalues' : ajaxvalues,
		            'embedoptions' : embedoptions,
		            'enmse_permalink' : permalinkurl
		        },
		        success:function(data) {
		        	
		        	completeload();
					jQuery(getthis).parent().parent().parent().parent().html(data);

		        },
		        error: function(errorThrown){
		            console.log(errorThrown);
		        }
		    });
		};
		return false;
	});
	
	jQuery(document).on("click", "a.enmse-ajax-link", function() {
		var getthis = jQuery(this);
		var randval = jQuery(this).parent().parent().parent().parent().parent().parent().siblings(".enmse-random").val();
		var ajaxvalues = jQuery(this).siblings(".enmse-ajax-values").val();
		if (ajaxvalues != 0) {
			var embedoptions = jQuery(this).parent().parent().parent().parent().parent().siblings(".enmse-embed-options").val();
			var permalinkurl = jQuery(this).parent().parent().parent().parent().parent().siblings(".enmse-permalink").val();
			if (embedoptions==null) {
				var embedoptions = jQuery(this).parent().parent().parent().parent().parent().siblings().children(".enmse-embed-options").val();
				var permalinkurl = jQuery(this).parent().parent().parent().parent().parent().siblings().children(".enmse-permalink").val();
			};	

			jQuery(document).ajaxSend(function(){
				jQuery(getthis).parent().parent().parent().parent().parent().parent().addClass("enmse-opaque");
				sescroll(randval);
				jQuery(getthis).parent().parent().parent().parent().parent().parent().siblings(".enmse-loading-icon").show();
			});

			function completeload(){
				jQuery(getthis).parent().parent().parent().parent().parent().parent().removeClass("enmse-opaque");
				jQuery(getthis).parent().parent().parent().parent().parent().parent().siblings(".enmse-loading-icon").hide();
				jQuery(getthis).parent().parent().parent().parent().parent().parent().unbind("ajaxSend");
				jQuery(document).off('ajaxSend');
				jQuery(getthis).parent().parent().parent().parent().parent().parent().off();
			};

			jQuery.ajax({
		        url: seajax.ajaxurl, 
		        data: {
		            'action': 'seriesengine_ajaxlinks',
		            'ajaxvalues' : ajaxvalues,
		            'embedoptions' : embedoptions,
		            'enmse_permalink' : permalinkurl
		        },
		        success:function(data) {
		        	completeload();
					jQuery(getthis).parent().parent().parent().parent().parent().parent().html(data);
		        },
		        error: function(errorThrown){
		            console.log(errorThrown);
		        }
		    });
		};
		return false;
	});

	jQuery(document).on("click", "a.enmse-ajax-card-link", function() {
		var getthis = jQuery(this);
		var randval = jQuery(this).parent().parent().parent().parent().parent().siblings(".enmse-random").val();
		var ajaxvalues = jQuery(this).siblings(".enmse-ajax-values").val();
		if (ajaxvalues != 0) {
			var embedoptions = jQuery(this).parent().parent().parent().parent().siblings(".enmse-embed-options").val();
			var permalinkurl = jQuery(this).parent().parent().parent().parent().siblings(".enmse-permalink").val();
			if (embedoptions==null) {
				var embedoptions = jQuery(this).parent().parent().parent().parent().parent().siblings().children(".enmse-embed-options").val();
				var permalinkurl = jQuery(this).parent().parent().parent().parent().parent().siblings().children(".enmse-permalink").val();
			};	

			jQuery(document).ajaxSend(function(){
				jQuery(getthis).parent().parent().parent().parent().parent().addClass("enmse-opaque");
				sescroll(randval);
				jQuery(getthis).parent().parent().parent().parent().parent().siblings(".enmse-loading-icon").show();
			});

			function completeload(){
				jQuery(getthis).parent().parent().parent().parent().parent().removeClass("enmse-opaque");
				jQuery(getthis).parent().parent().parent().parent().parent().siblings(".enmse-loading-icon").hide();
				jQuery(getthis).parent().parent().parent().parent().parent().unbind("ajaxSend");
				jQuery(document).off('ajaxSend');
				jQuery(getthis).parent().parent().parent().parent().parent().off();
			};

			jQuery.ajax({
		        url: seajax.ajaxurl, 
		        data: {
		            'action': 'seriesengine_ajaxlinks',
		            'ajaxvalues' : ajaxvalues,
		            'embedoptions' : embedoptions,
		            'enmse_permalink' : permalinkurl
		        },
		        success:function(data) {
		        	completeload();
					jQuery(getthis).parent().parent().parent().parent().parent().html(data);
		        },
		        error: function(errorThrown){
		            console.log(errorThrown);
		        }
		    });
		};
		return false;
	});

	jQuery(document).on("click", "a.enmse-ajax-row-link", function() {
		var getthis = jQuery(this);
		var randval = jQuery(this).parent().parent().parent().parent().parent().parent().parent().parent().siblings(".enmse-random").val();
		var ajaxvalues = jQuery(this).siblings(".enmse-ajax-values").val();
		if (ajaxvalues != 0) {
			var embedoptions = jQuery(this).parent().parent().parent().parent().parent().parent().parent().siblings(".enmse-embed-options").val();
			var permalinkurl = jQuery(this).parent().parent().parent().parent().parent().parent().parent().siblings(".enmse-permalink").val();
			if (embedoptions==null) {
				var embedoptions = jQuery(this).parent().parent().parent().parent().parent().siblings().children(".enmse-embed-options").val();
				var permalinkurl = jQuery(this).parent().parent().parent().parent().parent().siblings().children(".enmse-permalink").val();
			};	

			jQuery(document).ajaxSend(function(){
				jQuery(getthis).parent().parent().parent().parent().parent().parent().parent().parent().addClass("enmse-opaque");
				sescroll(randval);
				jQuery(getthis).parent().parent().parent().parent().parent().parent().parent().parent().siblings(".enmse-loading-icon").show();
			});

			function completeload(){
				jQuery(getthis).parent().parent().parent().parent().parent().parent().parent().parent().removeClass("enmse-opaque");
				jQuery(getthis).parent().parent().parent().parent().parent().parent().parent().parent().siblings(".enmse-loading-icon").hide();
				jQuery(getthis).parent().parent().parent().parent().parent().parent().parent().parent().unbind("ajaxSend");
				jQuery(document).off('ajaxSend');
				jQuery(getthis).parent().parent().parent().parent().parent().parent().parent().parent().off();
			};

			jQuery.ajax({
		        url: seajax.ajaxurl, 
		        data: {
		            'action': 'seriesengine_ajaxlinks',
		            'ajaxvalues' : ajaxvalues,
		            'embedoptions' : embedoptions,
		            'enmse_permalink' : permalinkurl
		        },
		        success:function(data) {
		        	
		        	completeload();
					jQuery(getthis).parent().parent().parent().parent().parent().parent().parent().parent().html(data);
					
		        },
		        error: function(errorThrown){
		            console.log(errorThrown);
		        }
		    });
		};
		return false;
	});
	
	//Share Link Button
	jQuery(document).on("click", ".enmse-share-link a", function() {
		var userAgent = navigator.userAgent || navigator.vendor || window.opera;
		var findheight = jQuery(this).position();
		var correctheight = findheight.top-30;
		var thislink = jQuery(this).attr("href");
		if( userAgent.match( /iPad/i ) || userAgent.match( /iPhone/i ) || userAgent.match( /iPod/i ) ) {
			jQuery(this).parent().parent().parent().parent().parent().siblings(".enmse-copy-link-box").css("top",correctheight+"px");
			jQuery(this).parent().parent().parent().parent().parent().siblings(".enmse-copy-link-box").children("p:first").html("Copy <a href=\""+thislink+"\" target=\"_blank\">this link</a> to share it any way you like.");
			jQuery(this).parent().parent().parent().parent().parent().addClass("enmse-opaque");
			jQuery(this).parent().parent().parent().parent().parent().siblings(".enmse-copy-link-box").show();
  		} else {
  			jQuery(this).parent().parent().parent().parent().parent().siblings(".enmse-copy-link-box").css("top",correctheight+"px");
			jQuery(this).parent().parent().parent().parent().parent().addClass("enmse-opaque");
			jQuery(this).parent().parent().parent().parent().parent().siblings(".enmse-copy-link-box").show();
			var temp = jQuery("<input>");
			jQuery(this).append(temp);
			temp.val(thislink).select();
			document.execCommand("copy");
			temp.remove();
  		}
		return false;
	});
	
	jQuery(document).on("click", ".enmse-copy-link-box a.enmse-copy-link-done", function() {
		var getparent = jQuery(this).parent();
		var parentname = getparent[0].tagName;
		if (parentname=="P") {
			jQuery(this).parent().parent().siblings(".enmse-content-container").removeClass("enmse-opaque");
			jQuery(this).parent().parent().hide();
		} else {
			jQuery(this).parent().siblings(".enmse-content-container").removeClass("enmse-opaque");
			jQuery(this).parent().hide();
		};
		return false;
	});

	//Series Archives Link
	jQuery(document).on("click", "a.enmse-archive-ajax", function() {
		var getthis = jQuery(this);
		var randval = jQuery(this).parent().parent().parent().parent().parent().parent().siblings(".enmse-random").val();
		var ajaxvalues = jQuery(this).attr("title");
		if (ajaxvalues != 0) {
			var embedoptions = jQuery(this).parent().parent().parent().parent().parent().siblings(".enmse-embed-options").val();
			var permalinkurl = jQuery(this).parent().parent().parent().parent().parent().siblings(".enmse-permalink").val();
			if (embedoptions==null) {
				var embedoptions = jQuery(this).parent().parent().parent().parent().parent().siblings().children(".enmse-embed-options").val();
				var permalinkurl = jQuery(this).parent().parent().parent().parent().parent().siblings().children(".enmse-permalink").val();
			};	

			jQuery(document).ajaxSend(function(){
				jQuery(getthis).parent().parent().parent().parent().parent().parent().addClass("enmse-opaque");
				sescroll(randval);
				jQuery(getthis).parent().parent().parent().parent().parent().parent().siblings(".enmse-loading-icon").show();
			});

			function completeload(){
				jQuery(getthis).parent().parent().parent().parent().parent().parent().removeClass("enmse-opaque");
				jQuery(getthis).parent().parent().parent().parent().parent().parent().siblings(".enmse-loading-icon").hide();
				jQuery(getthis).parent().parent().parent().parent().parent().parent().unbind("ajaxSend");
				jQuery(document).off('ajaxSend');
				jQuery(getthis).parent().parent().parent().parent().parent().parent().off();
			};

			jQuery.ajax({
		        url: seajax.ajaxurl, 
		        data: {
		            'action': 'seriesengine_ajaxlinks',
		            'ajaxvalues' : ajaxvalues,
		            'embedoptions' : embedoptions,
		            'enmse_permalink' : permalinkurl
		        },
		        success:function(data) {
		        	completeload();
					jQuery(getthis).parent().parent().parent().parent().parent().parent().html(data);
		        },
		        error: function(errorThrown){
		            console.log(errorThrown);
		        }
		    });
		};
		return false;
	});
	
	jQuery(document).on("click", "a.enmse-imgarchive-ajax", function() {
		var getthis = jQuery(this);
		var randval = jQuery(this).parent().parent().parent().parent().siblings(".enmse-random").val();
		var ajaxvalues = jQuery(this).attr("title");
		if (ajaxvalues != 0) {
			var embedoptions = jQuery(this).parent().parent().parent().siblings(".enmse-embed-options").val();
			var permalinkurl = jQuery(this).parent().parent().parent().siblings(".enmse-permalink").val();
			if (embedoptions==null) {
				var embedoptions = jQuery(this).parent().parent().parent().siblings().children(".enmse-embed-options").val();
				var permalinkurl = jQuery(this).parent().parent().parent().siblings().children(".enmse-permalink").val();
			};	

			jQuery(document).ajaxSend(function(){
				jQuery(getthis).parent().parent().parent().parent().addClass("enmse-opaque");
				sescroll(randval);
				jQuery(getthis).parent().parent().parent().parent().siblings(".enmse-loading-icon").show();
			});

			function completeload(){
				jQuery(getthis).parent().parent().parent().parent().removeClass("enmse-opaque");
				jQuery(getthis).parent().parent().parent().parent().siblings(".enmse-loading-icon").hide();
				jQuery(getthis).parent().parent().parent().parent().unbind("ajaxSend");
				jQuery(document).off('ajaxSend');
				jQuery(getthis).parent().parent().parent().parent().off();
			};

			jQuery.ajax({
		        url: seajax.ajaxurl, 
		        data: {
		            'action': 'seriesengine_ajaxlinks',
		            'ajaxvalues' : ajaxvalues,
		            'embedoptions' : embedoptions,
		            'enmse_permalink' : permalinkurl
		        },
		        success:function(data) {
		        	completeload();
					jQuery(getthis).parent().parent().parent().parent().html(data);
		        },
		        error: function(errorThrown){
		            console.log(errorThrown);
		        }
		    });
		};
		return false;
	});

	jQuery(document).on("click", "a.enmse-imgarchivetext-ajax", function() {
		var getthis = jQuery(this);
		var randval = jQuery(this).parent().parent().parent().parent().parent().siblings(".enmse-random").val();
		var ajaxvalues = jQuery(this).attr("title");
		if (ajaxvalues != 0) {
			var embedoptions = jQuery(this).parent().parent().parent().parent().siblings(".enmse-embed-options").val();
			var permalinkurl = jQuery(this).parent().parent().parent().parent().siblings(".enmse-permalink").val();
			if (embedoptions==null) {
				var embedoptions = jQuery(this).parent().parent().parent().parent().siblings().children(".enmse-embed-options").val();
				var permalinkurl = jQuery(this).parent().parent().parent().parent().siblings().children(".enmse-permalink").val();
			};	

			jQuery(document).ajaxSend(function(){
				jQuery(getthis).parent().parent().parent().parent().parent().addClass("enmse-opaque");
				sescroll(randval);
				jQuery(getthis).parent().parent().parent().parent().parent().siblings(".enmse-loading-icon").show();
			});

			function completeload(){
				jQuery(getthis).parent().parent().parent().parent().parent().removeClass("enmse-opaque");
				jQuery(getthis).parent().parent().parent().parent().parent().siblings(".enmse-loading-icon").hide();
				jQuery(getthis).parent().parent().parent().parent().parent().unbind("ajaxSend");
				jQuery(document).off('ajaxSend');
				jQuery(getthis).parent().parent().parent().parent().parent().off();
			};

			jQuery.ajax({
		        url: seajax.ajaxurl, 
		        data: {
		            'action': 'seriesengine_ajaxlinks',
		            'ajaxvalues' : ajaxvalues,
		            'embedoptions' : embedoptions,
		            'enmse_permalink' : permalinkurl
		        },
		        success:function(data) {
		        	completeload();
					jQuery(getthis).parent().parent().parent().parent().parent().html(data);
		        },
		        error: function(errorThrown){
		            console.log(errorThrown);
		        }
		    });
		};
		return false;
	});

	jQuery(document).on("click", "a.enmse-ajax-page", function() {
		var getthis = jQuery(this);
		var randval = jQuery(this).parent().parent().siblings(".enmse-rrandom").val();
		var ajaxvalues = jQuery(this).attr("name");
		if (ajaxvalues != 0) {
			var embedoptions = jQuery(this).parent().parent().siblings(".enmse-embed-options").val();
			var permalinkurl = jQuery(this).parent().parent().siblings(".enmse-permalink").val();
			if (embedoptions==null) {
				var embedoptions = jQuery(this).parent().parent().siblings().children(".enmse-embed-options").val();
				var permalinkurl = jQuery(this).parent().parent().siblings().children(".enmse-permalink").val();
			};	

			jQuery(document).ajaxSend(function(){
				jQuery(getthis).parent().parent().addClass("enmse-opaque");
				serscroll(randval);
				jQuery(getthis).parent().parent().siblings(".enmse-loading-icon").show();
			});

			function completeload(){
				jQuery(getthis).parent().parent().removeClass("enmse-opaque");
				jQuery(getthis).parent().parent().siblings(".enmse-loading-icon").hide();
				jQuery(getthis).parent().parent().unbind("ajaxSend");
				jQuery(document).off('ajaxSend');
				jQuery(getthis).parent().parent().off();
			};

			jQuery.ajax({
		        url: seajax.ajaxurl, 
		        data: {
		            'action': 'seriesengine_ajaxpag',
		            'ajaxvalues' : ajaxvalues,
		            'embedoptions' : embedoptions,
		            'enmse_permalink' : permalinkurl
		        },
		        success:function(data) {
		        	completeload();
					jQuery(getthis).parent().parent().html(data);
		        },
		        error: function(errorThrown){
		            console.log(errorThrown);
		        }
		    });
		};
		return false;
	});

	jQuery(document).on("click", "a.enmse-ajax-apage", function() {
		var getthis = jQuery(this);
		var randval = jQuery(this).parent().parent().parent().siblings(".enmse-random").val();
		var ajaxvalues = jQuery(this).attr("name");
		if (ajaxvalues != 0) {
			var embedoptions = jQuery(this).parent().parent().siblings(".enmse-embed-options").val();
			var permalinkurl = jQuery(this).parent().parent().siblings(".enmse-permalink").val();
			if (embedoptions==null) {
				var embedoptions = jQuery(this).parent().parent().siblings().children(".enmse-embed-options").val();
				var permalinkurl = jQuery(this).parent().parent().siblings().children(".enmse-permalink").val();
			};	

			jQuery(document).ajaxSend(function(){
				jQuery(getthis).parent().parent().addClass("enmse-opaque");
				sescroll(randval);
				jQuery(getthis).parent().parent().siblings(".enmse-loading-icon").show();
			});

			function completeload(){
				jQuery(getthis).parent().parent().removeClass("enmse-opaque");
				jQuery(getthis).parent().parent().siblings(".enmse-loading-icon").hide();
				jQuery(getthis).parent().parent().unbind("ajaxSend");
				jQuery(document).off('ajaxSend');
				jQuery(getthis).parent().parent().off();
			};

			jQuery.ajax({
		        url: seajax.ajaxurl, 
		        data: {
		            'action': 'seriesengine_ajaxapag',
		            'ajaxvalues' : ajaxvalues,
		            'embedoptions' : embedoptions,
		            'enmse_permalink' : permalinkurl
		        },
		        success:function(data) {
		        	completeload();
					jQuery(getthis).parent().parent().html(data);
		        },
		        error: function(errorThrown){
		            console.log(errorThrown);
		        }
		    });
		};
		return false;
	});
	
	jQuery('#seriesengine audio').mediaelementplayer({stretching: 'responsive'});
	jQuery('#seriesengine video').mediaelementplayer({stretching: 'responsive'});

	jQuery("#seriesengine audio.enmseaplayer").bind("play", function(){
		var begcurrent = jQuery(this).attr("rel");
		if ( begcurrent == "" ) {
			begcurrent = 0;
		};
		var current = parseInt(begcurrent);
		var m = jQuery(this).attr("name");
		var newcount = current+1;
		var mtype = "audio";
		jQuery.ajax({
		        url: seajax.ajaxurl, 
		        data: {
		            'action': 'seriesengine_ajaxviewcount',
		            'count' : newcount,
		            'id' : m,
		            'type' : mtype
		        },
		        success:function(data) {
		        },
		        error: function(errorThrown){
		            console.log(errorThrown);
		        }
		    });
		jQuery(this).unbind();
	});

	jQuery("#seriesengine video.enmsevplayer").bind("play", function(){
		var begcurrent = jQuery(this).attr("rel");
		if ( begcurrent == "" ) {
			begcurrent = 0;
		};
		var current = parseInt(begcurrent);
		var m = jQuery(this).attr("name");
		var newcount = current+1;
		var mtype = "video";
		jQuery.ajax({
		        url: seajax.ajaxurl, 
		        data: {
		            'action': 'seriesengine_ajaxviewcount',
		            'count' : newcount,
		            'id' : m,
		            'type' : mtype
		        },
		        success:function(data) {
		        },
		        error: function(errorThrown){
		            console.log(errorThrown);
		        }
		    });
		jQuery(this).unbind();
	});

	jQuery("#seriesengine video.enmseaplayer").bind("play", function(){
		var begcurrent = jQuery(this).attr("rel");
		if ( begcurrent == "" ) {
			begcurrent = 0;
		};
		var current = parseInt(begcurrent);
		var m = jQuery(this).attr("name");
		var newcount = current+1;
		var mtype = "alternate";
		jQuery.ajax({
		        url: seajax.ajaxurl, 
		        data: {
		            'action': 'seriesengine_ajaxviewcount',
		            'count' : newcount,
		            'id' : m,
		            'type' : mtype
		        },
		        success:function(data) {
		        },
		        error: function(errorThrown){
		            console.log(errorThrown);
		        }
		    });
		jQuery(this).unbind();
	});

	// Force audio download links to download with one click
	jQuery(document).on("click", "a#enmse-download.enmse-force", function() {
		var getthis = jQuery(this);
		var ajaxurl = jQuery(this).attr("href");
		var ajaxvalues = jQuery(this).attr("title");
		var loadurl = jQuery(this).parent().parent().parent().parent().siblings(".enmse-plugin-url").val();
		var xxse = encodeURIComponent(jQuery(this).parent().parent().parent().parent().siblings(".xxse").val());
		if (loadurl==null) {
			var loadurl = jQuery(this).parent().parent().parent().parent().siblings().children(".enmse-plugin-url").val();
			var xxse = encodeURIComponent(jQuery(this).parent().parent().parent().parent().siblings().children(".xxse").val());
		};	
		window.location.assign(loadurl+"/includes/download.php?enmsepath="+ajaxurl+"&xxse="+xxse);
		return false;
	});

	var enmsedocwidth = jQuery( document ).width();
	var enmseembedwidth = jQuery('#seriesengine').width();

	if ( enmseembedwidth <= 650 && enmsedocwidth >= 820 ) {
		jQuery('#seriesengine').addClass('se-medium');
	};

	if ( enmseembedwidth <= 300 ) {
		jQuery('#seriesengine').addClass('se-small');
	};
	

});