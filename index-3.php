<?php

get_header();

if(have_posts()){

    while(have_posts()) : the_post();


        if (isset($_GET['v'])) {

            $ID_YouTube = $_GET['v']; ?>

            <div class="bg-dark d-none d-sm-block">

                <div class="container pt-3 pb-4">
                    <div class="row">

                        <div class="col">
                            <amp-youtube
                            data-videoid="<?php echo $ID_YouTube; ?>"
                            layout="responsive"
                            width="480"
                            height="270"
                            ></amp-youtube>
                        </div>
                        <div class="col col-3 d-none d-lg-block">

                            <!--//GOOGLE ADSENSE (PC) -->
                            <?php if(get_option('template_oregoom_adsense_300_250') != ''){ ?>
                                <div class="pb-3 text-center d-none d-xxl-block">

                                    <?php  echo get_option('template_oregoom_adsense_300_250'); ?>

                                </div>
                            <?php } ?>

                            <?php

                            $prev_post = get_previous_post();

                            if (!empty( $prev_post )):

                            if(get_post_meta($prev_post->ID , 'hb_idyoutube_post', true)){

                                $ID_YouTube_post = get_post_meta( $prev_post->ID , 'hb_idyoutube_post', true); ?>

                                <div class="d-grid gap-2 mx-auto mt-4">
                                    <a href="<?php echo get_permalink( $prev_post->ID )."?v=$ID_YouTube_post"; ?>" class="btn btn-primary" type="button">Siguiente video</a>
                                </div>

                            <?php } ?>

                            <?php endif; ?>

                        </div>

                    </div>
                </div>

            </div>

            <div class="bg-dark sticky-top d-sm-none" style="z-index: 1;">
                <div class="container-lg container-fluid pl-lg-5 pr-lg-5 pt-lg-3 pb-lg-3 p-0">
                    <amp-youtube
                    data-videoid="<?php echo $ID_YouTube; ?>"
                    layout="responsive"
                    width="480"
                    height="270"
                    ></amp-youtube>
                </div>
            </div><?php

        } else {

            /*GOOGLE ADSENSE (PC) en Header */
            if(get_option('template_oregoom_adsense_728_90') != ''){ ?>

                <div class="pt-3 pb-1 text-center d-none d-lg-block bg-light">

                    <?php  echo get_option('template_oregoom_adsense_728_90'); ?>

                </div><?php 
            
            } 

        } ?>



    <main class="container pt-4 mb-4">

        <div class="row">

            <article class="col-xxl-9 col-xl-10">

                <h1 class="text-center h1 mb-4" style="font-weight: bold;"><?php the_title(); ?></h1>


                <!--//GOOGLE ADSENSE (Movil) -->
                <?php if(get_option('template_oregoom_adsense_300_250') != ''){ ?>
                    <div class="pb-3 text-center d-lg-none">

                        <?php  echo get_option('template_oregoom_adsense_300_250'); ?>

                    </div>
                <?php } ?>



                <?php

                if (!isset($_GET['v'])) {

                    if(get_post_meta(get_the_ID(), 'hb_idyoutube_post', true)){

                        $ID_YouTube_post = get_post_meta(get_the_ID(), 'hb_idyoutube_post', true); ?>

                        <div class="d-grid gap-2 col-md-6 mx-auto mb-3">

                            <a href="<?php echo get_the_permalink()."?v=$ID_YouTube_post"; ?>" class="btn btn-primary rounded-pill">Ver video tutorial</a>

                        </div><?php 
                
                    } 

                } ?>



                <div id="container-article" class="pt-lg-5 pb-4 bg-width rounded-3 px-xxl-5 mx-xxl-5 px-xl-5 mx-xl-4 px-lg-5 mx-lg-4">

                    <?php the_content(); ?>

                </div>



            </article>


            <aside class="col-xxl-3 col-xl-2 d-none d-lg-block">


                <!--//Ads Curso de Udemy (PC y Movil) -->
                <?php if(get_option('template_oregoom_curso_udemy') != ''){ ?>
                    <div class="pb-3 text-center sticky-top d-none d-xxl-block"  style="position: -webkit-sticky; position: sticky; overflow: auto; top: 116px; height: 100vh; max-height: calc(100vh - 116px); z-index: 12;">

                        <?php  echo get_option('template_oregoom_curso_udemy'); ?>

                    </div>
                <?php } ?>

                <!--//GOOGLE ADSENSE (PC) -->
                <?php if(get_option('template_oregoom_adsense_160_600') != ''){ ?>
                    <div class="pb-3 text-center d-none d-xl-block d-xxl-none">

                        <?php  echo get_option('template_oregoom_adsense_160_600'); ?>

                    </div>
                <?php } ?>


            </aside>

        </div>

    </main>



    <div class="container mb-5 pb-lg-5">

        <div class="row">


            <div class="col d-none d-lg-block">

                <!--//GOOGLE ADSENSE (PC) -->
                <?php if(get_option('template_oregoom_adsense_300_250') != ''){ ?>
                    <div class="pb-3 text-center">

                        <?php  echo get_option('template_oregoom_adsense_300_250'); ?>

                    </div>
                <?php } ?>

            </div>

        </div>

        <div class="row">


            <div class="col d-none d-lg-block"><?php

                /*GOOGLE ADSENSE (PC) en Header */
                if(get_option('template_oregoom_adsense_728_90') != ''){ ?>

                    <div class="pt-3 pb-3 text-center d-none d-lg-block">

                        <?php  echo get_option('template_oregoom_adsense_728_90'); ?>

                    </div><?php 
                
                }?>

            </div>

        </div>

    </div> <?php

    endwhile;

}

/*
 * ===============================
 * Pie de p??gina
 */
get_footer();
