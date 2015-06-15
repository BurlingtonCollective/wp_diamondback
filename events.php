<?php
/*
Template Name: Events Page
*/
get_header();
$eventsQuery = new WP_Query(array('post_type'=>'events', 'posts_per_page'=>-1, 'orderby'=>'meta_value', 'meta_key'=>'wpcf-date'));
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
			$index = 0;
			while($eventsQuery->have_posts()): $eventsQuery->the_post();
				if ($index <= 2) : 
					$eventDate = types_render_field('date', array('format'=>'m/d/y'));
		    	$tbdStatus = types_render_field('tbd', array('output'=>'raw'));
		    	$dateString = ($tbdStatus || !$eventDate) ? 'TBD' : $eventDate;
		    	$eventImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
					?>
					<div class="col-xs-12 col-md-4">
						<div class="panel panel-default event-panel">
							<div class="panel-heading">
								<h4 class="panel-title"><?php the_title(); ?> &middot; <?php echo $dateString; ?></h4>
							</div>
							<div class="panel-body">
								<div class="event-image-wrapper" style="background-image: <?= (has_post_thumbnail()) ? 'url(\''.$eventImg[0].'\')' : ''; ?>">
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
				<?php $index++; endif; ?>
			<?php
			endwhile;
			?>
		</div>
		<?php
		endif;
		?>
		<div class="row">
			<div class="col-xs-12">
				<div class="page-header">
					<h3>All Events</h3>
				</div>
			</div>
		</div>
		<?php
		$eventsQuery->rewind_posts();
		if ($eventsQuery->have_posts()) :
		?>
			<div class="row">
				<div class="col-xs-8">
					<ul class="media-list">
						<?php
						while ($eventsQuery->have_posts()) : $eventsQuery->the_post();
							$eventImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
							$eventDate = types_render_field('date', array('format'=>'m/d/y'));
				    	$tbdStatus = types_render_field('tbd', array('output'=>'raw'));
				    	$dateString = ($tbdStatus || !$eventDate) ? 'TBD' : $eventDate;
							?>
						  <li class="media">
						    <a class="pull-left" href="#">
						      <img class="media-object" src="<?= $eventImg[0]; ?>">
						    </a>
						    <div class="media-body">
						      <h4 class="media-heading"><?php the_title(); ?> &middot; <?= $dateString; ?></h4>
						      <div class="wysiwyg-content"><?php the_content(); ?></div>
						    </div>
						  </li>
						<?php endwhile; ?>
					</ul>
				</div>
			</div>
		<?php endif; ?>
	</div>
</section>
<?php
get_footer();
?>