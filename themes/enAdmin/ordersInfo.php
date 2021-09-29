<?php include_once 'inc/header.php'; ?>

<div id="content-wrapper" class="d-flex flex-column">

	<!-- Main Content -->
	<div id="content">

		<?php include_once 'inc/navbar.php'; ?>

		<?php if ($tp == "edit") { ?>

			<?php foreach ($orders as $key) : ?>

				<div class="container-fluid">

					<?php echo form_open(""); ?>

					<div class="card shadow mb-4">
						<div class="card-header py-3">
							<h6 class="m-0 font-weight-bold text-primary"><?= lang("admin_h119"); ?></h6>
						</div>

						<div class="card-body">


							<div class="row">
								<div class="col-md-6">
									<div class="form-group">

										<label for=""><?php echo lang("admin_h56") ?> </label>
										<input type="text" class="form-control" value="<?php echo $key->name; ?>" name="name">

									</div>

									<div class="form-group">

										<label for=""><?php echo lang("admin_h57") ?> </label>
										<input type="text" class="form-control" value="<?php echo $key->tele; ?>" name="tele">

									</div>

									<div class="form-group">

										<label for=""><?php echo lang("admin_h58") ?> </label>
										<input type="text" class="form-control" value="<?php echo $key->address; ?>" name="address">

									</div>

									<div class="form-group">

										<label for=""><?php echo lang("admin_h59") ?> </label>
										<input type="text" class="form-control" value="<?php echo $key->city; ?>" name="city">

									</div>

								</div>
								<div class="col-md-6">

									<div class="form-group">

										<label for=""><?php echo lang("admin_h60") ?> </label>
										<input type="text" class="form-control" value="<?php echo $key->coupon; ?>" name="coupon">

									</div>

									<div class="form-group">

										<label for="">Deliver name</label>
										<input type="text" class="form-control" value="<?php echo $key->deliver; ?>" name="deliver">

									</div>

									<div class="form-group">

										<label for="">Deliver Number</label>
										<input type="text" class="form-control" value="<?php echo $key->deliver_number; ?>" name="deliver_number">

									</div>

									<div class="form-group">

										<label for=""><?php echo lang("admin_h61") ?> </label>
										<input type="text" class="form-control" value="<?php echo $key->totalPrice; ?>" name="totalPrice">

									</div>

									<div class="form-group">

										<label for=""><?php echo lang("admin_h62") ?> </label>
										<select name="order_status" class="form-control">
											<?php foreach (status() as $k => $s) : ?>
												<option value="<?php echo $s; ?>" <?php if ($key->order_status == $s) echo "selected"; ?>> <?php echo $s; ?> </option>
											<?php endforeach; ?>
										</select>

									</div>
								</div>
							</div>



						</div>

						<div class="card-footer">
							<button class="float-right btn btn-success"><?= lang("admin_h120"); ?></button>
						</div>

					</div>
					<?php echo form_close(); ?>

				</div>
				<!-- /.container-fluid -->

			<?php endforeach; ?>


		<?php } else { ?>




			<div class="container-fluid">
				<?php if ($this->session->flashdata('message')) { ?>

					<div class="alert alert-success"><?php echo $this->session->flashdata('message'); ?></div>
				<?php } ?>
				<!-- Page Heading -->
				<h1 class="h3 mb-2 text-gray-800">Order Info</h1>

				<!-- DataTales Example -->
				<div class="card shadow mb-4">
					<div class="card-header py-3">
						<h6 class="m-0 font-weight-bold text-primary"><?= lang("admin_h91"); ?> </h6>


						<div class="card-header py-3">
							<a class="collapse-item btn btn-info" href="<?php echo base_url("admin/csv"); ?>">Export csv</a>

						</div>

						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
									<thead>
										<tr>
											<th>#</th>
											<th>Order</th>
											<th>Image</th>
											<th>Name</th>
											<th>Email</th>
											<th>Payment</th>
											<th>Total price</th>

											<th>Mobile</th>
											<th>Address</th>
											<th>Date</th>
											<th>Shipping</th>
											<th>Status</th>
											<th>Options</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
											<th>#</th>
											<th>Order</th>
											<th>Image</th>
											<th>Name</th>
											<th>Email</th>
											<th>Payment</th>
											<th>Total price</th>
											<th>Mobile</th>
											<th>Address</th>
											<th>Date</th>
											<th>Shipping</th>
											<th>Status</th>
											<th>Options</th>
										</tr>
									</tfoot>
									<tbody>
										<?php foreach ($orders as $key) { ?>


											<tr>
												<td><?php echo $key->id; ?></td>
												<td><?php echo $key->order_id; ?></td>
												<td><?php $pcs = json_decode($key->products, TRUE);

													foreach ($pcs as $q) {
														$pId[] = $q['id'];
													};
													$newId = array_unique(array_merge($pId));

													foreach ($newId as $pd) {


														$dataId = $this->db->query("SELECT * FROM products WHERE id = '$pd'")->row();

														if (!empty($dataId->images)) {
															$images = explode(",", $dataId->images);
															foreach ($images as $imgs => $img) {

																if ($imgs <= '0') {

																	echo "<img style='width:50px;height:50px;' src='" . base_url('uploads') . "/" . add_thumb($img, "") . "'><br/>";
																}
															}
														}
													};

													?>

												</td>
												<td><?php echo $key->name; ?></td>
												<td><?php echo $key->email; ?></td>
												<td><?php echo $key->pay; ?></td>
												<td>
													<?php
													$currencyType = $currency;
													if (isset($key->currency_type) && $key->currency_type != null & $key->currency_type != '') {
														$currencyType = $key->currency_type;
													}
													echo numfmt_format_currency($fmt, $key->totalPrice, $currencyType);
													// echo numfmt_format_currency($fmt, $key->totalPrice, $currency);
													?>
												</td>
												<td><?php echo $key->tele; ?></td>
												<td><?php echo $key->address; ?></td>
												<td><?php echo $key->datetime; ?></td>
												<td><?php echo $key->shipping > 0 ? get_info('shipping', $key->shipping, "title") : "-"; ?></td>
												<td><?php echo $key->order_status; ?></td>
												<td>

													<a href="<?php echo base_url("admin/edit_orderInfo/$key->id"); ?>" class="btn btn-primary btn-circle btn-sm"><i class="fas fa-edit"></i></a>

													<a href="<?php echo base_url("admin/customerInvoice/$key->id"); ?>" class="btn btn-info btn-circle btn-sm"><i class="fas fa-eye"></i></a>

													<a href="<?php echo base_url("admin/delt/orders/$key->id/ordersInfo"); ?>" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a>

												</td>
											</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>

				</div>
				<!-- /.container-fluid -->



			<?php } ?>

			</div>


			<?php include_once 'inc/footer.php'; ?>

			<script>
				jQuery.extend(jQuery.fn.dataTableExt.oSort, {
					"currency-pre": function(a) {
						a = (a === "-") ? 0 : a.replace(/[^\d\-\.]/g, "");
						return parseFloat(a);
					},

					"currency-asc": function(a, b) {
						return a - b;
					},

					"currency-desc": function(a, b) {
						return b - a;
					}
				});

				$(document).ready(function() {

					$('#summernote2').summernote({
						height: 150, //set editable area's height
						toolbar: [
							['style', ['style']],
							['font', ['bold', 'underline', 'clear']],
							['fontname', ['fontname']],
							['fontsize', ['fontsize']],
							['fontsizeunit', ['fontsizeunit']],
							['strikethrough', ['strikethrough', 'superscript', 'subscript']],
							['color', ['color']],
							['para', ['ul', 'ol', 'paragraph']],
							['table', ['table']],
							['insert', ['link', 'picture', 'video']],
							['view', ['fullscreen', 'codeview', 'help']],
							['height', ['height']],
							['image', ['resizeFull', 'resizeHalf', 'resizeQuarter', 'resizeNone']],
							['float', ['floatLeft', 'floatRight', 'floatNone']],
							['remove', ['removeMedia']],
							['link', ['linkDialogShow', 'unlink']],
							['insert', ['emoji']],
							['tool', ['undo', 'redo', 'codeview']],



						],


					});
					$('#dataTable').DataTable({
						"order": [
							[0, "desc"]
						],
						"columns": [
							null,
							null,
							null,
							null,
							null,
							null,
							null,
							null,
							null,
							null,
							{
								"orderable": false
							},
						],
					});
				});
			</script>