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
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false&amp;key=<?= $apiKey; ?>"></script>
		<script type="text/javascript">
			var map,
					geocoder,
					bounds,
					infoWindow,
					markers = [];

			function init() {
				var center = new google.maps.LatLng(38.8951, -77.0367);
				
				geocoder = new google.maps.Geocoder();
				bounds = new google.maps.LatLngBounds();
				infoWindow = new google.maps.InfoWindow();
				map = new google.maps.Map(document.getElementById('map'), {
					zoom: 12,
					center: center
				});

				google.maps.event.addListenerOnce(map, 'tilesloaded', loadMarkers);
				map.fitBounds(bounds);
			}

			function loadMarkers() {
				for(i = 0; i < markers.length; i++) {
					var marker = markers[i];
					setLocation(marker.target, marker.name);
				}
			}

			function setLocation(targetAddress, locationName) {
				var marker;

				geocoder.geocode({
					address: targetAddress
				}, function(results, status) {
					if (status == google.maps.GeocoderStatus.OK) {
						console.log('found');
						marker = new google.maps.Marker({
							map: map,
							position: results[0].geometry.location,
							title: locationName
						});
						marker.setMap(map);
						bounds.extend(marker.getPosition());
						map.setCenter(bounds.getCenter());
						map.fitBounds(bounds);
						if (map.getZoom() > 12) {
							map.setZoom(12);
						} else {
							map.setZoom(map.getZoom() - 1);
						}
						google.maps.event.addListener(marker, 'click', function() {
							console.log('yo');
							infoWindow.setContent(locationName);
							infoWindow.open(map, marker);
						});
					} else {
						console.log('somethings up');
					}
				});
			}

			google.maps.event.addDomListener(window, 'load', init);
			google.maps.event.addDomListener(window, 'resize', init);
		</script>
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
				$geoTarget = $address . ' ' . $town . ', ' . $state;
				?>
				<div class="col-xs-12 col-sm-4 col-md-3">
					<div class="media">
						<div class="media-left">
							<i class="glyphicon glyphicon-map-marker" style="font-size: 32px;"></i>
						</div>
						<div class="media-body">
							<span class="media-heading" style="display: block; font-weight: bold;"><?= $name; ?></span>
							<span style="display: block;"><?= $address; ?></span>
							<span style="display: block;"><?= $town . ', ' . $state; ?></span>
						</div>
					</div>
					<script type="text/javascript">
						markers.push({
							name: "<?= $name; ?>",
							target: "<?= $geoTarget; ?>"
						});
					</script>
				</div>
			<?php endwhile; ?>
		</div>
		<?php endif; ?>
	</div>
</section>
<?php
get_footer();
?>