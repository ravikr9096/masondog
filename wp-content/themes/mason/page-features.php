<?php get_header('inner');?>
<div class="inner-pg-banner">
	<img src="<?php echo get_template_directory_uri();?>/images/slider-img/page-banner.png" alt="page Banner">
	<h2 class="banner-titel">Features</h2>
</div>
<div class="bdy-sect">
	<div class="wpr">
		<h1 class="sec-title inner-pg-title">MEET OUR STYLISH CREW OF FRIENDS...</h1>
		<ul class="fetur-lst">
			<?php
				$args = array(  
								'post_type' => 'product',  
								'meta_key' => '_featured',  
								'meta_value' => 'yes',  
								'posts_per_page' => 10  
							);  
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

						<li >    

							<a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">

								<?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" />'; ?>                   
							<h2><?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?></h2>
							</a>

						</li>

			<?php endwhile; ?>
			<?php wp_reset_query(); ?>
		</ul>
		
		
	</div>
</div>

<?php get_footer(); ?>