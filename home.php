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
					<li><a href="/wordpress/our-drafts/">Our Drafts</a></li>
					<li><a href="/wordpress/upcoming-events/">Upcoming Events</a></li>
					<li><a href="/wordpress/about-us/">About Us</a></li>
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
					<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/drafts/growler-cropped.png">
				</div>
				<a href="drafts.html" class="btn btn-primary btn-block btn-lg">View our exclusive draft</a>
			</div>
			<div class="col-xs-6">
				<p class="lead">Diamondback Beer brewed its inaugural batch on November 6, 2014. In the coming weeks, we will be organizing a series of launch events to promote our 3:30 Amber Ale.</p>
				<p> We hope to be on tap by Thanksgiving in bars and restaurants around the Baltimore area. Please check out our "Upcoming Events" page to learn more about our launch, and where to get a taste of our beer.</p>
				<p>The 3:30 Amber Ale will be available on draft and for Growler fills at select liquor stores.</p>
				<div class="page-header">
					<h4 id="location-heading">Location &amp; Contact</h4>
				</div>
				<div class="row">
					<div class="col-xs-6">
					<ul class="address">
						<li>5600 Pennington Avenue</li>
						<li>Baltimore, MD 21226</li>
						<li><a href="#"><i class="glyphicon glyphicon-map-marker"></i> Get Directions</a></li>
					</ul>
				</div>
				<div class="col-xs-6">
					<a href="tel:1-443-827-8385" style="display:block;"><i class="glyphicon glyphicon-phone"></i> &nbsp;(443) 827-8385</a>
					<a href="mailto:info@diamondbackbeer.com" style="display:block;"><i class="glyphicon glyphicon-envelope"></i> &nbsp;info@diamondbackbeer.com</a>
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