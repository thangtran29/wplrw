<?php

/*
 * Author: Thang Tran
 * Email: thangtran29@gmail.com
 * Blog: http://thangtran29.wordpress.com/
 * Website: http://lorenweb.com/
 */

new layouts();
class layouts extends lrw
{
    private $hookAdminPage;
            
    function __construct() 
    {
        parent::__construct();
        
        $this->hookAdminPage = "lrw_layouts";
        
        $this->loadActions();
        $this->loadFilters();
    }
    
    private function loadActions()
    {
        add_action( 'admin_menu', array(&$this,'adminPage') );
        add_action( 'admin_enqueue_scripts', array(&$this,'loadAdminAssets') );
    }
    
    private function loadFilters()
    {
        
    }
    
    public function loadAdminAssets($hook)
    {
        $hook = str_replace(LRW_ADMIN_PAGE_HOOK_NAME, "", $hook);
        if ($this->hookAdminPage == $hook)
        {
            wp_enqueue_style("css-bootstraps");
            wp_enqueue_script("js-bootstrap");
        }
    }
    
    public function adminPage()
    {
        add_menu_page( 'Layout Settings', 'Layout Settings', 'manage_options', $this->hookAdminPage, array(&$this,'adminPageRender'), '', 96 ); 
    }
    
    public function adminPageRender()
    {
        global $menu; 
        echo '<pre>';
        print_r($menu);
        echo '<pre>';
        echo '123';
    }

}
