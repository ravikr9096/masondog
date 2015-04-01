<?php get_header();?>
<?php global $post, $product, $woocommerce; ?>
<div class="inner-pg-banner">
	<img src="<?php echo get_template_directory_uri();?>/images/slider-img/page-banner.png" alt="page Banner">
	<h2 class="banner-titel">Collections</h2>
</div>
<!---------------------------------------------------------------------->
<div class="bdy-sect">
	<div class="wpr">
		<div class="collections">
			<div class="controls">
				<ul class="control-btns">
					<li class="filter" data-filter="all"><a href="#">All</a></li>
					<li class="filter" data-filter=".category-1"><a href="#">NEW ARRIVALS</a></li>
					<li class="filter active" data-filter=".category-2"><a href="#">TANKS</a></li>
					<li class="filter" data-filter=".category-3"><a href="#">T-SHIRTS</a></li>
				</ul>
				<span>Styles</span>
			</div>
		</div>
		<div style="clear:both;"></div>
		<?php if(isset($_REQUEST['add-to-cart'])): ?>
			<div class="woocommerce-message">
				<a class="button wc-forward" href="<?php echo home_url(); ?>/cart/">View Cart</a> "<?php echo get_the_title($_REQUEST['add-to-cart']) ?>" was successfully added to your cart.
			</div>
	<?php endif; ?>
		<div class="prod-dtl">
			<div class="prdt-view-img">
				<div class="targetarea">
					<?php include 'single-product/product-image.php'; ?>
				</div>
					<?php include 'single-product/product-thumbnails.php'; ?>
			</div>
			
			<div class="prdt-info-txt">
				<div class="prdt-name">
					<h2><?php the_title(); ?></h2>
					<span class="seprt"></span>
					<p>
						<div itemprop="offers" itemscope itemtype="http://schema.org/Offer">

						<p class="price"><?php echo $product->get_price_html(); ?></p>

						<meta itemprop="price" content="<?php echo $product->get_price(); ?>" />
						<meta itemprop="priceCurrency" content="<?php echo get_woocommerce_currency(); ?>" />
						<link itemprop="availability" href="http://schema.org/<?php echo $product->is_in_stock() ? 'InStock' : 'OutOfStock'; ?>" />

							</div>
					</p>
				</div>
				<div class="prdt-descp">
					<?php the_content(); ?>
				</div>
				<div class="prdt-name">
				<?php add_action('woocommerce_after_shop_loop_item','woocommerce_template_single_add_to_cart');
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
do_action( 'woocommerce_after_shop_loop_item' ); ?>
				
					<!-- <select>
						<option>Select Size</option>
						<option>XS</option>
						<option>S</option>
						<option>M</option>
						<option>L</option>
						<option>XL</option>
					</select> -->
					<?php //print do_shortcode('[add_to_cart id="'.$post->ID.'"]'); ?>
				</div>
				<div class="prdt-name">
					<a href="#" class="prdt-share">Like it</a><a href="#" class="prdt-share">Tweet it</a><a href="#" class="prdt-share">Pin it</a>
				</div>
			</div>
			<?php include 'single-product/related.php'; ?>
		</div>
	</div>
</div>


		<?php wp_enqueue_script('jquery'); ?>
<!---------------------------------------------------------------------->
		<script src="<?php print get_template_directory_uri(); ?>/js/jquery.elevateZoom-2.5.3.min.js"></script>
		<script src="<?php print get_template_directory_uri(); ?>/js/jquery.fancybox.js"></script>
		<script type="text/javascript">
			jQuery("#img_01").elevateZoom({ zoomType : "lens", lensShape : "round", lensSize : 200, zoomLevel: 10 ,scrollZoom : false});
			//pass the images to Fancybox
			jQuery("#img_01").bind("click", function(e) {  
			var ez =   $('#img_01').data('elevateZoom');	
			jQuery.fancybox(ez.getGalleryList());
			return false;
			});
		</script>
		

<?php get_footer()?>