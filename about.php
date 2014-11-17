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
				<img class="img-responsive" src="<?= types_render_field('top-banner', array('raw'=>true)); ?>">
			</div>
			<div class="col-xs-12">
				<div class="page-header">
					<h3>Diamondback Beer</h3>
				</div>
			</div>
			<div class="col-xs-12 col-md-6">
				<?php the_content(); ?>
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
				<img class="img-responsive" src="<?= types_render_field('bottom-banner', array('raw'=>true)); ?>">
			</div>
		</div>
	</div>
</section>
<?php
endwhile; endif;
get_footer();
?>