<?php
/**
 * template name: Giới thiệu
 */
?>

<?php get_header() ?>
<div class="big-wrapper">
	<div class="wp_bread_crumb">
		<div class="bread_crumb">
			<div class="container">
				<h1 class="header">Giới thiệu</h1>
				<div class="breadcrumb"><a href="<?php echo get_bloginfo('url') ?>">Trang chủ</a> &nbsp;  <span>»</span> &nbsp; <span class="current-item">Giới thiệu</span></div>
			</div>
		</div>
	</div>
	<div class="wrapper"> 
		<div class="container"> 
			<div class="row section-space"> 
				<div class="col-md-8">
				</div>
				<?php get_sidebar(); ?> 
			</div>
		</div> 
	</div> 
</div>
<?php get_footer() ?>