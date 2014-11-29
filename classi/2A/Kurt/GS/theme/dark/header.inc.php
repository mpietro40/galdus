<!doctype html>
<html lang="en">
<head>
<title><?php get_site_name(); ?> - <?php get_page_clean_title(); ?></title>
<?php get_header(); ?>
<meta charset="utf-8" />
<link rel="stylesheet" href="<?php get_theme_url(); ?>/css/style.css" type="text/css" media="screen" />
<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>

	<div id="wrapper">
    
        <nav>
            <ul class="menu">
                <?php get_navigation(return_page_slug(FALSE)); ?>
            </ul>
        </nav>
        
        <header>
        	<h1><a href="<?php get_site_url(); ?>"><?php get_site_name(); ?></a></h1>
        </header>