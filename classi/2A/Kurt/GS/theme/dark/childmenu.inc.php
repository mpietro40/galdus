<?php
  /*
    Prefer i18n Navigation if available
  */
  if (function_exists('get_i18n_navigation')) {
    
    //gain a list of the children of the current page
    $children = return_i18n_menu_data(return_page_slug(),1,1, "I18N_FILTER_CURRENT");
    
    //only apply if child pages exists, otherwise an empty ul would be added
    if (!empty($children)) {
      echo '<ul id="child_menu">';
      get_i18n_navigation(return_page_slug(), 1, 1, "I18N_SHOW_MENU");
      echo '</ul>';
    }
   
  } else if (function_exists('go_child_menu')) {
    go_child_menu();
  }
?>