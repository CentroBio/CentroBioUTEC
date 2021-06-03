<?php


get_header(); ?>
<div class="main-container seccion-centrada">
    <div class="estrecho">

        <?php while ( have_posts() ) : the_post(); ?>
        <div class="w100 tac">
            <h2 class="title"><span><?php echo get_the_title();?></span></h2>
        </div>
        
        <?php the_content(); ?>

        <?php
                //If comments are open or we have at least one comment, load up the comment template
                	if ( comments_open() || '0' != get_comments_number() )
                    	comments_template();
                ?>
        <?php endwhile; // end of the loop. ?>
    </div>
    <?php get_footer(); ?>