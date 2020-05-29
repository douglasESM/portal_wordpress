<div id="sidebar_left">
	<h1 class="noticias">/noticias</h1>
	<ul>		
		<?php 
			$id_da_categoria = get_cat_id('noticias');
			wp_list_categories('sort_column=name&child_of='."$id_da_categoria".'&title_li='); 
		?>
	</ul>

	<h1 class="esportes">/esportes</h1>
	<ul>
		<?php 
			$id_da_categoria = get_cat_id('esportes');
			wp_list_categories('sort_column=name&child_of='."$id_da_categoria".'&title_li='); 
		?>
	</ul>

	<h1 class="entreterimento">/entreterimento</h1>
	<ul>
		<?php 
			$id_da_categoria = get_cat_id('entreterimento');
			wp_list_categories('sort_column=name&child_of='."$id_da_categoria".'&title_li='); 
		?>
	</ul>

	<h1 class="tecnologia">/tecnologia</h1>
	<ul>
		<?php 
			$id_da_categoria = get_cat_id('tecnologia');
			wp_list_categories('sort_column=name&child_of='."$id_da_categoria".'&title_li='); 
		?>
	</ul>

	<h1 class="especial">/especial</h1>
	<ul>
		<?php 
			$id_da_categoria = get_cat_id('especial');
			wp_list_categories('sort_column=name&child_of='."$id_da_categoria".'&title_li='); 
		?>
	</ul>

	<div id="left_adsence">
		<img src="<?php bloginfo('template_directory'); ?>/imagens/anuncio2.png"/>
	</div>
</div><!--Fecha a left sidebar-->