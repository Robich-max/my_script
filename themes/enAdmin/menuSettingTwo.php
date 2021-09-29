<?php include_once 'inc/header.php'; ?>

<div id="content-wrapper" class="d-flex flex-column">
<style type="text/css" media="screen">
	label {

    font-weight: 600;
}
.color {
   width: 20%;
}
</style>
	<!-- Main Content -->
	<div id="content">

		<?php include_once 'inc/navbar.php'; ?>

			<div class="container-fluid">


					<?php foreach($setting as $key){ ?>

					<!-- Page Heading -->
					<h1 class="h3 mb-2 text-gray-800">Menu Setting</h1>
					<?php echo form_open_multipart("",array("class" => "form-horizontal")); ?>
					<!-- DataTales Example -->
					<div class="card shadow mb-4">
						<div class="card-header py-3">
							<h6 class="m-0 font-weight-bold text-primary">Menu setting</h6>
						</div>
						
						<div class="card-body">
							
							<fieldset>
								<div class="row">
									<div class="col-md-6">
										
	<div class="form-group">
									<label for="inp1">Menu Height</label>
									<input type="text" name="menu_height" value="<?php echo $key->menu_height; ?>" class="form-control" placeholder="Enter height">
								</div>
								
								<div class="form-group">
									<label for="inp1">Menu Background Color </label>
									<input type="color" name="menu_bg_color" value="<?php echo $key->menu_bg_color; ?>" class="form-control color">
								</div>

								<div class="form-group">
									<label for="inp1">Menu Mobile Background Color </label>
									<input type="color" name="menu_mobile" value="<?php echo $key->menu_mobile; ?>" class="form-control color">
								</div>
								
								<div class="form-group">
									<label for="inp1">Menu Font Color </label>
									<input type="color" name="menu_color" value="<?php echo $key->menu_color; ?>" class="form-control color">
								</div>
								
								<div class="form-group">
									<label for="inp1">Menu Font Active Color </label>
									<input type="color" name="menu_ac_color" value="<?php echo $key->menu_ac_color; ?>" class="form-control color">
								</div>
								
								<div class="form-group">
									<label for="inp1">Cart Color </label>
									<input type="color" name="cart_color" value="<?php echo $key->cart_color; ?>" class="form-control color">
								</div>
								
									<div class="form-group">
									<label for="inp1">Menu Mobile logo Color </label>
									<input type="color" name="menu_logo" value="<?php echo $key->menu_logo; ?>" class="form-control color">
								</div>
							
								<div class="form-group">
									<label for="inp1">Menu Font Name</label>
									<input type="text" name="menu_font" value="<?php echo $key->menu_font; ?>" class="form-control">
								</div>
								
								<div class="form-group">
									<label for="inp1">Menu Font Google Link </label>
									<input type="text" name="menu_font_link" value="<?php echo $key->menu_font_link; ?>" class="form-control">
								</div>
								

									</div>
									<div class="col-md-6">

										
								<div class="form-group">
									<label for="inp1">Menu Text Font Size </label>
									<input type="text" name="menu_font_size" value="<?php echo $key->menu_font_size; ?>" class="form-control">
								</div>
								
										
<div class="form-group">
									<label for="inp1"><?=lang("admin_h164");?> </label>
									<input type="file" name="logo" class="form-control-file">
									<small class="form-text text-muted">image size (1450 x 550)</small>
									<br/>
				<img src="<?= base_url();?>logo/<?php echo $key->logo; ?>" alt="<?php echo $key->logo; ?>" style="height:60px;width:140px;">

								</div>	
								
								
								<div class="form-group">
									<label for="inp1">Logo Height</label>
									<input type="text" name="logo_height" value="<?php echo $key->logo_height; ?>" class="form-control" placeholder="Enter height">
								</div>
								
								
								<div class="form-group">
									<label for="inp1">Logo width</label>
									<input type="text" name="logo_width" value="<?php echo $key->logo_width; ?>" class="form-control" placeholder="Enter height">
								</div>
								
								<div class="form-group">
									<label for="inp1">Cart Logo</label>
									<input type="file" name="cart_logo" class="form-control-file">
									<small class="form-text text-muted">image size (512 x 512)</small>
									<br/>
		<img src="<?= base_url();?>logo/<?php echo $key->cart_logo; ?>" alt="<?php echo $key->cart_logo; ?>" style="height:60px;width:140px;">

								</div>
								
										<div class="form-group">
									<label for="inp1">Cart Logo Height</label>
									<input type="text" name="cart_logo_height" value="<?php echo $key->cart_logo_height; ?>" class="form-control" placeholder="Enter height">
								</div>


									<div class="form-group">
									<label for="inp1">Account Logo</label>
									<input type="file" name="account_logo" class="form-control-file">
									<small class="form-text text-muted">image size (512 x 512)</small>
									<br/>

		<img src="<?= base_url();?>logo/<?php echo $key->account_logo; ?>" alt="<?php echo $key->account_logo; ?>" style="height:60px;width:140px;">

								</div>
								
								<div class="form-group">
									<label for="inp1">Account Logo Height</label>
									<input type="text" name="account_logo_height" value="<?php echo $key->account_logo_height; ?>" class="form-control" placeholder="Enter height">

								</div>
								
								
								<!--<div class="form-group">-->
								<!--	<label for="inp1">Cart Logo width</label>-->
								<!--	<input type="text" name="cart_logo_width" value="<?php echo $key->cart_logo_width; ?>" class="form-control" placeholder="Enter height">-->
								<!--</div>-->
								


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

<script type="text/javascript">
	$(document).ready(function() {

		$('#summernote1').summernote();
		$('#summernote').summernote();
	});
</script>