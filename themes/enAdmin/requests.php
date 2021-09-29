<?php include_once 'inc/header.php'; ?>

<div id="content-wrapper" class="d-flex flex-column">

	<!-- Main Content -->
	<div id="content">

		<?php include_once 'inc/navbar.php'; ?>

			<div class="container-fluid">

				<!-- Page Heading -->
				<h1 class="h3 mb-2 text-gray-800"><?=lang("admin_h4");?></h1>

				<!-- DataTales Example -->
				<div class="card shadow mb-4">
					<div class="card-header py-3">
						<h6 class="m-0 font-weight-bold text-primary"><?=lang("admin_h143");?></h6>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>#</th>
										<th><?php echo lang("admin_h1"); ?></th>
										<th><?php echo lang("admin_h39"); ?></th>
										<th><?php echo lang("admin_h40"); ?></th>
										<th><?php echo lang("admin_h41"); ?></th>
										<th>Payment</th>
										<th><?php echo lang("admin_h42"); ?></th>
										<th><?php echo lang("admin_h43"); ?></th>
										<th>Shipping</th>
										<th><?php echo lang("admin_h44"); ?></th>
										<th><?php echo lang("admin_h30"); ?></th>
									</tr>
								</thead>
								<tfoot>
									<tr>
										<th>#</th>
										<th><?php echo lang("admin_h1"); ?></th>
										<th><?php echo lang("admin_h39"); ?></th>
										<th><?php echo lang("admin_h40"); ?></th>
										<th><?php echo lang("admin_h41"); ?></th>
										<th>Payment</th>
										<th><?php echo lang("admin_h42"); ?></th>
										<th><?php echo lang("admin_h43"); ?></th>
										<th>Shipping</th>
										<th><?php echo lang("admin_h44"); ?></th>
										<th><?php echo lang("admin_h30"); ?></th>
									</tr>
								</tfoot>
								<tbody>
									<?php foreach($requests as $key) {  ?>
									<tr>
										<td><span class="badge"><?php echo $key->id; ?></span></td>
										<td><?php $pcs = json_decode($key->products, TRUE); foreach($pcs as $q) { echo get_info("products", $q['id'], "title")." / ".lang("admin_h45")." : <b>".$q['q']."</b><br />"; 
												if(isset($q['options']) && $q['options'] != null)
												{
													$op = json_decode($q['options'], TRUE);
													if(!is_null($op)){
														foreach ($op as $key1 => $value1) {
															echo " -",base64_decode(hex2bin($key1)), " : ", $value1;
														}

														echo "<br>";
													}
												}
											}; ?>
											
										</td>
										<td><?php echo $key->name; ?></td>
										<td><?php echo $key->tele; ?></td>
										<td><?php echo $key->city; ?></td>
										<td><?php echo $key->pay; ?></td>
										<td><?php echo date("Y-m-d H:i", $key->date); ?></td>
										<td><?php echo numfmt_format_currency($fmt, $key->totalPrice, $currency); ?></td>
										<td><?php echo $key->shipping > 0 ? get_info('shipping', $key->shipping, "title") : "-"; ?></td>
										<td><?php echo status($key->status); ?></td>
										<td>
											
											<!-- <a href="<?php echo base_url("admin/detiales/$key->id"); ?>" class="btn btn-success btn-circle btn-sm"><i class="fas fa-check"></i></a> -->
											<a href="<?php echo base_url("admin/detiales/$key->id"); ?>" class="btn btn-secondary btn-circle btn-sm"><i class="fas fa-eye"></i></a>
											<a href="<?php echo base_url("admin/delt/orders/$key->id/orders"); ?>" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a>

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


</div>


<?php include_once 'inc/footer.php'; ?>

<script>

	jQuery.extend( jQuery.fn.dataTableExt.oSort, {
		"currency-pre": function ( a ) {
			a = (a==="-") ? 0 : a.replace( /[^\d\-\.]/g, "" );
			return parseFloat( a );
		},

		"currency-asc": function ( a, b ) {
			return a - b;
		},

		"currency-desc": function ( a, b ) {
			return b - a;
		}
	} );
	
	$(document).ready(function() {
		$('#dataTable').DataTable({
			"order": [[ 0, "desc" ]],
			"columns": [
				null,
				null,
				null,
				null,
				null,
				null,
				{ type: 'currency', targets: 0 },
				null,
				null,
				{ "orderable": false },
			],
		});
	});


</script>