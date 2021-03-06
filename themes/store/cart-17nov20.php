<?php include_once 'header.php'; ?>
<style>
	.size13{
width: 250px;
	}
</style>

<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(assets/images/bg4.jpg);background-position: center;">
		<h2 class="l-text2 t-center">
			Cart
		</h2>
	</section>

	<!-- Cart -->
	<section class="cart bgwhite p-t-70 p-b-100">
		<div class="container">
			<!-- Cart item -->

			<?php if(count($info) > 0){ ?>

			<div class="container-table-cart pos-relative">
				<div class="wrap-table-shopping-cart bgwhite">
					<table class="table-shopping-cart">
						<tr class="table-head">
							<th class="column-1"></th>
							<th class="column-2"><?php echo lang("lang_h46"); ?></th>
							<th class="column-4"><?php echo lang("lang_h47"); ?></th>
							<th class="column-5 p-l-70"><?php echo lang("lang_h48"); ?></th>
							<th class="column-3"></th>
						</tr>

						<?php $tprice = 0; foreach($arr as $idk => $k){ $cart = $infoa[$k['id']];
						 $pr = number_format($cart->price - ($cart->price * $cart->discount / 100), 2); $tpr = isset($k['q']) ? $pr * $k['q'] : $pr; ?>

						<tr class="table-row">
							<td class="column-1">
								<div class="cart-img-product b-rad-4 o-f-hidden" onclick="deleteFromCart(this, <?php echo $idk; ?>);">
									<img src="<?php echo base_url("uploads")."/".add_thumb($cart->images, "_s"); ?>" alt="<?php echo $cart->title; ?>">
								</div>
							</td>
							<td class="column-2"><?php echo $cart->title; ?>
								
								<?php if(isset($k['op'])){ $options = json_decode($k['op']); foreach($options ?? array() as $op => $v) { ?>
									<br>
									<small><?php echo $op," : ",$v; ?></small>

								<?php } } ?>

							</td>
							<td class="column-4"><span class="currency" data-currencyName="usd"><?php echo $pr; if($k['orp'] > $pr){ ?></span> <del style="color: red;"><span class="currency" data-currencyName="usd"><?php echo $k['orp']; ?></span></del> <?php } ?> </td>
							<td class="column-5">
								<div class="flex-w bo5 of-hidden w-size17">
									<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2" data-id="<?php echo $idk; ?>">
										<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
									</button>

									<input class="size8 m-text18 t-center num-product" type="number" data-id="<?php echo $idk; ?>" value="<?php echo isset($k['q']) ? $k['q'] : '1'; ?>">

									<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2" data-id="<?php echo $idk; ?>">
										<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
									</button>
								</div>
							</td>
							<td class="column-3"> <a style="padding: 0 10px;cursor: pointer;" onclick="deleteFromCart(this, <?php echo $idk; ?>);"><i class="fa fa-trash" style="color: red;font-size: 20px;"></i></a> </td>
						</tr>

						<?php $tprice = $tprice + $tpr; ?>

						<?php } ?>

					</table>
				</div>
			</div>

			<div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
				<div class="flex-w flex-m w-full-sm">
					<!--<div class="size11 bo4 m-r-10">
						<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="coupon-code" placeholder="Coupon Code">
					</div>

					<div class="size12 trans-0-4 m-t-10 m-b-10 m-r-10">
						<!-- Button 
						<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
							Apply coupon
						</button>
					</div>-->

				</div>


				<div class="size13 trans-0-4 m-t-10 m-b-10">
					<!-- Button -->
					<a href="<?php echo base_url(); ?>" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
						POURSUIVRE ACHATS
					</a>


				</div>
			</div>



			<?php }else{ ?>

				<div class="container-table-cart pos-relative">

					<div class="alert alert-info"><?php echo lang("lang_h50"); ?> .</div>

				</div>

			<?php } ?>



			<!-- Total -->
			<div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">
				<h5 class="m-text20 p-b-24">
					<?php echo lang("lang_h51"); ?>
				</h5>

				<!--  -->
				<div class="flex-w flex-sb-m p-b-12">
					<span class="s-text18 w-size19 w-full-sm">
						<?php echo lang("lang_h52"); ?>:
					</span>

					<span class="m-text21 w-size20 w-full-sm currency" data-currencyName="usd">
						<?php echo isset($tprice) ? $tprice : "0"; ?>
					</span>
				</div>

				<!--  -->
				<div class="flex-w flex-sb-m p-t-26 p-b-30">
					<span class="m-text22 w-size19 w-full-sm">
						<?php echo lang("lang_h49"); ?>:
					</span>

					<span class="m-text21 w-size20 w-full-sm currency" data-currencyName="usd">
						<?php echo isset($tprice) ? $tprice : "0"; ?>
					</span>
				</div>

				<div class="size15 trans-0-4">
					<!-- Button -->
					<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" onclick="window.location.replace('home/checkoutpage');">
						<?php echo lang("lang_h54"); ?>
					</button>
				</div>
					<div class="bo9 w-size18 p-l-10 p-r-10 p-t-10 p-b-10 m-t-30 m-r-0 m-l-auto p-lr-15-sm">
						
						<img src="<?php echo base_url("images/$settings->checkout_img") ?>" alt="" style="width: 100%;">
						
					</div>
			</div>
		</div>
	</section>


<?php include_once 'footer.php'; ?>


<script>


	$('.btn-num-product-down').on('click', function(e){
        e.preventDefault();
        var id = $(this).data("id");
        var numProduct = Number($(this).next().val());
        if(numProduct > 1) $(this).next().val(numProduct - 1);
        upCart(id, numProduct - 1);
    });


    $('.btn-num-product-up').on('click', function(e){
        e.preventDefault();
        var id = $(this).data("id");
        var numProduct = Number($(this).prev().val());
        $(this).prev().val(numProduct + 1);
        upCart(id, numProduct + 1);
    });
	
    function upCart(id, qty) {

    	$.post(base_url + "/ajax/updateCart", {id: id, qty: qty}, function(data) {})

    }

	$(".num-product").change(function() {

		var id = $(this).data("id");
		var val = $(this).val();

		upCart(id, val);

	})

</script>