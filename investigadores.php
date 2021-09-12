<?php /* Template Name: Investigadores */ ?>
<?php get_header(); ?>
<div class="pagina-investigadores">

    <div class="padding-vertical padding-lateral">

        <h2 class="titulo-seccion"><?php _e( "Investigadores", "inotheme" ) ?></h2>

        <?php while ( have_posts() ) : the_post(); ?>

        <?php 
                $terms = get_terms('tipo', array('hide_empty' => false));
                foreach ($terms as $key => $term) {      

                    $args = array(
                        'post_type' => 'investigadores-post',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'tipo',
                                'field' => 'slug',
                                'terms' => $term->slug,
                            ),
                        ),
                    );
                    $loop = new WP_Query( $args );

            ?>

        <div class="contenedor-grupo-investigador">

            <div class="titulo-seccion-equipo">
                <h2 class="subtitulo-seccion"><?php echo $term->name;?></h2>
            </div>

            <div class="row fila-miembro-investigador flex-center-start">

                <?php while ($loop->have_posts()) : $loop->the_post();?>

                <?php if ($term->name == "Investigadores adjuntos" || $term->name == "Adjunct researchers") { ?>

                <div class="columna-miembro-investigador col-12 col-sm-12 col-md-6 col-lg-4 flex-column-start-center">
                    <img class="imagen-investigador"
                        src="<?php echo wp_get_attachment_url( get_post_thumbnail_id(), 'full' ); ?>"
                        alt="<?php echo get_the_title();?>">
                    <h3 class="titulo-regular"><?php echo get_the_title();?></h3>
                    <h4 class="texto-detalle">
                        <?php echo get_post_meta( get_the_ID(), '_investigador_titulo', 1 ); ?>
                    </h4>
                    <h4 class="texto-detalle">
                        <?php echo get_post_meta( get_the_ID(), '_investigador_correo', 1 ); ?>
                    </h4>
                </div>

                <?php } else { ?>

                <a class="columna-miembro-investigador col-12 col-sm-12 col-md-6 col-lg-4 flex-column-start-center"
                    href="<?php the_permalink(); ?>">

                    <img class="imagen-investigador"
                        src="<?php echo wp_get_attachment_url( get_post_thumbnail_id(), 'full' ); ?>"
                        alt="<?php echo get_the_title();?>">
                    <h3 class="titulo-regular"><?php echo get_the_title();?></h3>
                    <h4 class="texto-detalle">
                        <?php echo get_post_meta( get_the_ID(), '_investigador_titulo', 1 ); ?>
                    </h4>
                    <h4 class="texto-detalle">
                        <?php echo get_post_meta( get_the_ID(), '_investigador_correo', 1 ); ?>
                    </h4>
                </a>

                <?php } ?>

                <?php endwhile; ?>

            </div>

        </div>

        <?php } ?>

        <?php endwhile; ?>

    </div>

</div>
<?php get_footer(); ?>