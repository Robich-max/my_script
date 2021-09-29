<?php
if(!defined('BASEPATH')) exit();
/**
* @author hobrt-programming.com
*/
class M_p extends CI_Model
{
	public function s_a($tab, $wer=array(), $limit=10, $start=0,$arr = array('*'),$order = 'id', $ord_t = "DESC")
	{
		$se = implode(',', $arr);
		$this->db->select($se);
		$this->db->from($tab);
		$this->db->where($wer);
		if($limit !== FALSE)
			$this->db->limit($limit,$start);
		$this->db->order_by($order,$ord_t);
		$ret = $this->db->get();
		//echo $this->db->last_query();
		//exit;
		return $ret->result();
	}
	public function s_cart($tab, $wer=array(), $limit=10, $start=0,$arr = array('*'),$order = 'id', $ord_t = "DESC")
	{
		$se = implode(',', $arr);
		$this->db->select($se);
		$this->db->from($tab);
		$this->db->where_in("id", $wer);
		$this->db->order_by($order,$ord_t);
		$ret = $this->db->get();
		//echo $this->db->last_query();
		return $ret->result();
	}
	public function s_am($user1, $user2)
	{
		$this->db->select("*");
		$this->db->from("messages");
		$this->db->where(array("user_to" => $user2, "user_from" => $user1));
		$this->db->or_where(array("user_from" => $user2));
		$this->db->where(array("user_to" => $user1));
		$this->db->order_by("id");
		$ret = $this->db->get();
		//echo $this->db->last_query();
		return $ret->result();
	}
	public function s_msgs($user1)
	{
		$this->db->select("*");
		$this->db->from("messages");
		$this->db->where(array("user_to" => $user1));
		$this->db->order_by("id");
		$this->db->limit(10);
		$this->db->group_by("user_from");
		$ret = $this->db->get();
		//echo $this->db->last_query();
		return $ret->result();
	}
	public function allMessages($user1, $u, $gropby)
	{
		$this->db->select("*");
		$this->db->from("messages");
		$this->db->where(array($u => $user1));
		$this->db->order_by("id");
		$this->db->limit(100);
		$this->db->group_by($gropby);
		$ret = $this->db->get();
		//echo $this->db->last_query();
		return $ret->result();
	}
	public function messages_ad($limit = 10, $start = 0)
	{
		$this->db->select("*, MIN(vu) AS see");
		$this->db->from("umessages");
		$this->db->order_by("vu", "ACS");
		$this->db->order_by("id", "DESC");
		$this->db->group_by("user");
		if($limit == "total")
			return $this->db->get()->num_rows();
		$this->db->limit($limit, $start);
		$ret = $this->db->get();

		//echo $this->db->last_query();
		return $ret->result();
	}
	public function num_unread()
	{
		$this->db->select("*");
		$this->db->from("umessages");
		$this->db->where(array("vu" => 0));
		$this->db->group_by("user");
		$ret = $this->db->get();
		//echo $this->db->last_query();
		return $ret->num_rows();
	}
	public function s_msgs_num($user1)
	{
		$this->db->select("*");
		$this->db->from("messages");
		$this->db->where(array("user_to" => $user1, "vu" => "0"));
		$this->db->order_by("id");
		$this->db->group_by("user_from");
		$res = $this->db->get();
		//echo $this->db->last_query();
		return $res->num_rows();
	}
	public function ins($tab,$arr)
	{
		$sql = $this->db->insert_string($tab,$arr);
		$ins = $this->db->query($sql);
		if ($ins)
			return $this->db->insert_id();
		else
			return FALSE;
	}
	public function up_d($tab,$arr,$wer='1 = 1')
	{
		$sql = $this->db->update_string($tab,$arr,$wer);
		$up = $this->db->query($sql);
		if ($up)
			return TRUE;
		else
			return FALSE;
	}
	public function get_t($m, $y, $d = 0)
	{
		$user = is_login();
		$res = $this->db->select("views_t.*, COUNT(views_t.id) AS vtotal")
				 ->from("views_t")
				 ->join("topics", "views_t.topic = topics.id")
				 ->where(array("topics.user" => $user, "views_t.m" => $m, "views_t.y" => $y))
				 ->group_by("views_t.d")
				 ->get();
		return $res->result();
	}
	public function get_faves($limit = 10, $start = 0)
	{
		$user = login();
		$res = $this->db->select("materials.*")
				 ->from("materials")
				 ->join("faves", "materials.id = faves.mat")
				 ->where(array("faves.user" => $user, "materials.ac" => 1, "materials.de" => 0))
				 ->group_by("faves.id")
				 ->limit($limit, $start)
				 ->get();
		return $res->result();
	}
	public function get_faves_num()
	{
		$user = login();
		$res = $this->db->select("materials.*")
				 ->from("materials")
				 ->join("faves", "materials.id = faves.mat")
				 ->where(array("faves.user" => $user, "materials.ac" => 1, "materials.de" => 0))
				 ->group_by("faves.id")
				 ->get();
		return $res->num_rows;
	}
	public function get_pur($limit = 10, $start = 0)
	{
		$user = login();
		$res = $this->db->select("materials.*, subs.dated, subs.date AS date1")
				 ->from("materials")
				 ->join("subs", "materials.id = subs.mat")
				 ->where(array("subs.user" => $user))
				 ->group_by("subs.id")
				 ->order_by("subs.id", "DESC")
				 ->limit($limit, $start)
				 ->get();
		return $res->result();
	}
	public function get_sales($limit = 10, $start = 0)
	{
		$user = login();
		$res = $this->db->select("materials.*, subs.dated, subs.date AS date1, subs.user AS user1")
				 ->from("materials")
				 ->join("subs", "materials.id = subs.mat")
				 ->where(array("materials.user" => $user))
				 ->group_by("subs.id")
				 ->order_by("subs.id", "DESC")
				 ->limit($limit, $start)
				 ->get();
		return $res->result();
	}
	public function get_all_sales($limit = 10, $start = 0)
	{
		$res = $this->db->select("materials.*, subs.dated, subs.date AS date1, subs.user AS user1, subs.id AS id1")
				 ->from("materials")
				 ->join("subs", "materials.id = subs.mat")
				 ->group_by("subs.id")
				 ->order_by("subs.id", "DESC")
				 ->limit($limit, $start)
				 ->get();
		return $res->result();
	}
	public function get_l_6m()
	{
		$user = is_login();
		$res = $this->db->select("views_t.*, COUNT(views_t.id) AS vtotal")
				 ->from("views_t")
				 ->join("topics", "views_t.topic = topics.id")
				 ->where(array("topics.user" => $user, "views_t.m" => $m, "views_t.y" => $y, "views_t.date" => "DATE_SUB(now(), INTERVAL 6 MONTH"))
				 ->group_by("views_t.m")
				 ->get();
		return $res->result();
	}
	public function get_t_c($m, $y, $d = 0)
	{
		$user = is_login();
		$res = $this->db->select("views_t.*, COUNT(views_t.id) AS vtotal")
				 ->from("views_t")
				 ->join("topics", "views_t.topic = topics.id")
				 ->where(array("topics.user" => $user, "views_t.m" => $m, "views_t.y" => $y))
				 ->group_by("views_t.country")
				 ->get();
		return $res->result();
	}
	public function get_num_c($id)
	{
		$res = $this->db->select("COUNT(comments.id) AS vtotal")
				->from("comments")
				->join("topics", "comments.topic_id = topics.id")
				->where(array("topics.f" => $id))
				->get();
		return $res->result()[0]->vtotal;
	}

	public function cred_to($user)
	{
		$is = $this->db->select("*")->from("withrow")->where(array("user" => $user))->limit(1)->order_by("id", "DESC")->get();
		$tdate = date("Y-m-d");
		if($is->num_rows() > 0) {
			foreach ($is->result() as $key) {
				$date = $key->date;
			}
			$res = $this->db->select("COUNT(views_t.id) AS vtotal")
					->from("views_t")
					->join("topics", "views_t.topic = topics.id")
					->where(array("topics.user" => $user, "views_t.date > " => $date, "views_t.date < " => $tdate))
					->get();
			return $res->result()[0]->vtotal;
		}
		$res = $this->db->select("COUNT(views_t.id) AS vtotal")
					->from("views_t")
					->join("topics", "views_t.topic = topics.id")
					->where(array("topics.user" => $user, "views_t.date < " => $tdate))
					->get();
		return $res->result()[0]->vtotal;
	}
	public function get_t_c_a($m, $y, $d = 0)
	{
		$res = $this->db->select("views_t.*, COUNT(views_t.id) AS vtotal")
				 ->from("views_t")
				 ->join("topics", "views_t.topic = topics.id")
				 ->where(array("views_t.m" => $m, "views_t.y" => $y))
				 ->group_by("views_t.country")
				 ->get();
		return $res->result();
	}
	public function rep($tab = "views_t", $data = array())
	{
		$this->db->replace($tab, $data);
	}
	public function get_num_tot($m, $y, $u)
	{
		$res = $this->db->select("COUNT(views_t.id) AS total")
				 ->from("views_t")
				 ->join("topics", "views_t.topic = topics.id")
				 ->where(array("topics.user" => $u, "views_t.m" => $m, "views_t.y" => $y))
				 ->get();
		$rs = $res->result();
		foreach ($rs as $key) {
			return $key->total;
		}
	}
	public function get_num_tota($m, $y)
	{
		$res = $this->db->select("COUNT(views_t.id) AS total")
				 ->from("views_t")
				 ->join("topics", "views_t.topic = topics.id")
				 ->where(array("views_t.m" => $m, "views_t.y" => $y))
				 ->get();
		$rs = $res->result();
		foreach ($rs as $key) {
			return $key->total;
		}
	}
	public function get_msgs($id, $tp = 1)
	{
		if($tp == 1)
		{
			$this->db->select("msg.*,IFNULL(( SELECT MAX(vu) FROM replies WHERE replies.msg = msg.id AND replies.user <> $id ), 0) AS tt, users.username, COUNT(replies.id) AS totr", false)
				->from("msg")
				->join("replies", "msg.id = replies.msg", "left")
				->join("users", "msg.user = users.id", "left");
			$this->db->where("msg.uto", $id);
			$this->db->group_by("msg.id");
			$this->db->order_by("tt", "DESC");
			$this->db->order_by("msg.id", "DESC");
			$res = $this->db->get();
			return $res->result();
		}
		else {
			$this->db->select("msg.*,IFNULL(( SELECT MAX(vu) FROM replies WHERE replies.msg = msg.id AND replies.user <> $id ), 0) AS tt, users.username, COUNT(replies.id) AS totr", FALSE)
				->from("msg")
				->join("replies", "msg.id = replies.msg", "left")
				->join("users", "msg.uto = users.id", "left");
			$this->db->where("msg.user", $id);
			$this->db->group_by("msg.id");
			$this->db->order_by("tt", "DESC");
			$this->db->order_by("msg.id", "DESC");
			$res = $this->db->get();
		//echo $this->db->last_query();
			return $res->result();
		}

	}
	public function get_cats($id = false)
	{
		$this->db->select("cat.*,COUNT(adv.id) AS totalAdv")
			->from("cat")
			->join("adv", "cat.id = adv.cat", "left");
		if($id !== false)
			$this->db->where("cat.id", $id);
		$this->db->group_by("cat.id");
		$res = $this->db->get();
		return $res->result();

	}
	public function get_like_adv($cat, $city, $id)
	{
		$this->db->select("*")
			->from("adv")
			->where("cat = $cat OR city = $city")
			->where("acc", 1)
			->where("id <> $id");
		$res = $this->db->get();
		return $res->result();
	}
	public function get_citys()
	{
		$this->db->select("citys.*,COUNT(adv.id) AS totalAdv")
			->from("citys")
			->join("adv", "citys.id = adv.city", "left")
			->group_by("citys.id");
		$res = $this->db->get();
		return $res->result();

	}
	public function get_sub_cats($id, $limit = 50)
	{
		$this->db->select("sub_cat.*,COUNT(adv.id) AS totalAdv")
			->from("sub_cat")
			->join("adv", "sub_cat.id = adv.sub_cat", "left")
			->where("sub_cat.cat", $id)
			->group_by("sub_cat.id")
			->limit($limit, 0);
		$res = $this->db->get();
		return $res->result();

	}
	public function se_a($tab ,$arr = array('*'))
	{
		$se = implode(',', $arr);
		$this->db->select($se);
		$this->db->from($tab);
		$ret = $this->db->get();
		return $ret->result();
	}
	public $ret;
	public function get_info($tab,$id=false,$se = "*")
	{

		$this->db->select($se);
		$this->db->from($tab);
		if($id)
			$this->db->where('id',$id);
		$qr = $this->db->get();
		if($se == "*")
			return $qr->result();
		else
		{
			$res = $qr->result();
			foreach ($res as $key) {
				$this->ret = $key->$se;
			}
			return $this->ret;
		}
	}
	public function get_last_byp($tab, $col)
	{
		$this->db->select("*");
		$this->db->from($tab);
		$this->db->order_by("position", "ACS");
		$qr = $this->db->get();
		

		$res = $qr->result();
		foreach ($res as $key) {
			$ret = $key->$col;
		}
		return $ret;
		
	}
	public function sel($tab,$wer=array())
	{
		$this->db->select('*');
		$this->db->from($tab);
		$this->db->where($wer);
		$this->db->order_by("id", "DESC");
		$ret = $this->db->get();
		return $ret->result();
	}
	public function get_num($tab,$wer=array())
	{
		$this->db->select('id');
		$this->db->from($tab);
		$this->db->where($wer);
		$res = $this->db->count_all_results();
		return $res;
	}
	public function delete($tab,$wer = array())
	{
		if(count($wer) == 0)
		{
			$query = $this->db->query("DELETE FROM $tab ");
		}
		else
		{
			$query = $this->db->delete($tab, $wer);
		}
		if($query)
			return TRUE;
	}
	public function delet($tab,$wer = array())
	{
		$this->db->delete($tab, $wer);
	}
	public function login($username ,$password)
	{
		$user = $this->db->escape($username);
		$password = _hash($password);
		$qr = $this->db->query("SELECT * FROM users WHERE username = $user AND password = '$password' OR email = $user AND password = '$password'");
		$login = $qr -> num_rows();
		if($login > 0)
		{
			$info = $qr->result();
			foreach ($info as $key) {
				$id = $key->id;
			}
			if($this->input->post('remember_me') == 1)
			{
				$this->session->sess_expiration = 60 * 60 * 24 * 30;
			}
			$arr = array("id" => $id);
			$this->session->set_userdata('logged_in',$arr);
			return TRUE;
		}
		else
			return "<div class='alert alert-danger'>خطاء في البيانات الرجاء إعادة المحاولة</div>";
	}
	public function db_hobrt($f,$s)
	{
		return $this->db->$f($s);
	}
	public function rec_pass($email)
	{
		$is = $this->m_p->get_num("users","email = '$email'");
		if($is == 0)
		{
			return 'هدا الإيميل غير مسجل في الموقع .';
		}else
		{
			do {
			$c = getkey();
			} while($this->m_p->get_num("users","fpass = '$c'") != 0);
			$arr = array(
				"fpass" => $c
				);
			$this->up_d("users",$arr,"email = '$email'");
			$name = $this->m_p->s_a("users","email = '$email'",1,0);
			foreach ($name as $key) {
				$nn = $key->username;
			}
			$site = $this->m_p->get_info('setting',false,'title');
			$sub = "إسترجاع كلمة السر";
			$msg = '<html>
<head>
	<title></title>
</head>
<body>
مرحبا '.$nn.'
لقد طلبت إسترجاع كلمتك السرية في موقع '.$site.'
كود إسترجاع كلمة المرور <b style="font-size:16"><a>'.$c.'</a></b>
</body>
</html>';
			$url = parse_url(base_url());
			$fro = "noreplay@".$url['host'];
			$this->email->from($fro, base_url());
			$this->email->to($email);
			$this->email->subject($sub);
			$this->email->message($msg);
			$this->email->set_mailtype('html');
			$this->email->send();
			//return '<div class="alert alert-success"> تم إرسال رابط إسترجاع كلمتك السرية </div>';
			return 1;
		}
	}
	public function escape($i)
	{
		return $this->db->escape($i);
	}


	public function escape_like($i)
	{
		return $this->db->escape_like_str($i);
	}

	public function qe($q)
	{
		$e = $this->db->query($q);
	}
	public function get_replies($id = false)
	{
		$this->db->select("replies.*,users.username, users.img")
			->from("replies")
			->join("users", "replies.user = users.id", "left");
		$this->db->where("replies.msg", $id);
		$res = $this->db->get();
		return $res->result();

	}
	public function get_replieso($id = false)
	{
		$this->db->select("replieso.*,users.username, users.img")
			->from("replieso")
			->join("users", "replieso.user = users.id", "left");
		$this->db->where("replieso.orders", $id);
		$res = $this->db->get();
		return $res->result();

	}
	public function qe_r($q)
	{
		$e = $this->db->query($q);
		return $e->result();
	}

	public function qArrayRow($q)
	{
		$e = $this->db->query($q);
		return $e->row_array(0);
	}

    public function SaaRowArray($q)
    {
        $e = $this->db->query($q);
        return $e->result();
    }

	public function qe_rn($q)
	{
		$e = $this->db->query($q);

		foreach ($e->result() as $key) {
			return $key->numTotal;
		}

	}


	public function getSorting($sorting, $pricerange, $cat = FALSE)

	{
		$this->db->select("products.*,subcat.id sid,subcat.cat_id,cats.id as cid, (price - price * discount / 100) AS disp");
		$this->db->from("products");
		$this->db->join('subcat', 'subcat.id = products.subcat', 'right outer'); 
		$this->db->join('cats', 'cats.id = subcat.cat_id', 'right outer'); 


		switch ($sorting) {
			case 'popularity':
				
				if($pricerange ==  200)
				{
					$this->db->having(array("disp >" => 200));
				}elseif($pricerange != "") {

					$min = explode("-", $pricerange)[0];
					$max = explode("-", $pricerange)[1];

					$this->db->having(array("disp >" => $min, "disp <=" => $max));

				}

				$this->db->order_by("id", "DESC");

				break;
			
			case 'lowtohigh':

				if($pricerange ==  200)
				{
					$this->db->having(array("disp >" => 200));
				}elseif($pricerange != "") {



					$min = explode("-", $pricerange)[0];
					$max = explode("-", $pricerange)[1];

					$this->db->having(array("disp >" => $min, "disp <=" => $max));

				}
				
				$this->db->order_by("disp", "ACS");

				break;
			
			case 'highttolow':
				

				if($pricerange ==  200)
				{
					$this->db->having(array("disp >" => 200));
				}elseif($pricerange != "") {

					$min = explode("-", $pricerange)[0];
					$max = explode("-", $pricerange)[1];

					$this->db->having(array("disp >" => $min, "disp <=" => $max));

				}
				
				$this->db->order_by("disp", "DESC");

				break;
			
			default:

				if($pricerange ==  200)
				{
					$this->db->having(array("disp >" => 200));
				}elseif($pricerange != "") {

					$min = explode("-", $pricerange)[0];
					$max = explode("-", $pricerange)[1];

					$this->db->having(array("disp >" => $min, "disp <=" => $max));

				}
				
				$this->db->order_by("id", "DESC");

				break;
		}


		if($cat != FALSE && $cat == "discount")
		{
			
			$this->db->where(array("discount > " => 0));
		}elseif($cat != FALSE) {
			$this->db->where(array("cats.id" => $cat));
		}
      // $ret = $this->db->get();
// 		echo "<pre>";
// print_r($ret->result());
// exit;
		$ret = $this->db->get();
		//echo $this->db->last_query();
		return $ret->result();


	}

	public function getSortingSub($sorting, $pricerange, $cat = FALSE)

	{
		$this->db->select("products.*,subcat.id sid,subcat.cat_id,cats.id as cid, (price - price * discount / 100) AS disp");
		$this->db->from("products");
		$this->db->join('subcat', 'subcat.id = products.subcat', 'right outer'); 
		$this->db->join('cats', 'cats.id = subcat.cat_id', 'right outer'); 


		switch ($sorting) {
			case 'popularity':
				
				if($pricerange ==  200)
				{
					$this->db->having(array("disp >" => 200));
				}elseif($pricerange != "") {

					$min = explode("-", $pricerange)[0];
					$max = explode("-", $pricerange)[1];

					$this->db->having(array("disp >" => $min, "disp <=" => $max));

				}

				$this->db->order_by("id", "DESC");

				break;
			
			case 'lowtohigh':

				if($pricerange ==  200)
				{
					$this->db->having(array("disp >" => 200));
				}elseif($pricerange != "") {



					$min = explode("-", $pricerange)[0];
					$max = explode("-", $pricerange)[1];

					$this->db->having(array("disp >" => $min, "disp <=" => $max));

				}
				
				$this->db->order_by("disp", "ACS");

				break;
			
			case 'highttolow':
				

				if($pricerange ==  200)
				{
					$this->db->having(array("disp >" => 200));
				}elseif($pricerange != "") {

					$min = explode("-", $pricerange)[0];
					$max = explode("-", $pricerange)[1];

					$this->db->having(array("disp >" => $min, "disp <=" => $max));

				}
				
				$this->db->order_by("disp", "DESC");

				break;
			
			default:

				if($pricerange ==  200)
				{
					$this->db->having(array("disp >" => 200));
				}elseif($pricerange != "") {

					$min = explode("-", $pricerange)[0];
					$max = explode("-", $pricerange)[1];

					$this->db->having(array("disp >" => $min, "disp <=" => $max));

				}
				
				$this->db->order_by("id", "DESC");

				break;
		}


		if($cat != FALSE && $cat == "discount")
		{
			
			$this->db->where(array("discount > " => 0));
		}elseif($cat != FALSE) {
			$this->db->where(array("subcat.id" => $cat));
		}
      // $ret = $this->db->get();
// 		echo "<pre>";
// print_r($ret->result());
// exit;
		$ret = $this->db->get();
		//echo $this->db->last_query();
		return $ret->result();


	}

	public function getTotal($table, $field, $w = array()) {

		$this->db->select("SUM($field) AS total, COUNT(id) AS c");
		$this->db->from($table);
		$this->db->where($w);
		$this->db->limit(1);
		$ret = $this->db->get();
		return $ret->row_array();

	}

	
	function totalSales($id)
	{
		$all = $this->qe_r("SELECT * FROM orders WHERE products LIKE '%\"".$id."\"%' ");
		//echo $this->db->last_query();
		$totalSales = 0;
		foreach ($all as $key) {
			$i = json_decode($key->products, TRUE);

			foreach ($i as $k) {
				if($k['id'] == $id)
					$totalSales += $k["q"];
			}
		}
		return $totalSales;
	}

}



/* End of file m_p.php */
/* Location ./application/models/m_p.php */