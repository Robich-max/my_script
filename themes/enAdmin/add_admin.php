<?php include_once 'inc/header.php'; ?>
<div id="content-wrapper" class="d-flex flex-column">
	<!-- Main Content -->
	<div id="content">
		<?php include_once 'inc/navbar.php'; ?>
		<div class="container-fluid">
			<!-- Page Heading -->
			<h1 class="h3 mb-2 text-gray-800"><?=lang("admin_h73");?></h1>
			<?php echo form_open_multipart("",array("class" => "form-horizontal")); ?>
			<!-- DataTales Example -->
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary"><?=lang("admin_h55");?></h6>
				</div>
				
				<div class="card-body">
					<?php if(isset($msg)){ ?>
					<div class="alert alert-success"><?=lang("admin_h74");?></div>
					<?php } ?>
					
					<fieldset>
						
						<div class="form-group">
							<label for="inp1"><?=lang("admin_h75");?> </label>
							<input type="text" name="username" class="form-control" id="inp1" aria-describedby="emailHelp" placeholder="Username">
							<small id="emailHelp" class="form-text text-muted"><?=lang("admin_h76");?> </small>
						</div>
						
						<div class="form-group">
							<label for="inp1">Email </label>
							<input type="email" name="email" class="form-control" id="inp1" aria-describedby="emailHelp" placeholder="Email">
							<small id="emailHelp" class="form-text text-muted">Email </small>
						</div>
						
						<div class="form-group">
							<label for="inp1"><?=lang("admin_h77");?> </label>
							<input type="password" name="password" class="form-control" id="inp1" aria-describedby="emailHelp" placeholder="Password">
							<small id="emailHelp" class="form-text text-muted"><?=lang("admin_h78");?> </small>
						</div>
						
					</fieldset>
				</div>
				
				<div class="card-footer">
					
					<div class="float-right">
						
						<button class="button btn btn-success" name="test" type="submit"><?=lang("admin_h79");?></button>
					</div>
				</div>
				
			</div>
			<?php echo form_close(); ?>
			
		</div>
		<!-- /.container-fluid -->
	</div>
	<?php include_once 'inc/footer.php'; ?>