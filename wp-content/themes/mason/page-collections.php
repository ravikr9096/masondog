
<?php 
/*
Template Name: Collection page
*/
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
					<li class="filter" data-filter="all">All</li>
					<li class="filter" data-filter=".category-1">NEW ARRIVALS</li>
					<li class="filter" data-filter=".category-2">TANKS</li>
					<li class="filter" data-filter=".category-3">T-SHIRTS</li>
				</ul>
				<span>Styles</span>
			</div>
			
			<ul id="Container" class="container">
			
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
					//echo '<li><div class="prdt-nm"><a href="' . get_term_link( $product_category ) . '">' . $product_category->name .'</a>';
					echo '<li class="mix category-1">
							<div class="prdt-nm">
								<a >'. $product_category->name .'</a>
							</div><div class="prdt-img">';
			?>
			<?php
			$args = array( 'post_type' => 'product', 'posts_per_page' => 20, 'product_cat' => $product_category->slug, 'orderby' => 'rand' );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); global $product;
			//print_r($product);
			?>
								
				
					<a href="<?php echo $product->post->guid?>" class="prd-img">
					<?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="300px" height="300px" />'; ?> <span class="prd-inf"><?php the_title(); ?><br><?php echo $product->get_price_html(); ?></span>
					
					
					</a>
					
				
				 <?php //woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
				
				<?php endwhile; ?>
				<?php echo '</div><br/></li>';?>
				<?php };?>
				</div>
				</li>
				<?php };?>
					</ul>
				<!------------------------------------------------->

				<!------------------------------------------------->
		
		</div>
	</div>
</div>


<?php get_footer();?>