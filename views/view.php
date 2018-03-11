<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
?>

<div class="posts-list-section full-width-section">
    <div class="container">
        <header>
            <h2 class="block-title"><?php echo $atts['title'];?></h2>
            <p class="block-subtitle"><?php echo $atts['desc'];?></p>
        </header>

        <ul class="posts-list">
            <?php
            $args = array( 'post_type' => $atts['select_post'], 'posts_per_page' => $atts['post_per_page'], );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); ?>

                <li class="list-item">
                    <a href="<?php echo get_permalink();?>">
                        <?php the_post_thumbnail('medium_large');?>

                        <div class="layer-wrap">
                            <h3 class="title"><?php the_title();?></h3>
                        </div>
                    </a>
                </li>

            <?php endwhile;
            wp_reset_postdata();?>
        </ul>
    </div>
</div>