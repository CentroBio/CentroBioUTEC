<?php


/*Noticias*/
function menu_noticias() {
   $args = array(
        'public' => true,
       'menu_icon' => 'dashicons-megaphone',
       'show_in_menu'       => true,
        'label'  => 'Noticias',
        'supports'=>array('title', 'thumbnail','editor')
      );
  
    register_post_type( 'noticias-post', $args );
}
add_action( 'init', 'menu_noticias' );

/*Eventos*/
function menu_eventos() {
   $args = array(
        'public' => true,
       'menu_icon' => 'dashicons-megaphone',
       'show_in_menu'       => true,
        'label'  => 'Eventos',
        'supports'=>array('title', 'thumbnail','editor')
      );
  
    register_post_type( 'eventos-post', $args );
}
add_action( 'init', 'menu_eventos' );

/*Equipo*/

function menu_equipo() {

   $args = array(
      'public' => true,
      'menu_icon' => 'dashicons-groups',
      'show_in_menu' => true,
      'label' => 'Equipo',
      'supports' => array('title', 'thumbnail','editor'),
   );
   register_post_type( 'equipo-post', $args );

   $args = array(
      'hierarchical'      => true,
      'show_ui'           => true,
      'show_admin_column' => true,
      'label'             => 'Tipo staff',
      'query_var'         => true,
      'labels'      => array(
                        'all_items'         => __('Tipos staff'),
                        ),
      'rewrite'           => array( 'slug' => 'tipo-staff' ),
   );
   register_taxonomy('tipo-staff', array('equipo-post'), $args );

}
add_action( 'init', 'menu_equipo' );

/*Visitantes*/
function menu_visitantes() {
   $args = array(
        'public' => true,
       'menu_icon' => 'dashicons-groups',
       'show_in_menu'       => true,
        'label'  => 'Visitantes',
       'supports'=>array('title', 'thumbnail','excerpt')
    );
  
    register_post_type( 'visitantes-post', $args );

}
add_action( 'init', 'menu_visitantes' );

/*Investigadores*/

function menu_investigadores() {
   $args = array(
        'public' => true,
       'menu_icon' => 'dashicons-groups',
       'show_in_menu'       => true,
        'label'  => 'Investigadores',
       'supports'=>array('title', 'thumbnail')
    );  
    register_post_type( 'investigadores-post', $args );
    $args = array(
      'hierarchical'      => true,
      'show_ui'           => true,
     'show_admin_column' => true,
     'label'             => 'Tipo de investigador',
     'query_var'         => true,
     'labels'      => array(
     'all_items'         => __('Tipos de investigadores'),
     ),
     'rewrite'           => array( 'slug' => 'tipo' ),
  );
  register_taxonomy('tipo', array('investigadores-post'), $args );
}
add_action( 'init', 'menu_investigadores' );
/*Proyectos*/

function menu_proyectos() {
   $args = array(
        'public' => true,
       'menu_icon' => 'dashicons-portfolio',
       'show_in_menu'       => true,
        'label'  => 'Proyectos',
        'show_in_rest' => true,
       'supports'=>array('title', 'thumbnail','editor', 'excerpt')
    );
  
    register_post_type( 'proyectos-post', $args );
}
add_action( 'init', 'menu_proyectos' );


function menu_aliados() {
   $args = array(
        'public' => true,
       'menu_icon' => 'dashicons-heart',
       'show_in_menu'       => true,
        'label'  => 'Aliados',
        'show_in_rest' => true,
       'supports'=>array('title', 'thumbnail')
    );
  
    register_post_type( 'aliados-post', $args );
}
add_action( 'init', 'menu_aliados' );

function menu_laboratorios() {
   $args = array(
        'public' => true,
       'menu_icon' => 'dashicons-search',
       'show_in_menu'       => true,
        'label'  => 'Laboratorios',
        'show_in_rest' => true,
        'supports'=>array('title', 'thumbnail','editor')
      );
  
    register_post_type( 'laboratorios-post', $args );
}
add_action( 'init', 'menu_laboratorios' );

function menu_lineasi() {
   $args = array(
        'public' => true,
       'menu_icon' => 'dashicons-search',
       'show_in_menu'       => true,
        'label'  => 'Líneas de investigación',
        'show_in_rest' => true,
       'supports'=>array('title', 'thumbnail')
    );
  
    register_post_type( 'lineasi-post', $args );
}
add_action( 'init', 'menu_lineasi' );

function menu_ofertas() {
   $args = array(
        'public' => true,
       'menu_icon' => 'dashicons-universal-access',
       'show_in_menu'       => true,
        'label'  => 'Ofertas laborales',
        'show_in_rest' => true,
       'supports'=>array('title', 'thumbnail','excerpt')
    );
  
    register_post_type( 'ofertas-post', $args );
}
add_action( 'init', 'menu_ofertas' );

function menu_slider_inicio() {
   $args = array(
        'public' => true,
       'menu_icon' => 'dashicons-portfolio',
       'show_in_menu'       => true,
        'label'  => 'Slider Inicio',
        'show_in_rest' => true,
        'supports'=>array('title', 'thumbnail')
    );
  
    register_post_type( 'slider-post', $args );
}
add_action( 'init', 'menu_slider_inicio' );
?>