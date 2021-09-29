<?php include_once 'inc/header.php'; ?>



<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker3.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.4.6/css/flag-icon.min.css">


<div id="content-wrapper" class="d-flex flex-column">

	<!-- Main Content -->
	<div id="content">

		<?php include_once 'inc/navbar.php'; ?>

			<div class="container-fluid">


				<!-- Page Heading -->
				<h1 class="h3 mb-2 text-gray-800"><?=lang("admin_h93");?></h1>

				<!-- DataTales Example -->
				<div class="card shadow mb-4">
					<div class="card-header py-3">
						<h6 class="m-0 font-weight-bold text-primary"><?=lang("admin_h94");?> </h6>
					</div>
					<div class="card-body">

						<div class="row">

							<!-- Earnings (Monthly) Card Example -->
							<div class="col-xl-4 col-md-6 mb-4">
								<div class="card border-left-primary shadow h-100 py-2">
									<div class="card-body">
										<div class="row no-gutters align-items-center">
											<div class="col mr-2">
												<div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><?=lang("admin_h95");?></div>
												<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $allOrders; ?></div>
											</div>
											<div class="col-auto">
												<i class="fas fa-cart-plus fa-2x text-gray-300"></i>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Earnings (Monthly) Card Example -->
							<div class="col-xl-4 col-md-6 mb-4">
								<div class="card border-left-success shadow h-100 py-2">
									<div class="card-body">
										<div class="row no-gutters align-items-center">
											<div class="col mr-2">
												<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Vistors</div>
												<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $allVisitors; ?></div>
											</div>
											<div class="col-auto">
												<i class="fas fa-cart-plus fa-2x text-gray-300"></i>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Earnings (Monthly) Card Example -->
							<div class="col-xl-4 col-md-6 mb-4">
								<div class="card border-left-info shadow h-100 py-2">
									<div class="card-body">
										<div class="row no-gutters align-items-center">
											<div class="col mr-2">
												<div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><?=lang("admin_h96");?></div>
												<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $allVisitors > 0 ? number_format($allOrders/$allVisitors * 100, 2) : 0; ?> %</div>
											</div>
											<div class="col-auto">
												<i class="fas fa-cart-plus fa-2x text-gray-300"></i>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>

					</div>
				</div>

				<form action="" method="get">

					<div class="row" style="margin-bottom: 20px;">
						<div class="col-md-6"><input type="text" class="datep form-control" autocomplete="off" name="date2" value="<?php echo $_GET['date2'] ?? ""; ?>" placeholder="Min date"></div>
						<div class="col-md-6"><input type="text" class="datep form-control" autocomplete="off" name="date1" value="<?php echo $_GET['date1'] ?? ""; ?>" placeholder="Max date"></div>
					</div>


					<div class="row" style="margin-bottom: 20px;">

						<div class="col-md-2" style="margin-top: 31px;">

							<button class="btn btn-success" type="submit" name="test"><?=lang("admin_h97");?></button>

						</div>
					</div>


				</form>

								<!-- DataTales Example -->
				<div class="card shadow mb-4">
					<div class="card-header py-3">
						<h6 class="m-0 font-weight-bold text-primary"><?=lang("admin_h98");?> </h6>
					</div>
					<div class="card-body">

							<div class="row">

								<!-- Earnings (Monthly) Card Example -->
								<div class="col-xl-4 col-md-6 mb-4">
									<div class="card border-left-primary shadow h-100 py-2">
										<div class="card-body">
											<div class="row no-gutters align-items-center">
												<div class="col mr-2">
													<div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><?=lang("admin_h99");?></div>
													<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $s['t']; ?></div>
												</div>
												<div class="col-auto">
													<i class="fas fa-cart-plus fa-2x text-gray-300"></i>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- Earnings (Monthly) Card Example -->
								<div class="col-xl-4 col-md-6 mb-4">
									<div class="card border-left-success shadow h-100 py-2">
										<div class="card-body">
											<div class="row no-gutters align-items-center">
												<div class="col mr-2">
													<div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><?=lang("admin_h100");?></div>
													<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $s['tpv']; ?></div>
												</div>
												<div class="col-auto">
													<i class="fas fa-cart-plus fa-2x text-gray-300"></i>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- Earnings (Monthly) Card Example -->
								<div class="col-xl-4 col-md-6 mb-4">
									<div class="card border-left-info shadow h-100 py-2">
										<div class="card-body">
											<div class="row no-gutters align-items-center">
												<div class="col mr-2">
													<div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><?=lang("admin_h101");?></div>
													<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $s['t'] > 0 ? number_format($allOrders/$s['t'] * 100, 2) : 0; ?> %</div>
												</div>
												<div class="col-auto">
													<i class="fas fa-cart-plus fa-2x text-gray-300"></i>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- Earnings (Monthly) Card Example -->
								<div class="col-xl-4 col-md-6 mb-4">
									<div class="card border-left-info shadow h-100 py-2">
										<div class="card-body">
											<div class="row no-gutters align-items-center">
												<div class="col mr-2">
													<div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><?=lang("admin_h102");?></div>
													<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $totalCostumers['t']; ?></div>
												</div>
												<div class="col-auto">
													<i class="fas fa-cart-plus fa-2x text-gray-300"></i>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- Earnings (Monthly) Card Example -->
								<div class="col-xl-4 col-md-6 mb-4">
									<div class="card border-left-primary shadow h-100 py-2">
										<div class="card-body">
											<div class="row no-gutters align-items-center">
												<div class="col mr-2">
													<div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><?=lang("admin_h103");?></div>
													<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $totalCostumers['tr']; ?></div>
												</div>
												<div class="col-auto">
													<i class="fas fa-cart-plus fa-2x text-gray-300"></i>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- Earnings (Monthly) Card Example -->
								<div class="col-xl-4 col-md-6 mb-4">
									<div class="card border-left-success shadow h-100 py-2">
										<div class="card-body">
											<div class="row no-gutters align-items-center">
												<div class="col mr-2">
													<div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><?=lang("admin_h95");?></div>
													<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $totalOrders; ?></div>
												</div>
												<div class="col-auto">
													<i class="fas fa-cart-plus fa-2x text-gray-300"></i>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- Earnings (Monthly) Card Example -->
								<div class="col-xl-4 col-md-6 mb-4">
									<div class="card border-left-info shadow h-100 py-2">
										<div class="card-body">
											<div class="row no-gutters align-items-center">
												<div class="col mr-2">
													<div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><?=lang("admin_h104");?></div>
													<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo numfmt_format_currency($fmt, $minOrders, $currency); ?></div>
												</div>
												<div class="col-auto">
													<i class="fas fa-cart-plus fa-2x text-gray-300"></i>
												</div>
											</div>
										</div>
									</div>
								</div>


								<!-- Earnings (Monthly) Card Example -->
								<div class="col-xl-4 col-md-6 mb-4">
									<div class="card border-left-info shadow h-100 py-2">
										<div class="card-body">
											<div class="row no-gutters align-items-center">
												<div class="col mr-2">
													<div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><?=lang("admin_h105");?></div>
													<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo numfmt_format_currency($fmt, $avgOrders, $currency); ?></div>
												</div>
												<div class="col-auto">
													<i class="fas fa-cart-plus fa-2x text-gray-300"></i>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- Earnings (Monthly) Card Example -->
								<div class="col-xl-4 col-md-6 mb-4">
									<div class="card border-left-info shadow h-100 py-2">
										<div class="card-body">
											<div class="row no-gutters align-items-center">
												<div class="col mr-2">
													<div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><?=lang("admin_h105");?></div>
													<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo numfmt_format_currency($fmt, $maxOrders, $currency); ?></div>
												</div>
												<div class="col-auto">
													<i class="fas fa-cart-plus fa-2x text-gray-300"></i>
												</div>
											</div>
										</div>
									</div>
								</div>


							</div>

					</div>
				</div>


				<div class="row">

					<div class="col-lg-6 col-md-6">

						<!-- Circle Buttons -->
						<div class="card shadow mb-4">
							<div class="card-header py-3">
								<h6 class="m-0 font-weight-bold text-primary"><?=lang("admin_h107");?></h6>
							</div>
							<div class="card-body">
								
								<div class="chart-pie pt-4 pb-2">
									<canvas id="myPieChart"></canvas>
								</div>
								<div class="mt-4 text-center small">
									

									<?php

									$colors = array(
										array(
											"text" => "secondary",
											"rgb" => "#858796"
										),
										array(
											"text" => "info",
											"rgb" => "#36b9cc"
										),
										array(
											"text" => "success",
											"rgb" => "#1cc88a"
										),
										array(
											"text" => "primary",
											"rgb" => "#4e73df"
										),
										array(
											"text" => "danger",
											"rgb" => "#e74a3b"
										),
									);

									?>



									<?php $i = 0; foreach ($sources as $k1) { ?>
										<span class="mr-2">
											<i class="fas fa-circle text-<?=$colors[$i]['text'];?>"></i> <b> <?php echo $k1['n']; ?> </b>
										</span>
									<?php $i++; } ?>
									
								</div>

							</div>
						</div>

					</div>

					<div class="col-lg-6 col-md-6">

						<!-- Circle Buttons -->
						<div class="card shadow mb-4">
							<div class="card-header py-3">
								<h6 class="m-0 font-weight-bold text-primary"><?=lang("admin_h4");?></h6>
							</div>
							<div class="card-body">
								
								<div class="chart-pie pt-4 pb-2">
									<canvas id="myPieChart1"></canvas>
								</div>
								<div class="mt-4 text-center small">
									<span class="mr-2">
										<i class="fas fa-circle text-secondary"></i> <?=lang("admin_h6");?> <b> </b>
									</span>
									<span class="mr-2">
										<i class="fas fa-circle text-info"></i> <?=lang("admin_h108");?> <b> </b>
									</span>
									<span class="mr-2">
										<i class="fas fa-circle text-success"></i> <?=lang("admin_h109");?> <b> </b>
									</span>
									<span class="mr-2">
										<i class="fas fa-circle text-primary"></i> <?=lang("admin_h110");?> <b> </b>
									</span>
									<span class="mr-2">
										<i class="fas fa-circle text-danger"></i> <?=lang("admin_h10");?> <b> </b>
									</span>
								</div>

							</div>
						</div>

					</div>

				</div>

				<div class="row">

					<div class="col-lg-6 col-md-6">

						<!-- Circle Buttons -->
						<div class="card shadow mb-4">
							<div class="card-header py-3">
								<h6 class="m-0 font-weight-bold text-primary"><?=lang("admin_h111");?></h6>
							</div>
							<div class="card-body">
								
								<div class="table-responsive">
									<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
										<thead>
											<tr>
												<th><?=lang("admin_h1");?></th>
												<th><?=lang("admin_h112");?></th>
											</tr>
										</thead>
										<tfoot>
											<tr>
												<th><?=lang("admin_h1");?></th>
												<th><?=lang("admin_h112");?></th>
											</tr>
										</tfoot>
										<tbody>
											<?php foreach($prods as $k => $v) { ?>
											<tr>
												<td><?php echo get_info("products", $k, "title"); ?></td>
												<td><?php echo $v; ?></td>
											</tr>
											<?php } ?>
										</tbody>
									</table>
								</div>

							</div>
						</div>

					</div>

					<div class="col-lg-6 col-md-6">

						<!-- Circle Buttons -->
						<div class="card shadow mb-4">
							<div class="card-header py-3">
								<h6 class="m-0 font-weight-bold text-primary"><?=lang("admin_h113");?></h6>
							</div>
							<div class="card-body">
								
								<div class="table-responsive">
									<table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
										<thead>
											<tr>
												<th><?=lang("admin_h114");?></th>
												<th><?=lang("admin_h95");?></th>
												<th><?=lang("admin_h115");?></th>
											</tr>
										</thead>
										<tfoot>
											<tr>
												<th><?=lang("admin_h114");?></th>
												<th><?=lang("admin_h95");?></th>
												<th><?=lang("admin_h115");?></th>
											</tr>
										</tfoot>
										<tbody>
											<?php foreach($cities as $k) { ?>
											<tr>
												<td> <span class="flag-icon flag-icon-<?php echo strtolower($k->country); ?>"></span> <?php echo $k->country; ?></td>
												<td><?php echo $k->total; ?></td>
												<td><?php echo numfmt_format_currency($fmt, $k->er, $currency); ?></td>
											</tr>
											<?php } ?>
										</tbody>
									</table>
								</div>

							</div>
						</div>

					</div>

				</div>



			</div>
			<!-- /.container-fluid -->


</div>


<?php include_once 'inc/footer.php'; ?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
<script>


	$(".datep").datepicker({
        language: 'en',
        format : "yyyy-mm-dd"
    })

	
// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example
var ctx = document.getElementById("myPieChart");

var ctx1 = document.getElementById("myPieChart1");

var myPieChart = new Chart(ctx, {
	type: 'doughnut',
	data: {
		labels: [<?php $i = 0; foreach ($sources as $k1) { if($i != 0) echo ","; ?> "<?php echo $k1['n']; ?>" <?php $i++; } ?>],
		datasets: [{
			data: [<?php $i = 0; foreach ($sources as $k1) { if($i != 0) echo ","; ?> <?php echo $k1['v']; ?> <?php $i++; } ?>],
			backgroundColor: [<?php $i = 0; foreach ($sources as $k1) { if($i != 0) echo ","; ?>"<?php echo $colors[$i]['rgb']; ?>" <?php $i++; } ?>],
			hoverBackgroundColor: [<?php $i = 0; foreach ($sources as $k1) { if($i != 0) echo ","; ?>"<?php echo $colors[$i]['rgb']; ?>" <?php $i++; } ?>],
			hoverBorderColor: "rgba(234, 236, 244, 1)",
		}],
	},
	options: {
		maintainAspectRatio: false,
		tooltips: {
			backgroundColor: "rgb(255,255,255)",
			bodyFontColor: "#858796",
			borderColor: '#dddfeb',
			borderWidth: 1,
			xPadding: 15,
			yPadding: 15,
			displayColors: false,
			caretPadding: 10,
		},
		legend: {
			display: false
		},
		cutoutPercentage: 80,
	},
});


var myPieChart = new Chart(ctx1, {
	type: 'doughnut',
	data: {
		labels: ["Pending", "Paid", "Fulfilled", "Refund", "Canceled"],
		datasets: [{
			data: [<?=$tp;?>, <?=$tpaid;?>, <?=$tf;?>, <?=$tr;?>, <?=$tc;?>],
			backgroundColor: ['#858796', '#36b9cc', '#1cc88a', '#4e73df', '#e74a3b'],
			hoverBackgroundColor: ['#858796', '#36b9cc', '#1cc88a', '#4e73df', '#e74a3b'],
			hoverBorderColor: "rgba(234, 236, 244, 1)",
		}],
	},
	options: {
		maintainAspectRatio: false,
		tooltips: {
			backgroundColor: "rgb(255,255,255)",
			bodyFontColor: "#858796",
			borderColor: '#dddfeb',
			borderWidth: 1,
			xPadding: 15,
			yPadding: 15,
			displayColors: false,
			caretPadding: 10,
		},
		legend: {
			display: false
		},
		cutoutPercentage: 80,
	},
});

$(document).ready(function() {
		$('#dataTable').DataTable({
			"order": [[ 1, "desc" ]],
			"columns": [
				null,
				null
			],
		});

		$('#dataTable1').DataTable({
			"order": [[ 1, "desc" ]],
			"columns": [
				null,
				null,
				null
			],
		});
	});


</script>

