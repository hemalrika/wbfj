(function(jQuery){jQuery.fn.extend({limit:function(limit,element){var interval,f;var self=jQuery(this);jQuery(this).focus(function(){interval=window.setInterval(substring,100)});jQuery(this).blur(function(){clearInterval(interval);substring()});substringFunction="function substring(){ var val = jQuery(self).val();var length = val.length;if(length > limit){jQuery(self).val(jQuery(self).val().substring(0,limit));}";if(typeof element!='undefined')substringFunction+="if(jQuery(element).html() != limit-length){jQuery(element).html((limit-length<=0)?'0':limit-length);}";substringFunction+="}";eval(substringFunction);substring()}})})(jQuery);