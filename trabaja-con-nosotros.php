<?php
/*Template Name: Trabaja con nosotros*/
get_header(); ?>
<div class="main-container seccion-centrada">
        <?php while ( have_posts() ) : the_post(); ?>
        <div class="w100 tac">
            <h2 class="title"><?php echo get_the_title();?></h2>
        </div>
        <section  class="estrecho grid cx">                    
            <p><?php the_content() ?></p>
            <div class="w100 grid cx cys ofertas">
             <?php	
                $args = array(
                    'post_type' => 'ofertas-post',
                );
                $query = new WP_Query( $args );
                
                ?>
                <?php if ( $query->have_posts() ) : ?>
                            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                    <div class="oferta grid cy cx">
                        <div class="image">
                            <img src="<?php echo ipq_get_theme_image_url( get_post_thumbnail_id(), array( 400, 300, true ) ); ?>"
                                alt="<?php echo get_the_title();?>">
                        </div>
                       <div class="descripcion grid cy">
                           <h3 class="w100"><?php echo get_the_title();?></h3>
                           <p class="tar w100 puesto"><?php echo get_post_meta( get_the_ID(), '_ofertas_puesto', 1 ); ?></p>
                           <?php the_excerpt(); ?>
                           <div class="w100 tac">
                           <a href="<?php echo get_post_meta( get_the_ID(), '_ofertas_link', 1 ); ?>"  target="_blank" class="link">
                           <?php _e('VER OFERTA', 'inotheme') ?>
                            </a>
                            </div>
                        </div>
                    </div>
                    <?php endwhile;?>
                        
                <?php endif; ?>
                </div>
        </section>
        <?php endwhile; // end of the loop. ?>
    </div>
    <?php get_footer(); ?>