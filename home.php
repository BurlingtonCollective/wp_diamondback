<?php
/*
Template Name: Home Page
*/
get_header();
?>
<section id="home-hero">
	<img id="hero-logo" class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/logo-full.png">
	<nav class="navbar navbar-default" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#hero-nav">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="hero-nav">
				<ul class="nav navbar-nav">
					<li><a href="drafts.html">Our Drafts</a></li>
					<li><a href="events.html">Upcoming Events</a></li>
					<li><a href="about.html">About Us</a></li>
					<li><a href="#" data-toggle="modal" data-target="#contact-modal">Contact Us</a></li>
				</ul>
			</div>
		</div>
	</nav>
</section>
<section id="home-about-us">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="page-header">
					<h1>Diamondback Brewing Company</h1>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<div class="image-wrapper">
					<img class="img-responsive" src="images/drafts/growler-cropped.png">
				</div>
				<a href="drafts.html" class="btn btn-primary btn-block btn-lg">View our exclusive draft</a>
			</div>
			<div class="col-xs-6">
				<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<div class="page-header">
					<h4 id="location-heading">Location &amp; Contact</h4>
				</div>
				<div class="row">
					<div class="col-xs-6">
					<ul class="address">
						<li>123 Example St.</li>
						<li>Somewhere, VT 05673</li>
						<li><a href="#"><i class="glyphicon glyphicon-map-marker"></i> Get Directions</a></li>
					</ul>
				</div>
				<div class="col-xs-6">
					<a href="#" style="display:block;"><i class="glyphicon glyphicon-phone"></i> &nbsp;(555) 555-5555</a>
					<a href="#" style="display:block;"><i class="glyphicon glyphicon-envelope"></i> &nbsp;info@diamondbackbeer.com</a>
				</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="row">
			<div class="col-xs-6">
				<div class="page-header">
					<h2>Latest News</h2>
				</div>
				<ul class="media-list">
					<li class="media">
						<a class="pull-left" href="#">
							<img class="media-object" src="images/drafts/bar-scene-thumb.png">
						</a>
						<div class="media-body">
							<h4 class="media-heading">Media heading</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
						</div>
					</li>
					<li class="media">
						<a class="pull-left" href="#">
							<div class="media-object">
								<i class="glyphicon glyphicon-comment"></i>
							</div>
							<!-- <img class="media-object" src="http://placehold.it/64x64"> -->
						</a>
						<div class="media-body">
							<h4 class="media-heading">Media heading</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
						</div>
					</li>
					<li class="media">
						<a class="pull-left" href="#">
							<img class="media-object" src="images/drafts/bar-scene-thumb.png">
						</a>
						<div class="media-body">
							<h4 class="media-heading">Media heading</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="col-xs-6">
				<div class="page-header">
					<h2>Upcoming Events <a href="events.html" class="btn btn-default pull-right">See all events</a></h2>
				</div>
				<ul class="media-list">
					<li class="media">
						<a class="pull-left" href="#">
							<img class="media-object" src="images/drafts/bar-scene-thumb.png">
						</a>
						<div class="media-body">
							<h4 class="media-heading">Media heading</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
						</div>
					</li>
					<li class="media">
						<a class="pull-left" href="#">
							<div class="media-object">
								<i class="glyphicon glyphicon-map-marker"></i>
							</div>
						</a>
						<div class="media-body">
							<h4 class="media-heading">Media heading</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
						</div>
					</li>
					<li class="media">
						<a class="pull-left" href="#">
							<img class="media-object" src="images/drafts/bar-scene-thumb.png">
						</a>
						<div class="media-body">
							<h4 class="media-heading">Media heading</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();
?>