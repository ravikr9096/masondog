<div class="footer">
	<div class="wpr">
		<ul class="fotr-in">
			<li><a href="#" class="fort-logo" title="MASON(dog)"><img src="<?php echo get_template_directory_uri();?>/images/footer-logo.png" alt="MASON(dog)"></a></li>
			<li>
			<h2 class="fort-titel">WHO WE ARE</h2>
			<a href="#" class="fotr-link" title="ABOUT MASON(dog)">ABOUT MASON(dog)</a>
			<a href="#" class="fotr-link" title="LOOKBOOK">LOOKBOOK</a>
			</li>
			<li>
			<h2 class="fort-titel">CUSTOMER SERVICE</h2>
			<a href="<?php echo home_url();?>/sizing" class="fotr-link" title="SIZING CHART">SIZING CHART</a>
			<a href="#" class="fotr-link" title="SHOPPING INFO">SHOPPING INFO</a>
			<a href="<?php echo home_url();?>/contact" class="fotr-link" title="CONTACT US">CONTACT US</a>
			</li>
			<li>
			<h2 class="fort-titel">FOLLOW US</h2>
			<a href="#" class="socil-link" title="Instagram"><img src="<?php echo get_template_directory_uri();?>/images/instagrame.png" alt="Instagram"></a>
			<a href="#" class="socil-link" title="Facebook"><img src="<?php echo get_template_directory_uri();?>/images/facebook.png" alt="Facebook"></a>
			<a href="#" class="socil-link" title="Pinterest"><img src="<?php echo get_template_directory_uri();?>/images/pinit.png" alt="Pinterest"></a>
			<a href="#" class="socil-link" title="twitter"><img src="<?php echo get_template_directory_uri();?>/images/tweter.png" alt="twitter"></a>
			</li>
		</ul>
		<p class="ftr-coyrit">
			 @ 2015 MASON(dog) ALL RIGHTS RESERVED.
		</p>
	</div>
</div>
<div id="myModal2" class="reveal-modal large">
	<h1 class="modal-titel">CREATE ACCOUNT</h1>
	<div class="half-clm lft">
		<div class="input-bx">
			<label>FIRST NAME :</label><input type="text" placeholder="Your First Name" value="">
		</div>
		<div class="input-bx">
			<label>LAST NAME :</label><input type="text" placeholder="Your Last Name" value="">
		</div>
		<div class="input-bx">
			<label>EMAIL ADDRESS :</label><input type="text" placeholder="Your Email" value="">
		</div>
		<div class="input-bx">
			<label>PASSWORD :</label><input type="password" placeholder="Enter Your Name" value="">
		</div>
	</div>
	<div class="half-clm rit">
		<div class="input-bx">
			<label>DOG'S NAME :</label><input type="text" placeholder="Enter Dog's Name" value="">
		</div>
		<div class="input-bx">
			<label>BREED</label><input type="text" placeholder="Enter Breed" value="">
		</div>
		<div class="input-bx">
			<label>SIZE</label><input type="text" placeholder="Enter Size" value="">
		</div>
		<div class="input-bx">
			<label>CITY</label><input type="text" placeholder="City" value="">
		</div>
	</div>
	<div class="modal-btn-holdr">
		<input type="submit" value="SUBMIT" class="sgn-up-btn">
		<p class="info-tgl">
			Already a Mason(dog) member? <a href="#" data-reveal-id="myModal" class="close">Log in!</a>
		</p>
	</div>
	<a class="close-reveal-modal">&#215;</a>
</div>
<div id="myModal" class="reveal-modal medium ">
	<h1 class="modal-titel">SIGN IN</h1>
	<div class="input-bx">
		<input type="text" placeholder="Email Address" value=""><span class="font-icn">@</span>
	</div>
	<div class="input-bx">
		<input type="text" placeholder="Passward" value=""><span class="font-icn">&#xf023;</span>
	</div>
	<div class="input-bx">
		<input type="checkbox"><span class="remb-me">REMEMBER ME</span><a href="#" class="forgt-pss">Forgot Password?</a>
	</div>
	<div class="login-btn-holdr sign">
		<input type="submit" value="LOGIN" class="sgn-up-btn">
		<p class="info-tgl">
			DON’T HAVE AN ACCOUNT? <a href="#" data-reveal-id="myModal2" class="close">SIGN UP!</a>
		</p>
	</div>
	<a class="close-reveal-modal">&#215;</a>
</div>
<?php wp_footer(); ?>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/home-slider.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/jquery.reveal.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/jquery.mixitup.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($) {  
$(window).load(function(){
$('#preloader').fadeOut(1500,function(){$(this).remove();});
});
});
window.onorientationchange = function(){window.location.reload();}
$(function() {
$('#carousel').carouFredSel({
width: '100%',
items: {
visible: 3,
start: 1
},
scroll: {
items: 1,
duration: 1000,
timeoutDuration: 3000
},
prev: '#prev',
next: '#next',
});
});
$(function(){
$(".mob-mnu").click(function(){
$(".menus").toggleClass("show");
});
});
$(function(){
$(".close").click(function(){
$('a.close-reveal-modal').trigger('click');
});
}); 

$(document).ready(function()
{
$("#Container li:odd").addClass("odd");
$("#Container li:even").addClass("even");
$('#Container').mixItUp();
});
		</script>
		</body>
</html>