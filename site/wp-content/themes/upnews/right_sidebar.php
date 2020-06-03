<div id="right_sidebar">

	<div id="sidebar_newsletter">

		<h1 class="sidebar_newsletter">/newsletter</h1>

		<div id="formulario_news">
			<label>
				<input type="text/" name="email" id="email">
				<input type="submit" value="Cadastrar" id="cadastrar" class="btn">
				<span>Seu e-mail</span>
			</label>
		</div> <!-- FECHA DIV formulario_news -->
	
		<div id="carregando_news" style="padding: 5px; float: left; display:none;" ><img src="<?php bloginfo('template_directory');?>/imagens/ajax-loader.gif" alt=""> 
		Aguarde, enviando...
		</div> <!-- FECHA DIV carregando_news -->
		
		<div id="retorno" style="padding: 10px; float: left; border:1px  solid #0F0; background: #C1FFD1; width: 168px;                     display: none; font: 14px 'Trebuchet MS', Arial, Helvetica, sans-serif; font-weight: 					  bold; color: #333" >
			
		</div> <!-- FECHA DIV retorno -->
		
	
	</div><!--fim sidebar_newsletter-->

	<div id="sidebar_enquete">

		<h1 class="sidebar_enquete">/Enquete</h1>
		<!-- function que chama o plugin da Enquete -->
		<?php
			if (function_exists('vote_poll') && !in_pollarchive()): ?>
				<ul>
					<li><?php get_poll(); ?></li>
				</ul>

		<?php endif; ?>

	</div><!--fim sidebar_enquete-->

	<!-- DIV responsável pelo parte do siga-nos -->
	<div id="sidebar_siganos"> 		
		<h1 class="sidebar_siganos">/siga a UpNews</h1>                
		<ul>
			<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/imagens/siganos_instagran.png" target="_blank" alt="Siganos no Instagran"></a></li>

			<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/imagens/siganos_twitter.png" target="_blank" alt="Siganos no Twitter"></a></li>

			<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/imagens/siganos_facebook.png" target="_blank" alt="Siganos no Facebook"></a></li>
		</ul>
	</div><!--Fecha div sidebar_siganos-->

	<!-- DIV responsável pelo equipe -->
	<div id="sidebar_equipe">
		<h1 class="sidebar_equipe">/equipe</h1>
		<?php include (TEMPLATEPATH . '/sidebar_authors.php'); ?>

	</div><!--Fecha a div sidebar_equipe-->

	<div id="sidebar_plantao">
		<h1 class="sidebar_plantao">/plantão</h1>
		<ul>
			<li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
			<li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
			<li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
			<li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
			<li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
		</ul>
	</div><!--Fecha a div sidebar_plantao-->

	<div id="sidebar_comentadores">

		<h1 class="sidebar_comentadores">/usuários do mês</h1>
		<ul>
			<li>
				<img src="<?php bloginfo('template_directory'); ?>/imagens/autor.png" alt="" height="48px" width="48px">
				<span>Douglas E. S. Morais</span>                                               
			</li>
			<li>
				<img src="<?php bloginfo('template_directory'); ?>/imagens/autor.png" alt="" height="48px" width="48px">
				<span>Douglas E. S. Morais</span>                                                
			</li>
			<li>
				<img src="<?php bloginfo('template_directory'); ?>/imagens/autor.png" alt="" height="48px" width="48px">
				<span>Douglas E. S. Morais</span>                                                
			</li>
			<li>
				<img src="<?php bloginfo('template_directory'); ?>/imagens/autor.png" alt="" height="48px" width="48px">
				<span>Douglas E. S. Morais</span>                                                
			</li>
			<li>
				<img src="<?php bloginfo('template_directory'); ?>/imagens/autor.png" alt="" height="48px" width="48px">
				<span>Douglas E. S. Morais</span>                                                
			</li>
		</ul>
	</div><!--Fecha a div sidebar_comentadores-->

</div><!--Fecha div right_sidebar -->