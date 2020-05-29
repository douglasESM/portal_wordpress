<!--CORRIGINDO THEMA PARA WORDPRESS-->

<!--Correção do topo do CSS-->

/*
Theme Name: Up NEWS
Theme URI: http://www.upinside.com.br
Description: Este foi desenvolvido no Curso Desenvolvendo portais com wordpress da UpInside!
Version: 1.0
Author: Robson V. Leite
Author: URL: http://www.upinside.com.br
Tags: portal
*/

<!--corrigindo link para folha de estilo-->
<style type="text/css" media="screen">
	@import url( <?php bloginfo('stylesheet_url'); ?>);
</style>

<!--pega HEADER E FOOTER-->
<?php get_header(); ?>
<?php get_footer(); ?>

<!--pega sidebar-->
<?php get_sidebar(); ?>



<!--pega arquivo externo-->
<?php include (TEMPLATEPATH . '/arquivo.php'); ?>