<?php
/*Template Name: Eventos y seminarios*/

get_header(); ?>
<div class="main-container seccion-centrada">
    <div class="container-estrecho">
        <?php while ( have_posts() ) : the_post(); ?>
        <div class="w100 tac">
                            <h2 class="title"><span><?php echo get_the_title();?></span></h2>
                            </div>
        <div class="grid cx">
 
            <div class="estrecho grid cx cy lienzo">
            <?php the_content() ?>

                <div class="descripcion">
                <?php	
            $args = array(
                'post_type' => 'eventos-post',
                'posts_per_page' => '10',

            );

            $query = new WP_Query( $args ); ?>
                    <?php if ( $query->have_posts() ) : ?>
                    <section class="grid cx eventos">
                                <?php while ( $query->have_posts() ) : $query->the_post(); ?>

                                <div class="evento grid">
                                    <div class="image">
                                        <img src="<?php echo ipq_get_theme_image_url( get_post_thumbnail_id(), array( 400, 350, true ) ); ?>"
                                            alt="<?php echo get_the_title();?>">
                                    </div>
                                <div class="description grid cy">
                                    <h3><?php echo get_the_title();?></h3>
                                    <div class="texto">
                                    <p><?php echo get_the_excerpt() ?></p>
                                        </div>
                                    <a href="<?php the_permalink(); ?>" class="button"><?php _e('Ver más', 'inotheme') ?></a>        
                                </div>
                                </div>
                                <?php endwhile;?>
                        
                            <div class="pagination w100 grid cx">
                        <?php 
                            echo paginate_links( array(
                                'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                                'total'        => $query->max_num_pages,
                                'current'      => max( 1, get_query_var( 'paged' ) ),
                                'format'       => '?paged=%#%',
                                'show_all'     => false,
                                'type'         => 'plain',
                                'end_size'     => 2,
                                'mid_size'     => 1,
                                'prev_next'    => true,
                                'prev_text'    => sprintf( '<i></i> %1$s', '<<') ,
                                'next_text'    => sprintf( '%1$s <i></i>', '>>') ,
                                'add_args'     => false,
                                'add_fragment' => '',
                            ) );
                        ?>
                    </div>
                    </section>
                    <?php endif; ?>
                   </div>            
            </div>
        </div>
        <?php endwhile; // end of the loop. ?>
    </div>
    <?php get_footer(); ?>