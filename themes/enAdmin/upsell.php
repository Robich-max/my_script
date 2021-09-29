<?php include_once 'inc/header.php'; ?>

<div id="content-wrapper" class="d-flex flex-column">

	<!-- Main Content -->
	<div id="content">

		<?php include_once 'inc/navbar.php'; ?>

		<?php if ($tp == "add") { ?>

			<div class="container-fluid">

				<!-- Page Heading -->
				<h1 class="h3 mb-2 text-gray-800">Upsell</h1>

				<!-- DataTales Example -->
				<div class="card shadow mb-4">
					<div class="card-header py-3">
						<h6 class="m-0 font-weight-bold text-primary">Add upsell to <?php echo get_info("products", $id, "title"); ?></h6>
					</div>
					<div class="card-body">

						<?php if (isset($msg)) { ?>
							<div class="alert alert-success"><?php echo lang("admin_h54"); ?></div>
						<?php } ?>

						<fieldset>

							<?php echo form_open_multipart("", array("class" => "form-horizontal")); ?>


							<div class="form-group">
								<label for="inp5">Product</label>
								<select id="" class="form-control" name="showProduct">
									<?php foreach ($products as $c) { ?>
										<option value="<?php echo $c->id; ?>"><?php echo $c->title; ?></option>
									<?php } ?>
								</select>
								<small id="emailHelp" class="form-text text-muted">Product</small>
							</div>


							<div class="form-group">
								<label for="inp1">Product Qty</label>
								<input type="number" name="qty" class="form-control-file">
							</div>


							<div class="form-group">
								<label for="inp1">Product Single Price</label>
								<input type="number" name="price" class="form-control-file">
							</div>

							<button type="submit" class="btn btn-primary" name="test">Submit</button>
							<?php echo form_close(); ?>

						</fieldset>
						<br />
						<a href="javascript:window.history.go(-1);" class="btn btn-primary">Previous</a>


					</div>
				</div>

			</div>
			<!-- /.container-fluid -->


		<?php } else { ?>




			<div class="container-fluid">

				<!-- Page Heading -->
				<h1 class="h3 mb-2 text-gray-800">Upsell</h1>

				<!-- DataTales Example -->
				<div class="card shadow mb-4">
					<div class="card-header py-3">

						<a href="<?php echo base_url("admin/add_upsell/$id"); ?>" class="btn btn-success btn-icon-split btn-sm float-right">
							<span class="icon text-white-50">
								<i class="fas fa-plus"></i>
							</span>
							<span class="text">Add new upsell</span>
						</a>

						<h6 class="m-0 font-weight-bold text-primary">Upselles of <?php echo get_info("products", $id, "title"); ?></h6>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>#</th>
										<th>Product</th>
										<th><?php echo lang("admin_h30"); ?></th>
									</tr>
								</thead>
								<tfoot>
									<tr>
										<th>#</th>
										<th>Product</th>
										<th><?php echo lang("admin_h30"); ?></th>
									</tr>
								</tfoot>
								<tbody>
									<?php foreach ($cat as $key) {  ?>
										<tr>
											<td><?php echo $key->id; ?></td>
											<td><?php echo get_info("products", $key->showProduct, "title"); ?></td>
											<td>
												<a href="<?php echo base_url("admin/delt/upsell/$key->id/upsell/$id"); ?>" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a>
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