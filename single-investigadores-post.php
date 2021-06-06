<?php


get_header(); ?>
<div class="main-container seccion-centrada">

        <?php while ( have_posts() ) : the_post(); ?>
        <div class="w100 grid cx banner-inv">
            <div class="grid cye">
            <img src="<?php echo ipq_get_theme_image_url( get_post_thumbnail_id(), array( 170, 170, true ) ); ?>"
            alt="<?php echo get_the_title();?>">
            </div>
            <div class="info">
            <div>
                <h2 class="title"><?php echo get_the_title();?></h2><br>
                <?php echo get_post_meta( get_the_ID(), '_investigador_titulo', 1 ); ?><br>
                <?php echo get_post_meta( get_the_ID(), '_investigador_correo', 1 ); ?>
            </div>
            <div class="tab-menu">
                <button 
                        class="investigador-tab-btn active"
                        data-tab="biografia">
                    <?php _e('Biografía', 'inotheme') ?>
                </button>
                <button 
                        class="investigador-tab-btn" 
                        data-tab="investigacion">
                    <?php _e('Líneas de investigación', 'inotheme') ?>
                </button>
                <button 
                        class="investigador-tab-btn" 
                        data-tab="ensenanza">
                    <?php _e('Enseñanza', 'inotheme') ?>
                </button>
                <button 
                        class="investigador-tab-btn" 
                        data-tab="publicaciones">
                    <?php _e('Publicaciones', 'inotheme') ?>
                </button>

            </div>
            </div>
        </div>
        <div class="estrecho">

        <div class="tab" id="biografia">
        <?php echo get_post_meta( get_the_ID(), '_investigador_biografia', 1 ); ?>
        </div>
        <div class="tab" id="investigacion">
        <?php echo get_post_meta( get_the_ID(), '_investigador_investigacion', 1 ); ?>
        </div>
        <div class="tab" id="ensenanza">
        <?php echo get_post_meta( get_the_ID(), '_investigador_ensenanza', 1 ); ?>
        </div>
        <div class="tab" id="publicaciones">
        <?php echo get_post_meta( get_the_ID(), '_investigador_publicaciones', 1 ); ?>
        </div>
        </div>
        <?php endwhile; // end of the loop. ?>
    <script>
        /*
        function openTab(tabName) {
            var i;
            var x = document.getElementsByClassName("tab");
            for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
            }
            document.getElementById(tabName).style.display = "block";
        }
        */
        jQuery(document).on("click",".investigador-tab-btn", function () {
            //DISPLAYING TAB PANEL
            var tabTarget = jQuery(this).attr('data-tab');
            jQuery(".tab").hide();
            jQuery("#"+tabTarget).show();
            
            //CHANGING TAB BUTTON STYLE
            jQuery(".investigador-tab-btn").removeClass("active");
            jQuery(this).addClass("active");
        });
    </script>
    <?php get_footer(); ?>