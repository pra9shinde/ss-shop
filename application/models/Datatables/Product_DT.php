<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Product_DT extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    var $table = 'sss_products as product';
    var $column_order = array('product.id', 'product.name', 'category.name', 'product.quantity', 'product.rem_quantity', 'product.price', 'product.pieces', 'product.mrp', 'taxes.percentage'); //set column field database for datatable orderable
    var $column_search = array('product.name', 'category.name', 'product.quantity', 'product.rem_quantity', 'product.price', 'product.pieces', 'product.mrp', 'taxes.percentage'); //set column field database for datatable searchable 
    var $order = array('product.id' => 'asc'); // default order 


    private function _get_datatables_query()
    {
        //If the user is logged in via social network
        if ($_SESSION['seller']['source'] !== 'mobile') {
            $user_data = $this->My_model->get('sss_buyer', array('login_oauth_uid' => $_SESSION['seller']['login_oauth_uid']));
            $id = $user_data[0]['id'];
        } else {
            $id = $_SESSION['seller']['id'];
        }

        $this->db->where('product.seller_id ', $id);
        $this->db->where('product.is_delete', 0);
        $this->db->select('product.id, product.name as product_name, category.name as category_name, product.category_id, product.sub_category_id, product.description, product.image_url, product.total_quantity, product.rem_quantity, product.price, product.pieces, product.uom_unit, product.mrp, product.tax as tax_id, sub_category.name as sub_category_name, taxes.percentage as tax, uom.id as uom, uom.name as uom_name', false);
        $this->db->from($this->table);
        $this->db->join('sss_category as category', 'product.category_id = category.id ', 'inner');
        $this->db->join('sss_sub_category as sub_category', 'sub_category.id = product.sub_category_id ', 'left');
        $this->db->join('sss_tax as taxes', 'product.tax = taxes.id ', 'left');
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

    public function load_data($obj)
    {
        //Image
        $data = '
          <div class="tb-prod-details">
            <div class="prod-image">';
        $data .= '<img src="' . base_url() . $obj->image_url . '" alt="Product Image" style="height:50px;"  data-action="zoom">
            </div>';

        //Name
        $data .= '<h6 class="prod-name mb-prod"><b>Name : </b>' . $obj->product_name . '</h6>';

        //Description
        $data .= '<h6 class="prod-desc mb-prod"><b>Description :</b>' . $obj->product_name . '</h6>';

        //Category
        $data .= '<h6 class="prod-desc mb-prod"><b>Category :</b>' . $obj->category_name . '</h6>';

        //Sub Category
        $data .= '<h6 class="prod-desc mb-prod"><b>Sub-Category :</b>' . $obj->sub_category_name . '</h6>';

        //Rem Stock
        $data .= '<h6 class="prod-desc mb-prod"><b>In Stock :</b>' . $obj->rem_quantity . '</h6>';

        //Price Excld. tax
        $data .= '<h6 class="prod-desc mb-prod"><b>Price(Excl. Tax) :</b>₹' . $obj->price . '</h6>';

        //Mrp
        $data .= '<h6 class="prod-desc mb-prod"><b>MRP :</b>₹' . $obj->mrp . '</h6>';

        //Tax(%)
        $data .= '<h6 class="prod-desc mb-prod"><b>TAX(%) :</b>' . $obj->tax . '%</h6>';

        //UOM
        $data .= '<h6 class="prod-desc mb-prod"><b>UOM :</b>' . $obj->uom_unit . ' ' . $obj->uom_name . '</h6>';

        //Pieces
        $data .= '<h6 class="prod-desc mb-prod"><b>Pieces :</b>' . $obj->pieces . '</h6>';

        //Buttons
        $data .= '<div class="btn-group" role="group" aria-label="Second Group">';
        $data .= '<button type="button" data-toggle="modal" class="btn btn-icon btn-warning" onclick=\'editProduct(';
        $data .= json_encode($obj);
        $data .= ')\'><i class="la la-edit"></i></button>';
        $data .= '<button type="button" class="btn btn-icon btn-danger" onclick="deleteProduct(';
        $data .= $obj->id;
        $data .= ')"><i class="la la-trash"></i></button></div>';


        $data .= '</div>';

        return $data;
    }
}
