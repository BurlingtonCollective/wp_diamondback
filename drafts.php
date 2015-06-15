<?php
/*
Template Name: Drafts Page
*/
get_header();
$draftQuery = new WP_Query(array('post_type'=>'draft', 'posts_per_page'=>-1));
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
<?php if ($draftQuery->have_posts()): ?>
	<section class="beer-detail">
		<div class="container">
			<?php
			$index = 0;
			while ($draftQuery->have_posts()) : $draftQuery->the_post();
			?>
				<div class="row" <?= $index > 0 ? 'style="padding-top: 80px;"' : ''; ?>>
					<?php
					$tagline = types_render_field('tagline', array('output'=>'raw'));
					$availability = types_render_field('availability', array('output'=>'raw'));
					$style = types_render_field('style', array('output'=>'raw'));
					$profile = types_render_field('profile', array('output'=>'raw'));
					$composition = types_render_field('composition', array('output'=>'raw'));
					$wideImg = types_render_field('wide-draft-image', array('raw'=>true));
					$squareImg1 = types_render_field('square-draft-image-1', array('raw'=>true));
					$squareImg2 = types_render_field('square-draft-image-2', array('raw'=>true));
					?>
					<div class="col-xs-12 col-sm-7 col-md-5">
						<h2 style="margin-top: 0;"><?php the_title(); ?></h2>
						<?php if (!empty($tagline)) : ?>
							<p class="lead"><?= $tagline; ?></p>
						<?php endif; ?>
						<div class="wysiwyg-content"><?php the_content(); ?></div>
						<?php if (!empty($availability)) : ?>
							<h3>Availability</h3>
							<p><?= $availability; ?></p>
						<?php endif; ?>
						<?php if (!empty($style)) : ?>
							<h3>Style</h3>
							<p><?= $style; ?></p>
						<?php endif; ?>
						<?php if (!empty($profile)) : ?>
							<h3>Profile</h3>
							<p><?= $profile; ?></p>
						<?php endif; ?>
						<?php if (!empty($composition)) : ?>
							<h3>Composition</h3>
							<div class="wysiwyg-content"><?= $composition; ?></div>
						<?php endif; ?>
					</div>
					<div class="col-xs-12 col-sm-5 col-md-6 col-md-push-1">
						<?php if (!empty($wideImg)) : ?>
							<div class="top-image-wrapper">
								<img class="img-responsive" src="<?= $wideImg; ?>">
							</div>
						<?php endif; ?>
						<?php if (!empty($squareImg1) && !empty($squareImg2)) : ?>
							<div class="row">
								<div class="col-xs-6">
									<div class="image-wrapper left">
										<img class="img-responsive" src="<?= $squareImg1; ?>">
									</div>
								</div>
								<div class="col-xs-6">
									<div class="image-wrapper right">
										<img class="img-responsive" src="<?= $squareImg2; ?>">
									</div>
								</div>
							</div>
						<?php endif; ?>
					</div>
				</div>
			<?php $index++; endwhile; ?>
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
endif;
get_footer();
?>