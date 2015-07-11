<?php
/*
Template Name: Locations Page
*/
get_header();
$locationsQuery = new WP_Query(array('post_type'=>'location', 'posts_per_page'=>-1));
$apiKey = 'AIzaSyBMrxH9664-3nIAV15f0Sd2H0xW0nCHF0Q';
?>
<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<div class="page-header">
				<h1>Purchase Locations</h1>
			</div>
		</div>
	</div>
</div>
<section id="locations">
	<div class="container">
		<div id="map" style="height: 500px; width: 100%; border: 4px solid #1c1c1c;"></div>
		<?php
		if($locationsQuery->have_posts()):
		?>
		<div class="row" style="padding-top: 20px;">
			<?php
			while($locationsQuery->have_posts()): $locationsQuery->the_post();
				$name = get_the_title();
				$address = types_render_field('location-address', array('output'=>'raw'));
				$town = types_render_field('location-town', array('output'=>'raw'));
				$state = types_render_field('location-state', array('output'=>'raw'));
				$lat = get_post_meta($post->ID, 'location-lat', true);
				$long = get_post_meta($post->ID, 'location-long', true);
				$placeId = get_post_meta($post->ID, 'location-place-id', true);
				?>
				<div class="col-xs-12 col-sm-4 col-md-3">
					<div class="media location" data-latitude="<?= $lat ?>" data-longitude="<?= $long ?>" data-place="<?= $placeId ?>">
						<div class="media-left">
							<i class="glyphicon glyphicon-map-marker" style="font-size: 32px;"></i>
						</div>
						<div class="media-body">
							<span class="media-heading" style="display: block; font-weight: bold;"><?= $name; ?></span>
							<span style="display: block;"><?= $address; ?></span>
							<span style="display: block;"><?= $town . ', ' . $state; ?></span>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
		<?php endif; ?>
	</div>
</section>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places&amp;v=3.exp&amp;sensor=false&amp;key=<?= $apiKey; ?>"></script>
<?php
get_footer();
?>