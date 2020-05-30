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

        <div id="content_entreterimento">

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

                    <!--li>
                        <a href="#"><img src="<?php bloginfo('template_directory'); ?>/midias/ilustra-300.png" alt="" width="200" height="100" border="0"/></a>
                        <a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a>
                    </li-->
                </ul>                   
            </div><!-- content_entreterimento_conteudo -->

            <div id="content_entreterimento_anuncio">
                <img src="<?php bloginfo('template_directory'); ?>/imagens/anuncio3.png" alt="">
            </div><!--  content_entreterimento_anuncio -->

        </div><!-- content_entreterimento -->

        <div id="contet_esportes">

            <div id="content_esportes_conteudo">
                <ul>
                    <li>
                        <a href="#"><img src="<?php bloginfo('template_directory'); ?>/midias/ilustra-300.png" alt="" width="200" height="100" border="0"></a>
                        <h1><a href="#">Futebol</a></h1>
                        <p><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></p>
                    </li>

                    <li>
                        <a href="#"><img src="<?php bloginfo('template_directory'); ?>/midias/ilustra-300.png" alt="" width="200" height="100" border="0"></a>
                        <h1><a href="#">Futebol</a></h1>
                        <p><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></p>
                    </li>

                    <li>
                        <a href="#"><img src="<?php bloginfo('template_directory'); ?>/midias/ilustra-300.png" alt="" width="200" height="100" border="0"></a>
                        <h1><a href="#">Futebol</a></h1>
                        <p><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></p>
                    </li>
                </ul>

            </div><!--  content_esportes_conteudo -->

            <div id="content_esportes_comentados">
                <h1 class="especial"> + COMENTADOS</h1>
                <ol>
                    <li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
                    <li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
                    <li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
                    <li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
                    <li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
                </ol>
            </div><!-- content_esportes_comentados -->

        </div><!--Fecha div de conteúdos para esportes-->            

        <div id="content_tecnologia">

            <div id="content_tecnologia_destaque">
                <a href="#"><img src="<?php bloginfo('template_directory'); ?>/midias/ilustra-300.png" alt="" border="0"></a>
                <p><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></p>
            </div>

            <div id="content_tecnologia_conteudo">
                <ul>
                    <li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
                    <li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
                    <li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
                </ul>
            </div>

        </div><!-- contet_tecnologia -->

        <div id="content_vistos">

            <div id="content_vistos_conteudo">
                <h1>+ vistos</h1>
                
                <ol>
                    <li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
                    <li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
                    <li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
                    <li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
                    <li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
                </ol>
            </div>

            <div id="content_vistos_anuncio">
                <h1 class="videos">/vídeos</h1>
                
                <iframe width="300" 
                        height="225" 
                        src="https://www.youtube.com/embed/WEsk3qVQQ4c" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                </iframe>
            </div>

        </div><!-- Content Vistos -->

    </div><!--content -->

<?php include (TEMPLATEPATH . '/right_sidebar.php'); ?>

<!--AQUI VAI O FOOTER-->   
<?php get_footer(); ?>





        
        
