	<footer>
		<div class="container">
			<span class="navbar-text navbar-left" style="margin-left: 0;">&copy; 2014 Diamondback Beer &middot; Dev: <a href="http://burlingtoncollective.com" target="_blank">Burlington Collective</a></span>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="contact.html" data-toggle="modal" data-target="#contact-modal"><i class="social facebook"></i></a></li>
			</ul>
		</div>
	</footer>
	<div id="contact-modal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form class="form">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						<h4 class="modal-title">Contact Us</h4>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label>Your Name</label>
							<input type="text" class="form-control" placeholder="John Smith">
						</div>
						<div class="form-group">
							<label>Your Email</label>
							<input type="email" class="form-control" placeholder="you@example.com">
						</div>
						<div class="form-group">
							<label>Your Message</label>
							<textarea class="form-control" rows="4" placeholder="What's up?"></textarea>
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
	<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/bower_components/jquery-backstretch/jquery.backstretch.min.js"></script>
	<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/js/main.js"></script>
</body>
</html>