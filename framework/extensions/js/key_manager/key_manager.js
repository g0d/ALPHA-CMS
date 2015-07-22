/*

    localhost Ltd - Key Manager
    
    File name: key_manager.js (Version: 1.2)
    Description: This file contains the Key Manager extension.
    
    Coded by George Delaportas (G0D)
    
    localhost Ltd
    Copyright (c) 2014

*/



// Global keyboard key
var keyboard_key = null;

// Scan keys
function Scan_Keys(key_event)
{

    try
    {
    
        keyboard_key = key_event.keyCode;
        
        return true;
    
    }
    
    catch(e)
    {
    
        return false;
    
    }

}

// Get keys
function Get_Keys()
{

    try
    {
    
        return keyboard_key;
    
    }
    
    catch(e)
    {
    
        return false;
    
    }

}



/* ---------- End ---------- */
