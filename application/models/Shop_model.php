<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Shop_model extends CI_Model {

		public function __construct() {
			parent::__construct();
			$this->load->database();
			$this->load->library('encryption');
		}
		
		public function get($table,$conditions = array())
		{
			if(!empty($conditions)){
				$this->db->where($conditions);
			}
			$result = $this->db->get($table);
      return $result->result_array();
		}
		
		public function seller_exists($phone){
			$this->db->where('phone', $phone);
			$this->db->where('is_delete', '0');
			$this->db->select('*');
			$this->db->from('sss_seller'); 
			$query = $this->db->get();

			return ($query->num_rows() > 0) ? $query->result_array() : false;
		}

		public function addSeller($data){
			$data = array( 
        'shop_name'	=>  $data['shop'], 
        'phone'=>  $data['mobile'], 
				'pin'	=>  $data['pin'],
        'password'	=>  $this->encryption->encrypt($data['password'])  
    	);
			$this->db->insert('sss_seller', $data);
			// $this->encryption->decrypt($ciphertext);

			return ($this->db->affected_rows() > 0) ? true : false;
		}

		public function seller_password($password){
			$this->db->where('password', $this->encryption->decrypt($password));
			$this->db->where('is_delete', '0');
			$this->db->select('*');
			$this->db->from('sss_seller'); 
			$query = $this->db->get();

			return ($query->num_rows() > 0) ? $query->result_array() : false;
		}

		public function insert_category($data)
		{
			$insert = array( 
        'name'	=>  $data['category_name'], 
        'description'=>  $data['category_desc'] 
			);
			$this->db->insert('sss_category', $insert);
			// $this->encryption->decrypt($ciphertext);

			return ($this->db->affected_rows() > 0) ? true : false;
		}

		public function get_cart_items($ip)
		{
			$table = 'sss_cart as cart';
			$this->db->where('cart.ip_address', $ip);
			$this->db->select('cart.id as cart_id, cart.ip_address, cart.item_id, cart.item_quantity, cart.delivery_charges, cart.item_price as cart_item_price, cart.line_tax, cart.total as car_line_total, product.id, product.seller_id , product.name as product_name, product.description, product.image_url, product.price, product.pieces, product.mrp, product.tax as tax_id, product.rem_quantity,category.id as category_id, category.name as category_name, category.description as category_description, taxes.percentage, seller.shop_name, seller.phone', false);
			$this->db->from($table);
			$this->db->join('sss_products as product', 'cart.item_id = product.id ','inner');
			$this->db->join('sss_category as category', 'cart.item_id = category.id ','left');
			$this->db->join('sss_tax as taxes', 'taxes.id = product.tax ','left');
			$this->db->join('sss_seller as seller', 'product.seller_id  = seller.id ','inner');
			
			$query = $this->db->get();
			return ($query->num_rows() > 0) ? $query->result_array() : array();
		}

		public function get_user_orders($user_id)
		{
			$data_array = array();
			$orders = $this->My_model->get('sss_orders', 
				array('buyer_id' => $user_id),
				array('id','desc')
			);

			if(count($orders) > 0){
				$data_array['orders'] = $orders;
				for($i = 0; $i < count($data_array['orders']); $i++)
				{
					// $current_order = $data_array['orders'][$i];
					$order_items = $this->get_order_items($data_array['orders'][$i]['id']);//order items
				
					
					
					$data_array['orders'][$i]['order_items']['confirmed'] = $order_items;//push order items in current order array index

					$data_array['orders'][$i]['order_items']['cancelled'] = array();//blank array for cancelled orders if any

					//seperate cancelled orders if any
					foreach($data_array['orders'][$i]['order_items']['confirmed'] as $key => $value)
					{
						if($value['status'] == 3)
						{
							array_push($data_array['orders'][$i]['order_items']['cancelled'], $value);
							unset($data_array['orders'][$i]['order_items']['confirmed'][$key]);//Delete from confirmed
						}
					}

				}
			}

			
			
			return $data_array;
		}

		public function get_order_items($order_id)
		{

			$table = 'sss_order_items as order';
			$this->db->where('order.order_id', $order_id);
			$this->db->select('order.id as order_items_id, order.product_id, order.quantity, order.order_price as line_item_price, order.buyer_id, order.status, order.status_change_count, order.cancel_reason, product.seller_id, product.name, product.price, product.description, product.pieces, product.seller_id, product.name, product.price, product.pieces, seller.name as seller_name, seller.shop_name, seller.phone, seller.pin', false);
			$this->db->from($table);
			$this->db->join('sss_products as product', 'order.product_id = product.id ','inner');
			$this->db->join('sss_seller as seller', 'seller.id = product.seller_id ','inner');

			$query = $this->db->get();
			return ($query->num_rows() > 0) ? $query->result_array() : array();
		}

		//Seller Order products data
		public function seller_order_products($seller_id, $order_id)
		{
			$table = 'sss_products as product';
			$this->db->where('product.seller_id', $seller_id);
			$this->db->where('order_items.order_id', $order_id);
			$this->db->select('product.id as product_id, order_items.quantity as order_quantity, product.rem_quantity, order_items.status,order_items.order_id as main_order_id, order_items.order_price as line_total', false);
			$this->db->from($table);
			$this->db->join('sss_order_items as order_items', 'order_items.product_id = product.id ','inner');

			$query = $this->db->get();
			$result = $query->result_array();

			return count($result) > 0 ? $result :  array();
		}

		

		public function update_main_order_status($order_id)
		{
			$order_items = $this->My_model->get('sss_order_items', array(
				'order_id' => $order_id
			));

			$confirmed = array();
			$cancelled = array();
			
			foreach($order_items as $item)
			{
				if($item['status'] == 2)
				{
					array_push($confirmed, $item['id']);
				}
				elseif($item['status'] == 3)
				{
					array_push($cancelled, $item['id']);
				}
			}
	
			if(count($cancelled) <= 0)
			{
				//all sellers confirmed order
				$status = 2;
			}
			elseif(count($cancelled) > 0 && count($confirmed) < 1)
			{
				//Both sellers cancelled the order
				$status = 3;
			}
			elseif(count($cancelled) > 0 && count($confirmed) > 0)
			{
				//Some Seller cancelled order
				$status = 4;
			}
			else
			{
				$status = 1;
			}

			$update_order = $this->My_model->update('sss_orders', array(
				'id' => $order_id
			), array(
				'status' => $status,
				'update_date' => date ("Y-m-d H:i:s", time())
			));


			if($update_order)
			{
				return true;
			}
			else{
				return false;
			}

		}


		public function get_all_product_data($items,$current_page)
		{
			$table = 'sss_products as product';
			$this->db->where('product.is_delete', 0);
			$this->db->select('product.id, product.name as product_name, product.description,  product.total_quantity, product.rem_quantity, product.price,product.pieces, category.id as category_id, category.name as category_name, category.description as category_description, seller.id as seller_id, seller.shop_name', false);
			$this->db->from($table);
			$this->db->join('sss_category as category', 'product.category_id = category.id ','inner');
			$this->db->join('sss_seller as seller', 'product.seller_id  = seller.id ','inner');
			 
			$skip = ($current_page - 1) * $items;
			$this->db->limit($items,$skip);

			$query = $this->db->get();
			return ($query->num_rows() > 0) ? $query->result_array() : false;

		}

  }

?>