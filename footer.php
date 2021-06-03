
</div><!-- main-container -->

<div class="footer" style="background-color:#f1f1f1;">


    <div class="seccion">
        <div class="container">
            <span>Jr. Medrano Silva 165 Barranco 15063</span>
            <span><b>T.</b> (+511) 230 5000 anexo 4220</span>
            <span><b>W.</b> https://centrobio.utec.edu.pe </span>
            <span><b>C.</b> centrobio@utec.edu.pe</span>
            <span>
                <p><a href="https://www.facebook.com/utecuniversidad/?__tn__=%2Cd%2CP-R&eid=ARDc6S6pcbnD_P71PWHbDe38cyMpTklN7yGgGelU0upH__PbnTu90KHSAbnA-ajzme-RWCFmiyaex6QY"><i class="inoico icon-facebook"></i></a></p>
                <p><a href="https://www.youtube.com/user/universidadutec"><i class="inoico icon-youtube"></i></a>
                </p>
            </span>
        </div>
        <div class="container" style="padding-bottom:24px;">
            <span>
                Copyright © 2021 Bio - UTEC. <?php _e('Todos los derechos reservados', 'inotheme') ?>
            </span>
            <div class="marca"><a href="https://www.inoloop.com/" target="_blank" data-toggle="tooltip"
                    data-placement="left" title="" class="logo-foot-wrap"
                    data-original-title="Desarrollado por Inoloop"><i class="inoico icon-inoloop"></i></a>
            </div>
        </div>
    </div>
</div>

</div>

<?php wp_footer(); ?>

<script>
(function($) {
    $(document).ready(function() {

        $(".n-y-e .description button").click(function(){
            $(this).parent(".description").toggleClass("fulltext");
        });

        $('.banner').slick({
            autoplay: true,
            arrows: false,
            fade: true,
            dots: false
        });

        $('.slider-aliados').slick({
            autoplay: true,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: false,
            dots: true,
            appendDots: ".slider-aliados",
            responsive: [
                {
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
                    breakpoint: 350,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                    }
                }
            ]

        });

    });
})(jQuery);
</script>

</body>

</html>