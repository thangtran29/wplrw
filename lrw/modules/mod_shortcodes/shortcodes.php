<?php

new shortcodes();
class shortcodes extends lrw
{
    function __construct() {
        parent::__construct();
        
        $this->loadActions();
        $this->loadFilters();
    }
    
    private function loadActions()
    {
        add_shortcode( 'cols', array(&$this,'colsShortcode') );
    }
    
    private function loadFilters()
    {
        add_filter('mce_buttons', array(&$this,'lrw_register_buttons'));
        add_filter('mce_external_plugins', array(&$this,'lrw_register_tinymce_javascript'));
    }
    
    function lrw_register_buttons($buttons) {
        $buttons[] = "lrw_shortcode";
        return $buttons;
    }
    
    function lrw_register_tinymce_javascript($plugin_array) {
        $plugin_array['lrw_shortcode'] = LRW_TEMPLATE_LRW . "/modules/mod_shortcodes/views/sc.js";
        return $plugin_array;
    }
    
    public function colsShortcode($atts,$content = null)
    {
        $colsHtml = "<div class='";
        $lg = $atts["lg"];
        
        $colsHtml .= "col-lg-{$lg} ";
        if (isset($atts["md"]))
            $colsHtml .= "col-md-{$atts['md']} ";
        if (isset($atts["sm"]))
            $colsHtml .= "col-sm-{$atts['sm']} ";
        if (isset($atts["xs"]))
            $colsHtml .= "col-xs-{$atts['xs']} ";
            
        $colsHtml .= "'>{$content}</div>";  
            
        return $colsHtml;
    }
}
