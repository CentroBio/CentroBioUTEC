<?php 

add_action( 'cmb2_init', 'metabox_center' );
function metabox_center() {
    $prefix = '_centers_';
        
        $cmb = new_cmb2_box( array(
            'id'           => $prefix . 'center_info',
            'title'        => __( 'Center Information', 'center_info' ),
            'object_types' => array('center-post' ),
            'context'      => 'normal',
            'priority'     => 'default',
        ) );
   $cmb->add_field( array(
        'name' => __( 'Url', 'center_info' ),
        'id' => $prefix . 'url',
        'type' => 'text_url',
    ) );
}


add_action( 'cmb2_init', 'metabox_educacion' );
function metabox_educacion() {
    $prefix = '_program_';
            $cmb = new_cmb2_box( array(
            'id'           => $prefix . 'program',
            'title'        => 'Link de programa',
            'object_types' => array( 'educacion-post' ),
            'context'      => 'normal',
            'priority'     => 'default',
        ) );
   $cmb->add_field( array(
        'name' => 'Link',
        'id' => $prefix . 'url',
        'type' => 'text_url',
    ) );
}

add_action( 'cmb2_init', 'metabox_repositorio' );
function metabox_repositorio() {
    $prefix = '_publicacion_';
            $cmb = new_cmb2_box( array(
            'id'           => $prefix . 'publicacion',
            'title'        => 'Archivo adjunto',
            'object_types' => array( 'repositorio-post' ),
            'context'      => 'normal',
            'priority'     => 'default',
        ) );
   $cmb->add_field( array(
        'name' => 'Archivo',
        'id' => $prefix . 'file',
        'type' => 'file',
    ) );
}

add_action( 'cmb2_init', 'metabox_aliado' );
function metabox_aliado() {
    $prefix = '_aliado_';
            $cmb = new_cmb2_box( array(
            'id'           => $prefix . 'aliado',
            'title'        => 'Información adicional',
            'object_types' => array( 'aliados-post' ),
            'context'      => 'normal',
            'priority'     => 'default',
        ) );
       $cmb->add_field( array(
            'name' => 'Rama',
            'id' => $prefix . 'rama',
            'type' => 'text',
        ) );
        $cmb->add_field( array(
            'name' => 'Enlace web',
            'id' => $prefix . 'enlace_web',
            'type' => 'text',
        ) );
}

add_action( 'cmb2_init', 'metabox_ofertas' );
function metabox_ofertas() {
    $prefix = '_ofertas_';
            $cmb = new_cmb2_box( array(
            'id'           => $prefix . 'ofertas',
            'title'        => 'Información adicional',
            'object_types' => array( 'ofertas-post' ),
            'context'      => 'normal',
            'priority'     => 'default',
        ) );
       $cmb->add_field( array(
            'name' => 'Puesto',
            'id' => $prefix . 'puesto',
            'type' => 'text',
        ) );
        $cmb->add_field( array(
            'name' => 'Link',
            'id' => $prefix . 'link',
            'type' => 'text_url',
        ) );
}

add_action( 'cmb2_init', 'metabox_equipo' );
function metabox_equipo() {

    $prefix = '_equipo_';

    $cmb = new_cmb2_box( array(
        'id'           => $prefix . 'equipo',
        'title'        => 'Información adicional',
        'object_types' => array( 'equipo-post' ),
        'context'      => 'normal',
        'priority'     => 'default',
    ));
    $cmb->add_field( array(
        'name' => 'Cargo',
        'id' => $prefix . 'cargo',
        'type' => 'text',
    ) );
    $cmb->add_field( array(
        'name' => 'Email',
        'id' => $prefix . 'email',
        'type' => 'text',
    ) );
}

add_action( 'cmb2_init', 'metabox_visitantes' );
function metabox_visitantes() {
    $prefix = '_visitantes_';
            $cmb = new_cmb2_box( array(
            'id'           => $prefix . 'visitantes',
            'title'        => 'Información adicional',
            'object_types' => array( 'visitantes-post' ),
            'context'      => 'normal',
            'priority'     => 'default',
        ) );
       $cmb->add_field( array(
            'name' => 'Referencia',
            'id' => $prefix . 'referencia',
            'type' => 'text',
        ) );
}

add_action( 'cmb2_init', 'metabox_investigador' );

function metabox_investigador() {
    $prefix = '_investigador_';
            $cmb = new_cmb2_box( array(
            'id'           => $prefix . 'investigadores',
            'title'        => 'Información adicional',
            'object_types' => array( 'investigadores-post' ),
            'context'      => 'normal',
            'priority'     => 'default',
        ) );
       $cmb->add_field( array(
            'name' => 'Correo',
            'id' => $prefix . 'correo',
            'type' => 'text_email',
        ) );
        $cmb->add_field( array(
            'name' => 'Ocupación',
            'id' => $prefix . 'titulo',
            'type' => 'text',
        ) );
        $cmb->add_field( array(
            'name' => 'Institución',
            'id' => $prefix . 'institucion',
            'type' => 'text',
        ) );
        $cmb->add_field( array(
            'name' => 'Link institución',
            'id' => $prefix . 'link_institucion',
            'type' => 'text',
        ) );
        $cmb->add_field( array(
            'name' => 'Estudios',
            'id' => $prefix . 'estudios',
            'type' => 'text',
        ) );
        $cmb->add_field( array(
            'name' => 'Biografía',
            'id' => $prefix . 'biografia',
            'type'    => 'wysiwyg',
        ) );
        $cmb->add_field( array(
            'name' => 'Investigación',
            'id' => $prefix . 'investigacion',
            'type'    => 'wysiwyg',
        ) );
        $cmb->add_field( array(
            'name' => 'Enseñanza',
            'id' => $prefix . 'ensenanza',
            'type'    => 'wysiwyg',
        ) );
        $cmb->add_field( array(
            'name' => 'Publicaciones',
            'id' => $prefix . 'publicaciones',
            'type'    => 'wysiwyg',
        ) );
}

add_action( 'cmb2_init', 'metabox_imagen_slider' );

function metabox_imagen_slider() {
    $prefix = '_imagen_slider_';
            $cmb = new_cmb2_box( array(
            'id'           => $prefix . 'slider',
            'title'        => 'Texto descripción',
            'object_types' => array( 'slider-post' ),
            'context'      => 'normal',
            'priority'     => 'default',
        ) );
        $cmb->add_field( array(
            'id' => $prefix . 'descripcion',
            'type'    => 'wysiwyg',
        ) );
}

add_action( 'cmb2_init', 'metabox_laboratorios' );

function metabox_laboratorios() {
    $prefix = '_laboratorios_';
    $cmb = new_cmb2_box( array(
        'id'           => $prefix . 'laboratorios',
        'title'        => 'Información',
        'object_types' => array( 'laboratorios-post' ),
        'context'      => 'normal',
        'priority'     => 'default',
    ) );
    $cmb->add_field( array(
        'name' => 'Descripción',
        'id' => $prefix . 'descripcion',
        'type'    => 'wysiwyg',
    ) );
    $cmb->add_field( array(
        'name' => 'Imagenes',
        'id' => $prefix . 'imagenes',
        'type'    => 'file_list',
    ) );
    
}

?>