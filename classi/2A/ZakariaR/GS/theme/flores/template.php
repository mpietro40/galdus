<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title><?php get_page_clean_title(); ?> &lt; <?php get_site_name(); ?></title>
        <?php get_header(); ?>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="robots" content="index, follow" />
        <!-- Le styles -->
        <link href="<?php get_theme_url(); ?>/bs/css/bootstrap.css" rel="stylesheet">
        <link href="<?php get_theme_url(); ?>/bs/css/bootstrap-responsive.css" rel="stylesheet">
        <link href="<?php get_theme_url(); ?>/style.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Lusitana:700' rel='stylesheet' type='text/css'>
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body id="<?php get_page_slug(); ?>">
        <div class="container">
            <!-- header -->
            <div class="row header">
                <div class="span3">
                    <a href="<?php get_site_url();?>">
                        <img src="http://classi.galdusmaffi.tk/2A/ZakariaR/GS/data/uploads/images/logo.jpg" alt="<?php get_site_name();?>" style="width:300px;"/>
                    </a>
                </div>
                <div class="span3">
                   
                </div>
                <!-- Menu -->
                <div class="span9 menu">
                    <div class="navbar">
                        <nav>
                            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse" style="color:#ccc; float:left; background:#55482b; margin:45px 0 0 90px; height:50px; width:80%;">
                                Menu &dArr;
                            </button>
                            <div class="nav-collapse collapse">
                                <ul class="nav">
                                    <?php
                                        get_navigation(return_page_slug()); 
                                        //get_i18n_navigation(return_page_slug(), 0, 99, I18N_SHOW_MENU) 
                                    ?>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Content -->
            <div class="row content">
                <div class="span8">
                    <h1><?php get_page_title();?></h1>
                    <?php get_page_content();?>
                </div>
               
            </div>
        </div>
        <div class="row footer">
            <div class="container">
                <div class="row">
                    <footer class="span12">
                        <?php include('footer.php');?>
                    </footer>
                </div>
            </div>
        </div>
        <script src="<?php get_site_url(); ?>bs/docs/assets/js/jquery.js"></script>
        <!-- Forms2 -->
	    <script src="<?php get_site_url(); ?>Forms-js/js/languages/jquery.validationEngine-pt_BR.js" type="text/javascript" charset="utf-8"></script>
	    <script src="<?php get_site_url(); ?>Forms-js/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
	    <script>
	        jQuery(document).ready(function () {
	            jQuery("#formID").validationEngine();
	        });
	        function checkHELLO(field, rules, i, options) {
	            if (field.val() != "HELLO") {
	                // this allows to use i18 for the error msgs
	                return options.allrules.validate2fields.alertText;
	            }
	        }
	    </script>
        <script src="<?php get_theme_url(); ?>/bs/js/bootstrap-collapse.js"></script>
	    <?php get_footer(); ?>
    </body>
</html>
