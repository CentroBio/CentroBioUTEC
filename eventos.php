<?php /*Template Name: Eventos y seminarios*/ ?>

<?php get_header(); ?>

<div class="pagina-eventos">

    <div class="padding-vertical padding-lateral">

        <h2 class="titulo-seccion"><?php _e( "Eventos", "inotheme" ) ?></h2>

        <div class="row contenedor-eventos contenedor-descripcion-laboratorios">

            <?php	
    
                $args = array(
                            'post_type' => 'eventos-post',
                            'posts_per_page' => '10',
                        );
                $query = new WP_Query( $args );
                        
            ?>

            <?php if ( $query->have_posts() ) : ?>
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>

            <div class="col-12 col-sm-12 col-md-6 col-lg-6 contenedor-evento">

                <div class="contenido flex-center-start">

                    <div class="contenedor-post-info">

                        <div class="imagen-thumbnail-post">

                            <img class="imagen-evento"
                                src="<?php echo wp_get_attachment_url( get_post_thumbnail_id(), 'full' ); ?>"
                                alt="<?php echo get_the_title();?>">
                        </div>

                        <h3 class="titulo-regular"><?php echo get_the_title();?></h3>
                        <p class="fecha-evento">
                            <?php echo get_post_meta( get_the_ID(), '_eventos_fecha', 1 ); ?></p>
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

</div>

<?php get_footer(); ?>