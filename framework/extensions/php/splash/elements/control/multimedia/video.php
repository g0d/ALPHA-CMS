<?php

    /*

        localhost Ltd - spl@sh

        Version: 2.0

        File name: video.php
        Description: This file contains the VIDEO class.

        Coded by George Delaportas (G0D)

        localhost Ltd
        Copyright (c) 2014

    */



    /* ------------------------ BEGIN ------------------------ */

    //Include MULTIMEDIA class
    require_once(ALPHA_CMS::Absolute_Path('framework/extensions/php/splash/utilities/control/multimedia.php'));

    // Class: [VIDEO]
    class VIDEO extends MULTIMEDIA
    {

        private static $__src = null;
        private static $__width = null;
        private static $__height = null;
        private static $__poster = null;
        private static $__audio = null;
        private static $__autoplay = false;
        private static $__preload = false;
        private static $__loop = false;
        private static $__controls = false;

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

                case 'src':
                    self::$__src = $value;
                    return true;

                case 'width':
                    self::$__width = $value;
                    return true;

                case 'height':
                    self::$__height = $value;
                    return true;

                case 'poster':
                    self::$__poster = $value;
                    return true;

                case 'audio':
                    self::$__audio = $value;
                    return true;

                case 'autoplay':
                    if ($value == '1' || $value == true)
                        self::$__autoplay = true;
                    else
                        return false;

                    return true;

                case 'preload':
                    if ($value == '1' || $value == true)
                        self::$__preload = true;
                    else
                        return false;

                    return true;

                case 'loop':
                    if ($value == '1' || $value == true)
                        self::$__loop = true;
                    else
                        return false;

                    return true;

                case 'controls':
                    if ($value == '1' || $value == true)
                        self::$__controls = true;
                    else
                        return false;

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

                case 'direction':
                    return self::$__direction;

                case 'lang':
                    return self::$__lang;

                case 'accesskey':
                    return self::$__accesskey;

                case 'tabindex':
                    return self::$__tabindex;

                case 'src':
                    return self::$__src;

                case 'width':
                    return self::$__width;

                case 'height':
                    return self::$__height;

                case 'poster':
                    return self::$__poster;

                case 'audio':
                    return self::$__audio;

                case 'autoplay':
                    return self::$__autoplay;

                case 'preload':
                    return self::$__preload;

                case 'loop':
                    return self::$__loop;

                case 'controls':
                    return self::$__controls;

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

                case 'keydown':
                    self::$__keydown = $com;
                    return true;

                case 'keypress':
                    self::$__keypress = $com;
                    return true;

                case 'keyup':
                    self::$__keyup = $com;
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

        public static function Show_Tag($message, $options = null)
        {

            if ($options === null)
            {

                $final_tag = '<video ';

                if (self::$__id != '' && self::$__id !== null)
                    $final_tag .= 'id="' . self::$__id . '" ';

                if (self::$__class != '' && self::$__class !== null)
                    $final_tag .= 'class="' . self::$__class . '" ';

                if (self::$__style != '' && self::$__style !== null)
                    $final_tag .= 'style="' . self::$__style . '" ';

                if (self::$__title != '' && self::$__title !== null)
                    $final_tag .= 'title="' . self::$__title . '" ';

                if (self::$__direction != '' && self::$__direction !== null)
                    $final_tag .= 'dir="' . self::$__direction . '" ';

                if (self::$__lang != '' && self::$__lang !== null)
                    $final_tag .= 'lang="' . self::$__lang . '" ';

                if (self::$__accesskey != '' && self::$__accesskey !== null)
                    $final_tag .= 'accesskey="' . self::$__accesskey . '" ';

                if (self::$__tabindex != '' && self::$__tabindex !== null)
                    $final_tag .= 'tabindex="' . self::$__tabindex . '" ';

                if (self::$__src != '' && self::$__src !== null)
                    $final_tag .= 'src="' . self::$__src . '" ';

                if (self::$__width != '' && self::$__width !== null)
                    $final_tag .= 'width="' . self::$__width . '" ';

                if (self::$__height != '' && self::$__height !== null)
                    $final_tag .= 'height="' . self::$__height . '" ';

                if (self::$__poster != '' && self::$__poster !== null)
                    $final_tag .= 'poster="' . self::$__poster . '" ';

                if (self::$__audio != '' && self::$__audio !== null)
                    $final_tag .= 'audio="' . self::$__audio . '" ';

                if (self::$__click != '' && self::$__click !== null)
                    $final_tag .= 'onclick="' . self::$__click . '" ';

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

                if (self::$__keydown != '' && self::$__keydown !== null)
                    $final_tag .= 'onkeydown="' . self::$__keydown . '" ';

                if (self::$__keypress != '' && self::$__keypress !== null)
                    $final_tag .= 'onkeypress="' . self::$__keypress . '" ';

                if (self::$__keyup != '' && self::$__keyup !== null)
                    $final_tag .= 'onkeyup="' . self::$__keyup . '" ';

                if (self::$__autoplay == true)
                    $final_tag .= 'autoplay ';

                if (self::$__preload == true)
                    $final_tag .= 'preload ';

                if (self::$__loop == true)
                    $final_tag .= 'loop ';

                if (self::$__controls == true)
                    $final_tag .= 'controls';

                $final_tag .= '>' . $message . '</video>';

                echo $final_tag;

            }

            else
            {

                $final_tag = '<video ';

                if($options['id'] != '' && $options['id'] !== null)
                    $final_tag .= 'id="' . $options['id'] . '" ';

                if($options['class'] != '' && $options['class'] !== null)
                    $final_tag .= 'class="' . $options['class'] . '" ';

                if($options['style'] != '' && $options['style'] !== null)
                    $final_tag .= 'style="' . $options['style'] . '" ';

                if($options['title'] != '' && $options['title'] !== null)
                    $final_tag .= 'title="' . $options['title'] . '" ';

                if($options['direction'] != '' && $options['direction'] !== null)
                    $final_tag .= 'dir="' . $options['direction'] . '" ';

                if($options['lang'] != '' && $options['lang'] !== null)
                    $final_tag .= 'lang="' . $options['lang'] . '" ';

                if($options['accesskey'] != '' && $options['accesskey'] !== null)
                    $final_tag .= 'accesskey="' . $options['accesskey'] . '" ';

                if($options['tabindex'] != '' && $options['tabindex'] !== null)
                    $final_tag .= 'tabindex="' . $options['tabindex'] . '" ';

                if($options['src'] != '' && $options['src'] !== null)
                    $final_tag .= 'src="' . $options['src'] . '" ';

                if($options['width'] != '' && $options['width'] !== null)
                    $final_tag .= 'width="' . $options['width'] . '" ';

                if($options['height'] != '' && $options['height'] !== null)
                    $final_tag .= 'height="' . $options['height'] . '" ';

                if($options['poster'] != '' && $options['poster'] !== null)
                    $final_tag .= 'poster="' . $options['poster'] . '" ';

                if($options['audio'] != '' && $options['audio'] !== null)
                    $final_tag .= 'audio="' . $options['audio'] . '" ';

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

                if($options['keydown'] != '' && $options['keydown'] !== null)
                    $final_tag .= 'onkeydown="' . $options['keydown'] . '" ';

                if($options['keypress'] != '' && $options['keypress'] !== null)
                    $final_tag .= 'onkeypress="' . $options['keypress'] . '" ';

                if($options['keyup'] != '' && $options['keyup'] !== null)
                    $final_tag .= 'onkeyup="' . $options['keyup'] . '" ';

                if($options['autoplay'] == true || $options['autoplay'] == '1')
                    $final_tag .= 'autoplay ';

                if($options['preload'] == true || $options['preload'] == '1')
                    $final_tag .= 'preload ';

                if($options['loop'] == true || $options['loop'] == '1')
                    $final_tag .= 'loop ';

                if($options['controls'] == true || $options['controls'] == '1')
                    $final_tag .= 'controls';

                $final_tag .= '>' . $message . '</video>';

                echo $final_tag;

            }

            return true;

        }

    }

    /* ------------------------- END ------------------------- */

?>
