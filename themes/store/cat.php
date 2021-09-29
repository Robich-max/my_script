<?php include_once 'catsheader.php'; ?>
<style type="text/css" media="screen">
	.rs3-select2 .select2-container .select2-selection--single {
height: 21px;
}
/********************* Shopping Demo-3 **********************/
.product-grid3{font-family:Roboto,sans-serif;text-align:center;position:relative;z-index:1}
.product-grid3:before{content:"";height:81%;width:100%;background:#fff;border:1px solid rgba(0,0,0,.1);opacity:0;position:absolute;top:0;left:0;z-index:-1;transition:all .5s ease 0s}
.product-grid3:hover:before{opacity:1;height:100%}
.product-grid3 .product-image3{position:relative}
.product-grid3 .product-image3 a{display:block}
.product-grid3 .product-image3 img{width:100%;height:auto}
.product-grid3 .pic-1{opacity:1;transition:all .5s ease-out 0s}
.product-grid3:hover .pic-1{opacity:0}
.product-grid3 .pic-2{position:absolute;top:0;left:0;opacity:0;transition:all .5s ease-out 0s}
.product-grid3:hover .pic-2{opacity:1}
.product-grid3 .social{width:120px;padding:0;margin:0 auto;list-style:none;opacity:0;position:absolute;right:0;left:0;bottom:-23px;transform:scale(0);transition:all .3s ease 0s}
.product-grid3:hover .social{opacity:1;transform:scale(1)}
.product-grid3:hover .product-discount-label,.product-grid3:hover .product-new-label,.product-grid3:hover .title{opacity:0}
.product-grid3 .social li{display:inline-block}
.product-grid3 .social li button{color:#e67e22;background:#fff;font-size:18px;line-height:50px;width:120px;height:50px;border:1px solid rgba(0,0,0,.1);border-radius:5%;display:block;transition:all .3s ease 0s}
.product-grid3 .social li button:hover{background:#e67e22;color:#fff}
.product-grid3 .product-discount-label,.product-grid3 .product-new-label{background-color:#e67e22;color:#fff;font-size:17px;padding:2px 10px;position:absolute;right:10px;top:10px;transition:all .3s}
.product-grid3 .product-content{z-index:-1;padding:15px;text-align:left}
.product-grid3 .title{font-size:14px;text-transform:capitalize;margin:0 0 7px;transition:all .3s ease 0s}
.product-grid3 .title a{color:#414141}
.product-grid3 .price{color:#000;font-size:16px;letter-spacing:1px;font-weight:600;margin-right:2px;display:inline-block}
.product-grid3 .price span{color:#909090;font-size:14px;font-weight:500;letter-spacing:0;text-decoration:line-through;text-align:left;display:inline-block;margin-top:-2px}
.product-grid3 .rating{padding:0;margin:-22px 0 0;list-style:none;text-align:right;display:block}
.product-grid3 .rating li{color:#ffd200;font-size:13px;display:inline-block}
.product-grid3 .rating li.disable{color:#dcdcdc}
@media only screen and (max-width:1200px){.product-grid3 .rating{margin:0}
}
@media only screen and (max-width:990px){.product-grid3{margin-bottom:30px}
.product-grid3 .rating{margin:-22px 0 0}
}
@media only screen and (max-width:359px){.product-grid3 .rating{margin:0}
}
#option-group-Size > div.form-field-control {
display: grid;
grid-template-columns: repeat(auto-fit, minmax(10px, 1fr));
grid-gap: 10px;
}
.account-product-item-sale-tag, .card-item-thumbnail img, .cart-totals-row .form-field .form-label-text, .dropdown-featured-product img, .form-field-rectangle .form-input, .form-field-swatch .form-input, .form-field-swatch .form-label-text, .home-carousel-item .carousel-item-image, .masthead-search .form-field-title, .modal:not(.modal-quick-shop) .form-field-title, .modal:not(.modal-quick-shop) .form-label-text, .overlay-search .form-field-title, .overlay-search .form-label-text, .quick-cart-item-image img {
position: absolute!important;
width: 1px;
height: 1px;
overflow: hidden;
clip: rect(1px,1px,1px,1px);
}
.form-field-rectangle .form-input:checked+.rectangle-text {
position: relative;
z-index: 10;
color: #000;
border-color: #000;
background-color: #e9e9e9;
}
.form-field-rectangle .form-input:checked+.colors {
position: relative;
z-index: 10;
color: #000;
border-color: black;
background-color: #e9e9e9;
}
.rectangle {
color: #46545C;
margin-bottom: 2px;
background-color: #dfdfdf;
}
.form-field-rectangle .rectangle-text {
border: 1px solid #e3e3e3;
}
.form-field-rectangle .rectangle-text {
position: relative;
z-index: 1;
display: block;
height: 27px;

margin-left: -1px;
margin-right: 0;
overflow: hidden;

text-align: center;
text-overflow: ellipsis;
white-space: nowrap;
cursor: pointer;
}
</style>
<!-- Title Page -->
<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(images/<?php echo $cats->banner_img; ?>);background-position: center;">
	<h2 class="l-text2 t-center">
	<?php echo $catName; ?>
	</h2>
	<p class="m-text13 t-center">
		<?php echo lang("lang_h26"); ?> <?php echo $catName; ?> <?php echo lang("lang_h27"); ?>
	</p>
</section>
<!-- Content page -->
<section class="bgwhite p-t-55 p-b-65">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12 p-b-50">
				<!--  -->
				<div class="flex-sb-m flex-w p-b-35">
					<div class="flex-w">
						<?php
						$options1 = array(
									"default" 		=> lang("lang_h18"),
								"popularity" 	=> lang("lang_h19"),
								"lowtohigh" 	=> lang("lang_h20"),
								"highttolow" 	=> lang("lang_h21")
						);
						$options2 = array(
											"" 				=> lang("lang_h22"),
										"0-50" 			=> "$0.00 - $50.00",
									"50-100" 		=> "$50.00 - $100.00",
									"100-150" 		=> "$100.00 - $150.00",
									"150-200" 		=> "$150.00 - $200.00",
										"200" 			=> "$200.00+"
						);
						$js1 = array(
							'id'       => 'pricerange',
							'class' => 'selection-2'
						);
						$js2 = array(
							'id'       => 'sorting',
							'class' => 'selection-2'
						);
						?>
						<form action="" id="sortingForm">
							<div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
								<?php echo form_dropdown("sorting", $options1, $this->input->get("sorting"), $js2); ?>
							</div>
							<div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
								<?php echo form_dropdown("pricerange", $options2, $this->input->get("pricerange"), $js1); ?>
							</div>
						</form>
					</div>
					<span class="s-text8 p-t-5 p-b-5">
						<?php echo lang("lang_h23"); ?> 1–<?php echo count($products); ?> <?php echo lang("lang_h24"); ?> <?php echo count($products); ?> <?php echo lang("lang_h25"); ?>
					</span>
				</div>
				<!-- Product -->
				<div class="row">
					<?php foreach($products as $pt=>$p) : ?>
					<div class="col-md-3 col-sm-6">
						<div class="product-grid3">
							<div class="product-image3">
								<a href="<?php echo base_url("$p->id"); ?>">
									<?php
										$images = explode(",", $p->images);
									foreach($images as $image=>$img) {
										if($image <= 1){
											
									?>
									<?php if($image % 2 == 0){ ?>
									<img class="pic-1" src="uploads/<?php echo $img; ?>" alt="<?php echo $p->title; ?>">
									<?php }else{ ?>
									<img class="pic-2" src="uploads/<?php echo $img; ?>" alt="<?php echo $p->title; ?>">
									<?php } ?>
									<?php } ?>
									<?php } ?>
								</a>
								<form id="productInfo<?php echo $pt; ?>">
									<input class="size8 m-text18 t-center num-product" type="hidden" name="q" value="1">
									<input type="hidden" name="id" value="<?php echo $p->id; ?>">
									<ul class="social">
										<?php $info = json_decode($p->variants); ?>
										<?php foreach($info as $k) { ?>
										<div data-product-option-change="">
											
											<div id="option-group-Size" class="form-field form-field-options form-field-rectangle form-required" data-product-attribute="set-rectangle">
												
												<div class="form-field-control"  style="<?php if($k->tp == 'color'){?>width:100%;<?php }?>">
													
													<?php $allOp = explode(",", $k->info); foreach($allOp as $k1) { ?>
													<label class="form-label rectangle"  data-product-attribute-value="<?php echo $k1; ?>" data-bpn="">
														<input class="form-input form-rectangle" name="option[<?php echo $k->tp ?>]" type="radio" value="<?php echo $k1; ?>" required="" aria-required="">
														<span class="rectangle-text form-label-text colors" style="background-color:<?php echo $k1; ?>; "><?php
														if($k->tp == 'color'){}else{echo $k1;} ?></span>
													</label>
													<?php } ?>
													
													
													
													
												</div>
											</div>
											<br>
										</div>
										<?php } ?>
										
									
										<br/>
										
										<li class="btn-addcart-product-details<?php echo $pt; ?> size12 trans-0-4 m-t-10 m-b-10" data-id="<?php echo $p->id; ?>" data-upsels="0">	<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 trans-0-4">
											Add to cart
										</button></li>
										
										
										
										
									</ul>
								</form>
								<span class="<?php if($p->discount != 0){ ?> block2-labelsale <?php } ?>"></span>
							</div>
							<div class="product-content">
								<h3 class="title">	<a href="<?php echo base_url("$p->id"); ?>" class="product-detail-name<?php echo $pt; ?> block2-name dis-block s-text3 p-b-5">
									<?php echo $p->title; ?>
								</a></h3>
								<?php if($p->discount == 0){ ?>
								<span class="block2-price m-text6 p-r-5 currency"  data-currencyName="usd">
									<?php echo $p->price; ?>
								</span>
								
								<?php }else{ ?>
								<span class="block2-oldprice m-text7 p-r-5 product-item-hidden-price currency" data-currencyName="usd">
									<?php echo $p->price; ?>
								</span>
								
								<span class="block2-newprice m-text8 p-r-5 currency" data-currencyName="usd">
									<?php echo number_format($p->price - ($p->price * $p->discount / 100), 2); ?>
								</span>
								<?php } ?>
								
								<div>
									<?php show_reviews(get_vote_avg($p->id)); ?><span class="avis"> (<?php echo $this->m_p->get_num("reviews", array("product" => $p->id)); ?> avis)</span>
								</div>
							</div>
							
						</div>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php include_once 'footer.php'; ?>
<script type="text/javascript">
	$("#sorting").change(function() {
		$("#sortingForm").submit();
	});
	$("#pricerange").change(function() {
		$("#sortingForm").submit();
	});
</script>