<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class My_model extends CI_Model {

		public function __construct() {
			parent::__construct();
			$this->load->database();
		}
		
		public function get($table,$conditions = array())
		{
			if(!empty($conditions)){
				$this->db->where($conditions);
			}
			$result = $this->db->get($table);
      return $result->result_array();
		}

		public function insert($table,$values)
		{
			$this->db->insert($table, $values);
			return ($this->db->affected_rows() > 0) ? true : false;
		}

		public function update($table,$where_array,$update_array)
		{
			$this->db->where($where_array);
			$this->db->update($table, $update_array);

			return ($this->db->affected_rows() > 0) ? true : false;
		}

		public function delete($table,$where)
		{
			$this->db->where($where);
			$this->db->delete($table);
			
			return ($this->db->affected_rows() > 0) ? true : false;
		}

		public function get_total_count($table,$condition = array())
		{
			return $this->db
       ->where($condition)
			 ->count_all_results($table); 
		}

		
  }

?>