<?php

/*
 * Author: Thang Tran
 * Email: thangtran29@gmail.com
 * Blog: http://thangtran29.wordpress.com/
 * Website: http://lorenweb.com/
 */

class shortcodes extends lrw
{
    function __construct() {
        parent::__construct();
    }
    
    private function loadActions()
    {
        
    }
    
    private function loadFilters()
    {
        add_filter( 'tiny_mce_before_init', array(&$this,'my_mce_before_init_insert_formats') );  
    }
    
    function my_mce_before_init_insert_formats( $init_array ) {  
	// Define the style_formats array
	$style_formats = array(  
		// Each array child is a format with it's own settings
		array(  
			'title' => '.translation',  
			'block' => 'blockquote',  
			'classes' => 'translation',
			'wrapper' => true,
			
		),  
		array(  
			'title' => '⇠.rtl',  
			'block' => 'blockquote',  
			'classes' => 'rtl',
			'wrapper' => true,
		),
		array(  
			'title' => '.ltr⇢',  
			'block' => 'blockquote',  
			'classes' => 'ltr',
			'wrapper' => true,
		),
	);  
	// Insert the array, JSON ENCODED, into 'style_formats'
	$init_array['style_formats'] = json_encode( $style_formats );  
	
	return $init_array;  
  
    } 
}
