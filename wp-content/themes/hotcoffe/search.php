<?php get_header(); ?>

    <div class="post-homepage container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php get_template_part('template-parts/post/content') ?>
        <?php endwhile; endif; ?>
    </div>
    
    <div class="container">
        <?php get_template_part('template-parts/page/prev-or-next') ?>
    </div>

<?php get_footer(); ?>