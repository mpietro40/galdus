<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 		template.php
* @Package:		GetSimple
* @Action:		EarthlingTwo theme for the GetSimple CMS
*
*****************************************************/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Modified for use with Get-Simple CMS by Jose Arrona.
http://www.get-simplified.com/
http://www.josearrona.com/
Re-released for free under the Creative Commons Attribution ShareALike 3.0 License (CC BY-SA 3.0)

Name       : EarthlingTwo  
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20090918
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title><?php get_page_clean_title(); ?> - <?php get_site_name(); ?></title>
<?php get_header(); ?>
<meta name="robots" content="index, follow" />
<link href="<?php get_theme_url(); ?>/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="logo">
			<h1><a href="<?php get_site_url(); ?>"><?php get_site_name(); ?></a></h1>
			<p><?php get_component('tagline'); ?></p>
		</div>
	</div>
	<!-- end #header -->
	<div id="menu">
		<ul>
			<?php get_navigation(return_page_slug()); ?>
		</ul>
	</div>
	<!-- end #menu -->
	<div id="page">
		<div id="content">
			<div id="banner"><img src="<?php get_theme_url(); ?>/images/img07.jpg" alt="" /></div>
			<div class="post">
				<h2 class="title"><a href="<?php get_page_url(); ?>"><?php get_page_title(); ?></a></h2>
				<p class="meta"><?php get_page_date('F jS, Y'); ?> &middot; <?php get_component('author'); ?></p>
				<div class="entry">
					<?php get_page_content(); ?>					
				</div>
			</div>
			<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #content -->
		<div id="sidebar">
			<?php get_component('sidebar'); ?>
		</div>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<!-- end #page -->
</div>
<div id="footer-content">
	<div class="column1">
		<?php get_component('fleft'); ?>
	</div>
	<div class="column2">
		<?php get_component('fright'); ?>
	</div>
</div>
<div id="footer">
	<p><?php get_component('copyright'); ?> <a href="http://www.nodethirtythree.com"></a>  <a href="http://www.freecsstemplates.org/"></a>.  <a href="http://www.get-simplified.com/"></a>.  <?php ?>.</p>
	<!-- Please do not remove attribution links. If you wish to remove them please read the license agreemnt -->

</div>
<!-- end #footer -->
</body>
</html>
