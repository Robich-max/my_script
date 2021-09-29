<?php include_once 'inc/header.php'; ?>
<link href="<?php echo base_url(); ?>assets/css/bootstrap-toggle.min.css" rel="stylesheet">
<style type="text/css" media="screen">
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
		<?php if($tp == "add") { ?>
			<div class="container-fluid">
				<!-- Page Heading -->
				<h1 class="h3 mb-2 text-gray-800"><?=lang("admin_h1");?></h1>
				<!-- DataTales Example -->
				<?php echo form_open_multipart("",array("class" => "form-horizontal")); ?>
				<div class="row">
					<div class="col-lg-6">
						<div class="card-box">
							<h5 class="text-uppercase bg-light p-2 mt-0 mb-3"><?=lang("admin_h3");?></h5>
							<?php if(isset($msg)){ ?>
								<div class="alert alert-success"><?php echo lang("admin_h54"); ?></div>
							<?php } ?>
							<div class="form-group">
								<label for="inp1"><?php echo lang("admin_h31") ?></label>
								<input type="text" class="form-control" id="inp1" aria-describedby="emailHelp" placeholder="<?php echo lang("admin_h31") ?>" name="title">
							</div>
							<div class="form-group">
								<label for="inp2"><?php echo lang("admin_h33") ?></label>
								<input type="text" class="form-control" id="inp2" aria-describedby="emailHelp" placeholder="<?php echo lang("admin_h33") ?>" name="price">
							</div>
							<div class="form-group">
								<label for="inp3"><?php echo lang("admin_h34") ?></label>
								<input type="text" class="form-control" id="inp3" aria-describedby="emailHelp" placeholder="<?php echo lang("admin_h34") ?>" name="discount">
							</div>
							<div class="form-group">
								<label for="inp8"><?php echo lang("admin_h35") ?></label>
								<input type="text" class="form-control" id="inp8" aria-describedby="emailHelp" placeholder="<?php echo lang("admin_h35") ?>" name="shipping">
							</div>
							<div class="form-group">
								<label for="inp4">list1</label>
								<!-- <div id="editor"></div> -->
								<textarea id="summernote" name="descr"></textarea>
							</div>


							<div class="form-group">
								<label for="inp4">short <?php echo lang("admin_h36") ?></label>
								<!-- <div id="editor"></div> -->
								<textarea id="summernote6" name="short_desc"></textarea>
							</div>


							<div class="form-group">
								<label for="inp4">list2</label>
								<!-- <div id="editor"></div> -->
								<textarea id="summernote7" name="desc"></textarea>
							</div>

								<div class="form-group">
								<label for="inp8">Delivery Icon</label>
								<input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Delivery icon" name="info_icon">
							</div>

							


							<div class="form-group">
								<label for="inp8">Delivery info Text</label>
						<textarea id="summernote2" name="info_desc"></textarea>

							</div>
							<div class="form-group">
								<label for="inp4">Delivery info Description</label>
								<!-- <div id="editor"></div> -->
								<textarea id="summernote2" name="info_desc"></textarea>
							</div>

							<div class="form-group">
								<label for="inp4">Upsell message info</label>
								<!-- <div id="editor"></div> -->
								<textarea id="summernote3" name="upsell_info"></textarea>
							</div>

							<div class="form-group">
								<label for="inp5">Sub <?php echo lang("admin_h37") ?></label>
								<select id="" class="form-control" name="subcat">
									<?php foreach($subcat as $sc) { ?>
										<option value="<?php echo $sc->id; ?>"><?php echo $sc->name; ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="card-box">
							<h5 class="text-uppercase bg-light p-2 mt-0 mb-3">PRODUCT IMAGES</h5>
							<div class="form-group">
								<label for="inp6"><?php echo lang("admin_h38") ?></label>
								<div class="dropzone dropzone-previews" id="my-awesome-dropzone"></div>
								<input type="hidden" name="images" class="images" value="">
							</div>
							<div class="form-group">
								<label for="inp4">Alt Image Name separate by | useing</label>
								<!-- <div id="editor"></div> -->
								<textarea class="form-control" name="img_alt_name"></textarea>
							</div>


							<div class="form-group">
								<label for="inp8">service Icon</label>
								<input type="text" class="form-control" aria-describedby="emailHelp" placeholder="service Icon" name="service_icon">
							</div>

							<div class="form-group">
								<label for="inp4">service Info</label>
								<!-- <div id="editor"></div> -->
								<textarea class="form-control" name="service_info"></textarea>
							</div>

							<div class="form-group">
								<label for="inp4">service Info Description</label>
								<!-- <div id="editor"></div> -->
								<textarea id="summernote5" class="form-control" name="service_info_desc"></textarea>
							</div>

							<div class="form-group">
								<label for="inp8">Other Icon</label>
								<input type="text" class="form-control" aria-describedby="emailHelp" placeholder="other Icon" name="other_icon">
							</div>
							<div class="form-group">
								<label for="inp4">Other info</label>
								<!-- <div id="editor"></div> -->
								<textarea class="form-control" name="other_info"></textarea>
							</div>

							<div class="form-group">
								<label for="inp4">Other info Description</label>
								<!-- <div id="editor"></div> -->
								<textarea id="summernote4" class="form-control" name="other_info_desc"></textarea>
							</div>
							<div class="form-group">
								<label for=""><?=lang("admin_h144");?> : </label>
								<div class="row mb-2">
									<div class="col-3">
										<input type="text" class="form-control" placeholder="<?php echo lang("admin_h52"); ?>" name="tp[]">
									</div>
									<div class="col-3">
										<input type="text" class="form-control" placeholder="<?php echo lang("admin_h53"); ?>" name="info[]">
									</div>

									<div class="col-2">
										<input type="number" class="form-control" placeholder="width" name="width[]">
									</div>
									<div class="col-2">
										<input type="number" class="form-control" placeholder="height" name="height[]">
									</div>
									<div class="col-2">
										<a style="cursor: pointer; color: white;" class="btn btn-success btn-circle btn-sm" onclick="addOptions(this);"><i class="fas fa-plus"></i></a>
									</div>
								</div>
							</div>
						</div>
						<hr/>
						<div class="card-box">
							<h5 class="text-uppercase bg-light p-2 mt-0 mb-3">SEO Input Field</h5>
							<div class="form-group">
								<label for="inp1">Page Title</label>
								<input type="text" class="form-control" id="inp1" aria-describedby="emailHelp" placeholder="Page Title" name="page_title">
							</div>
							<div class="form-group">
								<label for="inp1">Description</label>
								<textarea rows="6" name="page_desc" class="form-control"></textarea>
							</div>
							<div class="form-group">
								<label for="inp1">Home Page Show</label>
								<input name="home_page_active" type="hidden" value="0" id="home_page_active">
								<input name="home_page_active" type="checkbox" value="1" id="home_page_active">
							</div>


							<div class="form-group">
								<label for="inp1">Active Status</label>
								<input name="active_status" type="hidden" value="0" id="active_status">
								<input name="active_status" type="checkbox" value="1" id="active_status">
							</div>
							<a href="<?php echo base_url().'admin/products';?>" class="btn w-sm btn-light waves-effect">Cancel</a>
							<button type="submit" class="btn w-sm btn-success waves-effect waves-light"><?=lang("admin_h120");?></button>
						</div>
					</div>
				</div>
			<?php echo form_close(); ?>
		</div>
			<!-- /.container-fluid -->
		<?php }elseif($tp == "edit"){ ?>
			<?php foreach($cat as $key) : ?>
			<div class="container-fluid">
				<!-- Page Heading -->
				<h1 class="h3 mb-2 text-gray-800"><?=lang("admin_h1");?></h1>
				<!-- DataTales Example -->
				<?php echo form_open_multipart("",array("class" => "form-horizontal")); ?>
					<div class="row">
						<div class="col-lg-6">
							<div class="card-box">
								<h5 class="text-uppercase bg-light p-2 mt-0 mb-3"><?=lang("admin_h145");?></h5>
								<?php if(isset($msg)){ ?>
									<div class="alert alert-success"><?php echo lang("admin_h54"); ?></div>
								<?php } ?>
									<div class="form-group">
										<label for="inp1"><?php echo lang("admin_h31") ?></label>
										<input type="text" class="form-control" id="inp1" aria-describedby="emailHelp" placeholder="<?php echo lang("admin_h31") ?>" name="title" value="<?php echo $key->title; ?>">
										<small id="emailHelp" class="form-text text-muted"><?php echo lang("admin_h32") ?></small>
									</div>
									<div class="form-group">
										<label for="inp2"><?php echo lang("admin_h33") ?></label>
										<input type="text" class="form-control" id="inp2" aria-describedby="emailHelp" placeholder="<?php echo lang("admin_h33") ?>" name="price" value="<?php echo $key->price; ?>">
										<small id="emailHelp" class="form-text text-muted"><?php echo lang("admin_h33") ?></small>
									</div>
									<div class="form-group">
										<label for="inp3"><?php echo lang("admin_h34") ?></label>
										<input type="text" class="form-control" id="inp3" aria-describedby="emailHelp" placeholder="<?php echo lang("admin_h34") ?>" name="discount" value="<?php echo $key->discount; ?>">
										<small id="emailHelp" class="form-text text-muted"><?php echo lang("admin_h34") ?></small>
									</div>
									<div class="form-group">
										<label for="inp8"><?php echo lang("admin_h35") ?></label>
										<input type="text" class="form-control" id="inp8" aria-describedby="emailHelp" placeholder="<?php echo lang("admin_h35") ?>" name="shipping" value="<?php echo $key->shipping; ?>">
										<small id="emailHelp" class="form-text text-muted"><?php echo lang("admin_h35") ?></small>
									</div>
									<div class="form-group">
										<label for="inp4">list1</label>
										<!-- <div id="editor"></div> -->
										<textarea id="summernote" name="descr"><?php echo $key->descr; ?></textarea>
										<small id="emailHelp" class="form-text text-muted"><?php echo lang("admin_h36") ?></small>
									</div>

									<div class="form-group">
										<label for="inp4">Short <?php echo lang("admin_h36") ?></label>
										<!-- <div id="editor"></div> -->
										<textarea id="summernote6" name="short_desc"><?php echo $key->short_desc; ?></textarea>
										<small id="emailHelp" class="form-text text-muted"><?php echo lang("admin_h36") ?></small>
									</div>

										<div class="form-group">
										<label for="inp4">list2</label>
										<!-- <div id="editor"></div> -->
										<textarea id="summernote7" name="desc"><?php echo $key->desc; ?></textarea>
										<small id="emailHelp" class="form-text text-muted"><?php echo lang("admin_h36") ?></small>
									</div>
									<div class="form-group">
										<label for="inp4">Upsell Message Info</label>
										<!-- <div id="editor"></div> -->
										<textarea id="summernote3" name="upsell_info"><?php echo $key->upsell_info; ?></textarea>
									</div>
									<div class="form-group">
									<label for="inp8">Delivery Icon</label>
									<input type="text"  value="<?php echo $key->info_icon; ?>" class="form-control" id="inp8" aria-describedby="emailHelp" placeholder="Delivery Icon" name="info_icon">
						        	</div>


						        	<div class="form-group">
									<label for="inp8">Delivery info Text</label>
									<textarea name="info_text"><?php echo $key->info_text; ?></textarea>
						        	</div>
									<div class="form-group">
										<label for="inp4">Delivery Info Description</label>
										<!-- <div id="editor"></div> -->
										<textarea id="summernote2" name="info_desc"><?php echo $key->info_desc; ?></textarea>
									</div>

									<div class="form-group">
										<label for="inp5">Sub <?php echo lang("admin_h37") ?></label>
										<select id="" class="form-control" name="subcat">
											<?php foreach($subcat as $sc) { ?>
												<option value="<?php echo $sc->id; ?>" <?php echo $key->subcat == $sc->id ? "selected" : ""; ?>><?php echo $sc->name; ?></option>
											<?php } ?>
										</select>
										<small id="emailHelp" class="form-text text-muted">Sub <?php echo lang("admin_h37") ?></small>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card-box">
									<h5 class="text-uppercase bg-light p-2 mt-0 mb-3">Product Images</h5>
									<div class="form-group">
										<label for="inp6"><?php echo lang("admin_h38") ?></label>
										<div class="dropzone dropzone-previews" id="my-awesome-dropzone"></div>
										<input type="hidden" name="images" class="images" value="<?php echo $key->images; ?>">
									</div>
									<div class="form-group">
								<label for="inp4">Alt Image Name separate by | useing</label>
								<!-- <div id="editor"></div> -->
								<textarea class="form-control" name="img_alt_name"><?php echo $key->img_alt_name; ?></textarea>
							</div>
									<div class="form-group">
										<label for="inp4">service Icon</label>
										<!-- <div id="editor"></div> -->

										<input type="text" name="service_icon" class="form-control" value="<?php echo $key->service_icon; ?>">
											
									</div>


									<div class="form-group">
										<label for="inp4">service Info</label>
										<!-- <div id="editor"></div> -->
										<textarea  class="form-control" name="service_info"><?php echo $key->service_info; ?></textarea>	
									</div>

									<div class="form-group">
										<label for="inp4">service Info Description</label>
										<!-- <div id="editor"></div> -->
										<textarea id="summernote5" class="form-control" name="service_info_desc"><?php echo $key->service_info_desc; ?></textarea>	
									</div>


                           <div class="form-group">
										<label for="inp4">Other Info Icon</label>
										<!-- <div id="editor"></div> -->

										<input type="text" name="other_icon" class="form-control" value="<?php echo $key->other_icon; ?>">
											
									</div>

									<div class="form-group">
										<label for="inp4">Other info</label>
										<!-- <div id="editor"></div> -->
										<textarea class="form-control" name="other_info"><?php echo $key->other_info; ?></textarea>
									</div>

									<div class="form-group">
										<label for="inp4">Other info Description</label>
										<!-- <div id="editor"></div> -->
										<textarea id="summernote4" class="form-control" name="other_info_desc"><?php echo $key->other_info_desc; ?></textarea>
									</div>

									<div class="form-group">
										<label for=""><?=lang("admin_h144");?> : </label>
											<?php
												$info = json_decode($key->variants) ?? array();
												$i = 0;
												foreach($info as $in){
											?>
												<div class="row mb-2">
													<div class="col-3">
														<input type="text" name="tp[]" placeholder="<?php lang("admin_h52"); ?>" class="form-control" value="<?php echo $in->tp; ?>">
													</div>
													<div class="col-3">
														<input type="text" name="info[]" placeholder="<?php lang("admin_h53"); ?>" class="form-control" value="<?php echo $in->info; ?>">
													</div>
													<div class="col-2">
														<input type="text" name="width[]" placeholder="width" class="form-control" value="<?php echo $in->width; ?>">
													</div>
													<div class="col-2">
														<input type="text" name="height[]" placeholder="height" class="form-control" value="<?php echo $in->height; ?>">
													</div>
													<div class="col-2">
														<?php if($i == 0){ ?>
															<a style="cursor: pointer; color: white;" class="btn btn-success btn-circle btn-sm" onclick="addOptions(this);"><i class="fas fa-plus"></i></a>
														<?php }else{ ?>
															<a style="cursor: pointer; color: white;" class="deleteIt btn btn-danger btn-circle btn-sm"><i class="fas fa-minus"></i></a>
														<?php } ?>
													</div>
												</div>
											<?php $i++;} ?>
											<?php if($i == 0){ ?>
												<div class="row mb-2">
													<div class="col-3">
														<input type="text" class="form-control" placeholder="<?php lang("admin_h52"); ?>" name="tp[]">
													</div>
													<div class="col-3">
														<input type="text" class="form-control" placeholder="<?php lang("admin_h53"); ?>" name="info[]">
													</div>

													<div class="col-2">
														<input type="number" class="form-control" placeholder="width" name="width[]">
													</div>
													<div class="col-2">
														<input type="number" class="form-control" placeholder="height" name="height[]">
													</div>
													<div class="col-2">
														<a style="cursor: pointer; color: white;" class="btn btn-success btn-circle btn-sm" onclick="addOptions(this);"><i class="fas fa-plus"></i></a>
													</div>
												</div>
											<?php } ?>
									</div>
								</div>
								<hr/>
								<div class="card-box">
									<h5 class="text-uppercase bg-light p-2 mt-0 mb-3">SEO Input Field</h5>
									<div class="form-group">
										<label for="inp1">Page Title</label>
										<input type="text" class="form-control" id="inp1" value="<?php echo $key->page_title; ?>" aria-describedby="emailHelp" placeholder="Page Title" name="page_title">
									</div>
									<div class="form-group">
										<label for="inp1">Description</label>
										<textarea rows="6" name="page_desc" class="form-control"><?php echo $key->page_desc; ?></textarea>
									</div>
									<div class="form-group">
										<label for="inp1">Page Url</label>
										<input type="text" class="form-control" id="inp1" value="<?php echo $key->page_url; ?>" aria-describedby="emailHelp" placeholder="Page url" name="page_url">
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


									<div class="form-group">
										<label for="inp1">Home Page Active</label>
										<?php if($key->home_page_active == 1 ){?>
										<input name="home_page_active" type="hidden" value="0" id="home_page_active">
											<input checked="checked" name="home_page_active" type="checkbox" value="1" id="home_page_active">
										<?php }elseif($key->home_page_active == 0){?>
											<input name="home_page_active" type="hidden" value="0" id="home_page_active">
											<input name="home_page_active" type="checkbox" value="1" id="active_status">
										<?php }?>
									</div>
									<a href="<?php echo base_url().'admin/products';?>" class="btn w-sm btn-light waves-effect">Cancel</a>
									<button type="submit" class="btn w-sm btn-success waves-effect waves-light"><?=lang("admin_h120");?></button>
								</div>
						</div>
					</div>
					<?php echo form_close(); ?>	
				</div>
			<!-- /.container-fluid -->
			<?php endforeach; ?>
		<?php }else { ?>
			<div class="container-fluid">
				<!-- Page Heading -->
				<h1 class="h3 mb-2 text-gray-800"><?=lang("admin_h1");?></h1>

				<!-- DataTales Example -->
				<div class="card shadow mb-4">
					<div class="card-header py-3">
						<h6 class="m-0 font-weight-bold text-primary">List products</h6>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>#</th>
										<th><?php echo lang("admin_h24"); ?></th>
										<th><?php echo lang("admin_h25"); ?></th>
										<th><?php echo lang("admin_h26"); ?></th>
										<th><?php echo lang("admin_h27"); ?></th>
										<th><?php echo lang("admin_h28"); ?></th>
										<th><?php echo lang("admin_h29"); ?></th>
										<th>Active Status</th>
										<th><?php echo lang("admin_h30"); ?></th>
									</tr>
								</thead>
								<tfoot>
									<tr>
										<th>#</th>
										<th><?php echo lang("admin_h24"); ?></th>
										<th><?php echo lang("admin_h25"); ?></th>
										<th><?php echo lang("admin_h26"); ?></th>
										<th><?php echo lang("admin_h27"); ?></th>
										<th><?php echo lang("admin_h28"); ?></th>
										<th><?php echo lang("admin_h29"); ?></th>
										<th>Active Status</th>
										<th><?php echo lang("admin_h30"); ?></th>
									</tr>
								</tfoot>
								<tbody>
									<?php foreach($cat as $key) {  ?>
										<tr>
											<td><?php echo $key->id; ?></td>
											<td><?php echo $key->title; ?></td>
											<td><?php echo numfmt_format_currency($fmt, $key->price, $currency); ?></td>
											<td><?php echo numfmt_format_currency($fmt, floor($key->price - ($key->price * $key->discount / 100)), $currency); ?></td>
											<td><?php echo $this->m_p->totalSales($key->id); ?></td>
											<td><a href="<?php echo base_url("home/show/$key->id"); ?>" target="_blanck"><?php echo $this->m_p->get_num("reviews", array("product" => $key->id)); ?></a></td>
											<td><a href="<?php echo base_url("home/show/$key->id"); ?>" target="_blanck"><?php echo $this->m_p->get_num("reviews", array("product" => $key->id, "ac" => 0)); ?></a></td>
											<td>
												<a class="cls-color">  
													<?php if($key->active_status == 1) { ?>
														<input id="toggle-event" type="checkbox" class='radio' value='0,<?php echo $key->id; ?>' checked name='active_status' data-toggle="toggle">
													<?php }else if ($key->active_status == 0) {?>
														<input id="toggle-event" type="checkbox" class='radio' value='1,<?php echo $key->id; ?>' name='active_status' data-toggle="toggle">
													<?php } ?>
												</a>
											</td>
											<td>
												<a href="<?php echo base_url("admin/edit_product/$key->id"); ?>" class="btn btn-primary btn-circle btn-sm"><i class="fas fa-edit"></i></a>
												<a href="<?php echo base_url("admin/upsell/$key->id"); ?>" class="btn btn-info btn-circle btn-sm"><i class="fas fa-arrow-up"></i></a>
												<a href="<?php echo base_url("admin/delt/products/$key->id/products"); ?>" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a>
											</td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<!-- /.container-fluid -->
		<?php } ?>
</div>


<?php include_once 'inc/footer.php'; ?>
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

	$(document).ready(function() {

	

		$('#dataTable').DataTable({
			"order": [[ 0, "desc" ]],
			"columns": [
			null,
			{ type: 'currency', targets: 0 },
			{ type: 'currency', targets: 0 },
			null,
			null,
			null,
			null,
			{ "orderable": false },
			],
		});
	});

	function sendFile(file, that) {
		data = new FormData();
		data.append("file", file);
		$.ajax({
			data: data,
			type: "POST",
			url: base_url + "admin/upload_file",
			cache: false,
			contentType: false,
			processData: false,
			success: function(url) {

				$(that).summernote('insertImage', url, '');

			}
		});
	}


	function arrayRemove(arr, value) {

		return arr.filter(function(ele){
			return ele != value;
		});

	}

	$(document).on("click", ".deleteIt", function() {


		$(this).parent().parent().remove();

	})
	
	function addOptions(th) {
		
		var newOption = '<div class="row mb-2">'
		+'<div class="col-3">'
		+'<input type="" name="tp[]" placeholder="<?php echo lang("admin_h52"); ?>" class="form-control">'
		+'</div>'
		+'<div class="col-3">'
		+'<input type="" name="info[]" placeholder="<?php echo lang("admin_h53"); ?>" class="form-control">'
		+'</div>'
		+'<div class="col-2">'
		+'<input type="number" name="width[]" placeholder="width" class="form-control">'
		+'</div>'
		+'<div class="col-2">'
		+'<input type="number" name="height[]" placeholder="height" class="form-control">'
		+'</div>'
		+'<div class="col-2">'
		+'<a style="cursor: pointer; color: white;" class="deleteIt btn btn-danger btn-circle btn-sm"><i class="fas fa-minus"></i></a>'
		+'</div>'
		+'</div>';


		$(th).parent().parent().after(newOption);

	}

	Dropzone.autoDiscover = false;
	jQuery(document).ready(function() {

		$("div#my-awesome-dropzone").dropzone({
			url: base_url + "/admin/upload",
			addRemoveLinks: true,
			acceptedFiles: 'image/*',
			dictCancelUpload: "cancel",
			dictRemoveFile: "remove",
			dictCancelUploadConfirmation : "are you sure",
			dictRemoveFileConfirmation: "do you want to delete this file ?",
			success : function(file, data) {

				file.serverName = data;

				var oldImages = $(".images").val() == "" ? [] : $(".images").val().split(",");

				oldImages.push(data);

				$(".images").val(oldImages.join(","));
			},
			init: function () {

				this.on("removedfile", function(file) {
					var oldImages = $(".images").val() == "" ? [] : $(".images").val().split(",");

					oldImages = arrayRemove(oldImages, file.name);

					$(".images").val(oldImages.join(","));
				});

				var ref = this;

				var oldImages = $(".images").val() == "" ? [] : $(".images").val().split(",");

				oldImages.forEach(function(item) {

					var mockFile = {
						name: item,
						size : 1024000,
						isMock: true,
						serverImgUrl : base_url + "/uploads/" + item
					};

					// Call the default addedfile event handler
					ref.emit("addedfile", mockFile);
					ref.emit("complete", mockFile);

					// And optionally show the thumbnail of the file:
					ref.emit("thumbnail", mockFile, mockFile.serverImgUrl);

					ref.files.push(mockFile);


            })


			}
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
            		url: '<?php echo base_url("admin/ProActive"); ?>',
            		success : function(re) {
                      //alert(re);
                      location.reload();
                  }
              });
           

        })

    </script>