<!-- PEGA TODAS AS SUBCATEGORIAS DE UMA CATEGORIA ORGANIZANDO PELO TITULO -->
	<?php wp_list_categories('sort_column=name&child_of=CATEGORIA ID&LIST_li='); ?>

<!-- PEGA A CATEGORIA PELO NOME -->
	<?php 
		$id_da_categoria = get_cat_id('noticias');
		print $id_da_categoria;
		wp_list_categories('sort_column=name&child_of='."$id_da_categoria".'19&title_li='); 
	?>

<DOCUMENTAÇÃO DE CATEGORIAS DO wordpress>
http://codex.wordpress.org/Template_Tags/wp_list_categories

<!-- ARRAY DE CATEGORIAS
http://codex.wordpress.org/Function_Reference/get_the_category-->

<?php $category = get_the_category(); echo $category[ARRAY]->cat_name; ?>