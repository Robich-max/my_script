<?php include_once 'inc/header.php'; ?>
<style type="text/css" media="screen">
	label {

    font-weight: 600;
}
.color {
   width: 20%;
}
</style>

<script src="<?php echo base_url();?>/assets/js/tinymce.min.js" referrerpolicy="origin"></script>
<!--
Copyright (c) 2003-2020, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
-->


<div id="content-wrapper" class="d-flex flex-column">

	<!-- Main Content -->
	<div id="content">

		<?php include_once 'inc/navbar.php'; ?>

			<div class="container-fluid">


					<?php foreach($setting as $key){ ?>

					<!-- Page Heading -->
					<h1 class="h3 mb-2 text-gray-800"><?=lang("admin_h15");?></h1>
					<?php echo form_open_multipart("",array("class" => "form-horizontal")); ?>
					<!-- DataTales Example -->
					<div class="card shadow mb-4">
						<div class="card-header py-3">
							<h6 class="m-0 font-weight-bold text-primary"><?=lang("admin_h148");?></h6>
						</div>
						
						<div class="card-body">
							
							<fieldset>

								<div class="row">
									<div class="col-md-6">
										
<div class="form-group">
									<label for="inp1">Height </label>
									<input type="text" name="height" value="<?php echo $key->height; ?>" class="form-control" placeholder="Enter height">
								</div>
								
								<div class="form-group">
									<label for="inp1">Background Color </label>
									<input type="color" name="bg_color" value="<?php echo $key->bg_color; ?>" class="form-control color">
								</div>
								
								<div class="form-group">
									<label for="inp1">Font Color </label>
									<input type="color" name="color" value="<?php echo $key->color; ?>" class="form-control color">
								</div>
								
								<div class="form-group">
									<label for="inp1">Font Name</label>
									<input type="text" name="font" value="<?php echo $key->font; ?>" class="form-control">
								</div>
								
								<div class="form-group">
									<label for="inp1">Font Google Link </label>
									<input type="text" name="font_link" value="<?php echo $key->font_link; ?>" class="form-control">
								</div>

																		
<div class="form-group">
									<label for="inp1">Text Font Size </label>
									<input type="text" name="font_size" value="<?php echo $key->font_size; ?>" class="form-control">
								</div>

									</div>


									<div class="col-md-6">

								
								<div class="form-group">
									<label for="inp1">Icon Font Size </label>
									<input type="text" name="icon_font_size" value="<?php echo $key->icon_font_size; ?>" class="form-control">
								</div>
								
								
								<div class="form-group">
									<label for="inp1"><?=lang("admin_h150");?> </label>
									<input type="text" name="teles" value="<?php echo $key->teles; ?>" class="form-control" placeholder="Phone numbers separated by ;">
								</div>
								
								<div class="form-group">
									<label for="inp1"><?=lang("admin_h130");?> </label>
									<input type="text" name="whs" value="<?php echo $key->whs; ?>" class="form-control" placeholder="Whatsapp numbers separated by ;">
								</div>
								
							


						
								
								<div class="form-group">
									<label for="inp1"><?=lang("admin_h159");?> </label>
									<input type="text" name="fb" value="<?php echo $key->fb; ?>" class="form-control" placeholder="Facebook link">
								</div>
								
								<div class="form-group">
									<label for="inp1"><?=lang("admin_h160");?> </label>
									<input type="text" name="ig" value="<?php echo $key->ig; ?>" class="form-control" placeholder="Instagram link">
								</div>
								
								<div class="form-group">
									<label for="inp1"><?=lang("admin_h161");?> </label>
									<input type="text" name="tw" value="<?php echo $key->tw; ?>" class="form-control" placeholder="Twitter link">
								</div>
								
						

									</div>
								</div>

								
								
								
								

							</fieldset>

						</div>
						
						<div class="card-footer">
							
							<div class="float-right">
								
								<button class="button btn btn-success" name="test" type="submit"><?=lang("admin_h92");?></button>

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