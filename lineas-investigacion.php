<?php /*Template Name: Líneas de investigación*/ ?>

<?php get_header(); ?>

<div class="pagina-lineas-investigacion">

    <div class="padding-lateral padding-vertical">

        <h2 class="titulo-seccion"><?php _e( "Líneas de investigación", "inotheme" ) ?></h2>

        <?php while ( have_posts() ) : the_post(); ?>

        <?php	

                    $args = array('post_type' => 'lineasi-post');
                    $query = new WP_Query( $args );
                        
                ?>

        <?php if ( $query->have_posts() ) : ?>

        <div class="row flex-center-center">

            <?php while ( $query->have_posts() ) : $query->the_post(); ?>

            <div class="col-12 col-sm-12 col-md-6 col-lg-5 flex-center-center">

                <div class="elemento-linea-investigacion">

                    <div class="contenido">
                        <img class="imagen-linea-investigacion"
                            src="<?php echo ipq_get_theme_image_url( get_post_thumbnail_id(), array( 400, 300, true ) ); ?>"
                            alt="<?php echo get_the_title();?>">
                        <h3 class="titulo-linea-investigacion titulo texto-regular texto-blanco">
                            <?php echo get_the_title();?>
                        </h3>
                    </div>

                </div>

            </div>

            <?php endwhile;?>

        </div>

        <?php endif; ?>

        <?php endwhile; // end of the loop. ?>

    </div>

</div>

<?php get_footer(); ?>