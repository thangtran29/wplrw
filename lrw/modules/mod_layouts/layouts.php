<?php

/*
 * Author: Thang Tran
 * Email: thangtran29@gmail.com
 * Blog: http://thangtran29.wordpress.com/
 * Website: http://lorenweb.com/
 */

class layouts extends lrw
{
    function __construct() 
    {
        //$this->setAdminPage();
    }
    
    private function loadAction()
    {
        add_action( 'admin_menu', array(&$this,'adminPage') );
    }
    
    private function loadFilter()
    {
        
    }
    
    public function adminPage()
    {
        add_menu_page( 'Layout Settings', 'Layout Settings', 'manage_options', 'lrw_layouts', 'adminPageRender', '', 96 ); 
    }
    
    public function adminPageRender()
    {
        
    }

}
