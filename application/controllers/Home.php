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
		$data_grafik_prodi = $this->M_dokumen->get_grafik_prodi();
		$data_grafik1 = $this->M_dokumen->get_grafik_standar1();
		$data_grafik2 = $this->M_dokumen->get_grafik_standar2();
		$data_grafik3 = $this->M_dokumen->get_grafik_standar3();
		$data_grafik4 = $this->M_dokumen->get_grafik_standar4();
		$data_grafik5 = $this->M_dokumen->get_grafik_standar5();
		$data_grafik6 = $this->M_dokumen->get_grafik_standar6();
		$data_grafik7 = $this->M_dokumen->get_grafik_standar7();
		$data_grafik8 = $this->M_dokumen->get_grafik_standar8();
		$data_grafik9 = $this->M_dokumen->get_grafik_standar9();
		$data_grafik10 = $this->M_dokumen->get_grafik_standar10();
		$dataHalaman = array(
			'pagea'	=> "beranda",
			'da' => $kue,
			'query'   => $query,
			'tampil_kategori'=>$tampil_kategori,
			'data_grafik_prodi'=>$data_grafik_prodi,
			'data_grafik1'=>$data_grafik1,
			'data_grafik2'=>$data_grafik2,
			'data_grafik3'=>$data_grafik3,
			'data_grafik4'=>$data_grafik4,
			'data_grafik5'=>$data_grafik5,
			'data_grafik6'=>$data_grafik6,
			'data_grafik7'=>$data_grafik7,
			'data_grafik8'=>$data_grafik8,
			'data_grafik9'=>$data_grafik9,
			'data_grafik10'=>$data_grafik10
		);

		$this->load->view('dashboard/v_header',$dataHalaman);
		$this->load->view('dashboard/v_home');
		$this->load->view('dashboard/v_footer2', $dataHalaman);
	}
}