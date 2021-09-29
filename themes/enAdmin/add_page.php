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


					<!-- Page Heading -->
					<h1 class="h3 mb-2 text-gray-800"><?=lang("admin_h80");?></h1>
					<?php echo form_open_multipart("",array("class" => "form-horizontal")); ?>
					<!-- DataTales Example -->
					<div class="card shadow mb-4">
						<div class="card-header py-3">
							<h6 class="m-0 font-weight-bold text-primary"><?=lang("admin_h81");?></h6>
						</div>
						
						<div class="card-body">

							<?php if(isset($msg)){ ?>
								<div class="alert alert-success"><?=lang("admin_h82");?></div>
							<?php } ?>
							
							<fieldset>

								<div class="row">
									<div class="col-md-6">
										
											<div class="form-group">
									<label for="inp4">Menu Select</label>
									<!-- <div id="editor"></div> -->

									<select name="menu_id" id="" class="form-control" required="required">
										<option>--Select--</option>
										 <?php foreach($menus as $menu) : ?>
										<option value="<?php echo $menu->id; ?>"><?php echo $menu->name; ?></option>
											<?php endforeach; ?>
									</select>
								
								</div>

								
								<div class="form-group">
									<label for="inp1"><?=lang("admin_h83");?> </label>
									<input type="text" name="title" class="form-control" id="inp1" aria-describedby="emailHelp" placeholder="Title">
									<small id="emailHelp" class="form-text text-muted"><?=lang("admin_h84");?> </small>
								</div>
								
								<div class="form-group">
									<label for="inp4"><?=lang("admin_h85");?></label>
									<!-- <div id="editor"></div> -->

									<textarea id="summernote" name="content"></textarea>

									<small id="emailHelp" class="form-text text-muted"><?=lang("admin_h86");?></small>
								</div>
								
									</div>
									<div class="col-md-6">
										
										<h2 class="bg-light" style="text-align: center;">SEO Input Field</h2>

                             	<div class="form-group">
									<label for="inp1">Page Title</label>
									<input type="text" class="form-control" id="inp1" aria-describedby="emailHelp" placeholder="Page Title" name="page_title">
								</div>
								
								<div class="form-group">
									<label for="inp1">Description</label>
									<textarea rows="6" name="page_desc" class="form-control"></textarea>
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
					


			</div>
			<!-- /.container-fluid -->


</div>


<?php include_once 'inc/footer.php'; ?>

