<?php /* Template Name: Single Post Laboratorios */ ?>
<?php get_header(); ?>

<div class="pagina-single-laboratorio pagina-single-proyecto">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="padding-vertical padding-lateral-post-contenido">

        <div class="subtitulo-fondo-imagen texto-color-principal titulo texto-centrado">
            <?php echo get_the_title();?>
        </div>

        <div class="texto-regular"><?php echo get_post_meta( get_the_ID(), '_laboratorios_descripcion', 1 ); ?></div>

        <?php $imagenes = get_post_meta( get_the_ID(), '_laboratorios_imagenes', 1 ) ?>

        <div class="row flex-center-center">

            <?php foreach($imagenes as $imagen) { ?>
            <div
                class="contenedor-imagen imagen-thumbnail-post-horizontal col-sm-10 col-md-6 col-lg-6 flex-center-center">
                <img src="<?php echo $imagen?>">
            </div>
            <?php } ?>

        </div>

    </div>

    <?php endwhile; ?>
    <?php endif; ?>


</div>

<?php get_footer(); ?>