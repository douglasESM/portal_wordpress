<!-- single tags -->

<!--LOOP inicio-->
<?php if (have_posts()): while (have_posts()): the_post(); ?>

<!-- LOOP fim -->
<?php endwhile; else: ?>
<?php endif; ?>

<!-- TITULO -->
<?php the_title ?>

<!-- POST -->
<?php the_content(); ?>

<!-- MORE -->
<?php the_exept(); ?>

<!-- TAGS com condição -->
<?php if (function_exists('the_tags'))the_tags(); ?>

<!-- comment form -->
<?php comments_template(); ?>

<!-- PEGA DATA -->
<?php the_time( 'j M Y' ); ?>

<!-- informa os comentarios -->
<?php comments_popup_link('0 comentários', '1 comentário', '% Comentários'); ?>

<!-- consição com plugin (wp views) -->
<?php if( function_exists('the_views')){the_views();} ?>

<!-- author tags in loop (devem estar dentro do loop do post) -->
<?php the_author(); ?>

<!-- avatar -->
<?php echo get_avatar( get_the_author_id(),80); ?>

<!-- nome -->
<?php the_author_firstname(); ?>

<!-- sobrenome -->
<?php the_author_lastname(); ?>