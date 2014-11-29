<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); } 
/****************************************************
*
* @File: 		footer.inc.php
* @Package:		GetSimple
* @Action:		Arsenic theme for GetSimple CMS
* @Author:      Oleg Svetlov http://getsimplecms.ru/
*
*****************************************************/
?>
	<!-- footer -->
	<footer id="footer">
	    <section class="container">
	        <div class="col-4">
				<div class="widget">
				<h4>Questo sito è stato creato da Anouaf Zakaria</h4>
			
				</div>
			</div>
	        <div class="col-4">
				<div class="widget">
				<h4></h4>
			
				</div>
			</div>
	        <div class="col-4">
				<div class="widget">
				<h4></h4>
			    				
				</div>
			</div>
            <div class="clearfix"></div>
        </section>	
	    <!-- copy -->
	    <section id="copy">
	        <section class="container">
	            <div class="col-6">
			        <div>
				        Copyright &copy; <?php echo date('Y'); ?> <a href="<?php get_site_url(); ?>" ><?php get_site_name(); ?></a>
			        </div>	
	            </div>
	            <div class="col-6">
			        <div class="text-right">
					    <div id="cms">
						    <a class="gs" href="http://get-simple.info/" target="_blank" title="GetSimple CMS">GS</a> 
						    <a class="ru" href="http://getsimplecms.ru/" target="_blank" title="GetSimple CMS  in Russian">RU</a>
					    </div>
			        </div>	
	            </div>	
                <div class="clearfix"></div>
            </section>			
	    </section>
	    <!-- /copy -->			
	</footer>
	<!-- /footer -->
</section>	
<!-- /wrapper -->
<a id="gotoTop" href="#">&and;</a>
<script type="text/javascript" src="<?php get_theme_url(); ?>/js/custom.js"></script>
<script type="text/javascript" src="<?php get_theme_url(); ?>/js/jquery.mobilemenu.js"></script>	
<?php get_footer(); ?>
</body>
</html>		