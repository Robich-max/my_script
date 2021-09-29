<?php include_once 'inc/header.php'; ?>
<div id="content-wrapper" class="d-flex flex-column">
	<!-- Main Content -->
	<div id="content">
		<?php include_once 'inc/navbar.php'; ?>
		<div class="container-fluid">
			<!-- Page Heading -->
			<h1 class="h3 mb-2 text-gray-800"><?=lang("admin_h133");?></h1>
			<!-- DataTales Example -->
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary"><?=lang("admin_h134");?></h6>
				</div>
				<div class="card-body">
					
					<?php if(isset($msg)) { ?>
					
					<div class="alert alert-success"><?=lang("admin_h135");?> .</div>
					<?php } ?>
					<?php echo form_open_multipart(""); ?>
					
					<label for=""> <?=lang("admin_h136");?> </label>
					<input type="file" class="form-control-file" name="file" accept=".csv">
					<br>
					<button type="submit" name="test" class="btn btn-success"><?=lang("admin_h133");?></button>
					<?php echo form_close(); ?>
				</div>
			</div>
		</div>
		<!-- /.container-fluid -->
	</div>
	<?php include_once 'inc/footer.php'; ?>