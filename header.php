<!DOCTYPE HTML>
<html>
<head>
	<title>Diamondback Beer</title>
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
					<a class="navbar-brand" href="/"><img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/logo-full.png"></a>
					<span class="navbar-text navbar-left visible-xs visible-sm">Diamondback Beer</span>
				</div>
				<div class="collapse navbar-collapse" id="top-nav">
					<ul class="nav navbar-nav navbar-left">
						<li><a href="/our-drafts/">Our Drafts</a></li>
						<li><a href="/upcoming-events/">Upcoming Events</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="/about-us/">About Us</a></li>
						<li><a href="#" data-toggle="modal" data-target="#contact-modal">Contact Us</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>