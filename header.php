<!doctype html>
<html lang='en' >
<head >
	<meta charset='UTF-8' >
	<meta name='viewport' content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0' >
	<meta http-equiv='X-UA-Compatible' content='ie=edge' >
	<?php wp_head(); ?>
</head >
<body >
<header class='site-header' >
	<div class='contenedor' >
		<div class='barra-navegacion' >
			<div class='logo' >
				<a href='<?= esc_url(site_url( '/' ) )?>' >
					<img src='<?= get_template_directory_uri() ?>/img/logo.svg' alt='Logo sitio' >
				</a >
			</div >

			<?php
				$args = array(
					'theme_location' => 'menu-principal',
					'container' => 'nav',
					'container_class' => 'menu-principal'
				);
				wp_nav_menu( $args );
			?>

		</div >
	</div >
</header >
