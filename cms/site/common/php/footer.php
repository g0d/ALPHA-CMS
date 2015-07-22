<?php

    /*
    
        localhost Ltd - ALPHA CMS
        
        Version: 11.0
        
        File name: footer.php
        Description: This file contains the common footer.
        
        Coded by George Delaportas (G0D)
        
        localhost Ltd
        Copyright (c) 2014
    
    */
    
    
    
    $footer_lang = ALPHA_CMS::Get_Language();
    
    echo '<div id="footer">
            <p>' . ALPHA_CMS::Load_Common('footer_info', 'root', $footer_lang) . '</p>
          </div>';
    
    
    
    /* ---------- End ---------- */

?>
