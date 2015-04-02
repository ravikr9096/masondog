
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
			
			<ul id="Container" class="container">
			
			<?php
			$args = array(
				'number'     => $number,
				'orderby'    => $orderby,
				'order'      => $order,
				'hide_empty' => $hide_empty,
				'include'    => $ids
			);
			$product_tags = get_terms( 'product_tag', $args );
			$count = count($product_tags);
			if ( $count > 0 ){
				foreach ( $product_tags as $product_tag ) {
					if($product_tag->slug == 'featured-products'){
						continue;
					}
					//echo '<li><div class="prdt-nm"><a href="' . get_term_link( $product_category ) . '">' . $product_category->name .'</a>';
					
			?>
			<?php
			$args = array( 'post_type' => 'product', 'posts_per_page' => 20, 'product_cat' => $_GET['category'],'product_tag' => $product_tag->slug, 'orderby' => 'rand' );
			$loop = new WP_Query( $args );
			if( $loop->have_posts()) {
			echo '<li class="mix category-1">
							<div class="prdt-nm">
								<a >'. $product_tag->name .'</a>
							</div><div class="prdt-img">';
			}
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