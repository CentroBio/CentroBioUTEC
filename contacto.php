<?php /*Template Name: Contacto*/ ?>

<?php get_header(); ?>
<div class="pagina-contacto">

    <div class="padding-vertical padding-lateral">

        <?php while ( have_posts() ) : the_post(); ?>

        <h2 class="titulo-seccion"><?php echo get_the_title();?></h2>
        <div class="contenedor-descripcion-contacto">
            <p class="descripcion-seccion">
                <?php _e( "Para recibir información adicional o tomar contacto con el centro BIO deje su información en el siguiente formulario:", "inotheme" ) ?>
            </p>
        </div>

        <!-- <div class="form-en">
            <?php echo do_shortcode('[contact-form-7 id="184" title="Formulario de contacto en"]') ?>
        </div> -->
        <div class="padding-vertical form-es">
            <?php echo do_shortcode('[contact-form-7 id="126" title="Formulario de contacto es"]') ?>
        </div>

        <div class="row flex-center-center contenedor-datos-contacto">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 contenedor-mapa">
                <iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                    src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=es&amp;q=Jr.%20Medrano%20Silva%20165%20Barranco%2015063+(CIRSO%20UTEC)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 flex-column-center-start contenedor-datos">
                <div class="dato flex-center-start">
                    <img class="icono icono-ubicacion"
                        src="<?php echo get_template_directory_uri(); ?>/img/iconos/icono_ubicacion.png">
                    <p class="texto-detalle texto-color-regular texto-izquierda">Jr. Medrano Silva 165 Barranco. Lima
                        04, Peru</p>
                </div>
                <div class="dato flex-center-start">
                    <img class="icono icono-ubicacion"
                        src="<?php echo get_template_directory_uri(); ?>/img/iconos/icono_email.png">
                    <p class="texto-detalle texto-color-regular texto-izquierda">centrobio@utec.edu.pe</p>
                </div>
                <div class="dato flex-center-start">
                    <img class="icono icono-ubicacion"
                        src="<?php echo get_template_directory_uri(); ?>/img/iconos/icono_telefono.png">
                    <p class="texto-detalle texto-color-regular texto-izquierda">(+511)2305000</p>
                </div>
            </div>

        </div>

        <?php endwhile; // end of the loop. ?>

    </div>

</div>
<?php get_footer(); ?>