<?php
function  alimir_bootModal_login_shortcode(){
	add_action( 'wp_footer', 'alimir_bootModal_form' );
	if (!is_user_logged_in()) :
	return '
		<a href="#" data-toggle="modal" data-target="#alimir_bootmodal">'.login_button_text().'</a>
	';
	else:
	if (get_option( 'option_usermodal' ) != 1):
	return '
		<a href="#" data-toggle="modal" data-target="#alimir_bootmodal">'. login_button_text() .'</a>
	';
	else:
	return '
		<a href="#" disabled="disabled">'. login_button_text() .'</a>
	';	
	endif;
	endif;
}
add_shortcode( 'Alimir_BootModal_Login', 'alimir_bootModal_login_shortcode' );
?>