<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 			template.php
* @Package:		GSinland GetSimple
* @Action:		GSinland theme for GetSimple CMS
* @Original:  inland by andreasviklund.com
*
*****************************************************/
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="author" content="JLM - studiobox.fr" />	
	<title><?php get_page_clean_title(); ?> | <?php get_site_name(); ?>, <?php get_component('tagline'); ?></title>
  <?php get_header(); ?>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="<?php get_theme_url(); ?>/js/modernizr-1.5.min.js"></script>
</head>

<body>
  <div id="main">
    <header>
      <div id="logo"><h1><a href="<?php get_site_url(); ?>"><?php get_site_name(); ?></h1></div>
      <nav>
        <ul class="lavaLampWithImage" id="lava_menu">
          <?php get_navigation(return_page_slug()); ?>
        </ul>
      </nav>
    </header>
    <div id="site_content">
      
      <div id="sidebar_container">
        <div class="sidebar">
          <?php get_component('sidebar'); ?>
      </div>
        
      </div>
      
        <!-- main content -->
    <div id="content">
		<h1><?php get_page_title(); ?></h1>	
			<div id="page-content">
				<div class="page-text">
					<?php get_page_content(); ?>
				</div>
			</div>
	   </div>
      
    </div>
    <footer>
      <p><?php echo date('Y'); ?> &copy; <?php get_site_name(); ?> | <a href="http://www.css3templates.co.uk" target="_blank">design from css3templates.co.uk</a>| <a href="http://get-simple.info" target="_blank">Adapted for Getsimple</a> by <a href="http://studiobox.fr/" target="_blank">JLM</a></p>
    </footer>
  </div>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="<?php get_theme_url(); ?>/js/jquery.min.js"></script>
  <script type="text/javascript" src="<?php get_theme_url(); ?>/js/jquery.easing.min.js"></script>
  <script type="text/javascript" src="<?php get_theme_url(); ?>/js/jquery.lavalamp.min.js"></script>
  <script type="text/javascript" src="<?php get_theme_url(); ?>/js/jquery.kwicks-1.5.1.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#images').kwicks({
        max : 600,
        spacing : 2
      });
    });
  </script>
  <script type="text/javascript">
    $(function() {
      $("#lava_menu").lavaLamp({
        fx: "backout",
        speed: 700
      });
    });
  </script>
</body>
</html>
