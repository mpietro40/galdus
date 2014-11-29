<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License
Converted to GetSimple Theme by Timbow 03/14

Name       : ClearFigure 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140310

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php get_page_clean_title(); ?> &mdash; <?php get_site_name(); ?></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Chivo:400,900" rel="stylesheet" />
<link href="<?php get_theme_url(); ?>/default.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php get_theme_url(); ?>/fonts.css" rel="stylesheet" type="text/css" media="all" />
<!--[if IE 6]>
<link href="default_ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>
<body id="<?php get_page_slug(); ?>" >
<div id="wrapper">
	<div id="header-wrapper">
		<div id="header" class="container">
			<div id="logo">
				<h1><a href="<?php get_site_url(); ?>"><?php get_site_name(); ?></a></h1>
				<p><?php get_component('tagline');	?></p>
			</div>
		</div>
	</div>
	<div id="menu-wrapper">
		<div id="menu" class="container">
			<ul>
				<?php get_navigation(return_page_slug()); ?>
			</ul>
		</div>
		<!-- end #menu --> 
	</div>
	<div id="banner"></div>
	<div id="page" class="container">
		<div id="content">
			<div class="title">
				<h2><?php get_page_title(); ?></h2>
			</div>
			<div id="page-text">
			<?php get_page_content(); ?>
			</div>
		</div>
		<div id="sidebar">
			<div class="box2">
				<?php get_component('sidebar');	?>
			</div>
		</div>
	</div>
</div>
	


<div id="copyright" class="container">
	<p>&copy; 2014 <?php get_site_name(); ?>. All rights reserved | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://www.freecsstemplates.org/" rel="nofollow">FreeCSSTemplates.org</a> | <?php get_site_credits(); ?></p>
</div>
</body>
</html>
