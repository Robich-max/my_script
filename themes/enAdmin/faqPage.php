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
			<?php if($tp == "add") { ?>
			<!-- Page Heading -->
			<h1 class="h3 mb-2 text-gray-800">Faq</h1>
			<?php echo form_open_multipart("",array("class" => "form-horizontal")); ?>
			<!-- DataTales Example -->
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Faq</h6>
				</div>
				<div class="card-body">
					<?php if(isset($msg)){ ?>
					<div class="alert alert-success">the faq has been successfully added .</div>
					<?php } ?>
					<fieldset>
						<div class="row">
							<div class="col-md-6">
								<?php  if(empty($menusinfo)){?>
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
								<?php }?>
								
								<div class="form-group">
									<label for="inp1">Title</label>
									<input type="text" name="title" class="form-control" id="inp1" aria-describedby="emailHelp" placeholder="Title">
								</div>
								<div class="form-group">
									<label for="inp1">Description</label>
									<textarea id="summernote" name="desc"></textarea>
								</div>
								<div class="form-group">
									<label for="inp1">serial</label>
									<input type="number" name="serial" class="form-control" id="inp1" aria-describedby="emailHelp" placeholder="serial">
								</div>
								<div class="form-group">
									<label for="inp1">Active Status</label>
									<input name="active_status" type="hidden" value="0" id="active_status">
									<input name="active_status" type="checkbox" value="1" id="active_status">
									
								</div>
							</div>
							<div class="col-md-6">
								
								<h2 class="bg-light" style="text-align: center;color:black;">SEO Input Field</h2>
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
		<?php foreach($faq as $key){ ?>
		<!-- Page Heading -->
		<h1 class="h3 mb-2 text-gray-800">Edit Faq</h1>
		<?php echo form_open_multipart("",array("class" => "form-horizontal")); ?>
		<!-- DataTales Example -->
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary">Edit Faq</h6>
			</div>
			<div class="card-body">
				<?php if(isset($msg)){ ?>
				<div class="alert alert-success">the faq has been successfully added .</div>
				<?php } ?>
				<fieldset>
					<div class="row">
						<div class="col-md-6">
							<?php  if(empty($menusinfo)){?>
							<div class="form-group">
								<label for="inp4">Menu Select</label>
								<!-- <div id="editor"></div> -->
								<select name="menu_id" id="" class="form-control" required="required">
									<option>--Select--</option>
									<?php foreach($menus as $menu) : ?>
									<option value="<?php echo $menu->id; ?>" <?php if($menu->id == $key->menu_id) echo "selected"; ?>><?php echo $menu->name; ?></option>
									<?php endforeach; ?>
								</select>
							</div>
							<?php }else{?>
							<?php  if($menusinfo->menu_id == $key->menu_id ){?>
							<div class="form-group">
								<label for="inp4">Menu Select</label>
								<!-- <div id="editor"></div> -->
								<select name="menu_id" id="" class="form-control" required="required">
									<option>--Select--</option>
									<?php foreach($menus as $menu) : ?>
									<option value="<?php echo $menu->id; ?>" <?php if($menu->id == $key->menu_id) echo "selected"; ?>><?php echo $menu->name; ?></option>
									<?php endforeach; ?>
								</select>
							</div>
							<?php }?>
							<?php }?>
							<div class="form-group">
								<label for="inp1">Name</label>
								<input type="text" name="title" value="<?php echo $key->title; ?>" class="form-control" id="inp1" aria-describedby="emailHelp" placeholder="title">
							</div>
							<div class="form-group">
								<label for="inp1">Description</label>
								<textarea id="summernote" name="desc"><?php echo $key->desc; ?></textarea>
							</div>
							
							
							<div class="form-group">
								<label for="inp1">Serial</label>
								<input type="number" name="serial" value="<?php echo $key->serial; ?>" class="form-control" id="inp1" aria-describedby="emailHelp" placeholder="serial">
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
								<input type="text" class="form-control" id="inp1" value="<?php echo $key->	slug; ?>" aria-describedby="emailHelp" placeholder="Page url" name="slug">
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
		<?php }else { ?>
		<!-- Page Heading -->
		<h1 class="h3 mb-2 text-gray-800">FAQ</h1>
		<!-- DataTales Example -->
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary float-left">List</h6>
				<a href="<?php echo base_url("admin/add_faqPage"); ?>" class="btn btn-success btn-icon-split btn-sm float-right">
					<span class="icon text-white-50">
						<i class="fas fa-plus"></i>
					</span>
					
				</a>
			</div>
			<div class="card-body">
				<ul id="responds" class="list-group">
					<?php foreach($faq as $key) { $idcat = $key->id; ?>
					<li id="slider_<?php echo $idcat; ?>" class="list-group-item border-left-primary" style="margin-bottom: 10px;">
						<span>Title: <?php echo $key->title; ?></span>
						<br/>
						<?php  if($key->menu_id != 0){?>
						<?php foreach($menus as $menu) : ?>
						<span><?php if($menu->id == $key->menu_id) echo "Menu: $menu->name;"  ?></span>
						<?php endforeach; ?>
						<?php }; ?>
						<br/>
						<?php if($key->page_title){?>
						<span>Seo Title: <?php echo $key->page_title; ?></span>
						<?php }?>
						<div class="del_wrapper" style="float: right;">
							<a href="<?php echo base_url("admin/edit_faqPage/$key->id"); ?>" class="btn btn-primary btn-icon-split btn-sm">
								<span class="icon text-white-50">
									<i class="fas fa-edit"></i>
								</span>
								
							</a>
							<a href="<?php echo base_url("admin/delt/faq/$key->id/faqPage"); ?>" class="btn btn-danger btn-icon-split btn-sm">
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
			<!--<div class="card-footer">-->
			<!--	<div class="float-right">-->
			<!--		<button class="button btn btn-success"><?php echo lang("admin_h48") ?></button>-->
			<!--	</div>-->
			<!--</div>-->
		</div>
		<?php } ?>
	</div>
	<!-- /.container-fluid -->
</div>
<?php include_once 'inc/footer.php'; ?>

<!--<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>-->
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