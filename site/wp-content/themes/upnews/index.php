<!--AQUI VAI O HEADER-->
<?php get_header(); ?>

<!--AQUI VAI O LEFT SIDEBAR-->
<?php get_sidebar(); ?>

    <div id="content">

        <div id="content_destaque">

            <div id="content_destaque_conteudo">
                <ul>
                    <li>        
                        <?php query_posts('showposts=1&category_name=noticias&offset=1'); ?>                
                        <!-- ABRE LOOP -->
                        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                    
                        <h1><a href="<?php the_Permalink() ?>"><?php the_title(); ?></a></h1>

                        <!-- FECHA O LOOP -->
                        <?php endwhile; else: ?>
                        <?php endif; ?>

                    </li>

                    <li>
                        <ul>
                            <?php query_posts('showposts=2&category_name=noticias&offset=2'); ?>                
                            <!-- ABRE LOOP -->
                            <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                            <li><a href="<?php the_Permalink() ?>"><?php the_title(); ?></a></li>
                            <!-- FECHA O LOOP -->
                            <?php endwhile; else: ?>
                            <?php endif; ?>
                        </ul>
                    </li>

                    <li>
                        <?php query_posts('showposts=1&category_name=noticias&offset=4'); ?>                
                        <!-- ABRE LOOP -->
                        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                        <!-- RESPONSÁVEL PELA FORMATAÇÃO IMAGEM DO POST -->
                        <a href="<?php the_Permalink() ?>"><img src="<?php echo get_settings('home'); ?>/<?php $key="img"; echo get_post_meta($post->ID,$key,true); ?>" 
                        alt="<?php the_title(); ?>" border="0" width='100' height='50' border="0"/></a>

                        <p class="lista"><a href="<?php the_Permalink() ?>"><?php the_title(); ?></a></p>

                        <!-- FECHA O LOOP -->
                        <?php endwhile; else: ?>
                        <?php endif; ?>
                    </li>
                </ul>
            </div><!--FIM content destaque conteudo-->

            <div id="content_destaque_destaque">

                <?php query_posts('showposts=1&category_name=noticias'); ?>                
                <!-- ABRE LOOP -->
                <?php if (have_posts()): while (have_posts()) : the_post(); ?>

                <span><a href="<?php the_Permalink() ?>">Postado em <?php the_time('j M Y'); ?></a></span>
                <!-- RESPONSÁVEL PELA FORMATAÇÃO IMAGEM DO POST DESTAQUES-->
                <a href="<?php the_Permalink() ?>"><img src="<?php echo get_settings('home'); ?>/<?php $key="img"; echo get_post_meta($post->ID,$key,true); ?>"
                alt="<?php the_title(); ?>" border="0" width="350" height="175" border="0"></a>
                <!-- RESPONSÁVEL PELA FORMATAÇÃO TITULO DO POST DESTAQUES-->
                <p><a href="<?php the_Permalink() ?>"><?php the_title(); ?></a></p>

                <!-- FECHA O LOOP -->
                <?php endwhile; else: ?>
                <?php endif; ?>

            </div><!--content_destaque_destaque -->

        </div>

        <!--content_entreterimento-->
        <div id="content_entreterimento">
            <!-- div content_entreterimento_conteudo -->
            <div id="content_entreterimento_conteudo">
                <ul>

                    <?php query_posts('showposts=2&category_name=entreterimento'); ?>                
                    <!-- ABRE LOOP -->
                    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                    
                    <li>
                        <a href="<?php the_Permalink() ?>">
                        <img src="<?php echo get_settings('home'); ?>/<?php $key="img"; echo get_post_meta($post->ID,$key,true); ?>"
                        alt="<?php the_title(); ?>" width="200" height="100" border="0"/></a>
                            
                        <a href="<?php the_Permalink() ?>"><?php the_title(); ?>
                    </li>
                    <!-- FECHA O LOOP -->
                    <?php endwhile; else: ?>
                    <?php endif; ?>
                    
                </ul>                   
            </div><!-- content_entreterimento_conteudo -->

            <div id="content_entreterimento_anuncio">
                <img src="<?php bloginfo('template_directory'); ?>/imagens/anuncio3.png" alt="">
            </div><!--  content_entreterimento_anuncio -->

        </div><!-- fechamento da div content_entreterimento -->

        <!--DIV ESPORTES-->
        <div id="contet_esportes">

            <div id="content_esportes_conteudo">
                <ul>
                    <?php query_posts('showposts=3&category_name=esportes'); ?>                
                    <!-- ABRE LOOP -->
                    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                    
                    <li>
                        <a href="<?php the_Permalink() ?>">
                        <img src="<?php echo get_settings('home'); ?>/<?php $key="img"; echo get_post_meta($post->ID,$key,true); ?>"
                        alt="<?php the_title(); ?>" width="200" height="100" border="0">
                        </a>
                        
                        <h1><a href="<?php the_Permalink() ?>"><?php $category = get_the_category(); echo $category[1]->cat_name; ?></a></h1>
                        <p><a href="<?php the_Permalink() ?>"><?php the_title(); ?></p>
                    </li>

                    <!-- FECHA O LOOP -->
                    <?php endwhile; else: ?>
                    <?php endif; ?>
            
                </ul>

            </div><!--  content_esportes_conteudo -->

            <div id="content_esportes_comentados">
                <h1 class="especial"> + COMENTADOS</h1>
                <ol>
                    <?php $result = $wpdb->get_results("
                    SELECT comment_count,ID,post_title 
                    FROM $wpdb->posts 
                    ORDER BY comment_count DESC 
                    LIMIT 0 , 5");
                    foreach ($result as $post) {
                        setup_postdata($post);
                        $postid = $post->ID;
                        $title = $post->post_title;
                        $commentcount = $post->comment_count;
                    if ($commentcount != 0) { ?>
                        <li>
                            <a href="<?php echo get_permalink($postid); ?>"title="<?php echo $title ?>"> 
                            <?php echo $title ?></a>
                            <?php echo $commentcount ?>
                        </li> 
                    <?php } } ?>
                    
                </ol>
            </div><!-- content_esportes_comentados -->

        </div><!--Fecha div de conteúdos para esportes-->            

        <!--DIV TECNOLOGIA -->                
        <div id="content_tecnologia">
             <!--DESTAQUE TECNOLOGIA-->           
            <div id="content_tecnologia_destaque">
                <?php query_posts('showposts=1&category_name=tecnologia'); ?>                
                <!-- ABRE LOOP -->
                <?php if (have_posts()): while (have_posts()) : the_post(); ?>

                <a href="<?php the_Permalink() ?>">
                    <img src="<?php echo get_settings('home'); ?>/<?php $key="img"; echo get_post_meta($post->ID,$key,true); ?>"
                    alt="<?php the_title(); ?>" border="0">
                </a>

                <p><a href="<?php the_Permalink() ?>"><?php the_title(); ?></p>
                <!-- FECHA O LOOP -->
                <?php endwhile; else: ?>
                <?php endif; ?>
            </div><!--FECHA DIV DESTAQUE TECNOLOGIA-->
            <!--DIV TECNOLOGIA CONTEUDO-->
            <div id="content_tecnologia_conteudo">
                <ul>
                    <?php query_posts('showposts=3&category_name=tecnologia&offset=1'); ?>                
                    <!-- ABRE LOOP -->
                    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

                    <li><a href="<?php the_Permalink() ?>"><?php the_title(); ?></li>

                    <!-- FECHA O LOOP -->
                    <?php endwhile; else: ?>
                    <?php endif; ?>                    

                </ul>
            </div><!--FECHA DIV TECNOLOGIA CONTEUDO-->

        </div><!-- contet_tecnologia -->

        <div id="content_vistos">

            <div id="content_vistos_conteudo">
                <h1>+ vistos</h1>
                
                <?php if (function_exists('get_most_viewed')): ?>
                    <ol>
                        <?php get_most_viewed('post', 5); ?>
                    <ol>
                <?php endif; ?>
                    
                
            </div>

            <div id="content_vistos_anuncio">
                <h1 class="videos">/vídeos</h1>
                <?php query_posts('showposts=1&category_name=videos'); ?>                
                <!-- ABRE LOOP -->
                <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                
                <?php $key="vga"; echo get_post_meta($post->ID,$key,true); ?>   

                <!-- FECHA O LOOP -->
                <?php endwhile; else: ?>
                <?php endif; ?> 
            </div>

        </div><!-- Content Vistos -->

    </div><!--content -->

<?php include (TEMPLATEPATH . '/right_sidebar.php'); ?>

<!--AQUI VAI O FOOTER-->   
<?php get_footer(); ?>