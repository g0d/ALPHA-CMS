<?php

    /*
    
        localhost Ltd - ALPHA Framework
        
        Version: 11.0
        
        File name: controller.php
        Description: This file contains the MVC CONTROLLER class.
        
        Coded by George Delaportas (G0D)
        
        localhost Ltd
        Copyright (c) 2014
    
    */
    
    
    
    // MVC CONTROLLER class
    class MVC_CONTROLLER
    {
    
        public static function root($option)
        {
        
            $result = ROOT_MODEL::Get_Data($option);
            
            ALPHA::MVC_Store_Content($option, $result);
            
            return true;
        
        }
        
        public static function setup($option)
        {
        
            $result = SETUP_MODEL::Get_Data($option);
            
            ALPHA::MVC_Store_Content($option, $result);
            
            return true;
        
        }
        
        public static function admin($option)
        {

            $result = ADMIN_MODEL::Get_Data($option);

            ALPHA::MVC_Store_Content($option, $result);
            
            return true;

        }
        
        public static function admin_dashboard($option)
        {

            $result = ADMIN_DASHBOARD_MODEL::Get_Data($option);

            ALPHA::MVC_Store_Content($option, $result);
            
            return true;

        }
        
        public static function admin_common($option)
        {

            $result = ADMIN_COMMON_MODEL::Get_Data($option);

            ALPHA::MVC_Store_Content($option, $result);
            
            return true;

        }

        public static function admin_content($option)
        {

            $result = ADMIN_CONTENT_MODEL::Get_Data($option);

            ALPHA::MVC_Store_Content($option, $result);
            
            return true;

        }

        public static function admin_menu($option)
        {

            $result = ADMIN_MENU_MODEL::Get_Data($option);

            ALPHA::MVC_Store_Content($option, $result);
            
            return true;

        }
        
        public static function admin_languages($option)
        {

            $result = ADMIN_LANGUAGES_MODEL::Get_Data($option);

            ALPHA::MVC_Store_Content($option, $result);
            
            return true;

        }

        public static function admin_extensions($option)
        {

            $result = ADMIN_EXTENSIONS_MODEL::Get_Data($option);

            ALPHA::MVC_Store_Content($option, $result);
            
            return true;

        }

        public static function admin_users($option)
        {

            $result = ADMIN_USERS_MODEL::Get_Data($option);

            ALPHA::MVC_Store_Content($option, $result);
            
            return true;

        }

        public static function admin_logs($option)
        {

            $result = ADMIN_LOGS_MODEL::Get_Data($option);

            ALPHA::MVC_Store_Content($option, $result);
            
            return true;

        }
        
        // Your code from here...
        
        public static function home($option)
        {
        
            if (!empty($option))
            {
            
                $result = HOME_MODEL::Get_Data($option);
                
                ALPHA::MVC_Store_Content($option, $result);
            
            }
            
            $result = HOME_MODEL::Get_Data('home-content');
            
            ALPHA::MVC_Store_Content('home-content', $result);
            
            return true;
        
        }
        
        private static function dynamic_menu()
        {
        
            $parent_menu = MVC_Menu::Get_Parent_Menu();
            
            $mvc_menu = MVC_Menu::Show($parent_menu, 0, ALPHA_CMS::Get_Language());
            
            ALPHA::MVC_Store_Content('dynamic-menu', $mvc_menu);
            
            return true;
        
        }
        
        // ...to here.
    
    }
    
    
    
    /* ---------- End ---------- */

?>
