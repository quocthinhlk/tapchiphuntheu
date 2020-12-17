<?php get_header() ?>
<div class="page-title-area">
	<div class="container">
		<ul class="breadcrumb">
			<li><a href="<?php echo get_bloginfo('url') ?>"><i class="fas fa-home"></i> Trang chủ</a></li>
			<li>&nbsp;>&nbsp;</li>
			<li><?php single_cat_title(); ?></li>
		</ul>
	</div>
</div>
<section class="all-category-news ptb-40">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-12">
				<div class="single-category-news">
					<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post();  ?>
							<div class="row m-0 align-items-center category_item">
								<div class="col-lg-5 col-md-6 p-0">
									<div class="category-news-image">
										<a href="<?php echo get_permalink() ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"></a>
									</div>
								</div>
								<div class="col-lg-7 col-md-6">
									<div class="category-news-content">
										<span><i class="fas fa-calendar-alt"></i> <?php echo get_the_date(); ?></span>
										<h3><a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a></h3>
										<?php the_excerpt(); ?>
									</div>
								</div>
							</div>
						<?php endwhile; else : ?>
					<?php endif; ?>

					<div class="pagination-area">
						<?php
						global $wp_query;
						$big = 999999999;
						echo paginate_links( array(
							'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
							'format' => '?paged=%#%',
							'prev_text'    => __('<i class="fas fa-chevron-left"></i>'),
							'next_text'    => __('<i class="fas fa-chevron-right"></i>'),
							'current' => max( 1, get_query_var('paged') ),
							'mid_size' => '1',
							'total' => $wp_query->max_num_pages
						) );
						?>
					</div>
				</div>  
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>

<?php get_footer() ?>