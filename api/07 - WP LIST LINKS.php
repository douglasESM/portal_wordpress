<!-- LIST LINKS
http://codex.wordpress.org
-->
<!-- PAGE LINK / NOME / LI -->
<?php wp_list_pages('title_li=');?>

<!-- CATEGORIA LINK / LInk dacategoria -->
<?php 
	$id_da_pagina = get_cat_id('CATEGORIA NAME');
	$link_da_categoria = get_category_link($id_da_categoria);
?>
