<?php include_once 'inc/header.php'; ?>

<div id="content-wrapper" class="d-flex flex-column">

	<!-- Main Content -->
	<div id="content">

		<?php include_once 'inc/navbar.php'; ?>

			<div class="container-fluid">

				<!-- Page Heading -->
				<h1 class="h3 mb-2 text-gray-800"><?=lang("admin_h4");?></h1>

				<!-- DataTales Example -->
				<div class="card shadow mb-4">
					<div class="card-header py-3">
						<h6 class="m-0 font-weight-bold text-primary"><?=lang("admin_h143");?></h6>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>#</th>
										<th>Name</th>
										<th>Email</th>
										<th><?php echo lang("admin_h30"); ?></th>
									</tr>
								</thead>
								<tfoot>
									<tr>
										<th>#</th>
										<th>Name</th>
										<th>Email</th>
										<th><?php echo lang("admin_h30"); ?></th>
									</tr>
								</tfoot>
								<tbody>
									<?php foreach($msg as $key) {  ?>
									<tr <?php if($key->seen == 0){ ?> style="background: #f9f9f9;" <?php } ?>>
										<td><span class="badge"><?php echo $key->id; ?></span></td>
										<td><?php echo $key->name; ?></td>
										<td><?php echo $key->email; ?></td>
										<td>
											
											<!-- <a href="<?php echo base_url("admin/detiales/$key->id"); ?>" class="btn btn-success btn-circle btn-sm"><i class="fas fa-check"></i></a> -->
											<a href="<?php echo base_url("admin/show_msg/$key->id"); ?>" class="btn btn-secondary btn-circle btn-sm"><i class="fas fa-eye"></i></a>
											<a href="<?php echo base_url("admin/delt/msg/$key->id/messages"); ?>" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a>

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


</div>


<?php include_once 'inc/footer.php'; ?>

<script>
	
	$(document).ready(function() {
		$('#dataTable').DataTable({
			"order": [[ 0, "desc" ]],
			"columns": [
				null,
				null,
				null,
				{ "orderable": false },
			],
		});
	});


</script>