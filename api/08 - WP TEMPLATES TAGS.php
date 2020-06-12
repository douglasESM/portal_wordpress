<!-- SINGLE TAGS -->

<!-- LOOP inicio -->
<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<!-- LOOP fim -->
<?php endwhile; else: ?>
<?php endif; ?>

<!-- TITULO -->
<?php the_title(); ?>

<!-- POST -->
<?php the_content(); ?>

<!-- MORE -->
<?php the_expert(); ?>

<!-- TAGS com condição -->
<?php if (function_exists('the_tags'))the_tags(); ?>

<!-- Comment form -->
<?php comments_template(); ?>

<!-- Pega data-->
<?php the_time('j M Y'); ?>

