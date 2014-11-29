<?php
/*
Plugin Name: Blue Marble Theme Settings
Description: Settings for GetSimple Blue Marble Theme
Version: 1.0
Author: Luigi
*/

#Get correct ID for plugin
$thisfile_gstheme=basename(__FILE__, ".php");
$gstheme_file=GSDATAOTHERPATH .'blue_marble_settings.xml';

#Add in this plugin's language file
i18n_merge($thisfile_gstheme) || i18n_merge($thisfile_gstheme, 'en_US');

#Register plugin
register_plugin(
	$thisfile_gstheme, 								# ID of plugin, should be filename minus php
	i18n_r($thisfile_gstheme.'/GSTHEME_TITLE'), 	# Title of plugin
	'1.0', 											# Version of plugin
	'Luigi',										# Author of plugin
	'http://get-simple.info/extend/a/Luigi', 		# Author URL
	i18n_r($thisfile_gstheme.'/GSTHEME_DESC'), 		# Plugin Description
	'theme', 										# Page type of plugin
	'gstheme_show'  								# Function that displays content
);

#Hooks
#Enable menu at sidebar if this is the active theme or on theme page and activating it, handle plugin exec before global is set
if( 
	( $TEMPLATE == "blue_marble" || 	( get_filename_id() == 'theme' && isset($_POST['template']) && $_POST['template'] == 'blue_marble') ) &&
	!( $TEMPLATE == "blue_marble" && get_filename_id() == 'theme' && isset($_POST['template']) && $_POST['template'] != 'blue_marble') 
) {
	add_action('theme-sidebar','createSideMenu',array($thisfile_gstheme, i18n_r($thisfile_gstheme.'/GSTHEME_TITLE'))); 
}

#Get XML data
if (file_exists($gstheme_file)) {
	$x = getXML($gstheme_file);
	$facebook = $x->facebook;
	$twitter = $x->twitter;
} else {
	$facebook = '';
	$twitter = '';
}

function gstheme_show() {
	global $gstheme_file, $facebook, $twitter, $thisfile_gstheme;
	$success=null;$error=null;

	//Submitted form
	if (isset($_POST['submit'])) {
		$facebook=null;	$twitter=null;

		#Validate URLs provided
		if ($_POST['facebook'] != '') {
			if (validate_url($_POST['facebook'])) {
				$facebook = $_POST['facebook'];
			} else {
				$error .= i18n_r($thisfile_gstheme.'/FACEBOOK_ERROR').' ';
			}
		}

		if ($_POST['twitter'] != '') {
			if (validate_url($_POST['twitter'])) {
				$twitter = $_POST['twitter'];
			} else {
				$error .= i18n_r($thisfile_gstheme.'/TWITTER_ERROR').' ';
			}
		}

		#If no errors are found, save data to XML
		if (!$error) {
			$xml = @new SimpleXMLElement('<item></item>');
			$xml->addChild('facebook', $facebook);
			$xml->addChild('twitter', $twitter);

			if (! $xml->asXML($gstheme_file)) {
				$error = i18n_r('CHMOD_ERROR');
			} else {
				$x = getXML($gstheme_file);
				$facebook = $x->facebook;
				$twitter = $x->twitter;
				$success = i18n_r('SETTINGS_UPDATED');
			}
		}
	}
?>
		
	<!-- Layout for settings page -->
	<h3>Blue Marble Theme Settings</h3>
	<strong>Social Media</strong><br />
	<p>Add your Facebook and Twitter URL's to activate an icon in the theme header.</p>

	<?php 
	if($success) { 
		echo '<p style="color:#669933;"><b>'. $success .'</b></p>';
	} 

	if($error) { 
		echo '<p style="color:#cc0000;"><b>'. $error .'</b></p>';
	}
	?>

	<form method="post" action="<?php	echo $_SERVER ['REQUEST_URI']?>">
		<p><label for="inn_facebook" >Facebook URL</label><input id="inn_facebook" name="facebook" class="text" value="<?php echo $facebook; ?>" type="url" /></p>
		<p><label for="inn_twitter" >Twitter URL</label><input id="inn_twitter" name="twitter" class="text" value="<?php echo $twitter; ?>" type="url" /></p>
		<p><input type="submit" id="submit" class="submit" value="<?php i18n('BTN_SAVESETTINGS'); ?>" name="submit" /></p>
	</form>

	<?php

}
