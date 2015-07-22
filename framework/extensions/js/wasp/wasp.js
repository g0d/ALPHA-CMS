/*

    localhost Ltd - WASP (Floating GUI for web sites)
    
    File name: wasp.js (Version: 4.9)
    Description: This file contains the WASP - Floating GUI extension.
    
    Coded by George Delaportas (G0D)
    
    localhost Ltd
    Copyright (c) 2014

*/



// Set global variables
var global_element;
var global_id;
var dresize_flag;
var resize_flag;
var brick_flag;
var bricks_done;
var global_zindex;
var global_x, global_y;
var global_size_x, global_size_y;
var obj_x, obj_y;
var delta_x, delta_y;
var left_screen_limit, top_screen_limit;
var right_screen_limit, bottom_screen_limit;

// Set global arrays
var containers_data = new Array();
var containers_width = new Array();
var containers_height = new Array();
var widgets_names = new Array();
var this_widget_size_x = new Array();
var this_widget_size_y = new Array();
var this_widget_width = new Array();
var this_widget_height = new Array();
var this_widget_opacity = new Array();
var this_widget_move_opacity = new Array();
var this_brick_width = new Array();
var this_brick_height = new Array();

// Initialize global variables
global_element = null;
global_id = null;
dresize_flag = 0;
resize_flag = 0;
brick_flag = 0;
bricks_done = 1;
global_zindex = 0;
global_x = 0;
global_y = 0;
global_size_x = 0;
global_size_y = 0;
obj_x = 0;
obj_y = 0;
delta_x = 0;
delta_y = 0;
left_screen_limit = 0;
top_screen_limit = 0;
right_screen_limit = screen.availWidth;
bottom_screen_limit = screen.availHeight;

// Initialize WASP
function WASP_Init()
{

    var dynamic_object;
    
    dynamic_object = document.createElement('link');
    dynamic_object.setAttribute('rel', 'Stylesheet');
    dynamic_object.setAttribute('type', 'text/css');
    dynamic_object.setAttribute('media', 'screen');
    dynamic_object.setAttribute('href', '/framework/extensions/js/wasp/wasp.css');
    
    document.getElementsByTagName("head")[0].appendChild(dynamic_object);
    
    document.body.setAttribute('onSelectStart', 'return false;');
    document.body.setAttribute('onMousemove', 'Get_Coords(event); Dresize(event);');
    document.body.setAttribute('onMouseUp', 'Release(event);');
    
    return true;

}

// Setup WASP elements
function WASP_Setup_Element(pane, object_id, tag_name, title, content, status_msg, left, top, widj_width, widj_height, 
                            display, opacity, move_opacity, brick_width, brick_height, limit_left, limit_top, limit_right, limit_bottom)
{

    var dynamic_object = null;
    
    widgets_names[object_id] = tag_name;
    
    this_widget_width[object_id] = widj_width;
    this_widget_height[object_id] = widj_height;
    
    this_widget_opacity[object_id] = opacity;
    this_widget_move_opacity[object_id] = move_opacity;
    
    this_brick_width[object_id] = brick_width;
    this_brick_height[object_id] = brick_height;
    
    dynamic_object = document.createElement('div');
    
    dynamic_object.setAttribute('id', object_id);
    dynamic_object.setAttribute('class', 'widgets');
    dynamic_object.setAttribute('onMouseDown', 'Touch_Element(this, event);');
    
    dynamic_object.innerHTML = '<div class="ctrl_bar" onMouseDown="Report_Pos(' + '\'' + object_id + '\'' + ', event);">' +
                                    '<div class="minimizer" ' +
                                         'onMouseDown="Do_Brick(' + '\'' + object_id + '\'' + ', ' +  '\'' +
                                                                pane + '\'' + ', event);"></div>' + 
                                    '<div id="' + object_id + '_title" class="title">' + title + '</div>' + 
                                    '<div class="close" onMouseDown="Close_Widget(' + '\'' + object_id + '\'' + ', ' +
                                                                                  '\'' + pane + '\'' + ', event)">X</div>' +
                                '</div>' +
                                '<div class="contents">' +
                                    '<div id="' + object_id + '_data" class="data">' + content + '</div>' +
                                '</div>' + 
                                '<div class="status_bar">' +
                                    '<div id="' + object_id + '_msg" class="status_msg">' + status_msg + '</div>' + 
                                    '<div class="resize" onMouseDown="Resize_Widget(event)">&lt; &gt;</div>' +
                                '</div>';

    document.getElementById(pane).appendChild(dynamic_object);

    document.getElementById(object_id).style.left = left + 'px';
    document.getElementById(object_id).style.top = top + 'px';
    document.getElementById(object_id).style.width = widj_width + 'px';
    document.getElementById(object_id).style.height = widj_height + 'px';
    document.getElementById(object_id).style.display = display;
    document.getElementById(object_id).style.opacity = opacity;
    
    left_screen_limit = limit_left;
    top_screen_limit = limit_top;
    right_screen_limit = limit_right;
    bottom_screen_limit = limit_bottom;
    
    return true;

}

// Get mouse coordinates on document
function Get_Coords(event_listener)
{

    global_x = event_listener.clientX + document.body.scrollLeft - document.body.clientLeft;
    global_y = event_listener.clientY + document.body.scrollTop  - document.body.clientTop;
    
    return true;

}

// Set global element
function Touch_Element(object, event_listener)
{

    if (event_listener.button == 0)
    {

        global_element = object.id;

        global_id = object;
        
        global_zindex++;
        
        object.style.zIndex = global_zindex;
        
        return true;

    }

    return false;

}

// Drag & resize elements
function Dresize(event_listener)
{

    var this_obj_width = null;
    var this_obj_height = null;
    var left_dif_x = null;
    var top_dif_y = null;
    var right_dif_x = null;
    var bottom_dif_y = null;
    
    if (event_listener.button == 0 && dresize_flag == 1 && global_element !== null)
    {
    
        if (!this_widget_size_x[global_element] || this_widget_size_x[global_element] <= 0)
        {
        
            this_obj_width = parseInt(global_id.style.width.substring(0, global_id.style.width.length - 2)) + 15;
        
        }
        
        else
        {
        
            this_obj_width = parseInt(global_id.style.width.substring(0, global_id.style.width.length - 2)) +
                             global_size_x - this_widget_size_x[global_element] + 15;
        
        }
        
        if (!this_widget_size_y[global_element] || this_widget_size_y[global_element] <= 0)
        {
        
            this_obj_height = parseInt(global_id.style.height.substring(0, global_id.style.height.length - 2)) + 15;
        
        }
        
        else
        {
        
            this_obj_height = parseInt(global_id.style.height.substring(0, global_id.style.height.length - 2)) +
                              global_size_y - this_widget_size_y[global_element] + 15;
        
        }
        
        if ((parseInt(global_id.style.left.substring(0, global_id.style.left.length - 2)) > left_screen_limit && 
             parseInt(global_id.style.top.substring(0, global_id.style.top.length - 2)) > top_screen_limit) && 
            ((parseInt(global_id.style.left.substring(0, global_id.style.left.length - 2)) + this_obj_width) < right_screen_limit && 
             (parseInt(global_id.style.top.substring(0, global_id.style.top.length - 2)) + this_obj_height) < bottom_screen_limit))
        {
        
            global_id.style.left = parseInt(global_id.style.left.substring(0, global_id.style.left.length - 2)) +
                                   (global_x - obj_x) + 'px';
            
            global_id.style.top = parseInt(global_id.style.top.substring(0, global_id.style.top.length - 2)) +
                                  (global_y - obj_y) + 'px';
            
            obj_x = global_x;
            obj_y = global_y;
        
        }
        
        else
        {
        
            left_dif_x = left_screen_limit - (parseInt(global_id.style.left.substring(0, global_id.style.left.length - 2)) + global_x - obj_x);
            top_dif_y = top_screen_limit - (parseInt(global_id.style.top.substring(0, global_id.style.top.length - 2)) + global_y - obj_y);
            right_dif_x = right_screen_limit - (parseInt(global_id.style.left.substring(0, global_id.style.left.length - 2)) + 
                          (global_x - obj_x) + this_obj_width);
            bottom_dif_y = bottom_screen_limit - (parseInt(global_id.style.top.substring(0, global_id.style.top.length - 2)) + 
                          (global_y - obj_y) + this_obj_height);
            
            if (left_dif_x > 0)
            {
            
                global_id.style.left = parseInt(global_id.style.left.substring(0, global_id.style.left.length - 2)) + 
                                       global_x - obj_x + left_dif_x + 2 + 'px';
            
            }
            
            if (top_dif_y > 0)
            {
            
                global_id.style.top = parseInt(global_id.style.top.substring(0, global_id.style.top.length - 2)) + 
                                      global_y - obj_y + top_dif_y + 2 + 'px';
            
            }
            
            if (right_dif_x < 0)
            {
            
                global_id.style.left = parseInt(global_id.style.left.substring(0, global_id.style.left.length - 2)) + 
                                       global_x - obj_x + right_dif_x - 2 + 'px';
            
            }
            
            if (bottom_dif_y < 0)
            {
            
                global_id.style.top = parseInt(global_id.style.top.substring(0, global_id.style.top.length - 2)) + 
                                      global_y - obj_y + bottom_dif_y - 2 + 'px';
            
            }
            
            obj_x = global_x;
            obj_y = global_y;
            
            global_id.style.opacity = this_widget_opacity[global_element];
            
            dresize_flag = 0;
        
        }
    
    }
    
    else if (event_listener.button == 0 && resize_flag == 1 && global_element !== null)
    {
    
        if (obj_x == 0)
            obj_x = global_x;
        
        if (obj_y == 0)
            obj_y = global_y;
        
        if (document.body.scrollTop == 0)
        {
        
            global_size_x = event_listener.clientX + document.documentElement.scrollLeft - document.body.clientLeft -
                            parseInt(global_id.style.left.substring(0, global_id.style.left.length - 2)) -
                            this_widget_width[global_element];
            
            global_size_y = event_listener.clientY + document.documentElement.scrollTop - document.body.clientTop -
                            parseInt(global_id.style.top.substring(0, global_id.style.top.length - 2)) -
                            this_widget_height[global_element];
        
        }
        
        else
        {
        
            global_size_x = event_listener.clientX + document.body.scrollLeft - document.body.clientLeft -
                            parseInt(global_id.style.left.substring(0, global_id.style.left.length - 2)) -
                            this_widget_width[global_element];
            
            global_size_y = event_listener.clientY + document.body.scrollTop - document.body.clientTop -
                            parseInt(global_id.style.top.substring(0, global_id.style.top.length - 2)) -
                            this_widget_height[global_element];
        
        }
        
        if (global_size_x < 0)
            global_size_x = -15;
        
        if (global_size_y < 0)
            global_size_y = -15;
        
        if (global_size_x < (right_screen_limit - parseInt(global_id.style.left.substring(0, global_id.style.left.length - 2)) - 
            (this_widget_width[global_element] + 30)) && 
            global_size_y < (bottom_screen_limit - parseInt(global_id.style.top.substring(0, global_id.style.top.length - 2)) - 
            (this_widget_height[global_element] + 30)))
        {
        
            global_id.style.width = parseInt(global_id.style.width.substring(0, global_id.style.width.length - 2)) +
                                    global_size_x - this_widget_size_x[global_element] + 'px';
            
            global_id.style.height = parseInt(global_id.style.height.substring(0, global_id.style.height.length - 2)) +
                                     global_size_y - this_widget_size_y[global_element] + 'px';
            
            document.getElementById(global_element + '_title').style.width = 
            parseInt(global_id.style.width.substring(0, global_id.style.width.length - 2)) +
            this_widget_size_x - 70 + 'px';
            
            document.getElementById(global_element + '_data').style.height = 
            parseInt(global_id.style.height.substring(0, global_id.style.height.length - 2)) -
            this_widget_size_y - 60 + 'px';
            
            document.getElementById(global_element + '_msg').style.width = 
            parseInt(global_id.style.width.substring(0, global_id.style.width.length - 2)) +
            this_widget_size_x - 42 + 'px';
            
            this_widget_size_x[global_element] = global_size_x;
            this_widget_size_y[global_element] = global_size_y;
        
        }
    
    }
    
    else
        return false;
    
    return true;

}

// Report Position
function Report_Pos(object_id, event_listener)
{

    var this_id = null;

    if (event_listener.button == 0)
    {

        obj_x = event_listener.clientX + document.body.scrollLeft - document.body.clientLeft;
        obj_y = event_listener.clientY + document.body.scrollTop - document.body.clientTop;

        this_id = document.getElementById(object_id);

        if (this_id === null)
          return false;
        
        this_id.style.opacity = this_widget_move_opacity[object_id];

        global_element = object_id;

        dresize_flag = 1;

        return true;
    
    }
    
    return false;

}

// Release elements
function Release(event_listener)
{

    if (event_listener.button == 0)
    {
    
        resize_flag = 0;

        if (dresize_flag == 1)
        {
        
            if (global_element === null)
                return false;

            document.getElementById(global_element).style.opacity = this_widget_opacity[global_element];

            dresize_flag = 0;
        
        }

        return true;
    
    }
    
    return false;

}

// Move a specified element on document
function Move(object_id, pos_x, pos_y)
{

    var this_id = null;
    
    delta_x += pos_x;
    delta_y += pos_y;

    this_id = document.getElementById(object_id);

    this_id.style.left = delta_x + 'px';
    this_id.style.top = delta_y + 'px';
    
    return true;

}

// Do bricks
function Do_Brick(object_id, append_to, event_listener)
{

    var this_id = null;
    var dynamic_brick_div = null;
    
    if (event_listener.button == 0)
    {

        this_id = document.getElementById(object_id)

        this_id.style.display = 'none';
        
        dynamic_brick_div = document.createElement('div');
        
        dynamic_brick_div.innerHTML = '<div id="' + object_id + '_brick_name' + '" class="name_tag"></div> ' +
                                      '<div id="restorer" class="restorer" ' +
                                            'onMouseUp="Touch_Element(this, event); ' +
                                            'Do_Widget(' + '\'' + object_id + '_brick' + '\'' + ', ' +
                                            '\'' + append_to + '\'' + ', event);"></div>';
        dynamic_brick_div.setAttribute('id', object_id + '_brick');
        dynamic_brick_div.setAttribute('class', 'bricks');
        dynamic_brick_div.setAttribute('onMouseDown', 'Touch_Element(this, event); ' +
                                                      'Report_Pos(' + '\'' + object_id + '_brick' + '\'' + ', event);');
        dynamic_brick_div.setAttribute('onMouseOver', 'Show_Name_Tag(' + '\'' + object_id + '\'' + ');');
        dynamic_brick_div.setAttribute('onMouseOut', 'Hide_Name_Tag(' + '\'' + object_id + '_brick_name' + '\'' + ');');
        
        dynamic_brick_div.style.left = this_id.style.left;
        dynamic_brick_div.style.top = parseInt(this_id.style.top.substring(0, this_id.style.top.length - 2), 10) +
                                      parseInt(this_id.style.height.substring(0, this_id.style.height.length - 2), 10) -
                                      30 + 'px';
        
        dynamic_brick_div.style.width = this_brick_width[object_id] + 'px';
        dynamic_brick_div.style.height = this_brick_height[object_id] + 'px';
        
        document.getElementById(append_to).appendChild(dynamic_brick_div);
        
        containers_data[object_id] = this_id.innerHTML;
        
        containers_width[object_id] = this_id.style.width;
        containers_height[object_id] = this_id.style.height;
        
        global_zindex++;
        
        document.getElementById(object_id + '_brick').style.zIndex = global_zindex;
        document.getElementById(object_id + '_brick').style.display = 'inline';
        
        bricks_done++;

        brick_flag = 1;
        
        return true;
    
    }
    
    return false;

}

// Do widgets
function Do_Widget(object_id, remove_from, event_listener)
{

    var this_name = null;
    var this_id = null;
    var tmp_left = null;
    var tmp_top = null;
    var restored_element_id = null;
    
    this_id = document.getElementById(object_id);
    
    tmp_left = this_id.style.left;
    tmp_top = parseInt(this_id.style.top.substring(0, this_id.style.top.length - 2), 10);
    
    restored_element_id = this_id.id.substring(0, this_id.id.length - 6);
    
    if (event_listener.button == 0)
    {
    
        if (brick_flag != 1)
            return false;
        
        for (this_name in containers_data)
        {
        
            if (this_name == restored_element_id)
            {
            
                document.getElementById(remove_from).removeChild(this_id);
                
                this_id = document.getElementById(restored_element_id);

                this_id.innerHTML = containers_data[this_name];
                
                this_id.style.left = tmp_left;
                this_id.style.top = tmp_top - 
                                    parseInt(containers_height[this_name].substring(0, containers_height[this_name].length - 2), 10) + 
                                    40 + 'px';
                
                this_id.style.width = containers_width[this_name];
                this_id.style.height = containers_height[this_name];

                global_zindex++;

                this_id.style.zIndex = global_zindex;
                this_id.style.display = 'inline';
                
                containers_data.splice(this_name, 1);
                containers_width.splice(this_name, 1);
                containers_height.splice(this_name, 1);
                
                bricks_done--;
                
                if (bricks_done == 1)
                    brick_flag = 0;
                
                global_element = restored_element_id;
                
                return true;
            
            }
        
        }
    
    }
    
    return false;

}

// Close widgets
function Close_Widget(object_id, remove_from, event_listener)
{

    var this_id = null;

    if (event_listener.button == 0)
    {

        this_id = document.getElementById(object_id);
    
        document.getElementById(remove_from).removeChild(this_id);
        
        widgets_names.splice(object_id, 1);
        containers_data.splice(object_id, 1);
        containers_width.splice(object_id, 1);
        containers_height.splice(object_id, 1);
        
        global_element = null;
        global_id = null;
        
        return true;

    }

    return false;

}

// Resize widgets
function Resize_Widget(event_listener)
{

    if (event_listener.button == 0)
    {

        resize_flag = 1;
        
        return true;

    }

    return false;

}

// Show name tag for the specified element
function Show_Name_Tag(object_id)
{

    var this_id = null;
    var this_name = null;
    
    if (bricks_done > 1 && brick_flag == 1)
    {

        this_id = document.getElementById(object_id + '_brick_name');
        
        for (this_name in widgets_names)
        {

            if (object_id == this_name)
            {

                this_id.innerHTML = widgets_names[this_name];

                this_id.style.display = 'inline';

                return true;
            
            }

        }

        return false;

    }

    else
    {

        this_id = document.getElementById(object_id + '_brick_name');

        this_id.style.display = 'none';

        return false;

    }

    return false;

}

// Hide the specified name tag
function Hide_Name_Tag(object_id)
{

    document.getElementById(object_id).style.display = 'none';

    return true;

}



/* ---------- End ---------- */
