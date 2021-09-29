<?php include_once 'inc/header.php'; ?>
<link href="<?php echo base_url(); ?>assets/css/bootstrap-toggle.min.css" rel="stylesheet">
<div id="content-wrapper" class="d-flex flex-column">
	<!-- Main Content -->
	<div id="content">
		<?php include_once 'inc/navbar.php'; ?>
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary">Customer All Information</h6>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<form action='<?php echo base_url("web/allCustomerEmail/"); ?>' method="POST">
						
						<div>
						    {{customer_name}}<br>
						    {{customer_email}}<br>
						    {{admin_name}}<br>
						    {{admin_email}}<br>
						    {{store_name}}<br>
						</div>
						<div class="col-md-12">
							<div class="single-input">
								<label for="name">Subject:</label>
								<input type="text" class="form-control" placeholder="Full Name" name="subject" required>
							</div>
						</div>
						
						
						<div class="col-md-12">
							<div class="single-input">
								<label for="number">Message</label>
								<textarea class="form-control" rows="3" name="message"></textarea>
							</div>
						</div>
						<br>
						<br>
						<div class="col-md-12 modal-btn-cls row">
							<div class="single-input col-md-2">
								<button type="submit" name = "btn_sub" class="btn btn-info">Submit</button>
							</div>
							<div class="single-input col-md-2">
								<button type="submit" name="btn_subscriber" class="btn btn-danger">Subscribers</button>
							</div>
							
						</div>
						
					</form>
				</div>
			</div>
		</div>
		<?php if($tp == "edit"){ ?>
		
		<?php foreach($customers as $key) : ?>
		<div class="container-fluid">
			<?php echo form_open(""); ?>
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Customer Info</h6>
				</div>
				
				<div class="card-body">
					
					<?php if(isset($msg)){ ?>
					<div class="alert alert-success">Customer Information Update successfully</div>
					<?php } ?>
					<fieldset>
						<?php echo form_open_multipart("",array("class" => "form-horizontal")); ?>
						<div class="row">
							
							<div class="col-lg-6">
								
								<div class="form-group">
									<label for="inp1">Customer Name</label>
									<input type="text" class="form-control" id="inp1" aria-describedby="name" placeholder="Customer Name" name="title" value="<?php echo $key->name; ?>">
									
								</div>
								<div class="form-group">
									<label for="inp2">Customer Email</label>
									<input type="email" class="form-control" id="inp2" aria-describedby="email" placeholder="Email" name="email" value="<?php echo $key->email; ?>">
									
								</div>
								<div class="form-group">
									<label for="inp2">Customer Phone</label>
									<input type="number" class="form-control" id="inp2" aria-describedby="email" placeholder="Phone number" name="tele" value="<?php echo $key->tele; ?>">
									
								</div>
							</div>
							<div class="col-lg-6">
								
								<div class="form-group">
									<label for="inp2">Customer address</label>
									<input type="text" class="form-control" id="inp2" aria-describedby="address"  name="address" value="<?php echo $key->address; ?>">
									
								</div>
								<div class="form-group">
									<label for="inp2">Customer city</label>
									<input type="text" class="form-control" id="inp2" aria-describedby="address" name="city" value="<?php echo $key->city; ?>">
									
								</div>
								<div class="form-group">
									<label for="inp2">Customer zipcode</label>
									<input type="text" class="form-control" id="inp2" aria-describedby="address" name="zipcode" value="<?php echo $key->zipcode; ?>">
									
								</div>
								
								
							</div>
						</div>
						
						
						
						<button type="submit" class="btn btn-primary">Submit</button>
						<?php echo form_close(); ?>
					</fieldset>
				</div>
			</div>
			<?php echo form_close(); ?>
		</div>
		<!-- /.container-fluid -->
		<?php endforeach; ?>
		<?php }else { ?>
		<div class="container-fluid">
			<?php if($this->session->flashdata('message')){ ?>
			
			<div class="alert alert-success"><?php echo $this->session->flashdata('message'); ?></div>
			<?php } ?>
			<!-- Page Heading -->
			<h1 class="h3 mb-2 text-gray-800">Customers Info</h1>
			<!-- DataTales Example -->
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">List Of Customers </h6>
				</div>
				<div class="card-header py-3">
					<a class="collapse-item btn btn-info" href="<?php echo base_url("admin/customerCsv"); ?>">Export csv</a>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th>#</th>
									<th>Customer Name</th>
									<th>Email</th>
									<th>Number</th>
									<th>Address</th>
									<th><?php echo lang("admin_h30"); ?></th>
								</tr>
							</thead>
							<tfoot>
							<tr>
								<th>#</th>
								<th>Customer Name</th>
								<th>Email</th>
								<th>Number</th>
								<th>Address</th>
								
								<th><?php echo lang("admin_h30"); ?></th>
							</tr>
							</tfoot>
							<tbody>
								<?php foreach($customers as $key) { ?>
								<tr>
									<td><?php echo $key->id; ?></td>
									<td><?php echo $key->name; ?></td>
									<td><?php echo $key->email; ?></td>
									<td><?php echo $key->tele; ?></td>
									<td><?php echo $key->address; ?></td>
									
									
									
									
									<td>
										<a href="<?php echo base_url("admin/edit_customers/$key->id"); ?>" class="btn btn-primary btn-circle btn-sm"><i class="fas fa-edit"></i></a>
										<a href="<?php echo base_url("admin/customersView/$key->id"); ?>" class="btn btn-info btn-circle btn-sm"><i class="fas fa-eye"></i></a>
										<a class="btn btn-warning btn-circle btn-sm"  data-toggle="modal" data-target="#myModal<?php echo $key->id;?>"><i class="fas fa-envelope"></i></a>
										
										<a href="<?php echo base_url("admin/delt/orders/$key->id/customers"); ?>" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a>
									</td>
								</tr>
								<div class="modal fade" id="myModal<?php echo $key->id;?>" role="dialog">
									<div class="modal-dialog">
										
										<!-- Modal content-->
										<div class="modal-content">
											<div class="modal-header">
												<h6>Email Sent</h6>
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												
											</div>
											<div class="modal-body">
												<form action='<?php echo base_url("web/customerEmail/"); ?>' method="POST">
													<div class="col-md-12">
														<div class="single-input">
															<label for="name">Subject:</label>
															<input type="text" class="form-control" placeholder="Full Name" name="subject" required>
														</div>
													</div>
													
													<div class="col-md-12">
														<div class="single-input">
															<label for="email">E-mail:</label>
															<input type="email" class="form-control" value="<?php echo $key->email; ?>" placeholder="Enter your E-mail" name="email">
														</div>
													</div>
													<div class="col-md-12">
														<div class="single-input">
															<label for="number">Message</label>
															<textarea class="form-control" rows="3" name="message"></textarea>
														</div>
													</div>
													<br>
													<br>
													<div class="col-md-12 modal-btn-cls">
														<div class="single-input">
															<button type="submit" class="btn btn-info">Submit</button>
														</div>
													</div>
													
												</form>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>
										
									</div>
								</div>
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
	<?php if($tp  == "add" Or $tp == "edit"){?>
	<?php }else{?>
	<!-- 		<script src="<?php echo base_url(); ?>assets/js/jquery1.min.js"></script>
	-->
	<script src="<?php echo base_url(); ?>assets/js/bootstrap-toggle.min.js"></script>
	<?php }?>
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
	<script>
			$('.radio').on('change', function () {
				console.log('Checked value =', $(this).val())
				vals = $(this).val();
				alert('Are you sure?');
				
				$.ajax({
					data: "id=" + vals,
					type: 'post',
					dataType: 'html',
	url: '<?php echo base_url("admin/CusActive"); ?>',
	success : function(re) {
	//alert(re);
	location.reload();
	}
	});
	
	})
	</script>