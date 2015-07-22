<?php

    /*
    
        localhost Ltd - ALPHA CMS
        
        Version: 11.0
        
        File name: navigation.php
        Description: This file contains the site navigation.
        
        Coded by George Delaportas (G0D)
        
        localhost Ltd
        Copyright (c) 2014
    
    */
    
    
    
    $nav_lang = ALPHA_CMS::Get_Language();
    
    $selected_menu = MVC_Menu::Get_Parent_Menu();
    
    echo '<div class="nav">
          
            <ul>
                <li>
                    <a id="home" ';
    
    if ($selected_menu == 'home')
        echo  'class="active"'; 
    
    echo ' href="/' . $nav_lang . '/home/">' . 
                        ALPHA_CMS::Load_Content('home', 'content', $nav_lang) . '
                    </a>
                </li>
                <li>
                    <a id="motivations" ';
    
    if ($selected_menu == 'motivations')
        echo  'class="active"'; 
    
    echo ' href="/' . $nav_lang . '/motivations/">' . 
                        ALPHA_CMS::Load_Content('motivations', 'content', $nav_lang) . '
                    </a>
                </li>
                <li>
                    <a id="features" ';
    
    if ($selected_menu == 'features')
        echo  'class="active"'; 
    
    echo ' href="/' . $nav_lang . '/features/">' .
                        ALPHA_CMS::Load_Content('features', 'content', $nav_lang) . '
                    </a>
                </li>
                <li>
                    <a id="extensions" ';
    
    if ($selected_menu == 'extensions')
        echo  'class="active"' ; 
    
    echo ' href="/' . $nav_lang . '/extensions/">' .
                        ALPHA_CMS::Load_Content('extensions', 'content', $nav_lang) . '
                    </a>
                </li>
                <li>
                    <a id="about" '; 
    
    if ($selected_menu == 'about')
        echo  'class="active"' ; 
    
    echo ' href="/' . $nav_lang . '/about/">' .
                        ALPHA_CMS::Load_Content('about', 'content', $nav_lang) . '
                    </a>
                </li>
            </ul>

          </div>';
    
    
    
    /* ---------- End ---------- */

?>
