<?php
/*
 * Template name: Post Divi
 * Template Post Type: page
 */

get_header();

if(have_posts()){
    
    while(have_posts()) : the_post(); ?>


<main class="container pt-5">

    <div class="px-xxl-5">

        <div class="text-center mb-2">

            <img class="rounded-circle" src="https://oregoom.com/wp-content/uploads/2021/03/divi-theme-logo.jpg" width="134" height="134">

        </div>
        

        <h1 class="text-center mx-xl-5 px-xl-5 mb-3" style="font-family: Tahoma, Verdana, Segoe, sans-serif; font-weight: bold; font-size: 60px;">

            <?php the_title(); ?>

        </h1>

        <p class="text-center"><strong>¿Qué proyecto tienes en mente?</strong> Aprovecha toda la versatilidad del <strong>Tema Divi</strong> para WordPress y hazlo realidad.</p>

        <div class="text-center mb-2">

            <img class="" src="https://oregoom.com/wp-content/uploads/2021/03/flecha-abajo.png" width="224">

        </div>

        <div class="text-center">

            <a class="btn btn-lg rounded-pill fs-4 py-2 px-5" href="https://bit.ly/2UcL7ge" role="button" rel="nofollow noopener" style="background-color: #f92c8b; color: #ffffff;">
                <strong>Descargar Tema Divi</strong>
            </a>

        </div>
        <div class="text-center pt-1 mb-5">Con 20% de Descuento</div>

        <div class="text-center">

            <img class="" src="https://oregoom.com/wp-content/uploads/2021/10/oregoom-cuenta-r.gif" width="280">

        </div>

        <div class="text-center py-5 px-xxl-5 mx-xxl-5">

            <div class="px-xxl-5 mx-xxl-5">

                <span style="color: #9c9c9c; font-size: 14px;">* Algunos enlaces en este artículo son enlaces de afiliado. Eso significa que, si haces clic en el enlace y compras una de las licencias de Elegant Themes, tú te llevas un descuento de 20% y yo recibiré una comisión de afiliado.</span>

            </div>
            
        </div>

        <div class="border-top pt-4 mb-5">

            <div class="row">

                <div class="col-xxl-8 col-xl-8 col-lg-8">

                    <?php the_content(); ?>

                    <!-- COMPARTIR en Redes Sociales -->
                    <div class="d-none mt-5 pt-4 pb-3 d-lg-block mb-5">
                        <div class="pb-2 pt-3 d-flex align-items-center border-top border-bottom">
                            
                            <span class="me-2 h5"><strong><small>Comparte este artículo:</small></strong></span>

                            <span class="me-1">
                                <amp-social-share class="rounded bg-primary" type="facebook" data-param-app_id="216472885737679" width="36" height="36"></amp-social-share>
                            </span>

                            <span class="me-1">
                                <amp-social-share class="rounded bg-primary" type="twitter" width="36" height="36"></amp-social-share>
                            </span>

                            <span class="me-1">
                                <amp-social-share class="rounded bg-primary" type="whatsapp" width="36" height="36"></amp-social-share>
                            </span>

                            <span class="me-1">
                                <amp-social-share class="rounded bg-primary"  aria-label="Share on LinkedIn"  type="linkedin"  width="36"  height="36"></amp-social-share>
                            </span>

                            <span class="me-1">
                                <amp-social-share class="rounded bg-primary"  aria-label="Share by email" type="email"  width="36" height="36"></amp-social-share>
                            </span>

                        </div>
                    </div>

                </div>

                <div class="col-xxl-4 col-xl-4 col-lg-4">

                    <div class="pt-3 mb-5 text-center sticky-top">
                        <a href="https://bit.ly/2UcL7ge" target="_self" rel="nofollow noopener">
                            <img class="rounded-3 shadow" src="https://oregoom.com/wp-content/uploads/2021/10/descargar-tema-divi-para-wordpress-300x600-1.jpg">
                        </a>
                    </div>

                </div>

            </div>

        </div>


        <!--NOTA DE AFILIADO-->
        <div class="border border-danger p-4">

            <p class="h6 text-secondary"><small><span class="text-danger">(*)</span> Quiero que sepas también que en este artículo hay enlaces de afiliado. Eso significa que, si compras alguna de las licencias de <a class="text-decoration-none" href="https://bit.ly/33ak2PS" rel="nofollow noopener">Elegant Themes</a>, <strong>tú te llevas un descuento de 20%</strong> y yo una comisión.</small></p>
            <p class="h6 text-secondary"><small>No estás obligado a comprar a través de mis enlaces y si lo haces a través de mis enlaces, me estas ayudando de algún modo a mantener este blog, ya que esos enlaces de afiliados representan una pequeña parte de mis ingresos. ¡Muchas gracias!</small></p>
        
        </div>
        


    </div>

    
</main>

<div class="pt-5 pb-5 bg-light">



    <div class="container mt-4 mb-4">

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

</div>

<?php
    
    endwhile;  
    
}




/*
 * ===============================
 * Pie de página 
 */
get_footer();