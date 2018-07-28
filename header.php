<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Bishopfox
 */
?><!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en-US" prefix="og: http://ogp.me/ns#"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="en-US" prefix="og: http://ogp.me/ns#"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="en-US" prefix="og: http://ogp.me/ns#"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en-US" prefix="og: http://ogp.me/ns#"><!--<![endif]-->
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<title>
<?php 
wp_title( '|', true, 'right' ); 
bloginfo( 'name' );
?>
</title>
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1"/>
<script type="text/javascript">
//<![CDATA[
try{if (!window.CloudFlare) { var CloudFlare=[{verbose:0,p:0,byc:0,owlid:"cf",bag2:1,mirage2:{profile:false},oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/acv=4125811108/"},atok:"3ba8d8fee691a663c9e46e353f8fcc2f",petok:"458475786f04ad17f7e0e337913c0dbf-1386138714-1800",zone:"bishopfox.com",rocket:"0",apps:{}}];var a=document.createElement("script"),b=document.getElementsByTagName("script")[0];a.async=!0;a.src="//ajax.cloudflare.com/cdn-cgi/nexp/acv=616370821/cloudflare.min.js";b.parentNode.insertBefore(a,b);}}catch(e){};
//]]>
</script>
<link rel="profile" href="http://gmpg.org/xfn/11"/>
<link rel="shortcut icon" href="../wp-content/themes/bishopfox/img/favicon.ico"/>
<link rel="apple-touch-icon" href="../wp-content/themes/bishopfox/img/apple-touch-icon.png"/>
<!--[if lt IE 9]><script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/r29/html5.min.js"></script><![endif]-->

<!--<link rel="stylesheet" href="../wp-content/themes/bishopfox/style.css"/>-->
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<script src="http://use.typekit.net/mzp8pdf.js"></script>
<script>try{Typekit.load();}catch(e){}</script>
<link href="http://fonts.googleapis.com/css?family=Glegoo" rel="stylesheet" type="text/css">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>
 
 
<link rel="alternate" type="application/rss+xml" title="Bishop Fox &raquo; About Us Comments Feed" href="feed/index.html"/>
<link rel='stylesheet' id='nextgen_gallery_related_images-css' href='../wp-content/plugins/nextgen-gallery/products/photocrati_nextgen/modules/nextgen_gallery_display/static/nextgen_gallery_related_images-ver=3.7.1.css' type='text/css' media='all'/>
<link rel='stylesheet' id='nivoslider-css' href='../wp-content/plugins/nivo-slider/scripts/nivo-slider/nivo-slider-ver=3.7.1.css' type='text/css' media='all'/>
<link rel='stylesheet' id='contact-form-7-css' href='../wp-content/plugins/contact-form-7/includes/css/styles-ver=3.5.4.css' type='text/css' media='all'/>
<link rel='stylesheet' id='dlm-page-addon-frontend-css' href='../wp-content/plugins/download-monitor-page-addon/assets/css/page-ver=3.7.1.css' type='text/css' media='all'/>
<link rel='stylesheet' id='dlm-frontend-css' href='../wp-content/plugins/download-monitor/assets/css/frontend-ver=3.7.1.css' type='text/css' media='all'/>
<link rel='stylesheet' id='jetpack-widgets-css' href='../wp-content/plugins/jetpack/modules/widgets/widgets-ver=20121003.css' type='text/css' media='all'/>
<script type='text/javascript' src='http://www.bishopfox.com/wp-includes/js/jquery/jquery.js?ver=1.10.2'></script>
<script type='text/javascript' src='http://www.bishopfox.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.2.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var photocrati_ajax = {"url":"http:\/\/www.bishopfox.com\/photocrati_ajax","wp_site_url":"http:\/\/www.bishopfox.com","wp_site_static_url":"http:\/\/www.bishopfox.com"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/nextgen-gallery/products/photocrati_nextgen/modules/ajax/static/ajax-ver=3.7.1.js'></script>
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="../xmlrpc.php-rsd.xml"/>
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://www.bishopfox.com/wp-includes/wlwmanifest.xml"/>
<link rel='shortlink' href='http://wp.me/P3NUud-8'/>
 
<style type="text/css">.recentcomments a{display:inline!important;padding:0!important;margin:0!important;}</style>
<script src="../wp-content/themes/bishopfox/js/modernizr-2.6.2.min.js"></script>
<?php wp_head(); ?>
</head>

<body class="page page-id-11 page-template-default">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=163815257137633";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<header id="header">
<div class="container">
<h1><a href="/bishopfox" title="Bishop Fox">Bishop Fox</a></h1>
<div class="navigation">

<nav id="" class="primary">
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
</nav>



</div>
<div class="clear"></div>
</div>
</header>


<!--<div class="content" id="home">

<section class="intro" style="background-image: url('wp-content/uploads/2013/06/header_bg.jpg');">-->


	<!--<div id="content" class="site-content">-->
