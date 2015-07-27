<?php
get_header();
if (have_posts()) : while (have_posts()) : the_post();
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="page-header">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
</div>
<article id="single" class="post">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-10">
                <div class="wysiwyg-content">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
</article>
<?php
endwhile; endif;
get_footer();
?>