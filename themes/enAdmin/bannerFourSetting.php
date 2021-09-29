<?php include_once 'inc/header.php'; ?>

<div id="content-wrapper" class="d-flex flex-column">
<style type="text/css" media="screen">
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
					<h1 class="h3 mb-2 text-gray-800">Banner Four Setting</h1>
					<?php echo form_open_multipart("",array("class" => "form-horizontal")); ?>
					<!-- DataTales Example -->
					<div class="card shadow mb-4">
						<div class="card-header py-3">
							<h6 class="m-0 font-weight-bold text-primary">Banner Four setting</h6>
						</div>
						
						<div class="card-body">
							
							<fieldset>
								<div class="row">
									<div class="col-md-6">
										
	<div class="form-group">
										<label for="inp1"><?=lang("admin_h179");?></label>
										<input type="file" name="img" class="form-control-file" >
										<small id="emailHelp" class="form-text text-muted">Image size max(2560x1263)</small>

                                          <br/>
										<img src="<?= base_url();?>/images/<?php echo $key->img; ?>" alt="<?php echo $key->img; ?>" style="height:60px;width:140px;">
									</div>
									

						    	<div class="form-group">
									<label for="inp1">Description</label>

									<textarea id="summernote" name="desc"><?php echo $key->desc; ?></textarea>
								</div>
								
							
									
									
							
									

									</div>
									<div class="col-md-6">
										

											<div class="form-group">
									<label for="inp1">Icon One Text</label>

									<textarea class="form-control" name="icon_one_text"><?php echo $key->icon_one_text; ?></textarea>
								</div>
									
								
									
								<div class="form-group">
									<label for="inp1">Icon Two Text</label>

									<textarea class="form-control" name="icon_two_text"><?php echo $key->icon_two_text; ?></textarea>
								</div>
		
							  <div class="form-group">
									<label for="inp1">Icon Three Text</label>

									<textarea class="form-control" name="icon_three_text"><?php echo $key->icon_three_text; ?></textarea>
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
					



			</div>
			<!-- /.container-fluid -->


</div>


<?php include_once 'inc/footer.php'; ?>

<script type="text/javascript">
	$(document).ready(function() {

		$('#summernote3').summernote({
  height: 150,   //set editable area's height
 toolbar: [
  ['style', ['style']],
  ['font', ['bold', 'underline', 'clear']],
  ['fontname', ['fontname']],
  ['fontsize', ['fontsize']],
  ['fontsizeunit', ['fontsizeunit']],
  ['strikethrough', ['strikethrough','superscript','subscript']],
  ['color', ['color']],
  ['para', ['ul', 'ol', 'paragraph']],
  ['table', ['table']],
  ['insert', ['link', 'picture', 'video']],
  ['view', ['fullscreen', 'codeview', 'help']],
  ['height', ['height']],
  ['image', ['resizeFull', 'resizeHalf', 'resizeQuarter', 'resizeNone']],
  ['float', ['floatLeft', 'floatRight', 'floatNone']],
 ['remove', ['removeMedia']],
 ['link', ['linkDialogShow', 'unlink']]
       
        

],
 

});
		$('#summernote2').summernote({
  height: 150,   //set editable area's height
 toolbar: [
  ['style', ['style']],
  ['font', ['bold', 'underline', 'clear']],
  ['fontname', ['fontname']],
  ['fontsize', ['fontsize']],
  ['fontsizeunit', ['fontsizeunit']],
  ['strikethrough', ['strikethrough','superscript','subscript']],
  ['color', ['color']],
  ['para', ['ul', 'ol', 'paragraph']],
  ['table', ['table']],
  ['insert', ['link', 'picture', 'video']],
  ['view', ['fullscreen', 'codeview', 'help']],
  ['height', ['height']],
  ['image', ['resizeFull', 'resizeHalf', 'resizeQuarter', 'resizeNone']],
  ['float', ['floatLeft', 'floatRight', 'floatNone']],
 ['remove', ['removeMedia']],
 ['link', ['linkDialogShow', 'unlink']]
       
        

],
 

});
		$('#summernote1').summernote({
  height: 150,   //set editable area's height
 toolbar: [
  ['style', ['style']],
  ['font', ['bold', 'underline', 'clear']],
  ['fontname', ['fontname']],
  ['fontsize', ['fontsize']],
  ['fontsizeunit', ['fontsizeunit']],
  ['strikethrough', ['strikethrough','superscript','subscript']],
  ['color', ['color']],
  ['para', ['ul', 'ol', 'paragraph']],
  ['table', ['table']],
  ['insert', ['link', 'picture', 'video']],
  ['view', ['fullscreen', 'codeview', 'help']],
  ['height', ['height']],
  ['image', ['resizeFull', 'resizeHalf', 'resizeQuarter', 'resizeNone']],
  ['float', ['floatLeft', 'floatRight', 'floatNone']],
 ['remove', ['removeMedia']],
 ['link', ['linkDialogShow', 'unlink']]
       
        

],
 

});
		$('#summernote').summernote({
  height: 150,   //set editable area's height
 toolbar: [
  ['style', ['style']],
  ['font', ['bold', 'underline', 'clear']],
  ['fontname', ['fontname']],
  ['fontsize', ['fontsize']],
  ['fontsizeunit', ['fontsizeunit']],
  ['strikethrough', ['strikethrough','superscript','subscript']],
  ['color', ['color']],
  ['para', ['ul', 'ol', 'paragraph']],
  ['table', ['table']],
  ['insert', ['link', 'picture', 'video']],
  ['view', ['fullscreen', 'codeview', 'help']],
  ['height', ['height']],
  ['image', ['resizeFull', 'resizeHalf', 'resizeQuarter', 'resizeNone']],
  ['float', ['floatLeft', 'floatRight', 'floatNone']],
 ['remove', ['removeMedia']],
 ['link', ['linkDialogShow', 'unlink']]
       
        

],
 

});
	});
</script>