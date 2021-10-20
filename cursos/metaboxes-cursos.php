<?php
if ( ! defined( 'ABSPATH' ) ) exit;

function oregoom_cursos_agregar_metaboxes(){
  // Agrega el Metabox en el Post Type de Quizes
  // 7 parametros:
  // id para identificar el metabox
  // Titulo del Metabox
  // Callback con el Cntenido
  // Pantalla donde se mostrará o Post Type
  // contexto es donde se mostrará (normal, aside, advanced)
  // Prioridad en la que se mostrarán
  // Argumentos con callback
    global $post;
    
    if(!empty($post))
    {
        $pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);

        /*
         * Mostrar los campos del MetaBoxes cuando usamos la plantilla "Cursos"
         */
        if($pageTemplate == 'templates/template-cursos.php' )
        {
            /*
             * MetaBoxes del Curso
             */
            add_meta_box( 'oregoom_cursos_meta_box', 'Detalles del Curso', 'oregoom_cursos_metaboxes', 'cursos', 'normal', 'high', null );
            
        } else if($pageTemplate == 'templates/template-modulo.php') {
            /*
             * MetaBoxes del Módulo
             */
            add_meta_box( 'oregoom_modulo_meta_box', 'Detalles del Módulo', 'oregoom_modulo_metaboxes', 'cursos', 'normal', 'high', null );
            
        } else {
            
            /*
             * MetaBoxes de Clases
             */
            add_meta_box('oregoom_clase_meta_box', 'Detalles de la Clase', 'oregoom_clase_metaboxes', 'cursos', 'normal', 'high', null);
            
        }
    }
  
  
}
add_action( 'add_meta_boxes', 'oregoom_cursos_agregar_metaboxes' );



function oregoom_cursos_metaboxes($post) { ?>

    <!--MODERNO METABOXES-->
    <div>
        <p class="post-attributes-label-wrapper page-template-label-wrapper">
            <label class="post-attributes-label" for="oc_subtitle">(H2) Subtítulo del Curso</label>
        </p>
        <input value="<?php echo get_post_meta($post->ID, 'oc_subtitle', true); ?>" id="oc_subtitle" name="oc_subtitle" class="regular-text" type="text"  style="width: 100%;">
    </div>
    
    <div>
        <p class="post-attributes-label-wrapper page-template-label-wrapper">
            <label class="post-attributes-label" for="oregoom_description_curso">Descripción del Curso</label>
        </p>
        <?php   
            wp_editor(get_post_meta($post->ID, 'oregoom_description_curso', true), 'oregoom_description_curso', array('textarea_name'=>'oregoom_description_curso','media_buttons'=>false,'tinymce'=>true,'textarea_rows'=>10,'wpautop'=>false, 'quicktags'=>false));
    //      \_WP_Editors::enqueue_scripts();
    //      print_footer_scripts();
    //      \_WP_Editors::editor_js();
        ?>
    </div>
    
    <div>
        <p class="post-attributes-label-wrapper page-template-label-wrapper">
            <label class="post-attributes-label" for="oregoom_descrip_min_curso">Descripción Mini del Curso (80 caracteres permitidos)</label>
        </p>
        <textarea style="width: 100%!important;" maxlength="80" id="oregoom_descrip_min_curso" name="oregoom_descrip_min_curso"><?php echo get_post_meta($post->ID, 'oregoom_descrip_min_curso', true); ?></textarea>
    </div>
    
    <?php
    /*
     * ¿Qué aprenderás?
     */
    ?>
    <div>
        <p class="post-attributes-label-wrapper page-template-label-wrapper">
            <label class="post-attributes-label" for="oregoom_que_aprenderas_curso_1">¿Qué aprenderás?</label>
        </p>
        <input style="width: 100%!important;" type="text" id="oregoom_que_aprenderas_curso_1" name="oregoom_que_aprenderas_curso_1" value="<?php echo get_post_meta($post->ID, 'oregoom_que_aprenderas_curso_1', true); ?>"><br><br>
        <input style="width: 100%!important;" type="text" id="oregoom_que_aprenderas_curso_2" name="oregoom_que_aprenderas_curso_2" value="<?php echo get_post_meta($post->ID, 'oregoom_que_aprenderas_curso_2', true); ?>"><br><br>
        <input style="width: 100%!important;" type="text" id="oregoom_que_aprenderas_curso_3" name="oregoom_que_aprenderas_curso_3" value="<?php echo get_post_meta($post->ID, 'oregoom_que_aprenderas_curso_3', true); ?>"><br><br>
        <input style="width: 100%!important;" type="text" id="oregoom_que_aprenderas_curso_4" name="oregoom_que_aprenderas_curso_4" value="<?php echo get_post_meta($post->ID, 'oregoom_que_aprenderas_curso_4', true); ?>"><br><br>
    </div>
    
    <?php
    /*
     * ¿Requisitos para el curso?
     */
    ?>
    <div>
        <p class="post-attributes-label-wrapper page-template-label-wrapper">
            <label class="post-attributes-label" for="oregoom_requisitos_curso_1">¿Requisitos para el curso?</label>
        </p>
        <input style="width: 100%!important;" type="text" id="oregoom_requisitos_curso_1" name="oregoom_requisitos_curso_1" value="<?php echo get_post_meta($post->ID, 'oregoom_requisitos_curso_1', true); ?>"><br><br>
        <input style="width: 100%!important;" type="text" id="oregoom_requisitos_curso_2" name="oregoom_requisitos_curso_2" value="<?php echo get_post_meta($post->ID, 'oregoom_requisitos_curso_2', true); ?>"><br><br>
        <input style="width: 100%!important;" type="text" id="oregoom_requisitos_curso_3" name="oregoom_requisitos_curso_3" value="<?php echo get_post_meta($post->ID, 'oregoom_requisitos_curso_3', true); ?>"><br><br>
    </div>
    
    <?php
    /*
     * ¿Para quién es este curso?
     */
    ?>
    <div>
        <p class="post-attributes-label-wrapper page-template-label-wrapper">
            <label class="post-attributes-label" for="oregoom_para_quien_curso_1">¿Para quién es este curso?</label>
        </p>
        <input style="width: 100%!important;" type="text" id="oregoom_para_quien_curso_1" name="oregoom_para_quien_curso_1" value="<?php echo get_post_meta($post->ID, 'oregoom_para_quien_curso_1', true); ?>"><br><br>
        <input style="width: 100%!important;" type="text" id="oregoom_para_quien_curso_2" name="oregoom_para_quien_curso_2" value="<?php echo get_post_meta($post->ID, 'oregoom_para_quien_curso_2', true); ?>"><br><br>
        <input style="width: 100%!important;" type="text" id="oregoom_para_quien_curso_3" name="oregoom_para_quien_curso_3" value="<?php echo get_post_meta($post->ID, 'oregoom_para_quien_curso_3', true); ?>"><br><br>
    </div>
    
    <?php
    /*
     * Detalles
     */
    ?>
    <!--<div>
        <p class="post-attributes-label-wrapper page-template-label-wrapper">
            <label class="post-attributes-label" for="oregoom_detalles_curso">Detalles</label>
        </p>
        <input>
        <textarea style="width: 100%!important;" maxlength="80" id="oregoom_descrip_min_curso" name="oregoom_descrip_min_curso"><?php echo get_post_meta($post->ID, 'oregoom_descrip_min_curso', true); ?></textarea>
    </div>-->
    
    <div>
        <p class="post-attributes-label-wrapper page-template-label-wrapper">
            <label class="post-attributes-label" for="oc_valoracion_media">Valoración media</label>
        </p>
        <input value="<?php echo get_post_meta($post->ID, 'oc_valoracion_media', true); ?>" id="oc_valoracion_media" name="oc_valoracion_media" class="regular-text" type="text"  style="width: 100%;">
    </div>
    
    
    <div>
        <p class="post-attributes-label-wrapper page-template-label-wrapper">
            <label class="post-attributes-label" for="oregoom_nivel_curso">* Nivel del Curso</label>
        </p>
        <select name="oregoom_nivel_curso" id="oregoom_nivel_curso" class="components-select-control__input">
            <option value="">Elige un nivel</option>
            <?php        
            $select_nivel_curso = get_post_meta($post->ID, 'oregoom_nivel_curso', true);
            ?>      
            <option <?php selected($select_nivel_curso, 'NB'); ?> value="NB">1. Nivel Básico</option>
            <option <?php selected($select_nivel_curso, 'NI'); ?> value="NI">2. Nivel Intermedio</option>
            <option <?php selected($select_nivel_curso, 'NA'); ?> value="NA">3. Nivel Avanzado</option>
            <option <?php selected($select_nivel_curso, 'TLN'); ?> value="NA">4. Todos los niveles</option>
        </select>
    </div>
    
    
    <div>
        <p class="post-attributes-label-wrapper page-template-label-wrapper">
            <label class="post-attributes-label" for="oregoom_curso_free_premium">* Selecciona el nivel de precio para el curso</label>
        </p>
        <select name="oregoom_curso_free_premium" id="oregoom_curso_free_premium" class="components-select-control__input">
            <option value="">Selecciona el nivel de precio</option>
            <?php        
            $select_nivel_precio = get_post_meta($post->ID, 'oregoom_curso_free_premium', true);
            ?>      
            <option <?php selected($select_nivel_precio, 'FREE'); ?> value="FREE">1. Gratis</option>
            <option <?php selected($select_nivel_precio, 'PREMIUM'); ?> value="PREMIUM">2. Premium</option>
        </select>
    </div>
    
    <?php
    /*
     * URL de Preguntas y Respuestas
     */
    ?>
    <p class="post-attributes-label-wrapper parent-id-label-wrapper">
        <label class="post-attributes-label" for="oregoom_curso_url_preguntas_respuestas">URL de Preguntas y Respuestas del Curso</label>
    </p>
    <input value="<?php echo esc_url(get_post_meta($post->ID, 'oregoom_curso_url_preguntas_respuestas', true)); ?>" id="oregoom_curso_url_preguntas_respuestas" name="oregoom_curso_url_preguntas_respuestas" class="regular-text" type="url">
        
    
    <?php
    }
    
    //function para GUARDAR LOS METABOXES
    function oregoom_cursos_guardar_metaboxes($post_id, $post, $update){
        
        $oc_subtitle = $oc_valoracion_media = $oc_url_preguntas_respuestas = $oc_creado_por = '';
        
        /*
         * Comprobar si el campo tiene valor
         */
        if(isset($_POST['oc_subtitle'])){
            /*
             * Sanitizar el valor de algún ataque con la función => sanitize_text_field();
             */
            $oc_subtitle = sanitize_text_field($_POST['oc_subtitle']);
            
            /*
            * Guardamos los valores de los campos
            * $post_id => el ID del post
            * 'oc_subtitle' => nombre del campo
            * $oc_subtitle => El valor del campo
            */
           update_post_meta($post_id, 'oc_subtitle', $oc_subtitle);
        }
        
        if(isset($_POST['oc_valoracion_media'])){
            $oc_valoracion_media = sanitize_text_field($_POST['oc_valoracion_media']);
            
            update_post_meta($post_id, 'oc_valoracion_media', $oc_valoracion_media);
        }
        
        if(isset($_POST['oregoom_description_curso'])){
            $oc_creado_por = $_POST['oregoom_description_curso'];
            
            update_post_meta($post_id, 'oregoom_description_curso', $oc_creado_por);
        }  
        
        /*
         * ¿Qué aprenderás?
         */
        if(isset($_POST['oregoom_que_aprenderas_curso_1'])){
            $oc_que_aprenderas_1 = $_POST['oregoom_que_aprenderas_curso_1'];
            
            update_post_meta($post_id, 'oregoom_que_aprenderas_curso_1', $oc_que_aprenderas_1);
        }    
        if(isset($_POST['oregoom_que_aprenderas_curso_2'])){
            $oc_que_aprenderas_2 = $_POST['oregoom_que_aprenderas_curso_2'];
            
            update_post_meta($post_id, 'oregoom_que_aprenderas_curso_2', $oc_que_aprenderas_2);
        }    
        if(isset($_POST['oregoom_que_aprenderas_curso_3'])){
            $oc_que_aprenderas_3 = $_POST['oregoom_que_aprenderas_curso_3'];
            
            update_post_meta($post_id, 'oregoom_que_aprenderas_curso_3', $oc_que_aprenderas_3);
        }    
        if(isset($_POST['oregoom_que_aprenderas_curso_4'])){
            $oc_que_aprenderas_4 = $_POST['oregoom_que_aprenderas_curso_4'];
            
            update_post_meta($post_id, 'oregoom_que_aprenderas_curso_4', $oc_que_aprenderas_4);
        }  
        
        /*
         * ¿Requisitos para el curso?
         */
        if(isset($_POST['oregoom_requisitos_curso_1'])){
            $oc_requisitos_1 = $_POST['oregoom_requisitos_curso_1'];
            
            update_post_meta($post_id, 'oregoom_requisitos_curso_1', $oc_requisitos_1);
        }    
        if(isset($_POST['oregoom_requisitos_curso_2'])){
            $oc_requisitos_2 = $_POST['oregoom_requisitos_curso_2'];
            
            update_post_meta($post_id, 'oregoom_requisitos_curso_2', $oc_requisitos_2);
        }    
        if(isset($_POST['oregoom_requisitos_curso_3'])){
            $oc_requisitos_3 = $_POST['oregoom_requisitos_curso_3'];
            
            update_post_meta($post_id, 'oregoom_requisitos_curso_3', $oc_requisitos_3);
        } 
        
        /*
         * ¿Para quién es este curso?
         */
        if(isset($_POST['oregoom_para_quien_curso_1'])){
            $oc_para_quien_1 = $_POST['oregoom_para_quien_curso_1'];
            
            update_post_meta($post_id, 'oregoom_para_quien_curso_1', $oc_para_quien_1);
        }    
        if(isset($_POST['oregoom_para_quien_curso_2'])){
            $oc_para_quien_2 = $_POST['oregoom_para_quien_curso_2'];
            
            update_post_meta($post_id, 'oregoom_para_quien_curso_2', $oc_para_quien_2);
        }    
        if(isset($_POST['oregoom_para_quien_curso_3'])){
            $oc_para_quien_3 = $_POST['oregoom_para_quien_curso_3'];
            
            update_post_meta($post_id, 'oregoom_para_quien_curso_3', $oc_para_quien_3);
        }    
        
        /*
         * Nivel del curso
         */
        if(isset($_POST['oregoom_nivel_curso'])){
            $oc_creado_por = $_POST['oregoom_nivel_curso'];
            
            update_post_meta($post_id, 'oregoom_nivel_curso', $oc_creado_por);
        }    
        
        if(isset($_POST['oregoom_curso_free_premium'])){
            $oc_creado_por = $_POST['oregoom_curso_free_premium'];
            
            update_post_meta($post_id, 'oregoom_curso_free_premium', $oc_creado_por);
        }    
        
        if(isset($_POST['oregoom_descrip_min_curso'])){
            $oc_creado_por = $_POST['oregoom_descrip_min_curso'];
            
            update_post_meta($post_id, 'oregoom_descrip_min_curso', $oc_creado_por);
        }
        
        /*
         * URL de Preguntas y Respuestas
         */
        if(isset($_POST['oregoom_curso_url_preguntas_respuestas'])){
            $oc_url_preguntas_respuestas = $_POST['oregoom_curso_url_preguntas_respuestas'];
            
            update_post_meta($post_id, 'oregoom_curso_url_preguntas_respuestas', $oc_url_preguntas_respuestas);
        }
        
    }
    add_action('save_post', 'oregoom_cursos_guardar_metaboxes',10,3);

















/*
 * METABOXES de Clases
 */

/*
 * Muestra el contenido HTML de los Metaboxes
 */
function oregoom_clase_metaboxes($post){

    /*
     * 
     * Mostra la Lista de todos los Cursos, para mostrar los módulos del curso
     * 
     */
    ?>

<div>
    <p class="post-attributes-label-wrapper page-template-label-wrapper">
        <label class="post-attributes-label" for="oregoom_select_curso_clase">Selecciona un curso (Despues Actualizar)</label>
    </p>
    <select name="oregoom_select_curso_clase" id="oregoom_select_curso_clase" class="components-select-control__input">
        <option value="">Elige un curso</option>
        
        <?php        
        $select_curso_clase = get_post_meta($post->ID, 'oregoom_curso_clase', true);
        ?> 
        
        <?php
                
        /*
         * Lista de todos los cursos
         */
        $list_cursos = new WP_Query( array(
                        'post_type' => 'cursos',
                        'post_parent' => 0,
                        'order'         => 'ASC',
                        'posts_per_page' => 200
        ));
        
        $count_curso = 1;
        
        if($list_cursos->have_posts()){
            
            while($list_cursos->have_posts()){
                $list_cursos->the_post(); 
                
                ?>
                
            <option <?php selected($select_curso_clase, get_the_ID()); ?> value="<?php the_ID(); ?>"><?php echo $count_curso . '. ' . get_the_title(); ?></option> <?php
             
                $count_curso = $count_curso + 1;
        
            }            
        } ?>
             
    </select>
</div>


<?php
    /*
     * CÓDIGO PARA SELECCIONA UN MÓDULO PAR5A LA CLASE
     */

    $id_curso_clase = get_post_meta($post->ID, 'oregoom_curso_clase', true);
    
    if($id_curso_clase){
        
        $id_modulos_curso = new WP_Query( array(
                    'post_type' => 'cursos',
                    'post_parent' => $id_curso_clase,
                    'order'         => 'ASC',
                    'posts_per_page' => 200
            ));
        
        $count_modulos = 1;
        
        if($id_modulos_curso->have_posts()){ ?>
            
            <div>
                <p class="post-attributes-label-wrapper page-template-label-wrapper">
                    <label class="post-attributes-label" for="oregoom_select_modulo_curso">Selecciona un módulo (Despues Actualizar)</label>
                </p>
                <select name="oregoom_select_modulo_curso" id="oregoom_select_modulo_curso" class="components-select-control__input">
                    <option value="">Elige un módulo</option> 
                    
                        <?php

                        while($id_modulos_curso->have_posts()){
                            $id_modulos_curso->the_post();
                            
                            ?>
                    
                            <option <?php selected($post->post_parent, get_the_ID()); ?> value="<?php the_ID(); ?>"><?php echo $count_modulos . '. ' . get_the_title(); ?></option>

                            <?php                           
                            
                            $count_modulos = $count_modulos + 1;

                        } ?>    
                </select>
                    </div>  
            <?php
            
        } else {
            echo '<span style="color: red;">**No existe módulos para este Curso</span>';
        } 
    }



?>




    <p class="post-attributes-label-wrapper parent-id-label-wrapper">
        <label class="post-attributes-label" for="oregoom_clase_url_yt_v">URL de Youtube, Vimeo</label>
    </p>
    <input value="<?php echo esc_url(get_post_meta($post->ID, 'oregoom_clase_url_yt_v', true)); ?>" id="oregoom_clase_url_yt_v" name="oregoom_clase_url_yt_v" class="regular-text" type="url">
    
    <p class="post-attributes-label-wrapper parent-id-label-wrapper">
        <label class="post-attributes-label" for="oregoom_duracion_video">Duración del video</label>
    </p>
    <input value="<?php echo esc_html(get_post_meta($post->ID, 'duracion_video', true)); ?>" id="oregoom_duracion_video" name="oregoom_duracion_video" class="regular-text" type="text" placeholder="02:08">

    <?php
}

//FUNCION PARA GUARDAR LOS METABOXES DE CLASE
function oregoom_clase_guardar_metaboxes($post_id, $post, $update){
    $select_curso_clase = $video_url = $duracion_video = '';
    
    /*
     * Para Guardar el ID del Curso para la Clase
     */
    if(isset($_POST['oregoom_select_curso_clase'])){
        $select_curso_clase = sanitize_text_field($_POST['oregoom_select_curso_clase']);
        
        update_post_meta($post_id, 'oregoom_curso_clase', $select_curso_clase);
    }
    
    
    /*
     * Guardar el módulo para el curso y ademas como parent del clase
     */    
    if(isset($_POST['oregoom_select_modulo_curso'])){
        
        $id_modulo = sanitize_text_field($_POST['oregoom_select_modulo_curso']);
        
        $my_modulo_post = array(
            'ID' => $post_id,
            'post_parent' => $id_modulo
        );    

        remove_action('save_post', 'oregoom_clase_guardar_metaboxes');

        wp_update_post($my_modulo_post);

        add_action('save_post', 'oregoom_clase_guardar_metaboxes');
    }
    
    
    
    
    if(isset($_POST['oregoom_clase_url_yt_v'])){
        $video_url = sanitize_text_field($_POST['oregoom_clase_url_yt_v']);
        $duracion_video = sanitize_text_field($_POST['oregoom_duracion_video']);
        
        update_post_meta($post_id, 'oregoom_clase_url_yt_v', $video_url);
        update_post_meta($post_id, 'duracion_video', $duracion_video);
    }
    
}
add_action('save_post', 'oregoom_clase_guardar_metaboxes', 10, 3);









/*
 * Funcion para saber si el URL es de YouTube o de Vimeo
 */

function oregoom_clase_es_youtube_vimeo($id_clase){
    
    $oregoom_url_youtube_vimeo = esc_url(get_post_meta($id_clase, 'oregoom_clase_url_yt_v', true));
    
    if( ! empty( $oregoom_url_youtube_vimeo )){
        
        $buscarYoutube = 'youtube.com';
        $buscarVimeo = 'vimeo.com';
        
        $resultYoutube = strrpos($oregoom_url_youtube_vimeo, $buscarYoutube);
         
        if ($resultYoutube !== false) {
            
            $restYoutube = explode('=', $oregoom_url_youtube_vimeo); 
          
            
            echo '<amp-youtube data-videoid="'.$restYoutube[1].'" layout="responsive" width="480" height="270"></amp-youtube>';
        
        } else {
            
            $resultVimeo = strrpos($oregoom_url_youtube_vimeo, $buscarVimeo);
            
            if ($resultVimeo !== false) {
            
                $restVimeo = explode('com/', $oregoom_url_youtube_vimeo);
                echo '<amp-vimeo data-videoid="'.$restVimeo[1].'" layout="responsive" width="500" height="281"></amp-vimeo>';

            } else {
                
                return  "Por favor Ingrese URL correcto";
                
            }
            
        }
        
    } else {
        
        return  "Por favor Ingrese el URL del vídeo";
        
    }

}










/*
*
*TEMARIO EN LECCIÓN
*
*
*/

function oregoom_add_temario_curso($ID_curso, $ID_clase, $Temario, $idUser){
    
    
    /*
     * Query de Módulos
     */
    
    $query_modulos_curso_f_clase = new WP_Query ( array(
                                        'post_type'  => 'cursos',
                                        'post_parent'=> $ID_curso,
                                        'orderby'     => 'menu_order',
                                        'order'       => 'ASC',
                                        'posts_per_page' => 200
    ) );
    
    $count_clase = 1;
    $show = "";
    
    if($query_modulos_curso_f_clase->have_posts()){
        
        while ($query_modulos_curso_f_clase->have_posts()){
            $query_modulos_curso_f_clase->the_post();
            
            /*
             * Alamacenar en un variable, para luego imprimir en el apartado de módulos
             */
            $oregoom_id_mods = get_the_ID();
            $oregoom_title_mods = get_the_title();
            
            /*
             * Query de Clases que pertenecen al módulo
             * 
             * Almacenar en un Array, para luego imprimir (Se alamacena para saber cuantas clases Existe para ese módulo)
             * 
             */
            $query_clases_cursos_f_clase = new WP_Query ( array(
                                                    'post_type'   => 'cursos',
                                                    'post_parent' => get_the_ID(),
                                                    'orderby'     => 'menu_order',
                                                    'order'       => 'ASC',
                                                    'posts_per_page' => 200
                   ) ); 
                    
            if($query_clases_cursos_f_clase->have_posts()){
                       
                while($query_clases_cursos_f_clase->have_posts()){
                    $query_clases_cursos_f_clase->the_post();
                    
                    $array_oregoom_mods_clases_id[] = get_the_ID();
                    $array_oregoom_mods_clases_title[] = get_the_title();
                    $array_oregoom_mods_clases_link[] = get_the_permalink();
                    
                    /*
                     * Para darle valor a la Variable Show
                     */
                    if($ID_clase == get_the_ID()){
                        $show = "expanded";
                    }

                }
            }
                       
            
            /*
             * 
             * Contar la cantidad de clases que existe
             * 
             * si el Array tiene valor, asignar la cantidad de datos o simplemente 0
             * 
             */
            if(isset($array_oregoom_mods_clases_id)){
                $cantClaseMod = count($array_oregoom_mods_clases_id);
            }  else {
                $cantClaseMod = 0;
            }          
            
            ?>






            <!--<div class="card border-0 rounded-0" style="background-color: #F0F0F0 !important;">-->
            <div class="card border-0 rounded-0">
                            

                <amp-accordion>
        
                    <section <?php echo $show; ?>>


                        <h4 class="card-header ps-0 pe-0 pt-1 pb-1 rounded-0 bg-dark border-0">
                            <span class="bg-dark btn text-left d-flex justify-content-between align-items-center text-light" style="font-family: 'proxima-nova', Helvetica, Arial, sans-serif;">
                                <span><?php echo $oregoom_title_mods; ?></span><small class="text-center"><?php echo $cantClaseMod; ?> clases</small>
                            </span>
                        </h4>


                        <div>

                            <div class="list-group list-group-flush bg-dark"> <?php
                        
                                if(isset($array_oregoom_mods_clases_id)){ //Si existe valor en este array
                                
                                    for($i=0;$i < count($array_oregoom_mods_clases_id);$i++){

                                        $oregoom_id_clases = $array_oregoom_mods_clases_id[$i];
                                        $oregoom_title_clases = $array_oregoom_mods_clases_title[$i];
                                        $oregoom_link_clases = $array_oregoom_mods_clases_link[$i];

                                            if(is_user_logged_in()){ ?>

                                                <a href="<?php echo $oregoom_link_clases; ?>" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center bg-transparent text-white-50">
                                                    <span class="d-flex align-items-center">
                                                        <?php
                                                        /*
                                                        * Contenido visible únicamente para usuarios SI conectados
                                                        * 
                                                        * 1. Cuando el estudiante completa una clase, el icono cambia de color celeste y el titulo de la clase
                                                        * 2. Cuando el estudiante se encuentra en una clase que no ha completado, el icono es de color de Oregoom y el titulo de la clase
                                                        * 3. por defecto el color del icono y del texto de la clase es Gris.
                                                        * 
                                                        */

                                                        //Si el usuario a completado la Lección
                                                        $IDleccionCompletada = get_user_meta($idUser, $oregoom_id_clases, true); ?>
                                                        <span class="me-1 d-flex align-items-center">
                                                            <svg width="1em" height="1.3em" viewBox="0 1 16 16" class="bi bi-check-circle-fill <?php if($IDleccionCompletada == $oregoom_id_clases){ echo 'text-warning'; } ?>"  style="<?php if($oregoom_id_clases == $ID_clase){ echo 'color: #28a745!important;';} ?>" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                                            </svg>
                                                            <span class="ms-2 <?php if($IDleccionCompletada == $oregoom_id_clases){ echo 'text-warning'; } ?>"  style="<?php if($oregoom_id_clases == $ID_clase){ echo 'color: #28a745!important;';} ?>">
                                                                <small><?php echo $count_clase.'. '; ?></small>
                                                            </span>
                                                        </span>
                                                        <span class="me-2 <?php if($IDleccionCompletada == $oregoom_id_clases){ echo 'text-warning'; } ?>" style="<?php if($oregoom_id_clases == $ID_clase){ echo 'color: #28a745!important;';} ?>">
                                                            <small><?php echo $oregoom_title_clases; ?></small>
                                                        </span>
                                                    </span>
                                                    <small class="<?php if($IDleccionCompletada == $oregoom_id_clases){ echo 'text-warning'; } ?>" style="<?php if($oregoom_id_clases == $ID_clase){ echo 'color: #28a745!important;';} ?>"><?php $duration_video = get_post_meta($oregoom_id_clases, 'duracion_video', true); if($duration_video == ""){echo '00:00';}else{echo $duration_video;} ?></small>
                                                </a> <?php 

                                            } else { ?>

                                                <a href="<?php echo $oregoom_link_clases; ?>" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center bg-transparent text-white-50">
                                                    <span class="d-flex align-items-center">
                                                        <span class="me-2 d-flex align-items-center"><?php 

                                                        // Contenido visible únicamente para usuarios NO conectados  

                                                        /*
                                                        * Lección del Curso
                                                        * 
                                                        * Mostrar los iconos de acuerdo a su condición del curso:                             * 
                                                        * 
                                                        */
                                                        $curso_select_nivel_precio = get_post_meta($ID_curso, 'oregoom_curso_free_premium', true);
                                                        if( ! empty($curso_select_nivel_precio)){
                                                            if($curso_select_nivel_precio == 'FREE'){ ?>
                                                                <svg width="1em" height="1.3em" viewBox="0 1 16 16" class="bi bi-caret-right-fill text-warning" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                                                                </svg>&nbsp;
                                                            <?php  
                                                            } else { ?>
                                                                <svg width="1em" height="1.3em" viewBox="0 1 16 16" class="bi bi-lock-fill text-warning" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M2.5 9a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-7a2 2 0 0 1-2-2V9z"/>
                                                                    <path fill-rule="evenodd" d="M4.5 4a3.5 3.5 0 1 1 7 0v3h-1V4a2.5 2.5 0 0 0-5 0v3h-1V4z"/>
                                                            </svg>&nbsp;
                                                            <?php
                                                            }                                
                                                        } ?>
                                                            <span class="<?php if($oregoom_id_clases == $ID_clase){ echo 'text-warning';} ?>">
                                                                <small><?php echo $count_clase.'. '; ?></small>
                                                            </span>
                                                        </span>
                                                        <span class="me-2 <?php if($oregoom_id_clases == $ID_clase){ echo 'text-warning'; } ?>">
                                                            <small><?php echo $oregoom_title_clases; ?></small>
                                                        </span>
                                                    </span>
                                                    <small class="<?php if($oregoom_id_clases == $ID_clase){ echo 'text-warning';} ?>">
                                                        <?php $duration_video = get_post_meta($oregoom_id_clases, 'duracion_video', true); if($duration_video == ""){echo '00:00';}else{echo $duration_video;} ?>
                                                    </small>
                                                </a> <?php 

                                                } 

                                            $count_clase = $count_clase + 1;

                                            /*
                                            * Eliminar el valor de la variable Show
                                            */
                                            $show = '';

                                    }
                                }
                                
                                /*
                                    * Eliminar los valores de un array
                                    */
                                unset($array_oregoom_mods_clases_id);
                                unset($array_oregoom_mods_clases_title);
                                unset($array_oregoom_mods_clases_link);
                                
                                
                                ?>
                            </div>
                        </div>

                    </section>

                </amp-accordion> 
                    
                    


            </div> <?php       
        
        }
    }    
    
    
}







