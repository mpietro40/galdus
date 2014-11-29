<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 		template.php
* @Package:		GetSimple
* @Action:		France-Thanksgiving theme for GetSimple CMS
* @Author:      Oleg Svetlov http://getsimplecms.ru/
*****************************************************/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php get_page_clean_title(); ?> - <?php get_site_name(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php get_header(); ?>
    <!-- styles -->
	<link href='http://fonts.googleapis.com/css?family=Oranienbaum&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link href="<?php get_theme_url(); ?>/style.css" rel="stylesheet" type="text/css">
    <!-- for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	  <link href="<?php get_theme_url(); ?>/css/ie.css" rel="stylesheet">
    <![endif]-->
    <!-- fav and touch icons -->
    <link rel="shortcut icon" href="<?php get_site_url(); ?>favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php get_theme_url(); ?>/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php get_theme_url(); ?>/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php get_theme_url(); ?>/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php get_theme_url(); ?>/images/ico/apple-touch-icon-57-precomposed.png">
</head>

<body id="<?php get_page_slug(); ?>">
<!-- wrapper -->
<section id="wrapper">
    <!-- header -->
    <header id="header">
	    <section class="container">
            <figure id="logo" class="one-second-col">		    
                <a href="<?php get_site_url(); ?>"><img src="<?php get_theme_url(); ?>/images/logo.jpg" alt="<?php get_site_name(); ?>"></a>
                <figcaption><?php get_site_name(); ?></figcaption>
				<span><?php get_component('tagline'); ?></span>
            </figure>			
			<div class="clearfix"></div>
		</section>
		<nav id="nav">
        <section class="container">		
		    <ul class="menu one-second-col">
                <?php get_navigation(return_page_slug()); ?>
            </ul>
			<div class="clearfix"></div>
		</section>
        </nav>
    </header>
    <!-- /header -->
    <!-- index-block -->
	<section id="index-block">
        <section class="fon">
	        <section class="container">
                <div class="one-col" id="slider">
				    <img src="<?php get_theme_url(); ?>/images/slider/france-thanksgiving.jpg" alt="" />				
			    </div>
			    <div class="clearfix"></div>
		    </section>
        </section>
        <div class="shadow"></div>
        <div class="against"></div>
    <!-- /index-block -->			 
    <!-- content -->
    <section id="content">
	    <!-- text -->
	    <section class="container">
	        <article class="two-thirds-col">
                <h1><?php get_page_title(); ?></h1>			
		        <?php get_page_content(); ?>
		    </article>		
		    <aside class="one-third-col">		        
				<?php get_component('sidebar');	?>
		    </aside>
			<div class="clearfix"></div>
		</section>
		<!-- /text -->
	</section>
	<!-- /content -->	
    <!-- footer -->
    <footer id="footer">
		<section id="copy">
		    <section class="container">
			    <div class="one-col">
				    <div class="company">Copyright &copy; <?php echo date('Y'); ?> <a href="<?php get_site_url(); ?>" ><?php get_site_name(); ?></a></div>
					<div id="cms">
						<a href="http://get-simple.info/" target="_blank" title="GetSimple CMS"><img alt="GetSimple CMS" src="<?php get_theme_url(); ?>/images/logo/getsimple20x20.png" /></a> 
						<a href="http://getsimplecms.ru/" target="_blank" title="GetSimple CMS по-русски"><img alt="GetSimple CMS по-русски" src="<?php get_theme_url(); ?>/images/logo/getsimple20x45-ru.png" /></a>
					</div>
			    </div>
			    <div class="clearfix"></div>
			</section>
		</section>
    </footer>
    <!-- /footer -->
</section>
<!-- /wrapper -->
<?php get_footer(); ?>
</body>
</html>