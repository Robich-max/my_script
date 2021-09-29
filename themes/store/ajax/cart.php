<?php

$cart = is_null(get_cookie("cart")) ? array() : json_decode(get_cookie("cart"), TRUE);

$tprice = 0;

foreach ($cart as $kc) {
	// $tprice = $tprice + $kc['price'] * $kc['q'];
	$kc_q = is_numeric($kc['q']) ? $kc['q'] : 0;
	$kc_price = is_numeric($kc['price']) ? $kc['price'] : 0;
	$tprice = $tprice + $kc['price'] * $kc['q'];
}


?>


<ul class="header-cart-wrapitem">


	<?php foreach ($cart as $kt => $kc) : ?>

		<li class="header-cart-item">
			<div class="header-cart-item-img" onclick="deleteFromCart(this, <?php echo $kt; ?>, 3)">
				<img src="uploads/<?php echo $kc['img']; ?>" alt="IMG">
			</div>

			<div class="header-cart-item-txt">
				<a onclick="deleteFromCart(this, <?php echo $kt; ?>, 3)" class="float-right" style="color: red;cursor: pointer;"><i class="fa fa-trash"></i></a>
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
					<?php if ($kc['price'] != $kc['orp']) { ?><del style="color: red"><span class="currency" data-currencyName="usd"><?php echo $kc['orp']; ?></span></del><?php } ?>
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
		<a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
			<?php echo lang("lang_h7") ?>
		</a>
	</div>

	<div class="header-cart-wrapbtn">
		<!-- Button -->
		<a href="<?php echo base_url("home/checkoutpage"); ?>" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
			<?php echo lang("lang_h8") ?>
		</a>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		var data = localStorage.getItem("currency");

		if (data == 'EUR') {
			$("#currencySelector option[value=eur]").attr('selected', 'selected').change();
		} else {
			$("#currencySelector option[value=usd]").attr('selected', 'selected').change();
		}


	});
</script>