
<?php
/*
 * Template name: Oregoom: Curso-1
 * Template Post Type: cursos-1
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


<div class="container-fluid" style="background: #121a21;">
    <div class="container pt-4 pb-3 text-white" style="font-family: 'Roboto',sans-serif; font-weight: 300; font-size: 18px;">
        <h1 style="font-family: Raleway, sans-serif; font-weight: bold; font-size: 40px;"><?php the_title(); ?></h1>
        <h2 class="h4 text-white-50" style="font-family: Roboto; font-size: 24px; font-weight: 400;">
            <svg class="bi bi-chevron-compact-right" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M6.776 1.553a.5.5 0 01.671.223l3 6a.5.5 0 010 .448l-3 6a.5.5 0 11-.894-.448L9.44 8 6.553 2.224a.5.5 0 01.223-.671z" clip-rule="evenodd"/>
            </svg>
            <?php echo get_post_meta($post->ID, 'oc_subtitle', true); ?>
        </h2>
        
        <div class="text-white-50">
            <?php echo get_post_meta($post->ID, 'oregoom_description_curso', true); ?>
        </div>      
        
        <p class="pt-2" style="font-size: 16px;">      
            <span class="badge badge-pill badge-warning">Curso</span>&nbsp;
            <span class="mt-1"><?php oregoom_curso_free_premium($post); ?>&nbsp;&nbsp;<strong>Creado por:</strong> <?php the_author(); ?></span>
        </p>
        
    </div>
</div>

<div class="container pt-3">
    <div class="row cols-xl-2 cols-lg-2">
        <div class="col-xl-8 col-lg-8 pb-5">
            
            <?php
            /*
             * ¿Qué aprenderás? AND ¿Requisitos para el curso?
             */
            if(get_post_meta($post->ID, 'oregoom_que_aprenderas_curso_1', true)){
            ?>
            <div class="row cols-xl-2 mb-2">
                <div class="col-xl-6">
                    <h2 style="font-family: Raleway, sans-serif; font-weight: bold; font-size: 22px;">¿Qué aprenderás?</h2>
                    <ul style="font-family: 'Roboto',sans-serif; font-weight: 300; font-size: 18px;">
                        <?php if(get_post_meta($post->ID, 'oregoom_que_aprenderas_curso_1', true)){  echo '<li>' . get_post_meta($post->ID, 'oregoom_que_aprenderas_curso_1', true) . '</li>'; } ?>
                        <?php if(get_post_meta($post->ID, 'oregoom_que_aprenderas_curso_2', true)){  echo '<li>' . get_post_meta($post->ID, 'oregoom_que_aprenderas_curso_2', true) . '</li>'; } ?>
                        <?php if(get_post_meta($post->ID, 'oregoom_que_aprenderas_curso_3', true)){  echo '<li>' . get_post_meta($post->ID, 'oregoom_que_aprenderas_curso_3', true) . '</li>'; } ?>
                        <?php if(get_post_meta($post->ID, 'oregoom_que_aprenderas_curso_4', true)){  echo '<li>' . get_post_meta($post->ID, 'oregoom_que_aprenderas_curso_4', true) . '</li>'; } ?>
                    </ul>
                </div>
                <?php if(get_post_meta($post->ID, 'oregoom_requisitos_curso_1', true)){ ?>
                <div class="col-xl-6">
                    <h2 style="font-family: Raleway, sans-serif; font-weight: bold; font-size: 22px;">¿Requisitos para el curso?</h2>
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
            <div class="mb-2">
                <h2 style="font-family: Raleway, sans-serif; font-weight: bold; font-size: 22px;">¿Para quién es este curso?</h2>
                <ul style="font-family: 'Roboto',sans-serif; font-weight: 300; font-size: 18px;">
                    <?php if(get_post_meta($post->ID, 'oregoom_para_quien_curso_1', true)){ echo '<li>' . get_post_meta($post->ID, 'oregoom_para_quien_curso_1', true) . '</li>'; } ?>
                    <?php if(get_post_meta($post->ID, 'oregoom_para_quien_curso_2', true)){ echo '<li>' . get_post_meta($post->ID, 'oregoom_para_quien_curso_2', true) . '</li>'; } ?>
                    <?php if(get_post_meta($post->ID, 'oregoom_para_quien_curso_3', true)){ echo '<li>' . get_post_meta($post->ID, 'oregoom_para_quien_curso_3', true) . '</li>'; } ?>
                </ul>
            </div>
            <?php
            }
            /*
             * Detalles del curso
             */
            ?>
            <div class="mb-4">
                <h2 style="font-family: Raleway, sans-serif; font-weight: bold; font-size: 22px;">Detalles del curso</h2>
                <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1" style="font-family: 'Roboto',sans-serif; font-weight: 300; font-size: 18px;">
                    <div class="mb-3 col">
                        <span class="mr-1 d-flex align-items-center">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                            </svg>
                            <span class="ml-2">
                                <?php
                                switch ($select_nivel_curso = get_post_meta($post->ID, 'oregoom_nivel_curso', true)) {
                                    case 'NB':
                                        echo "Nivel: Básico";
                                        break;
                                    case 'NI':
                                        echo "Nivel: Intermedio";
                                        break;
                                    case 'NA':
                                        echo "Nivel: Avanzado";
                                        break;
                                    case 'TLN':
                                        echo "Todos los niveles";
                                        break;
                                }
                                ?>
                            </span>
                        </span>
                    </div>
                    <div class="mb-3 col">
                        <span class="mr-1 d-flex align-items-center">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-earmark-play" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 11.117V6.883a.5.5 0 0 1 .757-.429l3.528 2.117a.5.5 0 0 1 0 .858l-3.528 2.117a.5.5 0 0 1-.757-.43z"/>
                                <path d="M4 0h5.5v1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h1V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z"/>
                                <path d="M9.5 3V0L14 4.5h-3A1.5 1.5 0 0 1 9.5 3z"/>
                            </svg>
                            <span class="ml-2">Más de 10 Lecciones</span>
                        </span>
                    </div>
                    <div class="mb-3 col">
                        <span class="mr-1 d-flex align-items-center">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check2-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                                <path fill-rule="evenodd" d="M1.5 13A1.5 1.5 0 0 0 3 14.5h10a1.5 1.5 0 0 0 1.5-1.5V8a.5.5 0 0 0-1 0v5a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V3a.5.5 0 0 1 .5-.5h8a.5.5 0 0 0 0-1H3A1.5 1.5 0 0 0 1.5 3v10z"/>
                            </svg>
                            <span class="ml-2">Acceso Inmediato</span>
                        </span>
                    </div>
                    <div class="mb-3 col">
                        <span class="mr-1 d-flex align-items-center">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-display" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.75 13.5c.167-.333.25-.833.25-1.5h4c0 .667.083 1.167.25 1.5H11a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1h.75z"/>
                                <path fill-rule="evenodd" d="M13.991 3H2c-.325 0-.502.078-.602.145a.758.758 0 0 0-.254.302A1.46 1.46 0 0 0 1 4.01V10c0 .325.078.502.145.602.07.105.17.188.302.254a1.464 1.464 0 0 0 .538.143L2.01 11H14c.325 0 .502-.078.602-.145a.758.758 0 0 0 .254-.302 1.464 1.464 0 0 0 .143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.757.757 0 0 0-.302-.254A1.46 1.46 0 0 0 13.99 3zM14 2H2C0 2 0 4 0 4v6c0 2 2 2 2 2h12c2 0 2-2 2-2V4c0-2-2-2-2-2z"/>
                            </svg>
                            <span class="ml-2">Curso 100% Online</span>
                        </span>
                    </div>
                    <div class="mb-3 col">
                        <span class="mr-1 d-flex align-items-center">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-clockwise" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
                                <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>
                            </svg>
                            <span class="ml-2">Actualizaciones Permanentes</span>
                        </span>
                    </div>
                    <div class="mb-3 col">
                        <span class="mr-1 d-flex align-items-center">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-volume-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M6.717 3.55A.5.5 0 0 1 7 4v8a.5.5 0 0 1-.812.39L3.825 10.5H1.5A.5.5 0 0 1 1 10V6a.5.5 0 0 1 .5-.5h2.325l2.363-1.89a.5.5 0 0 1 .529-.06zM6 5.04L4.312 6.39A.5.5 0 0 1 4 6.5H2v3h2a.5.5 0 0 1 .312.11L6 10.96V5.04z"/>
                                <path d="M11.536 14.01A8.473 8.473 0 0 0 14.026 8a8.473 8.473 0 0 0-2.49-6.01l-.708.707A7.476 7.476 0 0 1 13.025 8c0 2.071-.84 3.946-2.197 5.303l.708.707z"/>
                                <path d="M10.121 12.596A6.48 6.48 0 0 0 12.025 8a6.48 6.48 0 0 0-1.904-4.596l-.707.707A5.483 5.483 0 0 1 11.025 8a5.483 5.483 0 0 1-1.61 3.89l.706.706z"/>
                                <path d="M8.707 11.182A4.486 4.486 0 0 0 10.025 8a4.486 4.486 0 0 0-1.318-3.182L8 5.525A3.489 3.489 0 0 1 9.025 8 3.49 3.49 0 0 1 8 10.475l.707.707z"/>
                            </svg>
                            <span class="ml-2">Audio: Español</span>
                        </span>
                    </div>
                </div>
            </div>
            
            <!--Video de venta-->
            
            <h2 style="font-family: Raleway, sans-serif; font-weight: bold;" class="text-center p-4">Temario del Curso</h2>
            
            
            
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
                    
            <h3 style="font-family: Raleway, sans-serif; font-weight: 600;" class="h5 pt-3"><?php the_title(); ?><small> (Módulo <?php echo $i; ?>)</small></h3>
                    
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
        
            ?>  
            
            <div class="container pt-5">     
                
                <?php the_content(); ?> 

            </div> 
            
        </div>
        <div class="col-xl-4 col-lg-4">
            
            <div class="sticky-top">
                
            <div class="card border-0 shadow">
                
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
    
<?php

get_footer();