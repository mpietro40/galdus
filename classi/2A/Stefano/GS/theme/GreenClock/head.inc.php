<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 		head.inc.php
* @Package:		GetSimple
* @Action:		Greenclock Theme for GetSimple CMS
*
*****************************************************/
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>
		<?php if (function_exists('get_custom_title_tag')){echo(get_custom_title_tag());}
		else { get_page_clean_title(); }  ?>
	</title>
	
	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="<?php get_theme_url(); ?>/stylesheets/base.css">
	<link rel="stylesheet" href="<?php get_theme_url(); ?>/stylesheets/skeleton.css">
	<link rel="stylesheet" href="<?php get_theme_url(); ?>/stylesheets/layout.css">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="<?php get_theme_url(); ?>/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php get_theme_url(); ?>/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php get_theme_url(); ?>/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php get_theme_url(); ?>/images/apple-touch-icon-114x114.png">

	<!-- Fonts
	================================================== -->	
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	
	<?php get_header(); ?>
</head>