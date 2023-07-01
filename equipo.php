<?php /* Template Name: Equipo */ ?>
<?php get_header(); ?>
<div class="pagina-equipo">

    <div class="padding-vertical-intro padding-lateral">

        <h2 class="titulo-seccion"><?php _e( "Equipo", "inotheme" ) ?></h2>

        <?php while ( have_posts() ) : the_post(); ?>

        <?php 
                $terms = get_terms('tipo-staff', array('hide_empty' => false));
                foreach ($terms as $key => $term) {      

                    $args = array(
                        'post_type' => 'equipo-post',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'tipo-staff',
                                'field' => 'slug',
                                'terms' => $term->slug,
                            ),
                        ),
                    );
                    $loop = new WP_Query( $args );

            ?>

        <div class="contenedor-grupo-equipo">

            <div class="titulo-seccion-equipo">
                <h2 class="subtitulo-seccion"><?php echo $term->name;?></h2>
            </div>

            <div class="row fila-miembros-equipo flex-center-start">

                <?php while ($loop->have_posts()) : $loop->the_post(); ?>

                <div class="columna-miembro-equipo col-12 col-sm-12 col-md-6 col-lg-4 flex-column-start-center">
                    <img class="imagen-miembro"
                        src="<?php echo wp_get_attachment_url( get_post_thumbnail_id(), 'full' ); ?>"
                        alt="<?php echo get_the_title();?>">
                    <h3 class="titulo-regular"><?php echo get_the_title();?></h3>
                    <h4 class="texto-detalle"><?php echo get_post_meta( get_the_ID(), '_equipo_cargo', 1 ); ?></h4>
                    <h4 class="texto-detalle"><?php echo get_post_meta( get_the_ID(), '_equipo_email', 1 ); ?></h4>
                </div>

                <?php endwhile; ?>

            </div>

        </div>

        <?php } ?>

        <?php endwhile; ?>

    </div>

</div>
<?php get_footer(); ?>