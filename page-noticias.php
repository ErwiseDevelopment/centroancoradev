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
     							  $link_pattern = get_field( 'link_padrao_portal', 'option' );
                                   $post_link = $link_pattern . get_field( 'link_caminho', 'option' ) . get_field( 'link_noticia', 'option' );
                                   $request_posts = wp_remote_get( $post_link );
                                 
           
                                   if(!is_wp_error( $request_posts )) :
                                       $body = wp_remote_retrieve_body( $request_posts );
                                       $data = json_decode( $body );
           
                                       if(!is_wp_error( $data )) :
                                           foreach( $data as $rest_post ) :
                            ?>
                                        <div class="col-lg-6 js-posts-new my-3">

                                            <div class="card rounded-0">
                                                <a class="text-decoration-none " href="<?php echo get_home_url( null, 'noticia/?id=' . $rest_post->id )  ?>">
                                                <div class="card-img w-100">
                                                    <img
                                                        class="l-post-highlight__thumbnail img-fluid w-100 u-object-fit-cover"
                                                        src="<?php echo $rest_post->featured_image_src; ?>"
                                                          alt="<?php echo $rest_post->title->rendered; ?>">
                                                </div>
                                                    <div class="card-body px-4">

                                                        <p class="u-font-size-12 xxl:u-font-size-14 u-font-weight-semibold u-color-folk-medium-electric-blue mb-0">
                                                            <?php $date_post = $data->date;
                                                                list($data_year, $data_month, $data_day) = explode("-", $date_post);
                                                                list($data_day1) = explode("T", $data_day);
                                                                echo $data_day1 . '/' . $data_month . '/' . $data_year; 
                                                            ?>
                                                        </p>

                                                        <p class="u-font-size-12 xxl:u-font-size-14 u-font-weight-bold u-color-folk-medium-electric-blue">
                                                        <?php echo $rest_post->post_excerpt; ?>
                                                        </p>

                                                        <h4 class="u-font-size-16 xxl:u-font-size-20 u-font-weight-bold u-color-folk-bold-electric-blue mb-4">
                                                        <?php echo $rest_post->title->rendered; ?>
                                                        </h4>

                                                        <!-- <span class="d-block u-font-size-14 xxl:u-font-size-16 u-font-weight-regular u-color-folk-aluminium">
                                                            <php echo $rest_post->content->rendered;  ?>
                                                        </span> -->

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
                                        <?php endforeach;
                                                        endif;
                                                            endif;?>

                            <!-- end loop -->
                        </div>
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
</div><!-- #main -->
</section><!-- #primary -->

<?php endwhile; ?>
<?php

get_footer();
