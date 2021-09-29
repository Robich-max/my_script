<?php
if (!defined('BASEPATH')) exit();
/**
 * @author hobrt.me
 * @file Admin.php
 * @package hobrtEcom
 * @link hobrt.me
 * @copyright hobrt.me 2018 => 2019
 *
 **/
class Admin extends CI_Controller
{
    
    public $temp;
    public $subject;
  function __construct()
  {
    parent::__construct();
    if (!is_login("admin_login")) {
      redirect("user/admin_login");
    }

    load_admin_lang();
    if (isset($_GET['old']))
      define('admin', 'admin');
    else
      define('admin', 'enAdmin');


    $this->load->model('model_slids');
    $this->load->model('Discount_model');
    $this->load->library('email');
    $this->load->library("email_send");
    $this->load->config("emails");
  }

  function viewReport()
  {
    // $report = isset($_GET['report']) ? $_GET['report'] : "";
    // $action = isset($_GET['action']) ? $_GET['action'] : "";
    // //   $report = $this->input->get('report');
    // //   $action = $this->input->get('action');
    // $value = $report;
    // if (empty($report)) {
    //   $result = "No Graph Available";
    // } else {
    //   $datetime = date("Y-m-d");
    //   $query = "SELECT * FROM $report WHERE datetime LIKE '%$datetime%'";
    //   $r_data = $this->m_p->SaaRowArray($query);
    //   if ($report == "counter") {
    //     $result = $r_data;
    //   } elseif ($report == "orders") {
    //     $result = $r_data;
    //   }
    //   $data['action'] = $action;
    //   $data['chart_data'] = $result;
    //   $data['value'] = $value;
    // }

    $widgetsData = $this->_dashboardWidgets();

    $data['type'] = 'number';

    if ($_GET['report'] == 'visitors') {
      $data['title'] = 'Visitors';
      $data['chartData'] = $widgetsData['visitors']['chartData'];
      $data['totals'] = $widgetsData['visitors']['totalVisitors'];
    } else if ($_GET['report'] == 'pageReViews') {
      $data['title'] = 'Page Re-Views';
      $data['chartData'] = $widgetsData['pageReViews']['chartData'];
      $data['totals'] = $widgetsData['pageReViews']['totalPageViews'];
    } else if ($_GET['report'] == 'customers') {
      $data['title'] = 'Total Customers';
      $data['chartData'] = $widgetsData['customers']['chartData'];
      $data['totals'] = $widgetsData['customers']['totalCustomers']['t'];
    } else if ($_GET['report'] == 'returningCustomers') {
      $data['title'] = 'Returning Customers';
      $data['chartData'] = $widgetsData['returningCustomers']['chartData'];
      $data['totals'] = $widgetsData['returningCustomers']['totalCustomers']['tr'];
    } else if ($_GET['report'] == 'totalOrders') {
      $data['title'] = 'Total Orders';
      $data['chartData'] = $widgetsData['totalOrders']['chartData'];
      $data['totals'] = $widgetsData['totalOrders']['totalOrders'];
    } else if ($_GET['report'] == 'minOrderValue') {
      $data['title'] = 'Min Order Value';
      $data['chartData'] = $widgetsData['minOrderValue']['chartData'];
      $data['totals'] = $widgetsData['minOrderValue']['minOrderAmount'];
      $data['type'] = 'currency';
    } else if ($_GET['report'] == 'avgOrderValue') {
      $data['title'] = 'Average Order Value';
      $data['chartData'] = $widgetsData['avgOrderValue']['chartData'];
      $data['totals'] = $widgetsData['avgOrderValue']['avgOrderAmount'];
      $data['type'] = 'currency';
    } else if ($_GET['report'] == 'maxOrderValue') {
      $data['title'] = 'Max Order Value';
      $data['chartData'] = $widgetsData['maxOrderValue']['chartData'];
      $data['totals'] = $widgetsData['maxOrderValue']['maxOrderAmount'];
      $data['type'] = 'currency';
    } else if ($_GET['report'] == 'conversionRate') {
      $data['title'] = 'Conversion Rate';
      $data['chartData'] = $widgetsData['conversionRate']['chartData'];
      $data['totals'] = $widgetsData['conversionRate']['totalConversionRate'];
    }


    $this->load->view(admin . "/report.php", $data);
  }


  function index()
  {

    $date = date("Y-m-d");
    $stoday = strtotime(date("Y-m") . "-01 00:00");
    $etoday = strtotime(date("Y-m") . "-28 23:59");


    $data = $this->_getDataForChartsWidgets();
    // $widgetsData = $this->_dashboardWidgets();

    // $data['visitors_widget_data'] = $widgetsData['visitors'];
    // $data['pageReViews_widget_data'] = $widgetsData['pageReViews'];
    // $data['customers_widget_data'] = $widgetsData['customers'];
    // $data['returningCustomers_widget_data'] = $widgetsData['returningCustomers'];
    // $data['totalOrders_widget_data'] = $widgetsData['totalOrders'];
    // $data['minOrderValue_widget_data'] = $widgetsData['minOrderValue'];
    // $data['avgOrderValue_widget_data'] = $widgetsData['avgOrderValue'];
    // $data['maxOrderValue_widget_data'] = $widgetsData['maxOrderValue'];
    // $data['conversionRate_widget_data'] = $widgetsData['conversionRate'];



    $data['results'] = $this->db->query("SELECT SUM(totalPrice) as total,id FROM orders where datetime like '$date%' ")->row();


    $data['todaytarget'] = $this->db->query("SELECT * FROM account where dateat like '$date%' ")->row();
    if ($data['todaytarget']) {
      $data['target'] = $data['todaytarget']->target;
    } else {
      $data['target'] = '00';
    }

    $result = $this->db->query("SELECT * FROM orders where datetime like '$date%' ")->result();


    if ($data['results']) {
      $data['totla'] = number_format($data['results']->total);
    } else {
      $data['totla'] = '00';
    }


    $chart_data = '';
    foreach ($result as $rows) {

      $chart_data .= "{ date:'" . $rows->datetime . "',sale:" . $rows->totalPrice . ", Target:" . $rows->target . "}, ";
    }



    $data['chart_data'] = substr($chart_data, 0, -2);





    $thisMonth = strtotime("01-" . date("m-Y"));
    $thisYear = strtotime("01-01-" . date("Y"));

    $data['mo1'] = $this->m_p->get_num("products");
    $data['mo2'] = $this->m_p->get_num("orders", array("status" => 1));
    $data['mo3'] = $this->m_p->get_num("orders", array("status" => 5));
    $data['mo4'] = $this->m_p->get_num("reviews");
    $data['mo5'] = $this->m_p->get_num("orders");
    $data['mo6'] = $this->m_p->getTotal("orders", "totalPrice")["total"];
    $data['mo9'] = $this->m_p->getTotal("orders", "totalPrice", array("date > " => $thisMonth))["total"];
    $data['mo10'] = $this->m_p->getTotal("orders", "totalPrice", array("date > " => $thisYear))["total"];
    $data['mo7'] = $this->m_p->get_num("reviews");
    $data['mo8'] = $this->m_p->get_num("reviews");

    $data['cat'] = $this->m_p->s_a("orders", array(), 6);



    $months = array();

    for ($i = 0; $i < 12; $i++) {
      $m = strtotime("-$i month");
      $months[$i]['title'] = date("M", $m);
      $startMonth = strtotime("01-" . date("m-Y", $m));
      $endMonth = strtotime(date("t-m-Y 23:59:59", $m));
      $months[$i]['value'] = $this->m_p->getTotal("orders", "totalPrice", array("date > " => $startMonth, "date < " => $endMonth))["total"];
      // $months[$i]['value'] = array(
      // 	date("Y-m-d H:i:s", $startMonth),
      // 	date("Y-m-d H:i:s", $endMonth)
      // );
    }

    $data['months'] = array_reverse($months);




    $data['endsoon'] = $this->m_p->s_a("discounts", array("DATEDIFF(date, '$date') > " => 0), 6);
    $data['lastadd'] = $this->m_p->s_a("products", array(), 6);

    $s = array();

    $wh = "WHERE date > $startMonth ";




    $data['allOrders'] = $this->m_p->qArrayRow("SELECT COUNT(o.id) as t FROM orders o WHERE date > $stoday AND date <= $etoday LIMIT 1")['t'];
    $data['allVisitors'] = $this->m_p->qArrayRow("SELECT COUNT(o.id) as t FROM counter o WHERE date > $stoday AND date <= $etoday LIMIT 1")['t'];



    $data['s'] = $this->m_p->qArrayRow("SELECT COUNT(c.id) as t, SUM(c.pageViews) as tpv FROM counter c $wh LIMIT 1");

    $data['totalOrders'] = $this->m_p->qArrayRow("SELECT COUNT(o.id) as t FROM orders o $wh LIMIT 1")['t'];

    //$o['totalCostumers'] = $this->m_p->qArrayRow("SELECT COUNT(DISTINCT(o.tele)) as t FROM orders o $wh")['t'];

    $data['totalCostumers'] = $this->m_p->qArrayRow("SELECT o.*, COUNT(*) AS t, SUM(is_returning) AS tr FROM ( SELECT MAX(date) AS date, tele, IF(COUNT(id) > 1, 1, 0) AS is_returning FROM orders GROUP BY tele) o $wh");

    $data['avgOrders'] = $this->m_p->qArrayRow("SELECT AVG(o.totalPrice) AS t FROM `orders` o  $wh")['t'];

    $data['maxOrders'] = $this->m_p->qArrayRow("SELECT MAX(o.totalPrice) AS t FROM `orders` o  $wh")['t'];

    $data['minOrders'] = $this->m_p->qArrayRow("SELECT MIN(o.totalPrice) AS t FROM `orders` o  $wh")['t'];


    $saa_start  = date("Y-m-d");
    $saa_end    = date("Y-m-d");

    $saa_start_date = $this->m_p->qArrayRow("SELECT datetime AS date FROM orders WHERE datetime LIKE '%$saa_start%' ORDER BY datetime ASC LIMIT 1")['date'];

    //exit;

    $saa_q_start_date = $this->m_p->qArrayRow("SELECT datetime AS date FROM counter WHERE datetime LIKE '%$saa_start%' ORDER BY datetime ASC LIMIT 1")['date'];

    $saa_price_system = $this->m_p->qArrayRow("SELECT AVG(totalPrice) AS avg_price, MAX(totalPrice) AS max_price, MIN(totalPrice) AS min_price, SUM(totalPrice) AS total_price FROM orders WHERE datetime = '$saa_start_date'");
    $saa_visitors   = $this->m_p->qArrayRow("SELECT COUNT(id) AS visitors, SUM(pageViews) AS page_reviews FROM counter WHERE datetime = '$saa_q_start_date'");
    $saa_all_visitors   = $this->m_p->qArrayRow("SELECT COUNT(id) AS visitors, SUM(pageViews) AS page_reviews FROM counter");

    $saa_graph_visitors   = $this->m_p->SaaRowArray("SELECT * FROM counter WHERE datetime = '$saa_q_start_date'");
    $saa_graph_orders   = $this->m_p->SaaRowArray("SELECT * FROM orders WHERE datetime = '$saa_start_date'");
    $saa['graph_data']['visitors'] = $saa_graph_visitors;
    $saa['graph_data']['orders'] = $saa_graph_orders;

    if ($saa_visitors['visitors'] == 0 && $saa_all_visitors['visitors']) {
      $saa['visitors_percent'] = 0;
      $saa['arrow1'] = "";
    } else {
      $saa['arrow1'] = "↑";
      $saa['color1'] = "#1cc88a";
      $saa['visitors_percent'] = substr($saa_visitors['visitors'] * 100 / $saa_all_visitors['visitors'], 0, 4);
    }

    if ($saa_visitors['page_reviews'] == 0 && $saa_all_visitors['page_reviews']) {
      $saa['reviews_percent'] = 0;
      $saa['arrow2'] = "";
    } else {
      $saa['arrow2'] = "↑";
      $saa['color2'] = "#1cc88a";
      $saa['reviews_percent'] = substr($saa_visitors['page_reviews'] * 100 / $saa_all_visitors['page_reviews'], 0, 4);
    }
    // // //AVG(totalPrice) AS avg_price, MAX(totalPrice) AS max_price, MIN(totalPrice) AS min_price

    if ($saa_price_system['avg_price'] == 0 && $saa_price_system['total_price'] == 0) {
      $saa['avg_percent'] = 0;
      $saa['arrow4'] = "";
    } else {
      $division = $saa_price_system['total_price'];
      $saa['avg_percent'] = substr($saa_price_system['avg_price'] * 100 / $division, 0, 4);
      $saa['arrow4'] = "↑";
      $saa['color4'] = "#1cc88a";
    }

    if ($saa_price_system['max_price'] == 0 && $saa_price_system['total_price'] == 0) {
      $saa['max_percent'] = 0;
      $saa['arrow5'] = "";
    } else {
      $division = $saa_price_system['total_price'];
      $saa['max_percent'] = substr($saa_price_system['max_price'] * 100 / $division, 0, 4);
      $saa['arrow5'] = "↑";
      $saa['color5'] = "#1cc88a";
    }

    if ($saa_price_system['min_price'] == 0 && $saa_price_system['total_price'] == 0) {
      $saa['min_percent'] = 0;
      $saa['arrow3'] = "";
    } else {
      $division = $saa_price_system['total_price'];
      $saa['min_percent'] = substr($saa_price_system['min_price'] * 100 / $division, 0, 4);
      $saa['arrow3'] = "↑";
      $saa['color3'] = "#1cc88a";
    }




    /*print_r(array(
		$saa_price_system
		));*/
    //  $saa["saa_time"] = time();
    $data['saa_percent'] = $saa;

    $fd = $this->m_p->qe_r("SELECT c.*, COUNT(c.source) AS t FROM counter c $wh GROUP BY c.source ORDER BY t DESC LIMIT 4");

    $tos = 0;

    foreach ($fd as $key) {

      $tos += $key->t;

      $s[] = array(
        "n" => $key->source,
        "v" => $key->t
      );
    }

    $s[] = array(
      "n" => "other",
      "v" => $data['allVisitors'] - $tos
    );

    $data["sources"] = $s;





    $startMonth = strtotime("01-" . date("m-Y"));

    $wh = "WHERE date >= $startMonth ";
    $sql = <<<EOD

SELECT
	o.*,
	COUNT(o.id) AS total,
	COUNT(IF(o.status = 0, 1, null)) AS tp,
	COUNT(IF(o.status = 1, 1, null)) AS tpaid,
	COUNT(IF(o.status = 2, 1, null)) AS tf,
	COUNT(IF(o.status = 3, 1, null)) AS tr,
	COUNT(IF(o.status > 4, 1, null)) AS tc
FROM
	orders o

GROUP BY
	o.id

EOD;

    $t = $this->m_p->qe_r($sql);

    $data = array_merge(array(
      "tp" => 0,
      "tpaid" => 0,
      "tf" => 0,
      "tr" => 0,
      "tc" => 0,
      "total" => 0
    ), $data);

    $prds = array();

    foreach ($t as $key) {
      $products = json_decode($key->products, TRUE);
      foreach ($products as $k) {
        if(isset($prds[$k['id']]))
          $prds[$k['id']] += $k['q'];
        else
          $prds[$k['id']] = $k['q'];
      }

      switch ($key->status) {
        case 0:
          $data['tp']++;
          break;
        case 1:
          $data['tpaid']++;
          break;
        case 2:
          $data['tf']++;
          break;
        case 3:
          $data['tr']++;
          break;
        case 4:
          $data['tc']++;
          break;
      }

      $data['total'] += $key->total;
    }

    $data['prods'] = $prds;

    $sql = <<<EOD

SELECT
	COUNT(o.id) AS total,
	SUM(o.totalPrice) AS er,
	o.country
FROM
	orders o


GROUP BY
	o.country
ORDER BY total DESC

LIMIT 5

EOD;

    $data['cities'] = $this->m_p->qe_r($sql);




    // echo "<pre>";
    // print_r($data['prods']);
    // exit;

    $this->load->view(admin . "/index.php", $data);
  }

  private function _getDates()
  {

    $endDate = date("Y-m-d", strtotime("+1 day"));
    $startDate = date("Y-m-d", strtotime("-30 days"));


    if ($this->input->post('daterange') || isset($_GET['daterange'])) {

      $dateRange =  $this->input->post('daterange') ? $this->input->post('daterange') : $_GET['daterange']; // $this->input->post('daterange');
      $dateArray = explode("-", $dateRange);

      $startDate = date("Y-m-d", strtotime($dateArray['0']));
      $endDate = date('Y-m-d', strtotime($dateArray['1'] . ' +1 day'));
    }

    $endDateTime = new DateTime($endDate);
    $startDateTime = new DateTime($startDate);

    $period = new DatePeriod(
      $startDateTime,
      new DateInterval('P1D'),
      $endDateTime // new DateTime('2020-12-31')
    );

    return ['startDate' => $startDate, 'endDate' => $endDate, 'period' => $period];
  }

  private function _getDataForChartsWidgets($data = [])
  {

    $widgetsData = $this->_dashboardWidgets();

    $data['visitors_widget_data'] = $widgetsData['visitors'];
    $data['pageReViews_widget_data'] = $widgetsData['pageReViews'];
    $data['customers_widget_data'] = $widgetsData['customers'];
    $data['returningCustomers_widget_data'] = $widgetsData['returningCustomers'];
    $data['totalOrders_widget_data'] = $widgetsData['totalOrders'];
    $data['minOrderValue_widget_data'] = $widgetsData['minOrderValue'];
    $data['avgOrderValue_widget_data'] = $widgetsData['avgOrderValue'];
    $data['maxOrderValue_widget_data'] = $widgetsData['maxOrderValue'];
    $data['conversionRate_widget_data'] = $widgetsData['conversionRate'];

    return $data;
  }


  private function _dashboardWidgets()
  {

    $dates = $this->_getDates();

    $fromStamp = strtotime($dates['startDate']);
    $toStamp = strtotime($dates['endDate']);

    $period = $dates['period'];

    // Visitors
    $chartData_visitors = [['Day', 'Visitors']];
    $totalVisitors = 0;

    // Page Views
    $chartData_pageViews = [['Day', 'Page Reviews']];
    $totalPageViews = 0;


    // Total Customers & Returning Customers
    $customerQuery = "SELECT o.*, COUNT(*) AS t, SUM(is_returning) AS tr FROM ( SELECT MAX(date) AS date, tele, IF(COUNT(id) > 1, 1, 0) AS is_returning FROM orders GROUP BY tele) o WHERE date >= $fromStamp AND date < $toStamp";
    $totalCustomers = $this->m_p->qArrayRow($customerQuery);

    $chartData_customers = [['Day', 'Customers']];
    $chartData_returningCustomers = [['Day', 'Returning Customers']];

    // Total Orders
    $chartData_totalOrders = [['Day', 'Orders']];
    $totalOrders = $this->m_p->qArrayRow("SELECT COUNT(o.id) as ordersCount FROM orders o WHERE date >= $fromStamp AND date < $toStamp LIMIT 1")['ordersCount'];

    // Min Order Value
    $chartData_minOrdersValue = [['Day', 'Min Orders Value']];
    $minOrderAmount = $this->m_p->qArrayRow("SELECT MIN(o.totalPrice) AS t FROM `orders` o WHERE date >= $fromStamp AND date < $toStamp")['t'];

    // Average Order Value
    $chartData_avgOrdersValue = [['Day', 'Avg Orders Value']];
    $avgOrderAmount = $this->m_p->qArrayRow("SELECT AVG(o.totalPrice) AS t FROM `orders` o WHERE date >= $fromStamp AND date < $toStamp")['t'];


    // Max Order Value
    $chartData_maxOrdersValue = [['Day', 'Max Orders Value']];
    $maxOrderAmount = $this->m_p->qArrayRow("SELECT MAX(o.totalPrice) AS t FROM `orders` o WHERE date >= $fromStamp AND date < $toStamp")['t'];


    // Conversion Rate
    $chartData_conversionRate = [['Day', 'Conversion Rate']];
    $visitorsData = $this->m_p->qArrayRow("SELECT COUNT(c.id) as t, SUM(c.pageViews) as tpv FROM counter c WHERE date >= $fromStamp AND date < $toStamp LIMIT 1");
    $totalConversionRate = $visitorsData['t'] > 0 ? number_format($totalOrders / $visitorsData['t']  * 100, 2) : 0;

    foreach ($period as $key => $value) {

      $fromStamp2 = strtotime(date($value->format('Y-m-d')));
      $endDate2 = date('Y-m-d', strtotime($value->format('Y-m-d') . ' +1 day'));
      $toStamp2 = strtotime(date($endDate2));


      // Visitors
      $result = $this->db->query("SELECT count(id) as total_visitors, sum(pageViews) as pageViewsSum FROM counter where datetime LIKE '%" . $value->format('Y-m-d') . "%'")->row();

      $chartData_visitors[] = [$value->format('d M'), (int) $result->total_visitors];
      $totalVisitors = $totalVisitors + (int) $result->total_visitors;

      // Page Views
      $chartData_pageViews[] = [$value->format('d M'), (int) $result->pageViewsSum];
      $totalPageViews = $totalPageViews + (int) $result->pageViewsSum;

      // Customers
      $customerQuery2 = $customerQuery = "SELECT o.*, COUNT(*) AS t, SUM(is_returning) AS tr FROM ( SELECT MAX(date) AS date, tele, IF(COUNT(id) > 1, 1, 0) AS is_returning FROM orders GROUP BY tele) o WHERE date >= $fromStamp2 AND date < $toStamp2";
      $customerRes = $this->m_p->qArrayRow($customerQuery2);
      $chartData_customers[] = [$value->format('d M'), isset($customerRes['t']) ? (int) $customerRes['t'] : 0];

      // Returning Customers
      $chartData_returningCustomers[] = [$value->format('d M'), isset($customerRes['tr']) ? (int) $customerRes['tr'] : 0];

      // Total Orders
      $totalOrdersByDay = $this->m_p->qArrayRow("SELECT COUNT(o.id) as ordersCount FROM orders o  WHERE date >= $fromStamp2 AND date < $toStamp2 LIMIT 1")['ordersCount'];
      $chartData_totalOrders[] = [$value->format('d M'), (int) $totalOrdersByDay];

      // Min Order Value
      $minOrderAmountByDay = $this->m_p->qArrayRow("SELECT MIN(o.totalPrice) AS t FROM `orders` o WHERE date >= $fromStamp2 AND date < $toStamp2")['t'];
      $chartData_minOrdersValue[] = [$value->format('d M'), (int) $minOrderAmountByDay];

      // Avg Order Value
      $avgOrderAmountByDay = $this->m_p->qArrayRow("SELECT AVG(o.totalPrice) AS t FROM `orders` o WHERE date >= $fromStamp2 AND date < $toStamp2")['t'];
      $chartData_avgOrdersValue[] = [$value->format('d M'), (int) $avgOrderAmountByDay];

      // Max Order Value
      $maxOrderAmountByDay = $this->m_p->qArrayRow("SELECT MAX(o.totalPrice) AS t FROM `orders` o WHERE date >= $fromStamp2 AND date < $toStamp2")['t'];
      $chartData_maxOrdersValue[] = [$value->format('d M'), (int) $maxOrderAmountByDay];

      // Conversion Rate
      $visitorsDataByDay = $this->m_p->qArrayRow("SELECT COUNT(c.id) as t, SUM(c.pageViews) as tpv FROM counter c WHERE date >= $fromStamp2 AND date < $toStamp2 LIMIT 1");
      $conversionRate = $visitorsDataByDay['t'] > 0 ? number_format($totalOrdersByDay / $visitorsDataByDay['t']  * 100, 2) : 0;
      $chartData_conversionRate[] = [$value->format('d M'), (int) $conversionRate];
    }

    // To json
    $chartData_visitors = json_encode($chartData_visitors);
    $chartData_pageViews = json_encode($chartData_pageViews);
    $chartData_customers = json_encode($chartData_customers);
    $chartData_returningCustomers = json_encode($chartData_returningCustomers);
    $chartData_totalOrders = json_encode($chartData_totalOrders);
    $chartData_minOrdersValue = json_encode($chartData_minOrdersValue);
    $chartData_avgOrdersValue = json_encode($chartData_avgOrdersValue);
    $chartData_maxOrdersValue = json_encode($chartData_maxOrdersValue);
    $chartData_conversionRate = json_encode($chartData_conversionRate);

    $returnResult = [
      'visitors' => ['chartData' => $chartData_visitors, 'totalVisitors' => $totalVisitors],
      'pageReViews' => ['chartData' => $chartData_pageViews, 'totalPageViews' => $totalPageViews],
      'customers' => ['chartData' => $chartData_customers, 'totalCustomers' => $totalCustomers],
      'returningCustomers' => ['chartData' => $chartData_returningCustomers, 'totalCustomers' => $totalCustomers],
      'totalOrders' => ['chartData' => $chartData_totalOrders, 'totalOrders' => $totalOrders],
      'minOrderValue' => ['chartData' => $chartData_minOrdersValue, 'minOrderAmount' => $minOrderAmount],
      'avgOrderValue' => ['chartData' => $chartData_avgOrdersValue, 'avgOrderAmount' => $avgOrderAmount],
      'maxOrderValue' => ['chartData' => $chartData_maxOrdersValue, 'maxOrderAmount' => $maxOrderAmount],
      'conversionRate' => ['chartData' => $chartData_conversionRate, 'totalConversionRate' => $totalConversionRate],
    ];

    return $returnResult;
  }




  public function add_discount()
  {

    if (isset($_POST['add_discount'])) {
      /* echo "<pre>";
			print_r($_POST);
			echo "</pre>";
			die; */
      $chk = $this->Discount_model->code_exist($_POST['discount_code']);
      if ($chk) {
        $this->session->set_flashdata('error', 'Discount coupon already exist.');
        redirect(base_url("admin/discounts"), 'refresh');
        die;
      }
      $res = $this->Discount_model->ins_disc($_POST);
      if ($res) {
        $this->session->set_flashdata('success', 'Discount coupon added Successfully.');
        redirect(base_url("admin/discounts"), 'refresh');
      }
    } else {
      $data = array();
      $data['tp'] = "add";
      $this->load->view(admin . "/discounts", $data);
    }
  }
  public function update_discount()
  {
    $id = $this->uri->segment(3);

    if (isset($_POST['update_discount']) && isset($id)  && isset($_POST['discount_code'])) {

      /* echo "<pre>";
			print_r($_POST);
			echo "</pre>"; */

      $res2 = $this->Discount_model->update_discount($id, $_POST);
      if ($res2) {
        $this->session->set_flashdata('success', 'Discount coupon updated Successfully.');
        redirect(base_url('admin/update_discount/' . $id), 'refresh');
      }
    }

    if (isset($id) && !isset($_POST['update_discount'])) {
      $data['res'] = $this->Discount_model->get_discount_info($id);

      $this->load->view(admin . "/update_discount", $data);
    }
  }



  function upload()
  {

    $config['upload_path']         = './uploads/';
    $config['allowed_types']       = 'gif|jpg|png';
    $config['encrypt_name']       = TRUE;
    $config['max_size']          = '10240'; // 10 MB
    $this->upload->initialize($config);
    $a = $this->upload->do_upload('file');
    $data_upload = $this->upload->data();

    if ($a) {
      $this->image_l
        ->load($data_upload['full_path'])
        ->resize_crop(100, 100)
        ->save_pa('', '_s', FALSE);
      $this->image_l
        ->load($data_upload['full_path'])
        ->resize_crop(400, 400)
        ->save_pa('', '_m', FALSE);

      echo $data_upload['file_name'];
      exit();
    }

    http_response_code(500);
  }

  function upload_images()
  {

    $this->load->view(admin . '/upimages');
  }


  function upload_reviews()
  {

    $config['upload_path']         = './uploads/';
    $config['allowed_types']       = 'gif|jpg|png';
    $config['encrypt_name']       = TRUE;
    $config['max_size']          = '10240'; // 10 MB
    $this->upload->initialize($config);
    $a = $this->upload->do_upload('file');
    $data_upload = $this->upload->data();

    if ($a) {
      $this->image_l
        ->load($data_upload['full_path'])
        ->resize_crop(400, 400)
        ->save_pa('', '', TRUE);

      echo $data_upload['file_name'];
      exit();
    }

    http_response_code(500);
  }

  function upload_file()
  {

    $config['upload_path']         = './uploads/';
    $config['allowed_types']       = 'gif|jpg|png';
    $config['encrypt_name']       = TRUE;
    $config['max_size']          = '10240'; // 10 MB
    $this->upload->initialize($config);
    $a = $this->upload->do_upload('file');
    $data_upload = $this->upload->data();

    if ($a) {
      echo base_url('uploads/' . $data_upload['file_name']);
      exit();
    }

    http_response_code(500);
  }

  function r()
  {

    $this->load->library('email');
    $config = array();
    $config['protocol'] = 'smtp';
    $config['smtp_host'] = 'ssl://smtp.gmail.com';
    $config['smtp_user'] = 'facekhi@gmail.com';
    $config['smtp_pass'] = 'AZEqsdWXC';
    $config['smtp_port'] = 465;
    $this->email->initialize($config);
    $this->email->set_newline("\r\n");

    $s = $this->load->view("emails/index.html", array(), TRUE);

    $emailConf  = $this->db->query("SELECT * FROM email")->row();
    $this->email->from($emailConf->smtp_user, $emailConf->smtp_user);
    // $this->email->from("contact@hobrt.me", 'Identification');
    $this->email->to('lhobrt@gmail.com');
    $this->email->subject('Send test smtp email');
    $this->email->message($s);

    $this->email->set_mailtype("html");

    $this->email->send();

    $r = $this->email->print_debugger();

    print($r);
  }

  public function dashboard()
  {

    $stoday = strtotime(date("Y-m") . "-01 00:00");
    $etoday = strtotime(date("Y-m") . "-28 23:59");

    $startMonth = strtotime("01-" . date("m-Y"));

    $wh = "WHERE date >= $startMonth ";


    if (isset($_GET['test'])) {

      array_pop($_GET);

      $dates = array("date1", "date2");

      $w = [];
      $w2 = [];

      foreach ($_GET as $key => $value) {
        if (!empty($value)) {

          if ($key == "product") {
            $w[] = "FIND_IN_SET($value, o.product)";
          } else if (!in_array($key, $dates)) {
            $w[] = "o.$key = '$value'";
          } else {
            switch ($key) {
              case 'date1':
                $a["date < "] = $date1 = strtotime($value . " +1 day");
                $w2[] = "date < " . strtotime($value . " +1 day");
                break;
              case 'date2':
                $a["date >= "] = $date2 = strtotime($value);
                $w2[] = "date >= " . strtotime($value);
                break;
            }
          }
        }
      }

      $w3 = array_merge($w, $w2);

      if (count($w3) > 0)
        $wh = " WHERE " . implode(" AND ", $w3);
    }



    $o['allOrders'] = $this->m_p->qArrayRow("SELECT COUNT(o.id) as t FROM orders o WHERE date > $stoday AND date <= $etoday LIMIT 1")['t'];
    $o['allVisitors'] = $this->m_p->qArrayRow("SELECT COUNT(o.id) as t FROM counter o WHERE date > $stoday AND date <= $etoday LIMIT 1")['t'];



    $o['s'] = $this->m_p->qArrayRow("SELECT COUNT(c.id) as t, SUM(c.pageViews) as tpv FROM counter c $wh LIMIT 1");

    $o['totalOrders'] = $this->m_p->qArrayRow("SELECT COUNT(o.id) as t FROM orders o $wh LIMIT 1")['t'];

    //$o['totalCostumers'] = $this->m_p->qArrayRow("SELECT COUNT(DISTINCT(o.tele)) as t FROM orders o $wh")['t'];

    $o['totalCostumers'] = $this->m_p->qArrayRow("SELECT o.*, COUNT(*) AS t, SUM(is_returning) AS tr FROM ( SELECT MAX(date) AS date, tele, IF(COUNT(id) > 1, 1, 0) AS is_returning FROM orders GROUP BY tele) o $wh");

    $o['avgOrders'] = $this->m_p->qArrayRow("SELECT AVG(o.totalPrice) AS t FROM `orders` o  $wh")['t'];

    $o['maxOrders'] = $this->m_p->qArrayRow("SELECT MAX(o.totalPrice) AS t FROM `orders` o  $wh")['t'];

    $o['minOrders'] = $this->m_p->qArrayRow("SELECT MIN(o.totalPrice) AS t FROM `orders` o  $wh")['t'];

    $sql = <<<EOD

SELECT
	o.*,
	COUNT(o.id) AS total,
	COUNT(IF(o.status = 0, 1, null)) AS tp,
	COUNT(IF(o.status = 1, 1, null)) AS tpaid,
	COUNT(IF(o.status = 2, 1, null)) AS tf,
	COUNT(IF(o.status = 3, 1, null)) AS tr,
	COUNT(IF(o.status > 4, 1, null)) AS tc
FROM
	orders o
$wh

GROUP BY
	o.id

EOD;

    $t = $this->m_p->qe_r($sql);

    $o = array_merge(array(
      "tp" => 0,
      "tpaid" => 0,
      "tf" => 0,
      "tr" => 0,
      "tc" => 0,
      "total" => 0
    ), $o);

    $prds = array();

    foreach ($t as $key) {
      $products = json_decode($key->products, TRUE);
      foreach ($products as $k) {
        if (isset($prds[$k['id']]))
          $prds[$k['id']] += $k['q'];
        else
          $prds[$k['id']] = $k['q'];
      }

      switch ($key->status) {
        case 0:
          $o['tp']++;
          break;
        case 1:
          $o['tpaid']++;
          break;
        case 2:
          $o['tf']++;
          break;
        case 3:
          $o['tr']++;
          break;
        case 4:
          $o['tc']++;
          break;
      }

      $o['total'] += $key->total;
    }

    $o['prods'] = $prds;

    $sql = <<<EOD

SELECT
	COUNT(o.id) AS total,
	SUM(o.totalPrice) AS er,
	o.country
FROM
	orders o

$wh

GROUP BY
	o.country
ORDER BY total DESC

LIMIT 5

EOD;

    $o['cities'] = $this->m_p->qe_r($sql);

    $s = array();


    $fd = $this->m_p->qe_r("SELECT c.*, COUNT(c.source) AS t FROM counter c $wh GROUP BY c.source ORDER BY t DESC LIMIT 4");

    $tos = 0;

    foreach ($fd as $key) {

      $tos += $key->t;

      $s[] = array(
        "n" => $key->source,
        "v" => $key->t
      );
    }

    $s[] = array(
      "n" => "other",
      "v" => $o['allVisitors'] - $tos
    );

    $o["sources"] = $s;


    $this->load->view(admin . "/dashboard", $o);
  }



  public function responces()
  {
    $sql = <<<EOD

SELECT
	o.*,
	r.question,
	r.answer,
	r.date as date2,
	r.id as id2
FROM
	orders o
RIGHT JOIN responses r

ON (r.orderId = o.id)

GROUP BY
	r.id
ORDER BY date2 DESC

EOD;

    $data['orders'] = $this->m_p->qe_r($sql);

    $this->load->view(admin . "/res", $data);
  }


  function admins()
  {

    $config = $config = page_a($this->m_p->get_num("admins", array()), "admin/admins", 3, $this->config->item("per_page"));

    $this->pagination->initialize($config);

    $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

    $data['admins'] = $this->m_p->s_a("admins", array(), $config["per_page"], $page);

    $data["links"] = $this->pagination->create_links();

    //$data['admins'] = $this->m_p->s_a("admins");
    $this->load->view(admin . '/admins', $data);
  }
  function edit_admin($id = false)
  {

    if ($id == false)
      redirect("admin");

    if (isset($_POST['test'])) {
      $arr = array_pop($_POST);
      $arr = array_pop($_POST);
      foreach ($_POST as $key => $value) {
        $_POST[$key] = $this->input->post($key);
      }
      if (empty($_POST['password'])) {
        $_POST['password'] = $this->m_p->get_info("admins", $id, "password");
      } else {
        $_POST['password'] = _hash($_POST['password']);
      }
      $this->m_p->up_d('admins', $_POST, "id = $id");
    }
    $data['info'] = $this->m_p->s_a("admins", "id = $id", 1, 0);
    $this->load->view(admin . "/edit_admin", $data);
  }
  function add_admin()
  {
    $data = array();
    if (isset($_POST['test'])) {
      $arr = array_pop($_POST);
      foreach ($_POST as $key => $value) {
        $_POST[$key] = $this->input->post($key);
        if ($key == "password")
          $_POST[$key] = _hash($_POST[$key]);
      }
      $data['msg'] = true;
      $useri = $this->m_p->ins('admins', $_POST);
    }
    $this->load->view(admin . "/add_admin", $data);
  }



  public function orders($tp = FALSE)
  {

    if ($tp === FALSE || $tp > 5) {
      $config = $config = page_a($this->m_p->get_num("orders", array()), "admin/requests", 3, $this->config->item("per_page"));

      $this->pagination->initialize($config);

      $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

      $perPage = admin == "admin" ? $config["per_page"] : FALSE;

      $data['requests'] = $this->m_p->s_a("orders", array(), $perPage, $page);
    } else {

      $data['tp'] = $tp;

      $config = $config = page_a($this->m_p->get_num("orders", array("status" => $tp)), "admin/requests/$tp", 4, $this->config->item("per_page"));

      $this->pagination->initialize($config);

      $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;

      $perPage = admin == "admin" ? $config["per_page"] : FALSE;

      $data['requests'] = $this->m_p->s_a("orders", array("status" => $tp), $perPage, $page);
    }

    $data["links"] = $this->pagination->create_links();

    $this->load->view(admin . "/requests", $data);
  }


  public function ordersInfo()
  {
    $data['tp'] = "all";


    $config = $config = page_a($this->m_p->get_num("orders", array()), "admin/ordersInfo", 3, $this->config->item("per_page"));

    $this->pagination->initialize($config);

    $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

    $perPage = admin == "admin" ? $config["per_page"] : FALSE;

    $data['orders'] = $this->m_p->s_a("orders", array(), $perPage, $page);

    $data["links"] = $this->pagination->create_links();

    $this->load->view(admin . '/ordersInfo', $data);
  }


  public function detiales($id)
  {
    if (isset($_POST['test'])) {
      $arr = array(
        "status" => $this->input->post("status"),
        "name" => $this->input->post("name"),
        "tele" => $this->input->post("tele"),
        "city" => $this->input->post("city"),
        "address" => $this->input->post("address")
      );
      $this->m_p->up_d("orders", $arr, array("id" => $id));
    }

    $data['msg'] = $this->m_p->s_a("orders", "id = $id", 1, 0);
    $this->load->view(admin . "/detiales", $data);
  }


  public function edit_orderInfo($id)
  {

    if (isset($_POST['name'])) {
      $arr = array(
        "status" => $this->input->post("status"),
        "name" => $this->input->post("name"),
        "tele" => $this->input->post("tele"),
        "city" => $this->input->post("city"),
        "address" => $this->input->post("address"),
        "order_status" => $this->input->post("order_status"),
        "deliver" => $this->input->post("deliver"),
        "deliver_number" => $this->input->post("deliver_number")
      );


      $dataInfo = array(
        "order_status" => $this->input->post("order_status"),
        "id" => $id
      );


      $this->m_p->up_d("orders", $arr, array("id" => $id));

      $this->_send_welcome($dataInfo);
    }

    $data['tp'] = "edit";
    $data['orders'] = $this->m_p->s_a("orders", "id = $id", 1, 0);
    $this->load->view(admin . "/ordersInfo", $data);
  }

  public function _send_welcome($data = FALSE)
  {

    //$this->load->library("email_send");
    //$this->load->library('../controllers/Web');
    $this->temp = $this->db->get("order_email")->first_row();
    $this->subject = $this->temp->second_subject;
    
    if ($data['order_status'] == 'Refund') {

      $this->refund($data['id']);
    } elseif ($data['order_status'] == 'Fulfilled') {

      $this->fulfilled($data['id']);
    } elseif ($data['order_status'] == 'Paid') {

      $this->payment_request($data['id']);
    }
  }






  public function refund($id = FALSE)
  {

    if ($id == FALSE)
      return;




    // $data['info'] = $this->m_p->s_a("orders", array("id" => $id), 1);
    $dataProInfo = $this->m_p->s_a("orders", array("id" => $id), 1);

    $info = $this->m_p->se_a("settings");

    foreach ($info as $key) {
      $settingsInfo = $key;
    }
    $dataInfo  = $this->db->query("SELECT * FROM email_templates")->row();

    $to = get_info("orders", $id, "email");

    $g['store_name'] = $key->title;
    $g['order_number'] = $id;
    $g['name'] = get_info("orders", $id, "name");



    $message_text = $dataInfo->ref_email;
    $learn_more_link = $dataInfo->et_learn_more_link;


    $data = array(
      'dataProInfo'  => $dataProInfo,
      'settings' => $settingsInfo,
      'message_text' => $message_text,
      'learn_more_link' => $learn_more_link,
      'temp' => $this->temp

    );


    $this->load->library('Email_send', array('mailtype' => 'html'));
    $this->email->set_newline("\r\n");
    $emailConf  = $this->db->query("SELECT * FROM email")->row();
    $this->email->from($emailConf->smtp_user, $emailConf->smtp_user);
    // $this->email->from('admin@electriclint.store', "electriclint.store");
    $html = $this->load->view("emails/emailInvoice", $data, TRUE);


    $this->email->to($to);
    $this->email->subject($this->subject);
    $this->email->message($html);
    if ($this->email->send()) {
      $this->session->set_flashdata('message', 'Email sent successfully');
      redirect('admin/ordersInfo');
    } else {
      $this->session->set_flashdata('message', 'Email sent Failed!Check your email.');
      redirect('admin/ordersInfo');
    }
  }






  public function fulfilled($id = FALSE)
  {

    if ($id == FALSE)
      return;




    // $data['info'] = $this->m_p->s_a("orders", array("id" => $id), 1);
    $dataProInfo = $this->m_p->s_a("orders", array("id" => $id), 1);

    $info = $this->m_p->se_a("settings");

    foreach ($info as $key) {
      $settingsInfo = $key;
    }
    $dataInfo  = $this->db->query("SELECT * FROM email_templates")->row();

    $to = get_info("orders", $id, "email");

    $g['store_name'] = $key->title;
    $g['order_number'] = $id;
    $g['name'] = get_info("orders", $id, "name");



    $message_text = $dataInfo->f_email;
    $learn_more_link = $dataInfo->et_learn_more_link;


    $data = array(
      'dataProInfo'  => $dataProInfo,
      'settings' => $settingsInfo,
      'message_text' => $message_text,
      'learn_more_link' => $learn_more_link,
      'temp' => $this->temp

    );


    $this->load->library('Email_send', array('mailtype' => 'html'));
    $this->email->set_newline("\r\n");
    $emailConf  = $this->db->query("SELECT * FROM email")->row();
    $this->email->from($emailConf->smtp_user, $emailConf->smtp_user);
    // $this->email->from('admin@electriclint.store', "electriclint.store");
    $html = $this->load->view("emails/emailInvoice", $data, TRUE);


    $this->email->to($to);
    $this->email->subject($this->subject);
    $this->email->message($html);
    if ($this->email->send()) {
      $this->session->set_flashdata('message', 'Email sent successfully');
      redirect('admin/ordersInfo');
    } else {
      $this->session->set_flashdata('message', 'Email sent Failed!Check your email.');
      redirect('admin/ordersInfo');
    }
  }





  public function payment_request($id = FALSE)
  {

    if ($id == FALSE)
      return;




    // $data['info'] = $this->m_p->s_a("orders", array("id" => $id), 1);
    $dataProInfo = $this->m_p->s_a("orders", array("id" => $id), 1);

    $info = $this->m_p->se_a("settings");

    foreach ($info as $key) {
      $settingsInfo = $key;
    }
    $dataInfo  = $this->db->query("SELECT * FROM email_templates")->row();

    $to = get_info("orders", $id, "email");

    $g['store_name'] = $key->title;
    $g['order_number'] = $id;
    $g['name'] = get_info("orders", $id, "name");



    $message_text = $dataInfo->p_email;
    $learn_more_link = $dataInfo->et_learn_more_link;


    $data = array(
      'dataProInfo'  => $dataProInfo,
      'settings' => $settingsInfo,
      'message_text' => $message_text,
      'learn_more_link' => $learn_more_link,
      'temp' => $this->temp

    );


    $this->load->library('Email_send', array('mailtype' => 'html'));
    $this->email->set_newline("\r\n");
    $emailConf  = $this->db->query("SELECT * FROM email")->row();
    $this->email->from($emailConf->smtp_user, $emailConf->smtp_user);
    // $this->email->from('admin@electriclint.store', "electriclint.store");
    $html = $this->load->view("emails/emailInvoice", $data, TRUE);


    $this->email->to($to);
    $this->email->subject($this->subject);
    $this->email->message($html);
    if ($this->email->send()) {
      $this->session->set_flashdata('message', 'Email sent successfully');
      redirect('admin/ordersInfo');
    } else {
      $this->session->set_flashdata('message', 'Email sent Failed!Check your email.');
      redirect('admin/ordersInfo');
    }
  }






  public function customerInvoice($id)
  {


    $data['msg'] = $this->m_p->s_a("orders", "id = $id", 1, 0);
    $this->load->view(admin . "/customerInvoice", $data);
  }

  public function support()
  {
    $data["info"] = getHtml("https://hobrt.me/infoSupport");
  }

  public function accept($id)
  {

    $this->m_p->up_d("requests", array("tp" => 1), array("id" => $id));

    redirect("admin/requests");
  }
  public function unaccept($id)
  {

    $this->m_p->up_d("requests", array("tp" => 2), array("id" => $id));

    redirect("admin/requests");
  }


  public function messages()
  {

    $config = $config = page_a($this->m_p->get_num("msg", array()), "admin/messages", 3, $this->config->item("per_page"));

    $this->pagination->initialize($config);

    $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

    $data['msg'] = $this->m_p->s_a("msg", array(), $config["per_page"], $page);

    $data["links"] = $this->pagination->create_links();

    $this->load->view(admin . "/messages", $data);
  }
  public function show_msg($id)
  {
    $data['msg'] = $this->m_p->s_a("msg", "id = $id", 1, 0);
    $this->m_p->up_d("msg", array("seen" => 1), array("id" => $id));
    $this->load->view(admin . "/show_msg", $data);
  }

  public function cat()
  {
    $data['tp'] = "all";
    $data['cat'] = $this->m_p->s_a("cats", array(), FALSE, 0, array("*"), "position", "ASC");
    $this->load->view(admin . '/cats', $data);
  }
  public function add_cat()
  {

    $data = array();
    $data['tp'] = "add";
    $data['menus'] = $this->m_p->s_a("mainmenu", array('active_status =' => 1, 'footer =' => 0, 'single =' => 0), FALSE, 0, array("*"), "serial", "ASC");
    if (isset($_POST['test'])) {

      if ($_FILES['logo']['tmp_name']) {
        $config['upload_path']         = './images/';
        $config['allowed_types']       = 'gif|jpg|png';
        $config['encrypt_name']       = TRUE;
        $config['max_size']          = '10240'; // 10 MB
        $this->upload->initialize($config);
        $a = $this->upload->do_upload('logo');
        $data_upload = $this->upload->data();
        $arr = array_pop($_POST);
      }



      if ($_FILES['banner_img']['tmp_name']) {
        $config['upload_path']         = './images/';
        $config['allowed_types']       = 'gif|jpg|png';
        $config['encrypt_name']       = TRUE;
        $config['max_size']          = '10240'; // 10 MB
        $this->upload->initialize($config);
        $c = $this->upload->do_upload('banner_img');
        $data_upload2 = $this->upload->data();
        $arr = array_pop($_POST);
      }

      if ($_FILES['logo']['tmp_name']) {
        $_POST['img'] = $data_upload['file_name'];
      }


      if ($_FILES['banner_img']['tmp_name']) {
        $_POST['banner_img'] = $data_upload2['file_name'];
      }
      if ($_POST['title']) {

        $str = str_replace(' ', '_', $_POST['title']);
        $_POST['page_url'] = $str;
      }

      foreach ($_POST as $key => $value) {
        $_POST[$key] = $this->input->post($key);
      }

      $data['msg'] = true;
      $this->m_p->ins('cats', $_POST);
    }
    $this->load->view(admin . "/cats", $data);
  }
  function edit_cat($id)
  {
    $data['cat'] = $this->m_p->s_a("cats", "id = $id", 1, 0);
    $data['tp'] = "edit";
    $data['menus'] = $this->m_p->s_a("mainmenu", array('active_status =' => 1, 'footer =' => 0, 'single =' => 0), FALSE, 0, array("*"), "serial", "ASC");
    $this->load->view(admin . "/cats", $data);
    if (isset($_POST['test'])) {

      if ($_FILES['logo']['tmp_name']) {
        $config['upload_path']         = './images/';
        $config['allowed_types']       = 'gif|jpg|png|mp4';
        $config['encrypt_name']       = TRUE;
        $config['max_size']          = '10240'; // 10 MB
        $this->upload->initialize($config);
        $a = $this->upload->do_upload('logo');
        $data_upload = $this->upload->data();
        $arr = array_pop($_POST);
      }



      if ($_FILES['banner_img']['tmp_name']) {
        $config['upload_path']         = './images/';
        $config['allowed_types']       = 'gif|jpg|png';
        $config['encrypt_name']       = TRUE;
        $config['max_size']          = '10240'; // 10 MB
        $this->upload->initialize($config);
        $c = $this->upload->do_upload('banner_img');
        $data_upload2 = $this->upload->data();
        $arr = array_pop($_POST);
      }

      if ($_FILES['logo']['tmp_name']) {
        $_POST['img'] = $data_upload['file_name'];
      }


      if ($_FILES['banner_img']['tmp_name']) {
        $_POST['banner_img'] = $data_upload2['file_name'];
      }

      foreach ($_POST as $key => $value) {
        $_POST[$key] = $this->input->post($key);
      }
      $this->m_p->up_d('cats', $_POST, "id = $id");
      redirect("admin/cat");
    }
  }

  public function slider()
  {
    $data['tp'] = "all";
    $data['cat'] = $this->m_p->s_a("slider", array(), FALSE, 0, array("*"), "position", "ASC");
    $this->load->view(admin . '/slider', $data);
  }


  public function homeSlider()
  {
    $data['tp'] = "all";
    $data['cat'] = $this->m_p->s_a("home_slider", array(), FALSE, 0, array("*"), "position", "ASC");
    $this->load->view(admin . '/homeSlider', $data);
  }


  public function customerReviews()
  {
    $data['tp'] = "all";
    $data['customer'] = $this->m_p->s_a("cus_reviews", array(), FALSE, 0, array("*"), "serial", "ASC");
    $data['datas'] = $this->m_p->s_a("products", array('active_status =' => 1), FALSE, 0, array("*"));
    $this->load->view(admin . '/customerReviews', $data);
  }

  public function productReviews()
  {
    $data['tp'] = "all";
    $data['product'] = $this->m_p->s_a("pro_reviews", array(), FALSE, 0, array("*"));
    $data['datas'] = $this->m_p->s_a("products", array('active_status =' => 1), FALSE, 0, array("*"));
    $this->load->view(admin . '/productReviews', $data);
  }

  public function addMenu()
  {
    $data['tp'] = "all";
    $data['menu'] = $this->m_p->s_a("mainmenu", array(), FALSE, 0, array("*"), "serial", "ASC");
    $this->load->view(admin . '/addMenu', $data);
  }

  public function subCat()
  {
    $data['tp'] = "all";
    $data['subcat'] = $this->m_p->s_a("subcat", array(), FALSE, 0, array("*"), "serial", "ASC");
    $this->load->view(admin . '/subCat', $data);
  }

  public function faqPage()
  {
    $data['tp'] = "all";
    $data['faq'] = $this->m_p->s_a("faq", array(), FALSE, 0, array("*"), "serial", "ASC");
    $data['menus'] = $this->m_p->s_a("mainmenu", array('active_status =' => 1, 'single =' => 1), FALSE, 0, array("*"), "serial", "ASC");



    $this->load->view(admin . '/faqPage', $data);
  }
/////
 public function order_email_templates($msg = '')
  {
    
    if(!empty($msg)){
        $data['msg'] = $msg;
    }

    $setting = $this->db->get('order_email')->first_row();

    $data['email'] = $setting;

    $this->load->view(admin."/order_email_template",$data);
  }
  public function view_temp(){
    $setting = $this->db->get('order_email')->first_row();
    $data['temp'] = $setting;
    $this->load->view("emails/order",$data);
}
  public function save_email_temp(){
    
    $data = array(
        "order_submition_subject"=>$this->input->post("order_submition_subject"),
        "explore_text"=>$this->input->post("explore_text"),
        "explore_link"=>$this->input->post("explore_link"),
        "explore_color"=>$this->input->post("explore_color"),
        "top_color"=>$this->input->post("top_color"),
        "top_left_text"=>$this->input->post("top_left_text"),
        "top_right_text"=>$this->input->post("top_right_text"),
        "nav_first"=>$this->input->post("nav_first"),
        "nav_first_link"=>$this->input->post("nav_first_link"),
        "nav_second"=>$this->input->post("nav_second"),
        "nav_second_link"=>$this->input->post("nav_second_link"),
        "nav_third"=>$this->input->post("nav_third"),
        "nav_third_link"=>$this->input->post("nav_third_link"),
        "order_confirm"=>$this->input->post("order_confirm"),
        "order_confirm_color"=>$this->input->post("order_confirm_color"),
        "total_color"=>$this->input->post("total_color"),
        "contact_us_color"=>$this->input->post("contact_us_color"),
        "contact_us_link"=>$this->input->post("contact_us_link"),
        "contact_us"=>$this->input->post("contact_us"),
        "first_text"=>$this->input->post("first_text"),
        "second_text"=>$this->input->post("second_text"),
        "third_text"=>$this->input->post("third_text"),
        "promotion_text"=>$this->input->post("promotion_text"),
        "button_text"=>$this->input->post("button_text"),
        "button_color"=>$this->input->post("button_color"),
        "copy_right_text"=>$this->input->post("copy_right_text"),
        "button_link"=>$this->input->post("button_link"),
        "second_subject"=>$this->input->post("second_subject"),
        "preview_text1"=>$this->input->post("preview_text1"),
        "preview_text2"=>$this->input->post("preview_text2")
    );
//    echo "<pre>";
  //  print_r($data);
    $this->db->update("order_email",$data,array("id"=>1));
    redirect('admin/order_email_templates/success');
  }
/////
  public function blogPage()
  {
    $data['tp'] = "all";
    $data['blog'] = $this->m_p->s_a("blog", array(), FALSE, 0, array("*"), "serial", "ASC");
    $data['menus'] = $this->m_p->s_a("mainmenu", array('active_status =' => 1, 'single =' => 1), FALSE, 0, array("*"), "serial", "ASC");



    $this->load->view(admin . '/blogPage', $data);
  }

  public function barInfoSlids()
  {
    $data['tp'] = "all";
    $data['data'] = $this->m_p->s_a("barslids", array(), FALSE, 0, array("*"), "serial", "ASC");
    $this->load->view(admin . '/barInfoSlids', $data);
  }

  public function bannerFiveSetting()
  {
    $data['tp'] = "all";
    $data['cat'] = $this->m_p->s_a("bannerfive", array(), FALSE, 0, array("*"));
    $this->load->view(admin . '/bannerFiveSetting', $data);
  }

  public function add_slider()
  {

    $data = array();
    $data['tp'] = "add";
    if (isset($_POST['test'])) {
      $config['upload_path']         = './images/';
      $config['allowed_types']       = 'gif|jpg|png';
      $config['encrypt_name']       = TRUE;
      $config['max_size']          = '10240'; // 10 MB
      $this->upload->initialize($config);
      $a = $this->upload->do_upload('logo');
      $data_upload = $this->upload->data();
      $arr = array_pop($_POST);
      if ($a)
        $_POST['img'] = $data_upload['file_name'];

      foreach ($_POST as $key => $value) {
        $_POST[$key] = $this->input->post($key);
      }
      $data['msg'] = true;
      $this->m_p->ins('slider', $_POST);
    }
    $this->load->view(admin . "/slider", $data);
  }
  public function add_home_slider()
  {

    $data = array();
    $data['tp'] = "add";
    if (isset($_POST['test'])) {
      $config['upload_path']         = './images/';
      $config['allowed_types']       = 'gif|jpg|png';
      $config['encrypt_name']       = TRUE;
      $config['max_size']          = '10240'; // 10 MB
      $this->upload->initialize($config);
      $a = $this->upload->do_upload('logo');
      $data_upload = $this->upload->data();
      $arr = array_pop($_POST);
      if ($a)
        $_POST['img'] = $data_upload['file_name'];

      foreach ($_POST as $key => $value) {
        $_POST[$key] = $this->input->post($key);
      }
      $data['msg'] = true;
      $this->m_p->ins('home_slider', $_POST);
    }
    $this->load->view(admin . "/homeSlider", $data);
  }


  public function add_customerReviews()
  {

    $data = array();
    $data['tp'] = "add";
    $data['datas'] = $this->m_p->s_a("products", array('active_status =' => 1), FALSE, 0, array("*"));

    if (isset($_POST['test'])) {
      $config['upload_path']         = './images/';
      $config['allowed_types']       = 'gif|jpg|png';
      $config['encrypt_name']       = TRUE;
      $config['max_size']          = '10240'; // 10 MB
      $this->upload->initialize($config);
      $a = $this->upload->do_upload('img');
      $data_upload = $this->upload->data();
      $arr = array_pop($_POST);
      if ($a)
        $_POST['img'] = $data_upload['file_name'];

      foreach ($_POST as $key => $value) {
        $_POST[$key] = $this->input->post($key);
      }
      $data['msg'] = true;
      $this->m_p->ins('cus_reviews', $_POST);
    }
    $this->load->view(admin . "/customerReviews", $data);
  }


  public function add_productReviews()
  {
    $data = array();
    $data['tp'] = "add";
    $data['datas'] = $this->m_p->s_a("products", array('active_status =' => 1), FALSE, 0, array("*"));

    if (isset($_POST['test'])) {


      foreach ($_POST as $key => $value) {
        $_POST[$key] = $this->input->post($key);
      }


      $data['msg'] = true;
      $this->m_p->ins('pro_reviews', $_POST);
    }
    $this->load->view(admin . "/productReviews", $data);
  }


  public function add_mainMenu()
  {

    $data = array();
    $data['tp'] = "add";
    if (isset($_POST['test'])) {


      foreach ($_POST as $key => $value) {
        $_POST[$key] = $this->input->post($key);
      }
      $data['msg'] = true;
      $this->m_p->ins('mainmenu', $_POST);
    }
    $this->load->view(admin . "/addMenu", $data);
  }


  public function add_faqPage()
  {

    $data = array();
    $data['menus'] = $this->m_p->s_a("mainmenu", array('active_status =' => 1, 'single =' => 1), FALSE, 0, array("*"), "serial", "ASC");
    $data['menusinfo'] = $this->db->query("SELECT * FROM faq WHERE menu_id != 0")->row();

    // echo "<pre>";
    // print_r($data['menusinfo']);
    // exit;
    $data['tp'] = "add";
    if (isset($_POST['title'])) {


      foreach ($_POST as $key => $value) {
        $_POST[$key] = $this->input->post($key);
      }

      $data['msg'] = true;
      $_POST['slug'] = toAscii($_POST['title']);
      $this->m_p->ins('faq', $_POST);
      redirect("admin/faqPage");
    }
    $this->load->view(admin . "/faqPage", $data);
  }


  public function add_blogPage()
  {

    $data = array();
    $data['menus'] = $this->m_p->s_a("mainmenu", array('active_status =' => 1, 'single =' => 1), FALSE, 0, array("*"), "serial", "ASC");
    $data['menusinfo'] = $this->db->query("SELECT * FROM blog WHERE menu_id != 0")->row();

    // echo "<pre>";
    // print_r($data['menusinfo']);
    // exit;
    $data['tp'] = "add";
    if (isset($_POST['title'])) {


      if ($_FILES['img']['tmp_name']) {
        $config['upload_path']         = './images/';
        $config['allowed_types']       = 'gif|jpg|png|mp4';
        $config['encrypt_name']       = TRUE;
        $config['max_size']          = '10240'; // 10 MB
        $this->upload->initialize($config);
        $a = $this->upload->do_upload('img');
        $data_upload = $this->upload->data();
        $arr = array_pop($_POST);
      }



      if ($_FILES['banner_img']['tmp_name']) {
        $config['upload_path']         = './images/';
        $config['allowed_types']       = 'gif|jpg|png';
        $config['encrypt_name']       = TRUE;
        $config['max_size']          = '10240'; // 10 MB
        $this->upload->initialize($config);
        $c = $this->upload->do_upload('banner_img');
        $data_upload2 = $this->upload->data();
        $arr = array_pop($_POST);
      }

      if ($_FILES['img']['tmp_name']) {
        $_POST['img'] = $data_upload['file_name'];
      }


      if ($_FILES['banner_img']['tmp_name']) {
        $_POST['banner_img'] = $data_upload2['file_name'];
      }


      foreach ($_POST as $key => $value) {
        $_POST[$key] = $this->input->post($key);
      }

      $data['msg'] = true;
      $_POST['slug'] = toAscii($_POST['title']);
      $this->m_p->ins('blog', $_POST);
      redirect("admin/blogPage");
    }
    $this->load->view(admin . "/blogPage", $data);
  }

  public function add_subCat()
  {

    $data = array();
    $data['tp'] = "add";
    $data['cat'] = $this->m_p->s_a("cats", array(), FALSE, 0, array("*"));
    if (isset($_POST['test'])) {

      $config['upload_path']         = './images/';
      $config['allowed_types']       = 'gif|jpg|png';
      $config['encrypt_name']       = TRUE;
      $config['max_size']          = '10240'; // 10 MB
      $this->upload->initialize($config);
      $a = $this->upload->do_upload('img');
      $data_upload = $this->upload->data();
      $arr = array_pop($_POST);
      if ($a)
        $_POST['banner_img'] = $data_upload['file_name'];


      foreach ($_POST as $key => $value) {
        $_POST[$key] = $this->input->post($key);
      }
      $data['msg'] = true;
      $this->m_p->ins('subcat', $_POST);
    }
    $this->load->view(admin . "/subCat", $data);
  }


  public function add_bar_info_slids()
  {

    $data = array();
    $data['tp'] = "add";
    if (isset($_POST['test'])) {
      $config['upload_path']         = './images/';
      $config['allowed_types']       = 'gif|jpg|png';
      $config['encrypt_name']       = TRUE;
      $config['max_size']          = '10240'; // 10 MB
      $this->upload->initialize($config);
      $a = $this->upload->do_upload('img');
      $data_upload = $this->upload->data();
      $arr = array_pop($_POST);
      if ($a)
        $_POST['img'] = $data_upload['file_name'];

      foreach ($_POST as $key => $value) {
        $_POST[$key] = $this->input->post($key);
      }
      $data['msg'] = true;
      $this->m_p->ins('barslids', $_POST);
    }
    $this->load->view(admin . "/barInfoSlids", $data);
  }
  public function add_banner_five()
  {

    $data = array();
    $data['tp'] = "add";
    if (isset($_POST['test'])) {



      if ($_FILES['img']['tmp_name']) {
        $config['upload_path']         = './images/';
        $config['allowed_types']       = 'gif|jpg|png|mp4';
        $config['encrypt_name']       = TRUE;
        $config['max_size']          = '10240'; // 10 MB
        $this->upload->initialize($config);
        $a = $this->upload->do_upload('img');
        $data_upload = $this->upload->data();
        $arr = array_pop($_POST);
      }



      if ($_FILES['video']['tmp_name']) {
        $config['upload_path']         = './images/';
        $config['allowed_types']       = 'gif|jpg|png|mp4';
        $config['encrypt_name']       = TRUE;
        $config['max_size']          = '10240'; // 10 MB
        $this->upload->initialize($config);
        $c = $this->upload->do_upload('video');
        $data_upload2 = $this->upload->data();
        $arr = array_pop($_POST);
      }


      if ($_FILES['img']['tmp_name']) {
        $_POST['img'] = $data_upload['file_name'];
      }


      if ($_FILES['video']['tmp_name']) {
        $_POST['video'] = $data_upload2['file_name'];
      }


      foreach ($_POST as $key => $value) {

        $_POST[$key] = $this->input->post($key);
      }


      $data['msg'] = true;
      $this->m_p->ins('bannerfive', $_POST);
    }
    $this->load->view(admin . "/bannerFiveSetting", $data);
  }


  function edit_slider($id)
  {
    $data['cat'] = $this->m_p->s_a("slider", "id = $id", 1, 0);
    $data['tp'] = "edit";
    $this->load->view(admin . "/slider", $data);
    if (isset($_POST['test'])) {
      $config['upload_path']         = './images/';
      $config['allowed_types']       = 'gif|jpg|png';
      $config['encrypt_name']       = TRUE;
      $config['max_size']          = '10240'; // 10 MB
      $this->upload->initialize($config);
      $a = $this->upload->do_upload('logo');
      $data_upload = $this->upload->data();
      $arr = array_pop($_POST);
      if ($a)
        $_POST['img'] = $data_upload['file_name'];

      foreach ($_POST as $key => $value) {
        $_POST[$key] = $this->input->post($key);
      }
      $this->m_p->up_d('slider', $_POST, "id = $id");
      redirect("admin/slider");
    }
  }

  function edit_home_slider($id)
  {
    $data['cat'] = $this->m_p->s_a("home_slider", "id = $id", 1, 0);
    $data['tp'] = "edit";
    $this->load->view(admin . "/homeSlider", $data);
    if (isset($_POST['test'])) {
      $config['upload_path']         = './images/';
      $config['allowed_types']       = 'gif|jpg|png';
      $config['encrypt_name']       = TRUE;
      $config['max_size']          = '10240'; // 10 MB
      $this->upload->initialize($config);
      $a = $this->upload->do_upload('logo');
      $data_upload = $this->upload->data();
      $arr = array_pop($_POST);
      if ($a)
        $_POST['img'] = $data_upload['file_name'];

      foreach ($_POST as $key => $value) {
        $_POST[$key] = $this->input->post($key);
      }
      $this->m_p->up_d('home_slider', $_POST, "id = $id");
      redirect("admin/homeSlider");
    }
  }


  function edit_customerReviews($id)
  {
    $data['datas'] = $this->m_p->s_a("products", array('active_status =' => 1), FALSE, 0, array("*"));
    $data['customer'] = $this->m_p->s_a("cus_reviews", "id = $id", 1, 0);
    $data['tp'] = "edit";
    $this->load->view(admin . "/customerReviews", $data);
    if (isset($_POST['test'])) {
      $config['upload_path']         = './images/';
      $config['allowed_types']       = 'gif|jpg|png';
      $config['encrypt_name']       = TRUE;
      $config['max_size']          = '10240'; // 10 MB
      $this->upload->initialize($config);
      $a = $this->upload->do_upload('img');
      $data_upload = $this->upload->data();
      $arr = array_pop($_POST);
      if ($a)
        $_POST['img'] = $data_upload['file_name'];

      foreach ($_POST as $key => $value) {
        $_POST[$key] = $this->input->post($key);
      }
      $this->m_p->up_d('cus_reviews', $_POST, "id = $id");
      redirect("admin/customerReviews");
    }
  }

  function edit_productReviews($id)
  {
    $data['datas'] = $this->m_p->s_a("products", array('active_status =' => 1), FALSE, 0, array("*"));
    $data['product'] = $this->m_p->s_a("pro_reviews", "id = $id", 1, 0);
    $data['tp'] = "edit";
    $this->load->view(admin . "/productReviews", $data);
    if (isset($_POST['test'])) {


      foreach ($_POST as $key => $value) {
        $_POST[$key] = $this->input->post($key);
      }
      $this->m_p->up_d('pro_reviews', $_POST, "id = $id");
      redirect("admin/productReviews");
    }
  }


  function edit_mainMenu($id)
  {
    $data['menu'] = $this->m_p->s_a("mainmenu", "id = $id", 1, 0);
    $data['tp'] = "edit";
    $this->load->view(admin . "/addMenu", $data);
    if (isset($_POST['test'])) {

      foreach ($_POST as $key => $value) {
        $_POST[$key] = $this->input->post($key);
      }
      $this->m_p->up_d('mainmenu', $_POST, "id = $id");
      redirect("admin/addMenu");
    }
  }


  function edit_faqPage($id)
  {
    $data['faq'] = $this->m_p->s_a("faq", "id = $id", 1, 0);
    $data['tp'] = "edit";
    $data['menus'] = $this->m_p->s_a("mainmenu", array('active_status =' => 1, 'single =' => 1), FALSE, 0, array("*"), "serial", "ASC");
    $data['menusinfo'] = $this->db->query("SELECT * FROM faq WHERE menu_id != 0")->row();
    $this->load->view(admin . "/faqPage", $data);
    if (isset($_POST['title'])) {

      foreach ($_POST as $key => $value) {
        $_POST[$key] = $this->input->post($key);
      }
      $_POST['slug'] = toAscii($_POST['title']);
      $this->m_p->up_d('faq', $_POST, "id = $id");
      redirect("admin/faqPage");
    }
  }


  function edit_blogPage($id)
  {
    $data['blog'] = $this->m_p->s_a("blog", "id = $id", 1, 0);
    $data['tp'] = "edit";
    $data['menus'] = $this->m_p->s_a("mainmenu", array('active_status =' => 1, 'single =' => 1), FALSE, 0, array("*"), "serial", "ASC");
    $data['menusinfo'] = $this->db->query("SELECT * FROM blog WHERE menu_id != 0")->row();
    $this->load->view(admin . "/blogPage", $data);
    if (isset($_POST['title'])) {

      if ($_FILES['img']['tmp_name']) {
        $config['upload_path']         = './images/';
        $config['allowed_types']       = 'gif|jpg|png|mp4';
        $config['encrypt_name']       = TRUE;
        $config['max_size']          = '10240'; // 10 MB
        $this->upload->initialize($config);
        $a = $this->upload->do_upload('img');
        $data_upload = $this->upload->data();
        $arr = array_pop($_POST);
      }



      if ($_FILES['banner_img']['tmp_name']) {
        $config['upload_path']         = './images/';
        $config['allowed_types']       = 'gif|jpg|png';
        $config['encrypt_name']       = TRUE;
        $config['max_size']          = '10240'; // 10 MB
        $this->upload->initialize($config);
        $c = $this->upload->do_upload('banner_img');
        $data_upload2 = $this->upload->data();
        $arr = array_pop($_POST);
      }

      if ($_FILES['img']['tmp_name']) {
        $_POST['img'] = $data_upload['file_name'];
      }


      if ($_FILES['banner_img']['tmp_name']) {
        $_POST['banner_img'] = $data_upload2['file_name'];
      }


      foreach ($_POST as $key => $value) {
        $_POST[$key] = $this->input->post($key);
      }
      $_POST['slug'] = toAscii($_POST['title']);
      $this->m_p->up_d('blog', $_POST, "id = $id");
      redirect("admin/blogPage");
    }
  }


  function edit_subCat($id)
  {
    $data['subcat'] = $this->m_p->s_a("subcat", "id = $id", 1, 0);
    $data['cat'] = $this->m_p->s_a("cats", array(), FALSE, 0, array("*"));
    $data['tp'] = "edit";
    $this->load->view(admin . "/subCat", $data);
    if (isset($_POST['test'])) {

      $config['upload_path']         = './images/';
      $config['allowed_types']       = 'gif|jpg|png';
      $config['encrypt_name']       = TRUE;
      $config['max_size']          = '10240'; // 10 MB
      $this->upload->initialize($config);
      $a = $this->upload->do_upload('img');
      $data_upload = $this->upload->data();
      $arr = array_pop($_POST);
      if ($a)
        $_POST['banner_img'] = $data_upload['file_name'];

      foreach ($_POST as $key => $value) {
        $_POST[$key] = $this->input->post($key);
      }
      $this->m_p->up_d('subcat', $_POST, "id = $id");
      redirect("admin/subCat");
    }
  }


  function edit_bar_info_slids($id)
  {
    $data['data'] = $this->m_p->s_a("barslids", "id = $id", 1, 0);
    $data['tp'] = "edit";
    $this->load->view(admin . "/barInfoSlids", $data);
    if (isset($_POST['test'])) {
      $config['upload_path']         = './images/';
      $config['allowed_types']       = 'gif|jpg|png';
      $config['encrypt_name']       = TRUE;
      $config['max_size']          = '10240'; // 10 MB

      $this->upload->initialize($config);
      $a = $this->upload->do_upload('img');
      $data_upload = $this->upload->data();
      $arr = array_pop($_POST);

      if ($a)
        $_POST['img'] = $data_upload['file_name'];

      foreach ($_POST as $key => $value) {
        $_POST[$key] = $this->input->post($key);
      }
      $this->m_p->up_d('barslids', $_POST, "id = $id");
      redirect("admin/barInfoSlids");
    }
  }

  function edit_banner_five($id)
  {
    $data['cat'] = $this->m_p->s_a("bannerfive", "id = $id", 1, 0);
    $data['tp'] = "edit";
    $this->load->view(admin . "/bannerFiveSetting", $data);
    if (isset($_POST['test'])) {


      if ($_FILES['img']['tmp_name']) {
        $config['upload_path']         = './images/';
        $config['allowed_types']       = 'gif|jpg|png|mp4';
        $config['encrypt_name']       = TRUE;
        $config['max_size']          = '10240'; // 10 MB
        $this->upload->initialize($config);
        $a = $this->upload->do_upload('img');
        $data_upload = $this->upload->data();
        $arr = array_pop($_POST);
      }

      if ($_FILES['two_img']['tmp_name']) {
        $config['upload_path']         = './images/';
        $config['allowed_types']       = 'gif|jpg|png|mp4';
        $config['encrypt_name']       = TRUE;
        $config['max_size']          = '10240'; // 10 MB
        $this->upload->initialize($config);
        $b = $this->upload->do_upload('two_img');
        $data_upload1 = $this->upload->data();
        $arr = array_pop($_POST);
      }


      if ($_FILES['video']['tmp_name']) {
        $config['upload_path']         = './images/';
        $config['allowed_types']       = 'gif|jpg|png|mp4';
        $config['encrypt_name']       = TRUE;
        $config['max_size']          = '10240'; // 10 MB
        $this->upload->initialize($config);
        $c = $this->upload->do_upload('video');
        $data_upload2 = $this->upload->data();
        $arr = array_pop($_POST);
      }


      if ($_FILES['img']['tmp_name']) {
        $_POST['img'] = $data_upload['file_name'];
      }
      if ($_FILES['two_img']['tmp_name']) {
        $_POST['two_img'] = $data_upload1['file_name'];
      }

      if ($_FILES['video']['tmp_name']) {
        $_POST['video'] = $data_upload2['file_name'];
      }


      foreach ($_POST as $key => $value) {

        $_POST[$key] = $this->input->post($key);
      }



      $this->m_p->up_d('bannerfive', $_POST, "id = $id");
      redirect("admin/bannerFiveSetting");
    }
  }

  public function slids()
  {
    $data['tp'] = "all";
    $data['cat'] = $this->m_p->s_a("slids", array(), FALSE);
    $this->load->view(admin . '/slids', $data);
  }
  public function add_slid()
  {
    $data = array();
    $data['tp'] = "add";
    if (isset($_POST['test'])) {
      $arr = array_pop($_POST);
      foreach ($_POST as $key => $value) {
        $_POST[$key] = $this->input->post($key);
      }
      $data['msg'] = true;
      $this->m_p->ins('slids', $_POST);
    }
    $this->load->view(admin . "/slids", $data);
  }
  function edit_slid($id)
  {
    $data['cat'] = $this->m_p->s_a("slids", "id = $id", 1, 0);
    $data['tp'] = "edit";
    $this->load->view(admin . "/slids", $data);
    if (isset($_POST['test'])) {
      $arr = array_pop($_POST);
      foreach ($_POST as $key => $value) {
        $_POST[$key] = $this->input->post($key);
      }
      $this->m_p->up_d('slids', $_POST, "id = $id");
      redirect("admin/slids");
    }
  }

  public function shipping()
  {
    $data['tp'] = "all";
    $data['cat'] = $this->m_p->s_a("shipping", array(), FALSE, 0, array("*"), "position", "ASC");
    $this->load->view(admin . '/shipping', $data);
  }
  public function add_shipping()
  {
    $data = array();
    $data['tp'] = "add";
    if (isset($_POST['test'])) {
      $arr = array_pop($_POST);
      foreach ($_POST as $key => $value) {
        $_POST[$key] = $this->input->post($key);
      }
      $data['msg'] = true;
      $this->m_p->ins('shipping', $_POST);
    }
    $this->load->view(admin . "/shipping", $data);
  }
  function edit_shipping($id)
  {
    $data['cat'] = $this->m_p->s_a("shipping", "id = $id", 1, 0);
    $data['tp'] = "edit";
    $this->load->view(admin . "/shipping", $data);
    if (isset($_POST['test'])) {
      $arr = array_pop($_POST);
      foreach ($_POST as $key => $value) {
        $_POST[$key] = $this->input->post($key);
      }
      $this->m_p->up_d('shipping', $_POST, "id = $id");
      redirect("admin/shipping");
    }
  }

  public function pages()
  {
    $data['cat'] = $this->m_p->s_a("pages", array(), FALSE);


    $this->load->view(admin . '/pages', $data);
  }
  public function add_page()
  {
    $data = array();
    $data['menus'] = $this->m_p->s_a("mainmenu", array('active_status =' => 1, 'single =' => 1), FALSE, 0, array("*"), "serial", "ASC");
    if (isset($_POST['test'])) {
      $arr = array_pop($_POST);
      foreach ($_POST as $key => $value) {
        $_POST[$key] = $this->input->post($key);
      }
      $data['msg'] = true;
      $_POST['slug'] = toAscii($_POST['title']);
      $this->m_p->ins('pages', $_POST);
    }
    $this->load->view(admin . "/add_page", $data);
  }
  function edit_page($id)
  {
    $data['cat'] = $this->m_p->s_a("pages", "id = $id", 1, 0);
    $data['menus'] = $this->m_p->s_a("mainmenu", array('active_status =' => 1, 'single =' => 1), FALSE, 0, array("*"), "serial", "ASC");
    $this->load->view(admin . "/edit_page", $data);
    if (isset($_POST['test'])) {
      $arr = array_pop($_POST);
      foreach ($_POST as $key => $value) {
        $_POST[$key] = $this->input->post($key);
      }
      $_POST['slug'] = toAscii($_POST['title']);
      $this->m_p->up_d('pages', $_POST, "id = $id");
      redirect("admin/pages");
    }
  }

  public function upsell($id)
  {
    $data['cat'] = $this->m_p->s_a("upsell", array("onOrder" => $id), FALSE);
    $data['tp'] = "all";
    $data['id'] = $id;
    $this->load->view(admin . '/upsell', $data);
  }
  public function add_upsell($id)
  {
    $data = array();
    $data['tp'] = "add";
    $data['id'] = $id;
    $data['products'] = $this->m_p->s_a("products", array(), FALSE);
    if (isset($_POST['test'])) {
      $arr = array_pop($_POST);
      foreach ($_POST as $key => $value) {
        $_POST[$key] = $this->input->post($key);
      }
      $data['msg'] = true;
      $_POST['onOrder'] = $id;
      $this->m_p->ins('upsell', $_POST);
    }
    $this->load->view(admin . "/upsell", $data);
  }

  public function importReviews()
  {
    $data = array();
    if (isset($_POST['test'])) {

      $da = array();

      $csv = fopen($_FILES['file']['tmp_name'], "r");

      while ($d = fgetcsv($csv, 1000, ",")) {

        if (is_numeric($d[0]) && is_numeric($d[1])) {

          $first_time = strtotime(date('Y-m-d'));
          $second_time = $first_time + 864000;

          $rand_time = rand($first_time, $second_time);
          $rand_date = date('Y-m-d g:i:s A', $rand_time);

          $arrInsert = array(
            "vote"       => $d[1],
            "name"       => $d[2],
            "email"     => $d[3],
            "img"       => $d[4],
            "comment"     => $d[5],
            "product"     => $d[0],
            "date"       => $rand_date,
            "ac"      => 1
          );

          $this->m_p->ins("reviews", $arrInsert);
          $data['msg'] = true;
        }
      }
    }

    $this->load->view(admin . "/import", $data);
  }


  public function products()
  {
    $data['tp'] = "all";


    $config = $config = page_a($this->m_p->get_num("products", array()), "admin/products", 3, $this->config->item("per_page"));

    $this->pagination->initialize($config);

    $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

    $perPage = admin == "admin" ? $config["per_page"] : FALSE;

    $data['cat'] = $this->m_p->s_a("products", array(), $perPage, $page);

    $data["links"] = $this->pagination->create_links();

    $this->load->view(admin . '/products', $data);
  }


  public function customers()
  {
    $data['tp'] = "all";


    $config = $config = page_a($this->m_p->get_num("orders", array()), "admin/ordersInfo", 3, $this->config->item("per_page"));

    $this->pagination->initialize($config);

    $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

    $perPage = admin == "admin" ? $config["per_page"] : FALSE;




    $data['customers'] =  $this->db->query("SELECT * FROM orders GROUP BY email  ")->result();


    // $data['customers'] = $this->m_p->s_a("orders", array(), $perPage, $page);

    $data["links"] = $this->pagination->create_links();

    $this->load->view(admin . '/customers', $data);
  }

  public function add_product()
  {
    $this->load->library("libre");

    $data = array();
    $data['tp'] = "add";

    $data['subcat'] = $this->m_p->s_a("subcat", array(), FALSE);

    if (isset($_POST['title'])) {

      $_POST['images'] = $this->input->post("images") ?? $this->libre->doupload("file", 'gif|jpg|jpeg|png');

      $info = array();

      $n = $_POST['tp'];

      foreach ($n as $key => $value) {
        if (!empty($value)) {
          $info[$key]['tp'] = $value;
          $info[$key]['info'] = $_POST['info'][$key];
          $info[$key]['width'] = $_POST['width'][$key];
          $info[$key]['height'] = $_POST['height'][$key];
        }
      }

      unset($_POST['tp']);
      unset($_POST['info']);
      unset($_POST['width']);
      unset($_POST['height']);


      if ($_POST['title']) {

        $str = str_replace(' ', '_', $_POST['title']);
        $_POST['page_url'] = $str;
      }

      foreach ($_POST as $key => $value) {
        $_POST[$key] = $this->input->post($key, FALSE);
      }

      $_POST['variants'] = json_encode($info, JSON_UNESCAPED_UNICODE);
      $_POST['dateat'] = date('Y-m-d\TH:i:s');
      $data['msg'] = true;
      $this->m_p->ins('products', $_POST);
    }
    $this->load->view(admin . "/products", $data);
  }
  function edit_product($id)
  {

    $this->load->library("libre");
    $data['cat'] = $this->m_p->s_a("products", "id = $id", 1, 0);
    $data['subcat'] = $this->m_p->s_a("subcat", array(), FALSE);
    $data['tp'] = "edit";
    $this->load->view(admin . "/products", $data);
    if (isset($_POST['title'])) {

      if (admin == "admin") {

        $imgs = $this->libre->doupload("file", 'gif|jpg|jpeg|png|mp4');
        if (isset($_POST['old_img'])) {
          if (empty($imgs)) {
            $_POST['images'] = implode(",", $_POST['old_img']);
          } else {
            $_POST['images'] = implode(",", $_POST['old_img']) . "," . $imgs;
          }
          unset($_POST['old_img']);
        } else {
          $_POST['images'] = $imgs;
        }
      }

      $info = array();


      $n = $_POST['tp'];

      foreach ($n as $key => $value) {
        if (!empty($value)) {
          $info[$key]['tp'] = $value;
          $info[$key]['info'] = $_POST['info'][$key];
          $info[$key]['width'] = $_POST['width'][$key];
          $info[$key]['height'] = $_POST['height'][$key];
        }
      }

      unset($_POST['tp']);
      unset($_POST['info']);
      unset($_POST['width']);
      unset($_POST['height']);

      foreach ($_POST as $key => $value) {
        $_POST[$key] = $this->input->post($key, FALSE);
      }
      $_POST['dateat'] = date('Y-m-d\TH:i:s');
      $_POST['variants'] = json_encode($info, JSON_UNESCAPED_UNICODE);

      $this->m_p->up_d('products', $_POST, "id = $id");
      redirect("admin/products");
    }
  }


  function edit_customers($id)
  {

    $this->load->library("libre");
    $data['customers'] = $this->m_p->s_a("orders", "id = $id", 1, 0);
    $data['tp'] = "edit";
    $this->load->view(admin . "/customers", $data);
    if (isset($_POST['name'])) {

      foreach ($_POST as $key => $value) {
        $_POST[$key] = $this->input->post($key, FALSE);
      }

      $this->m_p->up_d('orders', $_POST, "id = $id");
      redirect("admin/customers");
    }
  }

  function customersView($id)
  {

    $this->load->library("libre");





    $data['info']  = $this->db->query("SELECT * FROM orders WHERE id = '$id'")->row();


    $data['customers'] = $this->m_p->s_a("orders", "id = '$id'");


    $data['tp'] = "view";
    $this->load->view(admin . "/customersView", $data);
  }

  public function discounts00()
  {
    $data['tp'] = "all";


    $config = $config = page_a($this->m_p->get_num("discounts", array()), "admin/discounts", 3, $this->config->item("per_page"));

    $this->pagination->initialize($config);

    $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

    $data['cat'] = $this->m_p->s_a("discounts", array(), $config["per_page"], $page);

    $data["links"] = $this->pagination->create_links();

    $this->load->view(admin . '/discounts', $data);
  }


  public function discounts()
  {
    $data['tp'] = "all";


    $config = $config = page_a($this->m_p->get_num("discounts_coupon", array()), "admin/discountsList", 3, $this->config->item("per_page"));

    $this->pagination->initialize($config);

    $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

    $data['cat'] = $this->m_p->s_a("discounts_coupon", array(), $config["per_page"], $page);

    $data["links"] = $this->pagination->create_links();

    $this->load->view(admin . '/discountsList', $data);
  }





  public function add_discount000()
  {



    $data = array();
    $data['tp'] = "add";

    $data['cats'] = $this->m_p->s_a("cats", array(), FALSE);

    if (isset($_POST['test'])) {
      $arr = array_pop($_POST);

      foreach ($_POST as $key => $value) {
        $_POST[$key] = $this->input->post($key);
      }
      $data['msg'] = true;
      $this->m_p->ins('discounts', $_POST);
    }
    $this->load->view(admin . "/discounts", $data);
  }
  function edit_discount($id)
  {
    $data['cat'] = $this->m_p->s_a("discounts", "id = $id", 1, 0);
    $data['tp'] = "edit";
    $data['cats'] = $this->m_p->s_a("cats", array(), FALSE);
    $this->load->view(admin . "/discounts", $data);
    if (isset($_POST['test'])) {

      $arr = array_pop($_POST);

      foreach ($_POST as $key => $value) {
        $_POST[$key] = $this->input->post($key);
      }
      $this->m_p->up_d('discounts', $_POST, "id = $id");
      redirect("admin/discounts");
    }
  }



  public function email_templates()
  {

    if (isset($_POST['test'])) {

      $arr = array_pop($_POST);

      foreach ($_POST as $key => $value) {
        $_POST[$key] = $this->input->post($key);
      }
      $this->m_p->up_d('email_templates', $_POST);
    }

    $data['email'] = $this->m_p->se_a("email_templates");

    $this->load->view(admin . "/email_template", $data);
  }


  public function thanksPage()
  {

    if (isset($_POST['test'])) {

      $arr = array_pop($_POST);

      foreach ($_POST as $key => $value) {
        $_POST[$key] = $this->input->post($key);
      }
      $this->m_p->up_d('thankspage', $_POST);
    }
    $data['setting'] = $this->m_p->se_a("thankspage");
    $this->load->view(admin . "/thanksPage", $data);
  }



  public function setting()
  {

    if (isset($_POST['test'])) {

      $config['upload_path']         = './logo/';
      $config['allowed_types']       = 'gif|jpg|png';
      $config['encrypt_name']       = TRUE;
      $config['max_size']          = '10240'; // 10 MB
      $this->upload->initialize($config);
      $a = $this->upload->do_upload('logo');
      $data_upload = $this->upload->data();
      $arr = array_pop($_POST);

      if ($_FILES['favicon']['tmp_name']) {
        $config['upload_path']         = './images/';
        $config['allowed_types']       = 'gif|jpg|png';
        $config['encrypt_name']       = TRUE;
        $config['max_size']          = '10240'; // 10 MB
        $this->upload->initialize($config);
        $b = $this->upload->do_upload('favicon');
        $data_upload1 = $this->upload->data();
        $arr = array_pop($_POST);
      }

      if ($_FILES['thanks_img']['tmp_name']) {
        $config['upload_path']         = './images/';
        $config['allowed_types']       = 'gif|jpg|png';
        $config['encrypt_name']       = TRUE;
        $config['max_size']          = '10240'; // 10 MB
        $this->upload->initialize($config);
        $b = $this->upload->do_upload('thanks_img');
        $data_upload2 = $this->upload->data();
        $arr = array_pop($_POST);
      }

      if ($_FILES['product_img']['tmp_name']) {
        $config['upload_path']         = './images/';
        $config['allowed_types']       = 'gif|jpg|png';
        $config['encrypt_name']       = TRUE;
        $config['max_size']          = '10240'; // 10 MB
        $this->upload->initialize($config);
        $b = $this->upload->do_upload('product_img');
        $data_upload3 = $this->upload->data();
        $arr = array_pop($_POST);
      }
      if ($_FILES['product_img']['tmp_name']) {
        $_POST['product_img'] = $data_upload3['file_name'];
      }
      if ($_FILES['thanks_img']['tmp_name']) {
        $_POST['thanks_img'] = $data_upload2['file_name'];
      }
      if ($_FILES['favicon']['tmp_name']) {
        $_POST['favicon'] = $data_upload1['file_name'];
      }

      if ($a)
        $_POST['logo'] = $data_upload['file_name'];

      foreach ($_POST as $key => $value) {
        $_POST[$key] = $this->input->post($key);
      }
      $this->m_p->up_d('settings', $_POST);
    }
    $data['setting'] = $this->m_p->se_a("settings");
    $this->load->view(admin . "/setting", $data);
  }


  public function bannerOneSetting()
  {

    if (isset($_POST['test'])) {


      if ($_FILES['img']['tmp_name']) {
        $config['upload_path']         = './images/';
        $config['allowed_types']       = 'gif|jpg|png';
        $config['encrypt_name']       = TRUE;
        $config['max_size']          = '10240'; // 10 MB
        $this->upload->initialize($config);
        $a = $this->upload->do_upload('img');
        $data_upload = $this->upload->data();
        $arr = array_pop($_POST);
      }


      if ($_FILES['icon_one']['tmp_name']) {
        $config['upload_path']         = './images/';
        $config['allowed_types']       = 'gif|jpg|png';
        $config['encrypt_name']       = TRUE;
        $config['max_size']          = '10240'; // 10 MB
        $this->upload->initialize($config);
        $b = $this->upload->do_upload('icon_one');
        $data_upload1 = $this->upload->data();
        $arr = array_pop($_POST);
      }

      if ($_FILES['icon_two']['tmp_name']) {
        $config['upload_path']         = './images/';
        $config['allowed_types']       = 'gif|jpg|png';
        $config['encrypt_name']       = TRUE;
        $config['max_size']          = '10240'; // 10 MB
        $this->upload->initialize($config);
        $b = $this->upload->do_upload('icon_two');
        $data_upload2 = $this->upload->data();
        $arr = array_pop($_POST);
      }

      if ($_FILES['icon_three']['tmp_name']) {
        $config['upload_path']         = './images/';
        $config['allowed_types']       = 'gif|jpg|png';
        $config['encrypt_name']       = TRUE;
        $config['max_size']          = '10240'; // 10 MB
        $this->upload->initialize($config);
        $b = $this->upload->do_upload('icon_three');
        $data_upload3 = $this->upload->data();
        $arr = array_pop($_POST);
      }
      if ($_FILES['img']['tmp_name']) {
        $_POST['img'] = $data_upload['file_name'];
      }


      if ($_FILES['icon_one']['tmp_name']) {
        $_POST['icon_one'] = $data_upload1['file_name'];
      }

      if ($_FILES['icon_two']['tmp_name']) {
        $_POST['icon_two'] = $data_upload2['file_name'];
      }

      if ($_FILES['icon_three']['tmp_name']) {
        $_POST['icon_three'] = $data_upload3['file_name'];
      }

      foreach ($_POST as $key => $value) {
        $_POST[$key] = $this->input->post($key);
      }
      $this->m_p->up_d('bannerone', $_POST);
    }
    $data['setting'] = $this->m_p->se_a("bannerone");
    $this->load->view(admin . "/bannerOneSetting", $data);
  }

  public function bannerTwoSetting()
  {

    if (isset($_POST['test'])) {





      if ($_FILES['video']['tmp_name']) {
        $config['upload_path']         = './images/';
        $config['allowed_types']       = 'gif|jpg|png|mp4';
        $config['encrypt_name']       = TRUE;
        $config['max_size']          = '10240'; // 10 MB
        $this->upload->initialize($config);
        $b = $this->upload->do_upload('video');
        $data_upload2 = $this->upload->data();
        $arr = array_pop($_POST);
      }



      if ($_FILES['video']['tmp_name']) {
        $_POST['video'] = $data_upload2['file_name'];
      }


      foreach ($_POST as $key => $value) {

        $_POST[$key] = $this->input->post($key);
      }

      $this->m_p->up_d('bannertwo', $_POST);
    }
    $data['setting'] = $this->m_p->se_a("bannertwo");
    $this->load->view(admin . "/bannerTwoSetting", $data);
  }

  public function bannerThreeSetting()
  {

    if (isset($_POST['test'])) {




      if ($_FILES['video']['tmp_name']) {
        $config['upload_path']         = './images/';
        $config['allowed_types']       = 'gif|jpg|png|mp4';
        $config['encrypt_name']       = TRUE;
        $config['max_size']          = '10240'; // 10 MB
        $this->upload->initialize($config);
        $b = $this->upload->do_upload('video');
        $data_upload2 = $this->upload->data();
        $arr = array_pop($_POST);
      }




      if ($_FILES['video']['tmp_name']) {
        $_POST['video'] = $data_upload2['file_name'];
      }


      foreach ($_POST as $key => $value) {

        $_POST[$key] = $this->input->post($key);
      }

      $this->m_p->up_d('bannerthree', $_POST);
    }
    $data['setting'] = $this->m_p->se_a("bannerthree");
    $this->load->view(admin . "/bannerThreeSetting", $data);
  }

  public function bannerFourSetting()
  {

    if (isset($_POST['test'])) {

      $config['upload_path']         = './images/';
      $config['allowed_types']       = 'gif|jpg|png';
      $config['encrypt_name']       = TRUE;
      $config['max_size']          = '10240'; // 10 MB
      $this->upload->initialize($config);
      $a = $this->upload->do_upload('img');
      $data_upload = $this->upload->data();
      $arr = array_pop($_POST);
      if ($a)
        $_POST['img'] = $data_upload['file_name'];

      foreach ($_POST as $key => $value) {
        $_POST[$key] = $this->input->post($key);
      }
      $this->m_p->up_d('bannerfour', $_POST);
    }
    $data['setting'] = $this->m_p->se_a("bannerfour");
    $this->load->view(admin . "/bannerFourSetting", $data);
  }

  public function topBarSetting()
  {

    if (isset($_POST['test'])) {

      $config['upload_path']         = './logo/';
      $config['allowed_types']       = 'gif|jpg|png';
      $config['encrypt_name']       = TRUE;
      $config['max_size']          = '10240'; // 10 MB
      $this->upload->initialize($config);
      $a = $this->upload->do_upload('logo');
      $data_upload = $this->upload->data();
      $arr = array_pop($_POST);
      if ($a)
        $_POST['logo'] = $data_upload['file_name'];

      foreach ($_POST as $key => $value) {
        $_POST[$key] = $this->input->post($key);
      }
      $this->m_p->up_d('settings', $_POST);
    }
    $data['setting'] = $this->m_p->se_a("settings");
    $this->load->view(admin . "/topBarSetting", $data);
  }

  public function emailConfig()
  {

    if (isset($_POST['protocol'])) {
      $this->m_p->up_d('email', $_POST);
    }
    $data['email'] = $this->m_p->se_a("email");
    $this->load->view(admin . "/emailConfig", $data);
  }


  public function welcomeEmail()
  {

    if (isset($_POST['wemail_name'])) {


      if ($_FILES['weo_image']['tmp_name']) {
        $config['upload_path']         = './images/';
        $config['allowed_types']       = 'gif|jpg|png';
        $config['encrypt_name']       = TRUE;
        $config['max_size']          = '10240'; // 10 MB
        $this->upload->initialize($config);
        $b = $this->upload->do_upload('weo_image');
        $data_upload = $this->upload->data();
        $arr = array_pop($_POST);
      }

      if ($_FILES['weo_one_image']['tmp_name']) {
        $config['upload_path']         = './images/';
        $config['allowed_types']       = 'gif|jpg|png';
        $config['encrypt_name']       = TRUE;
        $config['max_size']          = '10240'; // 10 MB
        $this->upload->initialize($config);
        $b = $this->upload->do_upload('weo_one_image');
        $data_upload1 = $this->upload->data();
        $arr = array_pop($_POST);
      }

      if ($_FILES['weo_two_image']['tmp_name']) {
        $config['upload_path']         = './images/';
        $config['allowed_types']       = 'gif|jpg|png';
        $config['encrypt_name']       = TRUE;
        $config['max_size']          = '10240'; // 10 MB
        $this->upload->initialize($config);
        $b = $this->upload->do_upload('weo_two_image');
        $data_upload2 = $this->upload->data();
        $arr = array_pop($_POST);
      }
      if ($_FILES['weo_three_image']['tmp_name']) {
        $config['upload_path']         = './images/';
        $config['allowed_types']       = 'gif|jpg|png';
        $config['encrypt_name']       = TRUE;
        $config['max_size']          = '10240'; // 10 MB
        $this->upload->initialize($config);
        $b = $this->upload->do_upload('weo_three_image');
        $data_upload3 = $this->upload->data();
        $arr = array_pop($_POST);
      }


      if ($_FILES['wet_image']['tmp_name']) {
        $config['upload_path']         = './images/';
        $config['allowed_types']       = 'gif|jpg|png';
        $config['encrypt_name']       = TRUE;
        $config['max_size']          = '10240'; // 10 MB
        $this->upload->initialize($config);
        $b = $this->upload->do_upload('wet_image');
        $data_upload4 = $this->upload->data();
        $arr = array_pop($_POST);
      }

      if ($_FILES['wet_sco_image']['tmp_name']) {
        $config['upload_path']         = './images/';
        $config['allowed_types']       = 'gif|jpg|png';
        $config['encrypt_name']       = TRUE;
        $config['max_size']          = '10240'; // 10 MB
        $this->upload->initialize($config);
        $b = $this->upload->do_upload('wet_sco_image');
        $data_upload5 = $this->upload->data();
        $arr = array_pop($_POST);
      }

      if ($_FILES['wet_sct_image']['tmp_name']) {
        $config['upload_path']         = './images/';
        $config['allowed_types']       = 'gif|jpg|png';
        $config['encrypt_name']       = TRUE;
        $config['max_size']          = '10240'; // 10 MB
        $this->upload->initialize($config);
        $b = $this->upload->do_upload('wet_sct_image');
        $data_upload6 = $this->upload->data();
        $arr = array_pop($_POST);
      }

      if ($_FILES['wet_scth_image']['tmp_name']) {
        $config['upload_path']         = './images/';
        $config['allowed_types']       = 'gif|jpg|png';
        $config['encrypt_name']       = TRUE;
        $config['max_size']          = '10240'; // 10 MB
        $this->upload->initialize($config);
        $b = $this->upload->do_upload('wet_scth_image');
        $data_upload7 = $this->upload->data();
        $arr = array_pop($_POST);
      }

      if ($_FILES['weo_image']['tmp_name']) {
        $_POST['weo_image'] = $data_upload['file_name'];
      }

      if ($_FILES['weo_one_image']['tmp_name']) {
        $_POST['weo_one_image'] = $data_upload1['file_name'];
      }
      if ($_FILES['weo_two_image']['tmp_name']) {
        $_POST['weo_two_image'] = $data_upload2['file_name'];
      }
      if ($_FILES['weo_three_image']['tmp_name']) {
        $_POST['weo_three_image'] = $data_upload3['file_name'];
      }

      if ($_FILES['wet_image']['tmp_name']) {
        $_POST['wet_image'] = $data_upload4['file_name'];
      }

      if ($_FILES['wet_sco_image']['tmp_name']) {
        $_POST['wet_sco_image'] = $data_upload5['file_name'];
      }

      if ($_FILES['wet_sct_image']['tmp_name']) {
        $_POST['wet_sct_image'] = $data_upload6['file_name'];
      }
      if ($_FILES['wet_scth_image']['tmp_name']) {
        $_POST['wet_scth_image'] = $data_upload7['file_name'];
      }

      foreach ($_POST as $key => $value) {
        $_POST[$key] = $this->input->post($key);
      }


      $this->m_p->up_d('email', $_POST);
    }
    $data['email'] = $this->m_p->se_a("email");
    $this->load->view(admin . "/welcomeEmail", $data);
  }


  public function promotionEmail()
  {

    if (isset($_POST['pw_color'])) {

      if ($_FILES['pe_img']['tmp_name']) {
        $config['upload_path']         = './images/';
        $config['allowed_types']       = 'gif|jpeg|jpg|png';
        $config['encrypt_name']       = TRUE;
        $config['max_size']          = '10240'; // 10 MB
        $this->upload->initialize($config);
        $b = $this->upload->do_upload('pe_img');
        $data_upload = $this->upload->data();
        $arr = array_pop($_POST);
      }

      if ($_FILES['pe_bn_img']['tmp_name']) {
        $config['upload_path']         = './images/';
        $config['allowed_types']       = 'gif|jpeg|jpg|png';
        $config['encrypt_name']       = TRUE;
        $config['max_size']          = '10240'; // 10 MB
        $this->upload->initialize($config);
        $b = $this->upload->do_upload('pe_bn_img');
        $data_upload = $this->upload->data();
        $arr = array_pop($_POST);
      }
      if ($_FILES['pet_img']['tmp_name']) {
        $config['upload_path']         = './images/';
        $config['allowed_types']       = 'gif|jpeg|jpg|png';
        $config['encrypt_name']       = TRUE;
        $config['max_size']          = '10240'; // 10 MB
        $this->upload->initialize($config);
        $b = $this->upload->do_upload('pet_img');
        $data_upload = $this->upload->data();
        $arr = array_pop($_POST);
      }

      if ($_FILES['pe_img']['tmp_name']) {
        $_POST['pe_img'] = $data_upload['file_name'];
      }

      if ($_FILES['pet_img']['tmp_name']) {
        $_POST['pet_img'] = $data_upload['file_name'];
      }

      if ($_FILES['pe_bn_img']['tmp_name']) {
        $_POST['pe_bn_img'] = $data_upload['file_name'];
      }


      foreach ($_POST as $key => $value) {
        $_POST[$key] = $this->input->post($key);
      }

    
      $this->m_p->up_d('email', $_POST);
    }
    $data['email'] = $this->m_p->se_a("email");
    $this->load->view(admin . "/promotionEmail", $data);
  }


  public function abandonEmail()
  {

    if (isset($_POST['abandon_name'])) {




      if ($_FILES['ab_img']['tmp_name']) {
        $config['upload_path']         = './images/';
        $config['allowed_types']       = 'gif|jpg|png';
        $config['encrypt_name']       = TRUE;
        $config['max_size']          = '10240'; // 10 MB
        $this->upload->initialize($config);
        $b = $this->upload->do_upload('ab_img');
        $data_upload = $this->upload->data();
        $arr = array_pop($_POST);
      }

      if ($_FILES['ab_img']['tmp_name']) {
        $_POST['ab_img'] = $data_upload['file_name'];
      }


      foreach ($_POST as $key => $value) {
        $_POST[$key] = $this->input->post($key);
      }


      $this->m_p->up_d('email', $_POST);
    }
    $data['email'] = $this->m_p->se_a("email");
    $this->load->view(admin . "/abandonEmail", $data);
  }


  public function abandonEmailTwo()
  {

    if (isset($_POST['abandontwo_name'])) {




      if ($_FILES['abtwo_img']['tmp_name']) {
        $config['upload_path']         = './images/';
        $config['allowed_types']       = 'gif|jpg|png';
        $config['encrypt_name']       = TRUE;
        $config['max_size']          = '10240'; // 10 MB
        $this->upload->initialize($config);
        $b = $this->upload->do_upload('abtwo_img');
        $data_upload = $this->upload->data();
        $arr = array_pop($_POST);
      }

      if ($_FILES['abtwo_img']['tmp_name']) {
        $_POST['abtwo_img'] = $data_upload['file_name'];
      }


      foreach ($_POST as $key => $value) {
        $_POST[$key] = $this->input->post($key);
      }


      $this->m_p->up_d('email', $_POST);
    }
    $data['email'] = $this->m_p->se_a("email");
    $this->load->view(admin . "/abandonEmailTwo", $data);
  }


  public function abandonEmailThree()
  {

    if (isset($_POST['abandonthree_name'])) {




      if ($_FILES['abthree_img']['tmp_name']) {
        $config['upload_path']         = './images/';
        $config['allowed_types']       = 'gif|jpg|png';
        $config['encrypt_name']       = TRUE;
        $config['max_size']          = '10240'; // 10 MB
        $this->upload->initialize($config);
        $b = $this->upload->do_upload('abthree_img');
        $data_upload = $this->upload->data();
        $arr = array_pop($_POST);
      }

      if ($_FILES['abthree_img']['tmp_name']) {
        $_POST['abthree_img'] = $data_upload['file_name'];
      }


      foreach ($_POST as $key => $value) {
        $_POST[$key] = $this->input->post($key);
      }


      $this->m_p->up_d('email', $_POST);
    }
    $data['email'] = $this->m_p->se_a("email");
    $this->load->view(admin . "/abandonEmailThree", $data);
  }



  public function abandonEmailFour()
  {

    if (isset($_POST['abandonfour_name'])) {




      if ($_FILES['abfour_img']['tmp_name']) {
        $config['upload_path']         = './images/';
        $config['allowed_types']       = 'gif|jpg|png';
        $config['encrypt_name']       = TRUE;
        $config['max_size']          = '10240'; // 10 MB
        $this->upload->initialize($config);
        $b = $this->upload->do_upload('abfour_img');
        $data_upload = $this->upload->data();
        $arr = array_pop($_POST);
      }

      if ($_FILES['abfour_img']['tmp_name']) {
        $_POST['abfour_img'] = $data_upload['file_name'];
      }


      foreach ($_POST as $key => $value) {
        $_POST[$key] = $this->input->post($key);
      }


      $this->m_p->up_d('email', $_POST);
    }
    $data['email'] = $this->m_p->se_a("email");
    $this->load->view(admin . "/abandonEmailFour", $data);
  }


  public function slidsBarSetting()
  {

    if (isset($_POST['test'])) {

      $config['upload_path']         = './logo/';
      $config['allowed_types']       = 'gif|jpg|png';
      $config['encrypt_name']       = TRUE;
      $config['max_size']          = '10240'; // 10 MB
      $this->upload->initialize($config);
      $a = $this->upload->do_upload('logo');
      $data_upload = $this->upload->data();
      $arr = array_pop($_POST);
      if ($a)
        $_POST['logo'] = $data_upload['file_name'];

      foreach ($_POST as $key => $value) {
        $_POST[$key] = $this->input->post($key);
      }
      $this->m_p->up_d('settings', $_POST);
    }
    $data['setting'] = $this->m_p->se_a("settings");
    $this->load->view(admin . "/slidsBarSetting", $data);
  }


  public function allbackgroundSetting()
  {

    if (isset($_POST['test'])) {


      if ($_FILES['checkout_img']['tmp_name']) {
        $config['upload_path']         = './images/';
        $config['allowed_types']       = 'gif|jpg|png';
        $config['encrypt_name']       = TRUE;
        $config['max_size']          = '10240'; // 10 MB
        $this->upload->initialize($config);
        $c = $this->upload->do_upload('checkout_img');
        $data_upload = $this->upload->data();
        $arr = array_pop($_POST);
      }

      if ($_FILES['checkout_img']['tmp_name']) {
        $_POST['checkout_img'] = $data_upload['file_name'];
      }

      foreach ($_POST as $key => $value) {
        $_POST[$key] = $this->input->post($key);
      }
      $this->m_p->up_d('settings', $_POST);
    }
    $data['setting'] = $this->m_p->se_a("settings");
    $this->load->view(admin . "/allbackgroundSetting", $data);
  }


  public function contactPage()
  {

    $data['menus'] = $this->m_p->s_a("mainmenu", array('active_status =' => 1, 'single =' => 1), FALSE, 0, array("*"), "serial", "ASC");

    if (isset($_POST['test'])) {


      $config['upload_path']         = './images/';
      $config['allowed_types']       = 'gif|jpg|png';
      $config['encrypt_name']       = TRUE;
      $config['max_size']          = '10240'; // 10 MB
      $this->upload->initialize($config);
      $a = $this->upload->do_upload('img');
      $data_upload = $this->upload->data();
      $arr = array_pop($_POST);
      if ($a)
        $_POST['img'] = $data_upload['file_name'];

      foreach ($_POST as $key => $value) {
        $_POST[$key] = $this->input->post($key);
      }
      $_POST['slug'] = toAscii($_POST['title']);


      $this->m_p->up_d('contact', $_POST);
    }
    $data['contact'] = $this->m_p->se_a("contact");
    $this->load->view(admin . "/contactPage", $data);
  }


  public function menuSettingTwo()
  {

    if (isset($_POST['test'])) {

      if ($_FILES['logo']['tmp_name']) {
        $config['upload_path']         = './logo/';
        $config['allowed_types']       = 'gif|jpg|png';
        $config['encrypt_name']       = TRUE;
        $config['max_size']          = '10240'; // 10 MB
        $this->upload->initialize($config);
        $a = $this->upload->do_upload('logo');
        $data_upload = $this->upload->data();
        $arr = array_pop($_POST);
      }


      if ($_FILES['cart_logo']['tmp_name']) {
        $config['upload_path']         = './logo/';
        $config['allowed_types']       = 'gif|jpg|png';
        $config['encrypt_name']       = TRUE;
        $config['max_size']          = '10240'; // 10 MB
        $this->upload->initialize($config);
        $b = $this->upload->do_upload('cart_logo');
        $data_upload2 = $this->upload->data();
        $arr = array_pop($_POST);
      }


      if ($_FILES['account_logo']['tmp_name']) {
        $config['upload_path']         = './logo/';
        $config['allowed_types']       = 'gif|jpg|png';
        $config['encrypt_name']       = TRUE;
        $config['max_size']          = '10240'; // 10 MB
        $this->upload->initialize($config);
        $b = $this->upload->do_upload('account_logo');
        $data_upload2 = $this->upload->data();
        $arr = array_pop($_POST);
      }

      if ($_FILES['logo']['tmp_name']) {
        $_POST['logo'] = $data_upload['file_name'];
      }


      if ($_FILES['cart_logo']['tmp_name']) {
        $_POST['cart_logo'] = $data_upload2['file_name'];
      }

      if ($_FILES['account_logo']['tmp_name']) {
        $_POST['account_logo'] = $data_upload2['file_name'];
      }


      foreach ($_POST as $key => $value) {

        $_POST[$key] = $this->input->post($key);
      }


      $this->m_p->up_d('settings', $_POST);
    }
    $data['setting'] = $this->m_p->se_a("settings");
    $this->load->view(admin . "/menuSettingTwo", $data);
  }

  public function delt($table, $id, $red, $tp = false)
  {
    $this->m_p->delete($table, array("id" => $id));

    $to = $tp === false ? "admin/" . $red : "admin/" . $red . "/" . $tp;

    if (!$this->input->is_ajax_request()) {
      redirect($to);
    }
    echo "1";
  }

  public function order_save()
  {
    foreach ($_POST as $key => $value) {
      $table = $key;
    }


    foreach ($_POST[$table] as $key => $value) {
      $this->m_p->up_d($table, array("position" => $key), array("id" => $value));
    }
  }


  public function csv()
  {

    $filename = "orders.csv";

    $delimiter = ";";

    $all = $this->m_p->sel("orders", array());

    $array[] = array(
      "Order_Date",
      "Order_Number",
      "Names_product",
      "Names_client",
      "Shipping Country",
      "Shipping State",
      "Shipping City",
      "Shipping Adresse",
      "Shipping Zip code",
      "Billing Email",
      "Shipping Phone",
      "Quantity",
      "Note"
    );

    foreach ($all as $key) {

      $prods = "";

      $qty = 0;

      $pcs = json_decode($key->products, TRUE);
      foreach ($pcs as $q) {

        $prods .= get_info("products", $q['id'], "title") . " / Quantity : " . $q['q'] . "\n";

        $qty += $q['q'];

        if (isset($q['options']) && $q['options'] != null) {
          $op = json_decode($q['options'], TRUE);
          if (!is_null($op)) {
            foreach ($op as $key1 => $value1) {
              $prods .= " -" . base64_decode(hex2bin($key1)) . " : " . $value1;
            }

            $prods .= "\n";
          }
        }
      }

      $array[] = array(
        date("d/m/Y", $key->date),
        $key->order_id,
        $prods,
        $key->name,
        $key->country,
        $key->state,
        $key->city,
        $key->address,
        $key->zipcode,
        $key->email,
        $key->tele,
        $qty,
        $key->note
      );
    }

    // open raw memory as file so no temp files needed, you might run out of memory though
    $f = fopen('php://memory', 'w');
    // loop over the input array
    foreach ($array as $line) {
      // generate csv lines from the inner arrays
      fputcsv($f, $line, $delimiter);
    }
    // reset the file pointer to the start of the file
    fseek($f, 0);
    // tell the browser it's going to be a csv file
    header('Content-Type: application/csv');
    // tell the browser we want to save it instead of displaying it
    header('Content-Disposition: attachment; filename="' . $filename . '";');
    // make php send the generated csv lines to the browser
    fpassthru($f);
  }


  public function customerCsv()
  {

    $filename = "customer.csv";

    $delimiter = ";";

    $all = $this->m_p->sel("orders", array());

    $array[] = array(
      "Order_Date",
      "Names",
      "Email",
      "Phone",
      "Country",
      "State",
      "City",
      "Adresse",
      "Zip code",
      "Note"
    );

    foreach ($all as $key) {

      $prods = "";

      $qty = 0;

      $pcs = json_decode($key->products, TRUE);
      foreach ($pcs as $q) {

        $prods .= get_info("products", $q['id'], "title") . " / Quantity : " . $q['q'] . "\n";

        $qty += $q['q'];

        if (isset($q['options']) && $q['options'] != null) {
          $op = json_decode($q['options'], TRUE);
          if (!is_null($op)) {
            foreach ($op as $key1 => $value1) {
              $prods .= " -" . base64_decode(hex2bin($key1)) . " : " . $value1;
            }

            $prods .= "\n";
          }
        }
      }



      $array[] = array(
        date("d/m/Y", $key->date),
        $key->name,
        $key->email,
        $key->tele,
        $key->country,
        $key->state,
        $key->city,
        $key->address,
        $key->zipcode,
        $key->note
      );
    }

    // open raw memory as file so no temp files needed, you might run out of memory though
    $f = fopen('php://memory', 'w');
    // loop over the input array
    foreach ($array as $line) {
      // generate csv lines from the inner arrays
      fputcsv($f, $line, $delimiter);
    }
    // reset the file pointer to the start of the file
    fseek($f, 0);
    // tell the browser it's going to be a csv file
    header('Content-Type: application/csv');
    // tell the browser we want to save it instead of displaying it
    header('Content-Disposition: attachment; filename="' . $filename . '";');
    // make php send the generated csv lines to the browser
    fpassthru($f);
  }

  /*****************************************************
   *            **	       *
   ***                     ***       **     **
   ** **          **	     ** **       **   **
   **   **         **	    **   **       ** **
   *********        **	   *********       ***
   ***********       **	  ***********     ** **
   **         **	**  **	 **         **   **   **
   **           **	*****	**           ** **     **

  Ajax Functions
   ******************************************************/

  public function approve_comment()
  {

    if (!$this->input->is_ajax_request()) {
      exit('No direct script access allowed');
    }

    if (isset($_POST['id'])) {
      $id = intval($this->input->post("id"));

      $this->m_p->up_d("reviews", array("ac" => 1), array("id" => $id));

      echo "1";
    }
  }

  public function search()
  {

    if (!$this->input->is_ajax_request()) {
      exit('No direct script access allowed');
    }

    if (isset($_POST['q'])) {

      $q = $this->input->post("q");

      $prds = $this->m_p->s_a("products", array("title LIKE " => $q . "%"), 10);

      $all = array();

      if (count($prds) == 0) {
        echo json_encode(array("success" => FALSE));
      } else {

        foreach ($prds as $key) {
          $all[] = $key;
        }

        echo json_encode($all, JSON_UNESCAPED_UNICODE);
      }
    }
  }

  public function addProductToOrder($id)
  {

    if (!$this->input->is_ajax_request()) {
      exit('No direct script access allowed');
    }

    $info = $this->m_p->s_a("orders", array("id" => $id), 1);

    foreach ($info as $key) {
      $prods = json_decode($key->products, TRUE);
    }

    foreach ($prods as $key => $value) {
      if ($value['id'] == $_POST['id'])
        unset($prods[$key]);
    }

    if (isset($_POST['qty'])) {

      $qty = (!empty($_POST['qty'])) ? $this->input->post("qty") : 1;

      $arr = array(
        "id" => $this->input->post("id"),
        "q" => $this->input->post("qty"),
        "options" => json_encode($_POST['option'] ?? [], JSON_UNESCAPED_UNICODE)
      );

      $prods[] = $arr;
    }

    $p = json_encode($prods, JSON_UNESCAPED_UNICODE);

    $this->m_p->up_d("orders", array("products" => $p), array("id" => $id));

    $info = $this->m_p->s_a("orders", array("id" => $id), 1);

    $this->load->view(admin . "/ajax", ["info" => $info]);
  }


  public function SlidsUpdate()
  {

    $data = $this->input->post('id');


    $dataInfo = explode(",", $data);
    $id = $dataInfo[1];
    $value = $dataInfo[0];


    $data = array(
      'position' => $value,
    );

    $update = $this->model_slids->update($data, $id);
    if ($update == true) {
      $response['success'] = true;
      $response['messages'] = 'Succesfully updated';
    } else {
      $response['success'] = false;
      $response['messages'] = 'Error in the database while updated the brand information';
    }
  }


  public function BarInfoSlidsUpdate()
  {

    $data = $this->input->post('id');


    $dataInfo = explode(",", $data);
    $id = $dataInfo[1];
    $value = $dataInfo[0];


    $data = array(
      'active_status' => $value,
    );

    $update = $this->db->where('id', $id);
    $this->db->update('barslids', $data);
    if ($update == true) {
      $response['success'] = true;
      $response['messages'] = 'Succesfully updated';
    } else {
      $response['success'] = false;
      $response['messages'] = 'Error in the database while updated the brand information';
    }
  }


  public function BarFiveUpdateActive()
  {

    $data = $this->input->post('id');


    $dataInfo = explode(",", $data);
    $id = $dataInfo[1];
    $value = $dataInfo[0];


    $data = array(
      'active_status' => $value,
    );

    $update = $this->db->where('id', $id);
    $this->db->update('bannerfive', $data);
    if ($update == true) {
      $response['success'] = true;
      $response['messages'] = 'Succesfully updated';
    } else {
      $response['success'] = false;
      $response['messages'] = 'Error in the database while updated the brand information';
    }
  }

  public function ProActive()
  {

    $data = $this->input->post('id');


    $dataInfo = explode(",", $data);
    $id = $dataInfo[1];
    $value = $dataInfo[0];


    $data = array(
      'active_status' => $value,
    );

    $update = $this->db->where('id', $id);
    $this->db->update('products', $data);
    if ($update == true) {
      $response['success'] = true;
      $response['messages'] = 'Succesfully updated';
    } else {
      $response['success'] = false;
      $response['messages'] = 'Error in the database while updated the brand information';
    }
  }

  public function CusActive()
  {

    $data = $this->input->post('id');


    $dataInfo = explode(",", $data);
    $id = $dataInfo[1];
    $value = $dataInfo[0];


    $data = array(
      'is_email_verified' => $value,
    );

    $update = $this->db->where('id', $id);
    $this->db->update('user_register', $data);
    if ($update == true) {
      $response['success'] = true;
      $response['messages'] = 'Succesfully updated';
    } else {
      $response['success'] = false;
      $response['messages'] = 'Error in the database while updated the brand information';
    }
  }


  public function slidersUpdateActive()
  {

    $data = $this->input->post('id');


    $dataInfo = explode(",", $data);
    $id = $dataInfo[1];
    $value = $dataInfo[0];


    $data = array(
      'active_status' => $value,
    );

    $update = $this->db->where('id', $id);
    $this->db->update('slider', $data);
    if ($update == true) {
      $response['success'] = true;
      $response['messages'] = 'Succesfully updated';
    } else {
      $response['success'] = false;
      $response['messages'] = 'Error in the database while updated the brand information';
    }
  }

  public function BannerFiveUpdateVo()
  {

    $id = $this->input->post('id');



    $data = array('video' => '');

    $update = $this->db->where('id', $id);
    $this->db->update('bannerfive', $data);
    if ($update == true) {
      $response['success'] = true;
      $response['messages'] = 'Succesfully updated';
    } else {
      $response['success'] = false;
      $response['messages'] = 'Error in the database while updated the brand information';
    }
  }


  public function BannerFiveUpdateImg()
  {

    $id = $this->input->post('id');



    $data = array('img' => '');

    $update = $this->db->where('id', $id);
    $this->db->update('bannerfive', $data);
    if ($update == true) {
      $response['success'] = true;
      $response['messages'] = 'Succesfully updated';
    } else {
      $response['success'] = false;
      $response['messages'] = 'Error in the database while updated the brand information';
    }
  }

  public function delete_comment()
  {

    if (!$this->input->is_ajax_request()) {
      exit('No direct script access allowed');
    }


    if (isset($_POST['id'])) {
      $id = intval($this->input->post("id"));

      $this->m_p->delete("reviews", array("id" => $id));

      echo "1";
    }
  }

  public function test()
  {

    if (!$this->input->is_ajax_request()) {
      exit('No direct script access allowed');
    }

    $id = $data['id'] = $this->input->post("id");

    $data['user'] = $this->input->post("user");

    $data['info'] = $this->m_p->s_a("packages", array("id" => $id), 1);

    $data['mats'] = $this->m_p->s_a("mat", array(), FALSE, 0, array("*"), "position", "ASC");

    $data['classroom'] = $this->m_p->s_a("classroom", array(), FALSE, 0, array("*"), "position", "ASC");

    $this->load->view("admin/test", $data);
  }



  public function targetSet()
  {


    if (isset($_POST['id'])) {
      $id = intval($this->input->post("id"));

      $this->m_p->delete("account", array("id" => $id));
    }


    if (isset($_POST['target'])) {


      foreach ($_POST as $key => $value) {
        $_POST[$key] = $this->input->post($key);
      }
      $_POST['dateat'] = date('Y-m-d\TH:i:s');

      $data['msg'] = true;
      $this->m_p->ins('account', $_POST);
    }

    redirect("admin");
  }




  public function datefilter()
  {
    $dateinfo =  $this->input->post('daterange') ? $this->input->post('daterange') : $_GET['daterange'];
    $date = explode("-", $dateinfo);

    $saa['dateinfo'] = $dateinfo;
    $startDate = date("Y-m-d", strtotime($date['0'])) . " 00:00:00";
    $startDate2 = date("Y-m-d", strtotime($date['0'])) . " 05:00:00";
    $endDate = date("Y-m-d", strtotime($date['1'])) . " 23:59:55";

    $data['startDate'] = $startDate;
    $data['endDate'] = $endDate;


    $data = $this->_getDataForChartsWidgets();
    // $widgetsData = $this->_dashboardWidgets();

    // $data['visitors_widget_data'] = $widgetsData['visitors'];
    // $data['pageReViews_widget_data'] = $widgetsData['pageReViews'];
    // $data['customers_widget_data'] = $widgetsData['customers'];
    // $data['returningCustomers_widget_data'] = $widgetsData['returningCustomers'];
    // $data['totalOrders_widget_data'] = $widgetsData['totalOrders'];
    // $data['minOrderValue_widget_data'] = $widgetsData['minOrderValue'];
    // $data['avgOrderValue_widget_data'] = $widgetsData['avgOrderValue'];
    // $data['maxOrderValue_widget_data'] = $widgetsData['maxOrderValue'];
    // $data['conversionRate_widget_data'] = $widgetsData['conversionRate'];



    $saa["saa_time"] = strtotime($startDate2);

    $data['results'] = $this->db->query("SELECT SUM(totalPrice) as total,id FROM orders where datetime >= '$startDate'  AND datetime <=  '$endDate'")->row();
    $data['todaytarget'] = $this->db->query("SELECT SUM(target) as target,id FROM account where dateat >= '$startDate'  AND dateat <=  '$endDate'")->row();

    if ($data['todaytarget']) {
      $data['target'] = $data['todaytarget']->target;
    } else {
      $data['target'] = '00';
    }

    $result = $this->db->query("SELECT * FROM orders where datetime >= '$startDate'  AND datetime <=  '$endDate' ")->result();

    //



    if ($data['results']) {
      $data['totla'] = number_format($data['results']->total);
    } else {
      $data['totla'] = '00';
    }



    $chart_data = '';
    foreach ($result as $rows) {

      $chart_data .= "{ date:'" . $rows->datetime . "',sale:" . $rows->totalPrice . ", Target:" . $rows->target . "}, ";
    }



    $data['chart_data'] = substr($chart_data, 0, -2);





    $thisMonth = strtotime("01-" . date("m-Y"));
    $thisYear = strtotime("01-01-" . date("Y"));

    $data['mo1'] = $this->m_p->get_num("products");
    $data['mo2'] = $this->m_p->get_num("orders", array("status" => 1));
    $data['mo3'] = $this->m_p->get_num("orders", array("status" => 5));
    $data['mo4'] = $this->m_p->get_num("reviews");
    $data['mo5'] = $this->m_p->get_num("orders");
    $data['mo6'] = $this->m_p->getTotal("orders", "totalPrice")["total"];
    $data['mo9'] = $this->m_p->getTotal("orders", "totalPrice", array("date > " => $thisMonth))["total"];
    $data['mo10'] = $this->m_p->getTotal("orders", "totalPrice", array("date > " => $thisYear))["total"];
    $data['mo7'] = $this->m_p->get_num("reviews");
    $data['mo8'] = $this->m_p->get_num("reviews");

    $data['cat'] = $this->m_p->s_a("orders", array(), 6);



    $monthss = array();

    for ($i = 0; $i < 12; $i++) {
      $m = strtotime("-$i month");
      $months[$i]['title'] = date("M", $m);
      $startMonth = strtotime("01-" . date("m-Y", $m));
      $endMonth = strtotime(date("t-m-Y 23:59:59", $m));
      $months[$i]['value'] = $this->m_p->getTotal("orders", "totalPrice", array("date > " => $startMonth, "date < " => $endMonth))["total"];
      // $months[$i]['value'] = array(
      // 	date("Y-m-d H:i:s", $startMonth),
      // 	date("Y-m-d H:i:s", $endMonth)
      // );

    }


    $months = $this->db->query("SELECT DATE(datetime) as title,totalPrice as value FROM orders where datetime >= '$startDate'  AND datetime <=  '$endDate'")->result();





    $date = date("Y-m-d");

    $data['months'] = json_decode(json_encode($months), true);


    // echo "<pre>";
    // print_r($data['months'] );

    // exit;

    $start = strtotime($startDate);
    $end = strtotime($endDate);
    $wh = "where date >= '$start'  AND date <=  '$end'";
    //exit(var_dump(array($start, $end, $wh)));

    $data['endsoon'] = $this->m_p->s_a("discounts", array("DATEDIFF(date, '$date') > " => 0), 6);
    $data['lastadd'] = $this->m_p->s_a("products", array(), 6);


    $data['allOrders'] = $this->m_p->qArrayRow("SELECT COUNT(o.id) as t FROM orders o WHERE date > $start AND date <= $end LIMIT 1")['t'];
    $data['allVisitors'] = $this->m_p->qArrayRow("SELECT COUNT(o.id) as t FROM counter o WHERE date > $start AND date <= $end LIMIT 1")['t'];



    $data['s'] = $this->m_p->qArrayRow("SELECT COUNT(c.id) as t, SUM(c.pageViews) as tpv FROM counter c $wh LIMIT 1");



    //$o['totalCostumers'] = $this->m_p->qArrayRow("SELECT COUNT(DISTINCT(o.tele)) as t FROM orders o $wh")['t'];

    $data['totalOrders'] = $this->m_p->qArrayRow("SELECT COUNT(o.id) as t FROM orders o $wh LIMIT 1")['t'];
    $data['totalCostumers'] = $this->m_p->qArrayRow("SELECT o.*, COUNT(*) AS t, SUM(is_returning) AS tr FROM ( SELECT MAX(date) AS date, tele, IF(COUNT(id) > 1, 1, 0) AS is_returning FROM orders GROUP BY tele) o $wh");

    $data['avgOrders'] = $this->m_p->qArrayRow("SELECT AVG(o.totalPrice) AS t FROM `orders` o  $wh")['t'];

    $data['maxOrders'] = $this->m_p->qArrayRow("SELECT MAX(o.totalPrice) AS t FROM `orders` o  $wh")['t'];

    $data['minOrders'] = $this->m_p->qArrayRow("SELECT MIN(o.totalPrice) AS t FROM `orders` o  $wh")['t'];


    $saa_start_date = gmdate("Y-m-d", $end);

    $saa_end_date = gmdate("Y-m-d", $start);



    $saa_orders_query_start = $this->m_p->qArrayRow("SELECT datetime AS date FROM orders o WHERE datetime LIKE '%$saa_end_date%' ORDER BY datetime ASC LIMIT 1")['date'];



    $saa_orders_query_end = $this->m_p->qArrayRow("SELECT datetime AS date FROM orders o WHERE datetime LIKE '%$saa_start_date%' ORDER BY datetime DESC LIMIT 1")['date'];





    $saa_counter_query_start = $this->m_p->qArrayRow("SELECT datetime AS date FROM counter c WHERE datetime LIKE '%$saa_end_date%' ORDER BY datetime ASC LIMIT 1")['date'];
    $saa_counter_query_end = $this->m_p->qArrayRow("SELECT datetime AS date FROM counter c WHERE datetime LIKE '%$saa_start_date%' ORDER BY datetime DESC LIMIT 1")['date'];

    $saa_orders_wh = "WHERE datetime BETWEEN '$saa_orders_query_start' AND '$saa_orders_query_end'";

    $saa_visitors_wh = "WHERE datetime BETWEEN '$saa_counter_query_start' AND '$saa_counter_query_end'";

    $saa_visitors = $this->m_p->SaaRowArray("SELECT * FROM counter c $saa_visitors_wh");

    //exit(var_dump(array($saa_visitors)));
    $saa_all_visitor_details = $this->m_p->qArrayRow("SELECT COUNT(id) AS visitors, SUM(pageViews) AS page_reviews FROM counter c");
    $saa_visitors_today = $this->m_p->qArrayRow("SELECT COUNT(id) AS visitors, SUM(pageViews) AS page_reviews FROM counter c WHERE datetime = '$saa_counter_query_start'");

    $saa_visitor_details = $this->m_p->SaaRowArray("SELECT COUNT(id) AS visitors, SUM(pageViews) AS page_reviews FROM counter c $saa_visitors_wh");
    $saa_orders = $this->m_p->SaaRowArray("SELECT * FROM orders $saa_orders_wh");
    $saa_order_details = $this->m_p->SaaRowArray("SELECT MAX(o.totalPrice) AS max_order, AVG(o.totalPrice) AS avg_order, MIN(o.totalPrice) AS min_order, COUNT(o.id) AS total_orders, SUM(o.totalPrice) AS total_price FROM orders o $saa_orders_wh");

    $saa_order_today = $this->m_p->qArrayRow("SELECT MAX(o.totalPrice) AS max_order, AVG(o.totalPrice) AS avg_order, MIN(o.totalPrice) AS min_order, COUNT(o.id) AS total_orders, SUM(o.totalPrice) AS total_price FROM orders o WHERE datetime =  '$saa_orders_query_start'");

    $saa_total_price = $this->m_p->qArrayRow("SELECT SUM(o.totalPrice) AS total_price FROM orders o");

    $saa['graph_data']['visitors'] = $saa_visitors;
    $saa['graph_data']['orders'] = $saa_orders;

    $division = $saa_all_visitor_details['visitors'];
    $visitors = $saa_visitor_details[0]->visitors;

    $visitors = ($visitors == 0) ? 1 : $visitors;

    $saa['visitors_percent'] = substr($visitors * 100 / $division, 0, 4);
    $saa['color1'] = (substr($saa_visitors_today['visitors'] * 100 / $division, 0, 4) < $saa['visitors_percent']) ? "#1cc88a" : "red";
    $saa['arrow1'] = (substr($saa_visitors_today['visitors'] * 100 / $division, 0, 4) < $saa['visitors_percent']) ? "↑" : "↓";

    $division = $saa_all_visitor_details['page_reviews'];

    $reviews = $saa_visitor_details[0]->page_reviews;

    $reviews = ($reviews == 0) ? 1 : $reviews;

    $saa['reviews_percent'] = substr($reviews * 100 / $division, 0, 4);

    $saa['color2'] = (substr($saa_visitors_today['page_reviews'] * 100 / $division, 0, 4) < $saa['reviews_percent']) ? "#1cc88a" : "red";
    $saa['arrow2'] = (substr($saa_visitors_today['page_reviews'] * 100 / $division, 0, 4) < $saa['reviews_percent']) ? "↑" : "↓";

    $max = $saa_order_details[0]->max_order;
    $data['maxOrders'] = $max;

    $min = $saa_order_details[0]->min_order;
    $data["minOrders"] = $min;

    $avg = $saa_order_details[0]->avg_order;
    $data['avgOrders'] = $avg;

    $division = $saa_total_price['total_price'];

    $max = ($max == 0) ? 1 : $max;
    $min = ($min == 0) ? 1 : $min;
    $avg = ($avg == 0) ? 1 : $avg;

    $saa["max_percent"] = substr($max * 100 / $division, 0, 4);
    $saa['min_percent'] = substr($min * 100 / $division, 0, 4);
    $saa['avg_percent'] = substr($avg * 100 / $division, 0, 4);

    $saa['color3'] = (substr($saa_order_today['max_order'] * 100 / $division, 0, 4) < $saa['max_percent']) ? "#1cc88a" : "red";
    $saa['arrow3'] = (substr($saa_order_today['max_order'] * 100 / $division, 0, 4) < $saa['max_percent']) ? "↑" : "↓";

    $saa['color4'] = (substr($saa_order_today['min_order'] * 100 / $division, 0, 4) < $saa['min_percent']) ? "#1cc88a" : "red";
    $saa['arrow4'] = (substr($saa_order_today['min_order'] * 100 / $division, 0, 4) < $saa['min_percent']) ? "↑" : "↓";

    $saa['color5'] = (substr($saa_order_today['avg_order'] * 100 / $division, 0, 4) < $saa['avg_percent']) ? "#1cc88a" : "red";
    $saa['arrow5'] = (substr($saa_order_today['avg_order'] * 100 / $division, 0, 4) < $saa['avg_percent']) ? "↑" : "↓";

    $data['saa_percent'] = $saa;


    $s = array();


    $fd = $this->m_p->qe_r("SELECT c.*, COUNT(c.source) AS t FROM counter c $wh GROUP BY c.source ORDER BY t DESC LIMIT 4 ");

    $tos = 0;

    foreach ($fd as $key) {

      $tos += $key->t;

      $s[] = array(
        "n" => $key->source,
        "v" => $key->t
      );
    }

    $s[] = array(
      "n" => "other",
      "v" => $data['allVisitors'] - $tos
    );




    $data["sources"] = $s;


    $startMonth = strtotime("01-" . date("m-Y"));

    $wh = "WHERE date >= $startMonth ";




    $sql = <<<EOD

SELECT
	o.*,
	COUNT(o.id) AS total,
	COUNT(IF(o.status = 0, 1, null)) AS tp,
	COUNT(IF(o.status = 1, 1, null)) AS tpaid,
	COUNT(IF(o.status = 2, 1, null)) AS tf,
	COUNT(IF(o.status = 3, 1, null)) AS tr,
	COUNT(IF(o.status > 4, 1, null)) AS tc
FROM
	orders o

GROUP BY
	o.id

EOD;

    $t = $this->m_p->qe_r($sql);

    $data = array_merge(array(
      "tp" => 0,
      "tpaid" => 0,
      "tf" => 0,
      "tr" => 0,
      "tc" => 0,
      "total" => 0
    ), $data);

    $prds = array();

    foreach ($t as $key) {
      $products = json_decode($key->products, TRUE);
      foreach ($products as $k) {
        if(isset($prds[$k['id']]))
          $prds[$k['id']] += $k['q'];
        else
          $prds[$k['id']] = $k['q'];
      }

      switch ($key->status) {
        case 0:
          $data['tp']++;
          break;
        case 1:
          $data['tpaid']++;
          break;
        case 2:
          $data['tf']++;
          break;
        case 3:
          $data['tr']++;
          break;
        case 4:
          $data['tc']++;
          break;
      }

      $data['total'] += $key->total;
    }

    $data['prods'] = $prds;

    $sql = <<<EOD

SELECT
	COUNT(o.id) AS total,
	SUM(o.totalPrice) AS er,
	o.country
FROM
	orders o


GROUP BY
	o.country
ORDER BY total DESC

LIMIT 5

EOD;

    $data['cities'] = $this->m_p->qe_r($sql);

    $this->load->view(admin . "/index.php", $data);
  }

  public function chartId($id)
  {

    $data = $this->_getDataForChartsWidgets();
    
    if ($id == 'today') {

      $date = date("Y-m-d");
    } elseif ($id == 'monthly') {

      $date = date("Y-m");
    } elseif ($id == 'yearly') {

      $date = '20';
    }

    if ($id == 'today') {

      $data['results'] = $this->db->query("SELECT SUM(totalPrice) as total,id FROM orders where datetime like '$date%' ")->row();
    } elseif ($id == 'monthly') {


      $data['results'] = $this->db->query("SELECT SUM(totalPrice) as total,id FROM orders where datetime like '$date%' GROUP BY MONTH(datetime)  ")->row();
    } elseif ($id == 'yearly') {


      $data['results'] = $this->db->query("SELECT SUM(totalPrice) as total,id FROM orders where datetime like '$date%' GROUP BY YEAR(datetime)  ")->row();
    }




    if ($id == 'today') {

      $data['todaytarget'] = $this->db->query("SELECT * FROM account where dateat like '$date%' ")->row();
    } elseif ($id == 'monthly') {

      $data['todaytarget'] = $this->db->query("SELECT SUM(target) as target,id,dateat FROM account where dateat like '$date%' GROUP BY MONTH(dateat) ")->row();
    } elseif ($id == 'yearly') {

      $data['todaytarget'] = $this->db->query("SELECT SUM(target) as target,id FROM account where dateat like '$date%' GROUP BY YEAR(dateat) ")->row();
    }






    if ($data['todaytarget']) {
      $data['target'] = $data['todaytarget']->target;
    } else {
      $data['target'] = '00';
    }



    $result = $this->db->query("SELECT * FROM orders where datetime like '$date%' ")->result();

    //


    if ($data['results']) {
      $data['totla'] = number_format($data['results']->total);
    } else {
      $data['totla'] = '00';
    }



    $chart_data = '';
    foreach ($result as $rows) {

      $chart_data .= "{ date:'" . $rows->datetime . "',sale:" . $rows->totalPrice . ", Target:" . $rows->target . "}, ";
    }



    $data['chart_data'] = substr($chart_data, 0, -2);



    $stoday = strtotime(date("Y-m") . "-01 00:00");
    $etoday = strtotime(date("Y-m") . "-28 23:59");

    $thisMonth = strtotime("01-" . date("m-Y"));
    $thisYear = strtotime("01-01-" . date("Y"));

    $data['mo1'] = $this->m_p->get_num("products");
    $data['mo2'] = $this->m_p->get_num("orders", array("status" => 1));
    $data['mo3'] = $this->m_p->get_num("orders", array("status" => 5));
    $data['mo4'] = $this->m_p->get_num("reviews");
    $data['mo5'] = $this->m_p->get_num("orders");
    $data['mo6'] = $this->m_p->getTotal("orders", "totalPrice")["total"];
    $data['mo9'] = $this->m_p->getTotal("orders", "totalPrice", array("date > " => $thisMonth))["total"];
    $data['mo10'] = $this->m_p->getTotal("orders", "totalPrice", array("date > " => $thisYear))["total"];
    $data['mo7'] = $this->m_p->get_num("reviews");
    $data['mo8'] = $this->m_p->get_num("reviews");

    $data['cat'] = $this->m_p->s_a("orders", array(), 6);



    $months = array();

    for ($i = 0; $i < 12; $i++) {
      $m = strtotime("-$i month");
      $months[$i]['title'] = date("M", $m);
      $startMonth = strtotime("01-" . date("m-Y", $m));
      $endMonth = strtotime(date("t-m-Y 23:59:59", $m));
      $months[$i]['value'] = $this->m_p->getTotal("orders", "totalPrice", array("date > " => $startMonth, "date < " => $endMonth))["total"];
      // $months[$i]['value'] = array(
      // 	date("Y-m-d H:i:s", $startMonth),
      // 	date("Y-m-d H:i:s", $endMonth)
      // );
    }



    $data['months'] = array_reverse($months);

    $data['endsoon'] = $this->m_p->s_a("discounts", array("DATEDIFF(date, '$date') > " => 0), 6);
    $data['lastadd'] = $this->m_p->s_a("products", array(), 6);

    $s = array();

    $wh = "WHERE date > $startMonth ";


    $data['allOrders'] = $this->m_p->qArrayRow("SELECT COUNT(o.id) as t FROM orders o WHERE date > $stoday AND date <= $etoday LIMIT 1")['t'];
    $data['allVisitors'] = $this->m_p->qArrayRow("SELECT COUNT(o.id) as t FROM counter o WHERE date > $stoday AND date <= $etoday LIMIT 1")['t'];



    $data['s'] = $this->m_p->qArrayRow("SELECT COUNT(c.id) as t, SUM(c.pageViews) as tpv FROM counter c $wh LIMIT 1");

    $data['totalOrders'] = $this->m_p->qArrayRow("SELECT COUNT(o.id) as t FROM orders o $wh LIMIT 1")['t'];

    //$o['totalCostumers'] = $this->m_p->qArrayRow("SELECT COUNT(DISTINCT(o.tele)) as t FROM orders o $wh")['t'];

    $data['totalCostumers'] = $this->m_p->qArrayRow("SELECT o.*, COUNT(*) AS t, SUM(is_returning) AS tr FROM ( SELECT MAX(date) AS date, tele, IF(COUNT(id) > 1, 1, 0) AS is_returning FROM orders GROUP BY tele) o $wh");

    $data['avgOrders'] = $this->m_p->qArrayRow("SELECT AVG(o.totalPrice) AS t FROM `orders` o  $wh")['t'];

    $data['maxOrders'] = $this->m_p->qArrayRow("SELECT MAX(o.totalPrice) AS t FROM `orders` o  $wh")['t'];

    $data['minOrders'] = $this->m_p->qArrayRow("SELECT MIN(o.totalPrice) AS t FROM `orders` o  $wh")['t'];

    $saa['graph_data']['orders'] = $this->m_p->SaaRowArray("SELECT * FROM orders $wh");
    $saa['graph_data']['visitors'] = $this->m_p->SaaRowArray("SELECT * FROM counter $wh");
    $data['saa_percent'] = $saa;
    $fd = $this->m_p->qe_r("SELECT c.*, COUNT(c.source) AS t FROM counter c $wh GROUP BY c.source ORDER BY t DESC LIMIT 4");

    $tos = 0;

    foreach ($fd as $key) {

      $tos += $key->t;

      $s[] = array(
        "n" => $key->source,
        "v" => $key->t
      );
    }

    $s[] = array(
      "n" => "other",
      "v" => $data['allVisitors'] - $tos
    );

    $data["sources"] = $s;

    $startMonth = strtotime("01-" . date("m-Y"));

    $wh = "WHERE date >= $startMonth ";




    $sql = <<<EOD

SELECT
	o.*,
	COUNT(o.id) AS total,
	COUNT(IF(o.status = 0, 1, null)) AS tp,
	COUNT(IF(o.status = 1, 1, null)) AS tpaid,
	COUNT(IF(o.status = 2, 1, null)) AS tf,
	COUNT(IF(o.status = 3, 1, null)) AS tr,
	COUNT(IF(o.status > 4, 1, null)) AS tc
FROM
	orders o
$wh

GROUP BY
	o.id

EOD;

    $t = $this->m_p->qe_r($sql);

    $data = array_merge(array(
      "tp" => 0,
      "tpaid" => 0,
      "tf" => 0,
      "tr" => 0,
      "tc" => 0,
      "total" => 0
    ), $data);

    $prds = array();

    foreach ($t as $key) {
      $products = json_decode($key->products, TRUE);
      foreach ($products as $k) {
        if (isset($prds[$k['id']]))
          $prds[$k['id']] += $k['q'];
        else
          $prds[$k['id']] = $k['q'];
      }

      switch ($key->status) {
        case 0:
          $data['tp']++;
          break;
        case 1:
          $data['tpaid']++;
          break;
        case 2:
          $data['tf']++;
          break;
        case 3:
          $data['tr']++;
          break;
        case 4:
          $data['tc']++;
          break;
      }

      $data['total'] += $key->total;
    }

    $data['prods'] = $prds;

    $sql = <<<EOD

SELECT
	COUNT(o.id) AS total,
	SUM(o.totalPrice) AS er,
	o.country
FROM
	orders o

$wh

GROUP BY
	o.country
ORDER BY total DESC

LIMIT 5

EOD;

    $data['cities'] = $this->m_p->qe_r($sql);

    $this->load->view(admin . "/index.php", $data);
  }


  /*****************************************************
   *            **	       *
   ***                     ***       **     **
   ** **          **	     ** **       **   **
   **   **         **	    **   **       ** **
   *********        **	   *********       ***
   ***********       **	  ***********     ** **
   **         **	**  **	 **         **   **   **
   **           **	*****	**           ** **     **
  End Ajax Functions
   ******************************************************/
}
