<?php get_header() ?>

    <div class="content-wrapper pt-200 pb-100">
        <div class="container">
            <div class="row">
	            <?php if ( have_posts() ) : ?>

		            <?php
		            /* Start the Loop */
		            while ( have_posts() ) :
			            the_post(); ?>
			            <?php
			            /*
						 * Include the Post-Type-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
						 */
			            get_template_part( 'template-parts/content', get_post_format() ); ?>
		            <?php endwhile; ?>

                    <div class="basic-pagination basic-pagination-2 mb-40">
			            <?php wbfj_pagination( '<i class="far fa-angle-double-left"></i>', '<i class="far fa-angle-double-right"></i>', '', array( 'class' => '' ) ); ?>
                    </div>

	            <?php
	            else :

		            get_template_part( 'template-parts/content', 'none' );

	            endif;
	            ?>
            </div>
        </div>
    </div>

<?php get_footer() ?>