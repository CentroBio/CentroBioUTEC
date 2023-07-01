<?php /*Template Name: Eventos y seminarios*/ ?>

<?php get_header(); ?>

<div class="pagina-eventos">

    <div class="padding-vertical-intro padding-lateral">

        <h2 class="titulo-seccion"><?php _e( "Eventos", "inotheme" ) ?></h2>

        <div class="row contenedor-eventos contenedor-descripcion-laboratorios">

            <?php	
                $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
                $args = array('post_type' => 'eventos-post', 'posts_per_page' => '6', 'paged' => $paged);
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
                        <?php if (get_post_meta( get_the_ID(), '_eventos_fecha', 1 ) != "") { ?>
                        <p class="fecha-evento">
                            <?php echo get_post_meta( get_the_ID(), '_eventos_fecha', 1 ); ?>
                        </p>
                        <?php } ?>
                        <div class="flex-start-center">
                            <div class="boton-ver-mas">
                                <a href="<?php the_permalink(); ?>"><?php _e( "Ver más", "inotheme" ) ?></a>
                            </div>
                            <?php if (get_post_meta( get_the_ID(), '_eventos_link_video', 1 ) != "") { ?>
                            <div class="boton-video-evento">
                                <a href="<?php echo get_post_meta( get_the_ID(), '_eventos_link_video', 1 ); ?>"
                                    target="_blank"><?php _e( "Video", "inotheme" ) ?></a>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

            <?php endwhile;?>
            <?php endif; ?>

            <?php 
            $total = $query->max_num_pages;
            if ( $total > 1 ) {
                if ( !$current_page = get_query_var('paged') ) {
                    $current_page = 1;
                }
                echo paginate_links(array(
                    'base' => get_pagenum_link(1) . '%_%',
                    'format' => '?paged=%#%',
                    'current' => $current_page,
                    'total' => $total,
                    'type' => 'list',
                    'prev_next' => false
                ));
            }
            ?>

        </div>

    </div>

</div>

<?php get_footer(); ?>