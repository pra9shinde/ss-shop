<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Sub_Category_DT extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    var $table = 'sss_sub_category as sub_cat';
    var $column_order = array('sub_cat.id', 'cat.name', 'sub_cat.name', 'sub_cat.description'); //set column field database for datatable orderable
    var $column_search = array('cat.name', 'sub_cat.name', 'sub_cat.description'); //set column field database for datatable searchable 
    var $order = array('sub_cat.id' => 'asc'); // default order 


    private function _get_datatables_query()
    {

        if ($this->input->post('category') !== 'all') {
            $this->db->where('cat.name', $this->input->post('category'));
        }

        $this->db->select('sub_cat.id, sub_cat.category_id, cat.name as category_name, sub_cat.name as sub_cat_name, sub_cat.description as sub_cat_desc', false);
        $this->db->from($this->table);
        $this->db->join('sss_category as cat', 'sub_cat.category_id = cat.id ', 'inner');

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



    public function load_data($obj)
    {
        $data  = '<h6 class="prod-name mb-prod"><b>Category Name : </b>' . $obj->category_name . '</h6>';
        $data .= '<h6 class="prod-name mb-prod"><b>Sub Category Name : </b>' . $obj->sub_cat_name . '</h6>';
        $data .= '<h6 class="prod-name mb-prod"><b>Description : </b>' . $obj->sub_cat_desc . '</h6>';

        //Buttons
        $data .= '<div class="btn-group" role="group" aria-label="Second Group">';
        $data .= '<button type="button" data-toggle="modal" class="btn btn-icon btn-warning" onclick=\'editSubCategory(';
        $data .= json_encode($obj);
        $data .= ')\'><i class="la la-edit"></i></button>';
        $data .= '<button type="button" class="btn btn-icon btn-danger" onclick=\'deleteSubCategory(';
        $data .= json_encode($obj);
        $data .= ')\'><i class="la la-trash"></i></button></div>';

        return $data;
    }
}
