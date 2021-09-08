<?php /* Template Name: Blog */ ?>

<?php get_header(); ?>

<div class="pagina-blog seccion-blog padding-vertical padding-lateral">
    <h2 class="titulo-seccion"><?php _e( "Blog", "inotheme" ) ?></h2>
    <div class="row contenedor-blogs">

        <?php	

            $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
            $args = array('posts_per_page' => '5', 'paged' => $paged);
            $query = new WP_Query( $args );
            
        ?>

        <?php if ( $query->have_posts() ) : ?>
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>

        <div class="col-12 col-sm-12 col-md-10 col-lg-12 contenedor-blog">
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

        <!-- <?php the_posts_pagination(); ?> -->


        <?php endwhile;?>
        <?php endif; ?>

        <?php wpbeginner_numeric_posts_nav(); ?>


    </div>
</div>

<?php get_footer(); ?>