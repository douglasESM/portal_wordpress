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

	<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/jquery.js"></script>

	<script type="text/javascript">
		
		$(function(){
			//chama a função quando o botão Cadastrar é clicado
			$("#cadastrar").click(function(){
				//escondento o input
				$("#formulario_news").hide("slow");
				//mostrando o gif de carregamento
				beforeSend:$("#carregando_news").show("slow");
				//armazenando os dados do email em uma variavel
				var email = $("#email").val();
				//enviando e email para um arquivo php fazer a tratativa
				$.post("<?php bloginfo('template_directory');?>/newsletter/form.php",{email: email}, function(pegar_retorno){
					complete:$("#carregando_news").hide("slow");
					$("#retorno").show("slow").text(pegar_retorno);
				});
			});
		});

	</script>

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
			</div><!--Fechamento da div header_search-->

			<div id="header_menu">
				<ul class="menu_paginas">
					
					<li><a href="<?php echo get_settings('home'); ?>">Página inicial</a></li>
					<?php wp_list_pages('title_li=');?>
				</ul>
				<ul class="menu_categorias">
					<?php $id_da_categoria = get_cat_id('noticias'); $link_da_categoria = get_category_link($id_da_categoria);?>
					<li><a href="<?php echo $link_da_categoria; ?>" class="noticias">/noticias</a></li>

					<?php $id_da_categoria = get_cat_id('esportes'); $link_da_categoria = get_category_link($id_da_categoria);?>
					<li><a href="<?php echo $link_da_categoria; ?>" class="esportes">/esportes</a></li>

					<?php $id_da_categoria = get_cat_id('entreterimento'); $link_da_categoria = get_category_link($id_da_categoria);?>
					<li><a href="<?php echo $link_da_categoria; ?>" class="entretenimento">/entreterimento</a></li>

					<?php $id_da_categoria = get_cat_id('tecnologia'); $link_da_categoria = get_category_link($id_da_categoria);?>
					<li><a href="<?php echo $link_da_categoria; ?>" class="tecnologia">/tecnologia</a></li>
				</ul>
			</div><!--Fechamento da div header_menu-->

		</div><!--Fechamento da div header-->