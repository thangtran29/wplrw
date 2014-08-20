<?php

/*
 * Author: Thang Tran
 * Email: thangtran29@gmail.com
 * Blog: http://thangtran29.wordpress.com/
 * Website: http://lorenweb.com/
 */

class lib_html 
{
    
    function __construct()
    {
        
    }
    
    public function select($name,$options,$selected = '',$params = '')
    {
        $return = '<select name="'.$name.'" id="'.$name.'"';
        if(is_array($params))
        {
            foreach($params as $key=>$value)
            {
                $return.= ' '.$key.'="'.$value.'"';
            }
        }
        else
        {
            $return.= $params;
        }
        $return.= '>';
        foreach($options as $key=>$value)
        {
            $return.='<option value="'.$value.'"'.($selected != $value ? '' : ' selected="selected"').'>'.$key.'</option>';
        }
        return $return.'</select>';
    }
    
}