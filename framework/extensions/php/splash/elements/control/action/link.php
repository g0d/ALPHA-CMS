<?php

    /*

        localhost Ltd - spl@sh

        Version: 2.0

        File name: link.php
        Description: This file contains the LINK class.

        Coded by George Delaportas (G0D)

        localhost Ltd
        Copyright (c) 2014

    */



    /* ------------------------ BEGIN ------------------------ */

    //Include ACTION class
    require_once(ALPHA_CMS::Absolute_Path('framework/extensions/php/splash/utilities/control/action.php'));
    
    //Include server click event actions
    require_once(ALPHA_CMS::Absolute_Path('framework/extensions/php/splash/event_actions/srvclick.php'));
    
    //Include server key event actions
    require_once(ALPHA_CMS::Absolute_Path('framework/extensions/php/splash/event_actions/srvkey.php'));
    
    // Class: [LINK]
    class LINK extends ACTION
    {

        private static $__href = null;
        private static $__target = null;
        private static $__blur = null;
        private static $__focus = null;
        private static $__srvclick = null;
        private static $__srvkey = null;
        
        public static function Set_Attribute($attribute, $value)
        {

            switch ($attribute)
            {

                case 'id':
                    self::$__id = $value;
                    return true;

                case 'class':
                    self::$__class = $value;
                    return true;

                case 'style':
                    self::$__style = $value;
                    return true;

                case 'title':
                    self::$__title = $value;
                    return true;

                case 'name':
                    self::$__name = $value;
                    return true;

                case 'direction':
                    self::$__direction = $value;
                    return true;

                case 'lang':
                    self::$__lang = $value;
                    return true;

                case 'accesskey':
                    self::$__accesskey = $value;
                    return true;

                case 'tabindex':
                    self::$__tabindex = $value;
                    return true;

                case 'href':
                    self::$__href = $value;
                    return true;

                case 'target':
                    self::$__target = $value;
                    return true;

                default:
                    return false;

            }

        }

        public static function Get_Attribute($attribute)
        {

            switch ($attribute)
            {

                case 'id':
                    return self::$__id;

                case 'class':
                    return self::$__class;

                case 'style':
                    return self::$__style;

                case 'title':
                    return self::$__title;

                case 'name':
                    return self::$__name;

                case 'direction':
                    return self::$__direction;

                case 'lang':
                    return self::$__lang;

                case 'accesskey':
                    return self::$__accesskey;

                case 'tabindex':
                    return self::$__tabindex;

                case 'href':
                    return self::$__href;

                case 'target':
                    return self::$__target;

                default:
                    return false;

            }

        }

        public static function Set_Event($event, $com)
        {

            switch ($event)
            {

                case 'click':
                    self::$__click = $com;
                    return true;

                case 'dblclick':
                    self::$__dblclick = $com;
                    return true;

                case 'mousedown':
                    self::$__mousedown = $com;
                    return true;

                case 'mousemove':
                    self::$__mousemove = $com;
                    return true;

                case 'mouseout':
                    self::$__mouseout = $com;
                    return true;

                case 'mouseover':
                    self::$__mouseover = $com;
                    return true;

                case 'mouseup':
                    self::$__mouseup = $com;
                    return true;

                case 'blur':
                    self::$__blur = $com;
                    return true;

                case 'focus':
                    self::$__focus = $com;
                    return true;

                case 'keydown':
                    self::$__keydown = $com;
                    return true;

                case 'keypress':
                    self::$__keypress = $com;
                    return true;

                case 'keyup':
                    self::$__keyup = $com;
                    return true;

                case 'srvclick':
                    self::$__srvclick = $com;
                    return true;

                case 'srvkey':
                    self::$__srvkey = $com;
                    return true;

                default:
                    return false;

            }

        }

        public static function Get_Event($event)
        {

            switch ($event)
            {

                case 'click':
                    return self::$__click;

                case 'dblclick':
                    return self::$__dblclick;

                case 'mousedown':
                    return self::$__mousedown;

                case 'mousemove':
                    return self::$__mousemove;

                case 'mouseout':
                    return self::$__mouseout;

                case 'mouseover':
                    return self::$__mouseover;

                case 'mouseup':
                    return self::$__mouseup;

                case 'blur':
                    return self::$__blur;

                case 'focus':
                    return self::$__focus;

                case 'keydown':
                    return self::$__keydown;

                case 'keypress':
                    return self::$__keypress;

                case 'keyup':
                    return self::$__keyup;

                default:
                    return false;

            }

        }

        public static function Show_Tag($content, $options = null)
        {

            if ($options === null)
            {

                $final_tag = '<a ';

                if (self::$__id != '' && self::$__id !== null)
                    $final_tag .= 'id="' . self::$__id . '" ';

                if (self::$__class != '' && self::$__class !== null)
                    $final_tag .= 'class="' . self::$__class . '" ';

                if (self::$__style != '' && self::$__style !== null)
                    $final_tag .= 'style="' . self::$__style . '" ';

                if (self::$__title != '' && self::$__title !== null)
                    $final_tag .= 'title="' . self::$__title . '" ';

                if (self::$__name != '' && self::$__name !== null)
                    $final_tag .= 'name="' . self::$__name . '" ';

                if (self::$__direction != '' && self::$__direction !== null)
                    $final_tag .= 'dir="' . self::$__direction . '" ';

                if (self::$__lang != '' && self::$__lang !== null)
                    $final_tag .= 'lang="' . self::$__lang . '" ';

                if (self::$__accesskey != '' && self::$__accesskey !== null)
                    $final_tag .= 'accesskey="' . self::$__accesskey . '" ';

                if (self::$__tabindex != '' && self::$__tabindex !== null)
                    $final_tag .= 'tabindex="' . self::$__tabindex . '" ';

                if (self::$__href != '' && self::$__href !== null)
                    $final_tag .= 'href="' . self::$__href . '" ';

                if (self::$__target != '' && self::$__target !== null)
                    $final_tag .= 'target="' . self::$__target . '" ';
                
                if (self::$__srvclick != '' && self::$__srvclick !== null)
                    $final_tag .= 'onclick="Do_Post(' . '\'' . self::$__srvclick . '\'' . ', ' . '\'' . 
                                  ALPHA_CMS::Absolute_Path('framework/extensions/php/splash/event_actions/srvclick.php') . 
                                  '\'' . ');" ';
                
                else
                {

                    if (self::$__click != '' && self::$__click !== null)
                        $final_tag .= 'onclick="' . self::$__click . '" ';
                
                }
                
                if (self::$__dblclick != '' && self::$__dblclick !== null)
                    $final_tag .= 'ondblclick="' . self::$__dblclick . '" ';

                if (self::$__mousedown != '' && self::$__mousedown !== null)
                    $final_tag .= 'onmousedown="' . self::$__mousedown . '" ';

                if (self::$__mousemove != '' && self::$__mousemove !== null)
                    $final_tag .= 'onmousemove="' . self::$__mousemove . '" ';

                if (self::$__mouseout != '' && self::$__mouseout !== null)
                    $final_tag .= 'onmouseout="' . self::$__mouseout . '" ';

                if (self::$__mouseover != '' && self::$__mouseover !== null)
                    $final_tag .= 'onmouseover="' . self::$__mouseover . '" ';

                if (self::$__mouseup != '' && self::$__mouseup !== null)
                    $final_tag .= 'onmouseup="' . self::$__mouseup . '" ';

                if (self::$__blur != '' && self::$__blur !== null)
                    $final_tag .= 'onblur="' . self::$__blur . '" ';

                if (self::$__focus != '' && self::$__focus !== null)
                    $final_tag .= 'onfocus="' . self::$__focus . '" ';

                if (self::$__keydown != '' && self::$__keydown !== null)
                    $final_tag .= 'onkeydown="' . self::$__keydown . '" ';

                if (self::$__keypress != '' && self::$__keypress !== null)
                    $final_tag .= 'onkeypress="' . self::$__keypress . '" ';

                if (self::$__srvkey != '' && self::$__srvkey !== null)
                    $final_tag .= 'onkeyup="Do_Post(' . '\'' . self::$__srvkey . '\'' . ', ' . '\'' . 
                                  ALPHA_CMS::Absolute_Path('framework/extensions/php/splash/event_actions/srvkey.php') . 
                                  '\'' . ');" ';
                
                else
                {
                
                    if (self::$__keyup != '' && self::$__keyup !== null)
                        $final_tag .= 'onkeyup="' . self::$__keyup . '" ';
                
                }
                
                $final_tag .= '>' . $content . '</a>';
                
                echo $final_tag;

            }

            else
            {

                $final_tag = '<a ';

                if($options['id'] != '' && $options['id'] !== null)
                    $final_tag .= 'id="' . $options['id'] . '" ';

                if($options['class'] != '' && $options['class'] !== null)
                    $final_tag .= 'class="' . $options['class'] . '" ';

                if($options['style'] != '' && $options['style'] !== null)
                    $final_tag .= 'style="' . $options['style'] . '" ';

                if($options['title'] != '' && $options['title'] !== null)
                    $final_tag .= 'title="' . $options['title'] . '" ';

                if($options['name'] != '' && $options['name'] !== null)
                    $final_tag .= 'name="' . $options['name'] . '" ';

                if($options['direction'] != '' && $options['direction'] !== null)
                    $final_tag .= 'dir="' . $options['direction'] . '" ';

                if($options['lang'] != '' && $options['lang'] !== null)
                    $final_tag .= 'lang="' . $options['lang'] . '" ';

                if($options['accesskey'] != '' && $options['accesskey'] !== null)
                    $final_tag .= 'accesskey="' . $options['accesskey'] . '" ';

                if($options['tabindex'] != '' && $options['tabindex'] !== null)
                    $final_tag .= 'tabindex="' . $options['tabindex'] . '" ';

                if($options['href'] != '' && $options['href'] !== null)
                    $final_tag .= 'href="' . $options['href'] . '" ';

                if($options['target'] != '' && $options['target'] !== null)
                    $final_tag .= 'target="' . $options['target'] . '" ';

                if($options['click'] != '' && $options['click'] !== null)
                    $final_tag .= 'onclick="' . $options['click'] . '" ';

                if($options['dblclick'] != '' && $options['dblclick'] !== null)
                    $final_tag .= 'ondblclick="' . $options['dblclick'] . '" ';

                if($options['mousedown'] != '' && $options['mousedown'] !== null)
                    $final_tag .= 'onmousedown="' . $options['mousedown'] . '" ';

                if($options['mousemove'] != '' && $options['mousemove'] !== null)
                    $final_tag .= 'onmousemove="' . $options['mousemove'] . '" ';

                if($options['mouseout'] != '' && $options['mouseout'] !== null)
                    $final_tag .= 'onmouseout="' . $options['mouseout'] . '" ';

                if($options['mouseover'] != '' && $options['mouseover'] !== null)
                    $final_tag .= 'onmouseover="' . $options['mouseover'] . '" ';

                if($options['mouseup'] != '' && $options['mouseup'] !== null)
                    $final_tag .= 'onmouseup="' . $options['mouseup'] . '" ';

                if($options['blur'] != '' && $options['blur'] !== null)
                    $final_tag .= 'onblur="' . $options['blur'] . '" ';

                if($options['focus'] != '' && $options['focus'] !== null)
                    $final_tag .= 'onfocus="' . $options['focus'] . '" ';

                if($options['keydown'] != '' && $options['keydown'] !== null)
                    $final_tag .= 'onkeydown="' . $options['keydown'] . '" ';

                if($options['keypress'] != '' && $options['keypress'] !== null)
                    $final_tag .= 'onkeypress="' . $options['keypress'] . '" ';

                if($options['keyup'] != '' && $options['keyup'] !== null)
                    $final_tag .= 'onkeyup="' . $options['keyup'] . '" ';

                $final_tag .= '>' . $content . '</a>';

                echo $final_tag;

            }
            
            return true;

        }

    }

    /* ------------------------- END ------------------------- */

?>
