

<link href="<?php echo base_url(); ?>assets/css/bootstrap-toggle.min.css" rel="stylesheet">
<style>
    .cls-color-2>.toggle>.toggle-group>.btn-primary {
    color: #fff;
    background-color: #1cc88a;
    border-color: #1cc88a;
}  
.cls-color-2.toggle.toggle-group.btn-primary :hover {
    color: #fff;
    background-color: #1cc88a;
    border-color: #1cc88a;
} 

.cls-color-2>.toggle>.toggle-group>.toggle-off {
    color: #fff;
    background-color:#e74a3b;
    border-color:#e74a3b;
}  
.cls-color-2>.toggle>.toggle-group>.toggle-off :hover {
    color: #fff;
    background-color: #e74a3b;
    border-color:#e74a3b;
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
<?php include_once 'inc/header.php'; ?>

<div id="content-wrapper" class="d-flex flex-column">

	<!-- Main Content -->
	<div id="content">

		<?php include_once 'inc/navbar.php'; ?>

			<div class="container-fluid">

				<?php if($tp == "add") { ?>

					<!-- Page Heading -->
					<h1 class="h3 mb-2 text-gray-800">Top Slider</h1>

					<?php echo form_open_multipart("",array("class" => "form-horizontal")); ?>
					<!-- DataTales Example -->
					<div class="card shadow mb-4">
						<div class="card-header py-3">
							<h6 class="m-0 font-weight-bold text-primary">Add new slider</h6>
						</div>
						
						<div class="card-body">

							<?php if(isset($msg)){ ?>
								<div class="alert alert-success">the slider has been successfully added .</div>
							<?php } ?>
							
							<fieldset>
							    
								
								<div class="form-group">
									<label for="inp1">Text</label>
									<input type="text" name="text" class="form-control" id="inp1" aria-describedby="emailHelp" placeholder="Text">
									<small id="emailHelp" class="form-text text-muted">Text</small>
								</div>


								
								<div class="form-group">
									<label for="inp1">Icon </label>
									<input type="text" name="icon" class="form-control" id="inp1" aria-describedby="emailHelp" placeholder="Icon">
									<small id="emailHelp" class="form-text text-muted">Icon</small>
								</div>
								
								<div class="form-group">
									<label for="inp1">Slider Status </label>
									<input type="text" name="position" class="form-control" id="inp1" aria-describedby="emailHelp" placeholder="Add status 0 for inactive, 1 for active and 2 for flashing">
									<small id="emailHelp" class="form-text text-muted">Status</small>
								</div>
							

							</fieldset>

						</div>
						
						<div class="card-footer">
							
							<div class="float-right">
								
								<button class="button btn btn-success" name="test" type="submit">Add</button>

							</div>

						</div>

						

					</div>

					<?php echo form_close(); ?>
					

				<?php }elseif($tp == "edit") { ?>
					<?php foreach($cat as $key){ ?>
						<!-- Page Heading -->
						<h1 class="h3 mb-2 text-gray-800">Top slider</h1>

						<?php echo form_open_multipart("",array("class" => "form-horizontal")); ?>
						<!-- DataTales Example -->
						<div class="card shadow mb-4">
							<div class="card-header py-3">
								<h6 class="m-0 font-weight-bold text-primary">Update slider</h6>
							</div>
							
							<div class="card-body">

								<?php if(isset($msg)){ ?>
									<div class="alert alert-success">the slider has been successfully updated .</div>
								<?php } ?>
								
								<fieldset>

										
									
									<div class="form-group">
										<label for="inp1">Text</label>
										<input type="text" name="text" class="form-control" id="inp1" aria-describedby="emailHelp" placeholder="Text" value="<?php echo $key->text; ?>">
										<small id="emailHelp" class="form-text text-muted">Text</small>
									</div>


									
									<div class="form-group">
										<label for="inp1">Icon </label>
										<input type="text" name="icon" class="form-control" id="inp1" aria-describedby="emailHelp" placeholder="Icon" value="<?php echo $key->icon; ?>">
										<small id="emailHelp" class="form-text text-muted">Icon</small>
									</div>
									
								
								
								    <!--div class="form-group">
										<label for="inp1">Status </label>
										<input type="checkbox" id="inp1" name="active" value="<?php echo $key->active; ?>">
										<small id="emailHelp" class="form-text text-muted">Status</small>
									</div>-->
										

								</fieldset>

							</div>
							
							<div class="card-footer">
								
								<div class="float-right">
									
									<button class="button btn btn-success" name="test" type="submit">Update</button>

								</div>

							</div>

							

						</div>

						<?php echo form_close(); ?>

					<?php } ?>

				<?php }else { ?>

					<!-- Page Heading -->
					<h1 class="h3 mb-2 text-gray-800">Slids</h1>

					<!-- DataTales Example -->
					<div class="card shadow mb-4">
						<div class="card-header py-3">
							<h6 class="m-0 font-weight-bold text-primary float-left">List</h6>
							<a href="<?php echo base_url("admin/add_slid"); ?>" class="btn btn-success btn-icon-split btn-sm float-right">
								<span class="icon text-white-50">
									<i class="fas fa-plus"></i>
								</span>
							</a>
						</div>
						
						<div class="card-body">
							
							<ul id="responds" class="list-group">
								<?php foreach($cat as $key) { $idcat = $key->id; ?>

									<li id="slids_<?php echo $idcat; ?>" class="list-group-item border-left-primary" style="margin-bottom: 10px;">
										<span><?php echo $key->text; ?></span>
										<span><?php if($key->position == 1) { echo "Active"; } else if ($key->position == 1) { echo "Inactive";}  else if ($key->position == 2) { echo "Flashing news";}?></span>
										<div class="del_wrapper" style="float: right;">






                                               <a class="cls-color">     <?php if($key->position == 1) { ?>

                                            <input id="toggle-event" type="checkbox" class='radio' value='0,<?php echo $key->id; ?>' checked name='active_status' data-toggle="toggle">
                                        <?php }else if ($key->position == 0) {?>
                                            <input id="toggle-event" type="checkbox" class='radio' value='1,<?php echo $key->id; ?>' name='active_status' data-toggle="toggle">
                                        <?php } ?> </a>
                                
                                   
                                        
                                        <a class="cls-color-2">
                                        <?php if($key->position == 2) { ?>
                                     

                                            <input id="toggle-event" type="checkbox" class='radio btn-success' value='0,<?php echo $key->id; ?>' checked name='active_status' data-toggle="toggle" style="color:green;">
                                     <?php }else if ($key->position == 0) {?>
                                            <input id="toggle-event" type="checkbox" class='radio' value='2,<?php echo $key->id; ?>' name='active_status' data-toggle="toggle">
                                        <?php } ?>
                                
                                </a>

											<a href="<?php echo base_url("admin/edit_slid/$key->id"); ?>" class="btn btn-primary btn-icon-split btn-sm">
												<span class="icon text-white-50">
													<i class="fas fa-edit"></i>
												</span>
												
											</a>
											
											     

											<a href="<?php echo base_url("admin/delt/slids/$key->id/slids"); ?>" class="btn btn-danger btn-icon-split btn-sm">
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
<script src="<?php echo base_url(); ?>assets/js/jquery1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-toggle.min.js"></script>

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
            		url: '<?php echo base_url("admin/SlidsUpdate"); ?>',
            		success : function(re) {
                      //alert(re);
                      location.reload();
                  }
              });
           

        })

    </script>

   

