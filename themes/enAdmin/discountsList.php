<?php include_once 'inc/header.php'; ?>

<div id="content-wrapper" class="d-flex flex-column">

	<!-- Main Content -->
	<div id="content">

		<?php include_once 'inc/navbar.php'; ?>
		
			<div class="container-fluid">

				<!-- Page Heading -->
				<h1 class="h3 mb-2 text-gray-800">Discounts</h1>

				<!-- DataTales Example -->
				<div class="card shadow mb-4">
					<div class="card-header py-3">
						<h6 class="m-0 font-weight-bold text-primary">List coupons</h6>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>#</th>
										<th>Discount Code</th>
										<th>Discount Type</th>
										<th>Used</th>
										<th>Discount value</th>
										<th>Start Date time</th>
										<th>End Date time</th>
										<th><?php echo lang("admin_h30"); ?></th>
									</tr>
								</thead>
								<tfoot>
										<th>#</th>
										<th>Discount Code</th>
										<th>Discount Type</th>
										<th>Used</th>
										<th>Discount value</th>
										<th>Start Date time</th>
										<th>End Date time</th>
										<th><?php echo lang("admin_h30"); ?></th>
								</tfoot>
								<tbody>
									<?php foreach($cat as $key) {  
									$symbl = "";
									 if($key->percnt_type == "percentage"){ $symbl = "%"; } 
									 if($key->percnt_type == "Fixed amount"){  $symbl =  "€"; }
									
									?>
									<tr>
										<td><?php echo $key->id; ?></td>
										<td><?php echo $key->discount_code; ?></td>
										<td><?php echo $key->percnt_type; ?></td>
										<td><?php echo $this->m_p->get_num("orders", array("coupon" => $key->discount_code)); ?></td>
										<td><?php echo $key->discount_value ." ". $symbl; ?> </td>
										<td><?php echo $key->start_date_time; ?></td>
										<td><?php echo $key->end_date_time; ?></td>
										
										<td>
											<a href="<?php echo base_url("admin/update_discount/$key->id"); ?>" class="btn btn-primary btn-circle btn-sm"><i class="fas fa-edit"></i></a>
											<a style="" href="<?php echo base_url("admin/delt/discounts_coupon/$key->id/discounts"); ?>" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a>
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