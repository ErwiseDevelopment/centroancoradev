<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

<section id="primary" class="content-area">
<div id="main" class="site-main" role="main">

<?php while ( have_posts() ) : the_post(); ?>

<!-- banner -->
<section class="u-bg-folk-extrabold-electric-blue py-5">

    <div class="container">

        <div class="row">

            <div class="col-12 my-5">

                <h1 class="l-banner-full__title u-font-weight-bold text-center u-color-folk-white mb-4">
                    Últimas Notícias
                </h1>

                <div class="rounded u-bg-folk-golden mx-auto" style="width:320px;height:9px"></div>
            </div>
        </div>
    </div>
</section>
<!-- end banner -->
<section>

    <div class="container">

        <div class="row">

            <div class="col-12 mt-md-5 pt-md-5">

                <div class="row">

                    <div class="col-md-12 order-2 order-md-1">

                        <div class="row">

                            <!-- loop -->
                            <?php 
     
                            ?>
                                        <div class="col-lg-6 js-posts-new my-3">

                                            <div class="card rounded-0">
                                                <a class="text-decoration-none " href="<?php the_permalink() ?>">
                                                    <div class="card-img">
                                                        <!-- <img
                                                        class="l-posts__thumbnail img-fluid w-100 u-object-fit-cover"
                                                        src="<php echo get_home_url( null, '/wp-content/uploads/2022/06/posts-image.png' ) ?>"
                                                        alt="Post image"> -->

                                                        <?php
                                                            $alt_title = get_the_title();

                                                            the_post_thumbnail( 'post-thumbnail',
                                                                array(
                                                                    'class' => 'l-posts__thumbnail img-fluid w-100 u-object-fit-cover',
                                                                    'alt'   => $alt_title
                                                                ));
                                                        ?>
                                                    </div>

                                                    <div class="card-body px-4">

                                                        <p class="u-font-size-12 xxl:u-font-size-14 u-font-weight-semibold u-color-folk-medium-electric-blue mb-0">
                                                            <!-- 10 de dezembro de 2021 -->
                                                            <?php echo get_date_format( get_the_date( 'd/m/Y', get_the_ID() ) ) ?>
                                                        </p>

                                                        <p class="u-font-size-12 xxl:u-font-size-14 u-font-weight-bold u-color-folk-medium-electric-blue">
                                                            <!-- Institucional -->
                                                            <?php
                                                                foreach( $post_categories as $post_category ) 
                                                                    echo $post_category . ' ';
                                                            ?>
                                                        </p>

                                                        <h4 class="u-font-size-16 xxl:u-font-size-20 u-font-weight-bold u-color-folk-bold-electric-blue mb-4">
                                                            <?php the_title() ?>
                                                        </h4>

                                                        <span class="d-block u-font-size-14 xxl:u-font-size-16 u-font-weight-regular u-color-folk-aluminium">
                                                            <?php the_excerpt(); ?>
                                                        </span>

                                                        <div class="row">

                                                            <div class="col-5 mt-3">

                                                                <span
                                                                class="w-100 u-box-shadow-pattern position-absolute u-font-size-12 u-font-weight-bold u-font-family-nunito text-center u-color-folk-white u-bg-folk-golden hover:u-bg-folk-squid-ink js-read-more py-2">
                                                                    Ler mais
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
											    </a>
                                            </div>
                                        </div>

                            <!-- end loop -->
                        </div>
                    </div>

                    <div class="col-md-4 col-lg-3 order-1 order-md-2 mt-3">

                        <div>
                            <form class="js-search-form" method="GET" action="/">

                                <div class="row">

                                    <div class="col-12">
                                        <input
                                        class="w-100 border-0 d-block u-font-size-14 u-font-weight-semibold u-color-folk-bold-eletric-blue u-bg-folk-light-gray py-4 pl-3 pr-5"
                                        type="search"
                                        name="s"
                                        placeholder="Procurar">
                                        <span class="l-page-news__icon js-search-submit"></span>
                                    </div>
                                </div>
                            </form>                            
                        </div>
                        <div class="row">

                            <div class="col-12 mt-5">
                                <a href="<?php  echo get_field('link_banner', 'option')?>">
                                    <img
                                    class="img-fluid"
                                    src="<?php echo get_field('banner_pagina_noticias', 'option') ?>"
                                    alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php endwhile; ?>

</div><!-- #main -->
</section><!-- #primary -->

<?php

get_footer();
