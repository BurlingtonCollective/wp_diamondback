<?php
/*
Template Name: About Page
*/
get_header();
if (have_posts()) : while (have_posts()) : the_post();
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
<section id="about">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/drafts/tap-handles-blur-crop.png">
			</div>
			<div class="col-xs-12">
				<div class="page-header">
					<h3>Diamondback Beer</h3>
				</div>
			</div>
			<div class="col-xs-12 col-md-6">
				<?php the_content(); ?>
				<!-- <p>Longtime friends Tom, Francis, and Colin founded Diamondback Beer in 2013. From our first batch at the University of Maryland to our current production level, we have always strived to create unforgettable beer that everyone can enjoy. Our 3:30 Amber Ale embodies this mission, and offers bold and refreshing flavors for any time of the day. </p>
				<p>As Baltimore natives, we know the dynamic local market offers a great home for our hand crafted ales. We are always looking to expand our reach and bring the 3:30 Amber Ale to our fans. Please contact us to learn more about distribution, pricing, and availability.</p> -->
			</div>
			<div class="col-xs-4 col-md-2">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title" style="text-align:center;">Tom</h3>
					</div>
					<div class="panel-body">
						<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/team/tom.png">
					</div>
				</div>
			</div>
			<div class="col-xs-4 col-md-2">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title" style="text-align:center;">Francis</h3>
					</div>
					<div class="panel-body">
						<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/team/francis.png">
					</div>
				</div>
			</div>
			<div class="col-xs-4 col-md-2">
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
		<div class="row" id="contact-callout">
			<!-- <div class="col-xs-12 visible-xs visible-sm">
				<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/process.png">
			</div> -->
			<div class="col-xs-12 col-md-3">
				<h4 id="location-heading">Location &amp; Contact</h4>
				<ul class="address">
					<li>5600 Pennington Avenue</li>
					<li>Baltimore, MD 21226</li>
					<li><a target="_blank" href="https://goo.gl/maps/5qjrt"><i class="glyphicon glyphicon-map-marker"></i> Get Directions</a></li>
				</ul>
				<a href="tel:1-443-827-8385" class="contact-links"><i class="glyphicon glyphicon-phone"></i> &nbsp;(443) 827-8385</a>
				<a href="mailto:info@diamondbackbeer.com" class="contact-links"><i class="glyphicon glyphicon-envelope"></i> &nbsp;info@diamondbackbeer.com</a>
			</div>
			<div class="col-xs-12 col-md-9 ">
				<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/process.png">
			</div>
		</div>
	</div>
</section>
<?php
endwhile; endif;
get_footer();
?>