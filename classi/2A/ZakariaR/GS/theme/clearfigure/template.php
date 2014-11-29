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
	<div id="portfolio-wrapper">
		<div id="portfolio" class="container">
			<div id="column1">
				<div class="title">
					<h2>Suspendisse lacus</h2>
				</div>
				<a href="#" class="image image-full"><img src="<?php get_theme_url(); ?>/images/pic02.jpg" alt="" /></a>
				<p>Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem. Mauris quam enim, molestie.</p>
				<a href="#" class="icon icon-arrow-right button">Read More</a> </div>
			<div id="column2">
				<div class="title">
					<h2>Fusce ultrices</h2>
				</div>
				<a href="#" class="image image-full"><img src="<?php get_theme_url(); ?>/images/pic03.jpg" alt="" /></a>
				<p>Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem. Mauris quam enim, molestie.</p>
				<a href="#" class="icon icon-arrow-right button">Read More</a> </div>
			<div id="column3">
				<div class="title">
					<h2>Etiam posuere</h2>
				</div>
				<a href="#" class="image image-full"><img src="<?php get_theme_url(); ?>/images/pic04.jpg" alt="" /></a>
				<p>Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem. Mauris quam enim, molestie.</p>
				<a href="#" class="icon icon-arrow-right button">Read More</a> </div>
			<div id="column4">
				<div class="title">
					<h2>Mauris vulputate</h2>
				</div>
				<a href="#" class="image image-full"><img src="<?php get_theme_url(); ?>/images/pic05.jpg" alt="" /></a>
				<p>Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem. Mauris quam enim, molestie.</p>
				<a href="#" class="icon icon-arrow-right button">Read More</a> </div>
		</div>
	</div>

<div id="footer-wrapper">
	<div id="footer" class="container">
		<div id="box1">
			<div class="title">
				<h2>Latest Post</h2>
			</div>
			<ul class="style1">
				<li><a href="#">Semper mod quis eget mi dolore</a></li>
				<li><a href="#">Quam turpis feugiat sit dolor</a></li>
				<li><a href="#">Amet ornare in hendrerit in lectus</a></li>
				<li><a href="#">Consequat etiam lorem phasellus</a></li>
				<li><a href="#">Amet turpis, feugiat et sit amet</a></li>
				<li><a href="#">Semper mod quisturpis nisi</a></li>
			</ul>
		</div>
		<div id="box2">
			<div class="title">
				<h2>Popular Links</h2>
			</div>
			<ul class="style1">
				<li><a href="#">Semper mod quis eget mi dolore</a></li>
				<li><a href="#">Quam turpis feugiat sit dolor</a></li>
				<li><a href="#">Amet ornare in hendrerit in lectus</a></li>
				<li><a href="#">Consequat etiam lorem phasellus</a></li>
				<li><a href="#">Amet turpis, feugiat et sit amet</a></li>
				<li><a href="#">Semper mod quisturpis nisi</a></li>
			</ul>
		</div>
		<div id="box3">
			<div class="title">
				<h2>Follow Us</h2>
			</div>
			<p>Proin eu wisi suscipit nulla suscipit interdum. Aenean lectus lorem, imperdiet magna.</p>
			<ul class="contact">
				<li><a href="#" class="icon icon-twitter"><span>Twitter</span></a></li>
				<li><a href="#" class="icon icon-facebook"><span>Facebook</span></a></li>
				<li><a href="#" class="icon icon-dribbble"><span>Dribbble</span></a></li>
				<li><a href="#" class="icon icon-tumblr"><span>Tumblr</span></a></li>
				<li><a href="#" class="icon icon-rss"><span>Pinterest</span></a></li>
			</ul>
				<a href="#" class="icon icon-arrow-right button">Read More</a> </div>
		</div>
	</div>
</div>
<div id="copyright" class="container">
	<p>&copy; 2014 <?php get_site_name(); ?>. All rights reserved | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://www.freecsstemplates.org/" rel="nofollow">FreeCSSTemplates.org</a> | <?php get_site_credits(); ?></p>
</div>
</body>
</html>
