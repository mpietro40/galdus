<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); } 
/****************************************************
*
* @File: 		header.inc.php
* @Package:		GetSimple
* @Action:		Arsenic theme for GetSimple CMS
* @Author:      Oleg Svetlov http://getsimplecms.ru/
*
*****************************************************/
?>
<!DOCTYPE html>
<!--[if IE 7 ]> <html lang="ru" class="ie7"> <![endif]-->
<!--[if IE 8 ]> <html lang="ru" class="ie8"> <![endif]-->
<!--[if IE 9 ]> <html lang="ru" class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js" lang="ru" > <!--<![endif]-->
<head>
    <meta charset="utf-8">	
    <title><?php get_page_clean_title(); ?> - <?php get_site_name(); ?></title>	
	<?php get_header(); ?>	
	<!-- modernizr -->
    <script src="<?php get_theme_url(); ?>/js/modernizr.js" type="text/javascript"></script>
    <link href="<?php get_theme_url(); ?>/css/style.css" rel="stylesheet" type="text/css">
	<!-- scripts -->
	<script type="text/javascript" src="<?php get_theme_url(); ?>/js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="<?php get_theme_url(); ?>/js/migrate.js"></script>
	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<link href="<?php get_theme_url(); ?>/css/ie.css" rel="stylesheet" type="text/css">
    <![endif]-->
	<!-- responsive -->
	<link href="<?php get_theme_url(); ?>/css/responsive.css" rel="stylesheet" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>

<body id="<?php get_page_slug(); ?>">

<!-- wrapper -->
<section id="wrapper">

    <!-- header -->
	<header id="header">
	    <section class="container">
		    <div class="col-3 over">
			   
			</div>
			<div class="col-9">
			    <nav class="nav">
                    <ul class="menu">
                        <?php get_navigation(get_page_slug(FALSE)); ?>
                    </ul>										
				</nav>
			</div>
			<div class="clearfix"></div>
			
<?php if ( return_page_slug() == 'index' ) { ?>
		    <div class="col-12" id="slider">
				<figure itemscope itemtype="http://schema.org/ImageObject">
			    <div class="cycle-slideshow">
                    <div class="cycle-slide">
				        
					
					        <figcaption class="figcaption" itemprop="description">
                                <p class=grassetto> Welcome to my web portal</p>
								<p class=grassetto>I hope  you enjoy  it </p>
                            </figcaption>
				        </figure>
					</div>
                </div>
			</div>
			<div class="clearfix"></div>
<?php } ?>

		</section>
	</header>
	<!-- /header -->
