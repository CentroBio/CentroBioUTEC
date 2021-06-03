<?php
/*Template Name: Servicios*/
get_header(); ?>
<div class="main-container seccion-centrada">
        <?php while ( have_posts() ) : the_post(); ?>
        <div class="w100 tac">
            <h2 class="title"><?php echo get_the_title();?></h2>
        </div>
        <section id="servicios" class="estrecho grid cx">                    
        <p><?php the_content() ?></p>
             <?php	
                $args = array(
                    'post_type' => 'servicios-post',
                );
                $query = new WP_Query( $args );
                
                ?>
                <?php if ( $query->have_posts() ) : ?>
                            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                                <div class="servicio grid cx">
                                    <div class="image grid cx cy">
                                        <img src="<?php echo ipq_get_theme_image_url( get_post_thumbnail_id(), array( 450, 350, true ) ); ?>"
                                            alt="<?php echo get_the_title();?>">
                                    </div>
                                    <div class="description grid cy">
                                        <h3><?php echo get_the_title();?></h3>
                                        <p><?php the_content(); ?></p>
                                    </div>                                  
                                </div>
                            <?php endwhile;?>
                        
                <?php endif; ?>
                </section>

        <?php endwhile; // end of the loop. ?>
    </div>
    <?php get_footer(); ?>