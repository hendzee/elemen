<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Elemen_controller extends CI_Controller {

	public function index()
	{
		$data_team = array("data_team" => $this->Elemen_model->selectAll("team"));
		$data_layanan = array("data_layanan" => $this->Elemen_model->selectAll("layanan"));
		$send_portfolio = array("data_portfolio" => $this->Elemen_model->selectJoinLim("portfolio", "kategori", "id_kategori"),
			"nav_portfolio" => $this->Elemen_model->selectJoinDistc("portfolio", "kategori", "id_kategori, nama_kategori", "id_kategori")
			);

		$this->load->view("header");
	  $this->load->view("navigation");
	  $this->load->view("home");
	  $this->load->view("work", $data_layanan);
	  $this->load->view("about");
	  $this->load->view("team", $data_team);
	  $this->load->view("portfolio", $send_portfolio);
	  $this->load->view("price");
	  $this->load->view("contact");
	  $this->load->view("footer");
		//$this->load->view('welcome_message');
	}
}
