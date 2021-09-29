<?php include_once 'inc/header.php'; ?>

<div id="content-wrapper" class="d-flex flex-column">
<?php foreach($msg as $key){ ?>
	<!-- Main Content -->
	<div id="content">

		<?php include_once 'inc/navbar.php'; ?>

			<div class="container-fluid">

				<!-- Page Heading -->
				<h1 class="h3 mb-2 text-gray-800"><?=lang("admin_h173");?></h1>

				<!-- DataTales Example -->
				<div class="card shadow mb-4">
					<div class="card-header py-3">
						<h6 class="m-0 font-weight-bold text-primary">From : <?php echo $key->name; ?> at : <?php echo date("Y-m-d H:i", $key->date); ?></h6>
					</div>
					<div class="card-body">
							
						<div class="float-left"><?php echo $key->sub; ?></div>
						<div class="float-right"><?php echo $key->email; ?></div>
						<div class="clearfix"></div>
						<div class="card-text">
							<?php echo nl2br($key->message); ?>
						</div>

					</div>
				</div>

			</div>
			<!-- /.container-fluid -->


</div>

<?php } ?>


<?php include_once 'inc/footer.php'; ?>
