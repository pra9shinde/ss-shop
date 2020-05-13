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
        $this->db->select('product.id, product.name as product_name, product.description, product.image_url,  product.total_quantity, product.rem_quantity, product.price,product.pieces, product.uom_unit, product.mrp, category.id as category_id, category.name as category_name, category.description as category_description, seller.id as seller_id, seller.shop_name,  uom.id as uom, uom.name as uom_name', false);
        $this->db->from($this->table);
        $this->db->join('sss_category as category', 'product.category_id = category.id ','inner');
        $this->db->join('sss_seller as seller', 'product.seller_id  = seller.id ','inner');
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


    public function load_remaining_stock($stock,$uom)
    {
        $btn = '<span class="badge badge badge-';
        if($stock <= 10) : 
            $btn .= 'danger';
        else :
            $btn .= 'success';
        endif;
        $btn .= ' badge-glow badge-pill">';
        $btn .=$stock.' '.$uom;
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
       $img .='" alt="Product Image" style="width: 60px;height: auto;" data-action="zoom">';

       return $img;
    }

    public function load_offer_price($price)
    {
        // $data = '<div class="badge badge-glow badge-pill badge-border border-success success text-center">₹'.$price.'</div>';
        $data ='<img style="width:35px;" src="'.base_url().'assets/theme/images/price.svg">';
        $data .= '<div style="display:inline-block; margin-left:5px"><b>₹'. $price .'</b></div>';

        return $data;
    }



    /*------Mobile DT */
    public function get_product_details_mini($obj)
    {
        //Image
        $data = '
              <div class="tb-prod-details">
                   <div class="prod-image">
                        <img src="';
        $data .= $obj->image_url;
        $data .= '" alt="Product Image" style="width: 60px;height: auto;" data-action="zoom">
                   </div>';

        //Product Name
        $data .= '<h6 class="prod-name mb-prod"><b>Name : </b>';
        $data .= $obj->product_name;
        $data .= '</h6>';

        //Product Description
        $data .= '<h6 class="prod-desc mb-prod"><b>Description :</b>';
        $data .= $obj->description;
        $data .= '</h6>';

        //Product Category
        $data .= '<div class="prod-category mb-prod">
                    <h6 class="prod-name"><b>Category : </b> <button type="button" class="btn btn-sm btn-outline-info round">';
        $data .= $obj->category_name;
        $data .= '</button> </h6>  
                    </div>';

        //Prdocut pieces
        $data .= '<div class="prod-pieces">
                    <h6 style="margin-bottom:0;"><b>Pieces per order: </b> <p class="badge badge-warning" style="">Pieces - ';
        $data .= $obj->pieces;
        $data .= '</p></h6>
                    </div>';

        //UOM
        $data .= '<div class="prod-price mb-prod">
                <h6 class="prod-name"><b>UOM : ';
        $data .= $obj->uom_unit.' '. $obj->uom_name;
        $data .= '</b> </h6>
                </div>'; 

        //Product Quantity
        $data .= '<div class="rem-stock mb-prod">
                        <h6 class="prod-name"><b>In Stock: </b> ';
        $data .= '<span class="badge badge badge-';
        if($obj->rem_quantity <= 10) : 
            $data .= 'danger';
        else :
            $data .= 'success';
        endif;
        $data .= ' badge-glow badge-pill">';
        $data .=$obj->rem_quantity.' '.$obj->uom_name;
        $data .='</span>  
                    </h6>
                    </div>';

        //Product Price
        $data .= '<p class="prod-price mb-prod">
                        <b>MRP : <del class="grey">₹';
        $data .= $obj->mrp;
        $data .= '</del></b>
                    </p>';  

        //Offer Price
        $data .= '<p class="prod-price mb-prod">
                <h6 class="prod-name"><b><span class="badge badge-success">Offer Price </span>';
        $data .=': <span style="font-size:20px">₹'. $obj->price;
        $data .= '</span></b> </h6>
                </p>'; 
                    
        
             
        //Add to Cart
        $data .='<div class="prod-add-cart">
                <button type="button" class="btn btn-outline-blue-grey"  onclick="addToCart(';
        $data .= $obj->id;        
        $data .= ')">Add to Cart <i class="ft-shopping-cart"></i></button>
                    </div>
                    </div>';
        
        return $data;
    }

}
?>