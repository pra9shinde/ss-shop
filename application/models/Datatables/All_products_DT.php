<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class All_products_DT extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    var $table = 'sss_products as product';
    var $column_order = array('product.id', 'product.name as product_name', 'product.description', 'product.image_url',  'product.total_quantity', 'product.rem_quantity', 'product.price', 'product.pieces', 'category.id as category_id', 'category.name as category_name', 'category.description as category_description', 'seller.id as seller_id', 'seller.shop_name'); //set column field database for datatable orderable
    var $column_search = array('product.name', 'product.description', 'product.total_quantity', 'product.rem_quantity', 'product.price', 'product.pieces', 'category.name', 'category.description', 'seller.shop_name'); //set column field database for datatable searchable 
    var $order = array('product.id' => 'asc'); // default order 


    private function _get_datatables_query()
    {

        if ($this->input->post('category') !== 'all') {
            $this->db->where('product.category_id', $this->input->post('category'));
        }
        if ($this->input->post('sub_category') !== 'all') {
            $this->db->where('product.sub_category_id', intval($this->input->post('sub_category')));
        }

        $this->db->where('product.is_delete', 0);
        $this->db->select('product.id, product.sub_category_id, product.name as product_name, product.description, product.image_url,  product.total_quantity, product.rem_quantity, product.price,product.pieces, product.uom_unit, product.mrp, category.id as category_id, category.name as category_name, category.description as category_description, seller.id as seller_id, seller.shop_name,  uom.id as uom, uom.name as uom_name', false);
        $this->db->from($this->table);
        $this->db->join('sss_category as category', 'product.category_id = category.id ', 'left');
        $this->db->join('sss_seller as seller', 'product.seller_id  = seller.id ', 'inner');
        $this->db->join('sss_uom as uom', 'uom.id = product.uom ', 'left');


        $i = 0;
        foreach ($this->column_search as $item) // loop column 
        {

            if ($_POST['search']['value']) // if datatable send POST for search
            {
                if ($i === 0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if (count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }

        if (isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    public function get_datatables()
    {
        $this->_get_datatables_query();
        if ($_POST['length'] != -1)
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

    public function load_checkbox_btns($id)
    {
        $checkbox = '<div class="skin skin-flat"><fieldset><input type="checkbox" ';
        $checkbox .= 'data-internalid="';
        $checkbox    .= $id;
        $checkbox    .= '"';
        $checkbox .= 'name="input-15" class="child-checkbox-flatclass" ></fieldset></div>';

        return $checkbox;
    }

    public function load_product_name($obj)
    {
        //More Details
        $data = '<p>' . $obj->product_name . '</p>';
        $data .= '<a href="';
        $data .= base_url() . 'Product/product_details/' . $obj->id;
        $data .= '" class="card-link" style="display:block; margin-bottom:8px;">More Details &#8594;<i class="fa fa-angle-right"></i></a>';

        return $data;
    }

    public function load_category($category)
    {
        $btn  = '<button type="button" class="btn btn-sm btn-outline-info round">';
        $btn .= $category;
        $btn .= '</button>';

        return $btn;
    }

    public function load_pieces($uom_unit, $uom_name, $price)
    {
        $btn = '<p class="badge badge-warning" style="font-weight: 600;font-size: 1rem;">';
        $btn .= $uom_unit . ' ' . $uom_name . ' - ₹' . $price;
        $btn .= '</p>';
        return $btn;
    }

    public function load_mrp($mrp)
    {
        $data = '<del class="grey" style="font-weight:800;">₹';
        $data .= $mrp;
        $data .= '</del>';
        return $data;
    }

    public function load_discount($mrp, $price)
    {
        $discount = 0;
        if ($price < $mrp) {
            $price_diff = $mrp - $price;
            $discount = ($price_diff / $mrp) * 100;

            $data = '<label style="font-weight: 800; color: #f44336;">' . number_format((float) $discount, 2, '.', '') . '</label>';
            $data .= '<img src="' . base_url() . 'assets/theme/images/discount.svg" style="width:30px; margin-left:5px;">';
        } else {
            $data = '<label style="font-weight: 800; color: #f44336;"> No Offer</label>';
        }



        return $data;
    }

    public function load_remaining_stock($stock, $uom)
    {
        $btn = '<span class="badge badge badge-';
        if ($stock <= 10) :
            $btn .= 'warning';
            $data = 'Few left';
        elseif ($stock <= 0) :
            $btn .= 'danger';
            $data = 'Few left';
        else :
            $btn .= 'success';
            $data = 'In stock';
        endif;
        $btn .= ' badge-glow badge-pill">';
        $btn .= $data;
        $btn .= '</span>';

        return $btn;
    }


    public function load_addcart_btns($id)
    {

        $btn = '<div class="input-group" style="width:120px;margin-right:0;">
                <input type="text" class="form-control" value="1" name="item-qty" maxlength="4">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button" onclick="addToCart(';
        $btn .= $id;
        $btn .= ',this)"><i class="ficon ft-shopping-cart"></i></button>
                </div>
            </div>';

        return $btn;
    }

    public function load_product_image($image)
    {
        $img = '<img src="';
        $img .= $image['image_path'];
        $img .= '" alt="Product Image" style="width: 60px;height: auto;" data-action="zoom">';

        return $img;
    }

    public function load_offer_price($price)
    {
        // $data = '<div class="badge badge-glow badge-pill badge-border border-success success text-center">₹'.$price.'</div>';
        $data = '<img style="width:35px;" src="' . base_url() . 'assets/theme/images/price.svg">';
        $data .= '<div style="display:inline-block; margin-left:5px"><b>₹' . $price . '</b></div>';

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

        //Unit
        $data .= '<h6 class="prod-name" style="margin-bottom:0;"><b>Unit : </b>';
        $data .= '<p class="badge badge-warning" style="font-weight: 600;font-size: 1rem;">';
        $data .= $obj->uom_unit . ' ' . $obj->uom_name . ' - ₹' . $obj->price;
        $data .= '</p></h6>';

        //Discount
        $discount = 0;
        if ($obj->price < $obj->mrp) {
            $price_diff = $obj->mrp - $obj->price;
            $discount = ($price_diff / $obj->mrp) * 100;

            $data .= '<h6 class="prod-name"><b>Discount : </b>';
            $data .= '<label style="font-weight: 800; color: #f44336;">' . number_format((float) $discount, 2, '.', '') . '</label>';
            $data .= '<img src="' . base_url() . 'assets/theme/images/discount.svg" style="width:30px; margin-left:5px;">';
        } else {
            $data .= '<label style="font-weight: 800; color: #f44336;"> No Offer</label>';
        }
        $data .= '</h6>';

        //MRP
        $data .= '<h6 class="prod-name" ><p class="prod-price" style="margin-bottom:0;">
                        <b>MRP : <del class="grey">₹';
        $data .= $obj->mrp;
        $data .= '</del></b>
                    </p></h6>';

        //Offer Price
        $data .= '<p class="prod-price mb-prod" style="margin-top: -6px;">
         <h6 class="prod-name"><b>Offer Price';
        $data .= ': <span style="font-size:20px">₹' . $obj->price;
        $data .= '</span></b> </h6>
         </p>';

        //Stock Availability
        $data .= '<h6 class="prod-name"><b>Availability : </b>';
        $data .= '<span class="badge badge badge-';
        if ($obj->rem_quantity <= 10) :
            $data .= 'warning';
            $stock_data = 'Few left';
        elseif ($obj->rem_quantity <= 0) :
            $data .= 'danger';
            $stock_data = 'Few left';
        else :
            $data .= 'success';
            $stock_data = 'In stock';
        endif;
        $data .= ' badge-glow badge-pill">';
        $data .= $stock_data;
        $data .= '</span></h6>';

        //More Details
        $data .= '<a href="';
        $data .= base_url() . 'Product/product_details/' . $obj->id;
        $data .= '" class="card-link" style="display:block; margin-bottom:8px;">Product Details &#8594;<i class="fa fa-angle-right"></i></a>';

        //Add to Cart
        $data .= '<div class="input-group" style="width:150px;margin-right:0;">
        <input type="text" class="form-control" value="1" name="item-qty" maxlength="4">
        <div class="input-group-append">
            <button class="btn btn-primary" type="button" onclick="addToCart(';
        $data .= $obj->id;
        $data .= ',this)">Add <i class="ficon ft-shopping-cart"></i></button>
        </div>
        </div>';

        return $data;
    }
}
