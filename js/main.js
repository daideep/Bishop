$(document).ready(function(){$('.share-buttons .share-button.twitter').sharrre({share:{twitter:true},template:'<a href="#" class="box"><div class="share"><span class="icon ss-icon">&#xF611;</span><span class="text">Tweet</span></div><div class="count">{total}</div><div class="clear"></div></a>',enableHover:false,enableTracking:true,buttons:{twitter:{via:'security_snacks'}},click:function(api,options){api.simulateClick();api.openPopup('twitter');}});$('.share-buttons .share-button.facebook').sharrre({share:{facebook:true},template:'<a href="#" class="box"><div class="share"><span class="icon ss-icon">&#xF610;</span><span class="text">Like</span></div><div class="count">{total}</div><div class="clear"></div></a>',enableHover:false,enableTracking:true,click:function(api,options){api.simulateClick();api.openPopup('facebook');}});$('.share-buttons .share-button.googleplus').sharrre({share:{googlePlus:true},template:'<a href="#" class="box"><div class="share"><span class="icon ss-icon">&#xF613;</span><span class="text">Share</span></div><div class="count">{total}</div><div class="clear"></div></a>',urlCurl:'/wp-content/themes/bishopfox/sharrre.php',enableHover:false,enableTracking:true,click:function(api,options){api.simulateClick();api.openPopup('googlePlus');}});$('#tools-single aside').stickyfloat({duration:0,easing:'swing',offsetY:60});$('.mobile a.menu-toggle').click(function(event){event.preventDefault();$(this).parents('nav.mobile').toggleClass('active');});$('.tools-sub-menu a').click(function(event){event.preventDefault();$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);});$('article iframe').wrap('<div class="video-wrapper" />');$('.gallery-wrapper').magnificPopup({delegate:'a',type:'image',tLoading:'Loading image #%curr%...',mainClass:'mfp-img-mobile',gallery:{enabled:true,navigateByImgClick:true,preload:[0,1]},image:{cursor:null,tError:'<a href="%url%">The image #%curr%</a> could not be loaded.',}});$('a.image-link').magnificPopup({type:'image',closeOnContentClic:true,mainClass:'mfp-img-mobile',image:{cursor:null,verticalFit:true,tError:'<a href="%url%">The image #%curr%</a> could not be loaded.',}});$('.slider').bxSlider({minSlides:2,maxSlides:3,slideWidth:746,slideMargin:50,ticker:true,speed:50000});});