<?php
if(!defined('ABSPATH'))exit();




/*
 * 
 */

if(isset($_GET['submit'])){
                            
    /*
     * Código para completar lección
     */
    $update = update_user_meta($_GET['idStudent'], $_GET['idPost'], $_GET['idPost']); ?>

    <!--<script>window.location.replace("<?php //the_permalink(); ?>");</script>   -->

<?php }






/*
 * ID del Estudiantes
 */
$ID_Student = get_current_user_id();






/*
 * ID de Módulo
 * ID de Curso
 * 
 * Si el Curso es Premium o Free
 * 
 */

$ID_Clase_Single = get_the_ID(); //Id del Curso
$ID_Modulo_Single = wp_get_post_parent_id($ID_Clase_Single); // Id del Módulo
$ID_Curso_Single = wp_get_post_parent_id($ID_Modulo_Single); //Id de la clase

























/*
 * SOLO PARA ESTUDIANTES DE OREGOOM
 */
//if(get_post_meta($ID_Curso_Single, 'oregoom_curso_free_premium', true) == 'PREMIUM'){
//    
//    if ( ! is_user_logged_in()) {
//        // Contenido visible únicamente para usuarios conectados
//        wp_redirect(home_url().'/precios/' );
//        exit;        
//    }
//}


get_header();



if(have_posts()){

    while (have_posts()) : the_post(); ?>
        
    
    <main class="container-fluid px-xl-5 pt-3 pb-5 bg-dark">
        
        <div class="row">

            <div class="col-xl-8 col-lg-7">
                
                
                <?php
                /*
                * SOLO PARA ESTUDIANTES DE OREGOOM
                */
                if(get_post_meta($ID_Curso_Single, 'oregoom_curso_free_premium', true) == 'PREMIUM'){ 
                    
                    if ( ! is_user_logged_in()) { ?>

                        <div class="ratio ratio-16x9 bg-secondary shadow">

                            <div class="text-light d-flex justify-content-center align-items-center">
                                <div class="text-center">
                                    <p class="h4">Con un pago único tienes acceso a todas las lecciones de Oregoom</p>
                                    <p class="h4 text-dark"><strong>¿qué esperas para unirte?</strong></p>
                                    <a href="http://bit.ly/2R2flBa" target="_blank" class="btn btn-warning btn-lg mt-3">Comienza ahora</a>
                                </div>
                            </div>                        

                        </div>  <?php 
                        
                        
                    } else {
                        /*
                        * VIDEO DE YOUTUBE O VIMEO
                        *
                        * /cursos/metaboxes-cursos.php
                        *
                        */
                       oregoom_clase_es_youtube_vimeo(get_the_ID());
                    }
                    
               } else {
                   
                   /*
                    * VIDEO DE YOUTUBE O VIMEO
                    *
                    * /cursos/metaboxes-cursos.php
                    *
                    */
                   oregoom_clase_es_youtube_vimeo(get_the_ID());
               }
                ?>

                
                
                <?php
                if(is_user_logged_in()){
//                    if(!current_user_can('publish_posts')){   
                ?>

                   <!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->
                   <!--FORMULARIO PARA ESTUDIANTES CONECTADOR-->
                   <!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->

                    <form method="get" action-xhr="<?php the_permalink(); ?>" target="_top">
                    
                       <?php //Para proteger formularios
                        wp_nonce_field(basename(__FILE__), 'template_oregoom_form_nonce'); ?>

                        <h1 class="h4 pl-0 pt-3 pb-3 border-bottom border-secondary d-flex justify-content-between align-items-center">

                            <!--<small class="pr-3 text-light font-weight-bold"><?php echo get_post_field( 'menu_order', get_the_ID()).'. '.get_the_title(); ?></small>-->
                            <small class="pr-3 text-light font-weight-bold"><?php the_title(); ?></small>
                            
                            <?php 
                            
                            /*
                             * Recupera el valor del User Meta
                             */
                            
                            $getUserMeta = get_user_meta($ID_Student, get_the_ID(), true);
                            
                            if($getUserMeta == ''){ ?>
                            
                                <input type="hidden" name="idStudent" value="<?php echo $ID_Student; ?>">
                                <input type="hidden" name="idPost" value="<?php the_ID(); ?>">

                                <input type="submit" name="submit" id="submit" class="btn btn-outline-success" value="Completar Lección">
                            
                            <?php } ?>
                            
                        </h1>

                       
                        <?php if( $getUserMeta != '' ){ //Cuando aprobo la lección del curso ?>
                       
                        <div class="alert alert-warning" role="alert">
                           <!--¡Felicidades! Has aprobado esta lección. <a href="#" class="alert-link">Lección siguiente</a>-->
                           ¡Felicidades! Has completado esta lección.   
                           
                           
                           <?php 
                           /*
                            * Para link -> function-frontend-clase.php
                            * 
                            * Falta Modificar o agregar esta funcion
                            */ 
                           
                           ?>
                           
<!--                           <a  href="<?php //the_oregoom_link_siguiente_tema($ID_Curso_Single, $ID_Modulo_Single, $ID_Clase_Single); ?>" class="alert-link">
                                Siguiente Tema<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-right-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                                </svg>
                           </a>-->
                           
                           
                        </div> 

                       <?php } ?>

                    </form>
                            
                            
                <?php
                //   }
                } else {
                //FORMULARIO PARA ESTUDIANTES NO CONECTADOR ?>
                    <h1 class="h4 pl-0 pt-3 pb-3 border-bottom d-flex justify-content-between align-items-center">

                        <!--<small class="pr-3 text-light font-weight-bold"><?php echo get_post_field( 'menu_order', get_the_ID()).'. '.get_the_title(); ?></small>  -->
                                
                        <small class="pr-3 text-light font-weight-bold"><?php the_title(); ?></small>

                    </h1>
                <?php } ?>
                        
                
                <?php
                /*
                * SOLO PARA ESTUDIANTES DE OREGOOM
                */
                if( get_post_meta($ID_Curso_Single, 'oregoom_curso_free_premium', true) == 'PREMIUM' ){ 
                    /*
                      * SOLO ESTUDIANTE DE OREGOOM
                      */
                    if ( is_user_logged_in() ) { ?>

                        <!--RECURSOS-->
                        <div id="clase" class="pt-3 pb-2 text-white" style="margin-bottom: 1em; font-family: 'Roboto',sans-serif !important; font-weight: 300!important; font-size: 18px!important; line-height: 1.6;">

                            <?php the_content(); ?>

                        </div>

                        <!--COMENT FACEBOOK--><?php
                        if(get_post_meta($ID_Curso_Single, 'oregoom_curso_url_preguntas_respuestas', true)){ ?>
                            <a href="<?php echo esc_url(get_post_meta($ID_Curso_Single, 'oregoom_curso_url_preguntas_respuestas', true)); ?>" target="_blank" class="btn btn-warning btn-lg">¡Adelante! deja tu comentario</a><?php
                        } 
                    }
                    
                } else { ?>
                
                    <!--RECURSOS-->
                    <div id="clase" class="pt-3 pb-2 text-white" style="margin-bottom: 1em; font-family: 'Roboto',sans-serif !important; font-weight: 300!important; font-size: 18px!important; line-height: 1.6;">

                        <?php the_content(); ?>

                    </div>
                
                    <!--COMENT FACEBOOK--><?php
                    if(get_post_meta($ID_Curso_Single, 'oregoom_curso_url_preguntas_respuestas', true)){ ?>
                        <a href="<?php echo esc_url(get_post_meta($ID_Curso_Single, 'oregoom_curso_url_preguntas_respuestas', true)); ?>" target="_blank" class="btn btn-warning btn-lg">¡Adelante! deja tu comentario</a><?php
                    }                        
                } ?>      
                
            </div>
            
            
            <div class="col-xl-4 col-lg-5 d-none d-lg-block">
                
                <!--ADS GOOGLE-->                
                <?php //google_adsense_300x250(); ?>
                
                
                
                <!--AVANCE DE LA CLASES-->
                <div>
                    <div class="mb-2 text-light">
                        Tu progreso
                    </div>
                    
                    <?php oregoom_barra_progeso($ID_Curso_Single, $ID_Student); ?>
                    
                </div>                    
                
                
                <!--TEMARIO DEL CURSO-->
                <div class="accordion mb-4 shadow" id="accordionExample<?php echo $Temario="Escritorio"; ?>">      
                    <div class="card border-0 bg-secondary rounded">

                        <h3 style="font-family: Raleway, sans-serif; font-weight: bold; font-size: 18px!important;" class="mb-1 pt-3 ps-2">
                            Temario del curso
                        </h3>

                        <!--ID DEL PADRE DE ESTE CLASE-->
                        <?php   
                        /*
                         * Id del padre del Módulo y luego del Curso
                         * 
                         * 
                         */
                            $ID_modulo = wp_get_post_parent_id(get_the_ID());
                            $ID_curso = wp_get_post_parent_id($ID_modulo);

                            /* 
                             * 
                             * cursos/metaboxes-cursos.php
                             * 
                             */
                            oregoom_add_temario_curso($ID_curso, get_the_ID(), $Temario, $ID_Student); 
                        ?>
                    </div>
                </div>
            </div>
        </div>
        
    </main>
    
        
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary d-md-block d-lg-none" style="position: fixed; bottom: 0; right: 0; margin-bottom: 30px; margin-right: 20px;" data-toggle="modal" data-target="#exampleModal">
        <svg class="bi bi-list" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 013 11h10a.5.5 0 010 1H3a.5.5 0 01-.5-.5zm0-4A.5.5 0 013 7h10a.5.5 0 010 1H3a.5.5 0 01-.5-.5zm0-4A.5.5 0 013 3h10a.5.5 0 010 1H3a.5.5 0 01-.5-.5z" clip-rule="evenodd"/>
        </svg>
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content" id="accordionExample<?php echo $Temario="Movil"; ?>">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Contenido del curso</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            <?php

               // oregoom_add_temario_curso($ID_curso, get_the_ID(), $Temario, get_the_author_posts());

            ?>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    
  <?php  endwhile;
}

get_footer();