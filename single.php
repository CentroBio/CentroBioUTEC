<?php
get_header();
?>

<div>
    <main class="grid cx">
    <?php if ( is_active_sidebar( 'Blog Sidebar' ) ) { ?>
    <div id="sidebar">
    <button id="toggleb" class="">
        <i class="inoico icon-filtro"></i>    
    </button>
    <div id="custom-sidebar">
    <h3><?php _e('Otras publicaciones', 'inotheme') ?></h3>
        <?php $pID = get_the_ID() ?>
    <?php	
                $args = array(
                    'post_type' => 'post',
                    'post__not_in' => array($pID),
                );
                $query = new WP_Query( $args );
                
                ?>
                <?php if ( $query->have_posts() ) : ?>
                            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                                <a class="post grid cx" href="<?php echo get_the_permalink(); ?>">
                                    <div class="image grid cx cy">
                                        <img src="<?php echo ipq_get_theme_image_url( get_post_thumbnail_id(), array( 450, 350, true ) ); ?>"
                                            alt="<?php echo get_the_title();?>">
                                    </div>
                                        <h4><?php echo get_the_title();?></h4>
                                </a>
                            <?php endwhile;?>
                        
                <?php endif; ?>
        </div>          

    </div>
<?php } ?>        <div class="contenido-estrecho grid cx">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="entrada grid">
                <div class="w100">
                    <h2 class="title tac"><?php the_title();?></h2>
                </div>
                <div class="w100 tac">
                <img src="<?php echo ipq_get_theme_image_url( get_post_thumbnail_id( $post->ID ), array( 800, 500, true ) ); ?>" alt="">
                </div>
                <div class="w100 content">                
                <?php the_content();?>           
                </div>
                
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </main><!-- .site-main -->
</div><!-- .content-area -->
<script >
    jQuery(document).ready(function() {
    var screen = jQuery(window);
    jQuery("#toggleb").on("click", function() {
        jQuery(this).toggleClass("active");
        jQuery(this).siblings("div").toggle();
    });
});
    </script>
<?php
get_footer();