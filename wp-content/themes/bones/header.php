<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php wp_title(''); ?></title>

		<!-- mobile meta (hooray!) -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<!-- icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) -->
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<!-- or, set /favicon.ico for IE10 win -->
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

		<!-- drop Google Analytics Here -->
		<!-- end analytics -->
    
    <!-- start vimeo embedding -->
    
    <script type="text/javascript">
      (function($) {
        $.getJSON('http://vimeo.com/api/v2/user8868748/videos.json?callback=?', {format: "json"}, function(videoList) {
          $.getJSON('http://vimeo.com/api/oembed.json?url=http%3A//vimeo.com/' + videoList[0].id + '&byline=false&portrait=false&callback=?', {format: "json"}, function(videoProperties) {
            document.getElementById("vimeoRecent").innerHTML=videoProperties.html
            //document.getElementById("vimeoDescription").innerHTML="<p><a href='" + videoList[0].url + "'>" + videoProperties.title + "</a> from <a href='" + videoProperties.author_url + "'>" + videoProperties.author_name + "</a> on <a href='http://vimeo.com'>Vimeo</a>.</p><p>" + videoProperties.description + "</p>"
          });
        });
      }(jQuery));
    </script>
    
    <!-- end vimeo embedding -->

	</head>

	<body <?php body_class(); ?>>

		<div id="container" class="grid16">

			<header class="header" role="banner">

				<div id="inner-header" class="wrap clearfix">

					<!-- to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> -->
					<!-- <p id="logo" class="h1"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></p> -->
          
          <div class="twoway-navigation clearfix">
            <div class="twoway-navigation-kurnu">
              <a href="<?php echo home_url(); ?>" rel="nofollow">
                <span><?php bloginfo('name'); ?></span>
                <span class="kurnu-description">Kalevankankaankoulun verkkojulkaisu</span>
              </a> 
              
            </div>
            <div class="twoway-navigation-forum">
              <a href="/forum" rel="nofollow">
                <span>Keskustelu</span>
                <span class="forum-description">Verkkolehden virallinen keskustelualue</span>
              </a>
            </div>            
          </div>

					<!-- if you'd like to use the site description you can un-comment it below -->
					<!-- <?php // bloginfo('description'); ?> -->


					<nav role="navigation">
						<?php bones_main_nav(); ?>
					</nav>

				</div> <!-- end #inner-header -->

			</header> <!-- end header -->
