

		<div id="clear"></div>

		</div><!--Fechamento da div box-->

		<div id="footer_all">    
			
			<div id="footer">
			
				<ul>
					<?php $id_da_categoria = get_cat_id('noticias'); $link_da_categoria = get_category_link($id_da_categoria);?>
					<li><a href="<?php echo $link_da_categoria; ?>" class="noticias">/noticias</a></li>

					<?php $id_da_categoria = get_cat_id('esportes'); $link_da_categoria = get_category_link($id_da_categoria);?>
					<li><a href="<?php echo $link_da_categoria; ?>" class="esportes">/esportes</a></li>

					<?php $id_da_categoria = get_cat_id('entreterimento'); $link_da_categoria = get_category_link($id_da_categoria);?>
					<li><a href="<?php echo $link_da_categoria; ?>" class="entretenimento">/entreterimento</a></li>

					<?php $id_da_categoria = get_cat_id('tecnologia'); $link_da_categoria = get_category_link($id_da_categoria);?>
					<li><a href="<?php echo $link_da_categoria; ?>" class="tecnologia">/tecnologia</a></li>
				</ul>
				
				<div id="footer_txt">
					<a href="<?php echo get_settings('home'); ?>"><img src="<?php bloginfo('template_directory'); ?>/imagens/upnews.png" alt="Desenvilvido por Douglas Morais, Todos os direitos reservados" border="0"></a>
				</div><!--Fechamento da div footer_txt-->
			</div><!--Fechamento da div footer-->

		</div><!--Fechamento da div footer_all-->
		
		<?php wp_footer();?>
	</body>
</html>