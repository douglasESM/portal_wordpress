<div id="dados_autor">

    <h1>Dados do Autor</h1>

    <!-- avatar -->
    <span class="avatar"><?php echo get_avatar( get_the_author(), 80 ); ?></span>
    <!-- nome -->
    <span class="nome"><?php the_author_firstname();?> <?php the_author_lastname(); ?></span>
    <!-- descrição -->
    <p><?php the_author_description(); ?></p>
    <!-- email -->  
    <a href="<?php the_author_email();?>" title="<?php the_author_email();?>">Email</a>
    <!-- site -->
    <a href="<?php the_author_url();?>" title="<?php the_author_url();?>">Site</a>
    <!-- author -->
    <a href="<?php bloginfo('url');?>/author=<?php the_author_id();?>">/Blog</a>

</div><!-- fim dados_autor -->

<div id="dados_post">

    <h1>Dados desta matéria</h1>

    <ul>
    	<li><?php the_time('j M Y'); ?>/</li>
    	<li><?php if(function_exists('the_views')){the_views();} ?></li>
    	<li><?php comments_popup_link('0 comentário', '1 comentário', '% Comentários'); ?></li>

    	<li><a href="<?php the_permalink();?>/rss">RSS do ARTIGO</a></li>
    	<li class="title">Este post está em:</li>
    	<?php the_category( ); ?>
    </ul>

</div><!-- fim dados do post -->

<div id="ads_google">

    <h1>Publicidade</h1>

    <span class="anuncio">
    	<img src="<?php bloginfo('template_directory'); ?>/imagens/anuncio5.png">

    </span>

</div><!-- fim anuncios do google -->

<div id="sidebar_noticias">

    <h1>Noticias</h1>

    <ul>
               
        <?php query_posts('showposts=5'); ?>                
	        <!-- ABRE LOOP -->
	        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
		    	<li> 
		        	<h2><a href="<?php the_Permalink() ?>"><?php the_title(); ?></a></h2>
		        	<span><?php the_time('j M Y'); ?>/<?php if( function_exists('the_views')){the_views();} ?></span>
			</li>
	        <!-- FECHA O LOOP -->
	        <?php endwhile; else: ?>
        <?php endif; ?>

    </ul>

</div><!--fim noticias -->