<?php
register_nav_menus( array(
'header' => __( 'Header', 'header' )
));
if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'Footer Settings',
        'menu_title'	=> 'Footer Settings',
        'menu_slug' 	=> 'footer-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ));

}
add_theme_support( 'post-thumbnails' );


function my_nav_menu_submenu_css_class( $classes ) {
    $classes[] = 'dropdown-menu-col-1';
    return $classes;
}
add_filter( 'nav_menu_submenu_css_class', 'my_nav_menu_submenu_css_class' );