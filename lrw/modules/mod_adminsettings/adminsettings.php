<?php

/*
 * Author: Thang Tran
 * Email: thangtran29@gmail.com
 * Blog: http://thangtran29.wordpress.com/
 * Website: http://lorenweb.com/
 */

new adminsettings();
class adminsettings extends lrw
{ 
    private $hookAdminPage;
            
    function __construct() 
    {
        parent::__construct();
        
        $this->hookAdminPage = "lrw_admin_settings";
        
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
        add_menu_page( 'LRW Settings', 'LRW Settings', 'manage_options', $this->hookAdminPage, array(&$this,'adminPageRender'), '', 97 ); 
    }
    
    public function adminPageRender()
    {
        echo '123';
    }
    
}
