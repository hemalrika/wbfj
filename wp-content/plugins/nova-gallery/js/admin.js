jQuery(function($){
    
    // hide and show File Type starting category options
	var $startCategory = $('#startCategory');
	$('#showFileTypeButtons').change(function(){
		if( this.checked ) {
			$startCategory.find('option.filetype').show();
		}
		else {
			$startCategory.find('option.filetype').hide();
		}
	})
	.trigger('change');
	
	// hide/show Flickr options
	$('#flickr').change(function(){
		if( this.checked ) {
			$('#flickrOptions').slideDown(400);
		}
		else {
			$('#flickrOptions').slideUp(400);
		}
	})
	.trigger('change');
	
	// hide/show Picasa options
	$('#picasa').change(function(){
		if( this.checked ) {
			$('#picasaOptions').slideDown(400);
		}
		else {
			$('#picasaOptions').slideUp(400);
		}
	})
	.trigger('change');
	
	
	// hide/show gallery sets/items
	$('#enableSets').change(function(){
		if( this.checked ) {
			$('#gallerySets').slideDown(400);
			$('#galleryItems').slideUp(400);
		}
		else {
			$('#gallerySets').slideUp(400);
			$('#galleryItems').slideDown(400);
		}
	})
	.trigger('change')
	
	
	// generate category names from user entered comma separated list
	var categoryArr = [];
	$('#categories').change(function(){
		var list = $(this).val(),
			html = '',
			catname = '';
			
		categoryArr = list.split(',');
		
		$.each(categoryArr, function(i, val){
			val = $.trim(val);
			catname = val.toLowerCase();
			html += '<option value="'+catname+'">'+val+'</option>';
		});
		
		var selected = $startCategory.val();
		$startCategory.find('option.filetype').last().nextAll().remove().end().after(html);
		$startCategory.val( selected );
	});
	
	
	
	// show appropriate upload fields based on filetype chosen
	var $itemsList = $('#itemsList'), $setsList = $('#setsList');
	
	$itemsList.add($setsList).on('change', 'input[name*="filetype"]', function(e, effect){
		var $this = $(this),
			speed = effect === 'noslide' ? 0 : 400;
			
		if( this.checked ) {
			type = $this.val();
		}
		else {
			return;
		}
		
		$this.siblings('input[name*="fileTypeVal"]').val(type);
		if( type === 'photo' ) {
			$this.siblings('div.audioUpload, div.videoUpload').slideUp(speed).next('br').hide();
		}
		else if( type === 'audio' ) {
			$this.siblings('div.audioUpload').slideDown(speed).next('br').show().end().siblings('div.videoUpload').slideUp(speed).next('br').hide();
		}
		else if( type === 'video' ) {
			$this.siblings('div.videoUpload').slideDown(speed).next('br').show().end().siblings('div.audioUpload').slideUp(speed).next('br').hide();
		}
	})
	.find('input[name*="filetype"]').trigger('change');
	
    
    
    // make the item list sortable
	$('ul.items').add($setsList).sortable({
        revert: true,
        cursor: 'move',
        axis: 'y',
        containment: 'parent',
        start: function() {
            $(this).find('a.delete, a.expand, a.collapse').addClass('hide');
        },
        stop: function() {
            $(this).find('a.delete, a.expand, a.collapse').removeClass('hide');
        }
    });
	
	
	
	// first store a sample of the item html when page loads
	var $itemClone = $itemsList.children().eq(0).clone(true),
		$setClone = $setsList.children().eq(0).clone(true),
		$setItemClone = $setsList.find('ul.items li').eq(0).clone(true);
	
	// then add items
	$('#add-item').click(cloneGalleryItems);
	$('#gallerySets').on('click', 'a.add-set, a.add-item', cloneGalleryItems );
	
	function cloneGalleryItems(){
		if( $(this).hasClass('add-set-items') ) {
			var $refItem = $setItemClone,
				$parent = $(this).parent('li'),
				num = $parent.index();
				
			$refItem.find('input, textarea').each(function(){
				var name = $(this).attr('name');
				name = name.replace(/(\d+)/g, num);
				$(this).attr('name', name);
			});
			
		}
		else if( $(this).hasClass('add-set') ) {
			var $refItem = $setClone,
				num = $setsList.children('li').length;
			
			$refItem.find('ul.items li').not(':first').remove();
			$refItem.find('ul.items').find('input, textarea').each(function(){
				var name = $(this).attr('name');
				name = name.replace(/(\d+)/g, num);
				$(this).attr('name', name);
			});
			
		}
		else {
			var $refItem = $itemClone;
		}
		
		var $clone = $refItem.clone(true),
			$list = $(this).prev('ul'),
			count = $list.children().length;

		$clone.find('img.thumbnail').hide();
        $clone.find('input[type="text"], textarea, select').val('');
		$clone.find('input[name*="filetype"]').attr('name', 'filetype'+count).attr('checked', false).first().attr('checked', 'checked');
		$clone.find('input[name*="fileTypeVal"]').val('photo');
		$clone.find('div.audioUpload, div.videoUpload').hide();
		$clone.find('a.expand').addClass('disabled');
        $list.append($clone);
	}
	
	
	
	// expand/collpase gallery item details
	$('ul.items').on('click', 'a.collapse:not(.disabled)', function(){
		var $item = $(this).parent('li');
		// store current height
		$item.data('height', $item.height() );
		$item.animate({ height: '96px' }, 600).children().not('.no-hide').hide();
		$(this).addClass('disabled').siblings('a.expand').removeClass('disabled');
	});
	
	$setsList.on('click', '> li > a.collapse:not(.disabled)', function(){
		var $item = $(this).parent('li');
		// store current height
		$item.data('height', $item.height() );
		$item.animate({ height: '40px' }, 600);
		
		$(this).addClass('disabled').siblings('a.expand').removeClass('disabled');
	});
	
	$('ul.items').on('click', 'a.expand:not(.disabled)', function(){
		var $item = $(this).parent('li'),
			height = $item.data('height');
			
		$item.animate({ height: height }, 600, function(){
			$item.removeAttr('style');
			$item.children().not('div.audioUpload, div.audioUpload+br, div.videoUpload, div.videoUpload+br').show();
			$item.find('input[name*="filetype"]').trigger('change', ['noslide']);
		});
		
		$(this).addClass('disabled').siblings('a.collapse').removeClass('disabled');
	});
	
	$setsList.on('click', '> li > a.expand:not(.disabled)', function(){
		var $item = $(this).parent('li'),
			height = $item.data('height');
			
		$item.animate({ height: height }, 600, function(){
			$item.removeAttr('style');
		});
		
		$(this).addClass('disabled').siblings('a.collapse').removeClass('disabled');
	});
	
	// when the page first loads then collapse all items except the first
	$('ul.items').find('a.collapse').trigger('click');
	$setsList.find('> li > a.collapse').trigger('click');
	
	
    
    // handle item deletion
	$itemsList.add($setsList).on('click', 'a.delete', function(){
        var $this = $(this),
            $parent = $this.parent();
        
        $parent.slideUp(600, function(){
            $parent.remove();
        });
    });
	
	
	// handle uploads using WP Media Uploader using WP 3.5 uploader API
	if( typeof(wp) != 'undefined' ) {
		var novaUploadImageFrame = wp.media.frames.novaUploadImageFrame = wp.media({
			multiple: true,
			title: 'Upload Images',
			library: {
				type: 'image'
			}
		});
		
		var novaUploadAudioFrame = wp.media.frames.novaUploadAudioFrame = wp.media({
			multiple: true,
			title: 'Upload Audio',
			library: {
				type: 'audio'
			}
		});
		
		var novaUploadVideoFrame = wp.media.frames.novaUploadVideoFrame = wp.media({
			multiple: true,
			title: 'Upload Video',
			library: {
				type: 'video'
			}
		});
	}
	
	
	$('#upload-area').on('click', 'a.nova-upload', function(){
		var $this = $(this), uploadType = $this.data('uploadType'), fileFrame;
		
		if( typeof(wp) != 'undefined' ) { // use WP 3.5 API
			if( uploadType === 'image' ) {
				fileFrame = novaUploadImageFrame;
			}
			else if ( uploadType === 'audio' ) {
				fileFrame = novaUploadAudioFrame;
			}
			else if ( uploadType === 'video' ) {
				fileFrame = novaUploadVideoFrame;
			}
			
			// If the media frame already exists, reopen it.
			if( fileFrame ) {
				fileFrame.close();
			}
				
			// open the Upload tab which is the first tab
			fileFrame.$el.find('div.media-router a').eq(0).trigger('click');
			
			fileFrame.open();
		}
		else {
			tb_show('Upload ' + uploadType, 'media-upload.php?type='+uploadType+'&TB_iframe=true&post_id=0', true);
			return false;
		}
		
	});
	
	
	
	if( typeof(wp) != 'undefined' ) {
		// Frame for selecting images
		var novaSelectImageFrame = wp.media.frames.novaSelectImageFrame = wp.media({
			button: {
				text: 'Select File'
			},
			title: 'Select Image',
			multiple: false,
			library: {
				type: 'image'
			}
		});
		
		// Frame for selecting audio
		var novaSelectAudioFrame = wp.media.frames.novaSelectAudioFrame = wp.media({
			button: {
				text: 'Select File'
			},
			title: 'Select Audio',
			multiple: false,
			library: {
				type: 'audio'
			}
		});
		
		// Frame for selecting video
		var novaSelectVideoFrame = wp.media.frames.novaSelectVideoFrame = wp.media({
			button: {
				text: 'Select File'
			},
			title: 'Select Video',
			multiple: false,
			library: {
				type: 'video'
			}
		});
		
		
		$(document).on('click', 'a.select-file', function(){
			var $this = $(this), fileType = $this.data('fileType'), fileFrame;
			
			if( fileType === 'image' ) {
				fileFrame = novaSelectImageFrame;
			}
			else if( fileType === 'audio' ) {
				fileFrame = novaSelectAudioFrame;
			}
			else if( fileType === 'video' ) {
				fileFrame = novaSelectVideoFrame;
			}
			
			if( fileFrame) {
				fileFrame.close();
			}
			
			fileFrame.off('select').on('select', function(){
				var file = fileFrame.state().get('selection').first().toJSON();
				$this.prev().val( file.url );
				$this.closest('li').children('img.thumbnail').attr('src', file.url).show();
			});
			
			// open the Library tab which is the second tab
			fileFrame.$el.find('div.media-router a').eq(1).trigger('click');
			
			fileFrame.open();
		});
	}
	else {
		$(document).on('click', 'a.select-file', function(){
			var $this = $(this), fileType = $this.data('fileType');
			tb_show('Select ' + fileType, 'media-upload.php?type='+fileType+'&tab=library&TB_iframe=true&post_id=0', false);
			
			window.send_to_editor = function(html) {
				var fileUrl = $(html).attr('href');
				$this.prev().val( fileUrl );
				$this.closest('li').children('img.thumbnail').attr('src', fileUrl).show();
				tb_remove();
			}
		});
		
	}
	
    
});