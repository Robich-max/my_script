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
			<?php foreach($cat as $key){ ?>
			<!-- Page Heading -->
			<h1 class="h3 mb-2 text-gray-800">add page</h1>
			<?php echo form_open_multipart("",array("class" => "form-horizontal")); ?>
			<!-- DataTales Example -->
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">add new page</h6>
				</div>
				
				<div class="card-body">
					<?php if(isset($msg)){ ?>
					<div class="alert alert-success">the page has been successfully added</div>
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
										<option value="<?php echo $menu->id; ?>" <?php if($menu->id == $key->menu_id) echo "selected"; ?>><?php echo $menu->name; ?></option>
										<?php endforeach; ?>
									</select>
									
								</div>
								
								<div class="form-group">
									<label for="inp1">Title </label>
									<input type="text" name="title" class="form-control" id="inp1" aria-describedby="emailHelp" placeholder="Title" value="<?php echo $key->title; ?>">
									<small id="emailHelp" class="form-text text-muted">page title </small>
								</div>
								
								<div class="form-group">
									<label for="inp4">Page content</label>
									<!-- <div id="editor"></div> -->
									<textarea id="summernote" name="content"><?php echo $key->content; ?></textarea>
									<small id="emailHelp" class="form-text text-muted">Page content</small>
								</div>
								
								
								
								
							</div>
							<div class="col-md-6">
								
								<h2>SEO Input Field</h2>
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
									<input type="text" class="form-control" id="inp1" value="<?php echo $key->	slug; ?>" aria-describedby="emailHelp" placeholder="Page url" name="slug">
								</div>
								
								
							</div>
						</div>
						
						
					</fieldset>
				</div>
				
				<div class="card-footer">
					
					<div class="float-right">
						
						<button class="button btn btn-success" name="test" type="submit">add</button>
					</div>
				</div>
				
			</div>
			<?php echo form_close(); ?>
			
			<?php } ?>
		</div>
		<!-- /.container-fluid -->
	</div>
	<?php include_once 'inc/footer.php'; ?>