<?php include_once 'inc/header.php'; ?>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.4.6/css/flag-icon.min.css">
<?php

$dateInfo = date('Y-m-d');
$res = $this->db->query("SELECT SUM(target) as target,id FROM account where dateat like '$dateInfo%'")->row();



$datetime = date("Y-m-d");

$dataorderCount = $this->db->query("SELECT count(id) as id FROM orders where datetime like '$datetime%'")->row();

$checkVisitCount = $this->db->query("SELECT count(id) as id FROM checkout_visit where date like '$datetime%'")->row();


?>
<style type="text/css" media="screen">
    label {

        font-weight: 600;
    }

    .card {
        margin-bottom: 20px;
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
                        <br />

                        <div class="input-group input-daterange">
                            <?php if ($res) { ?>
                                <input type="hidden" value="<?php echo $res->id; ?>" class="form-control" name="id" />
                                <input type="number" value="<?php echo $res->target; ?>" class="form-control" name="target" placeholder="Today Target" />
                            <?php } else { ?>
                                <input type="number" class="form-control" name="target" placeholder="Today Target" />
                            <?php } ?>

                        </div>
                        <br />
                        <button class="button btn btn-success" type="submit">Submit</button>
                    </form>
                </div>
                <div class="col-md-6"></div>
                <div class="col-md-3">
                    <form method="get" action="<?php echo base_url(); ?>admin/datefilter" id="datetime-picker">
                        <label for="inp4">Date Range for all Data</label>
                        <br />
                        <div class="input-group input-daterange">
                            <i class="fas fa-2x fa-calendar"></i>&nbsp;<input type="text" <?php echo (isset($saa_percent['dateinfo'])) ? "value='" . $saa_percent['dateinfo'] . "'" : ""; ?> id="reportrange" class="form-control pull-right" name="daterange" placeholder="Date" />

                        </div>


                        <br />
                        <button style="display:none" class="button btn btn-success" type="submit">Submit</button>

                    </form>
                </div>
            </div>

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800"><?= lang("admin_h93"); ?></h1>
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"><?= lang("admin_h98"); ?> </h6>
                </div>

                <!--    Syed Ali Ahmed    -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="float-left">
                                            <b style="border-bottom: 1px dotted #000;">VISITORS</b>
                                            <h3><?php echo number_format($visitors_widget_data['totalVisitors']); //echo $s['t'] 
                                                ?></h3>
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                        <div class="float-right">
                                            <a onclick="event.preventDefault(); submitReport('viewReport?report=visitors')" href="javascript:;">View Report</a>

                                            <h3 align="right" <?php if (isset($saa_percent['color1'])) {
                                                                    echo 'style="color: ' . $saa_percent['color1'] . '"'; ?> <?php } ?>><?php if (isset($saa_percent['visitors_percent'])) {
                                                                                                                                            echo $saa_percent['arrow1'] . $saa_percent['visitors_percent'];
                                                                                                                                        } ?>%</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <span>VISITORS</span>
                                        <div id="visitors" style="width: 100%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="float-left">
                                            <b style="border-bottom: 1px dotted #000;">PAGE REVIEWS</b>
                                            <h3><?php echo number_format($pageReViews_widget_data['totalPageViews']); // $s['tpv'] 
                                                ?></h3>
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                        <div class="float-right">
                                            <a onclick="event.preventDefault(); submitReport('viewReport?report=pageReViews')" href="javascript:;">View Report</a>
                                            <!-- <a onclick="event.preventDefault();document.getElementById('reviews-submit').submit()" href="<?php echo base_url(); ?>admin/viewReport?report=pageReViews">View Report</a>
                                            <form id="reviews-submit" action="<?php echo base_url(); ?>admin" method="get">
                                                <input type="hidden" value="counter" name="report">
                                                <input type="hidden" value="rviews" name="action">
                                            </form> -->
                                            <h3 align="right" <?php if (isset($saa_percent['color2'])) {
                                                                    echo 'style="color: ' . $saa_percent['color2'] . '"'; ?> <?php } ?>><?php if (isset($saa_percent['reviews_percent'])) {
                                                                                                                                            echo $saa_percent['arrow2'] . $saa_percent['reviews_percent'];
                                                                                                                                        } ?>%</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <span>PAGE REVIEWS</span>
                                        <div id="page_reviews" style="width: 100%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="float-left">
                                            <b style="border-bottom: 1px dotted #000;">CONVERSION RATE</b>
                                            <h3><?php
                                                // echo $s['t'] > 0 ? number_format($allOrders / $s['t']  * 100, 2) : 0; 
                                                echo $conversionRate_widget_data['totalConversionRate'];
                                                ?> %</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                        <div class="float-right">
                                            <a onclick="event.preventDefault(); submitReport('viewReport?report=conversionRate')" href="javascript:;">View Report</a>
                                            <!-- <a onclick="event.preventDefault(); document.getElementById('converssion-submit').submit()" href="<?php echo base_url(); ?>admin/viewReport?report=conversionRate">View Report</a>
                                            <form id="converssion-submit" action="<?php echo base_url(); ?>admin/viewReport" method="get">
                                                <input type="hidden" value="counter" name="report">
                                                <input type="hidden" value="conversion" name="action">
                                            </form> -->
                                            <h3 align="right" style="color: #1cc88a;">↑<?php
                                                                                        // echo $s['t'] > 0 ? number_format($allOrders / $s['t']  * 100, 2) : 0; 
                                                                                        echo $conversionRate_widget_data['totalConversionRate'];
                                                                                        ?>%</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <span>CONVERSION RATE</span>
                                        <div id="conversion_rate" style="width: 100%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="float-left">
                                            <b style="border-bottom: 1px dotted #000;">TOTAL CUSTOMERS</b>
                                            <h3><?php echo $customers_widget_data['totalCustomers']['t']; //$totalCostumers['t']; 
                                                ?></h3>
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                        <div class="float-right">
                                            <a onclick="event.preventDefault(); submitReport('viewReport?report=customers')" href="javascript:;">View Report</a>
                                            <!-- <a onclick="event.preventDefault(); document.getElementById('customers-submit').submit()" href="<?php echo base_url(); ?>admin/viewReport?report=customers">View Report</a>
                                            <form id="customers-submit" action="<?php echo base_url() ?>admin/viewReport" method="get">
                                                <input type="hidden" value="orders" name="report">
                                            </form> -->
                                            <h3 align="right" style="color:#1cc88a">↑20%</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <span>TOTAL CUSTOMERS</span>
                                        <div id="total_customers" style="width: 100%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">

                                <div class="row">

                                    <div class="col-md-8">

                                        <div class="float-left">
                                            <b style="border-bottom: 1px dotted #000;">RETURNING CUSTOMERS</b>
                                            <h3><?php echo $returningCustomers_widget_data['totalCustomers']['tr']; // $totalCostumers['tr']; 
                                                ?></h3>
                                        </div>
                                    </div>
                                    <div class="col-md-4">

                                        <div class="float-right">
                                            <a onclick="event.preventDefault(); submitReport('viewReport?report=returningCustomers')" href="javascript:;">View Report</a>
                                            <!-- <a onclick="event.preventDefault(); document.getElementById('returning-submit').submit()" href="<?php echo base_url(); ?>admin/viewReport?report=returningCustomers">View Report</a>
                                            <form id="returning-submit" action="<?php echo base_url() ?>admin/viewReport" method="get">
                                                <input type="hidden" value="orders" name="report">
                                            </form> -->
                                            <h3 align="right" style="color: #1cc88a">↑10%</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <span>RETURNING CUSTOMERS</span>
                                        <div id="returning_customers" style="width: 100%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="float-left">
                                            <b style="border-bottom: 1px dotted #000;">TOTAL ORDERS</b>
                                            <h3><?php echo  $totalOrders_widget_data['totalOrders']; //$totalOrders; 
                                                ?></h3>
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                        <div class="float-right">
                                            <a onclick="event.preventDefault(); submitReport('viewReport?report=totalOrders')" href="javascript:;">View Report</a>
                                            <!-- <a onclick="event.preventDefault(); document.getElementById('total-orders-submit').submit()" href="<?php echo base_url(); ?>admin/viewReport?report=totalOrders">View Report</a>
                                            <form id="total-orders-submit" action="<?php echo base_url() ?>admin/viewReport" method="get">
                                                <input type="hidden" value="orders" name="report">
                                            </form> -->
                                            <h3 align="right" style="color:red;">↓30%</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <span>TOTAL ORDERS</span>
                                        <div id="total_orders" style="width: 100%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="float-left">
                                            <b style="border-bottom: 1px dotted #000;">MIN ORDER VALUE</b>
                                            <h3><?php
                                                // echo  numfmt_format_currency($fmt, $minOrders, $currency);
                                                echo numfmt_format_currency($fmt, $minOrderValue_widget_data['minOrderAmount'], $currency);
                                                ?></h3>
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                        <div class="float-right">
                                            <a onclick="event.preventDefault(); submitReport('viewReport?report=minOrderValue')" href="javascript:;">View Report</a>
                                            <!-- <a onclick="event.preventDefault(); document.getElementById('min-orders-submit').submit()" href="<?php echo base_url(); ?>admin/viewReport?report=minOrderValue">View Report</a>
                                            <form id="min-orders-submit" action="<?php echo base_url() ?>admin/viewReport" method="get">
                                                <input type="hidden" value="orders" name="report">
                                            </form> -->
                                            <h3 align="right" <?php if (isset($saa_percent['color3'])) {
                                                                    echo 'style="color: ' . $saa_percent['color3'] . '"'; ?> <?php } ?>><?php if (isset($saa_percent['min_percent'])) {
                                                                                                                                            echo $saa_percent['arrow3'] . $saa_percent['min_percent'];
                                                                                                                                        } ?>%</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <span>MIN ORDER VALUE</span>
                                        <div id="min_order_value" style="width: 100%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="float-left">
                                            <b style="border-bottom: 1px dotted #000;">AVG ORDER VALUE</b>
                                            <h3><?php
                                                // echo  numfmt_format_currency($fmt, $avgOrders, $currency); 
                                                echo numfmt_format_currency($fmt, $avgOrderValue_widget_data['avgOrderAmount'], $currency);
                                                ?></h3>
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                        <div class="float-right">
                                            <a onclick="event.preventDefault(); submitReport('viewReport?report=avgOrderValue')" href="javascript:;">View Report</a>
                                            <!-- <a onclick="event.preventDefault(); document.getElementById('avg-orders-submit').submit()" href="<?php echo base_url(); ?>admin/viewReport?report=avgOrderValue">View Report</a>
                                            <form id="avg-orders-submit" action="<?php echo base_url() ?>admin/viewReport" method="get">
                                                <input type="hidden" value="orders" name="report">
                                            </form> -->
                                            <h3 align="right" <?php if (isset($saa_percent['color4'])) {
                                                                    echo 'style="color: ' . $saa_percent['color4'] . '"'; ?> <?php } ?>><?php if (isset($saa_percent['avg_percent'])) {
                                                                                                                                            echo $saa_percent['arrow4'] . $saa_percent['avg_percent'];
                                                                                                                                        } ?>%</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <span>AVERAGE ORDER VALUE</span>
                                        <div id="avg_order_value" style="width: 100%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="float-left">
                                            <b style="border-bottom: 1px dotted #000;">MAX ORDER VALUE</b>
                                            <h3><?php
                                                // echo  numfmt_format_currency($fmt, $maxOrders, $currency); 
                                                echo numfmt_format_currency($fmt, $maxOrderValue_widget_data['maxOrderAmount'], $currency);
                                                ?></h3>
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                        <div class="float-right">
                                            <a onclick="event.preventDefault(); submitReport('viewReport?report=maxOrderValue')" href="javascript:;">View Report</a>
                                            <!-- <a onclick="event.preventDefault(); document.getElementById('max-orders-submit').submit()" href="<?php echo base_url(); ?>admin/viewReport?report=maxOrderValue">View Report</a>
                                            <form id="max-orders-submit" action="<?php echo base_url() ?>admin/viewReport" method="get">
                                                <input type="hidden" value="orders" name="report">
                                            </form> -->
                                            <h3 align="right" <?php if (isset($saa_percent['color5'])) {
                                                                    echo 'style="color: ' . $saa_percent['color5'] . '"'; ?> <?php } ?>><?php if (isset($saa_percent['max_percent'])) {
                                                                                                                                            echo $saa_percent['arrow5'] . $saa_percent['max_percent'];
                                                                                                                                        } ?>%</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <span>MAX ORDER VALUE</span>
                                        <div id="max_order_value" style="width: 100%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="float-left">
                                            <b style="border-bottom: 1px dotted #000;">ADD TO CART</b>
                                            <h3 class="orderinfo"> 00<?php //echo  numfmt_format_currency($fmt, $maxOrders, $currency); 
                                                                        ?></h3>
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                        <div class="float-right">
                                            <!--<a onclick="event.preventDefault(); document.getElementById('dataorder-count').submit()" href="<?php echo base_url(); ?>admin/viewReport">View Report</a>-->
                                            <form action="<?php echo base_url() ?>admin/viewReport">
                                                <input type="hidden" value="" name="report">
                                            </form>
                                            <h3 align="right">-</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <span>ADD TO CART</span>
                                        <div id="add_to_cart" style="width: 100%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="float-left">
                                            <b style="border-bottom: 1px dotted #000;">REACHED CHECKOUT</b>
                                            <h3> <?php echo  $checkVisitCount->id; ?></h3>
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                        <div class="float-right">
                                            <!--<a onclick="event.preventDefault(); document.getElementById('dataorder-count').submit()" href="<?php echo base_url(); ?>admin/viewReport">View Report</a>-->
                                            <form action="<?php echo base_url() ?>admin/viewReport">
                                                <input type="hidden" value="" name="report">
                                            </form>
                                            <h3 align="right">-</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <span>REACHED CHECKOUT</span>
                                        <div id="reached_checkout" style="width: 100%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="float-left">
                                            <b style="border-bottom: 1px dotted #000;">PURCHASED</b>
                                            <h3> <?php echo  $dataorderCount->id; ?></h3>
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                        <div class="float-right">
                                            <!--<a onclick="event.preventDefault(); document.getElementById('dataorder-count').submit()" href="<?php echo base_url(); ?>admin/viewReport">View Report</a>-->
                                            <form action="<?php echo base_url() ?>admin/viewReport">
                                                <input type="hidden" value="" name="report">
                                            </form>
                                            <h3 align="right">-</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <span>PURCHASED</span>
                                        <div id="purchased" style="width: 100%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <script>
                    function submitReport(url) {
                        <?php
                        if ($this->input->post('daterange') || isset($_GET['daterange'])) {
                        ?>
                            url = url + "&daterange=<?= $this->input->post('daterange') ? $this->input->post('daterange') : $_GET['daterange']; ?>"
                        <?php
                        }
                        ?>
                        window.location = base_url + 'admin/' + url;
                    }
                </script>


                <!--    My Scripts    -->
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script type="text/javascript">
                    //  Visitors Chart Controler Javascript
                    google.charts.load('current', {
                        'packages': ['corechart']
                    });
                    google.charts.setOnLoadCallback(VisitorsChart);

                    function VisitorsChart() {


                        var g_data = google.visualization.arrayToDataTable(
                            <?php echo $visitors_widget_data['chartData'] ?>
                        );

                        var g_options = {
                            // hAxis: {
                            //     maxValue: <?php echo "100" //$s['t'] 
                            //                 ?>
                            // },
                            vAxis: {
                                maxValue: 0
                            },
                            chartArea: {
                                width: 280,
                                height: 100
                            },
                            lineWidth: 4,
                            series: {
                                0: {
                                    lineDashStyle: [1, 1]
                                },
                                1: {
                                    lineDashStyle: [1, 1]
                                }
                            },
                            legend: {
                                position: 'bottom',
                                maxLines: 3
                            },
                            colors: ['#1cc88a', '#000fff']
                        }

                        var chart = new google.visualization.AreaChart(document.getElementById('visitors'));
                        chart.draw(g_data, g_options);
                    }


                    // Reviews Chart Controller
                    google.charts.load('current', {
                        'packages': ['corechart']
                    });
                    google.charts.setOnLoadCallback(drawReviews);

                    function drawReviews() {


                        var g_data = google.visualization.arrayToDataTable(<?php echo $pageReViews_widget_data['chartData'] ?>);

                        var g_options = {
                            // hAxis: {
                            //     maxValue: <?php echo $s['tpv'] ?>
                            // },
                            vAxis: {
                                maxValue: 0
                            },
                            chartArea: {
                                width: 280,
                                height: 100
                            },
                            lineWidth: 4,
                            series: {
                                0: {
                                    lineDashStyle: [1, 1]
                                },
                                1: {
                                    lineDashStyle: [1, 1]
                                }
                            },
                            legend: {
                                position: 'bottom',
                                maxLines: 3
                            },
                            colors: ['#1cc88a', '#000fff']
                        }

                        var chart = new google.visualization.AreaChart(document.getElementById('page_reviews'));
                        chart.draw(g_data, g_options);
                    }

                    // conversion_rate
                    google.charts.load('current', {
                        'packages': ['corechart']
                    });
                    google.charts.setOnLoadCallback(conversion);

                    function conversion() {


                        var g_data = google.visualization.arrayToDataTable(<?php echo $conversionRate_widget_data['chartData']; ?>);

                        var g_options = {
                            // hAxis: {
                            //     maxValue: <?php echo $s['tpv'] ?>
                            // },
                            vAxis: {
                                maxValue: 0
                            },
                            chartArea: {
                                width: 280,
                                height: 100
                            },
                            lineWidth: 4,
                            series: {
                                0: {
                                    lineDashStyle: [1, 1]
                                },
                                1: {
                                    lineDashStyle: [1, 1]
                                }
                            },
                            legend: {
                                position: 'bottom',
                                maxLines: 3
                            },

                            colors: ['#1cc88a', '#000fff']
                        }

                        var chart = new google.visualization.AreaChart(document.getElementById('conversion_rate'));
                        chart.draw(g_data, g_options);
                    }

                    // Total Customers
                    google.charts.load('current', {
                        'packages': ['corechart']
                    });
                    google.charts.setOnLoadCallback(total_customers);



                    function total_customers() {


                        var g_data = google.visualization.arrayToDataTable(<?php echo $customers_widget_data['chartData'] ?>);

                        var g_options = {
                            // hAxis: {
                            //     maxValue: <?php echo $customers_widget_data['totalCustomers']['t']; //$totalCostumers['t']; 
                            //                 ?>
                            // },
                            vAxis: {
                                maxValue: 0
                            },
                            chartArea: {
                                width: 280
                            },
                            lineWidth: 4,
                            series: {
                                0: {
                                    lineDashStyle: [1, 1]
                                },
                                1: {
                                    lineDashStyle: [1, 1]
                                }
                            },
                            legend: {
                                position: 'bottom',
                                maxLines: 3
                            },

                            colors: ['#1cc88a', '#000fff']
                        }

                        var chart = new google.visualization.AreaChart(document.getElementById('total_customers'));
                        chart.draw(g_data, g_options);
                    }

                    // returning_customers
                    google.charts.load('current', {
                        'packages': ['corechart']
                    });
                    google.charts.setOnLoadCallback(returning_customers);

                    function returning_customers() {


                        var g_data = google.visualization.arrayToDataTable(<?php echo $returningCustomers_widget_data['chartData'];  ?>);

                        var g_options = {
                            // hAxis: {
                            //     maxValue: <?php echo $returningCustomers_widget_data['totalCustomers']['tr'] ? $returningCustomers_widget_data['totalCustomers']['tr'] : 5; //$totalCostumers['t']; 
                            //                 ?>
                            // },
                            vAxis: {
                                maxValue: 0
                            },
                            chartArea: {
                                width: 280
                            },
                            lineWidth: 4,
                            series: {
                                0: {
                                    lineDashStyle: [1, 1]
                                },
                                1: {
                                    lineDashStyle: [1, 1]
                                }
                            },
                            legend: {
                                position: 'bottom',
                                maxLines: 3
                            },

                            colors: ['#1cc88a', '#000fff']
                        }

                        var chart = new google.visualization.AreaChart(document.getElementById('returning_customers'));
                        chart.draw(g_data, g_options);
                    }

                    // total_orders
                    google.charts.load('current', {
                        'packages': ['corechart']
                    });
                    google.charts.setOnLoadCallback(total_orders);

                    function total_orders() {


                        var g_data = google.visualization.arrayToDataTable(<?php echo $totalOrders_widget_data['chartData'] ?>);

                        var g_options = {
                            // hAxis: {
                            //     maxValue: <?php echo $totalOrders_widget_data['totalOrders']; //$totalOrders; 
                            //                 ?>
                            // },
                            vAxis: {
                                maxValue: 0
                            },
                            chartArea: {
                                width: 280
                            },
                            lineWidth: 4,
                            series: {
                                0: {
                                    lineDashStyle: [1, 1]
                                },
                                1: {
                                    lineDashStyle: [1, 1]
                                }
                            },
                            legend: {
                                position: 'bottom',
                                maxLines: 3
                            },
                            colors: ['#1cc88a', '#000fff']
                        }

                        var chart = new google.visualization.AreaChart(document.getElementById('total_orders'));
                        chart.draw(g_data, g_options);
                    }

                    // min_order_value
                    google.charts.load('current', {
                        'packages': ['corechart']
                    });
                    google.charts.setOnLoadCallback(min_order_value);

                    function min_order_value() {


                        var g_data = google.visualization.arrayToDataTable(<?php echo $minOrderValue_widget_data['chartData'] ?>);

                        var g_options = {
                            // hAxis: {
                            //     maxValue: 1000
                            // },
                            vAxis: {
                                maxValue: 0
                            },
                            chartArea: {
                                width: 280
                            },
                            lineWidth: 4,
                            series: {
                                0: {
                                    lineDashStyle: [1, 1]
                                },
                                1: {
                                    lineDashStyle: [1, 1]
                                }
                            },
                            legend: {
                                position: 'bottom',
                                maxLines: 3
                            },
                            colors: ['#1cc88a', '#000fff']
                        }

                        var chart = new google.visualization.AreaChart(document.getElementById('min_order_value'));
                        chart.draw(g_data, g_options);
                    }

                    // avg_order_value
                    google.charts.load('current', {
                        'packages': ['corechart']
                    });
                    google.charts.setOnLoadCallback(avg_order_value);

                    function avg_order_value() {


                        var g_data = google.visualization.arrayToDataTable(<?php echo $avgOrderValue_widget_data['chartData'] ?>);

                        var g_options = {
                            // hAxis: {
                            //     maxValue: <?php echo str_replace("$", "", numfmt_format_currency($fmt, $avgOrders, $currency)); ?>
                            // },
                            vAxis: {
                                maxValue: 0
                            },
                            chartArea: {
                                width: 280
                            },
                            lineWidth: 4,
                            series: {
                                0: {
                                    lineDashStyle: [1, 1]
                                },
                                1: {
                                    lineDashStyle: [1, 1]
                                }
                            },
                            legend: {
                                position: 'bottom',
                                maxLines: 3
                            },
                            colors: ['#1cc88a', '#000fff']
                        }

                        var chart = new google.visualization.AreaChart(document.getElementById('avg_order_value'));
                        chart.draw(g_data, g_options);
                    }

                    // max_order_value
                    google.charts.load('current', {
                        'packages': ['corechart']
                    });
                    google.charts.setOnLoadCallback(max_order_value);

                    function max_order_value() {


                        var g_data = google.visualization.arrayToDataTable(<?php echo $maxOrderValue_widget_data['chartData']; ?>);

                        var g_options = {
                            // hAxis: {
                            //     maxValue: 1
                            // },
                            vAxis: {
                                maxValue: 0
                            },
                            chartArea: {
                                width: 280
                            },
                            lineWidth: 4,
                            series: {
                                0: {
                                    lineDashStyle: [1, 1]
                                },
                                1: {
                                    lineDashStyle: [1, 1]
                                }
                            },
                            legend: {
                                position: 'bottom',
                                maxLines: 3
                            },
                            colors: ['#1cc88a', '#000fff']
                        }

                        var chart = new google.visualization.AreaChart(document.getElementById('max_order_value'));
                        chart.draw(g_data, g_options);
                    }

                    // add_to_cart
                    // google.charts.load('current', {'packages':['corechart']});
                    // google.charts.setOnLoadCallback(add_to_cart);
                    //
                    // function add_to_cart() {
                    //
                    //
                    //     var g_data = google.visualization.arrayToDataTable([
                    //         ['ADD TO CART', 'ADD To Cart'],
                    //         ['ADD TO CART', 0],
                    //         ['ADD TO CART', 10]
                    //     ]);
                    //
                    //     var g_options = {
                    //         hAxis: {maxValue: 10},
                    //         vAxis: {maxValue: 0},
                    //         chartArea: { width: 330 },
                    //         lineWidth: 4,
                    //         series: {
                    //             0: { lineDashStyle: [1, 1] }
                    //         },
                    //         legend: { position: 'bottom', maxLines: 3 },
                    //         colors: ['#1cc88a', '#000fff']
                    //     }
                    //
                    //     var chart = new google.visualization.AreaChart(document.getElementById('add_to_cart'));
                    //     chart.draw(g_data, g_options);
                    // }

                    // reached_checkout
                    // google.charts.load('current', {'packages':['corechart']});
                    // google.charts.setOnLoadCallback(reached_checkout);
                    //
                    // function reached_checkout() {
                    //
                    //
                    //     var g_data = google.visualization.arrayToDataTable([
                    //         ['REACHED CHECKOUT', 'Reached Checkout'],
                    //         ['REACHED CHECKOUT', 0],
                    //         ['REACHED CHECKOUT',  10]
                    //     ]);
                    //
                    //     var g_options = {
                    //         hAxis: {maxValue: 30},
                    //         vAxis: {maxValue: 0},
                    //         chartArea: { width: 330 },
                    //         lineWidth: 4,
                    //         series: {
                    //             0: { lineDashStyle: [1, 1] }
                    //         },
                    //         legend: { position: 'bottom', maxLines: 3 },
                    //         colors: ['#1cc88a', '#000fff']
                    //     }
                    //
                    //     var chart = new google.visualization.AreaChart(document.getElementById('reached_checkout'));
                    //     chart.draw(g_data, g_options);
                    // }

                    // reached_checkout
                    // google.charts.load('current', {'packages':['corechart']});
                    // google.charts.setOnLoadCallback(reached_checkout);
                    //
                    // function reached_checkout() {
                    //
                    //
                    //     var g_data = google.visualization.arrayToDataTable([
                    //         ['REACHED CHECKOUT', 'Reached Checkout'],
                    //         ['REACHED CHECKOUT', 0],
                    //         ['REACHED CHECKOUT', 10]
                    //     ]);
                    //
                    //     var g_options = {
                    //         hAxis: {maxValue: 30},
                    //         vAxis: {maxValue: 0},
                    //         chartArea: { width: 330 },
                    //         lineWidth: 4,
                    //         series: {
                    //             0: { lineDashStyle: [1, 1] }
                    //         },
                    //         legend: { position: 'bottom', maxLines: 3 },
                    //         colors: ['#1cc88a', '#000fff']
                    //     }
                    //
                    //     var chart = new google.visualization.AreaChart(document.getElementById('reached_checkout'));
                    //     chart.draw(g_data, g_options);
                    // }

                    // purchased
                    // google.charts.load('current', {'packages':['corechart']});
                    // google.charts.setOnLoadCallback(purchased);
                    //
                    // function purchased() {
                    //
                    //
                    //     var g_data = google.visualization.arrayToDataTable([
                    //         ['PURCHASED', 'Purchased'],
                    //         ['PURCHASED', 0],
                    //         ['PURCHASED', 0]
                    //     ]);
                    //
                    //     var g_options = {
                    //         hAxis: {maxValue: 10},
                    //         vAxis: {maxValue: 0},
                    //         chartArea: { width: 330 },
                    //         lineWidth: 4,
                    //         series: {
                    //             0: { lineDashStyle: [1, 1] }
                    //         },
                    //         legend: { position: 'bottom', maxLines: 3 },
                    //         colors: ['#1cc88a', '#000fff']
                    //     }
                    //
                    //     var chart = new google.visualization.AreaChart(document.getElementById('purchased'));
                    //     chart.draw(g_data, g_options);
                    // }
                </script>
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <!--    My Scripts    -->
                <!--    Syed Ali Ahmed    -->

                <div class="card-body">

                    <div class="row">

                        <!--						 Earnings (Monthly) Card Example -->
                        <!--						<div class="col-xl-4 col-md-6 mb-4">-->
                        <!--							<div class="card border-left-primary shadow h-100 py-2">-->
                        <!--								<div class="card-body">-->
                        <!--									<div class="row no-gutters align-items-center">-->
                        <!--										<div class="col mr-2">-->
                        <!--											<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">-->
                        <?//=lang("admin_h99");?>
                        <!--</div>-->
                        <!--											<div class="h5 mb-0 font-weight-bold text-gray-800">--><?php //echo $s['t']; 
                                                                                                                                ?>
                        <!--</div>-->
                        <!--										</div>-->
                        <!--										<div class="col-auto">-->
                        <!--											<i class="fas fa-cart-plus fa-2x text-gray-300"></i>-->
                        <!--										</div>-->
                        <!--									</div>-->
                        <!--								</div>-->
                        <!--							</div>-->
                        <!--						</div>-->
                        <!---->
                        <!--						 Earnings (Monthly) Card Example -->
                        <!--						<div class="col-xl-4 col-md-6 mb-4">-->
                        <!--							<div class="card border-left-success shadow h-100 py-2">-->
                        <!--								<div class="card-body">-->
                        <!--									<div class="row no-gutters align-items-center">-->
                        <!--										<div class="col mr-2">-->
                        <!--											<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">-->
                        <?//=lang("admin_h100");?>
                        <!--</div>-->
                        <!--											<div class="h5 mb-0 font-weight-bold text-gray-800">--><?php //echo $s['tpv']; 
                                                                                                                                ?>
                        <!--</div>-->
                        <!--										</div>-->
                        <!--										<div class="col-auto">-->
                        <!--											<i class="fas fa-cart-plus fa-2x text-gray-300"></i>-->
                        <!--										</div>-->
                        <!--									</div>-->
                        <!--								</div>-->
                        <!--							</div>-->
                        <!--						</div>-->
                        <!---->
                        <!--						 Earnings (Monthly) Card Example -->
                        <!--						<div class="col-xl-4 col-md-6 mb-4">-->
                        <!--							<div class="card border-left-info shadow h-100 py-2">-->
                        <!--								<div class="card-body">-->
                        <!--									<div class="row no-gutters align-items-center">-->
                        <!--										<div class="col mr-2">-->
                        <!--											<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">-->
                        <?//=lang("admin_h101");?>
                        <!--</div>-->
                        <!--											<div class="h5 mb-0 font-weight-bold text-gray-800">--><?php //echo $s['t'] > 0 ? number_format($allOrders/$s['t'] * 100, 2) : 0; 
                                                                                                                                ?>
                        <!-- %</div>-->
                        <!--										</div>-->
                        <!--										<div class="col-auto">-->
                        <!--											<i class="fas fa-cart-plus fa-2x text-gray-300"></i>-->
                        <!--										</div>-->
                        <!--									</div>-->
                        <!--								</div>-->
                        <!--							</div>-->
                        <!--						</div>-->

                        <!--						 Earnings (Monthly) Card Example -->
                        <!--						<div class="col-xl-4 col-md-6 mb-4">-->
                        <!--							<div class="card border-left-info shadow h-100 py-2">-->
                        <!--								<div class="card-body">-->
                        <!--									<div class="row no-gutters align-items-center">-->
                        <!--										<div class="col mr-2">-->
                        <!--											<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">-->
                        <?//=lang("admin_h102");?>
                        <!--</div>-->
                        <!--											<div class="h5 mb-0 font-weight-bold text-gray-800">--><?php //echo $totalCostumers['t']; 
                                                                                                                                ?>
                        <!--</div>-->
                        <!--										</div>-->
                        <!--										<div class="col-auto">-->
                        <!--											<i class="fas fa-cart-plus fa-2x text-gray-300"></i>-->
                        <!--										</div>-->
                        <!--									</div>-->
                        <!--								</div>-->
                        <!--							</div>-->
                        <!--						</div>-->
                        <!---->
                        <!--						 Earnings (Monthly) Card Example -->
                        <!--						<div class="col-xl-4 col-md-6 mb-4">-->
                        <!--							<div class="card border-left-primary shadow h-100 py-2">-->
                        <!--								<div class="card-body">-->
                        <!--									<div class="row no-gutters align-items-center">-->
                        <!--										<div class="col mr-2">-->
                        <!--											<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">-->
                        <?//=lang("admin_h103");?>
                        <!--</div>-->
                        <!--											<div class="h5 mb-0 font-weight-bold text-gray-800">--><?php //echo $totalCostumers['tr']; 
                                                                                                                                ?>
                        <!--</div>-->
                        <!--										</div>-->
                        <!--										<div class="col-auto">-->
                        <!--											<i class="fas fa-cart-plus fa-2x text-gray-300"></i>-->
                        <!--										</div>-->
                        <!--									</div>-->
                        <!--								</div>-->
                        <!--							</div>-->
                        <!--						</div>-->
                        <!---->
                        <!--						 Earnings (Monthly) Card Example -->
                        <!--						<div class="col-xl-4 col-md-6 mb-4">-->
                        <!--							<div class="card border-left-success shadow h-100 py-2">-->
                        <!--								<div class="card-body">-->
                        <!--									<div class="row no-gutters align-items-center">-->
                        <!--										<div class="col mr-2">-->
                        <!--											<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">-->
                        <?//=lang("admin_h95");?>
                        <!--</div>-->
                        <!--											<div class="h5 mb-0 font-weight-bold text-gray-800">--><?php //echo $totalOrders; 
                                                                                                                                ?>
                        <!--</div>-->
                        <!--										</div>-->
                        <!--										<div class="col-auto">-->
                        <!--											<i class="fas fa-cart-plus fa-2x text-gray-300"></i>-->
                        <!--										</div>-->
                        <!--									</div>-->
                        <!--								</div>-->
                        <!--							</div>-->
                        <!--						</div>-->

                        <!--						 Earnings (Monthly) Card Example -->
                        <!--						<div class="col-xl-4 col-md-6 mb-4">-->
                        <!--							<div class="card border-left-info shadow h-100 py-2">-->
                        <!--								<div class="card-body">-->
                        <!--									<div class="row no-gutters align-items-center">-->
                        <!--										<div class="col mr-2">-->
                        <!--											<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">-->
                        <?//=lang("admin_h104");?>
                        <!--</div>-->
                        <!--											<div class="h5 mb-0 font-weight-bold text-gray-800">--><?php //echo numfmt_format_currency($fmt, $minOrders, $currency); 
                                                                                                                                ?>
                        <!--</div>-->
                        <!--										</div>-->
                        <!--										<div class="col-auto">-->
                        <!--											<i class="fas fa-cart-plus fa-2x text-gray-300"></i>-->
                        <!--										</div>-->
                        <!--									</div>-->
                        <!--								</div>-->
                        <!--							</div>-->
                        <!--						</div>-->
                        <!---->
                        <!---->
                        <!--						 Earnings (Monthly) Card Example -->
                        <!--						<div class="col-xl-4 col-md-6 mb-4">-->
                        <!--							<div class="card border-left-info shadow h-100 py-2">-->
                        <!--								<div class="card-body">-->
                        <!--									<div class="row no-gutters align-items-center">-->
                        <!--										<div class="col mr-2">-->
                        <!--											<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">-->
                        <?//=lang("admin_h105");?>
                        <!--</div>-->
                        <!--											<div class="h5 mb-0 font-weight-bold text-gray-800">--><?php //echo numfmt_format_currency($fmt, $avgOrders, $currency); 
                                                                                                                                ?>
                        <!--</div>-->
                        <!--										</div>-->
                        <!--										<div class="col-auto">-->
                        <!--											<i class="fas fa-cart-plus fa-2x text-gray-300"></i>-->
                        <!--										</div>-->
                        <!--									</div>-->
                        <!--								</div>-->
                        <!--							</div>-->
                        <!--						</div>-->
                        <!---->
                        <!--						 Earnings (Monthly) Card Example -->
                        <!--						<div class="col-xl-4 col-md-6 mb-4">-->
                        <!--							<div class="card border-left-info shadow h-100 py-2">-->
                        <!--								<div class="card-body">-->
                        <!--									<div class="row no-gutters align-items-center">-->
                        <!--										<div class="col mr-2">-->
                        <!--											<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Max ORDER VALUE</div>-->
                        <!--											<div class="h5 mb-0 font-weight-bold text-gray-800">--><?php //echo numfmt_format_currency($fmt, $maxOrders, $currency); 
                                                                                                                                ?>
                        <!--</div>-->
                        <!--										</div>-->
                        <!--										<div class="col-auto">-->
                        <!--											<i class="fas fa-cart-plus fa-2x text-gray-300"></i>-->
                        <!--										</div>-->
                        <!--									</div>-->
                        <!--								</div>-->
                        <!--							</div>-->
                        <!--						</div>-->

                        <!--						<div class="col-xl-4 col-md-6 mb-4">-->
                        <!--							<div class="card border-left-info shadow h-100 py-2">-->
                        <!--								<div class="card-body">-->
                        <!--									<div class="row no-gutters align-items-center">-->
                        <!--										<div class="col mr-2">-->
                        <!--											<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Add to cart</div>-->
                        <!--											<div class="h5 mb-0 font-weight-bold text-gray-800 orderinfo">00</div>-->
                        <!--										</div>-->
                        <!--										<div class="col-auto">-->
                        <!--											<i class="fas fa-cart-plus fa-2x text-gray-300"></i>-->
                        <!--										</div>-->
                        <!--									</div>-->
                        <!--								</div>-->
                        <!--							</div>-->
                        <!--						</div>-->



                        <!--						<div class="col-xl-4 col-md-6 mb-4">-->
                        <!--							<div class="card border-left-info shadow h-100 py-2">-->
                        <!--								<div class="card-body">-->
                        <!--									<div class="row no-gutters align-items-center">-->
                        <!--										<div class="col mr-2">-->
                        <!--											<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Reached checkout</div>-->
                        <!--											<div class="h5 mb-0 font-weight-bold text-gray-800">--><?php //echo $checkVisitCount->id;
                                                                                                                                ?>
                        <!--</div>-->
                        <!--										</div>-->
                        <!--										<div class="col-auto">-->
                        <!--											<i class="fas fa-cart-plus fa-2x text-gray-300"></i>-->
                        <!--										</div>-->
                        <!--									</div>-->
                        <!--								</div>-->
                        <!--							</div>-->
                        <!--						</div>-->


                        <!--							<div class="col-xl-4 col-md-6 mb-4">-->
                        <!--							<div class="card border-left-info shadow h-100 py-2">-->
                        <!--								<div class="card-body">-->
                        <!--									<div class="row no-gutters align-items-center">-->
                        <!--										<div class="col mr-2">-->
                        <!--											<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Purchased</div>-->
                        <!--											<div class="h5 mb-0 font-weight-bold text-gray-800">--><?php //echo $dataorderCount->id;
                                                                                                                                ?>
                        <!--</div>-->
                        <!--										</div>-->
                        <!--										<div class="col-auto">-->
                        <!--											<i class="fas fa-cart-plus fa-2x text-gray-300"></i>-->
                        <!--										</div>-->
                        <!--									</div>-->
                        <!--								</div>-->
                        <!--							</div>-->
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
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><?= lang("admin_h137"); ?></div>
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
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1"><?= lang("admin_h138"); ?></div>
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
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><?= lang("admin_h139"); ?></div>
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
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1"><?= lang("admin_h140"); ?></div>
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
                        <h6 class="m-0 font-weight-bold text-primary"><?= lang("admin_h142"); ?></h6>

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



                            <?php $i = 0;
                            foreach ($sources as $k1) { ?>
                                <span class="mr-2">
                                    <i class="fas fa-circle text-<?= $colors[$i]['text']; ?>"></i> <b> <?php echo $k1['n']; ?> </b>
                                </span>
                            <?php $i++;
                            } ?>

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
                                <a href="<?php echo base_url(); ?>admin/chartId/today" type="button" class="btn btn-xs btn-secondary">Today</a>



                                <a href="<?php echo base_url(); ?>admin/chartId/monthly" type="button" class="btn btn-xs btn-secondary">Monthly</a>

                                <a href="<?php echo base_url(); ?>admin/chartId/yearly" type="button" class="btn btn-xs btn-secondary">Yearly</a>



                            </div>

                        </div>
                        <h4 class="header-title">Revenue</h4>
                        <div id="today">
                            <div class="row mt-4 text-center">
                                <div class="col-4">
                                    <p class="text-muted font-15 mb-1 text-truncate">Target</p>
                                    <h4><i class="fe-arrow-down text-danger mr-1"></i>$<?php echo $target; ?></h4>
                                </div>
                                <div class="col-4">
                                    <p class="text-muted font-15 mb-1 text-truncate">Sale</p>
                                    <h4><i class="fe-arrow-up text-success mr-1"></i>$<?php echo $totla; ?></h4>
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
                        <h6 class="m-0 font-weight-bold text-primary"><?= lang("admin_h113"); ?></h6>
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
                        <h6 class="m-0 font-weight-bold text-primary"><?= lang("admin_h111"); ?></h6>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th><?= lang("admin_h1"); ?></th>
                                        <th><?= lang("admin_h112"); ?></th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th><?= lang("admin_h1"); ?></th>
                                        <th><?= lang("admin_h112"); ?></th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php foreach ($prods as $k => $v) { ?>
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
                        <h6 class="m-0 font-weight-bold text-primary"><?= lang("admin_h113"); ?></h6>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th><?= lang("admin_h114"); ?></th>
                                        <th><?= lang("admin_h95"); ?></th>
                                        <th><?= lang("admin_h115"); ?></th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th><?= lang("admin_h114"); ?></th>
                                        <th><?= lang("admin_h95"); ?></th>
                                        <th><?= lang("admin_h115"); ?></th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php foreach ($cities as $k) { ?>
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
            labels: [<?php $i = 1;
                        foreach ($months as $ce) {
                            echo $i == 1 ? "'" . $ce['title'] . "'" : ", '" . $ce['title'] . "'";
                            $i++;
                        } ?>],
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
                data: [<?php $i = 1;
                        foreach ($months as $ce) {
                            echo $i == 1 ? $ce['value'] : ", " . $ce['value'];
                            $i++;
                        } ?>],
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
            labels: [<?php $i = 0;
                        foreach ($sources as $k1) {
                            if ($i != 0) echo ","; ?> "<?php echo $k1['n']; ?>"
                <?php $i++;
                        } ?>
            ],
            datasets: [{
                data: [<?php $i = 0;
                        foreach ($sources as $k1) {
                            if ($i != 0) echo ","; ?> <?php echo $k1['v']; ?> <?php $i++;
                                                                            } ?>],
                backgroundColor: [<?php $i = 0;
                                    foreach ($sources as $k1) {
                                        if ($i != 0) echo ","; ?> "<?php echo $colors[$i]['rgb']; ?>"
                    <?php $i++;
                                    } ?>
                ],
                hoverBackgroundColor: [<?php $i = 0;
                                        foreach ($sources as $k1) {
                                            if ($i != 0) echo ","; ?> "<?php echo $colors[$i]['rgb']; ?>"
                    <?php $i++;
                                        } ?>
                ],
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
        element: 'chart',
        data: [<?php echo $chart_data; ?>],
        xkey: 'date',
        ykeys: ['sale', 'Target'],
        labels: ['sale', 'Target'],
        hideHover: 'auto',
        // stacked:true
    });
</script>
<script>
    // Bar
    // Line
    // Area
    Morris.Area({
        element: 'chart1',
        data: [<?php //echo $chart_data1; 
                ?>],
        xkey: 'date',
        ykeys: ['sale', 'Target'],
        labels: ['sale', 'Target'],
        hideHover: 'auto',
        // stacked:true
    });
</script>

<script>
    // Bar
    // Line
    // Area
    Morris.Area({
        element: 'chart2',
        data: [<?php //echo $chart_data2; 
                ?>],
        xkey: 'date',
        ykeys: ['sale', 'Target'],
        labels: ['sale', 'Target'],
        hideHover: 'auto',
        // stacked:true
    });
</script>



<script type="text/javascript">
    var map = AmCharts.makeChart("mapdiv", {
        type: "map",
        theme: "dark",
        projection: "mercator",
        panEventsEnabled: true,
        backgroundColor: "#202021",
        backgroundAlpha: 1,
        zoomControl: {
            zoomControlEnabled: true
        },
        dataProvider: {
            map: "worldHigh",
            getAreasFromMap: true,
            areas: [<?php foreach ($cities as $key) { ?>

                    {
                        "id": "<?php echo $key->country; ?>",
                        "showAsSelected": true
                    },
                <?php } ?>
            ]
        },
        areasSettings: {
            autoZoom: true,
            color: "#B4B4B7",
            colorSolid: "#ED9913",
            selectedColor: "#ED9913",
            outlineColor: "#00095C",
            rollOverColor: "#9EC2F7",
            rollOverOutlineColor: "#000000"
        }
    });
</script>




<script type="text/javascript">
    $(function() {
        var start = moment().subtract(29, 'days');
        var end = moment();


        <?php
        if (isset($startDate) && $startDate) {
        ?>

            start = moment(new Date('<?= $startDate ?>'));
            end = moment(new Date('<?= $endDate ?>'));

        <?php
        }
        ?>

        function cb(start, end) {
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));

        }

        $('#reportrange').daterangepicker({
            startDate: start,
            endDate: end,
            ranges: {
                'Today': [moment().subtract(0, 'days'), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
        }, cb);

        cb(start, end);

        $("#reportrange").on("apply.daterangepicker", function() {
            $("#datetime-picker").submit();
        });

    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#dataTable').DataTable({
            "order": [
                [1, "desc"]
            ],
            "columns": [
                null,
                null
            ],
        });

        $('#dataTable1').DataTable({
            "order": [
                [1, "desc"]
            ],
            "columns": [
                null,
                null,
                null
            ],
        });
    });
</script>



<script>
    $(document).ready(function() {

        function live_matches() {

            $.ajax({
                url: '<?php echo base_url("web/dataInfo"); ?>',
                method: 'get',
                dataType: 'html',
                data: '',

                success: function(response) {
                    $('.orderinfo').html(response);
                    // $('.orderinfo').append(response);
                }

            }, 5000);

        }

        refresh_timer = setInterval(live_matches, 5000);

    });
</script>