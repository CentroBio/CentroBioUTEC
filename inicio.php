<?php
/* Template Name: Inicio
*/

get_header(); ?>
<div class="main-container ">
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
                    <div class="banner-background-image" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>')"></div>
                    <p class="banner-background-image-description"><?php echo get_post_meta( get_the_ID(), '_imagen_slider_descripcion', 1 );?></p>
                </div>

            <?php endwhile;?>
            
        <?php endif; ?>
    </div>
  
    <div class="grid cx">
    <section class="estrecho grid cx">
        <div id="gallery">
                    <a class="link" href="/<?php _e('nosotros', 'inotheme') ?>" style="background:url(/wp-content/themes/BioUTEC/img/nosotros.png)">
                    <div><?php _e('Nosotros', 'inotheme'); ?></div>
                    </a> 
                    <a class="link" href="/<?php _e('lineas-de-investigacion', 'inotheme') ?>" style="background:url(/wp-content/themes/BioUTEC/img/lineas.jpg)">
                    <div><?php _e('Líneas de investigación', 'inotheme') ?></div>

                    </a> 
                    <a class="link" href="/<?php _e('proyectos', 'inotheme') ?>" style="background:url(/wp-content/themes/BioUTEC/img/proyectos.jpg)">
                    <div><?php _e('Proyectos', 'inotheme'); ?></div>

                    </a> 
                    <a class="link" href="/<?php _e('agenda', 'inotheme') ?>" style="background:url(/wp-content/themes/BioUTEC/img/agenda.jpeg)">
                    <div><?php _e('Agenda', 'inotheme'); ?></div>

                    </a> 
                    <a class="link" href="/<?php _e('investigadores', 'inotheme') ?>" style="background:url(/wp-content/themes/BioUTEC/img/investigadores.jpg)">
                    <div><?php _e('Investigadores', 'inotheme'); ?></div>
                    </a> 
                    <a class="link" href="/<?php _e('laboratorios', 'inotheme') ?>" style="background:url(/wp-content/themes/BioUTEC/img/laboratorios.JPG)">
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
                                <div class="noticia grid cx" >
                                
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
                                <div class="evento grid cx" >
                                
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
                                <div class="entrada grid cx" >
                                
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

            <div class="slider-aliados" style="width: 100%; margin: 4.25rem 0 10rem">

                <?php if ( $query->have_posts() ) : ?>

                    <?php while ( $query->have_posts() ) : $query->the_post(); ?>

                        <div class="slide-aliado" style="height: 6rem; width: 500px !important">
                            <img style="height: 6rem; width: 100%; object-fit: contain" class="aliado-logo" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>"/>
                        </div>  

                    <?php endwhile;?> 
                    
                <?php endif; ?>

            </div>   

        </div>
        </section>
    </div>
    <?php get_footer(); ?>