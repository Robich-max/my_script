<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<base href="<?php echo base_url(); ?>">


	<script type="text/javascript">
		var base_url = "<?php echo base_url(); ?>";
	</script>

	<?php

	$set = $this->m_p->se_a("settings");

	foreach ($set as $key) {
		$settings = $key;
	}

	?>


	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta name="title" content="<?php echo $p->page_title; ?>" />
 <meta name="og:site_name" content="<?php echo $settings->site_name; ?>" />
  <meta name="og:url" content="<?php echo $p->page_url; ?>" />
  <meta name="og:title" content="Electriclint" />
  <meta name="og:description" content="<?php echo $p->page_desc; ?>" />

  <title><?php echo $settings->seo_title; ?></title>
  
  <meta name="description" content="<?php echo $p->page_desc; ?>">
  <meta name="keyword" content="<?php echo $settings->keyword; ?>">
  
  
  
  
  
	<script data-ad-client="ca-pub-3562983652486496" async src="assets/js/adsbygoogle.js"></script>
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<!--===============================================================================================-->
	<!--<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">-->
	
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href=" <?php echo $settings->font_link; ?>" rel="stylesheet"> 
<link href=" <?php echo $settings->menu_font_link; ?>" rel="stylesheet"> 
<link href="<?php echo $settings->slids_font_link; ?>" rel="stylesheet"> 

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
	<link rel="stylesheet" type="text/css" href="assets/css/hobrt.css">
	<link rel="stylesheet" type="text/css" href="assets/css/slick.css"/>
	
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">


	<style>
		
		.block2-labelsale::before {

			content: "<?php echo lang("lang_h114") ?>" !important;
		}
		.logo img {
            max-height: 54px !important;
        }
        
        .select2-container .select2-selection--single .select2-selection__rendered {
    color: <?php echo $settings->color; ?>;
  
}
.wrap_header{
    background-color:<?php echo $settings->menu_bg_color; ?>;
        height:<?php echo $settings->menu_height; ?>px;
}
.main_menu>li>a{
    color:<?php echo $settings->menu_color; ?>;
    font-size:<?php echo $settings->menu_font_size; ?>px;
}
.nav-item-highlight{
    color:<?php echo $settings->menu_ac_color; ?>!important;
}
.logo img{
    max-height: <?php echo $settings->logo_height; ?>px;
    width: <?php echo $settings->logo_width; ?>px;
}

.header-wrapicon1 img, .header-wrapicon2 img{
   height:<?php echo $settings->cart_logo_height; ?>%;
}

.slider-item {
    color: <?php echo $settings->slids_ft_color; ?>;
}
.flash-text {
    color: <?php echo $settings->slids_ft_color; ?>;
}
.header-icons-noti{
    background-color: <?php echo $settings->cart_color; ?>;
}
.topnav{
    height:<?php echo $settings->slids_br_height; ?>px;          
}
.main_menu>li>a{
    font-family:<?php echo $settings->menu_font; ?>;
}

.slick-initialized .slick-slide{
    font-family:<?php echo $settings->slids_font; ?>;
}

.w-size1{
    margin: 0 auto;
}

	</style>
	
	 <link rel="stylesheet" type="text/css" href="assets/css/index014d.css" />
<script type="text/javascript" src="assets/js/basea091.js"></script>
	
<!--===============================================================================================-->

		<?php echo $settings->googlea; ?>
		<?php $pixels = setting("fbpixel");
		if(!empty($settings->fbpixel)) { ?>

          <?php echo $settings->fbpixel; ?>


	<?php } ?>


</head>
<body class="animsition">

	<!-- top noti -->
	<div class="flex-c-m size22 bg0 s-text21 pos-relative" style="display: none;">
		20% off everything!
		<a href="product.html" class="s-text22 hov6 p-l-5">
			Shop Now
		</a>

		<button class="flex-c-m pos2 size23 colorwhite eff3 trans-0-4 btn-romove-top-noti">
			<i class="fa fa-remove fs-13" aria-hidden="true"></i>
		</button>
	</div>

	<!-- Header -->
	<header class="header1">
		<!-- Header desktop -->
		<div class="container-menu-header">
			<div class="topbar top-bar-style1" style="background-color: <?php echo $settings->bg_color; ?>; height: <?php echo $settings->height.'px'; ?>; ">
				<div class="topbar-social">
					<a href="<?php echo $settings->fb; ?>" target="_blanck" class="topbar-social-item fa fa-facebook facebook-class" style="font-size: <?php echo $settings->icon_font_size.'px'; ?>;color: <?php echo $settings->color; ?>"></a>
					<a href="<?php echo $settings->ig; ?>" target="_blanck" class="topbar-social-item fa fa-instagram instagram-class" style="font-size: <?php echo $settings->icon_font_size.'px'; ?>;color: <?php echo $settings->color; ?>"></a>
					<a href="<?php echo $settings->tw; ?>" target="_blanck" class="topbar-social-item fa fa-twitter" style="font-size: <?php echo $settings->icon_font_size.'px'; ?>;color: <?php echo $settings->color; ?>"></a>
				</div>

				<span class="topbar-child1 header-text" style="color: <?php echo $settings->color; ?>; font-family: <?php echo $settings->font; ?>;font-size: <?php echo $settings->font_size.'px'; ?>;">
					<?php echo $settings->teles; ?>
				</span>

				<div class="topbar-child2">
					<span class="topbar-email" style="color: <?php echo $settings->color;?>; font-family: <?php echo $settings->font; ?>">
						<a href="<?php echo base_url("contact"); ?>" class="email-text" style="font-size: <?php echo $settings->font_size.'px'; ?>;color: <?php echo $settings->color; ?>; font-family: <?php echo $settings->font; ?>"><?php echo $settings->whs; ?></a>
					</span>
				

					<div class="topbar-language rs1-select2" style="color: red;">
					  &nbsp;	
					<span class="topbar-email" style="color: <?php echo $settings->color;?>; font-family: <?php echo $settings->font; ?>">
						<a  class="text" style="font-size: <?php echo $settings->font_size.'px'; ?>;color: <?php echo $settings->color; ?>; font-family: <?php echo $settings->font; ?>">USD</a>
					</span>
					
					</div>
				</div>
			</div>

			<div class="wrap_header">
				<!-- Logo -->
				<a href="<?php echo base_url(); ?>" class="logo">
					<img src="logo/<?php echo $settings->logo; ?>" alt="IMG-LOGO">
				</a>

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li>
								<a href="<?php echo base_url(); ?>" class="nav-item"><?php echo lang("lang_h1"); ?></a>
							</li>

							<li>
								<a href="products.html" class="nav-item"><?php echo lang("lang_h2"); ?></a>
							</li>

							<li class="sale-noti">
								<a href="sale.html" class="nav-item nav-item-highlight"><?php echo lang("lang_h3"); ?></a>
							</li>

							<li>
								<a href="about.html" class="nav-item"><?php echo lang("lang_h4"); ?></a>
							</li>

							<li>
								<a href="contact.html" class="nav-item "><?php echo lang("lang_h5"); ?></a>
							</li>
						</ul>
					</nav>
				</div>

				<!-- Header Icon -->
				<div class="header-icons">
					<span class="linedivide1"></span>
					<?php

					$cart = is_null(get_cookie("cart")) ? array() : json_decode(get_cookie("cart"), TRUE) ;

					$tprice = 0;

					foreach($cart as $kc)
						$tprice = $tprice + $kc['price'] * $kc['q'];
					
					?>

					<div class="header-wrapicon2">
						<img src="logo/<?php echo $settings->cart_logo; ?>" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti cart-num"><?php echo count($cart); ?></span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">


								<?php foreach($cart as $kt => $kc): ?>
								<li class="header-cart-item">


									<div class="header-cart-item-img">
										<img src="uploads/<?php echo $kc['img']; ?>" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a onclick="deleteFromCart(this, <?php echo $kt; ?>, 3)" class="float-right" style="color: red;cursor: pointer;"><i class="fa fa-trash"></i></a>
										<a href="#" class="header-cart-item-name">
											<?php echo $kc['name']; ?>
										</a>

										<span class="header-cart-item-info">
											<span class="cartItem<?=$kt;?>"><?php echo $kc['q']; ?></span> x <span class="currency" data-currencyName="usd"><?php echo $kc['price']; ?></span>
											<?php if($kc['price'] != $kc['orp']){ ?><del style="color: red"><span class="currency" data-currencyName="usd"><?php echo $kc['orp']; ?></span></del><?php } ?>
										</span>
									</div>
								</li>
								<?php endforeach; ?>

							</ul>

							<div class="header-cart-total">
								<?php echo lang("lang_h6") ?>: <span class="currency" data-currencyName="usd"><?php echo $tprice; ?></span>
							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4 cart-header-btns">
										<?php echo lang("lang_h7") ?>
									</a>
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="<?php echo base_url("home/checkout"); ?>" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4 cart-header-btns">
										<?php echo lang("lang_h8") ?>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap_header_mobile">

			<div class="btn-show-menu-mobile hamburger hamburger--squeeze" class="float-left">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
			
			<!-- Logo moblie -->
			<a href="<?php echo base_url(); ?>" class="logo-mobile">
				<img src="logo/<?php echo $settings->logo; ?>" alt="IMG-LOGO">
			</a>



			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">

					<span class="linedivide2"></span>

					<?php

					$cart = is_null(get_cookie("cart")) ? array() : json_decode(get_cookie("cart"), TRUE) ;

					$tprice = 0;

					foreach($cart as $kc)
						$tprice = $tprice + $kc['price'] * $kc['q'];
					
					?>

					<div class="header-wrapicon2">
						<img src="assets/images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti cart-num"><?php echo count($cart); ?></span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">


								<?php foreach($cart as $kt => $kc): ?>
								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="uploads/<?php echo $kc['img']; ?>" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a onclick="deleteFromCart(this, <?php echo $kt; ?>, 3)" class="float-right" style="color: red;cursor: pointer;"><i class="fa fa-trash"></i></a>
										<a href="#" class="header-cart-item-name">
											<?php echo $kc['name']; ?>
										</a>

										<span class="header-cart-item-info">
											<span class="cartItem<?=$kt;?>"><?php echo $kc['q']; ?></span> x <span class="currency" data-currencyName="usd"><?php echo $kc['price']; ?></span>
										</span>
									</div>
								</li>
								<?php endforeach; ?>

							</ul>

							<div class="header-cart-total">
								<?php echo lang("lang_h6") ?>: <span class="currency" data-currencyName="usd"><?php echo $tprice; ?></span>
							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4 cart-header-btns">
										<?php echo lang("lang_h7") ?>
									</a>
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="<?php echo base_url("home/checkout"); ?>" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4 cart-header-btns">
										<?php echo lang("lang_h8") ?>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

		<!-- Menu Mobile -->
		<div class="wrap-side-menu" >
			<nav class="side-menu">
				<ul class="main-menu">
					<!--<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<span class="topbar-child1">
							<?php echo $settings->teles; ?>
						</span>
					</li>

					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<div class="topbar-child2-mobile">
							<span class="topbar-email">
								<a href="<?php echo base_url("contact"); ?>"><?php echo $settings->whs; ?></a>
							</span>

							<div class="topbar-language rs1-select2">
								<select class="selection-1" name="time">
									<option>USD</option>
								</select>
							</div>
						</div>
					</li>

					<li class="item-topbar-mobile p-l-10">
						<div class="topbar-social-mobile">
							<a href="<?php echo $settings->fb; ?>" target="_blanck" class="topbar-social-item fa fa-facebook"></a>
							<a href="<?php echo $settings->ig; ?>" target="_blanck" class="topbar-social-item fa fa-instagram"></a>
							<a href="<?php echo $settings->tw; ?>" target="_blanck" class="topbar-social-item fa fa-twitter"></a>
						</div>
					</li> -->

					<li class="item-menu-mobile">
						<a href="<?php echo base_url(); ?>"><?php echo lang("lang_h1"); ?></a>
						
					</li>

					<li class="item-menu-mobile">
						<a href="products.html"><?php echo lang("lang_h2"); ?></a>
					</li>

					<li class="item-menu-mobile">
						<a href="sale.html"><?php echo lang("lang_h3"); ?></a>
					</li>

					<li class="item-menu-mobile">
						<a href="about.html"><?php echo lang("lang_h4"); ?></a>
					</li>

					<li class="item-menu-mobile">
						<a href="contact.html"><?php echo lang("lang_h5"); ?></a>
					</li>
				</ul>
			</nav>


		</div>
	</header>

 



    <?php 
    $slids = $this->db->query("SELECT (SELECT IFNULL( (SELECT position FROM slids WHERE position =1 LIMIT 1), 0)) as position FROM `slids` LIMIT 1"); 
    //print_r();
    if($slids->result('array')[0]['position']==1){
    //echo $this->db->last_query();
    ?>
			<div class="topnav row d-none d-md-flex" style="background: <?php echo $settings->slids_bg_color; ?>;">
	    
	       <?php
	       $blink = $this->db->query("SELECT text,icon FROM slids WHERE position=2 ");
	      // print_r($blink->result('array')[0]['text']);
	       //echo $this->db->last_query();
	       if(!empty( $blink->result('array')[0]['text'])){ ?>
	    
		<div class="col-md-3 text-center">
			<span class="flash-text">	<i class="fa fa-<?=$blink->result('array')[0]['icon'];?>"></i> <?php echo $blink->result('array')[0]['text']; ?></span>
		</div>
		
		<div class="col-md-9 multiple-items">
		    
		    <?php }else { ?>
		    
		   <div class="col-md-12 multiple-items">
		    
		    <?php } ?>
			
			<?php

			$slids = $this->m_p->s_a("slids", "position=1", FALSE, 0, array("*"), "id", "ASC");
			//echo $this->db->last_query();
			//print_r($slids);
			//exit();

			foreach($slids as $sl) : ?>
			
			<div class="text-center slider-item">
				<i class="fa fa-<?=$sl->icon;?>"></i>
				<?php echo $sl->text; ?>
			</div>

			<?php endforeach; ?>

		<!--</div>-->

	</div>
	</div>

	<?php } else{}?>