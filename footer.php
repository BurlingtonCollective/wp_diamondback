	<footer>
		<div class="container">
			<span class="navbar-text navbar-left" style="margin-left: 0;">&copy; 2014 Diamondback Beer &middot; Dev: <a href="http://burlingtoncollective.com" target="_blank">Burlington Collective</a></span>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="https://www.facebook.com/diamondbackbrewing" target="_blank"><i class="social facebook"></i></a></li>
				<li><a href="http://instagram.com/diamondbackbrew" target="_blank"><i class="social instagram"></i></a></li>
			</ul>
		</div>
	</footer>
	<div id="contact-modal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form class="form" method="post" action="http://www.ipage.com/scripts/formemail.bml">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						<h4 class="modal-title">Contact Us</h4>
					</div>
					<div class="modal-body">
						<input type="hidden" name="my_email" value="info@diamondbackbeer.com">
						<input type="hidden" name="subject" value="%%name%% via diamondbackbeer.com">
						<input type="hidden" name="thankyou_url" value="<?= 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
						<div class="form-group">
							<label>Your Name</label>
							<input type="text" name="name" class="form-control" placeholder="John Smith">
						</div>
						<div class="form-group">
							<label>Your Email</label>
							<input type="email" name="email" class="form-control" placeholder="you@example.com" required>
						</div>
						<div class="form-group">
							<label>Your Message</label>
							<textarea class="form-control" name="message" rows="4" placeholder="What's up?"></textarea>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Send</button>
					</div>
				</form>
			</div>
		</div>
	</div>


	<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/bower_components/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/bower_components/imagesloaded/imagesloaded.pkgd.min.js"></script>
	<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/bower_components/jquery-backstretch/jquery.backstretch.min.js"></script>
	<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/js/main.js"></script>

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-56686413-1', 'auto');
	  ga('send', 'pageview');

	</script>
	<!-- Start of Async HubSpot Analytics Code -->
	 <script type="text/javascript">
	   (function(d,s,i,r) {
	     if (d.getElementById(i)){return;}
	     var n=d.createElement(s),e=d.getElementsByTagName(s)[0];
	     n.id=i;n.src='//js.hs-analytics.net/analytics/'+(Math.ceil(new Date()/r)*r)+'/500098.js';
	     e.parentNode.insertBefore(n, e);
	   })(document,"script","hs-analytics",300000);
	 </script>
	<!-- End of Async HubSpot Analytics Code -->
	<?php wp_footer(); ?> 
</body>
</html>