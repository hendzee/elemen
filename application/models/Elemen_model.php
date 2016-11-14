<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Elemen_model extends CI_Model {

	public function selectAll($table){
    $data = $this->db->query("SELECT * FROM $table");

    return $data->result_array();
  }

	public function selectJoinLim($table_1, $table_2, $where){
		$data = $this->db->query("SELECT * FROM $table_1 RIGHT JOIN $table_2 USING($where)");

    return $data->result_array();
	}

	public function selectJoinDistc($table_1, $table_2, $data, $where){
		$data = $this->db->query("SELECT DISTINCT $data  FROM $table_1 RIGHT JOIN $table_2 USING($where)");

    return $data->result_array();
	}
}
