<?php
	$pages = Array(
		'1'	=> Array('id' => '1', 'alias' => 'Home', 'file' => '1.php'),
		'2'	=> Array('id' => '2', 'alias' => 'Cosa-contiene', 'file' => '2.php'),
		'3'	=> Array('id' => '3', 'alias' => 'Oggetti-realizzati', 'file' => '3.php'),
		'4'	=> Array('id' => '4', 'alias' => 'Blog', 'file' => '4.php'),
		'5'	=> Array('id' => '5', 'alias' => 'Servizi', 'file' => '5.php')
	);
	$forms = Array(

	);
	$base_dir = dirname(__FILE__);
	$base_url = '/';
	include dirname(__FILE__).'/inc.functions.php';
	$home_page = '1';
	$page_id = parse_uri();
	$user_key = "mTwJgmElFnrpjSFCmumu9g==";
	$user_hash = "74904b05f26449867b376d69a915f9f5";
	$blog_callback = "http://www.zyrobuilder.com/engine/?reset&ts=1324374261696blog.callback.php";
	$preview = false;
	if (isset($_POST["wb_form_id"])) include dirname(__FILE__).'/wb_scripts/wb_email_send.php';
	ob_start();
	if (isset($_REQUEST['view']) && $_REQUEST['view'] == 'news')
		include dirname(__FILE__).'/news.php';
	else if (isset($_REQUEST['view']) && $_REQUEST['view'] == 'blog')
		include dirname(__FILE__).'/blog.php';
	else
		include dirname(__FILE__).'/'.$pages[$page_id]['file'];
	ob_end_flush();

?>