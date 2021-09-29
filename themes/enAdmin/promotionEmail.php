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
			<h1 class="h3 mb-2 text-gray-800">Promotion Email</h1>
			<?php echo form_open_multipart("",array("class" => "form-horizontal")); ?>
			<!-- DataTales Example -->
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Promotion Email Setting</h6>
				</div>
				<div class="card-body">
					<fieldset>
						
						<div class="row">
							<div class="col-md-6">
								<select name="promotion_name" id=""  class="form-control">
									<option value="promotionEmail" <?php if($key->promotion_name == "promotionEmail") echo "selected"; ?>>Promotion Email One</option>
									<option value="promotionEmailTwo" <?php if($key->promotion_name == "promotionEmailTwo") echo "selected"; ?>>Promotion Email Two</option>
								</select>
								<div class="form-group" style = "display:none">
									<label for="inp1">Banner Image</label>
									<input type="file" name="pe_bn_img" value="<?php echo $key->pe_bn_img; ?>" class="form-control" placeholder="Enter Title">
									<small class="form-text text-muted">image size (1050 x 550)</small>
									<br/>
									<img src="<?= base_url()?>images/<?php echo $key->pe_bn_img;?>"  style="height:60px;width:140px;">
								</div>


								<div class="form-group">
									<label for="inp1">Image</label>
									<input type="file" name="pe_img" value="<?php echo $key->pe_img; ?>" class="form-control" placeholder="Enter Title">
									<small class="form-text text-muted">image size (1050 x 550)</small>
									<br/>
									<img src="<?= base_url()?>images/<?php echo $key->pe_img;?>"  style="height:60px;width:140px;">
								</div>

								<div class="form-group">
									<label for="inp1">Button Name One</label>
									<!--<input type="text" name="btnone" value="<?php echo $key->btnone; ?>" class="form-control" placeholder="Enter Title">-->
									<textarea name="btnone" class="form-control" placeholder="Enter Title"><?php echo $key->btnone; ?></textarea>

								</div>
								
								<div class="form-group">
									<label for="inp1">Button Link One</label>
									<input type="text" name="btnLinkOne" value="<?php echo $key->btnLinkOne; ?>" class="form-control" placeholder="Enter Link">
								</div>

                                <div class="form-group">
									<label for="inp1">Button Color One</label>
									<input type="color" name="btnColorOne" value="<?php echo $key->btnColorOne; ?>" class="form-control" placeholder="Enter Link">
								</div>
                              
								<div class="form-group">
									<label for="inp1">Button Name Two</label>
									<textarea name="btntwo" class="form-control" placeholder="Enter Title"><?php echo $key->btntwo; ?></textarea>
								</div>
								 <div class="form-group">
									<label for="inp1">Button Link Two</label>
									<input type="text" name="btnLinkTwo" value="<?php echo $key->btnLinkTwo; ?>" class="form-control" placeholder="Enter Link">
								</div>
                                <div class="form-group">
									<label for="inp1">Button Color Two</label>
									<input type="color" name="btnColorTwo" value="<?php echo $key->btnColorTwo; ?>" class="form-control" placeholder="Enter Link">
								</div>

							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label for="inp1">Description</label>
									<textarea id="summernote" name="pe_desc"><?php echo $key->pe_desc; ?></textarea>
								</div>
								
								 <div class="form-group" style = "display:none">
									<label for="inp1">Admin Name</label>
									<input type="text" name="admin_name" value="<?php echo $key->admin_name; ?>" class="form-control" placeholder="Enter Name">
								</div>
								
								 <div class="form-group" style = "display:none">
									<label for="inp1">Admin Email</label>
									<input type="text" name="admin_email" value="<?php echo $key->admin_email; ?>" class="form-control" placeholder="Enter Email">
								</div>
								
								<div class="form-group">
									<label for="inp1">Email Background Color</label>
									<input type="color" name="pw_color" value="<?php echo $key->pw_color; ?>" class="form-control" placeholder="Enter Title">
								</div>
								
								<div class="form-group">
									<label for="inp1">Header Footer Color</label>
									<input type="color" name="header_color" value="<?php echo $key->header_color; ?>" class="form-control" placeholder="Enter Title">
								</div>
							</div>
							
						</div>
						<div class="row one">
							<div class="col-md-6">
								<div class="form-group">
									<label for="inp1">Image Two</label>
									<input type="file" name="pet_img" value="<?php echo $key->pet_img; ?>" class="form-control" placeholder="Enter Title">
									<small class="form-text text-muted">image size (1050 x 550)</small>
									<br/>
									<img src="<?= base_url()?>images/<?php echo $key->pet_img;?>"  style="height:60px;width:140px;">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label for="inp1">Description Two</label>
									<textarea id="summernote1" name="pet_desc"><?php echo $key->pet_desc; ?></textarea>
								</div>
							</div>
							
						</div>
						
					</fieldset>
				</div>
				<div class="card-footer">
					<div class="float-right">
						<button class="button btn btn-success"  type="submit"><?=lang("admin_h92");?></button>
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
		$(document).ready(function(){
	$("select").change(function(){
	$( "select option:selected").each(function(){
	if($(this).attr("value")=="promotionEmail"){
	$(".one").hide();
	$(".two").show();
	}
	if($(this).attr("value")=="promotionEmailTwo"){
	$(".two").hide();
	$(".one").show();
	}
	
	
	});
	}).change();
	});
	</script>