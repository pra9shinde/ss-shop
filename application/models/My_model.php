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

		public function get_last_id($table,$primary_key)
		{
			$this->db->select("*");
			$this->db->from($table);
			$this->db->limit(1);
			$this->db->order_by($primary_key,"DESC");
			$query = $this->db->get();
			$result_arr = $query->result_array();
			$last_id = count($result_arr) > 0 ? $result_arr[0][$primary_key] : 0;
	

			return $last_id;
		}

		public function get_column_sum($table,$column,$where = array())
		{
			$this->db->where($where);
			$this->db->select('SUM('.$column.') AS total', FALSE);
			$query = $this->db->get($table);
			return $query->result_array();
		}
		
  }

?>