<?php include_once 'header.php'; ?>
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
		<?php if(isset($info) && count($info) > 0){ ?>
		<div class="container-table-cart pos-relative">
			<div class="wrap-table-shopping-cart bgwhite">
				<table class="table-shopping-cart">
					<tr class="table-head">
						<th class="column-2"><?php echo lang("lang_h100"); ?></th>
						<th class="column-3"><?php echo lang("lang_h101"); ?></th>
						<th class="column-4"><?php echo lang("lang_h102"); ?></th>
						<th class="column-5"><?php echo lang("lang_h103"); ?></th>
					</tr>
					<?php foreach($info as $key){ ?>
					<tr class="table-row">
						<td class="column-2 p-l-22">
							<?php
							$products = json_decode($key->products);
							foreach ($products as $k ) {
								echo get_info("products", $k->id, "title"),"<br>";
							}
							?>
						</td>
						<td class="column-3">$<?php echo $key->totalPrice; ?></td>
						<td class="column-4">
							
							<?php
							foreach ($products as $k ) {
								echo $k->q,"<br>";
							}
							?>
							
						</td>
						<td class="column-5">
							<?php switch ($key->status) {
								case 2:
									echo "shipped";
									break;
								
								case 3:
									echo "delivered";
									break;
								
								default:
									echo "pending";
									break;
							} ?>
						</td>
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>
		<?php }else{ ?>
		<div class="col-md-9 mx-auto p-b-30">
			
			<label><?php echo lang("lang_h104"); ?> : </label>
			<form action="" method="get">
				<div class="bo4 of-hidden size15 m-b-20">
					<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="code" placeholder="<?php echo lang("lang_h104"); ?>">
				</div>
			</form>
		</div>
		<?php } ?>
	</div>
</section>
<?php include_once 'footer.php'; ?>