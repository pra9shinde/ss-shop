<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct() {
		parent::__construct();
		$this->load->model('Shop_model','shop_model');
	}

	public function index()
	{
		$total_records = 0;
		
		$page = isset($_GET['page']) ? $_GET['page'] : 1;
		$items_per_page = 6;
		$total_records = $this->My_model->get_total_count('sss_products',array('is_delete' => 0));
		$data['products'] = $this->shop_model->get_all_product_data($items_per_page,$page);

		$data['pagination'] = array(
			'current_page' => $page,
			'has_next_page' => $items_per_page * $page < $total_records ? true : false,
			'has_previous_page' => $page > 1 ? true : false,
			'next_page' => $page + 1,
			'previous_page' => $page - 1,
			'last_page' => ceil($total_records / $items_per_page)
		);
		

		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('all_products',$data);
		$this->load->view('templates/footer');

	}

	public function cart($ip)
	{
		$data['cart_items'] = $this->shop_model->get_cart_items($ip);
		
		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('cart',$data);
		$this->load->view('templates/footer');
		
	}

	public function get_cart($ip)
	{
		$check_ip = $this->My_model->get('sss_cart',array('ip_address' => strval($ip)));
		$cart = ['cart' => count($check_ip), 'status' => 'success'];
		echo json_encode($cart);
	}

	public function add_to_cart($id)
	{
		$item_exists = $this->My_model->get('sss_cart',array('ip_address' => strval($this->input->post('ip_address')), 'item_id' => strval($id)));
		$item_details = $this->My_model->get('sss_products', array('id' => $id, 'is_delete' => 0));

		if(count($item_exists) < 1)
		{
			//item doesnt exists add item to cart
			$add_cart = $this->My_model->insert('sss_cart', array(
				'ip_address' => strval($this->input->post('ip_address')),
				'item_id' => strval($id),
				'item_quantity' => strval(1),
				'delivery_charges' => strval(0),
				'item_price' => $item_details[0]['price']
			));
		}

		$items_count = $this->My_model->get_total_count('sss_cart',array('ip_address' => strval($this->input->post('ip_address'))));

		$cart = ['cart' => $items_count, 'status' => 'success'];
		echo json_encode($cart);
	}

	public function remove_from_cart($id)
	{
		$delete_item = $this->My_model->delete('sss_cart', array(
			'ip_address' => strval($this->input->post('ip_address')),
			'item_id' => strval($id)
		));

		$items_count = $this->My_model->get_total_count('sss_cart',array('ip_address' => strval($this->input->post('ip_address'))));

		$cart = ['cart' => $items_count, 'status' => 'success'];
		echo json_encode($cart);
	}

	public function update_cart_quantity($id)
	{
		$item_details = $this->My_model->get('sss_products',array('id' => $id));
		$item_price = $item_details[0]['price'];
		$cart_line_total = floatval($item_price) * intval($this->input->post('new_quantity'));

		$update_quantity = $this->My_model->update('sss_cart', 
			array('item_id' => strval($id), 'ip_address' => strval($this->input->post('ip_address'))),
			array('item_quantity' => strval($this->input->post('new_quantity')), 
						'item_price' => strval($cart_line_total)
				 		)
		);

		$cart = ['line_total' => strval($cart_line_total),'status' => 'success'];
		echo json_encode($cart);
	}

	public function products_config()
	{
		if($this->session->has_userdata('user'))
		{
			$data['categories'] = $this->My_model->get('sss_category');
			$this->load->view('templates/header');
			$this->load->view('templates/menu');
			$this->load->view('products_config',$data);
			$this->load->view('templates/footer');
		}
		else
		{
			$this->load->view('login');
		}
	}

	public function register()
	{
		if($this->input->server('REQUEST_METHOD') != 'POST') {
			return $this->output
			->set_content_type('application/json')
			->set_status_header(200)
			->set_output(json_encode(array(
					'type' => 'error',
					'message' => 'Failed - Invalid Request!'
			)));
		}

		$this->form_validation->set_rules('shop', 'Shop Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('mobile', 'Mobile No.', 'trim|required|numeric|max_length[10]|xss_clean');
		$this->form_validation->set_rules('pin', 'Shop Pincode', 'trim|required|numeric|max_length[6]|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|xss_clean');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[6]|xss_clean');
		$this->form_validation->set_rules('password', 'Password Mismatch', 'required|matches[confirm_password]');

		if( !$this->form_validation->run() ) {
			return $this->output
			->set_content_type('application/json')
			->set_status_header(200)
			->set_output(json_encode(array(
					'type' => 'error',
					'message' => validation_errors()
			)));
		}

		$seller_exists = $this->shop_model->seller_exists($this->input->post('mobile'));
		if($seller_exists){
			return $this->output
				->set_content_type('application/json')
				->set_status_header(200)
				->set_output(json_encode(array(
						'type' => 'error',
						'message' => 'Mobile no. already used.'
				)));
		}

		$status = $this->shop_model->addSeller($this->input->post());

		if(!$status) { 
			return $this->output
			->set_content_type('application/json')
			->set_status_header(200)
			->set_output(json_encode(array(
					'type' => 'error',
					'message' => 'Operation failed. please try again later'
			)));
		}

		return $this->output
		->set_content_type('application/json')
		->set_status_header(200)
		->set_output(json_encode(array(
				'type' => 'success',
				'message' => 'Seller registered successfully.'
		)));


	}

	public function login()
	{
		if($this->input->server('REQUEST_METHOD') != 'POST') {
			return $this->output
			->set_content_type('application/json')
			->set_status_header(200)
			->set_output(json_encode(array(
					'type' => 'error',
					'message' => 'Failed - Invalid Request!'
			)));
		}

		$this->form_validation->set_rules('mobile_login', 'Mobile No.', 'trim|required|numeric|max_length[10]|xss_clean');
		$this->form_validation->set_rules('password_login', 'Password', 'trim|required|min_length[6]|xss_clean');

		if( !$this->form_validation->run() ) {
			return $this->output
			->set_content_type('application/json')
			->set_status_header(200)
			->set_output(json_encode(array(
					'type' => 'error',
					'message' => validation_errors()
			)));
		}

		$seller_exists = $this->shop_model->seller_exists($this->input->post('mobile_login'));
		if(!$seller_exists){
			return $this->output
				->set_content_type('application/json')
				->set_status_header(200)
				->set_output(json_encode(array(
						'type' => 'error',
						'message' => 'No such user, Please register new.'
				)));
		}

		$password_match = $this->shop_model->seller_password($this->input->post('password_login'));
		if(!$password_match){
			return $this->output
				->set_content_type('application/json')
				->set_status_header(200)
				->set_output(json_encode(array(
						'type' => 'error',
						'message' => 'Wrong Password'
				)));
		}
		
		//Set Session
		$this->session->set_userdata('user', $seller_exists[0]['id']);
		
		return $this->output
				->set_content_type('application/json')
				->set_status_header(200)
				->set_output(json_encode(array(
						'type' => 'success',
						'message' => 'Login Successfull',
						'redirect' => base_url().'Shop/products_config'
				)));
	}

	public function seller()
	{
		$this->load->view('login');
	}


}
