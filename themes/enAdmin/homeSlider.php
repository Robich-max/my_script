<?php include_once 'inc/header.php'; ?>
<div id="content-wrapper" class="d-flex flex-column">
	<style>
		.color {
	width: 20%;
	}
		label {
	font-weight: 600;
	}
	</style>
	
	<!-- Main Content -->
	<div id="content">
		<?php include_once 'inc/navbar.php'; ?>
		<div class="container-fluid">
			<?php if($tp == "add") { ?>
			<!-- Page Heading -->
			<h1 class="h3 mb-2 text-gray-800">Home Slider</h1>
			<?php echo form_open_multipart("",array("class" => "form-horizontal")); ?>
			<!-- DataTales Example -->
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Home Slider</h6>
				</div>
				
				<div class="card-body">
					<?php if(isset($msg)){ ?>
					<div class="alert alert-success"><?=lang("admin_h176");?> .</div>
					<?php } ?>
					
					<fieldset>
						
						<div class="row">
							<div class="col-md-6">
								
								<!-- 	<div class="form-group">
										<label for="inp1">Title</label>
										<textarea id="summernote1" name="title"></textarea>
								</div> -->
								<div class="form-group">
									<label for="inp1">Title</label>
									<textarea name="title"></textarea>
								</div>
								
								<!-- 	<div class="form-group">
										<label for="inp1">Sub Title</label>
										<textarea id="summernote" name="sub_title"></textarea>
								</div> -->
								<div class="form-group">
									<label for="inp1">Sub Title</label>
									<textarea name="sub_title"></textarea>
								</div>
								
								
								
								
								
							</div>
							<div class="col-md-6">
								
								<div class="form-group">
									<label for="inp1">Button Background Color </label>
									<input type="color" name="bt_color" class="form-control color">
								</div>
								
								<div class="form-group">
									<label for="inp1">Button hover Color </label>
									<input type="color" name="bt_hv_color" class="form-control color">
								</div>
								
								<div class="form-group">
									<label for="inp1">Button Font Color </label>
									<input type="color" name="bt_ft_color"class="form-control color">
								</div>
								
								
								<div class="form-group">
									<label for="inp1">Button hover Font Color </label>
									<input type="color" name="bt_hft_color"class="form-control color">
								</div>
								
								<div class="form-group">
									<label for="inp1">url</label>
									<input type="text" name="url" class="form-control" id="inp1" aria-describedby="emailHelp" placeholder="url">
								</div>
								
								
								
								<div class="form-group">
									<label for="inp1">position</label>
									<input type="text" name="position" class="form-control" id="inp1" aria-describedby="emailHelp" placeholder="position">
								</div>
								<div class="form-group">
									<label for="inp1"><?=lang("admin_h179");?></label>
									<input type="file" name="logo" class="form-control-file" >
									<small id="emailHelp" class="form-text text-muted">Image size max(1450x550)</small>
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
			<h1 class="h3 mb-2 text-gray-800">Edit Home slider</h1>
			<?php echo form_open_multipart("",array("class" => "form-horizontal")); ?>
			<!-- DataTales Example -->
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Edit Home slider</h6>
				</div>
				
				<div class="card-body">
					<?php if(isset($msg)){ ?>
					<div class="alert alert-success"><?php echo lang("admin_h51"); ?></div>
					<?php } ?>
					
					<fieldset>
						<div class="row">
							
							<div  class="col-md-6">
								<!-- <div class="form-group">
												<label for="inp1">Title</label>
									<textarea id="summernote1" name="title"><?php echo $key->title; ?></textarea>
								</div> -->
								<div class="form-group">
									<label for="inp1">Title</label>
									<textarea name="title"><?php echo $key->title; ?></textarea>
								</div>
								
								<!--
								<div class="form-group">
											<label for="inp1">Sub Title</label>
									<textarea id="summernote" name="sub_title"><?php echo $key->sub_title; ?></textarea>
								</div> -->
								<div class="form-group">
									<label for="inp1">Sub Title</label>
									<textarea name="sub_title"><?php echo $key->sub_title; ?></textarea>
								</div>
							</div>
							<div  class="col-md-6">
								
								<div class="form-group">
									<label for="inp1">Button Background Color </label>
									<input type="color" name="bt_color" value="<?php echo $key->bt_color; ?>" class="form-control color">
								</div>
								
								<div class="form-group">
									<label for="inp1">Button hover Color </label>
									<input type="color" name="bt_hv_color" value="<?php echo $key->bt_hv_color; ?>" class="form-control color">
								</div>
								
								<div class="form-group">
									<label for="inp1">Button Font Color </label>
									<input type="color" name="bt_ft_color" value="<?php echo $key->bt_ft_color; ?>" class="form-control color">
								</div>
								
								<div class="form-group">
									<label for="inp1">Button hover Font Color </label>
									<input type="color" name="bt_hft_color" value="<?php echo $key->bt_hft_color; ?>" class="form-control color">
								</div>
								
								<div class="form-group">
									<label for="inp1">Url</label>
									<input type="text" name="url" value="<?php echo $key->url; ?>" class="form-control" id="inp1" aria-describedby="emailHelp" placeholder="url">
								</div>
								
								
								<div class="form-group">
									<label for="inp1">position</label>
									<input type="text" name="position" value="<?php echo $key->position; ?>" class="form-control" id="inp1" aria-describedby="emailHelp" placeholder="url">
								</div>
								
								
								
								<div class="form-group">
									<label for="inp1"><?=lang("admin_h179");?></label>
									<input type="file" name="logo" class="form-control-file" >
									<small id="emailHelp" class="form-text text-muted">Image size max(1450x550)</small>
									<br/>
									<img src="<?= base_url();?>/images/<?php echo $key->img; ?>" alt="<?php echo $key->img; ?>" style="height:60px;width:140px;">
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
			<h1 class="h3 mb-2 text-gray-800">Home slider</h1>
			<!-- DataTales Example -->
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary float-left">List</h6>
					<a href="<?php echo base_url("admin/add_home_slider"); ?>" class="btn btn-success btn-icon-split btn-sm float-right">
						<span class="icon text-white-50">
							<i class="fas fa-plus"></i>
						</span>
						
					</a>
				</div>
				<div class="card-body">
					
					<ul id="responds" class="list-group">
						<?php foreach($cat as $key) { $idcat = $key->id; ?>
						<li id="slider_<?php echo $idcat; ?>" class="list-group-item border-left-primary" style="margin-bottom: 10px;">
							<span>Image <img src="<?= base_url();?>/images/<?php echo $key->img; ?>" alt="<?php echo $key->img; ?>" style="height:60px;width:140px;"></span>
							<div class="del_wrapper" style="float: right;">
								<a href="<?php echo base_url("admin/edit_home_slider/$key->id"); ?>" class="btn btn-primary btn-icon-split btn-sm">
									<span class="icon text-white-50">
										<i class="fas fa-edit"></i>
									</span>
									
								</a>
								<a href="<?php echo base_url("admin/delt/home_slider/$key->id/homeSlider"); ?>" class="btn btn-danger btn-icon-split btn-sm">
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
	<!-- <script type="text/javascript">
		$(document).ready(function() {
			$('#summernote1').summernote({
	height: 150,   //set editable area's height
	toolbar: [
	['style', ['style']],
	['font', ['bold', 'underline', 'clear']],
	['fontname', ['fontname']],
	['fontsize', ['fontsize']],
	['fontsizeunit', ['fontsizeunit']],
	['strikethrough', ['strikethrough','superscript','subscript']],
	['color', ['color']],
	['para', ['ul', 'ol', 'paragraph']],
	['table', ['table']],
	['insert', ['link', 'picture', 'video']],
	['view', ['fullscreen', 'codeview', 'help']],
	['height', ['height']],
	['image', ['resizeFull', 'resizeHalf', 'resizeQuarter', 'resizeNone']],
	['float', ['floatLeft', 'floatRight', 'floatNone']],
	['remove', ['removeMedia']],
	['link', ['linkDialogShow', 'unlink']]
	
	
	],
	
	});
	</script> -->
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