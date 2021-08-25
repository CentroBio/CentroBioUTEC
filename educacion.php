<?php
/*Template Name: Educación*/
get_header(); ?>
<div class="main-container seccion-centrada">
    <?php while ( have_posts() ) : the_post(); ?>
    <div class="w100 tac">
        <h2 class="title"><?php echo get_the_title();?></h2>
    </div>
    <section id="programas" class="estrecho grid cx">
        <p><?php the_content() ?></p>
        <?php	
                $args = array(
                    'post_type' => 'educacion-post',
                    'posts_per_page ' => -1,
                );
                $query = new WP_Query( $args );
                
                ?>
        <?php if ( $query->have_posts() ) : ?>
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
        <div class="programa grid cx">

            <div class="description grid cy">
                <h3><?php echo get_the_title();?></h3>
                <?php the_content(); ?>
                <a href="<?php get_post_meta( get_the_ID(), '_program_url', 1 ); ?>" target="_blank"
                    class="button"><?php _e( "Ver más", "inotheme" ) ?></a>

            </div>
            <div class="image grid cx cy">
                <img src="<?php echo ipq_get_theme_image_url( get_post_thumbnail_id(), array( 450, 350, true ) ); ?>"
                    alt="<?php echo get_the_title();?>">
            </div>
        </div>
        <?php endwhile;?>

        <?php endif; ?>
    </section>

    <?php endwhile; // end of the loop. ?>
</div>
<?php get_footer(); ?>