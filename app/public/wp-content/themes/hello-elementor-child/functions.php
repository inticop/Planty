<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'hello-elementor','hello-elementor','hello-elementor-theme-style','hello-elementor-header-footer' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 998 );

// END ENQUEUE PARENT ACTION

add_filter('wp_nav_menu_items', 'add_admin_link_to_menu', 10, 2);
function add_admin_link_to_menu($items, $args) {
    if (is_user_logged_in() && $args->menu->slug == 'menu-1-fd0c6d4') {
        $admin_link = '<li class="menu-item"><a href="' . admin_url() . '">Admin</a></li>';
        $menu_item_position = strpos($items, 'menu-item-31');
        if ($menu_item_position !== false) {
            $menu_item_position = strpos($items, '</li>', $menu_item_position) + 5;
            $items = substr_replace($items, $admin_link, $menu_item_position, 0);
        }
    }
    return $items;
}