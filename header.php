<!DOCTYPE html>
<html>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<title><?php echo get_bloginfo('name', 'display');?></title>
		<?php wp_head(); ?>
	</head>
	<Body>
		<header>
			<h1><?php echo get_bloginfo('name', 'display');?></h1>
			<h2>{nome da pagina}</h2>
			<hr>
			<nav><?php
					wp_nav_menu();
				?>
			</nav>
			<hr>
		</header>
	
	
