<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Product_DT extends CI_Model {

		public function __construct() {
			parent::__construct();
			$this->load->database();
		}

	var $table = 'sss_products as product';
    var $column_order = array('product.id', 'product.name', 'category.name', 'product.quantity', 'product.rem_quantity', 'product.price','product.pieces', 'product.mrp', 'taxes.percentage'); //set column field database for datatable orderable
    var $column_search = array('product.name', 'category.name', 'product.quantity', 'product.rem_quantity', 'product.price','product.pieces', 'product.mrp', 'taxes.percentage'); //set column field database for datatable searchable 
    var $order = array('product.id' => 'asc'); // default order 
 
 
	private function _get_datatables_query()
    {   
        
        if($this->session->has_userdata('user')){
            $this->db->where('product.seller_id ', $this->session->userdata('user'));
            $this->db->where('product.is_delete', 0);
        }
        
        $this->db->select('product.id, product.name as product_name, category.name as category_name, product.category_id, product.description, product.image_url, product.total_quantity, product.rem_quantity, product.price, product.pieces, product.uom_unit, product.mrp, product.tax as tax_id, taxes.percentage as tax, uom.id as uom, uom.name as uom_name', false);
        $this->db->from($this->table);
        $this->db->join('sss_category as category', 'product.category_id = category.id ','inner');
        $this->db->join('sss_tax as taxes', 'product.tax = taxes.id ','left');
        $this->db->join('sss_uom as uom', 'uom.id = product.uom ','left');
        
        	
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
        return $query->result();
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


    public function load_image($img)
    {
        $image = '<img src="';
        $image .= $img['image_url'];
        $image .= '" alt="Product Image" style="height:50px;">';

        return $image;
    }








}
?>