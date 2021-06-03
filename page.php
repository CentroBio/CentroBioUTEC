<?php


get_header(); ?>
<div class="main-container seccion-centrada">
    <div class="container-estrecho">
        <?php while ( have_posts() ) : the_post(); ?>
        <div class="grid cx">
            <div class="estrecho">
                <div class="w100 tac">
                    <h2 class="title"> <?php echo get_the_title();?> </h2>
                </div>
                <div>
                    <?php the_content();?>
                </div>
            </div>
        </div>
        <?php endwhile; // end of the loop. ?>
    </div>
    <?php get_footer(); ?>