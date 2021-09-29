<?php include_once 'inc/header.php'; ?>
<style>
	label {
		font-weight: 600;
	}
</style>
<div id="content-wrapper" class="d-flex flex-column">
	<!-- Main Content -->
	<div id="content">
		<?php include_once 'inc/navbar.php'; ?>
		<div class="container-fluid">
			<!-- Page Heading -->
			<h1 class="h3 mb-2 text-gray-800"><?=lang("admin_h131");?></h1>
			
			<?php foreach($email as $key){ ?>
			<!-- DataTales Example -->
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary"><?=lang("admin_h130");?></h6>
				</div>
				<div class="card-body">
					
					<?php if(isset($msg)){ ?>
					<div class="alert alert-success"><?php echo lang("admin_h54"); ?></div>
					<?php } ?>
					<fieldset>
						<?php echo form_open_multipart("",array("class" => "form-horizontal")); ?>
						<div class="row">
							
							<div class="col-md-6">
								
								
								<div class="form-group">
									<label for="inp4"><?php echo lang("admin_h69") ?></label>
									<!-- <div id="editor"></div> -->
									<textarea class="summernote" name="ref_email"><?php echo $key->ref_email; ?></textarea>
								</div>
								<div class="form-group">
									<label for="inp4"><?php echo lang("admin_h70") ?></label>
									<!-- <div id="editor"></div> -->
									<textarea class="summernote" name="f_email"><?php echo $key->f_email; ?></textarea>
								</div>
							</div>
							<div class="col-lg-6">
								
								<div class="form-group">
									<label for="inp4"><?php echo lang("admin_h68") ?></label>
									<!-- <div id="editor"></div> -->
									<textarea class="summernote" name="p_email"><?php echo $key->p_email; ?></textarea>
								</div>
								
								<div class="form-group">
									<label for="inp4"><?php echo lang("admin_h71") ?></label>
									<!-- <div id="editor"></div> -->
									<textarea class="summernote" name="pr_email"><?php echo $key->pr_email; ?></textarea>
								</div>
							</div>
							<div class="col-lg-6" style = "display:none">
								
								<div class="form-group">
									<label for="inp4"><?php echo lang("admin_h192") ?></label>
									<!-- <div id="editor"></div> -->
									<input type="text" name="et_learn_more_link" value="<?php echo $key->et_learn_more_link; ?>" class="form-control" placeholder="Learn more link">
									<!-- <input class="summernote" name="et_learn_more_link"><?php echo $key->et_learn_more_link; ?> -->
								</div>
							</div>
						</div>
						
						
						<button type="submit" name="test" class="btn btn-primary"><?=lang("admin_h120");?></button>
						<?php echo form_close(); ?>
					</fieldset>
				</div>
			</div>
			<?php } ?>
		</div>
		<!-- /.container-fluid -->
	</div>
	<?php include_once 'inc/footer.php'; ?>
	