<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 		head.inc.php
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

	<div id="main" class="two-thirds column alpha">
			<h3><?php get_page_title(); ?></h3>
			<?php get_page_content(); ?>
		</div>
		<div id="sidebar" class="one-third column omega">
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