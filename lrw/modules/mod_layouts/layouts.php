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
    private $defaultSidebar;
            
    function __construct() 
    {
        parent::__construct();
        
        $this->hookAdminPage = "lrw_layouts";
        
        $this->defaultSidebar = array(
        	'header' => array(
        				'name'          => __( 'Sidebar header', LRW_THEME_DOMAIN_NAME ),
						'id'            => 'sidebar-header',
						'description'   => '',
					    'class'         => '',
						'before_widget' => '<div id="%1$s" class="widget %2$s">',
						'after_widget'  => '</div>',
						'before_title'  => '<h2 class="widgettitle">',
						'after_title'   => '</h2>' ),
        	'container' => array(
        				'name'          => __( 'Sidebar container', LRW_THEME_DOMAIN_NAME ),
        				'id'            => 'sidebar-container',
        				'description'   => '',
        				'class'         => '',
        				'before_widget' => '<div id="%1$s" class="widget %2$s">',
        				'after_widget'  => '</div>',
        				'before_title'  => '<h2 class="widgettitle">',
        				'after_title'   => '</h2>' ),
        	'footer' => array(
        				'name'          => __( 'Sidebar footer', LRW_THEME_DOMAIN_NAME ),
        				'id'            => 'sidebar-footer',
        				'description'   => '',
        				'class'         => '',
        				'before_widget' => '<div id="%1$s" class="widget %2$s">',
        				'after_widget'  => '</div>',
        				'before_title'  => '<h2 class="widgettitle">',
        				'after_title'   => '</h2>' ),
        );
        
        $this->loadActions();
        $this->loadFilters();
    }
    
    private function loadActions()
    {
        add_action( 'admin_menu', array(&$this,'adminPage') );
        add_action( 'admin_enqueue_scripts', array(&$this,'loadAdminAssets') );
        add_action( 'widgets_init', array(&$this,'registerSidebar' ));
    }
    
    private function loadFilters()
    {
        
    }
    
    public function registerSidebar()
    {
    	foreach ($this->defaultSidebar as $item)
    	{
    		register_sidebar($item);
    	}
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
    	$list = $this->defaultSidebar;
        include ("views/main.php");
    }

}
