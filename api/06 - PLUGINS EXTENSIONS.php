<!-- DOCUMENTAÇÃO DE SCRIPTS EXTERNOS 
 http://codex.wordpress.org/Function_Reference/wp_enquete_script
 -->

 <!-- ENQUETE COM WP-POLLS -->
 <?php
	if (function_exists('vote_poll') && !in_pollarchive()): ?>
	<ul>
		<li><?php get_pull(); ?></li>
	</ul>

<?php endif; ?>

<!-- AUTOR TAGS -->
<?php the_author();?>

<!-- AVATAR -->
<?php echo get_avatar(get_the_author(), 80); ?>

<!-- NOME -->
<?php the_author_firstname(); ?>

<!-- SOBRENOME -->
<?php the_author_lastname(): ?>

<!-- DESCRIÇÃO -->
<?php the_author_description(): ?>

<!-- meta para blog interno -->
<?php the_author_posts_link(): ?>
OU
<a href="<?php bloginfo('usl');?>/?author=<?php the_author_ID();?>">Ver perfil</a>
<!-- SITE DO AUTOR -->
<?php the_author_url(); ?>

<!-- EMAIL DO AUTOR -->
<?php the_author_email(): ?>

<!-- AUTOR NA PG BLOG FORA DE LOOP -->
<?php wp_title('', true); ?>
