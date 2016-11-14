<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	//select all data
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

	public function login_process($table, $email, $password){
		$query = $this->db->query("SELECT id_user FROM $table WHERE email='$email' AND password = '$password'");
		$result = $query->num_rows();
		$valid = 0;

		if($result > 0){
				foreach ($query->result_array() as $val) {
					$this->session->set_userdata(array("id_user"=>$val['id_user']));
				}
				$valid = 1;
		}

		return $valid;
	}

	//get content function
	public function get_content($content){
		switch ($content) {
			case "dashboard":
				$this->load->view("dashboard");
				break;

			case "add_admin":
				$this->load->view("add_admin");
				break;

			case "list_admin":
				$data = array("data"=>$this->selectAll("team"));
				$this->load->view("list_admin", $data);
				break;

			default:
				$this->load->view("dashboard");
				break;
		}
	}

	//content for update mode or need data
	public function get_content_update($content, $table, $where, $id){
		switch ($content) {
			case "edit_admin":
				$query = $this->db->query("SELECT * FROM $table WHERE $where='$id'");
				$data = array("data"=>$query->result_array());
				$this->load->view("edit_admin", $data);
				break;

			default:
				# code...
				break;
		}
	}

	//update data
	public function update_data($table, $data, $where){
		$result = $this->db->update($table, $data, $where);

		return $result;
	}

	public function get_id(){
		$create_id = "";

		do{
			$create_id = "00".rand(1, 100);
			$query = $this->db->query("SELECT id_user FROM team WHERE id_user='$create_id'");
			$num_row = $query->num_rows();

			if($num_row < 1){
				break;
			}
		}while(true);

		return $create_id;
	}

	public function insert_image($image){
		$data_name = "default.png";

		$config = array("overwrite" => "false",
			"upload_path" => "../assets/images/",
			"allowed_types" => "png|gif|jpg|jpeg",
			"max_size" => "100");

		$this->load->library("upload", $config);

		if($this->upload->do_upload($image)){
			$data = $this->upload->data();
			$data_name = $data["raw_name"].$data["file_ext"];
		}

		return $data_name;
	}

	public function add_data($table, $data){
		$result = $this->db->insert($table, $data);

		return $result;
	}

	//delete admin
	public function delete_admin($data){
		$this->db->delete("team", $data);

		$this->get_content("list_admin");
	}
}
