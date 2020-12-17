<?php get_header(); ?>
<div class="page-title-area">
	<div class="container">
		<ul class="breadcrumb">
			<li><a href="<?php echo get_bloginfo('url') ?>"><i class="fas fa-home"></i> Trang chủ</a></li>
			<li>&nbsp;>&nbsp;</li>
			<li><?php the_title(); ?></li>
		</ul>
	</div>
</div>
<div class="wp_single">
	<div class="container"> 
		<div class="row section-space wp-section-space single_post_detail">
			<div class="col-md-8">
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
						<div class="article-content">
		                    <ul class="entry-meta">
		                        <li><i class="far fa-user"></i> <?php echo get_the_author() ?></li>
		                        <li><i class="fas fa-calendar-alt"></i> <?php echo get_the_date(); ?></li>
		                    </ul>
		                    <h3 class="mb-0"><?php the_title(); ?></h3>
		                </div>
						<article class="single_blog_post">
							<img class="thumb" src="<?php the_post_thumbnail_url(); ?>">
							<?php
							$content = get_post()->post_content;
							if(empty($content)){ ?>
								<div class="blog-post-empty"> 
									<p>Nội dung đang cập nhật...</p>
								</div>
							<?php }else{ ?>
								<div class="blog-post-content"> 
									<p><?php the_content() ?></p>   
								</div>
							<?php } ?> 
						</article> 
					<?php endwhile; else : ?>
					<p>Đang cập nhật</p>
				<?php endif; ?>
				<div class="same_post">
        <div class="block_header">
            <h2 class="block_title">BÀI VIẾT CÙNG CHUYÊN MỤC</h2>
        </div>
        <div class="row">
            <?php
            /*
             * Hiển thị bài viết liên quan trong cùng 1 category
             */
            $categories = get_the_category(get_the_ID());
            if ($categories){
                $category_ids = array();
                foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
                $args=array(
                    'category__in' => $category_ids,
                    'post__not_in' => array(get_the_ID()),
                    'posts_per_page' => 3,
                );
                $my_query = new wp_query($args);
                if( $my_query->have_posts() ):
                    while ($my_query->have_posts()):$my_query->the_post();
                        ?>
                        <div class="col-lg-4 col-md-4 col-xs-12"> 
							<div class="single-around-the-world-news"> 
								<div class="news-image"> 
									<a href="<?php echo get_permalink() ?>">
										<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
									</a> 
								</div>
								<div class="news-content">
									<ul> 
										<li><i class="fas fa-calendar-alt"></i> <?php echo get_the_date(); ?></li>
									</ul> 
									<h3><a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a></h3> 
									<?php the_excerpt(); ?>
								</div>
							</div>
						</div>
                        <?php
                    endwhile;
                endif; wp_reset_query();
            }
            ?>
        </div>
    </div>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div> 
</div>
<?php get_footer(); ?>