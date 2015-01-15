<?php
/*
Template Name: Events Page
*/
get_header();
$eventsQuery = new WP_Query(array('post_type'=>'events', 'posts_per_page'=>3, 'orderby'=>'meta_value', 'meta_key'=>'wpcf-date'));
?>
<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<div class="page-header">
				<h1>Upcoming Events</h1>
			</div>
		</div>
	</div>
</div>
<section id="upcoming-events">
	<div class="container">
		<?php
		if($eventsQuery->have_posts()):
		?>
		<div class="row" id="event-callouts">
			<?php
			while($eventsQuery->have_posts()): $eventsQuery->the_post();
			$eventDate = types_render_field('date', array('format'=>'m/d/y'));
    	$tbdStatus = types_render_field('tbd', array('output'=>'raw'));
    	$dateString = ($tbdStatus || !$eventDate) ? 'TBD' : $eventDate;
			?>
			<div class="col-xs-12 col-md-4">
				<div class="panel panel-default event-panel">
					<div class="panel-heading">
						<h4 class="panel-title"><?php the_title(); ?> &middot; <?php echo $dateString; ?></h4>
					</div>
					<div class="panel-body">
						<div class="event-image-wrapper" style="background-image: <?php echo (has_post_thumbnail()) ? 'url(\''.wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full')[0].'\')' : ''; ?>">
							<?php
				    	if(!has_post_thumbnail()):
				    	?>
			    		<i class="glyphicon glyphicon-map-marker"></i>
				    	<?php
				    	endif;
				    	?>
						</div>
						<div class="wysiwyg-content">
			      	<?php the_content(); ?>
			      </div>
					</div>
					<div class="panel-footer">
						<p style="font-size: .8em;"><i class="glyphicon glyphicon-map-marker"></i> <?= types_render_field('address', array('output'=>'raw')); ?></p>
						<a target="_blank" href="<?= types_render_field('google-map-link', array('output'=>'raw')); ?>" class="btn btn-default btn-sm btn-block">Get Directions</a>
					</div>
				</div>
			</div>
			<?php
			endwhile;
			?>
		</div>
		<?php
		endif;
		?>
		<!-- <div class="row">
			<div class="col-xs-12">
				<div class="page-header">
					<h3>All Events</h3>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-8">
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
				  <li class="media">
				    <a class="pull-left" href="#">
				      <img class="media-object" src="images/drafts/bar-scene-thumb.png">
				    </a>
				    <div class="media-body">
				      <h4 class="media-heading">Brewfest &middot; 10/9/14</h4>
				      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
				    </div>
				  </li>
				  <li class="media">
				    <a class="pull-left" href="#">
				      <img class="media-object" src="images/drafts/bar-scene-thumb.png">
				    </a>
				    <div class="media-body">
				      <h4 class="media-heading">Brewfest &middot; 10/9/14</h4>
				      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
				    </div>
				  </li>
				  <li class="media">
				    <a class="pull-left" href="#">
				      <img class="media-object" src="images/drafts/bar-scene-thumb.png">
				    </a>
				    <div class="media-body">
				      <h4 class="media-heading">Brewfest &middot; 10/9/14</h4>
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