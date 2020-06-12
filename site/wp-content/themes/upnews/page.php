<!--AQUI VAI O HEADER-->
<?php get_header(); ?>

<!--AQUI VAI O LEFT SIDEBAR-->
<?php get_sidebar(); ?>

    <div id="content">
        <div class="page">

            <?php if (have_posts ()): while (have_posts()): the_post(); ?>

                <span id="titulo"><?php the_title();  ?></span>
                <?php the_content(); ?>

            <?php endwhile; else: ?>
            <?php endif; ?>
            
        </div>
    </div><!--content -->

<?php include (TEMPLATEPATH . '/right_sidebar.php'); ?>

<!--AQUI VAI O FOOTER-->   
<?php get_footer(); ?>