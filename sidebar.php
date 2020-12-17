<div class="col-md-4 col-sm-4 col-xs-12">
	<div class="sidebar_social">
		<div class="section-title"> 
			<h2>Kết nối với chúng tôi</h2> 
		</div>
		<ul class="stay-connected">
			<li><a href="<?php the_field('facebook', 'option'); ?>"><i class="fab fa-facebook-f icofont-facebook"></i><b>10.2K</b> <span>Fans</span></a></li>
			<li><a href="<?php the_field('twitter', 'option'); ?>"><i class=" fab fa-twitter icofont-twitter"></i><b>14.2K</b> <span>Followers</span></a></li>
			<li><a href="<?php the_field('linkedin', 'option'); ?>"><i class="fab fa-linkedin icofont-linkedin"></i><b>11.2K</b> <span>Fans</span></a></li>
			<li><a href="<?php the_field('instagram', 'option'); ?>"><i class="fab fa-instagram"></i><b>15.2K</b> <span>Subscriber</span></a></li>
		</ul>
	</div>

	<div class="p5_post_recently">
		<div class="section-title"> 
			<h2>Bài viết mới nhất</h2> 
		</div>
		<?php $args = array(
			'post_type' => 'post',
			'posts_per_page'  =>  4,
		);
		$the_query = new WP_Query( $args ); ?>
		<?php if ( $the_query->have_posts() ) : ?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<div class="media around-the-world-news-media align-items-center dpf">
					<a href="<?php echo get_permalink() ?>"> <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"> </a> 
					<div class="content"> 
						<span><i class="fas fa-calendar-alt"></i> <?php echo get_the_date(); ?></span>
						<h3><a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a></h3> 
					</div>
				</div>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
			<?php else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
		</div>
	</div>