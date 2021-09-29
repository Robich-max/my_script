<?php include_once 'inc/header.php'; ?>

<link href="<?php echo base_url(); ?>assets/css/bootstrap-toggle.min.css" rel="stylesheet">

<style>

	label {

    font-weight: 600;
}
.toggle {
width: 36.1625px!important;
    height: 26px!important;
}
.toggle.btn {
    min-width: unset;
    min-height: unset;
}
.toggle-off.btn {
    padding-left: 4px;
}
.toggle-on.btn {
        padding-right: 0px;
    right: 34px;

}
.toggle-group {
 
    top: -5px;
    }
    .toggle-off {
 
    padding: .375rem .25rem!important;

}  .toggle-on {
 
    padding: .375rem .25rem!important;

}
</style>
<script src="<?php echo base_url();?>/assets/js/tinymce.min.js" referrerpolicy="origin"></script>
<div id="content-wrapper" class="d-flex flex-column">

	<!-- Main Content -->
	<div id="content">

		<?php include_once 'inc/navbar.php'; ?>

			<div class="container-fluid">

				<?php if($tp == "add") { ?>

					<!-- Page Heading -->
					<h1 class="h3 mb-2 text-gray-800"><?=lang("admin_h174");?></h1>

					<?php echo form_open_multipart("",array("class" => "form-horizontal")); ?>
					<!-- DataTales Example -->
					<div class="card shadow mb-4">
						<div class="card-header py-3">
							<h6 class="m-0 font-weight-bold text-primary"><?=lang("admin_h175");?></h6>
						</div>
						
						<div class="card-body">

							<?php if(isset($msg)){ ?>
								<div class="alert alert-success"><?=lang("admin_h176");?> .</div>
							<?php } ?>
							
							<fieldset>
<div class="row">
	
	<div class="col-md-6">
			<div class="form-group">
									<label for="inp1"><?=lang("admin_h177");?> : </label>
									<input type="text" name="name" class="form-control" id="inp1" aria-describedby="emailHelp" placeholder="Name">
								</div>

								
								<div class="form-group">
									<label for="inp1"><?=lang("admin_h83");?> : </label>
									<input type="text" name="title" class="form-control" id="inp1" aria-describedby="emailHelp" placeholder="Title">
								</div>

								
								<div class="form-group">
									<label for="inp1"><?=lang("admin_h178");?> : </label>
									<textarea class="form-control" name="text" placeholder="Text"></textarea>
								</div>
	</div>
	<div class="col-md-6">
		
<div class="form-group">
									<label for="inp1"><?=lang("admin_h179");?></label>
									<input type="file" name="logo" class="form-control-file" >
									<small id="emailHelp" class="form-text text-muted"><?=lang("admin_h179");?></small>
								</div>
								
								
									<div class="form-group">
										<label for="inp1">Serial</label>
										<input type="number" name="position" class="form-control" id="inp1" aria-describedby="emailHelp" placeholder="Serial">
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
					<?php foreach($cat as $key){ ?>
						<!-- Page Heading -->
						<h1 class="h3 mb-2 text-gray-800"><?=lang("admin_h180");?></h1>

						<?php echo form_open_multipart("",array("class" => "form-horizontal")); ?>
						<!-- DataTales Example -->
						<div class="card shadow mb-4">
							<div class="card-header py-3">
								<h6 class="m-0 font-weight-bold text-primary">Edit slider</h6>
							</div>
							
							<div class="card-body">

								<?php if(isset($msg)){ ?>
									<div class="alert alert-success"><?php echo lang("admin_h51"); ?></div>
								<?php } ?>
								
								<fieldset>

<div class="row">
	<div class="col-md-6">
		<div class="form-group">
										<label for="inp1"><?=lang("admin_h24");?> : </label>
										<textarea id="summernote1" class="form-control" name="name" placeholder="name"><?php echo $key->name; ?></textarea>
									</div>
									
									<div class="form-group">
										<label for="inp1"><?=lang("admin_h83");?> : </label>
										<textarea id="summernote" class="form-control" name="title" placeholder="title"><?php echo $key->title; ?></textarea>
									</div>

									
									<div class="form-group">
										<label for="inp1"><?=lang("admin_h178");?> : </label>
										<textarea id="summernote2" class="form-control" name="text" placeholder="Text"><?php echo $key->text; ?></textarea>
									</div>


	</div>
	<div class="col-md-6">
		

									<div class="form-group">
										<label for="inp1"><?=lang("admin_h179");?></label>
										<input type="file" name="logo" class="form-control-file" >
										<small id="emailHelp" class="form-text text-muted"><?=lang("admin_h179");?></small>
										<br>
										<img src="<?= base_url();?>/images/<?php echo $key->img; ?>" alt="<?php echo $key->img; ?>" style="height:120px;width:80px;">
									</div>
									
										<div class="form-group">
										<label for="inp1">Serial</label>
										<input type="number" name="position" value="<?php echo $key->position; ?>" class="form-control" id="inp1" aria-describedby="emailHelp" placeholder="Serial">
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
					<h1 class="h3 mb-2 text-gray-800"><?=lang("admin_h180");?></h1>

					<!-- DataTales Example -->
					<div class="card shadow mb-4">
						<div class="card-header py-3">
							<h6 class="m-0 font-weight-bold text-primary float-left">List</h6>
							<a href="<?php echo base_url("admin/add_slider"); ?>" class="btn btn-success btn-icon-split btn-sm float-right">
								<span class="icon text-white-50">
									<i class="fas fa-plus"></i>
								</span>
							
							</a>
						</div>
						<div class="card-body">
							
							<ul id="responds" class="list-group">
								<?php foreach($cat as $key) { $idcat = $key->id; ?>

									<li id="slider_<?php echo $idcat; ?>" class="list-group-item border-left-primary" style="margin-bottom: 10px;">
										<span><?php echo $key->name, " : ", $key->title; ?></span>
										
										<div class="del_wrapper" style="float: right;">

                                          <a class="cls-color">  
                                            <?php if($key->active_status == 1) { ?>

                                            <input id="toggle-event" type="checkbox" class='radio' value='0,<?php echo $key->id; ?>' checked name='active_status' data-toggle="toggle">
                                        <?php }else if ($key->active_status == 0) {?>
                                            <input id="toggle-event" type="checkbox" class='radio' value='1,<?php echo $key->id; ?>' name='active_status' data-toggle="toggle">
                                        <?php } ?> </a>

											<a href="<?php echo base_url("admin/edit_slider/$key->id"); ?>" class="btn btn-primary btn-icon-split btn-sm">
												<span class="icon text-white-50">
													<i class="fas fa-edit"></i>
												</span>
												
											</a>

											<a href="<?php echo base_url("admin/delt/slider/$key->id/slider"); ?>" class="btn btn-danger btn-icon-split btn-sm">
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


<!--<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>-->
<?php if($tp  == "add" Or $tp == "edit"){?>
<?php }else{?>
<script src="<?php echo base_url(); ?>assets/js/jquery1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-toggle.min.js"></script>
<?php }?>

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


<script>
        $('.radio').on('change', function () {
            console.log('Checked value =', $(this).val())
            vals = $(this).val();
            alert('Are you sure?');
            
            	$.ajax({
            	    data: "id=" + vals,
            		type: 'post',
            		  dataType: 'html',
            		url: '<?php echo base_url("admin/slidersUpdateActive"); ?>',
            		success : function(re) {
                      //alert(re);
                      location.reload();
                  }
              });
           

        })

    </script>