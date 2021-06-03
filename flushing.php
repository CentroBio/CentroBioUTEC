<?php
/*Template Name: Flushing*/
get_header(); ?>
<div class="main-container seccion-centrada">
    <h1>FLUSHING VARIABLES</h1>
</div>
    <div style="text-align:center">
    <?php if ( get_option('permalink_structure') ) { echo 'permalinks enabled'; } ?>
    <?php flush_rewrite_rules(); ?>
    </div>
<?php get_footer(); ?>