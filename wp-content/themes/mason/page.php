<?php get_header();?>
<div class="inner-pg-banner">
	<?php 
	if(get_the_title() == 'Behind the brand') {
		echo '<img src="'.get_template_directory_uri().'/images/slider-img/brand-behind.png" alt="page Banner">';		
	}
	else {
		echo '<img src="'.get_template_directory_uri().'/images/slider-img/page-banner.png" alt="page Banner">';
	}
	?>
	<h2 class="banner-titel"><?php echo get_the_title();?></h2>
</div>
<div class="bdy-sect">
	<div class="wpr">
		<?php while(have_posts()):the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile ?> 
	</div>
</div>

<?php get_footer();?>