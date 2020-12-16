<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hotcoffe
 * @subpackage hotcoffe
 * @since Hot Coffe 1.0
 */

?>

<div class="card-large">
    <div class="content-card">
        <div class="header-card">
            <h2><?php the_title(); ?></h2>
        </div>
        <div class="body-card">
            <?php 
                $post_content = get_the_excerpt(); 
                
                if( strlen($post_content) >= 50 ) {
                    $post_content = trim(substr($post_content, 0, 150)) . "...";
                }

                echo $post_content;
            ?>
        </div>
        <div class="footer-card">
            <div class="date">
                <span><?php the_time('d M Y'); ?></span>
            </div>
            <div class="read-more">
                <a href="<?php echo get_post_permalink(); ?>">Read more</a>
            </div>
        </div>
    </div>
    <?php
        if ( has_post_thumbnail() ) {
            $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
            
            if ( ! empty( $large_image_url[0] ) ) {
                echo '<div class="thumbnail-card" style="background-image: url(' . esc_url( $large_image_url[0] ) . ');"></div>';
            }
        } else {
            echo '<div class="thumbnail-card" style="background-image: url(' . get_template_directory_uri() . '/assets/images/coffe-cover.png );"></div>';
        }
    ?>
</div>