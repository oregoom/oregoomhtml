<?php

function oregoom_informacion_del_curso($id_curso, $post, $url_clase){

    if(get_post_meta($post->ID, 'oregoom_nivel_curso', true)){
        switch ($select_nivel_curso = get_post_meta($post->ID, 'oregoom_nivel_curso', true)) {
            case 'NB':
                $nivelCurso = "Nivel: Básico";
                break;
            case 'NI':
                $nivelCurso = "Nivel: Intermedio";
                break;
            case 'NA':
                $nivelCurso = "Nivel: Avanzado";
                break;
            case 'TLN':
                $nivelCurso = "Nivel: Todos los niveles";
                break;
        }
    } else {
        $nivelCurso = "Sin nivel";
    }
 

    // Contenido visible únicamente para usuarios conectados ?>
        <!--<img class="card-img-top" src="<?php echo get_the_post_thumbnail_url($id_curso,'full');?>">-->
        <div class="card-body px-4 pb-4"  id="oregoom-not-promo-curso"> 

            <div class="mb-2"> <?php 
            
            if ( is_user_logged_in()) { ?>

                <ul class="text-center list-unstyled">                        
                    <li class="d-grid">
                        <a href="<?php echo $url_clase; ?>" class="btn btn-danger btn-lg btn-block my-3"><strong>Comenzar ahora</strong></a>
                    </li>
                </ul> <?php 
            
            } else { ?>


                <ul class="text-center list-unstyled">                        
                    <li class="d-grid">
                        <a href="https://oregoom.com/precios/" class="btn btn-warning btn-lg btn-block mt-3 mb-1"><strong>Inscribirme ahora</strong></a>
                    </li>                         
                    <li class="text-black-50" style="font-size: 12px;">Garantía de reembolso de 7 días</li>
                    <li class="text-info">* Acceso de por vida a este curso</li>  
                </ul> <?php 
            
            } ?>

            </div>
            

            <ul class="list-unstyled border-top pt-3" style="font-family: 'Roboto',sans-serif; font-weight: 300; font-size: 18px;">
                <li class="mb-2" style="font-family: Raleway, sans-serif; font-weight: bold; font-size: 20px!important;">Detalles del curso:</li>

                <li class="text-dark my-3"><small>
                    <span class="me-1 d-flex align-items-center">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                        </svg>
                        <span class="ms-2">
                        <?php echo $nivelCurso; ?>
                        </span>
                    </span>
                </small></li>

                <li class="text-dark my-3"><small>
                    <span class="me-1 d-flex align-items-center">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-earmark-play" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 11.117V6.883a.5.5 0 0 1 .757-.429l3.528 2.117a.5.5 0 0 1 0 .858l-3.528 2.117a.5.5 0 0 1-.757-.43z"/>
                            <path d="M4 0h5.5v1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h1V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z"/>
                            <path d="M9.5 3V0L14 4.5h-3A1.5 1.5 0 0 1 9.5 3z"/>
                        </svg>
                        <span class="ms-2">Más de 10 Lecciones</span>
                    </span>
                </small></li>

                <li class="text-dark my-3"><small>
                    <span class="me-1 d-flex align-items-center">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-display" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.75 13.5c.167-.333.25-.833.25-1.5h4c0 .667.083 1.167.25 1.5H11a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1h.75z"/>
                            <path fill-rule="evenodd" d="M13.991 3H2c-.325 0-.502.078-.602.145a.758.758 0 0 0-.254.302A1.46 1.46 0 0 0 1 4.01V10c0 .325.078.502.145.602.07.105.17.188.302.254a1.464 1.464 0 0 0 .538.143L2.01 11H14c.325 0 .502-.078.602-.145a.758.758 0 0 0 .254-.302 1.464 1.464 0 0 0 .143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.757.757 0 0 0-.302-.254A1.46 1.46 0 0 0 13.99 3zM14 2H2C0 2 0 4 0 4v6c0 2 2 2 2 2h12c2 0 2-2 2-2V4c0-2-2-2-2-2z"/>
                        </svg>
                        <span class="ms-2">Curso 100% Online</span>
                    </span>
                </small></li>

                <li class="text-dark my-3"><small>
                    <span class="me-1 d-flex align-items-center">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check2-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                            <path fill-rule="evenodd" d="M1.5 13A1.5 1.5 0 0 0 3 14.5h10a1.5 1.5 0 0 0 1.5-1.5V8a.5.5 0 0 0-1 0v5a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V3a.5.5 0 0 1 .5-.5h8a.5.5 0 0 0 0-1H3A1.5 1.5 0 0 0 1.5 3v10z"/>
                        </svg>
                        <span class="ms-2">Acceso Inmediato</span>
                    </span>
                </small></li>

                <li class="text-dark my-3"><small>
                    <span class="me-1 d-flex align-items-center">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-volume-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M6.717 3.55A.5.5 0 0 1 7 4v8a.5.5 0 0 1-.812.39L3.825 10.5H1.5A.5.5 0 0 1 1 10V6a.5.5 0 0 1 .5-.5h2.325l2.363-1.89a.5.5 0 0 1 .529-.06zM6 5.04L4.312 6.39A.5.5 0 0 1 4 6.5H2v3h2a.5.5 0 0 1 .312.11L6 10.96V5.04z"/>
                            <path d="M11.536 14.01A8.473 8.473 0 0 0 14.026 8a8.473 8.473 0 0 0-2.49-6.01l-.708.707A7.476 7.476 0 0 1 13.025 8c0 2.071-.84 3.946-2.197 5.303l.708.707z"/>
                            <path d="M10.121 12.596A6.48 6.48 0 0 0 12.025 8a6.48 6.48 0 0 0-1.904-4.596l-.707.707A5.483 5.483 0 0 1 11.025 8a5.483 5.483 0 0 1-1.61 3.89l.706.706z"/>
                            <path d="M8.707 11.182A4.486 4.486 0 0 0 10.025 8a4.486 4.486 0 0 0-1.318-3.182L8 5.525A3.489 3.489 0 0 1 9.025 8 3.49 3.49 0 0 1 8 10.475l.707.707z"/>
                        </svg>
                        <span class="ms-2">Audio: Español</span>
                    </span>
                </small></li>  

                <!--<li class="text-dark"><strong>Autor:</strong> <?php the_author(); ?></li> -->
                <!--<li class="text-dark mb-1">1253 Estudiantes inscritos</li>-->
                <!--<li class="text-dark mb-1"><?php echo get_post_meta($post->ID, 'oc_valoracion_media', true); ?> Valoración media</li>-->                
            </ul>
        </div> <?php
}




/*
 * Función para la especialidad
 */

function oregoom_informacion_de_la_especialidad($id_curso, $post, $url_clase){

    switch ($select_nivel_curso = get_post_meta($post->ID, 'oregoom_nivel_curso', true)) {
        case 'NB':
            $nivelCurso = "<strong>Nivel:</strong> Básico";
            break;
        case 'NI':
            $nivelCurso = "<strong>Nivel:</strong> Intermedio";
            break;
        case 'NA':
            $nivelCurso = "<strong>Nivel:</strong> Avanzado";
            break;
        case 'TLN':
            $nivelCurso = "<strong>Nivel:</strong> Todos los niveles";
            break;
    }
 
                
    if ( ! is_user_logged_in()) {
        // Contenido visible únicamente para usuarios NO conectados
//      oregoom_curso_free_premium($post);
        
        $select_nivel_precio = get_post_meta($post->ID, 'oregoom_curso_free_premium', true);        
        $URL_carta_venta_especialidad = get_post_meta($post->ID, 'oregoom_url_carta_venta_especialidad', true);

        /*
        * Si el Curso es FREE o Primium
        */
        if( ! empty($select_nivel_precio)){

            if($select_nivel_precio == 'PREMIUM'){
                // Contenido visible únicamente cuando el Nivel del Curso en "PREMIUM" ?>
            <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url($id_curso,'full');?>">
            <div class="card-body text-center"  id="oregoom-not-promo-curso"> 
                <ul class="text-center list-unstyled" style="font-family: 'Roboto',sans-serif; font-weight: 300; font-size: 16px;">
                    <li class="h4 mb-3" style="font-family: Raleway, sans-serif; font-weight: bold; font-size: 24px;"><?php the_title(); ?></li>
                    <li class="text-info">* Acceso de por vida a esta especialidad</li>                                                      
                    <li class="text-dark"><strong>Autor:</strong> <?php the_author(); ?></li> 
                    <li class="text-dark"><?php echo $nivelCurso; ?></li>
                    <li><a href="<?php echo $URL_carta_venta_especialidad; ?>" class="btn btn-danger btn-lg btn-block mt-3 mb-1"><strong>Comenzar ahora</strong></a></li>
                </ul>
            </div>
            
            <?php    
            } else {
                // Contenido visible únicamente cuando el Nivel del Curso es "GRATIS" ?>                
            <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url($id_curso,'full');?>">
            <div class="card-body text-center"  id="oregoom-not-promo-curso"> 
                <ul class="text-center list-unstyled" style="font-family: 'Roboto',sans-serif; font-weight: 300; font-size: 16px;">
                    <li class="h4 mb-3" style="font-family: Raleway, sans-serif; font-weight: bold; font-size: 22px;">Información de la especialidad</li>
                    <li class="text-info">* Acceso de por vida a esta especialidad</li>                                                      
                    <li class="text-dark"><strong>Autor:</strong> <?php the_author(); ?></li>
                    <li class="text-dark"><?php echo $nivelCurso; ?></li>
                    <li><a href="<?php echo $url_clase; ?>" class="btn btn-danger btn-lg btn-block mt-3 mb-1"><strong>Comenzar ahora</strong></a></li>
                </ul>
            </div>
            <?php
            }

        } else {
            // Contenido visible únicamente cuando el Nivel del Curso esta "No ASIGNADO" ?>
        <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url($id_curso,'full');?>">
        <div class="card-body text-center"  id="oregoom-not-promo-curso"> 
            <ul class="text-center list-unstyled" style="font-family: 'Roboto',sans-serif; font-weight: 300; font-size: 16px;">
                <li class="h4 mb-3" style="font-family: Raleway, sans-serif; font-weight: bold; font-size: 22px;">Información de la especialidad</li>
                <li class="text-info">* Acceso de por vida a esta especialidad</li>                                                      
                <li class="text-dark"><strong>Autor:</strong> <?php the_author(); ?></li> 
                <li class="text-dark"><?php echo $nivelCurso; ?></li>
                <li><a href="<?php echo $url_clase; ?>" class="btn btn-danger btn-lg btn-block mt-3 mb-1"><strong>Comenzar ahora</strong></a></li>
            </ul>
        </div>
        <?php
        }

    } else { 
        // Contenido visible únicamente para usuarios conectados ?>
        <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url($id_curso,'full');?>">
        <div class="card-body text-center"  id="oregoom-not-promo-curso"> 
            <ul class="text-center list-unstyled" style="font-family: 'Roboto',sans-serif; font-weight: 300; font-size: 16px;">
                <li class="h4 mb-3" style="font-family: Raleway, sans-serif; font-weight: bold; font-size: 24px;"><?php the_title(); ?></li>
                <li class="text-info">* Acceso de por vida a esta especialidad</li>                                                      
                <li class="text-dark"><strong>Autor:</strong> <?php the_author(); ?></li> 
                <li class="text-dark"><?php echo $nivelCurso; ?></li>
                <li><a href="<?php echo $url_clase; ?>" class="btn btn-danger btn-lg btn-block mt-3 mb-1"><strong>Comenzar ahora</strong></a></li>
            </ul>
        </div>  
    <?php
    }    
}









/*
 * XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
 * 
 * Función para mostrar los iconos de acuerdo a su condición del curso
 * 
 */