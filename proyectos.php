<?php /*Template Name: Proyectos*/ ?>

<?php get_header(); ?>

<div class="pagina-proyectos">

    <div class="padding-vertical padding-lateral">

        <h2 class="titulo-seccion"><?php _e( "Proyectos", "inotheme" ) ?></h2>

        <div class="row contenedor-proyectos">

            <?php	
                $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
                $args = array('post_type' => 'proyectos-post', 'posts_per_page' => '6', 'paged' => $paged);
                $query = new WP_Query( $args );  
            ?>

            <?php if ( $query->have_posts() ) : ?>
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>

            <div class="col-12 col-sm-12 col-md-6 col-lg-12 contenedor-proyecto">
                <div class="contenido flex-center-start">

                    <div class="row flex-center-start">
                        <div class="imagen-thumbnail-post-horizontal">
                            <img class="imagen-proyecto"
                                src="<?php echo wp_get_attachment_url( get_post_thumbnail_id(), 'full' ); ?>"
                                alt="<?php echo get_the_title();?>">
                        </div>

                        <div class="col-lg-6 flex-column-center-start">
                            <h3 class="titulo-regular titulo-proyecto"><?php echo get_the_title();?></h3>
                            <p class="descripcion-proyecto texto-regular"><?php echo get_the_excerpt() ?></p>
                            <div class="boton-ver-mas">
                                <a href="<?php the_permalink(); ?>"><?php _e( "Ver más", "inotheme" ) ?></a>
                            </div>
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