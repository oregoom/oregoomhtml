<?php

get_header();

if(have_posts()){
    
    while(have_posts()) : the_post();


    if (isset($_GET['v'])) {
        
        $ID_YouTube = $_GET['v']; ?>

        <div class="bg-dark d-none d-sm-block">
            <div class="container pt-2 pb-4">
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

        <div class="bg-dark sticky-top d-sm-none">
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


<div class="bg-white">

<main class="container pt-4 mb-5">
    
    <div class="row">
        
        <aside class="col col-xxl-2 col-xl-3 col-lg-3 d-none d-lg-block">
            
            <nav style="position: -webkit-sticky; position: sticky; overflow: auto; top: 116px; height: 100vh; max-height: calc(100vh - 116px);">
                
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
                
                <ul style="overflow: auto; max-height: 100%; margin: 0; padding: 0;" id="ul-scrollbar">
                    
                    <div style="position: -webkit-sticky; position: sticky; top: 0; z-index: 12;" class="pb-2 bg-white">                        

                        
                        <span class="h5"><strong>Contenido</strong></span>
                        
                    </div>
                            
                    <!--<div class="list-group list-group-flush">-->                
                    <div class="nav flex-column">                

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

                                <!--<a class="list-group-item list-group-item-action <?php if($ID_post == get_the_ID()){ echo "list-group-item-secondary"; } ?>" target="_self" href="<?php the_permalink(); ?>"><?php echo $oregoom_title_corto_post; ?></a>--> 
                                <a class="nav-link text-dark  <?php if($ID_post == get_the_ID()){ echo "list-group-item-primary"; } ?>" target="_self" href="<?php the_permalink(); ?>"><?php echo $oregoom_title_corto_post; ?></a> <?php

                            } else { ?>

                                <!--<a class="list-group-item list-group-item-action <?php if($ID_post == get_the_ID()){ echo "list-group-item-secondary"; } ?>" target="_self" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>--> 
                                <a class="nav-link text-dark <?php if($ID_post == get_the_ID()){ echo "list-group-item-primary"; } ?>" target="_self" href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <?php

                            }

                        endwhile;

                        wp_reset_postdata(); ?>

                    </div>
                    
                </ul>
                
            </nav>
            
        </aside>
        
        <article class="col">
            
            <div class="container" style="max-width: 760px; margin-left: auto; margin-right: auto;">
                
                <h1 class="text-center h1" style="font-weight: bold;"><?php the_title(); ?></h1>
                
                <?php 
                
                if (!isset($_GET['v'])) {
                
                    if(get_post_meta(get_the_ID(), 'hb_idyoutube_post', true)){ 
                    
                    $ID_YouTube_post = get_post_meta(get_the_ID(), 'hb_idyoutube_post', true); ?>
                
                    <div class="d-grid gap-2 col-6 mx-auto mt-4">
                        <a href="<?php echo get_the_permalink()."?v=$ID_YouTube_post"; ?>" class="btn btn-primary" type="button">Ver video tutorial</a>
                    </div>
                
                    <?php } ?>
                
                <?php } ?>
                
                <div class="pt-4 pb-4">
                    <?php the_content(); ?>   
                </div> 
                
            </div>
            
        </article>
        
        <div class="col col-3 d-none d-xxl-block">
            
            
            <!--//GOOGLE ADSENSE (PC) -->
            <?php if(get_option('template_oregoom_curso_udemy') != ''){ ?>                
                <div class="pb-3 text-center sticky-top"  style="position: -webkit-sticky; position: sticky; overflow: auto; top: 116px; height: 100vh; max-height: calc(100vh - 116px); z-index: 12;">

                    <?php  echo get_option('template_oregoom_curso_udemy'); ?>

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
    
</div>

<?php
    
    endwhile;  
    
}



/*
 * ===============================
 * Pie de página 
 */
get_footer();


