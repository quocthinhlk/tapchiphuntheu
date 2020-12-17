<?php
/**
 * template name: Liên hệ
 */
?>

<?php get_header(); ?>
<div class="page-title-area">
	<div class="container">
		<ul class="breadcrumb">
			<li><a href="<?php echo get_bloginfo('url') ?>"><i class="fas fa-home"></i> Trang chủ</a></li>
			<li>&nbsp;>&nbsp;</li>
			<li>Liên hệ</li>
		</ul>
	</div>
</div>
<section class="contact-area pb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="contact-form">
                    <h3>Gửi liên hệ cho chúng tôi</h3>
                    <form id="contactForm" novalidate="true">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Họ tên" required="" data-error="Please enter your name">
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group has-error">
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Số điện thoại" required="" data-error="Please enter your phone">
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="msg_subject" id="msg_subject" required="" data-error="Please enter your subject" placeholder="Chủ đề">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group has-error">
                                    <textarea placeholder="Nội dung liên hệ" name="message" id="message" class="form-control" cols="30" rows="10" required="" data-error="Write your message"></textarea>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-primary disabled" style="pointer-events: all; cursor: pointer;">Gửi</button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="contact-info">
                    <h3>Thông tin liên hệ</h3>
                    <p><?php the_field('footer_about_us', 'option'); ?></p>
                    <ul>
                        <li><i class="fas fa-map-marker-alt"></i> <?php the_field('address', 'option'); ?></li>
                        <li><i class="fas fa-phone"></i> <a href="tel:<?php the_field('phone', 'option'); ?>"><?php the_field('phone', 'option'); ?></a></li>
                        <li><i class="fas fa-envelope"></i> <a href = "mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a></li>
                        <li><i class="fas fa-globe"></i> <a href="<?php the_field('website', 'option'); ?>" target="_blank"><?php the_field('website', 'option'); ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="contact_map">
    	<?php the_field('embed_code'); ?>
    </div>
</section>
<?php get_footer(); ?>