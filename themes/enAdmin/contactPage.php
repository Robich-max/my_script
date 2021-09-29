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
			<?php foreach($contact as $key){ ?>
			<!-- Page Heading -->
			<h1 class="h3 mb-2 text-gray-800">Cantact Page</h1>
			<?php echo form_open_multipart("",array("class" => "form-horizontal")); ?>
			<!-- DataTales Example -->
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Slids bar setting</h6>
				</div>
				
				<div class="card-body">
					
					<fieldset>
						<div class="row">
							
							<div class="col-md-6">
								
								<div class="form-group">
									<label for="inp4">Menu Select</label>
									<!-- <div id="editor"></div> -->
									<select name="menu_id" id="" class="form-control" required="required">
										<option>--Select--</option>
										<?php foreach($menus as $menu) : ?>
										<option value="<?php echo $menu->id; ?>"<?php if($menu->id == $key->menu_id) echo "selected"; ?>><?php echo $menu->name; ?></option>
										<?php endforeach; ?>
									</select>
									
								</div>
								
								<div class="form-group">
									<label for="inp1">Name</label>
									<input type="text" name="title" value="<?php echo $key->title; ?>" class="form-control" id="inp1" aria-describedby="emailHelp" placeholder="title">
								</div>
								<div class="form-group">
									<label for="inp1">Address</label>
									<textarea id="summernote" name="desc"><?php echo $key->desc; ?></textarea>
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
							<div class="col-md-6">
								
								<h2 class="bg-light">SEO Input Field</h2>
								<div class="form-group">
									<label for="inp1">Page Title</label>
									<input type="text" class="form-control" id="inp1" value="<?php echo $key->page_title; ?>" aria-describedby="emailHelp" placeholder="Page Title" name="page_title">
								</div>
								
								<div class="form-group">
									<label for="inp1">Description</label>
									<textarea rows="6" name="page_desc" class="form-control"><?php echo $key->page_desc; ?></textarea>
								</div>
								
								
								<div class="form-group">
									<label for="inp1">Page Url</label>
									<input type="text" class="form-control" id="inp1" value="<?php echo $key->slug; ?>" aria-describedby="emailHelp" placeholder="Page url" name="slug">
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