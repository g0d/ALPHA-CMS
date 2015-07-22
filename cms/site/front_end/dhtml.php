<?php

    /*
    
        localhost Ltd - ALPHA CMS
        
        Version: 11.0
        
        File name: dhtml.php
        Description: This file contains the front-end DHTML.
        
        Coded by George Delaportas (G0D)
        
        localhost Ltd
        Copyright (c) 2014
    
    */
    
    
    
    if (!defined('ALPHA_CMS'))
        die('ERROR: Unable to load ALPHA CMS!');
    
    $dhtml_lang = ALPHA_CMS::Get_Language();
    
    ALPHA_CMS::Load_Extension('mvc_menu', 'php');
    
    $func_name = ALPHA_CMS::MVC_Get_Route('1');
    
    MVC_Menu::Store_Route($func_name);
    
    $this_mvc_route = str_replace('_', '/', $func_name);
    
    require_once('cms/site/common/php/doc_type.php');
    
    $dyn_langs = array();
    $dyn_langs_conf = null;
    $counter = 0;
    
    $dyn_langs = ALPHA_CMS::Execute_SQL_Command('SELECT `lang_code` 
                                                 FROM `alpha_languages`', 1);
    
    foreach ($dyn_langs as $lang_code)
    {
    
        $dyn_langs_conf .= "Setup_Language(" . $counter . ", '" . $lang_code[0] . "');";
        
        $counter++;
    
    }
    
    $dyn_langs = ALPHA_CMS::Execute_SQL_Command('SELECT `lang_code` 
                                                 FROM `alpha_languages` 
                                                 WHERE `is_default` = 1', 1);
    
    $dyn_langs_conf .= "Set_Default_Lang('" . ALPHA_CMS::Get_Default_Language() . "');";

?>

<html>

    <head>
        <?php require_once('cms/site/front_end/php/header.php'); ?>
    </head>
    
    <body onLoad="<?php echo $dyn_langs_conf; ?>
                  Setup_Lang_Pix(0, 'lang_en_pix');
                  Setup_Lang_Pix(1, 'lang_gr_pix');
                  Setup_Lang_Label(0, 'lang_en_label');
                  Setup_Lang_Label(1, 'lang_gr_label');
                  Init_Languages();
                  Fix_Greek_Lang_Pos();">
        
        <form id="form_dhtml" method="post" action="<?php echo '/' . $dhtml_lang . '/' . $this_mvc_route . '/'; ?>">

            <div id="header">

                <?php require_once('cms/site/common/php/langs.php'); ?>

                <?php require_once('cms/site/common/php/logo.php'); ?>

                <?php require_once('cms/site/front_end/php/navigation.php'); ?>

            </div>

            <div id="content">
            
                <?php
                
                    $all_routes = ALPHA_CMS::Get_All_Routes(ALPHA_CMS::Get_Language());
                    
                    if ($func_name == 'home')
                        ALPHA_CMS::Go_To_Route('home', 'key_features');
                    
                    elseif (in_array($func_name, $all_routes) && $func_name != 'root')
                        ALPHA_CMS::Go_To_Route($func_name, 'dynamic-menu');
                    
                    else
                        header('Location: http://' . $_SERVER['HTTP_HOST'] . '/' . ALPHA_CMS::Get_Default_Language() . '/home/');
                
                ?>

                <?php require_once('cms/site/front_end/php/localhost_logo.php'); ?>

            </div>

            <?php require_once('cms/site/common/php/footer.php'); ?>

        </form>
    
    </body>

</html>



<?php /* ---------- End ---------- */ ?>
