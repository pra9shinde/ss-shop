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
			$this->db->select('cart.id as cart_id, cart.ip_address, cart.item_id, cart.item_quantity, cart.delivery_charges, cart.item_price as cart_item_price, product.id, product.seller_id , product.name as product_name, product.description, product.image_url, product.price, product.pieces, product.rem_quantity,category.id as category_id, category.name as category_name, category.description as category_description, seller.shop_name, seller.phone', false);
			$this->db->from($table);
			$this->db->join('sss_products as product', 'cart.item_id = product.id ','inner');
			$this->db->join('sss_category as category', 'cart.item_id = category.id ','left');
			$this->db->join('sss_seller as seller', 'product.seller_id  = seller.id ','inner');
			
			$query = $this->db->get();
			return ($query->num_rows() > 0) ? $query->result_array() : array();
		}

		public function get_user_orders($user_id)
		{
			$data_array = array();
			$orders = $this->My_model->get('sss_orders', array('buyer_id' => $user_id));


			if(count($orders) > 0){
				$data_array['orders'] = $orders;
				// print_r($data_array['orders']);exit;

				for($i = 0; $i < count($data_array['orders']); $i++)
				{
					// $current_order = $data_array['orders'][$i];

					$order_items = $this->get_order_items($data_array['orders'][$i]['id']);//order items
					$data_array['orders'][$i]['order_items'] = $order_items;//push order items in current order array index
				}

			}
			
			return $data_array;
		}

		public function get_order_items($order_id)
		{

			$table = 'sss_order_items as order';
			$this->db->where('order.order_id', $order_id);
			$this->db->select('order.id as order_items_id, order.product_id, order.quantity, order.order_price as line_item_price, product.seller_id, product.name, product.price, product.pieces, product.seller_id, product.name, product.price, product.pieces', false);
			$this->db->from($table);
			$this->db->join('sss_products as product', 'order.product_id = product.id ','inner');

			$query = $this->db->get();
			return ($query->num_rows() > 0) ? $query->result_array() : array();
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