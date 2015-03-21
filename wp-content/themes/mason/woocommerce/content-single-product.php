<?php get_header();?>
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
		<div class="prod-dtl">
			<div class="prdt-view-img">
				<div class="targetarea">
					<img id="img_01" src="zoom/image_1.png" data-zoom-image="zoom/image_1.png"/>
				</div>
				<div id="gallery_01" class="thumbs">
					<a href="#" data-image="zoom/image_1.png" data-zoom-image="zoom/image_1.png">
					<img id="img_01" src="zoom/image_1.png"/>
					</a>
					<a href="#" data-image="zoom/image_2.png" data-zoom-image="zoom/image_2.png">
					<img id="img_01" src="zoom/image_2.png"/>
					</a>
					<a href="#" data-image="zoom/image_3.png" data-zoom-image="zoom/image_3.png">
					<img id="img_01" src="zoom/image_3.png"/>
					</a>
					<a href="#" data-image="zoom/image_4.png" data-zoom-image="zoom/image_4.png">
					<img id="img_01" src="zoom/image_4.png"/>
					</a>
					<a href="#" data-image="zoom/image_3.png" data-zoom-image="zoom/image_3.png">
					<img id="img_01" src="zoom/image_3.png"/>
					</a>
				</div>
			</div>
			<div class="prdt-info-txt">
				<div class="prdt-name">
					<h2>FOXY FLORAL</h2>
					<span class="seprt"></span>
					<p>
						<sup>$</sup>52.00
					</p>
				</div>
				<div class="prdt-descp">
					<p>
						Blimp orignal jersey tee. Easy Stretch ribbed trim around neck, shoulder and waist. Complete with rubber ink screen print detailing. Perfect for the transitional months of spring.
					</p>
					<p>
						- Designed and handcrafted in japan<br>
						 - 100% Japanese cotton<br>
						 - Also available in <a href="#">Pink</a> for girls<br>
						 - <a href="#">Sizing Guide</a>
					</p>
				</div>
				<div class="prdt-name">
					<select>
						<option>Select Size</option>
						<option>XS</option>
						<option>S</option>
						<option>M</option>
						<option>L</option>
						<option>XL</option>
					</select>
					<input type="submit" class="font-icn add-to-crt" value="&#xf067; Add to Cart">
				</div>
				<div class="prdt-name">
					<a href="#" class="prdt-share">Like it</a><a href="#" class="prdt-share">Tweet it</a><a href="#" class="prdt-share">Pin it</a>
				</div>
			</div>
			<div class="relted-prds">
				<h1 class="sec-title">OTHER STYLES YOU MIGHT LIKE</h1>
				<ul class="othr-reltd-prds">
					<li><img src="images/products-img/img-1.png">
					<div class="prdt-dtl">
						<span>The FLORAL</span><a href="#" title="View this Product">View</a>
					</div>
					</li>
					<li><img src="images/products-img/img-3.png">
					<div class="prdt-dtl">
						<span>THE AZTECS</span><a href="#" title="View this Product">View</a>
					</div>
					</li>
					<li><img src="images/products-img/img-6.png">
					<div class="prdt-dtl">
						<span>the FUNKY PRINTS</span><a href="#" title="View this Product">View</a>
					</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>



<!---------------------------------------------------------------------->


<?php get_footer()?>