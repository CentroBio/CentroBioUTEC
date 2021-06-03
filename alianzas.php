<?php
/*Template Name: Alianzas*/
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
                    'post_type' => 'aliados-post',
                    'posts_per_page' => '-1', 
                );
                $query = new WP_Query( $args );                
            ?>
                <?php if ( $query->have_posts() ) : ?>
                            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                    <div class="aliado grid cysb cx">
                        <h3 class="w100"><?php echo get_post_meta( get_the_ID(), '_aliado_rama', 1 );?></h3>
                        <img src="<?php echo ipq_get_theme_image_url( get_post_thumbnail_id(), array( 250, 120, false ) ); ?>"
                                alt="<?php echo get_the_title();?>">
                    </div>
                <?php endwhile;?>
                        
                <?php endif; ?>
                </div>
        </section>
        <?php endwhile; // end of the loop. ?>
    </div>
    <?php get_footer(); ?>