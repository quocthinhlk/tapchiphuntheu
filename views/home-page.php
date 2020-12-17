<?php
/**
 * template name: Trang chủ
 */
?>
<?php get_header(); ?>
<section class="home_slider">
	<div class="container">
		<div class="row">
			<div class="slider-1 owl-carousel owl-loaded owl-drag">
				<?php
				if( have_rows('slider', 'option') ):
				    while( have_rows('slider', 'option') ) : the_row();
				        $img = get_sub_field('slider_img'); ?>
				        <div class="slider_img">
							<img src="<?php echo $img['url'] ?>" alt="<?php echo $img['alt'] ?>">
						</div>
				    <?php endwhile;
				endif;
				?>
			</div>
		</div>
	</div>
</section>
<section class="default-news-area ptb-40">
	<div class="container">
		<div class="row">
			<?php $args = array(
				'post_type' => 'post',
				'posts_per_page'  =>  5,
				'tax_query' => array(
					array(
						'taxonomy' => 'category',
						'field'    => 'slug',
						'terms'    => 'phun-theu-chan-may',
					),
				),
			);
			$the_query = new WP_Query( $args );
			$count = 0;
			if ( $the_query->have_posts() ) :
				while ( $the_query->have_posts() ) : $the_query->the_post(); $count++ ?>
					<?php if($count == 1){ ?>
						<div class="col-lg-6 col-md-12"> 
							<div class="single-default-news">
								<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"> 
								<div class="news-content"> 
									<ul> 
										<li><i class="far fa-user"></i> by John Smith</li>
										<li><i class="fas fa-calendar-alt"></i> <?php echo get_the_date(); ?></li>
									</ul> 
									<h3><a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a></h3> 
								</div>
								<div class="tags bg-<?php echo $count; ?>">
									<?php
									$categories = get_the_category();
									if(!empty($categories)){
										echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
									}
									?>
								</div>
							</div>
							<div class="row">
					<?php } ?>
					<?php if($count == 2){ ?>
						<div class="col-lg-6 col-md-6"> 
							<div class="single-default-inner-news"> 
								<div class="news-image"> 
									<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"> 
								</div>
								<div class="news-content"> 
									<h3><?php the_title(); ?></h3> 
									<span><i class="fas fa-calendar-alt"></i> <?php echo get_the_date(); ?></span> 
								</div>
								<a href="<?php echo get_permalink() ?>" class="link-overlay"></a> 
								<div class="tags bg-<?php echo $count; ?>">
									<?php
									$categories = get_the_category();
									if(!empty($categories)){
										echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
									}
									?>
								</div>
							</div>
						</div>
					<?php } ?>
					<?php if($count == 3){ ?>
						<div class="col-lg-6 col-md-6">
							<div class="single-default-inner-news"> 
								<div class="news-image">
									<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
								</div>
								<div class="news-content"> 
									<h3><?php the_title(); ?></h3> 
									<span><i class="fas fa-calendar-alt"></i> <?php echo get_the_date(); ?></span> 
								</div>
								<a href="<?php echo get_permalink() ?>" class="link-overlay"></a>
								<div class="tags bg-<?php echo $count; ?>">
									<?php
									$categories = get_the_category();
									if(!empty($categories)){
										echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
									}
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
					<?php } ?>
					<?php if($count == 4){ ?>
						<div class="col-lg-3 col-md-6"> 
							<div class="single-default-inner-news"> 
								<div class="news-image"> 
									<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
								</div>
								<div class="news-content"> 
									<h3><?php the_title(); ?></h3> 
									<span><i class="fas fa-calendar-alt"></i> <?php echo get_the_date(); ?></span> 
								</div>
								<a href="<?php echo get_permalink() ?>" class="link-overlay"></a>
								<div class="tags bg-<?php echo $count; ?>">
									<?php
									$categories = get_the_category();
									if(!empty($categories)){
										echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
									}
									?>
								</div>
							</div>
					<?php } ?>
					<?php if($count == 5){ ?>
						<div class="single-default-inner-news"> 
							<div class="news-image">
								<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"> 
							</div><div class="news-content"> 
								<h3><?php the_title(); ?></h3> 
								<span><i class="fas fa-calendar-alt"></i> <?php echo get_the_date(); ?></span> 
							</div>
							<a href="<?php echo get_permalink() ?>" class="link-overlay"></a> 
							<div class="tags bg-<?php echo $count; ?>">
								<?php
								$categories = get_the_category();
								if(!empty($categories)){
									echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
								}
								?>
							</div>
						</div>
					</div>
					<?php } ?>
				<?php endwhile;
				wp_reset_postdata();
			else :
				echo '<p>Sorry, no posts matched your criteria.</p>';
			endif
			?>
			<div class="col-lg-3 col-md-6">
				<div class="default-video-news"> 
					<h3 class="title">Tin tức làm đẹp</h3>
					<?php $args = array(
						'post_type' => 'post',
						'posts_per_page'  =>  3,
						'tax_query' => array(
							array(
								'taxonomy' => 'category',
								'field'    => 'slug',
								'terms'    => 'tin-tuc-lam-dep',
							),
						),
					);
					$the_query = new WP_Query( $args );
					if ( $the_query->have_posts() ) :
						while ( $the_query->have_posts() ) : $the_query->the_post() ?>
							<div class="single-video-news">
								<div class="image">
									<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"> 
								</div>
								<div class="content"> 
									<h3><a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a></h3>
								</div>
							</div>
						<?php endwhile;
						wp_reset_postdata();
					else :
						echo '<p>Sorry, no posts matched your criteria.</p>';
					endif
					?>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="popular-news-area ptb-40"> 
	<div class="container">
		<div class="row"> 
			<div class="col-lg-12 col-md-12"> 
				<div class="section-title"><h2>Phun thêu chân mày</h2></div>
				<div class="row"> 
					<div class="slider-2 owl-carousel owl-loaded owl-drag">
						<?php $args = array(
							'post_type' => 'post',
							'posts_per_page'  =>  4,
							'tax_query' => array(
								array(
									'taxonomy' => 'category',
									'field'    => 'slug',
									'terms'    => 'phun-theu-chan-may',
								),
							),
						);
						$the_query = new WP_Query( $args );
						$count =0;
						if ( $the_query->have_posts() ) :
							while ( $the_query->have_posts() ) : $the_query->the_post(); $count++ ?>
								<div class="single-popular-news"> 
									<div class="news-image"> 
										<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"> 
									</div>
									<div class="news-content"> 
										<h3><?php the_title(); ?></h3> 
										<span><i class="fas fa-calendar-alt"></i> <?php echo get_the_date(); ?></span> 
									</div>
									<a href="<?php echo get_permalink() ?>" class="link-overlay"></a>
									<div class="tags bg-<?php echo $count; ?>">
										<?php
										$categories = get_the_category();
										if(!empty($categories)){
											echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
										}
										?>
									</div>
								</div>
							<?php endwhile;
							wp_reset_postdata();
						else :
							echo '<p>Sorry, no posts matched your criteria.</p>';
						endif
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="international-news-area pb-40">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-12">
				<div class="section-title"><h2>Tin tức làm đẹp</h2></div>
				<div class="international-news-inner">
					<div class="row">
						<?php $args = array(
							'post_type' => 'post',
							'posts_per_page'  =>  4,
							'tax_query' => array(
								array(
									'taxonomy' => 'category',
									'field'    => 'slug',
									'terms'    => 'tin-tuc-lam-dep',
								),
							),
						);
						$the_query = new WP_Query( $args );
						$count = 0;
						if ( $the_query->have_posts() ) :
							while ( $the_query->have_posts() ) : $the_query->the_post(); $count++ ?>
								<?php if($count == 1){ ?>
									<div class="col-lg-6">
										<div class="single-international-news"> 
											<div class="news-image"> 
												<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"> 
											</div>
											<div class="news-content">
												<span><i class="fas fa-calendar-alt"></i> <?php echo get_the_date(); ?></span> 
												<h3><a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a></h3>
											</div>
										</div>
									</div>
									<div class="col-lg-6"> 
										<div class="international-news-list">
								<?php } ?>
								<?php if($count == 2 || $count == 3){ ?>
									<div class="media news-media align-items-center dpf"> 
										<a href="<?php echo get_permalink() ?>"> 
											<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"> 
										</a> 
										<div class="content">
											<span><i class="fas fa-calendar-alt"></i> <?php echo get_the_date(); ?></span> 
											<h3><a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a></h3> 
										</div>
									</div>
								<?php } ?>
								<?php if($count == 4){ ?>
									<div class="media news-media align-items-center dpf"> 
										<a href="<?php echo get_permalink() ?>"> 
											<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"> 
										</a> 
										<div class="content"> 
											<span><i class="fas fa-calendar-alt"></i> <?php echo get_the_date(); ?></span>
											<h3><a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a></h3>
										</div>
									</div>
								</div>
							</div>
								<?php } ?>
							<?php endwhile;
							wp_reset_postdata();
						else :
							echo '<p>Sorry, no posts matched your criteria.</p>';
						endif
						?>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-12">
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
		</div>
	</div>
</section>
<section class="hot-news-area pb-40">
	<div class="container"> 
		<div class="row"> 
			<div class="col-lg-8 col-md-12">
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="health-lifestyle-news">
							<div class="section-title">
								<h2>Phun thêu môi</h2>
							</div>
							<div class="lifestyle_slider1">
								<div class="slider-1 owl-carousel owl-loaded owl-drag">
									<?php $args = array(
										'post_type' => 'post',
										'posts_per_page'  =>  3,
										'tax_query' => array(
											array(
												'taxonomy' => 'category',
												'field'    => 'slug',
												'terms'    => 'phun-theu-moi',
											),
										),
									);
									$the_query = new WP_Query( $args );
									if ( $the_query->have_posts() ) :
										while ( $the_query->have_posts() ) : $the_query->the_post() ?>
											<div class="single-health-lifestyle-news">
												<div class="news-image">
													<a href="<?php echo get_permalink() ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"></a>
												</div>
												<div class="news-content">
													<ul>
														<li><i class="fas fa-calendar-alt"></i> <?php echo get_the_date(); ?></li>
													</ul>
													<h3><a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a></h3>
													<?php the_excerpt(); ?>
												</div>
											</div>
										<?php endwhile;
										wp_reset_postdata();
									else :
										echo '<p>Sorry, no posts matched your criteria.</p>';
									endif
									?>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="health-lifestyle-news">
							<div class="section-title">
								<h2>Phun thêu chân mày</h2>
							</div>
							<div class="lifestyle_slider1">
								<div class="slider-1 owl-carousel owl-loaded owl-drag">
									<?php $args = array(
										'post_type' => 'post',
										'posts_per_page'  =>  3,
										'tax_query' => array(
											array(
												'taxonomy' => 'category',
												'field'    => 'slug',
												'terms'    => 'phun-theu-chan-may',
											),
										),
									);
									$the_query = new WP_Query( $args );
									if ( $the_query->have_posts() ) :
										while ( $the_query->have_posts() ) : $the_query->the_post() ?>
											<div class="single-health-lifestyle-news">
												<div class="news-image">
													<a href="<?php echo get_permalink() ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"></a>
												</div>
												<div class="news-content">
													<ul>
														<li><i class="fas fa-calendar-alt"></i> <?php echo get_the_date(); ?></li>
													</ul>
													<h3><a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a></h3>
													<?php the_excerpt(); ?>
												</div>
											</div>
										<?php endwhile;
										wp_reset_postdata();
									else :
										echo '<p>Sorry, no posts matched your criteria.</p>';
									endif
									?>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-md-12">
						<div class="around-the-world-news pt-40"> 
							<div class="section-title"> 
								<h2>Tin tức làm đẹp</h2> 
							</div>
							<div class="row"> 
								<?php $args = array(
									'post_type' => 'post',
									'posts_per_page'  =>  6,
									'tax_query' => array(
										array(
											'taxonomy' => 'category',
											'field'    => 'slug',
											'terms'    => 'tin-tuc-lam-dep',
										),
									),
								);
								$the_query = new WP_Query( $args );
								$count = 0;
								if ( $the_query->have_posts() ) :
									while ( $the_query->have_posts() ) : $the_query->the_post(); $count++ ?>
										<?php if($count == 1 || $count == 2){ ?>
											<div class="col-lg-6 col-md-6"> 
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
										<?php } ?>
										<?php if($count == 3 || $count == 4 || $count == 5 || $count == 6){ ?>
											<div class="col-lg-6 col-md-6"> 
												<div class="media around-the-world-news-media align-items-center dpf">
													<a href="<?php echo get_permalink() ?>"> <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"> </a> 
													<div class="content"> 
														<span><i class="fas fa-calendar-alt"></i> <?php echo get_the_date(); ?></span>
														<h3><a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a></h3> 
													</div>
												</div>
											</div>
										<?php } ?>
									<?php endwhile;
									wp_reset_postdata();
								else :
									echo '<p>Sorry, no posts matched your criteria.</p>';
								endif
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-12"> 
				<div class="featured-news"> 
					<div class="section-title"> 
						<h2>Tin tức làm đẹp</h2> 
					</div>
					<?php $args = array(
						'post_type' => 'post',
						'posts_per_page'  =>  4,
						// 'orderby' => 'rand',
						'tax_query' => array(
							array(
								'taxonomy' => 'category',
								'field'    => 'slug',
								'terms'    => 'tin-tuc-lam-dep',
							),
						),
					);
					$the_query = new WP_Query( $args );
					$count = 0;
					if ( $the_query->have_posts() ) :
						while ( $the_query->have_posts() ) : $the_query->the_post(); $count++ ?>
							<div class="single-featured-news"> 
								<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
								<div class="news-content">
									<ul> 
										<li><i class="far fa-user"></i> <?php echo get_the_author() ?></li>
										<li><i class="fas fa-calendar-alt"></i> <?php echo get_the_date(); ?></li>
									</ul> 
									<h3><a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a></h3> 
								</div>
								<div class="tags bg-<?php echo $count; ?>">
									<?php
									$categories = get_the_category();
									if(!empty($categories)){
										echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
									}
									?>
								</div>
							</div>
						<?php endwhile;
						wp_reset_postdata();
					else :
						echo '<p>Sorry, no posts matched your criteria.</p>';
					endif
					?>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="gallery-news-area ptb-40">
	<div class="container">
		<div class="row"> 
			<div class="col-lg-8 col-md-12"> 
				<div class="gallery-news"> 
					<div class="section-title"> <h2>Tin tổng hợp</h2> </div>
					<div class="slider-1 owl-carousel owl-loaded owl-drag">
						<?php $args = array(
							'post_type' => 'post',
							'posts_per_page'  =>  4,
							'orderby' => 'rand',
						);
						$the_query = new WP_Query( $args );
						$count = 0;
						if ( $the_query->have_posts() ) :
							while ( $the_query->have_posts() ) : $the_query->the_post(); $count++ ?>
								<div class="row align-items-center m-0">
									<div class="col-lg-6 col-md-6 p-0">
										<div class="gallery-news-content">
											<span><i class="fas fa-calendar-alt"></i> <?php echo get_the_date(); ?></span>
											<h3><a href="<?php echo get_permalink() ?>"></i><?php the_title(); ?></a></h3>
											<?php the_excerpt(); ?>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 p-0">
										<div class="gallery-news-image">
											<a href="<?php echo get_permalink() ?>"><img src="<?php echo get_first_image(); ?>" alt="image"></a>
										</div>
									</div>
								</div>
							<?php endwhile;
							wp_reset_postdata();
						else :
							echo '<p>Sorry, no posts matched your criteria.</p>';
						endif
						?>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-12"> 
				<div class="gallery-news-list">
					<?php $args = array(
							'post_type' => 'post',
							'posts_per_page'  =>  2,
							'orderby' => 'rand',
						);
						$the_query = new WP_Query( $args );
						$count = 0;
						if ( $the_query->have_posts() ) :
							while ( $the_query->have_posts() ) : $the_query->the_post(); $count++ ?>
								<div class="media gallery-news-media align-items-center dpf">
									<div class="image">
										<img src="<?php the_post_thumbnail_url(); ?>" alt="image">
									</div>
									<div class="content">
										<span><i class="fas fa-calendar-alt"></i> <?php echo get_the_date(); ?></span>
										<h3><a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a></h3> 
									</div>
								</div>
							<?php endwhile;
							wp_reset_postdata();
						else :
							echo '<p>Sorry, no posts matched your criteria.</p>';
						endif
						?>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="all-news-area ptb-40">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="fashion-news">
					<div class="section-title"><h2>Phun thêu chân mày</h2></div>
					<?php $args = array(
						'post_type' => 'post',
						'posts_per_page'  =>  4,
						'tax_query' => array(
							array(
								'taxonomy' => 'category',
								'field'    => 'slug',
								'terms'    => 'phun-theu-chan-may',
							),
						),
					);
					$the_query = new WP_Query( $args );
					$count = 0;
					if ( $the_query->have_posts() ) :
						while ( $the_query->have_posts() ) : $the_query->the_post(); $count++ ?>
							<?php if($count == 1){ ?>
								<div class="single-fashion-news">
									<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
									<div class="news-content">
										<ul>
											<li><i class="far fa-user"></i> <?php echo get_the_author() ?></li>
											<li><i class="fas fa-calendar-alt"></i> <?php echo get_the_date(); ?></li>
										</ul>
										<h3><a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a></h3>
									</div>
								</div>
								<div class="fashion-inner-news">
							<?php } ?>
							<?php if($count == 2 || $count == 3){ ?>
								<div class="single-fashion-inner-news">
									<span><i class="fas fa-calendar-alt"></i> <?php echo get_the_date(); ?></span>
									<h3><a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a></h3>
								</div>
							<?php } ?>
							<?php if($count == 4){ ?>
								<div class="single-fashion-inner-news">
									<span><i class="fas fa-calendar-alt"></i> <?php echo get_the_date(); ?></span>
									<h3><a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a></h3>
								</div>
							</div>
							<?php } ?>
						<?php endwhile;
						wp_reset_postdata();
					else :
						echo '<p>Sorry, no posts matched your criteria.</p>';
					endif
					?>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="fashion-news">
					<div class="section-title"><h2>Phun thêu chân mày</h2></div>
					<?php $args = array(
						'post_type' => 'post',
						'posts_per_page'  =>  4,
						'tax_query' => array(
							array(
								'taxonomy' => 'category',
								'field'    => 'slug',
								'terms'    => 'phun-theu-chan-may',
							),
						),
					);
					$the_query = new WP_Query( $args );
					$count = 0;
					if ( $the_query->have_posts() ) :
						while ( $the_query->have_posts() ) : $the_query->the_post(); $count++ ?>
							<?php if($count == 1){ ?>
								<div class="single-fashion-news">
									<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
									<div class="news-content">
										<ul>
											<li><i class="far fa-user"></i> <?php echo get_the_author() ?></li>
											<li><i class="fas fa-calendar-alt"></i> <?php echo get_the_date(); ?></li>
										</ul>
										<h3><a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a></h3>
									</div>
								</div>
								<div class="fashion-inner-news">
							<?php } ?>
							<?php if($count == 2 || $count == 3){ ?>
								<div class="single-fashion-inner-news">
									<span><i class="fas fa-calendar-alt"></i> <?php echo get_the_date(); ?></span>
									<h3><a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a></h3>
								</div>
							<?php } ?>
							<?php if($count == 4){ ?>
								<div class="single-fashion-inner-news">
									<span><i class="fas fa-calendar-alt"></i> <?php echo get_the_date(); ?></span>
									<h3><a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a></h3>
								</div>
							</div>
							<?php } ?>
						<?php endwhile;
						wp_reset_postdata();
					else :
						echo '<p>Sorry, no posts matched your criteria.</p>';
					endif
					?>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="fashion-news">
					<div class="section-title"><h2>Phun thêu chân mày</h2></div>
					<?php $args = array(
						'post_type' => 'post',
						'posts_per_page'  =>  4,
						'tax_query' => array(
							array(
								'taxonomy' => 'category',
								'field'    => 'slug',
								'terms'    => 'phun-theu-chan-may',
							),
						),
					);
					$the_query = new WP_Query( $args );
					$count = 0;
					if ( $the_query->have_posts() ) :
						while ( $the_query->have_posts() ) : $the_query->the_post(); $count++ ?>
							<?php if($count == 1){ ?>
								<div class="single-fashion-news">
									<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
									<div class="news-content">
										<ul>
											<li><i class="far fa-user"></i> <?php echo get_the_author() ?></li>
											<li><i class="fas fa-calendar-alt"></i> <?php echo get_the_date(); ?></li>
										</ul>
										<h3><a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a></h3>
									</div>
								</div>
								<div class="fashion-inner-news">
							<?php } ?>
							<?php if($count == 2 || $count == 3){ ?>
								<div class="single-fashion-inner-news">
									<span><i class="fas fa-calendar-alt"></i> <?php echo get_the_date(); ?></span>
									<h3><a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a></h3>
								</div>
							<?php } ?>
							<?php if($count == 4){ ?>
								<div class="single-fashion-inner-news">
									<span><i class="fas fa-calendar-alt"></i> <?php echo get_the_date(); ?></span>
									<h3><a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a></h3>
								</div>
							</div>
							<?php } ?>
						<?php endwhile;
						wp_reset_postdata();
					else :
						echo '<p>Sorry, no posts matched your criteria.</p>';
					endif
					?>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="more-news-area">
	<div class="container">
		<div class="more-news-inner">
			<div class="section-title"><h2>Tin tức làm đẹp</h2></div>
			<div class="row">
				<div class="slider-2 owl-carousel owl-loaded owl-drag">
					<?php $args = array(
						'post_type' => 'post',
						'posts_per_page'  =>  4,
						'tax_query' => array(
							array(
								'taxonomy' => 'category',
								'field'    => 'slug',
								'terms'    => 'tin-tuc-lam-dep',
							),
						),
					);
					$the_query = new WP_Query( $args );
					$count = 0;
					if ( $the_query->have_posts() ) :
						while ( $the_query->have_posts() ) : $the_query->the_post(); $count++ ?>
							<div class="single-more-news">
								<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
								<div class="news-content">
									<ul>
										<li><i class="icofont-user-suited"></i> <?php echo get_the_author() ?></li>
										<li><i class="icofont-calendar"></i> <?php echo get_the_date(); ?></li>
									</ul>
									<h3><a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a></h3>
								</div>
								<div class="tags bg-<?php echo $count; ?>">
									<?php
									$categories = get_the_category();
									if(!empty($categories)){
										echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
									}
									?>
								</div>
							</div>
						<?php endwhile;
						wp_reset_postdata();
					else :
						echo '<p>Sorry, no posts matched your criteria.</p>';
					endif
					?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>