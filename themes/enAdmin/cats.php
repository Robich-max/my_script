<?php include_once 'inc/header.php'; ?>
<style type="text/css" media="screen">
		label {
font-weight: 600;
}
</style>
<div id="content-wrapper" class="d-flex flex-column">
	<!-- Main Content -->
	<div id="content">
		<?php include_once 'inc/navbar.php'; ?>
		<div class="container-fluid">
			<?php if($tp == "add") { ?>
			<!-- Page Heading -->
			<h1 class="h3 mb-2 text-gray-800">Catégories</h1>
			<?php echo form_open_multipart("",array("class" => "form-horizontal")); ?>
			<!-- DataTales Example -->
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary"><?=lang("admin_h13");?></h6>
				</div>
				
				<div class="card-body">
					<?php if(isset($msg)){ ?>
					<div class="alert alert-success"><?php echo lang("admin_h51"); ?></div>
					<?php } ?>
					
					<fieldset>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="inp4">Menu Select</label>
									<!-- <div id="editor"></div> -->
									<select name="menu_id" id="" class="form-control" required="required">
										<option>--Select--</option>
										<?php foreach($menus as $menu) : ?>
										<option value="<?php echo $menu->id; ?>"><?php echo $menu->name; ?></option>
										<?php endforeach; ?>
									</select>
									
								</div>
								<div class="form-group">
									<label for="inp4">Use for Sub Category Menu</label>
									<!-- <div id="editor"></div> -->
									<select name="subcat" id="" class="form-control" required="required">
										<option value="0"><?=lang("admin_h88");?></option>
										<option value="1"><?=lang("admin_h89");?></option>
									</select>
									
								</div>
								<div class="form-group">
									<label for="inp4"><?=lang("admin_h87");?></label>
									<!-- <div id="editor"></div> -->
									<select name="footer" id="" class="form-control">
										<option value="0"><?=lang("admin_h88");?></option>
										<option value="1"><?=lang("admin_h89");?></option>
									</select>
									<small id="emailHelp" class="form-text text-muted"><?=lang("admin_h90");?></small>
								</div>
								<div class="form-group">
									<label for="inp4">Footer column select</label>
									<!-- <div id="editor"></div> -->
									<select name="footer_column" id="" class="form-control">
										<option value="0">footer column 1</option>
										<option value="1">footer column 2</option>
										<option value="2">footer column 3</option>
									</select>
									<small id="emailHelp" class="form-text text-muted"><?=lang("admin_h90");?></small>
								</div>
								
								<div class="form-group">
									<label for="inp1">Category Name</label>
									<input type="text" name="title" class="form-control" id="inp1" aria-describedby="emailHelp" placeholder="<?php echo lang("admin_h49") ?>" required="required">
									<small id="emailHelp" class="form-text text-muted"><?php echo lang("admin_h50") ?></small>
								</div>
								<div class="form-group">
									<label for="inp1">Image</label>
									<input type="file" name="logo" class="form-control-file" >
									<small id="emailHelp" class="form-text text-muted">Image</small>
								</div>
								
								
								<div class="form-group">
									<label for="inp1">Banner Image</label>
									<input type="file" name="banner_img" class="form-control-file" >
									<small id="emailHelp" class="form-text text-muted">Banner Image size (1920x570)</small>
								</div>
							</div>
							<div class="col-md-6"><h2 class="bg-light" style="text-align: center;">SEO Input Field</h2>
								<div class="form-group">
									<label for="inp1">Page Title</label>
									<input type="text" class="form-control" id="inp1" aria-describedby="emailHelp" placeholder="Page Title" name="page_title">
								</div>
								
								<div class="form-group">
									<label for="inp1">Description</label>
									<textarea rows="6" name="page_desc" class="form-control"></textarea>
								</div>
							</div>
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
			
			<?php }elseif($tp == "edit") { ?>
			<?php foreach($cat as $key){ ?>
			<!-- Page Heading -->
			<h1 class="h3 mb-2 text-gray-800"><?=lang("admin_h11");?></h1>
			<?php echo form_open_multipart("",array("class" => "form-horizontal")); ?>
			<!-- DataTales Example -->
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary"><?=lang("admin_h46");?></h6>
				</div>
				
				<div class="card-body">
					<?php if(isset($msg)){ ?>
					<div class="alert alert-success"><?php echo lang("admin_h51"); ?></div>
					<?php } ?>
					
					<fieldset>
						<div class="row">
							<div class="col-md-6">	<div class="form-group">
								<label for="inp4">Menu Select</label>
								<!-- <div id="editor"></div> -->
								<select name="menu_id" id="" class="form-control" required="required">
									<option>--Select--</option>
									<?php foreach($menus as $menu) : ?>
									<option value="<?php echo $menu->id; ?>" <?php if($menu->id == $key->menu_id) echo "selected"; ?>><?php echo $menu->name; ?></option>
									<?php endforeach; ?>
								</select>
								
							</div>
							<div class="form-group">
								<label for="inp4">Use for Sub Category Menu</label>
								<!-- <div id="editor"></div> -->
								<select name="subcat" id="" class="form-control" required="required">
									<option value="0">No</option>
									<option value="1" <?php if($key->subcat == 1) echo "selected"; ?>>Yes</option>
								</select>
							</div>
							
							<div class="form-group">
								<label for="inp4">Link at footer</label>
								<!-- <div id="editor"></div> -->
								<select name="footer" id="" class="form-control">
									<option value="0">No</option>
									<option value="1" <?php if($key->footer == 1) echo "selected"; ?>>Yes</option>
								</select>
								<small id="emailHelp" class="form-text text-muted">Link at footer</small>
							</div>
							<div class="form-group">
								<label for="inp4">footer column select</label>
								<!-- <div id="editor"></div> -->
								<select name="footer_column" id="" class="form-control">
									<option value="0" <?php if($key->footer_column == 0) echo "selected"; ?>>footer column 1</option>
									<option value="1" <?php if($key->footer_column == 1) echo "selected"; ?>>footer column 2</option>
									<option value="2" <?php if($key->footer_column == 2) echo "selected"; ?>>footer column 3</option>
								</select>
								<small id="emailHelp" class="form-text text-muted">Link at footer</small>
							</div>
							
							<div class="form-group">
								<label for="inp1"><?php echo lang("admin_h31") ?></label>
								<input type="text" name="title" class="form-control" id="inp1" aria-describedby="emailHelp" placeholder="<?php echo lang("admin_h49") ?>" value="<?php echo $key->title; ?>" required="required">
								<small id="emailHelp" class="form-text text-muted"><?php echo lang("admin_h50") ?></small>
							</div>
							<div class="form-group">
								<label for="inp1">Image</label>
								<input type="file" name="logo" class="form-control-file" >
								<small id="emailHelp" class="form-text text-muted">Image</small>
								<br/>
								<img src="<?= base_url();?>images/<?php echo $key->img; ?>" alt="<?php echo $key->img; ?>" style="height:60px;width:140px;">
							</div>
							
							
							<div class="form-group">
								<label for="inp1">Banner Image</label>
								<input type="file" name="banner_img" class="form-control-file" >
								<small id="emailHelp" class="form-text text-muted">Banner Image size (1920x570)</small>
								<br>
								<img src="<?= base_url();?>images/<?php echo $key->banner_img; ?>" alt="<?php echo $key->banner_img; ?>" style="height:60px;width:140px;">
							</div>
						</div>
						<div class="col-md-6">
							
							
							<h2 class="bg-light" style="text-align: center;">SEO Input Field</h2>
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
								<input type="text" class="form-control" id="inp1" value="<?php echo $key->page_url; ?>" aria-describedby="emailHelp" placeholder="Page url" name="page_url">
							</div>
						</fieldset>
					</div>
					
					<div class="card-footer">
						
						<div class="float-right">
							
							<button class="button btn btn-success" name="test" type="submit"><?=lang("admin_h92");?></button>
						</div>
					</div>
				</div>
			</div>
			
			
		</div>
		<?php echo form_close(); ?>
		<?php } ?>
		<?php }else { ?>
		<!-- Page Heading -->
		<h1 class="h3 mb-2 text-gray-800"><?=lang("admin_h11");?></h1>
		<!-- DataTales Example -->
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary float-left">List</h6>
				<a href="<?php echo base_url("admin/add_cat"); ?>" class="btn btn-success btn-icon-split btn-sm float-right">
					<span class="icon text-white-50">
						<i class="fas fa-plus"></i>
					</span>
				</a>
			</div>
			<div class="card-body">
				
				<ul id="responds" class="list-group">
					<?php foreach($cat as $key) { $idcat = $key->id; ?>
					<li id="cats_<?php echo $idcat; ?>" class="list-group-item border-left-primary" style="margin-bottom: 10px;">
						<span><?php echo $key->title; ?></span>
						<div class="del_wrapper" style="float: right;">
							<a href="<?php echo base_url("admin/edit_cat/$key->id"); ?>" class="btn btn-primary btn-icon-split btn-sm">
								<span class="icon text-white-50">
									<i class="fas fa-edit"></i>
								</span>
								
							</a>
							<a href="<?php echo base_url("admin/delt/cats/$key->id/cat"); ?>" class="btn btn-danger btn-icon-split btn-sm">
								<span class="icon text-white-50">
									<i class="fas fa-trash"></i>
								</span>
								
							</a>
						</div>
						<div class="clearfix"></div>
					</li>
					<?php } ?>
				</ul>
			</div>
			<div class="card-footer">
				
				<div class="float-right">
					
					<button class="button btn btn-success"><?php echo lang("admin_h48") ?></button>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>
	<!-- /.container-fluid -->
</div>
<?php include_once 'inc/footer.php'; ?>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
	$(function () {
		$("#responds").sortable({
			update: function (event, ui) {
				var order = $(this).sortable('serialize');
$(document).on("click", ".button", function () { //that doesn't work
	$.ajax({
		data: order,
		type: 'POST',
url: '<?php echo base_url("admin/order_save"); ?>',
success : function(re) {
//alert(re);
if(re == "")
{
alert("order saved .");
}else
{
alert(re);
}
}
});
});
}
}).disableSelection();
$('.button').on('click', function () {
var r = $("#responds").sortable("toArray");
var a = $("#responds").sortable("serialize", {
attribute: "id"
});
console.log(r, a);
});
});
</script>