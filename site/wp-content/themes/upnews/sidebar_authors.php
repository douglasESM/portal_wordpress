<ul>
	<li>
		<?php $author = '1'; ?>
		<?php echo get_avatar($author, 50); ?>
		<span>
			<?php $user_info = get_userdata($author);
				echo ($user_info->last_name . ", ". $user_info->first_name . "\n");
			?>
		</span>
		<a href="<?php bloginfo('url'); ?>/?author=<?php echo $author; ?>">/blog do autor</a>                        
	</li>
	
	<li>
		<?php $author = '2'; ?>
		<?php echo get_avatar($author, 50); ?>
		<span>
			<?php $user_info = get_userdata($author);
				echo ($user_info->last_name . ", ". $user_info->first_name . "\n");
			?>
		</span>
		<a href="<?php bloginfo('url'); ?>/?author=<?php echo $author; ?>">/blog do autor</a>                        
	</li>
	
	<li>
		<?php $author = ''; ?>
		<?php echo get_avatar($author, 50); ?>
		<span>
			<?php $user_info = get_userdata($author);
				echo ($user_info->last_name . ", ". $user_info->first_name . "\n");
			?>
		</span>
		<a href="<?php bloginfo('url'); ?>/?author=<?php echo $author; ?>">/blog do autor</a>                        
	</li>
</ul>