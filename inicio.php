<?php /* Template Name: Inicio */ ?>
<?php get_header(); ?>

<div class="imagen-fondo-inicio">
    <div class="contenido">
        <h1 class="titulo-fondo-imagen texto-blanco"><?php _e( "Centro BIO UTEC", "inotheme" ) ?></h1>
        <p class="subtitulo-fondo-imagen texto-blanco"><?php _e( "Investigación en bioingeniería", "inotheme" ) ?></p>
    </div>
</div>

<div class="contenedor-intro padding-vertical padding-lateral">
    <div class="contenido">
        <p class="texto-intro">
            <?php _e('Transformamos la sociedad buscando soluciones en', 'inotheme') ?><span
                class="texto-intro-bold"><?php _e(' medicina y biología a través de la ingeniería', 'inotheme') ?></span>
        </p>
        <div class="contenedor-iconos">
            <img class="icono" src="<?php echo get_template_directory_uri(); ?>/img/iconos/medicina.png">
            <img class="icono-mas" src="<?php echo get_template_directory_uri(); ?>/img/iconos/mas_celeste.png">
            <img class="icono" src="<?php echo get_template_directory_uri(); ?>/img/iconos/biologia.png">
            <img class="icono-mas" src="<?php echo get_template_directory_uri(); ?>/img/iconos/mas_celeste.png">
            <img class="icono" src="<?php echo get_template_directory_uri(); ?>/img/iconos/accesibilidad.png">
        </div>
    </div>
</div>

<div class="flex-column-center-center seccion-enlaces padding-top-only padding-lateral">
    <h2 class="titulo-seccion"><?php _e( "Enlaces de interés", "inotheme" ) ?></h2>
</div>

<div class="padding-bottom-only">
    <div class="contenedor-carousel-enlaces">
        <div class="carousel-enlaces">
            <div class="elemento-carousel-enlaces">
                <img class="imagen-elemento-carousel-enlaces"
                    src="<?php echo get_template_directory_uri(); ?>/img/imagenes_carousel/nosotros.jpg">
            </div>
            <div class="elemento-carousel-enlaces">
                <img class="imagen-elemento-carousel-enlaces"
                    src="<?php echo get_template_directory_uri(); ?>/img/imagenes_carousel/investigadores.jpg">
            </div>
            <div class="elemento-carousel-enlaces">
                <img class="imagen-elemento-carousel-enlaces"
                    src="<?php echo get_template_directory_uri(); ?>/img/imagenes_carousel/lineas_de_investigacion.jpg">
            </div>
            <div class="elemento-carousel-enlaces">
                <img class="imagen-elemento-carousel-enlaces"
                    src="<?php echo get_template_directory_uri(); ?>/img/imagenes_carousel/proyectos.jpg">
            </div>
            <div class="elemento-carousel-enlaces">
                <img class="imagen-elemento-carousel-enlaces"
                    src="<?php echo get_template_directory_uri(); ?>/img/imagenes_carousel/laboratorios.JPG">
            </div>
        </div>
        <div class="contenedor-enlaces">
            <a class="elemento-enlace" href="<?php _e( "/nosotros", "inotheme" ) ?>">
                <h4 class="enlace texto-regular titulo texto-blanco"><?php _e( "Nosotros", "inotheme" ) ?></h4>
            </a>
            <a class="elemento-enlace" href="<?php _e( "/investigadores", "inotheme" ) ?>">
                <h4 class="enlace texto-regular titulo texto-blanco"><?php _e( "Investigadores", "inotheme" ) ?></h4>
            </a>
            <a class="elemento-enlace" href="<?php _e( "/lineas-de-investigacion", "inotheme" ) ?>">
                <h4 class="enlace texto-regular titulo texto-blanco">
                    <?php _e( "Líneas de investigación", "inotheme" ) ?></h4>
            </a>
            <a class="elemento-enlace" href="<?php _e( "/proyectos", "inotheme" ) ?>">
                <h4 class="enlace texto-regular titulo texto-blanco"><?php _e( "Proyectos", "inotheme" ) ?></h4>
            </a>
            <a class="elemento-enlace" href="<?php _e( "/laboratorios", "inotheme" ) ?>">
                <h4 class="enlace texto-regular titulo texto-blanco"><?php _e( "Laboratorios", "inotheme" ) ?></h4>
            </a>
        </div>
    </div>
</div>

<div class="seccion-eventos padding-vertical padding-lateral">

    <h2 class="titulo-seccion"><?php _e( "Eventos", "inotheme" ) ?></h2>
    <div class="row contenedor-eventos">

        <?php	
            
            $args = array(
                'post_type' => 'eventos-post',
                'posts_per_page' => '2',
            );
            $query = new WP_Query( $args );
                    
        ?>

        <?php if ( $query->have_posts() ) : ?>
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>

        <div class="col-12 col-sm-12 col-md-6 col-lg-6 contenedor-evento">
            <div class="contenido">
                <img class="imagen-evento"
                    src="<?php echo ipq_get_theme_image_url( get_post_thumbnail_id(), array( 450, 350, false ) ); ?>"
                    alt="<?php echo get_the_title();?>">
                <h3 class="titulo-regular"><?php echo get_the_title();?></h3>
                <p class="fecha-evento"><?php echo get_post_meta( get_the_ID(), '_eventos_fecha', 1 ); ?></p>
                <div class="boton-ver-mas">
                    <a href="<?php the_permalink(); ?>"><?php _e( "Ver más", "inotheme" ) ?></a>
                </div>
            </div>
        </div>

        <?php endwhile;?>
        <?php endif; ?>

    </div>

</div>

<div class="seccion-noticias padding-vertical padding-lateral">
    <h2 class="titulo-seccion"><?php _e( "Últimas noticias", "inotheme" ) ?></h2>
    <div class="row contenedor-noticias">

        <?php	

            $args = array(
                'post_type' => 'noticias-post',
                'posts_per_page' => '2', 
            );
            $query = new WP_Query( $args );
            
        ?>

        <?php if ( $query->have_posts() ) : ?>
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>

        <div class="col-12 col-sm-12 col-md-6 col-lg-12 contenedor-noticia">
            <div class="contenido flex-center-start">
                <img class="imagen-noticia"
                    src="<?php echo ipq_get_theme_image_url( get_post_thumbnail_id(), array( 450, 350, false ) ); ?>"
                    alt="<?php echo get_the_title();?>">
                <div class="flex-column-center-start">
                    <h3 class="titulo-regular"><?php echo get_the_title();?></h3>
                    <p class="descripcion-noticia texto-regular"><?php echo get_the_excerpt() ?></p>
                    <div class="boton-ver-mas">
                        <a href="<?php the_permalink(); ?>"><?php _e( "Ver más", "inotheme" ) ?></a>
                    </div>
                </div>

            </div>
        </div>

        <?php endwhile;?>
        <?php endif; ?>

    </div>
</div>

<div class="seccion-blog padding-vertical padding-lateral">
    <h2 class="titulo-seccion"><?php _e( "Blog", "inotheme" ) ?></h2>
    <div class="row contenedor-blogs">

        <?php	

            $args = array(
                'posts_per_page' => '2', 

            );
            $query = new WP_Query( $args );
            
        ?>

        <?php if ( $query->have_posts() ) : ?>
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>

        <div class="col-12 col-sm-12 col-md-6 col-lg-12 contenedor-blog">
            <div class="contenido flex-center-start">
                <img class="imagen-blog"
                    src="<?php echo ipq_get_theme_image_url( get_post_thumbnail_id(), array( 450, 350, true ) ); ?>"
                    alt="<?php echo get_the_title();?>">
                <div class="flex-column-center-start">
                    <h3 class="titulo-regular titulo-blog"><?php echo get_the_title();?></h3>
                    <p class="descripcion-blog texto-regular"><?php echo get_the_excerpt() ?></p>
                    <div class="boton-ver-mas">
                        <a href="<?php the_permalink(); ?>"><?php _e( "Ver más", "inotheme" ) ?></a>
                    </div>
                </div>

            </div>
        </div>

        <?php endwhile;?>
        <?php endif; ?>

    </div>
</div>

<div class="seccion-aliados padding-vertical padding-lateral">
    <h2 class="titulo-seccion"><?php _e( "Nuestros aliados", "inotheme" ) ?></h2>

    <div class="contenedor-aliados">

        <?php	
            $args = array(
                'post_type' => 'aliados-post',
            );
            $query = new WP_Query( $args );    
        ?>

        <div class="slider-aliados">

            <?php if ( $query->have_posts() ) : ?>
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>

            <div class="slide-aliado">

                <a href="<?php echo get_post_meta( get_the_ID(), '_aliado_enlace_web', 1 );?>" target="_blank">
                    <img class="aliado-logo" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" />
                </a>

            </div>

            <?php endwhile;?>
            <?php endif; ?>

        </div>

    </div>

</div>

<?php get_footer(); ?>