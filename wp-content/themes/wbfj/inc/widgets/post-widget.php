<?php
Class Latest_posts_sidebar_Widget extends WP_Widget {

    public function __construct() {
        parent::__construct( 'cb-latest-posts', 'Post with Image', [
            'description' => 'Post with Image',
        ] );
    }

    public function widget( $args, $instance ) {
        extract( $args );
        extract( $instance );

        echo $before_widget;
        if ( $instance['title'] ):
            echo $before_title;?>
	     			<?php echo apply_filters( 'widget_title', $instance['title'] ); ?>
	     		<?php echo $after_title; ?>
	     	<?php endif;?>
			<div class="wbfj-post-image-widget-wrapper">
                <?php
                    $q = new WP_Query( [
                        'post_type'      => 'post',
                        'posts_per_page' => ( $instance['count'] ) ? $instance['count'] : '3',
                        'order'          => ( $instance['posts_order'] ) ? $instance['posts_order'] : 'DESC',
                        'orderby'        => 'date',
                    ] );

                    if ( $q->have_posts() ):
                    while ( $q->have_posts() ): $q->the_post();
                    $post_avater_img = get_avatar_url( get_the_author_meta( 'ID' ), array( 'size' => 20 ) );
                    $post_avater_name = get_the_author_meta( 'display_name' );
                ?>
                    <div class="wbfj-post-image-single">
                            <?php if ( has_post_thumbnail() ): ?>
                            <div class="wbfj-post-image-single-img">
                                <a href="<?php the_permalink();?>"><img src="<?php print esc_url( get_the_post_thumbnail_url( get_the_ID(), 'full' ) );?>" alt="<?php echo esc_attr__('image', 'cb-toolkit'); ?>"></a>
                            </div>
                            <?php endif;?>
                            <div class="wbfj-post-image-single-text">
                                <h4 class="popular-post-title"><a href="<?php the_permalink(); ?>"><?php print wp_trim_words( get_the_title(), 4, '' );?></a></h4>
                                <div class="wbfj-post-image-single-text-meta">
                                <a class="wbfj-post-image-admin-img" href="<?php print esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><img src="<?php echo esc_url($post_avater_img); ?>" alt="post-img"><?php echo esc_html($post_avater_name); ?></a>
                                <span class="wbfj-post-image-single-text-date"><i class="far fa-clock"></i><?php echo get_the_time();?></span>
                                </div>
                            </div>
                    </div>
                <?php endwhile; endif;?> 
			</div>
		<?php echo $after_widget; ?>
		<?php
}

    public function form( $instance ) {
        $title = !empty( $instance['title'] ) ? $instance['title'] : '';
        $count = !empty( $instance['count'] ) ? $instance['count'] : esc_html__( '3', 'cb-toolkit' );
        $posts_order = !empty( $instance['posts_order'] ) ? $instance['posts_order'] : esc_html__( 'DESC', 'cb-toolkit' );
        $choose_style = !empty( $instance['choose_style'] ) ? $instance['choose_style'] : esc_html__( 'style_1', 'cb-toolkit' );
        ?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php echo esc_html__('Title','cb-toolkit'); ?></label>
			<input type="text" name="<?php echo $this->get_field_name( 'title' ); ?>" id="<?php echo $this->get_field_id( 'title' ); ?>" value="<?php echo esc_attr( $title ); ?>" class="widefat">
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'count' ); ?>"><?php echo esc_html__('How many posts you want to show ?','cb-toolkit'); ?></label>
			<input type="number" name="<?php echo $this->get_field_name( 'count' ); ?>" id="<?php echo $this->get_field_id( 'count' ); ?>" value="<?php echo esc_attr( $count ); ?>" class="widefat">
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'posts_order' ); ?>"><?php echo esc_html__('Posts Order','cb-toolkit'); ?></label>
			<select name="<?php echo $this->get_field_name( 'posts_order' ); ?>" id="<?php echo $this->get_field_id( 'posts_order' ); ?>" class="widefat">
				<option value="" disabled="disabled"><?php echo esc_html__('Select Post Order','cb-toolkit'); ?></option>
				<option value="<?php echo esc_attr__('ASC', 'cb-toolkit'); ?>" <?php if ( $posts_order === 'ASC' ) {echo 'selected="selected"';}?>><?php echo esc_html__('ASC','cb-toolkit'); ?></option>
				<option value="<?php echo esc_attr__('DESC', 'cb-toolkit'); ?>" <?php if ( $posts_order === 'DESC' ) {echo 'selected="selected"';}?>><?php echo esc_html__('DESC','cb-toolkit'); ?></option>
			</select>
		</p>

	<?php }

}

add_action( 'widgets_init', function () {
    register_widget( 'Latest_posts_sidebar_Widget' );
} );
