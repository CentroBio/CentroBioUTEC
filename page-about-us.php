<?php /* Template Name: About us */ ?>
<?php get_header(); ?>

<div class="pagina-nosotros">

    <?php while ( have_posts() ) : the_post(); ?>

    <?php 

        $post = get_post(); 

        if ( has_blocks( $post->post_content ) ) {

            $blocks = parse_blocks( $post->post_content );
            $blockFondo = $blocks[0];
            $blockIntroduccion = $blocks[2];
            $blockObjetivos = $blocks[4];
            $blockMision = $blocks[6];
            $blockVision = $blocks[8];

        }
        
    ?>

    <!-- Imagen Fondo -->
    <?php $fondoInnerBlocks = $blockFondo["innerBlocks"];?>

    <div class="imagen-fondo-nosotros">
        <?php echo $fondoInnerBlocks[0]['innerHTML'];?>
        <div class="contenido" style="z-index: 1">
            <h1 class="titulo-fondo-imagen texto-blanco"><?php the_title() ?></h1>
        </div>
    </div>

    <!-- Introduccion -->
    <?php 
        $introInnerBlocks = $blockIntroduccion["innerBlocks"]; 
        $primerParrafo = $introInnerBlocks[0]['innerHTML'];
        $segundoParrafo = $introInnerBlocks[1]['innerHTML'];
    ?>
    <div class="padding-vertical padding-lateral-introduccion-nosotros">
        <div class="texto-intro-nosotros texto-centrado">
            <?php echo $primerParrafo;?>
        </div>
        <div class="texto-intro-nosotros texto-centrado">
            <?php echo $segundoParrafo;?>
        </div>
    </div>

    <!-- Objetivos -->
    <?php 
        $titulo_objetivos = $blockObjetivos['innerBlocks'][0]['innerHTML'];
        $objetivo_1 = $blockObjetivos['innerBlocks'][1]['innerHTML'];
        $objetivo_2 = $blockObjetivos['innerBlocks'][2]['innerHTML'];
        $objetivo_3 = $blockObjetivos['innerBlocks'][3]['innerHTML'];
        $objetivo_4 = $blockObjetivos['innerBlocks'][4]['innerHTML'];
    ?>

    <div class="flex-between-center contenedor-objetivos padding-vertical padding-lateral">

        <div class="contenedor-lista-objetivos texto-regular flex-column-center-start">
            <div class="objetivo flex-start-start">
                <div class="numero-objetivo flex-center-center"><span>1</span></div>
                <div class="texto-regular descripcion-objetivo"><?php echo $objetivo_1;?></div>
            </div>
            <div class="objetivo flex-start-start">
                <div class="numero-objetivo flex-center-center">2</div>
                <div class="texto-regular descripcion-objetivo"><?php echo $objetivo_2;?></div>
            </div>
            <div class="objetivo flex-start-start">
                <div class="numero-objetivo flex-center-center">3</div>
                <div class="texto-regular descripcion-objetivo"><?php echo $objetivo_3;?></div>
            </div>
            <div class="objetivo flex-start-start">
                <div class="numero-objetivo flex-center-center">4</div>
                <div class="texto-regular descripcion-objetivo"><?php echo $objetivo_4;?></div>
            </div>
        </div>
        <div class="contenedor-titulo-objetivos titulo-fondo-imagen texto-color-principal">
            <?php echo $titulo_objetivos;?>
        </div>

    </div>

    <!-- Mision - Vision -->
    <div class="padding-vertical padding-lateral">

        <div class="contenedor-mision-vision flex-center-center">
            <div class="texto-mision-vision">
                <?php echo $blockMision['innerBlocks'][0]['innerHTML'];?>
            </div>
            <div class="divisor-mision-vision"></div>
            <div class="texto-regular descripcion-mision-vision">
                <?php echo $blockMision['innerBlocks'][1]['innerHTML'];?>
            </div>
        </div>

        <div class="contenedor-mision-vision flex-center-center">
            <div class="texto-mision-vision">
                <?php echo $blockVision['innerBlocks'][0]['innerHTML'];?>
            </div>
            <div class="divisor-mision-vision"></div>
            <div class="texto-regular descripcion-mision-vision">
                <?php echo $blockVision['innerBlocks'][1]['innerHTML'];?>
            </div>
        </div>

    </div>

    <?php endwhile; // end of the loop. ?>

</div>

<?php get_footer(); ?>