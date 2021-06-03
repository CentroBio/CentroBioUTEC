<?php
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('name') : wp_title(); ?></title>

    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css"
        integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
    <div class="tool-bar">
        <ul>
            <li><a class="esp" href="/">&nbsp;Español</a></li>
            <li><a class="eng" href="/en/home">&nbsp;English</a></li>
        </ul>
    </div>
    <style>
    .banner>div:first-child {
        display: block;
    }
    .tool-bar {
        background-color: #f1f1f1;
        text-align: right;
        padding: 8px;
    }

    html[lang="es-ES"] .tool-bar a.esp,
    html[lang="es-ES"] .lang a.esp {
        background: #8f8d8e;
    }

    html[lang="en-US"] .tool-bar a.eng,
    html[lang="en-US"] .lang a.eng {
        background: #8f8d8e;
    }

    .tool-bar ul li {
        list-style: none;
        display: inline-block;
        margin: 2px;
    }

    .tool-bar a {
        color: #fff;
        background-color: #c4c3c4;
        font-size: 12px;
        padding: 5px 10px;
    }

    .lang {
        background: #f1f1f1 !important;
    }
    .lang a {
        width: 40%;
        background: #c4c3c4;
        text-align: center;
    }
    </style>
    <div class="header">
        <div class="header-inner">
            <div class="logo">
                <a href="/<?php _e('inicio', 'inotheme') ?>">
                    <img src="/wp-content/themes/BioUTEC/img/bio utec logo.svg" alt="logo">
                </a>
            </div>
            <div class="nav">
                <div class="menu-navigator-container">
                    <ul id="menu-navigator" class="menu">
                    <li>
                        <a href="/<?php _e('inicio', 'inotheme') ?>" class="parent">
                                <div><i class="icono icono-inicio"></i></div>
                                <?php _e('INICIO', 'inotheme') ?>
                        </a>
                        </li>
                        <li>
                            <a class="parent" href="/<?php _e('nosotros', 'inotheme') ?>">
                                <div><i class="icono icono-nosotros"></i>
                                </div>
                                <?php _e('NOSOTROS', 'inotheme') ?>

                                </a>
                            <div class="sub-menu">
                                <div class="seccion-centrada">
                                    <div class="descripcion">
                                        <h1>
                                            <?php _e('ACERCA', 'inotheme') ?><br> <span class="black">
                                                <?php _e('DE', 'inotheme') ?></span><br>
                                            <?php _e('BIO', 'inotheme') ?>
                                        </h1>
                                    </div>
                                    <ul>
                                        <li><a
                                                href="/<?php _e('nosotros', 'inotheme') ?>"><?php _e('Nosotros', 'inotheme') ?></a>
                                        </li>
                                        <li><a
                                                href="/<?php _e('equipo', 'inotheme') ?>"><?php _e('Equipo', 'inotheme') ?></a>
                                        </li>
                                        <li><a
                                                href="/<?php _e('alianzas', 'inotheme') ?>"><?php _e('Alianzas', 'inotheme') ?></a>
                                        </li>
                                        <li><a
                                                href="/<?php _e('investigadores', 'inotheme') ?>"><?php _e('Investigadores', 'inotheme') ?></a>
                                        </li>
                                        <li><a
                                                href="/<?php _e('contacto', 'inotheme') ?>"><?php _e('Contacto', 'inotheme') ?></a>
                                        </li>
                                        <li><a
                                                href="/<?php _e('trabaja-con-nosotros', 'inotheme') ?>"><?php _e('Trabaja con nosotros', 'inotheme') ?></a>
                                        </li>  
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a class="parent" href="/<?php _e('lineas-de-investigacion', 'inotheme') ?>">
                                <div><i class="icono icono-investigacion"></i></div>
                                <?php _e('INVESTIGACIÓN', 'inotheme') ?>
                            </a> 
                            <div class="sub-menu">
                                <div class="seccion-centrada">
                                    <div class="descripcion">
                                        <h1>
                                            <?php _e('INVESTIGACIÓN', 'inotheme') ?><br> <span class="black">
                                                <?php _e('EN', 'inotheme') ?></span><br>
                                            <?php _e('BIO', 'inotheme') ?>
                                        </h1>
                                    </div>
                                    <ul>
                                        <li><a
                                                href="/<?php _e('lineas-de-investigacion', 'inotheme') ?>"><?php _e('Líneas de investigación', 'inotheme') ?></a>
                                        </li>
                                        <li><a
                                                href="/<?php _e('laboratorios', 'inotheme') ?>"><?php _e('Laboratorios', 'inotheme') ?></a>
                                        </li>
                                        <li><a
                                                href="/<?php _e('proyectos', 'inotheme') ?>"><?php _e('Proyectos', 'inotheme') ?></a>
                                        </li>
                                   
                                    </ul>
                                </div>
                            </div>                         
                        </li>
                        <li>
                            <a class="parent" href="/<?php _e('agenda', 'inotheme') ?>">
                                <div><i class="icono icono-educacion"></i></div>
                                <?php _e('SEMINARIOS Y EVENTOS', 'inotheme') ?>
                            </a>  
                            <div class="sub-menu">
                                <div class="seccion-centrada">      
                                    <div class="descripcion">
                                        <h1>
                                            <?php _e('SEMINARIOS', 'inotheme') ?><br> <span class="black">
                                                <?php _e('Y', 'inotheme') ?></span><br>
                                            <?php _e('EVENTOS', 'inotheme') ?>
                                        </h1>
                                    </div>                         
                                    <ul>
                                        <li><a
                                                href="/<?php _e('agenda', 'inotheme') ?>"><?php _e('Agenda', 'inotheme') ?></a>
                                        </li>
                                        <li><a
                                                href="/<?php _e('visitantes-academicos', 'inotheme') ?>"><?php _e('Visitantes académicos', 'inotheme') ?></a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>                        
                        </li>
                  
                       
                        <li>
                            <a class="parent" href="/<?php _e('noticias', 'inotheme')?>">
                                <div><i class="icono icono-n-y-e"></i></div>
                                <?php _e('NOTICIAS', 'inotheme') ?>
                            </a>                            
                        </li>
                        <li>
                            <a class="parent" href="/<?php _e('blog', 'inotheme')?>">
                                <div><i class="icono icono-blog"></i></div>
                                <?php _e('BLOG', 'inotheme') ?>
                            </a>                          
                        </li>
                    </ul>
                </div>
            </div>
            <div class="clear"></div>
        </div><!-- header-inner -->
    </div><!-- header -->
    <div class="navbar-chiqui">
        <!-- Static navbar -->
        <nav class="navbar">
            <div class="">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="slide-collapse"
                        data-target="#navbar-2" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/<?php _e('inicio', 'inotheme') ?>">
                    <img src="/wp-content/themes/BioUTEC/img/bio utec logo.svg" alt="logo">
                    </a>
                </div>
                <div id="navbar-2" class="navbar-vert" aria-expanded="false">
                    <ul class="nav">
                        <li><a class="drop-submenu" data-target="sub-nosotros">
                                <?php _e('NOSOTROS', 'inotheme') ?> </a>
                        </li>
                        <li><a class="drop-submenu" data-target="sub-investigacion">
                                <?php _e('INVESTIGACIÓN', 'inotheme') ?>
                            </a>
                        </li>
                       
                        <li><a class="drop-submenu" data-target="sub-s-y-e">
                                <?php _e('SEMINARIOS Y EVENTOS', 'inotheme') ?>

                            </a>
                        </li>
                        <li><a class="drop-submenu" href="/<?php _e('noticias', 'inotheme') ?>">
                                <?php _e('NOTICIAS', 'inotheme') ?>

                            </a>
                        </li>
                        <li><a class="drop-submenu" href="/<?php _e('blog', 'inotheme') ?>">
                                <?php _e('BLOG', 'inotheme') ?>

                            </a>
                        </li>
                        <li style="display:flex; justify-content: space-around" class="lang">
                            <a class="esp" href="/">&nbsp;Español</a>
                            <a class="eng" href="/en/home">&nbsp;English</a>
                        </li>
                    </ul>
                </div>
                <div id="sub-nosotros" class="navbar-vert sub-navbar" aria-expanded="false">
                    <div class="regresar-head-btn"><?php _e('VOLVER', 'inotheme') ?></div>
                    <h3 class="h3 msg-sub-head"><a>
                            <?php _e('NOSOTROS', 'inotheme') ?>
                        </a></h3>
                    <ul class="nav">
                    <li><a
                            href="/<?php _e('nosotros', 'inotheme') ?>"><?php _e('Nosotros', 'inotheme') ?></a>
                    </li>                                       
                    <li><a
                            href="/<?php _e('equipo', 'inotheme') ?>"><?php _e('Equipo', 'inotheme') ?></a>
                    </li>
                    <li><a
                            href="/<?php _e('alianzas', 'inotheme') ?>"><?php _e('Alianzas', 'inotheme') ?></a>
                    </li>
                    <li><a
                            href="/<?php _e('investigadores', 'inotheme') ?>"><?php _e('Investigadores', 'inotheme') ?></a>
                    </li>
                    
                    <li><a
                            href="/<?php _e('contacto', 'inotheme') ?>"><?php _e('Contacto', 'inotheme') ?></a>
                    </li>
                    <li><a
                            href="/<?php _e('trabaja-con-nosotros', 'inotheme') ?>"><?php _e('Trabaja con nosotros', 'inotheme') ?></a>
                    </li>
                    </ul>
                </div>
                <div id="sub-investigacion" class="navbar-vert sub-navbar" aria-expanded="false">
                    <div class="regresar-head-btn"><?php _e('VOLVER', 'inotheme') ?></div>
                    <h3 class="h3 msg-sub-head"><a>
                            <?php _e('INVESTIGACIÓN', 'inotheme') ?>
                        </a></h3>
                    <ul class="nav">
                    <li><a
                            href="/<?php _e('lineas-de-investigacion', 'inotheme') ?>"><?php _e('Líneas de investigación', 'inotheme') ?></a>
                    </li>                                       
                    <li><a
                            href="/<?php _e('laboratorios', 'inotheme') ?>"><?php _e('Laboratorios', 'inotheme') ?></a>
                    </li>
                    <li><a
                            href="/<?php _e('proyectos', 'inotheme') ?>"><?php _e('Proyectos', 'inotheme') ?></a>
                    </li>
                    </ul>
                </div>    
                <div id="sub-s-y-e" class="navbar-vert sub-navbar" aria-expanded="false">
                    <div class="regresar-head-btn"><?php _e('VOLVER', 'inotheme') ?></div>
                    <h3 class="h3 msg-sub-head"><a>
                            <?php _e('SEMINARIOS Y EVENTOS', 'inotheme') ?>
                        </a></h3>
                    <ul class="nav">
                    <li><a
                            href="/<?php _e('agenda', 'inotheme') ?>"><?php _e('Agenda', 'inotheme') ?></a>
                    </li>                                       
                    <li><a
                            href="/<?php _e('visitantes-academicos', 'inotheme') ?>"><?php _e('Visitantes académicos', 'inotheme') ?></a>
                    </li>
                    </ul>
                </div>
                            
            </div>
        </nav>
    </div>