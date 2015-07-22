<?php

    /*

        localhost Ltd - spl@sh

        Version: 2.0

        File name: option.php
        Description: This file contains the OPTION abstract class.

        Coded by George Delaportas (G0D)

        localhost Ltd
        Copyright (c) 2014

    */



    /* ------------------------ BEGIN ------------------------ */

    //Include CONTROL class
    require_once(ALPHA_CMS::Absolute_Path('framework/extensions/php/splash/classes/control.php'));

    // Utility: [OPTION]
    abstract class OPTION extends CONTROL
    {

        protected static $__name = null;

    }

    /* ------------------------- END ------------------------- */

?>
