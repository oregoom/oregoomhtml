<?php
if ( ! defined( 'ABSPATH' ) ) exit;



/*
 * MetaBoxes para seleccionar el tipo de entrada, por ejemplo
 * 1.- Curso
 * 2.- Módulo
 * 3.- Clase
 * 
 * Al elegir una de estas opciones mostraremos los campos para
 * ingresar los datos correspondientes.
 * 
 * 1.- CURSO: Subtítulo, Descripción, Descripción Mini del Curso, 
 * Nivel del Curso (Básico, Intermedio o Avanzado), Precio (Gratis o Premium).
 * 
 * 2.- MÓDULO: Elegir el curso
 * 
 * 3.- CLASE: Elegir el curso, elegir el módulo, detalles de la clase (URL de YouTube o Vimeo,
 * Duración)
 * 
 */





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
 * METABOXES de Módulo
 */


/*
 * Muestra el contenido HTML de los Metaboxes
 */
function oregoom_modulo_metaboxes($post){
    /*
     * 
     * Mostra la Lista de todos los Cursos, para asignar el módulo a un Cursos
     * 
     */
    ?>

<div>
    <p class="post-attributes-label-wrapper page-template-label-wrapper">
        <label class="post-attributes-label" for="oregoom_select_curso">Selecciona un curso para este módulo</label>
    </p>
    <select name="oregoom_select_curso" id="oregoom_select_curso" class="components-select-control__input">
        <option value="">Elige un curso</option>
        
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
                
        <option <?php selected($post->post_parent, get_the_ID()); ?> value="<?php the_ID(); ?>"><?php echo $count_curso . '. ' . get_the_title(); ?></option> <?php
             
                $count_curso = $count_curso + 1;
        
            }            
        } ?>
             
    </select>
</div>
    
    
    
    <?php
}

//FUNCION PARA GUARDAR LOS METABOXES DE MÓDULO
function oregoom_modulo_guardar_metaboxes($post_id, $post, $update){
    $id_cursos = '';
    
        
    
    
    if(isset($_POST['oregoom_select_curso'])){
        
        $id_curso = sanitize_text_field($_POST['oregoom_select_curso']);
        
        $my_modulo_post = array(
            'ID' => $post_id,
            'post_parent' => $id_curso
        );    

        remove_action('save_post', 'oregoom_modulo_guardar_metaboxes');

        wp_update_post($my_modulo_post);

        add_action('save_post', 'oregoom_modulo_guardar_metaboxes');
    }
    
}
add_action('save_post', 'oregoom_modulo_guardar_metaboxes', 10, 3);
