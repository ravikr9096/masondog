<?php 
register_nav_menu('menu', 'primary menu'); 

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
add_theme_support( 'woocommerce' );
} 

function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );


/* override proceed to checkout function to chnage proceed teext */
function proceed_to_checkout_changed() {
		$checkout_url = WC()->cart->get_checkout_url();

		?>
		<a href="<?php echo $checkout_url; ?>" class="chkout-btn font-icn"><?php _e( '&#xf07a; Checkout', 'woocommerce' ); ?></a>
		<?php
	}
	
	
remove_action( 'woocommerce_proceed_to_checkout', 'woocommerce_button_proceed_to_checkout', 10 );
add_action( 'woocommerce_proceed_to_checkout', 'proceed_to_checkout_changed', 10 );
	
	?>