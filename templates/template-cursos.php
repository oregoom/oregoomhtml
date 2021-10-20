
<?php
/*
 * Template name: Oregoom: Curso
 * Template Post Type: cursos
 */

get_header();

/*
 * ID del Estudiante
 * 
 */
$ID_estudent_curso = get_current_user_id();

/*
 * ID del Curso
 */
$ID_oregoom_curso = get_the_ID();//Id del Curso

?>


<div class="py-5" style="background: #121a21;">

    <div class="container text-white" style="font-family: 'Roboto',sans-serif; font-weight: 300;">

        <div class="row">

            <div class="col-8">

                <h1 style="font-family: Raleway, sans-serif; font-weight: bold;">
                    <?php the_title(); ?>
                </h1>

                <h2 class="h5 text-white-50 pt-2" style="font-family: Roboto;  font-weight: 400!important; font-size: 26px!important;">
                    <svg class="bi bi-chevron-compact-right" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M6.776 1.553a.5.5 0 01.671.223l3 6a.5.5 0 010 .448l-3 6a.5.5 0 11-.894-.448L9.44 8 6.553 2.224a.5.5 0 01.223-.671z" clip-rule="evenodd"/>
                    </svg>
                    <?php echo get_post_meta($post->ID, 'oc_subtitle', true); ?>
                </h2>
                
                <div class="text-white">
                    <?php echo get_post_meta($post->ID, 'oregoom_description_curso', true); ?>
                </div>      
                
                <p class="pt-2" style="font-size: 16px;">      
                    <!--<span class="badge badge-pill badge-warning">Curso</span>&nbsp;
                    <span class="mt-1"><?php /* oregoom_curso_free_premium($post);*/ ?>&nbsp;&nbsp;--><strong>Creado por:</strong> <?php the_author(); ?></span>
                </p>

            </div>
            <div class="col-4">

                <a href="<?php the_permalink(); ?>">
                    <img class="figure-img img-fluid rounded"  atl="<?php the_title(); ?>" src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full');?>">
                </a>

            </div>

        </div>
        
    </div>
</div>


<div class="container pb-5 mb-5">

    <div class="row">

        <div class="col-8">



        <?php
            /*
             * ¿Qué aprenderás? AND ¿Requisitos para el curso?
             */
            if(get_post_meta($post->ID, 'oregoom_que_aprenderas_curso_1', true)){
            ?>
            <div class="row cols-xl-2 mb-2">
                <div class="col-xl-6">
                    <h2 style="font-family: Raleway, sans-serif; font-weight: bold; font-size: 22px!important;">¿Qué aprenderás?</h2>
                    <ul style="font-family: 'Roboto',sans-serif; font-weight: 300; font-size: 18px;">
                        <?php if(get_post_meta($post->ID, 'oregoom_que_aprenderas_curso_1', true)){  echo '<li>' . get_post_meta($post->ID, 'oregoom_que_aprenderas_curso_1', true) . '</li>'; } ?>
                        <?php if(get_post_meta($post->ID, 'oregoom_que_aprenderas_curso_2', true)){  echo '<li>' . get_post_meta($post->ID, 'oregoom_que_aprenderas_curso_2', true) . '</li>'; } ?>
                        <?php if(get_post_meta($post->ID, 'oregoom_que_aprenderas_curso_3', true)){  echo '<li>' . get_post_meta($post->ID, 'oregoom_que_aprenderas_curso_3', true) . '</li>'; } ?>
                        <?php if(get_post_meta($post->ID, 'oregoom_que_aprenderas_curso_4', true)){  echo '<li>' . get_post_meta($post->ID, 'oregoom_que_aprenderas_curso_4', true) . '</li>'; } ?>
                    </ul>
                </div>
                <?php if(get_post_meta($post->ID, 'oregoom_requisitos_curso_1', true)){ ?>
                <div class="col-xl-6">
                    <h2 style="font-family: Raleway, sans-serif; font-weight: bold; font-size: 22px!important;">¿Requisitos para el curso?</h2>
                    <ul style="font-family: 'Roboto',sans-serif; font-weight: 300; font-size: 18px;">
                        <?php if(get_post_meta($post->ID, 'oregoom_requisitos_curso_1', true)) { echo '<li>' . get_post_meta($post->ID, 'oregoom_requisitos_curso_1', true) . '</li>'; } ?>
                        <?php if(get_post_meta($post->ID, 'oregoom_requisitos_curso_2', true)) { echo '<li>' . get_post_meta($post->ID, 'oregoom_requisitos_curso_2', true) . '</li>'; } ?>
                        <?php if(get_post_meta($post->ID, 'oregoom_requisitos_curso_3', true)) { echo '<li>' . get_post_meta($post->ID, 'oregoom_requisitos_curso_3', true) . '</li>'; } ?>
                    </ul>
                </div>
                <?php } ?>
            </div>            
            <?php
            }
            /*
             * ¿Para quién es este curso?
             */
            if(get_post_meta($post->ID, 'oregoom_para_quien_curso_1', true)){
            ?>
            <div class="mb-4">
                <h2 style="font-family: Raleway, sans-serif; font-weight: bold; font-size: 22px!important;">¿Para quién es este curso?</h2>
                <ul style="font-family: 'Roboto',sans-serif; font-weight: 300; font-size: 18px;">
                    <?php if(get_post_meta($post->ID, 'oregoom_para_quien_curso_1', true)){ echo '<li>' . get_post_meta($post->ID, 'oregoom_para_quien_curso_1', true) . '</li>'; } ?>
                    <?php if(get_post_meta($post->ID, 'oregoom_para_quien_curso_2', true)){ echo '<li>' . get_post_meta($post->ID, 'oregoom_para_quien_curso_2', true) . '</li>'; } ?>
                    <?php if(get_post_meta($post->ID, 'oregoom_para_quien_curso_3', true)){ echo '<li>' . get_post_meta($post->ID, 'oregoom_para_quien_curso_3', true) . '</li>'; } ?>
                </ul>
            </div> <?php

            } ?>








            <h2 style="font-family: Raleway, sans-serif; font-weight: bold; font-size: 30px!important;" class="text-center py-5">Temario del Curso</h2>






            <!--AVANCE DE LA CLASES-->
            <div class="mb-4">
                <div class="mb-2">
                    Tu progreso
                </div>

                <?php oregoom_barra_progeso($ID_oregoom_curso, $ID_estudent_curso); ?>

            </div> 






            
            <?php 
            
            /*
             * Imprimir Módulos
             */
            $query_modulos_curso = new WP_Query( array(
                                    'post_type' => 'cursos',
                                    'post_parent' => $post->ID,
                                    'orderby'           => 'menu_order',
                                    'order'         => 'ASC',
                                    'posts_per_page' => 200
            ) );
            $i = 1;
            $j = 1;

            $url_clase_one = ""; //url de la primera clase

            if($query_modulos_curso->have_posts()){
                
                while($query_modulos_curso->have_posts()){
                    
                    $query_modulos_curso->the_post(); 
                    
                    $Oregoom_ID_modulo = get_the_ID();
                    
                    ?>
                    
            <h3 style="font-family: Raleway, sans-serif; font-weight: 600; font-size: 20px!important;" class="pt-3"><?php the_title(); ?><small> (Módulo <?php echo $i; ?>)</small></h3>
                    
                    <?php
                    $i = $i + 1;
                    
                    
                    
                    /*
                     * Imprimir Clases
                     */
                    $query_clases_curso = new WP_Query( array(
                                            'post_type' => 'cursos',
                                            'post_parent' => get_the_ID(),
                                            'orderby'           => 'menu_order',
                                            'order'         => 'ASC',
                                            'posts_per_page' => 200
                    ) );
                    
                    if($query_clases_curso->have_posts()){ 
                        
                        /*
                         *Imprimir cuando existe clases para este módulo 
                         */
                        ?>
            
                        <ul class="list-group list-group-flush" id="<?php the_ID(); ?>">
                            
                        <?php   
                        
                        while($query_clases_curso->have_posts()){
                            $query_clases_curso->the_post(); 
                            
                            $oregoom_ID_clase = get_the_ID();
                            
                            if($url_clase_one == ""){
                                $url_clase_one = get_the_permalink();
                            }
                            
                            ?>
                            
                            <li class="list-group-item" id="<?php the_ID(); ?>">
                                <a href="<?php the_permalink(); ?>" class="text-decoration-none text-secondary d-flex justify-content-between align-items-center">
                                    <?php
                                    
                                    if(is_user_logged_in() || current_user_can('publish_posts')){
                                         /*
                                         * Contenido visible únicamente para usuarios SI conectados
                                         */
                                        $IDleccionCompletada = get_user_meta($ID_estudent_curso, get_the_ID(), true);
                                                                                
                                        ?>
                                    <span>
                                        <svg width="1em" height="1.3em" viewBox="0 2 16 16" class="bi bi-check-circle-fill <?php if($IDleccionCompletada == get_the_ID()){ echo 'text-primary'; } ?>" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                          <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                        </svg>&nbsp;
                                        <?php echo $j.'. '; ?><?php the_title(); ?>
                                    </span>                                    
                                    
                                    <span><small class="d-flex"><?php $duration_video = get_post_meta(get_the_ID(), 'duracion_video', true); if($duration_video == ""){echo '00:00';}else{echo $duration_video;} ?></small></span>
                                    <?php 
                                    
                                    } else {
                                        
                                        // Contenido visible únicamente para usuarios NO conectados    
                                    ?>
                                    <span>
                                        <?php
                                        /*
                                         * Lección del Curso
                                         * 
                                         * Mostrar los iconos de acuerdo a su condición del curso:
                                         * 1. Candado Cerrado.- Cuando el curso es Premium
                                         * 2. Candado Abierto.- Cuando el curso es Gratuito
                                         * 
                                         * 
                                         */
                                        $curso_select_nivel_precio = get_post_meta($ID_oregoom_curso, 'oregoom_curso_free_premium', true);
                                        if( ! empty($curso_select_nivel_precio)){
                                            if($curso_select_nivel_precio == 'FREE'){ ?>
                                                <svg width="1em" height="1.3em" viewBox="0 2 16 16" class="bi bi-caret-right-fill text-danger" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                                                </svg>&nbsp;
                                            <?php  
                                            } else { ?>
                                                <svg width="1em" height="1.3em" viewBox="0 3 16 16" class="bi bi-lock-fill text-danger" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2.5 9a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-7a2 2 0 0 1-2-2V9z"/>
                                                    <path fill-rule="evenodd" d="M4.5 4a3.5 3.5 0 1 1 7 0v3h-1V4a2.5 2.5 0 0 0-5 0v3h-1V4z"/>
                                              </svg>&nbsp;
                                            <?php
                                            }                                
                                        }
                                        echo $j.'. '; ?><?php the_title(); ?>
                                    </span>                                        
                                        
                                    <small><?php $duration_video = get_post_meta(get_the_ID(), 'duracion_video', true); if($duration_video == ""){echo '00:00';}else{echo $duration_video;} ?></small>
                                    <?php } ?>
                                </a>
                            </li>
                            
                            <?php
                            $j = $j + 1;
                        } ?>
                            
                        </ul>
            
                            <?php
                    }
                    
                    wp_reset_postdata();
                }             
                                                
            }            
            wp_reset_postdata();




            /*
             * FIN = Imprimir Módulos
             */




        
            ?>  



        </div>

        <div class="col-4">

            

        <div class="sticky-top pt-4">
                
                <div class="card border-0 shadow ms-5">
                    
                    <?php
                    /*
                     * Información del curso segun su Nivel = FREE or Premium
                     */
                    if(isset($url_clase_one)){ //url de la clase
                        oregoom_informacion_del_curso($ID_oregoom_curso, $post, $url_clase_one);
                    } else {
                        oregoom_informacion_del_curso($ID_oregoom_curso, $post, '#');
                    }
                        
                    ?>
                    
                </div>
                
    <!--            <div class="mt-4 text-center">
                    script de FACEBOOK
                    <div id="fb-root"></div>
                    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&autoLogAppEvents=1&version=v7.0&appId=1718562548200033"></script>
                    END script de FACEBOOK
                    <div class="fb-like" data-href="<?php the_permalink(); ?>" data-width="" data-layout="button" data-action="like" data-size="large" data-show-faces="false" data-share="true"></div>
                </div>-->
                
            </div>



        </div>
        
    </div>

</div>




<?php  get_footer();