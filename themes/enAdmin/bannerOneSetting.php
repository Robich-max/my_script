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
			<?php foreach($setting as $key){ ?>
			<!-- Page Heading -->
			<h1 class="h3 mb-2 text-gray-800">Banner One Setting</h1>
			<?php echo form_open_multipart("",array("class" => "form-horizontal")); ?>
			<!-- DataTales Example -->
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Banner One setting</h6>
				</div>
				<div class="card-body">
					<fieldset>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="inp1"><?=lang("admin_h179");?></label>
									<input type="file" name="img" class="form-control-file" >
									<small id="emailHelp" class="form-text text-muted">Image size max(2560x1263)</small>
									<br/>
									<img src="<?= base_url();?>/images/<?php echo $key->img; ?>" alt="<?php echo $key->img; ?>" style="height:60px;width:140px;">
								</div>
								
								<div class="form-group">
									<label for="inp1">Description</label>
									<textarea id="summernote" name="desc" class="form-control"><?php echo $key->desc; ?></textarea>
								</div>
								<div class="form-group">
									<label for="inp1">Icon One Image</label>
									<input type="file" name="icon_one" class="form-control-file" >
									<small class="form-text text-muted">image size (512 x 512)</small>
									<br/>
									<img src="<?= base_url();?>/images/<?php echo $key->icon_one; ?>" alt="<?php echo $key->icon_one; ?>" style="height:60px;width:60px;">
								</div>
								
								<div class="form-group">
									<label for="inp1">Icon One Text One</label>
									<input type="text" name="icon_one_text" value="<?php echo $key->icon_one_text; ?>" class="form-control" id="inp1" aria-describedby="emailHelp">
								</div>
								<div class="form-group">
									<label for="inp1">Icon One Text Two</label>
									<input type="text" name="icon_one_text_two" value="<?php echo $key->icon_one_text_two; ?>" class="form-control" id="inp1" aria-describedby="emailHelp">
								</div>
								<div class="form-group">
									<label for="inp1">Icon One Text Three</label>
									<input type="text" name="icon_one_text_three" value="<?php echo $key->icon_one_text_three; ?>" class="form-control" id="inp1" aria-describedby="emailHelp">
								</div>
								
								
							</div>
							<div class="col-md-6">
								
								
								<div class="form-group">
									<label for="inp1">Icon Two Image</label>
									<input type="file" name="icon_two" class="form-control-file" >
									<small class="form-text text-muted">image size (512 x 512)</small>
									<br/>
									<img src="<?= base_url();?>/images/<?php echo $key->icon_two; ?>" alt="<?php echo $key->icon_two; ?>" style="height:60px;width:60px;">
								</div>
								
								<div class="form-group">
									<label for="inp1">Icon Two Text One</label>
									<input type="text" name="icon_two_text" value="<?php echo $key->icon_two_text; ?>"  class="form-control"  >
								</div>
								<div class="form-group">
									<label for="inp1">Icon Two Text Two</label>
									<input type="text" name="icon_two_text_two" value="<?php echo $key->icon_two_text_two; ?>"  class="form-control"  >
								</div>
								<div class="form-group">
									<label for="inp1">Icon Two Text Three</label>
									<input type="text" name="icon_two_text_three" value="<?php echo $key->icon_two_text_three; ?>"  class="form-control"  >
								</div>
								
								
								<div class="form-group">
									<label for="inp1">Icon Three Image</label>
									<input type="file" name="icon_three" class="form-control-file" >
									<small class="form-text text-muted">image size (512 x 512)</small>
									<br/>
									<img src="<?= base_url();?>/images/<?php echo $key->icon_three; ?>" alt="<?php echo $key->icon_three; ?>" style="height:60px;width:60px;">
								</div>
								
								<div class="form-group">
									<label for="inp1">Icon Three Text One</label>
									<input type="text" name="icon_three_text" value="<?php echo $key->icon_three_text; ?>"  class="form-control"  >
								</div>
								<div class="form-group">
									<label for="inp1">Icon Three Text Two</label>
									<input type="text" name="icon_three_text_two" value="<?php echo $key->icon_three_text_two; ?>"  class="form-control"  >
								</div>
								<div class="form-group">
									<label for="inp1">Icon Three Text Three</label>
									<input type="text" name="icon_three_text_three" value="<?php echo $key->icon_three_text_three; ?>"  class="form-control"  >
								</div>
								<div class="form-group">
									<label for="inp1">Active Status</label>
									<?php if($key->active_status == 1 ){?>
									<input name="active_status" type="hidden" value="0" id="active_status">
									<input checked="checked" name="active_status" type="checkbox" value="1" id="active_status">
									<?php }elseif($key->active_status == 0){?>
									<input name="active_status" type="hidden" value="0" id="active_status">
									<input name="active_status" type="checkbox" value="1" id="active_status">
									<?php }?>
									
								</div>
							</div>
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