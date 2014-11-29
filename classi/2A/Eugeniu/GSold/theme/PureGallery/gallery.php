<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 		template.php
* @Package:		GetSimple
* @Action:		PureGS - pure css framework for GetSimple CMS
*
*****************************************************/
?>

<!DOCTYPE html>

<html lang="en">

<head>
	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="A set of small, responsive CSS modules that you can use in every web project.">
	<title>
		<?php if (function_exists('get_custom_title_tag'))
		{echo(get_custom_title_tag());}
		else { get_page_clean_title();echo'&nbsp;&ndash;&nbsp;';get_site_name();}  ?>
	</title>
	
	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.3.0/pure-min.css">
	<link rel="stylesheet" href="<?php get_theme_url(); ?>/style.css">
	
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<link rel="shortcut icon" href="<?php get_theme_url(); ?>/images/favicon.ico">
	
	<?php get_header(); ?>
</head>

<body id="<?php get_page_slug(); ?>" >

	<!-- Primary Page Layout
	================================================== -->

<div>
    <div class="header">
        <div class="pure-menu pure-menu-open pure-menu-horizontal">
            <a class="pure-menu-heading" href=""><?php get_site_name(); ?></a>

            <ul>
				<?php get_navigation(return_page_slug()); ?>
            </ul>
        </div>
    </div>

    <div class="pure-g-r">
        <div class="pure-u-1-3 photo-box">
            <?php  if (component_exists('photo-box-1'))
						{get_component('photo-box-1');}
     else {echo('<a href="http://www.flickr.com/photos/95572727@N00/4070581709/">
					<img src="http://farm3.staticflickr.com/2447/4070581709_1204f25e3b.jpg"
						 alt="Photo of a Bamboo forest in Kyoto.">
				</a>

				<aside class="photo-box-caption">
					The Bamboo Forest, Kyoto
					<span>
						by <a href="http://www.flickr.com/photos/95572727@N00/4070581709/">Stuck in Customs</a> / <a href="http://creativecommons.org/licenses/by-nc-sa/2.0/">cc</a>
					</span>
				</aside>');} ?>
        </div>

        <div class="pure-u-2-3 text-box">
            <div class="l-box">
                <h1 class="text-box-head"><?php get_page_title(); ?></h1>
                <p class="text-box-subhead"><?php get_component('tagline');	?></p>
            </div>
        </div>

        <div class="pure-u-1-3 photo-box">
			<?php  if (component_exists('photo-box-2'))
						{get_component('photo-box-2');}
     else {echo('<a href="http://www.flickr.com/photos/ecstaticist/4015614533/">
                <img src="http://farm3.staticflickr.com/2785/4015614533_3e04ac2c7d.jpg"
                     alt="Photo of Dahlia taken using an HDR technique.">
            </a>

            <aside class="photo-box-caption">
                HDR Dahlia
                <span>
                    by <a href="http://www.flickr.com/photos/ecstaticist/4015614533/">ecstaticist</a> / <a href="http://creativecommons.org/licenses/by-nc-sa/2.0/">cc</a>
                </span>
            </aside>');} ?>
        </div>

        <div class="pure-u-1-3 photo-box">
			<?php  if (component_exists('photo-box-3'))
						{get_component('photo-box-3');}
     else {echo('<a href="http://www.flickr.com/photos/blmiers2/6159637428/">
                <img src="http://farm7.staticflickr.com/6151/6159637428_6bffb5bce1.jpg"
                     alt="Photo of a misty morning sunrise in Alaska.">
            </a>

            <aside class="photo-box-caption">
                Misty Morning Sunrise, Alaska
                <span>
                    by <a href="http://www.flickr.com/photos/blmiers2/6159637428/">blmiers2</a> / <a href="http://creativecommons.org/licenses/by-nc-sa/2.0/">cc</a>
                </span>
            </aside>');} ?>
        </div>

        <div class="pure-u-1-3 photo-box">
			<?php  if (component_exists('photo-box-4'))
						{get_component('photo-box-4');}
     else {echo('<a href="http://www.flickr.com/photos/blmiers2/6167391543/">
                <img src="http://farm7.staticflickr.com/6171/6167391543_395a7cabfd.jpg"
                     alt="Photo of a mountain in Alaska\'s Denali.">
            </a>

            <aside class="photo-box-caption">
                Mountain, Alaska\'s Denali
                <span>
                    by <a href="http://www.flickr.com/photos/blmiers2/6159637428/">blmiers2</a> / <a href="http://creativecommons.org/licenses/by-nc-sa/2.0/">cc</a>
                </span>
            </aside>');} ?>
        </div>

        <div class="pure-u-2-3 photo-box">
			<?php  if (component_exists('photo-box-5'))
						{get_component('photo-box-5');}
     else {echo('<a href="http://www.flickr.com/photos/jjjohn/2120309884/">
                <img src="http://farm3.staticflickr.com/2109/2120309884_de48fdb9fe.jpg"
                     alt="Photo of Earth\'s sky.">
            </a>

            <aside class="photo-box-caption">
                Fire, Air, Earth and Water
                <span>
                    by <a href="http://www.flickr.com/photos/jjjohn/2120309884/">jjjohn</a> / <a href="http://creativecommons.org/licenses/by-nc-sa/2.0/">cc</a>
                </span>
            </aside>');} ?>
        </div>

        <div class="pure-u-1-3 photo-box">
			<?php  if (component_exists('photo-box-6'))
						{get_component('photo-box-6');}
     else {echo('<a href="http://www.flickr.com/photos/betta_design/2086852016/">
                <img src="http://farm3.staticflickr.com/2388/2086852016_5a58dd1881.jpg"
                     alt="Photo of the Taj Mahal at sunset.">
            </a>

            <aside class="photo-box-caption">
                Taj Mahal at sunset
                <span>
                    by <a href="http://www.flickr.com/photos/betta_design/2086852016/">betta_design</a> / <a href="http://creativecommons.org/licenses/by-nc-sa/2.0/">cc</a>
                </span>
            </aside>');} ?>
        </div>
		
		<!--Sidebar or other component if required--
		<div class="pure-u-1 form-box">
            <div class="l-box">
                <?php get_component('sidebar');	?>
            </div>
        </div> -->


        <div class="pure-u-1">
            <div class="l-box">
                <?php get_page_content(); ?>
            </div>
        </div>
    </div>

    <div class="footer">
		<p>
			<?php  if (component_exists('footer'))
							{get_component('footer');}
					else {get_site_name();
						echo'&nbsp;&copy;&nbsp;';
						echo date('Y');
						echo '&nbsp;&nbsp;&nbsp;';
						get_site_credits();
						echo'&nbsp;&amp;&nbsp;<a href="http://purecss.io/">Pure</a>';
					} ?>
			
		</p>
		<?php get_footer(); ?>
    </div>
</div>
<!-- End Document
================================================== -->
</body>
</html>