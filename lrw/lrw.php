<?php

/*
 * Author: Thang Tran
 * Email: thangtran29@gmail.com
 * Blog: http://thangtran29.wordpress.com/
 * Website: http://lorenweb.com/
 */


include_once ('defined.php');

if ($handle = opendir(LRW_PATH_MODULES)) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
            include_once LRW_PATH_MODULES . $entry . "/" . str_replace("mod_", "", $entry) . ".php";
        }
    }
    closedir($handle);
}

class lrw 
{
            
    function __construct() 
    {
        //#
    }

}

