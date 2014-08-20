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
    protected $message;
            
    function __construct() 
    {
        $this->message = array();
    }
    
    /*
     * set message with 4 type: info,warning,danger,success
     * @param string $type
     * @param string $meeasge
     */
    protected function setMessage($type,$message)
    {
        $this->message[$type][] = $message;
    }
    
    /*
     * get message 
     * @param strong $type
     */
    protected function getMessage($type)
    {
        return $this->message[$type];
    }
    
    protected function getLibraries($lib)
    {
        include_once LRW_PATH_LIBRARIES . "/" . $lib . ".php";
        $class = $lib;
        return new $class();
    }
}

