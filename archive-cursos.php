
<?php get_header(); ?>

<div class="container-fluid bg-dark pt-5 pb-5">    
    <h1 class="text-center text-white" style="font-family: Raleway, sans-serif; font-weight: 700;">Cursos Online</h1> 
    <p class="text-center text-info" style="font-size: 20px;">
        Aprende nuevas tecnologías para el mundo real de manera simple y efectiva
    </p>    
</div>

<div class="container pt-4 pb-5">
    
    <!--<h2 class="text-center h4 pb-4 border-bottom" style="font-family: Raleway, sans-serif; font-weight: 700;">¿Qué quieres aprender hoy?</h2>-->    
    <h2 class="text-center h4 pb-1" style="font-family: Raleway, sans-serif; font-weight: 700;">¿Qué quieres aprender hoy?</h2>    
    
    
    
    <?php
    //CÓDIGO DE PROMOCION

        if ( ! is_user_logged_in()) {
            // Contenido visible únicamente para NO usuarios conectados

            //OregoomDescuentoCursosPremium();

        } 

    ?>
    
    
    
    <!--TAB de Cursos y Especialidades-->    
    <ul class="nav nav-tabs mt-4" id="myTabOregoom" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="cursos-tab" data-toggle="tab" href="#tabcursos" role="tab" aria-controls="cursos" aria-selected="true">Cursos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="especialidades-tab" data-toggle="tab" href="#tabespecialidades" role="tab" aria-controls="especialidades" aria-selected="false">Especialidades</a>
        </li>
    </ul>
    
    <div class="tab-content" id="myTabContent">
        
        <!--Content Cursos-->
        <div class="tab-pane fade show active pt-2" id="tabcursos" role="tabpanel" aria-labelledby="cursos-tab">

            <!--Lista de cursos-->
            <div class="pt-4 row row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-sm-1 row-cols-1">   

            <?php  

            $argsCursos = array(
                'post_parent'   => 0,
                'post_type'     => 'cursos',
                'post_status'   => 'publish',
                'order'         => 'ASC'
            );

            $queryCursos = new WP_Query($argsCursos);

            if($queryCursos->have_posts()){

                while ($queryCursos->have_posts()) : $queryCursos->the_post(); ?>

                    <div class="col pb-5">
                        <div class="card h-100 border-0 shadow">
                            <a href="<?php the_permalink(); ?>">
                                <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full');?>">
                            </a>
                            <div class="card-body pt-0">    
                                <h2 class="card-title" style="line-height: 0.7;">
                                    <a href="<?php the_permalink(); ?>" class="text-dark text-decoration-none" style="font-size: 16px; font-family: Raleway, sans-serif; font-weight: 600; color: #2a3b47;">
                                        <?php the_title(); ?>
                                    </a>
                                </h2>
                                <p class="card-text text-muted"><?php echo esc_html(get_post_meta(get_the_ID(), 'oregoom_descrip_min_curso', true)); ?></p>
                                <p class="card-text"><small class="text-muted"><?php   
                                    switch ($select_nivel_curso = get_post_meta(get_the_ID(), 'oregoom_nivel_curso', true)) {
                                        case 'NB':
                                            echo "Nivel Básico";
                                            break;
                                        case 'NI':
                                            echo "Nivel Intermedio";
                                            break;
                                        case 'NA':
                                            echo "Nivel Avanzado";
                                            break;
                                        case 'TLN':
                                            echo "Todos los niveles";
                                            break;
                                    } ?></small></p>
                            </div>
                            <div class="card-footer border-0 d-flex justify-content-between align-items-center">
                                <?php //oregoom_curso_free_premium($post); ?>
                                <small class="text-dark">Por: <a href="<?php echo the_author_meta('url'); ?>" class="text-muted" target="_blank"><?php the_author(); ?></a></small>
                            </div>
                        </div>
                    </div><?php

                endwhile;
                $queryCursos->reset_postdata();        
            }  ?>

            </div>
            
        </div>
        
        <!--Content Especialidades-->
        <div class="tab-pane fade pt-2" id="tabespecialidades" role="tabpanel" aria-labelledby="especialidades-tab">
        
            Muy Pronto...
            
        </div>
    </div>
    
</div>


    
<?php

get_footer();

