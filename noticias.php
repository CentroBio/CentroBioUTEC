<?php
/*Template Name: Noticias*/
get_header(); ?>
<div class="main-container seccion-centrada">
        <?php while ( have_posts() ) : the_post(); ?>
        <div class="w100 tac">
            <h2 class="title"><?php echo get_the_title();?></h2>
        </div>
        <section class="estrecho grid cx">                    
            <?php the_content() ?>
            <div class="noticias w100 grid cx noticias-page">
             <?php	
             $i=0;
                $args = array(
                    'post_type' => 'noticias-post',
                    'posts_per_page' => '10',

                );
                $query = new WP_Query( $args );
                
                ?>
                <?php if ( $query->have_posts() ) : ?>
                            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                                <div class="noticia grid cx" >
                                
                                    <div class="image grid">
                                        <?php if($i!=0){ ?>
                                        <img src="<?php echo ipq_get_theme_image_url( get_post_thumbnail_id(), array( 450, 350, true ) ); ?>"
                                            alt="<?php echo get_the_title();?>">
                                        <?php
                                            }
                                            else {
                                        ?>
                                                <img src="<?php echo ipq_get_theme_image_url( get_post_thumbnail_id(), array( 650, 400, true ) ); ?>"
                                                alt="<?php echo get_the_title();?>">  
                                        <?php
                                            }
                                            ?>
                                    </div>  
                                    <div class="description grid">
                                    <h3><?php echo get_the_title();?></h3>
                                    <p><?php echo get_the_excerpt() ?></p>
                                    <div class="w100 tar">
                                        <a href="<?php the_permalink(); ?>"><?php _e('VER NOTICIA', 'inotheme') ?></a>
                                    </div>
                                    </div>
                                </div>
                                
                <?php
                    $i++;
                 endwhile;?>
                <?php endif; ?>
 
                </div>
        </section>
        <?php endwhile; // end of the loop. ?>
    </div>
    <?php get_footer(); ?>