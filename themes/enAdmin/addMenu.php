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
					<h1 class="h3 mb-2 text-gray-800">Main Menu</h1>

					<?php echo form_open_multipart("",array("class" => "form-horizontal")); ?>
					<!-- DataTales Example -->
					<div class="card shadow mb-4">
						<div class="card-header py-3">
							<h6 class="m-0 font-weight-bold text-primary">Main Menu</h6>
						</div>
						
						<div class="card-body">

							<?php if(isset($msg)){ ?>
								<div class="alert alert-success">the manu has been successfully added .</div>
							<?php } ?>
							
							<fieldset>

							<div class="row">
								<div class="col-md-6">		
								<div class="form-group">
									<label for="inp1">Name</label>
									<input type="text" name="name" class="form-control" id="inp1" aria-describedby="emailHelp" placeholder="Name">
								</div>
								
							

								
								<div class="form-group">
									<label for="inp1">serial</label>
									<input type="number" name="serial" class="form-control" id="inp1" aria-describedby="emailHelp" placeholder="serial">
								</div>


								<div class="form-group">
									<label for="inp4">Link at Main Menu</label>
									<!-- <div id="editor"></div> -->

									<select name="menu" id="" class="form-control">
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
								</div></div>
								<div class="col-md-6">
									


								<div class="form-group">
									<label for="inp4">Footer column select</label>
									<!-- <div id="editor"></div> -->

									<select name="footer_column" id="" class="form-control">
										<option value="0">footer column 1</option>
										<option value="1">footer column 2</option>
										<option value="2">footer column 3</option>
									</select>
									
								</div>


								<div class="form-group">
									<label for="inp4">Single Page</label>
									<!-- <div id="editor"></div> -->

									<select name="single" id="" class="form-control">
										<option value="0"><?=lang("admin_h88");?></option>
										<option value="1"><?=lang("admin_h89");?></option>
									</select>
									<small id="emailHelp" class="form-text text-muted"><?=lang("admin_h90");?></small>
								</div>

								<div class="form-group">
										<label for="inp1">Active Status</label>
						
								      <input name="active_status" type="hidden" value="0" id="active_status">
                                      <input name="active_status" type="checkbox" value="1" id="active_status">
										
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
					<?php foreach($menu as $key){ ?>
						<!-- Page Heading -->
						<h1 class="h3 mb-2 text-gray-800">Edit Main Menu</h1>

						<?php echo form_open_multipart("",array("class" => "form-horizontal")); ?>
						<!-- DataTales Example -->
						<div class="card shadow mb-4">
							<div class="card-header py-3">
								<h6 class="m-0 font-weight-bold text-primary">Edit Main Menu</h6>
							</div>
							
							<div class="card-body">

							<?php if(isset($msg)){ ?>
								<div class="alert alert-success">the manu has been successfully added .</div>
							<?php } ?>
								
								<fieldset>

								<div class="row">
									
									<div class="col-md-6">
									<div class="form-group">
										<label for="inp1">Name</label>
										<input type="text" name="name" value="<?php echo $key->name; ?>" class="form-control" id="inp1" aria-describedby="emailHelp" placeholder="name">
									</div>
									
									
									<div class="form-group">
										<label for="inp1">Serial</label>
										<input type="number" name="serial" value="<?php echo $key->serial; ?>" class="form-control" id="inp1" aria-describedby="emailHelp" placeholder="serial">
									</div>	


									<div class="form-group">
									<label for="inp4">Link at Main Menu</label>
									<!-- <div id="editor"></div> -->

									<select name="menu" id="" class="form-control">
										<option value="0">No</option>
										<option value="1" <?php if($key->menu == 1) echo "selected"; ?>>Yes</option>
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



                                    </div>
									<div class="col-md-6">
										



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
									<label for="inp4">Single Page</label>
									<!-- <div id="editor"></div> -->

									<select name="single" id="" class="form-control">
										<option value="0">No</option>
										<option value="1" <?php if($key->single == 1) echo "selected"; ?>>Yes</option>
									</select>

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
					<h1 class="h3 mb-2 text-gray-800">Main Menu</h1>

					<!-- DataTales Example -->
					<div class="card shadow mb-4">
						<div class="card-header py-3">
							<h6 class="m-0 font-weight-bold text-primary float-left">List</h6>
							<a href="<?php echo base_url("admin/add_mainMenu"); ?>" class="btn btn-success btn-icon-split btn-sm float-right">
								<span class="icon text-white-50">
									<i class="fas fa-plus"></i>
								</span>
								
							</a>
						</div>
						<div class="card-body">
							
							<ul id="responds" class="list-group">
								<?php foreach($menu as $key) { $idcat = $key->id; ?>

									<li id="slider_<?php echo $idcat; ?>" class="list-group-item border-left-primary" style="margin-bottom: 10px;">
										<span>Menu Name: <?php echo $key->name; ?></span>
										<div class="del_wrapper" style="float: right;">



											<a href="<?php echo base_url("admin/edit_mainMenu/$key->id"); ?>" class="btn btn-primary btn-icon-split btn-sm">
												<span class="icon text-white-50">
													<i class="fas fa-edit"></i>
												</span>
										
											</a>

											<a href="<?php echo base_url("admin/delt/mainmenu/$key->id/addMenu"); ?>" class="btn btn-danger btn-icon-split btn-sm">
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

<script type="text/javascript">
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
		$('#summernote').summernote({
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
