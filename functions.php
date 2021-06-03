<?php
define("INOLOOP_VERSION","ino-1.0");

function add_favicon() {
    $favicon_url = '/wp-content/uploads/2020/02/favicon.png';
     echo '<link rel="shortcut icon" href="' . $favicon_url . '" />';
 }
 add_action('login_head', 'add_favicon');
 add_action('admin_head', 'add_favicon');

add_theme_support( 'post-thumbnails' );

function ofr_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri(),'',INOLOOP_VERSION );

    wp_enqueue_script( 'scripts', get_template_directory_uri().'/js/scripts.js',array('jquery') );

}
add_action( 'wp_enqueue_scripts', 'ofr_scripts' );

function styles_enqueue()
{
    wp_register_style('slick_style', get_template_directory_uri() . '/css/slick.css');
    wp_enqueue_style('slick_style');
    wp_register_style('slick_style_t', get_template_directory_uri() . '/css/slick-theme.css');
    wp_enqueue_style('slick_style_t');
}
add_action('wp_enqueue_scripts', 'styles_enqueue');
function scripts_enqueue()
{
    wp_register_script('jquery', "//code.jquery.com/jquery-1.11.0.min.js");
    wp_enqueue_script('jquery');

    wp_register_script('jquery-min', "//code.jquery.com/jquery-migrate-1.2.1.min.js");
    wp_enqueue_script('jquery-min');

    wp_register_script('slick_script', get_template_directory_uri() . '/js/slick.min.js', array('jquery'),'1.1');
    wp_enqueue_script('slick_script');
}
add_action('wp_enqueue_scripts', 'scripts_enqueue');

require_once( get_template_directory() . '/inc/metaboxes.php' );
require_once( get_template_directory() . '/inc/post-types.php' );

add_action( 'after_setup_theme', 'language' );
function language(){
  load_theme_textdomain( 'inotheme', get_template_directory() . '/languages' );
}

function excerpt_length( $length ) {
    return 25;
}
add_filter('excerpt_length', 'excerpt_length');
function blog_sidebar() {
    register_sidebar(
        array (
            'name' => 'Blog Sidebar',
            'id' => 'blog-sidebar',
            'description' => 'Sidebar para el blog y entradas',
            'before_widget' => '<section id="%1$s" class="widget %2$s widget-content">',
            'after_widget' => "</section>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
}
add_action( 'widgets_init', 'blog_sidebar' );

?>