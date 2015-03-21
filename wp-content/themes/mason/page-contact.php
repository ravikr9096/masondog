<?php get_header();?>
<div class="inner-pg-banner">
	<img src="<?php echo get_template_directory_uri();?>/images/slider-img/page-banner.png" alt="page Banner">
	<h2 class="banner-titel">Contact Us</h2>
</div>
<div class="bdy-sect">
	<div class="wpr">
		<h1 class="sec-title inner-pg-title">Do you have any questions? Need help?<br>
		 or simply just want to say Hi?<br>
		 Contact Us! </h1>
		<div class="cnt-bx">
			<div class="input-bx">
				<?php 
					while(have_posts()):
						the_post();
						the_content();
					endwhile;

				?>
			</div>	
		</div>
	</div>
</div>


<?php get_footer();?>