<?php
/*
Template Name: Archives
*/
get_header(); ?>
-- Archive.php --
<div id="container">
    <div id="content" role="main">

        <?php the_post(); ?>
        <h1 class="entry-title"><?php the_title(); ?></h1>



    </div><!-- #content -->
</div><!-- #container -->

<!-- <?php get_sidebar(); ?> -->
<?php get_footer(); ?>
