<?php /* Template Name: Single Post Proyecto */ ?>
<?php get_header(); ?>

<div class="pagina-single-proyecto">

    <?php while ( have_posts() ) : the_post(); ?>

    <div class="padding-vertical padding-lateral-post-contenido">
        <div class="subtitulo-fondo-imagen texto-color-principal titulo texto-centrado">
            <?php echo get_the_title();?>
        </div>

        <div class="contenedor-post-proyecto texto-regular">
            <?php the_content();?>
            <h3 class="subtitulo-fondo-imagen texto-color-principal titulo texto-centrado">
                <?php _e( "Otros proyectos", "inotheme" ) ?>
            </h3>
        </div>

        <div class="pagina-single-noticia">

            <div class="contenedor-post-relacionados padding-vertical">

                <?php $pID = get_the_ID() ?>
                <?php	

                $args = array(
                        'post_type' => 'proyectos-post',
                        'posts_per_page' => 3,
                        'post__not_in' => array($pID),
                    );

                    $query = new WP_Query( $args );
                        
            ?>

                <?php if ( $query->have_posts() ) : ?>

                <div class="row flex-center-start">


                    <?php while ( $query->have_posts() ) : $query->the_post(); ?>

                    <div class="col-12 col-sm-12 col-md-10 col-lg-4 columna-post-relacionado">
                        <a class="flex-column-center-start" href="<?php echo get_the_permalink(); ?>">
                            <div class="imagen-post-relacionado">
                                <img src="<?php echo ipq_get_theme_image_url( get_post_thumbnail_id(), array( 450, 350, true ) ); ?>"
                                    alt="<?php echo get_the_title();?>">
                            </div>
                            <h4 class="texto-post-relacionado"><?php echo get_the_title();?></h4>
                        </a>
                    </div>

                    <?php endwhile;?>

                </div>

                <div class="padding-top-only texto-centrado">
                    <div class="boton-ver-mas texto-blanco">
                        <a
                            href="<?php _e( "/proyectos", "inotheme" )?>"><?php _e( "Volver a proyectos", "inotheme" ) ?></a>
                    </div>
                </div>

                <?php endif; ?>

            </div>
        </div>

    </div>

    <?php endwhile; // end of the loop. ?>

</div>

<?php get_footer(); ?>