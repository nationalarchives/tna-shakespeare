

<?php

/*
 Template Name: Posts
 */

get_header(); ?>



<?php if (have_posts()): while (have_posts()) : the_post(); ?>



    <div class="jumbotron main will-banner">

        <h1 class="hidden"><?php the_title(); ?></h1>


    </div>


    <div class="container-fluid ">

        <div class="green-left-border padding-left-extra">
            <div class="breadcrumb"><?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?></div>

            <div class="clearfix"></div>


            <h2><?php the_title(); ?></h2>
            <?php edit_post_link(); ?>
            <?php the_content(); ?>




            <div class="clearfix"></div>
        </div>






    </div>






<?php endwhile; ?>

<?php else: ?>
    <div class="container-fluid ">
        <div class="half green-left-border padding padding-left-extra float-left">
            <h2>Sorry</h2>

            <p>We couldn't find that page. Return to the <a href="/">homepage</a>.</p>
        </div>
    </div>

<?php endif; ?>




<?php get_footer(); ?>
