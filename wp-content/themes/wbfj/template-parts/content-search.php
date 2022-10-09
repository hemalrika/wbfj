<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gocart
 */
?>

<div class="col-xl-6 col-lg-6 col-md-6 col-6">
    <div class="blog-content-wrapper">
        <div class="thumb">
            <a href="<?php echo esc_url( get_the_permalink( get_the_ID() ) ); ?>">
				<?php echo get_the_post_thumbnail( get_the_ID(), 'full' ); ?>
            </a>
        </div>
        <div class="blog-content">
            <h4>
				<?php
				printf( '<a href="%2$s">%1$s</a>',
					esc_html( get_the_title() ),
					esc_url( get_the_permalink( get_the_ID() ) )
				);
				?>
            </h4>
            <div class="wbfj-blog-meta">
                <div class="wbfj-blog-author-meta">
                    <a href="<?php echo get_author_posts_url(get_the_author_meta('ID' )) ?>">
                        <div class="author-img">
                            <?php echo get_avatar(get_the_author_meta('ID')); ?>
                        </div>
                        <div class="author-name">
                            <h4><?php echo get_the_author_meta('display_name'); ?></h4>
                        </div>
                    </a>
                    <a href="#"><i class="fal fa fa-clock-o"></i> <?php echo get_the_date(); ?></a>
                </div>
            </div>
            <p><?php echo get_the_excerpt(); ?></p>
            <div class="wbfj-blog-bottom-read-more-btn">
                <a href="<?php echo get_the_permalink(get_the_ID()); ?>" clss="read-more-btn">READ MORE</a>
                <span class="comments-off">Comments Off</span>
            </div>
        </div>
    </div>
</div>
