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
    wp_register_style('slick_nav_style', get_template_directory_uri() . '/css/slicknav.min.css');
    wp_enqueue_style('slick_nav_style');
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
    wp_register_script('slick_nav_script', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery'),'1.1');
    wp_enqueue_script('slick_nav_script');
}
add_action('wp_enqueue_scripts', 'scripts_enqueue');

function bootstrap_css() {
	wp_enqueue_style( 'bootstrap_css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css', array(), '4.1.3'); 
}
add_action( 'wp_enqueue_scripts', 'bootstrap_css');

function bootstrap_js() {
	wp_enqueue_script( 'bootstrap_js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array('jquery'), '4.1.3', true); 
}
add_action( 'wp_enqueue_scripts', 'bootstrap_js');

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

function register_menus() { 
    register_nav_menus(
        array(
            'main-menu' => __('Main_menu'),
            'main-menu-ingles' => __('Main_menu_ingles')
        )
    ); 
} 
add_action('init', 'register_menus');

function wpbeginner_numeric_posts_nav() {
 
    if( is_singular() )
        return;
 
    global $wp_query;
 
    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;
 
    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );
 
    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;
 
    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }
 
    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }
 
    echo '<div class="navigation"><ul>' . "\n";
 
    /** Previous Post Link */
    // if ( get_previous_posts_link() )
    //     printf( '<li>%s</li>' . "\n", get_previous_posts_link() );
 
    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';
 
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
 
        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
    }
 
    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }
 
    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";
 
        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }
 
    /** Next Post Link */
    // if ( get_next_posts_link() )
    //     printf( '<li>%s</li>' . "\n", get_next_posts_link() );
 
    echo '</ul></div>' . "\n";
 
}

?>