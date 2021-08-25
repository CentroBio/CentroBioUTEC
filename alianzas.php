<?php /* Template Name: Alianzas */ ?>
<?php get_header(); ?>
<div class="pagina-alianzas">

    <div class="padding-vertical padding-lateral">

        <h2 class="titulo-seccion"><?php _e( "Alianzas", "inotheme" ) ?></h2>

        <?php while ( have_posts() ) : the_post(); ?>

        <?php 
                $terms = get_terms('categoria-aliados', array('hide_empty' => false));
                foreach ($terms as $key => $term) {      

                    $args = array(
                        'post_type' => 'aliados-post',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'categoria-aliados',
                                'field' => 'slug',
                                'terms' => $term->slug,
                            ),
                        ),
                    );
                    $loop = new WP_Query( $args );

            ?>

        <div class="contenedor-grupo-alianza">

            <div class="titulo-seccion-alianza">
                <h2 class="subtitulo-seccion"><?php echo $term->name;?></h2>
            </div>

            <div class="row flex-center-start">

                <?php while ($loop->have_posts()) : $loop->the_post(); ?>

                <div class="columna-miembro-aliado col-12 col-sm-12 col-md-6 col-lg-4 flex-column-start-center">
                    <a class="imagen-aliado"
                        href="<?php echo get_post_meta( get_the_ID(), '_aliado_enlace_web', 1 ); ?>" target="_blank">
                        <img src="<?php echo ipq_get_theme_image_url( get_post_thumbnail_id(), array( 170, 170, true ) ); ?>"
                            alt="<?php echo get_the_title();?>">
                    </a>

                </div>

                <?php endwhile; ?>

            </div>

        </div>

        <?php } ?>

        <?php endwhile; ?>

    </div>

</div>
<?php get_footer(); ?>