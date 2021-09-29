<?php include_once 'inc/header.php'; ?>
<div id="content-wrapper" class="d-flex flex-column">
	<!-- Main Content -->
	<div id="content">
		<?php include_once 'inc/navbar.php'; ?>
		<?php
		$set = $this->m_p->se_a("settings");
		foreach ($set as $key) {
			$settings = $key;
		}
		?>
		<!-- Begin Page Content -->
		<div class="container-fluid">
			<?php foreach ($msg as $key) {
				$id = $key->id; ?>
				<!-- Page Heading -->
				<h1 class="h3 mb-4 text-gray-800">Order Page</h1>


				<div class="row">
					<input class="btn btn-info" type='button' id='btn' value='Print' onclick="printDiv()">
					<div class="card shadow col-lg-12" id='printarea'>
						<div class="card-header py-3">
							<h6 class="m-0 font-weight-bold text-primary">Order products</h6>
							<br />
						</div>
						<div class="card-body print">
							<div class="bg-gray-100 p-3 mb-4">
								<img src="<?php echo base_url(); ?>logo/<?php echo $settings->logo; ?>" alt="IMG-LOGO" width="150" height="50">
								<h5 style="font-weight:bolder;">Order Details</h5>
								<ul class="list-inline m-0">
									<li class="list-inline-item">Order Date</li>
									<li class="list-inline-item"> : </li>
									<li class="list-inline-item"><?php echo $key->datetime; ?></li>
								</ul>
								<ul class="list-inline m-0">
									<li class="list-inline-item">Order Id</li>
									<li class="list-inline-item"> : </li>
									<li class="list-inline-item"><?php echo $key->order_id; ?></li>
								</ul>
								<ul class="list-inline m-0">
									<li class="list-inline-item">Payment Method</li>
									<li class="list-inline-item"> : </li>
									<li class="list-inline-item"><?php echo $key->pay; ?></li>
								</ul>
								<ul class="list-inline m-0">
									<li class="list-inline-item">Total</li>
									<li class="list-inline-item"> : </li>
									<li class="list-inline-item">
										<?= ($key->currency_type && $key->currency_type != null && $key->currency_type != '') == "EUR" ? "€" : "$" ?>
										<?php echo $key->totalPrice; ?></li>
								</ul>
								<ul class="list-inline m-0">
									<li class="list-inline-item"><?php echo lang("admin_h62") ?></li>
									<li class="list-inline-item"> : </li>
									<li class="list-inline-item"><?php echo status($key->status); ?></li>
								</ul>
								<br />
								<h5 style="font-weight: bolder;">Billing Details</h5>
								<ul class="list-inline m-0">
									<li class="list-inline-item"><?php echo lang("admin_h56") ?></li>
									<li class="list-inline-item"> : </li>
									<li class="list-inline-item"><?php echo $key->name; ?></li>
								</ul>
								<ul class="list-inline m-0">
									<li class="list-inline-item"><?php echo lang("admin_h57") ?></li>
									<li class="list-inline-item"> : </li>
									<li class="list-inline-item"><?php echo $key->tele; ?></li>
								</ul>
								<ul class="list-inline m-0">
									<li class="list-inline-item">Email</li>
									<li class="list-inline-item"> : </li>
									<li class="list-inline-item"><?php echo $key->email; ?></li>
								</ul>
								<ul class="list-inline m-0">
									<li class="list-inline-item"><?php echo lang("admin_h58") ?></li>
									<li class="list-inline-item"> : </li>
									<li class="list-inline-item"><?php echo $key->address; ?></li>
								</ul>
								<ul class="list-inline m-0">
									<li class="list-inline-item"><?php echo lang("admin_h59") ?></li>
									<li class="list-inline-item"> : </li>
									<li class="list-inline-item"><?php echo $key->city; ?></li>
								</ul>

								<!---total add hobe details page er--->

							</div>
							<div class="table-responsive">
								<a class="btn btn-success btn-circle btn-sm float-right" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i></a>
								<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
									<thead>
										<tr>
											<th>Product image</th>
											<th>Product Name</th>
											<th>Product Qty</th>

											<th>Options</th>
										</tr>
									</thead>

									<tbody class="testProduct">
										<?php $pcs = json_decode($key->products, TRUE);
										foreach ($pcs as $p) { ?>
											<tr>
												<td><img src="<?php echo base_url("uploads") . "/" . add_thumb(get_info("products", $p['id'], "images"), '_s') ?>" class="mr-3 rounded-lg" alt="..."></td>
												<td><?php echo get_info("products", $p['id'], "title"); ?></td>
												<td><?php echo $p['q']; ?>
													<br />

													<?php
													if (isset($p['options']) && $p['options'] != null) {
														$op = json_decode($p['options'], TRUE);
														if (!is_null($op)) {
															foreach ($op as $key1 => $value1) {
																echo base64_decode(hex2bin($key1)), " : ", $value1, "<br>";
															}
														}
													}
													?>
												</td>


												<td>

													<a class="btn btn-danger btn-circle btn-sm float-right" onclick="deletePrd(<?= $p['id']; ?>);"><i class="fas fa-trash"></i></a>
												</td>

											</tr>
										<?php } ?>



									</tbody>
								</table>
							</div>
							<div class="row">

								<div class="col-lg-9"></div>
								<div class="col-lg-3">
									<div class="bg-gray-100 p-3 mb-4">
										<ul class="list-inline m-0">
											<li class="list-inline-item">Total Price</li>
											<li class="list-inline-item"> : </li>
											<li class="list-inline-item">$<?php echo $key->totalPrice; ?></li>
										</ul>
										<ul class="list-inline m-0">
											<li class="list-inline-item">Payment Information</li>
											<li class="list-inline-item"> : </li>
											<li class="list-inline-item"><?php echo $key->pay; ?></li>
										</ul>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			<?php } ?>
		</div>
		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel"><?= lang("admin_h121"); ?></h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="row results">
							<form action="" class="col-md-12">
								<input type="text" class="form-control" style="width: 100%;" placeholder="type product name" class="tetddd" onkeyup="search(this);" style="border-bottom-right-radius: 0;border-bottom-left-radius: 0;">
							</form>
							<div class="list-group modelHb">
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal"><?= lang("admin_h122"); ?></button>
						<button type="button" class="btn btn-primary" onclick="addProduct();"><?= lang("admin_h123"); ?></button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script id="modalInfo" type="text/x-handlebars-template">
		<div class="col-md-12">
				<form id="formPrd">
						<div class="form-group">
								
								<input type="number" class="form-control qty" style="width: 100%;" placeholder="Quantity" name="qty">
								<input type="hidden" name="id" value="{{ id }}">
								
						</div>
						{{#each variants}}
						<label> {{ tp }}</label>
						<select name="option[{{encode tp }}]" id="" class="form-control">
								{{#each (split info) }}
								<option value="{{ this }}">{{ this }}</option>
								{{/each }}
						</select>
						{{/each}}
				</form>
		</div>
	</script>
	<script id="default" type="text/x-handlebars-template">

		<form action="" class="col-md-12">
				<input type="text" class="form-control" style="width: 100%;" placeholder="type product name" class="tetddd" onkeyup="search(this);" style="border-bottom-right-radius: 0;border-bottom-left-radius: 0;">
		</form>
		<div class="list-group modelHb">
		</div>
	</script>
	<?php include_once 'inc/footer.php'; ?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.3/handlebars.min.js"></script>
	<script>
		var info = [];
		var i;
		var template = $('#modalInfo').html();
		var defaultTemp = $('#default').html();
		var templateScript = Handlebars.compile(template);
		$(document).on("click", ".clicked-product", function() {
			i = $(this).data("index");
			var product = info[i];
			var variants = (product.variants != "") ? JSON.parse(product.variants) : [];
			var html = templateScript({
				variants: variants,
				id: product.id
			});
			$(".results").html(html);
		})

		function addProduct() {
			var data = $("#formPrd").serialize();
			$.ajax({
				data: data,
				dataType: "html",
				url: base_url + "admin/addProductToOrder/<?= $id; ?>",
				method: "POST",
				success: function(data) {
					$(".testProduct").html(data);
					$(".results").html(defaultTemp);
				}
			});
			//$(".testProduct").append(html);
		}

		function deletePrd(id) {
			var yes = confirm("are you sure ? this action can't be undo ");
			if (!yes)
				return false;
			$.ajax({
				data: {
					id: id
				},
				dataType: "html",
				url: base_url + "admin/addProductToOrder/<?= $id; ?>",
				method: "POST",
				success: function(data) {
					$(".testProduct").html(data);
				}
			});
			return false;
			//$(".testProduct").append(html);
		}

		function bin2hex(s) {
			var i
			var l
			var o = ''
			var n
			s += ''
			for (i = 0, l = s.length; i < l; i++) {
				n = s.charCodeAt(i)
					.toString(16)
				o += n.length < 2 ? '0' + n : n
			}
			return o
		}

		function base64(s) {
			if (typeof btoa !== 'function') {
				alert("there is a problem with your browser please use the last version");
			}
			return btoa(unescape(encodeURIComponent(s)));
		}
		Handlebars.registerHelper("encode", function(index) {
			return bin2hex(base64(index));
		});
		Handlebars.registerHelper("split", function(index) {
			return (index != null && index != undefined && index != "") ? index.split(",") : [];
		});

		function search(t) {
			var v = $(t).val();
			$.ajax({
				method: "POST",
				url: base_url + "admin/search",
				dataType: "JSON",
				data: {
					q: v
				},
				success: function(data) {
					if (data.success === false) {
						alert("0");
					} else {
						console.log(data);
						info = data;
						$(".modelHb").html("");
						$.each(data, function(i, item) {
							console.log(item);
							$(".modelHb").append("<a class=\"list-group-item list-group-item-action clicked-product\" data-index='" + i + "'>" + item.title + "</a>");
						})

					}
				}
			})
		}
	</script>
	<script type="text/javascript">
		function printDiv() {
			var printContents = document.getElementById("printarea").innerHTML;
			var originalContents = document.body.innerHTML;
			document.body.innerHTML = printContents;
			window.print();
			document.body.innerHTML = originalContents;
		}
	</script>