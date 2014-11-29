<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 		template.php
* @Package:		GetSimple
* @Action:		Arsenic theme for GetSimple CMS
* @Author:      Oleg Svetlov http://getsimplecms.ru/
*
*****************************************************/

# Include the header template
include('header.inc.php'); 
?>	
<?php if (return_page_slug()!='index') { ?>
	<!-- title -->
	<section id="title">
	    <section class="container">
			<div class="col-12">
                <h1 itemprop="headline"><?php get_page_title(); ?></h1>
			</div>
			<div class="clearfix"></div>
		</section>
	</section>	
	<!-- title -->
<?php } ?>
	
    <!-- content -->
    <section id="content">	
	    <section class="container main">
<?php if ( return_page_slug() == 'index' ) { ?>
			<div class="col-12 text-center">
                <h1 itemprop="headline"><?php get_page_title(); ?></h1>
			</div>
			<div class="clearfix"></div>
<?php } ?>
			<!-- article -->
			<div class="col-<?php if ( return_page_slug() == 'index' ) {echo "12";} else {echo "8";} ?>">
			    <article itemscope itemtype="http://schema.org/Article">
                    <div itemprop="articleBody" class="articlebody">
					    <?php get_page_content(); ?>
                    </div> 
                </article> 
            </div>
			<?php if (return_page_slug()!='index') get_component('sidebar'); ?>
			
			<div class="clearfix"></div>
		</section>
		<!-- /main -->

	</section>
	<!-- /content -->

<?php 
#include the footer template
include('footer.inc.php'); 
?>