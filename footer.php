<div class="footer padding-vertical-footer padding-lateral">

    <div>

        <div class="row contenedor-informacion">

            <div class="col-12 col-sm-12 col-md-12 col-lg-4 informacion flex-column-center-start">

                <?php if (get_locale(  ) == "es_ES") { ?>
                <a href="/">
                    <img class="logo-footer"
                        src="<?php echo get_template_directory_uri(); ?>/img/logos/logo_centro_bio_blanco.png"
                        alt="<?php _e( "Logo Centro BIO", "inotheme" )?>">
                </a>
                <?php } else { ?>
                <a href="/en/home">
                    <img class="logo-footer"
                        src="<?php echo get_template_directory_uri(); ?>/img/logos/logo_centro_bio_blanco.png"
                        alt="<?php _e( "Logo Centro BIO", "inotheme" )?>">
                </a>
                <?php } ?>

                <p class="texto-footer texto-blanco">www.centrobio.utec.edu.pe</p>
                <p class="texto-footer texto-blanco">Jr. Medrano Silva 165 Barranco 15063</p>
            </div>

            <div class="col-12 col-sm-12 col-md-12 col-lg-4 informacion flex-column-start-start">
                <h4 class="texto-footer-bold texto-blanco"><?php _e( "Contacto", "inotheme" ) ?></h4>
                <p class="texto-footer texto-blanco">centrobio@utec.edu.pe</p>
                <p class="texto-footer texto-blanco">(+511) 230 5000 anexo 4220</p>
            </div>

            <div class="col-12 col-sm-12 col-md-12 col-lg-4 informacion flex-column-start-start">
                <h4 class="texto-footer-bold texto-blanco"><?php _e( "Redes sociales", "inotheme" ) ?></h4>
                <div class="contenedor-redes-sociales">
                    <a class="contenedor-icono" href="https://www.instagram.com/centrobio.utec/" target="_blank">
                        <img class="icono-red-social"
                            src="<?php echo get_template_directory_uri(); ?>/img/iconos/instagram_blanco.png"
                            alt="<?php _e( "Icono Instagram", "inotheme" )?>">
                    </a>
                    <a class="contenedor-icono" href="https://www.linkedin.com/in/centro-bio-utec-37007b254/"
                        target="_blank">
                        <img class="icono-red-social"
                            src="<?php echo get_template_directory_uri(); ?>/img/iconos/linkedin_blanco.png"
                            alt="<?php _e( "Icono LinkedIn", "inotheme" )?>">
                    </a>
                    <a class="contenedor-icono" href="https://www.youtube.com/@centrobio-utec5320" target="_blank">
                        <img class="icono-red-social"
                            src="<?php echo get_template_directory_uri(); ?>/img/iconos/youtube_blanco.png"
                            alt="<?php _e( "Icono Youtube", "inotheme" )?>">
                    </a>
                </div>
            </div>

        </div>

        <div>
            <p class="texto-copyright texto-blanco">
                <?php _e("Copyright ", "inotheme" )?> &copy <?php echo date('Y') ?>
                <?php _e(" Bio - UTEC. Todos los derechos reservados", "inotheme" )?>
            </p>
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
            slidesToShow: 4,
            slidesToScroll: 4,
            arrows: false,
            dots: true,
            appendDots: ".slider-aliados",
            responsive: [{
                    breakpoint: 1201,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 4,
                        infinite: true,
                    }
                },
                {
                    breakpoint: 1025,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 4,
                        infinite: true,
                    }
                },
                {
                    breakpoint: 769,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                    }
                },
                {
                    breakpoint: 577,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        infinite: true,
                    }
                },
                {
                    breakpoint: 321,
                    settings: {
                        slidesToShow: 1,
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