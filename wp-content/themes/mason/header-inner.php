<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>MASON-(dog)</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/mason-style.css" type="text/css"/>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="preloader">
</div>
<div class="header">
	<div class="wpr">
		<a href="<?php echo home_url();?>" class="logo inner-pg" title="MASON(dog)"><img src="<?php echo get_template_directory_uri();?>/images/logo.png" alt="MASON(dog)"></a>
		<div class="hdr-optn rit">
			<a href="#" title="Sign In" data-reveal-id="myModal">Sign In</a>
			<a href="#" class="font-icn" title="View Cart">&#xf07a;</a>
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