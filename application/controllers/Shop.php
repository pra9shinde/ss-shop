<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Shop extends CI_Controller
{

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

	public function __construct()
	{
		header('Access-Control-Allow-Origin: *');
		header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
		header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
		parent::__construct();
		$this->load->model('Shop_model', 'shop_model');
		$this->load->model('Datatables/All_products_DT', 'all_products_model');
	}

	public function index()
	{

		$total_records = 0;

		$page = isset($_GET['page']) ? $_GET['page'] : 1;
		$items_per_page = 6;
		$total_records = $this->My_model->get_total_count('sss_products', array('is_delete' => 0));
		$data['products'] = $this->shop_model->get_all_product_data($items_per_page, $page);



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
		$this->load->view('index', $data);
		$this->load->view('templates/footer');
	}

	//Buyer Login
	public function user_login()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('buyer/login');
		$this->load->view('templates/footer');
	}

	//Buyer Register
	public function user_register()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('buyer/register');
		$this->load->view('templates/footer');
	}

	//Buyer Details - if FB, Google incomplete data view
	public function user_details()
	{
		if ($this->input->server('REQUEST_METHOD') != 'POST') {
			$this->user_login();
			return;
		}


		//If Session oauth and passed oauth are same
		if (isset($_SESSION['buyer']) && $_POST['login_oauth_uid'] === $_SESSION['buyer']['login_oauth_uid']) {

			$user_data = array(
				'success_redirect' => $this->input->get('redirect'),
				'oauth' => $_POST['login_oauth_uid'],
				'name' => $_POST['name'],
				'last_name' => $_POST['last_name'],
				'email' => $_POST['email'],
				'profile_picture' => $_POST['profile_picture'],
				'source' => $_POST['source']
			);

			$data['user_data'] = $user_data;

			$this->load->view('templates/header');
			$this->load->view('templates/menu');
			$this->load->view('buyer/user_details_fb_google', $data);
			$this->load->view('templates/footer');
		} else {
			//Session isnt created redirect to login page
			$this->user_login();
			return;
		}
	}

	public function products()
	{
		$total_records = 0;

		$page = isset($_GET['page']) ? $_GET['page'] : 1;
		$items_per_page = 6;
		$total_records = $this->My_model->get_total_count('sss_products', array('is_delete' => 0));
		$data['products'] = $this->shop_model->get_all_product_data($items_per_page, $page);



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
		$this->load->view('all_products', $data);
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
			$row[] = $this->all_products_model->load_product_name($fetched_data);
			$row[] = $this->all_products_model->load_pieces($fetched_data->uom_unit, $fetched_data->uom_name, $fetched_data->price);
			$row[] = $this->all_products_model->load_discount($fetched_data->mrp, $fetched_data->price);
			$row[] = $this->all_products_model->load_mrp($fetched_data->mrp);
			$row[] = $this->all_products_model->load_offer_price($fetched_data->price);
			$row[] = $this->all_products_model->load_remaining_stock($fetched_data->rem_quantity, $fetched_data->uom_name);
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

		if ($from == 'checkout_page') {
			echo json_encode(['cart_items' => $data['cart_items']]);
			return;
		}

		//Send the User Orders if the session is created
		if (isset($_SESSION['buyer'])) {
			$user_details = $_SESSION['buyer'];

			if ($user_details['source'] === 'mobile') {
				//Use userid passed in session
				$buyer_id = $user_details['id'];
			} else {
				//get id from oauthID
				$buyer_data = $this->My_model->get('sss_buyer', array(
					'login_oauth_uid' => $user_details['login_oauth_uid'],
					'phone' => $user_details['phone']
				));

				if (!count($buyer_data) > 0) {
					return $this->output
						->set_content_type('application/json')
						->set_status_header(200)
						->set_output(json_encode(array(
							'type' => 'error',
							'message' => 'Failed to Find User Details'
						)));
				}
				$buyer_id = $buyer_data[0]['id'];
			}

			//All User Placed Orders
			$data['user_orders'] = $this->shop_model->get_user_orders($buyer_id);
		}



		$cart_total = $this->My_model->get_column_sum('sss_cart', 'total', array('ip_address' => $ip));
		$tax_total = $this->My_model->get_column_sum('sss_cart', 'line_tax', array('ip_address' => $ip));

		$data['cart_total'] = $cart_total[0]['total'];
		$data['tax_total'] = $tax_total[0]['total'];

		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('cart', $data);
		$this->load->view('templates/footer');
	}

	public function get_cart($ip)
	{
		$check_ip = $this->My_model->get('sss_cart', array('ip_address' => strval($ip)));
		$cart = ['cart' => count($check_ip), 'status' => 'success'];
		echo json_encode($cart);
	}

	public function add_to_cart($id)
	{
		$item_qty = intval($this->input->post('item_qty'));
		if (!is_numeric($item_qty)) {
			$item_qty = 1;
		}

		$item_exists = $this->My_model->get('sss_cart', array('ip_address' => strval($this->input->post('ip_address')), 'item_id' => strval($id)));


		$item_details = $this->My_model->get('sss_products', array('id' => $id, 'is_delete' => 0));
		$tax_percent =  $this->My_model->get('sss_tax', array('id' => $item_details[0]['tax']));
		$tax_percent = $tax_percent[0]['percentage'];

		$item_qty_price = $item_qty * doubleval($item_details[0]['price']);
		$line_tax = ($item_qty_price * doubleval($tax_percent)) / 100;
		$cart_line_total = $item_qty_price + $line_tax;

		if (count($item_exists) < 1) {
			//item doesnt exists add item to cart
			$add_cart = $this->My_model->insert('sss_cart', array(
				'ip_address' => strval($this->input->post('ip_address')),
				'item_id' => strval($id),
				'item_quantity' => strval($item_qty),
				'delivery_charges' => strval(0),
				'item_price' => $item_details[0]['price'],
				'line_tax' => $line_tax,
				'total' => $cart_line_total
			));

			if (!$add_cart) {
				return $this->output
					->set_content_type('application/json')
					->set_status_header(200)
					->set_output(json_encode(array(
						'type' => 'error',
						'message' => 'Database Operation Failed'
					)));
			}
		} else {
			//Item already present in cart, update the quantity
			$update_quantity = $this->My_model->update(
				'sss_cart',
				array('item_id' => strval($id), 'ip_address' => strval($this->input->post('ip_address'))),
				array(
					'item_quantity' => strval($item_qty),
					'line_tax' => $line_tax,
					'total' => $cart_line_total
				)
			);

			if (!$update_quantity) {
				return $this->output
					->set_content_type('application/json')
					->set_status_header(200)
					->set_output(json_encode(array(
						'type' => 'error',
						'message' => 'Database Operation Failed'
					)));
			}
		}

		$items_count = $this->My_model->get_total_count('sss_cart', array('ip_address' => strval($this->input->post('ip_address'))));

		$cart = ['cart' => $items_count, 'status' => 'success'];
		echo json_encode($cart);
	}

	public function remove_from_cart($id)
	{
		$delete_item = $this->My_model->delete('sss_cart', array(
			'ip_address' => strval($this->input->post('ip_address')),
			'item_id' => strval($id)
		));

		$items_count = $this->My_model->get_total_count('sss_cart', array('ip_address' => strval($this->input->post('ip_address'))));

		$cart = ['cart' => $items_count, 'status' => 'success'];
		echo json_encode($cart);
	}

	public function update_cart_quantity($id)
	{

		$item_details = $this->My_model->get('sss_products', array('id' => $id));


		$item_price = $item_details[0]['price'];
		$tax_percent =  $this->My_model->get('sss_tax', array('id' => $item_details[0]['tax']));
		$tax_percent = $tax_percent[0]['percentage'];

		$item_qty_price = doubleval($this->input->post('new_quantity')) * doubleval($item_price);
		$line_tax = (doubleval($item_qty_price) * doubleval($tax_percent)) / 100;
		$cart_line_total = $item_qty_price + $line_tax;



		$update_quantity = $this->My_model->update(
			'sss_cart',
			array('item_id' => strval($id), 'ip_address' => strval($this->input->post('ip_address'))),
			array(
				'item_quantity' => strval($this->input->post('new_quantity')),
				'line_tax' => $line_tax,
				'total' => $cart_line_total
			)
		);

		$temp = (doubleval($item_details[0]['mrp']) * doubleval($this->input->post('new_quantity')));

		$line_save = $temp - $cart_line_total;

		$cart = ['line_total' => strval($cart_line_total), 'line_tax' => strval($line_tax), 'line_save' => strval($line_save), 'status' => 'success'];
		echo json_encode($cart);
	}

	public function get_cart_total()
	{
		$cart_data = $this->My_model->get('sss_cart', array(
			'ip_address' => strval($this->input->post('ip_address'))
		));
		$tax_total = $this->My_model->get_column_sum('sss_cart', 'line_tax', array('ip_address' => $this->input->post('ip_address')));
		$cart_total = $this->My_model->get_column_sum('sss_cart', 'total', array('ip_address' => $this->input->post('ip_address')));

		$cart = ['cart_total' => strval($cart_total[0]['total']), 'tax_total' => strval($tax_total[0]['total']), 'cart_items' => count($cart_data), 'status' => 'success'];
		echo json_encode($cart);
	}

	//Create Session for Buyer
	public function create_buyer_session($user_data)
	{
		$_SESSION['buyer'] = $user_data;

		return isset($_SESSION['buyer']) ? true : false;
	}

	public function check_google_account()
	{
		$user_data = $_POST['google_data'];

		$user_exists = $this->My_model->get('sss_buyer', array('login_oauth_uid' => $user_data['login_oauth_uid']));

		if (
			count($user_exists) > 0 && $user_exists[0]['phone'] !== '' && $user_exists[0]['address'] !== '' && $user_exists[0]['pin'] !== ''
		) {
			//Google User exists
			return $this->output
				->set_content_type('application/json')
				->set_status_header(200)
				->set_output(json_encode(array(
					'type' => 'success',
					'status' => 'complete',
					'mobileNo' => $user_exists[0]['phone']
				)));
		} elseif ($user_exists[0]['phone'] === '' || $user_exists[0]['address'] === '' || $user_exists[0]['pin'] === '') {
			//Old user but incomplete data
			return $this->output
				->set_content_type('application/json')
				->set_status_header(200)
				->set_output(json_encode(array(
					'type' => 'success',
					'status' => 'incomplete',
					'user_data' => $user_data
				)));
		} else {
			//User doesnt exists
			$create_buyer = $this->My_model->insert('sss_buyer', array(
				'login_oauth_uid' => $user_data['login_oauth_uid'],
				'name' => $user_data['name'],
				'lastname' => $user_data['last_name'],
				'email' => $user_data['email'],
				'profile_picture' => $user_data['profile_picture']
			));

			if (!$create_buyer) {
				return $this->output
					->set_content_type('application/json')
					->set_status_header(200)
					->set_output(json_encode(array(
						'type' => 'error',
						'message' => 'Database Operation Failed in Creation'
					)));
			}

			return $this->output
				->set_content_type('application/json')
				->set_status_header(200)
				->set_output(json_encode(array(
					'type' => 'success',
					'status' => 'new'
				)));
		}
	}

	public function check_mobile_no($from = '')
	{
		if ($this->input->server('REQUEST_METHOD') != 'POST') {
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
		if (!$this->form_validation->run()) {
			return $this->output
				->set_content_type('application/json')
				->set_status_header(200)
				->set_output(json_encode(array(
					'type' => 'error',
					'message' => validation_errors()
				)));
		}

		$mobile_no_exists = $this->My_model->get('sss_buyer', array('phone' => intval($this->input->post($field_name))));

		if (count($mobile_no_exists) > 0) {
			return $this->output
				->set_content_type('application/json')
				->set_status_header(200)
				->set_output(json_encode(array(
					'type' => 'success',
					'status' => 'true'
				)));
		} else {
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

	//Register K2C Buyer
	public function register_buyer()
	{
		if ($this->input->server('REQUEST_METHOD') != 'POST') {
			return $this->output
				->set_content_type('application/json')
				->set_status_header(200)
				->set_output(json_encode(array(
					'type' => 'error',
					'message' => 'Failed - Invalid Request!',
					'redirect' => ''
				)));
		}

		$this->form_validation->set_rules('user_name', 'Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('last_name', 'Surnaname', 'trim|required|xss_clean');
		$this->form_validation->set_rules('user_contact', 'Mobile No.', 'trim|required|numeric|min_length[10]|xss_clean');
		$this->form_validation->set_rules('user_email', 'Email Address', 'trim|valid_email|xss_clean');
		$this->form_validation->set_rules('user_address_1', 'Address Line 1', 'trim|required|xss_clean');
		$this->form_validation->set_rules('user_pincode', 'Pincode', 'trim|required|numeric|min_length[6]|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|xss_clean');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[6]|xss_clean');
		$this->form_validation->set_rules('password', 'Password Mismatch', 'required|matches[confirm_password]');

		if (!$this->form_validation->run()) {
			return $this->output
				->set_content_type('application/json')
				->set_status_header(200)
				->set_output(json_encode(array(
					'type' => 'error',
					'message' => validation_errors(),
					'redirect' => ''
				)));
		}

		$buyer_exists = $this->My_model->get('sss_buyer', array('phone' => $this->input->post('user_contact')));

		if (count($buyer_exists) > 0) {
			return $this->output
				->set_content_type('application/json')
				->set_status_header(200)
				->set_output(json_encode(array(
					'type' => 'error',
					'message' => 'Mobile no. already used. Try Forget Password!',
					'redirect' => ''
				)));
		}

		$this->load->library('encryption');


		$create_buyer = $this->My_model->insert('sss_buyer', array(
			'name' => $this->input->post('user_name'),
			'lastname' => $this->input->post('last_name'),
			'phone' => $this->input->post('user_contact'),
			'password' => $this->encryption->encrypt($this->input->post('password')),
			'email' => $this->input->post('user_email'),
			'address' => $this->input->post('user_address_1') . ' ' . $this->input->post('user_address_2'),
			'pin' => $this->input->post('user_pincode')
		));

		if (!$create_buyer) {
			return $this->output
				->set_content_type('application/json')
				->set_status_header(200)
				->set_output(json_encode(array(
					'type' => 'error',
					'message' => 'User Creation Database Operation Failed',
					'redirect' => ''
				)));
		}

		return $this->output
			->set_content_type('application/json')
			->set_status_header(200)
			->set_output(json_encode(array(
				'type' => 'success',
				'message' => 'Buyer registered successfully.',
				'redirect' => base_url() . 'Shop/user_login'
			)));
	}

	//Add or Update google/fb logged in users with all data
	public function complete_buyer_details()
	{
		if ($this->input->server('REQUEST_METHOD') != 'POST') {
			return $this->output
				->set_content_type('application/json')
				->set_status_header(200)
				->set_output(json_encode(array(
					'type' => 'error',
					'message' => 'Failed - Invalid Request!'
				)));
		}

		$this->form_validation->set_rules('oauth', 'Oauth', 'trim|required|xss_clean');
		$this->form_validation->set_rules('oauth_source', 'Oauth Login Source', 'trim|required|xss_clean');
		$this->form_validation->set_rules('user_name', 'Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('last_name', 'Surnaname', 'trim|required|xss_clean');
		$this->form_validation->set_rules('user_contact', 'Mobile No.', 'trim|required|numeric|min_length[10]|xss_clean');
		$this->form_validation->set_rules('user_email', 'Email Address', 'trim|valid_email|xss_clean');
		$this->form_validation->set_rules('user_address_1', 'Address Line 1', 'trim|required|xss_clean');
		$this->form_validation->set_rules('user_address_2', 'Address Line 2', 'trim|required|xss_clean');
		$this->form_validation->set_rules('user_pincode', 'Pincode', 'trim|required|numeric|min_length[6]|xss_clean');


		if (!$this->form_validation->run()) {
			return $this->output
				->set_content_type('application/json')
				->set_status_header(200)
				->set_output(json_encode(array(
					'type' => 'error',
					'message' => validation_errors()
				)));
		}

		$user_exists = $this->My_model->get('sss_buyer', array('login_oauth_uid' => $this->input->post('oauth')));

		if (count($user_exists) > 0) {
			//User exists update the data
			$update_user = $this->My_model->update(
				'sss_buyer',
				array('login_oauth_uid' => $this->input->post('oauth')),
				array(
					'name' => $this->input->post('user_name'),
					'lastname' => $this->input->post('last_name'),
					'phone' => $this->input->post('user_contact'),
					'email' => $this->input->post('user_email'),
					'address' => $this->input->post('user_address_1') . ' ' . $this->input->post('user_address_2'),
					'pin' => $this->input->post('user_pincode'),
					'profile_picture' => $this->input->post('profile_picture')
				)
			);

			if (!$update_user) {
				return $this->output
					->set_content_type('application/json')
					->set_status_header(200)
					->set_output(json_encode(array(
						'type' => 'error',
						'message' => 'User Updation Database Operation Failed'
					)));
			}
		} else {
			//insert the data
			$create_buyer = $this->My_model->insert('sss_buyer', array(
				'login_oauth_uid' => $this->input->post('oauth'),
				'name' => $this->input->post('user_name'),
				'lastname' => $this->input->post('last_name'),
				'phone' => $this->input->post('user_contact'),
				'email' => $this->input->post('user_email'),
				'address' => $this->input->post('user_address_1') . ' ' . $this->input->post('user_address_2'),
				'address' => $this->input->post('user_address_1') . ' ' . $this->input->post('user_address_2'),
				'pin' => $this->input->post('user_pincode'),
				'profile_picture' => $this->input->post('profile_picture')
			));

			if (!$create_buyer) {
				return $this->output
					->set_content_type('application/json')
					->set_status_header(200)
					->set_output(json_encode(array(
						'type' => 'error',
						'message' => 'User Creation Database Operation Failed',
						'redirect' => ''
					)));
			}
		}

		//Create a buyer session
		$user_data = array(
			'email' => $this->input->post('user_email'),
			'last_name' => $this->input->post('last_name'),
			'login_oauth_uid' => $this->input->post('oauth'),
			'name' => $this->input->post('user_name'),
			'phone' => $this->input->post('user_contact'),
			'address' => $this->input->post('user_address_1') . ' ' . $this->input->post('user_address_2'),
			'pin' => $this->input->post('user_pincode'),
			'profile_picture' => $this->input->post('profile_picture'),
			'source' => $this->input->post('oauth_source')
		);
		$session = $this->create_buyer_session($user_data);

		if (!$session) {
			return $this->output
				->set_content_type('application/json')
				->set_status_header(200)
				->set_output(json_encode(array(
					'type' => 'error',
					'message' => 'Issue During Creating a Session'
				)));
		}

		return $this->output
			->set_content_type('application/json')
			->set_status_header(200)
			->set_output(json_encode(array(
				'type' => 'success',
				'message' => 'Profile Update Successfully'
			)));
	}

	//Check if fb google user has filled all data
	public function check_buyer_details()
	{
		if ($this->input->server('REQUEST_METHOD') != 'POST') {
			return $this->output
				->set_content_type('application/json')
				->set_status_header(200)
				->set_output(json_encode(array(
					'type' => 'error',
					'message' => 'Failed - Invalid Request!'
				)));
		}

		if (!isset($_POST['user_data'])) {
			return $this->output
				->set_content_type('application/json')
				->set_status_header(200)
				->set_output(json_encode(array(
					'type' => 'error',
					'message' => 'No User Data'
				)));
		}


		$user_data = $_POST['user_data'];
		$user_exists = $this->My_model->get('sss_buyer', array('login_oauth_uid' => $user_data['login_oauth_uid']));

		if (
			count($user_exists) > 0 && $user_exists[0]['phone'] !== '' && $user_exists[0]['address'] !== '' && $user_exists[0]['pin'] !== ''
		) {
			$user_data = array(
				'email' => $user_exists[0]['email'],
				'last_name' => $user_exists[0]['lastname'],
				'login_oauth_uid' => $user_exists[0]['login_oauth_uid'],
				'name' => $user_exists[0]['name'],
				'phone' => $user_exists[0]['phone'],
				'address' => $user_exists[0]['address'],
				'pin' => $user_exists[0]['pin'],
				'profile_picture' => $user_exists[0]['profile_picture'],
				'source' => $_POST['user_data']['source']
			);
			$session = $this->create_buyer_session($user_data);
			if (!$session) {
				return $this->output
					->set_content_type('application/json')
					->set_status_header(200)
					->set_output(json_encode(array(
						'type' => 'error',
						'message' => 'Failed Creating User Session'
					)));
			}

			//Google User exists
			return $this->output
				->set_content_type('application/json')
				->set_status_header(200)
				->set_output(json_encode(array(
					'type' => 'success',
					'status' => 'complete'
				)));
		} else {
			//Old user but incomplete data
			return $this->output
				->set_content_type('application/json')
				->set_status_header(200)
				->set_output(json_encode(array(
					'type' => 'success',
					'status' => 'incomplete',
					'user_data' => $user_data
				)));
		}
	}

	//Login using mobile number
	public function k2clogin()
	{
		if ($this->input->server('REQUEST_METHOD') != 'POST') {
			return $this->output
				->set_content_type('application/json')
				->set_status_header(200)
				->set_output(json_encode(array(
					'type' => 'error',
					'message' => 'Failed - Invalid Request!'
				)));
		}

		$this->form_validation->set_rules('mobile', 'Mobile No.', 'trim|required|numeric|max_length[10]|xss_clean');
		$this->form_validation->set_rules('k2c-password', 'Password', 'trim|required|min_length[6]|xss_clean');

		if (!$this->form_validation->run()) {
			return $this->output
				->set_content_type('application/json')
				->set_status_header(200)
				->set_output(json_encode(array(
					'type' => 'error',
					'message' => validation_errors()
				)));
		}

		$this->load->library('encryption');
		$user_exists = $this->My_model->get(
			'sss_buyer',
			array(
				'phone' => $this->input->post('mobile'),
				'login_oauth_uid' => NULL
			)
		);

		if (count($user_exists) <= 0) {
			return $this->output
				->set_content_type('application/json')
				->set_status_header(200)
				->set_output(json_encode(array(
					'type' => 'error',
					'message' => 'No user found, please Register'
				)));
		}

		$decrypted_pass =  $this->encryption->decrypt($user_exists[0]['password']);
		if ($decrypted_pass !== $this->input->post('k2c-password')) {
			return $this->output
				->set_content_type('application/json')
				->set_status_header(200)
				->set_output(json_encode(array(
					'type' => 'error',
					'message' => 'Wrong Password'
				)));
		}


		// Create a buyer session
		$user_data = array(
			'email' => $user_exists[0]['email'],
			'last_name' => $user_exists[0]['lastname'],
			'id' => $user_exists[0]['id'],
			'name' => $user_exists[0]['name'],
			'phone' => $user_exists[0]['phone'],
			'address' => $user_exists[0]['address'],
			'pin' => $user_exists[0]['pin'],
			'profile_picture' => $user_exists[0]['profile_picture'],
			'source' => 'mobile'
		);
		$session = $this->create_buyer_session($user_data);
		if (!$session) {
			return $this->output
				->set_content_type('application/json')
				->set_status_header(200)
				->set_output(json_encode(array(
					'type' => 'error',
					'message' => 'Issue During Creating a Session'
				)));
		}


		return $this->output
			->set_content_type('application/json')
			->set_status_header(200)
			->set_output(json_encode(array(
				'type' => 'success',
				'message' => 'Login Successfull'
			)));
	}

	public function email_template()
	{
		$this->load->view('email/test');
	}

	public function testDomPDF()
	{
		$htmlContent = $this->load->view('email/test', '', TRUE);
		$this->load->library('Pdfdom');
		$dompdf = new Pdfdom();
		$dompdf->load_html($htmlContent);
		$dompdf->setPaper('A4', 'landscape'); //landscape
		$dompdf->render();

		// Output the generated PDF (1 = download and 0 = preview) 
		// $dompdf->stream("codexworld", array("Attachment" => 0));

		//Save File
		$output = $dompdf->output();
		file_put_contents(FCPATH . 'Brochure.pdf', $output);
	}

	public function create_new_order()
	{
		if (isset($_POST['ip_address']) && isset($_POST['user_details'])) {
			//get buyer id
			$user_details = $_POST['user_details'];

			if ($user_details['source'] === 'mobile') {
				//Use userid passed in session
				$buyer_id = $user_details['id'];
				$buyer_email = $user_details['email'];
			} else {
				//get id from oauthID
				$buyer_data = $this->My_model->get('sss_buyer', array(
					'login_oauth_uid' => $user_details['login_oauth_uid'],
					'phone' => $user_details['phone']
				));

				if (!count($buyer_data) > 0) {
					return $this->output
						->set_content_type('application/json')
						->set_status_header(200)
						->set_output(json_encode(array(
							'type' => 'error',
							'message' => 'Failed to Find User Details'
						)));
				}
				$buyer_id = $buyer_data[0]['id'];
				$buyer_email = $buyer_data[0]['email'];
			}


			//create a new order and fetch its id
			$last_id = $this->My_model->insert('sss_orders', array(
				'buyer_id' => $buyer_id,
				'total_items' => 0,
				'total_price' => 0
			));

			//get cart items
			$cart_items = $this->shop_model->get_cart_items($this->input->post('ip_address'));

			//insert into order_items
			$cart_total = 0;
			foreach ($cart_items as $item) {
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


			//Send order details to sellers via email
			$order_data = $this->shop_model->send_order_details_seller($last_id);

			$buyer_details = $this->My_model->get('sss_buyer', array(
				'id' => $buyer_id
			));
			$order_totals = $this->My_model->get('sss_orders', array('id' => $last_id));

			if (count($order_data) > 0) {

				//Send Bill and Email to Buyer
				$htmlContent = '';
				$data['order_data'] = $order_data;
				$data['order_id'] = $last_id;
				$data['buyer_details'] = $buyer_details[0];
				$data['order_totals'] = $order_totals[0];
				$htmlContent = $this->load->view('email/orders_buyer', $data, TRUE);
				$this->load->library('Pdfdom');
				$dompdf = new Pdfdom();
				$dompdf->load_html($htmlContent);
				$dompdf->setPaper('A4', 'landscape'); //landscape
				$dompdf->render();
				$output = $dompdf->output();

				$config = array(
					'protocol' => 'smtp',
					'smtp_host' => SMTP_HOST,
					'smtp_port' => SMPT_PORT,
					'smtp_user' => SMPT_USER,
					'smtp_pass' => SMPT_PASSWORD,
					'mailtype'  => 'html',
					'charset'   => 'utf-8'
				);
				$this->load->library('email', $config);
				$this->email->initialize($config);

				$this->email->set_newline("\r\n");

				$this->email->from(SMPT_USER, "K2C - Kisan to Consumer");
				$this->email->to($buyer_email);
				$this->email->subject("K2C - Kisan to Consumer Order Request");
				//$mesg = $this->load->view('email_template',true);

				$this->email->message('Hello ' . $buyer_details[0]['name'] . ', Thank you for shopping with us. Please find the attached order details and invoices for your reference. For any assistance please feel free to contact us.');

				$this->email->attach($output, 'application/pdf', "Order-" . $last_id . ".pdf", false);


				if (!$this->email->send()) {
					// $this->email->print_debugger();
					return $this->output
						->set_content_type('application/json')
						->set_status_header(200)
						->set_output(json_encode(array(
							'type' => 'success',
							'message' => 'Failed to send email to buyer'
						)));
				}

				unset($dompdf);
				unset($data);
				unset($output);
				//Send Email and Bills to Sellers
				foreach ($order_data as $item) {
					$htmlContent = '';
					$data['item'] = $item;
					$data['order_id'] = $last_id;
					$data['buyer_details'] = $buyer_details[0];
					$data['order_totals'] = $order_totals[0];

					$htmlContent = $this->load->view('email/orders_seller', $data, TRUE);
					$this->load->library('Pdfdom');
					$dompdf = new Pdfdom();
					$dompdf->load_html($htmlContent);
					$dompdf->setPaper('A4', 'landscape'); //landscape
					$dompdf->render();
					$output = $dompdf->output();

					file_put_contents('Invoice.pdf', $output); //Save File


					//Send Email to Seller
					$config = array(
						'protocol' => 'smtp',
						'smtp_host' => SMTP_HOST,
						'smtp_port' => SMPT_PORT,
						'smtp_user' => SMPT_USER,
						'smtp_pass' => SMPT_PASSWORD,
						'mailtype'  => 'html',
						'charset'   => 'utf-8'
					);
					$this->load->library('email', $config);
					$this->email->initialize($config);

					$this->email->set_newline("\r\n");



					$this->email->from(SMPT_USER, "K2C - Kisan to Consumer");
					$this->email->to($item['seller_email']);
					$this->email->subject("K2C - Kisan to Consumer Request");
					$this->email->message('Hello ' . $item['shop_name'] . 'Owner, You got a new Order from K2C - Kisan to Consumer Portal. Please Login into the portal and Confirm/Cancel the order. Please find the attached order details.');
					// $this->email->attach($output, 'application/pdf', "Order-" . $last_id . ".pdf", false);
					$this->email->attach('Invoice.pdf');


					if (!$this->email->send()) {
						// $this->email->print_debugger();
						return $this->output
							->set_content_type('application/json')
							->set_status_header(200)
							->set_output(json_encode(array(
								'type' => 'success',
								'message' => $this->email->print_debugger()
							)));
					}
				}
			}
		} else {

			return $this->output
				->set_content_type('application/json')
				->set_status_header(200)
				->set_output(json_encode(array(
					'type' => 'error',
					'message' => 'Incomplete Data'
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



	public function cancel_order_buyer($order_id)
	{
		$del_order_items = $this->My_model->delete('sss_order_items', array(
			'order_id' => $order_id
		));

		if (!$del_order_items) {
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

		if (!$del_order) {
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
		if ($this->session->has_userdata('user')) {
			$seller_details = $this->My_model->get('sss_seller', array(
				'id' => $this->session->userdata('user')
			));

			$data['taxes'] = $this->My_model->get('sss_tax');
			$data['seller_name'] = $seller_details[0]['shop_name'];
			$data['categories'] = $this->My_model->get('sss_category');
			$data['uoms'] = $this->My_model->get('sss_uom');

			$this->load->view('templates/header', $data);
			$this->load->view('templates/menu');
			$this->load->view('products_config', $data);
			$this->load->view('templates/footer');
		} else {
			$this->load->view('login');
		}
	}

	public function register()
	{
		if ($this->input->server('REQUEST_METHOD') != 'POST') {
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

		if (!$this->form_validation->run()) {
			return $this->output
				->set_content_type('application/json')
				->set_status_header(200)
				->set_output(json_encode(array(
					'type' => 'error',
					'message' => validation_errors()
				)));
		}

		$seller_exists = $this->shop_model->seller_exists($this->input->post('mobile'));
		if ($seller_exists) {
			return $this->output
				->set_content_type('application/json')
				->set_status_header(200)
				->set_output(json_encode(array(
					'type' => 'error',
					'message' => 'Mobile no. already used.'
				)));
		}

		$status = $this->shop_model->addSeller($this->input->post());

		if (!$status) {
			return $this->output
				->set_content_type('application/json')
				->set_status_header(200)
				->set_output(json_encode(array(
					'type' => 'error',
					'message' => 'Operation failed. please try again later'
				)));
		}


		$config = array(
			'protocol' => 'smtp',
			'smtp_host' => SMTP_HOST,
			'smtp_port' => SMPT_PORT,
			'smtp_user' => SMPT_USER,
			'smtp_pass' => SMPT_PASSWORD,
			'mailtype'  => 'html',
			'charset'   => 'utf-8'
		);
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");

		$this->email->from(SMPT_USER, "K2C - Kisan to Consumer");
		$this->email->to($this->input->post('email'));
		$this->email->subject("K2C - Kisan to Consumer Registration");
		//$mesg = $this->load->view('email_template',true);
		$mesg = $this->load->view('email/thank_you', '', true);
		$this->email->message($mesg);

		if (!$this->email->send()) {
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
		if ($this->input->server('REQUEST_METHOD') != 'POST') {
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

		if (!$this->form_validation->run()) {
			return $this->output
				->set_content_type('application/json')
				->set_status_header(200)
				->set_output(json_encode(array(
					'type' => 'error',
					'message' => validation_errors()
				)));
		}

		$seller_exists = $this->shop_model->seller_exists($this->input->post('mobile_login'));
		if (!$seller_exists) {
			return $this->output
				->set_content_type('application/json')
				->set_status_header(200)
				->set_output(json_encode(array(
					'type' => 'error',
					'message' => 'No such user, Please register new.'
				)));
		}

		$password_match = $this->shop_model->seller_password($this->input->post('password_login'));
		if (!$password_match) {
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
				'redirect' => base_url() . 'Shop/products_config'
			)));
	}

	public function logout()
	{
		if (isset($_POST['user_type'])) {

			$user_type = $_POST['user_type'];

			if ($user_type === 'seller') {

				//Delete Session
				if (isset($_SESSION['user'])) unset($_SESSION['user']);

				return $this->output
					->set_content_type('application/json')
					->set_status_header(200)
					->set_output(json_encode(array(
						'type' => 'success',
						'message' => 'User Logout successfull',
						'loginType' => null,
						'redirect' => base_url() . 'Shop/seller'
					)));
			} else {

				//Buyer Logout
				$login_type = '';
				if (isset($_SESSION['buyer'])) {
					$login_type = $_SESSION['buyer']['source'];
					unset($_SESSION['buyer']);
				}

				return $this->output
					->set_content_type('application/json')
					->set_status_header(200)
					->set_output(json_encode(array(
						'type' => 'success',
						'message' => 'User Logout successfull',
						'loginType' => $login_type,
						'redirect' => base_url()
					)));
			}
		}
		return $this->output
			->set_content_type('application/json')
			->set_status_header(200)
			->set_output(json_encode(array(
				'type' => 'success',
				'message' => 'You were not logged in',
				'loginType' => null,
				'redirect' => base_url()
			)));
	}

	public function seller()
	{
		$this->load->view('login');
	}

	public function my_orders()
	{
		if ($this->session->has_userdata('user')) {
			$seller_details = $this->My_model->get('sss_seller', array(
				'id' => $this->session->userdata('user')
			));

			$data['seller_name'] = $seller_details[0]['shop_name'];

			$this->load->view('templates/header', $data);
			$this->load->view('templates/menu');
			$this->load->view('my_orders_seller', $data);
			$this->load->view('templates/footer');
		} else {
			$this->load->view('login');
		}
	}

	public function load_invoice($order_id)
	{
		if (isset($_SESSION['buyer'])) {
			$arr = array();
			$order = $this->shop_model->get_order_items($order_id);



			$buyer_details = $this->My_model->get('sss_buyer', array(
				'id' => $order[0]['buyer_id']
			));
			$order_totals = $this->My_model->get('sss_orders', array('id' => $order_id));

			foreach ($order as $item) {
				//push only if they are not cancelled orders
				if ($item['status'] !== 3) {
					if (!key_exists($item['seller_id'], $arr)) {
						//No key
						$arr[$item['seller_id']] = array(); //Create New Key
						$arr[$item['seller_id']]['items'] = array(); //Create New Key
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
					if (!key_exists($item['category_id'],  $arr[$item['seller_id']]['items'])) {
						$arr[$item['seller_id']]['items'][$item['category_id']] = array();
					}

					array_push($arr[$item['seller_id']]['items'][$item['category_id']], $item); //Push item in key

				}
			}




			$data['order'] = $arr;
			$data['order_id'] = $order_id;
			$data['buyer_details'] = $buyer_details[0];
			$data['order_totals'] = $order_totals[0];

			$this->load->view('templates/header');
			$this->load->view('templates/menu');
			$this->load->view('invoice', $data);
			$this->load->view('templates/footer');
		} else {
			$this->index();
		}
	}
}
