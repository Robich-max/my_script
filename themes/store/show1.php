	<?php foreach($info as $p) : $id = $p->id; ?>



<?php include_once 'productheader.php'; ?>
<link href="assets/css/starscss.css" rel="stylesheet" id="bootstrap-css">

<style type="text/css" media="screen">
    				.fa-star{
  color: <?php echo $settings->star_color; ?>!important;
}

.btn-sm{
  background-color: <?php echo $settings->star_bg_color; ?>;
   border-color: <?php echo $settings->star_bt_br_color; ?>;
}

.btn-xs{
  background-color: <?php echo $settings->star_bg_color; ?>;
   border-color: <?php echo $settings->star_bt_br_color; ?>;
}
.progress-bar {
   
   
    background-color: <?php echo $settings->star_br_color; ?>;
   
}
.rating-text{
	font-size: <?php echo $settings->rating_text_size; ?>;
	color: <?php echo $settings->rating_text_color; ?>;
}

.progress{
	 background-color: <?php echo $settings->star_br_bg_color; ?>;
}

.rating > label{
	float: unset;
}
    				

.hide,.hide1,.hide2 {
 display: none;
    
    background-color: <?php echo $settings->product_dv_info_color; ?>;
    color: #090303;
    text-align: center;
    border-radius: 6px;
    padding: 13px;
    position: absolute;
        z-index: 1;
     
}
    
.myDIV:hover + div {
  display: block;
 
}
.myDIV1:hover + div {
  display: block;
 
}
.myDIV2:hover + div {
  display: block;
 
}
.hide:hover{
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
.hide1:hover{
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
.hide2:hover{
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

.stars
{
    margin: 20px 0;
    font-size: 24px;
    color: #d17581;
}
.flex-r-m{
padding-left: 30px;
    padding-right: 24px;
}

.oldprice-page-hidden{
	color: <?php echo $settings->cross_price_color;?>!important;
}


</style>
	<script>
	if(typeof fbq !== 'undefined')
		fbq('track', 'ViewContent');

</script>


	<!-- breadcrumb -->
	<div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
		<a href="<?php echo base_url(); ?>" class="s-text16">
			<?php echo lang("lang_h1"); ?>
			<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
		</a>
		<span class="s-text17">
			<?php echo short_text($p->title, 4, 50); ?>
		</span>
	</div>

	

	<!-- Product Detail -->
	<div class="container bgwhite p-t-35 p-b-80 ">
		<div class="flex-w flex-sb">
			<div class="w-size13 p-t-30 respon5">
				<div class="wrap-slick3 flex-sb flex-w">
					<div class="wrap-slick3-dots"></div>

					<div class="slick3">

						<?php

	                     $altnames = explode("|", $p->img_alt_name);
	                     	$images = explode(",", $p->images);
					
							foreach($images as $image=>$img) {
								
						?>
						<?php
						foreach($altnames as $altname=>$alt) {?>

                        <?php if ($altname == $image){?>

						<div class="item-slick3" data-thumb="<?php echo base_url("uploads")."/".add_thumb($img , "_s") ?>">
							<div class="wrap-pic-w">
								<img src="<?php echo base_url("uploads")."/".add_thumb($img , "") ?>" alt="<?php echo $alt; ?>">
							</div>
						</div>

						<?php } ?>
						<?php } ?>
						<?php } ?>
					</div>
				</div>
			</div>

			<div class="w-size14 p-t-30 respon5">
				<h1 class="product-detail-name m-text16 product-page-title" style="font-weight: bold;">
					<?php echo $p->title; ?>
				</h1>

				<?php if($p->discount == 0){ ?>
					<span class="block2-price m-text6 p-r-5 currency" data-currencyName="usd">
						<?php echo $p->price; ?>
					</span>
				<?php }else{ ?>
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
									<?php show_reviews(get_vote_avg($p->id)); ?><span class="avis"> (<?php echo $this->m_p->get_num("reviews", array("product" => $p->id)); ?> avis)</span>
								</div>

				<!--  -->
				<div class="p-b-60 p-t-10">


				<div class="p-b-20 rensignement-text">
					
					<h6 style="line-height: 40px;"> <i class="fa fa-truck"></i> <?php echo $p->info_text; ?> <i class="fa fa-question-circle myDIV" aria-hidden="true"></i>
						<div class="hide"><?php echo $p->info_desc; ?></div>

 </h6>
					<?php if($p->service_info){?><h6 style="line-height: 40px;"><i class="fa fa-clock-o"></i> <?php echo $p->service_info; ?> 
					<i class="fa fa-question-circle myDIV1" aria-hidden="true"></i>
						<div class="hide1"><?php echo $p->service_info_desc; ?></div>
</h6><?php }?>
					
					<?php if($p->other_info){?><h6 style="line-height: 40px;"><i class="fa fa-repeat"></i> <?php echo $p->other_info; ?> 
<i class="fa fa-question-circle myDIV2" aria-hidden="true"></i>
						<div class="hide2"><?php echo $p->other_info_desc; ?></div>

					</h6><?php }?>

				</div>
			



				<form id="productInfo">

					<?php 

					$info = json_decode($p->variants);

					if(count($info) > 0) { ?>
                 <div class="flex-m flex-w col-md-12">
					<?php foreach($info as $k) {
						if(empty($k->tp))
							continue;
					 ?>

					<div class="flex-m flex-w col-md-6">
						<div class="s-text15 w-size15 t-center">
							<?php echo $k->tp; ?>
						</div>

						<div class="rs2-select2 rs3-select2 bo4 of-hidden w-size16">
							<select class="selection-2" name="option[<?php echo $k->tp ?>]">

								<?php $allOp = explode(",", $k->info); foreach($allOp as $k1) { ?>

								<option><?php echo $k1; ?></option>

								<?php } ?>
							</select>
						</div>
					</div>

					<br>

					<?php } ?>
</div>
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
								AJOUTER AU PANIER
								</button>
							</div>
						</div>
					</div>

				</form>

				</div>

				<!--  -->
			

			</div>
		</div>
		<br>
			<div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">


					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4" style="animation: scaling .5s infinite alternate;">
						<?php echo lang("lang_h30"); ?>
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">
											<?php echo $p->descr; ?>

						</p>						

					</div>
				</div>

				<div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
					
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4" style="animation: scaling .5s infinite alternate;">
						Customer Review
						<i class="down-mark fs-12 color1 fa fa-minus dis-nones" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-nones p-t-15 p-b-23">
						 <div class="container">
    			


						<div class="row" style="margin-top:40px;">
							<div class="col-md-6">
					    	<div class="well well-sm">
					            <div class="text-right">
					                <button class="flex-c-m btn bg1 bo-rad-23 hov1 s-text1 trans-0-4" id="open-review-box">Leave a Review</button>
					            </div>
					        
					            <div class="row" id="post-review-box" style="display:none;">
					                <div class="col-md-12">
					                    <form accept-charset="UTF-8" action="<?php echo base_url("home/customerReview"); ?>" method="post">
					                        <input id="ratings-hidden" name="vote" type="hidden"> 
					                        <input  name="product" value="<?php echo $upselId; ?>" type="hidden"> 

					                        <div class="form-group">
										<label for="inp1">Customer name</label>
										<input type="text" name="name" class="form-control"  placeholder="Customer name">
								             	</div>

								         <div class="form-group">
										<label for="inp1">Customer email</label>
										<input type="email" name="email" class="form-control"  placeholder="Customer email">
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
			<?php if($results){?>
			<div class="col-sm-3">
				<div class="rating-block">
					<h4 class="rating-text">Average user rating</h4>
					
					<h2 class="bold padding-bottom-7 rating-text"><?php echo $results->rating;?></h2>
					<button type="button" class="btn btn-<?php echo $results->rating_five;?> btn-sm" aria-label="Left Align">
					 <i class="fa fa-star" aria-hidden="true"></i>
					</button>
					<button type="button" class="btn btn-<?php echo $results->rating_four;?> btn-sm" aria-label="Left Align">
					  <i class="fa fa-star" aria-hidden="true"></i>
					</button>
					<button type="button" class="btn btn-<?php echo $results->rating_three;?> btn-sm" aria-label="Left Align">
					  <i class="fa fa-star" aria-hidden="true"></i>
					</button>
					<button type="button" class="btn btn-<?php echo $results->rating_two;?> btn-grey btn-sm" aria-label="Left Align">
					  <i class="fa fa-star" aria-hidden="true"></i>
					</button>
					<button type="button" class="btn btn-<?php echo $results->rating_one;?> btn-grey btn-sm" aria-label="Left Align">
					  <i class="fa fa-star" aria-hidden="true"></i>
					</button>
				
				</div>
			</div>
			
			<div class="col-sm-3">
				<h4 class="rating-text">Rating breakdown</h4>
				<div class="pull-left">
					<div class="pull-left" style="width:35px; line-height:1;">
						<div style="height:9px; margin:5px 0;">5 <i class="fa fa-star" aria-hidden="true"></i></div>
					</div>
					<div class="pull-left" style="width:180px;">
						<div class="progress" style="height:9px; margin:8px 0;">
						  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $results->rating_br_five;?>%">
							<span class="sr-only">80% Complete (danger)</span>
						  </div>
						</div>
					</div>
					<div class="pull-right" style="margin-left:10px;"></div>
				</div>
				<div class="pull-left">
					<div class="pull-left" style="width:35px; line-height:1;">
						<div style="height:9px; margin:5px 0;">4 <i class="fa fa-star" aria-hidden="true"></i></div>
					</div>
					<div class="pull-left" style="width:180px;">
						<div class="progress" style="height:9px; margin:8px 0;">
						  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $results->rating_br_four;?>%">
							<span class="sr-only">80% Complete (danger)</span>
						  </div>
						</div>
					</div>
					<div class="pull-right" style="margin-left:10px;"></div>
				</div>
				<div class="pull-left">
					<div class="pull-left" style="width:35px; line-height:1;">
						<div style="height:9px; margin:5px 0;">3 <i class="fa fa-star" aria-hidden="true"></i></div>
					</div>
					<div class="pull-left" style="width:180px;">
						<div class="progress" style="height:9px; margin:8px 0;">
						  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $results->rating_br_three;?>%">
							<span class="sr-only">80% Complete (danger)</span>
						  </div>
						</div>
					</div>
					<div class="pull-right" style="margin-left:10px;"></div>
				</div>
				<div class="pull-left">
					<div class="pull-left" style="width:35px; line-height:1;">
						<div style="height:9px; margin:5px 0;">2 <i class="fa fa-star" aria-hidden="true"></i></div>
					</div>
					<div class="pull-left" style="width:180px;">
						<div class="progress" style="height:9px; margin:8px 0;">
						  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $results->rating_br_two;?>%">
							<span class="sr-only">80% Complete (danger)</span>
						  </div>
						</div>
					</div>
					<div class="pull-right" style="margin-left:10px;"></div>
				</div>
				<div class="pull-left">
					<div class="pull-left" style="width:35px; line-height:1;">
						<div style="height:9px; margin:5px 0;">1 <i class="fa fa-star" aria-hidden="true"></i></div>
					</div>
					<div class="pull-left" style="width:180px;">
						<div class="progress" style="height:9px; margin:8px 0;">
						  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $results->rating_br_one;?>%">
							<span class="sr-only">80% Complete (danger)</span>
						  </div>
						</div>
					</div>
					<div class="pull-right" style="margin-left:10px;"></div>
				</div>
			</div>	
			<?php }?>		
		</div>			
		
		<div class="row">
			<div class="col-sm-7">
				<hr/>
				<div class="review-block">

					<?php foreach($customers as $row){?>
					<div class="row">
						<div class="col-sm-5">
							<img src="<?php echo base_url("images/$row->img") ?>" class="img-rounded" style="width: 60px;height: 50px;float: left;padding-right: 10px;">
							<div class="review-block-name rating-text"><h6><?php echo $row->customer_name;?></h6></div>
							<div class="review-block-date rating-text"><?php echo $row->date;?></div>
						</div>
						<div class="col-sm-7">
							<div class="review-block-rate">
								<button type="button" class="btn btn-<?php echo $row->rating_five;?> btn-xs" aria-label="Left Align">
								  <i class="fa fa-star" aria-hidden="true"></i>
								</button>
								<button type="button" class="btn btn-<?php echo $row->rating_four;?> btn-xs" aria-label="Left Align">
								  <i class="fa fa-star" aria-hidden="true"></i>
								</button>
								<button type="button" class="btn btn-<?php echo $row->rating_three;?> btn-xs" aria-label="Left Align">
								  <i class="fa fa-star" aria-hidden="true"></i>
								</button>
								<button type="button" class="btn btn-<?php echo $row->rating_two;?>  btn-grey btn-xs" aria-label="Left Align">
								  <i class="fa fa-star" aria-hidden="true"></i>
								</button>
								<button type="button" class="btn btn-<?php echo $row->rating_one;?> btn-grey btn-xs" aria-label="Left Align">
								  <i class="fa fa-star" aria-hidden="true"></i>
								</button>
							</div>
							<div class="review-block-description"><?php echo $row->comment;?></div>
						</div>
					</div>
				<?php } ?>



				<?php



				 foreach($votes as $vrow){?>
					<div class="row">
						<div class="col-sm-5">
							<img src="<?php echo base_url("images/1.png") ?>" class="img-rounded" style="width: 60px;height: 50px;float: left;padding-right: 10px;">
							<div class="review-block-name rating-text"><h6><?php echo $vrow->name;?></h6></div>
							<div class="review-block-date rating-text"><small><?php echo  $vrow->date; ?></small></div>
						</div>
						<div class="col-sm-7">

							<div class="review-block-rate">
									<fieldset class="rating">
									<input type="radio" id="star5<?=$vrow->id;?>" disabled value="5" <?php if($vrow->vote == 5) echo "checked"; ?> /><label class = "full" for="star5<?=$vrow->id;?>"></label>
									<input type="radio" id="star4<?=$vrow->id;?>" disabled value="4" <?php if($vrow->vote == 4) echo "checked"; ?> /><label class = "full" for="star4<?=$vrow->id;?>"></label>
									<input type="radio" id="star3<?=$vrow->id;?>" disabled value="3" <?php if($vrow->vote == 3) echo "checked"; ?> /><label class = "full" for="star3<?=$vrow->id;?>"></label>
									<input type="radio" id="star2<?=$vrow->id;?>" disabled value="2" <?php if($vrow->vote == 2) echo "checked"; ?> /><label class = "full" for="star2<?=$vrow->id;?>"></label>
									<input type="radio" id="star1<?=$vrow->id;?>" disabled value="1" <?php if($vrow->vote == 1) echo "checked"; ?> /><label class = "full" for="star1<?=$vrow->id;?>"></label>
								</fieldset>
							</div>
														<div class="review-block-description"><?php echo $vrow->comment;?></div>

						</div>
					</div>
				<?php } ?>
				
					
				</div>
			</div>
		</div>
		
    </div> <!-- /container -->						

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

					<?php foreach($products as $pt=>$p) : ?>

					<div class="item-slick2 p-l-15 p-r-15">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-img wrap-pic-w of-hidden pos-relative <?php if($p->discount != 0){ ?> block2-labelsale <?php } ?>">
								<a href="<?php echo base_url("$p->id"); ?>"><img src="uploads/<?php echo add_thumb($p->images , "_m") ?>" alt="<?php echo $p->title; ?>"></a>

							</div>

							<div class="block2-txt p-t-20">
								<a href="<?php echo base_url("$p->id"); ?>" class="product-detail-name<?php echo $pt; ?> block2-name dis-block s-text3 p-b-5">
									<?php echo $p->title; ?>
								</a>
								
										<div>
									<?php show_reviews(get_vote_avg($p->id)); ?><span class="avis"> (<?php echo $this->m_p->get_num("reviews", array("product" => $p->id)); ?> avis)</span>
								</div>

								<?php if($p->discount == 0){ ?>
									<span class="block2-price m-text6 p-r-5 currency" data-currencyName="usd">
										<?php echo $p->price; ?>
									</span>
								<?php }else{ ?>
									<span class="block2-oldprice m-text7 p-r-5 currency oldprice-page-hidde" data-currencyName="usd">
										<?php echo $p->price; ?>
									</span>

									<span class="block2-newprice m-text8 p-r-5 currency" data-currencyName="usd">
										<?php echo number_format($p->price - ($p->price * $p->discount / 100), 2); ?>
									</span>

								<?php } ?>

								   <form id="productInfo<?php echo $pt; ?>">
						<?php 

										$info = json_decode($p->variants);

										if($info) { ?>
					                 <div class="flex-m flex-w col-md-12">
										<?php foreach($info as $k) { ?>
										<?php if($k->tp){ ?>

										<div class="flex-m flex-w col-md-6">
											<div class="s-text15 w-size15 t-center">
												<?php echo $k->tp; ?>
											</div>

											<div class="rs2-select2 rs3-select2 testy bo4 of-hidden w-size16">
												<select class="selection-2" name="option[<?php echo $k->tp ?>]">

													<?php $allOp = explode(",", $k->info); foreach($allOp as $k1) { ?>

													<option><?php echo $k1; ?></option>

													<?php } ?>
												</select>
											</div>
										</div>

										<br>

										<?php }else{ ?>
											<div class="flex-m flex-w col-md-12">
										
										<div class="flex-m flex-w col-md-6"></div><br><br>

										</div>
										<?php } ?>

										<?php } ?>
					</div>
										<?php }else{ ?>
											
											<div class="flex-m flex-w col-md-12">
										
										<div class="flex-m flex-w col-md-6"></div><br><br>

										</div>
										<?php }?>

							    	<input class="size8 m-text18 t-center num-product" type="hidden" name="q" value="1">

									<input type="hidden" name="id" value="<?php echo $p->id; ?>">

							<div class="btn-addcart-product-details<?php echo $pt; ?> size12 trans-0-4 m-t-10 m-b-10" data-id="<?php echo $p->id; ?>" data-upsels="0">
								<!-- Button -->
								<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
									<?php echo lang("lang_h29"); ?>
								</button>

								</form>
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
						
						<?php foreach($upsell as $p) : ?>
<?php $data = $this->db->query("SELECT * FROM upsell WHERE showProduct = $p->id AND onOrder = '$upselId'")->row();
if($data->qty){
$qty=$data->qty;
}else{
	$qty=1;
}



 ?>
							<div class="block2 col-md-6 m-b-10">

								<div class="block2-img wrap-pic-w of-hidden pos-relative <?php if($p->discount != 0){ ?> block2-labelsale <?php } ?>">
									<a href="<?php echo base_url("$p->id"); ?>"><img src="uploads/<?php echo add_thumb($p->images , "_m") ?>" alt="<?php echo $p->title; ?>"></a>

								</div>

								<div class="block2-txt p-t-20">
									<a href="<?php echo base_url("$p->id"); ?>" class="block2-name dis-block s-text3 p-b-5">
										<?php echo $p->title; ?>
									</a>


                                   <?php if($data->qty AND $data->price){?>

                                        <span class="block2-price m-text6 p-r-5">
										<?php echo $data->qty;?></span>x <span class="block2-price m-text6 p-r-5 currency" data-currencyName="usd">
										<?php echo $data->price; ?>
										</span>


                                     <?php }else{?>

                                   <?php if($p->discount == 0){ ?>
										<span class="block2-price m-text6 p-r-5 currency" data-currencyName="usd">
											<?php echo $p->price; ?>
										</span>
									<?php }else{ ?>
										<span class="block2-oldprice m-text7 p-r-5 currency" data-currencyName="usd">
											<?php echo $p->price; ?>
										</span>

										<span class="block2-newprice m-text8 p-r-5 currency" data-currencyName="usd">
											<?php echo number_format($p->price - ($p->price * $p->discount / 100), 2); ?>
										</span>

									<?php } ?>


<?php }?>
									
								</div>
								<button class="btn btn-success btn-sm" onclick="addToCartUpSell(this, <?=$p->id;?>, '<?=$p->title;?>', '<?=$qty;?>', '<?=$upselId;?>');"><?php echo lang("lang_h29"); ?></button>
							</div>



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
				<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
					<?php echo lang("lang_h29"); ?>
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
	$.post(base_url + "/admin/approve_comment", {id : id}, function(data) {
		if(data == 1)
		{
			hadaj.remove();
		}
	})
}

function delete_c(hada, id) {
	hadaj = $(hada);
	$.post(base_url + "/admin/delete_comment", {id : id}, function(data) {
		if(data == 1)
		{
			hadaj.parent().parent().parent().remove();
			$('.grid').masonry({
			  // options
			  itemSelector: '.grid-item',
			});
		}
	})
}

$(document).scroll(function() {
	if($(".sticky").length){
		if($(this).scrollTop() > ($(".btncarthide").offset().top)){

			$(".sticky").fadeIn();
		}
		else{
			$(".sticky").fadeOut();
		}				
	}	
	
    return false;
});



var $grid = $('.grid').masonry({
  itemSelector: '.grid-item',
});
// layout Masonry after each image loads
$grid.imagesLoaded().progress( function() {
  $grid.masonry('layout');
});

function load_more_reviews(t) {

	pr++;

	var hada = $(t);

	$.ajax({
		url: base_url + "ajax/reviews/<?=$id;?>",
		data: {
			p: pr
		},
		dataType: "html",
		type: "POST",
		success: function(data) {

			if(data == 0) {
				hada.parent().remove();
			}else {
				$('.grid').append(data);
				$grid.imagesLoaded().progress( function() {
					$grid.masonry('reloadItems');
					$grid.masonry('layout');
				});

			}

		}

	});

}

$('.btn-num-product-down').on('click', function(e){
    e.preventDefault();
    var id = $(this).data("id");
    var numProduct = Number($(this).next().val());
    if(numProduct > 1) $(this).next().val(numProduct - 1);
});


$('.btn-num-product-up').on('click', function(e){
    e.preventDefault();
    var id = $(this).data("id");
    var numProduct = Number($(this).prev().val());
    $(this).prev().val(numProduct + 1);
});



</script>
<script type="text/javascript">
	(function(e){var t,o={className:"autosizejs",append:"",callback:!1,resizeDelay:10},i='<textarea tabindex="-1" style="position:absolute; top:-999px; left:0; right:auto; bottom:auto; border:0; padding: 0; -moz-box-sizing:content-box; -webkit-box-sizing:content-box; box-sizing:content-box; word-wrap:break-word; height:0 !important; min-height:0 !important; overflow:hidden; transition:none; -webkit-transition:none; -moz-transition:none;"/>',n=["fontFamily","fontSize","fontWeight","fontStyle","letterSpacing","textTransform","wordSpacing","textIndent"],s=e(i).data("autosize",!0)[0];s.style.lineHeight="99px","99px"===e(s).css("lineHeight")&&n.push("lineHeight"),s.style.lineHeight="",e.fn.autosize=function(i){return this.length?(i=e.extend({},o,i||{}),s.parentNode!==document.body&&e(document.body).append(s),this.each(function(){function o(){var t,o;"getComputedStyle"in window?(t=window.getComputedStyle(u,null),o=u.getBoundingClientRect().width,e.each(["paddingLeft","paddingRight","borderLeftWidth","borderRightWidth"],function(e,i){o-=parseInt(t[i],10)}),s.style.width=o+"px"):s.style.width=Math.max(p.width(),0)+"px"}function a(){var a={};if(t=u,s.className=i.className,d=parseInt(p.css("maxHeight"),10),e.each(n,function(e,t){a[t]=p.css(t)}),e(s).css(a),o(),window.chrome){var r=u.style.width;u.style.width="0px",u.offsetWidth,u.style.width=r}}function r(){var e,n;t!==u?a():o(),s.value=u.value+i.append,s.style.overflowY=u.style.overflowY,n=parseInt(u.style.height,10),s.scrollTop=0,s.scrollTop=9e4,e=s.scrollTop,d&&e>d?(u.style.overflowY="scroll",e=d):(u.style.overflowY="hidden",c>e&&(e=c)),e+=w,n!==e&&(u.style.height=e+"px",f&&i.callback.call(u,u))}function l(){clearTimeout(h),h=setTimeout(function(){var e=p.width();e!==g&&(g=e,r())},parseInt(i.resizeDelay,10))}var d,c,h,u=this,p=e(u),w=0,f=e.isFunction(i.callback),z={height:u.style.height,overflow:u.style.overflow,overflowY:u.style.overflowY,wordWrap:u.style.wordWrap,resize:u.style.resize},g=p.width();p.data("autosize")||(p.data("autosize",!0),("border-box"===p.css("box-sizing")||"border-box"===p.css("-moz-box-sizing")||"border-box"===p.css("-webkit-box-sizing"))&&(w=p.outerHeight()-p.height()),c=Math.max(parseInt(p.css("minHeight"),10)-w||0,p.height()),p.css({overflow:"hidden",overflowY:"hidden",wordWrap:"break-word",resize:"none"===p.css("resize")||"vertical"===p.css("resize")?"none":"horizontal"}),"onpropertychange"in u?"oninput"in u?p.on("input.autosize keyup.autosize",r):p.on("propertychange.autosize",function(){"value"===event.propertyName&&r()}):p.on("input.autosize",r),i.resizeDelay!==!1&&e(window).on("resize.autosize",l),p.on("autosize.resize",r),p.on("autosize.resizeIncludeStyle",function(){t=null,r()}),p.on("autosize.destroy",function(){t=null,clearTimeout(h),e(window).off("resize",l),p.off("autosize").off(".autosize").css(z).removeData("autosize")}),r())})):this}})(window.jQuery||window.$);

var __slice=[].slice;(function(e,t){var n;n=function(){function t(t,n){var r,i,s,o=this;this.options=e.extend({},this.defaults,n);this.$el=t;s=this.defaults;for(r in s){i=s[r];if(this.$el.data(r)!=null){this.options[r]=this.$el.data(r)}}this.createStars();this.syncRating();this.$el.on("mouseover.starrr","span",function(e){return o.syncRating(o.$el.find("span").index(e.currentTarget)+1)});this.$el.on("mouseout.starrr",function(){return o.syncRating()});this.$el.on("click.starrr","span",function(e){return o.setRating(o.$el.find("span").index(e.currentTarget)+1)});this.$el.on("starrr:change",this.options.change)}t.prototype.defaults={rating:void 0,numStars:5,change:function(e,t){}};t.prototype.createStars=function(){var e,t,n;n=[];for(e=1,t=this.options.numStars;1<=t?e<=t:e>=t;1<=t?e++:e--){n.push(this.$el.append("<span class='glyphicon .glyphicon-star-empty'></span>"))}return n};t.prototype.setRating=function(e){if(this.options.rating===e){e=void 0}this.options.rating=e;this.syncRating();return this.$el.trigger("starrr:change",e)};t.prototype.syncRating=function(e){var t,n,r,i;e||(e=this.options.rating);if(e){for(t=n=0,i=e-1;0<=i?n<=i:n>=i;t=0<=i?++n:--n){this.$el.find("span").eq(t).removeClass("glyphicon-star-empty").addClass("glyphicon-star")}}if(e&&e<5){for(t=r=e;e<=4?r<=4:r>=4;t=e<=4?++r:--r){this.$el.find("span").eq(t).removeClass("glyphicon-star").addClass("glyphicon-star-empty")}}if(!e){return this.$el.find("span").removeClass("glyphicon-star").addClass("glyphicon-star-empty")}};return t}();return e.fn.extend({starrr:function(){var t,r;r=arguments[0],t=2<=arguments.length?__slice.call(arguments,1):[];return this.each(function(){var i;i=e(this).data("star-rating");if(!i){e(this).data("star-rating",i=new n(e(this),r))}if(typeof r==="string"){return i[r].apply(i,t)}})}})})(window.jQuery,window);$(function(){return $(".starrr").starrr()})

$(function(){

  $('#new-review').autosize({append: "\n"});

  var reviewBox = $('#post-review-box');
  var newReview = $('#new-review');
  var openReviewBtn = $('#open-review-box');
  var closeReviewBtn = $('#close-review-box');
  var ratingsField = $('#ratings-hidden');

  openReviewBtn.click(function(e)
  {
    reviewBox.slideDown(400, function()
      {
        $('#new-review').trigger('autosize.resize');
        newReview.focus();
      });
    openReviewBtn.fadeOut(100);
    closeReviewBtn.show();
  });

  closeReviewBtn.click(function(e)
  {
    e.preventDefault();
    reviewBox.slideUp(300, function()
      {
        newReview.focus();
        openReviewBtn.fadeIn(200);
      });
    closeReviewBtn.hide();
    
  });

  $('.starrr').on('starrr:change', function(e, value){
    ratingsField.val(value);
  });
});
</script>

