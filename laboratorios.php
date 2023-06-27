<?php /*Template Name: Laboratorios*/ ?>

<?php get_header(); ?>

<div class="pagina-laboratorios">

    <div class="padding-lateral padding-vertical">

        <h2 class="titulo-seccion"><?php _e( "Laboratorios", "inotheme" ) ?></h2>
        <div class="contenedor-descripcion-laboratorios">
            <p class="descripcion-seccion">
                <?php _e( "Los laboratorios de Bioingeniería son el lugar en donde los alumnos e investigadores pueden desarrollar prácticas y proyectos en las diversas áreas de la carrera, ya que se encuentran dotados con los equipos, materiales e instrumentos necesarios para llevar a cabo su aprendizaje.", "inotheme" ) ?>
            </p>

        </div>

        <?php while ( have_posts() ) : the_post(); ?>

        <?php	

            $args = array(
                'post_type' => 'laboratorios-post',
                'posts_per_page ' => -1
            );
            
            $query = new WP_Query( $args );
                
        ?>

        <?php if ( $query->have_posts() ) : ?>

        <div class="row flex-center-center contenedor-descripcion-laboratorios">

            <?php while ( $query->have_posts() ) : $query->the_post(); ?>

            <div class="col-12 col-sm-12 col-md-6 col-lg-6 flex-center-center">

                <div class="elemento-laboratorio">

                    <div class="contenido flex-center-center">

                        <div class="imagen-thumbnail-post-horizontal">
                            <img class="imagen-laboratorio"
                                src="<?php echo wp_get_attachment_url( get_post_thumbnail_id(), 'full' ); ?>"
                                alt="<?php echo get_the_title();?>">
                            <h3 class="titulo-laboratorio titulo texto-regular texto-blanco">
                                <?php echo get_the_title();?>
                            </h3>

                            <a class="enlace-laboratorio" href="<?php the_permalink(); ?>" target="_blank"></a>
                        </div>

                    </div>

                </div>

            </div>

            <?php endwhile; // end of the loop. ?>

        </div>
        <?php endif; ?>

        <?php endwhile; // end of the loop. ?>

    </div>

</div>

<?php get_footer(); ?>