

<?php

/*
 Template Name: Home
 */

get_header(); ?>





<?php if (have_posts()): while (have_posts()) : the_post(); ?>



    <div class="jumbotron main main-banner">

        <img src="<?php bloginfo('template_directory'); ?>/images/bmws-by-me-william-shakespeare.png" title="By me William Shakespeare" class="title-img">

        <h1 class="hidden">By Me William Shakespeare</h1>


    </div>


    <div class="container-fluid ">
        <div class="one-third grey-bg float-right equalbox">

            <div class="text-center base-bg equalbox">
                <div class="vertical-half text-left padding-extra-big base grey-bg">

                    <div class="positioner padding-top-extra">

                        <?php if (function_exists('dynamic_sidebar') || dynamic_sidebar('Exhibition Date')) : ?>
                            <h2><?php dynamic_sidebar( 'Exhibition Date' ); ?></h2>

                        <?php endif; ?>

                    <?php if (function_exists('dynamic_sidebar') || dynamic_sidebar('Exhibition Address')) : ?>
                        <?php dynamic_sidebar( 'Exhibition Short Address' ); ?>

                    <?php endif; ?>
                    </div>

                </div>
                <div class="vertical-half padding-extra-big  text-center green-bg black">
                    <div class="positioner padding-top-extra">

                            <?php if (function_exists('dynamic_sidebar') || dynamic_sidebar('Ticket URL')) : ?>
                                <?php dynamic_sidebar( 'Ticket URL' ); ?>
                                <div class="clearfix-padding"></div>
                            <?php endif; ?>


                    </div>
                </div>
            </div>

        </div>
        <div class="two-thirds green-left-border padding padding-left-extra float-left equalbox">
            <h2><?php the_title(); ?></h2>

            <?php the_content(); ?>
            <?php edit_post_link('Edit this page','<span class="edit-button">','</span>'); ?>

        </div>


    </div>

    <!-- /.container -->


    <div class="jumbotron will-banner">
        <div class="info-box">


            <?php if (function_exists('dynamic_sidebar') || dynamic_sidebar('Will Introduction')) : ?>
                <?php dynamic_sidebar( 'Will Introduction' ); ?>

            <?php endif; ?>
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
