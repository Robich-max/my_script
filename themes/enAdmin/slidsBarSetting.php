<?php include_once 'inc/header.php'; ?>


<style type="text/css" media="screen">
	.color {
   width: 20%;
}
</style>
<div id="content-wrapper" class="d-flex flex-column">

	<!-- Main Content -->
	<div id="content">

		<?php include_once 'inc/navbar.php'; ?>

			<div class="container-fluid">


					<?php foreach($setting as $key){ ?>

					<!-- Page Heading -->
					<h1 class="h3 mb-2 text-gray-800">Slids bar Setting</h1>
					<?php echo form_open_multipart("",array("class" => "form-horizontal")); ?>
					<!-- DataTales Example -->
					<div class="card shadow mb-4">
						<div class="card-header py-3">
							<h6 class="m-0 font-weight-bold text-primary">Slids bar setting</h6>
						</div>
						
						<div class="card-body">
							
							<fieldset>

<div class="row" >
	<div class="col-md-3"></div>
<div class="col-md-6">
	<div class="form-group">
									<label for="inp1">Slids Bar Height</label>
									<input type="text" name="slids_br_height" value="<?php echo $key->slids_br_height; ?>" class="form-control" placeholder="Enter height">
								</div>
								
								<div class="form-group">
									<label for="inp1">Slids Background Color </label>
									<input type="color" name="slids_bg_color" value="<?php echo $key->slids_bg_color; ?>" class="form-control color">
								</div>
								
								<div class="form-group">
									<label for="inp1">Slids Font Color </label>
									<input type="color" name="slids_ft_color" value="<?php echo $key->slids_ft_color; ?>" class="form-control color">
								</div>
								

</div>
<div class="col-md-3"></div>
</div>
								
							
								
								
							
								
								
								
								<!--<div class="form-group">-->
								<!--	<label for="inp1">Cart Logo width</label>-->
								<!--	<input type="text" name="cart_logo_width" value="<?php echo $key->cart_logo_width; ?>" class="form-control" placeholder="Enter height">-->
								<!--</div>-->
								

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

<script type="text/javascript">
	$(document).ready(function() {

		$('#summernote1').summernote();
		$('#summernote').summernote();
	});
</script>