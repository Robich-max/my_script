<?php include_once 'inc/header.php'; ?>
<style type="text/css">
	.err {
		color: #ff0000;
	}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-typeahead/2.10.6/jquery.typeahead.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-typeahead/2.10.6/jquery.typeahead.js"></script>




<div id="content-wrapper" class="d-flex flex-column">



	<!-- Main Content -->
	<div id="content">

		<?php include_once 'inc/navbar.php'; ?>

		<div class="container-fluid">







			<!-- Page Heading -->
			<h1 class="h3 mb-2 text-gray-800"><?= lang("admin_h124"); ?></h1>

			<?php if ($this->session->flashdata('success')) { ?>
				<div class="alert alert-success alert-dismissible">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<?php echo $this->session->flashdata('success'); ?>
				</div>
			<?php } ?>
			<?php if ($this->session->flashdata('error')) { ?>
				<div class="alert alert-danger alert-dismissible">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<?php echo $this->session->flashdata('error'); ?>
				</div>
			<?php } ?>

			<!-- DataTales Example -->
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary"><?= lang("admin_h125"); ?></h6>
				</div>
				<div class="card-body">

					<?php if (isset($msg)) { ?>
						<div class="alert alert-success"><?= lang("admin_h126"); ?> .</div>
					<?php } ?>

					<fieldset>

						<?php
						//$action_path = base_url()."admin/save_discount";

						//echo form_open_multipart("",array("class" => "form-horizontal","onsubmit" => "return validatef()")); 
						?>
						<form action="<?= base_url('admin/add_discount.html') ?>" onsubmit="return validateForm()" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">


							<div class="row">
								<div class="col-xl-6 col-md-6 mb-4">
									<div class="card border-left-primary shadow h-100 py-2">
										<div class="card-body">
											<div class="form-group">
												<label for="discount_code"><strong>Discount code</strong></label>
												<input type="text" class="form-control" name="discount_code" id="discount_code">
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
													<label><input type="radio" name="percnt_type" id="percentage" value="percentage" checked>Percentage</label>
												</div>
												<div class="radio">
													<label><input type="radio" name="percnt_type" id="fix_amount" value="Fixed amount">Fixed amount </label>
												</div>
												<div class="radio">
													<label><input type="radio" name="percnt_type" id="free_ship" value="Free shipping"> Free shipping </label>
												</div>
												<div class="radio">
													<label><input type="radio" name="percnt_type" id="buy_x" value="Buy X get Y"> Buy X get Y</label>
												</div>

											</div>



										</div>
									</div>
								</div>
							</div>

							<div class="row" id="product_div">
								<div class="col-xl-6 col-md-6 mb-4">
									<div class="card border-left-primary shadow h-100 py-2">
										<div class="card-body">
											<div class="form-group">
												<label for="inp1"><strong>Value</strong></label>
												<div class="form-group">
													<label for="discount_value">Discount Value <b><span id="disc_symbol" style="font-size: larger;">%<span></b></label>
													<input type="text" class="form-control" name="discount_value" id="discount_value" style="width: 200px;">
													<span id="discount_valuex" class="err"></span>

												</div>
												<hr>
												<div class="form-group">
													<label for="inp1"><strong>Applies To</strong></label>
													<div class="radio">
														<label><input type="radio" name="applies_to" id="all_product" value="All products" checked>All products</label>
													</div>
													<div class="radio">
														<label><input type="radio" name="applies_to" id="specific_collection" value="Specific Collection">Specific collections </label>
													</div>
													<div class="radio">
														<label><input type="radio" name="applies_to" id="specific_products" value="Specific products"> Specific products </label>
													</div>
													<div><input type="text" placeholder="Enter specific" class="form-control" name="applies_specific_val" id="applies_specific_val" style="display:none"></div>
													<span id="applies_specific_valx" class="err"></span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>


							<div class="row" id="countries" style="display:none">
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
													<div class="selected_countries_val" style="display:none;">
														<div class="typeahead__container">
															<div class="typeahead__field">
																<span class="typeahead__query">
																	<input class="js-typeahead-input form-control" name="selected_countries_val" id="selected_countries_val" placeholder="Search Country" type="search" autofocus autocomplete="on">
																</span>
															</div>
														</div>
													</div>

												</div>
												<hr>
												<div class="form-group">
													<label for="inp1"><strong>SHIPPING RATES</strong></label>
													<div class="checkbox">
														<label><input type="checkbox" id="exclude_shipping" name="exclude_shipping" value="Exclude_shipping_rates">Exclude shipping rates over a certain amount</label>
													</div>
													<div><input type="number" placeholder=" € 0" class="form-control" name="exclude_shipping_val" id="exclude_shipping_val" style="display:none;width: 200px;"></div>


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
													<label><input type="radio" name="min_req" id="req_none" value="none" checked>None</label>
												</div>
												<div class="radio">
													<label><input type="radio" name="min_req" id="min_purchase_amount" value="min_purchase_amount">Minimum purchase amount (€) </label>
												</div>
												<div><input type="text" placeholder="€ 0.00" class="form-control" name="min_purchase_amount_val" id="min_purchase_amount_val" style="display:none;width: 200px;"></div>


												<div class="radio">
													<label><input type="radio" name="min_req" id="min_purchase_qty" value="min_purchase_qty"> Minimum quantity of items </label>
												</div>
												<div><input type="text" placeholder="Applies to all products" class="form-control" name="min_purchase_qty_val" id="min_purchase_qty_val" style="display:none;width: 200px;"></div>



											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="row" id="customer_spends" style="display:none">
								<div class="col-xl-6 col-md-6 mb-4">
									<div class="card border-left-primary shadow h-100 py-2">
										<div class="card-body">

											<label for="inp1"><strong>Customer buys</strong></label>

											<div class="form-group">

												<div class="radio">
													<label><input type="radio" name="customer_buys" id="customer_min_qty" value="customer_min_qty" checked>Minimum quantity of items.</label>
												</div>
												<div class="radio">
													<label><input type="radio" name="customer_buys" id="customer_min_amnt" value="customer_min_amnt">Minimum purchase amount </label>
												</div>

												<div class="row">
													<div class="col-xl-6 col-md-6 mb-4">
														<div id="customer_min_qty_div" style="display:block;">
															<label for="item">Quantity</label>
															<input type="number" placeholder="0" class="form-control" name="min_qty" id="min_qty">
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

												<div><input type="text" placeholder="Enter specific " class="form-control" name="specific_buy_val" id="specific_buy_val"></div>

												<hr>
												<label for="inp1"><strong>Customer gets</strong></label>
												<p>Customers must add the quantity of items specified below to their cart.</p>


												<div class="row">
													<div class="col-xl-6 col-md-6 mb-4">
														<label for="item">Quantity</label>
														<input type="number" placeholder="0" class="form-control" name="min_get_qty" id="min_get_qty" style="display:block;">
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

												<div><input type="text" placeholder="Enter specific " class="form-control" name="specific_gets_val" id="specific_gets_val"></div>
												<div class="form-group">
													<label>AT A DISCOUNTED VALUE</label>
													<div class="radio">
														<label><input type="radio" name="discount_customer" id="discount_percentage" value="Percentage">Percentage</label>
													</div>
													<div class="radio">
														<label><input type="radio" name="discount_customer" id="discount_free" value="Specific Collection">Free </label>
													</div>

													<div><input type="text" placeholder="Enter percentage %" class="form-control" name="customer_percentage_val" id="customer_percentage_val" style="display:none;"></div>

												</div>


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
													<label><input type="radio" name="eligibility" id="everyone" value="Everyone" checked>Everyone</label>
												</div>
												<div class="radio">
													<label><input type="radio" name="eligibility" id="specific_group_customer" value="specific_group_customer">Specific groups of customers </label>
												</div>
												<div><input type="text" placeholder="Enter specific groups of customers" class="form-control" name="specific_group_customer_val" id="specific_group_customer_val" style="display:none;"></div>
												<div class="radio">
													<label><input type="radio" name="eligibility" id="specific_customer" value="specific_customer"> Specific customers </label>
												</div>
												<div><input type="text" placeholder="Enter specific customers" class="form-control" name="specific_customer_val" id="specific_customer_val" style="display:none;"></div>
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
													<label><input type="checkbox" id="limit_number" name="limit_number" value="limit_number_times">Limit number of times this discount can be used in total</label>
												</div>
												<div><input type="number" placeholder="0" class="form-control" name="limit_number_val" id="limit_number_val" style="display:none;width: 200px;"></div>
												<div class="checkbox">
													<label><input type="checkbox" id="limit_to_one" name="limit_to_one" value="limit_to_one">Limit to one use per customer</label>
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
														<input type="date" class="form-control" name="start_date" id="start_date">
														<span id="start_datex" class="err"></span>
													</div>
													<div class="col-xl-5 col-md-6 mb-4">
														<label for="start_time">Start Time</label>
														<input type="time" class="form-control" name="start_time" id="start_time">
														<span id="start_timex" class="err"></span>
													</div>
												</div>
												<div class="checkbox">
													<label><input type="checkbox" name="end_date_chk" id="end_date_chk" value="end_date_chk">Set End Date</label>
												</div>
												<div class="row end_date">
													<div class="col-xl-5 col-md-6 mb-3">
														<label for="end_date">End Date</label>
														<input type="date" class="form-control" name="end_date" id="end_date">
														<span id="end_datex" class="err"></span>
													</div>
													<div class="col-xl-5 col-md-6 mb-3">
														<label for="end_time">End Time</label>
														<input type="time" class="form-control" name="end_time" id="end_time">
														<span id="end_timex" class="err"></span>
													</div>
												</div>





											</div>





										</div>
									</div>
								</div>
							</div>




							<button type="reset" class="btn btn-danger" style="margin-right:200px">Discard</button>
							<button type="submit" class="btn btn-primary" name="add_discount"><?= lang("admin_h120"); ?></button>
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


			$("#exclude_shipping").on("change", function() {
				var exclude_shipping = $("input[name='exclude_shipping']:checked").val();
				if (exclude_shipping) {
					$("#exclude_shipping_val").css("display", "block");
				} else {
					$("#exclude_shipping_val").css("display", "none");
				}

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
					$(".selected_countries_val").css("display", "block");
				} else {
					$(".selected_countries_val").css("display", "none");
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


			$(".end_date").hide();
			$("#end_date_chk").click(function() {
				var ischecked = $(this).is(':checked');
				if (ischecked) {
					$(".end_date").show();
				} else {
					$(".end_date").hide();
					//$( ".end_date" ).css("display","none");
				}


			});





		});

		function validateForm() {


			var str = "";




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
			if (percnt_type == "Free shipping") {
				$("#discount_value").val('');
				$(".typeahead__label span").each(function() {
					var cntry = $(this).text();
					var c = $.trim(cntry).length;
					if (c > 2) {
						str += cntry + "@";
					}
				});

				$('#selected_countries_val').val(str);




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
	<script type="text/javascript">
		var data = [{
				"id": "AF",
				"name": "Afghanistan"
			}, {
				"id": "AX",
				"name": "Aland Islands"
			},
			{
				"id": "AL",
				"name": "Albania"
			}, {
				"id": "DZ",
				"name": "Algeria"
			}, {
				"id": "AS",
				"name": "American Samoa"
			},
			{
				"id": "AD",
				"name": "Andorra"
			}, {
				"id": "AO",
				"name": "Angola"
			}, {
				"id": "AI",
				"name": "Anguilla"
			}, {
				"id": "AQ",
				"name": "Antarctica"
			},
			{
				"id": "AG",
				"name": "Antigua And Barbuda"
			}, {
				"id": "AR",
				"name": "Argentina"
			}, {
				"id": "AM",
				"name": "Armenia"
			}, {
				"id": "AW",
				"name": "Aruba"
			},
			{
				"id": "AU",
				"name": "Australia"
			}, {
				"id": "AT",
				"name": "Austria"
			}, {
				"id": "AZ",
				"name": "Azerbaijan"
			}, {
				"id": "BS",
				"name": "Bahamas"
			},
			{
				"id": "BH",
				"name": "Bahrain"
			}, {
				"id": "BD",
				"name": "Bangladesh"
			}, {
				"id": "BB",
				"name": "Barbados"
			}, {
				"id": "BY",
				"name": "Belarus"
			},
			{
				"id": "BE",
				"name": "Belgium"
			}, {
				"id": "BZ",
				"name": "Belize"
			}, {
				"id": "BJ",
				"name": "Benin"
			}, {
				"id": "BM",
				"name": "Bermuda"
			},
			{
				"id": "BT",
				"name": "Bhutan"
			}, {
				"id": "BO",
				"name": "Bolivia"
			}, {
				"id": "BA",
				"name": "Bosnia And Herzegovina"
			}, {
				"id": "BW",
				"name": "Botswana"
			},
			{
				"id": "BV",
				"name": "Bouvet Island"
			}, {
				"id": "BR",
				"name": "Brazil"
			}, {
				"id": "IO",
				"name": "British Indian Ocean Territory"
			},
			{
				"id": "BN",
				"name": "Brunei Darussalam"
			}, {
				"id": "BG",
				"name": "Bulgaria"
			}, {
				"id": "BF",
				"name": "Burkina Faso"
			}, {
				"id": "BI",
				"name": "Burundi"
			}, {
				"id": "KH",
				"name": "Cambodia"
			},
			{
				"id": "CM",
				"name": "Cameroon"
			}, {
				"id": "CA",
				"name": "Canada"
			}, {
				"id": "CV",
				"name": "Cape Verde"
			}, {
				"id": "KY",
				"name": "Cayman Islands"
			}, {
				"id": "CF",
				"name": "Central African Republic"
			},
			{
				"id": "TD",
				"name": "Chad"
			}, {
				"id": "CL",
				"name": "Chile"
			}, {
				"id": "CN",
				"name": "China"
			}, {
				"id": "CX",
				"name": "Christmas Island"
			},
			{
				"id": "CC",
				"name": "Cocos (Keeling) Islands"
			}, {
				"id": "CO",
				"name": "Colombia"
			}, {
				"id": "KM",
				"name": "Comoros"
			}, {
				"id": "CG",
				"name": "Congo"
			},
			{
				"id": "CD",
				"name": "Congo Democratic Republic"
			}, {
				"id": "CK",
				"name": "Cook Islands"
			}, {
				"id": "CR",
				"name": "Costa Rica"
			}, {
				"id": "CI",
				"name": "Cote D\"Ivoire"
			},
			{
				"id": "HR",
				"name": "Croatia"
			}, {
				"id": "CU",
				"name": "Cuba"
			}, {
				"id": "CY",
				"name": "Cyprus"
			}, {
				"id": "CZ",
				"name": "Czech Republic"
			},
			{
				"id": "DK",
				"name": "Denmark"
			}, {
				"id": "DJ",
				"name": "Djibouti"
			}, {
				"id": "DM",
				"name": "Dominica"
			}, {
				"id": "DO",
				"name": "Dominican Republic"
			}, {
				"id": "EC",
				"name": "Ecuador"
			},
			{
				"id": "EG",
				"name": "Egypt"
			}, {
				"id": "SV",
				"name": "El Salvador"
			}, {
				"id": "GQ",
				"name": "Equatorial Guinea"
			}, {
				"id": "ER",
				"name": "Eritrea"
			},
			{
				"id": "EE",
				"name": "Estonia"
			}, {
				"id": "ET",
				"name": "Ethiopia"
			}, {
				"id": "FK",
				"name": "Falkland Islands (Malvinas)"
			}, {
				"id": "FO",
				"name": "Faroe Islands"
			},
			{
				"id": "FJ",
				"name": "Fiji"
			}, {
				"id": "FI",
				"name": "Finland"
			}, {
				"id": "FR",
				"name": "France"
			}, {
				"id": "GF",
				"name": "French Guiana"
			},
			{
				"id": "PF",
				"name": "French Polynesia"
			}, {
				"id": "TF",
				"name": "French Southern Territories"
			}, {
				"id": "GA",
				"name": "Gabon"
			}, {
				"id": "GM",
				"name": "Gambia"
			}, {
				"id": "GE",
				"name": "Georgia"
			}, {
				"id": "DE",
				"name": "Germany"
			},
			{
				"id": "GH",
				"name": "Ghana"
			}, {
				"id": "GI",
				"name": "Gibraltar"
			}, {
				"id": "GR",
				"name": "Greece"
			}, {
				"id": "GL",
				"name": "Greenland"
			},
			{
				"id": "GD",
				"name": "Grenada"
			}, {
				"id": "GP",
				"name": "Guadeloupe"
			}, {
				"id": "GU",
				"name": "Guam"
			}, {
				"id": "GT",
				"name": "Guatemala"
			},
			{
				"id": "GG",
				"name": "Guernsey"
			}, {
				"id": "GN",
				"name": "Guinea"
			}, {
				"id": "GW",
				"name": "Guinea-Bissau"
			}, {
				"id": "GY",
				"name": "Guyana"
			},
			{
				"id": "HT",
				"name": "Haiti"
			}, {
				"id": "HM",
				"name": "Heard Island & Mcdonald Islands"
			}, {
				"id": "VA",
				"name": "Holy See (Vatican City State)"
			},
			{
				"id": "HN",
				"name": "Honduras"
			}, {
				"id": "HK",
				"name": "Hong Kong"
			}, {
				"id": "HU",
				"name": "Hungary"
			}, {
				"id": "IS",
				"name": "Iceland"
			}, {
				"id": "IN",
				"name": "India"
			},
			{
				"id": "ID",
				"name": "Indonesia"
			}, {
				"id": "IR",
				"name": "Iran Islamic Republic Of"
			}, {
				"id": "IQ",
				"name": "Iraq"
			},
			{
				"id": "IE",
				"name": "Ireland"
			}, {
				"id": "IM",
				"name": "Isle Of Man"
			}, {
				"id": "IL",
				"name": "Israel"
			}, {
				"id": "IT",
				"name": "Italy"
			}, {
				"id": "JM",
				"name": "Jamaica"
			}, {
				"id": "JP",
				"name": "Japan"
			},
			{
				"id": "JE",
				"name": "Jersey"
			}, {
				"id": "JO",
				"name": "Jordan"
			}, {
				"id": "KZ",
				"name": "Kazakhstan"
			}, {
				"id": "KE",
				"name": "Kenya"
			},
			{
				"id": "KI",
				"name": "Kiribati"
			}, {
				"id": "KR",
				"name": "Korea"
			}, {
				"id": "KW",
				"name": "Kuwait"
			}, {
				"id": "KG",
				"name": "Kyrgyzstan"
			},
			{
				"id": "LA",
				"name": "Lao People\"s Democratic Republic"
			}, {
				"id": "LV",
				"name": "Latvia"
			}, {
				"id": "LB",
				"name": "Lebanon"
			},
			{
				"id": "LS",
				"name": "Lesotho"
			}, {
				"id": "LR",
				"name": "Liberia"
			}, {
				"id": "LY",
				"name": "Libyan Arab Jamahiriya"
			}, {
				"id": "LI",
				"name": "Liechtenstein"
			},
			{
				"id": "LT",
				"name": "Lithuania"
			}, {
				"id": "LU",
				"name": "Luxembourg"
			}, {
				"id": "MO",
				"name": "Macao"
			}, {
				"id": "MK",
				"name": "Macedonia"
			}, {
				"id": "MG",
				"name": "Madagascar"
			},
			{
				"id": "MW",
				"name": "Malawi"
			}, {
				"id": "MY",
				"name": "Malaysia"
			}, {
				"id": "MV",
				"name": "Maldives"
			}, {
				"id": "ML",
				"name": "Mali"
			}, {
				"id": "MT",
				"name": "Malta"
			}, {
				"id": "MH",
				"name": "Marshall Islands"
			},
			{
				"id": "MQ",
				"name": "Martinique"
			}, {
				"id": "MR",
				"name": "Mauritania"
			}, {
				"id": "MU",
				"name": "Mauritius"
			}, {
				"id": "YT",
				"name": "Mayotte"
			}, {
				"id": "MX",
				"name": "Mexico"
			}, {
				"id": "FM",
				"name": "Micronesia, Federated States Of"
			}, {
				"id": "MD",
				"name": "Moldova"
			},
			{
				"id": "MC",
				"name": "Monaco"
			}, {
				"id": "MN",
				"name": "Mongolia"
			}, {
				"id": "ME",
				"name": "Montenegro"
			}, {
				"id": "MS",
				"name": "Montserrat"
			}, {
				"id": "MA",
				"name": "Morocco"
			}, {
				"id": "MZ",
				"name": "Mozambique"
			}, {
				"id": "MM",
				"name": "Myanmar"
			}, {
				"id": "NA",
				"name": "Namibia"
			},
			{
				"id": "NR",
				"name": "Nauru"
			}, {
				"id": "NP",
				"name": "Nepal"
			}, {
				"id": "NL",
				"name": "Netherlands"
			}, {
				"id": "AN",
				"name": "Netherlands Antilles"
			},
			{
				"id": "NC",
				"name": "New Caledonia"
			}, {
				"id": "NZ",
				"name": "New Zealand"
			}, {
				"id": "NI",
				"name": "Nicaragua"
			}, {
				"id": "NE",
				"name": "Niger"
			},
			{
				"id": "NG",
				"name": "Nigeria"
			}, {
				"id": "NU",
				"name": "Niue"
			}, {
				"id": "NF",
				"name": "Norfolk Island"
			}, {
				"id": "MP",
				"name": "Northern Mariana Islands"
			}, {
				"id": "NO",
				"name": "Norway"
			},
			{
				"id": "OM",
				"name": "Oman"
			}, {
				"id": "PK",
				"name": "Pakistan"
			}, {
				"id": "PW",
				"name": "Palau"
			}, {
				"id": "PS",
				"name": "Palestinian Territory, Occupied"
			},
			{
				"id": "PA",
				"name": "Panama"
			}, {
				"id": "PG",
				"name": "Papua New Guinea"
			}, {
				"id": "PY",
				"name": "Paraguay"
			}, {
				"id": "PE",
				"name": "Peru"
			}, {
				"id": "PH",
				"name": "Philippines"
			},
			{
				"id": "PN",
				"name": "Pitcairn"
			}, {
				"id": "PL",
				"name": "Poland"
			}, {
				"id": "PT",
				"name": "Portugal"
			}, {
				"id": "PR",
				"name": "Puerto Rico"
			},
			{
				"id": "QA",
				"name": "Qatar"
			}, {
				"id": "RE",
				"name": "Reunion"
			}, {
				"id": "RO",
				"name": "Romania"
			}, {
				"id": "RU",
				"name": "Russian Federation"
			},
			{
				"id": "RW",
				"name": "Rwanda"
			}, {
				"id": "BL",
				"name": "Saint Barthelemy"
			}, {
				"id": "SH",
				"name": "Saint Helena"
			}, {
				"id": "KN",
				"name": "Saint Kitts And Nevis"
			}, {
				"id": "LC",
				"name": "Saint Lucia"
			}, {
				"id": "MF",
				"name": "Saint Martin"
			},
			{
				"id": "PM",
				"name": "Saint Pierre And Miquelon"
			}, {
				"id": "VC",
				"name": "Saint Vincent And Grenadines"
			},
			{
				"id": "WS",
				"name": "Samoa"
			}, {
				"id": "SM",
				"name": "San Marino"
			}, {
				"id": "ST",
				"name": "Sao Tome And Principe"
			}, {
				"id": "SA",
				"name": "Saudi Arabia"
			},
			{
				"id": "SN",
				"name": "Senegal"
			}, {
				"id": "RS",
				"name": "Serbia"
			}, {
				"id": "SC",
				"name": "Seychelles"
			}, {
				"id": "SL",
				"name": "Sierra Leone"
			}, {
				"id": "SG",
				"name": "Singapore"
			},
			{
				"id": "SK",
				"name": "Slovakia"
			}, {
				"id": "SI",
				"name": "Slovenia"
			}, {
				"id": "SB",
				"name": "Solomon Islands"
			},
			{
				"id": "SO",
				"name": "Somalia"
			}, {
				"id": "ZA",
				"name": "South Africa"
			}, {
				"id": "GS",
				"name": "South Georgia And Sandwich Isl."
			}, {
				"id": "ES",
				"name": "Spain"
			},
			{
				"id": "LK",
				"name": "Sri Lanka"
			}, {
				"id": "SD",
				"name": "Sudan"
			}, {
				"id": "SR",
				"name": "Suriname"
			}, {
				"id": "SJ",
				"name": "Svalbard And Jan Mayen"
			},
			{
				"id": "SZ",
				"name": "Swaziland"
			}, {
				"id": "SE",
				"name": "Sweden"
			}, {
				"id": "CH",
				"name": "Switzerland"
			}, {
				"id": "SY",
				"name": "Syrian Arab Republic"
			},
			{
				"id": "TW",
				"name": "Taiwan"
			}, {
				"id": "TJ",
				"name": "Tajikistan"
			}, {
				"id": "TZ",
				"name": "Tanzania"
			}, {
				"id": "TH",
				"name": "Thailand"
			}, {
				"id": "TL",
				"name": "Timor-Leste"
			},
			{
				"id": "TG",
				"name": "Togo"
			}, {
				"id": "TK",
				"name": "Tokelau"
			}, {
				"id": "TO",
				"name": "Tonga"
			}, {
				"id": "TT",
				"name": "Trinidad And Tobago"
			},
			{
				"id": "TN",
				"name": "Tunisia"
			}, {
				"id": "TR",
				"name": "Turkey"
			}, {
				"id": "TM",
				"name": "Turkmenistan"
			}, {
				"id": "TC",
				"name": "Turks And Caicos Islands"
			},
			{
				"id": "TV",
				"name": "Tuvalu"
			}, {
				"id": "UG",
				"name": "Uganda"
			}, {
				"id": "UA",
				"name": "Ukraine"
			}, {
				"id": "AE",
				"name": "United Arab Emirates"
			},
			{
				"id": "GB",
				"name": "United Kingdom"
			}, {
				"id": "US",
				"name": "United States"
			}, {
				"id": "UM",
				"name": "United States Outlying Islands"
			},
			{
				"id": "UY",
				"name": "Uruguay"
			}, {
				"id": "UZ",
				"name": "Uzbekistan"
			}, {
				"id": "VU",
				"name": "Vanuatu"
			}, {
				"id": "VE",
				"name": "Venezuela"
			},
			{
				"id": "VN",
				"name": "Vietnam"
			}, {
				"id": "VG",
				"name": "Virgin Islands, British"
			}, {
				"id": "VI",
				"name": "Virgin Islands U.S."
			}, {
				"id": "WF",
				"name": "Wallis And Futuna"
			},
			{
				"id": "EH",
				"name": "Western Sahara"
			}, {
				"id": "YE",
				"name": "Yemen"
			}, {
				"id": "ZM",
				"name": "Zambia"
			},
			{
				"id": "ZW",
				"name": "Zimbabwe"
			}

		];



		typeof $.typeahead === 'function' && $.typeahead({
			input: ".js-typeahead-input",
			minLength: 0,
			maxItem: 8,
			maxItemPerGroup: 6,
			order: "asc",
			hint: true,
			searchOnFocus: true,

			group: {
				key: "typeReport",
				template: function(item) {
					var typeReport = item.typeReport;
					return typeReport;
				}
			},
			emptyTemplate: 'no result for {{query}}',
			//groupOrder: ["shipment", "serial"],
			display: ["name"],
			correlativeTemplate: true,

			multiselect: {
				limit: 20,
				limitTemplate: 'You can\'t select more than 20 country',
				matchOn: ["id"],
				data: function() {
					var deferred = $.Deferred();
					return deferred;
				},
				callback: {
					onClick: function(node, item, event) {
						event.preventDefault();
						console.log(item);
						alert(item.name + ' Clicked!');
					},
					onCancel: function(node, item, event) {
						console.log(item)
					}
				}
			},

			template: '<span>' +
				'<span class="name">{{name}}</span>' +
				'</span>',
			source: {
				groupName: {
					data: data
				}
			},
			debug: true
		});
	</script>

	<?php include_once 'inc/footer.php'; ?>