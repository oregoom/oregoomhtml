
<?php
/*
 * Template name: Oregoom: Módulo
 * Template Post Type: cursos
 */

$pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);

if($pageTemplate == 'templates/template-modulo.php'){
    
    /*
     * A que página pertenece
     */
    $page_parent =  $post->post_parent;    
    
    /*
     * Si el valor de "page_parent" es mayor que 0
     * Redirigir a la página padre
     */
    if($page_parent > 0){
        
        wp_redirect(get_the_permalink($page_parent));
        exit();
        
    }    
}