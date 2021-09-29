<?php include_once 'inc/header.php'; ?>
<style>

	label {

		font-weight: 600;
	}
</style>

	<script src="<?php echo base_url();?>/assets/js/tinymce.min.js" referrerpolicy="origin"></script>

<div id="content-wrapper" class="d-flex flex-column">

	<!-- Main Content -->
	<div id="content">

		<?php include_once 'inc/navbar.php'; ?>

		<div class="container-fluid">


			<?php foreach($setting as $key){ ?>

				<!-- Page Heading -->
				<h1 class="h3 mb-2 text-gray-800">Settings</h1>
				<?php echo form_open_multipart("",array("class" => "form-horizontal")); ?>
				<!-- DataTales Example -->
				<div class="card shadow mb-4">
					<div class="card-header py-3">
						<h6 class="m-0 font-weight-bold text-primary">Thank you page</h6>
					</div>
					
					<div class="card-body">
						
						<fieldset>
							<div class="row">
								
								<div class="col-md-6">
									<div class="form-group">
										<label for="inp1">Head line </label>
										<input type="text" name="title" value="<?php echo $key->title; ?>" class="form-control" placeholder="Head line">
									</div>

									<div class="form-group">
										<label for="inp1">Text</label>
										<textarea id="summernote" name="content"><?php echo $key->content; ?></textarea>
									</div>
								</div>
								<div class="col-md-6">
									
									<div class="form-group">
										<label for="inp1">Question </label>
										<input type="text" name="question" value="<?php echo $key->question; ?>" class="form-control" placeholder="Question">
									</div>
									
									<div class="form-group">
										<label for="inp1">Options separated by | </label>
										<input type="text" name="options" value="<?php echo $key->options; ?>" class="form-control" placeholder="Options separated by |">
									</div>
								</div>
							</div>
							
							
							
							

						</fieldset>

					</div>
					
					<div class="card-footer">
						
						<div class="float-right">
							
							<button class="button btn btn-success" name="test" type="submit">Update</button>

						</div>

					</div>

					

				</div>

				<?php echo form_close(); ?>


			<?php } ?>
			


		</div>
		<!-- /.container-fluid -->


	</div>


	<?php include_once 'inc/footer.php'; ?>

<script>
	tinymce.init({
	selector: 'textarea',
	plugins: [
	'advlist autolink lists link image charmap print preview anchor',
	'searchreplace visualblocks advcode fullscreen',
	'insertdatetime media table contextmenu powerpaste '
	],
	
	menubar: true,
	toolbar: 'code',
	toolbar_mode: 'floating',
	content_css: [
	'//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
	'<?php echo base_url();?>assets/css/codepen.min.css']
	});
	
	</script>