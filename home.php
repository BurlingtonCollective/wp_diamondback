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
					<li><a href="/our-drafts/">Our Drafts</a></li>
					<li><a href="/upcoming-events/">Upcoming Events</a></li>
					<li><a href="/about-us/">About Us</a></li>
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
					<h1>Diamondback Beer</h1>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-6">
				<div class="image-wrapper">
					<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/drafts/growler-cropped.png">
				</div>
				<a href="/our-drafts" class="btn btn-primary btn-block btn-lg">View our exclusive draft</a>
			</div>
			<div class="col-xs-12 col-md-6">
				<p class="lead">Diamondback Beer brewed its inaugural batch on November 6, 2014. In the coming weeks, we will be organizing a series of launch events to promote our 3:30 Amber Ale.</p>
				<p> We hope to be on tap by Thanksgiving in bars and restaurants around the Baltimore area. Please check out our "Upcoming Events" page to learn more about our launch, and where to get a taste of our beer.</p>
				<p>The 3:30 Amber Ale will be available on draft and for Growler fills at select liquor stores.</p>
				<div class="page-header">
					<h4 id="location-heading">Location &amp; Contact</h4>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-6">
					<ul class="address">
						<li>5600 Pennington Avenue</li>
						<li>Baltimore, MD 21226</li>
						<li><a target="_blank" href="https://goo.gl/maps/5qjrt"><i class="glyphicon glyphicon-map-marker"></i> Get Directions</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-6">
					<div class="contact-info">
						<a href="tel:1-443-827-8385" style="display:block;"><i class="glyphicon glyphicon-phone"></i> &nbsp;(443) 827-8385</a>
						<a href="mailto:info@diamondbackbeer.com" style="display:block;"><i class="glyphicon glyphicon-envelope"></i> &nbsp;info@diamondbackbeer.com</a>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-6">
				<div class="page-header">
					<h2>Latest News</h2>
				</div>
				<ul class="media-list">
					<li class="media">
						<a class="pull-left" href="#">
							<div class="media-object">
								<i class="glyphicon glyphicon-comment"></i>
							</div>
							<!-- <img class="media-object" src="images/drafts/bar-scene-thumb.png"> -->
						</a>
						<div class="media-body">
							<h4 class="media-heading">10/01/14</h4>
							<p>Attention all Baltimoreans, Loyola Blakefield and Calvert Hall Alumni, Diamondback Beer fans, and general Turkey Bowl enthusiasts- Sour Hour III sponsored by Diamondback Beer will be back in action early Thanksgiving morning, November 27th, 2014. Spread the word, tell your friends and family and get ready for the return of a Baltimore tradition! Details to follow in the coming weeks!</p>
						</div>
					</li>
					<li class="media">
						<a class="pull-left" href="#">
							<div class="media-object">
								<i class="glyphicon glyphicon-comment"></i>
							</div>
							<!-- <img class="media-object" src="images/drafts/bar-scene-thumb.png"> -->
						</a>
						<div class="media-body">
							<h4 class="media-heading">9/25/14</h4>
							<p>Big shout out to our partner eastern shore brewing for signing multiple contracts as they break into the DC market. We are excited to start brewing with ESB beginning mid-October and hope you are as well!</p>
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
							<h4 class="media-heading">9/24/14</h4>
							<p>Applications to the state and feds have been submitted, kegs have been ordered, more apparel is on the way and Diamondback Beer is excited to announce that production will begin mid-October and the 3:30 amber ale will hit the market in November. Keep your eyes and ears posted for more updates!</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="col-xs-12 col-md-6">
				<div class="page-header">
					<h2>Upcoming Events <a href="/upcoming-events" class="btn btn-default pull-right">See all events</a></h2>
				</div>
				<ul class="media-list">
					<li class="media">
				    <a class="pull-left" href="#">
				      <img class="media-object" src="<?= get_template_directory_uri(); ?>/images/events/rhg.jpg">
				    </a>
				    <div class="media-body">
				      <h4 class="media-heading">Sour Hour III &middot; 11/27/14</h4>
				      <p>Diamondback Beer will be sponsoring a Thanksgiving morning event at The Rowhouse Grille in Federal Hill.  $15 gets you an all-you-can-eat breakfast buffet and bottomless Diamondback Beer until 10am.  Contact us at <a href="mailto:info@diamondbackbeer.com">info@diamondbackbeer.com</a> for further information.</p>
				    </div>
				  </li>
				  <li class="media">
				    <a class="pull-left" href="#">
				      <img class="media-object" src="<?= get_template_directory_uri(); ?>/images/events/brewers-cask.jpg">
				    </a>
				    <div class="media-body">
				      <h4 class="media-heading">Promotional Night &middot; TBD</h4>
				      <p>Diamondback Beer will host a promo night at The Brewer's Cask in Federal Hill.  Stop by and try our 3:30 Amber Ale as well as chat with the owners and brewers!  Date is TBD, so check back soon for more information.</p>
				    </div>
				  </li>
				  <li class="media">
				    <a class="pull-left" href="#">
				      <img class="media-object" src="<?= get_template_directory_uri(); ?>/images/events/diamondback.jpg">
				    </a>
				    <div class="media-body">
				      <h4 class="media-heading">Promotional Night &middot; TBD</h4>
				      <p>Check back for more information on our upcoming promo nights.</p>
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