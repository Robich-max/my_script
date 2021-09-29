<?php include_once 'inc/header.php'; ?>
<style type="text/css" media="screen">
label {

	font-weight: 600;
}
.color {
	width: 20%;
}
</style>
<div id="content-wrapper" class="d-flex flex-column">

	<!-- Main Content -->
	<div id="content">

		<?php include_once 'inc/navbar.php'; ?>

		<div class="container-fluid">


			<?php foreach($email as $key){ ?>

			<!-- Page Heading -->
			<h1 class="h3 mb-2 text-gray-800">Abandon Email</h1>
			<?php echo form_open_multipart("",array("class" => "form-horizontal")); ?>
			<!-- DataTales Example -->
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Abandon Email Setting</h6>
				</div>

				<div class="card-body">

					<fieldset>
				
						<div class="row one">
							<div class="col-md-6">


              


							 <select name="abandon_name" id=""  class="form-control">
                  <option value="abandonEmailOne" <?php if($key->abandon_name == "abandonEmailOne") echo "selected"; ?>>Abandon Email One</option>
                  <option value="abandonEmailTwo" <?php if($key->abandon_name == "abandonEmailTwo") echo "selected"; ?>>Abandon Email Two</option>

                </select>


								<div class="form-group">
									<label for="inp1">After</label>
									<input type="number" name="time" value="<?php echo $key->time; ?>" class="form-control" placeholder="Enter Time">
								</div>  


                <div class="form-group">
                  <label for="inp1">Image</label>
                  <input type="file" name="ab_img" value="<?php echo $key->ab_img; ?>" class="form-control" placeholder="Enter Title">

                  <small class="form-text text-muted">image size (1050 x 550)</small>
                  <br/>
                  <img src="<?= base_url();?>/images/<?php echo $key->ab_img; ?>" alt="<?php echo $key->ab_img; ?>" style="height:60px;width:140px;">
                </div>


		</div>
              <div class="col-lg-6">
                    <div class="form-group">
                  <label for="inp1">Description</label>

                  <textarea id="summernote" name="ab_desc"><?php echo $key->ab_desc; ?></textarea>
                </div>
              </div>


              <div class="form-group">
										<label for="inp1">Active Status</label>
										<?php if($key->ab_active_status == 1 ){?>
									   <input name="ab_active_status" type="hidden" value="0" id="ab_active_status">
                                            <input checked="checked" name="ab_active_status" type="checkbox" value="1" id="ab_active_status">
										<?php }elseif($key->ab_active_status == 0){?>
								    	   <input name="ab_active_status" type="hidden" value="0" id="ab_active_status">
                                            <input name="ab_active_status" type="checkbox" value="1" id="ab_active_status">

										<?php }?>
										
									</div>


						
						</div>

					

					</fieldset>

				</div>

				<div class="card-footer">

					<div class="float-right">

						<button class="button btn btn-success"  type="submit"><?=lang("admin_h92");?></button>

					</div>

				</div>



			</div>

			<?php echo form_close(); ?>


			<?php } ?>



		</div>
		<!-- /.container-fluid -->


	</div>


	<?php include_once 'inc/footer.php'; ?>


	<script type="text/javascript">
		$(document).ready(function(){
        $("select").change(function(){
            $( "select option:selected").each(function(){
                if($(this).attr("value")=="welcome_email_two"){
                    $(".one").hide();
                    $(".two").show();
                }
                if($(this).attr("value")=="welcome_email_one"){
                    $(".two").hide();
                    $(".one").show();
                }
                
               
            });
        }).change();
    });
	</script>