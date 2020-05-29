<!--CORRIGINDO TITULO WP>
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

<!--CORREÇÃO PARA INCLUIR SCRIPTS DOS PLUGINS-->
<!--COLOQUE LOGO ACIMA DO FECHAMENTO DA TAG HEAD-->
<?php wp_head();?>
</head>

<!-- COLOQUE LOGO ACIMA DO FECHAMENTO DA TAG BODY-->
<?php wp_footer();?>
</body>
<!-- CORREÇÃO DO LINK PARA TEMPLATE-->
<?php bloginfo('template_directory'); ?>

<!-- CORREÇÃO DO LINK PARA HOME-->
<?php echo get_settings('home'); ?>

<DOCUMENTAÇÃO>
