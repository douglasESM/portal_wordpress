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

<div id="dados_posts">
    <h1>Dados desta matéria</h1>
</div><!-- fim dados do post -->

<div id="ads_google">
    <h1>Publicidade</h1>
</div><!-- fim anuncios do google -->

<div id="noticias">
    <h1>Noticias</h1>
</div><!--fim relacionados -->