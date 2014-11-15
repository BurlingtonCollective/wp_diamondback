<?php
/*
Template Name: Home Page
*/
get_header();
if (have_posts()) : while (have_posts()) : the_post();
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
				</ul>
				<ul class="nav navbar-nav">
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
				<a href="<?php echo get_page_link( get_page_by_title( 'Our Drafts' )->ID ); ?>" class="btn btn-primary btn-block btn-lg">View our exclusive draft</a>
			</div>
			<div class="col-xs-12 col-md-6">
				<?php the_content(); ?>
				<!-- <p class="lead">Diamondback Beer brewed its inaugural batch on November 6, 2014. In the coming weeks, we will be organizing a series of launch events to promote our 3:30 Amber Ale.</p>
				<p> We hope to be on tap by Thanksgiving in bars and restaurants around the Baltimore area. Please check out our "Upcoming Events" page to learn more about our launch, and where to get a taste of our beer.</p>
				<p>The 3:30 Amber Ale will be available on draft and for Growler fills at select liquor stores.</p> -->
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
<?php
endwhile; endif;
?>
<section>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-6">
				<?php
				$newsQuery = new WP_Query(array('post_type'=>'news', 'posts_per_page'=>3, 'orderby'=>'meta_value', 'meta_key'=>'wpcf-date'));
				if($newsQuery->have_posts()):
				?>
				<div class="page-header">
					<h2>Latest News</h2>
				</div>
				<ul class="media-list">
					<?php
					while($newsQuery->have_posts()): $newsQuery->the_post();
					?>
					<li class="media">
						<a class="pull-left" href="#">
							<div class="media-object">
								<i class="glyphicon glyphicon-comment"></i>
							</div>
							<!-- <img class="media-object" src="images/drafts/bar-scene-thumb.png"> -->
						</a>
						<div class="media-body">
							<h4 class="media-heading"><?php the_title(); ?></h4>
							<div class="wysiwyg-content">
								<?php the_content(); ?>
							</div>
						</div>
					</li>
					<?php
					endwhile;
					?>
				</ul>
				<?php
				endif;
				?>
			</div>
			<div class="col-xs-12 col-md-6">
				<?php
				$eventsQuery = new WP_Query(array('post_type'=>'events', 'posts_per_page'=>3, 'orderby'=>'meta_value', 'meta_key'=>'wpcf-date'));
				if($eventsQuery->have_posts()):
				?>
				<div class="page-header">
					<h2>Upcoming Events <a href="/upcoming-events" class="btn btn-default pull-right">See all events</a></h2>
				</div>
				<ul class="media-list">
					<?php
					while($eventsQuery->have_posts()): $eventsQuery->the_post();
					?>
					<li class="media clearfix">
				    <a class="pull-left" href="#">
				    	<?php
				    	if(has_post_thumbnail()):
				    	?>
				    	<?php the_post_thumbnail('full', array('class'=>'media-object')); ?>
				      <!-- <img class="media-object" src="<?= get_template_directory_uri(); ?>/images/events/rhg.jpg"> -->
				      <?php
				      else:
				      ?>


				    	<?php
				    	endif;
				    	?>
				    </a>
				    <div class="media-body">
				    	<?php
				    	$eventDate = types_render_field('date', array('format'=>'m/d/y'));
				    	$dateString = $eventDate ? $eventDate : 'TBD';
				    	?>
				      <h4 class="media-heading"><?php the_title(); ?> &middot; <?php echo $dateString; ?></h4>
				      <div class="wysiwyg-content">
				      	<?php the_content(); ?>
				      </div>
				    </div>
				  </li>
				  <?php
				  endwhile;
				  ?>
				</ul>
				<?php
				endif;
				?>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();
?>