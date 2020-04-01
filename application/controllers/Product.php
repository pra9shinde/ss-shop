<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

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
		$this->load->model('Datatables/Product_DT','product_dt_model');
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
		
		$pathToUploadedFile = base_url().'assets/theme/images/buy.svg';
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

		$insert_data = array(
			'seller_id' => $this->session->has_userdata('user'),
			'category_id' => $this->input->post('prod_category'),
			'name' => $this->input->post('prod_name'),
			'description' => $this->input->post('prod_desc'),
			'image_url' => $pathToUploadedFile,
			'total_quantity' => $this->input->post('prod_quantity'),
			'rem_quantity' => $this->input->post('prod_quantity'),
			'price' => $this->input->post('prod_price'),
			'pieces' => $this->input->post('prod_pieces'),
		);

		$insert = $this->My_model->insert('sss_products',$insert_data);
		if(!$insert) { 
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
					'message' => 'Product Added Successfully'
			)));
	
	}

	public function product_ajax_list()
	{
			$user_id = $this->session->has_userdata('user');
			$list = $this->product_dt_model->get_datatables();

			$data = array();
			$no = $_POST['start'];
			foreach ($list as $fetched_data) {
					$no++;
					$row = array();
					// $row[] = $this->product_dt_model->load_checkbox_btns($fetched_data->id);
					// 	$record_without_join = $this->My_model->get('sss_products',array('id' => $fetched_data->id ));
					// $row[] = $this->product_dt_model->load_multi_btns($fetched_data,$record_without_join);
					$row[] = $fetched_data->product_name;
					$row[] = $fetched_data->category_name;
					$row[] = $fetched_data->total_quantity;
					$row[] = $fetched_data->rem_quantity;
					$row[] = $fetched_data->price;
					$row[] = $fetched_data->pieces;
					$data[] = $row;
			}

			$output = array(
											"draw" => $_POST['draw'],
											"recordsTotal" => $this->product_dt_model->count_all(),
											"recordsFiltered" => $this->product_dt_model->count_filtered(),
											"data" => $data,
							);
			//output to json format
			echo json_encode($output);
	}

}
