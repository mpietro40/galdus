<?php

i18n_merge('i18n_lang_menu') || i18n_merge('i18n_lang_menu','en_US');

# get correct id for plugin
$thisfile = basename(__FILE__, ".php");

# register plugin
register_plugin(
	$thisfile, //Plugin id
	'I18N Language menu ', 	//Plugin name
	'0.1', 		//Plugin version
	'Alexey Rehov',  //Plugin author (nickname: Zorato)
	'http://www.web-line-studio.ru/', //author website
	'Language menu generator', //Plugin description
	'pages', //page type - on which admin tab to display
	'i18n_lang_menu_settings'  //main function (administration)
);

add_action('pages-sidebar','createSideMenu',array($thisfile,i18n_r('i18n_lang_menu/MENU_TEXT')));


function i18n_lang_menu_settings(){
    $config=get_config();
    include GSPLUGINPATH.'i18n_lang_menu/settings_handler.php';
    set_config($config);
    
    // comment out to get config structure 
    // debugLog(print_r($config,true));
    
    include GSPLUGINPATH.'i18n_lang_menu/settings_viewer.php';
}

function get_i18n_lang_menu(){
    //load config
    $config=get_config();
    
    //hook for <li> class
    $langs_arr=return_i18n_languages();
    $current_language=$langs_arr[0];
    
    foreach($config->languages->children() as $lang){
        echo '<li '.($lang->code==$current_language?'class="'.$config->class.'"':'').' ><a href="'.htmlspecialchars(return_i18n_setlang_url($lang->code)).'">'.$lang->text.'</a></li>';
    }
}


function get_config(){
    //load current config
    $conf=getXML(GSPLUGINPATH.'i18n_lang_menu/config.xml');
    //create new one
    $new_conf=new SimpleXMLExtended('<?xml version="1.0"?><config></config>');
    
    $all_languages=return_i18n_available_languages();
    foreach ($all_languages as $lang){
        
        $new_conf->languages->$lang->text=empty($conf->languages->$lang->text)? // language is new?
                                            $lang:                              // default value
                                            (string)$conf->languages->$lang->text;      // language was defined before, assign old value
        $new_conf->languages->$lang->code=$lang; //language code ( should be 2-symbol string)

    }
    $new_conf->class=(string)$conf->class?
                        (string)$conf->class: // class was defined before, assign old value
                        'current_language';   // if config file is empty, then it had no class
    
    set_config($new_conf); //save config
    
    return $new_conf;
}

function set_config(SimpleXMLExtended $c){ //function saves config
    XMLsave($c,GSPLUGINPATH.'i18n_lang_menu/config.xml'); 
}

?>