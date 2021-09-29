<?php foreach ($info as $p) : $id = $p->id; ?>
	<?php include_once 'productheader.php'; ?>
	<link href="assets/css/starscss.css" rel="stylesheet" id="bootstrap-css">
	<link href="assets/css/magiczoomplus.css" rel="stylesheet" type="text/css" media="screen" />
	<script src="assets/js/magiczoomplus.js" type="text/javascript"></script>
	<style type="text/css" media="screen">
		/********************* Shopping Demo-3 **********************/
		.custom-block-upsell {
			width: 50%;
		}

		.card-data {
			--max-font: 16;
			--min-font: 14;
			font-size: var(--responsive);
		}

		@media (max-width: 450px) {
			.button-override {
				width: 95%;
				font-size: 11px;
			}

			.custom-block-upsell {
				width: 50%;
			}
		}

		.product-grid3 {
			font-family: Roboto, sans-serif;
			text-align: center;
			position: relative;
			z-index: 1
		}

		.product-grid3:before {
			content: "";
			height: 81%;
			width: 100%;
			background: #fff;
			border: 1px solid rgba(0, 0, 0, .1);
			opacity: 0;
			position: absolute;
			top: 0;
			left: 0;
			z-index: -1;
			transition: all .5s ease 0s
		}

		.product-grid3:hover:before {
			opacity: 1;
			height: 100%
		}

		.product-grid3 .product-image3 {
			position: relative
		}

		.product-grid3 .product-image3 a {
			display: block
		}

		.product-grid3 .product-image3 img {
			width: 100%;
			height: auto
		}

		.product-grid3 .pic-1 {
			opacity: 1;
			transition: all .5s ease-out 0s
		}

		.product-grid3:hover .pic-1 {
			opacity: 0
		}

		.product-grid3 .pic-2 {
			position: absolute;
			top: 0;
			left: 0;
			opacity: 0;
			transition: all .5s ease-out 0s
		}

		.product-grid3:hover .pic-2 {
			opacity: 1
		}

		.product-grid3 .social {
			width: 120px;
			padding: 0;
			margin: 0 auto;
			list-style: none;
			opacity: 0;
			position: absolute;
			right: 0;
			left: 0;
			bottom: -23px;
			transform: scale(0);
			transition: all .3s ease 0s
		}

		.product-grid3:hover .social {
			opacity: 1;
			transform: scale(1)
		}

		.product-grid3:hover .product-discount-label,
		.product-grid3:hover .product-new-label,
		.product-grid3:hover .title {
			opacity: 0
		}

		.product-grid3 .social li {
			display: inline-block
		}

		.product-grid3 .social li button {
			color: #e67e22;
			background: #fff;
			font-size: 18px;
			line-height: 50px;
			width: 120px;
			height: 50px;
			border: 1px solid rgba(0, 0, 0, .1);
			border-radius: 5%;
			display: block;
			transition: all .3s ease 0s
		}

		.product-grid3 .social li button:hover {
			background: #e67e22;
			color: #fff
		}

		.product-grid3 .product-discount-label,
		.product-grid3 .product-new-label {
			background-color: #e67e22;
			color: #fff;
			font-size: 17px;
			padding: 2px 10px;
			position: absolute;
			right: 10px;
			top: 10px;
			transition: all .3s
		}

		.product-grid3 .product-content {
			z-index: -1;
			padding: 15px;
			text-align: left
		}

		.product-grid3 .title {
			font-size: 14px;
			text-transform: capitalize;
			margin: 0 0 7px;
			transition: all .3s ease 0s
		}

		.product-grid3 .title a {
			color: #414141
		}

		.product-grid3 .price {
			color: #000;
			font-size: 16px;
			letter-spacing: 1px;
			font-weight: 600;
			margin-right: 2px;
			display: inline-block
		}

		.product-grid3 .price span {
			color: #909090;
			font-size: 14px;
			font-weight: 500;
			letter-spacing: 0;
			text-decoration: line-through;
			text-align: left;
			display: inline-block;
			margin-top: -2px
		}

		.product-grid3 .rating {
			padding: 0;
			margin: -22px 0 0;
			list-style: none;
			text-align: right;
			display: block
		}

		.product-grid3 .rating li {
			color: #ffd200;
			font-size: 13px;
			display: inline-block
		}

		.product-grid3 .rating li.disable {
			color: #dcdcdc
		}

		@media only screen and (max-width:1200px) {
			.product-grid3 .rating {
				margin: 0
			}
		}

		@media only screen and (max-width:990px) {
			.product-grid3 {
				margin-bottom: 30px
			}

			.product-grid3 .rating {
				margin: -22px 0 0
			}
		}

		@media only screen and (max-width:359px) {
			.product-grid3 .rating {
				margin: 0
			}
		}

		#option-group-Size>div.form-field-control {
			display: grid;
			grid-template-columns: repeat(auto-fit, minmax(10px, 1fr));
			grid-gap: 10px;

		}

		.account-product-item-sale-tag,
		.card-item-thumbnail img,
		.cart-totals-row .form-field .form-label-text,
		.dropdown-featured-product img,
		.form-field-rectangle .form-input,
		.form-field-swatch .form-input,
		.form-field-swatch .form-label-text,
		.home-carousel-item .carousel-item-image,
		.masthead-search .form-field-title,
		.modal:not(.modal-quick-shop) .form-field-title,
		.modal:not(.modal-quick-shop) .form-label-text,
		.overlay-search .form-field-title,
		.overlay-search .form-label-text,
		.quick-cart-item-image img {
			position: absolute !important;
			width: 1px;
			height: 1px;
			overflow: hidden;
			clip: rect(1px, 1px, 1px, 1px);
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
			background-color: #fff;
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

		.shipping .container {
			margin-top: unset;
		}

		.fa-star {
			color: <?php echo $settings->star_color; ?> !important;
		}

		.card {
			border-bottom: 1px solid #aaa;
			background-color: #F0F0F0;
			text-align: left;
			height: 440px;
			overflow: hidden;
		}

		.rating:not(:checked)>input {
			position: absolute;
			top: -9999px;
			clip: rect(0, 0, 0, 0);
		}

		.rating:not(:checked)>label {
			float: right;

			padding: 0 .1em;
			overflow: hidden;
			white-space: nowrap;
			cursor: pointer;
			font-size: 130%;

			color: #ddd;
		}

		.btn-sm {
			background-color: <?php echo $settings->star_bg_color; ?>;
			border-color: <?php echo $settings->star_bt_br_color; ?>;
		}

		.btn-xs {
			background-color: <?php echo $settings->star_bg_color; ?>;
			border-color: <?php echo $settings->star_bt_br_color; ?>;
		}

		.progress-bar {
			background-color: <?php echo $settings->star_br_color; ?>;
		}

		.rating-text {
			font-size: <?php echo $settings->rating_text_size; ?>;
			color: <?php echo $settings->rating_text_color; ?>;
		}

		.progress {
			background-color: <?php echo $settings->star_br_bg_color; ?>;
		}

		.rating>label {
			float: unset;
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

		@media only screen and (max-width: 600px) {

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

		.testy .select2-container .select2-selection--single {
			height: 21px;
		}

		.animated {
			-webkit-transition: height 0.2s;
			-moz-transition: height 0.2s;
			transition: height 0.2s;
		}

		.stars {
			margin: 20px 0;
			font-size: 24px;
			color: #d17581;
		}

		.oldprice-page-hidden {
			color: <?php echo $settings->cross_price_color; ?> !important;
		}

		.row {
			margin-right: 0px;
			margin-left: 0px;
		}

		.w-size14 {
			width: calc(54% - 55px);
		}

		.w-size13 {
			width: 48%;
		}

		.checkout_icon_title {
			font-size: 15px;
			position: relative;
			color: #000;
		}

		.hov1 {


			-webkit-transition: ease-out 0.7s;
			-moz-transition: ease-out 0.7s;
			transition: ease-out 0.7s;
		}

		.hov1:hover {
			box-shadow: inset 400px 0 0 0 <?php echo $settings->category_bt_hv_color; ?>;
			background-color: <?php echo $settings->category_bt_hv_color; ?> !important;
			color: <?php echo $settings->category_bt_tx_hv_color; ?> !important;
		}

		.s-text17 {
			font-family: Montserrat-Regular;
			font-size: 16px;
			color: #888888;
			line-height: 0.8;
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

			.btn-sm,
			.btn-xs {
				padding: 3px 5px;
			}
		}

		@media (min-width: 292px) {
			.MagicZoom {
				-ms-flex: 0 0 83.333333%;
				flex: 0 0 83.333333%;
				max-width: 83.333333%;
			}

			.btn-sm,
			.btn-xs {
				padding: 3px 5px;
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

			.card {
				border-bottom: 1px solid #aaa;
				background-color: #F0F0F0;
				text-align: left;
				height: 466px;
			}

			#open-review-box {
				margin-top: 20px;
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

		/* @media  only screen and (min-width: 776px)
{
.slick-track {
flex: 0 0 50%;
max-width: 100%;
}
} */
		.variants {
			width: 50%;
		}

		@media screen and (max-width: 492px) {
			.variants {
				width: 82%;
			}
		}

		@media screen and (min-width: 799px) {
			.sizefull {
				width: 80%;
			}

			#open-review-box {
				margin-top: 20px;
			}
		}

		@media screen and (max-width: 800px) {
			.grid-item {
				width: 50%;
				padding: 5px;
			}

			#open-review-box {
				margin-top: 20px;
			}

			.card {
				border-bottom: 1px solid #aaa;
				background-color: #F0F0F0;
				text-align: left;
				height: 466px;
			}
		}


		@media screen and (max-width: 600px) {
			.grid-item {
				width: 100%;
				padding: 5px;
			}

			.rating:not(:checked)>label {
				float: right;

				padding: 0 .1em;
				overflow: hidden;
				white-space: nowrap;
				cursor: pointer;
				font-size: 70%;

				color: #ddd;
			}

			#open-review-box {
				margin-top: 20px;
			}

			.card {
				border-bottom: 1px solid #aaa;
				background-color: #F0F0F0;
				text-align: left;
				height: 466px;
			}

		}

		@media screen and (max-width: 500px) {

			.nav-link {

				font-size: 8px;

			}

			.container-sp {
				min-width: 495px;
			}

			.rating:not(:checked)>label {


				cursor: pointer;

				font-size: 10px;

			}

			.rating {

				border: 0px solid red;

			}

			#open-review-box {
				margin-top: 20px;
			}

			.grid-item {
				width: 50%;
				padding: 5px;

			}

			.card {
				border-bottom: 1px solid #aaa;
				background-color: #F0F0F0;
				text-align: left;
				height: 270px;
				overflow: hidden;
				;
			}

			.card h4 {
				font-size: 10px;
			}

			.card__description {
				padding: 0;
				line-height: 0.6em;
			}

		}

		@media screen and (max-width: 400px) {

			.nav-link {

				font-size: 8px;

			}

			.container-sp {
				min-width: 495px;
			}

			.rating:not(:checked)>label {

				cursor: pointer;

				font-size: 10px;

			}

			.rating {

				border: 0px solid black;

			}

			#open-review-box {
				margin-top: 20px;
			}

			.grid-item {
				width: 50%;
				padding: 5px;

			}

			.card {
				border-bottom: 1px solid #aaa;
				background-color: #F0F0F0;
				text-align: left;
				height: 270px;

			}

			.card h4 {
				font-size: 10px;
			}

			.card__description {
				padding: 0;
				line-height: 0.6em;
			}

		}

		.grid-item {
			float: left;
		}

		.starColor {
			color: #fbff00 !important;
		}

		.fa-star {
			color: #fbff00;
		}

		.nav-tabs>li>a {
			margin-right: 2px;
			line-height: 1.428571429;
			border: 1px solid transparent;
			border-radius: 4px 4px 0 0;
			font-size: 18px;
		}


		.icon-font {
			font-size: 20px;

		}

		.center-icon {
			margin-top: 6px;
		}

		.text-container {
			height: 100%;
			display: flex;
			align-items: center;
		}
	</style>
	<!-- breadcrumb -->
	<div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">

		<span class="s-text17">
			<a href="<?php echo base_url(); ?>">
				<?php echo lang("lang_h1"); ?>
				<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
			</a>
			<?php echo short_text($p->title, 4, 50); ?>
		</span>
	</div>

	<!-- Product Detail -->
	<div class="container-fluid bgwhite p-b-80 ">
		<div class="flex-w flex-sb">
			<div class="w-size13 p-t-30 respon5">
				<div class="app-figure" id="zoom-fig">
					<div class="selectors col-lg-2" style="padding-right: 0px;padding-left: 0px;">
						<?php $altnames = explode("|", $p->img_alt_name);
						$images = explode(",", $p->images);

						foreach ($images as $image => $img) { ?>
							<a data-zoom-id="Zoom-1" href="<?php echo base_url("uploads") . "/" . add_thumb($img, "") ?>" data-image="<?php echo base_url("uploads") . "/" . add_thumb($img, "") ?>" data-zoom-image="<?php echo base_url("uploads") . "/" . add_thumb($img, "") ?>" data-image="<?php echo base_url("uploads") . "/" . add_thumb($img, "") ?> ">
								<img srcset="<?php echo base_url("uploads") . "/" . add_thumb($img, "") ?>" src="<?php echo base_url("uploads") . "/" . add_thumb($img, "") ?>" />
							</a>
							<?php  ?>
						<?php } ?>
					</div>
					<a id="Zoom-1" class="MagicZoom col-lg-10 " title="Show your product in stunning detail with Magic Zoom Plus." href="<?php echo base_url(); ?>uploads/<?php echo add_thumb($p->images, "_m") ?>" data-zoom-image="<?php echo base_url("uploads") . "/" . add_thumb($p->images, "") ?>" data-imag="<?php echo base_url(); ?>uploads/<?php echo add_thumb($p->images, "_m") ?>">
						<img src="<?php echo base_url("uploads") . "/" . add_thumb($p->images, "") ?>" srcset="<?php echo base_url("uploads") . "/" . add_thumb($p->images, "") ?>" alt="" />
					</a>
				</div>
			</div>
			<div class="w-size14 p-t-30 respon5">
				<h1 class="product-detail-name m-text16 product-page-title" style="font-weight: bold;">
					<?php echo $p->title; ?>
				</h1>
				<?php if ($p->discount == 0) { ?>
					<span class="block2-price m-text6 p-r-5 currency" data-currencyName="usd">
						<?php echo $p->price; ?>
					</span>
				<?php } else { ?>
					<span class="block2-oldprice m-text7 p-r-5 oldprice-page-hidden currency" data-currencyName="usd">
						<?php echo $p->price; ?>
					</span>
					<span class="block2-newprice m-text8 p-r-5 price-page-hidden currency" data-currencyName="usd" style="font-weight: bold;">
						<?php echo number_format($p->price - ($p->price * $p->discount / 100), 2); ?>
					</span>
					<div style="background: #e65540;
				display: table;
				padding: 3px;
				border-radius: 5px;
				color: white;
				margin-top: 10px;">
						<?php echo lang("lang_h28"); ?> <?php echo $p->discount; ?> %
					</div>
				<?php } ?>
				<div>
					<?php show_reviews(get_vote_avg($p->id)); ?>
					<span class="avis"> (<?php echo $this->m_p->get_num("reviews", array("product" => $p->id)); ?> avis)</span>
				</div>
				<!--  -->
				<div>
					<div class="p-b-20 rensignement-text " style="display:block">
						<h6 style="line-height: 40px; text-container">
							<div class="row text-container">
								<div>
									<i class="<?php echo $p->info_icon; ?> icon-font"></i>
								</div>
								<div style="margin-left:3px" class="center-icon">
									<h6 style="float: left;"><?php echo $p->info_text; ?></h6>&nbsp;
								</div>
								<div>
									<?php if ($p->info_desc) { ?>
										<i class="fa fa-question-circle myDIV icon-font" aria-hidden="true"></i>
										<div class="hide"><?php echo $p->info_desc; ?></div>
									<?php } ?>
								</div>
							</div>
						</h6>


						<?php if ($p->service_info) { ?>
							<h6 style="line-height: 40px;">
								<div class="row text-container">
									<div>
										<i class="<?php echo $p->service_icon; ?> icon-font"></i>
									</div>
									<div style="margin-left:3px" class="center-icon">
										<h6 style="float: left;"><?php echo $p->service_info; ?></h6>&nbsp;
									</div>
									<div class="center-icon">
										<?php if ($p->service_info_desc) { ?>
											<i class="fa fa-question-circle myDIV1 icon-font" aria-hidden="true"></i>

											<div class="hide1"><?php echo $p->service_info_desc; ?></div>
										<?php } ?>
									</div>
								</div>
							</h6><?php } ?>

						<?php if ($p->other_info) { ?>

							<h6 style="line-height: 40px;">
								<div class="row text-container">
									<div>
										<i class="<?php echo $p->other_icon; ?> icon-font"></i>
									</div>
									<div style="margin-left:3px" class="center-icon">
										<h6 style="float: left;"><?php echo $p->other_info; ?></h6>&nbsp;
									</div>
									<div>
										<?php if ($p->other_info_desc) { ?>
											<i class="fa fa-question-circle myDIV2 icon-font" aria-hidden="true"></i>
											<div class="hide2"><?php echo $p->other_info_desc; ?></div>
										<?php } ?>
									</div>
								</div>



							</h6><?php } ?>
					</div>
					<form id="productInfo">
						<?php $info = json_decode($p->variants); ?>
						<?php

						foreach ($info as $k) { ?>
							<div data-product-option-change="">
								<div id="option-group-Size" class="form-field form-field-options form-field-rectangle form-required variants" data-product-attribute="set-rectangle">
									<p><?php echo $k->tp; ?></p>
									<div class="" style="font-size: 1rem;">


										<?php $allOp = explode(",", $k->info);
										foreach ($allOp as $k1) {
											$ary = explode(':', $k1);
											$beforeColon = $ary[0];
											$imageName = (isset($ary[1]) ? $ary[1] : '');
											$imageName = str_replace(' ', '', $imageName);
										?>
											<label class="form-label rectangle" data-product-attribute-value="<?php echo $beforeColon; ?>" data-bpn="">
												<input class="form-input form-rectangle" name="option[<?php echo $k->tp ?>]" type="radio" value="<?php echo $beforeColon; ?>" required="required" aria-required="required">
												<div class="rectangle-text form-label-text colors" style="margin-right:5px;background-color:<?php echo $beforeColon; ?>;height: <?php echo $k->height; ?>px;width: <?= $k->width ?>px;padding-top: <?= ($k->height - 23) / 2 ?>px;" onclick="changeImageFunction('<?= $imageName ?>');">
													<?php
													if (strtolower($k->tp) == 'age') {
														echo "<span style='padding:0px 8px;'>";
														echo $beforeColon;
														echo "</span>";
													}
													?>
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
								<div class="flex-w bo5 of-hidden m-r-22 m-t-10 m-b-10">
									<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
										<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
									</button>
									<input class="size8 m-text18 t-center num-product" type="number" name="q" value="1">
									<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
										<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
									</button>
								</div>
								<input type="hidden" name="id" value="<?php echo $p->id; ?>">
								<div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10" style="width: auto; flex: 1;" data-id="<?php echo $p->id; ?>" data-upsels="<?php echo count($upsell); ?>">
									<!-- Button -->
									<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4 add-to-cart-style" style="animation: scaling .5s infinite alternate;">
										<?php echo $settings->product_abt_name; ?>
									</button>
								</div>
							</div>
							<div class="text-center prod_secure_img" style="margin: auto;">
								<hr />
								<img alt="Checkout Secure" src="<?php echo base_url(); ?>images/<?php echo $settings->product_img; ?>" class="checkout_image">
							</div>

						</div>
					</form>
					<div id="option-group-Size" class="form-field form-field-options form-field-rectangle form-required" data-product-attribute="set-rectangle">
						<?php echo $p->short_desc; ?>
					</div>
				</div>
				<!--  -->
			</div>
		</div>

		<div class="container">

			<!-- Nav tabs -->
			<ul class="nav nav-tabs" role="tablist">
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#home"><?php echo $settings->product_desc_title_one; ?></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#menu1"><?php echo $settings->product_desc_title_two; ?></a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" data-toggle="tab" href="#menu2"><?php echo $settings->product_desc_title_three; ?></a>
				</li>
			</ul>
			<!-- Tab panes -->
			<div class="tab-content">
				<div id="menu2" class=" tab-pane active"><br>

					<div class="p-t-15 p-b-23">
						<div class="">

							<div class="row">
								<div class="col-sm-8"> </div>

								<div class="col-sm-4">
									<button style="float: right;
    width: 60%;
    margin-top: -10px;
    height: 40px;" class="flex-c-m bg1 sizefull  bo-rad-23 hov1 s-text1 trans-0-4 add-to-cart-style" id="open-review-box" style="height: 35px;margin-bottom:12px;width: 138px;float: right;"><?php echo $settings->rating_button_title; ?></button>
								</div>
							</div>
							<div class="row">


								<?php
								// if ($results) 
								{


									$one_star_total = 0;
									$two_star_total = 0;
									$three_star_total = 0;
									$four_star_total = 0;
									$five_star_total = 0;

									$totalReviews = 0;

									foreach ($votes as $voteItem) {
										$totalReviews++;
										if ($voteItem->vote == 1) {
											$one_star_total++;
										} else if ($voteItem->vote == 2) {
											$two_star_total++;
										} else if ($voteItem->vote == 3) {
											$three_star_total++;
										} else if ($voteItem->vote == 4) {
											$four_star_total++;
										} else if ($voteItem->vote == 5) {
											$five_star_total++;
										}
									}

									$avg = 0;
									if($totalReviews > 0){
										$avg = (5 * $five_star_total + 4 * $four_star_total + 3 * $three_star_total + 2 * $two_star_total + 1 * $one_star_total) / $totalReviews;
										$avg = round($avg, 1);
									}
									

									$five_star_total = $five_star_total > 0 ? ($five_star_total * 100) / $totalReviews : 0;

									$four_star_total = $four_star_total > 0 ? ($four_star_total * 100) / $totalReviews : 0;

									$three_star_total = $three_star_total > 0 ? ($three_star_total * 100) / $totalReviews : 0;

									$two_star_total = $two_star_total > 0 ? ($two_star_total * 100) / $totalReviews : 0;

									$one_star_total = $one_star_total > 0 ? ($one_star_total * 100) / $totalReviews : 0;


								?>
									<div class="col-sm-4" style="padding:0">

										<div class="row">
											<div class="col-sm-8"> </div>

											<div class="col-sm-4">
												<button class="flex-c-m bg1 sizefull  bo-rad-23 hov1 s-text1 trans-0-4 add-to-cart-style " id="open-review-box" style="height: 35px;margin-bottom:12px;margin-top:20px;width: 138px;float: right; display:none">
													<?php echo $settings->rating_button_title; ?>
												</button>
											</div>
										</div>


										<div class="well well-sm" style="height:280px;margin-top:23px">

											<div class="rating-block">
												<h4 class="rating-text"><?php echo $settings->rating_average_title; ?></h4>

												<strong style="background-color: #fbff00; padding: 5px 5px;    line-height: 1.5;border:1px solid #000;   border-radius: 3px;  "><?php echo $avg; //$results->rating; ?></strong>

												<button type="button" class="btn btn-<?php echo '';//$results->rating_five; ?> btn-sm" aria-label="Left Align">
													<i class="fa fa-star" aria-hidden="true"></i>
												</button>
												<button type="button" class="btn btn-<?php echo '';//$results->rating_four; ?> btn-sm" aria-label="Left Align">
													<i class="fa fa-star" aria-hidden="true"></i>
												</button>
												<button type="button" class="btn btn-<?php echo '';//$results->rating_three; ?> btn-sm" aria-label="Left Align">
													<i class="fa fa-star" aria-hidden="true"></i>
												</button>
												<button type="button" class="btn btn-<?php echo '';//$results->rating_two; ?> btn-grey btn-sm" aria-label="Left Align">
													<i class="fa fa-star" aria-hidden="true"></i>
												</button>
												<button type="button" class="btn btn-<?php echo '';//$results->rating_one; ?> btn-grey btn-sm" aria-label="Left Align">
													<i class="fa fa-star" aria-hidden="true"></i>
												</button>
											</div>

											<div class="row">
												<h4 class="rating-text" style="padding: 6px;  background-color: #ccc;    margin: 10px; margin-right:20px;"><?php echo $settings->rating_breakdown_title; ?></h4>
											</div>

											<div class="pull-left">
												<div class="pull-left" style="width:30px; line-height:1;">
													<div style="height:15px; margin:5px 0;">5 <i class="fa fa-star" aria-hidden="true"></i></div>
												</div>
												<div class="pull-left" style="width:293px;">
													<div class="progress" style="height:15px; margin:8px 0;">
														<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $five_star_total; ?>%">
															<span class="sr-only">80% Complete (danger)</span>
														</div>
													</div>
												</div>
												<div class="pull-right" style="margin-left:5px;"></div>
											</div>

											<div class="pull-left">
												<div class="pull-left" style="width:30px; line-height:1;">
													<div style="height:15px; margin:5px 0;">4 <i class="fa fa-star" aria-hidden="true"></i></div>
												</div>
												<div class="pull-left" style="width:293px;">
													<div class="progress" style="height:15px; margin:8px 0;">
														<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $four_star_total; ?>%">
															<span class="sr-only">80% Complete (danger)</span>
														</div>
													</div>
												</div>
												<div class="pull-right" style="margin-left:5px;"></div>
											</div>
											<div class="pull-left">
												<div class="pull-left" style="width:30px; line-height:1;">
													<div style="height:15px; margin:5px 0;">3 <i class="fa fa-star" aria-hidden="true"></i></div>
												</div>
												<div class="pull-left" style="width:293px;">
													<div class="progress" style="height:15px; margin:8px 0;">
														<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $three_star_total; ?>%">
															<span class="sr-only">80% Complete (danger)</span>
														</div>
													</div>
												</div>
												<div class="pull-right" style="margin-left:5px;"></div>
											</div>
											<div class="pull-left">
												<div class="pull-left" style="width:30px; line-height:1;">
													<div style="height:15px; margin:5px 0;">2 <i class="fa fa-star" aria-hidden="true"></i></div>
												</div>
												<div class="pull-left" style="width:293px;">
													<div class="progress" style="height:15px; margin:8px 0;">
														<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $two_star_total; ?>%">
															<span class="sr-only">80% Complete (danger)</span>
														</div>
													</div>
												</div>
												<div class="pull-right" style="margin-left:5px;"></div>
											</div>
											<div class="pull-left">
												<div class="pull-left" style="width:30px; line-height:1;">
													<div style="height:15px; margin:5px 0;">1 <i class="fa fa-star" aria-hidden="true"></i></div>
												</div>
												<div class="pull-left" style="width:293px;">
													<div class="progress" style="height:15px; margin:8px 0;">
														<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $one_star_total; ?>%">
															<span class="sr-only">80% Complete (danger)</span>
														</div>
													</div>
												</div>
												<div class="pull-right" style="margin-left:5px;"></div>
											</div>
										</div>
									</div>
								<?php } ?>

								<div class="col-sm-6">


									<div class="row" id="post-review-box" style="display:none">
										<div class="well well-sm">
											<div class="col-md-12">
												<form accept-charset="UTF-8" action="<?php echo base_url("home/customerReview"); ?>" method="post">
													<input id="ratings-hidden" name="vote" type="hidden">
													<input name="product" value="<?php echo $upselId; ?>" type="hidden">
													<div class="form-group">
														<label for="inp1">Customer name</label>
														<input type="text" name="name" class="form-control" placeholder="Customer name">
													</div>
													<div class="form-group">
														<label for="inp1">Customer email</label>
														<input type="email" name="email" class="form-control" placeholder="Customer email">
													</div>
													<div class="form-group">
														<label for="inp1">Customer Comment</label>
														<textarea class="form-control animated" cols="50" id="new-review" name="comment" placeholder="Enter your review here..." rows="5"></textarea>
													</div>
													<div class="text-right">
														<div class="stars starrr" data-rating="0"></div>
														<a class="btn btn-danger btn-sm" href="#" id="close-review-box" style="display:none; margin-right: 10px;">
															<span class="glyphicon glyphicon-remove"></span>Cancel</a>
														<button class="flex-c-m btn bg1 bo-rad-23 hov1 s-text1 trans-0-4" type="submit">Save</button>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-12" style="overflow:hidden; padding:0">
									<?php if (count($votes) > 0) { ?>




										<?php foreach ($votes as $vote) :

											/* echo "<pre>";
				print_r($vote);
				echo "</pre>"; */

										?>
											<div class="grid-item">

												<article class="card">
													<figure class="card__thumbnail">
														<?php
														if (!empty($vote->img)) {
														?>
															<img src="<?php if (!filter_var($vote->img, FILTER_VALIDATE_URL)) { ?> reviews/<?php echo $vote->img;
																																		} else echo $vote->img; ?>">
														<?php } else {
														?>
															<img src="assets/images/no-image.png">
														<?php
														} ?>


													</figure>
													<header class="card__title">
														<h4><?php echo $vote->name; ?></h4>
													</header>
													<main class="card__description">

														<small><?php echo $vote->date; ?></small>
														<fieldset class="rating">

															<input type="radio" id="star5<?= $vote->id; ?>" disabled value="5" <?php if ($vote->vote == 5) echo "checked"; ?> /><label class="full" for="star5<?= $vote->id; ?>"></label>
															<input type="radio" id="star4<?= $vote->id; ?>" disabled value="4" <?php if ($vote->vote == 4) echo "checked"; ?> /><label class="full" for="star4<?= $vote->id; ?>"></label>
															<input type="radio" id="star3<?= $vote->id; ?>" disabled value="3" <?php if ($vote->vote == 3) echo "checked"; ?> /><label class="full" for="star3<?= $vote->id; ?>"></label>
															<input type="radio" id="star2<?= $vote->id; ?>" disabled value="2" <?php if ($vote->vote == 2) echo "checked"; ?> /><label class="full" for="star2<?= $vote->id; ?>"></label>
															<input type="radio" id="star1<?= $vote->id; ?>" disabled value="1" <?php if ($vote->vote == 1) echo "checked"; ?> /><label class="full" for="star1<?= $vote->id; ?>"></label>
														</fieldset>


														<p class="card-data"><?php echo $vote->comment; ?></p>
													</main>
													<?php

													if (is_login("admin_login")) { ?>
														<footer class="container" style="position:absolute; top:-51px; left:0px; padding:0px">
															<a class="btn red" onclick="delete_c(this, '<?= $vote->id; ?>');"><i class="fa fa-remove"></i></a>
															<?php if ($vote->ac == 0) { ?>
																<a class="btn green" onclick="approve_c(this, '<?= $vote->id; ?>');"><i class="fa fa-check"></i></a>
															<?php } ?>

														</footer>
													<?php } ?>

												</article>

											</div>


										<?php endforeach; ?>




										<?php if (count($votes) == 8) : ?>
											<div class="clearfix"></div>
											<div class="center">
												<button class="btn btn-success btn-lg reviews-btn" onclick="load_more_reviews(this);"><?php echo lang("lang_h92");

																																		?></button>
											</div>

										<?php endif; ?>



									<?php } ?>



								</div>
							</div>
						</div> <!-- /container -->
					</div>
				</div>
				<div id="home" class="container tab-pane active"><br>
					<?php echo $p->descr; ?>
				</div>
				<div id="menu1" class="container tab-pane fade"><br>
					<?php echo $p->desc; ?>
				</div>

			</div>
		</div>

	</div>
<?php endforeach; ?>
<!-- Relate Product -->
<section class="relateproduct bgwhite p-t-45 p-b-138">
	<div class="container">
		<div class="sec-title p-b-60">
			<h3 class="m-text5 t-center">
				<?php echo lang("lang_h31"); ?>
			</h3>
		</div>
		<!-- Slide2 -->
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

									?>
											<?php if ($image % 2 == 0) { ?>
												<img class="pic-1" src="uploads/<?php echo $img; ?>" alt="<?php echo $p->title; ?>">
											<?php } else { ?>
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
										<?php foreach ($info as $k) { ?>
											<div data-product-option-change="">

												<div id="option-group-Size" class="form-field form-field-options form-field-rectangle form-required" data-product-attribute="set-rectangle">

													<div class="form-field-control" style="<?php if ($k->tp == 'color') { ?>width:100%;<?php } ?>">

														<?php $allOp = explode(",", $k->info);
														foreach ($allOp as $k1) { ?>
															<label class="form-label rectangle" data-product-attribute-value="<?php echo $k1; ?>" data-bpn="">
																<input class="form-input form-rectangle" name="option[<?php echo $k->tp ?>]" type="radio" value="<?php echo $k1; ?>" required="required" aria-required="required">
																<span class="rectangle-text form-label-text colors" style="background-color:<?php echo $k1; ?>; "><?php
																																									if ($k->tp == 'color') {
																																									} else {
																																										echo $k1;
																																									} ?>
																</span>
															</label>
														<?php } ?>
													</div>
												</div>
											</div>
											<br>
										<?php } ?>


										<li class="btn-addcart-product-details<?php echo $pt; ?> size12 trans-0-4 m-t-10 m-b-10" data-id="<?php echo $p->id; ?>" data-upsels="0"> <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 trans-0-4">
												Add to cart
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
</section>
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
				<div class="row">

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
							<div class="block2 col-md-6 m-b-10 custom-block-upsell">
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
<div class="sticky" style="position: sticky;display: none; bottom: 0;text-align: center;background: #ccc;">

	<div class="flex-r-m flex-w p-t-10">
		<div class="flex-m flex-w" style="margin: auto;">
			<div class="flex-w bo5 of-hidden m-r-22 m-t-10 m-b-10">
				<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
					<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
				</button>
				<input class="size8 m-text18 t-center num-product" type="number" name="q" value="1">
				<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
					<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
				</button>
			</div>
			<input type="hidden" name="id" value="<?php echo $p->id; ?>">
			<div class="btn-addcart-product-detail size12 trans-0-4 m-t-10 m-b-10" data-id="<?php echo $p->id; ?>" data-upsels="<?php echo count($upsell); ?>">
				<!-- Button -->
				<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4 add-to-cart-style" style="animation: scaling .5s infinite alternate;">
					<?php echo $settings->product_abt_name; ?>
				</button>

			</div>
		</div>
	</div>
</div>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript">
	var pr = 0;

	function approve_c(hada, id) {
		hadaj = $(hada);
		$.post(base_url + "/admin/approve_comment", {
			id: id
		}, function(data) {
			if (data == 1) {
				hadaj.remove();
			}
		})
	}

	function delete_c(hada, id) {
		hadaj = $(hada);
		$.post(base_url + "/admin/delete_comment", {
			id: id
		}, function(data) {
			if (data == 1) {
				hadaj.parent().parent().parent().remove();
				$('.grid').masonry({
					// options
					itemSelector: '.grid-item',
				});
			}
		})
	}
	$(document).scroll(function() {
		if ($(".sticky").length) {
			if ($(this).scrollTop() > ($(".btncarthide").offset().top)) {
				$(".sticky").fadeIn();
			} else {
				$(".sticky").fadeOut();
			}
		}

		return false;
	});
	// var $grid = $('.items').masonry({
	// 	itemSelector: '.grid-item',
	// });
	// layout Masonry after each image loads
	$grid.imagesLoaded().progress(function() {
		$grid.masonry('layout');
	});

	function load_more_reviews(t) {
		pr++;
		var hada = $(t);
		$.ajax({
			url: base_url + "ajax/reviews/<?= $id; ?>",
			data: {
				p: pr
			},
			dataType: "html",
			type: "POST",
			success: function(data) {
				if (data == 0) {
					hada.parent().remove();
				} else {
					$('.grid').append(data);
					$grid.imagesLoaded().progress(function() {
						$grid.masonry('reloadItems');
						$grid.masonry('layout');
					});
				}
			}
		});
	}
	$('.btn-num-product-down').on('click', function(e) {
		e.preventDefault();
		var id = $(this).data("id");
		var numProduct = Number($(this).next().val());
		if (numProduct > 1) $(this).next().val(numProduct - 1);
	});
	$('.btn-num-product-up').on('click', function(e) {
		e.preventDefault();
		var id = $(this).data("id");
		var numProduct = Number($(this).prev().val());
		$(this).prev().val(numProduct + 1);
	});
</script>
<script type="text/javascript">
	(function(e) {
		var t, o = {
				className: "autosizejs",
				append: "",
				callback: !1,
				resizeDelay: 10
			},
			i = '<textarea tabindex="-1" style="position:absolute; top:-999px; left:0; right:auto; bottom:auto; border:0; padding: 0; -moz-box-sizing:content-box; -webkit-box-sizing:content-box; box-sizing:content-box; word-wrap:break-word; height:0 !important; min-height:0 !important; overflow:hidden; transition:none; -webkit-transition:none; -moz-transition:none;"/>',
			n = ["fontFamily", "fontSize", "fontWeight", "fontStyle", "letterSpacing", "textTransform", "wordSpacing", "textIndent"],
			s = e(i).data("autosize", !0)[0];
		s.style.lineHeight = "99px", "99px" === e(s).css("lineHeight") && n.push("lineHeight"), s.style.lineHeight = "", e.fn.autosize = function(i) {
			return this.length ? (i = e.extend({}, o, i || {}), s.parentNode !== document.body && e(document.body).append(s), this.each(function() {
				function o() {
					var t, o;
					"getComputedStyle" in window ? (t = window.getComputedStyle(u, null), o = u.getBoundingClientRect().width, e.each(["paddingLeft", "paddingRight", "borderLeftWidth", "borderRightWidth"], function(e, i) {
						o -= parseInt(t[i], 10)
					}), s.style.width = o + "px") : s.style.width = Math.max(p.width(), 0) + "px"
				}

				function a() {
					var a = {};
					if (t = u, s.className = i.className, d = parseInt(p.css("maxHeight"), 10), e.each(n, function(e, t) {
							a[t] = p.css(t)
						}), e(s).css(a), o(), window.chrome) {
						var r = u.style.width;
						u.style.width = "0px", u.offsetWidth, u.style.width = r
					}
				}

				function r() {
					var e, n;
					t !== u ? a() : o(), s.value = u.value + i.append, s.style.overflowY = u.style.overflowY, n = parseInt(u.style.height, 10), s.scrollTop = 0, s.scrollTop = 9e4, e = s.scrollTop, d && e > d ? (u.style.overflowY = "scroll", e = d) : (u.style.overflowY = "hidden", c > e && (e = c)), e += w, n !== e && (u.style.height = e + "px", f && i.callback.call(u, u))
				}

				function l() {
					clearTimeout(h), h = setTimeout(function() {
						var e = p.width();
						e !== g && (g = e, r())
					}, parseInt(i.resizeDelay, 10))
				}
				var d, c, h, u = this,
					p = e(u),
					w = 0,
					f = e.isFunction(i.callback),
					z = {
						height: u.style.height,
						overflow: u.style.overflow,
						overflowY: u.style.overflowY,
						wordWrap: u.style.wordWrap,
						resize: u.style.resize
					},
					g = p.width();
				p.data("autosize") || (p.data("autosize", !0), ("border-box" === p.css("box-sizing") || "border-box" === p.css("-moz-box-sizing") || "border-box" === p.css("-webkit-box-sizing")) && (w = p.outerHeight() - p.height()), c = Math.max(parseInt(p.css("minHeight"), 10) - w || 0, p.height()), p.css({
					overflow: "hidden",
					overflowY: "hidden",
					wordWrap: "break-word",
					resize: "none" === p.css("resize") || "vertical" === p.css("resize") ? "none" : "horizontal"
				}), "onpropertychange" in u ? "oninput" in u ? p.on("input.autosize keyup.autosize", r) : p.on("propertychange.autosize", function() {
					"value" === event.propertyName && r()
				}) : p.on("input.autosize", r), i.resizeDelay !== !1 && e(window).on("resize.autosize", l), p.on("autosize.resize", r), p.on("autosize.resizeIncludeStyle", function() {
					t = null, r()
				}), p.on("autosize.destroy", function() {
					t = null, clearTimeout(h), e(window).off("resize", l), p.off("autosize").off(".autosize").css(z).removeData("autosize")
				}), r())
			})) : this
		}
	})(window.jQuery || window.$);
	var __slice = [].slice;
	(function(e, t) {
		var n;
		n = function() {
			function t(t, n) {
				var r, i, s, o = this;
				this.options = e.extend({}, this.defaults, n);
				this.$el = t;
				s = this.defaults;
				for (r in s) {
					i = s[r];
					if (this.$el.data(r) != null) {
						this.options[r] = this.$el.data(r)
					}
				}
				this.createStars();
				this.syncRating();
				this.$el.on("mouseover.starrr", "span", function(e) {
					return o.syncRating(o.$el.find("span").index(e.currentTarget) + 1)
				});
				this.$el.on("mouseout.starrr", function() {
					return o.syncRating()
				});
				this.$el.on("click.starrr", "span", function(e) {
					return o.setRating(o.$el.find("span").index(e.currentTarget) + 1)
				});
				this.$el.on("starrr:change", this.options.change)
			}
			t.prototype.defaults = {
				rating: void 0,
				numStars: 5,
				change: function(e, t) {}
			};
			t.prototype.createStars = function() {
				var e, t, n;
				n = [];
				for (e = 1, t = this.options.numStars; 1 <= t ? e <= t : e >= t; 1 <= t ? e++ : e--) {
					n.push(this.$el.append("<span class='glyphicon .glyphicon-star-empty'></span>"))
				}
				return n
			};
			t.prototype.setRating = function(e) {
				if (this.options.rating === e) {
					e = void 0
				}
				this.options.rating = e;
				this.syncRating();
				return this.$el.trigger("starrr:change", e)
			};
			t.prototype.syncRating = function(e) {
				var t, n, r, i;
				e || (e = this.options.rating);
				if (e) {
					for (t = n = 0, i = e - 1; 0 <= i ? n <= i : n >= i; t = 0 <= i ? ++n : --n) {
						this.$el.find("span").eq(t).removeClass("glyphicon-star-empty").addClass("glyphicon-star")
					}
				}
				if (e && e < 5) {
					for (t = r = e; e <= 4 ? r <= 4 : r >= 4; t = e <= 4 ? ++r : --r) {
						this.$el.find("span").eq(t).removeClass("glyphicon-star").addClass("glyphicon-star-empty")
					}
				}
				if (!e) {
					return this.$el.find("span").removeClass("glyphicon-star").addClass("glyphicon-star-empty")
				}
			};
			return t
		}();
		return e.fn.extend({
			starrr: function() {
				var t, r;
				r = arguments[0], t = 2 <= arguments.length ? __slice.call(arguments, 1) : [];
				return this.each(function() {
					var i;
					i = e(this).data("star-rating");
					if (!i) {
						e(this).data("star-rating", i = new n(e(this), r))
					}
					if (typeof r === "string") {
						return i[r].apply(i, t)
					}
				})
			}
		})
	})(window.jQuery, window);
	$(function() {
		return $(".starrr").starrr()
	})
	$(function() {
		$('#new-review').autosize({
			append: "\n"
		});
		var reviewBox = $('#post-review-box');
		var newReview = $('#new-review');
		var openReviewBtn = $('#open-review-box');
		var closeReviewBtn = $('#close-review-box');
		var ratingsField = $('#ratings-hidden');
		openReviewBtn.click(function(e) {
			reviewBox.slideDown(400, function() {
				$('#new-review').trigger('autosize.resize');
				newReview.focus();
			});
			openReviewBtn.fadeOut(100);
			closeReviewBtn.show();
		});
		closeReviewBtn.click(function(e) {
			e.preventDefault();
			reviewBox.slideUp(300, function() {
				newReview.focus();
				openReviewBtn.fadeIn(200);
			});
			closeReviewBtn.hide();
		});
		$('.starrr').on('starrr:change', function(e, value) {
			ratingsField.val(value);
		});
	});
</script>
<script>
	function myFunction() {

		document.getElementById("stardiv").style.display = "block";
		$('#demo').hide();
	}
</script>