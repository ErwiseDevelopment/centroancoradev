<section class="l-about py-5">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="row justify-content-between">

                    <div class="col-md-4">
                        <div class="u-bg-folk-white p-lg-3">
                            <img
                            class="img-fluid"
                            src="<?php echo get_field('imagem_destaque')?>"
                            alt="destaque">
                        </div>
                    </div>

                    <div class="col-md-8 col-lg-6">

                        <h5 class="u-subtitle-pattern u-font-weight-regular u-color-folk-dark-blue mb-0">
                            Sobre nós
                        </h5>

                        <h2 class="c-title-highlight u-font-weight-bold u-color-folk-cyan-blue mb-4">
                            Centro Âncora
                        </h2>

                        <span class="d-block u-font-size-14 lg:u-font-size-18 u-font-weight-bold u-color-folk-gray">
                            <?php  echo get_field('campo_destaque')?>
                        </span>

                        <span class="d-block u-font-size-14 lg:u-font-size-18 u-font-weight-regular u-color-folk-gray">
                        <?php  echo get_field('descricao')?>
                        </span>

                        <div class="row">

                            <div class="col-6 col-lg-4 mt-3">
                                <a
                                class="w-100 d-block u-font-size-18 u-font-weight-bold text-center text-decoration-none u-color-folk-white u-bg-folk-medium-electric-blue hover:u-bg-folk-golden py-3"
                                href="<?php echo get_field('saiba_mais')?>">
                                    Saiba mais
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-12 mt-5 pt-5">
                        <div class="u-bg-folk-white p-lg-3">
                            <?php echo get_field('video')?>
                            <!-- <iframe class="w-100" height="500" src="https://www.youtube.com/embed/ndXQV0znxBc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>