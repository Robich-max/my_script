<?php include_once 'inc/header.php'; ?>
<style type="text/css" media="screen">
	label {
font-weight: 600;
}
.color {
width: 20%;
}
</style>
<div id="content-wrapper" class="d-flex flex-column">
	<!-- Main Content -->
	<div id="content">
		<?php include_once 'inc/navbar.php'; ?>
		<div class="container-fluid">
			<?php foreach($email as $key){ ?>
			<!-- Page Heading -->
			<h1 class="h3 mb-2 text-gray-800">Email Config Setting</h1>
			<?php echo form_open_multipart("",array("class" => "form-horizontal")); ?>
			<!-- DataTales Example -->
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Email Config Setting</h6>
				</div>
				
				<div class="card-body">
					
					<fieldset>
						<div class="row">
							<div class="col-md-6">
								
								<div class="form-group">
									<label for="inp1">Store Name </label>
									<input type="text" name="store_name" value="<?php echo $key->store_name; ?>" class="form-control" placeholder="Enter Store Name">
								</div>
								<div class="form-group">
									<label for="inp1">Admin Name </label>
									<input type="text" name="admin_name" value="<?php echo $key->admin_name; ?>" class="form-control" placeholder="Enter Admin Name">
								</div>
								
								<div class="form-group">
									<label for="inp1">Protocol </label>
									<input type="text" name="protocol" value="<?php echo $key->protocol; ?>" class="form-control" placeholder="Enter protocol">
								</div>
								
								
								
								<div class="form-group">
									<label for="inp1">Smtp Host</label>
									<input type="text" name="smtp_host" value="<?php echo $key->smtp_host; ?>" class="form-control">
								</div>
								
								<div class="form-group">
									<label for="inp1">Smtp User</label>
									<input type="text" name="smtp_user" value="<?php echo $key->smtp_user; ?>" class="form-control">
								</div>
								
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="inp1">Smtp Pass</label>
									<input type="text" name="smtp_pass" value="<?php echo $key->smtp_pass; ?>" class="form-control">
								</div>
								<div class="form-group">
									<label for="inp1">Smtp Port</label>
									<input type="number" name="smtp_port" value="<?php echo $key->smtp_port; ?>" class="form-control">
								</div>
								
								
								
								
								
							</div>
						</div>
						
						
						
						
					</fieldset>
				</div>
				
				<div class="card-footer">
					
					<div class="float-right">
						
						<button class="button btn btn-success" type="submit"><?=lang("admin_h92");?></button>
					</div>
				</div>
				
			</div>
			<?php echo form_close(); ?>
			<?php } ?>
			
		</div>
		<!-- /.container-fluid -->
	</div>
	<?php include_once 'inc/footer.php'; ?>