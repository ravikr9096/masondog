<?php
/**
 * Cart Page
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

wc_print_notices();

do_action( 'woocommerce_before_cart' ); ?>

<form action="<?php echo esc_url( WC()->cart->get_cart_url() ); ?>" method="post">

<?php do_action( 'woocommerce_before_cart_table' ); ?>

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
		<h1 class="sec-title">Your Cart</h1>
		<div class="cart-contener">
			<div class="cart-listing">
				<ul class="cart-list">
				
				<?php
		foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
			$_product     = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
			$product_id   = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

			if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
				?>
					<li>
					<div class="sml-clm">
						<span class="tblcell">
						<?php
							echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf( '<a href="#" class="font-icn rmv-itm">&#xf00d;</a>', esc_url( WC()->cart->get_remove_url( $cart_item_key ) ), __( 'Remove this item', 'woocommerce' ) ), $cart_item_key );
						?>
						</span>
					</div>
					<div class="sml-clm">
						<span class="tblcell">
							<?php
							$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

							if ( ! $_product->is_visible() )
								echo $thumbnail;
							else
								printf( '<a href="%s" class="prdt-imge">%s</a>', $_product->get_permalink( $cart_item ), $thumbnail );
						?></span>
					</div>
					<div class="width-clm">
						<span class="tblcell">
						<p class="prodt-name">
							<?php
							if ( ! $_product->is_visible() )
								echo apply_filters( 'woocommerce_cart_item_name', $_product->get_title(), $cart_item, $cart_item_key ) . '&nbsp;';
							else
								echo apply_filters( 'woocommerce_cart_item_name', sprintf( '%s ', $_product->get_title() ), $cart_item, $cart_item_key );

							// Meta data
							echo WC()->cart->get_item_data( $cart_item );

               				// Backorder notification
               				if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) )
               					echo '<p class="backorder_notification">' . __( 'Available on backorder', 'woocommerce' ) . '</p>';
						?>
						</p>
						<p class="prodt-pric">
							<?php
							echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );
						?>
						<span class="qty-mlti">(x2)</span>
						</p>
						<p class="prodt-size">
							'S'
						</p>
						</span>
					</div>
					<div class="sml-clm">
						<span class="tblcell">
						<?php
							if ( $_product->is_sold_individually() ) {
								$product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
							} else {
								$product_quantity = woocommerce_quantity_input( array(
									'input_name'  => "cart[{$cart_item_key}][qty]",
									'input_value' => $cart_item['quantity'],
									'max_value'   => $_product->backorders_allowed() ? '' : $_product->get_stock_quantity(),
									'min_value'   => '0'
								), $_product, false );
							}

							echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key );
						?>
						</span>
					</div>
					</li>
					<?php
			}
		}

		do_action( 'woocommerce_cart_contents' );
		?>
					
					<!--<li>
					<div class="sml-clm">
						<span class="tblcell"><a href="#" class="font-icn rmv-itm">&#xf00d;</a></span>
					</div>
					<div class="sml-clm">
						<span class="tblcell"><a href="#" class="prdt-imge"><img src="images/products-img/img-1.png"></a></span>
					</div>
					<div class="width-clm">
						<span class="tblcell">
						<p class="prodt-name">
							The FLORAL
						</p>
						<p class="prodt-pric">
							<sup>$</sup>62.00 <span class="qty-mlti">(x1)</span>
						</p>
						<p class="prodt-size">
							'M'
						</p>
						</span>
					</div>
					<div class="sml-clm">
						<span class="tblcell"><input type="text" value="1"></span>
					</div>
					</li>-->
				</ul>
			</div>
			<div class="cart-costs">
				<!--<p class="items-cost">
					Items<span>$166.00</span>
				</p>
				<p class="shipping-cost">
					Shpping <span>Applicable Fees Apply</span>
				</p>
				<p class="total-cost">
					<em>Total</em><span><sup>$</sup>166.00</span>
				</p>-->
				<?php do_action( 'woocommerce_after_cart_table' ); ?>
			</div>
			<div class="cart-btn-holder">
				<a href="#" class="crt-btn">Continue Shopping</a>
				<input type="submit" class="button" class="crt-btn" name="update_cart" value="<?php _e( 'Update Cart', 'woocommerce' ); ?>" />
				<input type="submit" value="&#xf07a; Checkout" class="chkout-btn font-icn">
			</div>
		</div>
	</div>
</div>

<?php //do_action( 'woocommerce_after_cart_table' ); ?>

</form>

<div class="cart-collaterals">

	<?php do_action( 'woocommerce_cart_collaterals' ); ?>

	<?php woocommerce_cart_totals(); ?>

</div>

<?php do_action( 'woocommerce_after_cart' ); ?>






<!--

<form action="<?php echo esc_url( WC()->cart->get_cart_url() ); ?>" method="post">

<?php do_action( 'woocommerce_before_cart_table' ); ?>

<table class="shop_table cart" cellspacing="0">
	<thead>
		<tr>
			<th class="product-remove">&nbsp;</th>
			<th class="product-thumbnail">&nbsp;</th>
			<th class="product-name"><?php _e( 'Product', 'woocommerce' ); ?></th>
			<th class="product-price"><?php _e( 'Price', 'woocommerce' ); ?></th>
			<th class="product-quantity"><?php _e( 'Quantity', 'woocommerce' ); ?></th>
			<th class="product-subtotal"><?php _e( 'Total', 'woocommerce' ); ?></th>
		</tr>
	</thead>
	<tbody>
		<?php do_action( 'woocommerce_before_cart_contents' ); ?>

		<?php
		foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
			$_product     = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
			$product_id   = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

			if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
				?>
				<tr class="<?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">

					<td class="product-remove">
						<?php
							echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf( '<a href="%s" class="remove" title="%s">&times;</a>', esc_url( WC()->cart->get_remove_url( $cart_item_key ) ), __( 'Remove this item', 'woocommerce' ) ), $cart_item_key );
						?>
					</td>

					<td class="product-thumbnail">
						<?php
							$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

							if ( ! $_product->is_visible() )
								echo $thumbnail;
							else
								printf( '<a href="%s">%s</a>', $_product->get_permalink( $cart_item ), $thumbnail );
						?>
					</td>

					<td class="product-name">
						<?php
							if ( ! $_product->is_visible() )
								echo apply_filters( 'woocommerce_cart_item_name', $_product->get_title(), $cart_item, $cart_item_key ) . '&nbsp;';
							else
								echo apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s </a>', $_product->get_permalink( $cart_item ), $_product->get_title() ), $cart_item, $cart_item_key );

							// Meta data
							echo WC()->cart->get_item_data( $cart_item );

               				// Backorder notification
               				if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) )
               					echo '<p class="backorder_notification">' . __( 'Available on backorder', 'woocommerce' ) . '</p>';
						?>
					</td>

					<td class="product-price">
						<?php
							echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );
						?>
					</td>

					<td class="product-quantity">
						<?php
							if ( $_product->is_sold_individually() ) {
								$product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
							} else {
								$product_quantity = woocommerce_quantity_input( array(
									'input_name'  => "cart[{$cart_item_key}][qty]",
									'input_value' => $cart_item['quantity'],
									'max_value'   => $_product->backorders_allowed() ? '' : $_product->get_stock_quantity(),
									'min_value'   => '0'
								), $_product, false );
							}

							echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key );
						?>
					</td>

					<td class="product-subtotal">
						<?php
							echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key );
						?>
					</td>
				</tr>
				<?php
			}
		}

		do_action( 'woocommerce_cart_contents' );
		?>
		<tr>
			<td colspan="6" class="actions">

				<?php if ( WC()->cart->coupons_enabled() ) { ?>
					<div class="coupon">

						<label for="coupon_code"><?php _e( 'Coupon', 'woocommerce' ); ?>:</label> <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="<?php _e( 'Coupon code', 'woocommerce' ); ?>" /> <input type="submit" class="button" name="apply_coupon" value="<?php _e( 'Apply Coupon', 'woocommerce' ); ?>" />

						<?php do_action( 'woocommerce_cart_coupon' ); ?>

					</div>
				<?php } ?>

				<input type="submit" class="button" name="update_cart" value="<?php _e( 'Update Cart', 'woocommerce' ); ?>" />

				<?php do_action( 'woocommerce_cart_actions' ); ?>

				<?php wp_nonce_field( 'woocommerce-cart' ); ?>
			</td>
		</tr>

		<?php do_action( 'woocommerce_after_cart_contents' ); ?>
	</tbody>
</table>

<?php do_action( 'woocommerce_after_cart_table' ); ?>

</form>

<div class="cart-collaterals">

	<?php do_action( 'woocommerce_cart_collaterals' ); ?>

	<?php woocommerce_cart_totals(); ?>

</div>

<?php do_action( 'woocommerce_after_cart' ); ?>

-->
