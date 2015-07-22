<?php

    /*
    
        localhost Ltd - Show 410
        
        Version: 1.0
        
        File name: show_410.php
        Description: This file contains the Show 410 extension.
        
        Coded by George Delaportas (G0D)
        
        localhost Ltd
        Copyright (c) 2014
    
    */
    
    
    
    // Show 410
    function Show_410($this_lang)
    {
    
        header("HTTP/1.1 410 Gone");
        
        echo '<html>

                <head>
                    <meta name="description" content="' . ALPHA_CMS::Load_Common('site_description', 'root', $this_lang) . '">
                    <meta name="keywords" content="' . ALPHA_CMS::Load_Common('site_keywords', 'root', $this_lang) . '">
                    <link rel="Icon" type="image/ico" href="/cms/themes/galoo/pix/icons/galoo.ico">
                    <link rel="StyleSheet" href="/cms/themes/galoo/galoo.css" type="text/css" media="screen">
                    <title>Page Gone (410)</title>
                </head>

                <body>
                
                    <style type="text/css" media="screen">
                        body
                        {
                            background: url("/cms/themes/galoo/pix/404/bg_404.jpg") center top;
                        }
                    </style>
                    
                    <div class="wrap_404">

                        <div class="logo_404">
                            <img src="/cms/themes/galoo/pix/404/logo_404.png" alt="">

                            <div class="chat_404"><img src="/cms/themes/galoo/pix/404/chat_404.png" alt=""></div>
                        </div>
                        <div class="cont_404">
                            <h1>' . ALPHA_CMS::Load_Content('ouch_label', 'content', $this_lang) . '</h1>

                            <h2>' . ALPHA_CMS::Load_Content('req_page_removed_label', 'content', $this_lang) . '</h2>
                            
                            <div class="inner_404">
                                <!-- <p>You may try to search again</p>

                                <p><a href="#" class="search_button">Search</a> <input class="textbox" type="text" /></p> -->

                                <p>' . ALPHA_CMS::Load_Content('try_to_go_label', 'content', $this_lang) . '
                                    <a href="/' . $this_lang . '/" class="home_button">' . ALPHA_CMS::Load_Content('home', 'content', $this_lang) . '</a>
                                    <a href="/' . $this_lang . '/view-all-buyer-requests/" class="view_all_button">' . 
                                    ALPHA_CMS::Load_Content('view_br_label', 'content', $this_lang);
                                    
                                    if ($this_lang == 'gr')
                                        echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                                        
                              echo '</a>
                                    <a href="/' . $this_lang . '/buyer-request/" class="create_button">' . 
                                        ALPHA_CMS::Load_Content('create_deal_label', 'content', $this_lang);
                                    
                                    if ($this_lang == 'gr')
                                        echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                              
                              echo '</a>
                                </p>

                                <p>' . ALPHA_CMS::Load_Content('not_logged_in_label', 'content', $this_lang) . '
                                    <a href="/' . $this_lang . '/login/" class="login_button">' . 
                                    ALPHA_CMS::Load_Content('log_in_label', 'content', $this_lang) . '</a>' . 
                                    ALPHA_CMS::Load_Content('or_label', 'content', $this_lang) . '
                                    <a href="/' . $this_lang . '/register/" class="register_button">' . 
                                    ALPHA_CMS::Load_Content('new_register_label', 'content', $this_lang) . '</a> ' . 
                                    ALPHA_CMS::Load_Content('it_is_free_label', 'content', $this_lang) . '
                                </p>
                                
                                <p>' . ALPHA_CMS::Load_Content('more_questions_visit_label', 'content', $this_lang) . '
                                    <a href="/' . $this_lang . '/faq/" class="faq_button">' . 
                                      ALPHA_CMS::Load_Content('faq_label', 'content', $this_lang) . '</a>
                                </p>

                            </div>
                        </div>
                    </div>
                </body>
            
            </html>';
    
    }
    
    
    
    /* ---------- End ---------- */

?>
