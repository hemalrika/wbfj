<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package gocart
 */

get_header();
?>
	<div class="blog-section-2 pt-30">
		<div class="container">
			<div class="row">
				<div class="col-xxl-8">
					<?php
					if ( have_posts() ):
						?>
						<header class="page-header mb-20">
							<?php
							the_archive_title( '<h1 class="page-title">', '</h1>' );
							the_archive_description( '<div class="archive-description">', '</div>' );
							?>
						</header><!-- .page-header -->
						<div class="row">
							<?php
							while ( have_posts() ): the_post();
								get_template_part( 'template-parts/content', 'search' );
							endwhile; ?>
							<div class="basic-pagination basic-pagination-2 mb-40">
								<?php wbfj_pagination( '<i class="far fa-angle-double-left"></i>', '<i class="far fa-angle-double-right"></i>', '', array( 'class' => '' ) ); ?>
							</div>
							<?php
							else:
								get_template_part( 'template-parts/content', 'none' );
							?>
						</div>
					<?php endif; ?>
				</div>
				<?php if(is_active_sidebar('general_sidebar')) : ?>
				<div class="col-xxl-4">
					<?php echo dynamic_sidebar('general_sidebar' ); ?>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
<?php
get_footer();



