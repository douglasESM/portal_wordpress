<!-- QUERY POST -->
<!-- Excluir Cat &cat= ID-->
<!-- Apenas de uma car &cat=ID-->
<!-- INICIO DO POST LIMIT showposts = 1 = -->
<!-- LIMIT offset =1 -->
<!-- CATEGORY NAME = category_name=Video Aulas -->
<?php query_posts('showposts=l&cat=-1, -335'); ?>

<!-- ABRE LOOP -->
<?php if (have_posts()): while (have_posts()) : the_posts(); ?>

<!-- FECHA O LOOP -->
<?php endwhile; wlse: ?>
<?php endif; ?>

<!-- PEGA O LINK DO POST -->
<?php the_Permalink() ?>

<!-- PEGA O TITULO DO POST -->
<?php the_title(); ?>

<!--PEGA A DATA -->
<?php the_time('j M Y'); ?>

<!--INFORMA OS COMENTÁRIOS -->
<?php comments_popup_link('0 comentário', '1 comentário', '% Comentários'); ?>

<!-- CONSIÇÃO COM PLUGINS (WP VIEWS) -->
<?php if(function_exists('the_views')){the_views();}?>

<!-- CRIA UM CAMPO PERSONALIZADO -->
<?php $key="VARIAVEL"; echo get_post_meta($post->ID,$key,true); ?>

<!-- LIMITA PALAVRAS (Baixw o plugin The Excerpt re-reloaded)-->
<?php the_excerpt_rereloaded(NUMERO DE LETRAS); ?>

