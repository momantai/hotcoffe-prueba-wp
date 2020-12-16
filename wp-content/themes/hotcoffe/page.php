<?php get_header(); ?>
    
<div class="container">
    <div class="post-content">
        <div class="post-header">
            <div class="title-post">
                <h1><?php the_title(); ?></h1>
            </div>
            <!-- <div class="details-post">
                <div class="written-by">Written by Jonh doe</div>
                <span class="date-post">Monday  May 20</span>
            </div> -->
        </div>

        <div class="post-body">

            <div class="post-text">
                <?php the_content(); ?>
            </div>

        </div>

        <div class="post-footer"></div>
    </div>
</div>


<?php get_footer(); ?>