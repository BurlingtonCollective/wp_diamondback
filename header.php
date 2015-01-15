<!DOCTYPE HTML>
<html>
<head>
	<title><?php wp_title('&#124;','true','right'); ?><?php bloginfo('name'); ?></title>
	<meta property='og:site_name' content='Diamondback Beer' />
	<meta property='og:title' content='Diamondback Beer' />
	<meta property='og:description' content='Diamondback Beer was founded around a love and passion for craft beer. As longtime friends and Baltimore natives, we hope to bring the highest quality craft beer to the Maryland market. ...' />
	<meta property='og:image' content='http://diamondbackbeer.com/uploads/3/3/1/4/3314012/1392348668.png' />
	<meta property='og:url' content='http://diamondbackbeer.com/' />
	<meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
	<meta name="author" content="Zachary Lincoln <zach@burlingtoncollective.com>">
	<?php wp_head(); ?> 
	<link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/master.css?<?= time ( void ); ?>">
</head>
<body>
	<header>
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-nav">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?= get_site_url(); ?>"><img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/logo-full.png"></a>
					<span class="navbar-text navbar-left visible-xs visible-sm">Diamondback Beer</span>
				</div>
				<div class="collapse navbar-collapse" id="top-nav">
					<?php
			    	wp_nav_menu(array(
			    		'menu' => 'nav_left',
			    		'theme_location' => 'nav_left',
			    		'depth' => 2,
			    		'container' => 'div',
			    		'container_class' => '',
			    		'container_id' => 'nav-left',
			    		'menu_class' => 'nav navbar-nav navbar-left',
			    		'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
			    		'walker' => new wp_bootstrap_navwalker()
			    	));
			    ?>
			    <?php
			    	wp_nav_menu(array(
			    		'menu' => 'nav_right',
			    		'theme_location' => 'nav_right',
			    		'depth' => 2,
			    		'container' => 'div',
			    		'container_class' => '',
			    		'container_id' => 'nav-right',
			    		'menu_class' => 'nav navbar-nav navbar-right',
			    		'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
			    		'walker' => new wp_bootstrap_navwalker()
			    	));
			    ?>
				</div>
			</div>
		</nav>
	</header>