jQuery(function($){
    $.novaGallery({
        autoplay: novaGalleryParams['autoplay'],
        loop: novaGalleryParams['loop'],
        storeVolume: novaGalleryParams['storeVolume'],
        startMode: novaGalleryParams['startMode'],
        fullwidthResize: novaGalleryParams['fullwidthResize'],
        showFullwidthThumbs: novaGalleryParams['showFullwidthThumbs'],
        thumbnailsAppearAnimation: novaGalleryParams['thumbnailsAppearAnimation'],
        thumbnailsCaptionAnimation: novaGalleryParams['thumbnailsCaptionAnimation'],
        alwaysShowThumbTitle: novaGalleryParams['alwaysShowThumbTitle'],
        fullwidthItemTransition: novaGalleryParams['fullwidthItemTransition'],
        homescreenAnimation: novaGalleryParams['homescreenAnimation'],
        displayType: novaGalleryParams['displayType'],
        newWindowLinks: novaGalleryParams['newWindowLinks'],
        useYoutubeThumbs: novaGalleryParams['useYoutubeThumbs'],
        useVimeoThumbs: novaGalleryParams['useVimeoThumbs'],
        shuffleItems: novaGalleryParams['shuffleItems'],
        preloadNumber: parseInt( novaGalleryParams['preloadNumber'], 10 ),
        slideshow: novaGalleryParams['slideshow'],
        pauseTime: parseInt( novaGalleryParams['pauseTime'], 10 ),
        stopSlideshowOnPageHide: novaGalleryParams['stopSlideshowOnPageHide'],
        configUrl: novaGalleryParams.ajaxUrl + '?id=' + novaGalleryParams['id'] + '&mobile=false&action=novagallery_xml',
        detectMobile: novaGalleryParams['detectMobile'],
        mobileConfigUrl: novaGalleryParams.ajaxUrl + '?id=' + novaGalleryParams['id'] + '&mobile=true&action=novagallery_xml',
        enableCache: novaGalleryParams['enableCache'],
        cacheFolder: novaGalleryParams['pluginUrl'] + 'cache',
        cacheInterval: parseInt( novaGalleryParams['cacheInterval'], 10 ),
        flickr: novaGalleryParams['flickr'],
        flickrOptions: {
            apiKey: novaGalleryParams['flickrOptions']['apiKey'],
            sourceType: novaGalleryParams['flickrOptions']['sourceType'],
            sourceId: novaGalleryParams['flickrOptions']['sourceId'],
            userId: novaGalleryParams['flickrOptions']['userId'],
            limit: parseInt( novaGalleryParams['flickrOptions']['limit'], 10 ),
            numberOfAlbums: parseInt(novaGalleryParams['flickrOptions']['numberOfAlbums'], 10) || 'all',
            sort: novaGalleryParams['flickrOptions']['sort'],
            thumbSize: novaGalleryParams['flickrOptions']['thumbSize'],
            imageSize: novaGalleryParams['flickrOptions']['imageSize']
        },
        picasa: novaGalleryParams['picasa'],
        picasaOptions: {
            sourceType: novaGalleryParams['picasaOptions']['sourceType'],
            username: novaGalleryParams['picasaOptions']['username'],
            album: novaGalleryParams['picasaOptions']['album'],
            search: novaGalleryParams['picasaOptions']['search'],
            numberOfAlbums: parseInt(novaGalleryParams['picasaOptions']['numberOfAlbums'], 10) || 'all',
            limit: parseInt( novaGalleryParams['picasaOptions']['limit'], 10 ),
            thumbSize: parseInt( novaGalleryParams['picasaOptions']['thumbSize'], 10 ),
            imageSize: parseInt( novaGalleryParams['picasaOptions']['imageSize'], 10 )
        }
    });
});