<?php


if (isset($_POST['submit-settings'])){
    
    unset($_POST['submit-settings']);
    $config->class=$_POST['li-class'];
    unset($_POST['li-class']);
    
    foreach($_POST as $code=>$caption){
        $config->languages->$code->text=$caption['text'];    
    }
    
}


?>