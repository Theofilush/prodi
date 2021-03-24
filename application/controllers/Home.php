<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(site_url("login"));
		}
	}
	
	public function index()
	{
		$usan = $this->session->userdata('nama');
		$kue = $this->M_login->hak_ak($usan);
		$query = $this->M_dokumen->get_dokumen();
		$tampil_kategori = $this->M_dokumen->tampil_kategori();
		$data_jumdok = $this->M_dokumen->get_data_jumdok();
		$dataHalaman = array(
			'pagea'	=> "beranda",
			'da' => $kue,
			'query'   => $query,
			'tampil_kategori'=>$tampil_kategori,
			'data_jumdok'=>$data_jumdok
		);

		$this->load->view('dashboard/v_header',$dataHalaman);
		$this->load->view('dashboard/v_home');
		$this->load->view('dashboard/v_footer2');
	}
}