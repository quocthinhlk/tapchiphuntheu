<footer class="footer-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="single-footer-widget">
					<h3>Về chúng tôi</h3>
					<div class="contact-info">
						<p><?php the_field('footer_about_us', 'option'); ?></p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-footer-widget">
					<h3>Liên kết nhanh</h3>
					<div class="fast-link">
						<ul>
							<?php 
							$args = array(
							  'type'      => 'post',
							  'parent'    => '',
							  'hide_empty' => 1,
							);
							$categories = get_categories( $args );
							foreach ($categories as $categorie) {
							  $name         = $categorie->name;
							  $slug         =   $categorie->slug;
							  $post_number    = $categorie->category_count;
							?>
							<li><a href="<?php echo get_bloginfo('url').'/category/'.$slug; ?>"><?php echo $name; ?></a></li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-footer-widget">
					<h3>Liên hệ</h3>
					<div class="contact-info">
						<ul>
							<li><i class="fas fa-map-marker-alt"></i> <?php the_field('address', 'option'); ?></li>
							<li><i class="fas fa-phone"></i> <a href="tel:<?php the_field('phone', 'option'); ?>"><?php the_field('phone', 'option'); ?></a></li>
							<li><i class="fas fa-envelope"></i> <a href = "mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a></li>
						</ul>
					</div>
					<div class="connect-social">
						<ul>
							<li><a href="<?php the_field('facebook', 'option'); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="<?php the_field('twitter', 'option'); ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="<?php the_field('linkedin', 'option'); ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
							<li><a href="<?php the_field('instagram', 'option'); ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
							<li><a href="<?php the_field('pinterest', 'option'); ?>" target="_blank"><i class="fab fa-pinterest"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="copyright-area">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-12 col-md-12">
					<p><?php the_field('copyright', 'option'); ?></p>
				</div>
			</div>
		</div>
	</div>
</footer>
 <a href="#" class="go-to-top" style="display: inline;"><i class="fa fa-angle-up"></i></a>
</body>
<?php wp_footer(); ?>
</html>