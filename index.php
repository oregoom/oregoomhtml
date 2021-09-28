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
                    <div class="col col-xxl-3 col-xl-4 col-lg-4 d-none d-lg-block">

                        <!--//GOOGLE ADSENSE (PC) -->
                        <?php if(get_option('template_oregoom_adsense_300_250') != ''){ ?>
                            <div class="pb-3 text-center d-none d-xl-block">

                                <?php  echo get_option('template_oregoom_adsense_300_250'); ?>

                            </div>
                        <?php } ?>

                        <!--//Ads Curso de Udemy (PC y Movil) -->
                        <?php if(get_option('template_oregoom_curso_udemy') != ''){ ?>
                            <!--<div class="pb-3 text-center d-none d-lg-block">

                                <?php  echo get_option('template_oregoom_curso_udemy'); ?>

                            </div>-->
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

    } ?>


<main class="container pt-4 mb-5">

    <div class="row">

        <aside class="col col-xxl-2 col-xl-2 col-lg-3 d-none d-lg-block">

            <nav style="position: -webkit-sticky; position: sticky;  top: 116px; height: 100vh; max-height: calc(100vh - 116px);">

                <style>

                    #ul-scrollbar::-webkit-scrollbar{
                        width: 6px;
                        height: 6px;
                    }
                    #ul-scrollbar::-webkit-scrollbar-corner{
                        background-color: transparent;
                    }
                    #ul-scrollbar::-webkit-scrollbar-thumb{
                        border-radius: 3px;
                        background-color: #91979d;
                    }

                </style>

                <ul style="overflow: auto; max-height: 100%; margin: 0; padding: 0;" id="ul-scrollbar" class="pe-2">

                    <div style="position: -webkit-sticky; position: sticky; top: 0; z-index: 12;" class="py-1 bg-warning bg-gradient text-center text-dark rounded-1">

                        <span class="h5"><strong>Contenido</strong></span>

                    </div>

                    <!--<div class="list-group list-group-flush">-->
                    <div class="nav flex-column pb-4">

                        <?php

                        $ID_post = get_the_ID();

                        //Consulta que pertenece a una categoria específica
                        $wordpress_query = new WP_Query( array(
                                'post_type' => 'post',
                                'order' => 'ASC',
                                'post_status' => 'publish',
                                'posts_per_page' => -1
                            ));

                        while ($wordpress_query->have_posts()) : $wordpress_query->the_post();

                            // Título corto
                            if(get_post_meta(get_the_ID(), 'oregoom_title_corto_post', true)){

                                $oregoom_title_corto_post = get_post_meta(get_the_ID(), 'oregoom_title_corto_post', true); ?>

                                <!--<a class="list-group-item list-group-item-action <?php if($ID_post == get_the_ID()){ echo "list-group-item-secondary"; } ?>" target="_self" href="<?php the_permalink(); ?>"><?php echo $oregoom_title_corto_post; ?></a>-->
                                <a class="nav-link ps-1 <?php if($ID_post == get_the_ID()){ echo "text-primary"; } else { echo "text-dark"; } ?>" target="_self" href="<?php the_permalink(); ?>"><?php echo $oregoom_title_corto_post; ?></a><?php

                            } else { ?>

                                <!--<a class="list-group-item list-group-item-action <?php if($ID_post == get_the_ID()){ echo "list-group-item-secondary"; } ?>" target="_self" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>-->
                                <a class="nav-link ps-1 <?php if($ID_post == get_the_ID()){ echo "text-primary"; } else { echo "text-dark"; } ?>" target="_self" href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <?php

                            }

                        endwhile;

                        wp_reset_postdata(); ?>

                    </div>

                </ul>

            </nav>

        </aside>

        <article class="col-xxl-7 col-xl-8 col-lg-9 col">

            <div class="bg-white px-xl-5 px-lg-4 py-3 rounded-3">

                <h1 class="text-center h1 mb-3" style="font-weight: bold;"><?php the_title(); ?></h1>


                <!--//GOOGLE ADSENSE (Movil) -->
                <?php if(get_option('template_oregoom_adsense_300_250') != ''){ ?>
                    <div class="pb-2 text-center d-lg-none">

                        <?php  echo get_option('template_oregoom_adsense_300_250'); ?>

                    </div>
                <?php } ?>


                <?php

                if (!isset($_GET['v'])) {

                    if(get_post_meta(get_the_ID(), 'hb_idyoutube_post', true)){

                    $ID_YouTube_post = get_post_meta(get_the_ID(), 'hb_idyoutube_post', true); ?>

                    <div class="d-grid gap-2 col-md-6 mx-auto mt-4">
                        <a href="<?php echo get_the_permalink()."?v=$ID_YouTube_post"; ?>" class="btn btn-primary rounded-pill">Ver video tutorial</a>
                    </div>

                    <?php } ?>

                <?php } ?>

                <div class="pt-4 pb-4">

                    <?php the_content(); ?>

                </div>

            </div>

        </article>

        <div class="col col-xxl-3 col-xl-2 d-none d-xl-block">


            <!--//Ads Curso de Udemy (PC y Movil) -->
            <?php if(get_option('template_oregoom_curso_udemy') != ''){ ?>
                <div class="pb-3 text-center sticky-top d-none d-xxl-block"  style="position: -webkit-sticky; position: sticky; overflow: auto; top: 116px; height: 100vh; max-height: calc(100vh - 116px); z-index: 12;">

                    <?php  echo get_option('template_oregoom_curso_udemy'); ?>

                </div>
            <?php } ?>

            <!--//GOOGLE ADSENSE (PC) -->
            <?php if(get_option('template_oregoom_adsense_160_600') != ''){ ?>
                <div class="pb-3 text-end d-none d-xl-block d-xxl-none">

                    <?php  echo get_option('template_oregoom_adsense_160_600'); ?>

                </div>
            <?php } ?>


        </div>

    </div>

</main>

<div class="container mt-4 mb-5">

    <div class="row">

        <div class="col">

            <!--//GOOGLE ADSENSE (PC) -->
            <?php if(get_option('template_oregoom_adsense_300_250') != ''){ ?>
                <div class="text-center">

                    <?php  echo get_option('template_oregoom_adsense_300_250'); ?>

                </div>
            <?php } ?>

        </div>

        <div class="col d-none d-lg-block">

            <!--//GOOGLE ADSENSE (PC) -->
            <?php if(get_option('template_oregoom_adsense_300_250') != ''){ ?>
                <div class="text-center">

                    <?php  echo get_option('template_oregoom_adsense_300_250'); ?>

                </div>
            <?php } ?>

        </div>

    </div>

</div>



<div class="container mt-4 mb-5">

    <div class="row">

        <div class="col">

            <!--//GOOGLE ADSENSE (PC) -->
            <?php if(get_option('template_oregoom_adsense_auto') != ''){ ?>
                <div class="pb-3 text-center d-none d-xxl-block">

                    <?php  echo get_option('template_oregoom_adsense_auto'); ?>

                </div>
            <?php } ?>

            <!--//GOOGLE ADSENSE (PC) -->
            <?php if(get_option('template_oregoom_adsense_970_250') != ''){ ?>
                <div class="pb-3 text-center d-none d-xl-block d-xxl-none">

                    <?php  echo get_option('template_oregoom_adsense_970_250'); ?>

                </div>
            <?php } ?>

            <!--//GOOGLE ADSENSE (PC) -->
            <?php if(get_option('template_oregoom_adsense_728_90') != ''){ ?>
                <div class="pb-3 text-center d-none d-lg-block d-xl-none">

                    <?php  echo get_option('template_oregoom_adsense_728_90'); ?>

                </div>
            <?php } ?>

        </div>

    </div>

</div>



<?php

    endwhile;

}

/*
 * ===============================
 * Pie de página
 */
get_footer();
