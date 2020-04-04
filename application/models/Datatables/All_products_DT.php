<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class All_products_DT extends CI_Model {

		public function __construct() {
			parent::__construct();
			$this->load->database();
		}

	var $table = 'sss_products as product';
    var $column_order = array('product.id', 'product.name as product_name', 'product.description', 'product.image_url',  'product.total_quantity', 'product.rem_quantity', 'product.price', 'product.pieces', 'category.id as category_id', 'category.name as category_name', 'category.description as category_description', 'seller.id as seller_id', 'seller.shop_name'); //set column field database for datatable orderable
    var $column_search = array('product.name', 'product.description', 'product.total_quantity', 'product.rem_quantity', 'product.price', 'product.pieces', 'category.name', 'category.description', 'seller.shop_name'); //set column field database for datatable searchable 
    var $order = array('product.id' => 'asc'); // default order 
 
 
	private function _get_datatables_query()
    {       

        if($this->input->post('category') !== 'all'){
            $this->db->where('category.name', $this->input->post('category'));
        }
        
        $this->db->where('product.is_delete', 0);
        $this->db->select('product.id, product.name as product_name, product.description, product.image_url,  product.total_quantity, product.rem_quantity, product.price,product.pieces, category.id as category_id, category.name as category_name, category.description as category_description, seller.id as seller_id, seller.shop_name', false);
        $this->db->from($this->table);
        $this->db->join('sss_category as category', 'product.category_id = category.id ','inner');
        $this->db->join('sss_seller as seller', 'product.seller_id  = seller.id ','inner');
        
        	
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

    public function load_category($category)
    {
        $btn  = '<button type="button" class="btn btn-sm btn-outline-info round">';
        $btn .= $category;
        $btn .= '</button>';

        return $btn;
    }

    public function load_pieces($piece)
    {
       $btn = '<p class="badge badge-warning" style="font-weight: 600;font-size: 1rem;">Pieces -'; 
       $btn .= $piece;
       $btn .= '</p>';
       return $btn;
    }


    public function load_remaining_stock($stock)
    {
        $btn = '<span class="badge badge badge-';
        if($stock <= 10) : 
            $btn .= 'danger';
        else :
            $btn .= 'success';
        endif;
        $btn .= ' badge-glow badge-pill">';
        $btn .=$stock;
        $btn .='</span>';

        return $btn;
    }


    public function load_addcart_btns($id)
    {
      
        // $btn = '<div class="input-group">';
        // $btn .= '<div class="input-group">';
        // $btn .= '<input type="text" class="touchspin" value="1" ';  
        // $btn .= 'data-bts-button-down-class="btn btn-primary" data-bts-button-up-class="btn'; $btn .= 'btn-primary">';
        // $btn .=  '</div>';
        // $btn .= '</div>';
        $btn = '<button type="button" class="btn btn-secondary mr-1 mb-1" onclick="addToCart(';
        $btn .= $id;
        $btn .= ')"><i class="ficon ft-shopping-cart"></i></button>';

        return $btn;
    }

    public function load_product_image($image)
    {
       $img = '<img src="';
       $img .= $image['image_path'];
       $img .='" alt="Product Image" style="width: 100px;height: auto;">';

       return $img;
    }




}
?>