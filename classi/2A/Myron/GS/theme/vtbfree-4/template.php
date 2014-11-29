<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @Package:		GetSimple
* @Action:		theme for the GetSimple 3.0
*
*****************************************************/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title><?php get_page_clean_title(); ?>-<?php get_site_name(); ?></title>
<?php get_header(); ?>
<meta name="robots" content="index, follow" />
<link href="<?php get_theme_url(); ?>/styles.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php get_theme_url(); ?>/nivo-slider.css" type="text/css" media="screen" />
</head>
<body id="<?php get_page_slug(); ?>" >
<div id="bg_top">
<div id="wrap_bg">
<div id="wrap">     		
<div id="header">
 	<div id="logo">
    	 <h1><a href="<?php get_site_url(); ?>" target="_parent">
     <img src="<?php get_theme_url(); ?>/images/logo.png" alt="Дизайн-Студия" />
      <span>Шаблоны для CMS  GETSIMPLE.</span>
            </a></h1>  		
	         </div>
      <div id="topnav">
<?php get_navigation(return_page_slug()); ?>
</div>
<div id="prew_box">
 <div id="wrapper">
  <div id="slider-wrapper">   
            <div id="slider" class="nivoSlider">
                <img src="<?php get_theme_url(); ?>/images/prew_img1.jpg" alt="" />
                <img src="<?php get_theme_url(); ?>/images/prew_img2.jpg" alt=""/>
                <img src="<?php get_theme_url(); ?>/images/prew_img3.jpg" alt="" />
				<img src="<?php get_theme_url(); ?>/images/prew_img4.jpg" alt="" />
            </div>        
        </div>
	<script type="text/javascript" src="<?php get_theme_url(); ?>/lib/jquery-1.4.3.min.js"></script>
    <script type="text/javascript" src="<?php get_theme_url(); ?>/lib/jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
</div>
</div>
</div>	<div style="clear: both"></div>	
<div id="content">
<div id="left_column">
	<!-- Start left news box -->
	<div class="left_news_box">
	<div class="left_news_top"></div>
	<div class="left_news_bg">
	<h1><?php get_page_title(); ?></h1>	
			<div class="text">

	<?php get_page_content(); ?>
	</div>
	<div class="clear"></div>
	</div>
	<div class="left_news_bot"></div>
	</div>
</div>
<div id="right_column">
<!-- Start right news box -->
<div class="right_news_box">
<div class="right_news_top"></div>
<div class="right_news_bg">
<h2>Навигация</h2>
 <div id="text">	
     <ul><?php get_navigation(return_page_slug()); ?></ul>
</div>
<div class="clear"></div>
</div>
<div class="right_news_bot"></div>
</div>
<!-- End right news box -->
<!-- Start right news box -->
<div class="right_news_box">
<div class="right_news_top"></div>
<div class="right_news_bg">
<div class="text">
<?php get_component('sidebar');	?>
</div>
</div>
<div class="right_news_bot"></div>
</div>
<!-- End right news box -->
</div>
<div class="clear"></div>
</div>
<div id="footer">
   <div id="footer_bg_top"></div>
<div id="footer_bg">
<div id="templatemo_copyright">
		Copyright © 2011 <a href="<?php get_site_url(); ?>"><?php get_site_name(); ?></a> | 
        Дизайн <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a> | Алаптация <a href="http://gsimple.ru/" target="_parent">Дизайн-Студия VTB</a> <?php get_site_credits(); ?>
   </div>
</div>
<div id="footer_bg_bot"></div>
</div>
   </body>
</html>