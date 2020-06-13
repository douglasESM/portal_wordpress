<!--AQUI VAI O HEADER-->
<?php get_header(); ?>

    <div class="single">

        <?php if (have_posts ()): while (have_posts()): the_post(); ?>

            <span id="titulo"><?php the_title();  ?></span>
            <?php the_content(); ?>

            <span class="tags">
                <?php if (function_exists('the_tags'))the_tags(); ?>
            </span>

            <span class="comentarios">
                <?php comments_template(); ?>
            </span>

        <?php endwhile; else: ?>
        <?php endif; ?>
        
    </div>

    <div id="single_sidebar">
        <?php include (TEMPLATEPATH . '/single_sidebar.php'); ?>
    </div><!--single_sidebar-->

<!--AQUI VAI O FOOTER-->   
<?php get_footer(); ?>