<!DOCTYPE html>
<html amp <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">

    <title><?php wp_title(); ?></title>

    <style amp-custom>

        .lightbox {
            /*background: rgba(0,0,0,.8);*/
            background: rgba(0,0,0,.9);
            width: 100%;
            height: 100%;
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        ul{
/*            font-family: 'Roboto', sans-serif;
            font-size: 18px;
            font-weight: 300;
            line-height: 1.7em;*/
        }
        p{
            font-family: 'Roboto', sans-serif;
            font-size: 18px;
            font-weight: 300;
            line-height: 1.7em;
        }
        p strong{
            font-weight: bold !important;
        }
        h2{
            line-height: 1.2em; font-family: Raleway, sans-serif; font-weight: 700!important; font-size: 30px!important; padding-bottom: 5px; padding-top: 10px;
        }

        #btn-sidebarclose{
            background-color: #000;
            border: none;
            cursor: pointer;
            padding: 3px 10px 3px 10px;
            border-radius: 100px;
            color: #fff;
            position: absolute;
            top: 0; margin-top: 10px;
            right: 0;
            margin-right: 10px;
        }
        .hb-parrafo
        {
            font-size: 50px;
        }

        #img-bg-page-home{
            /*padding-top: 220px;*/
            /*height: 394px;*/
            background:linear-gradient(0deg, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.5)),  url(<?php echo get_the_post_thumbnail_url(); ?>);
            background-repeat: no-repeat;
            background-size: 100%, cover;
        }

        #img-bg-page{
            /*padding-top: 220px;*/
            height: 394px;
            background:linear-gradient(0deg, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.5)),  url(<?php echo get_the_post_thumbnail_url(); ?>);
            background-repeat: no-repeat;
            background-size: 100%, cover;
        }

        #img-bg-search{
            height: 270px;
            background:linear-gradient(0deg, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.5)),  url(<?php echo get_the_post_thumbnail_url(); ?>);
            background-repeat: no-repeat;
            background-size: 100%, cover;
        }
        .breadcrumb-item::before{
            /*color: #ffffff !important;*/
        }




        /*
        Solo en Celulares
        */
        @media (max-width: 575.98px) {
            h1{
                font-size: 30px!important;
            }
            h2{
                font-size: 24px!important;
            }
            h3{
                font-size: 18px!important;
            }


        }


        @media (max-width: 767.98px) {

            #oregoom-container{
/*                box-shadow: 0 0 0 !important;
                border-radius: .0rem !important;*/
            }

        }


    </style>

    <?php wp_head(); ?>

    <?php

    /*
     * ==================
     * Google Ananalytics
     */
    if(is_user_logged_in() != true && get_option('template_oregoom_google_analytics') != ""){ ?>
        <!--<script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>-->
        <amp-analytics type="gtag" data-credentials="include">
            <script type="application/json">
                {
                    "vars" : {
                    "gtag_id": "<?php echo get_option('template_oregoom_google_analytics'); ?>",
                    "config" : {
                        "<?php echo get_option('template_oregoom_google_analytics'); ?>": { "groups": "default" }
                        }
                    }
                }
            </script>
        </amp-analytics>
    <?php } ?>


</head>
<body <?php body_class(); ?>>


    <!--//GOOGLE ADSENSE Google AMP (Auto) -->
    <?php if(get_option('template_oregoom_adsense_google_amp_auto') != ''){ ?>
            <?php  echo get_option('template_oregoom_adsense_google_amp_auto'); ?>
    <?php } ?>


    <header class="sticky-lg-top">

    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container"><?php

                if ( has_custom_logo() ) {
                    the_custom_logo();
                } else {
                    echo get_bloginfo();
                } ?>

            <button class="navbar-toggler" type="button" aria-label="open sidebar" on="tap:sidebar-top.open" tabindex="0">
                <span class="navbar-toggler-icon"></span>
            </button>


            <!--Menú movil de contenido-->
            <div class="navbar-toggler rounded-circle p-3 mb-5 me-4 bg-white border-0" style="position: fixed; bottom: 0px; right: 0px; z-index: 1000; box-shadow: rgba(0, 0, 0, 0.50) 0px 5px 10px;" role="button" aria-label="open sidebar" on="tap:sidebar-two.open" tabindex="0">
                <span class="navbar-toggler-icon"></span>
            </div>



            <div class="collapse navbar-collapse ms-3" id="navbarSupportedContent">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <?php oregoom_navegation_menus(); ?>

                </ul>

                <div class="d-flex">
                    <a class="btn btn-outline-primary me-2 d-none d-xl-block" href="https://oregoom.com/precios/" target="_self" role="button">Precios y planes</a>
                    <a class="btn btn btn-primary" href="https://oregoom.com/cursos/" target="_blank" role="button">Cursos</a>
                </div>

            </div>


            <amp-sidebar id="sidebar-top" class="bg-white" layout="nodisplay" side="right">

                <ul class="list-group border-bottom rounded-0">

                    <li class="border-0 list-group-item d-flex justify-content-between align-items-center"><?php

                        if ( has_custom_logo() ) {
                            the_custom_logo();
                        } else {
                            echo get_bloginfo();
                        } ?>

                        <!--Botón de Close menú-->
                        <span id="btn-sidebarclose" on="tap:sidebar-top.close" >X</span>

                    </li>

                </ul>


                <div class="navbar-collapse pt-3 p-3">

                    <ul class="navbar-nav">

                        <?php oregoom_navegation_menus(); ?>

                        <li class="nav-item mb-2 mt-2">
                            <a class="btn btn-outline-primary" href="https://oregoom.com/precios/" target="_self" role="button">Precios y planes</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn btn-primary" href="https://oregoom.com/cursos/" target="_blank" role="button">Cursos</a>
                        </li>

                    </ul>

                </div>

            </amp-sidebar>

            <amp-sidebar id="sidebar-two" class="bg-white" layout="nodisplay" side="left">

                <ul class="list-group border-bottom rounded-0">

                    <li class="border-0 list-group-item d-flex justify-content-between align-items-center">

                        <span class="h5"><strong>Contenido</strong></span>

                        <!--Botón de Close menú-->
                        <span id="btn-sidebarclose" on="tap:sidebar-two.close" >X</span>

                    </li>

                </ul>


                <div class="navbar-collapse pt-3 p-3">

                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <?php

                            $ID_post = get_the_ID();

                            //Consulta que pertenece a una categoria específica
                            $wordpress_query = new WP_Query( array(
                                    'post_type' => 'post',
                                    'orderby' => 'DESC',
                                    'post_status' => 'publish',
                                    'posts_per_page' => -1
                                ));

                            while ($wordpress_query->have_posts()) : $wordpress_query->the_post();

                                // Título corto
                                if(get_post_meta(get_the_ID(), 'oregoom_title_corto_post', true)){

                                    $oregoom_title_corto_post = get_post_meta(get_the_ID(), 'oregoom_title_corto_post', true); ?>

                                    <a class="nav-link text-dark <?php if($ID_post == get_the_ID()){ echo "list-group-item-primary"; } ?>" target="_self" href="<?php the_permalink(); ?>"><?php echo $oregoom_title_corto_post; ?></a> <?php

                                } else { ?>

                                    <a class="nav-link text-dark <?php if($ID_post == get_the_ID()){ echo "list-group-item-primary"; } ?>" target="_self" href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <?php

                                }

                            endwhile;

                            wp_reset_postdata(); ?>
                        </li>

                    </ul>

                </div>

            </amp-sidebar>


        </div>
    </nav>

</header>

    <!--//GOOGLE ADSENSE (PC) -->
    <?php if(get_option('template_oregoom_adsense_728_90') != ''){ ?>
        <div class="pt-3 pb-3 text-center d-none d-lg-block">

            <?php  echo get_option('template_oregoom_adsense_728_90'); ?>

        </div>
    <?php } ?>





<!--        <header class="sticky-lg-top">
            <nav class="navbar navbar-expand-lg navbar-light bg-dark shadow-sm">
                <div class="container pt-1 pb-1">
                    <div class="navbar-nav me-auto text-light"><?php

                        if ( has_custom_logo() ) {
                            the_custom_logo();
                        } else {
                            echo get_bloginfo();
                        } ?>

                    </div>

                    Menú movil
                    <div class="navbar-toggler rounded-circle p-3 mb-5 me-4 bg-white border-0" style="position: fixed; bottom: 0px; right: 0px; z-index: 1000; box-shadow: rgba(0, 0, 0, 0.50) 0px 5px 10px;" role="button" aria-label="open sidebar" on="tap:sidebar.open" tabindex="0">
                        <span class="navbar-toggler-icon"></span>
                    </div>


                    <div class="me-0 navbar-nav my my-lg-0 navbar-nav-scroll">

                        <div class="collapse navbar-collapse">

                            <ul class="navbar-nav my my-lg-0 navbar-nav-scroll">

                                <?php oregoom_navegation_menus(); ?>

                            </ul>
                        </div>

                    </div>

                    <amp-sidebar id="sidebar" class="bg-white" layout="nodisplay" side="right">

                        <ul class="list-group border-bottom rounded-0">

                            <li class="border-0 list-group-item d-flex justify-content-between align-items-center"><?php

                                if ( has_custom_logo() ) {
                                    the_custom_logo();
                                } else {
                                    echo get_bloginfo();
                                } ?>

                                Botón de Close menú
                                <span id="btn-sidebarclose" on="tap:sidebar.close" >X</span>

                            </li>

                        </ul>


                        <div class="navbar-collapse pt-3 p-3">

                            <ul class="navbar-nav">

                                <?php oregoom_navegation_menus(); ?>


                            </ul>

                        </div>

                    </amp-sidebar>

                </div>
            </nav>






            Buscar en pantalla completa Movil
            <amp-lightbox id="my-search" layout="nodisplay">
                <div class="lightbox shadow pb-2 pt-2" tabindex="0" style="z-index: 1001;">

                     Vídeo de YouTube
                    <div class="container">

                        <div class="overflow-hidden">
                            <span role="button" class="text-light h2 float-right text-dark" on="tap:my-search.close">&times;</span>
                        </div>

                        <div class="text-center mb-2"><?php
                            if ( has_custom_logo() ) {
                                the_custom_logo();
                            } else {
                                echo get_bloginfo();
                            } ?>
                        </div>

                        <?php get_search_form(); ?>

                    </div>

                </div>
            </amp-lightbox>

        </header>-->
