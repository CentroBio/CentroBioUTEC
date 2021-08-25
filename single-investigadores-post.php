<?php /* Template Name: Single Post Investigadores */ ?>
<?php get_header(); ?>

<div class="pagina-post-investigador">

    <?php while ( have_posts() ) : the_post(); ?>

    <div class="datos-investigador padding-lateral padding-vertical flex-center-center">
        <img class="imagen-investigador"
            src="<?php echo ipq_get_theme_image_url( get_post_thumbnail_id(), array( 170, 170, true ) ); ?>"
            alt="<?php echo get_the_title();?>">
        <div class="datos flex-column-center-start">
            <h2 class="titulo-regular"><?php echo get_the_title();?></h2>
            <h4 class="texto-detalle"><?php echo get_post_meta( get_the_ID(), '_investigador_titulo', 1 ); ?></h4>
            <h4 class="texto-detalle"><?php echo get_post_meta( get_the_ID(), '_investigador_correo', 1 ); ?></h4>
        </div>
    </div>

    <div class="contenedor-tabs padding-lateral flex-center-center">

        <div class="boton-tab boton-tab-activo tab" data-tab="biografia">
            <span class="titulo-tab"><?php _e('Biografía', 'inotheme') ?></span>
        </div>
        <div class="boton-tab tab" data-tab="investigacion">
            <span class="titulo-tab"><?php _e('Líneas de investigación', 'inotheme') ?></span>
        </div>
        <div class="boton-tab tab" data-tab="ensenanza">
            <span class="titulo-tab"><?php _e('Enseñanza', 'inotheme') ?></span>
        </div>
        <div class="boton-tab tab" data-tab="publicaciones">
            <span class="titulo-tab"><?php _e('Publicaciones', 'inotheme') ?></span>
        </div>

    </div>

    <div id="biografia"
        class="seccion-activa seccion-post-investigador seccion-biografia padding-vertical padding-lateral texto-regular">
        <?php echo get_post_meta( get_the_ID(), '_investigador_biografia', 1 ); ?>
    </div>

    <div id="investigacion"
        class="seccion-no-activa seccion-post-investigador seccion-lineas-investigacion padding-vertical padding-lateral texto-regular">
        <?php echo get_post_meta( get_the_ID(), '_investigador_investigacion', 1 ); ?>
    </div>

    <div id="ensenanza"
        class="seccion-no-activa seccion-post-investigador seccion-ensenanza padding-vertical padding-lateral texto-regular">
        <?php echo get_post_meta( get_the_ID(), '_investigador_ensenanza', 1 ); ?>
    </div>

    <div id="publicaciones"
        class="seccion-no-activa seccion-post-investigador seccion-publicaciones padding-vertical padding-lateral texto-regular">
        <?php echo get_post_meta( get_the_ID(), '_investigador_publicaciones', 1 ); ?>
    </div>

    <?php endwhile; // end of the loop. ?>

    <script>
    jQuery(document).on("click", ".tab", function() {

        //DISPLAYING TAB PANEL
        var tabTarget = jQuery(this).attr('data-tab');
        jQuery(".seccion-post-investigador").hide();
        jQuery("#" + tabTarget).show();

        //CHANGING TAB BUTTON STYLE
        jQuery(".boton-tab-activo").removeClass("boton-tab-activo");
        jQuery(this).addClass("boton-tab-activo");

    });
    </script>

</div>

<?php get_footer(); ?>