<?php
/*
Template Name: Blog Page
*/
get_header();
$postQuery = new WP_Query(array('post_type'=>'post', 'posts_per_page'=>-1));
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="page-header">
                <h1>Blog</h1>
            </div>
        </div>
    </div>
</div>
<?php
if ($postQuery->have_posts()) : while ($postQuery->have_posts()) : $postQuery->the_post();
?>
<section id="blog" class="post">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-10">
                <article>
                    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                    <div class="wysiwyg-content">
                        <?php the_content('<span class="read-more">Read More</span>'); ?>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
<?php
endwhile; endif;
get_footer();
?>