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
  <meta name="og:url" content="<?php echo base_url("home/productshow/$p->page_url"); ?>" />
  <meta name="og:title" content="Electriclint" />
  <meta name="og:description" content="<?php echo $p->page_desc; ?>" />

  <title><?php echo $settings->seo_title; ?></title>
  
  <meta name="description" content="<?php echo $p->page_desc; ?>">
  <meta name="keyword" content="<?php echo $settings->keyword; ?>">
  
  
  
  
  
	<script data-ad-client="ca-pub-3562983652486496" async src="assets/js/adsbygoogle.js"></script>
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?php echo base_url("images/$settings->favicon");?>"/>
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
	<link rel="stylesheet" type="text/css" href="assets/css/utils.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
	<link rel="stylesheet" type="text/css" href="assets/css/hobrt.css">
	<link rel="stylesheet" type="text/css" href="assets/css/slick.css"/>
	
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">


	<style>
		
      .header1{
      height:75px;
  }
   .block2-labelsale::before {
    content: "<?php echo $settings->product_of_name; ?>"!important;
    color: <?php echo $settings->product_of_tx_color; ?>;
}
.block2-labelsale::before {
    background-color: <?php echo $settings->product_of_color; ?>;
  
}
		.logo img {
            max-height: auto !important;
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

.xm-product-box{
	background-color: <?php echo $settings->banner_five_color; ?>!important;
}

.bgwhite {
    background-color: <?php echo $settings->category_sc_color; ?>;
}

.bg3{
    background-color: <?php echo $settings->category_bt_color; ?>;
}

.m-text2{
    color: <?php echo $settings->category_bt_tx_color; ?>;
}
   
.hov1:hover {
    background-color: <?php echo $settings->category_bt_hv_color; ?>!important;
    color: <?php echo $settings->category_bt_tx_hv_color; ?>!important;
}

body{
    background-color: <?php echo $settings->body_bg_color; ?>;
}
.s-text3{
	color: <?php echo $settings->product_tt_color; ?>;
}
a:hover{
	color: <?php echo $settings->product_tt_hv_color; ?>;
}
.product-page-title{
  color: <?php echo $settings->product_tt_color; ?>!important;
}
.rs2-select2 .select2-container .select2-selection--single{
    background-color: <?php echo $settings->product_select_color; ?>;
}
.starColor {
    color:  <?php echo $settings->rating_color; ?>;
}
.avis {
    color:  <?php echo $settings->avis_color; ?>;
}
.product-item-hidden-price {
    color:<?php echo $settings->cross_price_color; ?>;
}

.m-text8 {
    color:<?php echo $settings->price_color; ?>;
}

.bg1{
    background-color: <?php echo $settings->product_bt_color; ?>;
}

.s-text1{
    color: <?php echo $settings->product_bt_tx_color; ?>;
}

.footer-bg {
    background: <?php echo $settings->footer_color; ?>;
}
.footer-headline {
    color:<?php echo $settings->footer_headline_color; ?>;
}
.footer-text {
    color: <?php echo $settings->footer_tx_color; ?>;
}
.subscribe-button {
    color: <?php echo $settings->subscribe_tx_color; ?>;
    background: <?php echo $settings->subscribe_color; ?>;
}
.bg6 {
    background-color:<?php echo $settings->subscribe_ip_color; ?>;
   color:<?php echo $settings->subscribe_inp_tx_color; ?>;
  }
  .facebook-class {
    color: <?php echo $settings->footer_socialmd_color; ?>;
}
.instagram-class {
    color: <?php echo $settings->footer_socialmd_color; ?>;
}
.twitter-class {
    color: <?php echo $settings->footer_socialmd_color; ?>;
}

.cookies-accept {
    background: <?php echo $settings->cookies_color; ?>!important;
}
.btn-success {
    color:  <?php echo $settings->cookies_bt_tx_color; ?>;
    background-color: <?php echo $settings->cookies_bt_color; ?>;
    border-color:<?php echo $settings->cookies_bt_br_color; ?>;
}
.btn-success:hover {
    color: <?php echo $settings->cookies_bt_tx_hv_color; ?>;
    background-color: <?php echo $settings->cookies_bt_hv_color; ?>;
    border-color: <?php echo $settings->cookies_bt_br_hv_color; ?>;
}
.btn-back-to-top{
	 background-color: <?php echo $settings->scrol_bg_color; ?>;
}
.symbol-btn-back-to-top{
	 color: <?php echo $settings->scrol_color; ?>;
}
.rensignement-text {
    color: <?php echo $settings->pr_dt_text_info_color; ?>;
}
.modal-content{
  background-color: <?php echo $settings->modal_bg_color; ?>;
}

#currencySelector{
  background-color: <?php echo $settings->bg_color; ?>;
color: <?php echo $settings->color; ?>;
border: 0px;
}
#currencySelector1{
  background-color: <?php echo $settings->bg_color; ?>;
color: <?php echo $settings->color; ?>;
border: 0px;
}
.wrap_header_mobile{
    background-color:<?php echo $settings->menu_bg_color; ?>;
}


.item-menu-mobile {
    background-color: <?php echo $settings->menu_mobile; ?>;
}

.hamburger-inner, .hamburger-inner:after, .hamburger-inner:before {
  
    background-color:<?php echo $settings->menu_logo; ?>;
}

@media only screen and (max-width: 760px), (min-width: 768px) and (max-width: 1024px) {
    /* ... */
    select {
        width: 75px;
    }
    .option{
 
    font-size: 8px;
}
}


* {
  /* Typography */
  --main-font: 'Slabo 27px', serif;
  
  /* Calculation */
  --responsive: calc((var(--min-font) * 1px) + (var(--max-font) - var(--min-font)) * ((100vw - 420px) / (1200 - 420))); /* Ranges from 421px to 1199px */
}

h1 {
  /* Set max and min font sizes */
  --max-font: 50;
  --min-font: 25;
  font-family: var(--main-font);
  font-size: var(--responsive);
}

p {
  font-family: sans-serif;
  margin: auto;
  width: fit-content;
  
  /* Set max and min font sizes */
  --max-font: 20;
  --min-font: 14;
  font-size: var(--responsive);
}

@media (min-width: 1200px) {
  h1,h2,h3,h4,h5,h6,
  p {
    font-size: calc(var(--max-font) * 1px);
  }
}

@media (max-width: 420px) {
  h1, h1,h2,h3,h4,h5,h6,
  p {
    font-size: calc(var(--min-font) * 1px);
  }
}

 @media (min-width: 230px)and (max-width: 768px)  {
  .space{
    padding-top:70px;
  }
  
   h1, h1,h2,h3,h4,h5,h6,
  p {
    font-size: calc(var(--min-font) * 1px);
  }
     
 }
#google_translate_element {
    float: right;
    margin-left: 20px;
    margin-top: 2px;
}#google_translate_element {
    display: inline-block;
}.goog-te-gadget {
    font-family: arial;
    font-size: 11px;
    color: #666;
    white-space: nowrap;
}.goog-te-gadget-simple {
    background-color: #fff;
    border-left: 1px solid #d5d5d5;
    border-top: 1px solid #9b9b9b;
    border-bottom: 1px solid #e8e8e8;
    border-right: 1px solid #d5d5d5;
    font-size: 10pt;
    display: inline-block;
    padding-top: 1px;
    padding-bottom: 2px;
    cursor: pointer;
    zoom: 1;
    *display: inline;
}.goog-te-gadget-simple {
    background-color: transparent !important;
}.goog-te-gadget-simple {
    border: 0px !important;
}.goog-te-gadget-simple .goog-te-menu-value span {
    text-decoration: none;
}.goog-te-gadget-simple .goog-te-menu-value span {
    color: #fff !important;
    padding-right: 8px !important;
}.goog-te-gadget img {
    display: none;
}
@media  only screen and (min-width: 230px)and (max-width:998px)
{
   
   .d-md-flexs {
     display: none!important;
}

.topnav {
 
    line-height: 20px!important;
}

    
}

@media only screen and (max-width: 462px)
{
  .slick-initialized .slick-slide {
    font-size: 8px;
  } 
}


@media only screen and (min-width: 1068px)
{
    .wrap_header_mobile {
        
    display: none!important;
}

}

.animsition{
     top:0px!important;
 }

 .jfk-bubble{
   display: none;
 }

 .gtx-bubble{
   display: none;
 }
	</style>
	
	 <link rel="stylesheet" type="text/css" href="assets/css/index014d.css" />
<script type="text/javascript" src="assets/js/basea091.js"></script>
 <script type="text/javascript">
                    function googleTranslateElementInit() {
                        new google.translate.TranslateElement({
                            pageLanguage: 'en',
                            layout: google.translate.TranslateElement.InlineLayout.SIMPLE
                        }, 'google_translate_element');
                    }
                </script>
                <script type="text/javascript"
                        src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
	
<!--===============================================================================================-->

		<?php echo $settings->googlea; ?>
		<?php $pixels = setting("fbpixel");
		if(!empty($settings->fbpixel)) { ?>

          <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');

      <?php
      $pixels = explode(PHP_EOL, $settings->fbpixel);

      foreach ($pixels as $pixel) { ?>

        fbq('init', '<?=str_replace(['<p>', '</p>'],'',$pixel);?>');

      <?php } ?>

      fbq('track', 'PageView');
    </script>


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
					<!-- Google language translate -->
				    <!--<div id="google_translate_element"></div>-->
					<div class="topbar-language rs1-select2" style="color: <?php echo $settings->color; ?>">
					
						  <select id="currencySelector">
						    <option value="usd">$ USD</option>
						    <option value="eur">€ EUR</option>
						  </select>

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
						<ul class="main_menu mr-auto">
							<li>
								<a href="<?php echo base_url(); ?>" class="nav-item">Home</a>
							</li>
                         <?php foreach($menus as $menu) : ?>
                         <?php if($menu->single == 1){?>
                         		<li>
								<a href="<?php echo base_url("page/$menu->id"); ?>" class="nav-item"><?php echo $menu->name; ?></a>
							    </li>
                         <?php }else{?>

                         		 <li class="dropdown">
					                <a href class="nav-link dropdown-toggle" id="<?php echo $menu->name; ?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $menu->name; ?></a>
					              <ul class="dropdown-menu" aria-labelledby="<?php echo $menu->name; ?>">
	                 
<?php $catdatas = $this->m_p->s_a("cats", array('menu_id =' => $menu->id), FALSE, 0, array("*")); 

foreach($catdatas as $catdata) :
?>
<?php if($catdata->subcat == 0){?>
	                 <a class="dropdown-item" href="<?php echo site_url("category/$catdata->id"); ?>"><?php echo $catdata->title; ?></a>
<?php }else{?>
	                    <li class="dropdown-item btn dropdown-toggle Btn-ups" type="button" id="<?php echo $catdata->title; ?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo $catdata->title; ?>
                        </li>
                        <ul class="dropdown-menu Nav-submenu-colors" aria-labelledby="<?php echo $catdata->title; ?>">
                        	<?php $ress = $this->m_p->s_a("subcat", array('active_status =' => 1,'cat_id =' => $catdata->id), FALSE, 0, array("*")); 
        foreach($ress as $res) :                              	
?>
                            <a class="dropdown-item" href="<?php echo site_url("home/subcategory/$res->id"); ?>"><?php echo $res->name; ?></a>
                           
                           <?php endforeach; ?> 
                            
                        </ul>
                        
	<?php }?>
<?php endforeach; ?>
			          </ul>
			          </li>

                         	<?php }?>
							
							<?php endforeach; ?>

	
						</ul>
					</nav>
				</div>

				<!-- Header Icon -->
				<div class="header-icons">
					 <?php if(!$this->session->userdata('id')) { ?>
						<a href="<?php echo base_url("home/account"); ?>" class="nav-item"> <img src="logo/<?php echo $settings->account_logo; ?>" class="header-icon1 js-show-header-dropdown" alt="ICON" style="height: <?php echo $settings->account_logo_height; ?>px;"></a>
					<?php }else{?>
					<a href="<?php echo base_url("private_area/useLogout"); ?>" class="nav-item">Logout</a>

					<?php }?>
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
								<?php echo lang("lang_h6") ?> Price: <span class="currency" data-currencyName="usd"><?php echo $tprice; ?></span>
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
									<a href="<?php echo base_url("home/checkoutpage"); ?>" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4 cart-header-btns">
										<?php echo lang("lang_h8") ?>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>



 <?php 
    $slids = $this->db->query("SELECT (SELECT IFNULL( (SELECT position FROM slids WHERE position = 1 LIMIT 1), 0)) as position FROM `slids` LIMIT 1"); 

  
    //print_r();
    if($slids->result('array')[0]['position']==1){
    //echo $this->db->last_query();
    ?>
      <div class="topnav row d-md-flex wrap_header_mobile" style="background: <?php echo $settings->slids_bg_color; ?>;">
      
         <?php
         $blink = $this->db->query("SELECT text,icon FROM slids WHERE position=2 ");
        // print_r($blink->result('array')[0]['text']);
         //echo $this->db->last_query();
         if(!empty( $blink->result('array')[0]['text'])){ ?>
      
    <div class="col-md-3 text-center">
      <span class="flash-text"> <i class="fa fa-<?=$blink->result('array')[0]['icon'];?>"></i> <?php echo $blink->result('array')[0]['text']; ?></span>
    </div>
    
    <div class="col-md-9 multiple-items">
        
        <?php }else { ?>
        
       <div class="col-md-12 multiple-items">
        
        <?php } ?>
      
      <?php

      $slids = $this->m_p->s_a("slids", "position = 1", FALSE, 0, array("*"), "id", "ASC");
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
					 <?php if(!$this->session->userdata('id')) { ?>
						<a href="<?php echo base_url("home/account"); ?>" class="nav-item"> <img src="logo/<?php echo $settings->account_logo; ?>" class="header-icon1 js-show-header-dropdown" alt="ICON" style="height: <?php echo $settings->account_logo_height; ?>px;"></a>
					<?php }else{?>
					<a href="<?php echo base_url("private_area/useLogout"); ?>" class="nav-item">Logout</a>

					<?php }?>

					<span class="linedivide2"></span>

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
                      
                <?php if(isset($kc['op'])){ $options = json_decode($kc['op']); foreach($options ?? array() as $op => $v) { ?>
                  <small><?php echo $op," : ",$v; ?></small>

                <?php } } ?>
                    </span>

										<span class="header-cart-item-info">
											<span class="cartItem<?=$kt;?>"><?php echo $kc['q']; ?></span> x <span class="currency" data-currencyName="usd"><?php echo $kc['price']; ?></span>
										</span>
									</div>
								</li>
								<?php endforeach; ?>

							</ul>

							<div class="header-cart-total">
								<?php echo lang("lang_h6") ?> Price: <span class="currency" data-currencyName="usd"><?php echo $tprice; ?></span>
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
									<a href="<?php echo base_url("home/checkoutpage"); ?>" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4 cart-header-btns">
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
     
      <div class="topbar top-bar-style1" style="background-color: <?php echo $settings->bg_color; ?>; height: <?php echo $settings->height.'px'; ?>; ">
        <div class="topbar-social">
          <a href="<?php echo $settings->fb; ?>" target="_blanck" class="topbar-social-item fa fa-facebook facebook-class" style="font-size: <?php echo $settings->icon_font_size.'px'; ?>;color: <?php echo $settings->color; ?>"></a>
          <a href="<?php echo $settings->ig; ?>" target="_blanck" class="topbar-social-item fa fa-instagram instagram-class" style="font-size: <?php echo $settings->icon_font_size.'px'; ?>;color: <?php echo $settings->color; ?>"></a>
          <a href="<?php echo $settings->tw; ?>" target="_blanck" class="topbar-social-item fa fa-twitter" style="font-size: <?php echo $settings->icon_font_size.'px'; ?>;color: <?php echo $settings->color; ?>"></a>
        </div>

       
         <div id="google_translate_element"></div>
             
        <div class="topbar-child2">
         
   

          <div class="topbar-language rs1-select2" style="color: <?php echo $settings->color; ?>">
          
              <select id="currencySelector1">
                <option class="option" value="usd">$ USD</option>
                <option class="option" value="eur">€ EUR</option>
              </select>

          </div>

        </div>
      </div>
			<nav class="side-menu">
				<ul class="main-menu">
					

					<li class="item-menu-mobile">
						<a href="<?php echo base_url(); ?>">Home</a>
						
					</li>

					<?php foreach($menus as $menu) : ?>
                         	<?php if($menu->single == 1){?>
                         		<li class="item-menu-mobile">
								<a href="<?php echo base_url("page/$menu->id"); ?>" class="nav-item"><?php echo $menu->name; ?></a>
							</li>
                         	<?php }else{?>

                         		 <li class="item-menu-mobile dropdown">
	                <a href class="nav-link dropdown-toggle" id="<?php echo $menu->name; ?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $menu->name; ?></a>
	                     <ul class="dropdown-menu" aria-labelledby="<?php echo $menu->name; ?>">
	                 
<?php $catdatas = $this->m_p->s_a("cats", array('menu_id =' => $menu->id), FALSE, 0, array("*")); 

foreach($catdatas as $catdata) :
?>
<?php if($catdata->subcat == 0){?>
	                 <a class="dropdown-item" href="<?php echo site_url("category/$catdata->id"); ?>"><?php echo $catdata->title; ?></a>
<?php }else{?>
	                    <li class="dropdown-item btn dropdown-toggle Btn-ups" type="button" id="<?php echo $catdata->title; ?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo $catdata->title; ?>
                        </li>
                        <ul class="dropdown-menu Nav-submenu-colors" aria-labelledby="<?php echo $catdata->title; ?>">
                        	<?php $ress = $this->m_p->s_a("subcat", array('active_status =' => 1,'cat_id =' => $catdata->id), FALSE, 0, array("*")); 
        foreach($ress as $res) :                              	
?>
                            <a class="dropdown-item" href="<?php echo site_url("home/subcategory/$res->id"); ?>"><?php echo $res->name; ?></a>
                           
                           <?php endforeach; ?> 
                            
                        </ul>
                        
	<?php }?>
<?php endforeach; ?>
			          </ul>
			          </li>

                         	<?php }?>
							
							<?php endforeach; ?>


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
			<div class="topnav row d-none d-md-flex d-md-flexs" style="background: <?php echo $settings->slids_bg_color; ?>;">
	    
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