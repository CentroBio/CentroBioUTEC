<?php
/*Template Name: Básico*/

get_header(); ?>
<div class="main-container seccion-centrada">
    <div class="container-estrecho">
        <?php while ( have_posts() ) : the_post(); ?>
        <div class="grid cx">
            <div class="estrecho">
                <h2 class="title"> <?php echo get_the_title();?></h2>
            </div>
            <div class="estrecho grid cx cy">
                <div class="descripcion">
                    <?php echo get_the_content();?>
                </div>

            </div>
        </div>
        <?php endwhile; // end of the loop. ?>
    </div>
    <?php get_footer(); ?>