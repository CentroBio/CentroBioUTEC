<?php
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<!-- <div class="tool-bar">
        <ul>zz
            <li><a class="esp" href="/">&nbsp;Español</a></li>
            <li><a class="eng" href="/en/home">&nbsp;English</a></li>
        </ul>
    </div> -->

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php is_front_page() ? bloginfo('name') : wp_title(""); ?></title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.13.1/css/OverlayScrollbars.min.css"
        rel="stylesheet">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.13.1/js/jquery.overlayScrollbars.min.js">
    </script>
</head>

<body>

    <div class="navbar-desktop padding-lateral flex-between-center">

        <?php if (get_locale(  ) == "es_ES") { ?>
        <a href="/" class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo_centro_bio.png"
                alt="<?php _e( "Logo Centro BIO", "inotheme" )?>">
        </a>
        <?php } else { ?>
        <a href="/en/home" class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo_centro_bio.png"
                alt="<?php _e( "Logo Centro BIO", "inotheme" )?>">
        </a>
        <?php } ?>

        <?php 

            $menu_name = 'main-menu';
            $locations = get_nav_menu_locations();
            $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
            $navbar_items = wp_get_nav_menu_items( $menu->term_id);
            $child_items = [];

            foreach ($navbar_items as $key => $item) {

                if ($item->menu_item_parent) {
                    array_push($child_items, $item);
                    unset($navbar_items[$key]);
                }

            }

            foreach ($navbar_items as $item) {

                foreach ($child_items as $child) {

                    if ($child->menu_item_parent == $item->ID) {
                        if (!$item->child_items) {
                            $item->child_items = [];
                        }

                        array_push($item->child_items, $child);
                        unset($child_items[$key]);
                    }

                }

            }
            
        ?>

        <div class="menu-main_menu-container">
            <ul id="menu-main_menu">

                <?php 

                    global $wp;
                    foreach($navbar_items as $item) {

                ?>

                <?php 
                
                    if ($item->object_id == get_queried_object_id(  )) {
                            
                ?>

                <li class="menu-item current-menu-item">
                    <a href="<?php echo $item->url ?>"><?php echo $item->title ?></a>
                </li>

                <?php } else { ?>

                <li class="menu-item">
                    <a href="<?php echo $item->url ?>"><?php echo $item->title ?></a>
                </li>

                <?php } ?>

                <?php } ?>

                <?php if (get_locale(  ) == "es_ES") { ?>

                <li class="menu-item menu-item-idioma menu-item-idioma-seleccionado">
                    <a href="/"><?php _e( "Español", "inotheme" ) ?></a>
                </li>

                <li class="menu-item menu-item-idioma">
                    <a href="/en/home"><?php _e( "Inglés", "inotheme" ) ?></a>
                </li>
                <?php } else { ?>

                <li class="menu-item menu-item-idioma">
                    <a href="/"><?php _e( "Español", "inotheme" ) ?></a>
                </li>

                <li class="menu-item menu-item-idioma menu-item-idioma-seleccionado">
                    <a href="/en/home"><?php _e( "Inglés", "inotheme" ) ?></a>
                </li>

                <?php } ?>

            </ul>

        </div>

    </div>

    <div class="navbar-mobile">
        <ul class="menus-mobile">

            <?php foreach($navbar_items as $main_menu) { ?>

            <li class="menu-item">

                <?php if ($main_menu->child_items) { ?>
                <?php echo $main_menu->title?>
                <ul class="submenu-mobile">

                    <?php foreach($main_menu->child_items as $submenu_item) { ?>

                    <li class="elemento-submenu">
                        <a class="texto-submenu"
                            href="<?php echo $submenu_item->url ?>"><?php echo $submenu_item->title?></a>
                    </li>

                    <?php } ?>

                </ul>

                <?php } else { ?>

                <a href="<?php echo $main_menu->url ?>"><?php echo $main_menu->title ?></a>

                <?php } ?>



            </li>

            <?php } ?>

            <?php if (get_locale(  ) == "es_ES") { ?>

            <li class="menu-item menu-item-idioma menu-item-idioma-seleccionado">
                <a href="/"><?php _e( "Español", "inotheme" ) ?></a>
            </li>

            <li class="menu-item menu-item-idioma">
                <a href="/en/home"><?php _e( "Inglés", "inotheme" ) ?></a>
            </li>
            <?php } else { ?>

            <li class="menu-item menu-item-idioma">
                <a href=" /"><?php _e( "Español", "inotheme" ) ?></a>
            </li>

            <li class="menu-item menu-item-idioma menu-item-idioma-seleccionado">
                <a href="/en/home"><?php _e( "Inglés", "inotheme" ) ?></a>
            </li>

            <?php } ?>


        </ul>
    </div>


    <?php 
    
        $menu_counter = 0;

        foreach($navbar_items as $main_menu) {

            $childList = $main_menu->child_items;
            $childArray = array($childList);
            
            if (is_countable($childList) && count($childList) > 1) {
                
    ?>

    <div class="dropdown-menu-<?php echo $menu_counter?> dropdown-submenus flex-between-center">

        <div
            class="flex-column-center-start descripcion-submenu descripcion-submenu-<?php echo $main_menu->ID?> descripcion-submenu-<?php echo $main_menu->post_name?>">

            <!-- <?php var_dump($main_menu->ID) ?> -->

            <!-- MENU NOSOTROS -->
            <?php if ($main_menu -> ID == 892 || $main_menu -> ID == 909) { ?>

            <h2 class="titulo-dropdown-submenu"><?php _e( "Acerca de BIO", "inotheme" ) ?></h2>
            <p class="subtitulo-dropdown-submenu">
                <?php _e( "Conoce más de las autoridades, equipos y las instituciones con las cuales el Centro BIO viene desarrollando alianzas en investigación y desarrollo.", "inotheme" ) ?>
            </p>

            <!-- MENU INVESTIGACION -->
            <?php } else if ($main_menu -> ID == 894 || $main_menu -> ID == 913) { ?>

            <h2 class="titulo-dropdown-submenu"><?php _e( "Investigación en BIO", "inotheme" ) ?></h2>
            <p class="subtitulo-dropdown-submenu">
                <?php _e( "El Centro BIO desarrolla sus lineas de investigación de manera multidisciplanaria integrando ramas de la ingeniería y la biomedicina. Entérate de esto y sus principales proyectos en esta sección.", "inotheme" ) ?>
            </p>

            <!-- MENU SEMINARIOS Y EVENTOS -->
            <?php } else if ($main_menu -> ID == 906 || $main_menu -> ID == 910) { ?>

            <h2 class="titulo-dropdown-submenu"><?php _e( "Seminarios y eventos", "inotheme" ) ?></h2>
            <p class="subtitulo-dropdown-submenu">
                <?php _e( "A través del Centro BIO y la carrera de Bioingeniería de UTEC, se desarrollan todos los años una serie de eventos y capactaciones que promueven la investigación contando con la participación de excelentes profesionales nacionales e internacionales.", "inotheme" ) ?>
            </p>

            <?php } ?>

        </div>

        <ul
            class="flex-column-center-start lista-submenus lista-submenus-<?php echo $main_menu->ID?> lista-submenus-<?php echo $main_menu->post_name?>">

            <?php 
                foreach($main_menu->child_items as $submenu_item) {
            ?>

            <li class="">
                <a class="texto-submenu" href="<?php echo $submenu_item->url ?>"><?php echo $submenu_item->title?></a>
            </li>

            <?php } ?>

        </ul>

    </div>

    <?php           
                    
                }
                 
            $menu_counter += 1;

        }

    ?>