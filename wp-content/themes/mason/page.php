<?php get_header();?>
<div class="inner-pg-banner">
	<img src="<?php print get_template_directory_uri(); ?>/images/slider-img/page-banner.png" alt="page Banner">
	<h2 class="banner-titel">Cart</h2>
</div>
<div class="bdy-sect">
	<div class="wpr">
		<?php while(have_posts()):the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile ?> 
	</div>
</div>

<?php get_footer();?>