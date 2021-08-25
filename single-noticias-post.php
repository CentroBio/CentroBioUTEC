<?php /* Template Name: Single Post Noticia */ ?>
<?php get_header(); ?>

<div class="pagina-single-noticia">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="padding-top-only padding-lateral flex-column-center-center">

        <div class="subtitulo-fondo-imagen texto-color-principal titulo texto-centrado">
            <?php echo get_the_title();?>
        </div>

        <div class="imagen-post">
            <img src="<?php echo ipq_get_theme_image_url( get_post_thumbnail_id( $post->ID ), array( 800, 500, true ) ); ?>"
                alt="">
        </div>

    </div>


    <div class="contenedor-post texto-regular padding-lateral">
        <?php the_content();?>
    </div>

    <div class="contenedor-post-relacionados padding-vertical padding-lateral">

        <?php $pID = get_the_ID() ?>
        <?php	
        
            $args = array(
                'post_type' => 'noticias-post',
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
        <?php endif; ?>

    </div>

    <?php endwhile; ?>
    <?php endif; ?>

</div>

<script>
jQuery(document).ready(function() {
    var screen = jQuery(window);
    jQuery("#toggleb").on("click", function() {
        jQuery(this).toggleClass("active");
        jQuery(this).siblings("div").toggle();
    });
});
</script>
<?php
get_footer();