single tags

<!--LOOP inicio-->
<?php if (have_posts()): while (have_posts()): the_post(); ?>

<!-- LOOP fim -->
<?php endwhile; else: ?>
<?php endif; ?>

<!-- TITULO -->
<?php the_title ?>

<!-- POST -->
<?php the_content(); ?>

<!-- more -->
<?php the_exept(); ?>

<!-- TAGS com condição -->
<?php if (function_exists('the_tags'))the_tags(); ?>

<!-- comment form -->
<?php comments_template(); ?>

<!-- PEGA DATA -->
<?php the_time( 'j M Y' ); ?>