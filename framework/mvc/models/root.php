<?php

    /*
    
        localhost Ltd - ALPHA CMS
        
        Version: 11.0
        
        File name: root.php
        Description: This file contains the ROOT MODEL class.
        
        Coded by George Delaportas (G0D)
        
        localhost Ltd
        Copyright (c) 2014
    
    */
    
    
    
    // ROOT MODEL class
    class ROOT_MODEL
    {
    
        public static function Get_Data($option)
        {
        
            $this_lang = ALPHA_CMS::Get_Language();
            
            $result = ALPHA_CMS::Load_Content($option, 'content', $this_lang);
            
            return $result;
        
        }
    
    }
    
    
    
    /* ---------- End ---------- */

?>
