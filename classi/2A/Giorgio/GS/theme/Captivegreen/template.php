<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 			template.php
* @Package:		GetSimple
* @Action:		Captivegreen theme for GetSimple CMS
*
*****************************************************/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Captive Green 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20111225

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title><?php get_page_clean_title(); ?> &lt; <?php get_site_name(); ?></title>
<?php get_header(); ?>
<meta name="robots" content="index, follow" />
<link href="<?php get_theme_url(); ?>/style.css" rel="stylesheet" type="text/css" media="screen" />

</head>
<body id="<?php get_page_slug(); ?>">
<div id="wrapper">
	<div id="wrapper2">
		<div id="header" class="container">
			<div id="logo">
				<h1><a href="<?php get_site_url(); ?>"><span><?php get_site_name(); ?></span></a></h1>
			</div>
			<div id="menu">
				<ul>
					<?php get_navigation(return_page_slug()); ?>
				</ul>
			</div>
		</div>
		<div id="banner"></div>
		<!-- end #header -->
		<div id="page">
			<div id="content">
				<div class="post">
					<h2 class="title"><?php get_page_title(); ?></h2>
					<div style="clear: both;">&nbsp;</div>
					<div class="entry">
						<?php get_page_content(); ?>
					<p class="meta"><span class="posted">Published on</span> <span class="date"><?php get_page_date('F jS, Y'); ?></span></p>
					</div>
				</div>
				<div style="clear: both;">&nbsp;</div>
			</div>
			<!-- end #content -->
			<div id="sidebar">
			
			    <ul>
					<li>
				        <?php get_component('sidebar');	?>
				    </li>
				</ul>
			</div>
			<!-- end #sidebar -->
			<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #page -->
		<div id="footer">
			<p><?php echo date('Y'); ?> - <strong><?php get_site_name(); ?></strong> &nbsp;&nbsp;<?php get_site_credits(); ?>&nbsp;&nbsp; Design by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>.</p>
		</div>
	</div>
</div>
<?php get_footer(); ?>
<!-- end #footer -->
</body>
</html>
