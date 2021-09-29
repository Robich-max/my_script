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


					<?php foreach($setting as $key){ ?>

					<!-- Page Heading -->
					<h1 class="h3 mb-2 text-gray-800"><?=lang("admin_h15");?></h1>
					<?php echo form_open_multipart("",array("class" => "form-horizontal")); ?>
					<!-- DataTales Example -->
					<div class="card shadow mb-4">
						<div class="card-header py-3">
							<h6 class="m-0 font-weight-bold text-primary"><?=lang("admin_h148");?></h6>
						</div>
						
						<div class="card-body">
							
							<fieldset>

								<div class="row">
									
									<div class="col-md-6">
										
<div class="form-group">
									<label for="inp1">Customer Sent Email Title</label>
									<input type="text" name="title" value="<?php echo $key->title; ?>" class="form-control" placeholder="Customer Sent Email Title">
								</div>

								<div class="form-group">
									<label for="inp1">Customer Sent Email</label>
									<input type="text" name="whs" value="<?php echo $key->whs; ?>" class="form-control" placeholder="Customer Sent Email">
								</div>

								<div class="form-group">
									<label for="inp1">Upsell Title</label>
									<input type="text" name="upsell_title" value="<?php echo $key->upsell_title; ?>" class="form-control" placeholder="Customer Sent Email">
								</div>


								<div class="form-group">
									<label for="inp1">Login Page User Text</label>
									
										<textarea id="summernote3" rows="6" name="login_page_text" class="form-control"><?php echo $key->login_page_text; ?></textarea>
								</div>
							
								
								<div class="form-group">
									<label for="inp1">chat discussion username </label>
									<input type="text" name="messangers" value="<?php echo $key->messangers; ?>" class="form-control" placeholder="Messanger username">
								</div>
								
								<div class="form-group">
									<label for="inp1"><?=lang("admin_h152");?> </label>
									<input type="text" name="header" value="<?php echo $key->header; ?>" class="form-control" placeholder="Top nav text">
								</div>


								<div class="form-group">
									<!--<label for="inp1"><?=lang("admin_h153");?> </label>-->
									<input type="hidden" name="slider_text" value="<?php echo $key->slider_text; ?>" class="form-control" placeholder="Slider header text">
								</div>

								<div class="form-group">
									<label for="inp1"><?=lang("admin_h154");?> </label>
									<input type="text" name="noteOrder" value="<?php echo $key->noteOrder; ?>" class="form-control" placeholder="Top nav text">
								</div>

								<div class="form-group">
									<label for="inp1"><?=lang("admin_h155");?> </label>
									<input type="text" name="cookiesText" value="<?php echo $key->cookiesText; ?>" class="form-control" placeholder="Top nav text">
								</div>

								<div class="form-group">
									<label for="inp1"><?=lang("admin_h156");?></label>
									<textarea class="form-control" name="cookiesPage"><?php echo $key->cookiesPage; ?></textarea>
								</div>

								<!--<div class="form-group">-->
								<!--	<label for="inp1"><?=lang("admin_h157");?></label>-->
								<!--	<textarea id="summernote" name="about"><?php echo $key->about; ?></textarea>-->
								<!--</div>-->
								
								<div class="form-group">
									<label for="inp1"><?=lang("admin_h158");?> </label>
									<input type="text" name="descr" value="<?php echo $key->descr; ?>" class="form-control" placeholder="Your store description">
									<small class="form-text text-muted"><?=lang("admin_h158");?> </small>
								</div>
								
							
								
								<div class="form-group">
									<label for="inp1"><?=lang("admin_h162");?>  </label>
									<textarea rows="6" name="fbpixel" class="form-control" placeholder="xxxxxxxxxxxxxxxx &#10;xxxxxxxxxxxxxxxx"><?php echo $key->fbpixel; ?></textarea>
									<small class="form-text text-muted"><?=lang("admin_h162");?>  </small>
								</div>


									<div class="form-group">
									<label for="inp1"><?=lang("admin_h163");?>  </label>
									<textarea rows="6" name="googlea" class="form-control"><?php echo $key->googlea; ?></textarea>
									<small class="form-text text-muted"><?=lang("admin_h163");?> </small>
								</div>

							
							
								<div class="form-group">
									<label for="inp1">website SEO title</label>
									<input type="text" name="seo_title" value="<?php echo $key->seo_title; ?>" class="form-control" placeholder="Your website title">
								</div>
								
								
								<div class="form-group">
									<label for="inp1">website SEO Name</label>
									<input type="text" name="site_name" value="<?php echo $key->site_name; ?>" class="form-control" placeholder="Your website Name">
								</div>
								
								
						
								
									<div class="form-group">
									<label for="inp1">Website SEO Description</label>
									<textarea rows="6" name="description" class="form-control"><?php echo $key->description; ?></textarea>
								</div>
								
								
							

									</div>




									<div class="col-md-6">
										

									<div class="form-group">
									<label for="inp1">Website SEO keyword</label>
									<textarea rows="6" name="keyword" class="form-control"><?php echo $key->keyword; ?></textarea>
								</div>
							
								
									<div class="form-group">
									<label for="inp4">Bar show Seeting</label>
									<!-- <div id="editor"></div> -->

									<select name="barshow" id="" class="form-control">
										<option value="2" <?php if($key->barshow == 2) echo "selected"; ?>>Show 6 Icon Bar</option>
										<option value="3" <?php if($key->barshow == 3) echo "selected"; ?>>Show 4 Icon Bar</option>
										<option value="4" <?php if($key->barshow == 4) echo "selected"; ?>>Show 3 Icon Bar</option>
										<option value="6" <?php if($key->barshow == 6) echo "selected"; ?>>Show 2 Icon Bar</option>
									</select>

								</div>
									
									
								<div class="form-group">
									<label for="inp1">Product Title</label>
									<textarea id="summernote2" rows="6" name="product_title" class="form-control"><?php echo $key->product_title; ?></textarea>
								</div>
								
								<div class="form-group">
									<label for="inp1">Reviews Title</label>
									<textarea id="summernote1" rows="6" name="reviews_title" class="form-control"><?php echo $key->reviews_title; ?></textarea>
								</div>
								
								<div class="form-group">
									<label for="inp1">Reviews button text</label>
									<input type="text" name="reviews_bt_text" value="<?php echo $key->reviews_bt_text; ?>" class="form-control" placeholder="Reviews Button text">
								</div>
								
						


								<div class="form-group">
									<label for="inp1">Paypal Client ID</label>
									<input type="text" name="paypal_client_id" value="<?php echo $key->paypal_client_id; ?>" class="form-control" placeholder="Paypal Client ID">
								</div>


								<div class="form-group">
									<label for="inp1">Paypal secret</label>
									<input type="text" name="paypal_secret" value="<?php echo $key->paypal_secret; ?>" class="form-control" placeholder="Paypal secret">
								</div>

								<div class="form-group">
									<label for="inp1">Stripe Key</label>
									<input type="text" name="stripe_key" value="<?php echo $key->stripe_key; ?>" class="form-control" placeholder="Stripe Key">
								</div>


								<div class="form-group">
									<label for="inp1">Stripe secret</label>
									<input type="text" name="stripe_secret" value="<?php echo $key->stripe_secret; ?>" class="form-control" placeholder="Stripe secret">
								</div>

								<div class="form-group">
									<label for="inp1">footer column one</label>
									<input type="text" name="footer_column_one" value="<?php echo $key->footer_column_one; ?>" class="form-control" placeholder="">
								</div>

								<div class="form-group">
									<label for="inp1">footer column two</label>
									<input type="text" name="footer_column_two" value="<?php echo $key->footer_column_two; ?>" class="form-control" placeholder="">
								</div>


								<div class="form-group">
									<label for="inp1">footer column Three</label>
									<input type="text" name="footer_column_three" value="<?php echo $key->footer_column_three; ?>" class="form-control" placeholder="">
								</div>


								<div class="form-group">
									<label for="inp1">footer Text</label>
									<input type="text" name="footer_text" value="<?php echo $key->footer_text; ?>" class="form-control" placeholder="">
								</div>


								<div class="form-group">
									<label for="inp1">Contact Us map</label>
									<textarea rows="6" name="map" class="form-control"><?php echo $key->map; ?></textarea>
								</div>

								<div class="form-group">
									<label for="inp1">favicon</label>
									<input type="file" name="favicon" value="<?php echo $key->favicon; ?>" class="form-control" placeholder="">
								</div>


								<div class="form-group">
									<label for="inp1">Thanks Page Image</label>
									<input type="file" name="thanks_img" value="<?php echo $key->thanks_img; ?>" class="form-control" placeholder="">

									<small class="form-text text-muted">image size (850 x 500)</small>

									<br/>
									 <img src="<?= base_url();?>/images/<?php echo $key->thanks_img; ?>" alt="<?php echo $key->thanks_img; ?>" style="height:60px;width:140px;">

								</div>


								<div class="form-group">
									<label for="inp1">Product Image</label>
									<input type="file" name="product_img" value="<?php echo $key->product_img; ?>" class="form-control" placeholder="">

									<small class="form-text text-muted">image size (850 x 500)</small>

									<br/>
									 <img src="<?= base_url();?>/images/<?php echo $key->product_img; ?>" alt="<?php echo $key->product_img; ?>" style="height:60px;width:140px;">

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
					


			</div>
			<!-- /.container-fluid -->


</div>


<?php include_once 'inc/footer.php'; ?>

	

