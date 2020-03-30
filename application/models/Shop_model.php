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

		public function get_all_product_data()
		{
			$table = 'sss_products as product';
			$this->db->where('product.is_delete', 0);
			$this->db->select('product.id, product.name as product_name, product.description,  product.total_quantity, product.rem_quantity, product.price,product.pieces, category.id as category_id, category.name as category_name, category.description as category_description, seller.id as seller_id, seller.shop_name', false);
			$this->db->from($table);
			$this->db->join('sss_category as category', 'product.category_id = category.id ','inner');
			$this->db->join('sss_seller as seller', 'product.seller-id  = seller.id ','inner');

			$query = $this->db->get();
			return ($query->num_rows() > 0) ? $query->result_array() : false;

		}

  }

?>