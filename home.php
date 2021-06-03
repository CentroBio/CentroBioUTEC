<?php
get_header();
?>

<div>
    <main class="grid cx">
    <div class="estrecho tac">
                <h2 class="title"> BLOG</h2>
            </div>
        <div class="container grid cx">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="entrada grid">
                <img src="<?php echo ipq_get_theme_image_url( get_post_thumbnail_id( $post->ID ), array( 450, 350, true ) ); ?>" alt="">
                <div class="w100">                
                <a href="<?php echo get_the_permalink(); ?>"><h3><?php the_title();?></h3></a>
                <?php the_excerpt();?>           
                </div>
                <div class="w100 tar">
                <a href="<?php echo get_the_permalink(); ?>"><?php _e('VER MÁS...', 'inotheme') ?></a>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </main><!-- .site-main -->
</div><!-- .content-area -->

<?php
get_footer();