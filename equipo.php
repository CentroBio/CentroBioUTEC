<?php
/*Template Name: Equipo*/
get_header(); ?>
    <div class="main-container seccion-centrada">

        <?php while ( have_posts() ) : the_post(); ?>

            <?php 
                $terms = get_terms('tipo-staff', array('hide_empty' => false));
                foreach ($terms as $key => $term) {      

                    $args = array(
                        'post_type' => 'equipo-post',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'tipo-staff',
                                'field' => 'slug',
                                'terms' => $term->slug,
                            ),
                        ),
                    );
                    $loop = new WP_Query( $args );

            ?>
                <div class="w100 tac">
                    <h2 class="title"><?php echo $term->name;?></h2>
                </div>
                <section class="estrecho grid cx">   
                <div  class="w100 grid cx equipo">

                <?php while ($loop->have_posts()) : $loop->the_post(); ?>

                    <div class="persona grid cy cx">
                        <div class="image">
                            <img src="<?php echo ipq_get_theme_image_url( get_post_thumbnail_id(), array( 170, 170, true ) ); ?>"
                                alt="<?php echo get_the_title();?>">
                        </div>
                        <div class="descripcion grid cy">
                            <h3 class="w100"><?php echo get_the_title();?></h3>
                            <h4 class="w100"><?php echo get_post_meta( get_the_ID(), '_equipo_cargo', 1 ); ?></h4>
                            <h4><?php echo get_post_meta( get_the_ID(), '_equipo_grupo', 1 );  ?></h4>
                        </div>
                    </div>
                            
                <?php endwhile; ?>

                </div>
                </section>

            <?php } ?>

        <?php endwhile; ?>

    </div>
<?php get_footer(); ?>