<?php get_header(); ?>

<div class="col-sm-8 blog-main">

    <?php
    if (have_posts()) {
        while (have_posts()) : the_post();
    ?>
            <div class="blog-post">
                <h2 class="blog-post-title">Team Member </h2>

            </div>

    <?php
        endwhile;
    }
    ?>

    <?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>