<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wbfj
 */
if ( is_single() ): ?>
    <article class="pt-20" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="row">
            <div class="col-xxl-8 col-xl-8 col-lg-8">
                <?php if ( has_post_thumbnail() ): ?>
                    <div class="wbfj-blog-thumbnail wbfj-blog-thumbnail-space-bottom">
                        <?php the_post_thumbnail( 'wbfj-post-details', array(
                            'class' => 'img-responsive',
                            'alt'   => get_the_post_thumbnail_caption( get_the_ID() )
                        ) ); ?>
                    </div>
                <?php endif; ?>
                <h3 class="wbfj-blog-single-title">
                    <?php the_title(); ?>
                </h3>
                <div class="wbfj-related-post-meta has-wbfj-related-meta-border">
                    <div class="wbfj-related-post-author">
                        <?php echo get_avatar(get_the_author_meta('ID')); ?>
                        <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><span><?php echo get_the_author_meta('nickname'); ?></span></a>
                    </div>
                    <div class="wbfj-related-post-date">
                        <i class="fal fa-clock"></i>
                        <?php echo get_the_date(); ?>
                    </div>
                </div>
                <div class="wbfj-post-details">
                    <p><?php the_content(  ); ?></p>
                </div>
                <div class="wbfj-blog-pagination">
                    <?php
                        wp_link_pages( array(
                            'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'wbfj' ),
                            'after'       => '</div>',
                            'link_before' => '<span class="page-number">',
                            'link_after'  => '</span>',
                        ) );
                        ?>
                </div>
                <?php if(shortcode_exists( 'social_share_button' )) : ?>
                    <?php echo do_shortcode("[social_share_button themes='theme1']"); ?>
                <?php endif; ?>
                <div class="wbfj-prev-next-post-box pb-40">
                   <div class="row">
                        <div class="col-xxl-6 col-lg-6 col-md-6">
                            <div class="wbfj-prev-box">
                                <span>Previous Post</span>
                                <?php echo previous_post_link(); ?>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-lg-6 col-md-6">
                            <div class="wbfj-prev-box has-next">
                                <span>Next Post</span>
                                <?php echo next_post_link(); ?>
                            </div>
                        </div>
                   </div>
                </div>
                <!-- related post -->
                <div class="related-product-section">
                    <div class="wbfj-section-title-area mb-30">
                        <h4 class="wbfj-section-curved-title">RELATED ARTICLES</h4>
                    </div>
                    <?php
                        $related_args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 6,
                            'post__not_in' => array(get_the_ID())
                        );
                        $query = new WP_Query($related_args);
                        if($query->have_posts()) {
                            echo "<div class='row'>";
                            while($query->have_posts()) {
                                $query->the_post();?>
                                <?php echo '<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-15">' ?>
                                <div class="wbfj-related-post-box">
                                    <div class="wbfj-related-post-thumbnail">
                                        <a href="<?php echo get_the_permalink(get_the_ID()); ?>"><?php echo get_the_post_thumbnail(get_the_ID(), 'full'); ?></a>
                                    </div>
                                    <div class="wbfj-related-post-content">
                                        <h3 class="wbfj-related-post-title">
                                            <a href="<?php echo get_the_permalink(get_the_ID()); ?>"><?php echo get_the_title(); ?></a>
                                        </h3>
                                        <div class="wbfj-related-post-meta">
                                            <div class="wbfj-related-post-author">
                                                <?php echo get_avatar(get_the_author_meta('ID')); ?>
                                                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><span><?php echo get_the_author_meta('nickname'); ?></span></a>
                                            </div>
                                            <div class="wbfj-related-post-date">
                                                <i class="fal fa-clock"></i>
                                                <?php echo get_the_date(); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php echo "</div>"; ?>
                            <?php }
                            echo '</div>';
                        }
                    ?>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4">
                <?php if(is_active_sidebar( 'general_sidebar' )) : ?>
                    <?php dynamic_sidebar( 'general_sidebar' ); ?>
                <?php endif; ?>
            </div>
        </div>
     </article>
<?php
else: ?>
    <div class="col-xl-6">
        <article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-wrap mb-30' ); ?>>
			<?php
			if ( has_post_thumbnail() ): ?>
                <div class="blog-thumb">
                    <a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail( 'wbfj-post-thumb', array( 'class' => 'img-responsive' ) ); ?>
                    </a>
                </div>
			<?php
			endif; ?>
            <div class="blog-content">
                <div class="blog-meta">
                     <span>
                        <a href="<?php print esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
                            <i class="fal fa-user"></i> <?php print get_the_author(); ?>
                        </a>
                    </span>
                    <span>
                        <i class="fal fa-calendar-alt"></i> <?php the_time( get_option( 'date_format' ) ); ?>
                    </span>
                </div>
                <h3 class="blog-title mb-20">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h3>
                <div class="blog-text">
					<?php the_excerpt(); ?>
                </div>
                <!-- blog btn -->
				<?php
				$wbfj_blog_btn = get_theme_mod( 'wbfj_blog_btn', 'Read More' );

				$wbfj_blog_btn_switch = get_theme_mod( 'wbfj_blog_btn_switch', true );
				?>

				<?php if ( ! empty( $wbfj_blog_btn_switch ) ) : ?>
                    <div class="read-more">
                        <a href="<?php the_permalink(); ?>"><?php print esc_html( $wbfj_blog_btn ); ?></a>
                    </div>
				<?php endif; ?>
            </div>
        </article>
    </div>
<?php
endif; ?>
