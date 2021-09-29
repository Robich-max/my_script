<?php include_once 'header.php'; ?>
<link href="assets/css/magiczoomplus.css" rel="stylesheet" type="text/css" media="screen" />

<link href="assets/css/extraindex.css" rel="stylesheet" type="text/css" media="screen" />

<script src="assets/js/magiczoomplus.js" type="text/javascript"></script>

<style type="text/css" media="screen">
	@media (max-width: 444px) {
		.respon1 {
			height: 250px;
		}
	}

	.hov1:hover {
		box-shadow: inset 400px 0 0 0 <?php echo $settings->category_bt_hv_color; ?>;
		background-color: <?php echo $settings->category_bt_hv_color; ?> !important;
		color: <?php echo $settings->category_bt_tx_hv_color; ?> !important;
	}

	@media (max-width: 576px) {
		.item-slick1 {
			height: 327px;
		}
	}

	.custom-block-upsell {
		width: 47%;
	}

	@media (max-width: 450px) {
		.button-override {
			width: 95%;
			font-size: 12px;
		}

		.custom-block-upsell {
			width: 45%;
		}
	}

	.s-text17 {
		font-family: Montserrat-Regular;
		font-size: 16px;
		color: #888888;
		line-height: 0.8;
	}

	.hide,
	.hide1,
	.hide2 {
		display: none;
		background-color: <?php echo $settings->product_dv_info_color; ?>;
		color: #090303;
		text-align: center;
		border-radius: 6px;
		padding: 13px;
		position: absolute;
		z-index: 2;
		box-shadow: 2px 2px 6px 7px #f2f2f2f2;
		padding: 20px;
		width: 20%;
	}

	.text-gap-left {
		padding-left: 20px;
	}

	.text-gap-right {
		padding-right: 20px;
	}

	@media only screen and (max-width: 600px) {

		.text-gap-left {
			padding-left: 0px;
		}

		.text-gap-right {
			padding-right: 0px;
		}

		.img-gap {
			margin-right: -15px;
			margin-left: -15px;
		}

		.hide,
		.hide1,
		.hide2 {
			width: 60%;
			float: left;
			margin-left: -69px;
		}
	}

	.myDIV:hover+div {
		display: block;
	}

	.myDIV1:hover+div {
		display: block;
	}

	.myDIV2:hover+div {
		display: block;
	}

	.hide:hover {
		display: block;
		font-size: 20px;
	}

	.hide::after {
		display: block;
		position: absolute;
		top: 100%;
		left: 50%;
		margin-left: -5px;
		border-width: 5px;
		border-style: solid;
		border-color: #555 transparent transparent transparent;
		font-size: 20px;

	}

	.hide1:hover {
		display: block;
	}

	.hide1::after {
		display: block;
		position: absolute;
		top: 100%;
		left: 50%;
		margin-left: -5px;
		border-width: 5px;
		border-style: solid;
		border-color: #555 transparent transparent transparent;
	}

	.hide2:hover {
		display: block;
	}

	.hide2::after {
		display: block;
		position: absolute;
		top: 100%;
		left: 50%;
		margin-left: -5px;
		border-width: 5px;
		border-style: solid;
		border-color: #555 transparent transparent transparent;
	}

	table {
		overflow-x: auto;
		margin-left: auto;
		margin-right: auto;
		width: 100% !important;
		table-layout: unset !important;
	}

	.selectors {
		float: left;
	}

	@media (min-width: 292px) {
		.selectors {
			-ms-flex: 0 0 16.666667%;
			flex: 0 0 16.666667%;
			max-width: 16.666667%;
		}

		.product-btn0 {
			margin-top: 20px;
		}

		.product-btn1 {
			margin-top: 20px;
		}

		.product-btn2 {
			margin-top: 20px;
		}
	}

	@media (min-width: 292px) {
		.MagicZoom {
			-ms-flex: 0 0 83.333333%;
			flex: 0 0 83.333333%;
			max-width: 83.333333%;
		}

		.product-btn0 {
			margin-top: 20px;
		}

		.product-btn1 {
			margin-top: 20px;
		}

		.product-btn2 {
			margin-top: 20px;
		}
	}

	@media screen and (max-width: 792px) {
		.w-size13 {
			float: none;
			margin-right: 0;
			width: auto;
			border: 0;
			margin-left: -15px;
			margin-right: -15px;

		}
	}

	@media screen and (max-width: 792px) {
		.w-size14 {
			float: none;
			margin-right: 0;
			width: auto;
			border: 0;

		}

		.w-size16 {
			display: inline-block;

		}

		.bo5 {
			border: unset;
		}

		/* .bgwhite{
padding-right: 0px;
padding-left: 0;
} */
	}

	.variants {
		width: 50%;
	}

	@media only screen and (min-width : 990px) {
		.custom-height {
			height: 590px;
		}
	}


	@media screen and (max-width: 492px) {
		.variants {
			width: 80%;
		}

		.product-btn0 {
			margin-top: 20px;
		}

	}

	.active {
		background: #67baa0;
		color: #fff;
	}

	.icon-font {
		font-size: 20px;

	}

	.center-icon {
		display: flex;
		align-items: center;
	}

	.text-container {
		padding-left: 20px;
		display: flex;
		align-items: center;
	}
</style>

<!-- Home Image -->
<section class="slide1">
	<div class="wrap-slick1">
		<div class="slick1">

			<?php foreach ($homeslider as $sliderData) : ?>


				<!-- background-size: auto; -->
				<div class="item-slick1 item1-slick1 custom-height" style="background-image: url(images/<?php echo $sliderData->img ?>);">

					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<div class="wrap-btn-slide1 animated visible-false" data-appear="zoomIn">
							<?php echo $sliderData->title; ?>
							<?php echo $sliderData->sub_title; ?>
						</div>

						<style>
							.image-btn {
								color: <?php echo $sliderData->bt_ft_color; ?>;
								background: <?php echo $sliderData->bt_color; ?>;
							}

							.image-btn:hover {
								color: <?php echo $sliderData->bt_hft_color; ?>;
								background: <?php echo $sliderData->bt_hv_color; ?>;
							}
						</style>
						<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">

							<!-- Button -->
							<a href="<?php echo $sliderData->url; ?>" id="profite" target="_blank" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4 image-btn">
								<?php echo lang("lang_h91");  ?>
							</a>
						</div>
					</div>
				</div>
			<?php endforeach; ?>

		</div>
	</div>
</section>


<?php $bardata =  $this->db->get_where('barslids', array('active_status' => 1, 'position' => 1))->row();
if ($bardata) {
?>

	<!-- icon home -->
	<section class="shipping bgwhites p-t-1">
		<div class="container barslids">
			<div class="flex-w p-l-15 p-r-15 row">



				<?php foreach ($barslids as $item) : ?>
					<?php if ($item->position == 1) { ?>
						<div class="col-md-<?php echo $settings->barshow; ?> p-l-15 p-r-15 p-t-16 p-b-15 respon1">
							<h3 class="m-text12 t-center">
								<img src="<?php echo base_url("images/$item->img") ?>" alt="<?php echo $item->img; ?>" width="50">

							</h3>
							<span style="text-align: center;margin-left: 10px;" class="top-slider-item"><?php echo $item->desc; ?></span>
						</div>
					<?php } ?>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
<?php } ?>
<?php include_once 'banner.php'; ?>

<!-- Banner -->
<div class="banner bgwhite p-t-40 categoryhide">
	<div class="container">
		<div class="row">
			<?php if ($cats) { ?>
				<?php foreach ($cats as $cat) : ?>
					<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
						<!-- block1 -->
						<div class="block1 hov-img-zoom pos-relative m-b-30">
							<?php if ($cat->img) { ?>
								<img src="<?php echo base_url("images/$cat->img") ?>" alt="IMG-BENNER">
							<?php } else { ?>
								<style>
									.categoryhide {
										display: none;
									}
								</style>
							<?php } ?>
							<div class="block1-wrapbtn w-size2">
								<!-- Button -->
								<a href="<?php echo base_url("category/$cat->id"); ?>" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
									<?php echo $cat->title; ?>
								</a>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			<?php } else { ?>
				<style>
					.categoryhide {
						display: none;
					}
				</style>
			<?php } ?>
		</div>
	</div>
</div>
<?php $bardata =  $this->db->get_where('barslids', array('active_status' => 1, 'position' => 0))->row();
if ($bardata) {
?>
	<!-- icon home -->
	<section class="shipping bgwhites p-t-1">
		<div class="container barslids">
			<div class="flex-w p-l-15 p-r-15 row">



				<?php foreach ($barslids as $item) : ?>
					<?php if ($item->position == 0) { ?>
						<div class="col-md-<?php echo $settings->barshow; ?> p-l-15 p-r-15 p-t-16 p-b-15 respon1">
							<h3 class="m-text12 t-center">
								<img src="<?php echo base_url("images/$item->img") ?>" alt="<?php echo $item->img ?>" width="50">

							</h3>
							<span style="text-align: center;margin-left: 10px;" class="top-slider-item"><?php echo $item->desc ?></span>
						</div>
					<?php } ?>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
<?php } ?>




<!-- ********* product **********-->

<?php $prodata =  $this->db->get_where('products', array('active_status' => 1))->row();
if ($prodata) {
?>
	<!-- New Product -->
	<section class="newproduct bgwhite p-b-105">

		<div class="container">
			<h3 class="h3" style="text-align: center;"><?php echo $settings->product_title; ?></h3>
			<div class="wrap-slick2">
				<div class="slick2">


					<?php foreach ($products as $pt => $p) : ?>
						<div class="col-md-12 col-sm-6">
							<div class="product-grid3">
								<div class="product-image3">
									<a href="<?php echo base_url("$p->id"); ?>">
										<?php
										$images = explode(",", $p->images);
										foreach ($images as $image => $img) {
											if ($image <= 1) {

												if ($image % 2 == 0) { ?>
													<img class="pic-1" src="uploads/<?php echo $img; ?>" alt="<?php echo $p->title; ?>">
												<?php } else { ?>
													<img class="pic-2" src="uploads/<?php echo $img; ?>" alt="<?php echo $p->title; ?>">
												<?php } ?>
										<?php }
										} ?>
									</a>
									<form id="productInfo<?php echo $pt; ?>">
										<input class="size8 m-text18 t-center num-product" type="hidden" name="q" value="1">
										<input type="hidden" name="id" value="<?php echo $p->id; ?>">
										<ul class="social">
											<?php $info = json_decode($p->variants);
											/*  */

											?>
											<?php foreach ($info as $k) {
											?> <div data-product-option-change="">

													<div style="clear:both"></div>
													<div id="option-group-Size" class="form-field form-field-options form-field-rectangle form-required" data-product-attribute="set-rectangle">

														<!-- style="<?php if ($k->tp == 'color') { ?>width:80%;<?php } ?>" -->
														<div class="form-field-control" style="width:213px; margin-left:-10px">

															<?php $allOp = explode(",", $k->info);
															foreach ($allOp as $k1) {
																$ary = explode(':', $k1);
																$beforeColon = $ary[0];
															?>
																<!-- style="float:left; width: 55px" -->
																<label class="form-label rectangle" data-product-attribute-value="<?php echo $beforeColon; ?>" data-bpn="">
																	<input class="form-input form-rectangle" name="option[<?php echo $k->tp ?>]" type="radio" value="<?php echo $beforeColon; ?>" required="required" aria-required="required">
																	<span class="rectangle-text form-label-text colors" style="background-color:<?php echo $beforeColon; ?>; ">
																		<?php
																		if ($k->tp == 'color') {
																		} else {
																			echo $beforeColon;
																		} ?></span>
																</label>
															<?php } ?>
															<div style="clear:both"></div>



														</div>
													</div>
												</div>
												<br>

											<?php } ?>



											<li class="btn-addcart-product-details<?php echo $pt; ?> size12 trans-0-4 m-t-10 m-b-10" data-id="<?php echo $p->id; ?>" data-upsels="0">
												<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 trans-0-4" style="width:167px; margin-left:-21px;">
													<?php echo lang("lang_h29"); ?>
												</button></li>




										</ul>
									</form>
									<span class="<?php if ($p->discount != 0) { ?> block2-labelsale <?php } ?>"></span>
								</div>
								<div class="product-content">
									<h3 class="title"> <a href="<?php echo base_url("$p->id"); ?>" class="product-detail-name<?php echo $pt; ?> block2-name dis-block s-text3 p-b-5">
											<?php echo $p->title; ?>
										</a></h3>
									<?php if ($p->discount == 0) { ?>
										<span class="block2-price m-text6 p-r-5 currency" data-currencyName="usd">
											<?php echo $p->price; ?>
										</span>

									<?php } else { ?>
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
		<hr>
	</section>
<?php } ?>


<!-- ********Single Product******-->

<?php if ($pInfo) { ?>
	<div class="container bgwhite p-b-80 ">
		<div class="flex-w flex-sb">
			<div class="w-size13 p-t-30 respon5">
				<div class="app-figure" id="zoom-fig">
					<div class="selectors col-lg-2" style="padding-right: 0px;padding-left: 0px;">
						<?php $altnames = explode("|", $pInfo->img_alt_name);
						$images = explode(",", $pInfo->images);

						foreach ($images as $img) { ?>

							<a data-zoom-id="Zoom-1" href="<?php echo base_url("uploads") . "/" . add_thumb($img, "") ?>" data-image="<?php echo base_url("uploads") . "/" . add_thumb($img, "") ?>" data-zoom-image="<?php echo base_url("uploads") . "/" . add_thumb($img, "") ?>" data-image="<?php echo base_url("uploads") . "/" . add_thumb($img, "") ?> ">
								<img srcset="<?php echo base_url("uploads") . "/" . add_thumb($img, "") ?>" src="<?php echo base_url("uploads") . "/" . add_thumb($img, "") ?>" />
							</a>

						<?php } ?>
					</div>
					<a id="Zoom-1" class="MagicZoom col-lg-10 " style="padding-left:12px" title="Show your product in stunning detail with Magic Zoom Plus." href="<?php echo base_url(); ?>uploads/<?php echo add_thumb($pInfo->images, "_m") ?>" data-zoom-image="<?php echo base_url("uploads") . "/" . add_thumb($pInfo->images, "") ?>" data-imag="<?php echo base_url(); ?>uploads/<?php echo add_thumb($pInfo->images, "_m") ?>">
						<img src="<?php echo base_url("uploads") . "/" . add_thumb($pInfo->images, "") ?>" srcset="<?php echo base_url("uploads") . "/" . add_thumb($pInfo->images, "") ?>" alt="" />
					</a>
				</div>
			</div>
			<div class="w-size14 p-t-30 respon5">
				<h1 class="product-detail-name m-text16 product-page-title" style="font-weight: bold;">
					<?php echo $pInfo->title; ?>
				</h1>
				<?php if ($pInfo->discount == 0) { ?>
					<span class="block2-price m-text6 p-r-5 currency" data-currencyName="usd">
						<?php echo $pInfo->price; ?>
					</span>
				<?php } else { ?>
					<span class="block2-oldprice m-text7 p-r-5 oldprice-page-hidden currency" data-currencyName="usd">
						<?php echo $pInfo->price; ?>
					</span>
					<span class="block2-newprice m-text8 p-r-5 price-page-hidden currency" data-currencyName="usd" style="font-weight: bold;">
						<?php echo number_format($pInfo->price - ($pInfo->price * $pInfo->discount / 100), 2); ?>
						<?php // echo number_format($pInfo->price, 2); 
						?>
					</span>
					<div style="background: #e65540;display: table;	padding: 3px;border-radius: 5px;color: white;	margin-top: 10px;">
						<?php echo lang("lang_h28"); ?> <?php echo $pInfo->discount; ?> %
					</div>
				<?php } ?>

				<div>
					<?php

					show_reviews(get_vote_avg($pInfo->id)); ?><span class="avis"> (<?php echo $this->m_p->get_num("reviews", array("product" => $pInfo->id)); ?> avis)</span>
				</div>

				<!--  -->
				<div>
					<div class="p-b-20 rensignement-text" style="display:block">
						<h6 style="line-height: 40px;">
							<div class="row text-container" style="display:flex;height:100%;align-content:middle;align-items:center;">

								<div>
									<i class="<?php echo $pInfo->info_icon; ?> icon-font"></i>
								</div>
								<div style="margin-left:3px" class="center-icon">
									<h6 style="float: left;"><?php echo $pInfo->info_text; ?></h6>&nbsp;
								</div>
								<div>
									<?php if ($pInfo->info_desc) { ?>
										<i class="fa fa-question-circle myDIV icon-font" aria-hidden="true"></i>
										<div class="hide"><?php echo $pInfo->info_desc; ?></div>
									<?php } ?>

								</div>
							</div>

						</h6>
						<?php if ($pInfo->service_info) { ?>
							<h6 style="line-height: 40px;">
								<div class="row text-container">
									<div>
										<i class="<?php echo $pInfo->service_icon; ?> icon-font"></i>
									</div>
									<div style="margin-left:3px" class="center-icon">
										<h6 style="float: left;"><?php echo $pInfo->service_info; ?></h6>&nbsp;
									</div>
									<div>

										<?php if ($pInfo->service_info_desc) { ?>
											<i class="fa fa-question-circle myDIV1 icon-font" aria-hidden="true"></i>
										<?php } ?>
										<div class="hide1"><?php echo $pInfo->service_info_desc; ?></div>
									</div>
								</div>

							</h6>
						<?php } ?>

						<?php if ($pInfo->other_info) { ?>
							<h6 style="line-height: 40px;">
								<div class="row text-container">
									<div>
										<i class="<?php echo $pInfo->other_icon; ?> icon-font"></i>
									</div>
									<div style="margin-left:3px" class="center-icon">
										<h6 style="float: left;"><?php echo $pInfo->other_info; ?></h6>&nbsp;
									</div>
									<div>
										<?php if ($pInfo->other_info_desc) { ?>
											<i class="fa fa-question-circle myDIV2 icon-font" aria-hidden="true"></i><?php
																													} ?>
										<div class="hide2"><?php echo $pInfo->other_info_desc; ?></div>
							</h6><?php } ?>
					</div>
				</div>


				<form id="productInfo">
					<?php $info = json_decode($pInfo->variants);

					/*  echo "<pre>";
						print_r($info);
						echo "</pre>";  */
					?>
					<?php foreach ($info as $k) { ?>
						<div data-product-option-change="">
							<div id="option-group-Size" class="form-field form-field-options form-field-rectangle form-required" data-product-attribute="set-rectangle">

								<p><?php echo $k->tp; ?></p>

								<div class="" style="font-size: 1rem;">

									<?php $allOp = explode(",", $k->info);
									foreach ($allOp as $k1) {

										$ary = explode(':', $k1);
										$beforeColon = $ary[0];
										$imageName = (isset($ary[1]) ? $ary[1] : '');
										$imageName = str_replace(' ', '', $imageName);

										$styleStr = "";

									?>
										<label class="form-label rectangle" data-product-attribute-value="<?php echo $beforeColon; ?>" data-bpn="">
											<input class="form-input form-rectangle" name="option[<?php echo $k->tp ?>]" type="radio" value="<?php echo $beforeColon; ?>" required="required" aria-required="required">
											<div class="rectangle-text form-label-text colors" style="margin-right:5px;background-color:<?= $beforeColon; ?>;height: <?= $k->height; ?>px;width: <?= $k->width ?>px;padding-top: <?= ($k->height - 23) / 2 ?>px;;" onclick="changeImageFunction('<?= $imageName ?>');">
												<?php
												if (strtolower($k->tp) == 'age') {
													echo "<span style='padding:0px 8px;'>";
													echo $beforeColon;
													echo "</span>";
												} else {
												} ?>
											</div>
										</label>
									<?php } ?>

								</div>
							</div>
						</div>
						<br>
					<?php } ?>



					<div class="flex-r-m flex-w p-t-10 btncarthide">
						<div class="w-size16 flex-m flex-w">
							<input type="hidden" name="id" value="<?php echo $pInfo->id; ?>">
							<input class="size8 m-text18 t-center num-product" type="hidden" name="q" value="1">
							<div class="btn-addcart-product-detail0000 size9 trans-0-4 m-t-10 m-b-10" style="width: auto; flex: 1;">
								<!-- Button -->
								<button class="btn-addcart-product-detail flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4 add-to-cart-style" style="animation: scaling .5s infinite alternate;" data-upsels="<?php echo count($upsell); ?>">
									<?php echo lang("lang_h29"); ?>
								</button>
							</div>
						</div>
						<div class="text-center prod_secure_img w-size16">
							<hr />
							<img alt="Checkout Secure" src="<?php echo base_url(); ?>images/<?php echo $settings->product_img; ?>" class="checkout_image">
						</div>

					</div>
				</form>

			</div>

		</div>
		<!--  -->
	</div>
	</div>
	</div>
<?php } ?>





<?php foreach ($featured as $f) : ?>
	<!-- Banner2 -->
	<section class="banner2 bg5 p-t-55 p-b-55">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-md-8 col-lg-6 m-l-r-auto p-t-15 p-b-15">
					<div class="hov-img-zoom pos-relative">
						<img src="uploads/<?php echo add_thumb($f->images, "_f") ?>" alt="<?php echo $f->title; ?>">
						<div class="ab-t-l sizefull flex-col-c-m p-l-15 p-r-15">
							<span class="m-text9 p-t-45 fs-20-sm">
								The New
							</span>
							<h3 class="l-text1 fs-35-sm">
								<?php echo $f->title; ?>
							</h3>
						</div>
					</div>
				</div>
				<div class="col-sm-10 col-md-8 col-lg-6 m-l-r-auto p-t-15 p-b-15">
					<div class="bgwhite hov-img-zoom pos-relative p-b-20per-ssm">
						<img src="uploads/<?php echo add_thumb($f->images, "_f") ?>" alt="<?php echo $f->title; ?>">
						<div class="ab-t-l sizefull flex-col-c-b p-l-15 p-r-15 p-b-20">
							<div class="t-center">
								<a href="product-detail.html" class="dis-block s-text3 p-b-5">
									get it now before the sale ends
								</a>
								<span class="block2-oldprice m-text7 p-r-5">
									$<?php echo $p->price; ?>
								</span>
								<span class="block2-newprice m-text8">
									$<?php echo number_format($p->price - ($p->price * $p->discount / 100), 2); ?>
								</span>
							</div>
							<div class="flex-c-m p-t-44 p-t-30-xl">
								<div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
									<span class="m-text10 p-b-1 days">
										0
									</span>
									<span class="s-text5">
										days
									</span>
								</div>
								<div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
									<span class="m-text10 p-b-1 hours">
										1
									</span>
									<span class="s-text5">
										hrs
									</span>
								</div>
								<div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
									<span class="m-text10 p-b-1 minutes">
										05
									</span>
									<span class="s-text5">
										mins
									</span>
								</div>
								<div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
									<span class="m-text10 p-b-1 seconds">
										05
									</span>
									<span class="s-text5">
										secs
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>




<?php endforeach; ?>
<?php $data =  $this->db->get_where('slider', array('active_status' => 1))->row();
if ($data) {
?>
	<section class="banner2 p-t-25 p-b-25 reviews" style="background:<?php echo $settings->reviews_bg_color; ?>;">
		<div class="container-fluid p-0">

			<div class="center p-t-10 p-b-15 user-actif">
				<h3 style="font-weight: bold;"><?php echo $settings->reviews_title; ?></h3>
			</div>
			<div class="variable-width">
				<?php foreach ($slider as $s) { ?>
					<div style="width: 300px; padding: 10px;">

						<img src="<?php echo base_url("images/$s->img"); ?>" alt="" style="width: 100%;">
					</div>
					<div style="width: 440px; padding: 10px;">
						<div class="card" style="background-color:<?php echo $settings->reviews_tx_color; ?>;">
							<div class="card-body">
								<h6><?php echo $s->name; ?><span class="badge m-l-5" style="background:<?php echo $settings->reviews_tg_color; ?>; color: white;"><?php echo $settings->reviews_bt_text; ?></span></h6>

								<h5 class="m-t-10 m-b-10 ">
									<h5 style="font-weight: bold;"><?php echo $s->title; ?></h5>
									<p>

										<?php echo nl2br($s->text); ?>
									</p>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</section>
<?php } ?>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="background: #0000004a;">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"><?php echo $settings->upsell_title; ?></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<?php $upsellInfo = $this->db->query("SELECT * FROM products WHERE id = '$upselId'")->row(); ?>
				<div><?php echo $upsellInfo->upsell_info; ?></div>
				<div class="row" style="margin:0px">

					<?php
					foreach ($upsell as $upsell_ary) :

						foreach ($upsell_ary as $p) {
					?>
							<?php $data = $this->db->query("SELECT * FROM upsell WHERE showProduct = $p->id AND onOrder = '$upselId'")->row();
							if ($data->qty) {
								$qty = $data->qty;
							} else {
								$qty = 1;
							}
							?>
							<div class="block2 m-b-10 m-l-10 custom-block-upsell">
								<div class="block2-img wrap-pic-w of-hidden pos-relative <?php if ($p->discount != 0) { ?> block2-labelsale <?php } ?>">
									<a href="<?php echo base_url("$p->id"); ?>"><img src="uploads/<?php echo add_thumb($p->images, "_m") ?>" alt="<?php echo $p->title; ?>"></a>
								</div>
								<div class="block2-txt p-t-20">
									<a href="<?php echo base_url("$p->id"); ?>" class="block2-name dis-block s-text3 p-b-5">
										<?php echo $p->title; ?>
									</a>
									<?php if ($data->qty and $data->price) { ?>
										<span class="block2-price m-text6 p-r-5">
											<?php echo $data->qty; ?></span>x <span class="block2-price m-text6 p-r-5 currency" data-currencyName="usd">
											<?php echo $data->price; ?>
										</span>
									<?php } else { ?>
										<?php if ($p->discount == 0) { ?>
											<span class="block2-price m-text6 p-r-5 currency" data-currencyName="usd">
												<?php echo $p->price; ?>
											</span>
										<?php } else { ?>
											<span class="block2-oldprice m-text7 p-r-5 currency" data-currencyName="usd">
												<?php echo $p->price; ?>
											</span>
											<span class="block2-newprice m-text8 p-r-5 currency" data-currencyName="usd">
												<?php echo number_format($p->price - ($p->price * $p->discount / 100), 2); ?>
											</span>
										<?php } ?>
									<?php } ?>
								</div>

								<button class="btn flex-c-m bg1 bo-rad-23 hov1 s-text1 trans-0-4 add-to-cart-style button-override" onclick="addToCartUpSell(this, <?= $p->id; ?>, '<?= $p->title; ?>', '<?= $qty; ?>', '<?= $upselId; ?>');"><?php echo lang("lang_h29"); ?></button>
							</div>
						<?php
						}

						?>
					<?php endforeach; ?>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo lang("lang_h75"); ?></button>
			</div>
		</div>
	</div>
</div>
<?php include_once 'footer.php'; ?>