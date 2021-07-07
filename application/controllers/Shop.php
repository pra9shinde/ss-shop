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

	/**************** Load Views *******************/
	public function index()
	{

		$total_records = 0;

		$page = isset($_GET['page']) ? $_GET['page'] : 1;
		$items_per_page = 6;
		$total_records = $this->My_model->get_total_count('sss_products', array('is_delete' => 0));
		$data['products'] = $this->shop_model->get_all_product_data($items_per_page, $page);

		if (isset($_SESSION['buyer'])) {
			$id = $_SESSION['buyer']['source'] === 'mobile' ? $_SESSION['buyer']['id'] : $_SESSION['buyer']['login_oauth_uid'];
			$buyer = array(
				'id' => $id,
				'name' => $_SESSION['buyer']['name'],
				'last_name' => $_SESSION['buyer']['last_name'],
				'profile_picture' => $_SESSION['buyer']['profile_picture'],
				'source' =>  $_SESSION['buyer']['source'],
			);

			$data['buyer_profile_det'] = $buyer;
		}

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


		$this->load->view('templates/header', $data);
		$this->load->view('templates/menu');
		$this->load->view('index', $data);
		$this->load->view('templates/footer');
	}

	//Buyer Login
	public function user_login()
	{
		$data = null;
		if (isset($_SESSION['buyer'])) {
			$id = $_SESSION['buyer']['source'] === 'mobile' ? $_SESSION['buyer']['id'] : $_SESSION['buyer']['login_oauth_uid'];
			$buyer = array(
				'id' => $id,
				'name' => $_SESSION['buyer']['name'],
				'last_name' => $_SESSION['buyer']['last_name'],
				'profile_picture' => $_SESSION['buyer']['profile_picture'],
				'source' =>  $_SESSION['buyer']['source'],
			);

			$data['buyer_profile_det'] = $buyer;
		}
		$this->load->view('templates/header', $data);
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
	}

	public function products()
	{


		//Category 
		$data['categories'] = $this->My_model->get('sss_category');

		if (isset($_SESSION['buyer'])) {
			$id = $_SESSION['buyer']['source'] === 'mobile' ? $_SESSION['buyer']['id'] : $_SESSION['buyer']['login_oauth_uid'];
			$buyer = array(
				'id' => $id,
				'name' => $_SESSION['buyer']['name'],
				'last_name' => $_SESSION['buyer']['last_name'],
				'profile_picture' => $_SESSION['buyer']['profile_picture'],
				'source' =>  $_SESSION['buyer']['source'],
			);

			$data['buyer_profile_det'] = $buyer;
		}

		$this->load->view('templates/header', $data);
		$this->load->view('templates/menu');
		$this->load->view('all_products', $data);
		$this->load->view('templates/footer');
	}

	public function profile_edit($buyer_id, $source)
	{
		if ($source === 'mobile') {
			$where = array('id' => $buyer_id, 'is_delete' => 0);
		} else {
			$where = array('login_oauth_uid' => $buyer_id, 'is_delete' => 0);
		}

		$buyer_data = $this->My_model->get('sss_buyer', $where);

		if (!count($buyer_data) > 0) {
			$this->user_login();
		}

		// Buyer Details for Header
		if (isset($_SESSION['buyer'])) {
			$id = $_SESSION['buyer']['source'] === 'mobile' ? $_SESSION['buyer']['id'] : $_SESSION['buyer']['login_oauth_uid'];
			$buyer = array(
				'id' => $id,
				'name' => $_SESSION['buyer']['name'],
				'last_name' => $_SESSION['buyer']['last_name'],
				'profile_picture' => $_SESSION['buyer']['profile_picture'],
				'source' =>  $_SESSION['buyer']['source'],
			);

			$data['buyer_profile_det'] = $buyer;
		}


		$data['buyer_details'] = $buyer_data[0];

		$this->load->view('templates/header', $data);
		$this->load->view('templates/menu');
		$this->load->view('buyer/user-edit', $data);
		$this->load->view('templates/footer');
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
		$total_excl_tax = doubleval($cart_total[0]['total']) - doubleval($tax_total[0]['total']);

		$data['total_excl_tax'] = $total_excl_tax;
		$data['cart_total'] = $cart_total[0]['total'];
		$data['tax_total'] = $tax_total[0]['total'];

		if (isset($_SESSION['buyer'])) {
			$id = $_SESSION['buyer']['source'] === 'mobile' ? $_SESSION['buyer']['id'] : $_SESSION['buyer']['login_oauth_uid'];
			$buyer = array(
				'id' => $id,
				'name' => $_SESSION['buyer']['name'],
				'last_name' => $_SESSION['buyer']['last_name'],
				'profile_picture' => $_SESSION['buyer']['profile_picture'],
				'source' =>  $_SESSION['buyer']['source'],
			);

			$data['buyer_profile_det'] = $buyer;
		}

		$this->load->view('templates/header', $data);
		$this->load->view('templates/menu');
		$this->load->view('cart', $data);
		$this->load->view('templates/footer');
	}

	public function products_config()
	{
		if (isset($_SESSION['seller'])) {
			if ($_SESSION['seller']['source'] === 'mobile') {
				$seller_details = $this->My_model->get('sss_seller', array(
					'id' => $_SESSION['seller']['id']
				));
			} else {
				$seller_details = $this->My_model->get('sss_seller', array(
					'login_oauth_uid' => $_SESSION['seller']['login_oauth_uid']
				));
			}

			$data['taxes'] = $this->My_model->get('sss_tax');
			$data['seller_name'] = $seller_details[0]['shop_name'];
			$data['categories'] = $this->My_model->get('sss_category');
			$data['uoms'] = $this->My_model->get('sss_uom');
			$id = $_SESSION['seller']['source'] === 'mobile' ? $_SESSION['seller']['id'] : $_SESSION['seller']['login_oauth_uid'];
			$buyer = array(
				'id' => $id,
				'name' => $seller_details[0]['name'],
				'shop_name' => $seller_details[0]['shop_name'],
				'profile_picture' => $seller_details[0]['profile_picture'],
				'source' =>  $_SESSION['seller']['source'],
			);

			$data['seller_profile_det'] = $buyer;



			$this->load->view('templates/header', $data);
			$this->load->view('templates/menu');
			$this->load->view('products_config', $data);
			$this->load->view('templates/footer');
		} else {
			$this->load->view('login');
		}
	}

	public function seller()
	{
		$this->load->view('login');
	}

	public function my_orders()
	{
		if (isset($_SESSION['seller'])) {

			//If the user is logged in via social network
			if ($_SESSION['seller']['source'] !== 'mobile') {
				$user_data = $this->My_model->get('sss_buyer', array('login_oauth_uid' => $_SESSION['seller']['login_oauth_uid']));
				if (count($user_data) <= 0) {
					return $this->output
						->set_content_type('application/json')
						->set_status_header(200)
						->set_output(json_encode(array(
							'type' => 'error',
							'message' => 'User Data Not Found, Login/Register',
							'redirect' => base_url() . 'Shop/seller'
						)));
				}
				$id = $user_data[0]['id'];
			} else {
				$id = $_SESSION['seller']['id'];
			}

			$seller_details = $this->My_model->get('sss_seller', array(
				'id' => $id
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

	public function change_password_verify($id)
	{
		$data['id'] = $id;

		$user_details = $this->My_model->get('sss_buyer', array('id' => $id));
		$data['user_details'] = $user_details[0];

		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('buyer/verify_reset_password', $data);
		$this->load->view('templates/footer');
	}



	public function seller_profile_edit($seller_id, $source)
	{
		if ($source === 'mobile') {
			$where = array('id' => $seller_id, 'login_oauth_uid' => NULL, 'is_delete' => 0);
		} else {
			$where = array('login_oauth_uid' => $seller_id, 'is_delete' => 0);
		}

		$seller_data = $this->My_model->get('sss_seller', $where);

		if (!count($seller_data) > 0) {
			$this->login();
		}

		// Buyer Details for Header
		$id = $_SESSION['seller']['source'] === 'mobile' ? $_SESSION['seller']['id'] : $_SESSION['seller']['login_oauth_uid'];
		$buyer = array(
			'id' => $id,
			'name' => $seller_data[0]['name'],
			'shop_name' => $seller_data[0]['shop_name'],
			'profile_picture' => $seller_data[0]['profile_picture'],
			'source' =>  $_SESSION['seller']['source'],
		);

		$data['seller_profile_det'] = $buyer;




		$data['seller_details'] = $seller_data[0];

		$this->load->view('templates/header', $data);
		$this->load->view('templates/menu');
		$this->load->view('seller/user-edit', $data);
		$this->load->view('templates/footer');
	}

	/**************** Load Views Ends *******************/

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
		$total_excl_tax = doubleval($cart_total[0]['total']) - doubleval($tax_total[0]['total']);

		$cart = ['cart_total' => strval($cart_total[0]['total']), 'tax_total' => strval($tax_total[0]['total']), 'cart_items' => count($cart_data), 'total_excl_tax' => strval($total_excl_tax), 'status' => 'success'];
		echo json_encode($cart);
	}

	//Create Session for Buyer
	public function create_buyer_session($user_data)
	{
		$_SESSION['buyer'] = $user_data;

		return isset($_SESSION['buyer']) ? true : false;
	}

	//Create Session for Seller
	public function create_seller_session($user_data)
	{
		$_SESSION['seller'] = $user_data;
		return isset($_SESSION['seller']) ? true : false;
	}

	//Check if user previously logged in using the google details
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

		$this->load->library('image_lib');

		$pathToUploadedFile = 'assets/theme/images/boy.png';
		//Validate File
		if (isset($_FILES['user_image']) && $_FILES['user_image']['size'] != 0) {

			$allowedExts = array("jpeg", "jpg", "png", "JPG", "JPEG", "PNG");
			$allowedTypes = array(IMAGETYPE_PNG, IMAGETYPE_JPEG, IMAGETYPE_GIF);
			$extension = pathinfo($_FILES["user_image"]["name"], PATHINFO_EXTENSION);
			$detectedType = exif_imagetype($_FILES['user_image']['tmp_name']);
			$type = $_FILES['user_image']['type'];
			if (!in_array($detectedType, $allowedTypes)) {
				return $this->output
					->set_content_type('application/json')
					->set_status_header(200)
					->set_output(json_encode(array(
						'type' => 'error',
						'message' => 'Only jpg,png files supported'
					)));
			}
			if (filesize($_FILES['user_image']['tmp_name']) > 3000000) {
				return $this->output
					->set_content_type('application/json')
					->set_status_header(200)
					->set_output(json_encode(array(
						'type' => 'error',
						'message' => 'The Image file size shoud not exceed 3MB!'
					)));
			}
			if (!in_array($extension, $allowedExts)) {
				return $this->output
					->set_content_type('application/json')
					->set_status_header(200)
					->set_output(json_encode(array(
						'type' => 'error',
						'message' => 'Invalid file extension'
					)));
			}

			//Upload file
			$aConfig['upload_path']      = 'uploads/users/';
			$aConfig['allowed_types']    = 'jpg|png|jpeg';
			$aConfig['max_size']     = '3000000';


			$this->upload->initialize($aConfig);

			if ($this->upload->do_upload('user_image')) {
				$ret = $this->upload->data();
			} else {
				return $this->output
					->set_content_type('application/json')
					->set_status_header(200)
					->set_output(json_encode(array(
						'type' => 'error',
						'message' => $this->upload->display_errors()
					)));
			}
			$pathToUploadedFile = 'uploads/users/' . $ret['file_name'];

			//Resize the image to 256 * 256
			$configer =  array(
				'image_library'   => 'gd2',
				'source_image'    =>  $ret['full_path'],
				'maintain_ratio'  =>  TRUE,
				'width'           =>  256,
				'height'          =>  256,
			);
			$this->image_lib->clear();
			$this->image_lib->initialize($configer);
			$this->image_lib->resize();
		}



		$this->load->library('encryption');


		$create_buyer = $this->My_model->insert('sss_buyer', array(
			'name' => $this->input->post('user_name'),
			'lastname' => $this->input->post('last_name'),
			'phone' => $this->input->post('user_contact'),
			'password' => $this->encryption->encrypt($this->input->post('password')),
			'email' => $this->input->post('user_email'),
			'address' => $this->input->post('user_address_1') . ' ' . $this->input->post('user_address_2'),
			'pin' => $this->input->post('user_pincode'),
			'profile_picture' => $pathToUploadedFile
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

	//Buyer forget password
	public function buyer_forget_password()
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

		$this->form_validation->set_rules('mobile', 'Mobile No.', 'trim|required|xss_clean');

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

		$user_exists = $this->My_model->get('sss_buyer', array('phone' => $this->input->post('mobile'), 'login_oauth_uid' => NULL, 'is_delete' => 0));

		if (count($user_exists) <= 0) {
			return $this->output
				->set_content_type('application/json')
				->set_status_header(200)
				->set_output(json_encode(array(
					'type' => 'error',
					'message' => 'You are not a registered user, Please register',
					'redirect' => ''
				)));
		}

		//Send a verification code to user email address
		$six_digit_random_number = mt_rand(100000, 999999);
		date_default_timezone_set('Asia/Kolkata');
		$code_expiry = date("Y-m-d H:i:s", strtotime('+1 hours'));
		$update_user = $this->My_model->update(
			'sss_buyer',
			array('id' => $user_exists[0]['id']),
			array(
				'verification_code' => $six_digit_random_number,
				'code_expiry' => $code_expiry,
			)
		);

		if (!$update_user) {
			return $this->output
				->set_content_type('application/json')
				->set_status_header(200)
				->set_output(json_encode(array(
					'type' => 'error',
					'message' => 'User Verification Code Updation Failed'
				)));
		}

		$url = base_url() . 'Shop/change_password_verify/' . $user_exists[0]['id'];

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
		$this->email->to($user_exists[0]['email']);
		$this->email->subject("K2C - Kisan to Consumer Verification Code");
		$this->email->message('Dear user, ' . $six_digit_random_number . ' is your verification code to change the password. Verification code will expire within 1 hour. You can click on this link to reset the password. <br> <a href="' . $url . '" target="_blank">Password Reset</a>');

		// if (!$this->email->send()) {
		// 	// $this->email->print_debugger();
		// 	return $this->output
		// 		->set_content_type('application/json')
		// 		->set_status_header(200)
		// 		->set_output(json_encode(array(
		// 			'type' => 'error',
		// 			'message' => 'Failed Sending Email'
		// 		)));
		// }

		return $this->output
			->set_content_type('application/json')
			->set_status_header(200)
			->set_output(json_encode(array(
				'type' => 'success',
				'message' => 'User Details Found',
				'redirect' => $url
			)));
	}

	//Verify 6 digit code and reset K2C user Password
	public function reset_buyer_password()
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

		$this->form_validation->set_rules('id', 'User Id', 'trim|required|xss_clean');
		$this->form_validation->set_rules('verification_code', 'Verification Code', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|xss_clean');
		$this->form_validation->set_rules('password2', 'Confirm Password', 'trim|required|min_length[6]|xss_clean');
		$this->form_validation->set_rules('password', 'Password Mismatch', 'required|matches[password2]');

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

		$user_exists = $this->My_model->get('sss_buyer', array('id' => $this->input->post('id')));

		if ($this->input->post('verification_code') !== $user_exists[0]['verification_code']) {
			return $this->output
				->set_content_type('application/json')
				->set_status_header(200)
				->set_output(json_encode(array(
					'type' => 'error',
					'message' => 'Invalid Verification Code',
					'redirect' => ''
				)));
		}

		date_default_timezone_set('Asia/Kolkata');
		$current_timestamp = date("Y-m-d H:i:s");

		if (strtotime($current_timestamp) > strtotime($user_exists[0]['code_expiry'])) {
			//Code Expired
			return $this->output
				->set_content_type('application/json')
				->set_status_header(200)
				->set_output(json_encode(array(
					'type' => 'error',
					'message' => 'Validation Code Expired',
					'redirect' => base_url() . 'Shop/change_password_verify/' . $this->input->post('id')
				)));
		}

		//Update New Password
		$this->load->library('encryption');
		$update = $this->My_model->update(
			'sss_buyer',
			array(
				'id' => $this->input->post('id')
			),
			array(
				'password' => $this->encryption->encrypt($this->input->post('password')),
				'verification_code' => NULL,
				'code_expiry' => NULL
			)
		);

		if (!$update) {
			return $this->output
				->set_content_type('application/json')
				->set_status_header(200)
				->set_output(json_encode(array(
					'type' => 'error',
					'message' => 'Failed to update Password',
					'redirect' => ''
				)));
		}

		return $this->output
			->set_content_type('application/json')
			->set_status_header(200)
			->set_output(json_encode(array(
				'type' => 'success',
				'message' => 'Password Updated Successfully'
			)));
	}

	//Update User Details from User Edit Profile
	public function update_buyer_details()
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

		$this->form_validation->set_rules('id', 'Buyer Id', 'trim|required|xss_clean');
		$this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('lastname', 'Surnaname', 'trim|required|xss_clean');
		$this->form_validation->set_rules('phone', 'Mobile No.', 'trim|required|numeric|min_length[10]|xss_clean');
		$this->form_validation->set_rules('email', 'Email Address', 'trim|valid_email|xss_clean');
		$this->form_validation->set_rules('address', 'Address', 'trim|required|xss_clean');
		$this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('source', 'source', 'trim|required|xss_clean');

		if (!$this->form_validation->run()) {
			return $this->output
				->set_content_type('application/json')
				->set_status_header(200)
				->set_output(json_encode(array(
					'type' => 'error',
					'message' => validation_errors()
				)));
		}

		//Collect the existing profile picture
		if ($this->input->post('source') === 'mobile') {
			$id = $this->input->post('id');
			$buyer_det = $this->My_model->get('sss_buyer', array('id' => $id));
			$existing_profile = FCPATH  . $buyer_det[0]['profile_picture'];
			$existing_profile_pic = str_replace("/", "\\", $existing_profile);
		} else {
			$buyer_det = $this->My_model->get('sss_buyer', array('login_oauth_uid' => $this->input->post('id')));
			$id = $buyer_det[0]['id'];
			$existing_profile = FCPATH  . $buyer_det[0]['profile_picture'];
			$existing_profile_pic = str_replace("/", "\\", $existing_profile);
		}


		$pathToUploadedFile = '';
		if (isset($_FILES['profile_image']) && $_FILES['profile_image']['size'] != 0) {

			$allowedExts = array("jpeg", "jpg", "png", "svg", "JPG", "JPEG", "PNG", "SVG");
			$allowedTypes = array(IMAGETYPE_PNG, IMAGETYPE_JPEG, IMAGETYPE_GIF);
			$extension = pathinfo($_FILES["profile_image"]["name"], PATHINFO_EXTENSION);
			$detectedType = exif_imagetype($_FILES['profile_image']['tmp_name']);
			$type = $_FILES['profile_image']['type'];
			if (!in_array($detectedType, $allowedTypes)) {
				return $this->output
					->set_content_type('application/json')
					->set_status_header(200)
					->set_output(json_encode(array(
						'type' => 'error',
						'message' => 'Only jpg,png files supported'
					)));
			}
			if (filesize($_FILES['profile_image']['tmp_name']) > 3000000) {
				return $this->output
					->set_content_type('application/json')
					->set_status_header(200)
					->set_output(json_encode(array(
						'type' => 'error',
						'message' => 'The Image file size shoud not exceed 3MB!'
					)));
			}
			if (!in_array($extension, $allowedExts)) {
				return $this->output
					->set_content_type('application/json')
					->set_status_header(200)
					->set_output(json_encode(array(
						'type' => 'error',
						'message' => 'Invalid file extension'
					)));
			}

			//Upload file
			$aConfig['upload_path']      =  'uploads/users/';
			$aConfig['allowed_types']    = 'jpg|png|jpeg|svg';
			$aConfig['max_size']     = '3000000';
			$this->upload->initialize($aConfig);
			if ($this->upload->do_upload('profile_image')) {
				$ret = $this->upload->data();
			} else {
				return $this->output
					->set_content_type('application/json')
					->set_status_header(200)
					->set_output(json_encode(array(
						'type' => 'error',
						'message' => $this->upload->display_errors()
					)));
			}

			$pathToUploadedFile = 'uploads/users/' . $ret['file_name'];


			$this->load->library('image_lib');
			//Resize the image to 256 * 256
			$configer =  array(
				'image_library'   => 'gd2',
				'source_image'    =>  $ret['full_path'],
				'maintain_ratio'  =>  TRUE,
				'width'           =>  256,
				'height'          =>  256,
			);
			$this->image_lib->clear();
			$this->image_lib->initialize($configer);
			$this->image_lib->resize();

			//Delete the old profile picture
			if (file_exists($existing_profile_pic)) {
				unlink($existing_profile_pic);
			}
		}

		$update_array = array(
			'name' => $this->input->post('name'),
			'lastname' => $this->input->post('lastname'),
			'email' => $this->input->post('email'),
			'phone' => $this->input->post('phone'),
			'address' => $this->input->post('address'),
			'pin' => $this->input->post('pin')
		);

		if (!empty($pathToUploadedFile)) {
			$update_array['profile_picture'] = $pathToUploadedFile;
		} else {
			$pathToUploadedFile = $existing_profile_pic;
		}

		$update = $this->My_model->update(
			'sss_buyer',
			array(
				'id' => $id
			),
			$update_array
		);

		if (!$update) {
			return $this->output
				->set_content_type('application/json')
				->set_status_header(200)
				->set_output(json_encode(array(
					'type' => 'error',
					'message' => 'Failed to update details'
				)));
		}

		// update cookie details 
		$user_data = array(
			'email' => $this->input->post('email'),
			'last_name' => $this->input->post('lastname'),
			'name' => $this->input->post('name'),
			'phone' => $this->input->post('phone'),
			'address' => $this->input->post('address'),
			'pin' => $this->input->post('pin'),
			'profile_picture' => $pathToUploadedFile,
			'source' => $this->input->post('source')
		);

		if ($this->input->post('source') === 'mobile') {
			$user_data['id'] = $this->input->post('id');
		} else {
			$user_data['login_oauth_uid'] = $this->input->post('id');
		}

		$session = $this->create_buyer_session($user_data);
		if (!$session) {
			return $this->output
				->set_content_type('application/json')
				->set_status_header(200)
				->set_output(json_encode(array(
					'type' => 'error',
					'message' => 'Failed Updating User Session'
				)));
		}

		return $this->output
			->set_content_type('application/json')
			->set_status_header(200)
			->set_output(json_encode(array(
				'type' => 'success',
				'message' => 'Profile Updated Successfully'
			)));
	}

	//Buyer Change Password only K2C user
	public function change_password_buyer()
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

		$this->form_validation->set_rules('id', 'Buyer Id', 'trim|required|xss_clean');
		$this->form_validation->set_rules('old_pass', 'Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|xss_clean');
		$this->form_validation->set_rules('password2', 'Confirm Password', 'trim|required|min_length[6]|xss_clean');
		$this->form_validation->set_rules('password', 'Password Mismatch', 'required|matches[password2]');


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

		$user_data = $this->My_model->get('sss_buyer', array('id' => $this->input->post('id')));
		if (count($user_data) <= 0) {
			return $this->output
				->set_content_type('application/json')
				->set_status_header(200)
				->set_output(json_encode(array(
					'type' => 'error',
					'message' => 'No user found, please Register'
				)));
		}

		$decrypted_pass =  $this->encryption->decrypt($user_data[0]['password']);
		if ($decrypted_pass !== $this->input->post('old_pass')) {
			return $this->output
				->set_content_type('application/json')
				->set_status_header(200)
				->set_output(json_encode(array(
					'type' => 'error',
					'message' => 'Wrong Existing Password'
				)));
		}

		//Update new Password
		$update_user = $this->My_model->update(
			'sss_buyer',
			array('id' => $this->input->post('id')),
			array(
				'password' =>  $this->encryption->encrypt($this->input->post('password')),
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

		return $this->output
			->set_content_type('application/json')
			->set_status_header(200)
			->set_output(json_encode(array(
				'type' => 'success',
				'message' => 'Password Updated Successfully'
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

	//Check if fb google user has filled all data
	public function	check_seller_details()
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
		$user_exists = $this->My_model->get('sss_seller', array('login_oauth_uid' => $user_data['login_oauth_uid']));

		if (
			count($user_exists) > 0 && $user_exists[0]['shop_name'] !== '' && $user_exists[0]['email'] !== '' && $user_exists[0]['phone'] !== '' && $user_exists[0]['shop_address'] !== '' && $user_exists[0]['pin'] !== '' && $user_exists[0]['name'] !== ''
		) {
			$user_data = array(
				'login_oauth_uid' => $user_exists[0]['login_oauth_uid'],
				'name' => $user_exists[0]['name'],
				'shop_name' => $user_exists[0]['shop_name'],
				'email' => $user_exists[0]['email'],
				'phone' => $user_exists[0]['phone'],
				'shop_address' => $user_exists[0]['shop_address'],
				'pin' => $user_exists[0]['pin'],
				'profile_picture' => $user_exists[0]['profile_picture'],
				'source' => $_POST['user_data']['source']
			);
			$session = $this->create_seller_session($user_data);
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

	//Add or Update google/fb logged in users with all data
	public function complete_seller_details()
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
		$this->form_validation->set_rules('shop_name', 'Shop Name', 'trim|required|xss_clean');
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

		$user_exists = $this->My_model->get('sss_seller', array('login_oauth_uid' => $this->input->post('oauth')));

		if (count($user_exists) > 0) {
			//User exists update the data
			$update_user = $this->My_model->update(
				'sss_seller',
				array('login_oauth_uid' => $this->input->post('oauth')),
				array(
					'shop_name' => $this->input->post('shop_name'),
					'name' => $this->input->post('user_name') . ' ' . $this->input->post('last_name'),
					'phone' => $this->input->post('user_contact'),
					'email' => $this->input->post('user_email'),
					'shop_address' => $this->input->post('user_address_1') . ' ' . $this->input->post('user_address_2'),
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
			$create_buyer = $this->My_model->insert('sss_seller', array(
				'login_oauth_uid' => $this->input->post('oauth'),
				'shop_name' => $this->input->post('shop_name'),
				'name' => $this->input->post('user_name') . ' ' . $this->input->post('last_name'),
				'phone' => $this->input->post('user_contact'),
				'email' => $this->input->post('user_email'),
				'shop_address' => $this->input->post('user_address_1') . ' ' . $this->input->post('user_address_2'),
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

		//Create a Seller session
		$user_data = array(
			'login_oauth_uid' => $this->input->post('oauth'),
			'name' => $this->input->post('user_name') . ' ' . $this->input->post('last_name'),
			'shop_name' => $this->input->post('shop_name'),
			'email' => $this->input->post('user_email'),
			'phone' => $this->input->post('user_contact'),
			'shop_address' => $this->input->post('user_address_1') . ' ' . $this->input->post('user_address_2'),
			'pin' => $this->input->post('user_pincode'),
			'profile_picture' => $this->input->post('profile_picture'),
			'source' => $this->input->post('oauth_source')
		);
		$session = $this->create_seller_session($user_data);

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

	//Create new Order, Create Invoice for Seller as well as buyer. Send those invoices to buyer and seller via email
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

	//User Cancels the order
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

	//Seller registration
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
		$this->form_validation->set_rules('name', 'Your Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('shop_address', 'Shop Address', 'trim|required|xss_clean');
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

	//Seller Login
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
					'message' => 'No such user, Please register.'
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

		//Create a Seller session
		$user_data = array(
			'id' => $seller_exists[0]['id'],
			'name' => $seller_exists[0]['name'],
			'shop_name' => $seller_exists[0]['shop_name'],
			'email' => $seller_exists[0]['email'],
			'phone' => $seller_exists[0]['phone'],
			'shop_address' => $seller_exists[0]['shop_address'],
			'pin' => $seller_exists[0]['pin'],
			'profile_picture' => $seller_exists[0]['profile_picture'],
			'source' => 'mobile'
		);
		$session = $this->create_seller_session($user_data);


		return $this->output
			->set_content_type('application/json')
			->set_status_header(200)
			->set_output(json_encode(array(
				'type' => 'success',
				'message' => 'Login Successfull',
				'redirect' => base_url() . 'Shop/products_config'
			)));
	}

	//Seller forget password
	public function seller_forget_password()
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

		$this->form_validation->set_rules('mobile_login', 'Mobile No.', 'trim|required|xss_clean');

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

		$user_exists = $this->My_model->get('sss_seller', array('phone' => $this->input->post('mobile_login'), 'login_oauth_uid' => NULL, 'is_delete' => 0));

		if (count($user_exists) <= 0) {
			return $this->output
				->set_content_type('application/json')
				->set_status_header(200)
				->set_output(json_encode(array(
					'type' => 'error',
					'message' => 'You are not a registered user, Please register',
					'redirect' => ''
				)));
		}

		//Send a verification code to user email address
		$six_digit_random_number = mt_rand(100000, 999999);
		date_default_timezone_set('Asia/Kolkata');
		$code_expiry = date("Y-m-d H:i:s", strtotime('+1 hours'));
		$update_user = $this->My_model->update(
			'sss_seller',
			array('id' => $user_exists[0]['id']),
			array(
				'verification_code' => $six_digit_random_number,
				'code_expiry' => $code_expiry,
			)
		);

		if (!$update_user) {
			return $this->output
				->set_content_type('application/json')
				->set_status_header(200)
				->set_output(json_encode(array(
					'type' => 'error',
					'message' => 'User Verification Code Updation Failed'
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
		$this->email->to($user_exists[0]['email']);
		$this->email->subject("K2C - Kisan to Consumer Verification Code");
		$this->email->message('Dear user, ' . $six_digit_random_number . ' is your verification code to change the password. Verification code will expire within 1 hour.');

		if (!$this->email->send()) {
			// $this->email->print_debugger();
			return $this->output
				->set_content_type('application/json')
				->set_status_header(200)
				->set_output(json_encode(array(
					'type' => 'success',
					'message' => 'Failed Sending Verification Code'
				)));
		}

		return $this->output
			->set_content_type('application/json')
			->set_status_header(200)
			->set_output(json_encode(array(
				'type' => 'success',
				'message' => 'Verification Code Sent Successfully',
				'seller_id' => $user_exists[0]['id']
			)));
	}

	//Seller Verify 6 digit code and reset K2C user Password
	public function reset_seller_password()
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

		$this->form_validation->set_rules('seller_id_forget', 'User Id', 'trim|required|xss_clean');
		$this->form_validation->set_rules('code', 'Verification Code', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password_forget', 'Password', 'trim|required|min_length[6]|xss_clean');
		$this->form_validation->set_rules('password2_forget', 'Confirm Password', 'trim|required|min_length[6]|xss_clean');
		$this->form_validation->set_rules('password_forget', 'Password Mismatch', 'required|matches[password2_forget]');

		if (!$this->form_validation->run()) {
			return $this->output
				->set_content_type('application/json')
				->set_status_header(200)
				->set_output(json_encode(array(
					'type' => 'error',
					'message' => validation_errors()
				)));
		}

		$user_exists = $this->My_model->get('sss_seller', array('id' => $this->input->post('seller_id_forget')));


		if ($this->input->post('code') !== $user_exists[0]['verification_code']) {
			return $this->output
				->set_content_type('application/json')
				->set_status_header(200)
				->set_output(json_encode(array(
					'type' => 'error',
					'message' => 'Invalid Verification Code',
					'redirect' => ''
				)));
		}

		date_default_timezone_set('Asia/Kolkata');
		$current_timestamp = date("Y-m-d H:i:s");

		if (strtotime($current_timestamp) > strtotime($user_exists[0]['code_expiry'])) {
			//Code Expired
			return $this->output
				->set_content_type('application/json')
				->set_status_header(200)
				->set_output(json_encode(array(
					'type' => 'error',
					'message' => 'Validation Code Expired'
				)));
		}

		//Update New Password
		$this->load->library('encryption');
		$update = $this->My_model->update(
			'sss_seller',
			array(
				'id' => $this->input->post('seller_id_forget')
			),
			array(
				'password' => $this->encryption->encrypt($this->input->post('password_forget')),
				'verification_code' => NULL,
				'code_expiry' => NULL
			)
		);

		if (!$update) {
			return $this->output
				->set_content_type('application/json')
				->set_status_header(200)
				->set_output(json_encode(array(
					'type' => 'error',
					'message' => 'Failed to update Password',
					'redirect' => ''
				)));
		}

		return $this->output
			->set_content_type('application/json')
			->set_status_header(200)
			->set_output(json_encode(array(
				'type' => 'success',
				'message' => 'Password Updated Successfully'
			)));
	}


	//Seller Details - if FB, Google incomplete data view
	public function seller_details()
	{
		if ($this->input->server('REQUEST_METHOD') != 'POST') {
			$this->login();
			return;
		}

		$user_data = array(
			'success_redirect' => base_url() . 'Shop/products_config',
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
		$this->load->view('seller/user_details_fb_google', $data);
		$this->load->view('templates/footer');
	}

	//Update User Details from User Edit Profile
	public function update_seller_details()
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

		$this->form_validation->set_rules('id', 'Seller Id', 'trim|required|xss_clean');
		$this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('shop_name', 'Shop Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('phone', 'Mobile No.', 'trim|required|numeric|min_length[10]|xss_clean');
		$this->form_validation->set_rules('pin', 'Pin/ Zip Code', 'trim|required|numeric|max_length[6]|xss_clean');
		$this->form_validation->set_rules('email', 'Email Address', 'trim|valid_email|xss_clean');
		$this->form_validation->set_rules('address', 'Shop Address', 'trim|required|xss_clean');
		$this->form_validation->set_rules('source', 'source', 'trim|required|xss_clean');

		if (!$this->form_validation->run()) {
			return $this->output
				->set_content_type('application/json')
				->set_status_header(200)
				->set_output(json_encode(array(
					'type' => 'error',
					'message' => validation_errors()
				)));
		}

		//Collect the existing profile picture
		if ($this->input->post('source') === 'mobile') {
			$id = $this->input->post('id');
			$buyer_det = $this->My_model->get('sss_seller', array('id' => $id));
			$existing_profile = FCPATH  . $buyer_det[0]['profile_picture'];
			$existing_profile_pic = str_replace("/", "\\", $existing_profile);
		} else {
			$buyer_det = $this->My_model->get('sss_seller', array('login_oauth_uid' => $this->input->post('id')));
			$id = $buyer_det[0]['id'];
			$existing_profile = FCPATH  . $buyer_det[0]['profile_picture'];
			$existing_profile_pic = str_replace("/", "\\", $existing_profile);
		}


		$pathToUploadedFile = '';
		if (isset($_FILES['profile_image']) && $_FILES['profile_image']['size'] != 0) {

			$allowedExts = array("jpeg", "jpg", "png", "svg", "JPG", "JPEG", "PNG", "SVG");
			$allowedTypes = array(IMAGETYPE_PNG, IMAGETYPE_JPEG, IMAGETYPE_GIF);
			$extension = pathinfo($_FILES["profile_image"]["name"], PATHINFO_EXTENSION);
			$detectedType = exif_imagetype($_FILES['profile_image']['tmp_name']);
			$type = $_FILES['profile_image']['type'];
			if (!in_array($detectedType, $allowedTypes)) {
				return $this->output
					->set_content_type('application/json')
					->set_status_header(200)
					->set_output(json_encode(array(
						'type' => 'error',
						'message' => 'Only jpg,png files supported'
					)));
			}
			if (filesize($_FILES['profile_image']['tmp_name']) > 3000000) {
				return $this->output
					->set_content_type('application/json')
					->set_status_header(200)
					->set_output(json_encode(array(
						'type' => 'error',
						'message' => 'The Image file size shoud not exceed 3MB!'
					)));
			}
			if (!in_array($extension, $allowedExts)) {
				return $this->output
					->set_content_type('application/json')
					->set_status_header(200)
					->set_output(json_encode(array(
						'type' => 'error',
						'message' => 'Invalid file extension'
					)));
			}

			//Upload file
			$aConfig['upload_path']      =  'uploads/users/';
			$aConfig['allowed_types']    = 'jpg|png|jpeg|svg';
			$aConfig['max_size']     = '3000000';
			$this->upload->initialize($aConfig);
			if ($this->upload->do_upload('profile_image')) {
				$ret = $this->upload->data();
			} else {
				return $this->output
					->set_content_type('application/json')
					->set_status_header(200)
					->set_output(json_encode(array(
						'type' => 'error',
						'message' => $this->upload->display_errors()
					)));
			}

			$pathToUploadedFile = 'uploads/users/' . $ret['file_name'];


			$this->load->library('image_lib');
			//Resize the image to 256 * 256
			$configer =  array(
				'image_library'   => 'gd2',
				'source_image'    =>  $ret['full_path'],
				'maintain_ratio'  =>  TRUE,
				'width'           =>  256,
				'height'          =>  256,
			);
			$this->image_lib->clear();
			$this->image_lib->initialize($configer);
			$this->image_lib->resize();

			//Delete the old profile picture
			if (file_exists($existing_profile_pic)) {
				unlink($existing_profile_pic);
			}
		}

		$update_array = array(
			'name' => $this->input->post('name'),
			'shop_name' => $this->input->post('shop_name'),
			'email' => $this->input->post('email'),
			'phone' => $this->input->post('phone'),
			'shop_address' => $this->input->post('address'),
			'pin' => $this->input->post('pin')
		);

		if (!empty($pathToUploadedFile)) {
			$update_array['profile_picture'] = $pathToUploadedFile;
		} else {
			$pathToUploadedFile = $existing_profile_pic;
		}

		$update = $this->My_model->update(
			'sss_seller',
			array(
				'id' => $id
			),
			$update_array
		);

		if (!$update) {
			return $this->output
				->set_content_type('application/json')
				->set_status_header(200)
				->set_output(json_encode(array(
					'type' => 'error',
					'message' => 'Failed to update details'
				)));
		}

		// update cookie details 
		$user_data = array(
			'email' => $this->input->post('email'),
			'shop_name' => $this->input->post('shop_name'),
			'name' => $this->input->post('name'),
			'phone' => $this->input->post('phone'),
			'shop_address' => $this->input->post('shop_address'),
			'pin' => $this->input->post('pin'),
			'profile_picture' => $pathToUploadedFile,
			'source' => $this->input->post('source')
		);

		if ($this->input->post('source') === 'mobile') {
			$user_data['id'] = $this->input->post('id');
		} else {
			$user_data['login_oauth_uid'] = $this->input->post('id');
		}

		$session = $this->create_buyer_session($user_data);
		if (!$session) {
			return $this->output
				->set_content_type('application/json')
				->set_status_header(200)
				->set_output(json_encode(array(
					'type' => 'error',
					'message' => 'Failed Updating User Session'
				)));
		}

		return $this->output
			->set_content_type('application/json')
			->set_status_header(200)
			->set_output(json_encode(array(
				'type' => 'success',
				'message' => 'Profile Updated Successfully'
			)));
	}

	//Seller Change Password only K2C user
	public function change_password_seller()
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

		$this->form_validation->set_rules('id', 'Seller Id', 'trim|required|xss_clean');
		$this->form_validation->set_rules('old_pass', 'Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|xss_clean');
		$this->form_validation->set_rules('password2', 'Confirm Password', 'trim|required|min_length[6]|xss_clean');
		$this->form_validation->set_rules('password', 'Password Mismatch', 'required|matches[password2]');


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

		$user_data = $this->My_model->get('sss_seller', array('id' => $this->input->post('id')));
		if (count($user_data) <= 0) {
			return $this->output
				->set_content_type('application/json')
				->set_status_header(200)
				->set_output(json_encode(array(
					'type' => 'error',
					'message' => 'No user found, please Register'
				)));
		}

		$decrypted_pass =  $this->encryption->decrypt($user_data[0]['password']);
		if ($decrypted_pass !== $this->input->post('old_pass')) {
			return $this->output
				->set_content_type('application/json')
				->set_status_header(200)
				->set_output(json_encode(array(
					'type' => 'error',
					'message' => 'Wrong Existing Password'
				)));
		}

		//Update new Password
		$update_user = $this->My_model->update(
			'sss_seller',
			array('id' => $this->input->post('id')),
			array(
				'password' =>  $this->encryption->encrypt($this->input->post('password')),
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

		return $this->output
			->set_content_type('application/json')
			->set_status_header(200)
			->set_output(json_encode(array(
				'type' => 'success',
				'message' => 'Password Updated Successfully'
			)));
	}


	//Common Signiout Function for both Seller as well as Buyer
	public function logout()
	{

		if (isset($_POST['user_type'])) {

			$user_type = $_POST['user_type'];

			if ($user_type === 'seller') {
				//Delete Session
				$login_type = '';

				if (isset($_SESSION['seller'])) {
					$login_type = $_SESSION['seller']['source'];
					unset($_SESSION['seller']);
				}

				return $this->output
					->set_content_type('application/json')
					->set_status_header(200)
					->set_output(json_encode(array(
						'type' => 'success',
						'message' => 'User Logout successfull',
						'loginType' => $login_type,
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

	//Preview Invoice to buyer
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
