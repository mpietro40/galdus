<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 		pagetop.inc.php
* @Package:		GetSimple
* @Action:		Greenclock Theme for GetSimple CMS
*
*****************************************************/
?>
	<!-- Top Banner: Titleblock and Main Nav
	================================================== -->

	<body id="<?php get_page_slug(); ?>" >
	
	<div class="container add-bottom">
		
		<div id="titleblock" class="seven columns alpha">
			<h2><a href="<?php get_site_url(); ?>"><?php get_site_name(); ?></a></h2>
				<h5><?php get_component('tagline');	?></h5>
		</div>
		
		<div class="nine columns omega">
			<nav >
				<ul><?php get_navigation(return_page_slug()); ?></ul>
			</nav>
		</div>
			
		<hr />