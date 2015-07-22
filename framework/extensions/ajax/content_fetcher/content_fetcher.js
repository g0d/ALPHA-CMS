/*

    localhost Ltd - AJAX Content Fetcher
    
    File name: content_fetcher.js (Version: 1.5)
    Description: This file contains the AJAX Content Fetcher extension.
    
    Coded by George Delaportas (G0D)
    
    localhost Ltd
    Copyright (c) 2014

*/



// Fetch web content with AJAX
function AJAX_Fetch_Content(element_id, content_url, ajax_mode, ajax_session)
{

    var url;
    var data;
    
    // Exit on error
    if (element_id === null || content_url === null || ajax_mode === null ||
        ajax_mode < 1 || ajax_mode > 2 ||
        ajax_session === null || ajax_session < 1 || ajax_session > 5)
        return false;
    
    url = '/framework/extensions/ajax/content_fetcher/content_fetcher.php';
    data = 'content_url=' + content_url;
    
    AJAX_Transfer_Data(url, data, element_id, ajax_mode, ajax_session);
    
    return true;

}



/* ---------- End ---------- */
