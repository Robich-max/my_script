<?php include_once 'inc/header.php'; ?>

<div id="content-wrapper" class="d-flex flex-column">

	<!-- Main Content -->
	<div id="content">

		<?php include_once 'inc/navbar.php'; ?>

			<div class="container-fluid">

				<!-- Page Heading -->
				<h1 class="h3 mb-2 text-gray-800"><?=lang("admin_h16");?></h1>

				<!-- DataTales Example -->
				<div class="card shadow mb-4">
					<div class="card-header py-3">
						<h6 class="m-0 font-weight-bold text-primary"><?=lang("admin_h16");?></h6>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>#</th>
										<th><?php echo lang("admin_h63"); ?></th>
										<th><?php echo lang("admin_h64"); ?></th>
										<th><?php echo lang("admin_h30"); ?></th>
									</tr>
								</thead>
								<tfoot>
									<tr>
										<th>#</th>
										<th><?php echo lang("admin_h63"); ?></th>
										<th><?php echo lang("admin_h64"); ?></th>
										<th><?php echo lang("admin_h30"); ?></th>
									</tr>
								</tfoot>
								<tbody>
									<?php foreach($cat as $key) {  ?>
									<tr>
										<td><span class="badge"><?php echo $key->id; ?></span></td>
										<td><?php echo $key->title; ?></td>

										<td><?php

												$info = $this->db->get_where("mainmenu", array('active_status =' => 1,'single ='=> 1,'id =' => $key->menu_id), FALSE, 0, array("*"), "serial", "ASC")->row();

												if($info){
												 echo $info->footer == 1 ? lang("admin_h65") : lang("admin_h66");
												}else{
												echo "No";
												}
										 ?></td>
										<td>
											
											<a href="<?php echo base_url("admin/edit_page/$key->id"); ?>" class="btn btn-primary btn-circle btn-sm"><i class="fas fa-edit"></i></a>
											<a href="<?php echo base_url("admin/delt/pages/$key->id/pages"); ?>" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a>

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
				{ "orderable": false },
			],
		});
	});


</script>