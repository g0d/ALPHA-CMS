/*

    localhost Ltd - N@TuRe (Theme manager for WASP)
    
    File name: nature.js (Version: 3.8)
    Description: This file contains the N@TuRe - theme manager extension.
    
    Coded by George Delaportas (G0D)
    
    localhost Ltd
    Copyright (c) 2014

*/



// Initialize N@TuRe theme
function Nature_Init(theme)
{

    var dynamic_object;
    
    if (theme === null || theme == '')
        return false;
    
    dynamic_object = document.createElement('link');
    dynamic_object.setAttribute('rel', 'Stylesheet');
    dynamic_object.setAttribute('type', 'text/css');
    dynamic_object.setAttribute('media', 'screen');
    dynamic_object.setAttribute('href', '/framework/extensions/js/nature/themes/' + theme + '/' + theme + '.css');
    
    document.getElementsByTagName("head")[0].appendChild(dynamic_object);
    
    return true;

}



/* ---------- End ---------- */
