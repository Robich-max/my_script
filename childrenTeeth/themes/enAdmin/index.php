<?php include_once 'inc/header.php'; ?>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.4.6/css/flag-icon.min.css">
<?php

$dateInfo=date('Y-m-d');
$res = $this->db->query("SELECT SUM(target) as target,id FROM account where dateat like '$dateInfo%'")->row();



$datetime = date("Y-m-d");

$dataorderCount = $this->db->query("SELECT count(id) as id FROM orders where datetime like '$datetime%'")->row();

$checkVisitCount = $this->db->query("SELECT count(id) as id FROM checkout_visit where date like '$datetime%'")->row();


?>
<style type="text/css" media="screen">
	label {

		font-weight: 600;
	}
</style>

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

	<!-- Main Content -->
	<div id="content">

		<?php include_once 'inc/navbar.php'; ?>

		<!-- Begin Page Content -->
		<div class="container-fluid">


			<div class="row">
				<div class="col-md-3">
					<form method="post" action="<?php echo base_url(); ?>/admin/targetSet">
						<label for="inp4">Today Target</label>
						<br/>

						<div class="input-group input-daterange">
							<?php if($res){?>
								<input type="hidden" value="<?php echo $res->id;?>" class="form-control" name="id"/>
								<input type="number" value="<?php echo $res->target;?>" class="form-control" name="target" placeholder="Today Target"/>
							<?php }else{?>
								<input type="number"  class="form-control" name="target" placeholder="Today Target"/>
							<?php }?>

						</div>
						<br/>
						<button class="button btn btn-success" type="submit">Submit</button>

					</form>
				</div>
				<div class="col-md-6"></div>
				<div class="col-md-3">
					<form method="post" action="<?php echo base_url(); ?>/admin/datefilter">
						<label for="inp4">Date Range for all Data</label>
						<br/>
						<div class="input-group input-daterange">
							<i class="fas fa-2x fa-calendar"></i>&nbsp;<input type="text" id="reportrange"  class="form-control pull-right" name="daterange" placeholder="Date" />

						</div>


						<br/>
						<button class="button btn btn-success" type="submit">Submit</button>

					</form>
				</div>
			</div>

			<!-- Page Heading -->
			<div class="d-sm-flex align-items-center justify-content-between mb-4">
				<h1 class="h3 mb-0 text-gray-800"><?=lang("admin_h93");?></h1>
			</div>

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
											<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Max ORDER VALUE</div>
											<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo numfmt_format_currency($fmt, $maxOrders, $currency); ?></div>
										</div>
										<div class="col-auto">
											<i class="fas fa-cart-plus fa-2x text-gray-300"></i>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-4 col-md-6 mb-4">
							<div class="card border-left-info shadow h-100 py-2">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Add to cart</div>
											<div class="h5 mb-0 font-weight-bold text-gray-800 orderinfo">00</div>
										</div>
										<div class="col-auto">
											<i class="fas fa-cart-plus fa-2x text-gray-300"></i>
										</div>
									</div>
								</div>
							</div>
						</div>



						<div class="col-xl-4 col-md-6 mb-4">
							<div class="card border-left-info shadow h-100 py-2">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Reached checkout</div>
											<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $checkVisitCount->id;?></div>
										</div>
										<div class="col-auto">
											<i class="fas fa-cart-plus fa-2x text-gray-300"></i>
										</div>
									</div>
								</div>
							</div>
						</div>


							<div class="col-xl-4 col-md-6 mb-4">
							<div class="card border-left-info shadow h-100 py-2">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Purchased</div>
											<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $dataorderCount->id;?></div>
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


			<!-- Content Row -->
			<div class="row">

				<!-- Earnings (Monthly) Card Example -->
				<div class="col-xl-3 col-md-6 mb-4">
					<div class="card border-left-primary shadow h-100 py-2">
						<div class="card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-2">
									<div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><?=lang("admin_h137");?></div>
									<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo numfmt_format_currency($fmt, $mo9, $currency); ?></div>
								</div>
								<div class="col-auto">
									<i class="fas fa-calendar fa-2x text-gray-300"></i>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Earnings (Monthly) Card Example -->
				<div class="col-xl-3 col-md-6 mb-4">
					<div class="card border-left-success shadow h-100 py-2">
						<div class="card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-2">
									<div class="text-xs font-weight-bold text-success text-uppercase mb-1"><?=lang("admin_h138");?></div>
									<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo numfmt_format_currency($fmt, $mo10, $currency); ?></div>
								</div>
								<div class="col-auto">
									<i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Earnings (Monthly) Card Example -->
				<div class="col-xl-3 col-md-6 mb-4">
					<div class="card border-left-info shadow h-100 py-2">
						<div class="card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-2">
									<div class="text-xs font-weight-bold text-info text-uppercase mb-1"><?=lang("admin_h139");?></div>
									<div class="row no-gutters align-items-center">
										<div class="col-auto">
											<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo numfmt_format_currency($fmt, $mo6, $currency); ?></div>
										</div>
										<div class="col">
										</div>
									</div>
								</div>
								<div class="col-auto">
									<i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Pending Requests Card Example -->
				<div class="col-xl-3 col-md-6 mb-4">
					<div class="card border-left-warning shadow h-100 py-2">
						<div class="card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-2">
									<div class="text-xs font-weight-bold text-warning text-uppercase mb-1"><?=lang("admin_h140");?></div>
									<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $mo2; ?></div>
								</div>
								<div class="col-auto">
									<i class="fas fa-comments fa-2x text-gray-300"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Content Row -->


			<!-- Content Row -->


			<!-- Content Row -->

			<div class="row">

				<!-- Area Chart -->
				<div class="col-xl-8 col-lg-7">
					<div class="card shadow mb-4">
						<!-- Card Header - Dropdown -->
						<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
							<h6 class="m-0 font-weight-bold text-primary">Monthly Order Overview</h6>

						</div>
						<!-- Card Body -->
						<div class="card-body">
							<div class="chart-area">
								<canvas id="myAreaChart"></canvas>
							</div>
						</div>
					</div>
				</div>

				<!-- Pie Chart -->
				<div class="col-xl-4 col-lg-5">
					<div class="card shadow mb-4">
						<!-- Card Header - Dropdown -->
						<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
							<h6 class="m-0 font-weight-bold text-primary"><?=lang("admin_h142");?></h6>

						</div>
						<!-- Card Body -->
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

				</div>



				<div class="row">
					<div class="col-lg-7">
<div class="card shadow mb-4">
						<div class="card-body">
							<div class="float-right d-none d-md-inline-block">
								<div class="btn-group mb-2">
									<a href="<?php echo base_url(); ?>admin/chartId/today" type="button" class="btn btn-xs btn-secondary" >Today</a>



									<a href="<?php echo base_url(); ?>admin/chartId/monthly" type="button" class="btn btn-xs btn-secondary" >Monthly</a>

									<a href="<?php echo base_url(); ?>admin/chartId/yearly" type="button" class="btn btn-xs btn-secondary" >Yearly</a>



								</div>

							</div>
							<h4 class="header-title">Revenue</h4>
							<div id="today">
								<div class="row mt-4 text-center">
									<div class="col-4">
										<p class="text-muted font-15 mb-1 text-truncate">Target</p>
										<h4><i class="fe-arrow-down text-danger mr-1"></i>$<?php echo $target;?></h4>
									</div>
									<div class="col-4">
										<p class="text-muted font-15 mb-1 text-truncate">Sale</p>
										<h4><i class="fe-arrow-up text-success mr-1"></i>$<?php echo $totla;?></h4>
									</div>

								</div>
								<div class="mt-3 chartjs-chart">
									<div id="chart"></div>
								</div>

							</div>



						</div> <!-- end card-body-->
						</div> <!-- end card-body-->

					</div>

					<div class="col-lg-5">
						<div class="card shadow mb-4">
							<div class="card-header py-3">
								<h6 class="m-0 font-weight-bold text-primary"><?=lang("admin_h113");?></h6>
							</div>
							<div class="card-body">

								<div id="mapdiv" style="width: 470px; height: 350px;"></div>


							</div>
						</div>
					</div>
					<!-- end col -->

					<!-- end card-->
				</div>
				<div class="row">

					<div class="col-lg-6">

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
													<td><?php



													echo get_info("products", $k, "title"); ?></td>
													<td><?php echo $v; ?></td>
												</tr>
											<?php } ?>
										</tbody>
									</table>
								</div>

							</div>
						</div>

					</div>

					<div class="col-lg-6">

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



		</div>
		<!-- /.container-fluid -->

	</div>
</div>
<!-- End of Main Content -->



<?php include_once 'inc/footer.php'; ?>


<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>


<script>

// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

function number_format(number, decimals, dec_point, thousands_sep) {
  // *     example: number_format(1234.56, 2, ',', ' ');
  // *     return: '1 234,56'
  number = (number + '').replace(',', '').replace(' ', '');
  var n = !isFinite(+number) ? 0 : +number,
  prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
  sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
  dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
  s = '',
  toFixedFix = function(n, prec) {
  	var k = Math.pow(10, prec);
  	return '' + Math.round(n * k) / k;
  };
  // Fix for IE parseFloat(0.55).toFixed(0) = 0;
  s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
  if (s[0].length > 3) {
  	s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
  }
  if ((s[1] || '').length < prec) {
  	s[1] = s[1] || '';
  	s[1] += new Array(prec - s[1].length + 1).join('0');
  }
  return s.join(dec);
}

// Area Chart Example

var ctx = document.getElementById("myAreaChart");
var myLineChart = new Chart(ctx, {
	type: 'line',

	data: {
		labels: [<?php $i = 1; foreach($months as $ce) { echo $i == 1 ? "'".$ce['title']."'" : ", '".$ce['title']."'"; $i++; } ?>],
		datasets: [{
			label: "Earnings",
			lineTension: 0.3,
			backgroundColor: "rgba(78, 115, 223, 0.05)",
			borderColor: "rgba(78, 115, 223, 1)",
			pointRadius: 3,
			pointBackgroundColor: "rgba(78, 115, 223, 1)",
			pointBorderColor: "rgba(78, 115, 223, 1)",
			pointHoverRadius: 3,
			pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
			pointHoverBorderColor: "rgba(78, 115, 223, 1)",
			pointHitRadius: 10,
			pointBorderWidth: 2,
			data: [<?php $i = 1; foreach($months as $ce) { echo $i == 1 ? $ce['value'] : ", ".$ce['value']; $i++; } ?>],
		}],
	},
	options: {
		maintainAspectRatio: false,
		layout: {
			padding: {
				left: 10,
				right: 25,
				top: 25,
				bottom: 0
			}
		},
		scales: {
			xAxes: [{
				time: {
					unit: 'date'
				},
				gridLines: {
					display: false,
					drawBorder: false
				},
				ticks: {
					maxTicksLimit: 7
				}
			}],
			yAxes: [{
				ticks: {
					maxTicksLimit: 5,
					padding: 10,
          // Include a dollar sign in the ticks
          callback: function(value, index, values) {
          	return '$' + number_format(value);
          }
      },
      gridLines: {
      	color: "rgb(234, 236, 244)",
      	zeroLineColor: "rgb(234, 236, 244)",
      	drawBorder: false,
      	borderDash: [2],
      	zeroLineBorderDash: [2]
      }
  }],
},
legend: {
	display: false
},
tooltips: {
	backgroundColor: "rgb(255,255,255)",
	bodyFontColor: "#858796",
	titleMarginBottom: 10,
	titleFontColor: '#6e707e',
	titleFontSize: 14,
	borderColor: '#dddfeb',
	borderWidth: 1,
	xPadding: 15,
	yPadding: 15,
	displayColors: false,
	intersect: false,
	mode: 'index',
	caretPadding: 10,
	callbacks: {
		label: function(tooltipItem, chart) {
			var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
			return datasetLabel + ': $' + number_format(tooltipItem.yLabel);
		}
	}
}
}
});


var ctx = document.getElementById("myPieChart");

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



</script>



<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="http://localhost/fiverr/fiverr4th/ubold/Ubold_v3.4.0/Laravel/Admin/Horizontal/public/assets/libs/chart-js/chart-js.min.js"></script>







<script>

	// Bar
	// Line
	// Area
	Morris.Area({
		element : 'chart',
		data:[<?php echo $chart_data; ?>],
		xkey:'date',
		ykeys:[ 'sale', 'Target'],
		labels:[ 'sale', 'Target'],
		hideHover:'auto',
// stacked:true
});
</script>
<script>

	// Bar
	// Line
	// Area
	Morris.Area({
		element : 'chart1',
		data:[<?php echo $chart_data1; ?>],
		xkey:'date',
		ykeys:[ 'sale', 'Target'],
		labels:[ 'sale', 'Target'],
		hideHover:'auto',
// stacked:true
});
</script>

<script>

	// Bar
	// Line
	// Area
	Morris.Area({
		element : 'chart2',
		data:[<?php echo $chart_data2; ?>],
		xkey:'date',
		ykeys:[ 'sale', 'Target'],
		labels:[ 'sale', 'Target'],
		hideHover:'auto',
// stacked:true
});
</script>



<script type="text/javascript">
	var map = AmCharts.makeChart("mapdiv",{
		type: "map",
		theme: "dark",
		projection: "mercator",
		panEventsEnabled : true,
		backgroundColor : "#202021",
		backgroundAlpha : 1,
		zoomControl: {
			zoomControlEnabled : true
		},
		dataProvider : {
			map : "worldHigh",
			getAreasFromMap : true,
			areas :
			[	<?php foreach ($cities as $key) { ?>

				{
					"id": "<?php echo $key->country; ?>",
					"showAsSelected": true
				},
				<?php }?>]
			},
			areasSettings : {
				autoZoom : true,
				color : "#B4B4B7",
				colorSolid : "#ED9913",
				selectedColor : "#ED9913",
				outlineColor : "#00095C",
				rollOverColor : "#9EC2F7",
				rollOverOutlineColor : "#000000"
			}
		});
	</script>




	<script type="text/javascript">
$(function() {

    var start = moment().subtract(29, 'days');
    var end = moment();

    function cb(start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    }

    $('#reportrange').daterangepicker({
        startDate: start,
        endDate: end,
        ranges: {
           'Today': [moment(), moment()],
           'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
           'Last 7 Days': [moment().subtract(6, 'days'), moment()],
           'Last 30 Days': [moment().subtract(29, 'days'), moment()],
           'This Month': [moment().startOf('month'), moment().endOf('month')],
           'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
    }, cb);

    cb(start, end);

});
</script>

	<script type="text/javascript">

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



<script>
    $(document).ready(function () {

        function live_matches() {

        	 $('.orderinfo').html('');

                $.ajax({
                    url: '<?php echo base_url("web/dataInfo"); ?>',
                    method: 'get',
                    dataType: 'html',
                    data: '',

                    success: function (response) {
                        $('.orderinfo').append(response);
                    }

                }, 5000);

        }

        refresh_timer = setInterval(live_matches, 5000);

    });

</script>