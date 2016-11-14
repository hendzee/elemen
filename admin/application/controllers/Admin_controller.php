<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends CI_Controller {

	public function index()
	{
		$this->login_page();
	}

	//login page
	public function login_page(){
		if($this->session->has_userdata("id_user")){
			$this->admin_page();
		}else{
			$this->load->view("login_header");
			$this->load->view("login_body");
		}
	}

	//check validation admin user
	public function login_process(){
		$email = $this->input->post("email");
		$password = md5($this->input->post("password"));

		$valid = $this->Admin_model->login_process("team", $email, $password);

		if($valid > 0){
			$this->admin_page();
		}else{
			$this->login_page();
		}
	}

	//main page admnin
	public function admin_page(){
		if($this->session->has_userdata("id_user")){
			$this->load->view("header");
			$this->load->view("main_header");
			$this->load->view("main_sidebar");
			$this->load->view("content_wrapper");
			$this->load->view("main_footer");
			$this->load->view("control_sidebar");
			$this->load->view("footer");
		}else{
			$this->page_404();
		}
	}

	//logout
	public function logout(){
		$this->session->unset_userdata("id_user");
		$this->login_page();
	}

	//404 page
	public function page_404(){
		$this->load->view("page_404");
	}

	//content on admin page
	public function get_content($content){
		$this->Admin_model->get_content($content);
	}

	//content for update page or have data
	public function get_content_update($content, $table, $where, $id){
		$this->Admin_model->get_content_update($content, $table, $where, $id);
	}

	//create new user admin
	public function add_admin(){
		$image = "foto";
		$id_user = $this->Admin_model->get_id();
		$nama_dpn = $this->input->post('nama_dpn');
		$nama_blk = $this->input->post('nama_blk');
		$jabatan = $this->input->post('jabatan');
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));
		$user_fb = $this->input->post('facebook');
		$user_twit = $this->input->post('twitter');
		$user_goog = $this->input->post('google');
		$image_name = $this->Admin_model->insert_image($image);

		$table = "team";
		$data = array("id_user" => $id_user,
			"nama_dpn" => $nama_dpn,
			"nama_blk" => $nama_blk,
			"jabatan" => $jabatan,
			"email" => $email,
			"password" => $password,
			"user_fb" => $user_fb,
			"user_twit" => $user_twit,
			"user_goog" => $user_goog,
			"foto" => $image_name
		);

		if($this->Admin_model->add_data($table, $data) > 0){
				$this->Admin_model->get_content("add_admin");
		}
	}

	//update data admin
	public function update_admin(){
		$id_user = $this->input->post('id_user');
		$where = array("id_user" => $id_user);
		$nama_dpn = $this->input->post('nama_dpn');
		$nama_blk = $this->input->post('nama_blk');
		$jabatan = $this->input->post('jabatan');
		$email = $this->input->post('email');
		$user_fb = $this->input->post('facebook');
		$user_twit = $this->input->post('twitter');
		$user_goog = $this->input->post('google');

		$table = "team";
		$data = array("nama_dpn" => $nama_dpn,
			"nama_blk" => $nama_blk,
			"jabatan" => $jabatan,
			"email" => $email,
			"user_fb" => $user_fb,
			"user_twit" => $user_twit,
			"user_goog" => $user_goog
		);

		$result = $this->Admin_model->update_data($table, $data, $where);

		if($result > 0){
			$this->get_content_update("edit_admin", $table, "id_user", $id_user);
		}else{
			echo "<h1>failed</h1>";
		}
	}

	//delete admin from database
	public function delete_admin($id_user){
		$data = array("id_user" => $id_user );
		$this->Admin_model->delete_admin($data);
	}
}
