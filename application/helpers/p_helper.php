<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
/**
* @author hobrt.me
* @file p_helper.php
* @package hobrtEcom
* @link hobrt.me
* @copyright hobrt.me 2018 => 2019
*
**/
if(!function_exists('_hash'))
{
	function _hash($password)
	{
		$pass = "IttIhAdyHobrt";
		$pass2 = "hobrt-programming.com";
		return sha1($pass.$password.$pass2);
	}
}



if(!function_exists('is_login'))
{
	function is_login($t = "logged_in")
	{
		$CI = & get_instance();
		$info = $CI->session->userdata($t);
		if(!$info)
			return FALSE;
		else
			return $info['id'];
	}
}

if(!function_exists('load_lang'))
{
	function load_lang()
	{
		$CI = & get_instance();
		$info = $CI->session->userdata("lang");
		if(!$info)
			$lang = "french";
		else
			$lang = $info['lang'];
			
			
		$CI->lang->load('master', $lang);
		$CI->config->set_item('language', $lang);

	}
}

function get_gravatar( $email, $s = 80, $d = 'mp', $r = 'g', $img = false, $atts = array() ) {
    $url = 'https://www.gravatar.com/avatar/';
    $url .= md5( strtolower( trim( $email ) ) );
    $url .= "?s=$s&d=$d&r=$r";
    if ( $img ) {
        $url = '<img src="' . $url . '"';
        foreach ( $atts as $key => $val )
            $url .= ' ' . $key . '="' . $val . '"';
        $url .= ' />';
    }
    return $url;
}


if(!function_exists('load_admin_lang'))
{
	function load_admin_lang()
	{
		$CI = & get_instance();
		$info = $CI->session->userdata("lang");
		if(!$info)
			$lang = "english";
		else
			$lang = $info['lang'];
		$CI->lang->load('admin', $lang);
		$CI->config->set_item('language', $lang);

	}
}


if(!function_exists('login'))
{
	function login()
	{
		$CI = & get_instance();
		$info = $CI->ion_auth->logged_in();
		if(!$info)
			return FALSE;
		else
			return $CI->ion_auth->user()->row()->id;
	}
}

if(!function_exists('is_admin'))
{
	function is_admin()
	{
		return is_login("admin_login");
	}
}


if(!function_exists('page_a'))
{
	function page_a($total,$url,$uri = 3,$nb = 20)
	{
		$config = array();
        $config["base_url"] = base_url().$url;
        $config["total_rows"] = $total;
        $config["per_page"] = $nb;
        $config["uri_segment"] = $uri;
        $config['full_tag_open'] = "<ul class='pagination'>";
		$config['full_tag_close'] ="</ul>";
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li><a class='active'>";
		$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
		$config['next_tag_open'] = "<li>";
		$config['next_tagl_close'] = "</li>";
		$config['prev_tag_open'] = "<li>";
		$config['prev_tagl_close'] = "</li>";
		$config['first_tag_open'] = "<li>";
		$config['first_tagl_close'] = "</li>";
		$config['last_tag_open'] = "<li>";
		$config['last_tagl_close'] = "</li>";
		$config['last_link'] = "الأخيرة";
		$config['first_link'] = "الاولى";
		$config['next_link'] = "»";
		$config['prev_link'] = "«";
		return $config;
	}
}

if(!function_exists("short_text"))
{
	function short_text($input, $maxWords, $maxChars) 
	{
		$words = preg_split('/\s+/', $input);
		$words = array_slice($words, 0, $maxWords);
		$words = array_reverse($words);
		$chars = 0;
		$truncated = array();
		while(count($words) > 0)
		{
			$fragment = trim(array_pop($words));
			$chars += strlen($fragment);
			if($chars > $maxChars) break;
			$truncated[] = $fragment;
		}
		$result = implode(" ", $truncated);
		return strip_tags($result . ($input == $result ? ' '  : ' ...'));
	}
}
if(!function_exists('toAscii'))
{
	function toAscii($string, $force_lowercase = true, $anal = false) {
	$strip = array("~", "`", "!", "@", "#", "$", "%", "^", "&", "*", "(", ")", "_", "=", "+", "[", "{", "]",
				   "}", "\\", "|", ";", ":", "\"", "'", "&#8216;", "&#8217;", "&#8220;", "&#8221;", "&#8211;", "&#8212;",
				   "â€”", "â€“", ",", "<", ".", ">", "/", "?");
	$clean = trim(str_replace($strip, "", strip_tags($string)));
	$clean = preg_replace('/\s+/', "-", $clean);
	$clean = ($anal) ? preg_replace("/[^a-zA-Z0-9]/", "", $clean) : $clean ;
	return ($force_lowercase) ?
		(function_exists('mb_strtolower')) ?
			mb_strtolower($clean, 'UTF-8') :
			strtolower($clean) :
		$clean;
	}
}

if(!function_exists('add_thumb'))
{
	function add_thumb($va ,$t = '_m')
	{
		if(preg_match('/(,)+/', $va))
		{
			$r = explode(',', $va);
			$va = $r[0];
		}
		$a = explode('.', $va);
		$a[0] = $a[0].$t;
		$va = implode('.', $a);
		return $va;
	}
}


if(!function_exists('get_info'))
{
	function get_info($tab, $id, $col)
	{
		$CI = & get_instance();
		return $CI->m_p->get_info($tab, $id, $col);
	}
}
if(!function_exists('setting'))
{
	function setting($p)
	{
		$CI = & get_instance();
		return $CI->m_p->get_info("settings", FALSE, $p);
	}
}
if(!function_exists('email_text'))
{
	function email_text($p)
	{
		$CI = & get_instance();
		return $CI->m_p->get_info("email_templates", FALSE, $p);
	}
}
if(!function_exists('close_website'))
{
	function close_website()
	{
		$CI = & get_instance();
		if(setting("close_website") == 0)
		{
			redirect("close");
		}
	}
}


if(!function_exists('dd'))
{
	function dd($v = array())
	{
		echo "<pre>";
		print_r($v);
		echo "</pre>";
	}
}


if(!function_exists('add_visitor'))
{
	function add_visitor()
	{
		$CI = & get_instance();

		$ip = $CI->input->ip_address();

		if ($CI->agent->is_browser())
		{
			$tp = "desktop";
		}
		elseif ($CI->agent->is_robot())
		{
			$tp = "robot";
		}
		elseif ($CI->agent->is_mobile())
		{
			$tp = "mobile";
		}
		else
		{
			$tp = 'Unknown';
		}

		$ref = $CI->agent->referrer();

		$date = strtotime(date("Y-m-d"));

		$arr = array(
			"date" => $date,
			"device" => $tp,
			"ip" => $ip
		);

		$isAlready = $CI->m_p->s_a("counter", $arr, 1);
		if(count($isAlready) > 0) {
// 			foreach ($isAlready as $key) {
// 				$id = $key->id;
// 				$pageViews = $key->pageViews + 1;
// 			}
			
			$id = $isAlready[0]->id;
			$i=0;
			$i=$i+1;
			$pageViews = $isAlready[0]->pageViews+$i;
			$CI->m_p->up_d("counter", array("pageViews" => $pageViews), array("id" => $id));

		}else {

			$arr['pageViews'] = 1;
			$arr['source'] = $ref;

			$CI->m_p->ins("counter", $arr);
		}
	}
}

if(!function_exists('show_reviews')) {

	function show_reviews($t) {
		$rt = "";

		for ($i=1; $i <= 5; $i++) {
			if($i <= $t)
				$rt.='<span><i class="fa fa-star starColor"></i></span>';
			else
				$rt.='<span><i class="fa fa-star-o starColor "></i></span>';
		}

		echo $rt;

	}

}

if(!function_exists('get_vote_avg'))
{
	function get_vote_avg($id)
	{
		$CI = & get_instance();
		$tt = $CI->m_p->qe_r("SELECT *, AVG(vote) AS av FROM reviews WHERE product = '$id'");
		foreach ($tt as $key) {
			return floor($key->av);
		}
	}
}


    
if(!function_exists('status'))
{
	function status($v = FALSE)
	{

		$status = array(
			0 => "Pending",
			1 => "Paid",
			2 => "Fulfilled",
			3 => "Refund",
			4 => "Canceled",
		);

		return $v === FALSE ? $status : $status[$v];
	}
}

function ad_perm()
{
	$ar = array(
		1 	=> array("title" => "المنتوجات", "url" => "products"),
		5 	=> array("title" => "الطلبات", "options" => array(
				array("title" => "الكل", "url" => "requests"),
				array("title" => "بإنتظار التأكيد", "url" => "requests1"),
				array("title" => "بإنتظار الشحن", "url" => "requests2"),
				array("title" => "تم الإرسال", "url" => "requests3"),
				array("title" => "تم إلغاء الطلب", "url" => "requests/0"),
				array("title" => "تم الإستلام", "url" => "requests/5")
			)
		),
		10 	=> array("title" => "الخصومات" , "url" => "discounts"), //options
		12 	=> array("title" => "الاقسام", "url" => "cat"),
		11 	=> array("title" => "المدن", "url" => "cities"),
		2 	=> array("title" => "المدراء", "url" => "admins"),
		13 	=> array("title" => "إعدادات الموقع", "url" => "setting"),
	);
	return $ar;
}



	/**
	 * Date_arabic
	 *
	 * Returns an Date en arabic.  This is a helper function
	 *
	 * @access	public
	 * @param	int	time in seconds
	 * @return	string
	 */
	if(!function_exists("data_arabic"))
	{
		function date_arabic($sec)
		{
			$days = array("الأحد","الاثنين","الثلاثاء","الأربعاء","الخميس","الجمعة","السبت");
			$months = array("","يناير","فبراير","مارس","إبريل","مايو","يونيو","يوليو","اغسطس","سبتمبر","اكتوبر","نوفمبر","ديسمبر");
			$date = getdate($sec);
			return $days[$date['wday']].' '.$date['mday'].' '.$months[$date['mon']].' '.$date['year'];
		}
	}


/**/
/**/