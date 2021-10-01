<?php
/*
 * Template name: Página de Blog
 * Template Post Type: post
 */

get_header();

if(have_posts()){
    
    while(have_posts()) : the_post(); ?>


<main class="container pt-3">

    <!--//GOOGLE ADSENSE 970x250 (PC) -->
    <?php if(get_option('template_oregoom_adsense_970_250')){ ?>    

        <div class="pb-4 pt-1 text-center d-none d-xl-block">

            <?php  echo get_option('template_oregoom_adsense_970_250'); ?>

        </div>     

    <?php } ?>

    <!--//GOOGLE ADSENSE 728x92 (PC) -->
    <?php if(get_option('template_oregoom_adsense_728_90')){ ?>    
        
        <div class="pb-4 pt-1 text-center d-none d-lg-block d-xl-none">

            <?php  echo get_option('template_oregoom_adsense_728_90'); ?>

        </div>     

    <?php } ?>


    <h1 class="text-center mx-xl-5 px-xl-5" style="font-family: 'Poppins', Sans-serif; font-weight: bold;">

    <?php the_title(); ?>

    </h1>

    <!-- COMPARTIR en Redes Sociales -->
    <div class="d-none mt-2 d-lg-block mb-4">
        <div class="pb-1 align-items-center text-center">    

            <span class="mr-2">
                <amp-social-share class="rounded" type="facebook" data-param-app_id="216472885737679" width="36" height="36"></amp-social-share>
            </span>

            <span class="mr-2">
                <amp-social-share class="rounded" type="twitter" width="36" height="36"></amp-social-share>
            </span>

            <span class="mr-2">
                <amp-social-share class="rounded" type="whatsapp" width="36" height="36"></amp-social-share>
            </span>

            <span class="mr-2">
                <amp-social-share class="rounded"  aria-label="Share on LinkedIn"  type="linkedin"  width="36"  height="36"></amp-social-share>
            </span>

            <span class="mr-2">
                <amp-social-share class="rounded"  aria-label="Share by email" type="email"  width="36" height="36"></amp-social-share>
            </span>

        </div>
    </div>


    <div class="row">

        <div class="col-xxl-9 col-xl-8 col-lg-8">

            <div class="mx-xxl-5">

                <?php 
                    
                //IMG destacada de POST
                if( has_post_thumbnail() ) {

                    the_post_thumbnail('full', array( 'class' => 'img-fluid mb-4' )); 

                } ?>


                <div class="px-xxl-5 px-xl-4 pt-4 pb-4">

                    <?php the_content(); ?>  
                    
                </div> 

            </div>

        </div>

        <aside class="col-xxl-3 col-xl-4 col-lg-4">

            <!--//Ads Curso de Udemy (PC y Movil) -->
            <?php if(get_option('template_oregoom_curso') != ''){ ?>
                <div class="pb-3 text-center sticky-top d-none d-lg-block">

                    <?php  echo get_option('template_oregoom_curso'); ?>

                </div>
            <?php } ?>

        </aside>

    </div> 
    
</main>

<div class="container mt-5 mb-5">
    
    <div class="row">
        
        <div class="col">
            
            <!--//GOOGLE ADSENSE (PC) -->
            <?php if(get_option('template_oregoom_adsense_300_250') != ''){ ?>                
                <div class="pb-3 text-center">

                    <?php  echo get_option('template_oregoom_adsense_300_250'); ?>

                </div>                
            <?php } ?>
            
        </div>
        
        <div class="col d-none d-lg-block">
            
            <!--//GOOGLE ADSENSE (PC) -->
            <?php if(get_option('template_oregoom_adsense_300_250') != ''){ ?>                
                <div class="pb-3 text-center">

                    <?php  echo get_option('template_oregoom_adsense_300_250'); ?>

                </div>                
            <?php } ?>
            
        </div>
        
        <div class="col d-none d-xl-block">
            
            <!--//GOOGLE ADSENSE (PC) -->
            <?php if(get_option('template_oregoom_adsense_300_250') != ''){ ?>                
                <div class="pb-3 text-center">

                    <?php  echo get_option('template_oregoom_adsense_300_250'); ?>

                </div>                
            <?php } ?>
            
        </div>
        
        <div class="col d-none d-xxl-block">
            
            <!--//GOOGLE ADSENSE (PC) -->
            <?php if(get_option('template_oregoom_adsense_300_250') != ''){ ?>                
                <div class="pb-3 text-center">

                    <?php  echo get_option('template_oregoom_adsense_300_250'); ?>

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