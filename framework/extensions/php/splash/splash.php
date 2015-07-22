<?php

    /*
    
        localhost Ltd - spl@sh
        
        Version: 2.0
        
        File name: splash.php
        Description: This file contains the SPLASH wrapper class (web elements extension).
        
        Coded by George Delaportas (G0D)
        
        localhost Ltd
        Copyright (c) 2014
    
    */
    
    
    
    //Include LINK class
    require_once('elements/control/action/link.php');

    //Include BUTTON class
    require_once('elements/control/action/button.php');

    //Include DIV class
    require_once('elements/control/group/div.php');

    //Include TABLE class
    require_once('elements/control/group/table.php');

    //Include FIELDSET class
    require_once('elements/control/group/fieldset.php');

    //Include CLIST class
    require_once('elements/control/option/list.php');

    //Include SELECT class
    require_once('elements/control/option/select.php');

    //Include CHECK class
    require_once('elements/control/option/check.php');

    //Include RADIO class
    require_once('elements/control/option/radio.php');

    //Include LABEL class
    require_once('elements/control/text/label.php');

    //Include INPUT class
    require_once('elements/control/text/input.php');

    //Include AREA class
    require_once('elements/control/text/area.php');

    //Include IMAGE class
    require_once('elements/control/multimedia/image.php');

    //Include SOUND class
    require_once('elements/control/multimedia/sound.php');

    //Include VIDEO class
    require_once('elements/control/multimedia/video.php');

    // Wrapper class SPLASH
    class SPLASH
    {

        /* ------------------------ LINK ------------------------ */

        public static function Set_Link_Tag_Attribute($attribute, $value)
        {

            $result = LINK::Set_Attribute($attribute, $value);

            if ($result === false)
                return false;
            
            return true;

        }

        public static function Get_Link_Tag_Attribute($attribute)
        {

            $result = LINK::Get_Attribute($attribute);

            if ($result === false)
                return false;

            return true;

        }

        public static function Set_Link_Tag_Event($event, $com)
        {

            $result = LINK::Set_Event($event, $com);

            if ($result === false)
                return false;

            return true;

        }

        public static function Get_Link_Tag_Event($event)
        {

            $result = LINK::Get_Event($event);

            if ($result === false)
                return false;

            return true;

        }

        public static function Show_Link_Tag($content, $options = null)
        {

            $result = LINK::Show_Tag($content, $options);

            if ($result === false)
                return false;
            
            return true;

        }

        /* ------------------------- END ------------------------- */



        /* ------------------------ BUTTON ------------------------ */

        public static function Set_Button_Tag_Attribute($attribute, $value)
        {

            $result = BUTTON::Set_Attribute($attribute, $value);

            if ($result === false)
                return false;

            return true;

        }

        public static function Get_Button_Tag_Attribute($attribute)
        {

            $result = BUTTON::Get_Attribute($attribute);

            if ($result === false)
                return false;

            return true;

        }

        public static function Set_Button_Tag_Event($event, $com)
        {

            $result = BUTTON::Set_Event($event, $com);

            if ($result === false)
                return false;

            return true;

        }

        public static function Get_Button_Tag_Event($event)
        {

            $result = BUTTON::Get_Event($event);

            if ($result === false)
                return false;

            return true;

        }

        public static function Show_Button_Tag($content, $options = null)
        {

            $result = BUTTON::Show_Tag($content, $options);

            if ($result === false)
                return false;

            return true;

        }

        /* ------------------------- END ------------------------- */



        /* ------------------------ DIV ------------------------ */

        public static function Set_Div_Tag_Attribute($attribute, $value)
        {

            $result = DIV::Set_Attribute($attribute, $value);

            if ($result === false)
                return false;

            return true;

        }

        public static function Get_Div_Tag_Attribute($attribute)
        {

            $result = DIV::Get_Attribute($attribute);

            if ($result === false)
                return false;

            return true;

        }

        public static function Set_Div_Tag_Event($event, $com)
        {

            $result = DIV::Set_Event($event, $com);

            if ($result === false)
                return false;

            return true;

        }

        public static function Get_Div_Tag_Event($event)
        {

            $result = DIV::Get_Event($event);

            if ($result === false)
                return false;

            return true;

        }

        public static function Show_Div_Tag($content, $options = null)
        {

            $result = DIV::Show_Tag($content, $options);

            if ($result === false)
                return false;

            return true;

        }

        /* ------------------------- END ------------------------- */



        /* ------------------------ TABLE ------------------------ */

        public static function Set_Table_Tag_Attribute($attribute, $value)
        {

            $result = TABLE::Set_Attribute($attribute, $value);

            if ($result === false)
                return false;

            return true;

        }

        public static function Get_Table_Tag_Attribute($attribute)
        {

            $result = TABLE::Get_Attribute($attribute);

            if ($result === false)
                return false;

            return true;

        }

        public static function Set_Table_Tag_Event($event, $com)
        {

            $result = TABLE::Set_Event($event, $com);

            if ($result === false)
                return false;

            return true;

        }

        public static function Get_Table_Tag_Event($event)
        {

            $result = TABLE::Get_Event($event);

            if ($result === false)
                return false;

            return true;

        }

        public static function Show_Table_Tag($content, $options = null)
        {

            $result = TABLE::Show_Tag($content, $options);

            if ($result === false)
                return false;

            return true;

        }

        /* ------------------------- END ------------------------- */



        /* ------------------------ FIELDSET ------------------------ */

        public static function Set_Fieldset_Tag_Attribute($attribute, $value)
        {

            $result = FIELDSET::Set_Attribute($attribute, $value);

            if ($result === false)
                return false;

            return true;

        }

        public static function Get_Fieldset_Tag_Attribute($attribute)
        {

            $result = FIELDSET::Get_Attribute($attribute);

            if ($result === false)
                return false;

            return true;

        }

        public static function Set_Fieldset_Tag_Event($event, $com)
        {

            $result = FIELDSET::Set_Event($event, $com);

            if ($result === false)
                return false;

            return true;

        }

        public static function Get_Fieldset_Tag_Event($event)
        {

            $result = FIELDSET::Get_Event($event);

            if ($result === false)
                return false;

            return true;

        }

        public static function Show_Fieldset_Tag($content, $options = null)
        {

            $result = FIELDSET::Show_Tag($content, $options);

            if ($result === false)
                return false;

            return true;

        }

        /* ------------------------- END ------------------------- */



        /* ------------------------ LIST ------------------------ */

        public static function Set_List_Tag_Attribute($attribute, $value)
        {

            $result = CLIST::Set_Attribute($attribute, $value);

            if ($result === false)
                return false;

            return true;

        }

        public static function Get_List_Tag_Attribute($attribute)
        {

            $result = CLIST::Get_Attribute($attribute);

            if ($result === false)
                return false;

            return true;

        }

        public static function Set_List_Tag_Event($event, $com)
        {

            $result = CLIST::Set_Event($event, $com);

            if ($result === false)
                return false;

            return true;

        }

        public static function Get_List_Tag_Event($event)
        {

            $result = CLIST::Get_Event($event);

            if ($result === false)
                return false;

            return true;

        }

        public static function Show_List_Tag($content, $options = null)
        {

            $result = CLIST::Show_Tag($content, $options);

            if ($result === false)
                return false;

            return true;

        }

        /* ------------------------- END ------------------------- */



        /* ------------------------ SELECT ------------------------ */

        public static function Set_Select_Tag_Attribute($attribute, $value)
        {

            $result = SELECT::Set_Attribute($attribute, $value);

            if ($result === false)
                return false;

            return true;

        }

        public static function Get_Select_Tag_Attribute($attribute)
        {

            $result = SELECT::Get_Attribute($attribute);

            if ($result === false)
                return false;

            return true;

        }

        public static function Set_Select_Tag_Event($event, $com)
        {

            $result = SELECT::Set_Event($event, $com);

            if ($result === false)
                return false;

            return true;

        }

        public static function Get_Select_Tag_Event($event)
        {

            $result = SELECT::Get_Event($event);

            if ($result === false)
                return false;

            return true;

        }

        public static function Show_Select_Tag($content, $options = null)
        {

            $result = SELECT::Show_Tag($content, $options);

            if ($result === false)
                return false;

            return true;

        }

        /* ------------------------- END ------------------------- */



        /* ------------------------ CHECK ------------------------ */

        public static function Set_Check_Tag_Attribute($attribute, $value)
        {

            $result = CHECK::Set_Attribute($attribute, $value);

            if ($result === false)
                return false;

            return true;

        }

        public static function Get_Check_Tag_Attribute($attribute)
        {

            $result = CHECK::Get_Attribute($attribute);

            if ($result === false)
                return false;

            return true;

        }

        public static function Set_Check_Tag_Event($event, $com)
        {

            $result = CHECK::Set_Event($event, $com);

            if ($result === false)
                return false;

            return true;

        }

        public static function Get_Check_Tag_Event($event)
        {

            $result = CHECK::Get_Event($event);

            if ($result === false)
                return false;

            return true;

        }

        public static function Show_Check_Tag($options = null)
        {

            $result = CHECK::Show_Tag($options);

            if ($result === false)
                return false;

            return true;

        }

        /* ------------------------- END ------------------------- */



        /* ------------------------ RADIO ------------------------ */

        public static function Set_Radio_Tag_Attribute($attribute, $value)
        {

            $result = RADIO::Set_Attribute($attribute, $value);

            if ($result === false)
                return false;

            return true;

        }

        public static function Get_Radio_Tag_Attribute($attribute)
        {

            $result = RADIO::Get_Attribute($attribute);

            if ($result === false)
                return false;

            return true;

        }

        public static function Set_Radio_Tag_Event($event, $com)
        {

            $result = RADIO::Set_Event($event, $com);

            if ($result === false)
                return false;

            return true;

        }

        public static function Get_Radio_Tag_Event($event)
        {

            $result = RADIO::Get_Event($event);

            if ($result === false)
                return false;

            return true;

        }

        public static function Show_Radio_Tag($options = null)
        {

            $result = RADIO::Show_Tag($options);

            if ($result === false)
                return false;

            return true;

        }

        /* ------------------------- END ------------------------- */



        /* ------------------------ LABEL ------------------------ */

        public static function Set_Label_Tag_Attribute($attribute, $value)
        {

            $result = LABEL::Set_Attribute($attribute, $value);

            if ($result === false)
                return false;

            return true;

        }

        public static function Get_Label_Tag_Attribute($attribute)
        {

            $result = LABEL::Get_Attribute($attribute);

            if ($result === false)
                return false;

            return true;

        }

        public static function Set_Label_Tag_Event($event, $com)
        {

            $result = LABEL::Set_Event($event, $com);

            if ($result === false)
                return false;

            return true;

        }

        public static function Get_Label_Tag_Event($event)
        {

            $result = LABEL::Get_Event($event);

            if ($result === false)
                return false;

            return true;

        }

        public static function Show_Label_Tag($content, $options = null)
        {

            $result = LABEL::Show_Tag($content, $options);

            if ($result === false)
                return false;

            return true;

        }

        /* ------------------------- END ------------------------- */



        /* ------------------------ INPUT ------------------------ */

        public static function Set_Input_Tag_Attribute($attribute, $value)
        {

            $result = INPUT::Set_Attribute($attribute, $value);

            if ($result === false)
                return false;

            return true;

        }

        public static function Get_Input_Tag_Attribute($attribute)
        {

            $result = INPUT::Get_Attribute($attribute);

            if ($result === false)
                return false;

            return true;

        }

        public static function Set_Input_Tag_Event($event, $com)
        {

            $result = INPUT::Set_Event($event, $com);

            if ($result === false)
                return false;

            return true;

        }

        public static function Get_Input_Tag_Event($event)
        {

            $result = INPUT::Get_Event($event);

            if ($result === false)
                return false;

            return true;

        }

        public static function Show_Input_Tag($options = null)
        {

            $result = INPUT::Show_Tag($options);

            if ($result === false)
                return false;

            return true;

        }

        /* ------------------------- END ------------------------- */



        /* ------------------------ AREA ------------------------ */

        public static function Set_Area_Tag_Attribute($attribute, $value)
        {

            $result = AREA::Set_Attribute($attribute, $value);

            if ($result === false)
                return false;

            return true;

        }

        public static function Get_Area_Tag_Attribute($attribute)
        {

            $result = AREA::Get_Attribute($attribute);

            if ($result === false)
                return false;

            return true;

        }

        public static function Set_Area_Tag_Event($event, $com)
        {

            $result = AREA::Set_Event($event, $com);

            if ($result === false)
                return false;

            return true;

        }

        public static function Get_Area_Tag_Event($event)
        {

            $result = AREA::Get_Event($event);

            if ($result === false)
                return false;

            return true;

        }

        public static function Show_Area_Tag($content, $options = null)
        {

            $result = AREA::Show_Tag($content, $options);

            if ($result === false)
                return false;

            return true;

        }

        /* ------------------------- END ------------------------- */



        /* ------------------------ IMAGE ------------------------ */

        public static function Set_Image_Tag_Attribute($attribute, $value)
        {

            $result = IMAGE::Set_Attribute($attribute, $value);

            if ($result === false)
                return false;

            return true;

        }

        public static function Get_Image_Tag_Attribute($attribute)
        {

            $result = IMAGE::Get_Attribute($attribute);

            if ($result === false)
                return false;

            return true;

        }

        public static function Set_Image_Tag_Event($event, $com)
        {

            $result = IMAGE::Set_Event($event, $com);

            if ($result === false)
                return false;

            return true;

        }

        public static function Get_Image_Tag_Event($event)
        {

            $result = IMAGE::Get_Event($event);

            if ($result === false)
                return false;

            return true;

        }

        public static function Show_Image_Tag($options = null)
        {

            $result = IMAGE::Show_Tag($options);

            if ($result === false)
                return false;

            return true;

        }

        /* ------------------------- END ------------------------- */



        /* ------------------------ SOUND ------------------------ */

        public static function Set_Sound_Tag_Attribute($attribute, $value)
        {

            $result = SOUND::Set_Attribute($attribute, $value);

            if ($result === false)
                return false;

            return true;

        }

        public static function Get_Sound_Tag_Attribute($attribute)
        {

            $result = SOUND::Get_Attribute($attribute);

            if ($result === false)
                return false;

            return true;

        }

        public static function Set_Sound_Tag_Event($event, $com)
        {

            $result = SOUND::Set_Event($event, $com);

            if ($result === false)
                return false;

            return true;

        }

        public static function Get_Sound_Tag_Event($event)
        {

            $result = SOUND::Get_Event($event);

            if ($result === false)
                return false;

            return true;

        }

        public static function Show_Sound_Tag($message, $options = null)
        {

            $result = SOUND::Show_Tag($message, $options);

            if ($result === false)
                return false;

            return true;

        }

        /* ------------------------- END ------------------------- */



        /* ------------------------ VIDEO ------------------------ */

        public static function Set_Video_Tag_Attribute($attribute, $value)
        {

            $result = VIDEO::Set_Attribute($attribute, $value);

            if ($result === false)
                return false;

            return true;

        }

        public static function Get_Video_Tag_Attribute($attribute)
        {

            $result = VIDEO::Get_Attribute($attribute);

            if ($result === false)
                return false;

            return true;

        }

        public static function Set_Video_Tag_Event($event, $com)
        {

            $result = VIDEO::Set_Event($event, $com);

            if ($result === false)
                return false;

            return true;

        }

        public static function Get_Video_Tag_Event($event)
        {

            $result = VIDEO::Get_Event($event);

            if ($result === false)
                return false;

            return true;

        }

        public static function Show_Video_Tag($message, $options = null)
        {

            $result = VIDEO::Show_Tag($message, $options);

            if ($result === false)
                return false;

            return true;

        }

        /* ------------------------- END ------------------------- */

    }
    
    // Check whether to call a server side event
    if (!empty($_POST['event_action']) && !empty($_POST['event_file']))
    {
    
        if (stristr(file_get_contents($_POST['event_file']), $_POST['event_action']));
        {
        
            require_once($_POST['event_file']);
            
            $parenthesis_pos = strpos($_POST['event_action'], '(');
            
            $function = substr($_POST['event_action'], 0, $parenthesis_pos);
            $parameters = substr($_POST['event_action'], $parenthesis_pos + 1, -1);
            
            call_user_func($function, $parameters);
        
        }
    
    }

?>

<script type="text/javascript">

    // Post
    function Do_Post(action, file)
    {
    
        var form = null;
        var dyn_element = null;

        if (action === null || action == '' || 
            file === null || file == '')
            return false;
        
        form = document.getElementsByTagName('form');
        
        dyn_element = document.createElement('input');
        
        dyn_element.setAttribute('id', 'event_action');
        dyn_element.setAttribute('name', 'event_action');
        dyn_element.setAttribute('type', 'hidden');
        dyn_element.setAttribute('value', action);
        
        form[0].appendChild(dyn_element);
        
        dyn_element = document.createElement('input');
        
        dyn_element.setAttribute('id', 'event_file');
        dyn_element.setAttribute('name', 'event_file');
        dyn_element.setAttribute('type', 'hidden');
        dyn_element.setAttribute('value', file);
        
        form[0].appendChild(dyn_element);
        
        form[0].submit();
        
        return true;
    
    }

</script>



<?php /* ---------- End ---------- */ ?>
