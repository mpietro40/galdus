<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 		submenu.php
* @Package:		GetSimple
* @Action:		Greenclock Theme for GetSimple CMS
*
*****************************************************/
?>

<?php include('head.inc.php'); ?>

<!-- Top Banner: Titleblock and Main Nav
	================================================== -->
<?php include('pagetop.inc.php'); ?>

	<!-- Main content: Secondary Nav, Page Content, Sidebar and Footer
	================================================== -->

		<div id="left" class="three columns alpha">
			<?php go_child_menu(); ?>
			<img class="dec" src="<?php get_theme_url(); ?>/images/separator01.png" alt="separator"  width="100">

		</div>
		<div id="main" class="nine columns">
			<h3><?php get_page_title(); ?></h3>
			<?php get_page_content(); ?>
		</div>
		<div id="sidebar" class="four columns omega">
			<?php get_component('sidebar');	?>
		</div>
		
		<hr />
		
		
		<div class ="eight columns footer" >
			<small><?php get_site_name(); ?> &copy; <?php echo date('Y'); ?></small>
		</div>
		<div class ="eight columns footer" >
			<small><a href="http://get-simple.info/">CMS</a> | <a href="http://getskeleton.com/">GRID</a> | <a href="http://cyberpress.biz/">THEME</a></small>
		</div>
		<?php get_footer(); ?>
		
	</div><!-- container -->


<!-- End Document
================================================== -->
</body>
</html>