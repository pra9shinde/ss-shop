<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Seller_Orders_DT extends CI_Model {

		public function __construct() {
			parent::__construct();
			$this->load->database();
		}

	var $table = 'sss_products as product';
    var $column_order = array('product.id', 'product.name', 'category.name', 'product.quantity', 'product.rem_quantity', 'product.price','product.pieces'); //set column field database for datatable orderable
    var $column_search = array('product.name', 'product.description', 'product.rem_quantity', 'product.price', 'product.pieces', 'category.name', 'order_items.quantity', 'order_items.order_price', 'order_items.status as item_status', 'buyer.name', 'buyer.phone', 'order.total_items', 'order.total_price', 'order.create_date', 'order.status', 'order_status.status_name'); //set column field database for datatable searchable 
    var $order = array('order.id' => 'desc'); // default order 
 
 
	private function _get_datatables_query()
    {   
        
        if($this->session->has_userdata('user')){
            $this->db->where('product.seller_id ', $this->session->userdata('user'));
            $this->db->where('product.is_delete', 0);
        }
        
        $this->db->select('product.id as product_id, product.category_id, product.name, product.description, product.image_url, product.rem_quantity, product.price, product.pieces, category.name as category_name, order_items.order_id as main_order_id, order_items.buyer_id, order_items.quantity as line_quantity, order_items.order_price as line_total, order_items.status as item_status, order_items.status_change_count, buyer.name as buyer_name, buyer.phone, order.total_items, order.total_price, order.create_date, order.status, order_status.status_name', false);
        $this->db->from($this->table);
        $this->db->join('sss_order_items as order_items', 'order_items.product_id = product.id ','inner');
        $this->db->join('sss_buyer as buyer', 'buyer.id = order_items.buyer_id ','inner');
        $this->db->join('sss_category as category', 'category.id = product.category_id ','inner');
        $this->db->join('sss_orders as order', 'order.id = order_items.order_id ','inner');
        $this->db->join('sss_order_status as order_status', 'order.status = order_status.id ','inner');
        
        	
		$i = 0;
        foreach ($this->column_search as $item) // loop column 
        {
            
            if($_POST['search']['value']) // if datatable send POST for search
            {
                if($i===0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
 
                if(count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }
         
        if(isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
 
    public function get_datatables()
    {
        $this->_get_datatables_query();
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result_array();
    }
 
    public function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
				
        return $query->num_rows();
    }
 
    public function count_all()
    {
			$this->_get_datatables_query();
			$query = $this->db->get();
			
			return $query->num_rows();
    }
 
    public function load_checkbox_btns($id){
        $checkbox = '<div class="skin skin-flat"><fieldset><input type="checkbox" ';
        $checkbox .= 'data-internalid="';
        $checkbox	.= $id;
        $checkbox	.= '"';
        $checkbox .= 'name="input-15" class="child-checkbox-flatclass" ></fieldset></div>';

        return $checkbox;
    }

    public function load_multi_btns($obj){
        $btns = '<div class="btn-group mx-2" role="group" aria-label="Second Group">';
        $btns .= '<button type="button" data-toggle="modal" class="btn btn-icon btn-warning" onclick=\'editProduct(';
        $btns .= json_encode($obj);
        $btns .= ')\'><i class="la la-edit"></i></button>';
        $btns .= '<button type="button" class="btn btn-icon btn-danger" onclick="deleteProduct(';
        $btns .= $obj->id;
        $btns .= ')"><i class="la la-trash"></i></button></div>';
        
        return $btns;
    }


    public function get_status($status, $status_name)
    {
        if($status == 1){
            $data = '<span class="badge badge-info badge-sm">';
            $data .= $status_name;
            $data .= '</span>';
        }
        elseif($status == 2){
            $data = '<span class="badge badge-success badge-sm">';
            $data .= $status_name;
            $data .= '</span>';
        }
        elseif($status == 3){
            $data = '<span class="badge badge-danger badge-sm">';
            $data .= $status_name;
            $data .= '</span>';
        }
        else{
            $data = '<span class="badge badge-warning badge-sm">';
            $data .= $status_name;
            $data .= '</span>';
        }

        return $data;
    }

    public function get_order_id($id)
    {
        $link = '<i class="la la-plus-circle table-plus-icon"></i><span>';
        $link .= $id;
        $link .= '</span>';
        return $link;
    }
    
    public function get_confirm_order($order_id,$current_status, $status_change_count)
    {
        
        $btn = '<div class="btn-group">';
        $btn .= '<button type="button" class="btn btn-secondary dropdown-toggle mr-1 mb-1"'; 
        $btn .='data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size:10px;">Action</button>';
        $btn .= '<div class="dropdown-menu">';
        if($current_status != 2)
        {
            $btn .='<a class="dropdown-item" href="#" onclick="ChangeOrderStatus(';
            $btn .= $order_id;
            $btn .= ',';
            $btn .= 2;
            $btn .= ')">Confirm</a>';
        }
        if($status_change_count == 0)
        {
            $btn .= '<a class="dropdown-item" href="#" onclick="cancelOrder(';
            $btn .= $order_id;
            $btn .= ')">Cancel</a>';
        }

        $btn .= '</div>';
        $btn .= '</div>';

  


        return $btn;
    }






}
?>