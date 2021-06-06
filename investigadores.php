<?php
/*Template Name: Investigadores*/
get_header(); ?>
<div class="main-container seccion-centrada">
        <?php while ( have_posts() ) : the_post(); ?>
        <div class="w100 tac">
            <h2 class="title"><?php echo get_the_title();?></h2>
        </div>
        <section  class="estrecho grid cx">                    
            <p><?php the_content() ?></p>
            <div class="w100 grid cx">
            <?php
            $terms = get_terms( array(
                'taxonomy' => 'tipo',
                'hide_empty' => true,
                'orderby' => 'date',
                'order'   => 'DESC',

            ) );

            if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
            ?>
                <?php
                foreach ( $terms as $term ) {
                    ?><div class="w100 tac">
                    <h3 class="title"><?php echo $term->name ?> </h3>
                    </div>
                    <?php
                                	
                    $args = array(
                        'post_type' => 'investigadores-post',
                        'tipo' => $term->slug,     
                        'posts_per_page ' => -1,   
                    );
                        $query = new WP_Query( $args );
                        
                        ?>
                        <?php if ( $query->have_posts() ) : ?>

                        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                            <a class="persona grid cy cx" href="<?php the_permalink(); ?>">
                                <div class="image">
                                    <img src="<?php echo ipq_get_theme_image_url( get_post_thumbnail_id(), array( 170, 170, true ) ); ?>"
                                        alt="<?php echo get_the_title();?>">
                                </div>
                                <div class="descripcion grid cy">

                                    <h3 class="w100"><?php echo get_the_title();?></h3>
                                    <h4 class="w100"><?php echo get_post_meta( get_the_ID(), '_investigador_titulo', 1 ); ?></h4>
                                
                                    <?php if ($term->slug != 'investigadores-adjuntos') { ?>

                                        <p class="w100"><?php echo get_post_meta( get_the_ID(), '_investigador_correo', 1 ); ?></p>

                                    <?php } ?>

                                    <?php if ($term->slug == 'investigadores-adjuntos') { ?>

                                        <p class="w100"><?php echo get_post_meta( get_the_ID(), '_investigador_institucion', 1 ); ?></p> 
                     
                                    <?php } ?>
                                    
                                </div>
                            </a>
                        <?php endwhile;?>                               
                        <?php endif; ?>

                    <?php 
                }
                } ?>
 
                </div>


                
        </section>
        <?php endwhile; // end of the loop. ?>
    </div>
    <?php get_footer(); ?>