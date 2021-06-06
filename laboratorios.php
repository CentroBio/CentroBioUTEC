<?php
/*Template Name: Laboratorios*/
get_header(); ?>
<div class="main-container seccion-centrada">
        <?php while ( have_posts() ) : the_post(); ?>
        <div class="w100 tac">
            <h2 class="title"><?php echo get_the_title();?></h2>
        </div>
        <section class="estrecho grid cx lienzo">                    
            <p><?php the_content() ?></p>
            <div  class="w100 grid cx">
             <?php	
                $args = array(
                    'post_type' => 'laboratorios-post',
                    'posts_per_page ' => -1
                );
                $query = new WP_Query( $args );
                
                ?>
                <?php if ( $query->have_posts() ) : ?>
                            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                    <div class="laboratorio grid cys cx">               

                        <div class="card-laboratorio">
                            <div class="card-overlay"></div>
                            <img src="<?php echo ipq_get_theme_image_url( get_post_thumbnail_id(), array( 400, 400, true ) ); ?>"
                                alt="<?php echo get_the_title();?>">        
                            <p class="overlay-text"><?php echo get_post_meta( get_the_ID(), '_laboratorios_texto_descriptivo', 1 ); ?></p>
                        </div>
                        
                        <a href="<?php echo get_post_meta( get_the_ID(), '_laboratorios_link_web', 1 ); ?>" target="_blank">
                            <h3 class="w100 tac"><?php echo get_the_title();?></h3>
                        </a>

                    </div>
                            <?php endwhile;?>
                        
                <?php endif; ?>
                </div>
        </section>
        <?php endwhile; // end of the loop. ?>
    </div>
    <?php get_footer(); ?>