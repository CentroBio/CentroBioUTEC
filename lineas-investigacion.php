<?php
/*Template Name: Líneas de investigación*/
get_header(); ?>
<div class="main-container seccion-centrada">
        <?php while ( have_posts() ) : the_post(); ?>
        <div class="w100 tac">
            <h2 class="title"><?php echo get_the_title();?></h2>
        </div>
        <section class="estrecho grid cx">                    
            <p><?php the_content() ?></p>
            <div  class="w100 grid cx">
             <?php	
                $args = array(
                    'post_type' => 'lineasi-post',
                );
                $query = new WP_Query( $args );
                
                ?>
                <?php if ( $query->have_posts() ) : ?>
                            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                    <div class="linea grid cys cx lienzo">               

                            <img src="<?php echo ipq_get_theme_image_url( get_post_thumbnail_id(), array( 400, 300, true ) ); ?>"
                                alt="<?php echo get_the_title();?>">
                                <h3 class="w100 tac"><?php echo get_the_title();?></h3>
                    </div>
                            <?php endwhile;?>
                        
                <?php endif; ?>
                </div>
        </section>
        <?php endwhile; // end of the loop. ?>
    </div>
    <?php get_footer(); ?>