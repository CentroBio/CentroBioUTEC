<?php /*Template Name: Trabaja con nosotros*/ ?>
<?php get_header(); ?>

<div class="pagina-ofertas-laborales">

    <div class="imagen-fondo-inicio">
        <div class="contenido">
            <h1 class="titulo-fondo-imagen texto-blanco"><?php _e( "Trabaja con nosotros", "inotheme" ) ?></h1>
        </div>
    </div>

    <?php while ( have_posts() ) : the_post(); ?>

    <div class="padding-lateral-introduccion-nosotros padding-vertical">
        <div class="texto-intro-nosotros texto-centrado">
            <?php the_content() ?>
        </div>
    </div>

    <?php	
        $args = array('post_type' => 'ofertas-post',);
        $query = new WP_Query( $args );
    ?>

    <div class="padding-vertical padding-lateral">

        <?php if ( $query->have_posts() ) : ?>
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>

        <div class="contenedor-oferta-laboral flex-center-center">
            <div class="info-oferta-laboral">

                <div class="texto-regular">
                    <?php the_excerpt(); ?>
                </div>

                <a class="boton-ver-mas" href="<?php echo get_post_meta( get_the_ID(), '_ofertas_link', 1 ); ?>"
                    target="_blank">
                    <?php _e( "Ver oferta", "inotheme" ) ?>
                </a>
            </div>

            <img src="<?php echo ipq_get_theme_image_url( get_post_thumbnail_id(), array( 400, 300, true ) ); ?>"
                alt="<?php echo get_the_title();?>">

        </div>

        <?php endwhile;?>
        <?php endif; ?>

    </div>

    <?php endwhile; // end of the loop. ?>

</div>

<?php get_footer(); ?>