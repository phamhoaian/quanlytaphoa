<?php

defined('BASEPATH') or exit('No direct script access allowed');

class MY_Model extends CI_Model {

	private $table;

	public function __construct() {
		parent::__construct();

		$this->set_table();
	}

	public function set_table($table='') {
		if($table)
		{
			$this->table =$table;
		}
		else
		{
			$this->table = preg_replace('/_[a-z0-9]+$/', '', strtolower(get_class($this)));
		}
	}

	public function get_table() {
		return $this->table;
	}
	
	public function get_all($where = NULL, $order_by = '', $limit = 0, $offset = 0) {
		if ($where)	$this->db->where($where);

		if (!empty($order_by))
			$this->db->order_by($order_by);

		if (is_int($limit) && $limit > 0)
			$this->db->limit($limit, $offset);

		$query = $this->db->get($this->get_table());

		return $query->result_array();
	}

	public function get_row($where = NULL, $order_by = '') {
		if ($where)	$this->db->where($where);

		if (!empty($order_by))
			$this->db->order_by($order_by);

		$this->db->limit(1);

		$query = $this->db->get($this->get_table());

		$result = $query->result_array();

		return (count($result) == 1) ? $result[0] : FALSE;
	}

	public function like($where = NULL, $like = NULL, $order_by = '', $limit = 0, $offset = 0) {
		if ($where)	$this->db->where($where);

		if (is_array($like) && count($like) > 0) {
			foreach ($like as $key => $val) {
				if (!is_array($val))
					$this->db->like($key, $val);
				else
					foreach ($val as $myval)
						$this->db->like($key, $myval);
			}
		}

		if (!empty($order_by))
			$this->db->order_by($order_by);

		if (is_int($limit) && $limit > 0)
			$this->db->limit($limit, $offset);

		$query = $this->db->get($this->get_table());

		return $query->result_array();
	}

	public function insert($data) {
		$this->db->set($data);

		$this->db->insert($this->get_table());

		return $this->db->insert_id();
	}

	public function update($data, $where = NULL, $limit = 0) {
		if ($where)	$this->db->where($where);

		if (is_int($limit) && $limit > 0)
			$this->db->limit($limit);

		$this->db->set($data);

		$this->db->update($this->get_table());

		return $this->db->affected_rows();
	}

	public function delete($where = NULL, $limit = 0) {
		if ($where)	$this->db->where($where);

		if (is_int($limit) && $limit > 0)
			$this->db->limit($limit);

		$this->db->delete($this->get_table());

		return $this->db->affected_rows();
	}

	public function get_count($where = NULL, $like = NULL) {
		if ($where)	$this->db->where($where);

		if (is_array($like) && count($like) > 0) {
			foreach ($like as $key => $val) {
				if (!is_array($val))
					$this->db->like($key, $val);
				else
					foreach ($val as $myval)
						$this->db->like($key, $myval);
			}
		}

		return $this->db->count_all_results($this->get_table());
	}

	public function get_max($column = 'id', $where = NULL) {
		if ($where)	$this->db->where($where);

		$this->db->select_max($column);

		$query = $this->db->get($this->get_table());

		$result = $query->result_array();

		return isset($result[0][$column]) ? $result[0][$column] : 0;
	}

}
