<!--AQUI VAI O HEADER-->
<?php get_header(); ?>

    <div class="single">

        <?php if (have_posts ()): while (have_posts()): the_post(); ?>

            <!-- mostra o titulo do post -->
            <span id="titulo"><?php the_title();  ?></span>

            <!-- mostra o conteudo do post -->
            <?php the_content(); ?>

            
            <!-- chama o plugin de comentários -->
            <span class="comentarios">
                <?php comments_template(); ?>
            </span>

        <?php endwhile; else: ?>
        <?php endif; ?>
        
    </div> <!-- single -->

    <div id="single_sidebar">
        <?php include (TEMPLATEPATH . '/single_sidebar.php'); ?>
    </div><!--single_sidebar-->

<!--AQUI VAI O FOOTER-->   
<?php get_footer(); ?>