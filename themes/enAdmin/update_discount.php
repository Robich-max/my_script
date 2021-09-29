<?php include_once 'inc/header.php'; ?>
<style type="text/css">
	.err {
		color: #ff0000;
	}
</style>
<div id="content-wrapper" class="d-flex flex-column">

	<!-- Main Content -->
	<div id="content">

		<?php include_once 'inc/navbar.php'; ?>

		<div class="container-fluid">

			<?php
			/* echo "<pre>";
		print_r($res);
		echo "</pre>"; */
			?>

			<!-- Page Heading -->
			<h1 class="h3 mb-2 text-gray-800"><?= lang("admin_h124"); ?></h1>

			<?php if ($this->session->flashdata('success')) { ?>
				<div class="alert alert-success alert-dismissible">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<?php echo $this->session->flashdata('success'); ?>
				</div>
			<?php } ?>

			<!-- DataTales Example -->
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Update Discount Information</h6>
				</div>
				<div class="card-body">

					<?php if (isset($msg)) { ?>
						<div class="alert alert-success"><?= lang("admin_h126"); ?> .</div>
					<?php } ?>

					<fieldset>

						<?php
						//$action_path = base_url()."admin/save_discount";

						//echo form_open_multipart("",array("class" => "form-horizontal","onsubmit" => "return validatef()","action" => $action_path)); 
						?>
						<form action="<?= base_url('admin/update_discount/' . $res['id']) ?>" onsubmit="return validateForm()" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
							<!-- <form action="https://u-childrenteeth.com//admin/update_discount/<?php echo $res['id']; ?>" onsubmit="return validateForm()" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8"> -->


							<div class="row">
								<div class="col-xl-6 col-md-6 mb-4">
									<div class="card border-left-primary shadow h-100 py-2">
										<div class="card-body">
											<div class="form-group">
												<label for="discount_code"><strong>Discount code</strong></label>
												<input type="text" value="<?php if (isset($res['discount_code'])) {
																				echo $res['discount_code'];
																			} ?>" class="form-control" name="discount_code" id="discount_code">
												<span id="discount_codex" class="err"></span>
											</div>
										</div>
									</div>
								</div>

								<div class="col-xl-6 col-md-6 mb-4" style="display:none">
									<div class="card border-left-primary shadow h-100 py-2">
										<div class="card-body">
											<div class="form-group">
												<label for="inp1"><strong>Summary</strong></label>
												<p id="discount_code_p">No information entered yet.</p>
												<p id="applies_to_p">No information entered yet.</p>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-xl-6 col-md-6 mb-4">
									<div class="card border-left-primary shadow h-100 py-2">
										<div class="card-body">


											<div class="form-group">
												<label for="inp1"><strong>Types</strong></label>
												<div class="radio">
													<label><input type="radio" name="percnt_type" id="percentage" value="percentage" <?php if ($res['percnt_type'] == "percentage") {
																																			echo "checked";
																																		} ?>>Percentage</label>
												</div>
												<div class="radio">
													<label><input type="radio" name="percnt_type" id="fix_amount" value="Fixed amount" <?php if ($res['percnt_type'] == "Fixed amount") {
																																			echo "checked";
																																		} ?>>Fixed amount </label>
												</div>
												<div class="radio">
													<label><input type="radio" name="percnt_type" id="free_ship" value="Free shipping" <?php if ($res['percnt_type'] == "Free shipping") {
																																			echo "checked";
																																		} ?>> Free shipping </label>
												</div>
												<div class="radio">
													<label><input type="radio" name="percnt_type" id="buy_x" value="Buy X get Y" <?php if ($res['percnt_type'] == "Buy X get Y") {
																																		echo "checked";
																																	} ?>> Buy X get Y</label>
												</div>

											</div>



										</div>
									</div>
								</div>
							</div>

							<div class="row" id="product_div" <?php if ($res['percnt_type'] == "percentage" || $res['percnt_type'] == "fix_amount") { ?> style="display:block" <?php } else { ?> style="display:none" <?php } ?>>
								<div class="col-xl-6 col-md-6 mb-4">
									<div class="card border-left-primary shadow h-100 py-2">
										<div class="card-body">
											<div class="form-group">
												<label for="inp1"><strong>Value</strong></label>
												<div class="form-group">
													<label for="discount_value">Discount Value <b><span id="disc_symbol" style="font-size: larger;">%<span></b></label>
													<input type="text" class="form-control" name="discount_value" id="discount_value" value="<?php if (isset($res['discount_value'])) {
																																					echo $res['discount_value'];
																																				} ?>" style="width: 200px;">
													<span id="discount_valuex" class="err"></span>

												</div>
												<hr>
												<div class="form-group">
													<label for="inp1"><strong>Applies To</strong></label>
													<div class="radio">
														<label><input type="radio" name="applies_to" id="all_product" value="All products" <?php if ($res['applies_to'] == "All products") {
																																				echo "checked";
																																			} ?>> All products</label>
													</div>
													<div class="radio">
														<label><input type="radio" name="applies_to" id="specific_collection" value="Specific Collection" <?php if ($res['applies_to'] == "Specific Collection") {
																																								echo "checked";
																																							} ?>>Specific collections </label>
													</div>
													<div class="radio">
														<label><input type="radio" name="applies_to" id="specific_products" value="Specific products" <?php if ($res['applies_to'] == "Specific products") {
																																							echo "checked";
																																						} ?>> Specific products </label>
													</div>
													<div><input type="text" placeholder="Enter specific" class="form-control" name="applies_specific_val" id="applies_specific_val" value="<?php if (isset($res['applies_specific_val'])) {
																																																echo $res['applies_specific_val'];
																																															} ?>" <?php if ($res['applies_to'] == "Specific Collection" || $res['applies_to'] == "Specific products") { ?> style="display:block" <?php } else { ?> style="display:none" <?php } ?>></div>
													<span id="applies_specific_valx" class="err"></span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>


							<div class="row" id="countries" <?php if ($res['percnt_type'] == "Free shipping") { ?> style="display:block" <?php } else { ?> style="display:none" <?php } ?>>
								<div class="col-xl-6 col-md-6 mb-4">
									<div class="card border-left-primary shadow h-100 py-2">

										<div class="card-body">
											<div class="form-group">
												<label for="inp1"><strong>Countries</strong></label>
												<div class="form-group">
													<label for="inp1">Applies To</label>
													<div class="radio">
														<label><input type="radio" name="countries" id="all_countries" value="All countries" checked>All countries</label>
													</div>
													<div class="radio">
														<label><input type="radio" name="countries" id="selected_countries" value="Selected countries">Selected countries </label>
													</div>
													<div><input type="text" placeholder="Select countries" class="form-control" name="selected_countries_val" id="selected_countries_val" value="<?php if (isset($res['selected_countries_val'])) {
																																																		echo $res['selected_countries_val'];
																																																	} ?>" <?php if ($res['countries'] == "Selected countries") { ?> style="display:block" <?php } else { ?> style="display:none" <?php } ?>></div>

												</div>
												<hr>
												<div class="form-group">
													<label for="inp1"><strong>SHIPPING RATES</strong></label>
													<div class="checkbox">
														<label><input type="checkbox" id="exclude_shipping" name="exclude_shipping" value="Exclude_shipping_rates" <?php if ($res['exclude_shipping'] == "Exclude_shipping_rates") { ?> checked <?php } ?>>Exclude shipping rates over a certain amount</label>
													</div>
													<div><input type="number" placeholder=" € 0" class="form-control" name="exclude_shipping_val" id="exclude_shipping_val" value="<?php if (isset($res['exclude_shipping_val'])) {
																																														echo $res['exclude_shipping_val'];
																																													}; ?>" <?php if ($res['exclude_shipping'] == "Exclude_shipping_rates") { ?> style="display:block;width:200px" <?php } else { ?> style="display:none" <?php } ?>></div>


												</div>


											</div>
										</div>





									</div>
								</div>
							</div>










							<div class="row" id="customer_spends" <?php if ($res['percnt_type'] == "Buy X get Y") { ?> style="display:block" <?php } else { ?> style="display:none" <?php } ?> style="display:none">
								<div class="col-xl-6 col-md-6 mb-4">
									<div class="card border-left-primary shadow h-100 py-2">
										<div class="card-body">

											<label for="inp1"><strong>Customer buys</strong></label>

											<div class="form-group">

												<div class="radio">
													<label><input type="radio" name="customer_buys" id="customer_min_qty" value="customer_min_qty" <?php if ($res['customer_buys'] == "customer_min_qty") {
																																						echo "checked";
																																					} ?>>Minimum quantity of items.</label>
												</div>
												<div class="radio">
													<label><input type="radio" name="customer_buys" id="customer_min_amnt" value="customer_min_amnt" <?php if ($res['customer_buys'] == "customer_min_amnt") {
																																							echo "checked";
																																						} ?>>Minimum purchase amount </label>
												</div>

												<div class="row">
													<div class="col-xl-6 col-md-6 mb-4">
														<div id="customer_min_qty_div" style="display:block;">
															<label for="item">Quantity</label>
															<input type="number" placeholder="0" class="form-control" name="min_qty" id="min_qty" value="<?php if (isset($res['min_qty'])) {
																																								echo $res['min_qty'];
																																							} ?>">
															<span id="min_qtyx" class="err"></span>
														</div>

														<div id="customer_min_amnt_div" style="display:none;">
															<label for="item">Amount</label>
															<input type="number" placeholder="€" class="form-control" name="min_amnt" id="min_amnt">
															<span id="min_amntx" class="err"></span>
														</div>
													</div>
													<div class="col-xl-6 col-md-6 mb-4">
														<label for="item">Any items from</label>
														<select class="form-control" id="buys_option">
															<option value="Specific Products"> Specific Products</option>
															<option value="Specific Collection"> Specific Collection</option>
														</select>
													</div>
												</div>

												<div><input type="text" placeholder="Enter specific " class="form-control" name="specific_buy_val" id="specific_buy_val" value="<?php if (isset($res['specific_buy_val'])) {
																																													echo $res['specific_buy_val'];
																																												} ?>"></div>

												<hr>
												<label for="inp1"><strong>Customer gets</strong></label>
												<p>Customers must add the quantity of items specified below to their cart.</p>


												<div class="row">
													<div class="col-xl-6 col-md-6 mb-4">
														<label for="item">Quantity</label>
														<input type="number" placeholder="0" class="form-control" name="min_get_qty" id="min_get_qty" value="<?php if (isset($res['min_get_qty'])) {
																																									echo $res['min_get_qty'];
																																								} ?>" style="display:block;">
														<span id="min_get_qtyx" class="err"></span>
													</div>
													<div class="col-xl-6 col-md-6 mb-4">
														<label for="item">Any items from</label>
														<select class="form-control" id="gets_option">
															<option value="Specific Products"> Specific Products</option>
															<option value="Specific Collection"> Specific Collection</option>
														</select>
													</div>
												</div>

												<div><input type="text" placeholder="Enter specific " class="form-control" name="specific_gets_val" id="specific_gets_val" value="<?php if (isset($res['specific_gets_val'])) {
																																														echo $res['specific_gets_val'];
																																													} ?>"></div>
												<div class="form-group">
													<label>AT A DISCOUNTED VALUE</label>
													<div class="radio">
														<label><input type="radio" name="discount_customer" id="discount_percentage" value="Percentage" <?php if ($res['discount_customer'] == "Percentage") {
																																							echo "checked";
																																						} ?>>Percentage</label>
													</div>
													<div class="radio">
														<label><input type="radio" name="discount_customer" id="discount_free" value="Specific Collection" <?php if ($res['discount_customer'] == "Specific Collection") {
																																								echo "checked";
																																							} ?>>Free </label>
													</div>

													<div><input type="text" placeholder="Enter percentage %" class="form-control" name="customer_percentage_val" value="<?php if ($res['discount_customer'] == "Percentage") {
																																											echo $res['customer_percentage_val'];
																																										} ?>" id="customer_percentage_val" <?php if ($res['discount_customer'] == "Percentage") { ?> style="display:block;" <?php } else {  ?> style="display:none;" <?php  } ?>> </div>

												</div>


											</div>

										</div>
									</div>
								</div>
							</div>
							<div class="row" id="min_requirements">
								<div class="col-xl-6 col-md-6 mb-4">
									<div class="card border-left-primary shadow h-100 py-2">
										<div class="card-body">
											<div class="form-group">
												<label for="inp1"><strong>Minimum requirements</strong></label>
												<div class="radio">
													<label><input type="radio" name="min_req" id="req_none" value="none" <?php if ($res['min_req'] == "none") {
																																echo "checked";
																															} ?>>None</label>
												</div>
												<div class="radio">
													<label><input type="radio" name="min_req" id="min_purchase_amount" value="min_purchase_amount" <?php if ($res['min_req'] == "min_purchase_amount") {
																																						echo "checked";
																																					} ?>>Minimum purchase amount (€) </label>
												</div>
												<div><input type="text" placeholder="€ 0.00" class="form-control" name="min_purchase_amount_val" id="min_purchase_amount_val" value="<?php if (isset($res['min_purchase_amount_val'])) {
																																															echo $res['min_purchase_amount_val'];
																																														} ?>" <?php if ($res['min_req'] == "min_purchase_amount") { ?> style="display:block;width: 200px;" <?php } else { ?> style="display:none" <?php } ?>></div>


												<div class="radio">
													<label><input type="radio" name="min_req" id="min_purchase_qty" value="min_purchase_qty" <?php if ($res['min_req'] == "min_purchase_qty") {
																																					echo "checked";
																																				} ?>> Minimum quantity of items </label>
												</div>
												<div><input type="text" placeholder="Applies to all products" class="form-control" name="min_purchase_qty_val" id="min_purchase_qty_val" value="<?php if (isset($res['min_purchase_qty_val'])) {
																																																	echo $res['min_purchase_qty_val'];
																																																} ?>" <?php if ($res['min_req'] == "min_purchase_qty") { ?> style="display:block;width: 200px;" <?php } else { ?> style="display:none" <?php } ?>></div>



											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="row" id="">
								<div class="col-xl-6 col-md-6 mb-4">
									<div class="card border-left-primary shadow h-100 py-2">
										<div class="card-body">
											<div class="form-group">
												<label for="inp1"><strong>Customer eligibility</strong></label>
												<div class="radio">
													<label><input type="radio" name="eligibility" id="everyone" value="Everyone" <?php if ($res['eligibility'] == "Everyone") {
																																		echo "checked";
																																	} ?>>Everyone</label>
												</div>
												<div class="radio">
													<label><input type="radio" name="eligibility" id="specific_group_customer" value="specific_group_customer" <?php if ($res['eligibility'] == "specific_group_customer") {
																																									echo "checked";
																																								} ?>>Specific groups of customers </label>
												</div>
												<div><input type="text" placeholder="Enter specific groups of customers" class="form-control" name="specific_group_customer_val" id="specific_group_customer_val" value="<?php if (isset($res['specific_group_customer_val'])) {
																																																								echo $res['specific_group_customer_val'];
																																																							} ?>" <?php if ($res['eligibility'] == "specific_group_customer") { ?> style="display:block" <?php } else { ?> style="display:none" <?php } ?>></div>
												<div class="radio">
													<label><input type="radio" name="eligibility" id="specific_customer" value="specific_customer" <?php if ($res['eligibility'] == "specific_customer") {
																																						echo "checked";
																																					} ?>> Specific customers </label>
												</div>
												<div><input type="text" placeholder="Enter specific customers" class="form-control" name="specific_customer_val" id="specific_customer_val" <?php if ($res['eligibility'] == "specific_customer") { ?> style="display:block" <?php } else { ?> style="display:none" <?php } ?> value="<?php if (isset($res['specific_customer_val'])) {
																																																																																		echo $res['specific_customer_val'];
																																																																																	} ?>"></div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-xl-6 col-md-6 mb-4">
									<div class="card border-left-primary shadow h-100 py-2">
										<div class="card-body">
											<div class="form-group">
												<label for="inp1"><strong>Usage limits</strong></label>
												<div class="checkbox">
													<label><input type="checkbox" id="limit_number" name="limit_number" value="limit_number_times" <?php if ($res['limit_number'] == "limit_number_times") {
																																						echo "checked";
																																					} ?>>Limit number of times this discount can be used in total</label>
												</div>
												<div><input type="number" placeholder="0" class="form-control" name="limit_number_val" id="limit_number_val" value="<?php if (isset($res['limit_number_val'])) {
																																										echo $res['limit_number_val'];
																																									} ?>" style="display:none;width: 200px;"></div>
												<div class="checkbox">
													<label><input type="checkbox" id="limit_to_one" name="limit_to_one" value="limit_to_one" <?php if ($res['limit_to_one'] == "limit_to_one") {
																																					echo "checked";
																																				} ?>>Limit to one use per customer</label>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>


							<div class="row">
								<div class="col-xl-6 col-md-6 mb-4">
									<div class="card border-left-primary shadow h-100 py-2">
										<div class="card-body">
											<div class="form-group">
												<label for="inp1"><strong>Active dates</strong></label>
												<div class="row">

													<div class="col-xl-5 col-md-6 mb-4">
														<label for="start_date">Start Date</label>
														<input type="date" class="form-control" name="start_date" id="start_date" value="<?php if (isset($res['start_date'])) {
																																				echo $res['start_date'];
																																			} ?>">
														<span id="start_datex" class="err"></span>
													</div>
													<div class="col-xl-5 col-md-6 mb-4">
														<label for="start_time">Start Time</label>
														<input type="time" class="form-control" name="start_time" id="start_time" value="<?php if (isset($res['start_time'])) {
																																				echo $res['start_time'];
																																			} ?>">
														<span id="start_timex" class="err"></span>
													</div>
												</div>
												<div class="checkbox">
													<label><input type="checkbox" name="end_date_chk" id="end_date_chk" value="end_date_chk" <?php if ($res['end_date_chk'] == "end_date_chk") {
																																					echo "checked";
																																				} ?>>Set End Date</label>
												</div>
												<div class="row end_date">
													<div class="col-xl-5 col-md-6 mb-3">
														<label for="end_date">End Date</label>
														<input type="date" class="form-control" name="end_date" id="end_date" value="<?php if (isset($res['end_date'])) {
																																			echo $res['end_date'];
																																		} ?>">
														<span id="end_datex" class="err"></span>
													</div>
													<div class="col-xl-5 col-md-6 mb-3">
														<label for="end_time">End Time</label>
														<input type="time" class="form-control" name="end_time" id="end_time" value="<?php if (isset($res['end_time'])) {
																																			echo $res['end_time'];
																																		} ?>">
														<span id="end_timex" class="err"></span>
													</div>
												</div>





											</div>





										</div>
									</div>
								</div>
							</div>




							<button type="submit" class="btn btn-primary" name="update_discount"><?= lang("admin_h120"); ?></button>
							<?php echo form_close(); ?>

					</fieldset>


				</div>
			</div>

		</div>
		<!-- /.container-fluid -->


	</div>
	<script type="text/javascript">
		$(document).ready(function() {



			$("#discount_code").keyup(function() {
				//var code = $(this).val();
				$("#discount_code_p").text(this.value);

			});

			$("#fix_amount").on("click", function() {
				$("#disc_symbol").text("€");
			});
			$("#percentage").on("click", function() {
				$("#disc_symbol").text("%");
			});

			$("#free_ship").on("click", function() {
				$("#disc_symbol").text("");
			});

			$("#min_purchase_amount").on("click", function() {
				$("#min_purchase_amount_val").css("display", "block");
				$("#min_purchase_qty_val").css("display", "none");
			});

			$("#req_none").on("click", function() {
				$("#min_purchase_amount_val").css("display", "none");
				$("#min_purchase_qty_val").css("display", "none");
			});

			$("#min_purchase_qty").on("click", function() {
				$("#min_purchase_qty_val").css("display", "block");
				$("#min_purchase_amount_val").css("display", "none");
			});

			//

			$("#specific_group_customer").on("click", function() {
				$("#specific_group_customer_val").css("display", "block");
				$("#specific_customer_val").css("display", "none");
			});
			$("#specific_customer").on("click", function() {
				$("#specific_group_customer_val").css("display", "none");
				$("#specific_customer_val").css("display", "block");
			});

			$("#everyone").on("click", function() {
				$("#specific_group_customer_val").css("display", "none");
				$("#specific_customer_val").css("display", "none");
			});

			$("#discount_value").on("change", function() {

				var applies_to = $("input[name='applies_to']:checked").val();


				var disc_val = $('#discount_value').val();

				var disc_symbol = $('#disc_symbol').text();
				var msg = disc_val + disc_symbol + " on " + applies_to;
				$("#applies_to_p").text(msg);

			});

			$("#all_product").on("click", function() {
				var disc_val = $('#discount_value').val();
				var disc_symbol = $('#disc_symbol').text();
				var msg = disc_val + disc_symbol + " on all products";
				$("#applies_to_p").text(msg);

			});


			$("input[name='percnt_type']").change(function(e) {

				var applies_to = $("input[name='applies_to']:checked").val();
				var disc_val = $('#discount_value').val();
				var disc_symbol = $('#disc_symbol').text();
				var msg = disc_val + disc_symbol + " on " + applies_to;
				$("#applies_to_p").text(msg);

			});
			$("input[name='applies_to']").change(function(e) {

				var applies_to = $("input[name='applies_to']:checked").val();
				var disc_val = $('#discount_value').val();
				var disc_symbol = $('#disc_symbol').text();
				var msg = disc_val + disc_symbol + " on " + applies_to;
				$("#applies_to_p").text(msg);

				if (applies_to == "All products") {
					$("#applies_specific_val").css("display", "none");
				}
				if (applies_to == "Specific Collection") {
					$("#applies_specific_val").attr("placeholder", "Enter Specific Collection");
					$("#applies_specific_val").css("display", "block");
				}


				if (applies_to == "Specific products") {
					$("#applies_specific_val").attr("placeholder", "Enter Specific products");
					$("#applies_specific_val").css("display", "block");
				}



			});


			$("input[name='countries']").change(function(e) {

				var countries = $("input[name='countries']:checked").val();

				if (countries == "Selected countries") {
					$("#selected_countries_val").css("display", "block");
				} else {
					$("#selected_countries_val").css("display", "none");
				}


			});

			$("input[name='customer_buys']").change(function(e) {

				var customer_buys = $("input[name='customer_buys']:checked").val();

				if (customer_buys == "customer_min_qty") {
					$("#customer_min_qty_div").css("display", "block");
					$("#customer_min_amnt_div").css("display", "none");
				}

				if (customer_buys == "customer_min_amnt") {
					$("#customer_min_qty_div").css("display", "none");
					$("#customer_min_amnt_div").css("display", "block");

				}


			});

			$("input[name='discount_customer']").change(function(e) {

				var discount_customer = $("input[name='discount_customer']:checked").val();

				if (discount_customer == "Percentage") {
					$("#customer_percentage_val").css("display", "block");
					//$( "#customer_min_amnt_div" ).css("display","none");
				}

				if (discount_customer == "Specific Collection") {
					$("#customer_percentage_val").css("display", "none");
					//$( "#customer_min_amnt_div" ).css("display","block");

				}


			});




			$("input[name='percnt_type']").change(function(e) {

				var percnt_type = $("input[name='percnt_type']:checked").val();


				if (percnt_type == "Buy X get Y") {
					$("#customer_spends").css("display", "block");
					$("#product_div").css("display", "none");
					$("#countries").css("display", "none");
					$("#min_requirements").css("display", "none");
				}

				if (percnt_type == "percentage" || percnt_type == "Fixed amount") {
					$("#customer_spends").css("display", "none");
					$("#product_div").css("display", "block");
					$("#countries").css("display", "none");
					$("#min_requirements").css("display", "block");
				}
				if (percnt_type == "Free shipping") {
					$("#customer_spends").css("display", "none");
					$("#product_div").css("display", "none");
					$("#countries").css("display", "block");
					$("#min_requirements").css("display", "block");
				}





			});




			$("#limit_number").click(function() {
				var ischecked = $(this).is(':checked');
				if (ischecked)
					$("#limit_number_val").css("display", "block");
				else
					$("#limit_number_val").css("display", "none");

			});



			$("#end_date_chk").click(function() {
				var ischecked = $(this).is(':checked');
				if (ischecked) {
					$(".end_date").css("display", "block");
				} else {
					$(".end_date").css("display", "none");
					$('#end_date').val('');
				}


			});





		});

		function validateForm() {
			var discount_code = $("#discount_code").val();
			if (discount_code == "") {
				$("#discount_code").focus();
				$("#discount_codex").text("Please enter discount code.");
				return false;
			} else {
				$("#discount_codex").text("");
			}

			var percnt_type = $("input[name='percnt_type']:checked").val();

			if (percnt_type == "percentage" || percnt_type == "Fixed amount") {
				var discount_value = $("#discount_value").val();
				//alert(discount_value);
				if (discount_value == "") {
					$("#discount_value").focus();
					$("#discount_valuex").text("Please enter discount value.");
					return false;
				} else {
					$("#discount_valuex").text("");
				}
			}

			if (percnt_type == "Buy X get Y") {

				var customer_buys = $("input[name='customer_buys']:checked").val();

				if (customer_buys == "customer_min_qty") {
					var min_qty = $("#min_qty").val();
					//alert(discount_value);
					if (min_qty == "") {
						$("#min_qty").focus();
						$("#min_qtyx").text("Please enter minimum quantity.");
						return false;
					} else {
						$("#min_qtyx").text("");
					}
				}
				if (customer_buys == "customer_min_amnt") {
					var min_amnt = $("#min_amnt").val();
					//alert(discount_value);
					if (min_amnt == "") {
						$("#min_amnt").focus();
						$("#min_amntx").text("Please enter minimum amount.");
						return false;
					} else {
						$("#min_amntx").text("");
					}
				}

				var min_get_qty = $("#min_get_qty").val();
				if (min_get_qty == "") {
					$("#min_get_qty").focus();
					$("#min_get_qtyx").text("Please enter quantity.");
					return false;
				} else {
					$("#min_get_qtyx").text("");
				}
			}



			var applies_to = $("input[name='applies_to']:checked").val();

			if (applies_to == "Specific Collection" || applies_to == "Specific products") {
				var applies_specific_val = $("#applies_specific_val").val();
				//alert(discount_value);
				if (applies_specific_val == "") {
					$("#applies_specific_val").focus();
					$("#applies_specific_valx").text("Please enter " + applies_to);
					return false;
				} else {
					$("#applies_specific_valx").text("");
				}
			}

			var start_date = $("#start_date").val();
			if (start_date == "") {
				$("#start_date").focus();
				$("#start_datex").text("Please enter start date.");
				return false;
			} else {
				$("#start_datex").text("");
			}

			var end_date_chk = $("input[name='end_date_chk']:checked").val();
			if (end_date_chk == "end_date_chk") {
				var end_date = $("#end_date").val();
				if (end_date == "") {
					$("#end_date").focus();
					$("#end_datex").text("Please enter end date.");
					return false;
				} else {
					$("#end_datex").text("");
				}
			}




			return true;
		}
	</script>


	<?php include_once 'inc/footer.php'; ?>