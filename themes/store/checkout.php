<?php include_once 'header.php'; ?>

<script>
	if (typeof fbq !== 'undefined')
		fbq('track', 'InitiateCheckout');
</script>


<style type="text/css" media="screen">
	.s-text7 {
		color: #495057
	}

	.first-col {
		padding-right: 20px;
	}

	.second-col {
		padding-right: 20px;
	}

	@media only screen and (max-width: 700px) {
		.note-block {
			margin: 0 20px;
		}

		.first-col {
			padding-right: 20px;
			padding-left: 20px;
		}

		.second-col {
			padding-right: 20px;
			padding-left: 20px;
		}

		.third-col {
			padding-right: 20px;
			padding-left: 20px;
		}

	}
</style>

<!-- Title Page -->
<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(imgs/bg.jpeg);background-position: center;">
	<h2 class="l-text2 t-center">
		<?php echo lang("lang_h55"); ?>
	</h2>
</section>

<!-- content page -->
<section class="bgwhite  p-b-60">
	<div class="container">
		<form class="formAll" method="post" action="<?php echo base_url("paypal") ?>" data-stripe-publishable-key="<?php echo $paymentConfig['stripe_key']; //echo $this->config->item('stripe_key') ?>">

			<div class="row">

				<div class="col-md-12 note-block">

					<div class="alert alert-info"><i class="fa fa-info-circle"></i> <strong><?php echo lang("lang_h56"); ?> : </strong> <?php echo $settings->noteOrder; ?> </div>

					<h4 class="m-text26 p-b-36 p-t-15">
						<?php echo lang("lang_h57"); ?>
					</h4>
				</div>

				<!-- First Column -->
				<div class="col-md-4 first-col">

					<div class="bo4 of-hidden size15 m-b-20">
						<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="fullname" required placeholder="<?php echo lang("lang_h58"); ?>">
					</div>

					<div class="bo4 of-hidden size15 m-b-20">
						<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="address" required placeholder="<?php echo lang("lang_h59"); ?>">
					</div>

					<div class="bo4 of-hidden size15 m-b-20">
						<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="address2" placeholder="<?php echo lang("lang_h60"); ?>">
					</div>

					<div class="row m-0">

						<div style="width:48%">
							<div class="bo4 of-hiddend size15 m-b-20">
								<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="state" required placeholder="<?php echo lang("lang_h61"); ?>">
							</div>
						</div>

						<div style="width:4%">&nbsp;</div>

						<div style="width:48%" class="float-right">
							<div class="bo4 of-hidden size15 m-b-20">
								<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="city" required placeholder="<?php echo lang("lang_h62"); ?>">
							</div>
						</div>

					</div>

					<div class="row m-0">

						<div style="width:48%">
							<div class="bo4 of-hidden size15 m-b-20">
								<input class="sizefull s-text7 p-l-22 p-r-22" type="text" required name="zipcode" placeholder="<?php echo lang("lang_h63"); ?>">
							</div>

						</div>

						<div style="width:4%">&nbsp;</div>

						<div style="width:48%" class="float-right">
							<div class="rs2-select2 rs3-select2 bo4 of-hidden size15 m-b-20">
								<select class="selection-2" name="country" required="">
									<option value="">-- <?php echo lang("lang_h64"); ?> --</option>
									<?php foreach ($countries as $c => $v) :  ?>

										<option value="<?php echo $c ?>"><?php echo $v; ?></option>

									<?php endforeach; ?>

								</select>
							</div>
						</div>

					</div>

					<div class="bo4 of-hidden size15 m-b-20">
						<input class="sizefull s-text7 p-l-22 p-r-22" type="email" name="email" required placeholder="<?php echo lang("lang_h65"); ?>" onblur="updateInput(this)">
					</div>

					<div class="bo4 of-hidden size15 m-b-20">
						<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="phone" placeholder="<?php echo lang("lang_h66"); ?>">
					</div>
				</div>

				<!-- Second Column -->
				<div class="col-md-4 second-col">

					<table class="table">
						<?php $i = 0;
						foreach ($shipping as $sh) :
							$checked = "";
							if ($i == 0) {
								$ship = $sh->price;
								$checked = "checked";
							}
						?>
							<tr>
								<td>
									<input type="radio" id="test-<?= $i; ?>" class="shippingChange" <?= $checked; ?> name="shipping" data-price="<?php echo $sh->price; ?>" value="<?php echo $sh->id; ?>">
								</td>
								<td>

									<div for="test-<?= $i; ?>" class="shippingChange float-left" style="width:75%;">
										<div style="font-size:15px;"><?php echo $sh->title; ?></div>
										<p><?php echo $sh->info; ?></p>
									</div>

									<div class="float-right currency" data-currencyName="usd"><?php echo $sh->price > 0 ? $sh->price . " $" : "00"; ?></div>
								</td>
							</tr>

						<?php
							$i++;
						endforeach;
						?>
					</table>

					<hr style="margin-top:-14px">

					<h3><?php echo lang("lang_h67"); ?> </h3>

					<div class="form-group m-t-20">

						<input type="radio" name="payMethod" id="paypalId" value="paypal" checked>
						<label for="paypalId">
							<i class="fa fa-paypal"></i> PayPal
						</label>

					</div>

					<div class="form-group">

						<input type="radio" name="payMethod" id="visamastercartd" value="visa">
						<label for="visamastercartd">
							<i class="fa fa-credit-card"></i> Visa/MasterCard
						</label>

					</div>

					<div class="visaCard">

						<div class="container">
							<div id="Checkout" class="inline" style="border: 0;">
								<div class="card-row">
									<span class="visa"></span>
									<span class="mastercard"></span>
									<span class="amex"></span>
									<span class="discover"></span>
								</div>
								<div class="form-group">
									<label for="CreditCardNumber"><?php echo lang("lang_h68"); ?></label>
									<input id="CreditCardNumber" class="card-number form-control" type="text">
								</div>
								<div class="expiry-date-group form-group">
									<label for="ExpiryDate"><?php echo lang("lang_h69"); ?></label>
									<input id="ExpiryDate" class="form-control card-expiry" type="text" placeholder="MM / YY" maxlength="7">
								</div>
								<div class="security-code-group form-group">
									<label for="SecurityCode"><?php echo lang("lang_h70"); ?></label>
									<div class="input-container">
										<input id="SecurityCode" class="form-control card-cvc" type="text">
										<i id="cvc" class="fa fa-question-circle"></i>
									</div>
									<div class="cvc-preview-container two-card hide">
										<div class="amex-cvc-preview"></div>
										<div class="visa-mc-dis-cvc-preview"></div>
									</div>
								</div>
							</div>
						</div>



					</div>

					<textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20" name="note" placeholder="<?php echo lang("lang_h72"); ?>"></textarea>

				</div>

				<!-- Third Column -->
				<div class="col-md-4 p-b-30 third-col">

					<h3><?php echo lang("lang_h71"); ?> </h3>

					<ul class="header-cart-wrapitem">
						<?php $qty =  0; ?>
						<?php $cart = is_null(get_cookie("cart")) ? array() : json_decode(get_cookie("cart"), TRUE);
						$tp = 0; ?>

						<?php foreach ($cart as $kt => $kc) : ?>
							<li class="header-cart-item">
								<div class="header-cart-item-img">
									<img src="uploads/<?php echo $kc['img']; ?>" alt="IMG">
								</div>

								<div class="header-cart-item-txt">
									<a href="#" class="header-cart-item-name">
										<?php echo $kc['name']; ?>
									</a>
									<span class="header-cart-item-info">

										<?php if (isset($kc['op'])) {
											$options = json_decode($kc['op']);
											foreach ($options ?? array() as $op => $v) { ?>
												<small><?php echo $op, " : ", $v; ?></small>

										<?php }
										} ?>
									</span>

									<span class="header-cart-item-info">

										<span class="cartItem<?= $kt; ?>"><?php echo $kc['q']; ?></span> x <span class="currency" data-currencyName="usd"><?php echo $kc['price']; ?></span>
										<?php if ($kc['price'] != $kc['orp']) { ?> <del style="color: red"><span class="currency" data-currencyName="usd"><?php echo $kc['orp']; ?></span> </del><?php } ?>

										<a onclick="deleteFromCart(this, <?php echo $kt; ?>, 2);" class="float-right" style="color: #e75844; font-size: 17px;"><i class="fa fa-trash"></i></a>
									</span>
								</div>
							</li>
							<hr>
						<?php

							// $tp += $kc['q'] * $kc['price'];
							$kc_q = is_numeric($kc['q']) ? $kc['q'] : 0;
							$kc_price = is_numeric($kc['price']) ? $kc['price'] : 0;

							$tp += $kc_q * $kc_price;

						endforeach; ?>

					</ul>

					<div class="bo9 w-size18 p-l-10 p-r-10 p-t-10 p-b-10 m-t-20 m-r-0 m-l-auto p-lr-15-sm">


						<div class="flex-w flex-sb-m p-b-12">
							<div class="form-group" style="margin-bottom: 0px;">
								<input type="text" placeholder="Coupon" id="coupon" class="form-control coupon-class" style="border: 1px solid #e6e6e6 !important">
								<input type="hidden" id="coupon-name" name="coupon">
								<input type="hidden" id="currency_type" name="currency_type">
							</div>
							<div class="m-t-7">
								<a id="couponbtn" class="btn flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4 btn-xs apply-coupon coupon-btns" style="color:white;" onclick="ApplyCoupon();"><?= lang("lang_h113"); ?></a>
							</div>
							<input id="err" style="margin-top: 10px; width: 100%;color: red; font-size:10px;text-align:center" readonly />
						</div>

					</div>

					<div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">

						<h5 class="m-text20 p-b-24">
							<?php echo lang("lang_h51"); ?>
						</h5>

						<div class="flex-w flex-sb-m p-b-12">

							<span class="s-text18 w-size19 w-full-sm">
								<?php echo lang("lang_h52"); ?>:
							</span>

							<span class="m-text21 w-size20 w-full-sm">
								<span class="subtotalText currency" data-currencyName="usd"> <?php echo isset($tp) ? $tp : "0"; ?> </span>
							</span>
						</div>

						<div>
							<textarea readonly class="form-control" style="font-size:10px;background:transparent;border:none;color:green" rows="3" name="free_products" id="free_products"></textarea>
						</div>


						<div class="flex-w flex-sb-m p-b-12">
							<span class="s-text18 w-size19 w-full-sm">
								<?php echo lang("lang_h53"); ?>:
							</span>

							<span class="m-text21 w-size20 w-full-sm">
								<span class="shippingText currency" id = "expense23" data-currencyName="usd"><?php echo isset($ship) ? $ship : "0"; ?></span>
							</span>
						</div>


						<div class="flex-w flex-sb-m p-t-26 p-b-30">
							<span class="m-text22 w-size19 w-full-sm">
								<?php echo lang("lang_h49"); ?>:
							</span>

							<span class="m-text21 w-size20 w-full-sm">
								<span class="totalText currency" data-currencyName="usd" id = "total32"><?php echo isset($tp) && isset($ship) ? $ship + $tprice : "0"; ?></span>
							</span>
						</div>

						<div class="size15 trans-0-4">
							<!-- Button -->
							<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4 payNow" name="test">
								<?php echo lang("lang_h54"); ?>
							</button>
						</div>
					</div>

					<div class="bo9 w-size18 p-l-10 p-r-10 p-t-10 p-b-10 m-t-30 m-r-0 m-l-auto p-lr-15-sm">

						<img src="<?php echo base_url("images/$settings->checkout_img") ?>" alt="" style="width: 100%;">

					</div>


				</div>

			</div>
            <input type = "hidden" name = "exp" id = "exp23"/>
            <input type = "hidden" name = "tot" id = "tot32"/>

		</form>

	</div>
</section>



<?php include_once 'footer.php'; ?>



<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<script type="text/javascript">
	var form = $(".formAll");

	$(function() {
		$('[data-toggle="popover"]').popover();

		$('#cvc').on('click', function() {
			if ($('.cvc-preview-container').hasClass('hide')) {
				$('.cvc-preview-container').removeClass('hide');
			} else {
				$('.cvc-preview-container').addClass('hide');
			}
		});

		$('.cvc-preview-container').on('click', function() {
			$(this).addClass('hide');
		});
	});


	function checkInputs() {

		var ret = true;

		$('input').each(function() {
			if ($(this).prop('required') && $(this).val() === '') {
				$(this).parent().css("border-color", "red");
				ret = false;
			} else {
				$(this).parent().css("border-color", "#e6e6e6");
			}

		});

		return ret;
	}


	$(".payNow").click(function(e) {
        console.log($("#total32").html(),"data");
    //    return;
		// 		$(this).addClass("disabled");

		e.preventDefault();

		if (!checkInputs())
			return false;

		if (typeof fbq !== 'undefined')
			fbq('track', 'AddPaymentInfo');

		var t = {
			number: $('.card-number').val(),
			cvc: $('.card-cvc').val(),
			exp_month: $('.card-expiry').val().split("/")[0],
			exp_year: "20" + $('.card-expiry').val().split("/")[1]
		};

		var selector = document.getElementById("currencySelector");
		var toCurrency = selector.value.toUpperCase();

		$("#currency_type").val(toCurrency)
		$("#exp23").val($("#expense23").html());
		$("#tot32").val($("#total32").html());

		if ($(':radio[name="payMethod"]').filter(':checked').val() == "paypal") {
			form.submit();
		} else {
			Stripe.setPublishableKey(form.data('stripe-publishable-key'));
			Stripe.createToken(t, stripeResponseHandler);
		}

		return false;

	})


	$("input[name='payMethod']").click(function() {
		var v = $(this).val();
		if (v == "visa") {
			$(".visaCard").show();
		} else
			$(".visaCard").hide();
	});

	$(':radio[name="payMethod"]').change(function() {
		var v = $(this).filter(':checked').val();
		if (v == "visa") {
			$(".visaCard").show();
		} else
			$(".visaCard").hide();
	});

	$(document).on("keyup", ".card-expiry", function() {

		var v = $(this).val();

		var reg = /^\d{2}$/;

		if (reg.test(v)) {
			$(this).val(v + '/');
		}

	})



	function stripeResponseHandler(status, response) {
		if (response.error) {
			alert(response.error.message);
		} else {
			var token = response['id'];
			form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
			form.submit();
		}
	}

	function ApplyCoupon0() {

		if (reduction != 0)
			return;

		var coupon = $('.coupon-class').val();

		var selector = document.getElementById("currencySelector");
		var selectorData = document.getElementById("currencySelector1");

		var toCurrency = selector.value.toUpperCase();
		var toCurrencyTwo = selectorData.value.toUpperCase();



		$.post(base_url + "ajax/validCoupon", {
			coupon: coupon
		}, function(data) {
			// ,€
			if (data > 0) {
				alert('indside');
				var total = $('.totalText').text();
				var num = total.replace(/[*+\-?€^${}()|[\]\\]/g, '');


				var nv = (num - num * data / 100).toFixed(2);


				if (toCurrency == 'EUR') {
					n = nv + "€";
				} else {
					n = nv + "$";
				}


				reduction = data;
				alert(n);

				//$(".apply-coupon").attr("disabled", "disabled");

				$(".totalText").val(n);


			}

		})





		return false;

	}


	$(document).ready(function() {




		$("#couponbtn").click(function() {
			var coupon = $('#coupon').val();
			var selector = document.getElementById("currencySelector");
			var selectorData = document.getElementById("currencySelector1");
			var toCurrency = selector.value.toUpperCase();
			var toCurrencyTwo = selectorData.value.toUpperCase();
			var total_p = $('.totalText').text();
			<?php
			$car = array();

			foreach ($cart as $c) {
				$c['op'] = "";
				$car[] = $c;
			}
			?>
			var products_cart = '<?php echo json_encode($car); ?>'



			$.ajax({
				type: "POST",
				//  url: "https://u-childrenteeth.com/" + "ajax/validCoupon",
				url: base_url + "ajax/validCoupon",

				data: {
					coupon: coupon,
					total_price: total_p,
					products: products_cart
				},
				dataType: "json",
				cache: false,
				success: function(response) {
					//alert(response.final_price);

					if (response.status == 1) {

						// do here
						$("#coupon-name").val($('#coupon').val())


						$(".totalText").text(response.final_price);
						// $(this).attr("disabled","disabled");
						$('#couponbtn').addClass("disabled")
						var html = "";
						if (response.discount == 0) {
							html = "You got won these products for free " + response.discount_p + " refresh your page";
							//$("#free_products").addClass('display:flex')
							UpdateCartHeader();
						} else if (response.discount == -1) {
							html = "";
						} else {
							html = "You got " + response.discount + "% discount on products " + response.discount_p;
							//$("#free_products").addClass('display:flex')
							UpdateCartHeader();
						}
						$("#free_products").html(html);
						console.log(response);
					}
					$("#err").val(response.err);
				},
				error: function(err) {
					alert('Error while getting coupon')
					console.log(err);
				},
				cache: false
			});

			return false;


		});




	});
</script>

<script type="text/javascript">
	function updateInput(inputElm) {


		$.ajax({
			data: "email=" + inputElm.value,
			type: 'post',
			dataType: 'html',
			url: '<?php echo base_url("web/customerInfoGet"); ?>',

		});
	}
</script>