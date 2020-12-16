<?php get_header(); ?>

<?php get_post(); ?>
<div class="post container">
            <div class="post-container">
                <?php
                    if ( has_post_thumbnail() ) {
                        $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
                        
                        if ( ! empty( $large_image_url[0] ) ) {
                            echo '<div class="post-tumbnail" style="background-image: url(' . esc_url( $large_image_url[0] ) . ');"></div>';
                        }
                    }
                ?>

                <div class="post-content">
                    <div class="post-header">
                        <div class="title-post">
                            <h1><?php the_title(); ?></h1>
                        </div>
                        <div class="details-post">
                            <div class="written-by">Written by <?php wp_list_authors(); ?></div>
                            <span class="date-post"><?php the_time('d M Y'); ?></span>
                        </div>
                    </div>

                    <div class="post-body">

                        <div class="post-text">
                            <?php the_content(); ?>
                        </div>

                    </div>

                    <div class="post-footer">
                        <?php
                             if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;
                        ?>
                        <?php //comments_template( '/short-comments.php' ); ?> 
                    </div>
                </div>
            </div>
        </div>
<?php get_footer(); ?>