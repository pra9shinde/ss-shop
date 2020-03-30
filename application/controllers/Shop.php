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

		$data['products'] = $this->shop_model->get_all_product_data();
		
		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('all_products',$data);
		$this->load->view('templates/footer');

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
