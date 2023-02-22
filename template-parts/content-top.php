<section class="l-top">

    <div class="container">

        <div class="row">

            <?php
                $link_pattern = get_field( 'link_padrao_portal', 'option' ); // link do site destino 
                $menu_post_link = $link_pattern . get_field( 'link_menu_editorias', 'option'); // caminho site destino 
                $request_posts = wp_remote_get( $menu_post_link );// 

                if(!is_wp_error( $request_posts )) :
                    $body = wp_remote_retrieve_body( $request_posts );
                    $data = json_decode( $body );
                    $status = false;

                    if(!is_wp_error( $data )) :
                        foreach( $data as $rest_post ) :
            ?>
                            <div class="col-12">

                                <div class="row">

                                    <div class="col-lg-3 d-flex justify-content-center align-items-center my-4 my-lg-0">

                                        <a 
                                        href="<?php echo $rest_post->link_logo_topo; ?>"
                                        target="_blank"
                                        rel="noreferrer noopener">
                                            <img
                                            class="img-fluid"
                                            src="<?php echo $rest_post->logo_topo; ?>"
                                            alt="Logo Copiosa Redenção">
                                        </a>
                                    </div>

                                    <div class="col-lg-9">

                                        <ul class="d-flex flex-wrap pl-0 mb-1 mb-lg-0">

                                            <li class="l-top__item u-list-style-none py-3 px-4">
                                                <a 
                                                class="l-top__link u-font-size-14 u-font-weight-semibold text-decoration-none u-color-folk-white"
                                                href="<?php echo $rest_post->Institucional_link_menu_editorias; ?>"
                                                target="_blank"
                                                rel="noreferrer noopener">
                                                    Institucional
                                                </a>
                                            </li>

                                            <li class="l-top__item u-list-style-none py-3 px-4">
                                                <a 
                                                class="l-top__link u-font-size-14 u-font-weight-semibold text-decoration-none u-color-folk-white"
                                                href="<?php echo $rest_post->evangelizacao_link_menu_editorias; ?>"
                                                target="_blank"
                                                rel="noreferrer noopener">
                                                    Evangelização
                                                </a>
                                            </li>

                                            <li class="l-top__item u-list-style-none py-3 px-4">
                                                <a 
                                                class="l-top__link u-font-size-14 u-font-weight-semibold text-decoration-none u-color-folk-white"
                                                href="<?php echo $rest_post->recuperacao_link_menu_editorias; ?>"
                                                target="_blank"
                                                rel="noreferrer noopener">
                                                    Recuperação
                                                </a>
                                            </li>

                                            <li class="l-top__item u-list-style-none py-3 px-4">
                                                <a 
                                                class="l-top__link u-font-size-14 u-font-weight-semibold text-decoration-none u-color-folk-white"
                                                href="<?php echo $rest_post->vocacional_link_menu_editorias; ?>"
                                                target="_blank"
                                                rel="noreferrer noopener">
                                                    Vocacional
                                                </a>
                                            </li>

                                            <li class="l-top__item u-list-style-none py-3 px-4">
                                                <a 
                                                class="l-top__link u-font-size-14 u-font-weight-semibold text-decoration-none u-color-folk-white"
                                                href="<?php echo $rest_post->juventude_link_menu_editorias; ?>"
                                                target="_blank"
                                                rel="noreferrer noopener">
                                                    Juventude
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
            <?php       endforeach;
                    endif; 
                endif; 
            ?>
        </div>
    </div>
</section>