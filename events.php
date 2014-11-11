<?php
/*
Template Name: Events Page
*/
get_header();
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
<section>
	<div class="container">
		<div class="row" id="event-callouts">
			<div class="col-xs-4">
				<div class="panel panel-default event-panel">
					<div class="panel-heading">
						<h4 class="panel-title">Sour Hour III &middot; 11/27/14</h4>
					</div>
					<div class="panel-body">
						<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/events/rhg.jpg" style="margin-bottom: 10px;">
						<p style="margin-bottom: 0px;">Diamondback Beer will be sponsoring a Thanksgiving morning event at The Rowhouse Grille in Federal Hill.  $15 gets you an all-you-can-eat breakfast buffet and bottomless Diamondback Beer until 10am.  Contact us at <a href="mailto:info@diamondbackbeer.com">info@diamondbackbeer.com</a> for further information.</p>
					</div>
					<div class="panel-footer">
						<p style="font-size: .8em;"><i class="glyphicon glyphicon-map-marker"></i> 123 Example Ln, Somewhere VT</p>
						<a class="btn btn-default btn-sm btn-block">Get Directions</a>
					</div>
				</div>
			</div>
			<div class="col-xs-4">
				<div class="panel panel-default event-panel">
					<div class="panel-heading">
						<h4 class="panel-title">Promotional Night &middot; TBD</h4>
					</div>
					<div class="panel-body">
						<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/events/brewers-cask.jpg" style="margin-bottom: 10px;">
						<p style="margin-bottom: 0px;">Diamondback Beer will host a promo night at The Brewer's Cask in Federal Hill.  Stop by and try our 3:30 Amber Ale as well as chat with the owners and brewers!  Date is TBD, so check back soon for more information.</p>
					</div>
					<div class="panel-footer">
						<p style="font-size: .8em;"><i class="glyphicon glyphicon-map-marker"></i> 123 Example Ln, Somewhere VT</p>
						<a class="btn btn-default btn-sm btn-block">Get Directions</a>
					</div>
				</div>
			</div>
			<div class="col-xs-4">
				<div class="panel panel-default event-panel">
					<div class="panel-heading">
						<h4 class="panel-title">Promotional Night &middot; TBD</h4>
					</div>
					<div class="panel-body">
						<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/events/diamondback.jpg" style="margin-bottom: 10px;">
						<p style="margin-bottom: 0px;">Check back for more information on our upcoming promo nights.</p>
					</div>
					<div class="panel-footer">
						<p style="font-size: .8em;"><i class="glyphicon glyphicon-map-marker"></i> 123 Example Ln, Somewhere VT</p>
						<a class="btn btn-default btn-sm btn-block">Get Directions</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();
?>