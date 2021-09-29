<?php include_once 'inc/header.php'; ?>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.4.6/css/flag-icon.min.css">
<style type="text/css" media="screen">
	label {

		font-weight: 600;
	}

	.chart {
		width: 100%;
		min-height: 100vh;
	}
</style>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

	<!-- Main Content -->
	<div id="content">

		<?php include_once 'inc/navbar.php'; ?>

		<!-- Begin Page Content -->
		<div class="container-fluid">

			<div style="padding:0px 20px">

				<div>
					<h2><?php echo $title ?>
						<span style="font-size:20px;">(
							<?php
							if ($type == 'number') {
								echo number_format($totals);
							} else if ($type == 'currency') {
								echo numfmt_format_currency($fmt, $totals, $currency);
							}
							?>
							)</span>
					</h2>
				</div>

			</div>


			<div class="row">

				<div class="col-md-12">
					<div id="columnchart_values" style="width: 100%;"></div>
				</div>
			</div>
			<?php include_once 'inc/footer.php'; ?>
		</div>
	</div>
	<!-- /.container-fluid -->
</div>

<!-- End of Main Content -->


<script type="text/javascript">
	google.charts.load('current', {
		packages: ['corechart', 'bar']
	});

	google.charts.setOnLoadCallback(drawChart);

	function drawChart() {

		var data = google.visualization.arrayToDataTable(<?php echo $chartData; ?>);

		var view = new google.visualization.DataView(data);


		var options = {
			// width: 1200,
			height: 500,
			// bar: {
			// 	groupWidth: "90%"
			// },
			legend: {
				position: "none"
			},
		};
		var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
		chart.draw(view, options);
	}
</script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>