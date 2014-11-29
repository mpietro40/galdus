<?php 
// Exit if accessed directly
if(!defined('IN_GS')){ die('you cannot load this page directly.'); }

/***************************************************************************************************************
*	@File:			template.php
*	@Package:		GetSimple
*	@Action:		Blue Marble Theme | Adapted from: Blue Marble by templatemo.com <http://templatemo.com/>
*					
****************************************************************************************************************/

# Get theme's settings 
blue_marble_settings();

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if lt IE 7 ]> <html lang="en" class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" > <!--<![endif]-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php get_page_clean_title(); ?> - <?php get_site_name(); ?></title>
	<link href="<?php get_theme_url(); ?>/style.css" rel="stylesheet" type="text/css" />
	<!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]--> 

	<!--[if lt IE 7 ]>
		<script src="<?php get_theme_url(); ?>/js/dd_belatedpng.js"></script>
		<script> DD_belatedPNG.fix('img, .png_bg'); //fix any <img> or .png_bg background-images </script>
	 <![endif]-->

	<?php get_header(); ?>

</head>
<body id="<?php get_page_slug(); ?>" >

	<div id="header_wrapper">
		<div id="header">
		
			<div id="site_title">
				<a href="<?php get_site_url(); ?>"><?php get_site_name(); ?><span><?php if (component_exists('tagline')) { get_component('tagline'); }?></span></a>
			</div> <!-- end of site_title -->
			
			<div id="social_box">
				<?php if (defined('FACEBOOK')) { ?>
					<a href="<?php echo FACEBOOK; ?>" target="_blank" class="fblink" title="Facebook"></a>
				<?php } ?>
				<?php if (defined('TWITTER')) { ?>
					<a href="<?php echo TWITTER; ?>" target="_blank" class="twtlink" title="Twitter"></a>
				<?php } ?>
			</div>
			
			<div id="menu">
				<ul><?php get_navigation(get_page_slug(FALSE)); ?></ul>    	
			</div> <!-- end of menu -->
		
		</div> <!-- end of header -->
	</div> <!-- end of header wrapper -->

	<div id="main_wrapper">
		<div id="main">
		
			<div id="content">
			
				<div class="last_content_box">
					<h2><?php get_page_title(); ?></h2>
					<?php get_page_content(); ?>					
					<div class="cleaner"></div>
				</div>
			</div> <!-- end of content -->
        
			<div id="sidebar">
				<div class="last_sidebar_box">
					<?php if (component_exists('sidebar')) { get_component('sidebar'); }?>
				</div>  
			</div>
    
			<div class="cleaner"></div>
		</div> <!-- end of main -->
	</div> <!-- end of main wrapper -->

	<div id="footer_wrapper">
		<div id="footer">
			
			<div class="footer_col_w450">
				Copyright © <?php echo date('Y'); ?> <a href="<?php get_site_url(); ?>"><?php get_site_name(); ?></a>        
			</div>

			<div class="footer_col_w450 last">
				<a href="http://get-simple.info/extend/a/luigi" target="_blank">Blue Marble</a> by <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a> <br/> Powered by <a href="http://get-simple.info/" target="_blank" >GetSimple</a>       
			</div>

			<div class="cleaner"></div>
		</div> <!-- end of footer -->

		<?php get_footer(); ?>
	</div> <!-- end of footer wrapper -->

</body>
</html>