<?php
/*
Template Name: Drafts Page
*/
get_header();
?>
<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<div class="page-header">
				<h1>Our Drafts</h1>
			</div>
		</div>
	</div>
</div>
<section class="beer-detail">
	<div class="container">
		<div class="row">
			<div class="col-xs-5">
				<h2 style="margin-top: 0;">3:30 Amber Ale <small style="display:block;"></small></h2>
				<p class="lead">Sometimes you just can't wait 'till 5</p>
				<p>The 3:30 Amber Ale blends a unique selection of hearty malts with citrus hops to create a bold and unforgettable taste.  Our 3:30 Amber goes down smooth yet packs a kick of bold caramel flavors. </p>
				<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> -->
				<h3>Availability</h3>
				<p>Year Round Draft, 1/2 &amp; 1/6 Barrel Kegs</p>
				<!-- <p>Check out our availability map for further information on where to enjoy our 3:30 Amber Ale</p> -->
				<h3>Description</h3>
				<p>American Amber Ale</p>
				<h3>Profile</h3>
				<p>Crisp, Malty, Citrus</p>
				<h3>Composition</h3>
				<ul>
					<li><strong>Malt:</strong> Caramel, Cara-Red, Munich</li>
					<li><strong>Hops:</strong> Columbus, Centennial, Cascade</li>
					<li><strong>ABV:</strong> 5.0%</li>
				</ul>
			</div>
			<div class="col-xs-6 col-xs-push-1">
				<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/drafts/330-amber-crop.png">
				<div class="row">
					<div class="col-xs-6">
						<div class="image-wrapper left">
							<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/drafts/beach.jpg">
						</div>
					</div>
					<div class="col-xs-6">
						<div class="image-wrapper right">
							<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/drafts/grain.jpg">
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- <div class="row">
			<div class="col-xs-12">
				<div class="page-header">
					<h3>Where You Can Purchase</h3>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-4">
				<div class="google-maps">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3162015.6294450653!2d-76.6121893!3d39.2903848!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c803aed6f483b7%3A0x44896a84223e758!2sBaltimore%2C+MD!5e0!3m2!1sen!2sus!4v1414523641720" width="600" height="450" frameborder="0" style="border:0"></iframe>
				</div>
			</div>
			<div class="col-xs-4">
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
				</ul>
			</div>
			<div class="col-xs-4">
				<ul class="media-list">
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
				      <div class="media-object">
				    		<i class="glyphicon glyphicon-map-marker"></i>
				    	</div>
				    </a>
				    <div class="media-body">
				      <h4 class="media-heading">Media heading</h4>
				      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
				    </div>
				  </li>
				</ul>
			</div>
		</div> -->
	</div>
</section>
<?php
get_footer();
?>