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

        /*if($pageTemplate == 'templates/template-cursos.php' )
        {*/
            add_meta_box( 'oregoom_cursos_meta_box', 'Detalles del Curso', 'oregoom_cursos_metaboxes', 'cursos', 'normal', 'high', null );
        /*}*/
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
}

//function para GUARDAR LOS METABOXES
function oregoom_cursos_guardar_metaboxes($post_id, $post, $update){
    
    $oc_subtitle = $oc_valoracion_media = $oc_creado_por = '';
    
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
    
}
add_action('save_post', 'oregoom_cursos_guardar_metaboxes',10,3);