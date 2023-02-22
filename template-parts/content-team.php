<section class="l-team py-5">

    <div class="container">

        <div class="row">

            <div class="col-12 mb-5">

                <h2 class="c-title-pattern u-font-weight-semibold text-center u-color-folk-dark-blue mb-0 pb-2">
                    <span class="u-font-size-15 xxl:u-font-size-22 u-font-weight-regular u-font-family-lato u-color-dark-blue">Conheça nossa</span> <br>
                    Equipe
                </h2>
            </div>

            <div class="col-12">

                <!-- swiper -->
                <div class="swiper-container js-swiper-team">

                    <div class="swiper-wrapper">

                        <!-- slide -->
                        <?php 
                            $args = array(
                                'posts_per_page' => -1,
                                'post_type'      => 'Equipe',
                                'order'          => 'DESC',
                            );

                            $communities = new WP_Query( $args );

                            if( $communities->have_posts() ) :  
                                while( $communities->have_posts() ) : $communities->the_post();
                        ?>
                                    <div class="swiper-slide flex-column align-items-start">
                                        <?php
                                            $alt_title = get_the_title();

                                            the_post_thumbnail( 'post-thumbnail',
                                                array(
                                                    'class' => 'img-fluid w-100',
                                                    'alt'   => $alt_title
                                            ));
                                        ?>    
                                
                                        <div class="mt-3">
                                            <h6 class="u-font-size-22 u-font-weight-bold u-color-folk-dark-grayish-navy mb-0">
                                                <?php the_title() ?>
                                            </h6>

                                            <p class="u-font-size-15 xxl:u-font-size-18 u-font-weight-regular u-color-folk-aluminium">
                                                <?php
                                                    $terms = get_the_terms(get_the_ID(), 'funcao' );
                                                    echo $terms[0]->name;
                                                ?>
                                            </p>
                                        </div>
                                    </div>
                        <?php    
                                endwhile;
                            endif;
                        
                            wp_reset_query();
                        ?>
                        <!-- end slide -->
                    </div>
                </div>
                        
                <!-- arrows -->
                <div class="swiper-button-prev swiper-button-prev-team d-none d-lg-flex js-swiper-button-prev-team"></div>
                <div class="swiper-button-next swiper-button-next-team d-none d-lg-flex js-swiper-button-next-team"></div>
                <!-- end swiper -->
            </div>
        </div>
    </div>
</section>