<?php include_once 'inc/header.php'; ?>

<div id="content-wrapper" class="d-flex flex-column">

	<style>
		.color {
			width: 20%;
			}.h2, h2 {
				font-size: 2rem;
				background-color: #ccc1c1;
				text-align: center;
			}
			label {

				font-weight: 600;
			}
		</style>
		<!-- Main Content -->
		<div id="content">

			<?php include_once 'inc/navbar.php'; ?>

			<div class="container-fluid">


				<?php foreach($setting as $key){ ?>



					<!-- Page Heading -->
					<h1 class="h3 mb-2 text-gray-800">All Background Setting</h1>
					<?php echo form_open_multipart("",array("class" => "form-horizontal")); ?>
					<!-- DataTales Example -->
					<div class="card shadow mb-4">
						<div class="card-header py-3">
							<h6 class="m-0 font-weight-bold text-primary">All Background Setting</h6>
						</div>
						
						<div class="card-body">
							
							<fieldset>

								<div class="row">
									<div class="col-md-3">

										<h4 class="bg-light" style="text-align: center;color: black;
										font-weight: bolder;">Blog color Setting</h4>
										<div class="form-group">
											<label for="inp1">Blog Background Color </label>
											<input type="color" name="blog_bg_color" value="<?php echo $key->blog_bg_color; ?>" class="form-control color">
										</div>

										<div class="form-group">
											<label for="inp1">Single Blog Background Color </label>
											<input type="color" name="blog_sg_bg_color" value="<?php echo $key->blog_sg_bg_color; ?>" class="form-control color">
										</div>
										<div class="form-group">
											<label for="inp1">Single Blog Text Color </label>
											<input type="color" name="blog_tx_color" value="<?php echo $key->blog_tx_color; ?>" class="form-control color">
										</div>

										<div class="form-group">
											<label for="inp1">Blog button Background Color </label>
											<input type="color" name="blog_bt_color" value="<?php echo $key->blog_bt_color; ?>" class="form-control color">
										</div>
										<div class="form-group">
											<label for="inp1">Blog button Text Color </label>
											<input type="color" name="blog_bt_tx_color" value="<?php echo $key->blog_bt_tx_color; ?>" class="form-control color">
										</div>





										<h4 class="bg-light" style="text-align: center;color: black;
										font-weight: bolder;">Login Page Color</h4>

										<div class="form-group">
											<label for="inp1">Register Color</label>
											<input type="color" name="login_color" value="<?php echo $key->login_color; ?>" class="form-control color" placeholder="Register Color">
										</div>

										<div class="form-group">
											<label for="inp1">Register text Color</label>
											<input type="color" name="rg_tx_color" value="<?php echo $key->rg_tx_color; ?>" class="form-control color" placeholder="Register Color">
										</div>


										<div class="form-group">
											<label for="inp1">Register Button Color</label>
											<input type="color" name="rg_bt_color" value="<?php echo $key->rg_bt_color; ?>" class="form-control color" placeholder="Register Color">
										</div>


										<div class="form-group">
											<label for="inp1">Register Button text Color</label>
											<input type="color" name="rg_bt_tx_color" value="<?php echo $key->rg_bt_tx_color; ?>" class="form-control color" placeholder="Register Color">
										</div>

										<div class="form-group">
											<label for="inp1">Login Button Color</label>
											<input type="color" name="login_bt_color" value="<?php echo $key->login_bt_color; ?>" class="form-control color" placeholder="Login Button Color">
										</div>


										<div class="form-group">
											<label for="inp1">Login Button Text Color</label>
											<input type="color" name="login_bt_tx_color" value="<?php echo $key->login_bt_tx_color; ?>" class="form-control color">
										</div>

										<div class="form-group">
											<label for="inp1">Login Page Text Color</label>
											<input type="color" name="login_pg_tx_color" value="<?php echo $key->login_pg_tx_color; ?>" class="form-control color">
										</div>

										<div class="form-group">
											<label for="inp1">Input Field Color</label>
											<input type="color" name="input_field_color" value="<?php echo $key->input_field_color; ?>" class="form-control color">
										</div>


										<h4 class="bg-light" style="text-align: center;color: black;
										font-weight: bolder;">Category/Product/contact us Color Setting</h4>

										<div class="form-group">
											<label for="inp1" style="color:red;">Category and product Section Color </label>
											<input type="color" name="category_sc_color" value="<?php echo $key->category_sc_color; ?>" class="form-control color">
										</div>

										<div class="form-group">
											<label for="inp1">category  and product  button Text Hover Color </label>
											<input type="color" name="category_bt_tx_hv_color" value="<?php echo $key->category_bt_tx_hv_color; ?>" class="form-control color">
										</div>

										<div class="form-group">
											<label for="inp1">Category/product/Subscribe  button Hover Color </label>
											<input type="color" name="category_bt_hv_color" value="<?php echo $key->category_bt_hv_color; ?>" class="form-control color">
										</div>
										<h4 class="bg-light" style="text-align: center;">Modal Color Setting</h4>


										<div class="form-group">
											<label for="inp1">Modal Background color</label>
											<input type="color" name="modal_bg_color" value="<?php echo $key->modal_bg_color; ?>" class="form-control color">
										</div>

										<h4 class="bg-light" style="text-align: center;color: black;
										font-weight: bolder;">Bar Info Background color</h4>



										<div class="form-group">
											<label for="inp1">Bar Info Background color</label>
											<input type="color" name="bar_info_color" value="<?php echo $key->bar_info_color; ?>" class="form-control color">
										</div>


									</div>
									<div class="col-md-3">

										<h4 class="bg-light" style="text-align: center;color: black;
										font-weight: bolder;">Product Color Setting</h4>

										<div class="form-group">
											<label for="inp1">Product Title Color </label>
											<input type="color" name="product_tt_color" value="<?php echo $key->product_tt_color; ?>" class="form-control color">
										</div>


										<div class="form-group">
											<label for="inp1">Product offier Title </label>
											<input type="text" name="product_of_name" value="<?php echo $key->product_of_name; ?>" class="form-control">
										</div>




										<div class="form-group">
											<label for="inp1">Productadd to cart  Button  Title </label>
											<input type="text" name="product_abt_name" value="<?php echo $key->product_abt_name; ?>" class="form-control">
										</div>


										<div class="form-group">
											<label for="inp1">Product details page desc 1st title</label>
											<input type="text" name="product_desc_title_one" value="<?php echo $key->product_desc_title_one; ?>" class="form-control">
										</div>

										<div class="form-group">
											<label for="inp1">Product details page desc 2nd title</label>
											<input type="text" name="product_desc_title_two" value="<?php echo $key->product_desc_title_two; ?>" class="form-control">
										</div>

										<div class="form-group">
											<label for="inp1">Product details page desc 3rd title</label>
											<input type="text" name="product_desc_title_three" value="<?php echo $key->product_desc_title_three; ?>" class="form-control">
										</div>

										<div class="form-group">
											<label for="inp1">Product offier color </label>
											<input type="color" name="product_of_color" value="<?php echo $key->product_of_color; ?>" class="form-control color">
										</div>


										<div class="form-group">
											<label for="inp1">Product Delivery Info bg color </label>
											<input type="color" name="product_dv_info_color" value="<?php echo $key->product_dv_info_color; ?>" class="form-control color">
										</div>


										<div class="form-group">
											<label for="inp1">Product offier Text Color </label>
											<input type="color" name="product_of_tx_color" value="<?php echo $key->product_of_tx_color; ?>" class="form-control color">
										</div>

										<div class="form-group">
											<label for="inp1">Product Title Hover Color/All single link hover Color </label>
											<input type="color" name="product_tt_hv_color" value="<?php echo $key->product_tt_hv_color; ?>" class="form-control color">
										</div>

										<div class="form-group">
											<label for="inp1">Rating Color </label>
											<input type="color" name="rating_color" value="<?php echo $key->rating_color; ?>" class="form-control color">
										</div>

										<div class="form-group">
											<label for="inp1">Avis Color </label>
											<input type="color" name="avis_color" value="<?php echo $key->avis_color; ?>" class="form-control color">
										</div>

										<div class="form-group">
											<label for="inp1">Info Text Color </label>
											<input type="color" name="pr_dt_text_info_color" value="<?php echo $key->pr_dt_text_info_color; ?>" class="form-control color">
										</div>

										<div class="form-group">
											<label for="inp1">Product Select Option Color </label>
											<input type="color" name="product_select_color" value="<?php echo $key->product_select_color; ?>" class="form-control color">
										</div>

										<div class="form-group">
											<label for="inp1">Cross Price Color </label>
											<input type="color" name="cross_price_color" value="<?php echo $key->cross_price_color; ?>" class="form-control color">
										</div>

										<div class="form-group">
											<label for="inp1">Price Color </label>
											<input type="color" name="price_color" value="<?php echo $key->price_color; ?>" class="form-control color">
										</div>

										<div class="form-group">
											<label for="inp1">Product Button Color </label>
											<input type="color" name="product_bt_color" value="<?php echo $key->product_bt_color; ?>" class="form-control color">
										</div>
										<div class="form-group">
											<label for="inp1">Product Button Text Color </label>
											<input type="color" name="product_bt_tx_color" value="<?php echo $key->product_bt_tx_color; ?>" class="form-control color">
										</div>




										<h4 class="bg-light" style="text-align: center;color: black;
										font-weight: bolder;">Category Section color Setting</h4>




										<div class="form-group">
											<label for="inp1">Category button Color </label>
											<input type="color" name="category_bt_color" value="<?php echo $key->category_bt_color; ?>" class="form-control color">
										</div>



										<div class="form-group">
											<label for="inp1">Category button Text Color </label>
											<input type="color" name="category_bt_tx_color" value="<?php echo $key->category_bt_tx_color; ?>" class="form-control color">
										</div>




										<h4 class="bg-light" style="text-align: center;color: black;
										font-weight: bolder;">Thanks Page Color Setting</h4>




										<div class="form-group">
											<label for="inp1">Thanks Page Color </label>
											<input type="color" name="thanks_page_color" value="<?php echo $key->thanks_page_color; ?>" class="form-control color">
										</div>	


										<h4 class="bg-light" style="text-align: center;color: black;
										font-weight: bolder;">Home slider button possition Setting</h4>




										<div class="form-group">
											<label for="inp4">Home slider button possition</label>
											<!-- <div id="editor"></div> -->

											<select name="home_btn" id="" class="form-control">
												<option value="margin" <?php if($key->home_btn == 'margin') echo "selected"; ?>>Button Center</option>
												<option value="margin-left" <?php if($key->home_btn == 'margin-left') echo "selected"; ?>>Button Left</option>
												<option value="margin-right" <?php if($key->home_btn == 'margin-right') echo "selected"; ?>>Button Right</option>
											</select>


										</div>





									</div>





									<div class="col-md-3">


										<h4 class="bg-light" style="text-align: center;color: black;
										font-weight: bolder;">Footer Color Setting</h4>

										<div class="form-group">
											<label for="inp1">Footer Color </label>
											<input type="color" name="footer_color" value="<?php echo $key->footer_color; ?>" class="form-control color">
										</div>

										<div class="form-group">
											<label for="inp1">Footer Headline Color </label>
											<input type="color" name="footer_headline_color" value="<?php echo $key->footer_headline_color; ?>" class="form-control color">
										</div>

										<div class="form-group">
											<label for="inp1">Footer Text Color </label>
											<input type="color" name="footer_tx_color" value="<?php echo $key->footer_tx_color; ?>" class="form-control color">
										</div>

										<div class="form-group">
											<label for="inp1">Subscribe Color </label>
											<input type="color" name="subscribe_color" value="<?php echo $key->subscribe_color; ?>" class="form-control color">
										</div>

										<div class="form-group">
											<label for="inp1">Subscribe Text Color </label>
											<input type="color" name="subscribe_tx_color" value="<?php echo $key->subscribe_tx_color; ?>" class="form-control color">
										</div>

										<div class="form-group">
											<label for="inp1">Subscribe Input Box Color </label>
											<input type="color" name="subscribe_ip_color" value="<?php echo $key->subscribe_ip_color; ?>" class="form-control color">
										</div>

										<div class="form-group">
											<label for="inp1">Subscribe Input Text Color </label>
											<input type="color" name="subscribe_inp_tx_color" value="<?php echo $key->subscribe_inp_tx_color; ?>" class="form-control color">
										</div>
										<div class="form-group">
											<label for="inp1">Footer social media Color </label>
											<input type="color" name="footer_socialmd_color" value="<?php echo $key->footer_socialmd_color; ?>" class="form-control color">
										</div>

										<h4 class="bg-light" style="text-align: center;color: black;
										font-weight: bolder;">Rating & review Color Setting</h4>


										<div class="form-group">
											<label for="inp1">star Color </label>
											<input type="color" name="star_color" value="<?php echo $key->star_color; ?>" class="form-control color">
										</div>


										<div class="form-group">
											<label for="inp1">star Background Color </label>
											<input type="color" name="star_bg_color" value="<?php echo $key->star_bg_color; ?>" class="form-control color">
										</div>


										<div class="form-group">
											<label for="inp1">star button border Color </label>
											<input type="color" name="star_bt_br_color" value="<?php echo $key->star_bt_br_color; ?>" class="form-control color">
										</div>

										<div class="form-group">
											<label for="inp1">star Bar Color </label>
											<input type="color" name="star_br_color" value="<?php echo $key->star_br_color; ?>" class="form-control color">
										</div>

										<div class="form-group">
											<label for="inp1">star Bar background Color </label>
											<input type="color" name="star_br_bg_color" value="<?php echo $key->star_br_bg_color; ?>" class="form-control color">
										</div>

										<div class="form-group">
											<label for="inp1">Review text color</label>
											<input type="color" name="rating_text_color" value="<?php echo $key->rating_text_color; ?>" class="form-contro colorl">
										</div>

										<div class="form-group">
											<label for="inp1">Review text font size</label>
											<input type="number" name="rating_text_size" value="<?php echo $key->rating_text_size; ?>" class="form-control">
										</div>


										<h4 class="bg-light" style="text-align: center;color: black;
										font-weight: bolder;">Banner Fiver color Setting</h4>



		<h4 class="bg-light" style="text-align: center;color: black;
										font-weight: bolder;">FAQ page color Setting</h4>
										<div class="form-group">
											<label for="inp1">Page Title</label>
											<input type="text" name="faq_title" value="<?php echo $key->faq_title; ?>" class="form-control">
										</div>

										<div class="form-group">
											<label for="inp1">Faq menu color</label>
											<input type="color" name="faq_color" value="<?php echo $key->faq_color; ?>" class="form-control color">
										</div>

										<div class="form-group">
											<label for="inp1">Faq menu text color</label>
											<input type="color" name="faq_tx_color" value="<?php echo $key->faq_tx_color; ?>" class="form-control color">
										</div>

										<div class="form-group">
											<label for="inp1">Faq desc color</label>
											<input type="color" name="faq_dc_color" value="<?php echo $key->faq_dc_color; ?>" class="form-control color">
										</div>


<h4 class="bg-light" style="text-align: center;color: black;
										font-weight: bolder; display:none">Email Ivoice Title Setting</h4>
										<div class="form-group" style = "display:none">
											<label for="inp1">First Title</label>
											<input type="text" name="inv_email_first_title" value="<?php echo $key->inv_email_first_title; ?>" class="form-control">
										</div>


										<div class="form-group" style = "display:none">
											<label for="inp1">Second Title</label>
											<input type="text" name="inv_email_second_title" value="<?php echo $key->inv_email_second_title; ?>" class="form-control">
										</div>


									<!-- 	<div class="form-group">
											<label for="inp1">Second Title</label>
											<input type="text" name="inv_email_third_title" value="<?php echo $key->inv_email_third_title; ?>" class="form-control">
										</div> -->





									</div>


									<div class="col-md-3">

										<h4 class="bg-light" style="text-align: center;color: black;
										font-weight: bolder;">Body color Setting</h4>
										<div class="form-group">
											<label for="inp1">Body Background Color </label>
											<input type="color" name="body_bg_color" value="<?php echo $key->body_bg_color; ?>" class="form-control color">
										</div>





										<h4 class="bg-light" style="text-align: center;color: black;
										font-weight: bolder;">Footer Color Setting</h4>

										<div class="form-group">
											<label for="inp1">Cookies Background Color </label>
											<input type="color" name="cookies_color" value="<?php echo $key->cookies_color; ?>" class="form-control color">
										</div>

										<div class="form-group">
											<label for="inp1">Cookies button+all success button Color </label>
											<input type="color" name="cookies_bt_color" value="<?php echo $key->cookies_bt_color; ?>" class="form-control color">
										</div>
										<div class="form-group">
											<label for="inp1">Cookies button+all success button Text Color </label>
											<input type="color" name="cookies_bt_tx_color" value="<?php echo $key->cookies_bt_tx_color; ?>" class="form-control color">
										</div>

										<div class="form-group">
											<label for="inp1">Cookies button+all success button Hover Color </label>
											<input type="color" name="cookies_bt_hv_color" value="<?php echo $key->cookies_bt_hv_color; ?>" class="form-control color">
										</div>

										<div class="form-group">
											<label for="inp1">Cookies button+all success button Text Hover Color </label>
											<input type="color" name="cookies_bt_tx_hv_color" value="<?php echo $key->cookies_bt_tx_hv_color; ?>" class="form-control color">
										</div>
										<div class="form-group">
											<label for="inp1">Cookies button+all success button Border Color </label>
											<input type="color" name="cookies_bt_br_color" value="<?php echo $key->cookies_bt_br_color; ?>" class="form-control color">
										</div>

										<div class="form-group">
											<label for="inp1">Cookies button+all success button Border Hover Color </label>
											<input type="color" name="cookies_bt_br_hv_color" value="<?php echo $key->cookies_bt_br_hv_color; ?>" class="form-control color">
										</div>

										<div class="form-group">
											<label for="inp1">Scrol to top Background Color </label>
											<input type="color" name="scrol_bg_color" value="<?php echo $key->scrol_bg_color; ?>" class="form-control color">
										</div>

										<div class="form-group">
											<label for="inp1">Scrol to top Color </label>
											<input type="color" name="scrol_color" value="<?php echo $key->scrol_color; ?>" class="form-control color">
										</div>


										<h4 class="bg-light" style="text-align: center;color: black;
										font-weight: bolder;">Reviews Background Color</h4>

										<div class="form-group">
											<label for="inp1">Reviews Background Color</label>
											<input type="color" name="reviews_bg_color" value="<?php echo $key->reviews_bg_color; ?>" class="form-control color" placeholder="Reviews Background Color">
										</div>

										<div class="form-group">
											<label for="inp1">Reviews Text Background Color</label>
											<input type="color" name="reviews_tx_color" value="<?php echo $key->reviews_tx_color; ?>" class="form-control color" placeholder="Reviews Text Background Color">
										</div>


										<div class="form-group">
											<label for="inp1">Reviews Tag Background Color</label>
											<input type="color" name="reviews_tg_color" value="<?php echo $key->reviews_tg_color; ?>" class="form-control color" placeholder="Reviews Tag Background Color">
										</div>


										<div class="form-group">
											<label for="inp1">Reviews Average Title</label>
											<input type="text" name="rating_average_title" value="<?php echo $key->rating_average_title; ?>" class="form-control">
										</div>

										<div class="form-group">
											<label for="inp1">Reviews breakdown Title</label>
											<input type="text" name="rating_breakdown_title" value="<?php echo $key->rating_breakdown_title; ?>" class="form-control">
										</div>

											<div class="form-group">
											<label for="inp1">Reviews feedback button Title</label>
											<input type="text" name="rating_button_title" value="<?php echo $key->rating_button_title; ?>" class="form-control">
										</div>


										<h4 class="bg-light" style="text-align: center;color: black;
										font-weight: bolder;">Banner color</h4>
										<div class="form-group">
											<label for="inp1">Banner One  and four background Color</label>
											<input type="color" name="bn_one_bg_color" value="<?php echo $key->bn_one_bg_color; ?>" class="form-control color">
										</div>

										<div class="form-group">
											<label for="inp1">Banner One And four text</label>
											<input type="color" name="bn_tx_color" value="<?php echo $key->bn_tx_color; ?>" class="form-control color">
										</div>


										<div class="form-group">
											<label for="inp1">Banner two and three bg color</label>
											<input type="color" name="bn_two_bg_color" value="<?php echo $key->bn_two_bg_color; ?>" class="form-control color">
										</div>


										<h4 class="bg-light" style="text-align: center;color: black;
										font-weight: bolder;">Checkout/Cart out Image</h4>



										<div class="form-group">
											<label for="inp1">Checkout/Cart out Image</label>
											<input type="file" name="checkout_img" value="<?php echo $key->checkout_img; ?>" class="form-control">
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

	