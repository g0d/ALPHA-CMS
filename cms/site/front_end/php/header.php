<?php

    /*
    
        localhost Ltd - ALPHA CMS
        
        Version: 11.0
        
        File name: header.php
        Description: This file contains the site header.
        
        Coded by George Delaportas (G0D)
        
        localhost Ltd
        Copyright (c) 2014
    
    */
    
    
    
    $binded_routes = array('motivations', 
                           'features', 
                           'extensions', 
                           'about');
    
    $this_mvc_route = ALPHA_CMS::MVC_Get_Route('1');
    
    $header_lang = ALPHA_CMS::Get_Language();
    
    if (in_array($this_mvc_route, $binded_routes))
    {
    
        $description = ALPHA_CMS::Load_Common('site_description', $this_mvc_route, $header_lang);
        $keywords = ALPHA_CMS::Load_Common('site_keywords', $this_mvc_route, $header_lang);
        $title = ALPHA_CMS::Load_Common('site_title', $this_mvc_route, $header_lang);
    
    }
    
    else
    {
    
        $description = ALPHA_CMS::Load_Common('site_description', 'root', $header_lang);
        $keywords = ALPHA_CMS::Load_Common('site_keywords', 'root', $header_lang);
        $title = ALPHA_CMS::Load_Common('site_title', 'root', $header_lang);
    
    }
    
    echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
          <meta name="robots" content="index, follow">
          <meta name="description" content="' . $description . '">
          <meta name="keywords" content="' . $keywords . '">
          <link rel="Icon" type="image/ico" href="/cms/themes/default/pix/alpha_cms.ico">
          <link rel="StyleSheet" href="/cms/themes/default/default.css" type="text/css" media="screen">
          <script type="text/javascript" src="/framework/extensions/ajax/forms_manager/input_controller.js"></script>
          <script type="text/javascript" src="/framework/extensions/ajax/forms_manager/form_validator.js"></script>
          <script type="text/javascript" src="/cms/site/common/js/misc.js"></script>
          <title>' . $title . '</title>';
    
    // Load all needed extensions
    ALPHA_CMS::Load_Extension('languages_manager', 'js');
    
    
    
    /* ---------- End ---------- */

?>
