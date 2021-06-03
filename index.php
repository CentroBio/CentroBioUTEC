<?php


get_header(); ?>
<div class="main-container seccion-centrada">
    <div class="container-estrecho">

        <?php while ( have_posts() ) : the_post(); ?>
        <h2><?php echo the_title(); ?></h2>
        <?php
                //If comments are open or we have at least one comment, load up the comment template
                	if ( comments_open() || '0' != get_comments_number() )
                    	comments_template();
                ?>
        <?php endwhile; // end of the loop. ?>
    </div>
    <?php get_footer(); ?>