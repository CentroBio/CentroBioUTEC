<?php /* Template Name: Single Post Proyecto */ ?>
<?php get_header(); ?>

<div class="pagina-single-proyecto">

    <?php while ( have_posts() ) : the_post(); ?>

    <div class="padding-vertical padding-lateral">
        <div class="subtitulo-fondo-imagen texto-color-principal titulo texto-centrado">
            <?php echo get_the_title();?>
        </div>

        <div class="contenedor-post-proyecto texto-regular">
            <?php the_content();?>
        </div>
    </div>

    <?php endwhile; // end of the loop. ?>

</div>

<?php get_footer(); ?>