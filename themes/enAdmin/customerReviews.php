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
			<h1 class="h3 mb-2 text-gray-800">Customer Reviews</h1>
			<?php echo form_open_multipart("",array("class" => "form-horizontal")); ?>
			<!-- DataTales Example -->
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Customer Reviews</h6>
				</div>
				
				<div class="card-body">
					<?php if(isset($msg)){ ?>
					<div class="alert alert-success"><?=lang("admin_h176");?> .</div>
					<?php } ?>
					
					<fieldset>
						<div class="row">
							
							<div class="col-md-6">
								<div class="form-group">
									<label for="inp4">Peoduct Select</label>
									<!-- <div id="editor"></div> -->
									<select name="product_id" id="" class="form-control" required="required">
										<option>--Select--</option>
										<?php foreach($datas as $data) : ?>
										<option value="<?php echo $data->id; ?>"><?php echo $data->title; ?></option>
										<?php endforeach; ?>
									</select>
									
								</div>
								
								<div class="form-group">
									<label for="inp1">Customer Name</label>
									<input type="text" name="customer_name" class="form-control" id="inp1" aria-describedby="emailHelp" placeholder="Customer Name">
								</div>
								
								
								
								<div class="form-group">
									<label for="inp1">Customer Comment</label>
									<textarea id="summernote1" name="comment"></textarea>
								</div>
								
								
								
								<div class="form-group">
									<label for="inp1">Date</label>
									<input type="date" name="date" class="form-control" id="inp1" aria-describedby="emailHelp" placeholder="date">
								</div>
								
								<div class="form-group">
									<label for="inp1">serial</label>
									<input type="number" name="serial" class="form-control" id="inp1" aria-describedby="emailHelp" placeholder="serial">
								</div>
							</div>
							<div class="col-md-6">
								
								<div class="form-group">
									<label for="inp1">Rating Five</label>
									
									<input name="rating_five" type="hidden" value="default">
									<input name="rating_five" type="checkbox" value="warning" >
									
								</div>
								<div class="form-group">
									<label for="inp1">Rating Four</label>
									
									<input name="rating_four" type="hidden" value="default">
									<input name="rating_four" type="checkbox" value="warning" >
									
								</div>
								<div class="form-group">
									<label for="inp1">Rating Three</label>
									
									<input name="rating_three" type="hidden" value="default">
									<input name="rating_three" type="checkbox" value="warning" >
									
								</div>
								<div class="form-group">
									<label for="inp1">Rating Two</label>
									
									<input name="rating_two" type="hidden" value="default">
									<input name="rating_two" type="checkbox" value="warning" >
									
								</div>
								<div class="form-group">
									<label for="inp1">Rating One</label>
									
									<input name="rating_one" type="hidden" value="default">
									<input name="rating_one" type="checkbox" value="warning" >
									
								</div>
								
								<div class="form-group">
									<label for="inp1">Customer <?=lang("admin_h179");?></label>
									<input type="file" name="img" class="form-control-file" >
									<small id="emailHelp" class="form-text text-muted"></small>
								</div>
								
								<div class="form-group">
									<label for="inp1">Active Status</label>
									
									<input name="active_status" type="hidden" value="0" id="active_status">
									<input name="active_status" type="checkbox" value="1" id="active_status">
									
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
			<?php foreach($customer as $key){ ?>
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
							
							<div class="col-md-6">
								
								<div class="form-group">
									<label for="inp4">Product Select</label>
									<!-- <div id="editor"></div> -->
									<select name="product_id" id="" class="form-control" required="required">
										<option>--Select--</option>
										<?php foreach($datas as $data) : ?>
										<option value="<?php echo $data->id; ?>" <?php if($data->id == $key->product_id) echo "selected"; ?>><?php echo $data->title; ?></option>
										<?php endforeach; ?>
									</select>
									
								</div>
								
								<div class="form-group">
									<label for="inp1">Customer Name</label>
									<input type="text" name="customer_name" value="<?php echo $key->customer_name; ?>" class="form-control" id="inp1" aria-describedby="emailHelp" placeholder="customer name">
								</div>
								
								<div class="form-group">
									<label for="inp1">Customer comment</label>
									<textarea id="summernote1" name="comment"><?php echo $key->comment; ?></textarea>
								</div>
								
								
								<div class="form-group">
									<label for="inp1">Date</label>
									<input type="date" name="date" value="<?php echo $key->date; ?>" class="form-control" id="inp1" aria-describedby="emailHelp" placeholder="date">
								</div>
								
								<div class="form-group">
									<label for="inp1">serial</label>
									<input type="number" name="serial" value="<?php echo $key->serial; ?>" class="form-control" id="inp1" aria-describedby="emailHelp" placeholder="serial">
								</div>
							</div>
							<div class="col-md-6">
								
								<div class="form-group">
									<label for="inp1">Rating Five</label>
									<?php if($key->rating_five == 'warning' ){?>
									<input name="rating_five" type="hidden" value="default" id="rating_five">
									<input checked="checked" name="rating_five" type="checkbox" value="warning" id="rating_five">
									<?php }elseif($key->rating_five == 'default'){?>
									<input name="rating_five" type="hidden" value="default" id="rating_five">
									<input name="rating_five" type="checkbox" value="warning" id="rating_five">
									<?php }?>
									
								</div>
								<div class="form-group">
									<label for="inp1">Rating four</label>
									<?php if($key->rating_four == 'warning' ){?>
									<input name="rating_four" type="hidden" value="default" id="rating_four">
									<input checked="checked" name="rating_four" type="checkbox" value="warning" id="rating_four">
									<?php }elseif($key->rating_four == 'default'){?>
									<input name="rating_four" type="hidden" value="default" id="rating_four">
									<input name="rating_four" type="checkbox" value="warning" id="rating_four">
									<?php }?>
									
								</div>
								<div class="form-group">
									<label for="inp1">Rating Three</label>
									<?php if($key->rating_three == 'warning' ){?>
									<input name="rating_three" type="hidden" value="default" id="rating_three">
									<input checked="checked" name="rating_three" type="checkbox" value="warning" id="rating_three">
									<?php }elseif($key->rating_three == 'default'){?>
									<input name="rating_three" type="hidden" value="default" id="rating_three">
									<input name="rating_three" type="checkbox" value="warning" id="rating_three">
									<?php }?>
									
								</div>
								<div class="form-group">
									<label for="inp1">Rating Two</label>
									<?php if($key->rating_two == 'warning' ){?>
									<input name="rating_two" type="hidden" value="default" id="rating_two">
									<input checked="checked" name="rating_two" type="checkbox" value="warning" id="rating_two">
									<?php }elseif($key->rating_two == 'default'){?>
									<input name="rating_two" type="hidden" value="default" id="rating_two">
									<input name="rating_two" type="checkbox" value="warning" id="rating_two">
									<?php }?>
									
								</div>
								<div class="form-group">
									<label for="inp1">Rating One</label>
									<?php if($key->rating_one == 'warning' ){?>
									<input name="rating_one" type="hidden" value="default" id="rating_one">
									<input checked="checked" name="rating_one" type="checkbox" value="warning" id="rating_one">
									<?php }elseif($key->rating_one == 'default'){?>
									<input name="rating_one" type="hidden" value="default" id="rating_one">
									<input name="rating_one" type="checkbox" value="warning" id="rating_one">
									<?php }?>
									
								</div>
								
								
								<div class="form-group">
									<label for="inp1">Customer <?=lang("admin_h179");?></label>
									<input type="file" name="img" class="form-control-file" >
									<small class="form-text text-muted">image size (512 x 512)</small>
									<br/>
									<img src="<?= base_url();?>/images/<?php echo $key->img; ?>" alt="<?php echo $key->img; ?>" style="height:60px;width:60px;">
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
			<h1 class="h3 mb-2 text-gray-800">Customer Reviews</h1>
			<!-- DataTales Example -->
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary float-left">List</h6>
					<a href="<?php echo base_url("admin/add_customerReviews"); ?>" class="btn btn-success btn-icon-split btn-sm float-right">
						<span class="icon text-white-50">
							<i class="fas fa-plus"></i>
						</span>
						
					</a>
				</div>
				<div class="card-body">
					
					<ul id="responds" class="list-group">
						<?php foreach($customer as $key) { $idcat = $key->id; ?>
						<li id="slider_<?php echo $idcat; ?>" class="list-group-item border-left-primary" style="margin-bottom: 10px;">
							<span>Customer Name: <?php echo $key->customer_name; ?></span>
							
							<br/>
							<?php  if($key->product_id != 0){?>
							<?php foreach($datas as $data) : ?>
							<span><?php if($data->id == $key->product_id) echo "Product Name: $data->title;"  ?></span>
							<?php endforeach; ?>
							<?php }; ?>
							<br/>
							<span>Active Status: <?php  if($key->active_status == 1) echo "Active"; ?></span>
							<br>
							<span>Image <img src="<?= base_url();?>/images/<?php echo $key->img; ?>" alt="<?php echo $key->img; ?>" style="height:60px;width:60px;"></span>
							<div class="del_wrapper" style="float: right;">
								<a href="<?php echo base_url("admin/edit_customerReviews/$key->id"); ?>" class="btn btn-primary btn-icon-split btn-sm">
									<span class="icon text-white-50">
										<i class="fas fa-edit"></i>
									</span>
									
								</a>
								<a href="<?php echo base_url("admin/delt/cus_reviews/$key->id/customerReviews"); ?>" class="btn btn-danger btn-icon-split btn-sm">
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