<?php 

class Discount_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
	
	public function code_exist($code){
		
		
		$this->db->where('discount_code', $code);
        $query = $this->db->get('discounts_coupon');
		
		
		if ($query->num_rows() > 0){
	        return true;
	    }
	    else{
	        return false;
	    }
		
	}
	public function ins_disc($arr)
	{
		
		/* 	 echo "<pre>";
			print_r($arr);
			echo "</pre>";
			//die; 			
			*/
			
			$arr['start_date_time'] = $arr['start_date']." ". $arr['start_time'];
			$arr['end_date_time'] = $arr['end_date']." ". $arr['end_time'];
			
		$tab ="discounts_coupon";
			
		 $sql = $this->db->insert_string($tab,$arr);
		$ins = $this->db->query($sql);
		if ($ins)
			return $this->db->insert_id();
		else
			return FALSE; 
	}
	
	
	
	public function get_discount_info($id){
		$this->db->where('id', $id);
        $query = $this->db->get('discounts_coupon');		
		return $result = $query->row_array();
		
	}
	
	public function get_column_arr(){
		
		$data = array(
		'percnt_type' => '',
		'discount_value' => '',
		'applies_to' => '',
		'applies_specific_val' => '',
		'countries' => '',
		'selected_countries_val' => '',
		'exclude_shipping' => '',
		'min_req' => '',
		'min_purchase_amount_val' => '',
		'min_purchase_qty_val' => '',
		'customer_buys' => '',
		'min_qty' => '',
		'min_amnt' => '',
		'min_get_qty' => '',
		'specific_buy_val' => '',
		'specific_gets_val' => '',
		'discount_customer' => '',
		'eligibility' => '',
		'specific_group_customer_val' => '',
		'specific_customer_val' => '',
		'limit_number' => '',
		'limit_number_val' => '',
		'limit_to_one' => '',
		'start_date' => '',
		'end_date_chk' => '',
		'end_date' => '',
		'add_discount' => '',
		'update_discount' => ''
		);
		
		return $data;
		
	}
	
	public function update_discount($id,$arr){
		$tab ="discounts_coupon";
		
		$data = $this->get_column_arr();
		
		/* echo "<pre>";
		print_r($data);
		echo "</pre>"; */
		 $this->db->where('id', $id);
		$this->db->where('discount_code', $arr['discount_code']);
        $this->db->update($tab, $data);
		
		$this->db->where('id', $id);
		$this->db->where('discount_code', $arr['discount_code']);
        $this->db->update($tab, $arr);
		 
		 return true; 
		
	}
	
	

}