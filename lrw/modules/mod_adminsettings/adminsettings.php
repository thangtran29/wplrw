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
    private $metaName;
    private $html;
            
    function __construct() 
    {
        parent::__construct();
        
        $this->hookAdminPage = "lrw_admin_settings";
        $this->metaName = "lrw_admin_settings";
        
        $this->html = $this->getLibraries("lib_html");
        
        $this->loadActions();
        $this->loadFilters();
    }
    
    /*
     * hook add_action
     */
    private function loadActions()
    {
        add_action( 'admin_menu', array(&$this,'adminPage') );
        add_action( 'admin_enqueue_scripts', array(&$this,'loadAdminAssets') );
    }
    
    /*
     * hook add_filter
     */
    private function loadFilters()
    {
        //#
    }
    
    /*
     * load scripts for page
     */
    public function loadAdminAssets($hook)
    {
        $hook = str_replace(LRW_ADMIN_PAGE_HOOK_NAME, "", $hook);
        if ($this->hookAdminPage == $hook)
        {
            wp_enqueue_style("css-bootstraps");
            wp_enqueue_style("css-bootstraps-theme");
            wp_enqueue_script("js-bootstrap");
        }
    }
    
    /*
     * add a admin page 
     */
    public function adminPage()
    {
        add_menu_page( 'LRW Settings', 'LRW Settings', 'manage_options', $this->hookAdminPage, array(&$this,'adminPageRender'), '', 97 ); 
    }
    
    /*
     * load views for admin settings page
     */
    public function adminPageRender()
    {
        
        $data = $this->getData();
        include_once 'views/main.php';
        $this->html->select();
    }
    
    /*
     * get data settings
     */
    private function getData()
    {
        $data = get_option($this->metaName);
        if ($data === FALSE)
            $data = array();
        return $data;
    }
    
    /*
     * set data settings
     */
    private function setData($data)
    {
        if ( $this->getData() !== FALSE ) 
        {
            update_option( $this->metaName, $data );
        } 
        else 
        {
            $deprecated = null;
            $autoload = 'no';
            add_option( $this->metaName, $data, $deprecated, $autoload );
        }
    }
    
}
