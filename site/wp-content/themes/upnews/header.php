<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
	<?php
		if (is_home()){
			bloginfo('name');
		}elseif (is_category()){
			single_cat_title(); 
			echo ' -  '; 
			bloginfo('name');
		}elseif (is_single()){
			single_post_title();
		}elseif (is_page()){
			bloginfo('name');
			echo ': ';
			single_post_title();
		}else{
			wp_title('', true);
		}
	?>
	
</title>
    <!--CSS Manual-->
    <style type="text/css" media="screen">
		@import url( <?php bloginfo('stylesheet_url'); ?>);
	</style>
<?php wp_head();?>    
</head>
<body>
    <div id="box">

		<div id="header">
			<div id="header_logo">
			   <a href="<?php echo get_settings('home'); ?>" title="UpNews"><img src="<?php bloginfo('template_directory'); ?>/imagens/upnews.png" alt="UpNews" border="0"/></a>
			</div><!--Fechamento da div header_logo-->

			<div id="header_anuncio">
				<img src="<?php bloginfo('template_directory'); ?>/imagens/anuncio.png"/>
			</div><!--Fechamento da div header_anuncio-->

			<div id="header_search">
				<form>
					<label>
						<span>O que você procura?</span>
						<input type="text"/>
						<input type="submit" value="" class="btn"/>
					</label>
				</form>
			</div><!--Fechamento da div header_surch-->

			<div id="header_menu">
				<ul class="menu_paginas">
					<li><a href="<?php echo get_settings('home'); ?>">Página inicial</a></li>
					<li><a href="#">Fale conosco</a></li>
					<li><a href="#">Sobre nós</a></li>
				</ul>
				<ul class="menu_categorias">
					<li><a href="#" class="noticias">/noticias</a></li>
					<li><a href="#" class="esportes">/esportes</a></li>
					<li><a href="#" class="entretenimento">/entreterimento</a></li>
					<li><a href="#" class="tecnologia">/tecnologia</a></li>
				</ul>
			</div><!--Fechamento da div header_menu-->

		</div><!--Fechamento da div header-->