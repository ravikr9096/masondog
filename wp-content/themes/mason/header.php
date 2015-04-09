<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>MASON-(dog)</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/mason-style.css" type="text/css"/>
<!--<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/mason-style1.css" type="text/css"/>-->
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="preloader">
</div>
<div class="header">
	<div class="wpr">
		<a href="<?php echo home_url();?>" class="logo" title="MASON(dog)"><img src="<?php echo get_template_directory_uri();?>/images/logo.png" alt="MASON(dog)"></a>
		<div class="hdr-optn rit">
		<?php add_modal_login_button( $login_text='SIGN IN ' , $logout_text='LOG OUT' , $logout_url='' , $show_admin=false ); ?>
		<!--<a title="Sign In" data-reveal-id="myModal" >Sign In</a>-->
			<?php
				global $woocommerce;

				// get cart quantity
				$qty = $woocommerce->cart->get_cart_contents_count();

				// get cart total
				$total = $woocommerce->cart->get_cart_total();

				// get cart url
				$cart_url = $woocommerce->cart->get_cart_url();

				// if multiple products in cart
				if($qty>1)
					  echo '<a href="'.$cart_url.'"  style="margin-left:20px;" title="View Cart">( '.$qty.' PRODUCTS )</a>';

				// if single product in cart
				if($qty==1)
					  echo '<a href="'.$cart_url.'"  style="margin-left:20px;" title="View Cart">( 1 PRODUCT )</a>';

				?>
			<a href="<?php echo home_url();?>/cart" class="font-icn" title="View Cart" id="cart-icon-menu" >&#xf07a;</a>
			<div id="cart-mini-view" style="display:none;">
				<h4>Products in cart</h4>
				<a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf (_n( '%d item', '%d items', WC()->cart->cart_contents_count ), WC()->cart->cart_contents_count ); ?> - <?php echo WC()->cart->get_cart_total(); ?></a>
			</div>
			
			<div class="srch">
				<input type="text" value="" placeholder="Search.."><input type="submit" value="&#xf002;" class="font-icn" title="Search">
			</div>
		</div>
		<div class="main-menus rit">
			<span class="mob-mnu font-icn">&#xf0c9;</span>
			<ul class="menus">
				<?php $items = wp_get_nav_menu_items('header_menu' );
			foreach ($items as $val){
			echo '<li id="menu-' . $val->post_excerpt . '"><a href="'.$val->url.'">'.$val->title.'</a></li>';
				}
			?>
				<!--<li><a href="#" title="Home">Home</a></li>
				<li><a href="#" title="Collection">Collection</a></li>
				<li><a href="#" title="Features">Features</a></li>
				<li><a href="#" title="Behind the Brand">Behind the Brand</a></li>
				<li><a href="#" title="Contact">Contact</a></li> -->
			</ul>
		</div>
	</div>
</div>