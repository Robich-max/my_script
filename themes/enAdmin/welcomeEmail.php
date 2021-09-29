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
			<h1 class="h3 mb-2 text-gray-800">Welcome Email</h1>
			<?php echo form_open_multipart("",array("class" => "form-horizontal")); ?>
			<!-- DataTales Example -->
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Welcome Email Setting</h6>
				</div>

				<div class="card-body">

					<fieldset>
						<div class="row">
							<div class="col-lg-12"> <div class="form-group">
								<label for="inp4">Select Email</label>
								<!-- <div id="editor"></div> -->

								<select name="wemail_name" id=""  class="form-control">
									<option value="welcome_email_one" <?php if($key->wemail_name == "welcome_email_one") echo "selected"; ?>>Welcome Email One</option>
									<option value="welcome_email_two" <?php if($key->wemail_name == "welcome_email_two") echo "selected"; ?>>Welcome Email Two</option>

								</select>

								
							</div>
							<div class="form-group">
									<label for="inp1">Welcome Email Subject </label>
									<input type="text" name="wesubject" value="<?php echo $key->wesubject; ?>" class="form-control" placeholder="Enter Title">
								</div>

						</div>
						</div>
						<div class="row one">
							<div class="col-md-6">

								<div class="form-group">
									<label for="inp1">Email Color</label>
									<input type="color" name="weo_color" value="<?php echo $key->weo_color; ?>" class="form-control" placeholder="Enter Title">
								</div>


								<div class="form-group">
									<label for="inp1">Image</label>
									<input type="file" name="weo_image" value="<?php echo $key->weo_image; ?>" class="form-control" placeholder="Enter Title">

                     <img src="<?= base_url();?>/images/<?php echo $key->weo_image; ?>" alt="<?php echo $key->weo_image; ?>" style="height:60px;width:140px;">
                     
								</div>


								<div class="form-group">
									<label for="inp1">Description</label>

									<textarea id="summernote" name="weo_desc"><?php echo $key->weo_desc; ?></textarea>
								</div>


								<div class="form-group">
									<label for="inp1">One Title</label>
									<input type="text" name="weo_one_title" value="<?php echo $key->weo_one_title; ?>" class="form-control" placeholder="Enter Title">
								</div>

								<div class="form-group">
									<label for="inp1">One Image</label>
									<input type="file" name="weo_one_image" value="<?php echo $key->weo_one_image; ?>" class="form-control" placeholder="Enter Title">

                   <img src="<?= base_url();?>/images/<?php echo $key->weo_one_image; ?>" alt="<?php echo $key->weo_one_image; ?>" style="height:60px;width:140px;">
								</div>


								<div class="form-group">
									<label for="inp1">One Description</label>

									<textarea id="summernote1" name="weo_one_desc"><?php echo $key->weo_one_desc; ?></textarea>
								</div>


							</div>


							<div class="col-md-6">


								<div class="form-group">
									<label for="inp1">Two Title</label>
									<input type="text" name="weo_two_title" value="<?php echo $key->weo_two_title; ?>" class="form-control" placeholder="Enter Title">
								</div>

								<div class="form-group">
									<label for="inp1">Two Image</label>
									<input type="file" name="weo_two_image" value="<?php echo $key->weo_two_image; ?>" class="form-control" placeholder="Enter Title">

                  <img src="<?= base_url();?>/images/<?php echo $key->weo_two_image; ?>" alt="<?php echo $key->weo_two_image; ?>" style="height:60px;width:140px;">
								</div>


								<div class="form-group">
									<label for="inp1">Two Description</label>

									<textarea id="summernote2" name="weo_two_desc"><?php echo $key->weo_two_desc; ?></textarea>
								</div>

									<div class="form-group">
Three									<input type="text" name="weo_three_title" value="<?php echo $key->weo_three_title; ?>" class="form-control" placeholder="Enter Title">
								</div>

								<div class="form-group">
									<label for="inp1">Three Image</label>
									<input type="file" name="weo_three_image" value="<?php echo $key->weo_three_image; ?>" class="form-control" placeholder="Enter Title">

                    <img src="<?= base_url();?>/images/<?php echo $key->weo_three_image; ?>" alt="<?php echo $key->weo_three_image; ?>" style="height:60px;width:140px;">
								</div>


								<div class="form-group">
									<label for="inp1">Three Description</label>

									<textarea id="summernote3" name="weo_one_desc"><?php echo $key->weo_three_desc; ?></textarea>
								</div>


							</div>
						</div>

							<div class="row two">
							<div class="col-md-6">

							
								<div class="form-group">
									<label for="inp1">Email Color</label>
									<input type="color" name="wet_color" value="<?php echo $key->wet_color; ?>" class="form-control" placeholder="Enter Title">
								</div>


								<div class="form-group">
									<label for="inp1">Image</label>
									<input type="file" name="wet_image" value="<?php echo $key->wet_image; ?>" class="form-control" placeholder="Enter Title">

<small class="form-text text-muted">image size (300 x 424)</small>
<br/>

                 <img src="<?= base_url();?>/images/<?php echo $key->wet_image; ?>" alt="<?php echo $key->wet_image; ?>" style="height:60px;width:60px;">

								</div>

									<div class="form-group">
									<label for="inp1">Description</label>

									<textarea id="summernote4" name="wet_desc"><?php echo $key->wet_desc; ?></textarea>
								</div>


									<div class="form-group">
									<label for="inp1">Div title Description</label>

									<textarea id="summernote5" name="wet_divo_desc"><?php echo $key->wet_divo_desc; ?></textarea>
								</div>


								<div class="form-group">
									<label for="inp1">section one image</label>
									<input type="file" name="wet_sco_image" value="<?php echo $key->wet_sco_image; ?>" class="form-control" >
<small class="form-text text-muted">image size (512 x 512)</small>
<br/>
                    <img src="<?= base_url();?>/images/<?php echo $key->wet_sco_image; ?>" alt="<?php echo $key->wet_sco_image; ?>" style="height:60px;width:140px;">
								</div>

									<div class="form-group">
									<label for="inp1">Section one Desc</label>

									<textarea id="summernote6" name="wet_sco_desc"><?php echo $key->wet_sco_desc; ?></textarea>
								</div>


							



							</div>


							<div class="col-md-6">

	<div class="form-group">
									<label for="inp1">section two image</label>
									<input type="file" name="wet_sct_image" value="<?php echo $key->wet_sct_image; ?>" class="form-control" >

                  <small class="form-text text-muted">image size (512 x 512)</small>
                  <br/>

                   <img src="<?= base_url();?>/images/<?php echo $key->wet_sct_image; ?>" alt="<?php echo $key->wet_sct_image; ?>" style="height:60px;width:140px;">
								</div>

									<div class="form-group">
									<label for="inp1">Section two Desc</label>

									<textarea id="summernote7" name="wet_sct_desc"><?php echo $key->wet_sct_desc; ?></textarea>
								</div>

									<div class="form-group">
									<label for="inp1">section three image</label>
									<input type="file" name="wet_scth_image" value="<?php echo $key->wet_scth_image; ?>" class="form-control" >
<small class="form-text text-muted">image size (512 x 512)</small>
<br/>
                    <img src="<?= base_url();?>/images/<?php echo $key->wet_scth_image; ?>" alt="<?php echo $key->wet_scth_image; ?>" style="height:60px;width:140px;">
								</div>

									<div class="form-group">
									<label for="inp1">Section two Desc</label>

									<textarea id="summernote8" name="wet_scth_desc"><?php echo $key->wet_scth_desc; ?></textarea>
								</div>


								<div class="form-group">
									<label for="inp1">Section Last Desc</label>

									<textarea id="summernote9" name="wet_lt_desc"><?php echo $key->wet_lt_desc; ?></textarea>
								</div>


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