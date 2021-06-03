<?php
/*Template Name: Equipo*/
get_header(); ?>
<div class="main-container seccion-centrada">
        <?php while ( have_posts() ) : the_post(); ?>
        <div class="w100 tac">
            <h2 class="title"><?php echo get_the_title();?></h2>
        </div>
        <section class="estrecho grid cx">                    
            <p><?php the_content() ?></p>
            <div  class="w100 grid cx equipo">
             <?php	
                $args = array(
                    'post_type' => 'equipo-post',
                );
                $query = new WP_Query( $args );
                
                ?>
                <?php if ( $query->have_posts() ) : ?>
                            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                    <div class="persona grid cy cx">
                        <div class="image">
                            <img src="<?php echo ipq_get_theme_image_url( get_post_thumbnail_id(), array( 170, 170, true ) ); ?>"
                                alt="<?php echo get_the_title();?>">
                        </div>
                       <div class="descripcion grid cy">
                           <h3 class="w100"><?php echo get_the_title();?></h3>
                           <h4 class="w100"><?php echo get_post_meta( get_the_ID(), '_equipo_cargo', 1 ); ?></h4>
                        </div>
                    </div>
                            <?php endwhile;?>
                        
                <?php endif; ?>
                </div>
        </section>
        <?php endwhile; // end of the loop. ?>
    </div>
    <?php get_footer(); ?>