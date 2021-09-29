<?php include_once 'inc/header.php'; ?>
<div id="content-wrapper" class="d-flex flex-column">
	<!-- Main Content -->
	<div id="content">
		<?php include_once 'inc/navbar.php'; ?>
		
		<div class="container-fluid">
			<?php if($this->session->flashdata('message')){ ?>
			
			<div class="alert alert-success"><?php echo $this->session->flashdata('message'); ?></div>
			<?php } ?>
			<!-- Page Heading -->
			<h1 class="h3 mb-2 text-gray-800">Customer Info</h1>
			<?php if($info){?>
			<!-- DataTales Example -->
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Customer All Information</h6>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered"  width="100%" cellspacing="0">
							<thead>
								<tr>
									<th>Field Name</th>
									<th>Details</th>
									
								</tr>
							</thead>
							
							<tbody>
								
								<tr>
									<td style="font-weight:bold;">Customer Name</td>
									<td><?php echo $info->name; ?></td>
									
								</tr>
								<tr>
									<td style="font-weight:bold;">Customer Email</td>
									<td><?php echo $info->email; ?></td>
									
								</tr>
								<tr>
									<td style="font-weight:bold;">Mobile Number</td>
									<td><?php echo $info->tele; ?></td>
									
								</tr>
								<tr>
									<td style="font-weight:bold;">Country</td>
									<td><?php echo $info->country; ?></td>
									
								</tr>
								<tr>
									<td style="font-weight:bold;">Address</td>
									<td><?php echo $info->address; ?></td>
									
								</tr>
								<tr>
									<td style="font-weight:bold;">City</td>
									<td><?php echo $info->city; ?></td>
									
								</tr>
								<tr>
									<td style="font-weight:bold;">State</td>
									<td><?php echo $info->state; ?></td>
									
								</tr>
								<tr>
									<td style="font-weight:bold;">zip code</td>
									<td><?php echo $info->zipcode; ?></td>
									
								</tr>
								
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<?php }?>
			<!-- DataTales Example -->
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary"><?=lang("admin_h91");?> </h6>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th>#</th>
									<th>Order Id</th>
									<th>Order Date</th>
									<th>Order Amount</th>
									<th>Order Pay Info</th>
									
									<th><?php echo lang("admin_h30"); ?></th>
								</tr>
							</thead>
							<tfoot>
							<tr>
								<th>#</th>
								<th>Order Id</th>
								<th>Order Date</th>
								<th>Order Amount</th>
								<th>Order Pay Info</th>
								<th><?php echo lang("admin_h30"); ?></th>
							</tr>
							</tfoot>
							<tbody>
								<?php foreach($customers as $key) { ?>
								<tr>
									<td><?php echo $key->id; ?></td>
									<td><?php echo $key->order_id; ?></td>
									<td><?php echo $key->datetime; ?></td>
									<td><?php echo $key->totalPrice; ?></td>
									<td><?php echo $key->pay; ?></td>
									
									
									<td>
										
										<a href="<?php echo base_url("admin/customerInvoice/$key->id"); ?>" class="btn btn-info btn-circle btn-sm"><i class="fas fa-eye"></i></a>
										
										<a href="<?php echo base_url("admin/delt/orders/$key->id/customersView/$info->id"); ?>" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a>
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
	
	$(document).ready(function() {
	
		$('#dataTable').DataTable({
			"order": [[ 0, "desc" ]],
			"columns": [
			null,
			null,
			null,
			null,
			null,
		
			{ "orderable": false },
			],
		});
	});
	</script>