<?php include_once 'inc/header.php'; ?>

<div id="content-wrapper" class="d-flex flex-column">

	<!-- Main Content -->
	<div id="content">

		<?php include_once 'inc/navbar.php'; ?>

			<div class="container-fluid">

				<?php if($tp == "add") { ?>

					<!-- Page Heading -->
					<h1 class="h3 mb-2 text-gray-800"><?=lang("admin_h165");?></h1>

					<?php echo form_open_multipart("",array("class" => "form-horizontal")); ?>
					<!-- DataTales Example -->
					<div class="card shadow mb-4">
						<div class="card-header py-3">
							<h6 class="m-0 font-weight-bold text-primary"><?=lang("admin_h166");?></h6>
						</div>
						
						<div class="card-body">

							<?php if(isset($msg)){ ?>
								<div class="alert alert-success"><?=lang("admin_h167");?> .</div>
							<?php } ?>
							
							<fieldset>

								
								<div class="form-group">
									<label for="inp1"><?=lang("admin_h83");?></label>
									<input type="text" name="title" class="form-control" id="inp1" aria-describedby="emailHelp" placeholder="Title">
								</div>


								
								<div class="form-group">
									<label for="inp1"><?=lang("admin_h168");?> </label>
									<input type="text" name="price" class="form-control" id="inp1" aria-describedby="emailHelp" placeholder="Price">
								</div>

								
								<div class="form-group">
									<label for="inp1"><?=lang("admin_h169");?></label>
									<input type="text" name="info" class="form-control" id="inp1" aria-describedby="emailHelp" placeholder="Info">
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
						<h1 class="h3 mb-2 text-gray-800"><?=lang("admin_h165");?></h1>

						<?php echo form_open_multipart("",array("class" => "form-horizontal")); ?>
						<!-- DataTales Example -->
						<div class="card shadow mb-4">
							<div class="card-header py-3">
								<h6 class="m-0 font-weight-bold text-primary"><?=lang("admin_h170");?></h6>
							</div>
							
							<div class="card-body">

								<?php if(isset($msg)){ ?>
									<div class="alert alert-success"><?=lang("admin_h171");?> .</div>
								<?php } ?>
								
								<fieldset>

									
									<div class="form-group">
										<label for="inp1"><?=lang("admin_h83");?></label>
										<input type="text" name="title" value="<?php echo $key->title; ?>" class="form-control" id="inp1" aria-describedby="emailHelp" placeholder="Title">
									</div>


									
									<div class="form-group">
										<label for="inp1"><?=lang("admin_h168");?> </label>
										<input type="text" name="price" value="<?php echo $key->price; ?>" class="form-control" id="inp1" aria-describedby="emailHelp" placeholder="Price">
									</div>

									
									<div class="form-group">
										<label for="inp1"><?=lang("admin_h169");?></label>
										<input type="text" name="info" value="<?php echo $key->info; ?>" class="form-control" id="inp1" aria-describedby="emailHelp" placeholder="Info">
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
					<h1 class="h3 mb-2 text-gray-800"><?=lang("admin_h165");?></h1>

					<!-- DataTales Example -->
					<div class="card shadow mb-4">
						<div class="card-header py-3">
							<h6 class="m-0 font-weight-bold text-primary float-left"><?=lang("admin_h165");?></h6>
							<a href="<?php echo base_url("admin/add_shipping"); ?>" class="btn btn-success btn-icon-split btn-sm float-right">
								<span class="icon text-white-50">
									<i class="fas fa-plus"></i>
								</span>
							
							</a>
						</div>
						<div class="card-body">
							
							<ul id="responds" class="list-group">
								<?php foreach($cat as $key) { $idcat = $key->id; ?>

									<li id="shipping_<?php echo $idcat; ?>" class="list-group-item border-left-primary" style="margin-bottom: 10px;">
										<span><?php echo $key->title; ?></span>
										<div class="del_wrapper" style="float: right;">



											<a href="<?php echo base_url("admin/edit_shipping/$key->id"); ?>" class="btn btn-primary btn-icon-split btn-sm">
												<span class="icon text-white-50">
													<i class="fas fa-edit"></i>
												</span>
												
											</a>

											<a href="<?php echo base_url("admin/delt/shipping/$key->id/shipping"); ?>" class="btn btn-danger btn-icon-split btn-sm">
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