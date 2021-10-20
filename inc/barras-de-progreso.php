<?php
if( ! defined('ABSPATH')) exit;

/* 
 * Barra de progreso de los estudiantes
 */

function oregoom_barra_progeso($ID_Curso, $ID_Student){    
    
    /*
    * Contador de AVANCE de la clases
    */
   $total_modulos = new WP_Query( array(
           'post_type'         => 'cursos',
           'post_parent'       => $ID_Curso,
           'posts_per_page'    => -1
   ));


    if($total_modulos->have_posts()){

        $ID_Modulos = array();

        while($total_modulos->have_posts()){
            $total_modulos->the_post();

            $ID_Modulos[] = get_the_ID();

        }
    
        wp_reset_postdata();


        $total_clases = new WP_Query( array(
                'post_type'         => 'cursos',
                'post_parent__in'   => $ID_Modulos,
                'posts_per_page'    => -1
        ));

        if($total_clases->have_posts()){

            $ID_Clases_aprobadas = array();
            $ID_Clases_no_aprobadas = array();

            while($total_clases->have_posts()){
                $total_clases->the_post();

                if(get_user_meta($ID_Student, get_the_ID(), true)){

                    $ID_Clases_aprobadas[] = get_the_ID();

                } else {

                    $ID_Clases_no_aprobadas[] = get_the_ID();

                }

            }
        
            wp_reset_postdata();

            $avance_del_curso = intval( (count($ID_Clases_aprobadas) * 100) / ( count($ID_Clases_aprobadas) + count($ID_Clases_no_aprobadas) ) );

            echo '<div class="progress mb-3">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: '. $avance_del_curso .'%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">' . $avance_del_curso . '%</div>
                </div>';

        }

    }
    
    
}

