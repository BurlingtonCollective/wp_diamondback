<?php
/*
Template Name: About Page
*/
get_header();
?>
<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<div class="page-header">
				<h1>About Us</h1>
			</div>
		</div>
	</div>
</div>
<section>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/drafts/tap-handles-blur-crop.png">
			</div>
			<div class="col-xs-12">
				<div class="page-header">
					<h3>Diamondback Brewing Company</h3>
				</div>
			</div>
			<div class="col-xs-6">
				<p>Longtime friends Tom, Francis, and Colin founded Diamondback Beer in 2013. From our first batch at the University of Maryland to our current production level, we have always strived to create unforgettable beer that everyone can enjoy. Our 3:30 Amber Ale embodies this mission, and offers bold and refreshing flavors for any time of the day. </p>
				<p>As Baltimore natives, we know the dynamic local market offers a great home for our hand crafted ales. We are always looking to expand our reach and bring the 3:30 Amber Ale to our fans. Please visit our “Contact Us” to learn more about distribution, pricing, and availability.</p>
			</div>
			<div class="col-xs-2">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title" style="text-align:center;">Tom</h3>
					</div>
					<div class="panel-body">
						<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/team/tom.png">
					</div>
				</div>
			</div>
			<div class="col-xs-2">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title" style="text-align:center;">Francis</h3>
					</div>
					<div class="panel-body">
						<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/team/francis.png">
					</div>
				</div>
			</div>
			<div class="col-xs-2">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title" style="text-align:center;">Collin</h3>
					</div>
					<div class="panel-body">
						<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/team/collin.png">
					</div>
				</div>
			</div>
		</div>
		<div class="row" style="padding-top: 40px;">
			<div class="col-xs-3">
				<h4 id="location-heading">Location &amp; Contact</h4>
				<ul class="address">
					<li>5600 Pennington Avenue</li>
					<li>Baltimore, MD 21226</li>
					<li><a href="#"><i class="glyphicon glyphicon-map-marker"></i> Get Directions</a></li>
				</ul>
				<a href="tel:1-443-827-8385" class="contact-links"><i class="glyphicon glyphicon-phone"></i> &nbsp;(443) 827-8385</a>
				<a href="mailto:info@diamondbackbeer.com" class="contact-links"><i class="glyphicon glyphicon-envelope"></i> &nbsp;info@diamondbackbeer.com</a>
			</div>
			<div id="contact-callout" class="col-xs-9">
				<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/process.png">
			</div>
		</div>
	</div>
</section>
<?php
get_footer();
?>