<?php
/*Template Name: Contacto*/

get_header(); ?>
<div class="main-container seccion-centrada grid cx lienzo contacto">
        <?php while ( have_posts() ) : the_post(); ?>
            <div class="estrecho tac">
                <h2 class="title"> <?php echo get_the_title();?></h2>
            </div>
            <div class="estrecho grid cx cy">
            <?php echo get_the_content();?>
               <div class="datos grid cys cx">
                        <a href="tel:(+511)2305000" class="tac"><i class="inoico icon-telefono-c"></i><br>(+511)2305000</a>
                        <a href="mailto:centrobio@utec.edu.pe" class="tac"><i class="inoico icon-correo-c"></i><br>centrobio@utec.edu.pe</a>
                        <a href="https://goo.gl/maps/ZL8o25mno42VCYri9" class="tac"><i class="inoico icon-ubicacion-c"></i><br>Jr. Medrano Silva 165 Barranco.<br> Lima 04, Peru</a>
               </div> 
                <div class="form-contacto grid cx">
                    <div class="w50 grid cx cy">    
                <div class="form-en">
                <?php echo do_shortcode('[contact-form-7 id="184" title="Formulario de contacto en"]') ?>
                </div>
                <div class="form-es">
                <?php echo do_shortcode('[contact-form-7 id="126" title="Formulario de contacto es"]') ?>
                </div>
                </div>
                <div class="w50 map"><div style="width: 100%"><iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=es&amp;q=Jr.%20Medrano%20Silva%20165%20Barranco%2015063+(CIRSO%20UTEC)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>           
                    </div>
                </div>
            
            </div>
        <?php endwhile; // end of the loop. ?>
    <?php get_footer(); ?>