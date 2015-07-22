<?php

    /*
    
        localhost Ltd - ALPHA CMS
        
        Version: 11.0
        
        File name: main.php
        Description: This file contains the main HTML.
        
        Coded by George Delaportas (G0D)
        
        localhost Ltd
        Copyright (c) 2014
    
    */
    
    
    
    if (!defined('ALPHA_CMS'))
        die('ERROR: Unable to load ALPHA CMS!');
    
    // Initialize session support
    session_start();
    
    if (substr(ALPHA_CMS::MVC_Get_Route('1'), 0, 5) == 'admin')
        require_once('cms/site/back_end/dhtml.php');
    
    else
        require_once('cms/site/front_end/dhtml.php');
    
    
    
    /* ---------- End ---------- */

?>
