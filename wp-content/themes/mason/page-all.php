<?php 
get_header('inner');?>
<div class="inner-pg-banner">
	<img src="<?php echo get_template_directory_uri();?>/images/slider-img/page-banner.png" alt="page Banner">
	<h2 class="banner-titel">Collections</h2>
</div>
<div class="bdy-sect">
	<div class="wpr">
		<div class="collections">
			<div class="controls">
				<ul class="control-btns">
					<li class="filter" data-filter="all"><a href="<?php echo home_url();?>/all">All</a></li>
					<li class="filter" data-filter=".category-1"><a href="<?php echo home_url();?>/new-arrival">NEW ARRIVALS</a></li>
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
							echo '<li class="filter"><a href="'. home_url().'/collections?category='.$product_category->slug.'" title="'.$product_category->name.'">'.$product_category->name.'
					</a></li>';
						}
					}
					?>
					
				</ul>
				<span>Styles</span>
			</div>
			
			<ul class="fetur-lst all-lst">
			<?php
				$args = array(  
								'post_type' => 'product',  
								'meta_key' => '_featured',  
								'meta_value' => 'no',  
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
				<!------------------------------------------------->

				<!------------------------------------------------->
		
		</div>
	</div>
</div>


<?php get_footer();?>