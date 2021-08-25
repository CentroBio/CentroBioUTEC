<?php /* Template Name: Inicio */ ?>
<?php get_header(); ?>

<div class="imagen-fondo-inicio">
    <div class="contenido">
        <h1 class="titulo-fondo-imagen texto-blanco">Centro BIO UTEC</h1>
        <p class="subtitulo-fondo-imagen texto-blanco">Investigacion en bioingenieria</p>
    </div>
</div>

<div class="contenedor-intro padding-vertical padding-lateral">
    <div class="contenido">
        <p class="texto-intro">
            <?php _e('Transformamos la sociedad buscando soluciones en', 'inotheme') ?><span
                class="texto-intro-bold"><?php _e(' medicina, biología y accesibles con ingeniería', 'inotheme') ?></span>
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

<div class="flex-column-center-center seccion-enlaces padding-vertical padding-lateral">
    <h2 class="titulo-seccion"><?php _e( "Enlaces de interés", "inotheme" ) ?></h2>
    <div class="contenedor-carousel-enlaces">
        <div class="carousel-enlaces">
            <div class="elemento-carousel-enlaces">
                <img class="imagen-elemento-carousel-enlaces"
                    src="<?php echo get_template_directory_uri(); ?>/img/imagenes_carousel/investigadores.jpg">
            </div>
            <div class="elemento-carousel-enlaces">
                <img class="imagen-elemento-carousel-enlaces"
                    src="<?php echo get_template_directory_uri(); ?>/img/imagenes_carousel/laboratorios.jpg">
            </div>
            <div class="elemento-carousel-enlaces">
                <img class="imagen-elemento-carousel-enlaces"
                    src="<?php echo get_template_directory_uri(); ?>/img/imagenes_carousel/lineas.jpg">
            </div>
            <div class="elemento-carousel-enlaces">
                <img class="imagen-elemento-carousel-enlaces"
                    src="<?php echo get_template_directory_uri(); ?>/img/imagenes_carousel/nosotros.png">
            </div>
            <div class="elemento-carousel-enlaces">
                <img class="imagen-elemento-carousel-enlaces"
                    src="<?php echo get_template_directory_uri(); ?>/img/imagenes_carousel/proyectos.jpg">
            </div>
        </div>
        <div class="contenedor-enlaces">
            <div class="elemento-enlace">
                <h4 class="enlace texto-regular titulo texto-blanco">Laboratorios</h4>
            </div>
            <div class="elemento-enlace">
                <h4 class="enlace texto-regular titulo texto-blanco">Líneas de investigación</h4>
            </div>
            <div class="elemento-enlace">
                <h4 class="enlace texto-regular titulo texto-blanco">Líneas de investigación</h4>
            </div>
            <div class="elemento-enlace">
                <h4 class="enlace texto-regular titulo texto-blanco">Líneas de investigación</h4>
            </div>
            <div class="elemento-enlace">
                <h4 class="enlace texto-regular titulo texto-blanco">Líneas de investigación</h4>
            </div>
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
                    src="<?php echo ipq_get_theme_image_url( get_post_thumbnail_id(), array( 450, 350, true ) ); ?>"
                    alt="<?php echo get_the_title();?>">
                <h3 class="titulo-regular"><?php echo get_the_title();?></h3>
                <p class="fecha-evento">Enero 2020</p>
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
                    src="<?php echo ipq_get_theme_image_url( get_post_thumbnail_id(), array( 450, 350, true ) ); ?>"
                    alt="<?php echo get_the_title();?>">
                <div class="flex-column-center-start">
                    <h3 class="titulo-regular"><?php echo get_the_title();?></h3>
                    <p class="fecha-evento fecha-noticia">Enero 2020</p>
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

<!-- <div class="main-container test">
    <div class="content-home">

        <?php	
        $args = array(
            'post_type' => 'slider-post',
        );
        $query = new WP_Query( $args );
    ?>

        <div class="banner">
            <?php if ( $query->have_posts() ) : ?>

            <?php while ( $query->have_posts() ) : $query->the_post(); ?>

            <div class="banner-slide">
                <div class="banner-background-image-overlay"></div>
                <div class="banner-background-image"
                    style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>')"></div>
                <p class="banner-background-image-description">
                    <?php echo get_post_meta( get_the_ID(), '_imagen_slider_descripcion', 1 );?></p>
            </div>

            <?php endwhile;?>

            <?php endif; ?>
        </div>

        <div class="grid cx">
            <section class="estrecho grid cx">
                <div id="gallery">
                    <a class="link" href="/<?php _e('nosotros', 'inotheme') ?>"
                        style="background:url(/wp-content/themes/BioUTEC/img/nosotros.png)">
                        <div><?php _e('Nosotros', 'inotheme'); ?></div>
                    </a>
                    <a class="link" href="/<?php _e('lineas-de-investigacion', 'inotheme') ?>"
                        style="background:url(/wp-content/themes/BioUTEC/img/lineas.jpg)">
                        <div><?php _e('Líneas de investigación', 'inotheme') ?></div>

                    </a>
                    <a class="link" href="/<?php _e('proyectos', 'inotheme') ?>"
                        style="background:url(/wp-content/themes/BioUTEC/img/proyectos.jpg)">
                        <div><?php _e('Proyectos', 'inotheme'); ?></div>

                    </a>
                    <a class="link" href="/<?php _e('agenda', 'inotheme') ?>"
                        style="background:url(/wp-content/themes/BioUTEC/img/agenda.jpeg)">
                        <div><?php _e('Agenda', 'inotheme'); ?></div>

                    </a>
                    <a class="link" href="/<?php _e('investigadores', 'inotheme') ?>"
                        style="background:url(/wp-content/themes/BioUTEC/img/investigadores.jpg)">
                        <div><?php _e('Investigadores', 'inotheme'); ?></div>
                    </a>
                    <a class="link" href="/<?php _e('laboratorios', 'inotheme') ?>"
                        style="background:url(/wp-content/themes/BioUTEC/img/laboratorios.JPG)">
                        <div><?php _e('Laboratorios', 'inotheme'); ?></div>
                    </a>
                </div>
            </section>
        </div>
        <section>
            <div class="w100 tac">
                <h2 class="title"><?php _e('ÚLTIMAS NOTICIAS', 'inotheme') ?></h2>

            </div>
            <div class="noticias grid cx">
                <?php	
                $args = array(
                    'post_type' => 'noticias-post',
                    'posts_per_page' => '3', 

                );
                $query = new WP_Query( $args );
                
                ?>
                <?php if ( $query->have_posts() ) : ?>
                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                <div class="noticia grid cx">

                    <div class="image grid">
                        <img src="<?php echo ipq_get_theme_image_url( get_post_thumbnail_id(), array( 450, 350, true ) ); ?>"
                            alt="<?php echo get_the_title();?>">
                    </div>
                    <div class="description grid">
                        <h3><?php echo get_the_title();?></h3>
                        <p><?php echo get_the_excerpt() ?></p>
                        <div class="w100 tar">
                            <a href="<?php the_permalink(); ?>"><?php _e('VER NOTICIA', 'inotheme') ?></a>
                        </div>
                    </div>
                </div>
                <?php endwhile;?>
                <?php endif; ?>
            </div>
        </section>
        <section class="w100 grid cx">
            <div class="w100 tac">
                <h2 class="title"><?php _e('SEMINARIOS Y EVENTOS', 'inotheme') ?></h2>
            </div>

            <div class="eventos estrecho grid cx">
                <?php	
                $args = array(
                    'post_type' => 'eventos-post',
                    'posts_per_page' => '3', 

                );
                $query = new WP_Query( $args );
                
                ?>
                <?php if ( $query->have_posts() ) : ?>
                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                <div class="evento grid cx">

                    <div class="image grid">
                        <img src="<?php echo ipq_get_theme_image_url( get_post_thumbnail_id(), array( 450, 350, true ) ); ?>"
                            alt="<?php echo get_the_title();?>">
                    </div>
                    <div class="description grid">
                        <h3><?php echo get_the_title();?></h3>
                        <p><?php echo get_the_excerpt() ?></p>
                        <a href="<?php the_permalink(); ?>"><?php _e('VER MÁS', 'inotheme') ?></a>

                    </div>
                </div>
                <?php endwhile;?>
                <?php endif; ?>
            </div>
        </section>
        <section>
            <div class="w100 tac">
                <h2 class="title"><?php _e('BLOG', 'inotheme') ?></h2>
            </div>
            <div class="blog grid cx">
                <?php	
                $args = array(
                    'posts_per_page' => '3', 

                );
                $query = new WP_Query( $args );
                
                ?>
                <?php if ( $query->have_posts() ) : ?>
                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                <div class="entrada grid cx">

                    <div class="image grid">
                        <img src="<?php echo ipq_get_theme_image_url( get_post_thumbnail_id(), array( 450, 350, true ) ); ?>"
                            alt="<?php echo get_the_title();?>">
                    </div>
                    <div class="description grid">
                        <h3><?php echo get_the_title();?></h3>
                        <p><?php echo get_the_excerpt() ?></p>
                        <div class="w100 tar">
                            <a href="<?php the_permalink(); ?>"><?php _e('VER MÁS', 'inotheme') ?></a>
                        </div>
                    </div>
                </div>
                <?php endwhile;?>
                <?php endif; ?>
            </div>
        </section>
        <section class="grid cx">
            <div class="w100 tac">
                <h2 class="title"><?php _e('NUESTROS ALIADOS', 'inotheme') ?></h2>
            </div>
            <div class="aliados estrecho grid cx">
                <?php	
                $args = array(
                    'post_type' => 'aliados-post',
                );
                $query = new WP_Query( $args );    
            ?>
                <style>
                .slider-aliados .slick-slide {
                    display: flex !important;
                    justify-content: center;
                    align-content: center;
                    padding: 0 2rem;
                }
                </style>

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
        </section>
    </div> -->