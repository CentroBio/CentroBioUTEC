<div class="footer padding-vertical-footer padding-lateral">

    <div>

        <div class="row contenedor-informacion">

            <div class="col-12 col-sm-12 col-md-12 col-lg-4 informacion flex-column-center-start">
                <img class="logo-footer"
                    src="<?php echo get_template_directory_uri(); ?>/img/logos/logo_centro_bio_blanco.png">
                <p class="texto-footer texto-blanco">www.centrobio.utec.edu.pe</p>
                <p class="texto-footer texto-blanco">Jr. Medrano Silva 165 Barranco 15063</p>
            </div>

            <div class="col-12 col-sm-12 col-md-12 col-lg-4 informacion flex-column-start-start">
                <h4 class="texto-footer-bold texto-blanco"><?php _e( "Contacto", "inotheme" ) ?></h4>
                <p class="texto-footer texto-blanco">centrobio@utec.edu.pe</p>
                <p class="texto-footer texto-blanco">(+511) 230 5000 anexo 4220</p>
            </div>

            <div class="col-12 col-sm-12 col-md-12 col-lg-4 informacion flex-column-start-start">
                <h4 class="texto-footer-bold texto-blanco"><?php _e( "Nuestras redes", "inotheme" ) ?></h4>
                <div class="contenedor-redes-sociales">
                    <a class="contenedor-icono" href="https://blog.hubspot.com/website/what-is-wordpress-slug"
                        target="_blank">
                        <img class="icono-red-social"
                            src="<?php echo get_template_directory_uri(); ?>/img/iconos/facebook_blanco.png">
                    </a>
                    <a class="contenedor-icono" href="https://blog.hubspot.com/website/what-is-wordpress-slug"
                        target="_blank">
                        <img class="icono-red-social"
                            src="<?php echo get_template_directory_uri(); ?>/img/iconos/youtube_blanco.png">
                    </a>
                </div>
            </div>

        </div>

        <div>
            <p class="texto-copyright texto-blanco">
                <?php _e( "Copyright © 2021 Bio - UTEC. Todos los derechos reservados", "inotheme" ) ?></p>
        </div>

    </div>

</div>

<?php wp_footer(); ?>

<script>
(function($) {
    $(document).ready(function() {

        $('.slider-aliados').slick({
            autoplay: true,
            cssEase: 'cubic-bezier(0.33, 1, 0.68, 1)',
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: false,
            dots: true,
            appendDots: ".slider-aliados",
            responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: true,
                    }
                },
                {
                    breakpoint: 577,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                    }
                },
                {
                    breakpoint: 100,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                    }
                }
            ]

        });

        $(".carousel-enlaces").slick({
            autoplay: false,
            arrows: false,
            dots: false,
            draggable: false,
            fade: true,
            cssEase: 'linear'
        });

        $('.navbar-mobile').slicknav({
            label: '',
            duration: 350,
            prependTo: ".navbar-desktop"
        });

        var enlaces = Array.from($(".elemento-enlace"));

        enlaces.forEach((enlace, index) => {
            enlace.addEventListener('mouseenter', () => {
                $(".carousel-enlaces").slick('slickGoTo', index, false);
            })
        });

    });

})(jQuery);
</script>

</body>

</html>