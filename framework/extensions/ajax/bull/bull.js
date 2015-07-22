/*

    localhost Ltd - BULL (AJAX System)
    
    File name: bull.js (Version: 4.0)
    Description: This file contains the BULL extension.
    
    Coded by George Delaportas (G0D)
    
    localhost Ltd
    Copyright (c) 2014

*/



// Initialize global XML HTTP object array
var global_xml_http = new Array();

// Initialize global div ID array
var ajax_div_id = new Array();

// Declare global AJAX session
var global_ajax_session;

// Declare counter
var i;

// Initialize an AJAX object
function AJAX_Init()
{

    var XML_HTTP = null;
    
    // Firefox, Opera, Safari and Chrome
    try
    {
    
        XML_HTTP = new XMLHttpRequest();
    
    }
    
    catch(error)
    {
    
        // Internet Explorer
        try
        {

            XML_HTTP = new ActiveXObject('Msxml2.XMLHTTP.6.0');

        }

        catch(error)
        {

            try
            {

                XML_HTTP = new ActiveXObject('Msxml2.XMLHTTP.3.0');

            }

            catch(error)
            {

                try
                {

                    XML_HTTP = new ActiveXObject('Microsoft.XMLHTTP');

                }

                catch(error)
                {

                    throw new Error('Your browser does not support AJAX!');

                }

            }
        
        }
    
    }
    
    return XML_HTTP;

}

// Initialize global XML HTTP objects
for (i = 0; i < 8; i++)
    global_xml_http[i] = AJAX_Init();

// State Changed - Trace changes of AJAX object
function __State_Changed()
{

    var response = null;
    
    if(global_xml_http[global_ajax_session].readyState == 4)
    {
    
        if (ajax_div_id[global_ajax_session] !== null)
        {
        
            response = global_xml_http[global_ajax_session].responseText;
            
            document.getElementById(ajax_div_id[global_ajax_session]).innerHTML = response;
        
        }
    
    }
    
    return true;

}

// State changed response - Trace changes of AJAX object
function __State_Changed_Response()
{

    var response = null;
    
    if(global_xml_http[global_ajax_session].readyState == 4)
    {
    
        response = global_xml_http[global_ajax_session].responseText;
        
        return response;
    
    }
    
    return false;

}

// Tranfer AJAX data
function AJAX_Transfer_Data(url, data, element_id, ajax_mode, ajax_session)
{

    if (url == '' || data == '' || element_id == '' ||
        ajax_mode < 1 || ajax_mode > 2 || ajax_session < 1 || ajax_session > 5)
        return false;
    
    ajax_div_id[ajax_session - 1] = element_id;
    
    global_ajax_session = ajax_session - 1;
    
    // Asynchronous transfer mode
    if (ajax_mode == 1)
    {
    
        global_xml_http[global_ajax_session].onreadystatechange = __State_Changed;
        global_xml_http[global_ajax_session].open('POST', url, true);
        global_xml_http[global_ajax_session].setRequestHeader ('Accept-encoding', 'UTF-8');
        global_xml_http[global_ajax_session].setRequestHeader ('Content-type', 'application/x-www-form-urlencoded');
        global_xml_http[global_ajax_session].setRequestHeader ('Content-length', data.length);
        global_xml_http[global_ajax_session].setRequestHeader ('Connection', 'close');
        global_xml_http[global_ajax_session].send(data);
    
    }
    
    // Synchronous transfer mode
    if (ajax_mode == 2)
    {
    
        global_xml_http[global_ajax_session].open('POST', url, false);
        global_xml_http[global_ajax_session].setRequestHeader ('Accept-encoding', 'UTF-8');
        global_xml_http[global_ajax_session].setRequestHeader ('Content-type', 'application/x-www-form-urlencoded');
        global_xml_http[global_ajax_session].setRequestHeader ('Content-length', data.length);
        global_xml_http[global_ajax_session].setRequestHeader ('Connection', 'close');
        global_xml_http[global_ajax_session].send(data);
        __State_Changed();
    
    }
    
    return true;

}

// Tranfer AJAX response
function AJAX_Transfer_Response(url, data, ajax_session)
{

    var result;
    
    if (url == '' || data == '' ||
        ajax_session < 1 || ajax_session > 3)
        return false;
    
    global_ajax_session = ajax_session + 4;
    
    global_xml_http[global_ajax_session].open('POST', url, false);
    global_xml_http[global_ajax_session].setRequestHeader ('Accept-encoding', 'UTF-8');
    global_xml_http[global_ajax_session].setRequestHeader ('Content-type', 'application/x-www-form-urlencoded');
    global_xml_http[global_ajax_session].setRequestHeader ('Content-length', data.length);
    global_xml_http[global_ajax_session].setRequestHeader ('Connection', 'close');
    global_xml_http[global_ajax_session].send(data);
    
    result = __State_Changed_Response();
    
    return result;

}



/* ---------- End ---------- */
