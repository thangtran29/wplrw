<?php

/*
 * Author: Thang Tran
 * Email: thangtran29@gmail.com
 * Blog: http://thangtran29.wordpress.com/
 * Website: http://lorenweb.com/
 */

define("LRW_PATH", (__DIR__));
define("LRW_PATH_MODULES", LRW_PATH."/modules/");
define("LRW_PATH_LIBRARIES", LRW_PATH."/libraries/");

define("LRW_URL", get_bloginfo("url"));
define("LRW_TEMPLATE_URL", get_bloginfo("template_url"));
define("LRW_TEMPLATE_LRW", LRW_TEMPLATE_URL . "/lrw/");
define("LRW_TEMPLATE_ASSETS", LRW_TEMPLATE_LRW . "/assets/");

define("LRW_ADMIN_PAGE_HOOK_NAME", "toplevel_page_");

/*
 * defined scripts
 */
wp_register_style( 'css-bootstraps', LRW_TEMPLATE_ASSETS . "css/bootstrap.min.css" );
wp_register_style( 'css-bootstraps-theme', LRW_TEMPLATE_ASSETS . "css/bootstrap-theme.min.css" );
wp_register_script('js-bootstrap', LRW_TEMPLATE_ASSETS . "js/bootstrap.min.js");