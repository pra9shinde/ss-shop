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




	public function delete_category()
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

		if(!$this->input->post('id')){
			return $this->output
			->set_content_type('application/json')
			->set_status_header(200)
			->set_output(json_encode(array(
					'type' => 'error',
					'message' => 'Operation failed. Category Id not found'
			)));
		}

		if(!is_array($this->input->post('id')))
		{
			$arr = array();
			array_push($arr,$this->input->post('id'));
		}
		else{
			$arr = $this->input->post('id');
		}

		$check_dependency = $this->My_model->get_multiple('sss_products','category_id',$arr);

		if(!empty($check_dependency))
		{
			return $this->output
			->set_content_type('application/json')
			->set_status_header(200)
			->set_output(json_encode(array(
					'type' => 'error',
					'message' => 'Products Created with this category, Delete them first'
			)));
		}

		$deleteStatus = $this->My_model->delete_multiple('sss_category','id',$arr);
		if(!$deleteStatus)
		{
			return $this->output
			->set_content_type('application/json')
			->set_status_header(200)
			->set_output(json_encode(array(
					'type' => 'error',
					'message' => 'Database Operation failed.'
			)));
		}

		return $this->output
			->set_content_type('application/json')
			->set_status_header(200)
			->set_output(json_encode(array(
					'type' => 'success',
					'message' => 'Category Deleted Successfully'
			)));
	}

	public function update_category()
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

		$this->form_validation->set_rules('category_id', 'Category ID', 'trim|required|xss_clean');
		$this->form_validation->set_rules('category_name_edit', 'Category Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('category_desc_edit', 'Category Description', 'trim|required|xss_clean');
		
		if( !$this->form_validation->run() ) {
			return $this->output
			->set_content_type('application/json')
			->set_status_header(200)
			->set_output(json_encode(array(
					'type' => 'error',
					'message' => validation_errors()
			)));
		}

		$update = $this->My_model->update('sss_category', array(
				'id' => $this->input->post('category_id')
			),
			array(
				'name' => $this->input->post('category_name_edit'),
				'description' => $this->input->post('category_desc_edit')
			)
		);

		return $this->output
		->set_content_type('application/json')
		->set_status_header(200)
		->set_output(json_encode(array(
				'type' => 'success',
				'message' => 'Product Updated Successfully'
		)));

	}

	public function change_order_status()
	{
		$cancel_reason = $this->input->post('reason');//order cancel reason

		$seller_order_details = $this->shop_model->seller_order_products($this->session->userdata('user'), $this->input->post('order_id'));


		//Push all order product id's into an array
		$seller_order_products = array();
		if(count($seller_order_details) > 0)
		{
			foreach($seller_order_details as $prod)
			{
				array_push($seller_order_products, $prod['product_id']);
			}
		}

		$update_array = array(
			'status' => $this->input->post('status_id'),
			'cancel_reason' => $cancel_reason,
			'update_date' => date ("Y-m-d H:i:s", time())
		);

		if($this->input->post('status_id') == 3)
		{
			$update_array['status_change_count'] = 1;
		}

		//update order status of this order for only  this seller products
		$update = $this->My_model->update_multiple('sss_order_items', 'product_id', 				  	$seller_order_products, $update_array, array(
				'order_id' => $this->input->post('order_id')
			)
		);

		
		if(!$update)
		{
			return $this->output
				->set_content_type('application/json')
				->set_status_header(200)
				->set_output(json_encode(array(
						'type' => 'error',
						'message' => 'Database - Operation Failed!'
			)));
		}

		//Update Stock
		$this->update_stock($this->input->post('status_id'), $seller_order_details);

		//Update the main order table status - If all sellers confirmed set it to complete else partial
		$main_order_update = $this->shop_model->update_main_order_status($this->input->post('order_id'));

		if(!$main_order_update)
		{
			return $this->output
				->set_content_type('application/json')
				->set_status_header(200)
				->set_output(json_encode(array(
						'type' => 'error',
						'message' => 'Database - Operation Failed!'
			)));
		}

	
		return $this->output
		->set_content_type('application/json')
		->set_status_header(200)
		->set_output(json_encode(array(
				'type' => 'success',
				'message' => 'Product Updated Successfully'
		)));

	}

	public function update_stock($status_id, $prod_arr = array())
	{
		if($status_id == 2)
		{
			//Reduce stock - Order COnfirmed
			foreach($prod_arr as $prod)
			{
				$update_quantity = $this->My_model->update('sss_products', array(
					'id' => $prod['product_id']
				), array(
					'rem_quantity' => doubleval($prod['rem_quantity']) - doubleval($prod['order_quantity'])
				));
			}
		}
		else
		{

			//Reduce Stock - Order Cancelled
			foreach($prod_arr as $prod)
			{
				//Reduce Stock Only if the Order is Cancelled after Confirming. Cancelling Order will not modify the stock
				if($prod['status'] == 2)
				{
					$update_quantity = $this->My_model->update('sss_products', array(
						'id' => $prod['product_id']
					), array(
						'rem_quantity' => doubleval($prod['rem_quantity']) + doubleval($prod['order_quantity'])
					));
				}
			}

		}
	}


	public function product_ajax_list()
	{
			$user_id = $this->session->userdata('user');
			$list = $this->product_dt_model->get_datatables();

			$data = array(); 
			$no = $_POST['start'];
			foreach ($list as $fetched_data) {
					$no++;
					$row = array();
					$row[] = $this->product_dt_model->load_data($fetched_data);
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
		$this->form_validation->set_rules('prod_quantity', 'Product Category', 'trim|numeric|required|xss_clean');
		$this->form_validation->set_rules('uom_qty', 'UOM Unit', 'trim|numeric|required|xss_clean');
		$this->form_validation->set_rules('uom', 'UOM', 'trim|numeric|required|xss_clean');
		$this->form_validation->set_rules('tax', 'Tax Percentage', 'trim|required|xss_clean');
		$this->form_validation->set_rules('mrp', 'MRP', 'trim|numeric|required|xss_clean');


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
			$pathToUploadedFile = base_url().'uploads/'.$ret['file_name'];

		}

		$insert_data = array(
			'seller_id' => $this->session->userdata('user'),
			'category_id' => $this->input->post('prod_category'),
			'name' => $this->input->post('prod_name'),
			'description' => $this->input->post('prod_desc'),
			'image_url' => $pathToUploadedFile,
			'total_quantity' => $this->input->post('prod_quantity'),
			'rem_quantity' => $this->input->post('prod_quantity'),
			'price' => $this->input->post('prod_price'),
			'pieces' => $this->input->post('prod_pieces'),
			'uom' => $this->input->post('uom'),
			'uom_unit' => $this->input->post('uom_qty'),
			'mrp' => $this->input->post('mrp'),
			'tax' => $this->input->post('tax'),
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

	public function delete_product()
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

		if(!$this->input->post('id')){
			return $this->output
			->set_content_type('application/json')
			->set_status_header(200)
			->set_output(json_encode(array(
					'type' => 'error',
					'message' => 'Operation failed. Product Id not found'
			)));
		}

		if(!is_array($this->input->post('id')))
		{
			$arr = array();
			array_push($arr,$this->input->post('id'));
		}
		else{
			$arr = $this->input->post('id');
		}

		$deleteStatus = $this->My_model->delete_multiple('sss_products','id',$arr);
		if(!$deleteStatus)
		{
			return $this->output
			->set_content_type('application/json')
			->set_status_header(200)
			->set_output(json_encode(array(
					'type' => 'error',
					'message' => 'Database Operation failed.'
			)));
		}

		return $this->output
			->set_content_type('application/json')
			->set_status_header(200)
			->set_output(json_encode(array(
					'type' => 'success',
					'message' => 'Product Deleted Successfully'
			)));
	}

	public function update_product()
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

		$this->form_validation->set_rules('product_id', 'Product Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('prod_name_edit', 'Product Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('prod_category_edit', 'Product Category', 'trim|required|xss_clean');
		$this->form_validation->set_rules('old_img_path', 'Old Image Path', 'trim|required|xss_clean');
		$this->form_validation->set_rules('prod_pieces_edit', 'Product Category', 'trim|numeric|required|xss_clean');
		$this->form_validation->set_rules('prod_quantity_edit', 'Product Category', 'trim|numeric|required|xss_clean');
		$this->form_validation->set_rules('uom_edit', 'UOM', 'trim|numeric|required|xss_clean');
		$this->form_validation->set_rules('uom_qty_edit', 'UOM Unit', 'trim|numeric|required|xss_clean');
		$this->form_validation->set_rules('tax_edit', 'Tax Percentage', 'trim|required|xss_clean');
		$this->form_validation->set_rules('tax_edit', 'Tax Percentage', 'trim|required|xss_clean');
		$this->form_validation->set_rules('mrp_edit', 'Product MRP', 'trim|required|xss_clean');

		if( !$this->form_validation->run() ) {
			return $this->output
			->set_content_type('application/json')
			->set_status_header(200)
			->set_output(json_encode(array(
					'type' => 'error',
					'message' => validation_errors()
			)));
		}

		$pathToUploadedFile = '';
		if (isset($_FILES['prod_image_edit']) && $_FILES['prod_image_edit']['size'] != 0) 
		{
			
			$allowedExts = array("jpeg", "jpg", "png", "svg","JPG", "JPEG", "PNG", "SVG");
			$allowedTypes = array(IMAGETYPE_PNG, IMAGETYPE_JPEG, IMAGETYPE_GIF);
			$extension = pathinfo($_FILES["prod_image_edit"]["name"], PATHINFO_EXTENSION);
			$detectedType = exif_imagetype($_FILES['prod_image_edit']['tmp_name']);
			$type = $_FILES['prod_image_edit']['type'];
			// if (!in_array($detectedType, $allowedTypes)) {
			// 		return $this->output
			// 		->set_content_type('application/json')
			// 		->set_status_header(200)
			// 		->set_output(json_encode(array(
			// 				'type' => 'error',
			// 				'message' => 'Only jpg,png files supported'
			// 		)));
					
			// }
			if(filesize($_FILES['prod_image_edit']['tmp_name']) > 1000000) {
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
			

			$aConfig['upload_path']      =  'uploads/';
			$aConfig['allowed_types']    = 'jpg|png|jpeg|svg';
			$aConfig['max_size']     = '1000000';
			$this->upload->initialize($aConfig);
			if($this->upload->do_upload('prod_image_edit'))
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

			$pathToUploadedFile = base_url().'uploads/'.$ret['file_name'];
		}

		$update_array = 	array(
			'category_id' => $this->input->post('prod_category_edit'),
			'name' => $this->input->post('prod_name_edit'),
			'description' => $this->input->post('prod_desc_edit'),
			'total_quantity' => $this->input->post('prod_quantity_edit'),
			'rem_quantity' => $this->input->post('prod_quantity_edit'),
			'price' => $this->input->post('prod_price_edit'),
			'pieces' => $this->input->post('prod_pieces_edit'),
			'uom' => $this->input->post('uom_edit'),
			'uom_unit' => $this->input->post('uom_qty_edit'),
			'tax' => $this->input->post('tax_edit'),
			'mrp' => $this->input->post('mrp_edit')
		);

		if(!empty($pathToUploadedFile))
		{
			$update_array['image_url'] = $pathToUploadedFile;
		}

		$update = $this->My_model->update('sss_products', array(
				'id' => $this->input->post('product_id')
			), $update_array
		);


		return $this->output
		->set_content_type('application/json')
		->set_status_header(200)
		->set_output(json_encode(array(
				'type' => 'success',
				'message' => 'Product Updated Successfully'
		)));
	}

	public function category_ajax_list()
	{
		$this->load->model('Datatables/Category_DT','category_model_dt');

		$list = $this->category_model_dt->get_datatables();

		$data = array(); 
		$no = $_POST['start'];
		foreach ($list as $fetched_data) {
				$no++;
				$row = array();
				$row[] = $this->category_model_dt->load_data($fetched_data);

				$data[] = $row;
		}

		$output = array(
										"draw" => $_POST['draw'],
										"recordsTotal" => $this->category_model_dt->count_all(),
										"recordsFiltered" => $this->category_model_dt->count_filtered(),
										"data" => $data,
						);
		//output to json format
		echo json_encode($output);

	}

	public function seller_orders_ajax_list()
	{
		$this->load->model('Datatables/Seller_Orders_DT','seller_orders_model');

		$list = $this->seller_orders_model->get_datatables();
		$data_array = array();

		if(count($list) > 0)
		{
			foreach($list as $item)
			{
				
				if(!key_exists($item['main_order_id'], $data_array)){
					//No key
					$data_array[$item['main_order_id']]['items'] = array();//Create New Key
				}	
				
				$data_array[$item['main_order_id']]['order_id'] = $item['main_order_id'];//order id
				$data_array[$item['main_order_id']]['buyer_name'] = $item['buyer_name'];//buyer name
				$data_array[$item['main_order_id']]['create_date'] = $item['create_date']; //order date
				$data_array[$item['main_order_id']]['status'] = $item['status'];// order status
				$data_array[$item['main_order_id']]['status_name'] = $item['status_name'];// order status name
				$data_array[$item['main_order_id']]['status_change_count'] = $item['status_change_count'];// order status change count
				$data_array[$item['main_order_id']]['item_status'] = $item['item_status'];//Order Item Status - Seller Order Status

				

				//Delete above added keys from the result array
				$main_order_id = $item['main_order_id'];
				// unset($item['main_order_id']);
				unset($item['buyer_name']);
				unset($item['create_date']);
				unset($item['status']);
				unset($item['status_name']);
				// unset($item['status_change_count']);
				// unset($item['item_status']);

				array_push($data_array[$main_order_id]['items'], $item);//Push all items in key
				$order_items_count = count($data_array[$main_order_id]['items']);
				$order_total = 0;

				foreach($data_array[$main_order_id]['items'] as $order_item)
				{
					$order_total += doubleval($order_item['line_total']);
				}

				$data_array[$main_order_id]['seller_items_count'] = $order_items_count;// order item count
				$data_array[$main_order_id]['seller_order_total'] = $order_total;// order item count

			}
		}

		$list = $data_array;

		


		$data = array(); 
		$no = $_POST['start'];
		foreach ($list as $fetched_data) {
				$no++;
				$row = array();
				$row[] = $this->seller_orders_model->get_order_id($fetched_data);

				// $row[] = $this->seller_orders_model->get_data($fetched_data);
				$row[] = $fetched_data['items'];//hidden column which stores items array


				// $row[] = $this->seller_orders_model->get_confirm_order($fetched_data['order_id'], $fetched_data['item_status'], $fetched_data['status_change_count']);
				// $row[] = $this->seller_orders_model->get_status($fetched_data['item_status']);
				// $row[] = $fetched_data['buyer_name'];
				// $row[] = $fetched_data['seller_items_count'];
				// $row[] = $fetched_data['seller_order_total'];
				// $row[] = $fetched_data['create_date'];
				$data[] = $row;
		}

		$output = array(
										"draw" => $_POST['draw'],
										"recordsTotal" => $this->seller_orders_model->count_all(),
										"recordsFiltered" => $this->seller_orders_model->count_filtered(),
										"data" => $data,
						);
		//output to json format
		echo json_encode($output);
	}

}
