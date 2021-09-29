<?php include_once 'inc/header.php'; ?>

	<script src="<?php echo base_url();?>/assets/js/tinymce.min.js" referrerpolicy="origin"></script>

<div id="content-wrapper" class="d-flex flex-column">

	<!-- Main Content -->
	<div id="content">

		<?php include_once 'inc/navbar.php'; ?>

			<div class="container-fluid">

				<?php if($tp == "add") { ?>

					<!-- Page Heading -->
					<h1 class="h3 mb-2 text-gray-800">Sub Category</h1>

					<?php echo form_open_multipart("",array("class" => "form-horizontal")); ?>
					<!-- DataTales Example -->
					<div class="card shadow mb-4">
						<div class="card-header py-3">
							<h6 class="m-0 font-weight-bold text-primary">Sub Category</h6>
						</div>
						
						<div class="card-body">

							<?php if(isset($msg)){ ?>
								<div class="alert alert-success">the sub category has been successfully added .</div>
							<?php } ?>
							
							<fieldset>


								<div class="form-group">
									<label for="inp4">Category Select</label>
									<!-- <div id="editor"></div> -->

									<select name="cat_id" id="" class="form-control">
										<option>--Select--</option>
										 <?php foreach($cat as $data) : ?>
										<option value="<?php echo $data->id; ?>"><?php echo $data->title; ?></option>
											<?php endforeach; ?>
									</select>
								
								</div>
							

									
								<div class="form-group">
									<label for="inp1">Name</label>
									<input type="text" name="name" class="form-control" id="inp1" aria-describedby="emailHelp" placeholder="Name">
								</div>
								
							

								
								<div class="form-group">
									<label for="inp1">serial</label>
									<input type="number" name="serial" class="form-control" id="inp1" aria-describedby="emailHelp" placeholder="serial">
								</div>


								<div class="form-group">
									<label for="inp1">Banner Image</label>
									<input type="file" name="img" class="form-control-file" >
									<small id="emailHelp" class="form-text text-muted">Banner Image size (1920x570)</small>
								</div>


								<div class="form-group">
										<label for="inp1">Active Status</label>
						
								      <input name="active_status" type="hidden" value="0" id="active_status">
                                      <input name="active_status" type="checkbox" value="1" id="active_status">
										
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
					<?php foreach($subcat as $key){ ?>
						<!-- Page Heading -->
						<h1 class="h3 mb-2 text-gray-800">Edit Sub Category</h1>

						<?php echo form_open_multipart("",array("class" => "form-horizontal")); ?>
						<!-- DataTales Example -->
						<div class="card shadow mb-4">
							<div class="card-header py-3">
								<h6 class="m-0 font-weight-bold text-primary">Edit Sub Category</h6>
							</div>
							
							<div class="card-body">

							<?php if(isset($msg)){ ?>
								<div class="alert alert-success">the Sub Category has been successfully added .</div>
							<?php } ?>
								
								<fieldset>


                             <div class="form-group">
									<label for="inp4">category Select</label>
									<!-- <div id="editor"></div> -->

									<select name="cat_id" id="" class="form-control">
										<option>--Select--</option>
										 <?php foreach($cat as $datainfo) : ?>
										<option value="<?php echo $datainfo->id; ?>" <?php if($datainfo->id == $key->cat_id) echo "selected"; ?>><?php echo $datainfo->title; ?></option>
											<?php endforeach; ?>
									</select>
								
								</div>
								
							
								
									<div class="form-group">
										<label for="inp1">Name</label>
										<input type="text" name="name" value="<?php echo $key->name; ?>" class="form-control" id="inp1" aria-describedby="emailHelp" placeholder="name">
									</div>
									
									
									<div class="form-group">
										<label for="inp1">Serial</label>
										<input type="number" name="serial" value="<?php echo $key->serial; ?>" class="form-control" id="inp1" aria-describedby="emailHelp" placeholder="serial">
									</div>	


							
								<div class="form-group">
									<label for="inp1">Banner Image</label>
									<input type="file" name="img" class="form-control-file" >
									<small id="emailHelp" class="form-text text-muted">Banner Image size (1920x570)</small>
									<br>
									<img src="<?= base_url();?>images/<?php echo $key->banner_img; ?>" alt="<?php echo $key->banner_img; ?>" style="height:60px;width:140px;">
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
					<h1 class="h3 mb-2 text-gray-800">Sub Category</h1>

					<!-- DataTales Example -->
					<div class="card shadow mb-4">
						<div class="card-header py-3">
							<h6 class="m-0 font-weight-bold text-primary float-left">List</h6>
							<a href="<?php echo base_url("admin/add_subCat"); ?>" class="btn btn-success btn-icon-split btn-sm float-right">
								<span class="icon text-white-50">
									<i class="fas fa-plus"></i>
								</span>
							</a>
						</div>
						<div class="card-body">
							
							<ul id="responds" class="list-group">
								<?php foreach($subcat as $key) { $idcat = $key->id; ?>

									<li id="slider_<?php echo $idcat; ?>" class="list-group-item border-left-primary" style="margin-bottom: 10px;">
										<span>Sub Category Name: <?php echo $key->name; ?></span>
										<div class="del_wrapper" style="float: right;">



											<a href="<?php echo base_url("admin/edit_subCat/$key->id"); ?>" class="btn btn-primary btn-icon-split btn-sm">
												<span class="icon text-white-50">
													<i class="fas fa-edit"></i>
												</span>
										
											</a>

											<a href="<?php echo base_url("admin/delt/subcat/$key->id/subCat"); ?>" class="btn btn-danger btn-icon-split btn-sm">
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
