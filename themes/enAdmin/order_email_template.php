<?php include_once 'inc/header.php'; ?>
<style>
	label {
		font-weight: 600;
	}
	input{
	    width: 100%;
	}
</style>
<div id="content-wrapper" class="d-flex flex-column">
	<!-- Main Content -->
	<div id="content">
		<?php include_once 'inc/navbar.php'; ?>
		<div class="container-fluid">
			<!-- Page Heading -->
			<h1 class="h3 mb-2 text-gray-800"><?=lang("admin_h131");?></h1>
			
			<!-- DataTales Example -->
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary"><?=lang("admin_h130");?></h6>
				</div>
				<div class="card-body">
					
					<?php if(isset($msg)){ ?>
					<div class="alert alert-success"><?php echo lang("admin_h54"); ?></div>
					<?php } ?>
					<fieldset>
						<form method = "post" action = "<?php echo base_url() . "admin/save_email_temp";?>">
						     
						<div class="row">
						    <div class = "jumbotron" style = "margin: 10px;width: 100%">
						<H3>First E-Mail Of Order</H3>
						</div>
						    <div class = "col-md-12">
						        	<label for="inp4">Order Submition Subject</label>
									<!-- <div id="editor"></div> -->
								    <input type = "text" name = "order_submition_subject" value = "<?php echo $email->order_submition_subject;?>" class = "summernote">
						    </div>
						    <div class = "col-md-12">
						        	<label for="inp4">Preview Text</label>
									<!-- <div id="editor"></div> -->
								    <input type = "text" name = "preview_text1" class = "summernote" value="<?php echo $email->preview_text1;?>">
						   </div>
						    
						    
						    <div class = "col-md-6">
						        	<label for="inp4">Top Right Text</label>
									<!-- <div id="editor"></div> -->
								    <textarea type = "text" name = "top_right_text" class = "summernote"><?php echo $email->top_right_text;?></textarea>
						    </div>
						    
						    
						    <div class = "col-md-6">
						        	<label for="inp4">Top Left Text</label>
									<!-- <div id="editor"></div> -->
								    <textarea type = "text" name = "top_left_text" class = "summernote"><?php echo $email->top_left_text;?></textarea>
						    </div>
						    
						    
							
						    <div class = "col-md-6">
						        	<label for="inp4">Nav Item 1st Text</label>
									<!-- <div id="editor"></div> -->
								    <textarea type = "text" name = "nav_first" class = "summernote"><?php echo $email->nav_first;?></textarea>
						    </div>
						    
							<div class = "col-md-6">
						        	<label for="inp4">Nav Item 2st Text</label>
									<!-- <div id="editor"></div> -->
								    <textarea type = "text" name = "nav_second" class = "summernote"><?php echo $email->nav_second;?></textarea>
						    </div>
						    
						    
						   <div class = "col-md-6">
						        	<label for="inp4">Nav Item 3rd Text</label>
									<!-- <div id="editor"></div> -->
								    <textarea type = "text" name = "nav_third" class = "summernote"><?php echo $email->nav_third;?></textarea>
						    </div>
						    
						    <div class = "col-md-6">
						        	<label for="inp4">ContactUs Button Text</label>
									<!-- <div id="editor"></div> -->
								    <textarea type = "text" name = "contact_us" class = "summernote"><?php echo $email->contact_us;?></textarea>
						    </div>
						    
						    
						    
						    <div class = "col-md-6">
						        	<label for="inp4">Order Confirm Text</label>
									<!-- <div id="editor"></div> -->
								    <textarea type = "text" name = "order_confirm" class = "summernote"><?php echo $email->order_confirm;?></textarea>
						    </div>
						     <div class = "col-md-6">
						        	<label for="inp4">Explore Button Text</label>
									<!-- <div id="editor"></div> -->
								    <textarea type = "text" name = "explore_text" class = "summernote"><?php echo $email->explore_text;?></textarea>
						    </div>
							
						  
						    
						    <div class = "col-md-6">
						        	<label for="inp4">Top Color</label>
									<!-- <div id="editor"></div> -->
								    <input type = "color" name = "top_color" placeholder = "eg:#212121" value = "<?php echo $email->top_color;?>" class = "summernote">
						    </div>
						    
						    <div class = "col-md-6">
						        	<label for="inp4">Nav Item 1st Link</label>
									<!-- <div id="editor"></div> -->
								    <input type = "text" name = "nav_first_link" placeholder = "<?= base_url();?>" value = "<?php echo $email->nav_first_link;?>" class = "summernote">
						    </div>
							
						    <div class = "col-md-6">
						        	<label for="inp4">Nav Item 2nd Link</label>
									<!-- <div id="editor"></div> -->
								    <input type = "text" name = "nav_second_link" placeholder = "<?= base_url();?>" value = "<?php echo $email->nav_second_link;?>" class = "summernote">
						    </div>
						    
						  
							
						    <div class = "col-md-6">
						        	<label for="inp4">Nav Item 3rd Link</label>
									<!-- <div id="editor"></div> -->
								    <input type = "text" name = "nav_third_link" placeholder = "<?= base_url();?>" value = "<?php echo $email->nav_third_link;?>" class = "summernote">
						    </div>
						    
						    
						    <div class = "col-md-6">
						        	<label for="inp4">Order Confirm Color</label>
									<!-- <div id="editor"></div> -->
								    <input type = "color" name = "order_confirm_color" placeholder = "#212121" value = "<?php echo $email->order_confirm_color;?>" class = "summernote">
						    </div>
						    
						    <div class = "col-md-6">
						        	<label for="inp4">Total bar Color</label>
									<!-- <div id="editor"></div> -->
								    <input type = "color" name = "total_color" placeholder = "#212121" value = "<?php echo $email->total_color;?>" class = "summernote">
						    </div>
						    
						    
						    
						    <div class = "col-md-6">
						        	<label for="inp4">ContactUs Button Link</label>
									<!-- <div id="editor"></div> -->
								    <input type = "text" name = "contact_us_link" value = "<?php echo $email->contact_us_link;?>" class = "summernote">
						    </div>
						    
						    
						    <div class = "col-md-6">
						        	<label for="inp4">ContactUs Button Color</label>
									<!-- <div id="editor"></div> -->
								    <input type = "color" name = "contact_us_color" value = "<?php echo $email->contact_us_color;?>" class = "summernote">
						    </div>
						    
						    <div class = "col-md-6">
						        	<label for="inp4">Explore Button Link</label>
									<!-- <div id="editor"></div> -->
								    <input type = "text" name = "explore_link" value = "<?php echo $email->explore_link;?>" class = "summernote">
						    </div>
						    
						    <div class = "col-md-6">
						        	<label for="inp4">Explore Button Color</label>
									<!-- <div id="editor"></div> -->
								    <input type = "color" name = "explore_color" value = "<?php echo $email->explore_color;?>" class = "summernote">
						    </div>
						    
						   
						      <div class = "jumbotron" style = "margin: 10px;width: 100%">
						<H3>Second E-Mail Of Order</H3>
						</div>
						
						   <div class = "col-md-6">
						        	<label for="inp4">Second Subject</label>
									<!-- <div id="editor"></div> -->
								    <input type = "text" name = "second_subject" class = "summernote" value="<?php echo $email->second_subject;?>">
						   </div>
						   <div class = "col-md-6">
						        	<label for="inp4">Preview Text</label>
									<!-- <div id="editor"></div> -->
								    <input type = "text" name = "preview_text2" class = "summernote" value="<?php echo $email->preview_text2;?>">
						   </div>
						    
						   <div class = "col-md-6">
						        	<label for="inp4">First Text</label>
									<!-- <div id="editor"></div> -->
								    <textarea type = "text" name = "first_text" class = "summernote"><?php echo $email->first_text;?></textarea>
						    </div>
						    
						    
						    <div class = "col-md-6">
						        	<label for="inp4">Second Text</label>
									<!-- <div id="editor"></div> -->
								    <textarea type = "text" name = "second_text" class = "summernote"><?php echo $email->second_text;?></textarea>
						    </div>
						    
						    
							
						    <div class = "col-md-6">
						        	<label for="inp4">Third Text</label>
									<!-- <div id="editor"></div> -->
								    <textarea type = "text" name = "third_text" class = "summernote"><?php echo $email->third_text;?></textarea>
						    </div>
						    
							<div class = "col-md-6">
						        	<label for="inp4">Button Text</label>
									<!-- <div id="editor"></div> -->
								    <textarea type = "text" name = "button_text" class = "summernote"><?php echo $email->button_text;?></textarea>
						    </div>
						    
							<div class = "col-md-6">
						        	<label for="inp4">Promotion Text With Email</label>
									<!-- <div id="editor"></div> -->
								    <textarea type = "text" name = "promotion_text" class = "summernote"><?php echo $email->promotion_text;?></textarea>
						    </div>
						    <div class = "col-md-6">
						        	<label for="inp4">Copyright Text</label>
									<!-- <div id="editor"></div> -->
								    <textarea type = "text" name = "copy_right_text" class = "summernote"><?php echo $email->copy_right_text;?></textarea>
						    </div>
						      <div class = "col-md-6">
						        	<label for="inp4">Button Color</label>
									<!-- <div id="editor"></div> -->
								    <input type = "color" name = "button_color" placeholder="#212121" value = "<?php echo $email->button_color;?>" class = "summernote">
						    </div>
						    
						   <div class = "col-md-6">
						        	<label for="inp4">Button Link</label>
									<!-- <div id="editor"></div> -->
								    <input type = "text" name = "button_link" placeholder="<?php echo base_url();?>" value = "<?php echo $email->button_link;?>" class = "summernote">
						    </div>
						    
						<div class = "col-md-12" style = "margin-top:30px">
						    <button type="submit" name="test" class="btn btn-primary"><?=lang("admin_h120");?></button>
						</div>
						</form>
					</fieldset>
				</div>
			</div>
		</div>
		<!-- /.container-fluid -->
	</div>
	<?php include_once 'inc/footer.php'; ?>
	