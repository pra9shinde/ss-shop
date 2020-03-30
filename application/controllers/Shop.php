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
		$this->load->view('login');
	}

	public function products_config()
	{
		if($this->session->has_userdata('user'))
		{
			$data['categories'] = $this->shop_model->get('sss_category');
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

	public function add_category()
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

		$this->form_validation->set_rules('category_name', 'Category Name', 'trim|required|xss_clean');

		if( !$this->form_validation->run() ) {
			return $this->output
			->set_content_type('application/json')
			->set_status_header(200)
			->set_output(json_encode(array(
					'type' => 'error',
					'message' => validation_errors()
			)));
		}

		$insert_category = $this->shop_model->insert_category($this->input->post());
		
		if(!$insert_category) { 
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
				'message' => 'Product Category Added Successfully.'
		)));

	}

	public function add_product()
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

		$this->form_validation->set_rules('prod_name', 'Product Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('prod_category', 'Product Category', 'trim|required|xss_clean');
		$this->form_validation->set_rules('prod_pieces', 'Product Category', 'trim|numeric|required|xss_clean');
		$this->form_validation->set_rules('prod_quantity', 'Product Category', 'trim|numeric|required|xss_clean');
		$this->form_validation->set_rules('prod_price', 'Product Category', 'trim|numeric|required|xss_clean');

		if( !$this->form_validation->run() ) {
			return $this->output
			->set_content_type('application/json')
			->set_status_header(200)
			->set_output(json_encode(array(
					'type' => 'error',
					'message' => validation_errors()
			)));
		}
		

		//Validate File
		if (isset($_FILES['prod_image']) && $_FILES['prod_image']['size'] != 0) 
		{
			
			$allowedExts = array("jpeg", "jpg", "png", "JPG", "JPEG", "PNG");
			$allowedTypes = array(IMAGETYPE_PNG, IMAGETYPE_JPEG, IMAGETYPE_GIF);
			$extension = pathinfo($_FILES["prod_image"]["name"], PATHINFO_EXTENSION);
			$detectedType = exif_imagetype($_FILES['prod_image']['tmp_name']);
			$type = $_FILES['prod_image']['type'];
			if (!in_array($detectedType, $allowedTypes)) {
					return $this->output
					->set_content_type('application/json')
					->set_status_header(200)
					->set_output(json_encode(array(
							'type' => 'error',
							'message' => 'Only jpg,png files supported'
					)));
					
			}
			if(filesize($_FILES['prod_image']['tmp_name']) > 1000000) {
				return $this->output
				->set_content_type('application/json')
				->set_status_header(200)
				->set_output(json_encode(array(
						'type' => 'error',
						'message' => 'The Image file size shoud not exceed 20MB!'
				)));
			}
			if(!in_array($extension, $allowedExts)) {
				return $this->output
				->set_content_type('application/json')
				->set_status_header(200)
				->set_output(json_encode(array(
						'type' => 'error',
						'message' => 'Invalid file extension'
				)));
			}

			//Upload file
			$aConfig['upload_path']      = 'uploads/';
			$aConfig['allowed_types']    = 'jpg|png|jpeg';
			$aConfig['max_size']     = '1000000';
			$this->upload->initialize($aConfig);
			if($this->upload->do_upload('prod_image'))
			{
				$ret= $this->upload->data();
			}
			else {
				return $this->output
				->set_content_type('application/json')
				->set_status_header(200) 
				->set_output(json_encode(array(
						'type' => 'error',
						'message' => $this->upload->display_errors()
				)));
			}
			$pathToUploadedFile = $ret['full_path'];
		}

		


		return $this->output
			->set_content_type('application/json')
			->set_status_header(200)
			->set_output(json_encode(array(
					'type' => 'success',
					'message' => 'Sucess Done Well Done'
			)));
	
	}




}
