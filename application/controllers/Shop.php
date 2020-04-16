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
		$this->load->model('Datatables/All_products_DT','all_products_model');
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
		

		//Category 
		$data['categories'] = $this->My_model->get('sss_category');
		

		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('all_products',$data);
		$this->load->view('templates/footer');

	}


	public function ajax_list()
	{
			$soc_id = $this->input->post('soc_id');
			$list = $this->all_products_model->get_datatables();

			$data = array();
			$no = $_POST['start'];
			foreach ($list as $fetched_data) {
					$no++;
					$row = array();
					// $row[] = $fetched_data->id;
					// $row[] = $this->all_products_model->load_checkbox_btns($fetched_data->id);
					$image_url = array();
					$image_url['image_path'] = $fetched_data->image_url;
					$row[] = $this->all_products_model->load_product_image($image_url);
					$row[] = $fetched_data->product_name;
					$row[] = $fetched_data->description;
					$row[] = $this->all_products_model->load_category($fetched_data->category_name);
					$row[] = '₹ '. $fetched_data->price;
					$row[] = $this->all_products_model->load_pieces($fetched_data->pieces);
					$row[] = $this->all_products_model->load_remaining_stock($fetched_data->rem_quantity);
					$row[] = $this->all_products_model->load_addcart_btns($fetched_data->id);
					$data[] = $row;
			}

			$output = array(
											"draw" => $_POST['draw'],
											"recordsTotal" => $this->all_products_model->count_all(),
											"recordsFiltered" => $this->all_products_model->count_filtered(),
											"data" => $data,
							);
			//output to json format
			echo json_encode($output);
	}

	public function ajax_list_mini()
	{
			$list = $this->all_products_model->get_datatables();
			
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $fetched_data) {
					$no++;
					$row = array();
					$row[] = $this->all_products_model->get_product_details_mini($fetched_data);
					
					$data[] = $row;
			}

			$output = array(
											"draw" => $_POST['draw'],
											"recordsTotal" => $this->all_products_model->count_all(),
											"recordsFiltered" => $this->all_products_model->count_filtered(),
											"data" => $data,
							);
			//output to json format
			echo json_encode($output);
	}

	public function cart($ip, $from = '')
	{
		
		$data['cart_items'] = $this->shop_model->get_cart_items($ip);
		
		

		if($from == 'checkout_page')
		{
			echo json_encode(['cart_items' => $data['cart_items']]);
			return;
		}

		$cart_total = $this->My_model->get_column_sum('sss_cart','total', array('ip_address' => $ip));
		$tax_total = $this->My_model->get_column_sum('sss_cart','line_tax', array('ip_address' => $ip));

		$data['cart_total'] = $cart_total[0]['total'];
		$data['tax_total'] = $tax_total[0]['total'];
		
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
		$tax_percent =  $this->My_model->get('sss_tax',array('id' => $item_details[0]['tax']));
		$tax_percent = $tax_percent[0]['percentage'];

		$item_qty_price = doubleval($item_details[0]['price']);
		$line_tax = ($item_qty_price * doubleval($tax_percent) ) / 100;
		$cart_line_total = $item_qty_price + $line_tax;

		if(count($item_exists) < 1)
		{
			//item doesnt exists add item to cart
			$add_cart = $this->My_model->insert('sss_cart', array(
				'ip_address' => strval($this->input->post('ip_address')),
				'item_id' => strval($id),
				'item_quantity' => strval(1),
				'delivery_charges' => strval(0),
				'item_price' => $item_details[0]['price'],
				'line_tax' => $line_tax,
				'total' => $cart_line_total
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
		$tax_percent =  $this->My_model->get('sss_tax',array('id' => $item_details[0]['tax']));
		$tax_percent = $tax_percent[0]['percentage'];
	
		$item_qty_price = doubleval($this->input->post('new_quantity')) * doubleval($item_price);
		$line_tax = (doubleval($item_qty_price) * doubleval($tax_percent) ) / 100;
		$cart_line_total = $item_qty_price + $line_tax;

		
		
		$update_quantity = $this->My_model->update('sss_cart', 
			array('item_id' => strval($id), 'ip_address' => strval($this->input->post('ip_address'))),
			array('item_quantity' => strval($this->input->post('new_quantity')),
						'line_tax' => $line_tax,
						'total' => $cart_line_total 
				 		)
		);

		$cart = ['line_total' => strval($cart_line_total), 'line_tax' => strval($line_tax),'status' => 'success'];
		echo json_encode($cart);
	}

	public function get_cart_total()
	{
		$cart_data = $this->My_model->get('sss_cart',array(
			'ip_address' => strval($this->input->post('ip_address'))
		));
		$tax_total = $this->My_model->get_column_sum('sss_cart','line_tax', array('ip_address' => $this->input->post('ip_address')));
		$cart_total = $this->My_model->get_column_sum('sss_cart','total', array('ip_address' => $this->input->post('ip_address')));

		$cart = ['cart_total' => strval($cart_total[0]['total']), 'tax_total' => strval($tax_total[0]['total']), 'cart_items' => count($cart_data), 'status' => 'success'];
		echo json_encode($cart);
	}

	

	public function check_mobile_no($from = '')
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

		$field_name = $from === 'orders_page' ? 'contact_my_orders' : 'contact';

		$this->form_validation->set_rules($field_name, 'Mobile No.', 'trim|numeric|required|min_length[10]|xss_clean');
		if( !$this->form_validation->run() ) {
			return $this->output
			->set_content_type('application/json')
			->set_status_header(200)
			->set_output(json_encode(array(
					'type' => 'error',
					'message' => validation_errors()
			)));
		}

		$mobile_no_exists = $this->My_model->get('sss_buyer',array('phone' => intval($this->input->post($field_name))));

		if(count($mobile_no_exists) > 0){
			return $this->output
			->set_content_type('application/json')
			->set_status_header(200)
			->set_output(json_encode(array(
					'type' => 'success',
					'status' => 'true'
			)));
		}
		else{
			return $this->output
			->set_content_type('application/json')
			->set_status_header(200)
			->set_output(json_encode(array(
					'type' => 'success',
					'status' => 'false'
			)));
		}


		return $this->output
		->set_content_type('application/json')
		->set_status_header(200)
		->set_output(json_encode(array(
				'type' => 'error',
				'message' => 'Operation failed. please try again later'
		)));

	}

	public function register_buyer()
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

		$this->form_validation->set_rules('user_name', 'Your Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('user_contact', 'Mobile No.', 'trim|required|numeric|min_length[10]|xss_clean');
		$this->form_validation->set_rules('user_email', 'Email Address', 'trim|valid_email|xss_clean');
		$this->form_validation->set_rules('user_address_1', 'Address Line 1', 'trim|required|xss_clean');
		$this->form_validation->set_rules('user_pincode', 'Pincode', 'trim|required|numeric|min_length[6]|xss_clean');



		if( !$this->form_validation->run() ) {
			return $this->output
			->set_content_type('application/json')
			->set_status_header(200)
			->set_output(json_encode(array(
					'type' => 'error',
					'message' => validation_errors()
			)));
		}

		$create_buyer = $this->My_model->insert('sss_buyer', array(
			'name' => $this->input->post('user_name'), 
			'email' => $this->input->post('user_email'),
			'phone' => $this->input->post('user_contact'),
			'address' => $this->input->post('user_address_1') .' '. $this->input->post('user_address_2') ,
			'pin' => $this->input->post('user_pincode')
		));

		if(!$create_buyer)
		{
			return $this->output
			->set_content_type('application/json')
			->set_status_header(200)
			->set_output(json_encode(array(
					'type' => 'error',
					'message' => 'Database Operation Failed'
			)));
		}

		return $this->output
		->set_content_type('application/json')
		->set_status_header(200)
		->set_output(json_encode(array(
				'type' => 'success',
				'message' => 'Buyer registered successfully.'
		)));


	}

	public function email_template()
	{
		$this->load->view('email/thank_you');
	}

	public function create_new_order()
	{
		if($this->input->post('ip_address') && $this->input->post('phone'))
		{
			//get buyer id
			$buyer_data = $this->My_model->get('sss_buyer', array('phone' => $this->input->post('phone')));


			$buyer_id = $buyer_data[0]['id'];

			//create a new order and fetch its id
			$last_id = $this->My_model->insert('sss_orders', array(
				'buyer_id' => $buyer_id,
				'total_items' => 0,
				'total_price' => 0
			));

			//get cart items
			$cart_items = $this->shop_model->get_cart_items( $this->input->post('ip_address') );
			
			//insert into order_items
			$cart_total = 0;
			foreach($cart_items as $item)
			{
				$order_item_insert = $this->My_model->insert('sss_order_items', array(
					'order_id' => $last_id,
					'buyer_id' => $buyer_id,
					'product_id' => $item['item_id'],
					'quantity ' => $item['item_quantity'],
					'order_price' => $item['car_line_total'],
					'line_tax' => $item['line_tax']
				));

				$cart_total += doubleval($item['car_line_total']);


				//Deduct Product Quantity 
				/*
					$rem_qty = $item['rem_quantity'] > 0 ? $item['rem_quantity'] - doubleval($item['item_quantity']) : 0;
					$update_quantity = $this->My_model->update('sss_products', array(
						'id' => $item['item_id']
					), array(
						'rem_quantity' => $rem_qty
					));
				*/

			}

			//Update Order totals
			$order = $this->My_model->update('sss_orders', array(
				'id' => $last_id
			), array(
				'total_items' => count($cart_items),
				'total_price' => $cart_total
			));
		
			//Delete items from cart
			$clear_cart = $this->My_model->delete('sss_cart', array(
				'ip_address' => $this->input->post('ip_address') 
			));


			//Send order details to sellers
			//$send_to_seller = $this->shop_model->send_order_details_seller($last_id);



			
		}

		

		return $this->output
			->set_content_type('application/json')
			->set_status_header(200)
			->set_output(json_encode(array(
					'type' => 'success',
					'message' => 'Order Successfully Created'
			)));
	}

	public function get_orders_view($mobile_no)
	{
		$user_data = $this->My_model->get('sss_buyer', array('phone' => intval($mobile_no)) );
		$user_id = $user_data[0]['id'];

		$data['user_orders'] = $this->shop_model->get_user_orders($user_id);
		$this->load->view('orders_view',$data);
	}

	public function cancel_order_buyer($order_id)
	{
		$del_order_items = $this->My_model->delete('sss_order_items', array(
			'order_id' => $order_id
		));

		if(!$del_order_items)
		{
			return $this->output
			->set_content_type('application/json')
			->set_status_header(200)
			->set_output(json_encode(array(
					'type' => 'error',
					'message' => 'Failed - Database Operation Failed!'
			)));
		}

		$del_order = $this->My_model->delete('sss_orders', array(
			'id' => $order_id
		));

		if(!$del_order)
		{
			return $this->output
			->set_content_type('application/json')
			->set_status_header(200)
			->set_output(json_encode(array(
					'type' => 'error',
					'message' => 'Failed - Database Operation Failed!'
			)));
		}

		return $this->output
		->set_content_type('application/json')
			->set_status_header(200)
			->set_output(json_encode(array(
					'type' => 'success',
					'message' => 'Order Successfully Created'
			)));

	}

	public function products_config()
	{
		if($this->session->has_userdata('user'))
		{
			$seller_details = $this->My_model->get('sss_seller', array(
				'id' => $this->session->userdata('user')
			)); 

			$data['taxes'] = $this->My_model->get('sss_tax');
			$data['seller_name'] = $seller_details[0]['shop_name'];
			$data['categories'] = $this->My_model->get('sss_category');
			$data['uoms'] = $this->My_model->get('sss_uom');

			$this->load->view('templates/header',$data);
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
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|xss_clean');
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


		$config = Array(
			'protocol' => 'smtp',
			'smtp_host' => SMTP_HOST,
			'smtp_port' => SMPT_PORT,
			'smtp_user' => SMPT_USER,
			'smtp_pass' => SMPT_PASSWORD,
			'mailtype'  => 'html', 
			'charset'   => 'utf-8'
		);
		$this->load->library('email',$config);
		$this->email->set_newline("\r\n");

    $this->email->from('pranavshnd006@gmail.com', "Smart Society Services");
    $this->email->to($this->input->post('email'));
    $this->email->subject("Smart Society Services Registration");
		//$mesg = $this->load->view('email_template',true);
    $mesg = $this->load->view('email/thank_you','',true);
		$this->email->message($mesg);

		if(!$this->email->send())
		{
			// $this->email->print_debugger();
				return $this->output
				->set_content_type('application/json')
				->set_status_header(200)
				->set_output(json_encode(array(
						'type' => 'error',
						'message' => 'Failed Sending Email'
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

	public function my_orders()
	{
		if($this->session->has_userdata('user'))
		{
			$seller_details = $this->My_model->get('sss_seller', array(
				'id' => $this->session->userdata('user')
			)); 

			$data['seller_name'] = $seller_details[0]['shop_name'];
			
			$this->load->view('templates/header',$data);
			$this->load->view('templates/menu');
			$this->load->view('my_orders_seller',$data);
			$this->load->view('templates/footer');
		}
		else
		{
			$this->load->view('login');
		}
	}

	public function load_invoice($order_id)
	{
		$arr = array();
		$order = $this->shop_model->get_order_items($order_id);

		

		$buyer_details = $this->My_model->get('sss_buyer',array(
			'id' => $order[0]['buyer_id']
		));
		$order_totals = $this->My_model->get('sss_orders', array('id' => $order_id));

		foreach($order as $item)
		{
			//push only if they are not cancelled orders
			if($item['status'] !== 3)
			{
				if(!key_exists($item['seller_id'], $arr)){
					//No key
					$arr[$item['seller_id']] = array();//Create New Key
					$arr[$item['seller_id']]['items'] = array();//Create New Key
				}

				//Arrange Array correctly - Remove global data items form order items array
				$arr[$item['seller_id']]['shop_name'] = $item['shop_name'];
				$arr[$item['seller_id']]['seller_name'] = $item['seller_name'];
				$arr[$item['seller_id']]['phone'] = $item['phone'];
				$arr[$item['seller_id']]['pin'] = $item['pin'];

				unset($item['shop_name']);
				unset($item['shop_seller_namename']);
				unset($item['phone']);
				unset($item['pin']);



				//Push by grouping according to category
				if(!key_exists($item['category_id'],  $arr[$item['seller_id']]['items']  ))
				{
					$arr[$item['seller_id']]['items'][$item['category_id']] = array();
				}

				array_push($arr[$item['seller_id']]['items'][$item['category_id']] , $item);//Push item in key

			}

		}

		
		
		
		$data['order'] = $arr;
		$data['order_id'] = $order_id;
		$data['buyer_details'] = $buyer_details[0];
		$data['order_totals'] = $order_totals[0];

		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('invoice',$data);
		$this->load->view('templates/footer');
	}


}
