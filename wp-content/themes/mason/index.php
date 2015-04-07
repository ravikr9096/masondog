<?php get_header(); ?>
<div id="wrapper" class="slid-sect">
	<div id="carousel">
	<?php
	$files = scandir(__dir__ .'/images/home-slider-img');
	foreach($files as $file){
		if($file == '.' || $file =='..') {
			continue;
		}
		else {
			echo '<img src="'.get_template_directory_uri().'/images/home-slider-img/'.$file.'">';
			
		}
	}
	
	?>
	<!--<div id="carousel">
		<img src="<?php echo get_template_directory_uri();?>/images/slider-img/image-2.png">
		<img src="<?php echo get_template_directory_uri();?>/images/slider-img/image-1.png">
		<img src="<?php echo get_template_directory_uri();?>/images/slider-img/image-2.png">
		<img src="<?php echo get_template_directory_uri();?>/images/slider-img/image-1.png">
		<img src="<?php echo get_template_directory_uri();?>/images/slider-img/image-2.png">
		<img src="<?php echo get_template_directory_uri();?>/images/slider-img/image-1.png">-->
	</div>
	<a href="#" id="prev" title="Show previous" class="font-icn">&#xf104;</a>
	<a href="#" id="next" title="Show next" class="font-icn">&#xf105; </a>
</div>
<div class="bdy-sect">
	<div class="wpr">
		<h1 class="sec-title">Collections</h1>
		
		<ul class="coltn-lst">
		<?php
			$args = array(
				'number'     => $number,
				'orderby'    => $orderby,
				'order'      => $order,
				'hide_empty' => $hide_empty,
				'include'    => $ids
			);
			$product_categories = get_terms( 'product_cat', $args );
			$count = count($product_categories);
			if ( $count > 0 ){
				foreach ( $product_categories as $product_category ) {
					if($product_category->slug == 'featured-products'){
						continue;
					}
					$thumbnail_id = get_woocommerce_term_meta( $product_category->term_id, 'thumbnail_id', true );
					$image = wp_get_attachment_url( $thumbnail_id );
					echo '<li><a href="'. home_url().'/collections?category='.$product_category->slug.'" title="Best Sellers"><img src="'. $image.'" alt="Best Sellers">
			<h2>'.$product_category->name.'</h2>
			</a></li>';
				}
			}
			?>
		
			<!--<li><a href="#" title="Best Sellers"><img src="<?php echo get_template_directory_uri();?>/images/collection-img/best-sellers.png" alt="Best Sellers">
			<h2>BEST SELLERS</h2>
			</a></li>
			<li><a href="#" title="Tank Top"><img src="<?php echo get_template_directory_uri();?>/images/collection-img/tank-top.png" alt="Tank Top">
			<h2>Tank Top</h2>
			</a></li>
			<li><a href="#" title="T-Shirt"><img src="<?php echo get_template_directory_uri();?>/images/collection-img/t-shirt.png" alt="T-Shirt">
			<h2>T-Shirt</h2>
			</a></li>-->
		</ul>
		<h1 class="sec-title">Features</h1>
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